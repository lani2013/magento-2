<?php

$now = new DateTime();

/** @var  \Sharis\Recipes\Model\Recipe $recipe */
$recipe = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->create('\Sharis\Recipes\Model\Recipe');
$recipe->isObjectNew(true);
$recipe->setName('my first recipe')
    ->setContent('1. You put in Water, 2. You put in Magifix 3. You cook it!')
    ->setCreated_at($now)
    ->save();
