<?php

namespace app\modules\sgapicking\models;

/**
 * This is the ActiveQuery class for [[SgaPicking]].
 *
 * @see SgaPicking
 */
class SgaPickingQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return SgaPicking[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return SgaPicking|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
