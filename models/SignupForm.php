<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property-read User|null $user
 *
 */
class SignupForm extends Model
{
    public $username;
    public $surname;
    public $name;
    public $patronymic;
    public $email;
    public $role;
    public $password;
    public $rememberMe = true;



    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['username', 'password', 'surname', 'name', 'email'], 'required'],

            [['patronymic', 'role'], 'string'],

            ['rememberMe', 'boolean'],
        ];
    }

    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        $user = new User();
        $user->username = $this->username;
        $user->surname = $this->surname;
        $user->name = $this->name;
        $user->patronymic = $this->patronymic;
        $user->email = $this->email;
        $user->role = $this->role;
        $user->password = $this->password;

        return $user->save() ? $user: null;
    }

    public function attributeLabels()
    {
        return [
            'username' => 'Логин',
            'surname' => 'Фамилия',
            'name' => 'Имя',
            'patronymic' => 'Отчество',
            'email' => 'E-mail',
            'role' => 'Роль',
            'password' => 'Пароль',
            'rememberMe' => 'Я даю согласие на обработку персональных данных',
        ];
    }
}
