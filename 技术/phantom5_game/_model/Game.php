<?php
/**
 * 游戏
 * @author Shines
 */
class Game
{
	public function __construct()
	{
	}
	
	public function getTodayScore($fbid)
	{
		Config::$db->connect();
		$sqlFbid = Security::varSql($fbid);
		$tbDaily = Config::$tbDaily;
		Config::$db->query("select * from $tbDaily where fbid=$sqlFbid order by id desc");
		$res = Config::$db->getRow();
		if (!empty($res))
		{
			$playDate = Utils::mdate('Y-m-d', $res['playtime']);
			$today = Utils::mdate('Y-m-d');
			if ($playDate == $today)
			{
				return $res['score'];
			}
			else
			{
				return 0;
			}
		}
		else
		{
			return 0;
		}
	}
	
	public function checkPlayed($fbid)
	{
		$personal = $this->getPersonal($fbid);
		if (Config::$configType == 5)
		{
			//肯尼亚，总共只能玩一次
			return $personal['isplayed'] == 1 ? true : false;
		}
		else
		{
			//埃及，一天玩一次
			if (!empty($personal))
			{
				$playDate = Utils::mdate('Y-m-d', $personal['lastplay']);
				$today = Utils::mdate('Y-m-d');
				if ($playDate == $today)
				{
					return true;
				}
				else
				{
					return false;
				}
			}
			else
			{
				return false;
			}
		}
	}
	
	public function addScore($fbid, $score)
	{
		Config::$db->connect();
		$sqlFbid = Security::varSql($fbid);
		$score = (int)$score;
		$restLucky = (int)($score / Config::$chanceScore);
		$sqlTime = Security::varSql(Utils::mdate('Y-m-d H:i:s'));
		$sqlIp = Security::varSql(Utils::getClientIp());
		$tbUser = Config::$tbUser;
		$tbDaily = Config::$tbDaily;
		Config::$db->query("update $tbUser set dailyscore=dailyscore+$score, totalscore=dailyscore+friendscore, lastplay=$sqlTime, restLucky=restLucky+$restLucky, isplayed=1 where fbid=$sqlFbid");
		Config::$db->query("insert into $tbDaily (fbid, playtime, ip, score) values ($sqlFbid, $sqlTime, $sqlIp, $score)");
	}
	
	public function getPersonal($fbid)
	{
		Config::$db->connect();
		$sqlFbid = Security::varSql($fbid);
		$tbUser = Config::$tbUser;
		Config::$db->query("select * from $tbUser where fbid=$sqlFbid");
		return Config::$db->getRow();
	}
	
	public function getDaily($fbid, $page)
	{
		Config::$db->connect();
		$page = (int)$page;
		if ($page < 1)
		{
			$page = 1;
		}
		$pagesize = Config::$dailyPagesize;
		$from = ($page - 1) * $pagesize;
		$sqlFbid = Security::varSql($fbid);
		$tbDaily = Config::$tbDaily;
		Config::$db->query("select * from $tbDaily where fbid=$sqlFbid order by id desc limit $from, $pagesize");
		return Config::$db->getAllRows();
	}
	
	public function getDailyCount($fbid)
	{
		Config::$db->connect();
		$sqlFbid = Security::varSql($fbid);
		$tbDaily = Config::$tbDaily;
		Config::$db->query("select count(*) as num from $tbDaily where fbid=$sqlFbid");
		$res = Config::$db->getRow();
		if (!empty($res))
		{
			return (int)$res['num'];
		}
		else
		{
			return 0;
		}
	}
	
	public function getRank($fbid, $page)
	{
		Config::$db->connect();
		$page = (int)$page;
		if ($page < 1)
		{
			$page = 1;
		}
		$pagesize = Config::$rankPagesize;
		$from = ($page - 1) * $pagesize;
		$tbUser = Config::$tbUser;
		Config::$db->query("select * from $tbUser order by totalscore desc limit $from, $pagesize");
		$res = Config::$db->getAllRows();
		$index = 1;
		foreach ($res as $key => $value)
		{
			$res[$key]['rank'] = ($page - 1) * $pagesize + $index;
			if ($fbid == $value['fbid'])
			{
				$res[$key]['isSelf'] = true;
			}
			else
			{
				$res[$key]['isSelf'] = false;
			}
			$index++;
		}
		return $res;
	}
	
