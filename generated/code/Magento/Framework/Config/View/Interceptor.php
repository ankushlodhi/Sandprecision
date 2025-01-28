<?php
namespace Magento\Framework\Config\View;

/**
 * Interceptor class for @see \Magento\Framework\Config\View
 */
class Interceptor extends \Magento\Framework\Config\View implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Config\FileResolverInterface $fileResolver, \Magento\Framework\Config\ConverterInterface $converter, \Magento\Framework\Config\SchemaLocatorInterface $schemaLocator, \Magento\Framework\Config\ValidationStateInterface $validationState, $fileName, $idAttributes = [], $domDocumentClass = 'Magento\\Framework\\Config\\Dom', $defaultScope = 'global', $xpath = [])
    {
        $this->___init();
        parent::__construct($fileResolver, $converter, $schemaLocator, $validationState, $fileName, $idAttributes, $domDocumentClass, $defaultScope, $xpath);
    }

    /**
     * {@inheritdoc}
     */
    public function getMediaEntities($module, $mediaType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMediaEntities');
        return $pluginInfo ? $this->___callPlugins('getMediaEntities', func_get_args(), $pluginInfo) : parent::getMediaEntities($module, $mediaType);
    }

    /**
     * {@inheritdoc}
     */
    public function getMediaAttributes($module, $mediaType, $mediaId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMediaAttributes');
        return $pluginInfo ? $this->___callPlugins('getMediaAttributes', func_get_args(), $pluginInfo) : parent::getMediaAttributes($module, $mediaType, $mediaId);
    }
}
