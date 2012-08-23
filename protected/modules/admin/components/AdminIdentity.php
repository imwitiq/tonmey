<?php
/** 
 *  验证后台管理员的登陆
 * @author  WITIQ
 * @date    2012 -08-20
 */

class AdminIdentity extends CUserIdentity{
	
	/*@var id of admin */
	private  $_id ;
	
	/*@var  CActiveRecord current Admin Model */
	private  $_model;
	
	
	
	/*
	 * This function check the Admin authentication 
	 * @return  int
	 */	
	public function  authenticate()
	{
		$adminname = strtolower($this->username);

		if( strpos($adminname ,'@') !== false ){
			$admin = Admin::model()->find('LOWER(adm_email)=?',array($adminname));
					
		}else {
			$admin = Admin::model()->find('LOWER(adm_name)=?', array($adminname));		
			
		}
		
		if($admin === null){		
			$this->errorCode = self::ERROR_USERNAME_INVALID;	
		
		}elseif ($admin->adm_password !== $this->password){
			$this->errorCode = self::ERROR_PASSWORD_INVALID;

		}else{
			$this->_id = $admin->adm_id;
			$this->errorCode = self::ERROR_NONE;		
		}
	
		return !$this->errorCode;
						
	}
	
	/*
	 * This function return property  $_id of this clsss
	 * @reutrn int
	 */
	public function getId(){
		
		return $this->_id;
	}

	/*  This function return property $_model of Admin Model
	 * 
	 * @return CActiveRecord 
	 */	
	public function getModel(){
		
		return $this->_model;
	}
	
}

