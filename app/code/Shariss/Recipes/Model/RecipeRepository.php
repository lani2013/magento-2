<?php
/**
 * Created by PhpStorm.
 * User: mohammed.hussein
 * Date: 14.12.17
 * Time: 16:16
 */

namespace Shariss\Recipes\Model;


use Shariss\Recipes\Api\RecipeRepositoryInterface;
use Shariss\Recipes\Model\ResourceModel\Recipe as RecipeResource;
use Shariss\Recipes\Model\ResourceModel\Recipe\CollectionFactory;

class RecipeRepository implements RecipeRepositoryInterface
{
    private $recipeResource;
    private $recipeFactory;
    private $collectionFactory;
    private $searchResultsFactory;


    public function __construct(
        RecipeResource $resourceModel,
        RecipeFactory $recipeFactory,
        CollectionFactory $resourceCollectionFactory,
        RecipeSearchResultsInterfaceFactory $searchResultsFactory)
    {
        $this->recipeResource = $resourceModel;
        $this->recipeFactory = $recipeFactory ;
        $this->collectionFactory = $resourceCollectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
    }

    /**
     * @param \Shariss\Recipes\Api\Data\RecipeInterface $recipe
     * @return void
     */
    public function save(\Shariss\Recipes\Api\Data\RecipeInterface $recipe)
    {
        $this->recipeResource->save($recipe);
        return $recipe->getRecipe_id();
    }

    /**
     * @param int $recipe_id
     * @return \Shariss\Recipes\Api\Data\RecipeInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getById($recipe_id)
    {

    }

    /**
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Shariss\Recipes\Api\Data\RecipSearchResultsInterface
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria)
    {
        // TODO: Implement getList() method.
    }

    /**
     * @param  int $recipe_Id
     * @return bool
     */
    public function delete($recipe_id)
    {
        // TODO: Implement delete() method.
    }

    /**
     * @param  int $recipe_id
     * @return string
     */
    public function deleteById($recipe_id)
    {
        // TODO: Implement deleteById() method.
    }
}