<?php return array (
  0 => 
  array (
    'Magento\\Framework\\DB\\Adapter\\AdapterInterface' => 
    array (
      'execute_commit_callbacks' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\Model\\ExecuteCommitCallbacks',
      ),
    ),
    'Magento\\Framework\\App\\Http\\Context' => 
    array (
      'weltpixel-googletagmanager-context' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\HttpContext',
      ),
    ),
    'Magento\\Framework\\App\\Response\\Http' => 
    array (
      'genericHeaderPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Response\\HeaderManager',
      ),
    ),
    'Magento\\Framework\\App\\ActionInterface' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Framework\\Url\\SecurityInfo' => 
    array (
      'storeUrlSecurityInfo' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\Url\\Plugin\\SecurityInfo',
      ),
    ),
    'Magento\\Framework\\Url\\RouteParamsResolver' => 
    array (
      'storeUrlRouteParamsResolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\Url\\Plugin\\RouteParamsResolver',
      ),
    ),
    'Magento\\Store\\Model\\Store' => 
    array (
      'themeDesignConfigGridIndexerStore' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Indexer\\Design\\Config\\Plugin\\Store',
      ),
    ),
    'Magento\\Framework\\Session\\SidResolver' => 
    array (
      'pagebuilder_preview_sid_resolving' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Framework\\Session\\SidResolver',
      ),
    ),
    'Magento\\Framework\\App\\Config\\Initial\\Converter' => 
    array (
      'cron_system_config_initial_converter_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Cron\\Model\\System\\Config\\Initial\\Converter',
      ),
    ),
    'Magento\\Framework\\App\\FrontController' => 
    array (
      'install' => 
      array (
        'sortOrder' => 40,
        'instance' => 'Magento\\Framework\\Module\\Plugin\\DbStatusValidator',
      ),
      'storeCookieValidate' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\Model\\Plugin\\StoreCookie',
      ),
    ),
    'Magento\\Cms\\Model\\Wysiwyg\\Images\\Storage' => 
    array (
      'media_gallery_image_remove_metadata_after_wysiwyg' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'Magento\\MediaGallery\\Plugin\\Wysiwyg\\Images\\Storage',
      ),
    ),
    'Magento\\AdvancedPricingImportExport\\Model\\Import\\AdvancedPricing' => 
    array (
      'invalidateAdvancedPriceIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdvancedPricingImportExport\\Model\\Indexer\\Product\\Price\\Plugin\\Import',
      ),
    ),
    'Magento\\Framework\\Url\\ScopeInterface' => 
    array (
      'urlSignature' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Url\\Plugin\\Signature',
      ),
    ),
    'Magento\\Theme\\Model\\DesignConfigRepository' => 
    array (
      'save_design_settings_event_dispatching' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Design\\Config\\Plugin',
      ),
    ),
    'Magento\\Store\\Model\\Website' => 
    array (
      'themeDesignConfigGridIndexerWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Indexer\\Design\\Config\\Plugin\\Website',
      ),
    ),
    'Magento\\Store\\Model\\Group' => 
    array (
      'themeDesignConfigGridIndexerStoreGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Indexer\\Design\\Config\\Plugin\\StoreGroup',
      ),
    ),
    'Magento\\Config\\App\\Config\\Source\\DumpConfigSourceAggregated' => 
    array (
      'designConfigTheme' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Theme\\Model\\Design\\Config\\Plugin\\Dump',
      ),
    ),
    'Magento\\Framework\\Data\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
        'disabled' => true,
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Consumer\\Config\\CompositeReader' => 
    array (
      'queueConfigPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\MessageQueue\\Config\\Consumer\\ConfigReaderPlugin',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Publisher\\Config\\CompositeReader' => 
    array (
      'queueConfigPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\MessageQueue\\Config\\Publisher\\ConfigReaderPlugin',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Topology\\Config\\CompositeReader' => 
    array (
      'queueConfigPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\MessageQueue\\Config\\Topology\\ConfigReaderPlugin',
      ),
    ),
    'Magento\\Framework\\App\\Config\\Value' => 
    array (
      'admin_system_config_media_gallery_renditions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\UpdateRenditionsOnConfigChange',
      ),
      'admin_system_config_adobe_stock_save_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGallerySynchronization\\Plugin\\MediaGallerySyncTrigger',
      ),
      'webapiResourceSecurityCacheInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiSecurity\\Model\\Plugin\\CacheInvalidator',
      ),
    ),
    'Magento\\Backend\\Model\\Auth\\Session' => 
    array (
      'admin_adobe_ims_backend_auth_session' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\BackendAuthSessionPlugin',
      ),
    ),
    'Magento\\Authorization\\Model\\Role' => 
    array (
      'updateRoleUsersAcl' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\User\\Model\\Plugin\\AuthorizationRole',
      ),
    ),
    'Magento\\Eav\\Model\\ResourceModel\\Entity\\Attribute' => 
    array (
      'storeLabelCaching' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Eav\\Plugin\\Model\\ResourceModel\\Entity\\Attribute',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\AbstractEntity' => 
    array (
      'clean_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Cache\\FlushCacheByTags',
      ),
    ),
    'Magento\\Customer\\Model\\Session' => 
    array (
      'wesupply-toolbox-customer-login' => 
      array (
        'sortOrder' => 6,
        'instance' => 'WeSupply\\Toolbox\\Plugin\\Customer\\Session',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Customer' => 
    array (
      'recollect_quote_on_customer_group_change' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Checkout\\Model\\Plugin\\RecollectQuoteOnCustomerGroupChange',
      ),
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface' => 
    array (
      'transactionWrapper' => 
      array (
        'sortOrder' => -1,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerRepository\\TransactionWrapper',
      ),
      'login_as_customer_customer_repository_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerAssistance\\Plugin\\CustomerPlugin',
      ),
      'update_newsletter_subscription_on_customer_update' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Newsletter\\Model\\Plugin\\CustomerPlugin',
      ),
    ),
    'Magento\\PageCache\\Observer\\FlushFormKey' => 
    array (
      'customerFlushFormKey' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerFlushFormKey',
      ),
    ),
    'Magento\\Customer\\Model\\AccountManagement' => 
    array (
      'security_check_customer_password_reset_attempt' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Security\\Model\\Plugin\\AccountManagement',
      ),
      'abandoned-checkout-save-quote' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Ebizmarts\\MailChimp\\Model\\Plugin\\AccountManagement',
      ),
      'mpace_save_customer_email' => 
      array (
        'sortOrder' => 88,
        'instance' => 'Mageplaza\\AbandonedCart\\Plugin\\SaveCustomerEmail',
      ),
      'mz_osc_newaccount' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Osc\\Model\\Plugin\\Customer\\AccountManagement',
      ),
      'mpsmtp_account_management' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Smtp\\Plugin\\AccountManagement',
      ),
    ),
    'Magento\\Customer\\Api\\GroupRepositoryInterface' => 
    array (
      'saveCustomerGroupExcludedWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\SaveCustomerGroupExcludedWebsite',
      ),
      'deleteCustomerGroupExcludedWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\DeleteCustomerGroupExcludedWebsite',
      ),
      'getByIdCustomerGroupExcludedWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\GetByIdCustomerGroupExcludedWebsite',
      ),
      'getListCustomerGroupExcludedWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\GetListCustomerGroupExcludedWebsite',
      ),
      'invalidatePriceIndexerOnCustomerGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Price\\Plugin\\CustomerGroup',
      ),
    ),
    'Magento\\Indexer\\Model\\Config\\Data' => 
    array (
      'indexerCategoryFlatConfigGet' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Flat\\Plugin\\IndexerConfigData',
      ),
      'indexerProductFlatConfigGet' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Flat\\Plugin\\IndexerConfigData',
      ),
    ),
    'Magento\\Indexer\\Model\\Processor' => 
    array (
      'page-cache-indexer-reindex-clean-cache' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Indexer\\Model\\Processor\\CleanCache',
      ),
    ),
    'Magento\\Framework\\Indexer\\ActionInterface' => 
    array (
      'cache_cleaner_after_reindex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Indexer\\Model\\Indexer\\CacheCleaner',
      ),
    ),
    'Magento\\Framework\\Indexer\\CacheContext' => 
    array (
      'defer_cache_cleaning' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Indexer\\Model\\Indexer\\DeferCacheCleaning',
      ),
    ),
    'Magento\\CatalogImportExport\\Model\\StockItemImporterInterface' => 
    array (
      'update_bundle_products_stock_item_status' => 
      array (
        'sortOrder' => 200,
        'instance' => 'Magento\\BundleImportExport\\Plugin\\Import\\Product\\UpdateBundleProductsStockItemStatusPlugin',
      ),
      'update_grouped_product_stock_status_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedImportExport\\Plugin\\CatalogImportExport\\Model\\StockItemImporter\\UpdateGroupedProductStockStatusPlugin',
      ),
      'update_configurable_products_stock_item_status' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\ConfigurableImportExport\\Plugin\\Import\\Product\\UpdateConfigurableProductsStockItemStatusPlugin',
      ),
    ),
    'Magento\\Variable\\Model\\Source\\Variables' => 
    array (
      'wesupply-subdomain-variable' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeSupply\\Toolbox\\Plugin\\Model\\Source\\VariablePlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product' => 
    array (
      'cms' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Cms\\Model\\Plugin\\Product',
      ),
      'catalogInventoryAfterLoad' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Plugin\\AfterProductLoad',
      ),
      'add_bundle_parent_identities' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Bundle\\Model\\Plugin\\ProductIdentitiesExtender',
      ),
      'product_identities_extender' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\ProductIdentitiesExtender',
      ),
      'exclude_swatch_attribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\Product',
      ),
    ),
    'Magento\\Cms\\Model\\PageRepository\\ValidationComposite' => 
    array (
      'cms_validate_url_plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CmsUrlRewrite\\Plugin\\Cms\\Model\\PageRepository\\ValidationCompositePlugin',
      ),
    ),
    'Magento\\ImportExport\\Model\\Import' => 
    array (
      'catalogProductFlatIndexerImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Product\\Flat\\Plugin\\Import',
      ),
      'invalidatePriceIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Product\\Price\\Plugin\\Import',
      ),
      'invalidateStockIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Stock\\Plugin\\Import',
      ),
      'invalidateEavIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Product\\Eav\\Plugin\\Import',
      ),
      'invalidateProductCategoryIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Product\\Category\\Plugin\\Import',
      ),
      'invalidateCategoryProductIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Category\\Product\\Plugin\\Import',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Visitor' => 
    array (
      'catalogLog' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\Log',
      ),
      'reportLog' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reports\\Model\\Plugin\\Log',
      ),
    ),
    'Magento\\Catalog\\Model\\Category\\DataProvider' => 
    array (
      'set_page_layout_default_value' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\SetPageLayoutDefaultValue',
      ),
      'weltpixel-designelements-category-dataprovider' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\DesignElements\\Plugin\\Category\\DataProvider',
      ),
      'weltpixel-categorypage-category-dataprovider' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\CategoryPage\\Plugin\\Category\\DataProvider',
      ),
      'weltpixel-titlerewrite-category-dataprovider' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\TitleRewrite\\Plugin\\Category\\DataProvider',
      ),
    ),
    'Magento\\Theme\\Block\\Html\\Topmenu' => 
    array (
      'catalogTopmenu' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Block\\Topmenu',
      ),
    ),
    'Magento\\Framework\\Mview\\View\\StateInterface' => 
    array (
      'setStatusForMview' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\MviewState',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Website' => 
    array (
      'invalidatePriceIndexerOnWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Price\\Plugin\\Website',
      ),
      'categoryProductWebsiteAfterDelete' => 
      array (
        'sortOrder' => 0,
        'instance' => '\\Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\Website',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Store' => 
    array (
      'storeViewResourceAroundSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Flat\\Plugin\\StoreView',
      ),
      'catalogProductFlatIndexerStore' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Flat\\Plugin\\Store',
      ),
      'categoryStoreAroundSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\StoreView',
      ),
      'productAttributesStoreViewSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Eav\\Plugin\\StoreView',
      ),
      'catalogsearchFulltextIndexerStoreView' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Store\\View',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Group' => 
    array (
      'storeGroupResourceAroundSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Flat\\Plugin\\StoreGroup',
      ),
      'catalogProductFlatIndexerStoreGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Flat\\Plugin\\StoreGroup',
      ),
      'categoryStoreGroupAroundSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\StoreGroup',
      ),
      'storeGroupResourceAroundBeforeSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Indexer\\Stock\\Plugin\\StoreGroup',
      ),
      'catalogsearchFulltextIndexerStoreGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Store\\Group',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\Attribute\\Set' => 
    array (
      'invalidateEavIndexerOnAttributeSetSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Eav\\Plugin\\AttributeSet',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\TypeTransitionManager' => 
    array (
      'downloadable_product_transition' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Downloadable\\Model\\Product\\TypeTransitionManager\\Plugin\\Downloadable',
      ),
      'configurable_product_transition' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Product\\TypeTransitionManager\\Plugin\\Configurable',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Config\\Backend\\ShowOutOfStock' => 
    array (
      'showOutOfStockValueChanged' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\ShowOutOfStockConfig',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Config' => 
    array (
      'productListingAttributesCaching' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\ResourceModel\\Config',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\Attribute\\Backend\\AbstractBackend' => 
    array (
      'attributeValidation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\Attribute\\Backend\\AttributeValidation',
      ),
      'ConfigurableProduct::skipValidation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Model\\Attribute\\Backend\\AttributeValidation',
      ),
    ),
    'Magento\\Framework\\Config\\View' => 
    array (
      'weltpixel-googlecards-config-view' => 
      array (
        'sortOrder' => 10,
        'instance' => 'WeltPixel\\GoogleCards\\Plugin\\ConfigView',
      ),
      'weltpixel-categorypage-config-view' => 
      array (
        'sortOrder' => 10,
        'instance' => 'WeltPixel\\CategoryPage\\Plugin\\ConfigView',
      ),
      'weltpixel-productpage-framework-config-view' => 
      array (
        'sortOrder' => 10,
        'instance' => 'WeltPixel\\ProductPage\\Plugin\\FrameworkConfigView',
      ),
    ),
    'Magento\\Sales\\Api\\OrderItemRepositoryInterface' => 
    array (
      'get_gift_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\OrderItemGet',
      ),
    ),
    'Magento\\Eav\\Model\\ResourceModel\\ReadSnapshot' => 
    array (
      'catalogReadSnapshot' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\ResourceModel\\ReadSnapshotPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Item\\ToOrderItem' => 
    array (
      'copy_quote_files_to_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\QuoteItemProductOption',
      ),
      'append_bundle_data_to_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Bundle\\Model\\Plugin\\QuoteItem',
      ),
      'gift_message_quote_item_conversion' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\QuoteItem',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\Helper' => 
    array (
      'weeeAttributeOptionsProcess' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\ProcessTaxAttribute',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductRepositoryInterface' => 
    array (
      'remove_images_from_gallery_after_removing_product' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\RemoveImagesFromGalleryAfterRemovingProduct',
      ),
      'configurableProductSaveOptions' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\ProductRepositorySave',
      ),
      'product_authorization' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\ProductAuthorization',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Repository' => 
    array (
      'filterCustomAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Plugin\\FilterCustomAttribute',
      ),
      'process_extension_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Catalog\\Model\\Product\\Attribute\\RepositoryPlugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View' => 
    array (
      'quantityValidators' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Block\\Plugin\\ProductView',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Action' => 
    array (
      'ReindexUpdatedProducts' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Plugin\\ReindexUpdatedProducts',
      ),
      'catalogsearchFulltextMassAction' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Product\\Action',
      ),
      'update_url_rewrites_after_websites_update_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Plugin\\Catalog\\Model\\Product\\UpdateProductWebsiteUrlRewrites',
      ),
      'quoteProductMassChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Product\\Plugin\\MarkQuotesRecollectMassDisabled',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save' => 
    array (
      'massAction' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Plugin\\MassUpdateProductAttribute',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product' => 
    array (
      'catalogsearchFulltextProduct' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Product',
      ),
      'clean_quote_items_after_product_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Product\\Plugin\\RemoveQuoteItems',
      ),
      'update_quote_items_after_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Product\\Plugin\\UpdateQuoteItems',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category' => 
    array (
      'catalogsearchFulltextCategory' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Category',
      ),
      'category_move_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Category\\Move',
      ),
      'category_delete_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Category\\Remove',
      ),
      'update_url_path_for_different_stores' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Category\\UpdateUrlPath',
      ),
      'fulltext_search_indexer' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Model\\Plugin\\Category',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Product\\Category\\Action\\Rows' => 
    array (
      'catalogsearchFulltextCategoryAssignment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Product\\Category\\Action\\Rows',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute' => 
    array (
      'catalogsearchFulltextIndexerAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Attribute',
      ),
      'catalogsearchAttributeSearchWeightCache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Attribute\\SearchWeight',
      ),
      'updateElasticsearchIndexerMapping' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Elasticsearch\\Model\\Indexer\\Fulltext\\Plugin\\Category\\Product\\Attribute',
      ),
    ),
    'Magento\\Framework\\Search\\Request\\Config\\FilesystemReader' => 
    array (
      'catalogSearchDynamicFields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Search\\ReaderPlugin',
      ),
      'productAttributesDynamicFields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogGraphQl\\Plugin\\Search\\Request\\ConfigReader',
      ),
    ),
    'Magento\\Catalog\\Model\\Layer\\Search\\CollectionFilter' => 
    array (
      'searchQuery' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Layer\\Search\\Plugin\\CollectionFilter',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Action\\DataProvider' => 
    array (
      'stockedProductsFilterPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Plugin\\StockedProductsFilterPlugin',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\StorageInterface' => 
    array (
      'storage_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Storage',
      ),
    ),
    'Magento\\CatalogUrlRewrite\\Model\\Storage\\DbStorage' => 
    array (
      'dynamic_storage_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Plugin\\DynamicCategoryRewrites',
      ),
    ),
    'Magento\\Framework\\View\\Asset\\MergeService' => 
    array (
      'cleanMergedJsCss' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaStorage\\Model\\Asset\\Plugin\\CleanMergedJsCss',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository' => 
    array (
      'multishipping_quote_repository' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Multishipping\\Plugin\\MultishippingQuoteRepository',
      ),
      'accessControl' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\QuoteRepository\\Plugin\\AccessChangeQuoteControl',
      ),
      'authorization' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\QuoteRepository\\Plugin\\Authorization',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address' => 
    array (
      'mposc_convert_quote_address_to_customer_address' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Osc\\Model\\Plugin\\Customer\\Address\\ConvertQuoteAddressToCustomerAddress',
      ),
    ),
    'Magento\\Catalog\\Api\\TierPriceStorageInterface' => 
    array (
      'update_quote_items_after_tier_prices_update' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Product\\Plugin\\UpdateQuote',
      ),
    ),
    'Magento\\MediaGallerySynchronizationApi\\Model\\ImportFilesComposite' => 
    array (
      'createMediaGalleryThumbnails' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryUi\\Plugin\\CreateThumbnails',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page' => 
    array (
      'cms_url_rewrite_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsUrlRewrite\\Plugin\\Cms\\Model\\ResourceModel\\Page',
      ),
    ),
    'Magento\\Integration\\Api\\IntegrationServiceInterface' => 
    array (
      'webapiIntegrationService' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Integration\\Model\\Plugin\\Integration',
      ),
    ),
    'Magento\\User\\Model\\User' => 
    array (
      'revokeTokensFromInactiveAdmins' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Integration\\Plugin\\Model\\AdminUser',
      ),
    ),
    'Magento\\Customer\\Model\\Customer' => 
    array (
      'revokeTokensFromInactiveCustomers' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Integration\\Plugin\\Model\\CustomerUser',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Creditmemo' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\History' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Invoice' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintAction' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintCreditmemo' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintInvoice' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintShipment' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Reorder' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Shipment' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\View' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\ShipmentRepository' => 
    array (
      'wesupply-toolbox-shipmentrepository' => 
      array (
        'sortOrder' => 5,
        'instance' => 'WeSupply\\Toolbox\\Plugin\\ShipmentRepositoryInterface',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\CreditmemoRepository' => 
    array (
      'mailchimp_save_creditmemo' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Ebizmarts\\MailChimp\\Model\\Plugin\\Creditmemo',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Handler\\Address' => 
    array (
      'addressUpdate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Model\\Order\\Invoice\\Plugin\\AddressUpdate',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Structure\\Converter' => 
    array (
      'cron_backend_config_structure_converter_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Cron\\Model\\Backend\\Config\\Structure\\Converter',
      ),
    ),
    'Magento\\Framework\\View\\Model\\Layout\\Merge' => 
    array (
      'widget-layout-update-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Widget\\Model\\ResourceModel\\Layout\\Plugin',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Backend\\Baseurl' => 
    array (
      'updateAnalyticsSubscription' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Analytics\\Model\\Plugin\\BaseUrlConfigPlugin',
      ),
    ),
    'Magento\\Integration\\Model\\Validator\\BearerTokenValidator' => 
    array (
      'allow_bearer_token' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Analytics\\Plugin\\BearerTokenValidatorPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\CartConfiguration' => 
    array (
      'Downloadable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Downloadable\\Model\\Product\\CartConfiguration\\Plugin\\Downloadable',
      ),
      'isProductConfigured' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\Product\\Cart\\Configuration\\Plugin\\Grouped',
      ),
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Product\\CartConfiguration\\Plugin\\Configurable',
      ),
    ),
    'Magento\\Framework\\App\\FrontControllerInterface' => 
    array (
      'configHash' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Deploy\\Model\\Plugin\\ConfigChangeDetector',
      ),
      'append_no_store_cache_header' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Plugin\\AppendNoStoreCacheHeader',
      ),
    ),
    'Magento\\Framework\\View\\Asset\\Source' => 
    array (
      'weltpixel-frontendoptions-view-asset-source' => 
      array (
        'sortOrder' => 10,
        'instance' => 'WeltPixel\\FrontendOptions\\Plugin\\ViewAssetSource',
      ),
    ),
    'Magento\\Checkout\\Block\\Cart\\LayoutProcessor' => 
    array (
      'checkout_cart_shipping_dhl' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Dhl\\Model\\Plugin\\Checkout\\Block\\Cart\\Shipping',
      ),
      'checkout_cart_shipping_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\OfflineShipping\\Model\\Plugin\\Checkout\\Block\\Cart\\Shipping',
      ),
      'remove_estimations_shipping_address_cart' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'WeSupply\\Toolbox\\Plugin\\Magento\\Checkout\\Block\\Cart\\LayoutProcessor',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Price' => 
    array (
      'bundle' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Bundle\\Model\\Plugin\\PriceBackend',
      ),
      'configurable' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\PriceBackend',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Item' => 
    array (
      'bundle' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Bundle\\Model\\Sales\\Order\\Plugin\\Item',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteManagement' => 
    array (
      'update_bundle_quote_item_options' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Bundle\\Plugin\\Quote\\UpdateBundleQuoteItemOptions',
      ),
      'validate_purchase_order_number' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\OfflinePayments\\Plugin\\ValidatePurchaseOrderNumber',
      ),
      'coupon_uses_increment_plugin' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\SalesRule\\Plugin\\CouponUsagesIncrement',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Action\\Rows' => 
    array (
      'catalogsearchFulltextProductAssignment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Elasticsearch\\Model\\Indexer\\Fulltext\\Plugin\\Category\\Product\\Action\\Rows',
      ),
    ),
    'Magento\\Framework\\Indexer\\Config\\DependencyInfoProvider' => 
    array (
      'indexerDependencyUpdaterPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Elasticsearch\\Model\\Indexer\\Plugin\\DependencyUpdaterPlugin',
      ),
    ),
    'Magento\\Search\\Model\\ResourceModel\\SynonymGroup' => 
    array (
      'synonymReaderPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Elasticsearch\\Model\\Indexer\\Fulltext\\Plugin\\Search\\Model\\SynonymReaderPlugin',
      ),
    ),
    'Magento\\Email\\Model\\Template' => 
    array (
      'mail_subject' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Icecube\\Mailsubject\\Plugin\\Template',
      ),
    ),
    'Magento\\Framework\\Mail\\TransportInterface' => 
    array (
      'WindowsSmtpConfig' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Email\\Model\\Plugin\\WindowsSmtpConfig',
      ),
      'EmailDisable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Email\\Model\\Mail\\TransportInterfacePlugin',
      ),
      'mageplaza_mail_transport' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Mageplaza\\Smtp\\Mail\\Transport',
      ),
    ),
    'Magento\\Email\\Model\\AbstractTemplate' => 
    array (
      'EmailTemplateLinkUrl' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Email\\Model\\Plugin\\GetUrl',
      ),
    ),
    'Magento\\Shipping\\Block\\DataProviders\\Tracking\\DeliveryDateTitle' => 
    array (
      'update_delivery_date_title' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Fedex\\Plugin\\Block\\DataProviders\\Tracking\\ChangeTitle',
      ),
      'ups_update_delivery_date_title' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Ups\\Plugin\\Block\\DataProviders\\Tracking\\ChangeTitle',
      ),
    ),
    'Magento\\Shipping\\Block\\Tracking\\Popup' => 
    array (
      'update_delivery_date_value' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Fedex\\Plugin\\Block\\Tracking\\PopupDeliveryDate',
      ),
    ),
    'Magento\\Sales\\Api\\OrderRepositoryInterface' => 
    array (
      'save_gift_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\OrderSave',
      ),
      'get_gift_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\OrderGet',
      ),
      'save_order_tax' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\Plugin\\OrderSave',
      ),
      'mp_delivery_information' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\DeliveryTime\\Plugin\\Sales\\Model\\OrderGet',
      ),
      'mposc_add_order_comment_to_order_api' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Osc\\Model\\Plugin\\Api\\OrderComment',
      ),
      'wesupply-toolbox-orderrespository' => 
      array (
        'sortOrder' => 5,
        'instance' => 'WeSupply\\Toolbox\\Plugin\\OrderRepositoryInterface',
      ),
    ),
    'Magento\\Framework\\App\\PageCache\\Identifier' => 
    array (
      'core-app-area-design-exception-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\PageCache\\Model\\App\\CacheIdentifierPlugin',
      ),
    ),
    'Magento\\Framework\\App\\PageCache\\Cache' => 
    array (
      'fpc-type-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\App\\PageCachePlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Type' => 
    array (
      'grouped_output' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\Product\\Type\\Plugin',
      ),
      'configurable_output' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Product\\Type\\Plugin',
      ),
    ),
    'Magento\\Catalog\\Helper\\Product\\Configuration' => 
    array (
      'grouped_options' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Helper\\Product\\Configuration\\Plugin\\Grouped',
      ),
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Helper\\Product\\Configuration\\Plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Initialization\\Helper\\ProductLinks' => 
    array (
      'GroupedProduct' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\Product\\Initialization\\Helper\\ProductLinks\\Plugin\\Grouped',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Link' => 
    array (
      'groupedProductLinkProcessor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\ResourceModel\\Product\\Link\\RelationPersister',
      ),
    ),
    'Magento\\GroupedProduct\\Model\\Product\\Type\\Grouped' => 
    array (
      'outOfStockFilter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedCatalogInventory\\Plugin\\OutOfStockFilter',
      ),
      'grouped_product_minimum_advertised_price' => 
      array (
        'sortOrder' => 0,
        'instance' => '\\Magento\\MsrpGroupedProduct\\Plugin\\Model\\Product\\Type\\Grouped',
      ),
    ),
    'Magento\\Customer\\Controller\\Ajax\\Login' => 
    array (
      'captcha_validation' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Captcha\\Model\\Customer\\Plugin\\AjaxLogin',
      ),
    ),
    'Magento\\Checkout\\Block\\Cart\\Sidebar' => 
    array (
      'login_captcha' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Captcha\\Model\\Cart\\ConfigPlugin',
      ),
      'addAgreementsToMinicartConfig' => 
      array (
        'sortOrder' => 0,
        'instance' => 'PayPal\\Braintree\\Plugin\\AddAgreementsToMinicartConfig',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Quote\\Item\\QuantityValidator\\Initializer\\Option' => 
    array (
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Quote\\Item\\QuantityValidator\\Initializer\\Option\\Plugin\\ConfigurableProduct',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Admin\\Item' => 
    array (
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Order\\Admin\\Item\\Plugin\\Configurable',
      ),
    ),
    'Magento\\Catalog\\Model\\Entity\\Product\\Attribute\\Group\\AttributeMapperInterface' => 
    array (
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Entity\\Product\\Attribute\\Group\\AttributeMapper\\Plugin',
      ),
    ),
    'Magento\\ProductVideo\\Block\\Product\\View\\Gallery' => 
    array (
      'product_video_gallery' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Block\\Plugin\\Product\\Media\\Gallery',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\Product\\Type\\Configurable' => 
    array (
      'add_swatch_attributes_to_configurable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\Configurable',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Pricing\\Renderer\\SalableResolver' => 
    array (
      'configurable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Catalog\\Model\\Product\\Pricing\\Renderer\\SalableResolver',
      ),
    ),
    'Magento\\SalesRule\\Model\\Rule\\Condition\\Product' => 
    array (
      'apply_rule_on_configurable_children' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\SalesRule\\Model\\Rule\\Condition\\Product',
      ),
      'Amasty_Conditions::AdditionalConditions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Conditions\\Plugin\\SalesRule\\Condition\\ProductPlugin',
      ),
    ),
    'Magento\\Tax\\Model\\Sales\\Total\\Quote\\CommonTaxCollector' => 
    array (
      'apply_tax_class_id' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Tax\\Model\\Sales\\Total\\Quote\\CommonTaxCollector',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\Stock\\Item' => 
    array (
      'updateStockChangedAuto' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\UpdateStockChangedAuto',
      ),
    ),
    'Magento\\Quote\\Model\\Cart\\CartTotalRepository' => 
    array (
      'multishipping_shipping_addresses' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Multishipping\\Model\\Cart\\CartTotalRepositoryPlugin',
      ),
      'coupon_label_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRule\\Plugin\\CartTotalRepository',
      ),
      'Amasty_Conditions::cart_total_repository_get' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amasty\\Conditions\\Plugin\\Cart\\CartTotalRepository',
      ),
    ),
    'Magento\\Integration\\Model\\ConfigBasedIntegrationManager' => 
    array (
      'webapiSetup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Webapi\\Model\\Plugin\\Manager',
      ),
    ),
    'Magento\\Backend\\Model\\Auth' => 
    array (
      'login_as_customer_admin_logout' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomer\\Plugin\\AdminLogoutPlugin',
      ),
      'disable_admin_login_auth' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\DisableAdminLoginAuthPlugin',
      ),
    ),
    'Magento\\Framework\\Api\\DataObjectHelper' => 
    array (
      'add_allow_remote_shopping_assistance_to_customer' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerGraphQl\\Plugin\\DataObjectHelperPlugin',
      ),
      'Amasty_Conditions::dataHelper' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amasty\\Conditions\\Plugin\\Framework\\Api\\DataObjectHelperPlugin',
      ),
    ),
    'Magento\\LoginAsCustomerApi\\Api\\AuthenticateCustomerBySecretInterface' => 
    array (
      'process_shopping_cart' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerQuote\\Plugin\\LoginAsCustomerApi\\ProcessShoppingCartPlugin',
      ),
    ),
    'Magento\\MediaGalleryApi\\Api\\DeleteAssetsByPathsInterface' => 
    array (
      'remove_media_content_after_asset_is_removed_by_path' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaContent\\Plugin\\MediaGalleryAssetDeleteByPath',
      ),
      'delete_renditions_on_assets_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\RemoveRenditions',
      ),
    ),
    'Magento\\MediaGalleryApi\\Api\\DeleteDirectoriesByPathsInterface' => 
    array (
      'remove_media_content_after_asset_is_removed_by_directory_path' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaContent\\Plugin\\MediaGalleryAssetDeleteByDirectoryPath',
      ),
    ),
    'Magento\\MediaGallerySynchronization\\Model\\Consume' => 
    array (
      'synchronize_media_content' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaContentSynchronization\\Plugin\\SynchronizeMediaContent',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Gallery\\Processor' => 
    array (
      'media_gallery_image_remove_metadata' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryCatalog\\Plugin\\Product\\Gallery\\RemoveAssetAfterRemoveImage',
      ),
    ),
    'Magento\\Cms\\Model\\Wysiwyg\\Images\\GetInsertImageContent' => 
    array (
      'set_rendition_path' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\SetRenditionPath',
      ),
    ),
    'Magento\\MediaGallerySynchronizationApi\\Model\\CreateAssetFromFileInterface' => 
    array (
      'addMetadataToAssetCreatedFromFile' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGallerySynchronizationMetadata\\Plugin\\CreateAssetFromFileMetadata',
      ),
    ),
    'Magento\\Framework\\App\\MaintenanceMode' => 
    array (
      'amqp_maintenance_mode' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MessageQueue\\Model\\Plugin\\ResourceModel\\Lock',
      ),
    ),
    'Magento\\Framework\\App\\Http' => 
    array (
      'framework-http-newrelic' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NewRelicReporting\\Plugin\\HttpPlugin',
      ),
    ),
    'Magento\\Framework\\App\\State' => 
    array (
      'framework-state-newrelic' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NewRelicReporting\\Plugin\\StatePlugin',
      ),
    ),
    'Symfony\\Component\\Console\\Command\\Command' => 
    array (
      'newrelic-describe-commands' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NewRelicReporting\\Plugin\\CommandPlugin',
      ),
    ),
    'Magento\\Framework\\Profiler\\Driver\\Standard\\Stat' => 
    array (
      'newrelic-describe-cronjobs' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NewRelicReporting\\Plugin\\StatPlugin',
      ),
    ),
    'Magento\\Newsletter\\Model\\Subscriber' => 
    array (
      'remove_subscriber_from_queue_after_unsubscribe' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Newsletter\\Model\\Plugin\\RemoveSubscriberFromQueue',
      ),
      'mailchimp-subscriber' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Ebizmarts\\MailChimp\\Model\\Plugin\\Subscriber',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Config' => 
    array (
      'append_sales_rule_keys_to_quote' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRule\\Model\\Plugin\\QuoteConfigProductAttributes',
      ),
      'Amasty_Shiprules::ProductAttributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Shiprules\\Plugin\\ProductAttributes',
      ),
      'weltpixel-googletagmanager-quote-config' => 
      array (
        'sortOrder' => 10,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\QuoteConfig',
      ),
    ),
    'Magento\\SalesRule\\Model\\Rule\\Condition\\Product\\Combine' => 
    array (
      'Amasty_Conditions::AdditionalProductConditions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Conditions\\Plugin\\SalesRuleModel\\Rule\\Condition\\Product\\CombinePlugin',
      ),
    ),
    'Magento\\Sales\\Model\\Service\\OrderService' => 
    array (
      'coupon_uses_decrement_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRule\\Plugin\\CouponUsagesDecrement',
      ),
    ),
    'Magento\\CatalogWidget\\Block\\Product\\ProductsList' => 
    array (
      'pagebuilder_product_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Catalog\\Block\\Product\\ProductsListPlugin',
      ),
    ),
    'Magento\\Sales\\Api\\Data\\OrderPaymentInterface' => 
    array (
      'PaymentVaultExtensionAttributeOperations' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Vault\\Plugin\\PaymentVaultAttributesLoad',
      ),
    ),
    'Magento\\Checkout\\Api\\PaymentInformationManagementInterface' => 
    array (
      'ProcessPaymentVaultInformationManagement' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Vault\\Plugin\\PaymentVaultInformationManagement',
      ),
      'validate-agreements' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutAgreements\\Model\\Checkout\\Plugin\\Validation',
      ),
      'swissupRecaptcha-validate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Swissup\\Recaptcha\\Plugin\\Checkout\\Api\\Validation',
      ),
    ),
    'Magento\\Payment\\Model\\Checks\\Composite' => 
    array (
      'paypal_specification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Model\\Method\\Checks\\SpecificationPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\Order' => 
    array (
      'express_order_invoice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\OrderCanInvoice',
      ),
      'wesupply-toolbox-order' => 
      array (
        'sortOrder' => 5,
        'instance' => 'WeSupply\\Toolbox\\Plugin\\Order',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Validation\\CanInvoice' => 
    array (
      'express_order_invoice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\ValidatorCanInvoice',
      ),
    ),
    'Magento\\Framework\\Session\\SessionStartChecker' => 
    array (
      'transparent_session_checker' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\TransparentSessionChecker',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Payment' => 
    array (
      'paypal_transparent' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\TransparentOrderPayment',
      ),
    ),
    'Magento\\Quote\\Model\\AddressAdditionalDataProcessor' => 
    array (
      'persistent_remember_me_checkbox_processor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Persistent\\Model\\Checkout\\AddressDataProcessorPlugin',
      ),
    ),
    'Magento\\Customer\\CustomerData\\Customer' => 
    array (
      'section_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Persistent\\Model\\Plugin\\CustomerData',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Gallery\\CreateHandler' => 
    array (
      'external_video_media_entry_saver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ProductVideo\\Model\\Plugin\\Catalog\\Product\\Gallery\\CreateHandler',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Gallery\\ReadHandler' => 
    array (
      'external_video_media_entry_reader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ProductVideo\\Model\\Plugin\\Catalog\\Product\\Gallery\\ReadHandler',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Gallery' => 
    array (
      'external_video_media_resource_backend' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ProductVideo\\Model\\Plugin\\ExternalVideoResourceBackend',
      ),
    ),
    'Magento\\Checkout\\Api\\GuestPaymentInformationManagementInterface' => 
    array (
      'validate-guest-agreements' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutAgreements\\Model\\Checkout\\Plugin\\GuestValidation',
      ),
      'swissupRecaptcha-guest-validate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Swissup\\Recaptcha\\Plugin\\Checkout\\Api\\GuestValidation',
      ),
    ),
    'Magento\\Framework\\GraphQl\\Query\\ResolverInterface' => 
    array (
      'graphql_recaptcha_validation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ReCaptchaWebapiGraphQl\\Plugin\\GraphQlValidator',
      ),
    ),
    'Magento\\Webapi\\Controller\\Rest\\RequestValidator' => 
    array (
      'rest_webapi_recaptcha_validation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ReCaptchaWebapiRest\\Plugin\\RestValidationPlugin',
      ),
    ),
    'Magento\\Webapi\\Controller\\Soap\\Request\\Handler' => 
    array (
      'soap_webapi_recaptcha_validation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ReCaptchaWebapiRest\\Plugin\\SoapValidationPlugin',
      ),
    ),
    'Magento\\MediaStorage\\Model\\File\\Storage\\SynchronizationFactory' => 
    array (
      'remoteMediaStorageSynchronizationFactory' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\File\\Storage\\SynchronizationFactory',
      ),
    ),
    'Magento\\MediaGalleryMetadata\\Model\\IptcEmbed' => 
    array (
      'remoteIptcEmbed' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\MediaGalleryMetadata\\IptcEmbed',
      ),
    ),
    'Magento\\MediaGalleryMetadata\\Model\\ExifReader' => 
    array (
      'remoteExifReader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\MediaGalleryMetadata\\ExifReader',
      ),
    ),
    'Magento\\MediaGallerySynchronization\\Model\\Filesystem\\GetFileInfo' => 
    array (
      'remoteGetFileInfo' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\Filesystem\\GetFileInfo',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Option\\Type\\File\\ExistingValidate' => 
    array (
      'remoteValidatorInfo' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\ExistingValidate',
      ),
    ),
    'Magento\\Framework\\Image\\Adapter\\AbstractAdapter' => 
    array (
      'remoteImageFile' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\Image',
      ),
    ),
    'Magento\\Framework\\Archive\\Zip' => 
    array (
      'remoteZipArchive' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\Zip',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\ResourceModel\\Product\\Type\\Configurable\\Product\\Collection' => 
    array (
      'catalogRulePriceForConfigurableProduct' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleConfigurable\\Plugin\\ConfigurableProduct\\Model\\ResourceModel\\AddCatalogRulePrice',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\CreditmemoDocumentFactory' => 
    array (
      'sales_inventory_creditmemo_item_set_back_to_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesInventory\\Model\\Plugin\\Order\\CreditmemoDocumentFactoryPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Validation\\RefundOrderInterface' => 
    array (
      'refundOrderValidationAfter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesInventory\\Model\\Plugin\\Order\\Validation\\OrderRefundCreationArguments',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Validation\\RefundInvoiceInterface' => 
    array (
      'refundInvoiceValidationAfter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesInventory\\Model\\Plugin\\Order\\Validation\\InvoiceRefundCreationArguments',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Eav\\Attribute' => 
    array (
      'save_swatches_option_params' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\EavAttribute',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\AbstractProduct' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
    ),
    'Magento\\LayeredNavigation\\Block\\Navigation\\FilterRenderer' => 
    array (
      'swatches_layered_renderer' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\FilterRenderer',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\OptionManagement' => 
    array (
      'swatches_product_attribute_optionmanagement_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Plugin\\Eav\\Model\\Entity\\Attribute\\OptionManagement',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address\\ToOrder' => 
    array (
      'add_tax_to_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\Quote\\ToOrderConverter',
      ),
    ),
    'Magento\\Quote\\Model\\Cart\\TotalsConverter' => 
    array (
      'add_tax_details' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\Quote\\GrandTotalDetailsPlugin',
      ),
      'addGiftWrapInitialAmount' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Osc\\Model\\Plugin\\Quote\\GiftWrap',
      ),
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Listing\\DataProvider' => 
    array (
      'taxSettingsProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Plugin\\Ui\\DataProvider\\TaxSettings',
      ),
      'weeeSettingsProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Plugin\\Ui\\DataProvider\\WeeeSettings',
      ),
      'wishlistSettingsDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Wishlist\\Plugin\\Ui\\DataProvider\\WishlistSettings',
      ),
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth\\Forgotpassword' => 
    array (
      'admin_forgot_password_plugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\AdminForgotPasswordPlugin',
      ),
    ),
    'Magento\\Captcha\\Observer\\CheckUserLoginBackendObserver' => 
    array (
      'captcha_check_user_login_backend_observer_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\CheckUserLoginBackendObserverPlugin',
      ),
    ),
    'Magento\\Captcha\\Observer\\ResetAttemptForBackendObserver' => 
    array (
      'captcha_reset_attempt_for_backend_observer_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\ResetAttemptForBackendObserverPlugin',
      ),
    ),
    'Magento\\Integration\\Model\\AdminTokenService' => 
    array (
      'admin_adobe_ims_admin_token_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\AdminTokenPlugin',
      ),
    ),
    'Magento\\Webapi\\Model\\ServiceMetadata' => 
    array (
      'webapiServiceMetadataAsync' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiAsync\\Plugin\\ServiceMetadata',
      ),
    ),
    'Magento\\Webapi\\Model\\Cache\\Type\\Webapi' => 
    array (
      'webapiCacheAsync' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiAsync\\Plugin\\Cache\\Webapi',
      ),
    ),
    'Magento\\Webapi\\Controller\\Rest' => 
    array (
      'webapiContorllerRestAsync' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiAsync\\Plugin\\ControllerRest',
      ),
    ),
    'Magento\\AsynchronousOperations\\Model\\MassConsumerEnvelopeCallback' => 
    array (
      'storeIdFieldForAsynchronousOperationsMassConsumerEnvelopeCallback' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiAsync\\Plugin\\AsynchronousOperations\\MassConsumerEnvelopeCallback',
      ),
    ),
    'Magento\\Webapi\\Model\\Config\\Converter' => 
    array (
      'webapiResourceSecurity' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiSecurity\\Model\\Plugin\\AnonymousResourceSecurity',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute\\RemoveProductAttributeData' => 
    array (
      'removeWeeAttributesData' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Plugin\\Catalog\\ResourceModel\\Attribute\\RemoveProductWeeData',
      ),
    ),
    'Magento\\Catalog\\Ui\\Component\\Listing\\Columns' => 
    array (
      'changeWeeColumnConfig' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Plugin\\Catalog\\Ui\\Component\\Listing\\Columns',
      ),
    ),
    'Magento\\Wishlist\\Controller\\AbstractIndex' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Wishlist\\Controller\\Index\\Plugin',
      ),
    ),
    'Magento\\Framework\\View\\TemplateEngine\\Php' => 
    array (
      'Amasty_Base::AddEscaperToPhpRenderer' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Amasty\\Base\\Plugin\\Framework\\View\\TemplateEngine\\Php',
      ),
      'Magefan_Community_Plugin_Magento_Framework_View_TemplateEngine_Php' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'Magefan\\Community\\Plugin\\Magento\\Framework\\View\\TemplateEngine\\Php',
      ),
    ),
    'Magento\\Framework\\Setup\\Declaration\\Schema\\OperationsExecutor' => 
    array (
      'Amasty_Base::execute-patches-before-schema-apply' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Base\\Plugin\\Setup\\Model\\DeclarationInstaller\\ApplyPatchesBeforeDeclarativeSchema',
      ),
    ),
    'Magento\\Framework\\Config\\FileResolverByModule' => 
    array (
      'AmBase::FileResolverByModule' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Base\\Plugin\\Framework\\Setup\\Declaration\\Schema\\FileSystem\\XmlReader\\RestrictDropOperationsPlugin',
      ),
    ),
    'Temando\\Shipping\\Observer\\SaveCheckoutFieldsObserver' => 
    array (
      'Amasty_CashOnDelivery::Temando_Shipping_Observer_SaveCheckoutFieldsObserver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Conditions\\Plugin\\Shipping\\Observer\\SaveCheckoutFieldsObserverPlugin',
      ),
    ),
    'Magento\\Checkout\\Model\\TotalsInformationManagement' => 
    array (
      'Amasty_Conditions::ExtensionAttributesResolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Conditions\\Plugin\\Checkout\\Model\\TotalInformationManagementPlugin',
      ),
      'saveShipingMethodOnCalculate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Osc\\Model\\Plugin\\Checkout\\TotalsInformationManagement',
      ),
    ),
    'Magento\\Shipping\\Model\\Shipping' => 
    array (
      'Amasty_Shiprules::Shipping' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Shiprules\\Plugin\\Shipping\\Model\\ShippingPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address\\Rate' => 
    array (
      'Amasty_Shiprules::ImportShippingRate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Shiprules\\Plugin\\Quote\\Model\\Quote\\Address\\RatePlugin',
      ),
    ),
    'Magento\\Quote\\Model\\Quote' => 
    array (
      'mailchimp-save-quote' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Ebizmarts\\MailChimp\\Model\\Plugin\\Quote',
      ),
      'getItemById_Osc' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Osc\\Model\\Plugin\\Quote',
      ),
      'updateQuoteStoreId' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Quote\\Plugin\\UpdateQuoteStoreId',
      ),
    ),
    'Magento\\Newsletter\\Controller\\Manage\\Save' => 
    array (
      'mailchimp-account-interest-group' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Ebizmarts\\MailChimp\\Model\\Plugin\\Newsletter\\Save',
      ),
    ),
    'Magento\\Newsletter\\Model\\SubscriptionManager' => 
    array (
      'mailchimp-subscriptionmanager' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Ebizmarts\\MailChimp\\Model\\Plugin\\SubscriptionManager',
      ),
    ),
    'Magento\\SalesRule\\Model\\Coupon' => 
    array (
      'mailchimp-coupon' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Ebizmarts\\MailChimp\\Model\\Plugin\\Coupon',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Shipment' => 
    array (
      'mailchimp_save_shipment' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Ebizmarts\\MailChimp\\Model\\Plugin\\Ship',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Invoice' => 
    array (
      'mailchimp_save_invoice' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Ebizmarts\\MailChimp\\Model\\Plugin\\Invoice',
      ),
    ),
    'Magento\\Framework\\Image' => 
    array (
      'Lof_NextGenImages::convertWebpAfterImageSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Lof\\NextGenImages\\Plugin\\ConvertAfterImageSave',
      ),
    ),
    'Magento\\AdminGws\\Model\\Models' => 
    array (
      'magefan_blog_plugin_admingws_model_models_plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => '\\Magefan\\Blog\\Plugin\\Magento\\AdminGws\\Model\\ModelsPlugin',
      ),
    ),
    'Magento\\UrlRewriteGraphQl\\Model\\Resolver\\EntityUrl' => 
    array (
      'Magefan_BlogGraphQl_Plugin_Magento_UrlRewriteGraphQl_Model_Resolver_EntityUrl' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'Magefan\\BlogGraphQl\\Plugin\\Magento\\UrlRewriteGraphQl\\Model\\Resolver\\EntityUrl',
      ),
    ),
    'Magento\\UrlRewriteGraphQl\\Model\\Resolver\\Route' => 
    array (
      'Magefan_BlogGraphQl_Plugin_Magento_UrlRewriteGraphQl_Model_Resolver_EntityUrl' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'Magefan\\BlogGraphQl\\Plugin\\Magento\\UrlRewriteGraphQl\\Model\\Resolver\\EntityUrl',
      ),
    ),
    'Magento\\Quote\\Model\\CouponManagement' => 
    array (
      'mpace_coupon_management' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\AbandonedCart\\Plugin\\Model\\CouponManagement',
      ),
    ),
    'Magento\\Checkout\\Model\\ShippingInformationManagement' => 
    array (
      'mpdt_saveDeliveryInformation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\DeliveryTime\\Model\\Plugin\\Checkout\\ShippingInformationManagement',
      ),
      'save_delivery_estimations' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'WeSupply\\Toolbox\\Plugin\\Magento\\Checkout\\Model\\ShippingInformationManagement',
      ),
      'weltpixel-googletagmanager-checkout-shippinginformation' => 
      array (
        'sortOrder' => 10,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\ShippingInformation',
      ),
    ),
    'Magento\\Customer\\Model\\Address' => 
    array (
      'setShouldIgnoreValidation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Osc\\Model\\Plugin\\Customer\\Address',
      ),
    ),
    'Magento\\Checkout\\Helper\\Data' => 
    array (
      'osc_allow_guest_checkout' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Osc\\Model\\Plugin\\Checkout\\Data',
      ),
    ),
    'Magento\\Eav\\Model\\Attribute\\Data\\AbstractData' => 
    array (
      'mposc_bypass_validate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Osc\\Model\\Plugin\\Eav\\Model\\Attribute\\AbstractData',
      ),
    ),
    'Magento\\Customer\\Model\\Attribute\\Data\\Postcode' => 
    array (
      'mposc_bypass_validate_postcode' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Osc\\Model\\Plugin\\Eav\\Model\\Attribute\\Postcode',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteValidator' => 
    array (
      'mposc_set_should_ignore_validation_quote' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Osc\\Model\\Plugin\\Quote\\QuoteValidator',
      ),
    ),
    'Magento\\Bundle\\Block\\Catalog\\Product\\View\\Type\\Bundle\\Option' => 
    array (
      'mposc_append_item_option' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Osc\\Model\\Plugin\\Catalog\\Product\\View\\Type\\Bundle\\OptionPlugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View\\Options\\AbstractOptions' => 
    array (
      'mposc_append_item_layout' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Osc\\Model\\Plugin\\Catalog\\Product\\View\\Options\\AbstractOptions',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address\\ToOrderAddress' => 
    array (
      'mposc_convert_quote_address_to_order_address' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Mageplaza\\Osc\\Model\\Plugin\\Customer\\Address\\ConvertQuoteAddressToOrderAddress',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address\\CustomAttributeList' => 
    array (
      'mposc_add_custom_field_to_address' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Osc\\Model\\Plugin\\Quote\\Address\\CustomAttributeList',
      ),
    ),
    'Magento\\Customer\\Model\\Address\\CustomAttributeList' => 
    array (
      'mposc_add_custom_field_to_customer' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Osc\\Model\\Plugin\\Customer\\Address\\CustomAttributeList',
      ),
    ),
    'Magento\\Quote\\Model\\Cart\\Totals\\ItemConverter' => 
    array (
      'mpsoc_add_configurable_options' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Osc\\Model\\Plugin\\Cart\\ItemConverterPlugin',
      ),
    ),
    'Magento\\Framework\\Mail\\Template\\TransportBuilder' => 
    array (
      'mageplaza_mail_template_transport_builder' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Mageplaza\\Smtp\\Mail\\Template\\TransportBuilder',
      ),
    ),
    'Magento\\Framework\\Mail\\Template\\TransportBuilderByStore' => 
    array (
      'mpsmtp_appTransportBuilder' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Smtp\\Plugin\\Message',
      ),
    ),
    'Magento\\CatalogGraphQl\\Model\\Resolver\\Products\\DataProvider\\ProductSearch\\ProductCollectionSearchCriteriaBuilder' => 
    array (
      'mpsmtp_search_criteria_builder' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Smtp\\Plugin\\Model\\Resolver\\Products\\DataProvider\\ProductSearch\\ProductSearchCriteriaBuilder',
      ),
    ),
    'Magento\\Framework\\View\\Asset\\Minification' => 
    array (
      'braintreeExcludeFromMinification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'PayPal\\Braintree\\Plugin\\ExcludeFromMinification',
      ),
    ),
    'Magento\\Checkout\\CustomerData\\AbstractItem' => 
    array (
      'braintreeAddFlagForVirtualProducts' => 
      array (
        'sortOrder' => 0,
        'instance' => 'PayPal\\Braintree\\Plugin\\AddFlagForVirtualProducts',
      ),
    ),
    'Magento\\Quote\\Api\\CartManagementInterface' => 
    array (
      'order_cancellation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'PayPal\\Braintree\\Plugin\\OrderCancellation',
      ),
    ),
    'Magento\\Store\\Block\\Switcher' => 
    array (
      'addViewModelBeforeToHtml' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Swissup\\Core\\Plugin\\StoreSwitcherBlock',
      ),
    ),
    'Magento\\Csp\\Model\\Collector\\DynamicCollector' => 
    array (
      'swissup_marketplace' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Swissup\\Marketplace\\Plugin\\CspPolicyCollector',
      ),
    ),
    'Magento\\Captcha\\Model\\CaptchaFactory' => 
    array (
      'createRecaptchaModel' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Swissup\\Recaptcha\\Plugin\\Model\\CaptchaFactory',
      ),
    ),
    'Swissup\\Askit\\Block\\Question\\AbstractForm' => 
    array (
      'swissup_recaptcha' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Swissup\\Recaptcha\\Plugin\\AskitForm',
      ),
    ),
    'Magento\\Sales\\Api\\ShipmentTrackRepositoryInterface' => 
    array (
      'wesupply-toolbox-shipmenttrackrespository' => 
      array (
        'sortOrder' => 5,
        'instance' => 'WeSupply\\Toolbox\\Plugin\\ShipmentTrackRepositoryInterface',
      ),
    ),
    'Magento\\Customer\\Model\\Authentication' => 
    array (
      'wesupply-toolbox_authentication' => 
      array (
        'sortOrder' => 7,
        'instance' => 'WeSupply\\Toolbox\\Plugin\\Customer\\Authentication',
      ),
    ),
    'Magento\\Quote\\Model\\Cart\\ShippingMethodConverter' => 
    array (
      'append_delivery_estimations' => 
      array (
        'sortOrder' => 8,
        'disabled' => false,
        'instance' => 'WeSupply\\Toolbox\\Plugin\\Carrier\\AppendEstimations',
      ),
    ),
    'Magento\\Checkout\\Block\\Checkout\\LayoutProcessor' => 
    array (
      'remove_estimations_shipping_address' => 
      array (
        'sortOrder' => 9,
        'disabled' => false,
        'instance' => 'WeSupply\\Toolbox\\Plugin\\Magento\\Checkout\\Block\\Checkout\\LayoutProcessor',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage\\Save' => 
    array (
      'wesupply-giftmessage-admin-save' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeSupply\\Toolbox\\Plugin\\Adminhtml\\Order\\View\\Giftmessage\\Save',
      ),
    ),
    'Magento\\Framework\\View\\Asset\\PreProcessor\\Chain' => 
    array (
      'weltpixel-frontendoptions-view-asset-processor-chain' => 
      array (
        'sortOrder' => 10,
        'instance' => 'WeltPixel\\FrontendOptions\\Plugin\\ViewPreProcessorChain',
      ),
    ),
    'Magento\\Checkout\\Model\\PaymentInformationManagement' => 
    array (
      'weltpixel-googletagmanager-checkout-paymentinformation' => 
      array (
        'sortOrder' => 10,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\PaymentInformation',
      ),
    ),
    'Magento\\Checkout\\Model\\GuestPaymentInformationManagement' => 
    array (
      'weltpixel-googletagmanager-checkout-guestpaymentinformation' => 
      array (
        'sortOrder' => 10,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\GuestPaymentInformation',
      ),
      'inject_guest_address_for_nologin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Persistent\\Model\\Checkout\\GuestPaymentInformationManagementPlugin',
      ),
    ),
    'Magento\\Wishlist\\Model\\Item' => 
    array (
      'weltpixel-googletagmanager-wishlist-addtocart' => 
      array (
        'sortOrder' => 10,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\WishlistAddToCart',
      ),
    ),
    'WeltPixel\\Quickview\\Model\\QuickviewMessages' => 
    array (
      'reindex_ruleid_products' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\Quickview\\Plugin\\Indexer\\ReindexRuleIdProducts',
      ),
    ),
    'Magento\\Theme\\CustomerData\\Messages' => 
    array (
      'weltpixel_cart_messages_remove' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\Quickview\\Plugin\\RemoveCartMessages',
      ),
    ),
    'Magento\\Framework\\View\\Element\\Message\\Renderer\\BlockRenderer' => 
    array (
      'weltpixel_cart_messages_remove_from_renderer' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\Quickview\\Plugin\\RemoveCartMessagesFromRenderer',
      ),
    ),
    'Magento\\Checkout\\CustomerData\\ItemInterface' => 
    array (
      'weltpixel_quickview_confirmation_itemgetdata' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\Quickview\\Plugin\\CheckoutCustomerData',
      ),
    ),
    'Magento\\Framework\\Authorization' => 
    array (
      'customerAuthorization' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerAuthorization',
      ),
      'guestAuthorization' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Webapi\\Model\\Plugin\\GuestAuthorization',
      ),
    ),
    'Magento\\Cms\\Api\\PageRepositoryInterface' => 
    array (
      'aclCheck' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Cms\\Observer\\PageAclPlugin',
      ),
    ),
    'Magento\\Framework\\App\\ResourceConnection' => 
    array (
      'get_catalog_category_product_index_table_name' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\TableResolver',
      ),
      'get_catalog_product_price_index_table_name' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Price\\Plugin\\TableResolver',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductCustomOptionRepositoryInterface' => 
    array (
      'updateProductCustomOptionsAttributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\Product\\Option\\UpdateProductCustomOptionsAttributes',
      ),
    ),
    'Magento\\Catalog\\Api\\CategoryRepositoryInterface' => 
    array (
      'category_authorization' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\CategoryAuthorization',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductLinkRepositoryInterface' => 
    array (
      'reindex_after_save_product_links' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Api\\ProductLinkRepositoryInterface\\ReindexAfterSaveProductLinksPlugin',
      ),
      'reindex_after_delete_by_id_product_links' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Api\\ProductLinkRepositoryInterface\\ReindexAfterDeleteByIdProductLinksPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\GuestCart\\GuestCartManagement' => 
    array (
      'authorization' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\GuestCartManagement\\Plugin\\Authorization',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order' => 
    array (
      'authorization' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Model\\ResourceModel\\Order\\Plugin\\Authorization',
      ),
    ),
    'Magento\\Sales\\Api\\ShipmentRepositoryInterface' => 
    array (
      'convert_blob_to_string' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Plugin\\ShippingLabelConverter',
      ),
    ),
    'Magento\\Sales\\Model\\Service\\InvoiceService' => 
    array (
      'addTransactionCommentAfterCapture' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Plugin\\Model\\Service\\Invoice\\AddTransactionCommentAfterCapture',
      ),
    ),
    'Magento\\Bundle\\Api\\ProductLinkManagementInterface' => 
    array (
      'reindex_after_add_child_by_sku' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Bundle\\Plugin\\Api\\ProductLinkManagement\\ReindexAfterAddChildBySkuPlugin',
      ),
      'reindex_after_remove_child' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Bundle\\Plugin\\Api\\ProductLinkManagement\\ReindexAfterRemoveChildPlugin',
      ),
    ),
    'Magento\\Store\\Model\\Validation\\StoreCodeValidator' => 
    array (
      'check_if_parsed_store_code_is_valid' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Webapi\\Model\\Plugin\\Store\\Model\\Validation\\StoreCodeValidator',
      ),
    ),
    'Magento\\Framework\\Filter\\Template' => 
    array (
      'convertBackgroundImages' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Filter\\TemplatePlugin',
      ),
    ),
    'Magento\\Checkout\\Model\\GuestShippingInformationManagement' => 
    array (
      'persistent_convert_customer_cart_to_guest_cart' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Persistent\\Model\\Checkout\\GuestShippingInformationManagementPlugin',
      ),
    ),
    'Magento\\ReCaptchaValidationApi\\Api\\ValidatorInterface' => 
    array (
      'webapi_recaptcha_validation_override' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ReCaptchaWebapiRest\\Plugin\\ValidationOverrider',
      ),
    ),
  ),
  1 => 
  array (
    'Magento\\Framework\\Reflection\\ExtensionAttributesProcessorPermissionChecked' => NULL,
    'Magento\\Framework\\Reflection\\DataObjectProcessorPermissionChecked' => NULL,
    'Magento\\Framework\\DB\\Adapter\\AdapterInterface' => 
    array (
      'execute_commit_callbacks' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\Model\\ExecuteCommitCallbacks',
      ),
    ),
    'Magento\\Framework\\App\\Http\\Context' => 
    array (
      'weltpixel-googletagmanager-context' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\HttpContext',
      ),
    ),
    'Laminas\\Stdlib\\MessageInterface' => NULL,
    'Laminas\\Stdlib\\Message' => NULL,
    'Stringable' => NULL,
    'Laminas\\Http\\AbstractMessage' => NULL,
    'Laminas\\Stdlib\\ResponseInterface' => NULL,
    'Laminas\\Http\\Response' => NULL,
    'Laminas\\Http\\PhpEnvironment\\Response' => NULL,
    'Magento\\Framework\\App\\Response\\HttpInterface' => NULL,
    'Magento\\Framework\\App\\ResponseInterface' => NULL,
    'Magento\\Framework\\HTTP\\PhpEnvironment\\Response' => NULL,
    'Magento\\Framework\\App\\Response\\Http' => 
    array (
      'genericHeaderPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Response\\HeaderManager',
      ),
    ),
    'Magento\\Framework\\App\\ActionInterface' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Framework\\Url\\SecurityInfoInterface' => NULL,
    'Magento\\Framework\\Url\\SecurityInfo' => 
    array (
      'storeUrlSecurityInfo' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\Url\\Plugin\\SecurityInfo',
      ),
    ),
    'ArrayAccess' => NULL,
    'Magento\\Framework\\DataObject' => NULL,
    'Magento\\Framework\\Url\\RouteParamsResolverInterface' => NULL,
    'Magento\\Framework\\Url\\RouteParamsResolver' => 
    array (
      'storeUrlRouteParamsResolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\Url\\Plugin\\RouteParamsResolver',
      ),
    ),
    'Magento\\Framework\\Model\\AbstractModel' => NULL,
    'Magento\\Framework\\Api\\CustomAttributesDataInterface' => NULL,
    'Magento\\Framework\\Api\\ExtensibleDataInterface' => NULL,
    'Magento\\Framework\\Model\\AbstractExtensibleModel' => NULL,
    'Magento\\Framework\\App\\ScopeInterface' => NULL,
    'Magento\\Framework\\Url\\ScopeInterface' => 
    array (
      'urlSignature' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Url\\Plugin\\Signature',
      ),
    ),
    'Magento\\Framework\\DataObject\\IdentityInterface' => NULL,
    'Magento\\Store\\Api\\Data\\StoreInterface' => NULL,
    'Magento\\Store\\Model\\Store' => 
    array (
      'urlSignature' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Url\\Plugin\\Signature',
      ),
      'themeDesignConfigGridIndexerStore' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Indexer\\Design\\Config\\Plugin\\Store',
      ),
    ),
    'Magento\\Framework\\Session\\SidResolverInterface' => NULL,
    'Magento\\Framework\\Session\\SidResolver' => 
    array (
      'pagebuilder_preview_sid_resolving' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Framework\\Session\\SidResolver',
      ),
    ),
    'Magento\\Framework\\Config\\ConverterInterface' => NULL,
    'Magento\\Framework\\App\\Config\\Initial\\Converter' => 
    array (
      'cron_system_config_initial_converter_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Cron\\Model\\System\\Config\\Initial\\Converter',
      ),
    ),
    'Magento\\Framework\\App\\FrontControllerInterface' => 
    array (
      'append_no_store_cache_header' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Plugin\\AppendNoStoreCacheHeader',
      ),
      'configHash' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Deploy\\Model\\Plugin\\ConfigChangeDetector',
      ),
    ),
    'Magento\\Framework\\App\\FrontController' => 
    array (
      'append_no_store_cache_header' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Plugin\\AppendNoStoreCacheHeader',
      ),
      'storeCookieValidate' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\Model\\Plugin\\StoreCookie',
      ),
      'install' => 
      array (
        'sortOrder' => 40,
        'instance' => 'Magento\\Framework\\Module\\Plugin\\DbStatusValidator',
      ),
      'configHash' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Deploy\\Model\\Plugin\\ConfigChangeDetector',
      ),
    ),
    'Magento\\Cms\\Model\\Wysiwyg\\Images\\Storage' => 
    array (
      'media_gallery_image_remove_metadata_after_wysiwyg' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'Magento\\MediaGallery\\Plugin\\Wysiwyg\\Images\\Storage',
      ),
    ),
    'Magento\\ImportExport\\Model\\Import\\Entity\\AbstractEntity' => NULL,
    'Magento\\AdvancedPricingImportExport\\Model\\Import\\AdvancedPricing' => 
    array (
      'invalidateAdvancedPriceIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdvancedPricingImportExport\\Model\\Indexer\\Product\\Price\\Plugin\\Import',
      ),
    ),
    'Magento\\Theme\\Api\\DesignConfigRepositoryInterface' => NULL,
    'Magento\\Theme\\Model\\DesignConfigRepository' => 
    array (
      'save_design_settings_event_dispatching' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Design\\Config\\Plugin',
      ),
    ),
    'Magento\\Store\\Api\\Data\\WebsiteInterface' => NULL,
    'Magento\\Store\\Model\\Website' => 
    array (
      'themeDesignConfigGridIndexerWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Indexer\\Design\\Config\\Plugin\\Website',
      ),
    ),
    'Magento\\Store\\Api\\Data\\GroupInterface' => NULL,
    'Magento\\Store\\Model\\Group' => 
    array (
      'themeDesignConfigGridIndexerStoreGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Indexer\\Design\\Config\\Plugin\\StoreGroup',
      ),
    ),
    'Magento\\Config\\App\\Config\\Source\\DumpConfigSourceInterface' => NULL,
    'Magento\\Framework\\App\\Config\\ConfigSourceInterface' => NULL,
    'Magento\\Config\\App\\Config\\Source\\DumpConfigSourceAggregated' => 
    array (
      'designConfigTheme' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Theme\\Model\\Design\\Config\\Plugin\\Dump',
      ),
    ),
    'IteratorAggregate' => NULL,
    'Countable' => NULL,
    'Magento\\Framework\\Option\\ArrayInterface' => NULL,
    'Magento\\Framework\\Data\\CollectionDataSourceInterface' => NULL,
    'Traversable' => NULL,
    'Magento\\Framework\\Data\\OptionSourceInterface' => NULL,
    'Magento\\Framework\\View\\Element\\Block\\ArgumentInterface' => NULL,
    'Magento\\Framework\\Data\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
        'disabled' => true,
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Consumer\\Config\\ReaderInterface' => NULL,
    'Magento\\Framework\\Config\\ReaderInterface' => NULL,
    'Magento\\Framework\\MessageQueue\\Consumer\\Config\\CompositeReader' => 
    array (
      'queueConfigPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\MessageQueue\\Config\\Consumer\\ConfigReaderPlugin',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Publisher\\Config\\ReaderInterface' => NULL,
    'Magento\\Framework\\MessageQueue\\Publisher\\Config\\CompositeReader' => 
    array (
      'queueConfigPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\MessageQueue\\Config\\Publisher\\ConfigReaderPlugin',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Topology\\Config\\ReaderInterface' => NULL,
    'Magento\\Framework\\MessageQueue\\Topology\\Config\\CompositeReader' => 
    array (
      'queueConfigPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\MessageQueue\\Config\\Topology\\ConfigReaderPlugin',
      ),
    ),
    'Magento\\Framework\\App\\Config\\ValueInterface' => NULL,
    'Magento\\Framework\\App\\Config\\Value' => 
    array (
      'admin_system_config_media_gallery_renditions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\UpdateRenditionsOnConfigChange',
      ),
      'admin_system_config_adobe_stock_save_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGallerySynchronization\\Plugin\\MediaGallerySyncTrigger',
      ),
      'webapiResourceSecurityCacheInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiSecurity\\Model\\Plugin\\CacheInvalidator',
      ),
    ),
    'Magento\\Framework\\Session\\SessionManagerInterface' => NULL,
    'Magento\\Framework\\Session\\SessionManager' => NULL,
    'Magento\\Backend\\Model\\Auth\\StorageInterface' => NULL,
    'Magento\\Backend\\Model\\Auth\\Session' => 
    array (
      'admin_adobe_ims_backend_auth_session' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\BackendAuthSessionPlugin',
      ),
    ),
    'Magento\\Authorization\\Model\\Role' => 
    array (
      'updateRoleUsersAcl' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\User\\Model\\Plugin\\AuthorizationRole',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\AbstractResource' => NULL,
    'Magento\\Framework\\Model\\ResourceModel\\Db\\AbstractDb' => NULL,
    'Magento\\Eav\\Model\\ResourceModel\\Entity\\Attribute' => 
    array (
      'storeLabelCaching' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Eav\\Plugin\\Model\\ResourceModel\\Entity\\Attribute',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\EntityInterface' => NULL,
    'Magento\\Eav\\Model\\ResourceModel\\Attribute\\DefaultEntityAttributes\\ProviderInterface' => NULL,
    'Magento\\Eav\\Model\\Entity\\AbstractEntity' => 
    array (
      'clean_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Cache\\FlushCacheByTags',
      ),
    ),
    'Magento\\Customer\\Model\\Session' => 
    array (
      'wesupply-toolbox-customer-login' => 
      array (
        'sortOrder' => 6,
        'instance' => 'WeSupply\\Toolbox\\Plugin\\Customer\\Session',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\VersionControl\\AbstractEntity' => 
    array (
      'clean_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Cache\\FlushCacheByTags',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Customer' => 
    array (
      'clean_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Cache\\FlushCacheByTags',
      ),
      'recollect_quote_on_customer_group_change' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Checkout\\Model\\Plugin\\RecollectQuoteOnCustomerGroupChange',
      ),
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface' => 
    array (
      'transactionWrapper' => 
      array (
        'sortOrder' => -1,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerRepository\\TransactionWrapper',
      ),
      'login_as_customer_customer_repository_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerAssistance\\Plugin\\CustomerPlugin',
      ),
      'update_newsletter_subscription_on_customer_update' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Newsletter\\Model\\Plugin\\CustomerPlugin',
      ),
    ),
    'Magento\\Framework\\Event\\ObserverInterface' => NULL,
    'Magento\\PageCache\\Observer\\FlushFormKey' => 
    array (
      'customerFlushFormKey' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerFlushFormKey',
      ),
    ),
    'Magento\\Customer\\Api\\AccountManagementInterface' => NULL,
    'Magento\\Customer\\Model\\AccountManagement' => 
    array (
      'security_check_customer_password_reset_attempt' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Security\\Model\\Plugin\\AccountManagement',
      ),
      'mz_osc_newaccount' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Osc\\Model\\Plugin\\Customer\\AccountManagement',
      ),
      'mpsmtp_account_management' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Smtp\\Plugin\\AccountManagement',
      ),
      'abandoned-checkout-save-quote' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Ebizmarts\\MailChimp\\Model\\Plugin\\AccountManagement',
      ),
      'mpace_save_customer_email' => 
      array (
        'sortOrder' => 88,
        'instance' => 'Mageplaza\\AbandonedCart\\Plugin\\SaveCustomerEmail',
      ),
    ),
    'Magento\\Customer\\Api\\GroupRepositoryInterface' => 
    array (
      'saveCustomerGroupExcludedWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\SaveCustomerGroupExcludedWebsite',
      ),
      'deleteCustomerGroupExcludedWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\DeleteCustomerGroupExcludedWebsite',
      ),
      'getByIdCustomerGroupExcludedWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\GetByIdCustomerGroupExcludedWebsite',
      ),
      'getListCustomerGroupExcludedWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\GetListCustomerGroupExcludedWebsite',
      ),
      'invalidatePriceIndexerOnCustomerGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Price\\Plugin\\CustomerGroup',
      ),
    ),
    'Magento\\Framework\\Config\\DataInterface' => NULL,
    'Magento\\Framework\\Config\\Data' => NULL,
    'Magento\\Indexer\\Model\\Config\\Data' => 
    array (
      'indexerCategoryFlatConfigGet' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Flat\\Plugin\\IndexerConfigData',
      ),
      'indexerProductFlatConfigGet' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Flat\\Plugin\\IndexerConfigData',
      ),
    ),
    'Magento\\Indexer\\Model\\Processor' => 
    array (
      'page-cache-indexer-reindex-clean-cache' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Indexer\\Model\\Processor\\CleanCache',
      ),
    ),
    'Magento\\Framework\\Indexer\\ActionInterface' => 
    array (
      'cache_cleaner_after_reindex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Indexer\\Model\\Indexer\\CacheCleaner',
      ),
    ),
    'Magento\\Framework\\Indexer\\CacheContext' => 
    array (
      'defer_cache_cleaning' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Indexer\\Model\\Indexer\\DeferCacheCleaning',
      ),
    ),
    'Magento\\CatalogImportExport\\Model\\StockItemImporterInterface' => 
    array (
      'update_grouped_product_stock_status_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedImportExport\\Plugin\\CatalogImportExport\\Model\\StockItemImporter\\UpdateGroupedProductStockStatusPlugin',
      ),
      'update_configurable_products_stock_item_status' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\ConfigurableImportExport\\Plugin\\Import\\Product\\UpdateConfigurableProductsStockItemStatusPlugin',
      ),
      'update_bundle_products_stock_item_status' => 
      array (
        'sortOrder' => 200,
        'instance' => 'Magento\\BundleImportExport\\Plugin\\Import\\Product\\UpdateBundleProductsStockItemStatusPlugin',
      ),
    ),
    'Magento\\Variable\\Model\\Source\\Variables' => 
    array (
      'wesupply-subdomain-variable' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeSupply\\Toolbox\\Plugin\\Model\\Source\\VariablePlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\AbstractModel' => NULL,
    'Magento\\Framework\\Pricing\\SaleableInterface' => NULL,
    'Magento\\Catalog\\Api\\Data\\ProductInterface' => NULL,
    'Magento\\Catalog\\Model\\Product' => 
    array (
      'catalogInventoryAfterLoad' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Plugin\\AfterProductLoad',
      ),
      'product_identities_extender' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\ProductIdentitiesExtender',
      ),
      'exclude_swatch_attribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\Product',
      ),
      'cms' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Cms\\Model\\Plugin\\Product',
      ),
      'add_bundle_parent_identities' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Bundle\\Model\\Plugin\\ProductIdentitiesExtender',
      ),
    ),
    'Magento\\Cms\\Api\\PageRepositoryInterface' => 
    array (
      'aclCheck' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Cms\\Observer\\PageAclPlugin',
      ),
    ),
    'Magento\\Cms\\Model\\PageRepository\\ValidationComposite' => 
    array (
      'cms_validate_url_plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CmsUrlRewrite\\Plugin\\Cms\\Model\\PageRepository\\ValidationCompositePlugin',
      ),
      'aclCheck' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Cms\\Observer\\PageAclPlugin',
      ),
    ),
    'Magento\\ImportExport\\Model\\AbstractModel' => NULL,
    'Magento\\ImportExport\\Model\\Import' => 
    array (
      'catalogProductFlatIndexerImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Product\\Flat\\Plugin\\Import',
      ),
      'invalidatePriceIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Product\\Price\\Plugin\\Import',
      ),
      'invalidateStockIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Stock\\Plugin\\Import',
      ),
      'invalidateEavIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Product\\Eav\\Plugin\\Import',
      ),
      'invalidateProductCategoryIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Product\\Category\\Plugin\\Import',
      ),
      'invalidateCategoryProductIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Category\\Product\\Plugin\\Import',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Visitor' => 
    array (
      'catalogLog' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\Log',
      ),
      'reportLog' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reports\\Model\\Plugin\\Log',
      ),
    ),
    'Magento\\Framework\\View\\Element\\UiComponent\\DataProvider\\DataProviderInterface' => NULL,
    'Magento\\Ui\\DataProvider\\AbstractDataProvider' => NULL,
    'Magento\\Ui\\DataProvider\\ModifierPoolDataProvider' => NULL,
    'Magento\\Catalog\\Model\\Category\\DataProvider' => 
    array (
      'set_page_layout_default_value' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\SetPageLayoutDefaultValue',
      ),
      'weltpixel-designelements-category-dataprovider' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\DesignElements\\Plugin\\Category\\DataProvider',
      ),
      'weltpixel-categorypage-category-dataprovider' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\CategoryPage\\Plugin\\Category\\DataProvider',
      ),
      'weltpixel-titlerewrite-category-dataprovider' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\TitleRewrite\\Plugin\\Category\\DataProvider',
      ),
    ),
    'Magento\\Framework\\View\\Element\\BlockInterface' => NULL,
    'Magento\\Framework\\View\\Element\\AbstractBlock' => NULL,
    'Magento\\Framework\\View\\Element\\Template' => NULL,
    'Magento\\Theme\\Block\\Html\\Topmenu' => 
    array (
      'catalogTopmenu' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Block\\Topmenu',
      ),
    ),
    'Magento\\Framework\\Mview\\View\\StateInterface' => 
    array (
      'setStatusForMview' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\MviewState',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Website' => 
    array (
      'invalidatePriceIndexerOnWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Price\\Plugin\\Website',
      ),
      'categoryProductWebsiteAfterDelete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\Website',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Store' => 
    array (
      'storeViewResourceAroundSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Flat\\Plugin\\StoreView',
      ),
      'catalogProductFlatIndexerStore' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Flat\\Plugin\\Store',
      ),
      'categoryStoreAroundSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\StoreView',
      ),
      'productAttributesStoreViewSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Eav\\Plugin\\StoreView',
      ),
      'catalogsearchFulltextIndexerStoreView' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Store\\View',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Group' => 
    array (
      'storeGroupResourceAroundSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Flat\\Plugin\\StoreGroup',
      ),
      'catalogProductFlatIndexerStoreGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Flat\\Plugin\\StoreGroup',
      ),
      'categoryStoreGroupAroundSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\StoreGroup',
      ),
      'storeGroupResourceAroundBeforeSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Indexer\\Stock\\Plugin\\StoreGroup',
      ),
      'catalogsearchFulltextIndexerStoreGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Store\\Group',
      ),
    ),
    'Magento\\Eav\\Api\\Data\\AttributeSetInterface' => NULL,
    'Magento\\Eav\\Model\\Entity\\Attribute\\Set' => 
    array (
      'invalidateEavIndexerOnAttributeSetSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Eav\\Plugin\\AttributeSet',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\TypeTransitionManager' => 
    array (
      'downloadable_product_transition' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Downloadable\\Model\\Product\\TypeTransitionManager\\Plugin\\Downloadable',
      ),
      'configurable_product_transition' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Product\\TypeTransitionManager\\Plugin\\Configurable',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Config\\Backend\\AbstractValue' => 
    array (
      'admin_system_config_media_gallery_renditions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\UpdateRenditionsOnConfigChange',
      ),
      'admin_system_config_adobe_stock_save_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGallerySynchronization\\Plugin\\MediaGallerySyncTrigger',
      ),
      'webapiResourceSecurityCacheInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiSecurity\\Model\\Plugin\\CacheInvalidator',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Config\\Backend\\ShowOutOfStock' => 
    array (
      'admin_system_config_media_gallery_renditions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\UpdateRenditionsOnConfigChange',
      ),
      'admin_system_config_adobe_stock_save_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGallerySynchronization\\Plugin\\MediaGallerySyncTrigger',
      ),
      'webapiResourceSecurityCacheInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiSecurity\\Model\\Plugin\\CacheInvalidator',
      ),
      'showOutOfStockValueChanged' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\ShowOutOfStockConfig',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Config' => 
    array (
      'productListingAttributesCaching' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\ResourceModel\\Config',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\Attribute\\Backend\\BackendInterface' => NULL,
    'Magento\\Eav\\Model\\Entity\\Attribute\\Backend\\AbstractBackend' => 
    array (
      'attributeValidation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\Attribute\\Backend\\AttributeValidation',
      ),
      'ConfigurableProduct::skipValidation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Model\\Attribute\\Backend\\AttributeValidation',
      ),
    ),
    'Magento\\Framework\\Config\\Reader\\Filesystem' => NULL,
    'Magento\\Framework\\Config\\View' => 
    array (
      'weltpixel-googlecards-config-view' => 
      array (
        'sortOrder' => 10,
        'instance' => 'WeltPixel\\GoogleCards\\Plugin\\ConfigView',
      ),
      'weltpixel-categorypage-config-view' => 
      array (
        'sortOrder' => 10,
        'instance' => 'WeltPixel\\CategoryPage\\Plugin\\ConfigView',
      ),
      'weltpixel-productpage-framework-config-view' => 
      array (
        'sortOrder' => 10,
        'instance' => 'WeltPixel\\ProductPage\\Plugin\\FrameworkConfigView',
      ),
    ),
    'Magento\\Sales\\Api\\OrderItemRepositoryInterface' => 
    array (
      'get_gift_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\OrderItemGet',
      ),
    ),
    'Magento\\Framework\\EntityManager\\Operation\\AttributeInterface' => NULL,
    'Magento\\Eav\\Model\\ResourceModel\\ReadHandler' => NULL,
    'Magento\\Eav\\Model\\ResourceModel\\ReadSnapshot' => 
    array (
      'catalogReadSnapshot' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\ResourceModel\\ReadSnapshotPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Item\\ToOrderItem' => 
    array (
      'copy_quote_files_to_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\QuoteItemProductOption',
      ),
      'append_bundle_data_to_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Bundle\\Model\\Plugin\\QuoteItem',
      ),
      'gift_message_quote_item_conversion' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\QuoteItem',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\Helper' => 
    array (
      'weeeAttributeOptionsProcess' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\ProcessTaxAttribute',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductRepositoryInterface' => 
    array (
      'remove_images_from_gallery_after_removing_product' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\RemoveImagesFromGalleryAfterRemovingProduct',
      ),
      'product_authorization' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\ProductAuthorization',
      ),
      'configurableProductSaveOptions' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\ProductRepositorySave',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductAttributeRepositoryInterface' => NULL,
    'Magento\\Framework\\Api\\MetadataServiceInterface' => NULL,
    'Magento\\Catalog\\Model\\Product\\Attribute\\Repository' => 
    array (
      'filterCustomAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Plugin\\FilterCustomAttribute',
      ),
      'process_extension_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Catalog\\Model\\Product\\Attribute\\RepositoryPlugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\AbstractProduct' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
      'quantityValidators' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Block\\Plugin\\ProductView',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Action' => 
    array (
      'ReindexUpdatedProducts' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Plugin\\ReindexUpdatedProducts',
      ),
      'catalogsearchFulltextMassAction' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Product\\Action',
      ),
      'update_url_rewrites_after_websites_update_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Plugin\\Catalog\\Model\\Product\\UpdateProductWebsiteUrlRewrites',
      ),
      'quoteProductMassChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Product\\Plugin\\MarkQuotesRecollectMassDisabled',
      ),
    ),
    'Magento\\Framework\\App\\Action\\AbstractAction' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Framework\\App\\Action\\Action' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Backend\\App\\AbstractAction' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Backend\\App\\Action' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Framework\\App\\Action\\HttpPostActionInterface' => NULL,
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'massAction' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Plugin\\MassUpdateProductAttribute',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\AbstractResource' => 
    array (
      'clean_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Cache\\FlushCacheByTags',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product' => 
    array (
      'clean_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Cache\\FlushCacheByTags',
      ),
      'catalogsearchFulltextProduct' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Product',
      ),
      'clean_quote_items_after_product_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Product\\Plugin\\RemoveQuoteItems',
      ),
      'update_quote_items_after_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Product\\Plugin\\UpdateQuoteItems',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category' => 
    array (
      'clean_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Cache\\FlushCacheByTags',
      ),
      'catalogsearchFulltextCategory' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Category',
      ),
      'category_move_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Category\\Move',
      ),
      'category_delete_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Category\\Remove',
      ),
      'update_url_path_for_different_stores' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Category\\UpdateUrlPath',
      ),
      'fulltext_search_indexer' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Model\\Plugin\\Category',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\AbstractAction' => NULL,
    'Magento\\Catalog\\Model\\Indexer\\Product\\Category\\Action\\Rows' => 
    array (
      'catalogsearchFulltextCategoryAssignment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Product\\Category\\Action\\Rows',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute' => 
    array (
      'storeLabelCaching' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Eav\\Plugin\\Model\\ResourceModel\\Entity\\Attribute',
      ),
      'catalogsearchFulltextIndexerAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Attribute',
      ),
      'catalogsearchAttributeSearchWeightCache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Attribute\\SearchWeight',
      ),
      'updateElasticsearchIndexerMapping' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Elasticsearch\\Model\\Indexer\\Fulltext\\Plugin\\Category\\Product\\Attribute',
      ),
    ),
    'Magento\\Framework\\Search\\Request\\Config\\FilesystemReader' => 
    array (
      'catalogSearchDynamicFields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Search\\ReaderPlugin',
      ),
      'productAttributesDynamicFields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogGraphQl\\Plugin\\Search\\Request\\ConfigReader',
      ),
    ),
    'Magento\\Catalog\\Model\\Layer\\CollectionFilterInterface' => NULL,
    'Magento\\Catalog\\Model\\Layer\\Search\\CollectionFilter' => 
    array (
      'searchQuery' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Layer\\Search\\Plugin\\CollectionFilter',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Action\\DataProvider' => 
    array (
      'stockedProductsFilterPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Plugin\\StockedProductsFilterPlugin',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\StorageInterface' => 
    array (
      'storage_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Storage',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\UrlPersistInterface' => NULL,
    'Magento\\UrlRewrite\\Model\\UrlFinderInterface' => NULL,
    'Magento\\UrlRewrite\\Model\\Storage\\AbstractStorage' => 
    array (
      'storage_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Storage',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\Storage\\DbStorage' => 
    array (
      'storage_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Storage',
      ),
    ),
    'Magento\\CatalogUrlRewrite\\Model\\Storage\\DbStorage' => 
    array (
      'storage_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Storage',
      ),
      'dynamic_storage_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Plugin\\DynamicCategoryRewrites',
      ),
    ),
    'Magento\\Framework\\View\\Asset\\MergeService' => 
    array (
      'cleanMergedJsCss' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaStorage\\Model\\Asset\\Plugin\\CleanMergedJsCss',
      ),
    ),
    'Magento\\Quote\\Api\\CartRepositoryInterface' => NULL,
    'Magento\\Quote\\Model\\QuoteRepository' => 
    array (
      'multishipping_quote_repository' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Multishipping\\Plugin\\MultishippingQuoteRepository',
      ),
      'accessControl' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\QuoteRepository\\Plugin\\AccessChangeQuoteControl',
      ),
      'authorization' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\QuoteRepository\\Plugin\\Authorization',
      ),
    ),
    'Magento\\Customer\\Model\\Address\\AddressModelInterface' => NULL,
    'Magento\\Customer\\Model\\Address\\AbstractAddress' => NULL,
    'Magento\\Quote\\Api\\Data\\AddressInterface' => NULL,
    'Magento\\Quote\\Model\\Quote\\Address' => 
    array (
      'mposc_convert_quote_address_to_customer_address' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Osc\\Model\\Plugin\\Customer\\Address\\ConvertQuoteAddressToCustomerAddress',
      ),
    ),
    'Magento\\Catalog\\Api\\TierPriceStorageInterface' => 
    array (
      'update_quote_items_after_tier_prices_update' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Product\\Plugin\\UpdateQuote',
      ),
    ),
    'Magento\\MediaGallerySynchronizationApi\\Model\\ImportFilesInterface' => NULL,
    'Magento\\MediaGallerySynchronizationApi\\Model\\ImportFilesComposite' => 
    array (
      'createMediaGalleryThumbnails' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryUi\\Plugin\\CreateThumbnails',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page' => 
    array (
      'cms_url_rewrite_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsUrlRewrite\\Plugin\\Cms\\Model\\ResourceModel\\Page',
      ),
    ),
    'Magento\\Integration\\Api\\IntegrationServiceInterface' => 
    array (
      'webapiIntegrationService' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Integration\\Model\\Plugin\\Integration',
      ),
    ),
    'Magento\\Backend\\Model\\Auth\\Credential\\StorageInterface' => NULL,
    'Magento\\User\\Api\\Data\\UserInterface' => NULL,
    'Magento\\User\\Model\\User' => 
    array (
      'revokeTokensFromInactiveAdmins' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Integration\\Plugin\\Model\\AdminUser',
      ),
    ),
    'Magento\\Customer\\Model\\Customer' => 
    array (
      'revokeTokensFromInactiveCustomers' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Integration\\Plugin\\Model\\CustomerUser',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\View' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Creditmemo' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\OrderInterface' => NULL,
    'Magento\\Framework\\App\\Action\\HttpGetActionInterface' => NULL,
    'Magento\\Framework\\App\\Action\\HttpHeadActionInterface' => NULL,
    'Magento\\Sales\\Controller\\Order\\Creditmemo' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\History' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Invoice' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Invoice' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintAction' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintAction' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintCreditmemo' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintCreditmemo' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintInvoice' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintInvoice' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintShipment' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintShipment' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Reorder' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Reorder' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Shipment' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Shipment' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\View' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Api\\ShipmentRepositoryInterface' => 
    array (
      'convert_blob_to_string' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Plugin\\ShippingLabelConverter',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\ShipmentRepository' => 
    array (
      'convert_blob_to_string' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Plugin\\ShippingLabelConverter',
      ),
      'wesupply-toolbox-shipmentrepository' => 
      array (
        'sortOrder' => 5,
        'instance' => 'WeSupply\\Toolbox\\Plugin\\ShipmentRepositoryInterface',
      ),
    ),
    'Magento\\Sales\\Api\\CreditmemoRepositoryInterface' => NULL,
    'Magento\\Sales\\Model\\Order\\CreditmemoRepository' => 
    array (
      'mailchimp_save_creditmemo' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Ebizmarts\\MailChimp\\Model\\Plugin\\Creditmemo',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Handler\\Address' => 
    array (
      'addressUpdate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Model\\Order\\Invoice\\Plugin\\AddressUpdate',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Structure\\Converter' => 
    array (
      'cron_backend_config_structure_converter_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Cron\\Model\\Backend\\Config\\Structure\\Converter',
      ),
    ),
    'Magento\\Framework\\View\\Layout\\ProcessorInterface' => NULL,
    'Magento\\Framework\\View\\Model\\Layout\\Merge' => 
    array (
      'widget-layout-update-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Widget\\Model\\ResourceModel\\Layout\\Plugin',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Backend\\Baseurl' => 
    array (
      'admin_system_config_media_gallery_renditions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\UpdateRenditionsOnConfigChange',
      ),
      'admin_system_config_adobe_stock_save_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGallerySynchronization\\Plugin\\MediaGallerySyncTrigger',
      ),
      'webapiResourceSecurityCacheInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiSecurity\\Model\\Plugin\\CacheInvalidator',
      ),
      'updateAnalyticsSubscription' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Analytics\\Model\\Plugin\\BaseUrlConfigPlugin',
      ),
    ),
    'Magento\\Integration\\Model\\Validator\\BearerTokenValidator' => 
    array (
      'allow_bearer_token' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Analytics\\Plugin\\BearerTokenValidatorPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\CartConfiguration' => 
    array (
      'Downloadable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Downloadable\\Model\\Product\\CartConfiguration\\Plugin\\Downloadable',
      ),
      'isProductConfigured' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\Product\\Cart\\Configuration\\Plugin\\Grouped',
      ),
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Product\\CartConfiguration\\Plugin\\Configurable',
      ),
    ),
    'Magento\\Framework\\View\\Asset\\Source' => 
    array (
      'weltpixel-frontendoptions-view-asset-source' => 
      array (
        'sortOrder' => 10,
        'instance' => 'WeltPixel\\FrontendOptions\\Plugin\\ViewAssetSource',
      ),
    ),
    'Magento\\Checkout\\Block\\Checkout\\LayoutProcessorInterface' => NULL,
    'Magento\\Checkout\\Block\\Cart\\LayoutProcessor' => 
    array (
      'checkout_cart_shipping_dhl' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Dhl\\Model\\Plugin\\Checkout\\Block\\Cart\\Shipping',
      ),
      'checkout_cart_shipping_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\OfflineShipping\\Model\\Plugin\\Checkout\\Block\\Cart\\Shipping',
      ),
      'remove_estimations_shipping_address_cart' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'WeSupply\\Toolbox\\Plugin\\Magento\\Checkout\\Block\\Cart\\LayoutProcessor',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Price' => 
    array (
      'attributeValidation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\Attribute\\Backend\\AttributeValidation',
      ),
      'ConfigurableProduct::skipValidation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Model\\Attribute\\Backend\\AttributeValidation',
      ),
      'bundle' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Bundle\\Model\\Plugin\\PriceBackend',
      ),
      'configurable' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\PriceBackend',
      ),
    ),
    'Magento\\Sales\\Model\\AbstractModel' => NULL,
    'Magento\\Sales\\Api\\Data\\OrderItemInterface' => NULL,
    'Magento\\Sales\\Model\\Order\\Item' => 
    array (
      'bundle' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Bundle\\Model\\Sales\\Order\\Plugin\\Item',
      ),
    ),
    'Magento\\Quote\\Api\\CartManagementInterface' => 
    array (
      'order_cancellation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'PayPal\\Braintree\\Plugin\\OrderCancellation',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteManagement' => 
    array (
      'order_cancellation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'PayPal\\Braintree\\Plugin\\OrderCancellation',
      ),
      'validate_purchase_order_number' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\OfflinePayments\\Plugin\\ValidatePurchaseOrderNumber',
      ),
      'update_bundle_quote_item_options' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Bundle\\Plugin\\Quote\\UpdateBundleQuoteItemOptions',
      ),
      'coupon_uses_increment_plugin' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\SalesRule\\Plugin\\CouponUsagesIncrement',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Action\\Rows' => 
    array (
      'catalogsearchFulltextProductAssignment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Elasticsearch\\Model\\Indexer\\Fulltext\\Plugin\\Category\\Product\\Action\\Rows',
      ),
    ),
    'Magento\\Framework\\Indexer\\Config\\DependencyInfoProviderInterface' => NULL,
    'Magento\\Framework\\Indexer\\Config\\DependencyInfoProvider' => 
    array (
      'indexerDependencyUpdaterPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Elasticsearch\\Model\\Indexer\\Plugin\\DependencyUpdaterPlugin',
      ),
    ),
    'Magento\\Search\\Model\\ResourceModel\\SynonymGroup' => 
    array (
      'synonymReaderPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Elasticsearch\\Model\\Indexer\\Fulltext\\Plugin\\Search\\Model\\SynonymReaderPlugin',
      ),
    ),
    'Magento\\Framework\\App\\TemplateTypesInterface' => NULL,
    'Magento\\Email\\Model\\AbstractTemplate' => 
    array (
      'EmailTemplateLinkUrl' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Email\\Model\\Plugin\\GetUrl',
      ),
    ),
    'Magento\\Framework\\Mail\\TemplateInterface' => NULL,
    'Magento\\Email\\Model\\Template' => 
    array (
      'EmailTemplateLinkUrl' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Email\\Model\\Plugin\\GetUrl',
      ),
      'mail_subject' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Icecube\\Mailsubject\\Plugin\\Template',
      ),
    ),
    'Magento\\Framework\\Mail\\TransportInterface' => 
    array (
      'WindowsSmtpConfig' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Email\\Model\\Plugin\\WindowsSmtpConfig',
      ),
      'EmailDisable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Email\\Model\\Mail\\TransportInterfacePlugin',
      ),
      'mageplaza_mail_transport' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Mageplaza\\Smtp\\Mail\\Transport',
      ),
    ),
    'Magento\\Shipping\\Block\\DataProviders\\Tracking\\DeliveryDateTitle' => 
    array (
      'update_delivery_date_title' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Fedex\\Plugin\\Block\\DataProviders\\Tracking\\ChangeTitle',
      ),
      'ups_update_delivery_date_title' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Ups\\Plugin\\Block\\DataProviders\\Tracking\\ChangeTitle',
      ),
    ),
    'Magento\\Shipping\\Block\\Tracking\\Popup' => 
    array (
      'update_delivery_date_value' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Fedex\\Plugin\\Block\\Tracking\\PopupDeliveryDate',
      ),
    ),
    'Magento\\Sales\\Api\\OrderRepositoryInterface' => 
    array (
      'save_gift_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\OrderSave',
      ),
      'get_gift_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\OrderGet',
      ),
      'save_order_tax' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\Plugin\\OrderSave',
      ),
      'mp_delivery_information' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\DeliveryTime\\Plugin\\Sales\\Model\\OrderGet',
      ),
      'mposc_add_order_comment_to_order_api' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Osc\\Model\\Plugin\\Api\\OrderComment',
      ),
      'wesupply-toolbox-orderrespository' => 
      array (
        'sortOrder' => 5,
        'instance' => 'WeSupply\\Toolbox\\Plugin\\OrderRepositoryInterface',
      ),
    ),
    'Magento\\Framework\\App\\PageCache\\Identifier' => 
    array (
      'core-app-area-design-exception-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\PageCache\\Model\\App\\CacheIdentifierPlugin',
      ),
    ),
    'Magento\\Framework\\App\\CacheInterface' => NULL,
    'Magento\\Framework\\App\\Cache' => NULL,
    'Magento\\Framework\\App\\PageCache\\Cache' => 
    array (
      'fpc-type-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\App\\PageCachePlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Type' => 
    array (
      'grouped_output' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\Product\\Type\\Plugin',
      ),
      'configurable_output' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Product\\Type\\Plugin',
      ),
    ),
    'Magento\\Framework\\App\\Helper\\AbstractHelper' => NULL,
    'Magento\\Catalog\\Helper\\Product\\Configuration\\ConfigurationInterface' => NULL,
    'Magento\\Catalog\\Helper\\Product\\Configuration' => 
    array (
      'grouped_options' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Helper\\Product\\Configuration\\Plugin\\Grouped',
      ),
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Helper\\Product\\Configuration\\Plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Initialization\\Helper\\ProductLinks' => 
    array (
      'GroupedProduct' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\Product\\Initialization\\Helper\\ProductLinks\\Plugin\\Grouped',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Link' => 
    array (
      'groupedProductLinkProcessor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\ResourceModel\\Product\\Link\\RelationPersister',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Type\\AbstractType' => NULL,
    'Magento\\GroupedProduct\\Model\\Product\\Type\\Grouped' => 
    array (
      'outOfStockFilter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedCatalogInventory\\Plugin\\OutOfStockFilter',
      ),
      'grouped_product_minimum_advertised_price' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MsrpGroupedProduct\\Plugin\\Model\\Product\\Type\\Grouped',
      ),
    ),
    'Magento\\Customer\\Controller\\Ajax\\Login' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'captcha_validation' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Captcha\\Model\\Customer\\Plugin\\AjaxLogin',
      ),
    ),
    'Magento\\Checkout\\Block\\Cart\\AbstractCart' => NULL,
    'Magento\\Checkout\\Block\\Cart\\Sidebar' => 
    array (
      'addAgreementsToMinicartConfig' => 
      array (
        'sortOrder' => 0,
        'instance' => 'PayPal\\Braintree\\Plugin\\AddAgreementsToMinicartConfig',
      ),
      'login_captcha' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Captcha\\Model\\Cart\\ConfigPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Quote\\Item\\QuantityValidator\\Initializer\\Option' => 
    array (
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Quote\\Item\\QuantityValidator\\Initializer\\Option\\Plugin\\ConfigurableProduct',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Admin\\Item' => 
    array (
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Order\\Admin\\Item\\Plugin\\Configurable',
      ),
    ),
    'Magento\\Catalog\\Model\\Entity\\Product\\Attribute\\Group\\AttributeMapperInterface' => 
    array (
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Entity\\Product\\Attribute\\Group\\AttributeMapper\\Plugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View\\AbstractView' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View\\Gallery' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
    ),
    'Magento\\ProductVideo\\Block\\Product\\View\\Gallery' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
      'product_video_gallery' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Block\\Plugin\\Product\\Media\\Gallery',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\Product\\Type\\Configurable' => 
    array (
      'add_swatch_attributes_to_configurable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\Configurable',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Pricing\\Renderer\\SalableResolverInterface' => NULL,
    'Magento\\Catalog\\Model\\Product\\Pricing\\Renderer\\SalableResolver' => 
    array (
      'configurable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Catalog\\Model\\Product\\Pricing\\Renderer\\SalableResolver',
      ),
    ),
    'Magento\\Rule\\Model\\Condition\\ConditionInterface' => NULL,
    'Magento\\Rule\\Model\\Condition\\AbstractCondition' => NULL,
    'Magento\\Rule\\Model\\Condition\\Product\\AbstractProduct' => NULL,
    'Magento\\SalesRule\\Model\\Rule\\Condition\\Product' => 
    array (
      'apply_rule_on_configurable_children' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\SalesRule\\Model\\Rule\\Condition\\Product',
      ),
      'Amasty_Conditions::AdditionalConditions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Conditions\\Plugin\\SalesRule\\Condition\\ProductPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address\\Total\\CollectorInterface' => NULL,
    'Magento\\Quote\\Model\\Quote\\Address\\Total\\ReaderInterface' => NULL,
    'Magento\\Quote\\Model\\Quote\\Address\\Total\\AbstractTotal' => NULL,
    'Magento\\Tax\\Model\\Sales\\Total\\Quote\\CommonTaxCollector' => 
    array (
      'apply_tax_class_id' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Tax\\Model\\Sales\\Total\\Quote\\CommonTaxCollector',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\Stock\\Item' => 
    array (
      'updateStockChangedAuto' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\UpdateStockChangedAuto',
      ),
    ),
    'Magento\\Quote\\Api\\CartTotalRepositoryInterface' => NULL,
    'Magento\\Quote\\Model\\Cart\\CartTotalRepository' => 
    array (
      'multishipping_shipping_addresses' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Multishipping\\Model\\Cart\\CartTotalRepositoryPlugin',
      ),
      'coupon_label_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRule\\Plugin\\CartTotalRepository',
      ),
      'Amasty_Conditions::cart_total_repository_get' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amasty\\Conditions\\Plugin\\Cart\\CartTotalRepository',
      ),
    ),
    'Magento\\Integration\\Model\\ConfigBasedIntegrationManager' => 
    array (
      'webapiSetup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Webapi\\Model\\Plugin\\Manager',
      ),
    ),
    'Magento\\Backend\\Model\\Auth' => 
    array (
      'login_as_customer_admin_logout' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomer\\Plugin\\AdminLogoutPlugin',
      ),
      'disable_admin_login_auth' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\DisableAdminLoginAuthPlugin',
      ),
    ),
    'Magento\\Framework\\Api\\DataObjectHelper' => 
    array (
      'add_allow_remote_shopping_assistance_to_customer' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerGraphQl\\Plugin\\DataObjectHelperPlugin',
      ),
      'Amasty_Conditions::dataHelper' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amasty\\Conditions\\Plugin\\Framework\\Api\\DataObjectHelperPlugin',
      ),
    ),
    'Magento\\LoginAsCustomerApi\\Api\\AuthenticateCustomerBySecretInterface' => 
    array (
      'process_shopping_cart' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerQuote\\Plugin\\LoginAsCustomerApi\\ProcessShoppingCartPlugin',
      ),
    ),
    'Magento\\MediaGalleryApi\\Api\\DeleteAssetsByPathsInterface' => 
    array (
      'remove_media_content_after_asset_is_removed_by_path' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaContent\\Plugin\\MediaGalleryAssetDeleteByPath',
      ),
      'delete_renditions_on_assets_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\RemoveRenditions',
      ),
    ),
    'Magento\\MediaGalleryApi\\Api\\DeleteDirectoriesByPathsInterface' => 
    array (
      'remove_media_content_after_asset_is_removed_by_directory_path' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaContent\\Plugin\\MediaGalleryAssetDeleteByDirectoryPath',
      ),
    ),
    'Magento\\MediaGallerySynchronization\\Model\\Consume' => 
    array (
      'synchronize_media_content' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaContentSynchronization\\Plugin\\SynchronizeMediaContent',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Gallery\\Processor' => 
    array (
      'media_gallery_image_remove_metadata' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryCatalog\\Plugin\\Product\\Gallery\\RemoveAssetAfterRemoveImage',
      ),
    ),
    'Magento\\Cms\\Model\\Wysiwyg\\Images\\GetInsertImageContent' => 
    array (
      'set_rendition_path' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\SetRenditionPath',
      ),
    ),
    'Magento\\MediaGallerySynchronizationApi\\Model\\CreateAssetFromFileInterface' => 
    array (
      'addMetadataToAssetCreatedFromFile' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGallerySynchronizationMetadata\\Plugin\\CreateAssetFromFileMetadata',
      ),
    ),
    'Magento\\Framework\\App\\MaintenanceMode' => 
    array (
      'amqp_maintenance_mode' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MessageQueue\\Model\\Plugin\\ResourceModel\\Lock',
      ),
    ),
    'Magento\\Framework\\AppInterface' => NULL,
    'Magento\\Framework\\App\\Http' => 
    array (
      'framework-http-newrelic' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NewRelicReporting\\Plugin\\HttpPlugin',
      ),
    ),
    'Magento\\Framework\\App\\State' => 
    array (
      'framework-state-newrelic' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NewRelicReporting\\Plugin\\StatePlugin',
      ),
    ),
    'Symfony\\Component\\Console\\Command\\Command' => 
    array (
      'newrelic-describe-commands' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NewRelicReporting\\Plugin\\CommandPlugin',
      ),
    ),
    'Magento\\Framework\\Profiler\\Driver\\Standard\\Stat' => 
    array (
      'newrelic-describe-cronjobs' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NewRelicReporting\\Plugin\\StatPlugin',
      ),
    ),
    'Magento\\Newsletter\\Model\\Subscriber' => 
    array (
      'remove_subscriber_from_queue_after_unsubscribe' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Newsletter\\Model\\Plugin\\RemoveSubscriberFromQueue',
      ),
      'mailchimp-subscriber' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Ebizmarts\\MailChimp\\Model\\Plugin\\Subscriber',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Config' => 
    array (
      'append_sales_rule_keys_to_quote' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRule\\Model\\Plugin\\QuoteConfigProductAttributes',
      ),
      'Amasty_Shiprules::ProductAttributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Shiprules\\Plugin\\ProductAttributes',
      ),
      'weltpixel-googletagmanager-quote-config' => 
      array (
        'sortOrder' => 10,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\QuoteConfig',
      ),
    ),
    'Magento\\Rule\\Model\\Condition\\Combine' => NULL,
    'Magento\\SalesRule\\Model\\Rule\\Condition\\Product\\Combine' => 
    array (
      'Amasty_Conditions::AdditionalProductConditions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Conditions\\Plugin\\SalesRuleModel\\Rule\\Condition\\Product\\CombinePlugin',
      ),
    ),
    'Magento\\Sales\\Api\\OrderManagementInterface' => NULL,
    'Magento\\Sales\\Model\\Service\\OrderService' => 
    array (
      'coupon_uses_decrement_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRule\\Plugin\\CouponUsagesDecrement',
      ),
    ),
    'Magento\\Widget\\Block\\BlockInterface' => NULL,
    'Magento\\CatalogWidget\\Block\\Product\\ProductsList' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
      'pagebuilder_product_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Catalog\\Block\\Product\\ProductsListPlugin',
      ),
    ),
    'Magento\\Sales\\Api\\Data\\OrderPaymentInterface' => 
    array (
      'PaymentVaultExtensionAttributeOperations' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Vault\\Plugin\\PaymentVaultAttributesLoad',
      ),
    ),
    'Magento\\Checkout\\Api\\PaymentInformationManagementInterface' => 
    array (
      'ProcessPaymentVaultInformationManagement' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Vault\\Plugin\\PaymentVaultInformationManagement',
      ),
      'validate-agreements' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutAgreements\\Model\\Checkout\\Plugin\\Validation',
      ),
      'swissupRecaptcha-validate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Swissup\\Recaptcha\\Plugin\\Checkout\\Api\\Validation',
      ),
    ),
    'Magento\\Payment\\Model\\Checks\\SpecificationInterface' => NULL,
    'Magento\\Payment\\Model\\Checks\\Composite' => 
    array (
      'paypal_specification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Model\\Method\\Checks\\SpecificationPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\EntityInterface' => NULL,
    'Magento\\Sales\\Api\\Data\\OrderInterface' => NULL,
    'Magento\\Sales\\Model\\Order' => 
    array (
      'express_order_invoice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\OrderCanInvoice',
      ),
      'wesupply-toolbox-order' => 
      array (
        'sortOrder' => 5,
        'instance' => 'WeSupply\\Toolbox\\Plugin\\Order',
      ),
    ),
    'Magento\\Sales\\Model\\ValidatorInterface' => NULL,
    'Magento\\Sales\\Model\\Order\\Validation\\CanInvoice' => 
    array (
      'express_order_invoice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\ValidatorCanInvoice',
      ),
    ),
    'Magento\\Framework\\Session\\SessionStartChecker' => 
    array (
      'transparent_session_checker' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\TransparentSessionChecker',
      ),
    ),
    'Magento\\Payment\\Model\\InfoInterface' => NULL,
    'Magento\\Sales\\Model\\Order\\Payment\\Info' => NULL,
    'Magento\\Sales\\Model\\Order\\Payment' => 
    array (
      'PaymentVaultExtensionAttributeOperations' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Vault\\Plugin\\PaymentVaultAttributesLoad',
      ),
      'paypal_transparent' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\TransparentOrderPayment',
      ),
    ),
    'Magento\\Quote\\Model\\AddressAdditionalDataProcessor' => 
    array (
      'persistent_remember_me_checkbox_processor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Persistent\\Model\\Checkout\\AddressDataProcessorPlugin',
      ),
    ),
    'Magento\\Customer\\CustomerData\\SectionSourceInterface' => NULL,
    'Magento\\Customer\\CustomerData\\Customer' => 
    array (
      'section_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Persistent\\Model\\Plugin\\CustomerData',
      ),
    ),
    'Magento\\Framework\\EntityManager\\Operation\\ExtensionInterface' => NULL,
    'Magento\\Catalog\\Model\\Product\\Gallery\\CreateHandler' => 
    array (
      'external_video_media_entry_saver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ProductVideo\\Model\\Plugin\\Catalog\\Product\\Gallery\\CreateHandler',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Gallery\\ReadHandler' => 
    array (
      'external_video_media_entry_reader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ProductVideo\\Model\\Plugin\\Catalog\\Product\\Gallery\\ReadHandler',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Gallery' => 
    array (
      'external_video_media_resource_backend' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ProductVideo\\Model\\Plugin\\ExternalVideoResourceBackend',
      ),
    ),
    'Magento\\Checkout\\Api\\GuestPaymentInformationManagementInterface' => 
    array (
      'validate-guest-agreements' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutAgreements\\Model\\Checkout\\Plugin\\GuestValidation',
      ),
      'swissupRecaptcha-guest-validate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Swissup\\Recaptcha\\Plugin\\Checkout\\Api\\GuestValidation',
      ),
    ),
    'Magento\\Framework\\GraphQl\\Query\\ResolverInterface' => 
    array (
      'graphql_recaptcha_validation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ReCaptchaWebapiGraphQl\\Plugin\\GraphQlValidator',
      ),
    ),
    'Magento\\Webapi\\Controller\\Rest\\RequestValidator' => 
    array (
      'rest_webapi_recaptcha_validation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ReCaptchaWebapiRest\\Plugin\\RestValidationPlugin',
      ),
    ),
    'Magento\\Webapi\\Controller\\Soap\\Request\\Handler' => 
    array (
      'soap_webapi_recaptcha_validation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ReCaptchaWebapiRest\\Plugin\\SoapValidationPlugin',
      ),
    ),
    'Magento\\MediaStorage\\Model\\File\\Storage\\SynchronizationFactory' => 
    array (
      'remoteMediaStorageSynchronizationFactory' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\File\\Storage\\SynchronizationFactory',
      ),
    ),
    'Magento\\MediaGalleryMetadata\\Model\\IptcEmbed' => 
    array (
      'remoteIptcEmbed' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\MediaGalleryMetadata\\IptcEmbed',
      ),
    ),
    'Magento\\MediaGalleryMetadata\\Model\\ExifReader' => 
    array (
      'remoteExifReader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\MediaGalleryMetadata\\ExifReader',
      ),
    ),
    'Magento\\MediaGallerySynchronization\\Model\\Filesystem\\GetFileInfo' => 
    array (
      'remoteGetFileInfo' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\Filesystem\\GetFileInfo',
      ),
    ),
    'Zend_Validate_Interface' => NULL,
    'Zend_Validate' => NULL,
    'Magento\\Catalog\\Model\\Product\\Option\\Type\\File\\ExistingValidate' => 
    array (
      'remoteValidatorInfo' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\ExistingValidate',
      ),
    ),
    'Magento\\Framework\\Image\\Adapter\\AdapterInterface' => NULL,
    'Magento\\Framework\\Image\\Adapter\\AbstractAdapter' => 
    array (
      'remoteImageFile' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\Image',
      ),
    ),
    'Magento\\Framework\\Archive\\AbstractArchive' => NULL,
    'Magento\\Framework\\Archive\\ArchiveInterface' => NULL,
    'Magento\\Framework\\Archive\\Zip' => 
    array (
      'remoteZipArchive' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\Zip',
      ),
    ),
    'Magento\\Framework\\Data\\Collection\\AbstractDb' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
        'disabled' => true,
      ),
    ),
    'Magento\\Framework\\App\\ResourceConnection\\SourceProviderInterface' => NULL,
    'Magento\\Eav\\Model\\Entity\\Collection\\AbstractCollection' => NULL,
    'Magento\\Catalog\\Model\\ResourceModel\\Collection\\AbstractCollection' => NULL,
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Collection' => NULL,
    'Magento\\ConfigurableProduct\\Model\\ResourceModel\\Product\\Type\\Configurable\\Product\\Collection' => 
    array (
      'catalogRulePriceForConfigurableProduct' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleConfigurable\\Plugin\\ConfigurableProduct\\Model\\ResourceModel\\AddCatalogRulePrice',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\CreditmemoDocumentFactory' => 
    array (
      'sales_inventory_creditmemo_item_set_back_to_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesInventory\\Model\\Plugin\\Order\\CreditmemoDocumentFactoryPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Validation\\RefundOrderInterface' => 
    array (
      'refundOrderValidationAfter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesInventory\\Model\\Plugin\\Order\\Validation\\OrderRefundCreationArguments',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Validation\\RefundInvoiceInterface' => 
    array (
      'refundInvoiceValidationAfter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesInventory\\Model\\Plugin\\Order\\Validation\\InvoiceRefundCreationArguments',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\Attribute\\AttributeInterface' => NULL,
    'Magento\\Eav\\Api\\Data\\AttributeInterface' => NULL,
    'Magento\\Framework\\Api\\MetadataObjectInterface' => NULL,
    'Magento\\Eav\\Model\\Entity\\Attribute\\AbstractAttribute' => NULL,
    'Magento\\Eav\\Model\\Entity\\Attribute' => NULL,
    'Magento\\Catalog\\Api\\Data\\ProductAttributeInterface' => NULL,
    'Magento\\Eav\\Model\\Entity\\Attribute\\ScopedAttributeInterface' => NULL,
    'Magento\\Catalog\\Api\\Data\\EavAttributeInterface' => NULL,
    'Magento\\Catalog\\Model\\ResourceModel\\Eav\\Attribute' => 
    array (
      'save_swatches_option_params' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\EavAttribute',
      ),
    ),
    'Magento\\LayeredNavigation\\Block\\Navigation\\FilterRendererInterface' => NULL,
    'Magento\\LayeredNavigation\\Block\\Navigation\\FilterRenderer' => 
    array (
      'swatches_layered_renderer' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\FilterRenderer',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductAttributeOptionManagementInterface' => NULL,
    'Magento\\Catalog\\Api\\ProductAttributeOptionUpdateInterface' => NULL,
    'Magento\\Catalog\\Model\\Product\\Attribute\\OptionManagement' => 
    array (
      'swatches_product_attribute_optionmanagement_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Plugin\\Eav\\Model\\Entity\\Attribute\\OptionManagement',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address\\ToOrder' => 
    array (
      'add_tax_to_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\Quote\\ToOrderConverter',
      ),
    ),
    'Magento\\Quote\\Model\\Cart\\TotalsConverter' => 
    array (
      'add_tax_details' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\Quote\\GrandTotalDetailsPlugin',
      ),
      'addGiftWrapInitialAmount' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Osc\\Model\\Plugin\\Quote\\GiftWrap',
      ),
    ),
    'Magento\\Framework\\View\\Element\\UiComponent\\DataProvider\\DataProvider' => NULL,
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Listing\\DataProvider' => 
    array (
      'taxSettingsProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Plugin\\Ui\\DataProvider\\TaxSettings',
      ),
      'weeeSettingsProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Plugin\\Ui\\DataProvider\\WeeeSettings',
      ),
      'wishlistSettingsDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Wishlist\\Plugin\\Ui\\DataProvider\\WishlistSettings',
      ),
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth\\Forgotpassword' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'admin_forgot_password_plugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\AdminForgotPasswordPlugin',
      ),
    ),
    'Magento\\Captcha\\Observer\\CheckUserLoginBackendObserver' => 
    array (
      'captcha_check_user_login_backend_observer_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\CheckUserLoginBackendObserverPlugin',
      ),
    ),
    'Magento\\Captcha\\Observer\\ResetAttemptForBackendObserver' => 
    array (
      'captcha_reset_attempt_for_backend_observer_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\ResetAttemptForBackendObserverPlugin',
      ),
    ),
    'Magento\\Integration\\Api\\AdminTokenServiceInterface' => NULL,
    'Magento\\Integration\\Model\\AdminTokenService' => 
    array (
      'admin_adobe_ims_admin_token_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\AdminTokenPlugin',
      ),
    ),
    'Magento\\Webapi\\Model\\ServiceMetadata' => 
    array (
      'webapiServiceMetadataAsync' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiAsync\\Plugin\\ServiceMetadata',
      ),
    ),
    'Magento\\Framework\\Cache\\FrontendInterface' => NULL,
    'Magento\\Framework\\Cache\\Frontend\\Decorator\\Bare' => NULL,
    'Magento\\Framework\\Cache\\Frontend\\Decorator\\TagScope' => NULL,
    'Magento\\Webapi\\Model\\Cache\\Type\\Webapi' => 
    array (
      'webapiCacheAsync' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiAsync\\Plugin\\Cache\\Webapi',
      ),
    ),
    'Magento\\Webapi\\Controller\\Rest' => 
    array (
      'append_no_store_cache_header' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Plugin\\AppendNoStoreCacheHeader',
      ),
      'webapiContorllerRestAsync' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiAsync\\Plugin\\ControllerRest',
      ),
      'configHash' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Deploy\\Model\\Plugin\\ConfigChangeDetector',
      ),
    ),
    'Magento\\AsynchronousOperations\\Model\\MassConsumerEnvelopeCallback' => 
    array (
      'storeIdFieldForAsynchronousOperationsMassConsumerEnvelopeCallback' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiAsync\\Plugin\\AsynchronousOperations\\MassConsumerEnvelopeCallback',
      ),
    ),
    'Magento\\Webapi\\Model\\Config\\Converter' => 
    array (
      'webapiResourceSecurity' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiSecurity\\Model\\Plugin\\AnonymousResourceSecurity',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute\\RemoveProductAttributeData' => 
    array (
      'removeWeeAttributesData' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Plugin\\Catalog\\ResourceModel\\Attribute\\RemoveProductWeeData',
      ),
    ),
    'Magento\\Framework\\View\\Element\\UiComponentInterface' => NULL,
    'Magento\\Ui\\Component\\AbstractComponent' => NULL,
    'Magento\\Ui\\Component\\Listing\\Columns' => NULL,
    'Magento\\Catalog\\Ui\\Component\\Listing\\Columns' => 
    array (
      'changeWeeColumnConfig' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Plugin\\Catalog\\Ui\\Component\\Listing\\Columns',
      ),
    ),
    'Magento\\Wishlist\\Controller\\IndexInterface' => NULL,
    'Magento\\Catalog\\Controller\\Product\\View\\ViewInterface' => NULL,
    'Magento\\Wishlist\\Controller\\AbstractIndex' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Wishlist\\Controller\\Index\\Plugin',
      ),
    ),
    'Magento\\Framework\\View\\TemplateEngineInterface' => NULL,
    'Magento\\Framework\\View\\TemplateEngine\\Php' => 
    array (
      'Amasty_Base::AddEscaperToPhpRenderer' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Amasty\\Base\\Plugin\\Framework\\View\\TemplateEngine\\Php',
      ),
      'Magefan_Community_Plugin_Magento_Framework_View_TemplateEngine_Php' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'Magefan\\Community\\Plugin\\Magento\\Framework\\View\\TemplateEngine\\Php',
      ),
    ),
    'Magento\\Framework\\Setup\\Declaration\\Schema\\OperationsExecutor' => 
    array (
      'Amasty_Base::execute-patches-before-schema-apply' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Base\\Plugin\\Setup\\Model\\DeclarationInstaller\\ApplyPatchesBeforeDeclarativeSchema',
      ),
    ),
    'Magento\\Framework\\Config\\FileResolverInterface' => NULL,
    'Magento\\Framework\\App\\Config\\FileResolver' => NULL,
    'Magento\\Framework\\Config\\FileResolverByModule' => 
    array (
      'AmBase::FileResolverByModule' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Base\\Plugin\\Framework\\Setup\\Declaration\\Schema\\FileSystem\\XmlReader\\RestrictDropOperationsPlugin',
      ),
    ),
    'Temando\\Shipping\\Observer\\SaveCheckoutFieldsObserver' => 
    array (
      'Amasty_CashOnDelivery::Temando_Shipping_Observer_SaveCheckoutFieldsObserver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Conditions\\Plugin\\Shipping\\Observer\\SaveCheckoutFieldsObserverPlugin',
      ),
    ),
    'Magento\\Checkout\\Api\\TotalsInformationManagementInterface' => NULL,
    'Magento\\Checkout\\Model\\TotalsInformationManagement' => 
    array (
      'Amasty_Conditions::ExtensionAttributesResolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Conditions\\Plugin\\Checkout\\Model\\TotalInformationManagementPlugin',
      ),
      'saveShipingMethodOnCalculate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Osc\\Model\\Plugin\\Checkout\\TotalsInformationManagement',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address\\RateCollectorInterface' => NULL,
    'Magento\\Shipping\\Model\\Shipping' => 
    array (
      'Amasty_Shiprules::Shipping' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Shiprules\\Plugin\\Shipping\\Model\\ShippingPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address\\Rate' => 
    array (
      'Amasty_Shiprules::ImportShippingRate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Shiprules\\Plugin\\Quote\\Model\\Quote\\Address\\RatePlugin',
      ),
    ),
    'Magento\\Quote\\Api\\Data\\CartInterface' => NULL,
    'Magento\\Quote\\Model\\Quote' => 
    array (
      'getItemById_Osc' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Osc\\Model\\Plugin\\Quote',
      ),
      'updateQuoteStoreId' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Quote\\Plugin\\UpdateQuoteStoreId',
      ),
      'mailchimp-save-quote' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Ebizmarts\\MailChimp\\Model\\Plugin\\Quote',
      ),
    ),
    'Magento\\Newsletter\\Controller\\Manage' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Newsletter\\Controller\\Manage\\Save' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'mailchimp-account-interest-group' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Ebizmarts\\MailChimp\\Model\\Plugin\\Newsletter\\Save',
      ),
    ),
    'Magento\\Newsletter\\Model\\SubscriptionManagerInterface' => NULL,
    'Magento\\Newsletter\\Model\\SubscriptionManager' => 
    array (
      'mailchimp-subscriptionmanager' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Ebizmarts\\MailChimp\\Model\\Plugin\\SubscriptionManager',
      ),
    ),
    'Magento\\SalesRule\\Api\\Data\\CouponInterface' => NULL,
    'Magento\\SalesRule\\Model\\Coupon' => 
    array (
      'mailchimp-coupon' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Ebizmarts\\MailChimp\\Model\\Plugin\\Coupon',
      ),
    ),
    'Magento\\Sales\\Api\\Data\\ShipmentInterface' => NULL,
    'Magento\\Sales\\Model\\Order\\Shipment' => 
    array (
      'mailchimp_save_shipment' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Ebizmarts\\MailChimp\\Model\\Plugin\\Ship',
      ),
    ),
    'Magento\\Sales\\Api\\Data\\InvoiceInterface' => NULL,
    'Magento\\Sales\\Model\\Order\\Invoice' => 
    array (
      'mailchimp_save_invoice' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Ebizmarts\\MailChimp\\Model\\Plugin\\Invoice',
      ),
    ),
    'Magento\\Framework\\Image' => 
    array (
      'Lof_NextGenImages::convertWebpAfterImageSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Lof\\NextGenImages\\Plugin\\ConvertAfterImageSave',
      ),
    ),
    'Magento\\AdminGws\\Model\\Models' => 
    array (
      'magefan_blog_plugin_admingws_model_models_plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magefan\\Blog\\Plugin\\Magento\\AdminGws\\Model\\ModelsPlugin',
      ),
    ),
    'Magento\\UrlRewriteGraphQl\\Model\\Resolver\\AbstractEntityUrl' => 
    array (
      'graphql_recaptcha_validation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ReCaptchaWebapiGraphQl\\Plugin\\GraphQlValidator',
      ),
    ),
    'Magento\\UrlRewriteGraphQl\\Model\\Resolver\\EntityUrl' => 
    array (
      'graphql_recaptcha_validation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ReCaptchaWebapiGraphQl\\Plugin\\GraphQlValidator',
      ),
      'Magefan_BlogGraphQl_Plugin_Magento_UrlRewriteGraphQl_Model_Resolver_EntityUrl' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'Magefan\\BlogGraphQl\\Plugin\\Magento\\UrlRewriteGraphQl\\Model\\Resolver\\EntityUrl',
      ),
    ),
    'Magento\\UrlRewriteGraphQl\\Model\\Resolver\\Route' => 
    array (
      'graphql_recaptcha_validation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ReCaptchaWebapiGraphQl\\Plugin\\GraphQlValidator',
      ),
      'Magefan_BlogGraphQl_Plugin_Magento_UrlRewriteGraphQl_Model_Resolver_EntityUrl' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'Magefan\\BlogGraphQl\\Plugin\\Magento\\UrlRewriteGraphQl\\Model\\Resolver\\EntityUrl',
      ),
    ),
    'Magento\\Quote\\Api\\CouponManagementInterface' => NULL,
    'Magento\\Quote\\Model\\CouponManagement' => 
    array (
      'mpace_coupon_management' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\AbandonedCart\\Plugin\\Model\\CouponManagement',
      ),
    ),
    'Magento\\Checkout\\Api\\ShippingInformationManagementInterface' => NULL,
    'Magento\\Checkout\\Model\\ShippingInformationManagement' => 
    array (
      'mpdt_saveDeliveryInformation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\DeliveryTime\\Model\\Plugin\\Checkout\\ShippingInformationManagement',
      ),
      'save_delivery_estimations' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'WeSupply\\Toolbox\\Plugin\\Magento\\Checkout\\Model\\ShippingInformationManagement',
      ),
      'weltpixel-googletagmanager-checkout-shippinginformation' => 
      array (
        'sortOrder' => 10,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\ShippingInformation',
      ),
    ),
    'Magento\\Customer\\Model\\Address' => 
    array (
      'setShouldIgnoreValidation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Osc\\Model\\Plugin\\Customer\\Address',
      ),
    ),
    'Magento\\Checkout\\Helper\\Data' => 
    array (
      'osc_allow_guest_checkout' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Osc\\Model\\Plugin\\Checkout\\Data',
      ),
    ),
    'Magento\\Eav\\Model\\Attribute\\Data\\AbstractData' => 
    array (
      'mposc_bypass_validate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Osc\\Model\\Plugin\\Eav\\Model\\Attribute\\AbstractData',
      ),
    ),
    'Magento\\Customer\\Model\\Attribute\\Data\\Postcode' => 
    array (
      'mposc_bypass_validate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Osc\\Model\\Plugin\\Eav\\Model\\Attribute\\AbstractData',
      ),
      'mposc_bypass_validate_postcode' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Osc\\Model\\Plugin\\Eav\\Model\\Attribute\\Postcode',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteValidator' => 
    array (
      'mposc_set_should_ignore_validation_quote' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Osc\\Model\\Plugin\\Quote\\QuoteValidator',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\Price' => NULL,
    'Magento\\Bundle\\Block\\Catalog\\Product\\Price' => NULL,
    'Magento\\Bundle\\Block\\Catalog\\Product\\View\\Type\\Bundle\\Option' => 
    array (
      'mposc_append_item_option' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Osc\\Model\\Plugin\\Catalog\\Product\\View\\Type\\Bundle\\OptionPlugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View\\Options\\AbstractOptions' => 
    array (
      'mposc_append_item_layout' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Osc\\Model\\Plugin\\Catalog\\Product\\View\\Options\\AbstractOptions',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address\\ToOrderAddress' => 
    array (
      'mposc_convert_quote_address_to_order_address' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Mageplaza\\Osc\\Model\\Plugin\\Customer\\Address\\ConvertQuoteAddressToOrderAddress',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address\\CustomAttributeListInterface' => NULL,
    'Magento\\Quote\\Model\\Quote\\Address\\CustomAttributeList' => 
    array (
      'mposc_add_custom_field_to_address' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Osc\\Model\\Plugin\\Quote\\Address\\CustomAttributeList',
      ),
    ),
    'Magento\\Customer\\Model\\Address\\CustomAttributeListInterface' => NULL,
    'Magento\\Customer\\Model\\Address\\CustomAttributeList' => 
    array (
      'mposc_add_custom_field_to_customer' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Osc\\Model\\Plugin\\Customer\\Address\\CustomAttributeList',
      ),
    ),
    'Magento\\Quote\\Model\\Cart\\Totals\\ItemConverter' => 
    array (
      'mpsoc_add_configurable_options' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Osc\\Model\\Plugin\\Cart\\ItemConverterPlugin',
      ),
    ),
    'Magento\\Framework\\Mail\\Template\\TransportBuilder' => 
    array (
      'mageplaza_mail_template_transport_builder' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Mageplaza\\Smtp\\Mail\\Template\\TransportBuilder',
      ),
    ),
    'Magento\\Framework\\Mail\\Template\\TransportBuilderByStore' => 
    array (
      'mpsmtp_appTransportBuilder' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Smtp\\Plugin\\Message',
      ),
    ),
    'Magento\\CatalogGraphQl\\Model\\Resolver\\Products\\DataProvider\\ProductSearch\\ProductCollectionSearchCriteriaBuilder' => 
    array (
      'mpsmtp_search_criteria_builder' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Smtp\\Plugin\\Model\\Resolver\\Products\\DataProvider\\ProductSearch\\ProductSearchCriteriaBuilder',
      ),
    ),
    'Magento\\Framework\\View\\Asset\\Minification' => 
    array (
      'braintreeExcludeFromMinification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'PayPal\\Braintree\\Plugin\\ExcludeFromMinification',
      ),
    ),
    'Magento\\Checkout\\CustomerData\\ItemInterface' => 
    array (
      'weltpixel_quickview_confirmation_itemgetdata' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\Quickview\\Plugin\\CheckoutCustomerData',
      ),
    ),
    'Magento\\Checkout\\CustomerData\\AbstractItem' => 
    array (
      'braintreeAddFlagForVirtualProducts' => 
      array (
        'sortOrder' => 0,
        'instance' => 'PayPal\\Braintree\\Plugin\\AddFlagForVirtualProducts',
      ),
      'weltpixel_quickview_confirmation_itemgetdata' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\Quickview\\Plugin\\CheckoutCustomerData',
      ),
    ),
    'Magento\\Store\\Block\\Switcher' => 
    array (
      'addViewModelBeforeToHtml' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Swissup\\Core\\Plugin\\StoreSwitcherBlock',
      ),
    ),
    'Magento\\Csp\\Api\\PolicyCollectorInterface' => NULL,
    'Magento\\Csp\\Model\\Collector\\DynamicCollector' => 
    array (
      'swissup_marketplace' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Swissup\\Marketplace\\Plugin\\CspPolicyCollector',
      ),
    ),
    'Magento\\Captcha\\Model\\CaptchaFactory' => 
    array (
      'createRecaptchaModel' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Swissup\\Recaptcha\\Plugin\\Model\\CaptchaFactory',
      ),
    ),
    'Swissup\\Askit\\Block\\Question\\AbstractForm' => 
    array (
      'swissup_recaptcha' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Swissup\\Recaptcha\\Plugin\\AskitForm',
      ),
    ),
    'Magento\\Sales\\Api\\ShipmentTrackRepositoryInterface' => 
    array (
      'wesupply-toolbox-shipmenttrackrespository' => 
      array (
        'sortOrder' => 5,
        'instance' => 'WeSupply\\Toolbox\\Plugin\\ShipmentTrackRepositoryInterface',
      ),
    ),
    'Magento\\Customer\\Model\\AuthenticationInterface' => NULL,
    'Magento\\Customer\\Model\\Authentication' => 
    array (
      'wesupply-toolbox_authentication' => 
      array (
        'sortOrder' => 7,
        'instance' => 'WeSupply\\Toolbox\\Plugin\\Customer\\Authentication',
      ),
    ),
    'Magento\\Quote\\Model\\Cart\\ShippingMethodConverter' => 
    array (
      'append_delivery_estimations' => 
      array (
        'sortOrder' => 8,
        'disabled' => false,
        'instance' => 'WeSupply\\Toolbox\\Plugin\\Carrier\\AppendEstimations',
      ),
    ),
    'Magento\\Checkout\\Block\\Checkout\\LayoutProcessor' => 
    array (
      'remove_estimations_shipping_address' => 
      array (
        'sortOrder' => 9,
        'disabled' => false,
        'instance' => 'WeSupply\\Toolbox\\Plugin\\Magento\\Checkout\\Block\\Checkout\\LayoutProcessor',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage\\Save' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'wesupply-giftmessage-admin-save' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeSupply\\Toolbox\\Plugin\\Adminhtml\\Order\\View\\Giftmessage\\Save',
      ),
    ),
    'Magento\\Framework\\View\\Asset\\PreProcessor\\Chain' => 
    array (
      'weltpixel-frontendoptions-view-asset-processor-chain' => 
      array (
        'sortOrder' => 10,
        'instance' => 'WeltPixel\\FrontendOptions\\Plugin\\ViewPreProcessorChain',
      ),
    ),
    'Magento\\Checkout\\Model\\PaymentInformationManagement' => 
    array (
      'ProcessPaymentVaultInformationManagement' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Vault\\Plugin\\PaymentVaultInformationManagement',
      ),
      'validate-agreements' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutAgreements\\Model\\Checkout\\Plugin\\Validation',
      ),
      'swissupRecaptcha-validate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Swissup\\Recaptcha\\Plugin\\Checkout\\Api\\Validation',
      ),
      'weltpixel-googletagmanager-checkout-paymentinformation' => 
      array (
        'sortOrder' => 10,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\PaymentInformation',
      ),
    ),
    'Magento\\Checkout\\Model\\GuestPaymentInformationManagement' => 
    array (
      'validate-guest-agreements' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutAgreements\\Model\\Checkout\\Plugin\\GuestValidation',
      ),
      'swissupRecaptcha-guest-validate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Swissup\\Recaptcha\\Plugin\\Checkout\\Api\\GuestValidation',
      ),
      'inject_guest_address_for_nologin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Persistent\\Model\\Checkout\\GuestPaymentInformationManagementPlugin',
      ),
      'weltpixel-googletagmanager-checkout-guestpaymentinformation' => 
      array (
        'sortOrder' => 10,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\GuestPaymentInformation',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Configuration\\Item\\ItemInterface' => NULL,
    'Magento\\Wishlist\\Model\\Item' => 
    array (
      'weltpixel-googletagmanager-wishlist-addtocart' => 
      array (
        'sortOrder' => 10,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\WishlistAddToCart',
      ),
    ),
    'Magento\\Rule\\Model\\AbstractModel' => NULL,
    'WeltPixel\\Quickview\\Model\\QuickviewMessages' => 
    array (
      'reindex_ruleid_products' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\Quickview\\Plugin\\Indexer\\ReindexRuleIdProducts',
      ),
    ),
    'Magento\\Theme\\CustomerData\\Messages' => 
    array (
      'weltpixel_cart_messages_remove' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\Quickview\\Plugin\\RemoveCartMessages',
      ),
    ),
    'Magento\\Framework\\View\\Element\\Message\\Renderer\\RendererInterface' => NULL,
    'Magento\\Framework\\View\\Element\\Message\\Renderer\\BlockRenderer' => 
    array (
      'weltpixel_cart_messages_remove_from_renderer' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\Quickview\\Plugin\\RemoveCartMessagesFromRenderer',
      ),
    ),
    'Magento\\Framework\\AuthorizationInterface' => NULL,
    'Magento\\Framework\\Authorization' => 
    array (
      'customerAuthorization' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerAuthorization',
      ),
      'guestAuthorization' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Webapi\\Model\\Plugin\\GuestAuthorization',
      ),
    ),
    'Magento\\Framework\\App\\ResourceConnection' => 
    array (
      'get_catalog_category_product_index_table_name' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\TableResolver',
      ),
      'get_catalog_product_price_index_table_name' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Price\\Plugin\\TableResolver',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductCustomOptionRepositoryInterface' => 
    array (
      'updateProductCustomOptionsAttributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\Product\\Option\\UpdateProductCustomOptionsAttributes',
      ),
    ),
    'Magento\\Catalog\\Api\\CategoryRepositoryInterface' => 
    array (
      'category_authorization' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\CategoryAuthorization',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductLinkRepositoryInterface' => 
    array (
      'reindex_after_save_product_links' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Api\\ProductLinkRepositoryInterface\\ReindexAfterSaveProductLinksPlugin',
      ),
      'reindex_after_delete_by_id_product_links' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Api\\ProductLinkRepositoryInterface\\ReindexAfterDeleteByIdProductLinksPlugin',
      ),
    ),
    'Magento\\Quote\\Api\\GuestCartManagementInterface' => NULL,
    'Magento\\Quote\\Model\\GuestCart\\GuestCartManagement' => 
    array (
      'authorization' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\GuestCartManagement\\Plugin\\Authorization',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\VersionControl\\AbstractDb' => NULL,
    'Magento\\Sales\\Model\\ResourceModel\\EntityAbstract' => NULL,
    'Magento\\Sales\\Model\\Spi\\OrderResourceInterface' => NULL,
    'Magento\\Sales\\Model\\ResourceModel\\Order' => 
    array (
      'authorization' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Model\\ResourceModel\\Order\\Plugin\\Authorization',
      ),
    ),
    'Magento\\Sales\\Api\\InvoiceManagementInterface' => NULL,
    'Magento\\Sales\\Model\\Service\\InvoiceService' => 
    array (
      'addTransactionCommentAfterCapture' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Plugin\\Model\\Service\\Invoice\\AddTransactionCommentAfterCapture',
      ),
    ),
    'Magento\\Bundle\\Api\\ProductLinkManagementInterface' => 
    array (
      'reindex_after_add_child_by_sku' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Bundle\\Plugin\\Api\\ProductLinkManagement\\ReindexAfterAddChildBySkuPlugin',
      ),
      'reindex_after_remove_child' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Bundle\\Plugin\\Api\\ProductLinkManagement\\ReindexAfterRemoveChildPlugin',
      ),
    ),
    'Magento\\Framework\\Validator\\ValidatorInterface' => NULL,
    'Magento\\Framework\\Validator\\AbstractValidator' => NULL,
    'Magento\\Store\\Model\\Validation\\StoreCodeValidator' => 
    array (
      'check_if_parsed_store_code_is_valid' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Webapi\\Model\\Plugin\\Store\\Model\\Validation\\StoreCodeValidator',
      ),
    ),
    'Zend_Filter_Interface' => NULL,
    'Magento\\Framework\\Filter\\Template' => 
    array (
      'convertBackgroundImages' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Filter\\TemplatePlugin',
      ),
    ),
    'Magento\\Checkout\\Api\\GuestShippingInformationManagementInterface' => NULL,
    'Magento\\Checkout\\Model\\GuestShippingInformationManagement' => 
    array (
      'persistent_convert_customer_cart_to_guest_cart' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Persistent\\Model\\Checkout\\GuestShippingInformationManagementPlugin',
      ),
    ),
    'Magento\\ReCaptchaValidationApi\\Api\\ValidatorInterface' => 
    array (
      'webapi_recaptcha_validation_override' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ReCaptchaWebapiRest\\Plugin\\ValidationOverrider',
      ),
    ),
  ),
  2 => 
  array (
    'Magento\\Framework\\DB\\Adapter\\AdapterInterface_commit___self' => 
    array (
      4 => 
      array (
        0 => 'execute_commit_callbacks',
      ),
    ),
    'Magento\\Framework\\DB\\Adapter\\AdapterInterface_rollBack___self' => 
    array (
      4 => 
      array (
        0 => 'execute_commit_callbacks',
      ),
    ),
    'Magento\\Framework\\App\\Http\\Context_getVaryString___self' => 
    array (
      1 => 
      array (
        0 => 'weltpixel-googletagmanager-context',
      ),
    ),
    'Magento\\Framework\\App\\Response\\Http_sendResponse___self' => 
    array (
      1 => 
      array (
        0 => 'genericHeaderPlugin',
      ),
    ),
    'Magento\\Framework\\App\\ActionInterface_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Framework\\Url\\SecurityInfo_isSecure___self' => 
    array (
      2 => 'storeUrlSecurityInfo',
    ),
    'Magento\\Framework\\Url\\RouteParamsResolver_setRouteParams___self' => 
    array (
      1 => 
      array (
        0 => 'storeUrlRouteParamsResolver',
      ),
    ),
    'Magento\\Framework\\Url\\ScopeInterface_getBaseUrl___self' => 
    array (
      4 => 
      array (
        0 => 'urlSignature',
      ),
    ),
    'Magento\\Store\\Model\\Store_getBaseUrl___self' => 
    array (
      4 => 
      array (
        0 => 'urlSignature',
      ),
    ),
    'Magento\\Store\\Model\\Store_save___self' => 
    array (
      4 => 
      array (
        0 => 'themeDesignConfigGridIndexerStore',
      ),
    ),
    'Magento\\Store\\Model\\Store_delete___self' => 
    array (
      4 => 
      array (
        0 => 'themeDesignConfigGridIndexerStore',
      ),
    ),
    'Magento\\Framework\\Session\\SidResolver_getSid___self' => 
    array (
      4 => 
      array (
        0 => 'pagebuilder_preview_sid_resolving',
      ),
    ),
    'Magento\\Framework\\App\\Config\\Initial\\Converter_convert___self' => 
    array (
      4 => 
      array (
        0 => 'cron_system_config_initial_converter_plugin',
      ),
    ),
    'Magento\\Framework\\App\\FrontControllerInterface_dispatch___self' => 
    array (
      4 => 
      array (
        0 => 'append_no_store_cache_header',
      ),
      1 => 
      array (
        0 => 'configHash',
      ),
    ),
    'Magento\\Framework\\App\\FrontController_dispatch___self' => 
    array (
      4 => 
      array (
        0 => 'append_no_store_cache_header',
      ),
      1 => 
      array (
        0 => 'storeCookieValidate',
        1 => 'install',
        2 => 'configHash',
      ),
    ),
    'Magento\\Cms\\Model\\Wysiwyg\\Images\\Storage_deleteFile___self' => 
    array (
      4 => 
      array (
        0 => 'media_gallery_image_remove_metadata_after_wysiwyg',
      ),
    ),
    'Magento\\Cms\\Model\\Wysiwyg\\Images\\Storage_deleteDirectory___self' => 
    array (
      4 => 
      array (
        0 => 'media_gallery_image_remove_metadata_after_wysiwyg',
      ),
    ),
    'Magento\\AdvancedPricingImportExport\\Model\\Import\\AdvancedPricing_saveAdvancedPricing___self' => 
    array (
      4 => 
      array (
        0 => 'invalidateAdvancedPriceIndexerOnImport',
      ),
    ),
    'Magento\\AdvancedPricingImportExport\\Model\\Import\\AdvancedPricing_deleteAdvancedPricing___self' => 
    array (
      4 => 
      array (
        0 => 'invalidateAdvancedPriceIndexerOnImport',
      ),
    ),
    'Magento\\Theme\\Model\\DesignConfigRepository_save___self' => 
    array (
      4 => 
      array (
        0 => 'save_design_settings_event_dispatching',
      ),
    ),
    'Magento\\Theme\\Model\\DesignConfigRepository_delete___self' => 
    array (
      4 => 
      array (
        0 => 'save_design_settings_event_dispatching',
      ),
    ),
    'Magento\\Store\\Model\\Website_save___self' => 
    array (
      2 => 'themeDesignConfigGridIndexerWebsite',
    ),
    'Magento\\Store\\Model\\Website_delete___self' => 
    array (
      4 => 
      array (
        0 => 'themeDesignConfigGridIndexerWebsite',
      ),
    ),
    'Magento\\Store\\Model\\Group_delete___self' => 
    array (
      4 => 
      array (
        0 => 'themeDesignConfigGridIndexerStoreGroup',
      ),
    ),
    'Magento\\Config\\App\\Config\\Source\\DumpConfigSourceAggregated_get___self' => 
    array (
      4 => 
      array (
        0 => 'designConfigTheme',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Consumer\\Config\\CompositeReader_read___self' => 
    array (
      4 => 
      array (
        0 => 'queueConfigPlugin',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Publisher\\Config\\CompositeReader_read___self' => 
    array (
      4 => 
      array (
        0 => 'queueConfigPlugin',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Topology\\Config\\CompositeReader_read___self' => 
    array (
      4 => 
      array (
        0 => 'queueConfigPlugin',
      ),
    ),
    'Magento\\Framework\\App\\Config\\Value_save___self' => 
    array (
      4 => 
      array (
        0 => 'admin_system_config_media_gallery_renditions',
        1 => 'admin_system_config_adobe_stock_save_plugin',
      ),
    ),
    'Magento\\Framework\\App\\Config\\Value_afterSave___self' => 
    array (
      4 => 
      array (
        0 => 'webapiResourceSecurityCacheInvalidate',
      ),
    ),
    'Magento\\Backend\\Model\\Auth\\Session_prolong___self' => 
    array (
      2 => 'admin_adobe_ims_backend_auth_session',
    ),
    'Magento\\Authorization\\Model\\Role_save___self' => 
    array (
      4 => 
      array (
        0 => 'updateRoleUsersAcl',
      ),
    ),
    'Magento\\Eav\\Model\\ResourceModel\\Entity\\Attribute_getStoreLabelsByAttributeId___self' => 
    array (
      2 => 'storeLabelCaching',
    ),
    'Magento\\Eav\\Model\\Entity\\AbstractEntity_save___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\AbstractEntity_delete___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
    ),
    'Magento\\Customer\\Model\\Session_logout___self' => 
    array (
      4 => 
      array (
        0 => 'wesupply-toolbox-customer-login',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\VersionControl\\AbstractEntity_save___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\VersionControl\\AbstractEntity_delete___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Customer_save___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
      2 => 'recollect_quote_on_customer_group_change',
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Customer_delete___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_save___self' => 
    array (
      2 => 'transactionWrapper',
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_save_transactionWrapper' => 
    array (
      4 => 
      array (
        0 => 'login_as_customer_customer_repository_plugin',
        1 => 'update_newsletter_subscription_on_customer_update',
      ),
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_deleteById___self' => 
    array (
      2 => 'update_newsletter_subscription_on_customer_update',
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_delete___self' => 
    array (
      4 => 
      array (
        0 => 'update_newsletter_subscription_on_customer_update',
      ),
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_getById___self' => 
    array (
      4 => 
      array (
        0 => 'update_newsletter_subscription_on_customer_update',
      ),
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'update_newsletter_subscription_on_customer_update',
      ),
    ),
    'Magento\\PageCache\\Observer\\FlushFormKey_execute___self' => 
    array (
      2 => 'customerFlushFormKey',
    ),
    'Magento\\Customer\\Model\\AccountManagement_initiatePasswordReset___self' => 
    array (
      1 => 
      array (
        0 => 'security_check_customer_password_reset_attempt',
      ),
    ),
    'Magento\\Customer\\Model\\AccountManagement_createAccount___self' => 
    array (
      1 => 
      array (
        0 => 'mz_osc_newaccount',
      ),
    ),
    'Magento\\Customer\\Model\\AccountManagement_isEmailAvailable___self' => 
    array (
      4 => 
      array (
        0 => 'mpsmtp_account_management',
      ),
      2 => 'abandoned-checkout-save-quote',
    ),
    'Magento\\Customer\\Model\\AccountManagement_isEmailAvailable_abandoned-checkout-save-quote' => 
    array (
      4 => 
      array (
        0 => 'mpace_save_customer_email',
      ),
    ),
    'Magento\\Customer\\Api\\GroupRepositoryInterface_save___self' => 
    array (
      4 => 
      array (
        0 => 'saveCustomerGroupExcludedWebsite',
      ),
      2 => 'invalidatePriceIndexerOnCustomerGroup',
    ),
    'Magento\\Customer\\Api\\GroupRepositoryInterface_deleteById___self' => 
    array (
      4 => 
      array (
        0 => 'deleteCustomerGroupExcludedWebsite',
        1 => 'invalidatePriceIndexerOnCustomerGroup',
      ),
    ),
    'Magento\\Customer\\Api\\GroupRepositoryInterface_getById___self' => 
    array (
      4 => 
      array (
        0 => 'getByIdCustomerGroupExcludedWebsite',
      ),
    ),
    'Magento\\Customer\\Api\\GroupRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'getListCustomerGroupExcludedWebsite',
      ),
    ),
    'Magento\\Indexer\\Model\\Config\\Data_get___self' => 
    array (
      4 => 
      array (
        0 => 'indexerCategoryFlatConfigGet',
        1 => 'indexerProductFlatConfigGet',
      ),
    ),
    'Magento\\Indexer\\Model\\Processor_updateMview___self' => 
    array (
      1 => 
      array (
        0 => 'page-cache-indexer-reindex-clean-cache',
      ),
      4 => 
      array (
        0 => 'page-cache-indexer-reindex-clean-cache',
      ),
    ),
    'Magento\\Indexer\\Model\\Processor_reindexAllInvalid___self' => 
    array (
      1 => 
      array (
        0 => 'page-cache-indexer-reindex-clean-cache',
      ),
      4 => 
      array (
        0 => 'page-cache-indexer-reindex-clean-cache',
      ),
    ),
    'Magento\\Framework\\Indexer\\ActionInterface_executeFull___self' => 
    array (
      1 => 
      array (
        0 => 'cache_cleaner_after_reindex',
      ),
      4 => 
      array (
        0 => 'cache_cleaner_after_reindex',
      ),
    ),
    'Magento\\Framework\\Indexer\\ActionInterface_executeList___self' => 
    array (
      1 => 
      array (
        0 => 'cache_cleaner_after_reindex',
      ),
      4 => 
      array (
        0 => 'cache_cleaner_after_reindex',
      ),
    ),
    'Magento\\Framework\\Indexer\\ActionInterface_executeRow___self' => 
    array (
      1 => 
      array (
        0 => 'cache_cleaner_after_reindex',
      ),
      4 => 
      array (
        0 => 'cache_cleaner_after_reindex',
      ),
    ),
    'Magento\\Framework\\Indexer\\CacheContext_registerEntities___self' => 
    array (
      2 => 'defer_cache_cleaning',
    ),
    'Magento\\Framework\\Indexer\\CacheContext_registerTags___self' => 
    array (
      2 => 'defer_cache_cleaning',
    ),
    'Magento\\CatalogImportExport\\Model\\StockItemImporterInterface_import___self' => 
    array (
      4 => 
      array (
        0 => 'update_grouped_product_stock_status_plugin',
        1 => 'update_configurable_products_stock_item_status',
        2 => 'update_bundle_products_stock_item_status',
      ),
    ),
    'Magento\\Variable\\Model\\Source\\Variables_getData___self' => 
    array (
      4 => 
      array (
        0 => 'wesupply-subdomain-variable',
      ),
    ),
    'Magento\\Catalog\\Model\\Product_load___self' => 
    array (
      4 => 
      array (
        0 => 'catalogInventoryAfterLoad',
      ),
    ),
    'Magento\\Catalog\\Model\\Product_getIdentities___self' => 
    array (
      4 => 
      array (
        0 => 'product_identities_extender',
        1 => 'cms',
        2 => 'add_bundle_parent_identities',
      ),
    ),
    'Magento\\Catalog\\Model\\Product_getMediaAttributes___self' => 
    array (
      4 => 
      array (
        0 => 'exclude_swatch_attribute',
      ),
    ),
    'Magento\\Cms\\Api\\PageRepositoryInterface_save___self' => 
    array (
      1 => 
      array (
        0 => 'aclCheck',
      ),
    ),
    'Magento\\Cms\\Model\\PageRepository\\ValidationComposite_save___self' => 
    array (
      1 => 
      array (
        0 => 'cms_validate_url_plugin',
        1 => 'aclCheck',
      ),
    ),
    'Magento\\ImportExport\\Model\\Import_importSource___self' => 
    array (
      4 => 
      array (
        0 => 'catalogProductFlatIndexerImport',
        1 => 'invalidatePriceIndexerOnImport',
        2 => 'invalidateStockIndexerOnImport',
        3 => 'invalidateEavIndexerOnImport',
        4 => 'invalidateProductCategoryIndexerOnImport',
        5 => 'invalidateCategoryProductIndexerOnImport',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Visitor_clean___self' => 
    array (
      4 => 
      array (
        0 => 'catalogLog',
        1 => 'reportLog',
      ),
    ),
    'Magento\\Catalog\\Model\\Category\\DataProvider_getDefaultMetaData___self' => 
    array (
      4 => 
      array (
        0 => 'set_page_layout_default_value',
      ),
    ),
    'Magento\\Catalog\\Model\\Category\\DataProvider_prepareMeta___self' => 
    array (
      4 => 
      array (
        0 => 'weltpixel-designelements-category-dataprovider',
        1 => 'weltpixel-categorypage-category-dataprovider',
        2 => 'weltpixel-titlerewrite-category-dataprovider',
      ),
    ),
    'Magento\\Theme\\Block\\Html\\Topmenu_getHtml___self' => 
    array (
      1 => 
      array (
        0 => 'catalogTopmenu',
      ),
    ),
    'Magento\\Theme\\Block\\Html\\Topmenu_getIdentities___self' => 
    array (
      1 => 
      array (
        0 => 'catalogTopmenu',
      ),
    ),
    'Magento\\Theme\\Block\\Html\\Topmenu_getCacheKeyInfo___self' => 
    array (
      4 => 
      array (
        0 => 'catalogTopmenu',
      ),
    ),
    'Magento\\Framework\\Mview\\View\\StateInterface_setStatus___self' => 
    array (
      4 => 
      array (
        0 => 'setStatusForMview',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Website_delete___self' => 
    array (
      4 => 
      array (
        0 => 'invalidatePriceIndexerOnWebsite',
        1 => 'categoryProductWebsiteAfterDelete',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Website_save___self' => 
    array (
      4 => 
      array (
        0 => 'invalidatePriceIndexerOnWebsite',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Store_save___self' => 
    array (
      4 => 
      array (
        0 => 'storeViewResourceAroundSave',
        1 => 'catalogProductFlatIndexerStore',
        2 => 'categoryStoreAroundSave',
        3 => 'productAttributesStoreViewSave',
        4 => 'catalogsearchFulltextIndexerStoreView',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Store_delete___self' => 
    array (
      4 => 
      array (
        0 => 'categoryStoreAroundSave',
        1 => 'catalogsearchFulltextIndexerStoreView',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Group_save___self' => 
    array (
      4 => 
      array (
        0 => 'storeGroupResourceAroundSave',
        1 => 'catalogProductFlatIndexerStoreGroup',
        2 => 'categoryStoreGroupAroundSave',
        3 => 'storeGroupResourceAroundBeforeSave',
        4 => 'catalogsearchFulltextIndexerStoreGroup',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Group_delete___self' => 
    array (
      4 => 
      array (
        0 => 'categoryStoreGroupAroundSave',
        1 => 'catalogsearchFulltextIndexerStoreGroup',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\Attribute\\Set_save___self' => 
    array (
      1 => 
      array (
        0 => 'invalidateEavIndexerOnAttributeSetSave',
      ),
      4 => 
      array (
        0 => 'invalidateEavIndexerOnAttributeSetSave',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\TypeTransitionManager_processProduct___self' => 
    array (
      2 => 'downloadable_product_transition',
    ),
    'Magento\\Catalog\\Model\\Product\\TypeTransitionManager_processProduct_downloadable_product_transition' => 
    array (
      2 => 'configurable_product_transition',
    ),
    'Magento\\CatalogInventory\\Model\\Config\\Backend\\AbstractValue_save___self' => 
    array (
      4 => 
      array (
        0 => 'admin_system_config_media_gallery_renditions',
        1 => 'admin_system_config_adobe_stock_save_plugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Config\\Backend\\AbstractValue_afterSave___self' => 
    array (
      4 => 
      array (
        0 => 'webapiResourceSecurityCacheInvalidate',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Config\\Backend\\ShowOutOfStock_save___self' => 
    array (
      4 => 
      array (
        0 => 'admin_system_config_media_gallery_renditions',
        1 => 'admin_system_config_adobe_stock_save_plugin',
        2 => 'showOutOfStockValueChanged',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Config\\Backend\\ShowOutOfStock_afterSave___self' => 
    array (
      4 => 
      array (
        0 => 'webapiResourceSecurityCacheInvalidate',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Config_getAttributesUsedInListing___self' => 
    array (
      2 => 'productListingAttributesCaching',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Config_getAttributesUsedForSortBy___self' => 
    array (
      2 => 'productListingAttributesCaching',
    ),
    'Magento\\Eav\\Model\\Entity\\Attribute\\Backend\\AbstractBackend_validate___self' => 
    array (
      2 => 'attributeValidation',
    ),
    'Magento\\Eav\\Model\\Entity\\Attribute\\Backend\\AbstractBackend_validate_attributeValidation' => 
    array (
      2 => 'ConfigurableProduct::skipValidation',
    ),
    'Magento\\Framework\\Config\\View_getMediaAttributes___self' => 
    array (
      2 => 'weltpixel-googlecards-config-view',
    ),
    'Magento\\Framework\\Config\\View_getMediaEntities___self' => 
    array (
      4 => 
      array (
        0 => 'weltpixel-googlecards-config-view',
        1 => 'weltpixel-categorypage-config-view',
        2 => 'weltpixel-productpage-framework-config-view',
      ),
    ),
    'Magento\\Framework\\Config\\View_getMediaAttributes_weltpixel-googlecards-config-view' => 
    array (
      2 => 'weltpixel-categorypage-config-view',
    ),
    'Magento\\Framework\\Config\\View_getMediaAttributes_weltpixel-categorypage-config-view' => 
    array (
      2 => 'weltpixel-productpage-framework-config-view',
    ),
    'Magento\\Sales\\Api\\OrderItemRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'get_gift_message',
      ),
    ),
    'Magento\\Eav\\Model\\ResourceModel\\ReadSnapshot_execute___self' => 
    array (
      4 => 
      array (
        0 => 'catalogReadSnapshot',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Item\\ToOrderItem_convert___self' => 
    array (
      1 => 
      array (
        0 => 'copy_quote_files_to_order',
      ),
      4 => 
      array (
        0 => 'append_bundle_data_to_order',
        1 => 'gift_message_quote_item_conversion',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\Helper_initializeFromData___self' => 
    array (
      4 => 
      array (
        0 => 'weeeAttributeOptionsProcess',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductRepositoryInterface_delete___self' => 
    array (
      2 => 'remove_images_from_gallery_after_removing_product',
    ),
    'Magento\\Catalog\\Api\\ProductRepositoryInterface_save___self' => 
    array (
      1 => 
      array (
        0 => 'product_authorization',
        1 => 'configurableProductSaveOptions',
      ),
      4 => 
      array (
        0 => 'configurableProductSaveOptions',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Repository_getCustomAttributesMetadata___self' => 
    array (
      4 => 
      array (
        0 => 'filterCustomAttribute',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Repository_save___self' => 
    array (
      1 => 
      array (
        0 => 'process_extension_attributes',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Repository_get___self' => 
    array (
      4 => 
      array (
        0 => 'process_extension_attributes',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\AbstractProduct_getImage___self' => 
    array (
      1 => 
      array (
        0 => 'add_product_object_to_image_data_array',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View_getImage___self' => 
    array (
      1 => 
      array (
        0 => 'add_product_object_to_image_data_array',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View_getQuantityValidators___self' => 
    array (
      4 => 
      array (
        0 => 'quantityValidators',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Action_updateAttributes___self' => 
    array (
      4 => 
      array (
        0 => 'ReindexUpdatedProducts',
        1 => 'catalogsearchFulltextMassAction',
        2 => 'quoteProductMassChange',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Action_updateWebsites___self' => 
    array (
      4 => 
      array (
        0 => 'catalogsearchFulltextMassAction',
        1 => 'update_url_rewrites_after_websites_update_plugin',
      ),
    ),
    'Magento\\Framework\\App\\Action\\AbstractAction_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Framework\\App\\Action\\Action_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Backend\\App\\AbstractAction_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Backend\\App\\Action_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
      2 => 'massAction',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\AbstractResource_save___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\AbstractResource_delete___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product_save___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
      2 => 'catalogsearchFulltextProduct',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product_delete___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
      2 => 'catalogsearchFulltextProduct',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product_delete_catalogsearchFulltextProduct' => 
    array (
      4 => 
      array (
        0 => 'clean_quote_items_after_product_delete',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product_save_catalogsearchFulltextProduct' => 
    array (
      4 => 
      array (
        0 => 'update_quote_items_after_product_save',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category_save___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
      2 => 'catalogsearchFulltextCategory',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category_delete___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
      2 => 'category_delete_plugin',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category_changeParent___self' => 
    array (
      4 => 
      array (
        0 => 'category_move_plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category_save_catalogsearchFulltextCategory' => 
    array (
      4 => 
      array (
        0 => 'update_url_path_for_different_stores',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category_delete_category_delete_plugin' => 
    array (
      4 => 
      array (
        0 => 'fulltext_search_indexer',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Product\\Category\\Action\\Rows_execute___self' => 
    array (
      4 => 
      array (
        0 => 'catalogsearchFulltextCategoryAssignment',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute_getStoreLabelsByAttributeId___self' => 
    array (
      2 => 'storeLabelCaching',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute_save___self' => 
    array (
      1 => 
      array (
        0 => 'catalogsearchFulltextIndexerAttribute',
      ),
      4 => 
      array (
        0 => 'catalogsearchFulltextIndexerAttribute',
      ),
      2 => 'catalogsearchAttributeSearchWeightCache',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute_delete___self' => 
    array (
      1 => 
      array (
        0 => 'catalogsearchFulltextIndexerAttribute',
      ),
      4 => 
      array (
        0 => 'catalogsearchFulltextIndexerAttribute',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute_save_catalogsearchAttributeSearchWeightCache' => 
    array (
      1 => 
      array (
        0 => 'updateElasticsearchIndexerMapping',
      ),
      4 => 
      array (
        0 => 'updateElasticsearchIndexerMapping',
      ),
    ),
    'Magento\\Framework\\Search\\Request\\Config\\FilesystemReader_read___self' => 
    array (
      4 => 
      array (
        0 => 'catalogSearchDynamicFields',
        1 => 'productAttributesDynamicFields',
      ),
    ),
    'Magento\\Catalog\\Model\\Layer\\Search\\CollectionFilter_filter___self' => 
    array (
      4 => 
      array (
        0 => 'searchQuery',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Action\\DataProvider_prepareProductIndex___self' => 
    array (
      1 => 
      array (
        0 => 'stockedProductsFilterPlugin',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\StorageInterface_replace___self' => 
    array (
      4 => 
      array (
        0 => 'storage_plugin',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\StorageInterface_deleteByData___self' => 
    array (
      1 => 
      array (
        0 => 'storage_plugin',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\Storage\\AbstractStorage_replace___self' => 
    array (
      4 => 
      array (
        0 => 'storage_plugin',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\Storage\\AbstractStorage_deleteByData___self' => 
    array (
      1 => 
      array (
        0 => 'storage_plugin',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\Storage\\DbStorage_replace___self' => 
    array (
      4 => 
      array (
        0 => 'storage_plugin',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\Storage\\DbStorage_deleteByData___self' => 
    array (
      1 => 
      array (
        0 => 'storage_plugin',
      ),
    ),
    'Magento\\CatalogUrlRewrite\\Model\\Storage\\DbStorage_replace___self' => 
    array (
      4 => 
      array (
        0 => 'storage_plugin',
      ),
    ),
    'Magento\\CatalogUrlRewrite\\Model\\Storage\\DbStorage_deleteByData___self' => 
    array (
      1 => 
      array (
        0 => 'storage_plugin',
      ),
    ),
    'Magento\\CatalogUrlRewrite\\Model\\Storage\\DbStorage_findOneByData___self' => 
    array (
      2 => 'dynamic_storage_plugin',
    ),
    'Magento\\CatalogUrlRewrite\\Model\\Storage\\DbStorage_findAllByData___self' => 
    array (
      2 => 'dynamic_storage_plugin',
    ),
    'Magento\\Framework\\View\\Asset\\MergeService_cleanMergedJsCss___self' => 
    array (
      4 => 
      array (
        0 => 'cleanMergedJsCss',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository_get___self' => 
    array (
      4 => 
      array (
        0 => 'multishipping_quote_repository',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository_getList___self' => 
    array (
      4 => 
      array (
        0 => 'multishipping_quote_repository',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository_save___self' => 
    array (
      1 => 
      array (
        0 => 'multishipping_quote_repository',
        1 => 'accessControl',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository_getActive___self' => 
    array (
      4 => 
      array (
        0 => 'authorization',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository_getActiveForCustomer___self' => 
    array (
      4 => 
      array (
        0 => 'authorization',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address_exportCustomerAddress___self' => 
    array (
      4 => 
      array (
        0 => 'mposc_convert_quote_address_to_customer_address',
      ),
    ),
    'Magento\\Catalog\\Api\\TierPriceStorageInterface_update___self' => 
    array (
      4 => 
      array (
        0 => 'update_quote_items_after_tier_prices_update',
      ),
    ),
    'Magento\\MediaGallerySynchronizationApi\\Model\\ImportFilesComposite_execute___self' => 
    array (
      1 => 
      array (
        0 => 'createMediaGalleryThumbnails',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page_save___self' => 
    array (
      1 => 
      array (
        0 => 'cms_url_rewrite_plugin',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page_delete___self' => 
    array (
      4 => 
      array (
        0 => 'cms_url_rewrite_plugin',
      ),
    ),
    'Magento\\Integration\\Api\\IntegrationServiceInterface_create___self' => 
    array (
      4 => 
      array (
        0 => 'webapiIntegrationService',
      ),
    ),
    'Magento\\Integration\\Api\\IntegrationServiceInterface_update___self' => 
    array (
      4 => 
      array (
        0 => 'webapiIntegrationService',
      ),
    ),
    'Magento\\Integration\\Api\\IntegrationServiceInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'webapiIntegrationService',
      ),
    ),
    'Magento\\Integration\\Api\\IntegrationServiceInterface_delete___self' => 
    array (
      4 => 
      array (
        0 => 'webapiIntegrationService',
      ),
    ),
    'Magento\\User\\Model\\User_save___self' => 
    array (
      4 => 
      array (
        0 => 'revokeTokensFromInactiveAdmins',
      ),
    ),
    'Magento\\User\\Model\\User_delete___self' => 
    array (
      4 => 
      array (
        0 => 'revokeTokensFromInactiveAdmins',
      ),
    ),
    'Magento\\Customer\\Model\\Customer_save___self' => 
    array (
      4 => 
      array (
        0 => 'revokeTokensFromInactiveCustomers',
      ),
    ),
    'Magento\\Customer\\Model\\Customer_delete___self' => 
    array (
      4 => 
      array (
        0 => 'revokeTokensFromInactiveCustomers',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\View_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Creditmemo_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Creditmemo_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Creditmemo_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\History_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\History_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Invoice_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Invoice_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Invoice_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintAction_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintAction_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintAction_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintCreditmemo_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintCreditmemo_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintCreditmemo_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintInvoice_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintInvoice_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintInvoice_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintShipment_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintShipment_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintShipment_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Reorder_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Reorder_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Reorder_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Shipment_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Shipment_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Shipment_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\View_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\View_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Sales\\Api\\ShipmentRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'convert_blob_to_string',
      ),
    ),
    'Magento\\Sales\\Api\\ShipmentRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'convert_blob_to_string',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\ShipmentRepository_getList___self' => 
    array (
      4 => 
      array (
        0 => 'convert_blob_to_string',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\ShipmentRepository_get___self' => 
    array (
      4 => 
      array (
        0 => 'convert_blob_to_string',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\ShipmentRepository_save___self' => 
    array (
      4 => 
      array (
        0 => 'wesupply-toolbox-shipmentrepository',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\CreditmemoRepository_save___self' => 
    array (
      4 => 
      array (
        0 => 'mailchimp_save_creditmemo',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Handler\\Address_process___self' => 
    array (
      4 => 
      array (
        0 => 'addressUpdate',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Structure\\Converter_convert___self' => 
    array (
      4 => 
      array (
        0 => 'cron_backend_config_structure_converter_plugin',
      ),
    ),
    'Magento\\Framework\\View\\Model\\Layout\\Merge_getDbUpdateString___self' => 
    array (
      2 => 'widget-layout-update-plugin',
    ),
    'Magento\\Config\\Model\\Config\\Backend\\Baseurl_save___self' => 
    array (
      4 => 
      array (
        0 => 'admin_system_config_media_gallery_renditions',
        1 => 'admin_system_config_adobe_stock_save_plugin',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Backend\\Baseurl_afterSave___self' => 
    array (
      4 => 
      array (
        0 => 'webapiResourceSecurityCacheInvalidate',
        1 => 'updateAnalyticsSubscription',
      ),
    ),
    'Magento\\Integration\\Model\\Validator\\BearerTokenValidator_isIntegrationAllowedAsBearerToken___self' => 
    array (
      4 => 
      array (
        0 => 'allow_bearer_token',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\CartConfiguration_isProductConfigured___self' => 
    array (
      2 => 'Downloadable',
    ),
    'Magento\\Catalog\\Model\\Product\\CartConfiguration_isProductConfigured_Downloadable' => 
    array (
      2 => 'isProductConfigured',
    ),
    'Magento\\Catalog\\Model\\Product\\CartConfiguration_isProductConfigured_isProductConfigured' => 
    array (
      2 => 'configurable_product',
    ),
    'Magento\\Framework\\View\\Asset\\Source_getContent___self' => 
    array (
      4 => 
      array (
        0 => 'weltpixel-frontendoptions-view-asset-source',
      ),
    ),
    'Magento\\Checkout\\Block\\Cart\\LayoutProcessor_isStateActive___self' => 
    array (
      4 => 
      array (
        0 => 'checkout_cart_shipping_dhl',
        1 => 'checkout_cart_shipping_plugin',
      ),
    ),
    'Magento\\Checkout\\Block\\Cart\\LayoutProcessor_isCityActive___self' => 
    array (
      4 => 
      array (
        0 => 'checkout_cart_shipping_dhl',
      ),
    ),
    'Magento\\Checkout\\Block\\Cart\\LayoutProcessor_process___self' => 
    array (
      4 => 
      array (
        0 => 'remove_estimations_shipping_address_cart',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Price_validate___self' => 
    array (
      2 => 'attributeValidation',
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Price_validate_attributeValidation' => 
    array (
      2 => 'ConfigurableProduct::skipValidation',
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Price_validate_ConfigurableProduct::skipValidation' => 
    array (
      2 => 'bundle',
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Price_validate_bundle' => 
    array (
      2 => 'configurable',
    ),
    'Magento\\Sales\\Model\\Order\\Item_getQtyToCancel___self' => 
    array (
      4 => 
      array (
        0 => 'bundle',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Item_isProcessingAvailable___self' => 
    array (
      4 => 
      array (
        0 => 'bundle',
      ),
    ),
    'Magento\\Quote\\Api\\CartManagementInterface_placeOrder___self' => 
    array (
      2 => 'order_cancellation',
    ),
    'Magento\\Quote\\Model\\QuoteManagement_placeOrder___self' => 
    array (
      2 => 'order_cancellation',
    ),
    'Magento\\Quote\\Model\\QuoteManagement_submit___self' => 
    array (
      1 => 
      array (
        0 => 'validate_purchase_order_number',
        1 => 'update_bundle_quote_item_options',
      ),
      2 => 'coupon_uses_increment_plugin',
    ),
    'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Action\\Rows_execute___self' => 
    array (
      4 => 
      array (
        0 => 'catalogsearchFulltextProductAssignment',
      ),
    ),
    'Magento\\Framework\\Indexer\\Config\\DependencyInfoProvider_getIndexerIdsToRunBefore___self' => 
    array (
      4 => 
      array (
        0 => 'indexerDependencyUpdaterPlugin',
      ),
    ),
    'Magento\\Framework\\Indexer\\Config\\DependencyInfoProvider_getIndexerIdsToRunAfter___self' => 
    array (
      4 => 
      array (
        0 => 'indexerDependencyUpdaterPlugin',
      ),
    ),
    'Magento\\Search\\Model\\ResourceModel\\SynonymGroup_save___self' => 
    array (
      4 => 
      array (
        0 => 'synonymReaderPlugin',
      ),
    ),
    'Magento\\Search\\Model\\ResourceModel\\SynonymGroup_delete___self' => 
    array (
      4 => 
      array (
        0 => 'synonymReaderPlugin',
      ),
    ),
    'Magento\\Email\\Model\\AbstractTemplate_getUrl___self' => 
    array (
      1 => 
      array (
        0 => 'EmailTemplateLinkUrl',
      ),
    ),
    'Magento\\Email\\Model\\Template_getUrl___self' => 
    array (
      1 => 
      array (
        0 => 'EmailTemplateLinkUrl',
      ),
    ),
    'Magento\\Email\\Model\\Template_getSubject___self' => 
    array (
      4 => 
      array (
        0 => 'mail_subject',
      ),
    ),
    'Magento\\Framework\\Mail\\TransportInterface_sendMessage___self' => 
    array (
      1 => 
      array (
        0 => 'WindowsSmtpConfig',
      ),
      2 => 'EmailDisable',
    ),
    'Magento\\Framework\\Mail\\TransportInterface_sendMessage_EmailDisable' => 
    array (
      2 => 'mageplaza_mail_transport',
    ),
    'Magento\\Shipping\\Block\\DataProviders\\Tracking\\DeliveryDateTitle_getTitle___self' => 
    array (
      4 => 
      array (
        0 => 'update_delivery_date_title',
        1 => 'ups_update_delivery_date_title',
      ),
    ),
    'Magento\\Shipping\\Block\\Tracking\\Popup_formatDeliveryDateTime___self' => 
    array (
      4 => 
      array (
        0 => 'update_delivery_date_value',
      ),
    ),
    'Magento\\Sales\\Api\\OrderRepositoryInterface_save___self' => 
    array (
      4 => 
      array (
        0 => 'save_gift_message',
        1 => 'save_order_tax',
        2 => 'wesupply-toolbox-orderrespository',
      ),
    ),
    'Magento\\Sales\\Api\\OrderRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'get_gift_message',
        1 => 'mp_delivery_information',
        2 => 'mposc_add_order_comment_to_order_api',
      ),
    ),
    'Magento\\Sales\\Api\\OrderRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'get_gift_message',
        1 => 'mp_delivery_information',
        2 => 'mposc_add_order_comment_to_order_api',
      ),
    ),
    'Magento\\Framework\\App\\PageCache\\Identifier_getValue___self' => 
    array (
      4 => 
      array (
        0 => 'core-app-area-design-exception-plugin',
      ),
    ),
    'Magento\\Framework\\App\\PageCache\\Cache_save___self' => 
    array (
      1 => 
      array (
        0 => 'fpc-type-plugin',
      ),
    ),
    'Magento\\Framework\\App\\PageCache\\Cache_load___self' => 
    array (
      4 => 
      array (
        0 => 'fpc-type-plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Type_getOptionArray___self' => 
    array (
      4 => 
      array (
        0 => 'grouped_output',
        1 => 'configurable_output',
      ),
    ),
    'Magento\\Catalog\\Helper\\Product\\Configuration_getOptions___self' => 
    array (
      2 => 'grouped_options',
    ),
    'Magento\\Catalog\\Helper\\Product\\Configuration_getOptions_grouped_options' => 
    array (
      2 => 'configurable_product',
    ),
    'Magento\\Catalog\\Model\\Product\\Initialization\\Helper\\ProductLinks_initializeLinks___self' => 
    array (
      1 => 
      array (
        0 => 'GroupedProduct',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Link_saveProductLinks___self' => 
    array (
      4 => 
      array (
        0 => 'groupedProductLinkProcessor',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Link_deleteProductLink___self' => 
    array (
      2 => 'groupedProductLinkProcessor',
    ),
    'Magento\\GroupedProduct\\Model\\Product\\Type\\Grouped_prepareForCartAdvanced___self' => 
    array (
      4 => 
      array (
        0 => 'outOfStockFilter',
      ),
    ),
    'Magento\\GroupedProduct\\Model\\Product\\Type\\Grouped_getAssociatedProductCollection___self' => 
    array (
      4 => 
      array (
        0 => 'grouped_product_minimum_advertised_price',
      ),
    ),
    'Magento\\Customer\\Controller\\Ajax\\Login_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
      2 => 'captcha_validation',
    ),
    'Magento\\Checkout\\Block\\Cart\\Sidebar_getConfig___self' => 
    array (
      4 => 
      array (
        0 => 'addAgreementsToMinicartConfig',
        1 => 'login_captcha',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Quote\\Item\\QuantityValidator\\Initializer\\Option_getStockItem___self' => 
    array (
      4 => 
      array (
        0 => 'configurable_product',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Admin\\Item_getSku___self' => 
    array (
      2 => 'configurable_product',
    ),
    'Magento\\Sales\\Model\\Order\\Admin\\Item_getName___self' => 
    array (
      2 => 'configurable_product',
    ),
    'Magento\\Sales\\Model\\Order\\Admin\\Item_getProductId___self' => 
    array (
      2 => 'configurable_product',
    ),
    'Magento\\Catalog\\Model\\Entity\\Product\\Attribute\\Group\\AttributeMapperInterface_map___self' => 
    array (
      2 => 'configurable_product',
    ),
    'Magento\\Catalog\\Block\\Product\\View\\AbstractView_getImage___self' => 
    array (
      1 => 
      array (
        0 => 'add_product_object_to_image_data_array',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View\\Gallery_getImage___self' => 
    array (
      1 => 
      array (
        0 => 'add_product_object_to_image_data_array',
      ),
    ),
    'Magento\\ProductVideo\\Block\\Product\\View\\Gallery_getImage___self' => 
    array (
      1 => 
      array (
        0 => 'add_product_object_to_image_data_array',
      ),
    ),
    'Magento\\ProductVideo\\Block\\Product\\View\\Gallery_getOptionsMediaGalleryDataJson___self' => 
    array (
      4 => 
      array (
        0 => 'product_video_gallery',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\Product\\Type\\Configurable_getUsedProductCollection___self' => 
    array (
      4 => 
      array (
        0 => 'add_swatch_attributes_to_configurable',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Pricing\\Renderer\\SalableResolver_isSalable___self' => 
    array (
      4 => 
      array (
        0 => 'configurable',
      ),
    ),
    'Magento\\SalesRule\\Model\\Rule\\Condition\\Product_validate___self' => 
    array (
      1 => 
      array (
        0 => 'apply_rule_on_configurable_children',
        1 => 'Amasty_Conditions::AdditionalConditions',
      ),
    ),
    'Magento\\SalesRule\\Model\\Rule\\Condition\\Product_loadAttributeOptions___self' => 
    array (
      4 => 
      array (
        0 => 'Amasty_Conditions::AdditionalConditions',
      ),
    ),
    'Magento\\Tax\\Model\\Sales\\Total\\Quote\\CommonTaxCollector_mapItem___self' => 
    array (
      4 => 
      array (
        0 => 'apply_tax_class_id',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\Stock\\Item_save___self' => 
    array (
      1 => 
      array (
        0 => 'updateStockChangedAuto',
      ),
    ),
    'Magento\\Quote\\Model\\Cart\\CartTotalRepository_get___self' => 
    array (
      4 => 
      array (
        0 => 'multishipping_shipping_addresses',
        1 => 'coupon_label_plugin',
        2 => 'Amasty_Conditions::cart_total_repository_get',
      ),
      1 => 
      array (
        0 => 'Amasty_Conditions::cart_total_repository_get',
      ),
    ),
    'Magento\\Integration\\Model\\ConfigBasedIntegrationManager_processIntegrationConfig___self' => 
    array (
      4 => 
      array (
        0 => 'webapiSetup',
      ),
    ),
    'Magento\\Integration\\Model\\ConfigBasedIntegrationManager_processConfigBasedIntegrations___self' => 
    array (
      4 => 
      array (
        0 => 'webapiSetup',
      ),
    ),
    'Magento\\Backend\\Model\\Auth_logout___self' => 
    array (
      1 => 
      array (
        0 => 'login_as_customer_admin_logout',
      ),
    ),
    'Magento\\Backend\\Model\\Auth_login___self' => 
    array (
      2 => 'disable_admin_login_auth',
    ),
    'Magento\\Framework\\Api\\DataObjectHelper_populateWithArray___self' => 
    array (
      4 => 
      array (
        0 => 'add_allow_remote_shopping_assistance_to_customer',
      ),
      1 => 
      array (
        0 => 'Amasty_Conditions::dataHelper',
      ),
    ),
    'Magento\\LoginAsCustomerApi\\Api\\AuthenticateCustomerBySecretInterface_execute___self' => 
    array (
      1 => 
      array (
        0 => 'process_shopping_cart',
      ),
    ),
    'Magento\\MediaGalleryApi\\Api\\DeleteAssetsByPathsInterface_execute___self' => 
    array (
      2 => 'remove_media_content_after_asset_is_removed_by_path',
    ),
    'Magento\\MediaGalleryApi\\Api\\DeleteAssetsByPathsInterface_execute_remove_media_content_after_asset_is_removed_by_path' => 
    array (
      4 => 
      array (
        0 => 'delete_renditions_on_assets_delete',
      ),
    ),
    'Magento\\MediaGalleryApi\\Api\\DeleteDirectoriesByPathsInterface_execute___self' => 
    array (
      2 => 'remove_media_content_after_asset_is_removed_by_directory_path',
    ),
    'Magento\\MediaGallerySynchronization\\Model\\Consume_execute___self' => 
    array (
      4 => 
      array (
        0 => 'synchronize_media_content',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Gallery\\Processor_removeImage___self' => 
    array (
      4 => 
      array (
        0 => 'media_gallery_image_remove_metadata',
      ),
    ),
    'Magento\\Cms\\Model\\Wysiwyg\\Images\\GetInsertImageContent_execute___self' => 
    array (
      1 => 
      array (
        0 => 'set_rendition_path',
      ),
    ),
    'Magento\\MediaGallerySynchronizationApi\\Model\\CreateAssetFromFileInterface_execute___self' => 
    array (
      4 => 
      array (
        0 => 'addMetadataToAssetCreatedFromFile',
      ),
    ),
    'Magento\\Framework\\App\\MaintenanceMode_set___self' => 
    array (
      4 => 
      array (
        0 => 'amqp_maintenance_mode',
      ),
    ),
    'Magento\\Framework\\App\\Http_catchException___self' => 
    array (
      1 => 
      array (
        0 => 'framework-http-newrelic',
      ),
    ),
    'Magento\\Framework\\App\\State_setAreaCode___self' => 
    array (
      4 => 
      array (
        0 => 'framework-state-newrelic',
      ),
    ),
    'Symfony\\Component\\Console\\Command\\Command_run___self' => 
    array (
      1 => 
      array (
        0 => 'newrelic-describe-commands',
      ),
    ),
    'Magento\\Framework\\Profiler\\Driver\\Standard\\Stat_start___self' => 
    array (
      1 => 
      array (
        0 => 'newrelic-describe-cronjobs',
      ),
    ),
    'Magento\\Framework\\Profiler\\Driver\\Standard\\Stat_stop___self' => 
    array (
      1 => 
      array (
        0 => 'newrelic-describe-cronjobs',
      ),
    ),
    'Magento\\Newsletter\\Model\\Subscriber_unsubscribe___self' => 
    array (
      4 => 
      array (
        0 => 'remove_subscriber_from_queue_after_unsubscribe',
      ),
    ),
    'Magento\\Newsletter\\Model\\Subscriber_delete___self' => 
    array (
      4 => 
      array (
        0 => 'mailchimp-subscriber',
      ),
    ),
    'Magento\\Newsletter\\Model\\Subscriber_loadBySubscriberEmail___self' => 
    array (
      4 => 
      array (
        0 => 'mailchimp-subscriber',
      ),
    ),
    'Magento\\Newsletter\\Model\\Subscriber_loadByCustomer___self' => 
    array (
      4 => 
      array (
        0 => 'mailchimp-subscriber',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Config_getProductAttributes___self' => 
    array (
      4 => 
      array (
        0 => 'append_sales_rule_keys_to_quote',
        1 => 'Amasty_Shiprules::ProductAttributes',
        2 => 'weltpixel-googletagmanager-quote-config',
      ),
    ),
    'Magento\\SalesRule\\Model\\Rule\\Condition\\Product\\Combine_getNewChildSelectOptions___self' => 
    array (
      4 => 
      array (
        0 => 'Amasty_Conditions::AdditionalProductConditions',
      ),
    ),
    'Magento\\Sales\\Model\\Service\\OrderService_cancel___self' => 
    array (
      4 => 
      array (
        0 => 'coupon_uses_decrement_plugin',
      ),
    ),
    'Magento\\CatalogWidget\\Block\\Product\\ProductsList_getImage___self' => 
    array (
      1 => 
      array (
        0 => 'add_product_object_to_image_data_array',
      ),
    ),
    'Magento\\CatalogWidget\\Block\\Product\\ProductsList_createCollection___self' => 
    array (
      4 => 
      array (
        0 => 'pagebuilder_product_list',
      ),
    ),
    'Magento\\CatalogWidget\\Block\\Product\\ProductsList_getCacheKeyInfo___self' => 
    array (
      4 => 
      array (
        0 => 'pagebuilder_product_list',
      ),
    ),
    'Magento\\CatalogWidget\\Block\\Product\\ProductsList_getIdentities___self' => 
    array (
      4 => 
      array (
        0 => 'pagebuilder_product_list',
      ),
    ),
    'Magento\\Sales\\Api\\Data\\OrderPaymentInterface_getExtensionAttributes___self' => 
    array (
      4 => 
      array (
        0 => 'PaymentVaultExtensionAttributeOperations',
      ),
    ),
    'Magento\\Checkout\\Api\\PaymentInformationManagementInterface_savePaymentInformation___self' => 
    array (
      1 => 
      array (
        0 => 'ProcessPaymentVaultInformationManagement',
        1 => 'swissupRecaptcha-validate',
      ),
    ),
    'Magento\\Checkout\\Api\\PaymentInformationManagementInterface_savePaymentInformationAndPlaceOrder___self' => 
    array (
      1 => 
      array (
        0 => 'validate-agreements',
        1 => 'swissupRecaptcha-validate',
      ),
    ),
    'Magento\\Payment\\Model\\Checks\\Composite_isApplicable___self' => 
    array (
      4 => 
      array (
        0 => 'paypal_specification',
      ),
    ),
    'Magento\\Sales\\Model\\Order_canInvoice___self' => 
    array (
      4 => 
      array (
        0 => 'express_order_invoice',
      ),
    ),
    'Magento\\Sales\\Model\\Order_save___self' => 
    array (
      4 => 
      array (
        0 => 'wesupply-toolbox-order',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Validation\\CanInvoice_validate___self' => 
    array (
      4 => 
      array (
        0 => 'express_order_invoice',
      ),
    ),
    'Magento\\Framework\\Session\\SessionStartChecker_check___self' => 
    array (
      4 => 
      array (
        0 => 'transparent_session_checker',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Payment_getExtensionAttributes___self' => 
    array (
      4 => 
      array (
        0 => 'PaymentVaultExtensionAttributeOperations',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Payment_accept___self' => 
    array (
      4 => 
      array (
        0 => 'paypal_transparent',
      ),
    ),
    'Magento\\Quote\\Model\\AddressAdditionalDataProcessor_process___self' => 
    array (
      1 => 
      array (
        0 => 'persistent_remember_me_checkbox_processor',
      ),
    ),
    'Magento\\Customer\\CustomerData\\Customer_getSectionData___self' => 
    array (
      2 => 'section_data',
    ),
    'Magento\\Catalog\\Model\\Product\\Gallery\\CreateHandler_execute___self' => 
    array (
      1 => 
      array (
        0 => 'external_video_media_entry_saver',
      ),
      4 => 
      array (
        0 => 'external_video_media_entry_saver',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Gallery\\ReadHandler_execute___self' => 
    array (
      4 => 
      array (
        0 => 'external_video_media_entry_reader',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Gallery_duplicate___self' => 
    array (
      4 => 
      array (
        0 => 'external_video_media_resource_backend',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Gallery_createBatchBaseSelect___self' => 
    array (
      4 => 
      array (
        0 => 'external_video_media_resource_backend',
      ),
    ),
    'Magento\\Checkout\\Api\\GuestPaymentInformationManagementInterface_savePaymentInformationAndPlaceOrder___self' => 
    array (
      1 => 
      array (
        0 => 'validate-guest-agreements',
        1 => 'swissupRecaptcha-guest-validate',
      ),
    ),
    'Magento\\Checkout\\Api\\GuestPaymentInformationManagementInterface_savePaymentInformation___self' => 
    array (
      1 => 
      array (
        0 => 'swissupRecaptcha-guest-validate',
      ),
    ),
    'Magento\\Framework\\GraphQl\\Query\\ResolverInterface_resolve___self' => 
    array (
      1 => 
      array (
        0 => 'graphql_recaptcha_validation',
      ),
    ),
    'Magento\\Webapi\\Controller\\Rest\\RequestValidator_validate___self' => 
    array (
      2 => 'rest_webapi_recaptcha_validation',
    ),
    'Magento\\Webapi\\Controller\\Soap\\Request\\Handler___call___self' => 
    array (
      1 => 
      array (
        0 => 'soap_webapi_recaptcha_validation',
      ),
    ),
    'Magento\\MediaStorage\\Model\\File\\Storage\\SynchronizationFactory_create___self' => 
    array (
      2 => 'remoteMediaStorageSynchronizationFactory',
    ),
    'Magento\\MediaGalleryMetadata\\Model\\IptcEmbed_get___self' => 
    array (
      1 => 
      array (
        0 => 'remoteIptcEmbed',
      ),
    ),
    'Magento\\MediaGalleryMetadata\\Model\\ExifReader_get___self' => 
    array (
      1 => 
      array (
        0 => 'remoteExifReader',
      ),
    ),
    'Magento\\MediaGallerySynchronization\\Model\\Filesystem\\GetFileInfo_execute___self' => 
    array (
      1 => 
      array (
        0 => 'remoteGetFileInfo',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Option\\Type\\File\\ExistingValidate_isValid___self' => 
    array (
      1 => 
      array (
        0 => 'remoteValidatorInfo',
      ),
    ),
    'Magento\\Framework\\Image\\Adapter\\AbstractAdapter_open___self' => 
    array (
      1 => 
      array (
        0 => 'remoteImageFile',
      ),
    ),
    'Magento\\Framework\\Image\\Adapter\\AbstractAdapter_validateUploadFile___self' => 
    array (
      1 => 
      array (
        0 => 'remoteImageFile',
      ),
    ),
    'Magento\\Framework\\Image\\Adapter\\AbstractAdapter_watermark___self' => 
    array (
      1 => 
      array (
        0 => 'remoteImageFile',
      ),
    ),
    'Magento\\Framework\\Image\\Adapter\\AbstractAdapter_save___self' => 
    array (
      2 => 'remoteImageFile',
    ),
    'Magento\\Framework\\Archive\\Zip_unpack___self' => 
    array (
      2 => 'remoteZipArchive',
    ),
    'Magento\\Framework\\Archive\\Zip_pack___self' => 
    array (
      2 => 'remoteZipArchive',
    ),
    'Magento\\ConfigurableProduct\\Model\\ResourceModel\\Product\\Type\\Configurable\\Product\\Collection_load___self' => 
    array (
      1 => 
      array (
        0 => 'catalogRulePriceForConfigurableProduct',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\CreditmemoDocumentFactory_createFromOrder___self' => 
    array (
      4 => 
      array (
        0 => 'sales_inventory_creditmemo_item_set_back_to_stock',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\CreditmemoDocumentFactory_createFromInvoice___self' => 
    array (
      4 => 
      array (
        0 => 'sales_inventory_creditmemo_item_set_back_to_stock',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Validation\\RefundOrderInterface_validate___self' => 
    array (
      4 => 
      array (
        0 => 'refundOrderValidationAfter',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Validation\\RefundInvoiceInterface_validate___self' => 
    array (
      4 => 
      array (
        0 => 'refundInvoiceValidationAfter',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Eav\\Attribute_beforeSave___self' => 
    array (
      1 => 
      array (
        0 => 'save_swatches_option_params',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Eav\\Attribute_afterSave___self' => 
    array (
      4 => 
      array (
        0 => 'save_swatches_option_params',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Eav\\Attribute_usesSource___self' => 
    array (
      4 => 
      array (
        0 => 'save_swatches_option_params',
      ),
    ),
    'Magento\\LayeredNavigation\\Block\\Navigation\\FilterRenderer_render___self' => 
    array (
      2 => 'swatches_layered_renderer',
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\OptionManagement_add___self' => 
    array (
      1 => 
      array (
        0 => 'swatches_product_attribute_optionmanagement_plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\OptionManagement_update___self' => 
    array (
      1 => 
      array (
        0 => 'swatches_product_attribute_optionmanagement_plugin',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address\\ToOrder_convert___self' => 
    array (
      1 => 
      array (
        0 => 'add_tax_to_order',
      ),
      4 => 
      array (
        0 => 'add_tax_to_order',
      ),
    ),
    'Magento\\Quote\\Model\\Cart\\TotalsConverter_process___self' => 
    array (
      4 => 
      array (
        0 => 'add_tax_details',
      ),
      2 => 'addGiftWrapInitialAmount',
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Listing\\DataProvider_getData___self' => 
    array (
      4 => 
      array (
        0 => 'taxSettingsProvider',
        1 => 'weeeSettingsProvider',
        2 => 'wishlistSettingsDataProvider',
      ),
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth\\Forgotpassword_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
      2 => 'admin_forgot_password_plugin',
    ),
    'Magento\\Captcha\\Observer\\CheckUserLoginBackendObserver_execute___self' => 
    array (
      2 => 'captcha_check_user_login_backend_observer_plugin',
    ),
    'Magento\\Captcha\\Observer\\ResetAttemptForBackendObserver_execute___self' => 
    array (
      2 => 'captcha_reset_attempt_for_backend_observer_plugin',
    ),
    'Magento\\Integration\\Model\\AdminTokenService_createAdminAccessToken___self' => 
    array (
      2 => 'admin_adobe_ims_admin_token_plugin',
    ),
    'Magento\\Webapi\\Model\\ServiceMetadata_getServicesConfig___self' => 
    array (
      4 => 
      array (
        0 => 'webapiServiceMetadataAsync',
      ),
    ),
    'Magento\\Webapi\\Model\\Cache\\Type\\Webapi_load___self' => 
    array (
      1 => 
      array (
        0 => 'webapiCacheAsync',
      ),
    ),
    'Magento\\Webapi\\Model\\Cache\\Type\\Webapi_save___self' => 
    array (
      1 => 
      array (
        0 => 'webapiCacheAsync',
      ),
    ),
    'Magento\\Webapi\\Model\\Cache\\Type\\Webapi_remove___self' => 
    array (
      1 => 
      array (
        0 => 'webapiCacheAsync',
      ),
    ),
    'Magento\\Webapi\\Controller\\Rest_dispatch___self' => 
    array (
      4 => 
      array (
        0 => 'append_no_store_cache_header',
      ),
      1 => 
      array (
        0 => 'webapiContorllerRestAsync',
        1 => 'configHash',
      ),
    ),
    'Magento\\AsynchronousOperations\\Model\\MassConsumerEnvelopeCallback_execute___self' => 
    array (
      2 => 'storeIdFieldForAsynchronousOperationsMassConsumerEnvelopeCallback',
    ),
    'Magento\\Webapi\\Model\\Config\\Converter_convert___self' => 
    array (
      4 => 
      array (
        0 => 'webapiResourceSecurity',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute\\RemoveProductAttributeData_removeData___self' => 
    array (
      2 => 'removeWeeAttributesData',
    ),
    'Magento\\Catalog\\Ui\\Component\\Listing\\Columns_prepare___self' => 
    array (
      4 => 
      array (
        0 => 'changeWeeColumnConfig',
      ),
    ),
    'Magento\\Wishlist\\Controller\\AbstractIndex_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Wishlist\\Controller\\AbstractIndex_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
      ),
    ),
    'Magento\\Framework\\View\\TemplateEngine\\Php_render___self' => 
    array (
      1 => 
      array (
        0 => 'Amasty_Base::AddEscaperToPhpRenderer',
        1 => 'Magefan_Community_Plugin_Magento_Framework_View_TemplateEngine_Php',
      ),
    ),
    'Magento\\Framework\\Setup\\Declaration\\Schema\\OperationsExecutor_execute___self' => 
    array (
      1 => 
      array (
        0 => 'Amasty_Base::execute-patches-before-schema-apply',
      ),
    ),
    'Magento\\Framework\\Config\\FileResolverByModule_get___self' => 
    array (
      4 => 
      array (
        0 => 'AmBase::FileResolverByModule',
      ),
    ),
    'Temando\\Shipping\\Observer\\SaveCheckoutFieldsObserver_execute___self' => 
    array (
      1 => 
      array (
        0 => 'Amasty_CashOnDelivery::Temando_Shipping_Observer_SaveCheckoutFieldsObserver',
      ),
    ),
    'Magento\\Checkout\\Model\\TotalsInformationManagement_calculate___self' => 
    array (
      4 => 
      array (
        0 => 'Amasty_Conditions::ExtensionAttributesResolver',
      ),
      2 => 'saveShipingMethodOnCalculate',
    ),
    'Magento\\Shipping\\Model\\Shipping_collectRates___self' => 
    array (
      4 => 
      array (
        0 => 'Amasty_Shiprules::Shipping',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address\\Rate_importShippingRate___self' => 
    array (
      1 => 
      array (
        0 => 'Amasty_Shiprules::ImportShippingRate',
      ),
      4 => 
      array (
        0 => 'Amasty_Shiprules::ImportShippingRate',
      ),
    ),
    'Magento\\Quote\\Model\\Quote_getItemById___self' => 
    array (
      2 => 'getItemById_Osc',
    ),
    'Magento\\Quote\\Model\\Quote_loadByIdWithoutStore___self' => 
    array (
      4 => 
      array (
        0 => 'updateQuoteStoreId',
      ),
    ),
    'Magento\\Quote\\Model\\Quote_beforeSave___self' => 
    array (
      1 => 
      array (
        0 => 'mailchimp-save-quote',
      ),
    ),
    'Magento\\Newsletter\\Controller\\Manage_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Newsletter\\Controller\\Manage\\Save_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
      4 => 
      array (
        0 => 'mailchimp-account-interest-group',
      ),
    ),
    'Magento\\Newsletter\\Model\\SubscriptionManager_unsubscribeCustomer___self' => 
    array (
      1 => 
      array (
        0 => 'mailchimp-subscriptionmanager',
      ),
    ),
    'Magento\\Newsletter\\Model\\SubscriptionManager_subscribeCustomer___self' => 
    array (
      1 => 
      array (
        0 => 'mailchimp-subscriptionmanager',
      ),
    ),
    'Magento\\Newsletter\\Model\\SubscriptionManager_subscribe___self' => 
    array (
      1 => 
      array (
        0 => 'mailchimp-subscriptionmanager',
      ),
    ),
    'Magento\\Newsletter\\Model\\SubscriptionManager_unsubscribe___self' => 
    array (
      1 => 
      array (
        0 => 'mailchimp-subscriptionmanager',
      ),
    ),
    'Magento\\SalesRule\\Model\\Coupon_afterDelete___self' => 
    array (
      4 => 
      array (
        0 => 'mailchimp-coupon',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Shipment_save___self' => 
    array (
      4 => 
      array (
        0 => 'mailchimp_save_shipment',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Invoice_save___self' => 
    array (
      4 => 
      array (
        0 => 'mailchimp_save_invoice',
      ),
    ),
    'Magento\\Framework\\Image_save___self' => 
    array (
      4 => 
      array (
        0 => 'Lof_NextGenImages::convertWebpAfterImageSave',
      ),
    ),
    'Magento\\AdminGws\\Model\\Models_cmsPageSaveBefore___self' => 
    array (
      2 => 'magefan_blog_plugin_admingws_model_models_plugin',
    ),
    'Magento\\UrlRewriteGraphQl\\Model\\Resolver\\AbstractEntityUrl_resolve___self' => 
    array (
      1 => 
      array (
        0 => 'graphql_recaptcha_validation',
      ),
    ),
    'Magento\\UrlRewriteGraphQl\\Model\\Resolver\\EntityUrl_resolve___self' => 
    array (
      1 => 
      array (
        0 => 'graphql_recaptcha_validation',
      ),
      4 => 
      array (
        0 => 'Magefan_BlogGraphQl_Plugin_Magento_UrlRewriteGraphQl_Model_Resolver_EntityUrl',
      ),
    ),
    'Magento\\UrlRewriteGraphQl\\Model\\Resolver\\Route_resolve___self' => 
    array (
      1 => 
      array (
        0 => 'graphql_recaptcha_validation',
      ),
      4 => 
      array (
        0 => 'Magefan_BlogGraphQl_Plugin_Magento_UrlRewriteGraphQl_Model_Resolver_EntityUrl',
      ),
    ),
    'Magento\\Quote\\Model\\CouponManagement_set___self' => 
    array (
      1 => 
      array (
        0 => 'mpace_coupon_management',
      ),
    ),
    'Magento\\Checkout\\Model\\ShippingInformationManagement_saveAddressInformation___self' => 
    array (
      1 => 
      array (
        0 => 'mpdt_saveDeliveryInformation',
        1 => 'save_delivery_estimations',
      ),
      2 => 'weltpixel-googletagmanager-checkout-shippinginformation',
    ),
    'Magento\\Customer\\Model\\Address_updateData___self' => 
    array (
      1 => 
      array (
        0 => 'setShouldIgnoreValidation',
      ),
      4 => 
      array (
        0 => 'setShouldIgnoreValidation',
      ),
    ),
    'Magento\\Checkout\\Helper\\Data_isAllowedGuestCheckout___self' => 
    array (
      4 => 
      array (
        0 => 'osc_allow_guest_checkout',
      ),
    ),
    'Magento\\Eav\\Model\\Attribute\\Data\\AbstractData_validateValue___self' => 
    array (
      1 => 
      array (
        0 => 'mposc_bypass_validate',
      ),
    ),
    'Magento\\Customer\\Model\\Attribute\\Data\\Postcode_validateValue___self' => 
    array (
      1 => 
      array (
        0 => 'mposc_bypass_validate',
      ),
      4 => 
      array (
        0 => 'mposc_bypass_validate_postcode',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteValidator_validateBeforeSubmit___self' => 
    array (
      1 => 
      array (
        0 => 'mposc_set_should_ignore_validation_quote',
      ),
    ),
    'Magento\\Bundle\\Block\\Catalog\\Product\\View\\Type\\Bundle\\Option_getData___self' => 
    array (
      1 => 
      array (
        0 => 'mposc_append_item_option',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View\\Options\\AbstractOptions_getOption___self' => 
    array (
      1 => 
      array (
        0 => 'mposc_append_item_layout',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address\\ToOrderAddress_convert___self' => 
    array (
      2 => 'mposc_convert_quote_address_to_order_address',
    ),
    'Magento\\Quote\\Model\\Quote\\Address\\CustomAttributeList_getAttributes___self' => 
    array (
      4 => 
      array (
        0 => 'mposc_add_custom_field_to_address',
      ),
    ),
    'Magento\\Customer\\Model\\Address\\CustomAttributeList_getAttributes___self' => 
    array (
      4 => 
      array (
        0 => 'mposc_add_custom_field_to_customer',
      ),
    ),
    'Magento\\Quote\\Model\\Cart\\Totals\\ItemConverter_modelToDataObject___self' => 
    array (
      4 => 
      array (
        0 => 'mpsoc_add_configurable_options',
      ),
    ),
    'Magento\\Framework\\Mail\\Template\\TransportBuilder_setTemplateOptions___self' => 
    array (
      1 => 
      array (
        0 => 'mageplaza_mail_template_transport_builder',
      ),
    ),
    'Magento\\Framework\\Mail\\Template\\TransportBuilder_setFrom___self' => 
    array (
      1 => 
      array (
        0 => 'mageplaza_mail_template_transport_builder',
      ),
    ),
    'Magento\\Framework\\Mail\\Template\\TransportBuilderByStore_setFromByStore___self' => 
    array (
      1 => 
      array (
        0 => 'mpsmtp_appTransportBuilder',
      ),
    ),
    'Magento\\CatalogGraphQl\\Model\\Resolver\\Products\\DataProvider\\ProductSearch\\ProductCollectionSearchCriteriaBuilder_build___self' => 
    array (
      2 => 'mpsmtp_search_criteria_builder',
    ),
    'Magento\\Framework\\View\\Asset\\Minification_getExcludes___self' => 
    array (
      4 => 
      array (
        0 => 'braintreeExcludeFromMinification',
      ),
    ),
    'Magento\\Checkout\\CustomerData\\ItemInterface_getItemData___self' => 
    array (
      4 => 
      array (
        0 => 'weltpixel_quickview_confirmation_itemgetdata',
      ),
    ),
    'Magento\\Checkout\\CustomerData\\AbstractItem_getItemData___self' => 
    array (
      4 => 
      array (
        0 => 'braintreeAddFlagForVirtualProducts',
        1 => 'weltpixel_quickview_confirmation_itemgetdata',
      ),
    ),
    'Magento\\Store\\Block\\Switcher_toHtml___self' => 
    array (
      1 => 
      array (
        0 => 'addViewModelBeforeToHtml',
      ),
    ),
    'Magento\\Csp\\Model\\Collector\\DynamicCollector_collect___self' => 
    array (
      4 => 
      array (
        0 => 'swissup_marketplace',
      ),
    ),
    'Magento\\Captcha\\Model\\CaptchaFactory_create___self' => 
    array (
      2 => 'createRecaptchaModel',
    ),
    'Swissup\\Askit\\Block\\Question\\AbstractForm_getCaptchaConfig___self' => 
    array (
      4 => 
      array (
        0 => 'swissup_recaptcha',
      ),
    ),
    'Magento\\Sales\\Api\\ShipmentTrackRepositoryInterface_save___self' => 
    array (
      4 => 
      array (
        0 => 'wesupply-toolbox-shipmenttrackrespository',
      ),
    ),
    'Magento\\Sales\\Api\\ShipmentTrackRepositoryInterface_delete___self' => 
    array (
      4 => 
      array (
        0 => 'wesupply-toolbox-shipmenttrackrespository',
      ),
    ),
    'Magento\\Customer\\Model\\Authentication_authenticate___self' => 
    array (
      4 => 
      array (
        0 => 'wesupply-toolbox_authentication',
      ),
    ),
    'Magento\\Quote\\Model\\Cart\\ShippingMethodConverter_modelToDataObject___self' => 
    array (
      4 => 
      array (
        0 => 'append_delivery_estimations',
      ),
    ),
    'Magento\\Checkout\\Block\\Checkout\\LayoutProcessor_process___self' => 
    array (
      4 => 
      array (
        0 => 'remove_estimations_shipping_address',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage\\Save_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
      ),
      2 => 'wesupply-giftmessage-admin-save',
    ),
    'Magento\\Framework\\View\\Asset\\PreProcessor\\Chain_getContent___self' => 
    array (
      4 => 
      array (
        0 => 'weltpixel-frontendoptions-view-asset-processor-chain',
      ),
    ),
    'Magento\\Checkout\\Model\\PaymentInformationManagement_savePaymentInformation___self' => 
    array (
      1 => 
      array (
        0 => 'ProcessPaymentVaultInformationManagement',
        1 => 'swissupRecaptcha-validate',
      ),
    ),
    'Magento\\Checkout\\Model\\PaymentInformationManagement_savePaymentInformationAndPlaceOrder___self' => 
    array (
      1 => 
      array (
        0 => 'validate-agreements',
        1 => 'swissupRecaptcha-validate',
      ),
      4 => 
      array (
        0 => 'weltpixel-googletagmanager-checkout-paymentinformation',
      ),
    ),
    'Magento\\Checkout\\Model\\GuestPaymentInformationManagement_savePaymentInformationAndPlaceOrder___self' => 
    array (
      1 => 
      array (
        0 => 'validate-guest-agreements',
        1 => 'swissupRecaptcha-guest-validate',
      ),
      4 => 
      array (
        0 => 'weltpixel-googletagmanager-checkout-guestpaymentinformation',
      ),
    ),
    'Magento\\Checkout\\Model\\GuestPaymentInformationManagement_savePaymentInformation___self' => 
    array (
      1 => 
      array (
        0 => 'swissupRecaptcha-guest-validate',
        1 => 'inject_guest_address_for_nologin',
      ),
    ),
    'Magento\\Wishlist\\Model\\Item_addToCart___self' => 
    array (
      4 => 
      array (
        0 => 'weltpixel-googletagmanager-wishlist-addtocart',
      ),
    ),
    'WeltPixel\\Quickview\\Model\\QuickviewMessages_afterSave___self' => 
    array (
      4 => 
      array (
        0 => 'reindex_ruleid_products',
      ),
    ),
    'Magento\\Theme\\CustomerData\\Messages_getSectionData___self' => 
    array (
      4 => 
      array (
        0 => 'weltpixel_cart_messages_remove',
      ),
    ),
    'Magento\\Framework\\View\\Element\\Message\\Renderer\\BlockRenderer_render___self' => 
    array (
      4 => 
      array (
        0 => 'weltpixel_cart_messages_remove_from_renderer',
      ),
    ),
    'Magento\\Framework\\Authorization_isAllowed___self' => 
    array (
      2 => 'customerAuthorization',
    ),
    'Magento\\Framework\\Authorization_isAllowed_customerAuthorization' => 
    array (
      2 => 'guestAuthorization',
    ),
    'Magento\\Framework\\App\\ResourceConnection_getTableName___self' => 
    array (
      4 => 
      array (
        0 => 'get_catalog_category_product_index_table_name',
        1 => 'get_catalog_product_price_index_table_name',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductCustomOptionRepositoryInterface_save___self' => 
    array (
      4 => 
      array (
        0 => 'updateProductCustomOptionsAttributes',
      ),
    ),
    'Magento\\Catalog\\Api\\CategoryRepositoryInterface_save___self' => 
    array (
      1 => 
      array (
        0 => 'category_authorization',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductLinkRepositoryInterface_save___self' => 
    array (
      4 => 
      array (
        0 => 'reindex_after_save_product_links',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductLinkRepositoryInterface_deleteById___self' => 
    array (
      4 => 
      array (
        0 => 'reindex_after_delete_by_id_product_links',
      ),
    ),
    'Magento\\Quote\\Model\\GuestCart\\GuestCartManagement_assignCustomer___self' => 
    array (
      1 => 
      array (
        0 => 'authorization',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order_load___self' => 
    array (
      4 => 
      array (
        0 => 'authorization',
      ),
    ),
    'Magento\\Sales\\Model\\Service\\InvoiceService_setCapture___self' => 
    array (
      4 => 
      array (
        0 => 'addTransactionCommentAfterCapture',
      ),
    ),
    'Magento\\Bundle\\Api\\ProductLinkManagementInterface_addChildByProductSku___self' => 
    array (
      4 => 
      array (
        0 => 'reindex_after_add_child_by_sku',
      ),
    ),
    'Magento\\Bundle\\Api\\ProductLinkManagementInterface_removeChild___self' => 
    array (
      4 => 
      array (
        0 => 'reindex_after_remove_child',
      ),
    ),
    'Magento\\Store\\Model\\Validation\\StoreCodeValidator_isValid___self' => 
    array (
      4 => 
      array (
        0 => 'check_if_parsed_store_code_is_valid',
      ),
    ),
    'Magento\\Framework\\Filter\\Template_filter___self' => 
    array (
      4 => 
      array (
        0 => 'convertBackgroundImages',
      ),
    ),
    'Magento\\Checkout\\Model\\GuestShippingInformationManagement_saveAddressInformation___self' => 
    array (
      4 => 
      array (
        0 => 'persistent_convert_customer_cart_to_guest_cart',
      ),
    ),
    'Magento\\ReCaptchaValidationApi\\Api\\ValidatorInterface_isValid___self' => 
    array (
      2 => 'webapi_recaptcha_validation_override',
    ),
  ),
);