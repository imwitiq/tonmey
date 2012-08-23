<?php 
/*
 * 管理员后台登陆模型
 * @author WITIQ
 * @date   2012-08-21 
 */

class AdminLoginForm extends CFormModel {
	
	public $adm_name;
	public $adm_password ;
	public $rememberMe ;

	private $_identity ;
	
	/* 设置验证的规则*/
	public function rules()
	{
		return array(
			array('adm_name, adm_password','required'),
			array('rememberMe','boolean'),
			array('adm_password','authenticate'),	
		);
	}
	
	/*这是验证规则验证密码的方法 */
	public function authenticate(){
		
			$this->_identity  = new AdminIdentity($this->adm_name,$this->adm_password);
			if(!$this->_identity->authenticate())
				$this->addError('password','账户或密码输入错误!');	
	}


	/* 登陆及验证*/
	public function login()
	{	
		if($this->_identity === null)
		{	
			$this->_identity = new AdminIdentity('adm_name','adm_password');
			$this->_identity->authenticate();		
		}	
		
		if($this->_identity->errorCode === AdminIdentity::ERROR_NONE)
		{
			$duration = $this->rememberMe;
			Yii::app()->user->login($this->_identity,$duration);
		}else{
			return false;
		}
		return true;
	}

	
}

?>