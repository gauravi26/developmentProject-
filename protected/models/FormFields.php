<?php

/**
 * This is the model class for table "form_fields".
 *
 * The followings are the available columns in table 'form_fields':
 * @property integer $FIELD_ID
 * @property integer $FORM_ID
 * @property string $TITLE
 * @property integer $REQUIRED
 * @property string $f_MATCH
 * @property string $f_RANGE
 * @property string $ERROR_MESSAGE
 * @property string $OTHER_VALIDATOR
 * @property string $WIDGET
 * @property string $WIDGETPARAMS
 * @property integer $POSITION
 * @property integer $VISIBLE
 * @property string $FORMULA_ID
 * @property string $INPUT_TYPE
 * @property integer $field_condition_flag
 * @property string $filter_query
 * @property integer $CRUD_VIEW
 * @property integer $dependent_on
 * @property string $dependent_ParentCol
 * @property integer $onchange
 * @property string $parent_ConnectedCol
 * @property integer $add_more
 * @property integer $addMore_inRowOf
 * @property string $upload_folder
 * @property integer $language_id
 * @property integer $unique_flag
 * @property string $parent_unique_column
 * @property string $unique_combination
 * @property string $active_language_event_table
 * @property string $active_language_event_column
 * @property integer $readonly
 * @property string $form_multivalue_mapping_tableName
 * @property string $multivalue_mapping_form_value
 * @property string $multivalue_mapping_data_value
 * @property string $comment
 * @property integer $external_field
 * @property integer $table_column_id
 * @property string $label_note
 * @property integer $parent_data_entry
 * @property string $order_by
 */
