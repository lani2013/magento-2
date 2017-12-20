<?php
/**
 * Created by PhpStorm.
 * User: mohammed.hussein
 * Date: 11.12.17
 * Time: 14:20
 */

namespace Shariss\Recipes\Model;


use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Stdlib\DateTime\DateTime;
use Shariss\Recipes\Api\Data\RecipeInterface;

class Recipe extends AbstractModel implements RecipeInterface
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Shariss\Recipes\Model\Resource\Recipe');
    }

    public function setRecipeName($recipeName)
    {
        return $this->setData('recipe_name' , $recipeName);
    }


    /**
     * Returns the distinct identifier for this recipe.
     *
     * @return int|null
     */
    public function getRecipe_id()
    {
        return $this->getData('recipe_id');
    }

    /**
     * Sets the distinct identifier for this recipe.
     *
     * @param int $recipe_id
     */
    public function setRecipe_id($recipe_id)
    {
        return $this->setData('recipe_id', $recipe_id);
    }

    /**
     * Returns the name of the recipe.
     * @return string|null
     *
     */
    public function getName()
    {
        return $this->getData('name');
    }

    /**
     * Sets the name of this recipe.
     * @param string $name
     */
    public function setName($name)
    {
         return $this->setData('name', $name);
    }

    /**
     *  Returns the name of the recipe.
     * @return string|null
     */
    public function getContent()
    {
        return $this->getData('content');
    }

    /**
     * Sets the name of this recipe.
     * @param string $content
     *
     */
    public function setContent($content)
    {
        return $this->setData('content' , $content);
    }

    /**
     * Returns the name of the recip.
     * @return DateTime |null
     */
    public function getCreated_at()
    {
        return $this->getData('created_id');
    }

    /**
     * Sets the name of this recipe.
     * @param DateTime $created_id
     */
    public function setCreated_at($created_id)
    {
        return $this->setData('created_id' , $created_id);
    }
}