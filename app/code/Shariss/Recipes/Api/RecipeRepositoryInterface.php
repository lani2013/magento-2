<?php
/**
 * Created by PhpStorm.
 * User: mohammed.hussein
 * Date: 11.12.17
 * Time: 15:55
 */

namespace Shariss\Recipes\Api;

/**
 * @api
 * Interface RecipeRepositoryInterface
 * @package Shariss\Recipes\Api
 */


interface RecipeRepositoryInterface
{
    /**
     * @param \Shariss\Recipes\Api\Data\RecipeInterface $recipe
     * @return void
     */
    public function save(\Shariss\Recipes\Api\Data\RecipeInterface $recipe);

    /**
     * @param int $recipe_id
     * @return \Shariss\Recipes\Api\Data\RecipeInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */

    public function getById($recipe_id);

    /**
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Shariss\Recipes\Api\Data\RecipSearchResultsInterface
     */

    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);

    /**
     * @param  int $recipe_Id
     * @return bool
     */

    public function delete($recipe_id);

    /**
     * @param  int $recipe_id
     * @return string
     */

    public function deleteById($recipe_id);

}