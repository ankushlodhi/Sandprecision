<?php
/**
 * mc-magento2 Magento Component
 *
 * @category Ebizmarts
 * @package mc-magento2
 * @author Ebizmarts Team <info@ebizmarts.com>
 * @copyright Ebizmarts (http://ebizmarts.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @date: 2/21/17 5:07 PM
 * @file: ResetLocalErrors.php
 */

namespace Ebizmarts\MailChimp\Controller\Adminhtml\Ecommerce;

use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Exception\ValidatorException;
use Symfony\Component\Config\Definition\Exception\Exception;
use Ebizmarts\MailChimp\Helper\Sync as SyncHelper;

class ResetLocalErrors extends \Magento\Backend\App\Action
{
    /**
     * @var JsonFactory
     */
    protected $resultJsonFactory;
    /**
     * @var \Ebizmarts\MailChimp\Helper\Data
     */
    protected $helper;
    /**
     * @var SyncHelper
     */
    private $syncHelper;
    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    protected $storeManager;

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param JsonFactory $resultJsonFactory
     * @param \Magento\Store\Model\StoreManagerInterface $storeManagerInterface
     * @param \Ebizmarts\MailChimp\Helper\Data $helper
     * @param SyncHelper $syncHelper
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        JsonFactory $resultJsonFactory,
        \Magento\Store\Model\StoreManagerInterface $storeManagerInterface,
        \Ebizmarts\MailChimp\Helper\Data $helper,
        SyncHelper $syncHelper
    ) {

        parent::__construct($context);
        $this->resultJsonFactory    = $resultJsonFactory;
        $this->helper               = $helper;
        $this->storeManager         = $storeManagerInterface;
        $this->syncHelper           = $syncHelper;
    }

    public function execute()
    {
        $valid = 1;
        $message = '';
        $params = $this->getRequest()->getParams();
        if (isset($params['website'])) {
            $mailchimpStore = $this->helper->getConfigValue(
                \Ebizmarts\MailChimp\Helper\Data::XML_MAILCHIMP_STORE,
                $params['website'],
                'website'
            );
            $storeId = $params['website'];
        } elseif (isset($params['store'])) {
            $mailchimpStore = $this->helper->getConfigValue(
                \Ebizmarts\MailChimp\Helper\Data::XML_MAILCHIMP_STORE,
                $params['store'],
                'store'
            );
            $storeId = $params['store'];
        } else {
            $storeId = $this->storeManager->getStore()->getId();
            $mailchimpStore = $this->helper->getConfigValue(
                \Ebizmarts\MailChimp\Helper\Data::XML_MAILCHIMP_STORE,
                $storeId
            );
        }

        $resultJson = $this->resultJsonFactory->create();
        try {
            $this->syncHelper->resetErrors($mailchimpStore, $storeId, true);
        } catch (ValidatorException $e) {
            $valid = 0;
            $message = $e->getMessage();
        }
        return $resultJson->setData([
            'valid' => (int)$valid,
            'message' => $message,
        ]);
    }
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Ebizmarts_MailChimp::config_mailchimp');
    }
}
