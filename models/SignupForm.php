<?php 

namespace app\models;
use yii\base\Model;


class SignupForm extends Model {
  
  public $username
  public $password
  public $isAdmin = false
    
     public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
        ];
    }
  
}