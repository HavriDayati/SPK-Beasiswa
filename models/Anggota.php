<?php

namespace app\models;

use Yii;
use yii\Helpers\ArrayHelper;
use yii\helpers\Html;
use app\models\User;

/**
 * This is the model class for table "anggota".
 *
 * @property integer $id
 * @property string $nama
 * @property string $alamat
 * @property string $photo
 * @property integer $id_jenis_kelamin
 * @property string $email
 * @property string $tgl_lhr
 */
class Anggota extends \yii\db\ActiveRecord
{
    public $username;
    public $password;
    public $password_konfirmasi;
    /**
     * @inheritdoc
     */
    public $file;
    public static function tableName()
    {
        return 'anggota';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'alamat', 'photo', 'id_jenis_kelamin', 'email', 'tgl_lhr', 'username', 'password','password_konfirmasi'], 'required'],
            [['id', 'id_jenis_kelamin'], 'integer'],
            [['alamat'], 'string'],
            [['tgl_lhr'], 'safe'],
            [['nama', 'photo', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'photo' => 'Photo',
            'id_jenis_kelamin' => 'Jenis Kelamin',
            'email' => 'Email',
            'tgl_lhr' => 'Tanggal Lahir',
        ];
    }

    public function getUser()
    {
        return $this->hasOne(User::className(),['nama_anggota' => 'id']);
    }

    public function getRelationField($relation,$field)
    {
        if(!empty($this->$relation->$field)){
            return $this->$relation->$field;   
        }
        else{
            return null;
        }
    }

    public function getIdJenisKelamin()
    {
        return $this->hasOne(JenisKelamin::className(), ['id' => 'id_jenis_kelamin']);
}

public function createUser()
    {
        $user = new User;
        $user->username = $this->username;
        $user->password = Yii::$app->getSecurity()->generatePasswordHash($this->password);

        $user->id_role = 3;

        if ($user->save(false))
            return true;
        else
                throw new \Exception("Error Processing Request".var_dump($user->errors), 400);
            return true;
    }
public static function getList()
    {
        return ArrayHelper::map(DataMahasiswa::find()->all(),'id','nama');
    }
    public static function getCount()
    {
        return self::find()->count();
}

public function validatePassword($attribute, $params)
    {
        if($this->password != $this->password_konfirmasi)
        {
            $this->addError($attribute, 'Password konfirmasi tidak sesuai');
        }
    }

public function getGambar($htmlOptions=[])
    {
        //jika file ada dalam direktori
        if($this->photo == null && ! file_exists('@web/uploads/'.$this->photo)){
            return Html::img('@web/images/Basis Data.jpg',$htmlOptions);
        } else {
            return Html::img('@web/uploads/'. $this->photo,$htmlOptions);
        }
    }
}