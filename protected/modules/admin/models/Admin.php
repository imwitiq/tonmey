<?php

/**
 * This is the model class for table "admin".
 *
 * The followings are the available columns in table 'admin':
 * @property integer $adm_Id
 * @property string $adm_name
 * @property string $adm_password
 * @property string $adm_email
 * @property integer $adm_regtime
 * @property integer $adm_last_login
 * @property string $adm_last_ip
 * @property integer $adm_role_id
 */
class Admin extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Admin the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'admin';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('adm_name, adm_password, adm_email', 'required'),
			array('adm_regtime, adm_last_login, adm_role_id', 'numerical', 'integerOnly'=>true),
			array('adm_name', 'length', 'max'=>30),
			array('adm_password', 'length', 'max'=>32),
			array('adm_email', 'length', 'max'=>60),
			array('adm_last_ip', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('adm_id, adm_name, adm_password, adm_email, adm_regtime, adm_last_login, adm_last_ip, adm_role_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'adm_id' => 'Adm',
			'adm_name' => 'Adm Name',
			'adm_password' => 'Adm Password',
			'adm_email' => 'Adm Email',
			'adm_regtime' => 'Adm Regtime',
			'adm_last_login' => 'Adm Last Login',
			'adm_last_ip' => 'Adm Last Ip',
			'adm_role_id' => 'Adm Role',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('adm_id',$this->adm_Id);
		$criteria->compare('adm_name',$this->adm_name,true);
		$criteria->compare('adm_password',$this->adm_password,true);
		$criteria->compare('adm_email',$this->adm_email,true);
		$criteria->compare('adm_regtime',$this->adm_regtime);
		$criteria->compare('adm_last_login',$this->adm_last_login);
		$criteria->compare('adm_last_ip',$this->adm_last_ip,true);
		$criteria->compare('adm_role_id',$this->adm_role_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}