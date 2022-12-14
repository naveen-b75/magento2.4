<?php
namespace Mastering\SampleModule\Console\Command\AddItem;

/**
 * Interceptor class for @see \Mastering\SampleModule\Console\Command\AddItem
 */
class Interceptor extends \Mastering\SampleModule\Console\Command\AddItem implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Mastering\SampleModule\Model\ItemFactory $itemFactory)
    {
        $this->___init();
        parent::__construct($itemFactory);
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
