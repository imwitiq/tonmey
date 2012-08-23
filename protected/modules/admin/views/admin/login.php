<?php  /* @var this DefaultController */?>
<div class="admin_login">
	<?php $form = $this->beginWidget("CActiveForm",array(
				'id'=>'login-content',
			));?>
	<?php echo $form->errorSummary($model);?>
	
	<div class="notification noteinformation png_bg">
	<div>
	<?php echo '请输入你的账号和密码'; ?> 
    
	</div>
	</div>
				

	<div class="row"> 
		<?php echo $form->label($model,"用户名");?>
		<?php echo $form->textField($model,"adm_name" ,array('class'=>'text-input'));?>	
	</div>
	<div class="clear"></div>
	<div class="row">
		<?php echo $form->label($model,"密码") ;?>
		<?php echo $form->passwordField($model,"adm_password",array('class'=>'text-input')) ;?>
	</div>
	<div class="clear"></div>
	<div class="row"  id="remember-password" style="float:right;">
		<?php echo $form->checkBox($model,"rememberMe" , array('style'=>'float:left;margin-right: 5px;'))?>
		<?php echo $form->label($model,"记住我")?>
	</div>
	<div class="clear"></div>
	<div class="row">
		<?php echo CHtml::submitButton("登陆",array('id'=>'login-content-button','class'=>'bebutton'));?>
	</div>	
	<br class="clear" />
	<?php $this->endWidget();?>
</div><!-- admin_login end -->