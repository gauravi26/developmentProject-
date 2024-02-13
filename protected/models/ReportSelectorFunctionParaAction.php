<?php

/**
 * This is the model class for table "report_selector_function_para_action".
 *
 * The followings are the available columns in table 'report_selector_function_para_action':
 * @property integer $id
 * @property integer $report_id
 * @property string $report_column
 * @property integer $report_row
 * @property integer $function_library_id
 * @property string $function_library_parameter
 * @property integer $action_id
 * @property string $script_to_call
 */
class ReportSelectorFunctionParaAction extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'report_selector_function_para_action';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, report_id, report_column, report_row, function_library_id, function_library_parameter, action_id, script_to_call', 'required'),
			array('id, report_id, report_row, function_library_id, action_id', 'numerical', 'integerOnly'=>true),
			array('report_column, function_library_parameter, script_to_call', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, report_id, report_column, report_row, function_library_id, function_library_parameter, action_id, script_to_call', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'report_id' => 'Report',
			'report_column' => 'Report Column',
			'report_row' => 'Report Row',
			'function_library_id' => 'Function Library',
			'function_library_parameter' => 'Function Library Parameter',
			'action_id' => 'Action',
			'script_to_call' => 'Script To Call',
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
		$criteria->compare('report_row',$this->report_row);
		$criteria->compare('function_library_id',$this->function_library_id);
		$criteria->compare('function_library_parameter',$this->function_library_parameter,true);
		$criteria->compare('action_id',$this->action_id);
		$criteria->compare('script_to_call',$this->script_to_call,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ReportSelectorFunctionParaAction the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
