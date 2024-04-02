<?php

/**
 * This is the model class for table "form_field_cssproperty_value_mapping".
 *
 * The followings are the available columns in table 'form_field_cssproperty_value_mapping':
 * @property integer $id
 * @property integer $form_id
 * @property integer $field_id
 * @property integer $css_property_id
 * @property string $value
 *
 * The followings are the available model relations:
 * @property CssProperties $cssProperty
 * @property FormFields $field
 */
class FormFieldCsspropertyValueMapping extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'form_field_cssproperty_value_mapping';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('form_id, field_id, css_property_id, value', 'required'),
			array('form_id, field_id, css_property_id', 'numerical', 'integerOnly'=>true),
			array('value', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, form_id, field_id, css_property_id, value', 'safe', 'on'=>'search'),
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
			'cssProperty' => array(self::BELONGS_TO, 'CssProperties', 'css_property_id'),
			'field' => array(self::BELONGS_TO, 'FormFields', 'field_id'),
                                'form' => array(self::BELONGS_TO, 'ApplicationForms', 'form_id'),

		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'form_id' => 'Form',
			'field_id' => 'Field',
			'css_property_id' => 'Css Property',
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
		$criteria->compare('form_id',$this->form_id);
		$criteria->compare('field_id',$this->field_id);
		$criteria->compare('css_property_id',$this->css_property_id);
		$criteria->compare('value',$this->value,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FormFieldCsspropertyValueMapping the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
