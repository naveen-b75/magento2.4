<?php
namespace Vendor\Module\Model\ResourceModel\Report\MyCustomReport\Collection\Initial;

/**
 * Interceptor class for @see \Vendor\Module\Model\ResourceModel\Report\MyCustomReport\Collection\Initial
 */
class Interceptor extends \Vendor\Module\Model\ResourceModel\Report\MyCustomReport\Collection\Initial implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactory $entityFactory, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $localeDate, \Magento\Reports\Model\ResourceModel\Report\Collection\Factory $collectionFactory)
    {
        $this->___init();
        parent::__construct($entityFactory, $localeDate, $collectionFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function getCurPage($displacement = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurPage');
        return $pluginInfo ? $this->___callPlugins('getCurPage', func_get_args(), $pluginInfo) : parent::getCurPage($displacement);
    }
}
