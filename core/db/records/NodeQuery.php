<?php

namespace app\core\db\records;

/**
 * This is the ActiveQuery class for [[Node]].
 *
 * @see Node
 */
class NodeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Node[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Node|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}