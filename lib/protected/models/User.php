<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $payment_email
 * @property string $password
 * @property integer $status
 * @property integer $cam_block
 * @property string $phone
 * @property string $address
 * @property string $postcode
 * @property string $countrycode
 * @property string $city
 * @property string $state
 * @property string $card_no
 * @property integer $card_exp_month
 * @property integer $card_exp_year
 * @property string $ip
 * @property string $date_added
 * @property string $date_updated
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('status, cam_block, card_exp_month, card_exp_year', 'numerical', 'integerOnly'=>true),
			array('first_name, last_name, email, password, address', 'length', 'max'=>500),
			array('payment_email', 'length', 'max'=>350),
			array('phone', 'length', 'max'=>30),
			array('postcode, countrycode', 'length', 'max'=>20),
			array('city', 'length', 'max'=>80),
			array('state', 'length', 'max'=>50),
			array('card_no', 'length', 'max'=>200),
			array('ip', 'length', 'max'=>255),
			array('date_added, date_updated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, first_name, last_name, email, payment_email, password, status, cam_block, phone, address, postcode, countrycode, city, state, card_no, card_exp_month, card_exp_year, ip, date_added, date_updated', 'safe', 'on'=>'search'),
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
			"order"=>array(self::HAS_MANY,"Order","user_id"),
            "cart"=>array(self::HAS_MANY,"Cart","user_id"),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'email' => 'Email',
			'payment_email' => 'Payment Email',
			'password' => 'Password',
			'status' => 'Status',
			'cam_block' => 'Cam Block',
			'phone' => 'Phone',
			'address' => 'Address',
			'postcode' => 'Postcode',
			'countrycode' => 'Countrycode',
			'city' => 'City',
			'state' => 'State',
			'card_no' => 'Card No',
			'card_exp_month' => 'Card Exp Month',
			'card_exp_year' => 'Card Exp Year',
			'ip' => 'Ip',
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
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('payment_email',$this->payment_email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('cam_block',$this->cam_block);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('postcode',$this->postcode,true);
		$criteria->compare('countrycode',$this->countrycode,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('card_no',$this->card_no,true);
		$criteria->compare('card_exp_month',$this->card_exp_month);
		$criteria->compare('card_exp_year',$this->card_exp_year);
		$criteria->compare('ip',$this->ip,true);
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
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
