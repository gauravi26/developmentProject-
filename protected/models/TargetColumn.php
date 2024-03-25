<?php

/**
 * This is the model class for table "target_column".
 *
 * The followings are the available columns in table 'target_column':
 * @property integer $id
 * @property integer $report_function_action_mapping_id
 * @property string $target_column
 *
 * The followings are the available model relations:
 * @property ReportFunctionActionMapping $reportFunctionActionMapping
 */
class TargetColumn extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'target_column';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('report_function_action_mapping_id, target_column', 'required'),
			array('report_function_action_mapping_id', 'numerical', 'integerOnly'=>true),
			array('target_column', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, report_function_action_mapping_id, target_column', 'safe', 'on'=>'search'),
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
			'reportFunctionActionMapping' => array(self::BELONGS_TO, 'ReportFunctionActionMapping', 'report_function_action_mapping_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'report_function_action_mapping_id' => 'Report Function Action Mapping',
			'target_column' => 'Target Column',
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
		$criteria->compare('report_function_action_mapping_id',$this->report_function_action_mapping_id);
		$criteria->compare('target_column',$this->target_column,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TargetColumn the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
