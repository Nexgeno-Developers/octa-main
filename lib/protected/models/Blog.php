<?php

/**
 * This is the model class for table "wp_posts".
 *
 * The followings are the available columns in table 'wp_posts':
 * @property integer $id
 * @property string $post_content
 * @property datetime $post_date
 * @property datetime $post_status
 * @property string $post_title
 */
class Blog extends CActiveRecord
{
	
	public static function getDb()
    {
        // use the "db2" application component
        return Yii::app()->db_blog; 
    }
	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'wp_posts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
/* 	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'required'),
			array('email', 'email'),
			array('comment', 'required'),
		);
	} */

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
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Comments the static model class
	 */
	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
