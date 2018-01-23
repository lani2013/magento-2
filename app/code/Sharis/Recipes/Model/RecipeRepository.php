<?php
/**
 * Created by PhpStorm.
 * User: mohammed.hussein
 * Date: 14.12.17
 * Time: 16:16
 */

namespace Sharis\Recipes\Model;


use Sharis\Recipes\Api\RecipeRepositoryInterface;
use Sharis\Recipes\Model\ResourceModel\Recipe as RecipeResource;
use Sharis\Recipes\Model\ResourceModel\Recipe\CollectionFactory as RecipeCollectionFactory;
use Sharis\Recipes\Model\RecipeSearchResultsInterfaceFactory;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;

class RecipeRepository implements RecipeRepositoryInterface
{
    /**
     * @var RecipeResource $recipeFactory
     */
    private $recipeResource;
    /**
     * @var Sharis\Recipes\Model\RecipeFactory $recipeFactory
     */
    private $recipeFactory;
    /**
     * @var RecipeCollectionFactory $collectionFactory
     */
    private $recipeCollectionFactory;
    /**
     * @var Sharis\Recipes\Model\RecipeSearchResultsInterfaceFactory $searchResultsFactory
     */
    private $searchResultsFactory;

    /**
     * @var Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface $collectionProcessor
     */
    private $collectionProcessor;


    public function __construct(
        RecipeResource $resourceModel,
        RecipeFactory $recipeFactory,
        RecipeCollectionFactory $recipeCollectionFactory,
        RecipeSearchResultsInterfaceFactory $searchResultsFactory,
        CollectionProcessorInterface $collectionProcessor)
    {
        $this->recipeResource = $resourceModel;
        $this->recipeFactory = $recipeFactory ;
        $this->recipeCollectionFactory = $recipeCollectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->collectionProcessor = $collectionProcessor;
    }

    /**
     * @param \Sharis\Recipes\Api\Data\RecipeInterface $recipe
     * @return void
     */
    public function save(\Sharis\Recipes\Api\Data\RecipeInterface $recipe)
    {
        $this->recipeResource->save($recipe);
        return $recipe->getRecipe_id();
    }

    /**
     * @param int $recipe_id
     * @return \Sharis\Recipes\Api\Data\RecipeInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getById($recipe_id)
    {
      $recipe = $this->recipeFactory->create();
      $this->recipeResource->load($recipe, $recipe_id);

      if(!$recipe->getId()) {
        throw new NoSuchEntityException(__('Recipe with id "%1" does not exist.', $recipe_id));
      }
      return $recipe;
    }

    /**
     * @param  \Sharis\Recipes\Api\Data\RecipeInterface $recipe
     */
    public function delete(\Sharis\Recipes\Api\Data\RecipeInterface $recipe)
    {
      $this->recipeResource->delete($recipe);
    }

    /**
     * @param  int $recipe_id
     */
    public function deleteById($recipe_id)
    {
      $recipe = $this->getById($recipe_id);
      $this->delete($recipe);
    }

    /**
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Sharis\Recipes\Api\Data\RecipSearchResultsInterface
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria)
    {
      $searchResults = $this->searchResultsFactory->create();
      $searchResults->setSearchCriteria($searchCriteria);
      $collection = $this->recipeCollectionFactory->create();

      $this->collectionProcessor->process($searchCriteria, $collection);
      $searchResults->setTotalCount($collection->getSize());

      $searchResults->setItems($collection->getItems());
      return $searchResults;
    }
}
