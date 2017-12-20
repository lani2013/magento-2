<?php
namespace Magento\Customer\Api\Data;

/**
 * Extension class for @see \Magento\Customer\Api\Data\AddressInterface
 */
class AddressExtension extends \Magento\Framework\Api\AbstractSimpleObject implements AddressExtensionInterface
{
    /**
     * @return string|null
     */
    public function getCustom()
    {
        return $this->_get('custom');
    }

    /**
     * @param string $custom
     * @return $this
     */
    public function setCustom($custom)
    {
        $this->setData('custom', $custom);
        return $this;
    }
}
