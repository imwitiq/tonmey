<?php

/**
 * This is the model class for table "article".
 *
 * The followings are the available columns in table 'article':
 * @property integer $article_id
 * @property integer $cate_id
 * @property integer $user_id
 * @property string $title
 * @property string $description
 * @property string $content
 * @property string $author
 * @property string $author_email
 * @property integer $is_open
 * @property integer $add_time
 *
 * The followings are the available model relations:
 * @property ArticleCate $cate
 */
class Article extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Article the static model class
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
		return 'article';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cate_id, user_id, is_open, add_time', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>150),
			array('description', 'length', 'max'=>255),
			array('author', 'length', 'max'=>30),
			array('author_email', 'length', 'max'=>60),
			array('content', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('article_id, cate_id, user_id, title, description, content, author, author_email, is_open, add_time', 'safe', 'on'=>'search'),
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
			'cate' => array(self::BELONGS_TO, 'ArticleCate', 'cate_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'article_id' => 'Article',
			'cate_id' => '选择分类',
			'user_id' => 'User',
			'title' => '标题',
			'description' => '描述',
			'content' => '内容',
			'author' => '作者',
			'author_email' => '作者邮箱',
			'is_open' => '是否公开',
			'add_time' => '添加时间',
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

		$criteria->compare('article_id',$this->article_id);
		$criteria->compare('cate_id',$this->cate_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('author',$this->author,true);
		$criteria->compare('author_email',$this->author_email,true);
		$criteria->compare('is_open',$this->is_open);
		$criteria->compare('add_time',$this->add_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}