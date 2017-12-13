<?php
/**
 * Created by PhpStorm.
 * User: mohammed.hussein
 * Date: 11.12.17
 * Time: 17:22
 */

namespace Shariss\Recipes\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

/**
 * Interface RecipeSearchResultInterface
 * @package Shariss\Recipes\Api\Data
 * @api
 */


interface RecipeSearchResultInterface  extends SearchResultsInterface
{
    /**
     * @return \Shariss\Recipes\Api\Data\RecipeInterface[]
     */
    public function getItems();

    /**
     * @param \Shariss\Recipes\Api\Data\RecipeInterface[] $items
     * @return $this
     */

    public function setItems(array $items);

}