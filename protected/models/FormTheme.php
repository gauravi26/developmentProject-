<?php

/**
 * This is the model class for table "form_theme".
 *
 * The followings are the available columns in table 'form_theme':
 * @property integer $id
 * @property string $form_element
 * @property string $property
 * @property string $value
 * @property string $form_theme_name
 */
class FormTheme extends CActiveRecord
{
        public $themeId; // Define the "themeId" property

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'form_theme';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('form_element, property, value, form_theme_name', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, form_element, property, value, form_theme_name', 'safe', 'on'=>'search'),
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
			'form_element' => 'Form Element',
			'property' => 'Property',
			'value' => 'Value',
			'form_theme_name' => 'Form Theme Name',
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
		$criteria->compare('form_element',$this->form_element,true);
		$criteria->compare('property',$this->property,true);
		$criteria->compare('value',$this->value,true);
		$criteria->compare('form_theme_name',$this->form_theme_name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FormTheme the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
//        public static function getThemes()
//{
//    $themes = self::model()->findAll();
//    $themeList = [];
//    foreach ($themes as $theme) {
//        $themeList[$theme->id] = $theme->form_theme_name;
//    }
//    return $themeList;
//}

}
