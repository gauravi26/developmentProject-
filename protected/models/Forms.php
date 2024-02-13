<?php

/**
 * This is the model class for table "forms".
 *
 * The followings are the available columns in table 'forms':
 * @property integer $FORM_ID
 * @property string $FORM_NAME
 * @property string $BEGIN_DATE
 * @property string $END_DATE
 * @property integer $TYPE_ID
 * @property string $CREATED_BY
 * @property string $LAST_MODIFIED_BY
 * @property string $CREATED_DATE
 * @property string $LAST_MODIFIED_DATE
 * @property integer $orgId
 * @property integer $proj_id
 * @property integer $module_id
 * @property integer $fm
 * @property integer $form_type
 * @property string $edit_list_filter
 * @property string $filter_match_column
 * @property integer $self_mode
 *
 * The followings are the available model relations:
 * @property FormFields[] $formFields
 */
class Forms extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'forms';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('orgId, proj_id, module_id, fm, form_type, edit_list_filter, filter_match_column, self_mode', 'required'),
			array('TYPE_ID, orgId, proj_id, module_id, fm, form_type, self_mode', 'numerical', 'integerOnly'=>true),
			array('FORM_NAME', 'length', 'max'=>128),
			array('CREATED_BY, LAST_MODIFIED_BY', 'length', 'max'=>255),
			array('edit_list_filter', 'length', 'max'=>1000),
			array('filter_match_column', 'length', 'max'=>500),
			array('BEGIN_DATE, END_DATE, CREATED_DATE, LAST_MODIFIED_DATE', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('FORM_ID, FORM_NAME, BEGIN_DATE, END_DATE, TYPE_ID, CREATED_BY, LAST_MODIFIED_BY, CREATED_DATE, LAST_MODIFIED_DATE, orgId, proj_id, module_id, fm, form_type, edit_list_filter, filter_match_column, self_mode', 'safe', 'on'=>'search'),
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
			'formFields' => array(self::HAS_MANY, 'FormFields', 'FORM_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'FORM_ID' => 'Form',
			'FORM_NAME' => 'Form Name',
			'BEGIN_DATE' => 'Begin Date',
			'END_DATE' => 'End Date',
			'TYPE_ID' => 'Type',
			'CREATED_BY' => 'Created By',
			'LAST_MODIFIED_BY' => 'Last Modified By',
			'CREATED_DATE' => 'Created Date',
			'LAST_MODIFIED_DATE' => 'Last Modified Date',
			'orgId' => 'Org',
			'proj_id' => 'Proj',
			'module_id' => 'Module',
			'fm' => 'Fm',
			'form_type' => 'Form Type',
			'edit_list_filter' => 'Edit List Filter',
			'filter_match_column' => 'Filter Match Column',
			'self_mode' => 'Self Mode',
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

		$criteria->compare('FORM_ID',$this->FORM_ID);
		$criteria->compare('FORM_NAME',$this->FORM_NAME,true);
		$criteria->compare('BEGIN_DATE',$this->BEGIN_DATE,true);
		$criteria->compare('END_DATE',$this->END_DATE,true);
		$criteria->compare('TYPE_ID',$this->TYPE_ID);
		$criteria->compare('CREATED_BY',$this->CREATED_BY,true);
		$criteria->compare('LAST_MODIFIED_BY',$this->LAST_MODIFIED_BY,true);
		$criteria->compare('CREATED_DATE',$this->CREATED_DATE,true);
		$criteria->compare('LAST_MODIFIED_DATE',$this->LAST_MODIFIED_DATE,true);
		$criteria->compare('orgId',$this->orgId);
		$criteria->compare('proj_id',$this->proj_id);
		$criteria->compare('module_id',$this->module_id);
		$criteria->compare('fm',$this->fm);
		$criteria->compare('form_type',$this->form_type);
		$criteria->compare('edit_list_filter',$this->edit_list_filter,true);
		$criteria->compare('filter_match_column',$this->filter_match_column,true);
		$criteria->compare('self_mode',$this->self_mode);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Forms the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
