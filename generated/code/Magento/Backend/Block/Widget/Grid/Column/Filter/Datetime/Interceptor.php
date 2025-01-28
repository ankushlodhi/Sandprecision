<?php
namespace Magento\Backend\Block\Widget\Grid\Column\Filter\Datetime;

/**
 * Interceptor class for @see \Magento\Backend\Block\Widget\Grid\Column\Filter\Datetime
 */
class Interceptor extends \Magento\Backend\Block\Widget\Grid\Column\Filter\Datetime implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Context $context, \Magento\Framework\DB\Helper $resourceHelper, \Magento\Framework\Math\Random $mathRandom, \Magento\Framework\Locale\ResolverInterface $localeResolver, \Magento\Framework\Stdlib\DateTime\DateTimeFormatterInterface $dateTimeFormatter, array $data = [], ?\Magento\Framework\View\Helper\SecureHtmlRenderer $secureHtmlRenderer = null)
    {
        $this->___init();
        parent::__construct($context, $resourceHelper, $mathRandom, $localeResolver, $dateTimeFormatter, $data, $secureHtmlRenderer);
    }

    /**
     * {@inheritdoc}
     */
    public function getHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHtml');
        return $pluginInfo ? $this->___callPlugins('getHtml', func_get_args(), $pluginInfo) : parent::getHtml();
    }
}
