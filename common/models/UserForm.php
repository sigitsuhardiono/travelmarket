<?php
namespace common\models;

use Yii;
use yii\base\Model;

/**
 * Login form
 */
class UserForm extends Model
{	
	public $id;
    public $username;
    public $password;
	public $status;
	public $role;
	
	
    private $_user;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
			 [['username', 'password'], 'trim'],
			 [['username', 'password'], 'default'],
            // username and password are both required
            [['username', 'password','role'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Incorrect username or password.');
            }
        }
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    protected function getUser()
    {
        if ($this->_user === null) {
            $this->_user = User::findByUsername($this->username,$this->role);
        }

        return $this->_user;
    }

	public function fill($pId)
	{
		$this->_user = User::findIdentity($pId);
		
		$this->id = $this->_user->id;
		$this->username = $this->_user->username;
		$this->password = $this->_user->password_hash;
		$this->status = $this->_user->status;		
	}
}
