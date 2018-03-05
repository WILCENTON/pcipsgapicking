<?php

namespace app\modules\sgapicking\models;

/**
 * This is the ActiveQuery class for [[SgaControlexis]].
 *
 * @see SgaControlexis
 */
class SgaControlexisQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return SgaControlexis[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return SgaControlexis|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
