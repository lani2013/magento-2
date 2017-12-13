<?php
/**
 * Created by PhpStorm.
 * User: mohammed.hussein
 * Date: 29.11.17
 * Time: 14:23
 */

namespace Inchoo\Helloworld\Block;


class Helloworld extends \Magento\Framework\View\Element\Template
{
    public function getHelloWorldTxt()
    {
        return 'Hello world!';
    }
}
