<?php

/**
 * This is the model class for table "egalleryitems".
 *
 * The followings are the available columns in table 'egalleryitems':
 * @property integer $id
 * @property integer $evenId
 * @property string $alt
 * @property string $link
 * @property string $date_added
 */
class Egalleryitems extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'egalleryitems';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, date_added', 'required'),
			array('id, evenId', 'numerical', 'integerOnly'=>true),
			array('alt', 'length', 'max'=>400),
			array('link', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, evenId, alt, link, date_added', 'safe', 'on'=>'search'),
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
			'evenId' => 'Even',
			'alt' => 'Alt',
			'link' => 'Link',
			'date_added' => 'Date Added',
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
		$criteria->compare('evenId',$this->evenId);
		$criteria->compare('alt',$this->alt,true);
		$criteria->compare('link',$this->link,true);
		$criteria->compare('date_added',$this->date_added,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Egalleryitems the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
