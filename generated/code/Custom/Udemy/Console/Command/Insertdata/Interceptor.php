<?php
namespace Custom\Udemy\Console\Command\Insertdata;

/**
 * Interceptor class for @see \Custom\Udemy\Console\Command\Insertdata
 */
class Interceptor extends \Custom\Udemy\Console\Command\Insertdata implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Custom\Udemy\Model\ViewFactory $viewFactory)
    {
        $this->___init();
        parent::__construct($viewFactory);
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
