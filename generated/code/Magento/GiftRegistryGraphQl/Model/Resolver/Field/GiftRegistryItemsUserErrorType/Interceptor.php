<?php
namespace Magento\GiftRegistryGraphQl\Model\Resolver\Field\GiftRegistryItemsUserErrorType;

/**
 * Interceptor class for @see \Magento\GiftRegistryGraphQl\Model\Resolver\Field\GiftRegistryItemsUserErrorType
 */
class Interceptor extends \Magento\GiftRegistryGraphQl\Model\Resolver\Field\GiftRegistryItemsUserErrorType implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\GraphQl\Query\EnumLookup $enumLookup)
    {
        $this->___init();
        parent::__construct($enumLookup);
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
