<?php
/**
 * Created by PhpStorm.
 * User: mohammed.hussein
 * Date: 11.12.17
 * Time: 15:55
 */

namespace Sharis\Recipes\Api;

/**
 * @api
 * Interface RecipeRepositoryInterface
 * @package Sharis\Recipes\Api
 */


interface RecipeRepositoryInterface
{
    /**
     * @param \Sharis\Recipes\Api\Data\RecipeInterface $recipe
     * @return void
     */
    public function save(\Sharis\Recipes\Api\Data\RecipeInterface $recipe);

    /**
     * @param int $recipe_id
     * @return \Sharis\Recipes\Api\Data\RecipeInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */

    public function getById($recipe_id);

    /**
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Sharis\Recipes\Api\Data\RecipSearchResultsInterface
     */

    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);

    /**
     * @param  \Sharis\Recipes\Api\Data\RecipeInterface $recipe
     * @return bool
     */

    public function delete(\Sharis\Recipes\Api\Data\RecipeInterface $recipe);

    /**
     * @param  int $recipe_id
     * @return string
     */

    public function deleteById($recipe_id);

}
