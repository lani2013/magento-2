<?php
/**
 * Created by PhpStorm.
 * User: mohammed.hussein
 * Date: 12.12.17
 * Time: 10:52
 */

namespace Shariss\Recipes\Test\Unit\Model;

use Magento\Framework\Stdlib\DateTime;

class RecipeTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Shariss\Recipes\Model\RecipeRepository $repositoryToTest
     */
    private $repositoryToTest;


    /**
     * @var \Shariss\Recipes\Model\Recipe $recipeFactory
     */
    private $recipe;

    public function setUp()
    {
        $objectManager = new \Magento\Framework\TestFramework\Unit\Helper\ObjectManager($this);

        $recipe = $objectManager->getObject('Shariss\Recipes\Model\ResourceModel\Recipe');
        $recipeFactory = $objectManager->getObject('Shariss\Recipes\Model\RecipeFactory');
        $arguments = array('resourceModel' => $recipe, 'recipeFactory' => $recipeFactory);

        $this->repositoryToTest = $objectManager->getObject('\Shariss\Recipes\Model\RecipeRepository', $arguments);
        $this->recipe = $objectManager->getObject('\Shariss\Recipes\Model\Recipe');
        parent::setUp();
    }

    public function testSave()
    {

        $dataToSave = $this->recipe;

        $dataToSave->setName('my first recipe');
        // $dataToSave->setCreated_id(new DateTime());
        $dataToSave->getContent('1. You put in Water, 2. You put in Magifix 3. You cook it!');

        $id = $this->repositoryToTest->save($dataToSave);


        $savedDataLoaded = $this->repositoryToTest->getById($id);

        $this->assertEquals('my first recipe', $savedDataLoaded->getName());
        $this->assertEquals($id, $savedDataLoaded->getRecipe_id());
        $this->assertEquals('1. You put in Water, 2. You put in Magifix 3. You cook it!', $savedDataLoaded->getContent());
    }
}
