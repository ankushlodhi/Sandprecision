<?php
namespace Icecube\UrlRewrite\Model\DbStorage;

/**
 * Interceptor class for @see \Icecube\UrlRewrite\Model\DbStorage
 */
class Interceptor extends \Icecube\UrlRewrite\Model\DbStorage implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\UrlRewrite\Service\V1\Data\UrlRewriteFactory $urlRewriteFactory, \Magento\Framework\Api\DataObjectHelper $dataObjectHelper, \Magento\Framework\App\ResourceConnection $resource, ?\Psr\Log\LoggerInterface $logger = null)
    {
        $this->___init();
        parent::__construct($urlRewriteFactory, $dataObjectHelper, $resource, $logger);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteByData(array $data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteByData');
        return $pluginInfo ? $this->___callPlugins('deleteByData', func_get_args(), $pluginInfo) : parent::deleteByData($data);
    }

    /**
     * {@inheritdoc}
     */
    public function replace(array $urls)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'replace');
        return $pluginInfo ? $this->___callPlugins('replace', func_get_args(), $pluginInfo) : parent::replace($urls);
    }
}
