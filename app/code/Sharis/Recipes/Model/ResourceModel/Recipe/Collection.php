<?php
/**
 * Created by PhpStorm.
 * User: mohammed.hussein
 * Date: 11.12.17
 * Time: 15:51
 */

namespace Sharis\Recipes\Model\ResourceModel\Recipe;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    protected function _construct()
    {
        $this->_init('Sharis\Recipes\Model\Recipe',
               'Sharis\Recipes\Model\ResourceModel\Recipe');
    }

}
