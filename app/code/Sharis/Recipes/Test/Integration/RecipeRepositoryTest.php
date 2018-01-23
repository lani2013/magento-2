<?php
/**
 * Created by PhpStorm.
 * User: mohammed.hussein
 * Date: 12.12.17
 * Time: 10:52
 */

namespace Sharis\Recipes\Test\Integration;

use Magento\Framework\Stdlib\DateTime;
use Magento\Framework\Exception\NoSuchEntityException;

class RecipeRepositoryTest extends \Magento\TestFramework\TestCase\AbstractController
{
    /**
     * @var \Sharis\Recipes\Model\RecipeRepository $repositoryToTest
     */
    private $repositoryToTest;

    /**
     * @var \Sharis\Recipes\Model\RecipeFactory $recipeFactory
     */
    private $recipeFactory;


    public function setUp()
    {
        $this->repositoryToTest = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->
                      create('Sharis\Recipes\Api\RecipeRepositoryInterface');
        $this->recipeFactory = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->
                      create('Sharis\Recipes\Model\RecipeFactory');
        include __DIR__ . '/_files/recipes.php';
    }

    public function testGetById()
    {
      $savedDataLoaded = $this->repositoryToTest->getById(1);

      $this->assertEquals('my first recipe', $savedDataLoaded->getName());
      $this->assertEquals(1, $savedDataLoaded->getRecipe_id());
      $this->assertEquals('1. You put in Water, 2. You put in Magifix 3. You cook it!', $savedDataLoaded->getContent());
      //$this->assertEquals('date', $savedDataLoaded->getCreated_at()); // TODO
    }

    public function testGetByIdNotFoundException()
    {
      $this->expectException(NoSuchEntityException::class);
      $savedDataLoaded = $this->repositoryToTest->getById(25);
    }

    public function testSave()
    {
      $recipe = $this->recipeFactory->create();
      $recipe->setName('save name');
      $recipe->setContent('save my content');
      // $recipe->setCreated_at('') //TODO

      $this->repositoryToTest->save($recipe);

      $savedDataLoaded = $this->repositoryToTest->getById(4);
      $this->assertEquals('save name', $savedDataLoaded->getName());
      $this->assertEquals(4, $savedDataLoaded->getRecipe_id());
      $this->assertEquals('save my content', $savedDataLoaded->getContent());
    }

    public function testDelete()
    {
      $loadedBeforeDelete = $this->repositoryToTest->getById(4);
      $this->repositoryToTest->delete($loadedBeforeDelete);

      $this->expectException(NoSuchEntityException::class);
      $this->repositoryToTest->getById(4);
    }

    public function testDeleteById()
    {
      $this->repositoryToTest->deleteById(5);
      $this->expectException(NoSuchEntityException::class);
      $loadedAfterDelete = $this->repositoryToTest->getById(5);
    }


    public function testDeleteByIdNoSuchEntityException()
    {
      $this->expectException(NoSuchEntityException::class);
      $this->repositoryToTest->deleteById(25);
    }


    public function testGetList()
    {
      $criteriaBuilder = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->
                    create('Magento\Framework\Api\SearchCriteriaBuilder');

      $criteriaBuilder->addFilter('name', 'my first recipe');
      $criteriaBuilder->setPageSize(3);
      $searchCriteria = $criteriaBuilder->create();
      $result = $this->repositoryToTest->getList($searchCriteria);

      $this->assertEquals(3, sizeof($result->getItems()));
    }
}
