<?php if(!defined('UC_ROOT')) exit('Access Denied');?>
<?php include $this->gettpl('header');?>

<script src="js/common.js" type="text/javascript"></script>
<div class="container">

	<div class="note">
		<p class="i">Click "Synchronize Appliction Money Policy" to get the appliction money policy, and send the notification to that application</p>
	</div>

	<?php if($status) { ?>
		<div class="<?php if($status > 0) { ?>correctmsg<?php } else { ?>errormsg<?php } ?>"><p><?php if($status == 1) { ?>Money Exchange Policy Updated Successfully.<?php } elseif($status == -1) { ?>You chose the same application, please correct it.<?php } ?></p></div>
	<?php } ?>
	<div class="hastabmenu">
		<ul class="tabmenu">
			<li class="tabcurrent"><a href="#" class="tabcurrent">Update Xpoint Exchange Policy</a></li>
		</ul>
		<div class="tabcontentcur">
			<form id="creditform" action="admin.php?m=credit&a=ls&addexchange=yes" method="post">
			<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
			<table class="dbtb">
				<tr>
					<td class="tbtitle">Exchange Type:</td>
					<td>
						<select onchange="switchcredit('src', this.value)" name="appsrc">
							<option>Please Select</option><?php echo $appselect;?>
						</select><span id="src"></span>
						&nbsp;&gt;&nbsp;
						<select onchange="switchcredit('desc', this.value)" name="appdesc">
							<option>Please Select</option><?php echo $appselect;?>
						</select><span id="desc"></span>
					</td>
				</tr>
				<tr>
					<td class="tbtitle">Ratio:</td>
					<td>
						<input name="ratiosrc" size="3" value="<?php echo $ratiosrc;?>" class="txt" style="margin-right:0" />
						&nbsp;:&nbsp;
						<input name="ratiodesc" size="3" value="<?php echo $ratiodesc;?>" class="txt" />
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" value="Submit" class="btn" /> &nbsp;
						<input type="button" value="Synchronize Appliction Money Policy" class="btn" onclick="location.href='admin.php?m=credit&a=sync&sid=<?php echo $sid;?>'" />
					</td>
				</tr>
			</table>
			<div style="display: none">
			<script type="text/javascript">
			var credit = new Array();
			<?php foreach((array)$creditselect as $select) {?><?php echo $select;?><?php } ?>
			<?php if($appsrc) { ?>
				setselect($('creditform').appsrc, <?php echo $appsrc;?>);
				switchcredit('src', <?php echo $appsrc;?>);
			<?php } ?>
			<?php if($appdesc) { ?>
				setselect($('creditform').appdesc, <?php echo $appdesc;?>);
				switchcredit('desc', <?php echo $appdesc;?>);
			<?php } ?>
			<?php if($creditsrc) { ?>
				setselect($('creditform').creditsrc, <?php echo $creditsrc;?>);
			<?php } ?>
			<?php if($creditdesc) { ?>
				setselect($('creditform').creditdesc, <?php echo $creditdesc;?>);
			<?php } ?>
			</script>
			</div>
			</form>
		</div>
	</div>
	<br />
	<h3>Money Exchange</h3>
	<div class="mainbox">
		<?php if($creditexchange) { ?>
			<form action="admin.php?m=credit&a=ls&delexchange=yes" method="post">
			<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
			<table class="datalist fixwidth" onmouseover="addMouseEvent(this);">
				<tr>
					<th><input type="checkbox" name="chkall" id="chkall" onclick="checkall('delete[]')" class="checkbox" /><label for="chkall">Delete</label></th>
					<th style="padding-right: 11px; text-align: right">Exchange Type</th>
					<th></th>
					<th style="text-align: center">Ratio</th>
				</tr>
				<?php foreach((array)$creditexchange as $key => $exchange) {?>
					<tr>
						<td class="option"><input type="checkbox" name="delete[]" value="<?php echo $key;?>" class="checkbox" /></td>
						<td align="right"><?php echo $exchange['appsrc'];?> <?php echo $exchange['creditsrc'];?></td>
						<td>&nbsp;&gt;&nbsp;<?php echo $exchange['appdesc'];?> <?php echo $exchange['creditdesc'];?></td>
						<td align="center"><?php echo $exchange['ratiosrc'];?> : <?php echo $exchange['ratiodesc'];?></td>
					</tr>
				<?php }?>
				<tr class="nobg">
					<td><input type="submit" value="Submit" class="btn" /></td>
				</tr>
			</table>
			</form>
		<?php } else { ?>
			<div class="note">
				<p class="i">No Records!</p>
			</div>
		<?php } ?>
</div>

<?php include $this->gettpl('footer');?>