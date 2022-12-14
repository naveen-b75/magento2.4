<?php
namespace DEG\CustomReports\Model\GenericReportCollection;

/**
 * Interceptor class for @see \DEG\CustomReports\Model\GenericReportCollection
 */
class Interceptor extends \DEG\CustomReports\Model\GenericReportCollection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactoryInterface $entityFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, ?\Magento\Framework\DB\Adapter\AdapterInterface $connection = null, ?\Magento\Framework\App\ResourceConnection $resourceConnection = null)
    {
        $this->___init();
        parent::__construct($entityFactory, $logger, $fetchStrategy, $connection, $resourceConnection);
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
