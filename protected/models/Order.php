<?php

/**
 * This is the model class for table "order".
 *
 * The followings are the available columns in table 'order':
 * @property integer $id
 * @property integer $order_detail_id
 * @property string $transaction_id
 * @property string $pmethod
 * @property double $net_price
 * @property integer $coupon_id
 * @property double $discount
 * @property integer $user_id
 * @property string $ip
 * @property string $date_added
 * @property string $expiry_date
 * @property string $date_updated
 * @property integer $status
 */
class Order extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'order';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pmethod', 'required'),
			array('order_detail_id, coupon_id, user_id, status', 'numerical', 'integerOnly'=>true),
			array('net_price, discount', 'numerical'),
			array('transaction_id, pmethod, ip', 'length', 'max'=>100),
			array('date_added, expiry_date, date_updated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, order_detail_id, transaction_id, pmethod, net_price, coupon_id, discount, user_id, ip, date_added, expiry_date, date_updated, status', 'safe', 'on'=>'search'),
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
                    "cart"=>array(self::HAS_MANY,"Cart","order_id"),
                    "user"=>array(self::BELONGS_TO,"User","user_id"),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'order_detail_id' => 'Order Detail',
			'transaction_id' => 'Transaction',
			'pmethod' => 'Pmethod',
			'net_price' => 'Net Price',
			'coupon_id' => 'Coupon',
			'discount' => 'Discount',
			'user_id' => 'User',
			'ip' => 'Ip',
			'date_added' => 'Date Added',
			'expiry_date' => 'Expiry Date',
			'date_updated' => 'Date Updated',
			'status' => 'Status',
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
		$criteria->compare('order_detail_id',$this->order_detail_id);
		$criteria->compare('transaction_id',$this->transaction_id,true);
		$criteria->compare('pmethod',$this->pmethod,true);
		$criteria->compare('net_price',$this->net_price);
		$criteria->compare('coupon_id',$this->coupon_id);
		$criteria->compare('discount',$this->discount);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('ip',$this->ip,true);
		$criteria->compare('date_added',$this->date_added,true);
		$criteria->compare('expiry_date',$this->expiry_date,true);
		$criteria->compare('date_updated',$this->date_updated,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Order the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
