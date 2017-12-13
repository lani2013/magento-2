<?php
/**
 * Created by PhpStorm.
 * User: mohammed.hussein
 * Date: 11.12.17
 * Time: 15:48
 */

namespace Shariss\Recipes\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Recipe extends AbstractDb
{

    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('shariss_recipes', 'recipe_id');
    }
}