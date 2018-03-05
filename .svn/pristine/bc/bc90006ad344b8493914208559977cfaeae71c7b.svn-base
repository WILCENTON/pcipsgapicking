<?php

namespace app\modules\varios\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "usergrupos".
 *
 * @property integer $grupo
 * @property string $nombre
 */
class Usergrupos extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usergrupos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['grupo'], 'required'],
            [['grupo'], 'integer'],
            [['nombre'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'grupo' => 'Grupo',
            'nombre' => 'Nombre',
        ];
    }
    public function beforeSave($insert) {
        if (!parent::beforeSave($insert)) {
            return false;
        }
        // ...custom code here... 
        if ($this->getIsNewRecord()) {
            $max = $this->find() // AQ instance
                    ->select('max(grupo)')
                    ->scalar(); 
            $this->grupo = $max+1;
        }
        return true;
    }
}