	public function getRankCount()
	{
		Config::$db->connect();
		$tbUser = Config::$tbUser;
		Config::$db->query("select count(*) as num from $tbUser");
		$res = Config::$db->getRow();
		if (!empty($res))
		{
			return (int)$res['num'];
		}
		else
		{
			return 0;
		}
	}
	
	/**
	 * 检测用户是否存在
	 */
	public function existUser($fbid)
	{
		Config::$db->connect();
		$tbUser = Config::$tbUser;
		$sqlFbid = Security::varSql($fbid);
		Config::$db->query("select id from $tbUser where fbid=$sqlFbid");
		$res = Config::$db->getRow();
		if (empty($res))
		{
			return false;
		}
		else
		{
			return true;
		}
	}
	
	/**
	 * 添加用户
	 */
	public function addUser($fbid, $userProfile, $shareId)
	{
		Config::$db->connect();
		$tbUser = Config::$tbUser;
		$username = isset($userProfile['name']) ? $userProfile['name'] : '';
		if (Config::$isFb)
		{
			$photo = 'https://graph.facebook.com/' . $fbid . '/picture?width=330&height=330';
		}
		else
		{
			$photo = isset($userProfile['photo']) ? $userProfile['photo'] : '';
		}
		
		/*
		//将facebook头像存储到服务器本地
		$content = @file_get_contents($photo);
		$localphoto = Config::$uploadsDir . 'fb_' . $fbid . '.jpg';
		$file = fopen($localphoto, 'w');
		fwrite($file, $content);
		fclose($file);
		*/
		
		$email = isset($userProfile['email']) ? $userProfile['email'] : '';
		$gender = isset($userProfile['gender']) ? $userProfile['gender'] : '';
		$regtime = Utils::mdate('Y-m-d H:i:s');
		switch (Config::$deviceType)
		{
			case 'mobile':
				$logintype = 2;
				break;
			default:
				$logintype = 1;
		}
		$localphoto = '';
		$ip = Utils::getClientIp();
		
		$sqlFbid = Security::varSql($fbid);
		$sqlUsername = Security::varSql($username);
		$sqlPhoto = Security::varSql($photo);
		$sqlEmail = Security::varSql($email);
		$sqlGender = Security::varSql($gender);
		$sqlRegtime = Security::varSql($regtime);
		$sqlLogintype = (int)$logintype;
		$sqlLocalphoto = Security::varSql($localphoto);
		$sqlIp = Security::varSql($ip);
		$sqlInviteScore = Config::$inviteScore;
		$sqlShareId = Security::varSql($shareId);
		
		if (!empty($shareId) && $this->existUser($shareId))
		{
			Config::$db->query("insert into $tbUser (fbid, username, photo, email, gender, regtime, logintype, localphoto, ip, totalscore, dailyscore, friendscore, isinvite, restLucky, isshared, isplayed) values ($sqlFbid, $sqlUsername, $sqlPhoto, $sqlEmail, $sqlGender, $sqlRegtime, $sqlLogintype, $sqlLocalphoto, $sqlIp, $sqlInviteScore, 0, $sqlInviteScore, 1, 0, 0, 0)");
			Config::$db->query("update $tbUser set friendscore=friendscore+$sqlInviteScore, totalscore=dailyscore+friendscore where fbid=$sqlShareId");
		}
		else
		{
			Config::$db->query("insert into $tbUser (fbid, username, photo, email, gender, regtime, logintype, localphoto, ip, totalscore, dailyscore, friendscore, isinvite, restLucky, isshared, isplayed) values ($sqlFbid, $sqlUsername, $sqlPhoto, $sqlEmail, $sqlGender, $sqlRegtime, $sqlLogintype, $sqlLocalphoto, $sqlIp, $sqlInviteScore, 0, $sqlInviteScore, 0, 0, 0, 0)");
		}
	}
	
	public function getUserByPage($page, $pagesize)
	{
		Config::$db->connect();
		$page = (int)$page;
		$pagesize = (int)$pagesize;
		if ($page < 1)
		{
			$page = 1;
		}
		$from = ($page - 1) * $pagesize;
		$tbUser = Config::$tbUser;
		Config::$db->query("select * from $tbUser order by id limit $from, $pagesize");
		return Config::$db->getAllRows();
	}
	
