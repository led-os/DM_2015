<?php
/**
* Copyright @ 2013 Infinix. All rights reserved.
* ==============================================
* @Description :会员model
* @date: 2015年10月7日 下午3:38:38
* @author: yanhui.chen
* @version:
*/
namespace Admin\Model;

use Think\Model;
use Common\Model\CommonModel;
class UsersModel extends CommonModel {
    public $model = 'Users';
    public $tableFields = array(
        'uid' => array('name'=>'UID', 'order'=>'1'),
        'loginName' => array('name'=>'账号', 'order'=>'1'),
        'name' => array('name'=>'姓名', 'order'=>'1'),
        'sex' => array('name'=>'性别', 'order'=>'0'),
        'status' => array('name'=>'状态', 'order'=>'1'),
        'oprations' =>array('name'=>'操作', 'order'=>'0')
    );
    
    protected $_validate = array(
        array('loginName', 'require', '姓名必填！'),
        array('loginPwd', 'require', '密码必填！'),
        array('repasswd', 'passwd', '确认密码不正确 ', 0, 'confirm'),
        array('userEmail', 'require', '邮箱必填！'),
        array('userEmail', 'email', '邮箱格式错误！', 2),
        array('loginName', '', '姓名已存在！', 0, 'unique', self::MODEL_INSERT),
    );
    
