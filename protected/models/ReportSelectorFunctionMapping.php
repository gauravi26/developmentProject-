<?php

/**
 * This is the model class for table "report_selector_function_mapping".
 *
 * The followings are the available columns in table 'report_selector_function_mapping':
 * @property integer $id
 * @property integer $report_id
 * @property string $report_column
 * @property string $report_row
 * @property integer $function_library_id
 *
 * The followings are the available model relations:
 * @property ReportFunctionActionMapping[] $reportFunctionActionMappings
 * @property ReportFunctionArgValueMapping[] $reportFunctionArgValueMappings
 * @property FunctionLibrary $functionLibrary
 * @property Report $report
 */
class ReportSelectorFunctionMapping extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'report_selector_function_mapping';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('report_id, report_column, report_row, function_library_id', 'required'),
			array('report_id, function_library_id', 'numerical', 'integerOnly'=>true),
			array('report_column, report_row', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, report_id, report_column, report_row, function_library_id', 'safe', 'on'=>'search'),
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
			'reportFunctionActionMappings' => array(self::HAS_MANY, 'ReportFunctionActionMapping', 'report_function_mapping_id'),
			'reportFunctionArgValueMappings' => array(self::HAS_MANY, 'ReportFunctionArgValueMapping', 'report_function_mapping_id'),
			'functionLibrary' => array(self::BELONGS_TO, 'FunctionLibrary', 'function_library_id'),
			'report' => array(self::BELONGS_TO, 'Report', 'report_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'report_id' => 'Report',
			'report_column' => 'Report Column',
			'report_row' => 'Report Row',
			'function_library_id' => 'Function Library',
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
		$criteria->compare('report_id',$this->report_id);
		$criteria->compare('report_column',$this->report_column,true);
		$criteria->compare('report_row',$this->report_row,true);
		$criteria->compare('function_library_id',$this->function_library_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ReportSelectorFunctionMapping the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
