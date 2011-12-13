<?php
/* 
 * Modulo de inicio de sesión personalizado
 * @author: Isabel Palomar Bernardino.
 */
class ExampleForm  extends CFormModel{

    public $username;
    public $contrasena;
    public $recuerdame=true;
    private $_identity;

    //{}
    public function rules(){

		return array(
			// Username y contrasena son campos obligatorios
			array('username, contrasena', 'required','message'=>'"{attribute}" es un campo obligatorio.'),
			// recordar contraseña es de tipo boleano
			array('recuerdame', 'boolean'),
			// la contraseña es necesaria para la autentificacion del usuario
			array('contrasena', 'authenticate'),
		);
    }

    public function attributeLabels()
	{
		return array(
			'recuerdame'=>'Recordar mi contraseña',
		);
	} //fin de la funcion attributeLabels


       /**
	 * Authentifica la contraseña
	 * Es un valor que fue declarado en las reglas citadas anteriormente (metodo rules())
	 */
	public function authenticate($attribute,$params)
	{
		if(!$this->hasErrors())
		{
			$this->_identity=new UserIdentity($this->username,$this->contrasena);
			if(!$this->_identity->authenticate())
				$this->addError('contrasena','Revise la información. Nombre de usuario o contraseña incorrecta.');
		}
	}//fin del metodo authenticat
        /**
	 * Logs in the user using the given username and password in the model.
	 * @return boolean whether login is successful
	 */
	public function login()
	{
		if($this->_identity===null)
		{
			$this->_identity=new UserIdentity($this->username,$this->contrasena);
			$this->_identity->authenticate();
		}
		if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
		{
			$duration=$this->recuerdame ? 3600*24*30 : 0; // 30 days
			Yii::app()->user->login($this->_identity,$duration);
			return true;
		}
		else
			return false;
	}

}//fin de la clase ExampleForm
?>
