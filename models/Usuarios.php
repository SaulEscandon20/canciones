<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuarios".
 *
 * @property int $id
 * @property string $nombre
 * @property string $password
 * @property string $authKey
 * @property string $accessToken
 */
class Usuarios extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{

    public static function tableName()
    {
        return 'usuarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'password'], 'string', 'max' => 25],
            [['authKey', 'accessToken'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nombre' => 'Nombre',
            'password' => 'Password',
        ];
    }

    public static function findIdentity($id){
        return self::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type=null){
        return self::findOne(['accessToken'=>$token]);
    }

    public static function findByUsername($nombre){
        return self::findOne(['nombre'=>$nombre]);
    }

    public function getId(){
        return $this->id;
    }

    public function getAuthKey(){
        return $this->authKey;
    }

    public function validateAuthKey($authKey){
        return $this->authKey === $authKey;
    }    

    public function validatePassword($password){
        return $this->password === $password;
    }

}
