<?php

/**
 * This is the model class for table "form_theme_mapping".
 *
 * The followings are the available columns in table 'form_theme_mapping':
 * @property integer $id
 * @property integer $form_id
 * @property integer $theme_ID
 * @property string $theme_name
 * @property string $controller
 * @property string $action
 *
 * The followings are the available model relations:
 * @property Themes $theme
 */
class FormThemeMapping extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'form_theme_mapping';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('form_id, theme_ID', 'required'),
			array('form_id, theme_ID', 'numerical', 'integerOnly'=>true),
			array('theme_name, controller, action', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, form_id, theme_ID, theme_name, controller, action', 'safe', 'on'=>'search'),
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
			'theme' => array(self::BELONGS_TO, 'Themes', 'theme_ID'),
		            'applicationForms' => array(self::BELONGS_TO, 'ApplicationForms', 'form_id'),

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
			'theme_ID' => 'Theme',
			'theme_name' => 'Theme Name',
			'controller' => 'Controller',
			'action' => 'Action',
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
		$criteria->compare('theme_ID',$this->theme_ID);
		$criteria->compare('theme_name',$this->theme_name,true);
		$criteria->compare('controller',$this->controller,true);
		$criteria->compare('action',$this->action,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FormThemeMapping the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
