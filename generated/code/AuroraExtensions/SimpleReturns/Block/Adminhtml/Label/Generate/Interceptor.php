<?php
namespace AuroraExtensions\SimpleReturns\Block\Adminhtml\Label\Generate;

/**
 * Interceptor class for @see \AuroraExtensions\SimpleReturns\Block\Adminhtml\Label\Generate
 */
class Interceptor extends \AuroraExtensions\SimpleReturns\Block\Adminhtml\Label\Generate implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, \AuroraExtensions\SimpleReturns\Exception\ExceptionFactory $exceptionFactory, \AuroraExtensions\SimpleReturns\Api\PackageRepositoryInterface $packageRepository, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $exceptionFactory, $packageRepository, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function canRender(\Magento\Backend\Block\Widget\Button\Item $item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canRender');
        return $pluginInfo ? $this->___callPlugins('canRender', func_get_args(), $pluginInfo) : parent::canRender($item);
    }
}
