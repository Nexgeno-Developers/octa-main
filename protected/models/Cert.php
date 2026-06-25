<?php

/**
 * This is the model class for table "cert".
 *
 * The followings are the available columns in table 'cert':
 * @property integer $id
 * @property integer $vendor_id
 * @property string $name
 * @property string $url
 * @property string $description
 * @property string $meta_title
 * @property string $meta_keywords
 * @property string $meta_desc
 * @property integer $is_hot
 * @property integer $status
 * @property string $date_added
 * @property string $date_updated
 */
class Cert extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cert';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('vendor_id, is_hot, status', 'numerical', 'integerOnly'=>true),
			array('meta_title, meta_keywords, meta_desc', 'length', 'max'=>1000),
			array('name, url, description, date_added, date_updated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, vendor_id, name, url, description, meta_title, meta_keywords, meta_desc, is_hot, status, date_added, date_updated', 'safe', 'on'=>'search'),
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
                    "vendor"=>array(self::BELONGS_TO,"Vendor","vendor_id"),
                    "exam"=>array(self::HAS_MANY,"Exam","cert_id"),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'vendor_id' => 'Vendor',
			'name' => 'Name',
			'url' => 'Url',
			'description' => 'Description',
			'meta_title' => 'Meta Title',
			'meta_keywords' => 'Meta Keywords',
			'meta_desc' => 'Meta Desc',
			'is_hot' => 'Is Hot',
			'status' => 'Status',
			'date_added' => 'Date Added',
			'date_updated' => 'Date Updated',
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
		$criteria->compare('vendor_id',$this->vendor_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('meta_title',$this->meta_title,true);
		$criteria->compare('meta_keywords',$this->meta_keywords,true);
		$criteria->compare('meta_desc',$this->meta_desc,true);
		$criteria->compare('is_hot',$this->is_hot);
		$criteria->compare('status',$this->status);
		$criteria->compare('date_added',$this->date_added,true);
		$criteria->compare('date_updated',$this->date_updated,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cert the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
