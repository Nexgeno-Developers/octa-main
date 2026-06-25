<?php

/**
 * This is the model class for table "cms".
 *
 * The followings are the available columns in table 'cms':
 * @property integer $id
 * @property string $title
 * @property string $heading
 * @property string $content
 * @property string $meta_keywords
 * @property string $meta_desc
 * @property string $pagename
 */
class Cms extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cms';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, heading, content, meta_keywords, meta_desc, pagename', 'required'),
			array('title, heading', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, heading, content, meta_keywords, meta_desc', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'title' => 'Title',
			'heading' => 'Heading',
			'content' => 'Content',
			'meta_keywords' => 'Meta Keywords',
			'meta_desc' => 'Meta Desc',
			'pagename' => 'PageName',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('heading',$this->heading,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('meta_keywords',$this->meta_keywords,true);
		$criteria->compare('meta_desc',$this->meta_desc,true);
		$criteria->compare('pagename',$this->pagename,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cms the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
