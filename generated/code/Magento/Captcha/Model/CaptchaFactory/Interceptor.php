<?php
namespace Magento\Captcha\Model\CaptchaFactory;

/**
 * Interceptor class for @see \Magento\Captcha\Model\CaptchaFactory
 */
class Interceptor extends \Magento\Captcha\Model\CaptchaFactory implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager)
    {
        $this->___init();
        parent::__construct($objectManager);
    }

    /**
     * {@inheritdoc}
     */
    public function create($captchaType, $formId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'create');
        return $pluginInfo ? $this->___callPlugins('create', func_get_args(), $pluginInfo) : parent::create($captchaType, $formId);
    }
}
