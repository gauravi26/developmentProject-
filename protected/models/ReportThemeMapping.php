<?php

/**
 * This is the model class for table "report_theme_mapping".
 *
 * The followings are the available columns in table 'report_theme_mapping':
 * @property integer $id
 * @property integer $application_forms_id
 * @property integer $report_id
 * @property integer $theme_ID
 */
class ReportThemeMapping extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'report_theme_mapping';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('application_forms_id, report_id, theme_ID', 'required'),
			array('application_forms_id, report_id, theme_ID', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, application_forms_id, report_id, theme_ID', 'safe', 'on'=>'search'),
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
            'applicationForms' => array(self::BELONGS_TO, 'ApplicationForms', 'application_forms_id'),
            'report' => array(self::BELONGS_TO, 'Report', 'report_id'),
            'theme' => array(self::BELONGS_TO, 'ThemeforReport', 'theme_ID'),
        );
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'application_forms_id' => 'Application Forms',
			'report_id' => 'Report',
			'theme_ID' => 'Theme',
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
		$criteria->compare('application_forms_id',$this->application_forms_id);
		$criteria->compare('report_id',$this->report_id);
		$criteria->compare('theme_ID',$this->theme_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ReportThemeMapping the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
