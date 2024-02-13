<?php

/**
 * This is the model class for table "student_information".
 *
 * The followings are the available columns in table 'student_information':
 * @property integer $student_id
 * @property string $first_name
 * @property string $last_name
 * @property string $percentage
 * @property string $date_of_birth
 * @property string $address
 * @property string $phone_number
 * @property string $email_address
 * @property integer $department_id
 * @property integer $course_type_id
 * @property integer $course_id
 * @property string $major
 * @property string $academic_status
 * @property integer $theme_ID
 * @property string $emergency_contact_name
 * @property string $emergency_contact_phone
 * @property string $emergency_contact_relationship
 * @property integer $marks
 */
class StudentInformation extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'student_information';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('student_id, percentage, marks', 'required'),
			array('student_id, department_id, course_type_id, course_id, theme_ID, marks', 'numerical', 'integerOnly'=>true),
			array('first_name, last_name, major, academic_status, emergency_contact_relationship', 'length', 'max'=>50),
			array('percentage, address, email_address', 'length', 'max'=>255),
			array('phone_number, emergency_contact_phone', 'length', 'max'=>20),
			array('emergency_contact_name', 'length', 'max'=>100),
			array('date_of_birth', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('student_id, first_name, last_name, percentage, date_of_birth, address, phone_number, email_address, department_id, course_type_id, course_id, major, academic_status, theme_ID, emergency_contact_name, emergency_contact_phone, emergency_contact_relationship, marks', 'safe', 'on'=>'search'),
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
			'student_id' => 'Student',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'percentage' => 'Percentage',
			'date_of_birth' => 'Date Of Birth',
			'address' => 'Address',
			'phone_number' => 'Phone Number',
			'email_address' => 'Email Address',
			'department_id' => 'Department',
			'course_type_id' => 'Course Type',
			'course_id' => 'Course',
			'major' => 'Major',
			'academic_status' => 'Academic Status',
			'theme_ID' => 'Theme',
			'emergency_contact_name' => 'Emergency Contact Name',
			'emergency_contact_phone' => 'Emergency Contact Phone',
			'emergency_contact_relationship' => 'Emergency Contact Relationship',
			'marks' => 'Marks',
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

		$criteria->compare('student_id',$this->student_id);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('percentage',$this->percentage,true);
		$criteria->compare('date_of_birth',$this->date_of_birth,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('phone_number',$this->phone_number,true);
		$criteria->compare('email_address',$this->email_address,true);
		$criteria->compare('department_id',$this->department_id);
		$criteria->compare('course_type_id',$this->course_type_id);
		$criteria->compare('course_id',$this->course_id);
		$criteria->compare('major',$this->major,true);
		$criteria->compare('academic_status',$this->academic_status,true);
		$criteria->compare('theme_ID',$this->theme_ID);
		$criteria->compare('emergency_contact_name',$this->emergency_contact_name,true);
		$criteria->compare('emergency_contact_phone',$this->emergency_contact_phone,true);
		$criteria->compare('emergency_contact_relationship',$this->emergency_contact_relationship,true);
		$criteria->compare('marks',$this->marks);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return StudentInformation the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
