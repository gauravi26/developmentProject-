<?php

/**
 * This is the model class for table "action_argument_map".
 *
 * The followings are the available columns in table 'action_argument_map':
 * @property integer $id
 * @property integer $action_library_id
 * @property string $argument_display_name
 * @property string $argument
 *
 * The followings are the available model relations:
 * @property ActionLibrary $actionLibrary
 */
class ActionArgumentMap extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'action_argument_map';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('action_library_id, argument_display_name, argument', 'required'),
			array('action_library_id', 'numerical', 'integerOnly'=>true),
			array('argument_display_name, argument', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, action_library_id, argument_display_name, argument', 'safe', 'on'=>'search'),
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
			'actionLibrary' => array(self::BELONGS_TO, 'ActionLibrary', 'action_library_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'action_library_id' => 'Action Library',
			'argument_display_name' => 'Argument Display Name',
			'argument' => 'Argument',
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
		$criteria->compare('action_library_id',$this->action_library_id);
		$criteria->compare('argument_display_name',$this->argument_display_name,true);
		$criteria->compare('argument',$this->argument,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ActionArgumentMap the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
