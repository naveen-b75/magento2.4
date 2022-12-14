<?php
namespace Magento\CatalogGraphQl\Model\Resolver\Products\DataProvider\CategoryTree;

/**
 * Interceptor class for @see \Magento\CatalogGraphQl\Model\Resolver\Products\DataProvider\CategoryTree
 */
class Interceptor extends \Magento\CatalogGraphQl\Model\Resolver\Products\DataProvider\CategoryTree implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $collectionFactory, \Magento\CatalogGraphQl\Model\AttributesJoiner $attributesJoiner, \Magento\CatalogGraphQl\Model\Category\DepthCalculator $depthCalculator, \Magento\CatalogGraphQl\Model\Category\LevelCalculator $levelCalculator, \Magento\Framework\EntityManager\MetadataPool $metadata, \Magento\CatalogGraphQl\Model\Resolver\Categories\DataProvider\Category\CollectionProcessorInterface $collectionProcessor, \Magento\CatalogGraphQl\Model\Category\Filter\SearchCriteria $searchCriteria)
    {
        $this->___init();
        parent::__construct($collectionFactory, $attributesJoiner, $depthCalculator, $levelCalculator, $metadata, $collectionProcessor, $searchCriteria);
    }

    /**
     * {@inheritdoc}
     */
    public function getTree(\Magento\Framework\GraphQl\Schema\Type\ResolveInfo $resolveInfo, int $rootCategoryId, int $storeId) : \Iterator
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTree');
        return $pluginInfo ? $this->___callPlugins('getTree', func_get_args(), $pluginInfo) : parent::getTree($resolveInfo, $rootCategoryId, $storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getFilteredTree(\Magento\Framework\GraphQl\Schema\Type\ResolveInfo $resolveInfo, int $rootCategoryId, array $criteria, \Magento\Store\Api\Data\StoreInterface $store, array $attributeNames, \Magento\GraphQl\Model\Query\ContextInterface $context) : \Iterator
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFilteredTree');
        return $pluginInfo ? $this->___callPlugins('getFilteredTree', func_get_args(), $pluginInfo) : parent::getFilteredTree($resolveInfo, $rootCategoryId, $criteria, $store, $attributeNames, $context);
    }
}
