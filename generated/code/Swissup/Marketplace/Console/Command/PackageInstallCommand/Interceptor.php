<?php
namespace Swissup\Marketplace\Console\Command\PackageInstallCommand;

/**
 * Interceptor class for @see \Swissup\Marketplace\Console\Command\PackageInstallCommand
 */
class Interceptor extends \Swissup\Marketplace\Console\Command\PackageInstallCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Swissup\Marketplace\Model\HandlerFactory $handlerFactory, \Swissup\Marketplace\Helper\Composer $composerHelper, \Magento\Store\Model\StoreManagerInterface $storeManager, \Symfony\Component\Console\Question\QuestionFactory $questionFactory, \Symfony\Component\Console\Question\ChoiceQuestionFactory $choiceQuestionFactory, \Symfony\Component\Console\Helper\QuestionHelper $questionHelper, \Swissup\Marketplace\Model\PackagesList\LocalFactory $listFactory, \Swissup\Marketplace\Installer\Installer $installer)
    {
        $this->___init();
        parent::__construct($handlerFactory, $composerHelper, $storeManager, $questionFactory, $choiceQuestionFactory, $questionHelper, $listFactory, $installer);
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
