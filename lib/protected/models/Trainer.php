<?php

/**
 * This is the model class for table "trainer".
 *
 * The followings are the available columns in table 'trainer':
 * @property integer $id
 * @property string $name
 * @property string $lab
 * @property string $type
 * @property string $detail
 * @property string $facebook
 * @property string $linkedin
 * @property string $image
 * @property string $date_added
 */
class Trainer extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'trainer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, image, date_added', 'length', 'max'=>200),
			array('lab, facebook, linkedin', 'length', 'max'=>300),
			array('type', 'length', 'max'=>250),
			array('detail', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, lab, type, detail, facebook, linkedin, image, date_added', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'lab' => 'Lab',
			'type' => 'Type',
			'detail' => 'Detail',
			'facebook' => 'Facebook',
			'linkedin' => 'Linkedin',
			'image' => 'Image',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('lab',$this->lab,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('detail',$this->detail,true);
		$criteria->compare('facebook',$this->facebook,true);
		$criteria->compare('linkedin',$this->linkedin,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('date_added',$this->date_added,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Trainer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
