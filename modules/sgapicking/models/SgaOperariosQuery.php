<?php
namespace app\modules\sgapicking\models;

use app\modules\sgapicking\models\SgaOperarios;
use yii\db\ActiveQuery;

/**
 * This is the ActiveQuery class for [[SgaOperarios]].
 *
 * @see SgaOperarios
 */
class SgaOperariosQuery extends ActiveQuery {
    /* public function active()
      {
      return $this->andWhere('[[status]]=1');
      } */

    /**
     * @inheritdoc
     * @return SgaOperarios[]|array
     */
    public function all($db = null) {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return SgaOperarios|array|null
     */
    public function one($db = null) {
        return parent::one($db);
    }

}
