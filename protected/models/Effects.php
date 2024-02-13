<?php

/**
 * This is the model class for table "effects".
 *
 * The followings are the available columns in table 'effects':
 * @property integer $id
 * @property integer $form_id
 * @property integer $trigger_id
 * @property integer $FIELD_ID
 * @property string $effect_code_id
 */
class Effects extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'effects';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('form_id, trigger_id, FIELD_ID, effect_code_id', 'required'),
			array('form_id, trigger_id, FIELD_ID', 'numerical', 'integerOnly'=>true),
			array('effect_code_id', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, form_id, trigger_id, FIELD_ID, effect_code_id', 'safe', 'on'=>'search'),
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
			'form_id' => 'Form',
			'trigger_id' => 'Trigger',
			'FIELD_ID' => 'Field',
			'effect_code_id' => 'Effect Code',
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
		$criteria->compare('trigger_id',$this->trigger_id);
		$criteria->compare('FIELD_ID',$this->FIELD_ID);
		$criteria->compare('effect_code_id',$this->effect_code_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Effects the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
