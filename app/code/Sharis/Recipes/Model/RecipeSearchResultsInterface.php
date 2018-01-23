<?php
/**
 * Created by PhpStorm.
 * User: mohammed.hussein
 * Date: 11.12.17
 * Time: 17:22
 */

namespace Sharis\Recipes\Model;

use Magento\Framework\Api\SearchResultsInterface;

/**
 * Interface RecipeSearchResultsInterface
 * @package Sharis\Recipes\Api\Data
 * @api
 */


interface RecipeSearchResultsInterface  extends SearchResultsInterface
{
    /**
     * @return \Sharis\Recipes\Api\Data\RecipeInterface[]
     */
    public function getItems();

    /**
     * @param \Sharis\Recipes\Api\Data\RecipeInterface[] $items
     * @return $this
     */

    public function setItems(array $items);

}
