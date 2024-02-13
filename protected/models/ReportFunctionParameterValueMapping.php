<?php

/**
 * This is the model class for table "report_function_parameter_value_mapping".
 *
 * The followings are the available columns in table 'report_function_parameter_value_mapping':
 * @property integer $id
 * @property integer $report_function_mapping_id
 * @property integer $function_argument_map_id
 * @property string $value
 *
 * The followings are the available model relations:
 * @property FunctionArgumentMap $functionArgumentMap
 * @property ReportFunctionMapping $reportFunctionMapping
 */
class ReportFunctionParameterValueMapping extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'report_function_parameter_value_mapping';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('report_function_mapping_id, function_argument_map_id, value', 'required'),
			array('report_function_mapping_id, function_argument_map_id', 'numerical', 'integerOnly'=>true),
			array('value', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, report_function_mapping_id, function_argument_map_id, value', 'safe', 'on'=>'search'),
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
			'functionArgumentMap' => array(self::BELONGS_TO, 'FunctionArgumentMap', 'function_argument_map_id'),
			'reportFunctionMapping' => array(self::BELONGS_TO, 'ReportFunctionMapping', 'report_function_mapping_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'report_function_mapping_id' => 'Report Function Mapping',
			'function_argument_map_id' => 'Function Argument Map',
			'value' => 'Value',
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
		$criteria->compare('report_function_mapping_id',$this->report_function_mapping_id);
		$criteria->compare('function_argument_map_id',$this->function_argument_map_id);
		$criteria->compare('value',$this->value,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ReportFunctionParameterValueMapping the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
