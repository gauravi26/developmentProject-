<?php

/**
 * This is the model class for table "customers".
 *
 * The followings are the available columns in table 'customers':
 * @property integer $CustomerID
 * @property string $FirstName
 * @property string $LastName
 * @property string $Email
 * @property string $PhoneNumber
 * @property string $RegistrationDate
 * @property integer $PremiumMember
 * @property string $Balance
 */
class Customers extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'customers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CustomerID', 'required'),
			array('CustomerID, PremiumMember', 'numerical', 'integerOnly'=>true),
			array('FirstName, LastName', 'length', 'max'=>50),
			array('Email', 'length', 'max'=>100),
			array('PhoneNumber', 'length', 'max'=>15),
			array('Balance', 'length', 'max'=>8),
			array('RegistrationDate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CustomerID, FirstName, LastName, Email, PhoneNumber, RegistrationDate, PremiumMember, Balance', 'safe', 'on'=>'search'),
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
			'CustomerID' => 'Customer',
			'FirstName' => 'First Name',
			'LastName' => 'Last Name',
			'Email' => 'Email',
			'PhoneNumber' => 'Phone Number',
			'RegistrationDate' => 'Registration Date',
			'PremiumMember' => 'Premium Member',
			'Balance' => 'Balance',
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

		$criteria->compare('CustomerID',$this->CustomerID);
		$criteria->compare('FirstName',$this->FirstName,true);
		$criteria->compare('LastName',$this->LastName,true);
		$criteria->compare('Email',$this->Email,true);
		$criteria->compare('PhoneNumber',$this->PhoneNumber,true);
		$criteria->compare('RegistrationDate',$this->RegistrationDate,true);
		$criteria->compare('PremiumMember',$this->PremiumMember);
		$criteria->compare('Balance',$this->Balance,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Customers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
