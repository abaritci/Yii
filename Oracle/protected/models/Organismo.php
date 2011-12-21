<?php

/**
 * This is the model class for table "ORGANISMO".
 *
 * The followings are the available columns in table 'ORGANISMO':
 * @property integer $ID
 * @property string $ID_TIPO_ORG
 * @property string $ID_ORG_G
 * @property string $CREATED_DATE
 * @property string $MODIFIED_DATE
 * @property string $CREATED_BY
 * @property string $MODIFIED_BY
 */
class Organismo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Organismo the static model class
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
		return 'ORGANISMO';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_TIPO_ORG, ID_ORG_G', 'length', 'max'=>50),
			array('CREATED_BY, MODIFIED_BY', 'length', 'max'=>128),
			array('CREATED_DATE, MODIFIED_DATE', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, ID_TIPO_ORG, ID_ORG_G, CREATED_DATE, MODIFIED_DATE, CREATED_BY, MODIFIED_BY', 'safe', 'on'=>'search'),
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
			'ID' => 'ID',
			'ID_TIPO_ORG' => 'Id Tipo Org',
			'ID_ORG_G' => 'Id Org G',
			'CREATED_DATE' => 'Created Date',
			'MODIFIED_DATE' => 'Modified Date',
			'CREATED_BY' => 'Created By',
			'MODIFIED_BY' => 'Modified By',
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

		$criteria->compare('ID',$this->ID);
		$criteria->compare('ID_TIPO_ORG',$this->ID_TIPO_ORG,true);
		$criteria->compare('ID_ORG_G',$this->ID_ORG_G,true);
		$criteria->compare('CREATED_DATE',$this->CREATED_DATE,true);
		$criteria->compare('MODIFIED_DATE',$this->MODIFIED_DATE,true);
		$criteria->compare('CREATED_BY',$this->CREATED_BY,true);
		$criteria->compare('MODIFIED_BY',$this->MODIFIED_BY,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

        public function behaviors()
            {
            return array(
          /*  'datetimeI18NBehavior' => array(
                                'class'=>'application.extensions.DateTimeI18NBehavior.DateTimeI18NBehavior',
                        ),
           'CTimestampBehavior' => array(
            'class' => 'zii.behaviors.CTimestampBehavior',
            'createAttribute' => 'CREATED_DATE',
            'updateAttribute' => 'MODIFIED_DATE',
            'setUpdateOnCreate' => true,
            ),
*/            'BlameableBehavior' => array(
            'class' => 'application.components.BlameableBehavior',
            'createdByColumn' => 'CREATED_BY',
            'updatedByColumn' => 'MODIFIED_BY',
            ),
            );
            }



}