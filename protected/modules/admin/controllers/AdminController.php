<?php
/*
 *@desc     后台管理模块默认控制器 
 *@author   witiq
 *@date     2012-08-20
 */


class AdminController extends Controller
{
	/* 输出框架首页 */
	public  function actionIndex()
	{		
		$this->renderPartial('index');
	}

	/*后台登陆*/	
	public function actionLogin(){
		
		$model = new AdminLoginForm();
				
		if(isset($_POST['AdminLoginForm']))
		{				
			$model->attributes = $_POST['AdminLoginForm'];
			
			if($model->validate()&& $model->login())
				$this->actionindex();
						
		}	
		
		$this->layout = 'login';			
		$this->render('login',array('model'=>$model));
	}
		
	/*获取框架视图的MAIN部分*/
	public function actionMain()
	{
		$this->renderPartial('main');
	}

	/*获取框架视图的TOP部分*/
	public function actionTop()
	{
		$this->renderPartial('top');
	}

	/*获取框架视图的部分*/
	public function actionMenu(){

		$this->renderPartial('menu');
	}


}