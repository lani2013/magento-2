<?php
/**
 * Created by PhpStorm.
 * User: mohammed.hussein
 * Date: 11.12.17
 * Time: 15:51
 */

namespace Shariss\Recipes\Model\ResourceModel\Recipe;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    protected function _construct()
    {
        $this->_init('Shariss\Recipes\Model\Recipe',
               'Shariss\Recipes\Model\ResourceModel\Recipe');
    }

}