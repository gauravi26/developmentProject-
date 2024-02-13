<?php

/**
 * This is the model class for table "function_argument_map".
 *
 * The followings are the available columns in table 'function_argument_map':
 * @property integer $id
 * @property integer $function_library_id
 * @property string $argument_name
 * @property string $argument
 *
 * The followings are the available model relations:
 * @property FunctionLibrary $functionLibrary
 * @property ReportFunctionParameterValueMapping[] $reportFunctionParameterValueMappings
 */
class FunctionArgumentMap extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'function_argument_map';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('function_library_id, argument_name, argument', 'required'),
			array('function_library_id', 'numerical', 'integerOnly'=>true),
			array('argument_name', 'length', 'max'=>255),
			array('argument', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, function_library_id, argument_name, argument', 'safe', 'on'=>'search'),
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
			'functionLibrary' => array(self::BELONGS_TO, 'FunctionLibrary', 'function_library_id'),
			'reportFunctionParameterValueMappings' => array(self::HAS_MANY, 'ReportFunctionParameterValueMapping', 'function_argument_map_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'function_library_id' => 'Function Library',
			'argument_name' => 'Argument Name',
			'argument' => 'Argument',
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
		$criteria->compare('function_library_id',$this->function_library_id);
		$criteria->compare('argument_name',$this->argument_name,true);
		$criteria->compare('argument',$this->argument,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FunctionArgumentMap the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
