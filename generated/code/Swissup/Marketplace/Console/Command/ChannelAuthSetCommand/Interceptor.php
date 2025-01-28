<?php
namespace Swissup\Marketplace\Console\Command\ChannelAuthSetCommand;

/**
 * Interceptor class for @see \Swissup\Marketplace\Console\Command\ChannelAuthSetCommand
 */
class Interceptor extends \Swissup\Marketplace\Console\Command\ChannelAuthSetCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Swissup\Marketplace\Model\ChannelRepository $channelRepository, \Swissup\Marketplace\Model\ChannelManager $channelManager, \Swissup\Marketplace\Helper\Composer $composerHelper, \Symfony\Component\Console\Question\QuestionFactory $questionFactory, \Symfony\Component\Console\Question\ChoiceQuestionFactory $choiceQuestionFactory, \Symfony\Component\Console\Helper\QuestionHelper $questionHelper)
    {
        $this->___init();
        parent::__construct($channelRepository, $channelManager, $composerHelper, $questionFactory, $choiceQuestionFactory, $questionHelper);
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
