<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class TestForm extends CFormModel
{
    public $fecha;

            public function rules()
              {
                    return array(
                        array('fecha', 'myCheckdate',),
                    );
                }

            public function myCheckdate($attribute,$params)
            {
            if(!$this->hasErrors())
            {
                if(! strtotime($this->{$attribute}))
                {
                    $this->addError($attribute,'The date is incorrect.');
                }
            }
}


}



?>
