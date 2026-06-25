<?php

/**
 * This is the model class for table "exam".
 *
 * The followings are the available columns in table 'exam':
 * @property integer $id
 * @property string $code
 * @property string $tag_ids
 * @property string $short_description
 * @property string $duration
 * @property string $url
 * @property string $ctitle
 * @property string $description
 * @property string $cdetail
 * @property string $exams
 * @property string $benefits
 * @property string $plan
 * @property string $training
 * @property string $demo
 * @property string $faqs
 * @property string $lab
 * @property string $meta_title
 * @property string $meta_keywords
 * @property string $meta_desc
 * @property integer $vendor_id
 * @property integer $cert_id
 * @property integer $is_hot
 * @property integer $is_top
 * @property integer $status
 * @property string $date_added
 * @property string $date_updated
 * @property integer $ustatus
 */
class Exam extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'exam';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('vendor_id, cert_id, is_hot, is_top, status, ustatus', 'numerical', 'integerOnly'=>true),
			array('ctitle', 'length', 'max'=>160),
			array('meta_keywords', 'length', 'max'=>1000),
			array('code,tag_ids, short_description, duration, url, description, cdetail, exams, benefits, plan, training, demo, faqs, lab, meta_title, meta_desc, date_added, date_updated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, code,tag_ids, short_description, duration, url, ctitle, description, cdetail, exams, benefits, plan, training, demo, faqs, lab, meta_title, meta_keywords, meta_desc, vendor_id, cert_id, is_hot, is_top, status, date_added, date_updated, ustatus', 'safe', 'on'=>'search'),
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
			"vendor"=>array(self::BELONGS_TO, "Vendor","vendor_id"),
			"cert"=>array(self::BELONGS_TO, "Cert","cert_id"),
			"replaceby"=>array(self::HAS_ONE,"Exam","replaced_by"),
            "testimonials"=>array(self::HAS_MANY,"Testimonials","exam_id"),
			"assigntrainer"=>array(self::HAS_MANY,"Assigntrainer","examId"),
			"topics"=>array(self::HAS_MANY,"Topics","exam_id"),
			"faqs"=>array(self::HAS_MANY,"Faqs","exam_id"),
			"demos"=>array(self::HAS_MANY,"Demos","cert_id"),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'code' => 'Code',
			'tag_ids' => 'Tag IDs',
			'short_description' => 'Short Description',
			'duration' => 'Duration',
			'url' => 'Url',
			'ctitle' => 'Ctitle',
			'description' => 'Description',
			'cdetail' => 'Cdetail',
			'exams' => 'Exams',
			'benefits' => 'Benefits',
			'plan' => 'Plan',
			'training' => 'Training',
			'demo' => 'Demo',
			'faqs' => 'Faqs',
			'lab' => 'Lab',
			'meta_title' => 'Meta Title',
			'meta_keywords' => 'Meta Keywords',
			'meta_desc' => 'Meta Desc',
			'vendor_id' => 'Vendor',
			'cert_id' => 'Cert',
			'is_hot' => 'Is Hot',
			'is_top' => 'Is Top',
			'status' => 'Status',
			'date_added' => 'Date Added',
			'date_updated' => 'Date Updated',
			'ustatus' => 'Ustatus',
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
		$criteria->compare('code',$this->code,true);
		$criteria->compare('tag_ids',$this->tag_ids,true);
		$criteria->compare('short_description',$this->short_description,true);
		$criteria->compare('duration',$this->duration,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('ctitle',$this->ctitle,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('cdetail',$this->cdetail,true);
		$criteria->compare('exams',$this->exams,true);
		$criteria->compare('benefits',$this->benefits,true);
		$criteria->compare('plan',$this->plan,true);
		$criteria->compare('training',$this->training,true);
		$criteria->compare('demo',$this->demo,true);
		$criteria->compare('faqs',$this->faqs,true);
		$criteria->compare('lab',$this->lab,true);
		$criteria->compare('meta_title',$this->meta_title,true);
		$criteria->compare('meta_keywords',$this->meta_keywords,true);
		$criteria->compare('meta_desc',$this->meta_desc,true);
		$criteria->compare('vendor_id',$this->vendor_id);
		$criteria->compare('cert_id',$this->cert_id);
		$criteria->compare('is_hot',$this->is_hot);
		$criteria->compare('is_top',$this->is_top);
		$criteria->compare('status',$this->status);
		$criteria->compare('date_added',$this->date_added,true);
		$criteria->compare('date_updated',$this->date_updated,true);
		$criteria->compare('ustatus',$this->ustatus);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Exam the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