	public function getAdminRank($page, $pagesize)
	{
		Config::$db->connect();
		$page = (int)$page;
		$pagesize = (int)$pagesize;
		if ($page < 1)
		{
			$page = 1;
		}
		$from = ($page - 1) * $pagesize;
		$tbUser = Config::$tbUser;
		Config::$db->query("select * from $tbUser order by totalscore desc limit $from, $pagesize");
		$res = Config::$db->getAllRows();
		$index = 1;
		$indexOffset = ($page - 1) * $pagesize;
		foreach ($res as $key => $value)
		{
			$res[$key]['rank'] = $index + $indexOffset;
			$index++;
		}
		return $res;
	}
	
	public function countUser()
	{
		Config::$db->connect();
		$tbUser = Config::$tbUser;
		Config::$db->query("select count(*) as num from $tbUser");
		$res = Config::$db->getRow();
		if (empty($res))
		{
			return 0;
		}
		else
		{
			return $res['num'];
		}
	}
	
	public function getAllDaily()
	{
		Config::$db->connect();
		$tbDaily = Config::$tbDaily;
		Config::$db->query("select * from $tbDaily order by id");
		return Config::$db->getAllRows();
	}
	
	/**
	 * 导出用户数据到Excel
	 */
	public function exportUser()
	{
		@ini_set('memory_limit', '512M');
		require_once('extends/PHPExcel_1.8.0/PHPExcel.php');
		$excel = new PHPExcel();
		//设置文件的详细信息
		$excel->getProperties()->setCreator("Administrators")
			->setLastModifiedBy("Administrators")
			->setTitle("Data")
			->setSubject("")
			->setDescription("")
			->setKeywords("")
			->setCategory("");
		
		//操作第一个工作表
		$excel->setActiveSheetIndex(0);
		//设置工作薄名称
		$excel->getActiveSheet()->setTitle('Data');
		//设置默认字体和大小
		$excel->getDefaultStyle()->getFont()->setName('Times New Roman');
		$excel->getDefaultStyle()->getFont()->setSize(14);
		
		//设置列宽度
		$excel->getActiveSheet()->getColumnDimension('A')->setWidth(25);
		$excel->getActiveSheet()->getColumnDimension('B')->setWidth(8);
		$excel->getActiveSheet()->getColumnDimension('C')->setWidth(40);
		$excel->getActiveSheet()->getColumnDimension('D')->setWidth(19);
		$excel->getActiveSheet()->getColumnDimension('E')->setWidth(12);
		$excel->getActiveSheet()->getColumnDimension('F')->setWidth(12);
		
		/*
		//设置行高度
		$excel->getActiveSheet()->getRowDimension('1')->setRowHeight(40);
		$excel->getActiveSheet()->getRowDimension('2')->setRowHeight(169);
		$excel->getActiveSheet()->getRowDimension('3')->setRowHeight(60);
		*/
		
		//设置水平居中
		$excel->getActiveSheet()->getStyle('A')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$excel->getActiveSheet()->getStyle('B')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$excel->getActiveSheet()->getStyle('C')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$excel->getActiveSheet()->getStyle('D')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$excel->getActiveSheet()->getStyle('E')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$excel->getActiveSheet()->getStyle('F')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		
		//设置垂直居中
		$excel->getActiveSheet()->getStyle('A')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
		$excel->getActiveSheet()->getStyle('B')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
		$excel->getActiveSheet()->getStyle('C')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
		$excel->getActiveSheet()->getStyle('D')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
		$excel->getActiveSheet()->getStyle('E')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
		$excel->getActiveSheet()->getStyle('F')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
		
		/*
		//合并单元格
		$excel->getActiveSheet()->mergeCells('A1:D1');
		*/
		
		/*
		//给单元格中放入图片
		$objDrawing = new PHPExcel_Worksheet_Drawing();
		$objDrawing->setName('Logo');
		$objDrawing->setDescription('Logo');
		$objDrawing->setPath('images/test.png');
		$objDrawing->setWidth(148);
		$objDrawing->setHeight(169);
		$objDrawing->setCoordinates('D2');
		$objDrawing->setWorksheet($excel->getActiveSheet());
		*/
		
		//设置单元格数据
		$excel->getActiveSheet()
			->setCellValue('A1', 'Name')
			->setCellValue('B1', 'Gender')
			->setCellValue('C1', 'Email')
			->setCellValue('D1', 'Register Date')
			->setCellValue('E1', 'Total Score')
			->setCellValue('F1', 'Friends Num');
		
		$excel->getActiveSheet()->getRowDimension(1)->setRowHeight(30);
		$res = $this->getUserByPage(1, 1000000);
		$rowIndex = 2;
		foreach ($res as $row)
		{
			$inviteScore = Config::$inviteScore;
			if ($inviteScore == 0)
			{
				$inviteScore = 1000000000;
			}
			$excel->getActiveSheet()
				->setCellValue('A' . $rowIndex, $row['username'])
				->setCellValue('B' . $rowIndex, $row['gender'])
				->setCellValue('C' . $rowIndex, $row['email'])
				->setCellValue('D' . $rowIndex, $row['regtime'])
				->setCellValue('E' . $rowIndex, $row['totalscore'])
				->setCellValue('F' . $rowIndex, $row['friendscore'] / $inviteScore - 1);
			$excel->getActiveSheet()->getRowDimension($rowIndex)->setRowHeight(50);
			$rowIndex++;
		}
		
		$fileFormat = 'excel';
		if ('excel' == $fileFormat)
		{
			//输出EXCEL格式
			$filename = 'phantom5game_' . Utils::mdate('Y.m.d') . '.xls';
			$objWriter = PHPExcel_IOFactory::createWriter($excel, 'Excel5');
			//从浏览器直接输出$filename
			header("Pragma: public");
			header("Expires: 0");
			header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
			header("Content-Type:application/force-download");
			header("Content-Type: application/vnd.ms-excel;");
			header("Content-Type:application/octet-stream");
			header("Content-Type:application/download");
			header("Content-Disposition:attachment;filename=" . $filename);
			header("Content-Transfer-Encoding:binary");
			$objWriter->save("php://output");
		}
		else if ('pdf' == $fileFormat)
		{
			//输出PDF格式
			$filename = 'phantom5game_' . Utils::mdate('Y.m.d') . '.pdf';
			$objWriter = PHPExcel_IOFactory::createWriter($excel, 'PDF');
			$objWriter->setSheetIndex(0);
			header("Pragma: public");
			header("Expires: 0");
			header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
			header("Content-Type:application/force-download");
			header("Content-Type: application/pdf");
			header("Content-Type:application/octet-stream");
			header("Content-Type:application/download");
			header("Content-Disposition:attachment;filename=" . $filename);
			header("Content-Transfer-Encoding:binary");
			$objWriter->save("php://output");
		}
	}
	
