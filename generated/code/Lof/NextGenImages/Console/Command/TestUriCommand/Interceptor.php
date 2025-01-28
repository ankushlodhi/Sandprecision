<?php
namespace Lof\NextGenImages\Console\Command\TestUriCommand;

/**
 * Interceptor class for @see \Lof\NextGenImages\Console\Command\TestUriCommand
 */
class Interceptor extends \Lof\NextGenImages\Console\Command\TestUriCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Lof\NextGenImages\Image\File $imageFile, ?string $name = null)
    {
        $this->___init();
        parent::__construct($imageFile, $name);
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
