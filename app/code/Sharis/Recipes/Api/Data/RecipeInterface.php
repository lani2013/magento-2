<?php
/**
 * Created by PhpStorm.
 * User: mohammed.hussein
 * Date: 11.12.17
 * Time: 11:55
 */


namespace Sharis\Recipes\Api\Data;

use Magento\Framework\Stdlib\DateTime\DateTime;


interface RecipeInterface{

    /**
     * Returns the distinct identifier for this recipe.
     *
     * @return int|null
     */
    public function getRecipe_id();

    /**
     * Sets the distinct identifier for this recipe.
     *
     * @param int $recipe_id
     */
    public function setRecipe_id($recipe_id);

    /**
     * Returns the name of the recipe.
     * @return string|null
     *
     */
    public function getName();

    /**
     * Sets the name of this recipe.
     * @param string $name
     */
    public function setName($name);

    /**
     *  Returns the name of the recipe.
     * @return string|null
     */
     public function getContent();

      /**
       * Sets the name of this recipe.
       * @param string $content
       *
       */

      public function setContent($content);

      /**
       * Returns the creation date of the recipe.
       * @return DateTime |null
       */

      public function getCreated_at();

      /**
       * Sets the creation date of this recipe.
       * @param DateTime $created_at
       */

       public function setCreated_at($created_at);
}