	/**
	 * 导出用户数据到Excel
	 */
	public function exportUserKe()
	{
		@ini_set('memory_limit', '512M');
		require_once('extends/PHPExcel_1.8.0/PHPExcel.php');
		$excel = new PHPExcel();
		//设置文件的详细信息
		$excel->getProperties()->setCreator("Administrators")
			->setLastModifiedBy("Administrators")
			->setTitle("Data")
			->setSubject("")
			->setDescription("")
			->setKeywords("")
			->setCategory("");
		
		//操作第一个工作表
		$excel->setActiveSheetIndex(0);
		//设置工作薄名称
		$excel->getActiveSheet()->setTitle('Data');
		//设置默认字体和大小
		$excel->getDefaultStyle()->getFont()->setName('Times New Roman');
		$excel->getDefaultStyle()->getFont()->setSize(14);
		
		//设置列宽度
		$excel->getActiveSheet()->getColumnDimension('A')->setWidth(25);
		$excel->getActiveSheet()->getColumnDimension('B')->setWidth(8);
		$excel->getActiveSheet()->getColumnDimension('C')->setWidth(40);
		$excel->getActiveSheet()->getColumnDimension('D')->setWidth(19);
		$excel->getActiveSheet()->getColumnDimension('E')->setWidth(12);
		
		/*
		//设置行高度
		$excel->getActiveSheet()->getRowDimension('1')->setRowHeight(40);
		$excel->getActiveSheet()->getRowDimension('2')->setRowHeight(169);
		$excel->getActiveSheet()->getRowDimension('3')->setRowHeight(60);
		*/
		
		//设置水平居中
		$excel->getActiveSheet()->getStyle('A')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$excel->getActiveSheet()->getStyle('B')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$excel->getActiveSheet()->getStyle('C')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$excel->getActiveSheet()->getStyle('D')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$excel->getActiveSheet()->getStyle('E')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		
		//设置垂直居中
		$excel->getActiveSheet()->getStyle('A')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
		$excel->getActiveSheet()->getStyle('B')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
		$excel->getActiveSheet()->getStyle('C')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
		$excel->getActiveSheet()->getStyle('D')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
		$excel->getActiveSheet()->getStyle('E')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
		
		/*
		//合并单元格
		$excel->getActiveSheet()->mergeCells('A1:D1');
		*/
		
		/*
		//给单元格中放入图片
		$objDrawing = new PHPExcel_Worksheet_Drawing();
		$objDrawing->setName('Logo');
		$objDrawing->setDescription('Logo');
		$objDrawing->setPath('images/test.png');
		$objDrawing->setWidth(148);
		$objDrawing->setHeight(169);
		$objDrawing->setCoordinates('D2');
		$objDrawing->setWorksheet($excel->getActiveSheet());
		*/
		
		//设置单元格数据
		$excel->getActiveSheet()
			->setCellValue('A1', 'Name')
			->setCellValue('B1', 'Gender')
			->setCellValue('C1', 'Email')
			->setCellValue('D1', 'Register Date')
			->setCellValue('E1', 'Total Score');
		
		$excel->getActiveSheet()->getRowDimension(1)->setRowHeight(30);
		$res = $this->getUserByPage(1, 1000000);
		$rowIndex = 2;
		foreach ($res as $row)
		{
			$inviteScore = Config::$inviteScore;
			if ($inviteScore == 0)
			{
				$inviteScore = 1000000000;
			}
			$excel->getActiveSheet()
				->setCellValue('A' . $rowIndex, $row['username'])
				->setCellValue('B' . $rowIndex, $row['gender'])
				->setCellValue('C' . $rowIndex, $row['email'])
				->setCellValue('D' . $rowIndex, $row['regtime'])
				->setCellValue('E' . $rowIndex, $row['totalscore']);
			$excel->getActiveSheet()->getRowDimension($rowIndex)->setRowHeight(50);
			$rowIndex++;
		}
		
		$fileFormat = 'excel';
		if ('excel' == $fileFormat)
		{
			//输出EXCEL格式
			$filename = 'phantom5game_' . Utils::mdate('Y.m.d') . '.xls';
			$objWriter = PHPExcel_IOFactory::createWriter($excel, 'Excel5');
			//从浏览器直接输出$filename
			header("Pragma: public");
			header("Expires: 0");
			header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
			header("Content-Type:application/force-download");
			header("Content-Type: application/vnd.ms-excel;");
			header("Content-Type:application/octet-stream");
			header("Content-Type:application/download");
			header("Content-Disposition:attachment;filename=" . $filename);
			header("Content-Transfer-Encoding:binary");
			$objWriter->save("php://output");
		}
		else if ('pdf' == $fileFormat)
		{
			//输出PDF格式
			$filename = 'phantom5game_' . Utils::mdate('Y.m.d') . '.pdf';
			$objWriter = PHPExcel_IOFactory::createWriter($excel, 'PDF');
			$objWriter->setSheetIndex(0);
			header("Pragma: public");
			header("Expires: 0");
			header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
			header("Content-Type:application/force-download");
			header("Content-Type: application/pdf");
			header("Content-Type:application/octet-stream");
			header("Content-Type:application/download");
			header("Content-Disposition:attachment;filename=" . $filename);
			header("Content-Transfer-Encoding:binary");
			$objWriter->save("php://output");
		}
	}
	
	public function reduceRestLucky($fbid)
	{
		Config::$db->connect();
		$sqlFbid = Security::varSql($fbid);
		$tbUser = Config::$tbUser;
		Config::$db->query("update $tbUser set restLucky=restLucky-1 where fbid=$sqlFbid");
	}
	
	public function setShared($fbid)
	{
		Config::$db->connect();
		$sqlFbid = Security::varSql($fbid);
		$tbUser = Config::$tbUser;
		Config::$db->query("update $tbUser set restLucky=restLucky+1, isshared=1 where fbid=$sqlFbid");
	}
}
?>
