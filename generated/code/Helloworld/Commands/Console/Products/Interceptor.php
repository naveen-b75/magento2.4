<?php
namespace Helloworld\Commands\Console\Products;

/**
 * Interceptor class for @see \Helloworld\Commands\Console\Products
 */
class Interceptor extends \Helloworld\Commands\Console\Products implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\State $state, \Magento\Framework\Indexer\IndexerRegistry $indexerRegistry, \Magento\Catalog\Model\Product $product, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $collectionFactory)
    {
        $this->___init();
        parent::__construct($state, $indexerRegistry, $product, $collectionFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function run(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'run');
        return $pluginInfo ? $this->___callPlugins('run', func_get_args(), $pluginInfo) : parent::run($input, $output);
    }
}
