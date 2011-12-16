<?php

/**
 * This is the model class for table "TBL_USER".
 *
 * The followings are the available columns in table 'TBL_USER':
 * @property double $ID
 * @property string $USERNAME
 * @property string $PASSWORD
 * @property string $EMAIL
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return User the static model class
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
		return 'TBL_USER';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array('USERNAME, PASSWORD, EMAIL', 'required'),
			array('ID', 'numerical'),
			array('USERNAME, PASSWORD', 'length', 'max'=>128),
                        array('USERNAME', 'unique', 'attributeName'=>'USERNAME'),
                        array('EMAIL', 'email'),
                        array('EMAIL', 'unique', 'attributeName'=>'EMAIL'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, USERNAME, PASSWORD, EMAIL', 'safe', 'on'=>'search'),
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
			'USERNAME' => 'Username',
			'PASSWORD' => 'Password',
			'EMAIL' => 'Email',
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

               // $criteria->condition = "ID=1";
                $sort=new CSort();
                $sort->defaultOrder='USERNAME ASC';

		$criteria->compare('ID',$this->ID);
		$criteria->compare('USERNAME',$this->USERNAME,true);
		$criteria->compare('PASSWORD',$this->PASSWORD,true);
		$criteria->compare('EMAIL',$this->EMAIL,true);

                  //Almacena los datos de la busqueda en una variable de sesión
                  //Se utiliza en la exportación de los datos a pdf.
                $_SESSION['datos_filtrados'] = new CActiveDataProvider($this, array(
                'criteria'=>$criteria,
                'sort'=>$sort,
                'pagination'=>false,
                ));


		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'sort'=>$sort,
		));
	}

        public function validatePassword($password)
        {
            return $this->hashPassword($password)===$this->PASSWORD;
        }

        public function hashPassword($password)
        {
          return md5($password);
        }

}