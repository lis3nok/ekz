<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $fio
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $admin
 *
 * @property Request[] $requests
 */
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fio', 'username', 'password', 'email'], 'required'],
            [['admin'], 'string'],
            [['fio'], 'string', 'max' => 255],
            [['username', 'password', 'email'], 'string', 'max' => 100],
            [['username'], 'unique'],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'ФИО',
            'username' => 'Username',
            'password' => 'Пароль',
            'email' => 'Email',
            'admin' => 'Admin',
        ];
    }

    /**
     * Gets query for [[Requests]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRequests()
    {
        return $this->hasMany(Request::className(), ['id_user' => 'id']);
    }

###############################################################################


###############################################################################

    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

     /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        // return null;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return self::find()->where(['username'=> $username])->one();
        return null;
    }

     
    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }


 /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }
   ######################################################################

  

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        // return $this->authKey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        // return $this->authKey === $authKey;
    }


}
