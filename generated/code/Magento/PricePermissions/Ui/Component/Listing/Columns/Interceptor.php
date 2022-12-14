<?php
namespace Magento\PricePermissions\Ui\Component\Listing\Columns;

/**
 * Interceptor class for @see \Magento\PricePermissions\Ui\Component\Listing\Columns
 */
class Interceptor extends \Magento\PricePermissions\Ui\Component\Listing\Columns implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\UiComponent\ContextInterface $context, \Magento\Catalog\Ui\Component\ColumnFactory $columnFactory, \Magento\Catalog\Ui\Component\Listing\Attribute\RepositoryInterface $attributeRepository, \Magento\PricePermissions\Observer\ObserverData $observerData, array $components = [], array $data = [])
    {
        $this->___init();
        parent::__construct($context, $columnFactory, $attributeRepository, $observerData, $components, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function prepare()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepare');
        return $pluginInfo ? $this->___callPlugins('prepare', func_get_args(), $pluginInfo) : parent::prepare();
    }
}
