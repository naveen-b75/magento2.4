<?php
namespace Helloworld\Mymodule\Model\Product\Type\NewProductType;

/**
 * Interceptor class for @see \Helloworld\Mymodule\Model\Product\Type\NewProductType
 */
class Interceptor extends \Helloworld\Mymodule\Model\Product\Type\NewProductType implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\Product\Option $catalogProductOption, \Magento\Eav\Model\Config $eavConfig, \Magento\Catalog\Model\Product\Type $catalogProductType, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\MediaStorage\Helper\File\Storage\Database $fileStorageDb, \Magento\Framework\Filesystem $filesystem, \Magento\Framework\Registry $coreRegistry, \Psr\Log\LoggerInterface $logger, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, ?\Magento\Framework\Serialize\Serializer\Json $serializer = null, ?\Magento\Framework\File\UploaderFactory $uploaderFactory = null)
    {
        $this->___init();
        parent::__construct($catalogProductOption, $eavConfig, $catalogProductType, $eventManager, $fileStorageDb, $filesystem, $coreRegistry, $logger, $productRepository, $serializer, $uploaderFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function isPossibleBuyFromList($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isPossibleBuyFromList');
        return $pluginInfo ? $this->___callPlugins('isPossibleBuyFromList', func_get_args(), $pluginInfo) : parent::isPossibleBuyFromList($product);
    }
}
