<?php
namespace Helloworld\Mymodule\Console\Command\InsertData;

/**
 * Interceptor class for @see \Helloworld\Mymodule\Console\Command\InsertData
 */
class Interceptor extends \Helloworld\Mymodule\Console\Command\InsertData implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Helloworld\Mymodule\Model\CurdFactory $curdFactory)
    {
        $this->___init();
        parent::__construct($curdFactory);
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
