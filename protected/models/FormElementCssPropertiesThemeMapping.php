<?php

/**
 * This is the model class for table "form_element_css_properties_theme_mapping".
 *
 * The followings are the available columns in table 'form_element_css_properties_theme_mapping':
 * @property integer $id
 * @property integer $theme_ID
 * @property integer $form_element_css_properties_id
 * @property string $value
 *
 * The followings are the available model relations:
 * @property FormElementCssProperties $formElementCssProperties
 */
class FormElementCssPropertiesThemeMapping extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'form_element_css_properties_theme_mapping';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
//			array('theme_ID, form_element_css_properties_id', 'required'),
//			array('theme_ID, form_element_css_properties_id', 'numerical', 'integerOnly'=>true),
//			array('value', 'length', 'max'=>255),
//			// The following rule is used by search().
//			// @todo Please remove those attributes that should not be searched.
//			array('id, theme_ID, form_element_css_properties_id, value', 'safe', 'on'=>'search'),
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
			'formElementCssProperties' => array(self::BELONGS_TO, 'FormElementCssProperties', 'form_element_css_properties_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'theme_ID' => 'Theme',
			'form_element_css_properties_id' => 'Form Element Css Properties',
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
		$criteria->compare('theme_ID',$this->theme_ID);
		$criteria->compare('form_element_css_properties_id',$this->form_element_css_properties_id);
		$criteria->compare('value',$this->value,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FormElementCssPropertiesThemeMapping the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
