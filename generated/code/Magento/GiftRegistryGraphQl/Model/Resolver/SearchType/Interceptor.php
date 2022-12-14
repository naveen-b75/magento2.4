<?php
namespace Magento\GiftRegistryGraphQl\Model\Resolver\SearchType;

/**
 * Interceptor class for @see \Magento\GiftRegistryGraphQl\Model\Resolver\SearchType
 */
class Interceptor extends \Magento\GiftRegistryGraphQl\Model\Resolver\SearchType implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\GraphQl\Query\Uid $idEncoder, \Magento\GiftRegistryGraphQl\Model\Resolver\Search $search)
    {
        $this->___init();
        parent::__construct($idEncoder, $search);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        return $pluginInfo ? $this->___callPlugins('resolve', func_get_args(), $pluginInfo) : parent::resolve($field, $context, $info, $value, $args);
    }
}
