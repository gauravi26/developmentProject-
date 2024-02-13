<?php

/**
 * This is the model class for table "function_library".
 *
 * The followings are the available columns in table 'function_library':
 * @property integer $id
 * @property string $function_name
 * @property string $function_description
 * @property string $syntax
 * @property string $class_name
 * @property string $parameter_description
 * @property integer $return_type
 * @property integer $function_type
 * @property integer $button_function
 *
 * The followings are the available model relations:
 * @property FunctionArgumentMap[] $functionArgumentMaps
 * @property FunctionType $functionType
 */
class FunctionLibrary extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'function_library';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('function_name, function_description, syntax, class_name, parameter_description, return_type, function_type, button_function', 'required'),
			array('return_type, function_type, button_function', 'numerical', 'integerOnly'=>true),
			array('function_name', 'length', 'max'=>500),
			array('class_name', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, function_name, function_description, syntax, class_name, parameter_description, return_type, function_type, button_function', 'safe', 'on'=>'search'),
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
			'functionArgumentMaps' => array(self::HAS_MANY, 'FunctionArgumentMap', 'function_library_id'),
			'functionType' => array(self::BELONGS_TO, 'FunctionType', 'function_type'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'function_name' => 'Function Name',
			'function_description' => 'Function Description',
			'syntax' => 'Syntax',
			'class_name' => 'Class Name',
			'parameter_description' => 'Parameter Description',
			'return_type' => 'Return Type',
			'function_type' => 'Function Type',
			'button_function' => 'Button Function',
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
		$criteria->compare('function_name',$this->function_name,true);
		$criteria->compare('function_description',$this->function_description,true);
		$criteria->compare('syntax',$this->syntax,true);
		$criteria->compare('class_name',$this->class_name,true);
		$criteria->compare('parameter_description',$this->parameter_description,true);
		$criteria->compare('return_type',$this->return_type);
		$criteria->compare('function_type',$this->function_type);
		$criteria->compare('button_function',$this->button_function);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FunctionLibrary the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
