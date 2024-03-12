<?php

/**
 * This is the model class for table "action_library".
 *
 * The followings are the available columns in table 'action_library':
 * @property integer $id
 * @property string $action_display_name
 * @property string $action_name
 * @property string $syntax
 * @property integer $parameter_count
 * @property string $parameter_description
 * @property integer $action_type
 *
 * The followings are the available model relations:
 * @property ActionArgumentMap[] $actionArgumentMaps
 * @property ActionType $actionType
 * @property ReportSelectorFunctionParaAction[] $reportSelectorFunctionParaActions
 */
class ActionLibrary extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'action_library';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('action_display_name, action_name, syntax, parameter_count, parameter_description, action_type', 'required'),
			array('parameter_count, action_type', 'numerical', 'integerOnly'=>true),
			array('action_display_name, action_name, parameter_description', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, action_display_name, action_name, syntax, parameter_count, parameter_description, action_type', 'safe', 'on'=>'search'),
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
			'actionArgumentMaps' => array(self::HAS_MANY, 'ActionArgumentMap', 'action_library_id'),
			'actionType' => array(self::BELONGS_TO, 'ActionType', 'action_type'),
			'reportSelectorFunctionParaActions' => array(self::HAS_MANY, 'ReportSelectorFunctionParaAction', 'action_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'action_display_name' => 'Action Display Name',
			'action_name' => 'Action Name',
			'syntax' => 'Syntax',
			'parameter_count' => 'Parameter Count',
			'parameter_description' => 'Parameter Description',
			'action_type' => 'Action Type',
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
		$criteria->compare('action_display_name',$this->action_display_name,true);
		$criteria->compare('action_name',$this->action_name,true);
		$criteria->compare('syntax',$this->syntax,true);
		$criteria->compare('parameter_count',$this->parameter_count);
		$criteria->compare('parameter_description',$this->parameter_description,true);
		$criteria->compare('action_type',$this->action_type);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ActionLibrary the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
