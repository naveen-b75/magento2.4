<?php
namespace Magento\CatalogStaging\Model\Product\Gallery\CreateHandler;

/**
 * Interceptor class for @see \Magento\CatalogStaging\Model\Product\Gallery\CreateHandler
 */
class Interceptor extends \Magento\CatalogStaging\Model\Product\Gallery\CreateHandler implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\EntityManager\MetadataPool $metadataPool, \Magento\Catalog\Api\ProductAttributeRepositoryInterface $attributeRepository, \Magento\Catalog\Model\ResourceModel\Product\Gallery $resourceModel, \Magento\Framework\Json\Helper\Data $jsonHelper, \Magento\Catalog\Model\Product\Media\Config $mediaConfig, \Magento\Framework\Filesystem $filesystem, \Magento\MediaStorage\Helper\File\Storage\Database $fileStorageDb, \Magento\Catalog\Model\Product\Gallery\UpdateHandler $updateHandler, ?\Magento\Catalog\Model\Product\Gallery\CopyHandler $copyHandler = null, ?\Magento\Staging\Model\VersionHistoryInterface $versionHistory = null, ?\Magento\Staging\Model\ResourceModel\Db\ReadEntityVersion $readEntityVersion = null)
    {
        $this->___init();
        parent::__construct($metadataPool, $attributeRepository, $resourceModel, $jsonHelper, $mediaConfig, $filesystem, $fileStorageDb, $updateHandler, $copyHandler, $versionHistory, $readEntityVersion);
    }

    /**
     * {@inheritdoc}
     */
    public function execute($product, $arguments = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($product, $arguments);
    }
}