class FormFields extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'form_fields';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('FORMULA_ID, INPUT_TYPE, field_condition_flag, filter_query, CRUD_VIEW, dependent_on, dependent_ParentCol, onchange, parent_ConnectedCol, add_more, addMore_inRowOf, upload_folder, language_id, unique_flag, parent_unique_column, unique_combination, active_language_event_table, active_language_event_column, readonly, form_multivalue_mapping_tableName, multivalue_mapping_form_value, multivalue_mapping_data_value, comment, external_field, table_column_id, label_note, parent_data_entry, order_by', 'required'),
			array('FORM_ID, REQUIRED, POSITION, VISIBLE, field_condition_flag, CRUD_VIEW, dependent_on, onchange, add_more, addMore_inRowOf, language_id, unique_flag, readonly, external_field, table_column_id, parent_data_entry', 'numerical', 'integerOnly'=>true),
			array('TITLE, f_MATCH, f_RANGE, ERROR_MESSAGE, WIDGET', 'length', 'max'=>255),
			array('FORMULA_ID', 'length', 'max'=>50),
			array('INPUT_TYPE, parent_unique_column, form_multivalue_mapping_tableName, label_note', 'length', 'max'=>100),
			array('dependent_ParentCol, parent_ConnectedCol, upload_folder, active_language_event_table, active_language_event_column, multivalue_mapping_form_value, multivalue_mapping_data_value', 'length', 'max'=>200),
			array('unique_combination, order_by', 'length', 'max'=>500),
			array('OTHER_VALIDATOR, WIDGETPARAMS', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('FIELD_ID, FORM_ID, TITLE, REQUIRED, f_MATCH, f_RANGE, ERROR_MESSAGE, OTHER_VALIDATOR, WIDGET, WIDGETPARAMS, POSITION, VISIBLE, FORMULA_ID, INPUT_TYPE, field_condition_flag, filter_query, CRUD_VIEW, dependent_on, dependent_ParentCol, onchange, parent_ConnectedCol, add_more, addMore_inRowOf, upload_folder, language_id, unique_flag, parent_unique_column, unique_combination, active_language_event_table, active_language_event_column, readonly, form_multivalue_mapping_tableName, multivalue_mapping_form_value, multivalue_mapping_data_value, comment, external_field, table_column_id, label_note, parent_data_entry, order_by', 'safe', 'on'=>'search'),
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
			'FIELD_ID' => 'Field',
			'FORM_ID' => 'Form',
			'TITLE' => 'Title',
			'REQUIRED' => 'Required',
			'f_MATCH' => 'F Match',
			'f_RANGE' => 'F Range',
			'ERROR_MESSAGE' => 'Error Message',
			'OTHER_VALIDATOR' => 'Other Validator',
			'WIDGET' => 'Widget',
			'WIDGETPARAMS' => 'Widgetparams',
			'POSITION' => 'Position',
			'VISIBLE' => 'Visible',
			'FORMULA_ID' => 'Formula',
			'INPUT_TYPE' => 'Input Type',
			'field_condition_flag' => 'Field Condition Flag',
			'filter_query' => 'Filter Query',
			'CRUD_VIEW' => 'Crud View',
			'dependent_on' => 'Dependent On',
			'dependent_ParentCol' => 'Dependent Parent Col',
			'onchange' => 'Onchange',
			'parent_ConnectedCol' => 'Parent Connected Col',
			'add_more' => 'Add More',
			'addMore_inRowOf' => 'Add More In Row Of',
			'upload_folder' => 'Upload Folder',
			'language_id' => 'Language',
			'unique_flag' => 'Unique Flag',
			'parent_unique_column' => 'Parent Unique Column',
			'unique_combination' => 'Unique Combination',
			'active_language_event_table' => 'Active Language Event Table',
			'active_language_event_column' => 'Active Language Event Column',
			'readonly' => 'Readonly',
			'form_multivalue_mapping_tableName' => 'Form Multivalue Mapping Table Name',
			'multivalue_mapping_form_value' => 'Multivalue Mapping Form Value',
			'multivalue_mapping_data_value' => 'Multivalue Mapping Data Value',
			'comment' => 'Comment',
			'external_field' => 'External Field',
			'table_column_id' => 'Table Column',
			'label_note' => 'Label Note',
			'parent_data_entry' => 'Parent Data Entry',
			'order_by' => 'Order By',
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

		$criteria->compare('FIELD_ID',$this->FIELD_ID);
		$criteria->compare('FORM_ID',$this->FORM_ID);
		$criteria->compare('TITLE',$this->TITLE,true);
		$criteria->compare('REQUIRED',$this->REQUIRED);
		$criteria->compare('f_MATCH',$this->f_MATCH,true);
		$criteria->compare('f_RANGE',$this->f_RANGE,true);
		$criteria->compare('ERROR_MESSAGE',$this->ERROR_MESSAGE,true);
		$criteria->compare('OTHER_VALIDATOR',$this->OTHER_VALIDATOR,true);
		$criteria->compare('WIDGET',$this->WIDGET,true);
		$criteria->compare('WIDGETPARAMS',$this->WIDGETPARAMS,true);
		$criteria->compare('POSITION',$this->POSITION);
		$criteria->compare('VISIBLE',$this->VISIBLE);
		$criteria->compare('FORMULA_ID',$this->FORMULA_ID,true);
		$criteria->compare('INPUT_TYPE',$this->INPUT_TYPE,true);
		$criteria->compare('field_condition_flag',$this->field_condition_flag);
		$criteria->compare('filter_query',$this->filter_query,true);
		$criteria->compare('CRUD_VIEW',$this->CRUD_VIEW);
		$criteria->compare('dependent_on',$this->dependent_on);
		$criteria->compare('dependent_ParentCol',$this->dependent_ParentCol,true);
		$criteria->compare('onchange',$this->onchange);
		$criteria->compare('parent_ConnectedCol',$this->parent_ConnectedCol,true);
		$criteria->compare('add_more',$this->add_more);
		$criteria->compare('addMore_inRowOf',$this->addMore_inRowOf);
		$criteria->compare('upload_folder',$this->upload_folder,true);
		$criteria->compare('language_id',$this->language_id);
		$criteria->compare('unique_flag',$this->unique_flag);
		$criteria->compare('parent_unique_column',$this->parent_unique_column,true);
		$criteria->compare('unique_combination',$this->unique_combination,true);
		$criteria->compare('active_language_event_table',$this->active_language_event_table,true);
		$criteria->compare('active_language_event_column',$this->active_language_event_column,true);
		$criteria->compare('readonly',$this->readonly);
		$criteria->compare('form_multivalue_mapping_tableName',$this->form_multivalue_mapping_tableName,true);
		$criteria->compare('multivalue_mapping_form_value',$this->multivalue_mapping_form_value,true);
		$criteria->compare('multivalue_mapping_data_value',$this->multivalue_mapping_data_value,true);
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('external_field',$this->external_field);
		$criteria->compare('table_column_id',$this->table_column_id);
		$criteria->compare('label_note',$this->label_note,true);
		$criteria->compare('parent_data_entry',$this->parent_data_entry);
		$criteria->compare('order_by',$this->order_by,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FormFields the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
