<?php

namespace app\models;

use app\modules\varios\models\Accesos;
use app\modules\varios\models\Usuarios;
use DateInterval;
use DateTime;
use Yii;
use yii\base\BaseObject;
use yii\web\IdentityInterface;


class User extends BaseObject implements IdentityInterface
{
    //public static $usernum;
    //public static $usuario;
    //public static $password;
    //public static $authKey;
    public static $esadministrador;
    //public static $datos = null;
    
    public static $id;
    public static $username;
    public static $password;
    public static $authKey;
    public static $accessToken;
    public static $acceso;
    public static $ejercicio;
    public static $authtoken;
    private static $users = null;


    public function setUsuario($u) {
        self::$username = $u;
        //self::$usuario = $u;
    }

    public function getUsuario() {
        return self::$username;
        //return self::$usuario;
    }

    public function setUsernum($u) {
        self::$id = $u;
        //self::$usernum = $u;
    }

    public function getUsernum() {
        return self::$id;
        //return self::$usernum;
    }

    public function setPassword($u) {
        self::$password = $u;
    }

    public function getPassword() {
        return self::$password;
    }

    public function setAuthKey($u) {
        self::$authKey = $u;
    }

    public function setEsadministrador($u) {
        self::$esadministrador = $u;
    }

    public function getEsadministrador() {
        return self::$esadministrador;
    }

    public function getUsername() {
        return $this->getUsuario();
    }
    
    public function setUsername($u) {
        self::$username = $u;
    }
    
    public function setAcceso($u) {
        self::$acceso = $u;
    }

    public function getAcceso() {
        return self::$acceso;
    }
    public function setEjercicio($u) {
        self::$ejercicio = $u;
    }

    public function getEjercicio() {
        return self::$ejercicio;
    }
    
    public function setAuthtoken($u) {
        self::$authtoken = $u;
    }

    public function getAuthtoken() {
        return self::$authtoken;
    }
    
    public function setId($u) {
        self::$id = $u;
        //self::$usernum = $u;
    }
    
    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        //return isset(self::$users[$usernum]) ? new static(self::$users[$usernum]) : null;
        $users = Usuarios::find()
                ->where(['usernum' => $id])
                ->one();
        if (is_null($users)) {
            return null;
        }
        self::$username = $users->usuario;
        self::$id = $users->usernum;
        self::$password = $users->clave;
        self::$authKey = $users->authtoken;
        self::$esadministrador = $users->esadministrador;
        self::$users = Array(
            "username" => $users->usuario,
            "id" => $users->usernum,
            "password" => $users->clave,
            "authKey" => $users->authtoken,
            "esadministrador" => $users->esadministrador
        );
        //var_dump(self::$users);
        return new static(self::$users);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        $users = Accesos::find()
                ->where(['authtoken' => $token])
                ->one();
        if (is_null($users)) {
            return null;
        }
        $ahora = new DateTime("now");
        $timeout = date_create($users->ultiacceso)->add(new DateInterval('PT5H'));
        if ($ahora > $timeout) {
            Accesos::deleteAll('authtoken=:tok', ['tok' => $token]);
            return null;
        }
        return new static(self::$users);
    }
    
    /**
     * Finds user by username
     *
     * @param string $username
     * @param string $password
     * @return static|null
     */
    public static function checkUsuario($username, $password) {
        $users = Usuarios::find()
                ->where(['usuario' => $username, 'clave' => md5($password)])
                ->one();
        if (is_null($users)) {
            return null;
        }
        self::$username = $users->usuario;
        self::$id = $users->usernum;
        self::$password = $users->clave;
        self::$authKey = Yii::$app->security->generateRandomString();
        self::$esadministrador = $users->esadministrador;
        self::$users = Array(
            "username" => $users->usuario,
            "id" => $users->usernum,
            "password" => $users->clave,
            "authKey" => self::$authKey,
            "esadministrador" => $users->esadministrador
        );
        //var_dump(self::$users);

        Accesos::getDb()->createCommand('delete from accesos where usernum=:usernum', [':usernum' => self::$usernum,])->execute();
        $accesos = new Accesos();
        $accesos->usernum = $users->usernum;
        $accesos->termi = "";
        $accesos->acceso = $users->acceso;
        $accesos->empresa = 1;
        $accesos->ejercicio = date("Y");
        $accesos->emprenom = "Sin Determinar";
        $accesos->w = 0;
        $accesos->fechasis = date('Y-m-d');
        $accesos->authtoken = self::$authKey;
        $accesos->ultiacceso = date('Y-m-d H:i:s');
        $accesos->save();
        return new static(self::$users);
    }
    
    public static function logoutId($id) {
        Yii::$app->db->createCommand('delete from accesos where usernum=:id', [':id' => $id])->execute();
        return Yii::$app->user->logout();
    }
    
    public static function logoutToken($token) {
        //var_dump($token);
        Yii::$app->db->createCommand('delete from accesos where authtoken=:token', [':token' => $token])->execute();
        return Yii::$app->user->logout();
    }

    public function renew($token) {
        $users = Accesos::find()
                ->where(['authtoken' => $token])
                ->one();
        if (is_null($users)) {
            return null;
        }
        $ahora = new DateTime("now");
        $timeout = date_create($users->ultiacceso)->add(new DateInterval('PT5H'));
        if ($ahora > $timeout) {
            Accesos::deleteAll('authtoken=:tok', ['tok' => $token]);
            return null;
        }
        $key = Yii::$app->security->generateRandomString();
        self::$authKey = $key;

        Accesos::getDb()->createCommand('update accesos '
                . 'set authtoken=:token, '
                . 'ultiacceso=:fec '
                . 'where usernum=:usernum', [
            ':usernum' => $users->usernum,
            ':token' => self::$authKey,
            ':fec' => date('Y-m-d H:i:s')
        ])->execute();
        return $key;
    }
    
    
    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
         //return isset(self::$users[$usernum]) ? new static(self::$users[$usernum]) : null;
        $usersl = Usuarios::find()
                ->where(['usuario' => $username])
                ->one();
        if (is_null($usersl)) {
            return null;
        }
        self::$username = $usersl->usuario;
        self::$id = $usersl->usernum;
        self::$password = $usersl->clave;
        self::$authKey = $usersl->authtoken;
        self::$esadministrador = $usersl->esadministrador;
        self::$users = Array(
            "username" => $usersl->usuario,
            "id" => $usersl->usernum,
            "password" => $usersl->clave,
            "authKey" => $usersl->authtoken,
            "esadministrador" => $usersl->esadministrador
        );
        //var_dump(self::$users);
        return new static(self::$users);
        
         /*$users = Usuarios::find()
                ->where(['usuario' => $username])
                ->one();
        if (is_null($users)) {
            return null;
        }*/
        //return new static($users);
        
        /*foreach (self::$users as $user) {
            if (strcasecmp($user['username'], $username) === 0) {
                return new static($user);
            }
        }*/

        //return null;
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return self::$id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return self::$authKey;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return self::$authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return self::$password === md5($password);
    }
}
