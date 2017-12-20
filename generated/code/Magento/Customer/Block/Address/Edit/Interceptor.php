<?php
namespace Magento\Customer\Block\Address\Edit;

/**
 * Interceptor class for @see \Magento\Customer\Block\Address\Edit
 */
class Interceptor extends \Magento\Customer\Block\Address\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Directory\Helper\Data $directoryHelper, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\Framework\App\Cache\Type\Config $configCacheType, \Magento\Directory\Model\ResourceModel\Region\CollectionFactory $regionCollectionFactory, \Magento\Directory\Model\ResourceModel\Country\CollectionFactory $countryCollectionFactory, \Magento\Customer\Model\Session $customerSession, \Magento\Customer\Api\AddressRepositoryInterface $addressRepository, \Magento\Customer\Api\Data\AddressInterfaceFactory $addressDataFactory, \Magento\Customer\Helper\Session\CurrentCustomer $currentCustomer, \Magento\Framework\Api\DataObjectHelper $dataObjectHelper, array $data = array(), \Magento\Customer\Model\AttributeChecker $attributeChecker = null)
    {
        $this->___init();
        parent::__construct($context, $directoryHelper, $jsonEncoder, $configCacheType, $regionCollectionFactory, $countryCollectionFactory, $customerSession, $addressRepository, $addressDataFactory, $currentCustomer, $dataObjectHelper, $data, $attributeChecker);
    }

    /**
     * {@inheritdoc}
     */
    public function getNameBlockHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getNameBlockHtml');
        if (!$pluginInfo) {
            return parent::getNameBlockHtml();
        } else {
            return $this->___callPlugins('getNameBlockHtml', func_get_args(), $pluginInfo);
        }
    }
}