    protected $_auto = array(
        array('pass', 'md5', 3, 'function'),
        array('ifadmin', '0', self::MODEL_INSERT),
        array('ip', 'get_client_ip', 3, 'function'),
        array('createtime', 'time', 3, 'function'),
    );
    /**
	  * 新增
	  */
	 public function insertUser(){
	 	$rd = array('status'=>-1);
	 	//检测账号
	 	$hasLoginName = self::checkLoginKey(I("loginName"));
	    if($hasLoginName['status']<=0){
	 		$rd = array('status'=>-2);
	 		return $rd;
	 	}
	 	if(I("userPhone")!=''){
	 		$hasUserPhone = self::checkLoginKey(I("userPhone"));
		 	if($hasUserPhone['status']<=0){
		 		$rd = array('status'=>-2);
		 		return $rd;
		 	}
	 	}
	 	if(I("userEmail")!=''){
		 	$hasUserEmail = self::checkLoginKey(I("userEmail"));
		 	if($hasUserEmail['status']<=0){
		 		$rd = array('status'=>-2);
		 		return $rd;
		 	}
	 	}
	 	//创建数据
	 	//$id = I("id",0);
		$data = array();
		$data["loginName"] = I("loginName");
		$data["loginSecret"] = rand(1000,9999);
		$data["loginPwd"] = md5(I('loginPwd').$data['loginSecret']);
		if($this->checkEmpty($data)){
			$data["userPhoto"] = I("userPic");
			$data["userName"] = I("userName");
			$data["userStatus"] = I("userStatus",0);
			$data["userType"] = I("userType",0);
			$data["userSex"] = I("userSex",0);
			$data["userEmail"] = I("userEmail");
			$data["userPhone"] = I("userPhone");
			$data["userQQ"] = I("userQQ");
			$data["userScore"] = I("userScore",0);
		    $data["userTotalScore"] = I("userTotalScore",0);
		    $data["userFlag"] = 1;
		    
		    $data["createTime"] = date('Y-m-d H:i:s');
			$m = M('users');
			$rs = $m->add($data);
			if(false !== $rs){
				//$rd['status']= 1;
				$rd['statusCode'] = 200;
				$rd['message'] = C('ALERT_MSG.EXECUTE_SUCCESS');
				$rd['closeCurrent'] = true;
			}
		}
		return $rd;
	 } 
     /**
	  * 修改
	  */
	 public function editUser(){
	 	$rd = array('status'=>-1);
	 	$id = I('userId',0);
	 	//var_dump($id);exit;
	 	//检测账号
	 	if(I("userPhone")!=''){
	        $hasUserPhone = self::checkLoginKey(I("userPhone"),$id);
	        if($hasUserPhone['status']<=0){
		        $rd = array('status'=>-2);
		 		return $rd;
	        }
	 	}
	 	if(I("userEmail")!=''){
		 	$hasUserEmail = self::checkLoginKey(I("userEmail"),$id);
		 	if($hasUserEmail['status']<=0){
		 		$rd = array('status'=>-2);
		 		return $rd;
		 	}
		 	
	 	}
	 	//修改数据
		$m = M('users');
		$data = array();
		$data["userScore"] = I("userScore",0);
		$data["userTotalScore"] = I("userTotalScore",0);
		if($this->checkEmpty($data,true)){	
			$data["userName"] = I("userName");
			$data["userPhoto"] = I("userPhoto");
			$data["userSex"] = I("userSex",0);
		    $data["userQQ"] = I("userQQ");
		    $data["userPhone"] = I("userPhone");
		    $data["userEmail"] = I("userEmail");
			$rs = $m->where("userId=".$id)->save($data);
			if(false !== $rs){
				//$rd['status']= 1;
				$rd['statusCode'] = 200;
				$rd['message'] = C('ALERT_MSG.EXECUTE_SUCCESS');
				$rd['closeCurrent'] = true;
				$rd['url'] = U('Users/index');
			}
		}
		return $rd;
	 } 
	 /**
	  * 获取指定对象
	  */
     public function get($id){
		return D('Users')->where(array('userId'=>$id))->find();
	 }
	 /**
	  * 分页列表
	  */
     public function queryByPage(){
        $m = M('users');
        $map = array();
	 	$sql = "select * from __PREFIX__users where userFlag=1 ";
	 	if(I('loginName')!='')$sql.=" and loginName LIKE '%".I('loginName')."%'";
	 	if(I('userPhone')!='')$sql.=" and userPhone LIKE '%".I('userPhone')."%'";
	 	if(I('userEmail')!='')$sql.=" and userEmail LIKE '%".I('userEmail')."%'";
	 	if(I('userType',-1)!=-1)$sql.=" and userType=".I('userType',-1);
	 	$sql.="  order by userId desc";
		$rs = $m->pageQuery($sql);
		//计算等级
		if(count($rs)>0){
			$m = M('user_ranks');
			$urs = $m->select();
			foreach ($rs['root'] as $key=>$v){
				foreach ($urs as $rkey=>$rv){
					if($v['userTotalScore']>=$rv['startScore'] && $v['userTotalScore']<$rv['endScore']){
					   $rs['root'][$key]['userRank'] = $rv['rankName'];
					}
				}
			}
		}
		return $rs;
	 }
	 /**
	  * 获取列表
	  */
	  public function queryByList(){
	     $m = M('users');
	     $sql = "select * from __PREFIX__users order by userId desc";
		 $rs = $m->find($sql);
		 return $rs;
	  }
	  /**
	   * 获取会员列表
	   */
	  public function usersList($condition){
	      $list = $this->getPageList($param = array('modelName' => $this->model,'userFlag'=>'1', 'field' => '*', 'order' => 'userId DESC', 'listRows' => '20'), $condition);
	      //$list = $Users->where(" userFlag=1")->order('userId')->select();
	      return $list;
	  }
	 /**
	  * 删除
	  */
	 public function delUser($id){
	 	$rd = array('status'=>-1);
	 	$m = M('users');
	 	$m->userFlag = -1;
		$rs = $m->where(array('userId'=>$id))->save();
		if(false !== $rs){
		   $rd['status']= 1;
		   $rd['statusCode'] = 200;
		   $rd['message'] = C('ALERT_MSG.DELETE_SUCCESS');
		   $rd['closeCurrent'] = false;
		}
		return $rd;
	 }
	 /**
	  * 查询登录关键字
	  */
	 public function checkLoginKey($val,$id = 0){
	 	$rd = array('status'=>-1);
	 	if($val=='')return $rd;
	 	$sql = " (loginName ='%s' or userPhone ='%s' or userEmail='%s') ";
	 	$keyArr = array($val,$val,$val);
	 	if($id>0){
	 		$sql.=" and userId!=".$id;
	 	}
	 	$m = M('users');
	 	$rs = $m->where($sql,$keyArr)->count();
	    if($rs==0)$rd['status'] = 1;
	    return $rd;
	 }
	 
	 
	 /**********************************************************************************************
	  *                                             账号管理                                                                                                                              *
	  **********************************************************************************************/
     /**
      * 获取账号分页列表
      */
	 public function queryAccountByPage(){
        $m = M('users');
	 	$sql = "select * from __PREFIX__users where userFlag=1 ";
	 	if(I('loginName')!='')$sql.=" and loginName LIKE '%".I('loginName')."%'";
	 	if(I('userStatus',-1)!=-1)$sql.=" and userStatus=".I('userStatus',-1);
	 	if(I('userType',-1)!=-1)$sql.=" and userType=".I('userType',-1);
	 	$sql.="  order by userId desc";
		$rs = $m->pageQuery($sql);
		//计算等级
		if(count($rs)>0){
			$m = M('user_ranks');
			$urs = $m->select();
			foreach ($rs['root'] as $key=>$v){
				foreach ($urs as $rkey=>$rv){
					if($v['userTotalScore']>=$rv['startScore'] && $v['userTotalScore']<$rv['endScore']){
					   $rs['root'][$key]['userRank'] = $rv['rankName'];
					}
				}
			}
		}
		return $rs;
	 }
	 /**
	  * 编辑账号状态
	  */
	 public function editUserStatus(){
	 	$rd = array('status'=>-1);
	 	if(I('id',0)==0)return $rd;
	 	$m = M('users');
	 	$m->userStatus = (I('userStatus')==1)?1:0;
	 	$rs = $m->where("userId=".I('id',0))->save();
	    if(false !== $rs){
			$rd['status']= 1;
		}
	 	return $rd;
	 }
	 /**
	  * 获取账号信息
	  */
	 public function getAccountById(){
	 	 $m = M('users');
		 $rs = $m->where('userId='.I('id',0))->getField('userId,loginName,userStatus,userType',1);
		 return current($rs);
	 }
	 /**
	  * 修改账号信息
	  */
	 public function editAccount(){
	 	$rd = array('status'=>-1);
	 	if(I('id')=='')return $rd;
	 	$m = M('users');
	 	$loginSecret = $m->where("userId=".I('id'))->getField('loginSecret');
	 	if(I('loginPwd')!='')$m->loginPwd = md5(I('loginPwd').$loginSecret);
	 	$m->userStatus = I('userStatus',0);
	 	$rs = $m->where('userId='.I('id'))->save();
	    if(false !== $rs){
			$rd['status']= 1;
		}
		return $rd;
	 }
};
?>