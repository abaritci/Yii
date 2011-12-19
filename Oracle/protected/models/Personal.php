<?php

/**
 * This is the model class for table "PERSONAL".
 *
 * The followings are the available columns in table 'PERSONAL':
 * @property integer $ID_PERSONAL
 * @property string $NOMBRE_PERSONAL
 * @property integer $ID_ESTADO
 *
 * The followings are the available model relations:
 * @property ESTADO $iDESTADO
 */
class Personal extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Personal the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'PERSONAL';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_ESTADO', 'numerical', 'integerOnly'=>true),
			array('NOMBRE_PERSONAL', 'length', 'max'=>128),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID_PERSONAL, NOMBRE_PERSONAL, ID_ESTADO', 'safe', 'on'=>'search'),
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
			'iDESTADO' => array(self::BELONGS_TO, 'ESTADO', 'ID_ESTADO'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_PERSONAL' => 'Id Personal',
			'NOMBRE_PERSONAL' => 'Nombre Personal',
			'ID_ESTADO' => 'Id Estado',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ID_PERSONAL',$this->ID_PERSONAL);
		$criteria->compare('NOMBRE_PERSONAL',$this->NOMBRE_PERSONAL,true);
		$criteria->compare('ID_ESTADO',$this->ID_ESTADO);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}