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
      'reindex_customer_grid_after_website_remove' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerGridIndexAfterWebsiteDelete',
      ),
      'deleteCustomerGroupExcludedWebsiteAfterWebsiteDelete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\Website\\DeleteCustomerGroupExcludedWebsite',
      ),
      'reindex_after_delete_website' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Indexer\\Website',
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
      'security_admin_sessions_prolong' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Security\\Model\\Plugin\\AuthSession',
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
      'weltpixel-cms-pagerepository-validationcomposition' => 
      array (
        'sortOrder' => 0,
        'instance' => 'WeltPixel\\GoogleCards\\Plugin\\PageRepositoryValidationCompositionPlugin',
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
      'reindex_after_import' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Indexer\\ImportExport',
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
      'category_ui_form_url_key_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Plugin\\Catalog\\Block\\Adminhtml\\Category\\Tab\\Attributes',
      ),
      'google_optimizer_category_data_provider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GoogleOptimizer\\Model\\Plugin\\Catalog\\Category\\DataProvider',
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
      'store_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Store\\View',
      ),
      'update_cms_url_rewrites_after_store_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsUrlRewrite\\Plugin\\Cms\\Model\\Store\\View',
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
      'group_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Store\\Group',
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
      'product_save_rewrites_history_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\Helper',
      ),
      'Downloadable' => 
      array (
        'sortOrder' => 70,
        'instance' => 'Magento\\Downloadable\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\Plugin\\Downloadable',
      ),
      'Bundle' => 
      array (
        'sortOrder' => 60,
        'instance' => 'Magento\\Bundle\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\Plugin\\Bundle',
      ),
      'configurable' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\Plugin\\Configurable',
      ),
      'updateConfigurations' => 
      array (
        'sortOrder' => 60,
        'instance' => 'Magento\\ConfigurableProduct\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\Plugin\\UpdateConfigurations',
      ),
      'cleanConfigurationTmpImages' => 
      array (
        'sortOrder' => 999,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Product\\Initialization\\CleanConfigurationTmpImages',
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
      'invalidate_pagecache_after_update_product_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\Product\\Action\\UpdateAttributesFlushCache',
      ),
      'price_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Model\\Product\\Action',
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
      'apply_catalog_rules_after_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Indexer\\Product\\Save\\ApplyRules',
      ),
      'reload_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Model\\ResourceModel\\Product',
      ),
      'cleanups_wishlist_item_after_product_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Wishlist\\Plugin\\Model\\ResourceModel\\Product',
      ),
      'apply_quickviewmessages_rules_after_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'WeltPixel\\Quickview\\Plugin\\Indexer\\Product\\Save\\ApplyRules',
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
      'invalidate_pagecache_after_attribute_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\ResourceModel\\Attribute\\Save',
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
      'aroundVerifyIdentity' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\ReplaceVerifyIdentityWithImsPlugin',
      ),
      'user_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\UserSavePlugin',
      ),
      'change_perform_identity_check_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\PerformIdentityCheckMessagePlugin',
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
      'default_store_setter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\FrontController\\Plugin\\DefaultStore',
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
      'security_admin_sessions_login' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Security\\Model\\Plugin\\Auth',
      ),
      'pagebuilder_clear_editor_config_cache' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\PageBuilder\\Plugin\\ClearEditorConfigCache',
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
      'admin-order-placement-comment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerSales\\Plugin\\AdminAddCommentOnOrderPlacementPlugin',
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
      'change_product_attribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Indexer\\Product\\Attribute',
      ),
      'invalidate_caches_after_attribute_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Plugin\\Catalog\\CacheInvalidate',
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
      'revoke_admin_access_token' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\RevokeAdminAccessTokenPlugin',
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
      'update_configurable_product_total_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Model\\Order\\Invoice\\UpdateConfigurableProductTotalQty',
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
    'Magento\\Backend\\App\\AbstractAction' => 
    array (
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
      'weltpixel-advancedwishlist-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\AdvancedWishlist\\Plugin\\Utility',
      ),
      'weltpixel-ajaxinfinitescroll-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\AjaxInfiniteScroll\\Plugin\\Utility',
      ),
      'weltpixel-frontendoptions-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\FrontendOptions\\Plugin\\Utility',
      ),
      'weltpixel-customfooter-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CustomFooter\\Plugin\\Utility',
      ),
      'weltpixel-customheader-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CustomHeader\\Plugin\\Utility',
      ),
      'weltpixel-designelements-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\DesignElements\\Plugin\\Utility',
      ),
      'weltpixel-lazyloading-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\LazyLoading\\Plugin\\Utility',
      ),
      'weltpixel-fullpagescroll-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\FullPageScroll\\Plugin\\Utility',
      ),
      'weltpixel-googlecards-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\GoogleCards\\Plugin\\Utility',
      ),
      'weltpixel-googletagmanager-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\Utility',
      ),
      'weltpixel-instagramwidget-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\InstagramWidget\\Plugin\\Utility',
      ),
      'weltpixel-owlcarouselslider-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\OwlCarouselSlider\\Plugin\\Utility',
      ),
      'weltpixel-newsletter-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\Newsletter\\Plugin\\Utility',
      ),
      'weltpixel-categorypage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CategoryPage\\Plugin\\Utility',
      ),
      'weltpixel-productpage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\ProductPage\\Plugin\\Utility',
      ),
      'weltpixel-quickcart-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\QuickCart\\Plugin\\Utility',
      ),
      'weltpixel-quickview-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\Quickview\\Plugin\\Utility',
      ),
      'weltpixel-searchautocomplete-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SearchAutoComplete\\Plugin\\Utility',
      ),
      'weltpixel-sociallogin-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SocialLogin\\Plugin\\Utility',
      ),
      'weltpixel-speedoptimization-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SpeedOptimization\\Plugin\\Utility',
      ),
      'weltpixel-thankyoupage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\ThankYouPage\\Plugin\\Utility',
      ),
    ),
    'Magento\\Framework\\App\\Action\\Action' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'disabled' => true,
      ),
    ),
    'Magento\\Eav\\Model\\Adminhtml\\System\\Config\\Source\\Inputtype' => 
    array (
      'process_page_builder_input_type' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Model\\Eav\\Adminhtml\\System\\Config\\Source\\InputtypePlugin',
      ),
      'append_compatible_input_types' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Plugin\\Eav\\System\\Config\\Source\\InputtypePlugin',
      ),
    ),
    'Magento\\Ui\\Model\\Export\\MetadataProvider' => 
    array (
      'orderGridExportFilterColumnPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Plugin\\Model\\Export\\OrderGridExportFilterColumn',
      ),
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth\\Login' => 
    array (
      'security_login_form' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Security\\Model\\Plugin\\LoginController',
      ),
    ),
    'Magento\\User\\Model\\UserValidationRules' => 
    array (
      'user_expiration_validator' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Security\\Model\\Plugin\\UserValidationRules',
      ),
      'remove_user_validation_rules' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\RemoveUserValidationRulesPlugin',
      ),
    ),
    'Magento\\User\\Block\\User\\Edit\\Tab\\Main' => 
    array (
      'user_expiration_user_form_field' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Security\\Model\\Plugin\\AdminUserForm',
      ),
      'admin_adobe_ims_reauth_button_user_edit' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\Block\\Adminhtml\\User\\Edit\\Tab\\AddReAuthVerification',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Action\\Full' => 
    array (
      'invalidate_pagecache_after_full_reindex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\Indexer\\Category\\Product\\Execute',
      ),
    ),
    'Magento\\Eav\\Api\\AttributeSetRepositoryInterface' => 
    array (
      'remove_products' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\AttributeSetRepository\\RemoveProducts',
      ),
    ),
    'Magento\\Catalog\\Model\\ProductLink\\Search' => 
    array (
      'processOutOfStockProducts' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Plugin\\ProductSearch',
      ),
    ),
    'Magento\\CatalogRule\\Model\\Rule' => 
    array (
      'addVariationsToProductRule' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleConfigurable\\Plugin\\CatalogRule\\Model\\Rule\\ConfigurableProductHandler',
      ),
      'configurableChildValidation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleConfigurable\\Plugin\\CatalogRule\\Model\\Rule\\Validation',
      ),
    ),
    'Magento\\Catalog\\Model\\Category' => 
    array (
      'apply_after_products_assign' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Indexer\\Category',
      ),
      'apply_quickviewmessages_after_products_assign' => 
      array (
        'sortOrder' => 0,
        'instance' => 'WeltPixel\\Quickview\\Plugin\\Indexer\\Category',
      ),
    ),
    'Magento\\Customer\\Model\\Group' => 
    array (
      'reindex_after_delete_customer_group' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Indexer\\CustomerGroup',
      ),
    ),
    'Magento\\Bundle\\Block\\Adminhtml\\Catalog\\Product\\Edit\\Tab\\Attributes' => 
    array (
      'bundle_msrp_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Msrp\\Plugin\\Bundle\\Block\\Adminhtml\\Catalog\\Product\\Edit\\Tab\\Attributes',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Attribute\\Edit\\Tab\\Front' => 
    array (
      'search_weigh' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Block\\Plugin\\FrontTabPlugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Edit\\Tab\\Attributes' => 
    array (
      'product_form_url_key_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Plugin\\Catalog\\Block\\Adminhtml\\Product\\Edit\\Tab\\Attributes',
      ),
    ),
    'Magento\\Framework\\View\\Element\\UiComponent\\DataProvider\\SearchResult' => 
    array (
      'orderGridCollectionFilterPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Plugin\\Model\\ResourceModel\\Order\\OrderGridCollectionFilter',
      ),
    ),
    'Magento\\Framework\\View\\TemplateEngineFactory' => 
    array (
      'debug_hints' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Developer\\Model\\TemplateEngine\\Plugin\\DebugHints',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Sidebar\\AbstractSidebar' => 
    array (
      'Bundle' => 
      array (
        'sortOrder' => 200,
        'instance' => 'Magento\\Bundle\\Block\\Adminhtml\\Order\\Create\\Sidebar',
      ),
      'GroupedProduct' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\GroupedProduct\\Block\\Adminhtml\\Order\\Create\\Sidebar',
      ),
      'configurable' => 
      array (
        'sortOrder' => 200,
        'instance' => 'Magento\\ConfigurableProduct\\Block\\Adminhtml\\Order\\Create\\Sidebar',
      ),
    ),
    'Magento\\Bundle\\Model\\ResourceModel\\Selection\\Collection' => 
    array (
      'Bundle' => 
      array (
        'sortOrder' => 60,
        'instance' => 'Magento\\Bundle\\Model\\ResourceModel\\Selection\\Plugin\\Collection',
      ),
    ),
    'Magento\\Framework\\Data\\Form\\Element\\Fieldset' => 
    array (
      'Bundle' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Bundle\\Plugin\\Framework\\Data\\Form\\Element\\FieldsetPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\AdminOrder\\Product\\Quote\\Initializer' => 
    array (
      'sales_adminorder_quote_initializer_plugin' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\GroupedProduct\\Model\\Sales\\AdminOrder\\Product\\Quote\\Plugin\\Initializer',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Builder' => 
    array (
      'configurable' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Controller\\Adminhtml\\Product\\Builder\\Plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Validator' => 
    array (
      'configurable' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Product\\Validator\\Plugin',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Button\\ToolbarInterface' => 
    array (
      'login_as_customer_button_toolbar' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerAdminUi\\Plugin\\Button\\ToolbarPlugin',
      ),
    ),
    'Magento\\Customer\\Model\\Customer\\DataProviderWithDefaultAddresses' => 
    array (
      'login_as_customer_customer_data_provider_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerAssistance\\Plugin\\DataProviderWithDefaultAddressesPlugin',
      ),
    ),
    'Magento\\Customer\\Model\\Metadata\\Form' => 
    array (
      'login_as_customer_customer_data_validate_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerAssistance\\Plugin\\CustomerDataValidatePlugin',
      ),
    ),
    'Magento\\LoginAsCustomerAdminUi\\Ui\\Customer\\Component\\Button\\DataProvider' => 
    array (
      'login_as_customer_button_data_provider_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerAssistance\\Plugin\\LoginAsCustomerButtonDataProviderPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\ImageUploader' => 
    array (
      'save_category_image' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryCatalogIntegration\\Plugin\\SaveBaseCategoryImageInformation',
      ),
    ),
    'Magento\\Ui\\Component\\Form\\Element\\DataType\\Media\\OpenDialogUrl' => 
    array (
      'new_media_gallery_open_dialog_url' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryIntegration\\Plugin\\NewMediaGalleryOpenDialogUrl',
      ),
    ),
    'Magento\\Framework\\File\\Uploader' => 
    array (
      'save_asset_image' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryIntegration\\Plugin\\SaveImageInformation',
      ),
    ),
    'Magento\\Cms\\Block\\Adminhtml\\Wysiwyg\\Images\\Content' => 
    array (
      'add_search_button' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdobeStockImageAdminUi\\Plugin\\AddSearchButton',
      ),
    ),
    'Magento\\MediaGalleryUi\\Model\\GetDetailsByAssetId' => 
    array (
      'add_adobe_stock_image_details_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdobeStockImageAdminUi\\Plugin\\AddAdobeStockImageDetailsPlugin',
      ),
    ),
    'Magento\\MediaGalleryUi\\Ui\\Component\\Listing\\Columns\\Source\\Options' => 
    array (
      'add_adobe_stock_source_option_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdobeStockImageAdminUi\\Plugin\\AddAdobeStockSourceOptionPlugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\ImageFactory' => 
    array (
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\DesignLoader',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Frontend\\Inputtype\\Presentation' => 
    array (
      'process_page_builder' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Model\\Eav\\Attribute\\PresentationPlugin',
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
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Form\\Modifier\\Eav' => 
    array (
      'pagebuilder_product_form_eav' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Catalog\\Ui\\DataProvider\\Product\\Form\\Modifier\\EavPlugin',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Structure' => 
    array (
      'paypal_system_configuration' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Model\\Config\\StructurePlugin',
      ),
      'Amasty_Base:advertise' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Base\\Plugin\\Backend\\Model\\Config\\StructurePlugin',
      ),
      'Amasty_Base:infoblock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Base\\Plugin\\Backend\\Model\\Config\\AddInformationBlockPlugin',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Structure\\Element\\Field' => 
    array (
      'paypal_system_configuration_field' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Model\\Config\\Structure\\Element\\FieldPlugin',
      ),
    ),
    'Magento\\Backend\\Block\\Store\\Switcher' => 
    array (
      'paypal_store_switcher' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Block\\Adminhtml\\Store\\SwitcherPlugin',
      ),
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed\\Index' => 
    array (
      'adminAuthentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Rss\\App\\Action\\Plugin\\BackendAuthentication',
      ),
    ),
    'Magento\\CatalogRule\\Model\\Indexer\\Product\\ProductRuleIndexer' => 
    array (
      'productRuleReindex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleConfigurable\\Plugin\\CatalogRule\\Model\\Indexer\\ProductRuleReindex',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute\\Save' => 
    array (
      'save_swatches_frontend_input' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Controller\\Adminhtml\\Product\\Attribute\\Plugin\\Save',
      ),
    ),
    'Magento\\AdminNotification\\Model\\ResourceModel\\System\\Message\\Collection\\Synchronized' => 
    array (
      'afterToArray' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsynchronousOperations\\Model\\ResourceModel\\System\\Message\\Collection\\Synchronized\\Plugin',
      ),
    ),
    'Magento\\AdminNotification\\Ui\\Component\\DataProvider\\DataProvider' => 
    array (
      'afterGetMeta' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsynchronousOperations\\Ui\\Component\\AdminNotification\\Plugin',
      ),
    ),
    'Magento\\Cms\\Model\\Page\\DataProvider' => 
    array (
      'google_optimizer_cms_page_data_provider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GoogleOptimizer\\Model\\Plugin\\Cms\\Page\\DataProvider',
      ),
      'weltpixel-add-og-image-to-form' => 
      array (
        'sortOrder' => 0,
        'instance' => 'WeltPixel\\GoogleCards\\Plugin\\PageDataProviderPlugin',
      ),
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Form\\NewCategoryDataProvider' => 
    array (
      'google_optimizer_product_new_category_data_provider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GoogleOptimizer\\Model\\Plugin\\Catalog\\Product\\Category\\DataProvider',
      ),
    ),
    'Magento\\Framework\\View\\Result\\Layout' => 
    array (
      'add_adobe_ims_layout_handle' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\AddAdobeImsLayoutHandlePlugin',
      ),
    ),
    'Magento\\User\\Model\\Backend\\Config\\ObserverConfig' => 
    array (
      'disable_password_reset' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\DisablePasswordResetPlugin',
      ),
      'disable_forced_password_change' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\DisableForcedPasswordChangePlugin',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Form' => 
    array (
      'remove_password_and_user_confirmation_form_fields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\RemovePasswordAndUserConfirmationFormFieldsPlugin',
      ),
    ),
    'Magento\\Security\\Model\\AdminSessionsManager' => 
    array (
      'keep_other_user_sessions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\OtherUserSessionPlugin',
      ),
    ),
    'Magento\\Backend\\Block\\System\\Account\\Edit\\Form' => 
    array (
      'admin_adobe_ims_reauth_button_account_edit' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\Block\\Adminhtml\\System\\Account\\Edit\\AddReAuthVerification',
      ),
    ),
    'Magento\\User\\Block\\Role\\Tab\\Info' => 
    array (
      'admin_adobe_ims_reauth_button_role_edit' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\Block\\Adminhtml\\User\\Role\\Tab\\AddReAuthVerification',
      ),
    ),
    'Magento\\AdobeIms\\Block\\Adminhtml\\SignIn' => 
    array (
      'authentication_component_config' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\Block\\Adminhtml\\SignInPlugin',
      ),
    ),
    'Magento\\Integration\\Block\\Adminhtml\\Integration\\Edit\\Tab\\Info' => 
    array (
      'admin_adobe_ims_reauth_button_integration_edit' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\Block\\Adminhtml\\Integration\\Edit\\Tab\\AddReAuthVerification',
      ),
    ),
    'Magento\\Shipping\\Block\\Adminhtml\\Order\\Packaging' => 
    array (
      'usps' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Usps\\Block\\Adminhtml\\Order\\Packaging\\Plugin\\DisplayGirth',
      ),
    ),
    'Magento\\Wishlist\\Model\\Wishlist' => 
    array (
      'weltpixel-advancedwishlist-adminhtml-wishlist' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\AdvancedWishlist\\Plugin\\Adminhtml\\Wishlist',
      ),
    ),
    'Magento\\AdminNotification\\Block\\Grid\\Renderer\\Actions' => 
    array (
      'Amasty_Base::show-unsubscribe-link' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Base\\Plugin\\AdminNotification\\Block\\Grid\\Renderer\\Actions',
      ),
    ),
    'Magento\\AdminNotification\\Block\\Grid\\Renderer\\Notice' => 
    array (
      'Amasty_Base::add-amasty-class' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Base\\Plugin\\AdminNotification\\Block\\Grid\\Renderer\\Notice',
      ),
    ),
    'Magento\\AdminNotification\\Block\\ToolbarEntry' => 
    array (
      'Amasty_Base::add-amasty-class-logo' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Base\\Plugin\\AdminNotification\\Block\\ToolbarEntry',
      ),
    ),
    'Magento\\Config\\Block\\System\\Config\\Form\\Field' => 
    array (
      'Amasty_Base::replace-image-path' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Base\\Plugin\\Config\\Block\\System\\Config\\Form\\Field',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Form\\Element\\Dependence' => 
    array (
      'Amasty_Base::fix-dependence' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Base\\Plugin\\Adminhtml\\Block\\Widget\\Form\\Element\\Dependence',
      ),
    ),
    'Magento\\Backend\\Model\\Menu\\Builder' => 
    array (
      'Amasty_Base::menu_builder' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Base\\Plugin\\Backend\\Model\\Menu\\Builder',
      ),
      'Magefan_Community_Plugin_Magento_Backend_Model_Menu_Builder' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magefan\\Community\\Plugin\\Magento\\Backend\\Model\\Menu\\BuilderPlugin',
      ),
    ),
    'Magento\\Config\\Block\\System\\Config\\Tabs' => 
    array (
      'Amasty_Base::build_amasty_tabs' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Base\\Plugin\\Config\\Block\\System\\Config\\BuildAmastyTabsPlugin',
      ),
    ),
    'Magento\\Payment\\Helper\\Data' => 
    array (
      'Amasty_Conditions::payment_helper_getlist' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Conditions\\Plugin\\Payment\\Helper\\Data',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Button\\Toolbar' => 
    array (
      'elsener_paytrace_custombutton_for_sales_order_view' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Elsnertech\\Paytrace\\Plugin\\Block\\Adminhtml\\Payment\\View',
      ),
    ),
    'Magento\\Ui\\Component\\Wysiwyg\\ConfigInterface' => 
    array (
      'Magefan_WysiwygAdvanced_Plugin_Magento_Ui_Component_Wysiwyg_ConfigInterface' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'Magefan\\WysiwygAdvanced\\Plugin\\Magento\\Ui\\Component\\Wysiwyg\\ConfigPlugin',
      ),
    ),
    'Magento\\PageBuilder\\Model\\ConfigInterface' => 
    array (
      'Magefan_WysiwygAdvanced_Plugin_Backend_Magento_PageBuilder_Model_ConfigInterface' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'Magefan\\WysiwygAdvanced\\Plugin\\Magento\\PageBuilder\\Model\\ConfigInterface',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Structure\\Data' => 
    array (
      'mageplaza_module_activate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Core\\Model\\Config\\Structure\\Data',
      ),
    ),
    'Magento\\Backend\\Model\\Menu\\Builder\\AbstractCommand' => 
    array (
      'mageplaza_move_menu' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Core\\Plugin\\MoveMenu',
      ),
    ),
    'Mageplaza\\Reports\\Block\\Dashboard\\ConversionFunnel' => 
    array (
      'addViewDetailLink' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\AbandonedCart\\Plugin\\ConversionFunnel',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Grid\\Collection' => 
    array (
      'mp_ace_blacklist_add_to_customer_grid' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\AbandonedCart\\Plugin\\Model\\ResourceModel\\Grid\\Collection',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Grid\\Column\\Filter\\Datetime' => 
    array (
      'fix_send_date_overall_report_grid' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\AbandonedCart\\Plugin\\Block\\Widget\\Grid\\Column\\Filter\\Datetime',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View\\Tab\\Info' => 
    array (
      'mp_delivery_information' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\DeliveryTime\\Block\\Adminhtml\\Plugin\\OrderViewTabInfo',
      ),
      'osc_additional_content' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Osc\\Block\\Adminhtml\\Plugin\\OrderViewTabInfo',
      ),
    ),
    'Magento\\Ui\\Component\\Listing\\Columns\\Column' => 
    array (
      'osc_customer_grid' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Osc\\Model\\Plugin\\Ui\\Component\\Listing\\Column',
      ),
    ),
    'Magento\\Email\\Model\\Template\\Config' => 
    array (
      'mageplaza_smtp_template_abandoned_cart' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Smtp\\Plugin\\Model\\Template\\Config',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Grid\\Collection' => 
    array (
      'braintreeSalesOrderGrid' => 
      array (
        'sortOrder' => 0,
        'instance' => '\\PayPal\\Braintree\\Plugin\\SalesOrderGridPlugin',
      ),
    ),
    'Magento\\Config\\Model\\Config' => 
    array (
      'admin_system_config_save_plugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeSupply\\Toolbox\\Plugin\\ConfigPlugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\AddressSave' => 
    array (
      'wesupply-toolbox-address-save' => 
      array (
        'sortOrder' => 5,
        'instance' => 'WeSupply\\Toolbox\\Plugin\\AddressSave',
      ),
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\AddTrack' => 
    array (
      'wesupply_tracking_number_added_plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'WeSupply\\Toolbox\\Plugin\\Controller\\Adminhtml\\Order\\Shipment\\AddTrackPlugin',
      ),
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\RemoveTrack' => 
    array (
      'wesupply_tracking_number_deleted_plugin' => 
      array (
        'sortOrder' => 20,
        'instance' => 'WeSupply\\Toolbox\\Plugin\\Controller\\Adminhtml\\Order\\Shipment\\RemoveTrackPlugin',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View' => 
    array (
      'wesupply_external_links' => 
      array (
        'sortOrder' => 0,
        'instance' => 'WeSupply\\Toolbox\\Plugin\\Adminhtml\\Block\\Order\\ViewPlugin',
      ),
    ),
    'Magento\\CatalogStaging\\Model\\Category\\DataProvider' => 
    array (
      'weltpixel-backend-categorystaging-dataprovider' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\Backend\\Plugin\\CategoryStaging\\DataProvider',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Sidebar\\Wishlist' => 
    array (
      'weltpixel-advancedwishlist-adminhtml-order-wishlist' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\AdvancedWishlist\\Plugin\\Adminhtml\\OrderWishlist',
      ),
    ),
    'Magento\\Cms\\Model\\PageRepository' => 
    array (
      'weltpixel-save-og-image' => 
      array (
        'sortOrder' => 0,
        'instance' => 'WeltPixel\\GoogleCards\\Plugin\\PageRepositoryPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockItemRepositoryInterface' => 
    array (
      'apply_quickviewmessages_rules_after_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'WeltPixel\\Quickview\\Plugin\\Indexer\\StockItem\\Save\\ApplyRules',
      ),
    ),
    'Magento\\CatalogRule\\Model\\Rule\\Condition\\Product' => 
    array (
      'apply_quickviewmessages_quantity_combination_assign' => 
      array (
        'sortOrder' => 0,
        'instance' => 'WeltPixel\\Quickview\\Plugin\\Indexer\\ConditionProduct',
      ),
    ),
  ),
  1 => 
  array (
    'CustomerGirdFilterPool' => NULL,
    'CustomerGridCollectionReporting' => NULL,
    'Magento\\Cms\\Ui\\Component\\Form\\Field\\PageLayout' => NULL,
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\ProductCollectionFactory' => NULL,
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Form\\Modifier\\Pool' => NULL,
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Listing\\Modifier\\Pool' => NULL,
    'Magento\\Catalog\\Ui\\Component\\Form\\Field\\Category\\PageLayout' => NULL,
    'Magento\\CatalogSearch\\Model\\Session\\Storage' => NULL,
    'Magento\\CatalogSearch\\Model\\Session' => NULL,
    'Magento\\MediaGalleryUi\\Model\\Api\\SearchCriteria\\CollectionProcessor\\FilterProcessor' => NULL,
    'Magento\\MediaGalleryUi\\Model\\Api\\SearchCriteria\\CollectionProcessor\\SortingProcessor' => NULL,
    'Magento\\MediaGalleryUi\\Model\\Api\\SearchCriteria\\CollectionProcessor\\PaginationProcessor' => NULL,
    'Magento\\MediaGalleryUi\\Model\\Api\\SearchCriteria\\CollectionProcessor\\JoinProcessor' => NULL,
    'Magento\\MediaGalleryUi\\Model\\Api\\SearchCriteria\\CollectionProcessor' => NULL,
    'Magento\\Catalog\\Ui\\BaseAllowedProductTypes' => NULL,
    'Magento\\Config\\Model\\Config\\Source\\Email\\Template\\Header' => NULL,
    'Magento\\Config\\Model\\Config\\Source\\Email\\Template\\Footer' => NULL,
    'Magento\\MediaGalleryCatalogUi\\Model\\SearchCriteria\\CollectionProcessor\\FilterProcessor\\Product' => NULL,
    'Magento\\MediaGalleryCatalogUi\\Model\\SearchCriteria\\CollectionProcessor\\FilterProcessor\\Category' => NULL,
    'Magento\\MediaGalleryCmsUi\\Model\\SearchCriteria\\CollectionProcessor\\FilterProcessor\\Page' => NULL,
    'Magento\\MediaGalleryCmsUi\\Model\\SearchCriteria\\CollectionProcessor\\FilterProcessor\\Block' => NULL,
    'Magento\\PageBuilder\\Block\\Adminhtml\\ContentType\\Edit\\ModalCloseButton' => NULL,
    'AlignmentSource' => NULL,
    'Magento\\PageBuilder\\Model\\Source\\VideoAlignmentSource' => NULL,
    'TabAlignmentSource' => NULL,
    'Magento\\PageBuilder\\Model\\Source\\VerticalAlignment' => NULL,
    'AppearanceSourceBanner' => NULL,
    'AppearanceSourceBlock' => NULL,
    'AppearanceSourceButtons' => NULL,
    'AppearanceSourceButtonItem' => NULL,
    'AppearanceSourceColumn' => NULL,
    'AppearanceSourceColumnGroup' => NULL,
    'AppearanceSourceDivider' => NULL,
    'AppearanceSourceHeading' => NULL,
    'AppearanceSourceHtml' => NULL,
    'AppearanceSourceImage' => NULL,
    'AppearanceSourceMap' => NULL,
    'AppearanceSourceProducts' => NULL,
    'AppearanceSourceRow' => NULL,
    'AppearanceSourceSlide' => NULL,
    'AppearanceSourceSlider' => NULL,
    'AppearanceSourceTabItem' => NULL,
    'AppearanceSourceTabs' => NULL,
    'AppearanceSourceText' => NULL,
    'AppearanceSourceVideo' => NULL,
    'BackgroundSizeSource' => NULL,
    'BackgroundTypeSource' => NULL,
    'CarouselModeSource' => NULL,
    'Magento\\PageBuilder\\Model\\Config\\ContentType\\AdditionalData\\Provider\\Wysiwyg\\BannerConfig' => NULL,
    'ImageMaxFileSizeDesktop' => NULL,
    'Magento\\PageBuilder\\Component\\Form\\Element\\CategoryWysiwyg' => NULL,
    'Magento\\Paypal\\Model\\Session\\Storage' => NULL,
    'Magento\\Paypal\\Model\\Session' => NULL,
    'Magento\\Paypal\\Model\\PayflowSession\\Storage' => NULL,
    'Magento\\Paypal\\Model\\PayflowSession' => NULL,
    'Magento\\Swatches\\Block\\Adminhtml\\Product\\Attribute\\Edit\\FormFactory' => NULL,
    'Magento\\GoogleOptimizer\\Block\\Adminhtml\\Form\\CmsPage' => NULL,
    'Magento\\Wishlist\\Model\\Session\\Storage' => NULL,
    'Magento\\Wishlist\\Model\\Session' => NULL,
    'ModuleImageUploader' => NULL,
    'Magento\\Payment\\Gateway\\Request\\BuilderInterface' => NULL,
    'Magento\\Payment\\Gateway\\Request\\BuilderComposite' => NULL,
    'BraintreeAuthorizeRequest' => NULL,
    'BraintreeVaultAuthorizeRequest' => NULL,
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
      'default_store_setter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\FrontController\\Plugin\\DefaultStore',
      ),
      'configHash' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Deploy\\Model\\Plugin\\ConfigChangeDetector',
      ),
    ),
    'Magento\\Framework\\App\\FrontController' => 
    array (
      'default_store_setter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\FrontController\\Plugin\\DefaultStore',
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
      'reindex_customer_grid_after_website_remove' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerGridIndexAfterWebsiteDelete',
      ),
      'deleteCustomerGroupExcludedWebsiteAfterWebsiteDelete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\Website\\DeleteCustomerGroupExcludedWebsite',
      ),
      'reindex_after_delete_website' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Indexer\\Website',
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
      'security_admin_sessions_prolong' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Security\\Model\\Plugin\\AuthSession',
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
    'Magento\\Cms\\Api\\PageRepositoryInterface' => NULL,
    'Magento\\Cms\\Model\\PageRepository\\ValidationComposite' => 
    array (
      'weltpixel-cms-pagerepository-validationcomposition' => 
      array (
        'sortOrder' => 0,
        'instance' => 'WeltPixel\\GoogleCards\\Plugin\\PageRepositoryValidationCompositionPlugin',
      ),
      'cms_validate_url_plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CmsUrlRewrite\\Plugin\\Cms\\Model\\PageRepository\\ValidationCompositePlugin',
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
      'reindex_after_import' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Indexer\\ImportExport',
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
      'category_ui_form_url_key_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Plugin\\Catalog\\Block\\Adminhtml\\Category\\Tab\\Attributes',
      ),
      'google_optimizer_category_data_provider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GoogleOptimizer\\Model\\Plugin\\Catalog\\Category\\DataProvider',
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
      'store_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Store\\View',
      ),
      'update_cms_url_rewrites_after_store_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsUrlRewrite\\Plugin\\Cms\\Model\\Store\\View',
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
      'group_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Store\\Group',
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
      'product_save_rewrites_history_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\Helper',
      ),
      'configurable' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\Plugin\\Configurable',
      ),
      'Bundle' => 
      array (
        'sortOrder' => 60,
        'instance' => 'Magento\\Bundle\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\Plugin\\Bundle',
      ),
      'updateConfigurations' => 
      array (
        'sortOrder' => 60,
        'instance' => 'Magento\\ConfigurableProduct\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\Plugin\\UpdateConfigurations',
      ),
      'Downloadable' => 
      array (
        'sortOrder' => 70,
        'instance' => 'Magento\\Downloadable\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\Plugin\\Downloadable',
      ),
      'cleanConfigurationTmpImages' => 
      array (
        'sortOrder' => 999,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Product\\Initialization\\CleanConfigurationTmpImages',
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
      'invalidate_pagecache_after_update_product_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\Product\\Action\\UpdateAttributesFlushCache',
      ),
      'price_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Model\\Product\\Action',
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
        'disabled' => true,
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
      'weltpixel-advancedwishlist-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\AdvancedWishlist\\Plugin\\Utility',
      ),
      'weltpixel-ajaxinfinitescroll-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\AjaxInfiniteScroll\\Plugin\\Utility',
      ),
      'weltpixel-frontendoptions-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\FrontendOptions\\Plugin\\Utility',
      ),
      'weltpixel-customfooter-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CustomFooter\\Plugin\\Utility',
      ),
      'weltpixel-customheader-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CustomHeader\\Plugin\\Utility',
      ),
      'weltpixel-designelements-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\DesignElements\\Plugin\\Utility',
      ),
      'weltpixel-lazyloading-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\LazyLoading\\Plugin\\Utility',
      ),
      'weltpixel-fullpagescroll-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\FullPageScroll\\Plugin\\Utility',
      ),
      'weltpixel-googlecards-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\GoogleCards\\Plugin\\Utility',
      ),
      'weltpixel-googletagmanager-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\Utility',
      ),
      'weltpixel-instagramwidget-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\InstagramWidget\\Plugin\\Utility',
      ),
      'weltpixel-owlcarouselslider-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\OwlCarouselSlider\\Plugin\\Utility',
      ),
      'weltpixel-newsletter-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\Newsletter\\Plugin\\Utility',
      ),
      'weltpixel-categorypage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CategoryPage\\Plugin\\Utility',
      ),
      'weltpixel-productpage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\ProductPage\\Plugin\\Utility',
      ),
      'weltpixel-quickcart-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\QuickCart\\Plugin\\Utility',
      ),
      'weltpixel-quickview-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\Quickview\\Plugin\\Utility',
      ),
      'weltpixel-searchautocomplete-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SearchAutoComplete\\Plugin\\Utility',
      ),
      'weltpixel-sociallogin-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SocialLogin\\Plugin\\Utility',
      ),
      'weltpixel-speedoptimization-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SpeedOptimization\\Plugin\\Utility',
      ),
      'weltpixel-thankyoupage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\ThankYouPage\\Plugin\\Utility',
      ),
    ),
    'Magento\\Backend\\App\\Action' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
      'weltpixel-advancedwishlist-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\AdvancedWishlist\\Plugin\\Utility',
      ),
      'weltpixel-ajaxinfinitescroll-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\AjaxInfiniteScroll\\Plugin\\Utility',
      ),
      'weltpixel-frontendoptions-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\FrontendOptions\\Plugin\\Utility',
      ),
      'weltpixel-customfooter-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CustomFooter\\Plugin\\Utility',
      ),
      'weltpixel-customheader-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CustomHeader\\Plugin\\Utility',
      ),
      'weltpixel-designelements-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\DesignElements\\Plugin\\Utility',
      ),
      'weltpixel-lazyloading-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\LazyLoading\\Plugin\\Utility',
      ),
      'weltpixel-fullpagescroll-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\FullPageScroll\\Plugin\\Utility',
      ),
      'weltpixel-googlecards-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\GoogleCards\\Plugin\\Utility',
      ),
      'weltpixel-googletagmanager-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\Utility',
      ),
      'weltpixel-instagramwidget-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\InstagramWidget\\Plugin\\Utility',
      ),
      'weltpixel-owlcarouselslider-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\OwlCarouselSlider\\Plugin\\Utility',
      ),
      'weltpixel-newsletter-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\Newsletter\\Plugin\\Utility',
      ),
      'weltpixel-categorypage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CategoryPage\\Plugin\\Utility',
      ),
      'weltpixel-productpage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\ProductPage\\Plugin\\Utility',
      ),
      'weltpixel-quickcart-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\QuickCart\\Plugin\\Utility',
      ),
      'weltpixel-quickview-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\Quickview\\Plugin\\Utility',
      ),
      'weltpixel-searchautocomplete-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SearchAutoComplete\\Plugin\\Utility',
      ),
      'weltpixel-sociallogin-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SocialLogin\\Plugin\\Utility',
      ),
      'weltpixel-speedoptimization-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SpeedOptimization\\Plugin\\Utility',
      ),
      'weltpixel-thankyoupage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\ThankYouPage\\Plugin\\Utility',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
      'weltpixel-advancedwishlist-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\AdvancedWishlist\\Plugin\\Utility',
      ),
      'weltpixel-ajaxinfinitescroll-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\AjaxInfiniteScroll\\Plugin\\Utility',
      ),
      'weltpixel-frontendoptions-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\FrontendOptions\\Plugin\\Utility',
      ),
      'weltpixel-customfooter-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CustomFooter\\Plugin\\Utility',
      ),
      'weltpixel-customheader-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CustomHeader\\Plugin\\Utility',
      ),
      'weltpixel-designelements-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\DesignElements\\Plugin\\Utility',
      ),
      'weltpixel-lazyloading-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\LazyLoading\\Plugin\\Utility',
      ),
      'weltpixel-fullpagescroll-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\FullPageScroll\\Plugin\\Utility',
      ),
      'weltpixel-googlecards-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\GoogleCards\\Plugin\\Utility',
      ),
      'weltpixel-googletagmanager-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\Utility',
      ),
      'weltpixel-instagramwidget-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\InstagramWidget\\Plugin\\Utility',
      ),
      'weltpixel-owlcarouselslider-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\OwlCarouselSlider\\Plugin\\Utility',
      ),
      'weltpixel-newsletter-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\Newsletter\\Plugin\\Utility',
      ),
      'weltpixel-categorypage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CategoryPage\\Plugin\\Utility',
      ),
      'weltpixel-productpage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\ProductPage\\Plugin\\Utility',
      ),
      'weltpixel-quickcart-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\QuickCart\\Plugin\\Utility',
      ),
      'weltpixel-quickview-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\Quickview\\Plugin\\Utility',
      ),
      'weltpixel-searchautocomplete-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SearchAutoComplete\\Plugin\\Utility',
      ),
      'weltpixel-sociallogin-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SocialLogin\\Plugin\\Utility',
      ),
      'weltpixel-speedoptimization-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SpeedOptimization\\Plugin\\Utility',
      ),
      'weltpixel-thankyoupage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\ThankYouPage\\Plugin\\Utility',
      ),
    ),
    'Magento\\Framework\\App\\Action\\HttpPostActionInterface' => NULL,
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'massAction' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Plugin\\MassUpdateProductAttribute',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
      'weltpixel-advancedwishlist-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\AdvancedWishlist\\Plugin\\Utility',
      ),
      'weltpixel-ajaxinfinitescroll-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\AjaxInfiniteScroll\\Plugin\\Utility',
      ),
      'weltpixel-frontendoptions-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\FrontendOptions\\Plugin\\Utility',
      ),
      'weltpixel-customfooter-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CustomFooter\\Plugin\\Utility',
      ),
      'weltpixel-customheader-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CustomHeader\\Plugin\\Utility',
      ),
      'weltpixel-designelements-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\DesignElements\\Plugin\\Utility',
      ),
      'weltpixel-lazyloading-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\LazyLoading\\Plugin\\Utility',
      ),
      'weltpixel-fullpagescroll-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\FullPageScroll\\Plugin\\Utility',
      ),
      'weltpixel-googlecards-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\GoogleCards\\Plugin\\Utility',
      ),
      'weltpixel-googletagmanager-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\Utility',
      ),
      'weltpixel-instagramwidget-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\InstagramWidget\\Plugin\\Utility',
      ),
      'weltpixel-owlcarouselslider-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\OwlCarouselSlider\\Plugin\\Utility',
      ),
      'weltpixel-newsletter-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\Newsletter\\Plugin\\Utility',
      ),
      'weltpixel-categorypage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CategoryPage\\Plugin\\Utility',
      ),
      'weltpixel-productpage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\ProductPage\\Plugin\\Utility',
      ),
      'weltpixel-quickcart-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\QuickCart\\Plugin\\Utility',
      ),
      'weltpixel-quickview-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\Quickview\\Plugin\\Utility',
      ),
      'weltpixel-searchautocomplete-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SearchAutoComplete\\Plugin\\Utility',
      ),
      'weltpixel-sociallogin-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SocialLogin\\Plugin\\Utility',
      ),
      'weltpixel-speedoptimization-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SpeedOptimization\\Plugin\\Utility',
      ),
      'weltpixel-thankyoupage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\ThankYouPage\\Plugin\\Utility',
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
      'apply_catalog_rules_after_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Indexer\\Product\\Save\\ApplyRules',
      ),
      'reload_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Model\\ResourceModel\\Product',
      ),
      'cleanups_wishlist_item_after_product_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Wishlist\\Plugin\\Model\\ResourceModel\\Product',
      ),
      'apply_quickviewmessages_rules_after_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'WeltPixel\\Quickview\\Plugin\\Indexer\\Product\\Save\\ApplyRules',
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
      'invalidate_pagecache_after_attribute_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\ResourceModel\\Attribute\\Save',
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
      'aroundVerifyIdentity' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\ReplaceVerifyIdentityWithImsPlugin',
      ),
      'user_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\UserSavePlugin',
      ),
      'change_perform_identity_check_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\PerformIdentityCheckMessagePlugin',
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
        'disabled' => true,
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
        'disabled' => true,
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
        'disabled' => true,
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
        'disabled' => true,
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
        'disabled' => true,
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
        'disabled' => true,
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
        'disabled' => true,
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
        'disabled' => true,
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
        'disabled' => true,
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
        'disabled' => true,
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
    'Magento\\Sales\\Api\\ShipmentRepositoryInterface' => NULL,
    'Magento\\Sales\\Model\\Order\\ShipmentRepository' => 
    array (
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
        'disabled' => true,
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
      'security_admin_sessions_login' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Security\\Model\\Plugin\\Auth',
      ),
      'pagebuilder_clear_editor_config_cache' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\PageBuilder\\Plugin\\ClearEditorConfigCache',
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
      'admin-order-placement-comment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerSales\\Plugin\\AdminAddCommentOnOrderPlacementPlugin',
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
      ),
    ),
    'Magento\\Framework\\App\\ResourceConnection\\SourceProviderInterface' => NULL,
    'Magento\\Eav\\Model\\Entity\\Collection\\AbstractCollection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Collection\\AbstractCollection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\ResourceModel\\Product\\Type\\Configurable\\Product\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
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
      'change_product_attribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Indexer\\Product\\Attribute',
      ),
      'invalidate_caches_after_attribute_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Plugin\\Catalog\\CacheInvalidate',
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
      'weltpixel-advancedwishlist-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\AdvancedWishlist\\Plugin\\Utility',
      ),
      'weltpixel-ajaxinfinitescroll-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\AjaxInfiniteScroll\\Plugin\\Utility',
      ),
      'weltpixel-frontendoptions-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\FrontendOptions\\Plugin\\Utility',
      ),
      'weltpixel-customfooter-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CustomFooter\\Plugin\\Utility',
      ),
      'weltpixel-customheader-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CustomHeader\\Plugin\\Utility',
      ),
      'weltpixel-designelements-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\DesignElements\\Plugin\\Utility',
      ),
      'weltpixel-lazyloading-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\LazyLoading\\Plugin\\Utility',
      ),
      'weltpixel-fullpagescroll-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\FullPageScroll\\Plugin\\Utility',
      ),
      'weltpixel-googlecards-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\GoogleCards\\Plugin\\Utility',
      ),
      'weltpixel-googletagmanager-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\Utility',
      ),
      'weltpixel-instagramwidget-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\InstagramWidget\\Plugin\\Utility',
      ),
      'weltpixel-owlcarouselslider-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\OwlCarouselSlider\\Plugin\\Utility',
      ),
      'weltpixel-newsletter-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\Newsletter\\Plugin\\Utility',
      ),
      'weltpixel-categorypage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CategoryPage\\Plugin\\Utility',
      ),
      'weltpixel-productpage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\ProductPage\\Plugin\\Utility',
      ),
      'weltpixel-quickcart-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\QuickCart\\Plugin\\Utility',
      ),
      'weltpixel-quickview-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\Quickview\\Plugin\\Utility',
      ),
      'weltpixel-searchautocomplete-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SearchAutoComplete\\Plugin\\Utility',
      ),
      'weltpixel-sociallogin-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SocialLogin\\Plugin\\Utility',
      ),
      'weltpixel-speedoptimization-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SpeedOptimization\\Plugin\\Utility',
      ),
      'weltpixel-thankyoupage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\ThankYouPage\\Plugin\\Utility',
      ),
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth\\Forgotpassword' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'admin_forgot_password_plugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\AdminForgotPasswordPlugin',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
      'weltpixel-advancedwishlist-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\AdvancedWishlist\\Plugin\\Utility',
      ),
      'weltpixel-ajaxinfinitescroll-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\AjaxInfiniteScroll\\Plugin\\Utility',
      ),
      'weltpixel-frontendoptions-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\FrontendOptions\\Plugin\\Utility',
      ),
      'weltpixel-customfooter-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CustomFooter\\Plugin\\Utility',
      ),
      'weltpixel-customheader-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CustomHeader\\Plugin\\Utility',
      ),
      'weltpixel-designelements-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\DesignElements\\Plugin\\Utility',
      ),
      'weltpixel-lazyloading-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\LazyLoading\\Plugin\\Utility',
      ),
      'weltpixel-fullpagescroll-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\FullPageScroll\\Plugin\\Utility',
      ),
      'weltpixel-googlecards-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\GoogleCards\\Plugin\\Utility',
      ),
      'weltpixel-googletagmanager-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\Utility',
      ),
      'weltpixel-instagramwidget-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\InstagramWidget\\Plugin\\Utility',
      ),
      'weltpixel-owlcarouselslider-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\OwlCarouselSlider\\Plugin\\Utility',
      ),
      'weltpixel-newsletter-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\Newsletter\\Plugin\\Utility',
      ),
      'weltpixel-categorypage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CategoryPage\\Plugin\\Utility',
      ),
      'weltpixel-productpage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\ProductPage\\Plugin\\Utility',
      ),
      'weltpixel-quickcart-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\QuickCart\\Plugin\\Utility',
      ),
      'weltpixel-quickview-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\Quickview\\Plugin\\Utility',
      ),
      'weltpixel-searchautocomplete-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SearchAutoComplete\\Plugin\\Utility',
      ),
      'weltpixel-sociallogin-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SocialLogin\\Plugin\\Utility',
      ),
      'weltpixel-speedoptimization-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SpeedOptimization\\Plugin\\Utility',
      ),
      'weltpixel-thankyoupage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\ThankYouPage\\Plugin\\Utility',
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
      'revoke_admin_access_token' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\RevokeAdminAccessTokenPlugin',
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
      'default_store_setter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\FrontController\\Plugin\\DefaultStore',
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
        'disabled' => true,
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
        'disabled' => true,
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
      'update_configurable_product_total_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Model\\Order\\Invoice\\UpdateConfigurableProductTotalQty',
      ),
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
      'weltpixel-advancedwishlist-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\AdvancedWishlist\\Plugin\\Utility',
      ),
      'weltpixel-ajaxinfinitescroll-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\AjaxInfiniteScroll\\Plugin\\Utility',
      ),
      'weltpixel-frontendoptions-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\FrontendOptions\\Plugin\\Utility',
      ),
      'weltpixel-customfooter-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CustomFooter\\Plugin\\Utility',
      ),
      'weltpixel-customheader-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CustomHeader\\Plugin\\Utility',
      ),
      'weltpixel-designelements-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\DesignElements\\Plugin\\Utility',
      ),
      'weltpixel-lazyloading-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\LazyLoading\\Plugin\\Utility',
      ),
      'weltpixel-fullpagescroll-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\FullPageScroll\\Plugin\\Utility',
      ),
      'weltpixel-googlecards-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\GoogleCards\\Plugin\\Utility',
      ),
      'weltpixel-googletagmanager-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\Utility',
      ),
      'weltpixel-instagramwidget-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\InstagramWidget\\Plugin\\Utility',
      ),
      'weltpixel-owlcarouselslider-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\OwlCarouselSlider\\Plugin\\Utility',
      ),
      'weltpixel-newsletter-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\Newsletter\\Plugin\\Utility',
      ),
      'weltpixel-categorypage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CategoryPage\\Plugin\\Utility',
      ),
      'weltpixel-productpage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\ProductPage\\Plugin\\Utility',
      ),
      'weltpixel-quickcart-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\QuickCart\\Plugin\\Utility',
      ),
      'weltpixel-quickview-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\Quickview\\Plugin\\Utility',
      ),
      'weltpixel-searchautocomplete-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SearchAutoComplete\\Plugin\\Utility',
      ),
      'weltpixel-sociallogin-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SocialLogin\\Plugin\\Utility',
      ),
      'weltpixel-speedoptimization-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SpeedOptimization\\Plugin\\Utility',
      ),
      'weltpixel-thankyoupage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\ThankYouPage\\Plugin\\Utility',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage\\Save' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'wesupply-giftmessage-admin-save' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeSupply\\Toolbox\\Plugin\\Adminhtml\\Order\\View\\Giftmessage\\Save',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
      'weltpixel-advancedwishlist-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\AdvancedWishlist\\Plugin\\Utility',
      ),
      'weltpixel-ajaxinfinitescroll-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\AjaxInfiniteScroll\\Plugin\\Utility',
      ),
      'weltpixel-frontendoptions-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\FrontendOptions\\Plugin\\Utility',
      ),
      'weltpixel-customfooter-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CustomFooter\\Plugin\\Utility',
      ),
      'weltpixel-customheader-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CustomHeader\\Plugin\\Utility',
      ),
      'weltpixel-designelements-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\DesignElements\\Plugin\\Utility',
      ),
      'weltpixel-lazyloading-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\LazyLoading\\Plugin\\Utility',
      ),
      'weltpixel-fullpagescroll-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\FullPageScroll\\Plugin\\Utility',
      ),
      'weltpixel-googlecards-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\GoogleCards\\Plugin\\Utility',
      ),
      'weltpixel-googletagmanager-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\Utility',
      ),
      'weltpixel-instagramwidget-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\InstagramWidget\\Plugin\\Utility',
      ),
      'weltpixel-owlcarouselslider-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\OwlCarouselSlider\\Plugin\\Utility',
      ),
      'weltpixel-newsletter-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\Newsletter\\Plugin\\Utility',
      ),
      'weltpixel-categorypage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CategoryPage\\Plugin\\Utility',
      ),
      'weltpixel-productpage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\ProductPage\\Plugin\\Utility',
      ),
      'weltpixel-quickcart-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\QuickCart\\Plugin\\Utility',
      ),
      'weltpixel-quickview-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\Quickview\\Plugin\\Utility',
      ),
      'weltpixel-searchautocomplete-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SearchAutoComplete\\Plugin\\Utility',
      ),
      'weltpixel-sociallogin-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SocialLogin\\Plugin\\Utility',
      ),
      'weltpixel-speedoptimization-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SpeedOptimization\\Plugin\\Utility',
      ),
      'weltpixel-thankyoupage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\ThankYouPage\\Plugin\\Utility',
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
    'Magento\\Eav\\Model\\Adminhtml\\System\\Config\\Source\\Inputtype' => 
    array (
      'process_page_builder_input_type' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Model\\Eav\\Adminhtml\\System\\Config\\Source\\InputtypePlugin',
      ),
      'append_compatible_input_types' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Plugin\\Eav\\System\\Config\\Source\\InputtypePlugin',
      ),
    ),
    'Magento\\Ui\\Model\\Export\\MetadataProvider' => 
    array (
      'orderGridExportFilterColumnPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Plugin\\Model\\Export\\OrderGridExportFilterColumn',
      ),
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
      'weltpixel-advancedwishlist-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\AdvancedWishlist\\Plugin\\Utility',
      ),
      'weltpixel-ajaxinfinitescroll-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\AjaxInfiniteScroll\\Plugin\\Utility',
      ),
      'weltpixel-frontendoptions-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\FrontendOptions\\Plugin\\Utility',
      ),
      'weltpixel-customfooter-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CustomFooter\\Plugin\\Utility',
      ),
      'weltpixel-customheader-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CustomHeader\\Plugin\\Utility',
      ),
      'weltpixel-designelements-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\DesignElements\\Plugin\\Utility',
      ),
      'weltpixel-lazyloading-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\LazyLoading\\Plugin\\Utility',
      ),
      'weltpixel-fullpagescroll-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\FullPageScroll\\Plugin\\Utility',
      ),
      'weltpixel-googlecards-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\GoogleCards\\Plugin\\Utility',
      ),
      'weltpixel-googletagmanager-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\Utility',
      ),
      'weltpixel-instagramwidget-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\InstagramWidget\\Plugin\\Utility',
      ),
      'weltpixel-owlcarouselslider-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\OwlCarouselSlider\\Plugin\\Utility',
      ),
      'weltpixel-newsletter-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\Newsletter\\Plugin\\Utility',
      ),
      'weltpixel-categorypage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CategoryPage\\Plugin\\Utility',
      ),
      'weltpixel-productpage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\ProductPage\\Plugin\\Utility',
      ),
      'weltpixel-quickcart-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\QuickCart\\Plugin\\Utility',
      ),
      'weltpixel-quickview-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\Quickview\\Plugin\\Utility',
      ),
      'weltpixel-searchautocomplete-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SearchAutoComplete\\Plugin\\Utility',
      ),
      'weltpixel-sociallogin-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SocialLogin\\Plugin\\Utility',
      ),
      'weltpixel-speedoptimization-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SpeedOptimization\\Plugin\\Utility',
      ),
      'weltpixel-thankyoupage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\ThankYouPage\\Plugin\\Utility',
      ),
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth\\Login' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'security_login_form' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Security\\Model\\Plugin\\LoginController',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
      'weltpixel-advancedwishlist-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\AdvancedWishlist\\Plugin\\Utility',
      ),
      'weltpixel-ajaxinfinitescroll-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\AjaxInfiniteScroll\\Plugin\\Utility',
      ),
      'weltpixel-frontendoptions-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\FrontendOptions\\Plugin\\Utility',
      ),
      'weltpixel-customfooter-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CustomFooter\\Plugin\\Utility',
      ),
      'weltpixel-customheader-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CustomHeader\\Plugin\\Utility',
      ),
      'weltpixel-designelements-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\DesignElements\\Plugin\\Utility',
      ),
      'weltpixel-lazyloading-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\LazyLoading\\Plugin\\Utility',
      ),
      'weltpixel-fullpagescroll-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\FullPageScroll\\Plugin\\Utility',
      ),
      'weltpixel-googlecards-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\GoogleCards\\Plugin\\Utility',
      ),
      'weltpixel-googletagmanager-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\Utility',
      ),
      'weltpixel-instagramwidget-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\InstagramWidget\\Plugin\\Utility',
      ),
      'weltpixel-owlcarouselslider-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\OwlCarouselSlider\\Plugin\\Utility',
      ),
      'weltpixel-newsletter-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\Newsletter\\Plugin\\Utility',
      ),
      'weltpixel-categorypage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CategoryPage\\Plugin\\Utility',
      ),
      'weltpixel-productpage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\ProductPage\\Plugin\\Utility',
      ),
      'weltpixel-quickcart-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\QuickCart\\Plugin\\Utility',
      ),
      'weltpixel-quickview-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\Quickview\\Plugin\\Utility',
      ),
      'weltpixel-searchautocomplete-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SearchAutoComplete\\Plugin\\Utility',
      ),
      'weltpixel-sociallogin-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SocialLogin\\Plugin\\Utility',
      ),
      'weltpixel-speedoptimization-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SpeedOptimization\\Plugin\\Utility',
      ),
      'weltpixel-thankyoupage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\ThankYouPage\\Plugin\\Utility',
      ),
    ),
    'Magento\\User\\Model\\UserValidationRules' => 
    array (
      'user_expiration_validator' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Security\\Model\\Plugin\\UserValidationRules',
      ),
      'remove_user_validation_rules' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\RemoveUserValidationRulesPlugin',
      ),
    ),
    'Magento\\Backend\\Block\\Template' => NULL,
    'Magento\\Backend\\Block\\Widget' => NULL,
    'Magento\\Backend\\Block\\Widget\\Form' => 
    array (
      'remove_password_and_user_confirmation_form_fields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\RemovePasswordAndUserConfirmationFormFieldsPlugin',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Form\\Generic' => 
    array (
      'remove_password_and_user_confirmation_form_fields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\RemovePasswordAndUserConfirmationFormFieldsPlugin',
      ),
    ),
    'Magento\\User\\Block\\User\\Edit\\Tab\\Main' => 
    array (
      'remove_password_and_user_confirmation_form_fields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\RemovePasswordAndUserConfirmationFormFieldsPlugin',
      ),
      'user_expiration_user_form_field' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Security\\Model\\Plugin\\AdminUserForm',
      ),
      'admin_adobe_ims_reauth_button_user_edit' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\Block\\Adminhtml\\User\\Edit\\Tab\\AddReAuthVerification',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Action\\Full' => 
    array (
      'invalidate_pagecache_after_full_reindex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\Indexer\\Category\\Product\\Execute',
      ),
    ),
    'Magento\\Eav\\Api\\AttributeSetRepositoryInterface' => 
    array (
      'remove_products' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\AttributeSetRepository\\RemoveProducts',
      ),
    ),
    'Magento\\Catalog\\Model\\ProductLink\\Search' => 
    array (
      'processOutOfStockProducts' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Plugin\\ProductSearch',
      ),
    ),
    'Magento\\CatalogRule\\Api\\Data\\RuleInterface' => NULL,
    'Magento\\CatalogRule\\Model\\Rule' => 
    array (
      'addVariationsToProductRule' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleConfigurable\\Plugin\\CatalogRule\\Model\\Rule\\ConfigurableProductHandler',
      ),
      'configurableChildValidation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleConfigurable\\Plugin\\CatalogRule\\Model\\Rule\\Validation',
      ),
    ),
    'Magento\\Catalog\\Api\\Data\\CategoryInterface' => NULL,
    'Magento\\Catalog\\Api\\Data\\CategoryTreeInterface' => NULL,
    'Magento\\Catalog\\Model\\Category' => 
    array (
      'apply_after_products_assign' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Indexer\\Category',
      ),
      'apply_quickviewmessages_after_products_assign' => 
      array (
        'sortOrder' => 0,
        'instance' => 'WeltPixel\\Quickview\\Plugin\\Indexer\\Category',
      ),
    ),
    'Magento\\Customer\\Model\\Group' => 
    array (
      'reindex_after_delete_customer_group' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Indexer\\CustomerGroup',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Form' => 
    array (
      'remove_password_and_user_confirmation_form_fields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\RemovePasswordAndUserConfirmationFormFieldsPlugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Edit\\Tab\\Attributes' => 
    array (
      'remove_password_and_user_confirmation_form_fields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\RemovePasswordAndUserConfirmationFormFieldsPlugin',
      ),
      'product_form_url_key_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Plugin\\Catalog\\Block\\Adminhtml\\Product\\Edit\\Tab\\Attributes',
      ),
    ),
    'Magento\\Bundle\\Block\\Adminhtml\\Catalog\\Product\\Edit\\Tab\\Attributes' => 
    array (
      'remove_password_and_user_confirmation_form_fields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\RemovePasswordAndUserConfirmationFormFieldsPlugin',
      ),
      'product_form_url_key_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Plugin\\Catalog\\Block\\Adminhtml\\Product\\Edit\\Tab\\Attributes',
      ),
      'bundle_msrp_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Msrp\\Plugin\\Bundle\\Block\\Adminhtml\\Catalog\\Product\\Edit\\Tab\\Attributes',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Attribute\\Edit\\Tab\\Front' => 
    array (
      'remove_password_and_user_confirmation_form_fields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\RemovePasswordAndUserConfirmationFormFieldsPlugin',
      ),
      'search_weigh' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Block\\Plugin\\FrontTabPlugin',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\Collection\\AbstractCollection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Framework\\Api\\Search\\SearchResultInterface' => NULL,
    'Magento\\Framework\\Api\\SearchResultsInterface' => NULL,
    'Magento\\Framework\\View\\Element\\UiComponent\\DataProvider\\SearchResult' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'orderGridCollectionFilterPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Plugin\\Model\\ResourceModel\\Order\\OrderGridCollectionFilter',
      ),
    ),
    'Magento\\Framework\\View\\TemplateEngineFactory' => 
    array (
      'debug_hints' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Developer\\Model\\TemplateEngine\\Plugin\\DebugHints',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\AbstractCreate' => NULL,
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Sidebar\\AbstractSidebar' => 
    array (
      'GroupedProduct' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\GroupedProduct\\Block\\Adminhtml\\Order\\Create\\Sidebar',
      ),
      'Bundle' => 
      array (
        'sortOrder' => 200,
        'instance' => 'Magento\\Bundle\\Block\\Adminhtml\\Order\\Create\\Sidebar',
      ),
      'configurable' => 
      array (
        'sortOrder' => 200,
        'instance' => 'Magento\\ConfigurableProduct\\Block\\Adminhtml\\Order\\Create\\Sidebar',
      ),
    ),
    'Magento\\Bundle\\Model\\ResourceModel\\Selection\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'Bundle' => 
      array (
        'sortOrder' => 60,
        'instance' => 'Magento\\Bundle\\Model\\ResourceModel\\Selection\\Plugin\\Collection',
      ),
    ),
    'Magento\\Framework\\Data\\Form\\AbstractForm' => NULL,
    'Magento\\Framework\\Data\\Form\\Element\\AbstractElement' => NULL,
    'Magento\\Framework\\Data\\Form\\Element\\Fieldset' => 
    array (
      'Bundle' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Bundle\\Plugin\\Framework\\Data\\Form\\Element\\FieldsetPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\AdminOrder\\Product\\Quote\\Initializer' => 
    array (
      'sales_adminorder_quote_initializer_plugin' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\GroupedProduct\\Model\\Sales\\AdminOrder\\Product\\Quote\\Plugin\\Initializer',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Builder' => 
    array (
      'configurable' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Controller\\Adminhtml\\Product\\Builder\\Plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Validator' => 
    array (
      'configurable' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Product\\Validator\\Plugin',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Button\\ToolbarInterface' => 
    array (
      'login_as_customer_button_toolbar' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerAdminUi\\Plugin\\Button\\ToolbarPlugin',
      ),
    ),
    'Magento\\Customer\\Model\\Customer\\DataProviderWithDefaultAddresses' => 
    array (
      'login_as_customer_customer_data_provider_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerAssistance\\Plugin\\DataProviderWithDefaultAddressesPlugin',
      ),
    ),
    'Magento\\Customer\\Model\\Metadata\\Form' => 
    array (
      'login_as_customer_customer_data_validate_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerAssistance\\Plugin\\CustomerDataValidatePlugin',
      ),
    ),
    'Magento\\LoginAsCustomerAdminUi\\Ui\\Customer\\Component\\Button\\DataProvider' => 
    array (
      'login_as_customer_button_data_provider_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerAssistance\\Plugin\\LoginAsCustomerButtonDataProviderPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\ImageUploader' => 
    array (
      'save_category_image' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryCatalogIntegration\\Plugin\\SaveBaseCategoryImageInformation',
      ),
    ),
    'Magento\\Ui\\Component\\Form\\Element\\DataType\\Media\\OpenDialogUrl' => 
    array (
      'new_media_gallery_open_dialog_url' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryIntegration\\Plugin\\NewMediaGalleryOpenDialogUrl',
      ),
    ),
    'Magento\\Framework\\File\\Uploader' => 
    array (
      'save_asset_image' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryIntegration\\Plugin\\SaveImageInformation',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\ContainerInterface' => NULL,
    'Magento\\Backend\\Block\\Widget\\Button\\ContextInterface' => NULL,
    'Magento\\Backend\\Block\\Widget\\Container' => NULL,
    'Magento\\Cms\\Block\\Adminhtml\\Wysiwyg\\Images\\Content' => 
    array (
      'add_search_button' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdobeStockImageAdminUi\\Plugin\\AddSearchButton',
      ),
    ),
    'Magento\\MediaGalleryUi\\Model\\GetDetailsByAssetId' => 
    array (
      'add_adobe_stock_image_details_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdobeStockImageAdminUi\\Plugin\\AddAdobeStockImageDetailsPlugin',
      ),
    ),
    'Magento\\MediaGalleryUi\\Ui\\Component\\Listing\\Columns\\Source\\Options' => 
    array (
      'add_adobe_stock_source_option_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdobeStockImageAdminUi\\Plugin\\AddAdobeStockSourceOptionPlugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\ImageFactory' => 
    array (
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\DesignLoader',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Frontend\\Inputtype\\Presentation' => 
    array (
      'process_page_builder' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Model\\Eav\\Attribute\\PresentationPlugin',
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
    'Magento\\Ui\\DataProvider\\Modifier\\ModifierInterface' => NULL,
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Form\\Modifier\\AbstractModifier' => NULL,
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Form\\Modifier\\Eav' => 
    array (
      'pagebuilder_product_form_eav' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Catalog\\Ui\\DataProvider\\Product\\Form\\Modifier\\EavPlugin',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Structure\\SearchInterface' => NULL,
    'Magento\\Config\\Model\\Config\\Structure' => 
    array (
      'paypal_system_configuration' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Model\\Config\\StructurePlugin',
      ),
      'Amasty_Base:advertise' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Base\\Plugin\\Backend\\Model\\Config\\StructurePlugin',
      ),
      'Amasty_Base:infoblock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Base\\Plugin\\Backend\\Model\\Config\\AddInformationBlockPlugin',
      ),
    ),
    'Magento\\Config\\Model\\Config\\StructureElementInterface' => NULL,
    'Magento\\Config\\Model\\Config\\Structure\\ElementInterface' => NULL,
    'Magento\\Config\\Model\\Config\\Structure\\AbstractElement' => NULL,
    'Magento\\Config\\Model\\Config\\Structure\\Element\\Field' => 
    array (
      'paypal_system_configuration_field' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Model\\Config\\Structure\\Element\\FieldPlugin',
      ),
    ),
    'Magento\\Backend\\Block\\Store\\Switcher' => 
    array (
      'paypal_store_switcher' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Block\\Adminhtml\\Store\\SwitcherPlugin',
      ),
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
      'weltpixel-advancedwishlist-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\AdvancedWishlist\\Plugin\\Utility',
      ),
      'weltpixel-ajaxinfinitescroll-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\AjaxInfiniteScroll\\Plugin\\Utility',
      ),
      'weltpixel-frontendoptions-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\FrontendOptions\\Plugin\\Utility',
      ),
      'weltpixel-customfooter-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CustomFooter\\Plugin\\Utility',
      ),
      'weltpixel-customheader-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CustomHeader\\Plugin\\Utility',
      ),
      'weltpixel-designelements-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\DesignElements\\Plugin\\Utility',
      ),
      'weltpixel-lazyloading-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\LazyLoading\\Plugin\\Utility',
      ),
      'weltpixel-fullpagescroll-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\FullPageScroll\\Plugin\\Utility',
      ),
      'weltpixel-googlecards-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\GoogleCards\\Plugin\\Utility',
      ),
      'weltpixel-googletagmanager-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\Utility',
      ),
      'weltpixel-instagramwidget-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\InstagramWidget\\Plugin\\Utility',
      ),
      'weltpixel-owlcarouselslider-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\OwlCarouselSlider\\Plugin\\Utility',
      ),
      'weltpixel-newsletter-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\Newsletter\\Plugin\\Utility',
      ),
      'weltpixel-categorypage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CategoryPage\\Plugin\\Utility',
      ),
      'weltpixel-productpage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\ProductPage\\Plugin\\Utility',
      ),
      'weltpixel-quickcart-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\QuickCart\\Plugin\\Utility',
      ),
      'weltpixel-quickview-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\Quickview\\Plugin\\Utility',
      ),
      'weltpixel-searchautocomplete-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SearchAutoComplete\\Plugin\\Utility',
      ),
      'weltpixel-sociallogin-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SocialLogin\\Plugin\\Utility',
      ),
      'weltpixel-speedoptimization-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SpeedOptimization\\Plugin\\Utility',
      ),
      'weltpixel-thankyoupage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\ThankYouPage\\Plugin\\Utility',
      ),
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed\\Index' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Rss\\App\\Action\\Plugin\\BackendAuthentication',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
      'weltpixel-advancedwishlist-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\AdvancedWishlist\\Plugin\\Utility',
      ),
      'weltpixel-ajaxinfinitescroll-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\AjaxInfiniteScroll\\Plugin\\Utility',
      ),
      'weltpixel-frontendoptions-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\FrontendOptions\\Plugin\\Utility',
      ),
      'weltpixel-customfooter-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CustomFooter\\Plugin\\Utility',
      ),
      'weltpixel-customheader-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CustomHeader\\Plugin\\Utility',
      ),
      'weltpixel-designelements-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\DesignElements\\Plugin\\Utility',
      ),
      'weltpixel-lazyloading-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\LazyLoading\\Plugin\\Utility',
      ),
      'weltpixel-fullpagescroll-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\FullPageScroll\\Plugin\\Utility',
      ),
      'weltpixel-googlecards-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\GoogleCards\\Plugin\\Utility',
      ),
      'weltpixel-googletagmanager-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\Utility',
      ),
      'weltpixel-instagramwidget-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\InstagramWidget\\Plugin\\Utility',
      ),
      'weltpixel-owlcarouselslider-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\OwlCarouselSlider\\Plugin\\Utility',
      ),
      'weltpixel-newsletter-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\Newsletter\\Plugin\\Utility',
      ),
      'weltpixel-categorypage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CategoryPage\\Plugin\\Utility',
      ),
      'weltpixel-productpage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\ProductPage\\Plugin\\Utility',
      ),
      'weltpixel-quickcart-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\QuickCart\\Plugin\\Utility',
      ),
      'weltpixel-quickview-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\Quickview\\Plugin\\Utility',
      ),
      'weltpixel-searchautocomplete-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SearchAutoComplete\\Plugin\\Utility',
      ),
      'weltpixel-sociallogin-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SocialLogin\\Plugin\\Utility',
      ),
      'weltpixel-speedoptimization-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SpeedOptimization\\Plugin\\Utility',
      ),
      'weltpixel-thankyoupage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\ThankYouPage\\Plugin\\Utility',
      ),
    ),
    'Magento\\Framework\\Mview\\ActionInterface' => NULL,
    'Magento\\CatalogRule\\Model\\Indexer\\AbstractIndexer' => 
    array (
      'cache_cleaner_after_reindex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Indexer\\Model\\Indexer\\CacheCleaner',
      ),
    ),
    'Magento\\CatalogRule\\Model\\Indexer\\Product\\ProductRuleIndexer' => 
    array (
      'cache_cleaner_after_reindex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Indexer\\Model\\Indexer\\CacheCleaner',
      ),
      'productRuleReindex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleConfigurable\\Plugin\\CatalogRule\\Model\\Indexer\\ProductRuleReindex',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
      'weltpixel-advancedwishlist-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\AdvancedWishlist\\Plugin\\Utility',
      ),
      'weltpixel-ajaxinfinitescroll-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\AjaxInfiniteScroll\\Plugin\\Utility',
      ),
      'weltpixel-frontendoptions-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\FrontendOptions\\Plugin\\Utility',
      ),
      'weltpixel-customfooter-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CustomFooter\\Plugin\\Utility',
      ),
      'weltpixel-customheader-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CustomHeader\\Plugin\\Utility',
      ),
      'weltpixel-designelements-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\DesignElements\\Plugin\\Utility',
      ),
      'weltpixel-lazyloading-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\LazyLoading\\Plugin\\Utility',
      ),
      'weltpixel-fullpagescroll-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\FullPageScroll\\Plugin\\Utility',
      ),
      'weltpixel-googlecards-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\GoogleCards\\Plugin\\Utility',
      ),
      'weltpixel-googletagmanager-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\Utility',
      ),
      'weltpixel-instagramwidget-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\InstagramWidget\\Plugin\\Utility',
      ),
      'weltpixel-owlcarouselslider-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\OwlCarouselSlider\\Plugin\\Utility',
      ),
      'weltpixel-newsletter-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\Newsletter\\Plugin\\Utility',
      ),
      'weltpixel-categorypage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CategoryPage\\Plugin\\Utility',
      ),
      'weltpixel-productpage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\ProductPage\\Plugin\\Utility',
      ),
      'weltpixel-quickcart-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\QuickCart\\Plugin\\Utility',
      ),
      'weltpixel-quickview-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\Quickview\\Plugin\\Utility',
      ),
      'weltpixel-searchautocomplete-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SearchAutoComplete\\Plugin\\Utility',
      ),
      'weltpixel-sociallogin-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SocialLogin\\Plugin\\Utility',
      ),
      'weltpixel-speedoptimization-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SpeedOptimization\\Plugin\\Utility',
      ),
      'weltpixel-thankyoupage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\ThankYouPage\\Plugin\\Utility',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute\\Save' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'save_swatches_frontend_input' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Controller\\Adminhtml\\Product\\Attribute\\Plugin\\Save',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
      'weltpixel-advancedwishlist-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\AdvancedWishlist\\Plugin\\Utility',
      ),
      'weltpixel-ajaxinfinitescroll-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\AjaxInfiniteScroll\\Plugin\\Utility',
      ),
      'weltpixel-frontendoptions-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\FrontendOptions\\Plugin\\Utility',
      ),
      'weltpixel-customfooter-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CustomFooter\\Plugin\\Utility',
      ),
      'weltpixel-customheader-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CustomHeader\\Plugin\\Utility',
      ),
      'weltpixel-designelements-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\DesignElements\\Plugin\\Utility',
      ),
      'weltpixel-lazyloading-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\LazyLoading\\Plugin\\Utility',
      ),
      'weltpixel-fullpagescroll-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\FullPageScroll\\Plugin\\Utility',
      ),
      'weltpixel-googlecards-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\GoogleCards\\Plugin\\Utility',
      ),
      'weltpixel-googletagmanager-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\Utility',
      ),
      'weltpixel-instagramwidget-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\InstagramWidget\\Plugin\\Utility',
      ),
      'weltpixel-owlcarouselslider-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\OwlCarouselSlider\\Plugin\\Utility',
      ),
      'weltpixel-newsletter-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\Newsletter\\Plugin\\Utility',
      ),
      'weltpixel-categorypage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CategoryPage\\Plugin\\Utility',
      ),
      'weltpixel-productpage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\ProductPage\\Plugin\\Utility',
      ),
      'weltpixel-quickcart-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\QuickCart\\Plugin\\Utility',
      ),
      'weltpixel-quickview-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\Quickview\\Plugin\\Utility',
      ),
      'weltpixel-searchautocomplete-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SearchAutoComplete\\Plugin\\Utility',
      ),
      'weltpixel-sociallogin-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SocialLogin\\Plugin\\Utility',
      ),
      'weltpixel-speedoptimization-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SpeedOptimization\\Plugin\\Utility',
      ),
      'weltpixel-thankyoupage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\ThankYouPage\\Plugin\\Utility',
      ),
    ),
    'Magento\\AdminNotification\\Model\\ResourceModel\\System\\Message\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\AdminNotification\\Model\\ResourceModel\\System\\Message\\Collection\\Synchronized' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'afterToArray' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsynchronousOperations\\Model\\ResourceModel\\System\\Message\\Collection\\Synchronized\\Plugin',
      ),
    ),
    'Magento\\AdminNotification\\Ui\\Component\\DataProvider\\DataProvider' => 
    array (
      'afterGetMeta' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsynchronousOperations\\Ui\\Component\\AdminNotification\\Plugin',
      ),
    ),
    'Magento\\Cms\\Model\\Page\\DataProvider' => 
    array (
      'google_optimizer_cms_page_data_provider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GoogleOptimizer\\Model\\Plugin\\Cms\\Page\\DataProvider',
      ),
      'weltpixel-add-og-image-to-form' => 
      array (
        'sortOrder' => 0,
        'instance' => 'WeltPixel\\GoogleCards\\Plugin\\PageDataProviderPlugin',
      ),
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Form\\NewCategoryDataProvider' => 
    array (
      'google_optimizer_product_new_category_data_provider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GoogleOptimizer\\Model\\Plugin\\Catalog\\Product\\Category\\DataProvider',
      ),
    ),
    'Magento\\Framework\\Controller\\ResultInterface' => NULL,
    'Magento\\Framework\\Controller\\AbstractResult' => NULL,
    'Magento\\Framework\\View\\Result\\Layout' => 
    array (
      'add_adobe_ims_layout_handle' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\AddAdobeImsLayoutHandlePlugin',
      ),
    ),
    'Magento\\User\\Model\\Backend\\Config\\ObserverConfig' => 
    array (
      'disable_password_reset' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\DisablePasswordResetPlugin',
      ),
      'disable_forced_password_change' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\DisableForcedPasswordChangePlugin',
      ),
    ),
    'Magento\\Security\\Model\\AdminSessionsManager' => 
    array (
      'keep_other_user_sessions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\OtherUserSessionPlugin',
      ),
    ),
    'Magento\\Backend\\Block\\System\\Account\\Edit\\Form' => 
    array (
      'remove_password_and_user_confirmation_form_fields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\RemovePasswordAndUserConfirmationFormFieldsPlugin',
      ),
      'admin_adobe_ims_reauth_button_account_edit' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\Block\\Adminhtml\\System\\Account\\Edit\\AddReAuthVerification',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Tab\\TabInterface' => NULL,
    'Magento\\User\\Block\\Role\\Tab\\Info' => 
    array (
      'remove_password_and_user_confirmation_form_fields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\RemovePasswordAndUserConfirmationFormFieldsPlugin',
      ),
      'admin_adobe_ims_reauth_button_role_edit' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\Block\\Adminhtml\\User\\Role\\Tab\\AddReAuthVerification',
      ),
    ),
    'Magento\\AdobeIms\\Block\\Adminhtml\\SignIn' => 
    array (
      'authentication_component_config' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\Block\\Adminhtml\\SignInPlugin',
      ),
    ),
    'Magento\\Integration\\Block\\Adminhtml\\Integration\\Edit\\Tab\\Info' => 
    array (
      'remove_password_and_user_confirmation_form_fields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\RemovePasswordAndUserConfirmationFormFieldsPlugin',
      ),
      'admin_adobe_ims_reauth_button_integration_edit' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\Block\\Adminhtml\\Integration\\Edit\\Tab\\AddReAuthVerification',
      ),
    ),
    'Magento\\Shipping\\Block\\Adminhtml\\Order\\Packaging' => 
    array (
      'usps' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Usps\\Block\\Adminhtml\\Order\\Packaging\\Plugin\\DisplayGirth',
      ),
    ),
    'Magento\\Wishlist\\Model\\Wishlist' => 
    array (
      'weltpixel-advancedwishlist-adminhtml-wishlist' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\AdvancedWishlist\\Plugin\\Adminhtml\\Wishlist',
      ),
    ),
    'Magento\\Backend\\Block\\AbstractBlock' => NULL,
    'Magento\\Backend\\Block\\Widget\\Grid\\Column\\Renderer\\RendererInterface' => NULL,
    'Magento\\Backend\\Block\\Widget\\Grid\\Column\\Renderer\\AbstractRenderer' => NULL,
    'Magento\\AdminNotification\\Block\\Grid\\Renderer\\Actions' => 
    array (
      'Amasty_Base::show-unsubscribe-link' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Base\\Plugin\\AdminNotification\\Block\\Grid\\Renderer\\Actions',
      ),
    ),
    'Magento\\AdminNotification\\Block\\Grid\\Renderer\\Notice' => 
    array (
      'Amasty_Base::add-amasty-class' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Base\\Plugin\\AdminNotification\\Block\\Grid\\Renderer\\Notice',
      ),
    ),
    'Magento\\AdminNotification\\Block\\ToolbarEntry' => 
    array (
      'Amasty_Base::add-amasty-class-logo' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Base\\Plugin\\AdminNotification\\Block\\ToolbarEntry',
      ),
    ),
    'Magento\\Framework\\Data\\Form\\Element\\Renderer\\RendererInterface' => NULL,
    'Magento\\Config\\Block\\System\\Config\\Form\\Field' => 
    array (
      'Amasty_Base::replace-image-path' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Base\\Plugin\\Config\\Block\\System\\Config\\Form\\Field',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Form\\Element\\Dependence' => 
    array (
      'Amasty_Base::fix-dependence' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Base\\Plugin\\Adminhtml\\Block\\Widget\\Form\\Element\\Dependence',
      ),
    ),
    'Magento\\Backend\\Model\\Menu\\Builder' => 
    array (
      'Amasty_Base::menu_builder' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Base\\Plugin\\Backend\\Model\\Menu\\Builder',
      ),
      'Magefan_Community_Plugin_Magento_Backend_Model_Menu_Builder' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magefan\\Community\\Plugin\\Magento\\Backend\\Model\\Menu\\BuilderPlugin',
      ),
    ),
    'Magento\\Config\\Block\\System\\Config\\Tabs' => 
    array (
      'Amasty_Base::build_amasty_tabs' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Base\\Plugin\\Config\\Block\\System\\Config\\BuildAmastyTabsPlugin',
      ),
    ),
    'Magento\\Payment\\Helper\\Data' => 
    array (
      'Amasty_Conditions::payment_helper_getlist' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amasty\\Conditions\\Plugin\\Payment\\Helper\\Data',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Button\\Toolbar' => 
    array (
      'login_as_customer_button_toolbar' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerAdminUi\\Plugin\\Button\\ToolbarPlugin',
      ),
      'elsener_paytrace_custombutton_for_sales_order_view' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Elsnertech\\Paytrace\\Plugin\\Block\\Adminhtml\\Payment\\View',
      ),
    ),
    'Magento\\Ui\\Component\\Wysiwyg\\ConfigInterface' => 
    array (
      'Magefan_WysiwygAdvanced_Plugin_Magento_Ui_Component_Wysiwyg_ConfigInterface' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'Magefan\\WysiwygAdvanced\\Plugin\\Magento\\Ui\\Component\\Wysiwyg\\ConfigPlugin',
      ),
    ),
    'Magento\\PageBuilder\\Model\\ConfigInterface' => 
    array (
      'Magefan_WysiwygAdvanced_Plugin_Backend_Magento_PageBuilder_Model_ConfigInterface' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'Magefan\\WysiwygAdvanced\\Plugin\\Magento\\PageBuilder\\Model\\ConfigInterface',
      ),
    ),
    'Magento\\Framework\\Config\\Data\\Scoped' => NULL,
    'Magento\\Config\\Model\\Config\\Structure\\Data' => 
    array (
      'mageplaza_module_activate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Core\\Model\\Config\\Structure\\Data',
      ),
    ),
    'Magento\\Backend\\Model\\Menu\\Builder\\AbstractCommand' => 
    array (
      'mageplaza_move_menu' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Core\\Plugin\\MoveMenu',
      ),
    ),
    'Mageplaza\\Reports\\Block\\Dashboard\\ConversionFunnel' => 
    array (
      'addViewDetailLink' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\AbandonedCart\\Plugin\\ConversionFunnel',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Grid\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'orderGridCollectionFilterPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Plugin\\Model\\ResourceModel\\Order\\OrderGridCollectionFilter',
      ),
      'mp_ace_blacklist_add_to_customer_grid' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\AbandonedCart\\Plugin\\Model\\ResourceModel\\Grid\\Collection',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Grid\\Column\\Filter\\FilterInterface' => NULL,
    'Magento\\Backend\\Block\\Widget\\Grid\\Column\\Filter\\AbstractFilter' => NULL,
    'Magento\\Backend\\Block\\Widget\\Grid\\Column\\Filter\\Date' => NULL,
    'Magento\\Backend\\Block\\Widget\\Grid\\Column\\Filter\\Datetime' => 
    array (
      'fix_send_date_overall_report_grid' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\AbandonedCart\\Plugin\\Block\\Widget\\Grid\\Column\\Filter\\Datetime',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\AbstractOrder' => NULL,
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View\\Tab\\Info' => 
    array (
      'mp_delivery_information' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\DeliveryTime\\Block\\Adminhtml\\Plugin\\OrderViewTabInfo',
      ),
      'osc_additional_content' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Osc\\Block\\Adminhtml\\Plugin\\OrderViewTabInfo',
      ),
    ),
    'Magento\\Ui\\Component\\Listing\\Columns\\ColumnInterface' => NULL,
    'Magento\\Ui\\Component\\Listing\\Columns\\Column' => 
    array (
      'osc_customer_grid' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Osc\\Model\\Plugin\\Ui\\Component\\Listing\\Column',
      ),
    ),
    'Magento\\Framework\\Mail\\Template\\ConfigInterface' => NULL,
    'Magento\\Email\\Model\\Template\\Config' => 
    array (
      'mageplaza_smtp_template_abandoned_cart' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Smtp\\Plugin\\Model\\Template\\Config',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Grid\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'orderGridCollectionFilterPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Plugin\\Model\\ResourceModel\\Order\\OrderGridCollectionFilter',
      ),
      'braintreeSalesOrderGrid' => 
      array (
        'sortOrder' => 0,
        'instance' => 'PayPal\\Braintree\\Plugin\\SalesOrderGridPlugin',
      ),
    ),
    'Magento\\Config\\Model\\Config' => 
    array (
      'admin_system_config_save_plugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeSupply\\Toolbox\\Plugin\\ConfigPlugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
      'weltpixel-advancedwishlist-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\AdvancedWishlist\\Plugin\\Utility',
      ),
      'weltpixel-ajaxinfinitescroll-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\AjaxInfiniteScroll\\Plugin\\Utility',
      ),
      'weltpixel-frontendoptions-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\FrontendOptions\\Plugin\\Utility',
      ),
      'weltpixel-customfooter-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CustomFooter\\Plugin\\Utility',
      ),
      'weltpixel-customheader-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CustomHeader\\Plugin\\Utility',
      ),
      'weltpixel-designelements-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\DesignElements\\Plugin\\Utility',
      ),
      'weltpixel-lazyloading-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\LazyLoading\\Plugin\\Utility',
      ),
      'weltpixel-fullpagescroll-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\FullPageScroll\\Plugin\\Utility',
      ),
      'weltpixel-googlecards-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\GoogleCards\\Plugin\\Utility',
      ),
      'weltpixel-googletagmanager-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\Utility',
      ),
      'weltpixel-instagramwidget-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\InstagramWidget\\Plugin\\Utility',
      ),
      'weltpixel-owlcarouselslider-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\OwlCarouselSlider\\Plugin\\Utility',
      ),
      'weltpixel-newsletter-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\Newsletter\\Plugin\\Utility',
      ),
      'weltpixel-categorypage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CategoryPage\\Plugin\\Utility',
      ),
      'weltpixel-productpage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\ProductPage\\Plugin\\Utility',
      ),
      'weltpixel-quickcart-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\QuickCart\\Plugin\\Utility',
      ),
      'weltpixel-quickview-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\Quickview\\Plugin\\Utility',
      ),
      'weltpixel-searchautocomplete-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SearchAutoComplete\\Plugin\\Utility',
      ),
      'weltpixel-sociallogin-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SocialLogin\\Plugin\\Utility',
      ),
      'weltpixel-speedoptimization-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SpeedOptimization\\Plugin\\Utility',
      ),
      'weltpixel-thankyoupage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\ThankYouPage\\Plugin\\Utility',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\AddressSave' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'wesupply-toolbox-address-save' => 
      array (
        'sortOrder' => 5,
        'instance' => 'WeSupply\\Toolbox\\Plugin\\AddressSave',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
      'weltpixel-advancedwishlist-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\AdvancedWishlist\\Plugin\\Utility',
      ),
      'weltpixel-ajaxinfinitescroll-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\AjaxInfiniteScroll\\Plugin\\Utility',
      ),
      'weltpixel-frontendoptions-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\FrontendOptions\\Plugin\\Utility',
      ),
      'weltpixel-customfooter-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CustomFooter\\Plugin\\Utility',
      ),
      'weltpixel-customheader-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CustomHeader\\Plugin\\Utility',
      ),
      'weltpixel-designelements-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\DesignElements\\Plugin\\Utility',
      ),
      'weltpixel-lazyloading-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\LazyLoading\\Plugin\\Utility',
      ),
      'weltpixel-fullpagescroll-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\FullPageScroll\\Plugin\\Utility',
      ),
      'weltpixel-googlecards-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\GoogleCards\\Plugin\\Utility',
      ),
      'weltpixel-googletagmanager-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\Utility',
      ),
      'weltpixel-instagramwidget-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\InstagramWidget\\Plugin\\Utility',
      ),
      'weltpixel-owlcarouselslider-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\OwlCarouselSlider\\Plugin\\Utility',
      ),
      'weltpixel-newsletter-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\Newsletter\\Plugin\\Utility',
      ),
      'weltpixel-categorypage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CategoryPage\\Plugin\\Utility',
      ),
      'weltpixel-productpage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\ProductPage\\Plugin\\Utility',
      ),
      'weltpixel-quickcart-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\QuickCart\\Plugin\\Utility',
      ),
      'weltpixel-quickview-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\Quickview\\Plugin\\Utility',
      ),
      'weltpixel-searchautocomplete-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SearchAutoComplete\\Plugin\\Utility',
      ),
      'weltpixel-sociallogin-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SocialLogin\\Plugin\\Utility',
      ),
      'weltpixel-speedoptimization-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SpeedOptimization\\Plugin\\Utility',
      ),
      'weltpixel-thankyoupage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\ThankYouPage\\Plugin\\Utility',
      ),
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\AddTrack' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'wesupply_tracking_number_added_plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'WeSupply\\Toolbox\\Plugin\\Controller\\Adminhtml\\Order\\Shipment\\AddTrackPlugin',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
      'weltpixel-advancedwishlist-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\AdvancedWishlist\\Plugin\\Utility',
      ),
      'weltpixel-ajaxinfinitescroll-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\AjaxInfiniteScroll\\Plugin\\Utility',
      ),
      'weltpixel-frontendoptions-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\FrontendOptions\\Plugin\\Utility',
      ),
      'weltpixel-customfooter-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CustomFooter\\Plugin\\Utility',
      ),
      'weltpixel-customheader-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CustomHeader\\Plugin\\Utility',
      ),
      'weltpixel-designelements-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\DesignElements\\Plugin\\Utility',
      ),
      'weltpixel-lazyloading-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\LazyLoading\\Plugin\\Utility',
      ),
      'weltpixel-fullpagescroll-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\FullPageScroll\\Plugin\\Utility',
      ),
      'weltpixel-googlecards-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\GoogleCards\\Plugin\\Utility',
      ),
      'weltpixel-googletagmanager-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\Utility',
      ),
      'weltpixel-instagramwidget-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\InstagramWidget\\Plugin\\Utility',
      ),
      'weltpixel-owlcarouselslider-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\OwlCarouselSlider\\Plugin\\Utility',
      ),
      'weltpixel-newsletter-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\Newsletter\\Plugin\\Utility',
      ),
      'weltpixel-categorypage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CategoryPage\\Plugin\\Utility',
      ),
      'weltpixel-productpage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\ProductPage\\Plugin\\Utility',
      ),
      'weltpixel-quickcart-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\QuickCart\\Plugin\\Utility',
      ),
      'weltpixel-quickview-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\Quickview\\Plugin\\Utility',
      ),
      'weltpixel-searchautocomplete-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SearchAutoComplete\\Plugin\\Utility',
      ),
      'weltpixel-sociallogin-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SocialLogin\\Plugin\\Utility',
      ),
      'weltpixel-speedoptimization-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SpeedOptimization\\Plugin\\Utility',
      ),
      'weltpixel-thankyoupage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\ThankYouPage\\Plugin\\Utility',
      ),
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\RemoveTrack' => 
    array (
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
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'wesupply_tracking_number_deleted_plugin' => 
      array (
        'sortOrder' => 20,
        'instance' => 'WeSupply\\Toolbox\\Plugin\\Controller\\Adminhtml\\Order\\Shipment\\RemoveTrackPlugin',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
      'weltpixel-advancedwishlist-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\AdvancedWishlist\\Plugin\\Utility',
      ),
      'weltpixel-ajaxinfinitescroll-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\AjaxInfiniteScroll\\Plugin\\Utility',
      ),
      'weltpixel-frontendoptions-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\FrontendOptions\\Plugin\\Utility',
      ),
      'weltpixel-customfooter-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CustomFooter\\Plugin\\Utility',
      ),
      'weltpixel-customheader-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CustomHeader\\Plugin\\Utility',
      ),
      'weltpixel-designelements-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\DesignElements\\Plugin\\Utility',
      ),
      'weltpixel-lazyloading-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\LazyLoading\\Plugin\\Utility',
      ),
      'weltpixel-fullpagescroll-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\FullPageScroll\\Plugin\\Utility',
      ),
      'weltpixel-googlecards-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\GoogleCards\\Plugin\\Utility',
      ),
      'weltpixel-googletagmanager-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\GoogleTagManager\\Plugin\\Utility',
      ),
      'weltpixel-instagramwidget-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\InstagramWidget\\Plugin\\Utility',
      ),
      'weltpixel-owlcarouselslider-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\OwlCarouselSlider\\Plugin\\Utility',
      ),
      'weltpixel-newsletter-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\Newsletter\\Plugin\\Utility',
      ),
      'weltpixel-categorypage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\CategoryPage\\Plugin\\Utility',
      ),
      'weltpixel-productpage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\ProductPage\\Plugin\\Utility',
      ),
      'weltpixel-quickcart-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\QuickCart\\Plugin\\Utility',
      ),
      'weltpixel-quickview-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\Quickview\\Plugin\\Utility',
      ),
      'weltpixel-searchautocomplete-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SearchAutoComplete\\Plugin\\Utility',
      ),
      'weltpixel-sociallogin-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SocialLogin\\Plugin\\Utility',
      ),
      'weltpixel-speedoptimization-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\SpeedOptimization\\Plugin\\Utility',
      ),
      'weltpixel-thankyoupage-utility' => 
      array (
        'sortOrder' => 1000,
        'instance' => 'WeltPixel\\ThankYouPage\\Plugin\\Utility',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Form\\Container' => NULL,
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View' => 
    array (
      'wesupply_external_links' => 
      array (
        'sortOrder' => 0,
        'instance' => 'WeSupply\\Toolbox\\Plugin\\Adminhtml\\Block\\Order\\ViewPlugin',
      ),
    ),
    'Magento\\CatalogStaging\\Model\\Category\\DataProvider' => 
    array (
      'weltpixel-backend-categorystaging-dataprovider' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\Backend\\Plugin\\CategoryStaging\\DataProvider',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Sidebar\\Wishlist' => 
    array (
      'weltpixel-advancedwishlist-adminhtml-order-wishlist' => 
      array (
        'sortOrder' => 1,
        'instance' => 'WeltPixel\\AdvancedWishlist\\Plugin\\Adminhtml\\OrderWishlist',
      ),
      'GroupedProduct' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\GroupedProduct\\Block\\Adminhtml\\Order\\Create\\Sidebar',
      ),
      'Bundle' => 
      array (
        'sortOrder' => 200,
        'instance' => 'Magento\\Bundle\\Block\\Adminhtml\\Order\\Create\\Sidebar',
      ),
      'configurable' => 
      array (
        'sortOrder' => 200,
        'instance' => 'Magento\\ConfigurableProduct\\Block\\Adminhtml\\Order\\Create\\Sidebar',
      ),
    ),
    'Magento\\Cms\\Model\\PageRepository' => 
    array (
      'weltpixel-save-og-image' => 
      array (
        'sortOrder' => 0,
        'instance' => 'WeltPixel\\GoogleCards\\Plugin\\PageRepositoryPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockItemRepositoryInterface' => 
    array (
      'apply_quickviewmessages_rules_after_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'WeltPixel\\Quickview\\Plugin\\Indexer\\StockItem\\Save\\ApplyRules',
      ),
    ),
    'Magento\\CatalogRule\\Model\\Rule\\Condition\\Product' => 
    array (
      'apply_quickviewmessages_quantity_combination_assign' => 
      array (
        'sortOrder' => 0,
        'instance' => 'WeltPixel\\Quickview\\Plugin\\Indexer\\ConditionProduct',
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
      1 => 
      array (
        0 => 'default_store_setter',
        1 => 'configHash',
      ),
    ),
    'Magento\\Framework\\App\\FrontController_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'default_store_setter',
        1 => 'storeCookieValidate',
        2 => 'install',
        3 => 'configHash',
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
      2 => 'reindex_customer_grid_after_website_remove',
    ),
    'Magento\\Store\\Model\\Website_delete_reindex_customer_grid_after_website_remove' => 
    array (
      4 => 
      array (
        0 => 'deleteCustomerGroupExcludedWebsiteAfterWebsiteDelete',
        1 => 'reindex_after_delete_website',
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
    'Magento\\Framework\\Data\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
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
    'Magento\\Backend\\Model\\Auth\\Session_prolong_admin_adobe_ims_backend_auth_session' => 
    array (
      2 => 'security_admin_sessions_prolong',
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
    'Magento\\Cms\\Model\\PageRepository\\ValidationComposite_save___self' => 
    array (
      1 => 
      array (
        0 => 'weltpixel-cms-pagerepository-validationcomposition',
        1 => 'cms_validate_url_plugin',
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
        6 => 'reindex_after_import',
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
    'Magento\\Catalog\\Model\\Category\\DataProvider_getAttributesMeta___self' => 
    array (
      4 => 
      array (
        0 => 'category_ui_form_url_key_plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Category\\DataProvider_prepareMeta___self' => 
    array (
      4 => 
      array (
        0 => 'google_optimizer_category_data_provider',
        1 => 'weltpixel-designelements-category-dataprovider',
        2 => 'weltpixel-categorypage-category-dataprovider',
        3 => 'weltpixel-titlerewrite-category-dataprovider',
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
        5 => 'store_plugin',
        6 => 'update_cms_url_rewrites_after_store_save',
      ),
      1 => 
      array (
        0 => 'store_plugin',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Store_delete___self' => 
    array (
      4 => 
      array (
        0 => 'categoryStoreAroundSave',
        1 => 'catalogsearchFulltextIndexerStoreView',
        2 => 'store_plugin',
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
        5 => 'group_plugin',
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
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\Helper_initialize___self' => 
    array (
      4 => 
      array (
        0 => 'product_save_rewrites_history_plugin',
        1 => 'configurable',
        2 => 'Bundle',
        3 => 'updateConfigurations',
        4 => 'Downloadable',
        5 => 'cleanConfigurationTmpImages',
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
        0 => 'configurableProductSaveOptions',
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
        3 => 'invalidate_pagecache_after_update_product_attributes',
        4 => 'price_plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Action_updateWebsites___self' => 
    array (
      4 => 
      array (
        0 => 'catalogsearchFulltextMassAction',
        1 => 'update_url_rewrites_after_websites_update_plugin',
        2 => 'invalidate_pagecache_after_update_product_attributes',
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
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Backend\\App\\AbstractAction_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\Backend\\App\\AbstractAction_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Backend\\App\\AbstractAction_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
      2 => 'weltpixel-advancedwishlist-utility',
    ),
    'Magento\\Backend\\App\\AbstractAction_dispatch_weltpixel-advancedwishlist-utility' => 
    array (
      2 => 'weltpixel-ajaxinfinitescroll-utility',
    ),
    'Magento\\Backend\\App\\AbstractAction_dispatch_weltpixel-ajaxinfinitescroll-utility' => 
    array (
      2 => 'weltpixel-frontendoptions-utility',
    ),
    'Magento\\Backend\\App\\AbstractAction_dispatch_weltpixel-frontendoptions-utility' => 
    array (
      2 => 'weltpixel-customfooter-utility',
    ),
    'Magento\\Backend\\App\\AbstractAction_dispatch_weltpixel-customfooter-utility' => 
    array (
      2 => 'weltpixel-customheader-utility',
    ),
    'Magento\\Backend\\App\\AbstractAction_dispatch_weltpixel-customheader-utility' => 
    array (
      2 => 'weltpixel-designelements-utility',
    ),
    'Magento\\Backend\\App\\AbstractAction_dispatch_weltpixel-designelements-utility' => 
    array (
      2 => 'weltpixel-lazyloading-utility',
    ),
    'Magento\\Backend\\App\\AbstractAction_dispatch_weltpixel-lazyloading-utility' => 
    array (
      2 => 'weltpixel-fullpagescroll-utility',
    ),
    'Magento\\Backend\\App\\AbstractAction_dispatch_weltpixel-fullpagescroll-utility' => 
    array (
      2 => 'weltpixel-googlecards-utility',
    ),
    'Magento\\Backend\\App\\AbstractAction_dispatch_weltpixel-googlecards-utility' => 
    array (
      2 => 'weltpixel-googletagmanager-utility',
    ),
    'Magento\\Backend\\App\\AbstractAction_dispatch_weltpixel-googletagmanager-utility' => 
    array (
      2 => 'weltpixel-instagramwidget-utility',
    ),
    'Magento\\Backend\\App\\AbstractAction_dispatch_weltpixel-instagramwidget-utility' => 
    array (
      2 => 'weltpixel-owlcarouselslider-utility',
    ),
    'Magento\\Backend\\App\\AbstractAction_dispatch_weltpixel-owlcarouselslider-utility' => 
    array (
      2 => 'weltpixel-newsletter-utility',
    ),
    'Magento\\Backend\\App\\AbstractAction_dispatch_weltpixel-newsletter-utility' => 
    array (
      2 => 'weltpixel-categorypage-utility',
    ),
    'Magento\\Backend\\App\\AbstractAction_dispatch_weltpixel-categorypage-utility' => 
    array (
      2 => 'weltpixel-productpage-utility',
    ),
    'Magento\\Backend\\App\\AbstractAction_dispatch_weltpixel-productpage-utility' => 
    array (
      2 => 'weltpixel-quickcart-utility',
    ),
    'Magento\\Backend\\App\\AbstractAction_dispatch_weltpixel-quickcart-utility' => 
    array (
      2 => 'weltpixel-quickview-utility',
    ),
    'Magento\\Backend\\App\\AbstractAction_dispatch_weltpixel-quickview-utility' => 
    array (
      2 => 'weltpixel-searchautocomplete-utility',
    ),
    'Magento\\Backend\\App\\AbstractAction_dispatch_weltpixel-searchautocomplete-utility' => 
    array (
      2 => 'weltpixel-sociallogin-utility',
    ),
    'Magento\\Backend\\App\\AbstractAction_dispatch_weltpixel-sociallogin-utility' => 
    array (
      2 => 'weltpixel-speedoptimization-utility',
    ),
    'Magento\\Backend\\App\\AbstractAction_dispatch_weltpixel-speedoptimization-utility' => 
    array (
      2 => 'weltpixel-thankyoupage-utility',
    ),
    'Magento\\Backend\\App\\Action_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\Backend\\App\\Action_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Backend\\App\\Action_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
      2 => 'weltpixel-advancedwishlist-utility',
    ),
    'Magento\\Backend\\App\\Action_dispatch_weltpixel-advancedwishlist-utility' => 
    array (
      2 => 'weltpixel-ajaxinfinitescroll-utility',
    ),
    'Magento\\Backend\\App\\Action_dispatch_weltpixel-ajaxinfinitescroll-utility' => 
    array (
      2 => 'weltpixel-frontendoptions-utility',
    ),
    'Magento\\Backend\\App\\Action_dispatch_weltpixel-frontendoptions-utility' => 
    array (
      2 => 'weltpixel-customfooter-utility',
    ),
    'Magento\\Backend\\App\\Action_dispatch_weltpixel-customfooter-utility' => 
    array (
      2 => 'weltpixel-customheader-utility',
    ),
    'Magento\\Backend\\App\\Action_dispatch_weltpixel-customheader-utility' => 
    array (
      2 => 'weltpixel-designelements-utility',
    ),
    'Magento\\Backend\\App\\Action_dispatch_weltpixel-designelements-utility' => 
    array (
      2 => 'weltpixel-lazyloading-utility',
    ),
    'Magento\\Backend\\App\\Action_dispatch_weltpixel-lazyloading-utility' => 
    array (
      2 => 'weltpixel-fullpagescroll-utility',
    ),
    'Magento\\Backend\\App\\Action_dispatch_weltpixel-fullpagescroll-utility' => 
    array (
      2 => 'weltpixel-googlecards-utility',
    ),
    'Magento\\Backend\\App\\Action_dispatch_weltpixel-googlecards-utility' => 
    array (
      2 => 'weltpixel-googletagmanager-utility',
    ),
    'Magento\\Backend\\App\\Action_dispatch_weltpixel-googletagmanager-utility' => 
    array (
      2 => 'weltpixel-instagramwidget-utility',
    ),
    'Magento\\Backend\\App\\Action_dispatch_weltpixel-instagramwidget-utility' => 
    array (
      2 => 'weltpixel-owlcarouselslider-utility',
    ),
    'Magento\\Backend\\App\\Action_dispatch_weltpixel-owlcarouselslider-utility' => 
    array (
      2 => 'weltpixel-newsletter-utility',
    ),
    'Magento\\Backend\\App\\Action_dispatch_weltpixel-newsletter-utility' => 
    array (
      2 => 'weltpixel-categorypage-utility',
    ),
    'Magento\\Backend\\App\\Action_dispatch_weltpixel-categorypage-utility' => 
    array (
      2 => 'weltpixel-productpage-utility',
    ),
    'Magento\\Backend\\App\\Action_dispatch_weltpixel-productpage-utility' => 
    array (
      2 => 'weltpixel-quickcart-utility',
    ),
    'Magento\\Backend\\App\\Action_dispatch_weltpixel-quickcart-utility' => 
    array (
      2 => 'weltpixel-quickview-utility',
    ),
    'Magento\\Backend\\App\\Action_dispatch_weltpixel-quickview-utility' => 
    array (
      2 => 'weltpixel-searchautocomplete-utility',
    ),
    'Magento\\Backend\\App\\Action_dispatch_weltpixel-searchautocomplete-utility' => 
    array (
      2 => 'weltpixel-sociallogin-utility',
    ),
    'Magento\\Backend\\App\\Action_dispatch_weltpixel-sociallogin-utility' => 
    array (
      2 => 'weltpixel-speedoptimization-utility',
    ),
    'Magento\\Backend\\App\\Action_dispatch_weltpixel-speedoptimization-utility' => 
    array (
      2 => 'weltpixel-thankyoupage-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
      2 => 'weltpixel-advancedwishlist-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute_dispatch_weltpixel-advancedwishlist-utility' => 
    array (
      2 => 'weltpixel-ajaxinfinitescroll-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute_dispatch_weltpixel-ajaxinfinitescroll-utility' => 
    array (
      2 => 'weltpixel-frontendoptions-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute_dispatch_weltpixel-frontendoptions-utility' => 
    array (
      2 => 'weltpixel-customfooter-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute_dispatch_weltpixel-customfooter-utility' => 
    array (
      2 => 'weltpixel-customheader-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute_dispatch_weltpixel-customheader-utility' => 
    array (
      2 => 'weltpixel-designelements-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute_dispatch_weltpixel-designelements-utility' => 
    array (
      2 => 'weltpixel-lazyloading-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute_dispatch_weltpixel-lazyloading-utility' => 
    array (
      2 => 'weltpixel-fullpagescroll-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute_dispatch_weltpixel-fullpagescroll-utility' => 
    array (
      2 => 'weltpixel-googlecards-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute_dispatch_weltpixel-googlecards-utility' => 
    array (
      2 => 'weltpixel-googletagmanager-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute_dispatch_weltpixel-googletagmanager-utility' => 
    array (
      2 => 'weltpixel-instagramwidget-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute_dispatch_weltpixel-instagramwidget-utility' => 
    array (
      2 => 'weltpixel-owlcarouselslider-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute_dispatch_weltpixel-owlcarouselslider-utility' => 
    array (
      2 => 'weltpixel-newsletter-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute_dispatch_weltpixel-newsletter-utility' => 
    array (
      2 => 'weltpixel-categorypage-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute_dispatch_weltpixel-categorypage-utility' => 
    array (
      2 => 'weltpixel-productpage-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute_dispatch_weltpixel-productpage-utility' => 
    array (
      2 => 'weltpixel-quickcart-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute_dispatch_weltpixel-quickcart-utility' => 
    array (
      2 => 'weltpixel-quickview-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute_dispatch_weltpixel-quickview-utility' => 
    array (
      2 => 'weltpixel-searchautocomplete-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute_dispatch_weltpixel-searchautocomplete-utility' => 
    array (
      2 => 'weltpixel-sociallogin-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute_dispatch_weltpixel-sociallogin-utility' => 
    array (
      2 => 'weltpixel-speedoptimization-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute_dispatch_weltpixel-speedoptimization-utility' => 
    array (
      2 => 'weltpixel-thankyoupage-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
      2 => 'massAction',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
      2 => 'weltpixel-advancedwishlist-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save_dispatch_weltpixel-advancedwishlist-utility' => 
    array (
      2 => 'weltpixel-ajaxinfinitescroll-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save_dispatch_weltpixel-ajaxinfinitescroll-utility' => 
    array (
      2 => 'weltpixel-frontendoptions-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save_dispatch_weltpixel-frontendoptions-utility' => 
    array (
      2 => 'weltpixel-customfooter-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save_dispatch_weltpixel-customfooter-utility' => 
    array (
      2 => 'weltpixel-customheader-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save_dispatch_weltpixel-customheader-utility' => 
    array (
      2 => 'weltpixel-designelements-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save_dispatch_weltpixel-designelements-utility' => 
    array (
      2 => 'weltpixel-lazyloading-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save_dispatch_weltpixel-lazyloading-utility' => 
    array (
      2 => 'weltpixel-fullpagescroll-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save_dispatch_weltpixel-fullpagescroll-utility' => 
    array (
      2 => 'weltpixel-googlecards-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save_dispatch_weltpixel-googlecards-utility' => 
    array (
      2 => 'weltpixel-googletagmanager-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save_dispatch_weltpixel-googletagmanager-utility' => 
    array (
      2 => 'weltpixel-instagramwidget-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save_dispatch_weltpixel-instagramwidget-utility' => 
    array (
      2 => 'weltpixel-owlcarouselslider-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save_dispatch_weltpixel-owlcarouselslider-utility' => 
    array (
      2 => 'weltpixel-newsletter-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save_dispatch_weltpixel-newsletter-utility' => 
    array (
      2 => 'weltpixel-categorypage-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save_dispatch_weltpixel-categorypage-utility' => 
    array (
      2 => 'weltpixel-productpage-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save_dispatch_weltpixel-productpage-utility' => 
    array (
      2 => 'weltpixel-quickcart-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save_dispatch_weltpixel-quickcart-utility' => 
    array (
      2 => 'weltpixel-quickview-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save_dispatch_weltpixel-quickview-utility' => 
    array (
      2 => 'weltpixel-searchautocomplete-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save_dispatch_weltpixel-searchautocomplete-utility' => 
    array (
      2 => 'weltpixel-sociallogin-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save_dispatch_weltpixel-sociallogin-utility' => 
    array (
      2 => 'weltpixel-speedoptimization-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save_dispatch_weltpixel-speedoptimization-utility' => 
    array (
      2 => 'weltpixel-thankyoupage-utility',
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
      2 => 'reload_attributes',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product_save_catalogsearchFulltextProduct' => 
    array (
      4 => 
      array (
        0 => 'update_quote_items_after_product_save',
        1 => 'apply_catalog_rules_after_product_save',
        2 => 'apply_quickviewmessages_rules_after_product_save',
      ),
      1 => 
      array (
        0 => 'reload_attributes',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product_delete_reload_attributes' => 
    array (
      1 => 
      array (
        0 => 'cleanups_wishlist_item_after_product_delete',
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
        1 => 'invalidate_pagecache_after_attribute_save',
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
    'Magento\\User\\Model\\User_verifyIdentity___self' => 
    array (
      2 => 'aroundVerifyIdentity',
    ),
    'Magento\\User\\Model\\User_beforeSave___self' => 
    array (
      1 => 
      array (
        0 => 'user_save',
      ),
    ),
    'Magento\\User\\Model\\User_performIdentityCheck___self' => 
    array (
      2 => 'change_perform_identity_check_message',
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
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Creditmemo_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Creditmemo_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
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
        0 => 'designLoader',
        1 => 'customerNotification',
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
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Invoice_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
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
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintAction_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
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
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintCreditmemo_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
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
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintInvoice_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
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
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintShipment_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
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
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Reorder_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
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
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Shipment_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
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
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\View_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
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
        0 => 'designLoader',
        1 => 'customerNotification',
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
        1 => 'security_admin_sessions_login',
      ),
    ),
    'Magento\\Backend\\Model\\Auth_login___self' => 
    array (
      2 => 'disable_admin_login_auth',
    ),
    'Magento\\Backend\\Model\\Auth_login_disable_admin_login_auth' => 
    array (
      4 => 
      array (
        0 => 'security_admin_sessions_login',
        1 => 'pagebuilder_clear_editor_config_cache',
      ),
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
    'Magento\\Sales\\Model\\Order_place___self' => 
    array (
      4 => 
      array (
        0 => 'admin-order-placement-comment',
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
    'Magento\\Framework\\Data\\Collection\\AbstractDb_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\Collection\\AbstractCollection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Collection\\AbstractCollection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\ResourceModel\\Product\\Type\\Configurable\\Product\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
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
    'Magento\\Catalog\\Model\\ResourceModel\\Eav\\Attribute_save___self' => 
    array (
      4 => 
      array (
        0 => 'change_product_attribute',
        1 => 'invalidate_caches_after_attribute_save',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Eav\\Attribute_delete___self' => 
    array (
      4 => 
      array (
        0 => 'change_product_attribute',
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
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
      2 => 'weltpixel-advancedwishlist-utility',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth_dispatch_weltpixel-advancedwishlist-utility' => 
    array (
      2 => 'weltpixel-ajaxinfinitescroll-utility',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth_dispatch_weltpixel-ajaxinfinitescroll-utility' => 
    array (
      2 => 'weltpixel-frontendoptions-utility',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth_dispatch_weltpixel-frontendoptions-utility' => 
    array (
      2 => 'weltpixel-customfooter-utility',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth_dispatch_weltpixel-customfooter-utility' => 
    array (
      2 => 'weltpixel-customheader-utility',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth_dispatch_weltpixel-customheader-utility' => 
    array (
      2 => 'weltpixel-designelements-utility',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth_dispatch_weltpixel-designelements-utility' => 
    array (
      2 => 'weltpixel-lazyloading-utility',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth_dispatch_weltpixel-lazyloading-utility' => 
    array (
      2 => 'weltpixel-fullpagescroll-utility',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth_dispatch_weltpixel-fullpagescroll-utility' => 
    array (
      2 => 'weltpixel-googlecards-utility',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth_dispatch_weltpixel-googlecards-utility' => 
    array (
      2 => 'weltpixel-googletagmanager-utility',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth_dispatch_weltpixel-googletagmanager-utility' => 
    array (
      2 => 'weltpixel-instagramwidget-utility',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth_dispatch_weltpixel-instagramwidget-utility' => 
    array (
      2 => 'weltpixel-owlcarouselslider-utility',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth_dispatch_weltpixel-owlcarouselslider-utility' => 
    array (
      2 => 'weltpixel-newsletter-utility',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth_dispatch_weltpixel-newsletter-utility' => 
    array (
      2 => 'weltpixel-categorypage-utility',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth_dispatch_weltpixel-categorypage-utility' => 
    array (
      2 => 'weltpixel-productpage-utility',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth_dispatch_weltpixel-productpage-utility' => 
    array (
      2 => 'weltpixel-quickcart-utility',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth_dispatch_weltpixel-quickcart-utility' => 
    array (
      2 => 'weltpixel-quickview-utility',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth_dispatch_weltpixel-quickview-utility' => 
    array (
      2 => 'weltpixel-searchautocomplete-utility',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth_dispatch_weltpixel-searchautocomplete-utility' => 
    array (
      2 => 'weltpixel-sociallogin-utility',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth_dispatch_weltpixel-sociallogin-utility' => 
    array (
      2 => 'weltpixel-speedoptimization-utility',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth_dispatch_weltpixel-speedoptimization-utility' => 
    array (
      2 => 'weltpixel-thankyoupage-utility',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth\\Forgotpassword_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
      2 => 'admin_forgot_password_plugin',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth\\Forgotpassword_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth\\Forgotpassword_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
      2 => 'weltpixel-advancedwishlist-utility',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth\\Forgotpassword_dispatch_weltpixel-advancedwishlist-utility' => 
    array (
      2 => 'weltpixel-ajaxinfinitescroll-utility',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth\\Forgotpassword_dispatch_weltpixel-ajaxinfinitescroll-utility' => 
    array (
      2 => 'weltpixel-frontendoptions-utility',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth\\Forgotpassword_dispatch_weltpixel-frontendoptions-utility' => 
    array (
      2 => 'weltpixel-customfooter-utility',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth\\Forgotpassword_dispatch_weltpixel-customfooter-utility' => 
    array (
      2 => 'weltpixel-customheader-utility',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth\\Forgotpassword_dispatch_weltpixel-customheader-utility' => 
    array (
      2 => 'weltpixel-designelements-utility',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth\\Forgotpassword_dispatch_weltpixel-designelements-utility' => 
    array (
      2 => 'weltpixel-lazyloading-utility',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth\\Forgotpassword_dispatch_weltpixel-lazyloading-utility' => 
    array (
      2 => 'weltpixel-fullpagescroll-utility',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth\\Forgotpassword_dispatch_weltpixel-fullpagescroll-utility' => 
    array (
      2 => 'weltpixel-googlecards-utility',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth\\Forgotpassword_dispatch_weltpixel-googlecards-utility' => 
    array (
      2 => 'weltpixel-googletagmanager-utility',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth\\Forgotpassword_dispatch_weltpixel-googletagmanager-utility' => 
    array (
      2 => 'weltpixel-instagramwidget-utility',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth\\Forgotpassword_dispatch_weltpixel-instagramwidget-utility' => 
    array (
      2 => 'weltpixel-owlcarouselslider-utility',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth\\Forgotpassword_dispatch_weltpixel-owlcarouselslider-utility' => 
    array (
      2 => 'weltpixel-newsletter-utility',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth\\Forgotpassword_dispatch_weltpixel-newsletter-utility' => 
    array (
      2 => 'weltpixel-categorypage-utility',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth\\Forgotpassword_dispatch_weltpixel-categorypage-utility' => 
    array (
      2 => 'weltpixel-productpage-utility',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth\\Forgotpassword_dispatch_weltpixel-productpage-utility' => 
    array (
      2 => 'weltpixel-quickcart-utility',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth\\Forgotpassword_dispatch_weltpixel-quickcart-utility' => 
    array (
      2 => 'weltpixel-quickview-utility',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth\\Forgotpassword_dispatch_weltpixel-quickview-utility' => 
    array (
      2 => 'weltpixel-searchautocomplete-utility',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth\\Forgotpassword_dispatch_weltpixel-searchautocomplete-utility' => 
    array (
      2 => 'weltpixel-sociallogin-utility',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth\\Forgotpassword_dispatch_weltpixel-sociallogin-utility' => 
    array (
      2 => 'weltpixel-speedoptimization-utility',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth\\Forgotpassword_dispatch_weltpixel-speedoptimization-utility' => 
    array (
      2 => 'weltpixel-thankyoupage-utility',
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
    'Magento\\Integration\\Model\\AdminTokenService_revokeAdminAccessToken___self' => 
    array (
      4 => 
      array (
        0 => 'revoke_admin_access_token',
      ),
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
      1 => 
      array (
        0 => 'default_store_setter',
        1 => 'webapiContorllerRestAsync',
        2 => 'configHash',
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
        0 => 'designLoader',
        1 => 'customerNotification',
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
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Newsletter\\Controller\\Manage\\Save_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
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
    'Magento\\Sales\\Model\\Order\\Invoice_setTotalQty___self' => 
    array (
      1 => 
      array (
        0 => 'update_configurable_product_total_qty',
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
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
      2 => 'weltpixel-advancedwishlist-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage_dispatch_weltpixel-advancedwishlist-utility' => 
    array (
      2 => 'weltpixel-ajaxinfinitescroll-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage_dispatch_weltpixel-ajaxinfinitescroll-utility' => 
    array (
      2 => 'weltpixel-frontendoptions-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage_dispatch_weltpixel-frontendoptions-utility' => 
    array (
      2 => 'weltpixel-customfooter-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage_dispatch_weltpixel-customfooter-utility' => 
    array (
      2 => 'weltpixel-customheader-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage_dispatch_weltpixel-customheader-utility' => 
    array (
      2 => 'weltpixel-designelements-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage_dispatch_weltpixel-designelements-utility' => 
    array (
      2 => 'weltpixel-lazyloading-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage_dispatch_weltpixel-lazyloading-utility' => 
    array (
      2 => 'weltpixel-fullpagescroll-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage_dispatch_weltpixel-fullpagescroll-utility' => 
    array (
      2 => 'weltpixel-googlecards-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage_dispatch_weltpixel-googlecards-utility' => 
    array (
      2 => 'weltpixel-googletagmanager-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage_dispatch_weltpixel-googletagmanager-utility' => 
    array (
      2 => 'weltpixel-instagramwidget-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage_dispatch_weltpixel-instagramwidget-utility' => 
    array (
      2 => 'weltpixel-owlcarouselslider-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage_dispatch_weltpixel-owlcarouselslider-utility' => 
    array (
      2 => 'weltpixel-newsletter-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage_dispatch_weltpixel-newsletter-utility' => 
    array (
      2 => 'weltpixel-categorypage-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage_dispatch_weltpixel-categorypage-utility' => 
    array (
      2 => 'weltpixel-productpage-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage_dispatch_weltpixel-productpage-utility' => 
    array (
      2 => 'weltpixel-quickcart-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage_dispatch_weltpixel-quickcart-utility' => 
    array (
      2 => 'weltpixel-quickview-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage_dispatch_weltpixel-quickview-utility' => 
    array (
      2 => 'weltpixel-searchautocomplete-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage_dispatch_weltpixel-searchautocomplete-utility' => 
    array (
      2 => 'weltpixel-sociallogin-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage_dispatch_weltpixel-sociallogin-utility' => 
    array (
      2 => 'weltpixel-speedoptimization-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage_dispatch_weltpixel-speedoptimization-utility' => 
    array (
      2 => 'weltpixel-thankyoupage-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage\\Save_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
      2 => 'wesupply-giftmessage-admin-save',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage\\Save_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage\\Save_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
      2 => 'weltpixel-advancedwishlist-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage\\Save_dispatch_weltpixel-advancedwishlist-utility' => 
    array (
      2 => 'weltpixel-ajaxinfinitescroll-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage\\Save_dispatch_weltpixel-ajaxinfinitescroll-utility' => 
    array (
      2 => 'weltpixel-frontendoptions-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage\\Save_dispatch_weltpixel-frontendoptions-utility' => 
    array (
      2 => 'weltpixel-customfooter-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage\\Save_dispatch_weltpixel-customfooter-utility' => 
    array (
      2 => 'weltpixel-customheader-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage\\Save_dispatch_weltpixel-customheader-utility' => 
    array (
      2 => 'weltpixel-designelements-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage\\Save_dispatch_weltpixel-designelements-utility' => 
    array (
      2 => 'weltpixel-lazyloading-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage\\Save_dispatch_weltpixel-lazyloading-utility' => 
    array (
      2 => 'weltpixel-fullpagescroll-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage\\Save_dispatch_weltpixel-fullpagescroll-utility' => 
    array (
      2 => 'weltpixel-googlecards-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage\\Save_dispatch_weltpixel-googlecards-utility' => 
    array (
      2 => 'weltpixel-googletagmanager-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage\\Save_dispatch_weltpixel-googletagmanager-utility' => 
    array (
      2 => 'weltpixel-instagramwidget-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage\\Save_dispatch_weltpixel-instagramwidget-utility' => 
    array (
      2 => 'weltpixel-owlcarouselslider-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage\\Save_dispatch_weltpixel-owlcarouselslider-utility' => 
    array (
      2 => 'weltpixel-newsletter-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage\\Save_dispatch_weltpixel-newsletter-utility' => 
    array (
      2 => 'weltpixel-categorypage-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage\\Save_dispatch_weltpixel-categorypage-utility' => 
    array (
      2 => 'weltpixel-productpage-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage\\Save_dispatch_weltpixel-productpage-utility' => 
    array (
      2 => 'weltpixel-quickcart-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage\\Save_dispatch_weltpixel-quickcart-utility' => 
    array (
      2 => 'weltpixel-quickview-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage\\Save_dispatch_weltpixel-quickview-utility' => 
    array (
      2 => 'weltpixel-searchautocomplete-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage\\Save_dispatch_weltpixel-searchautocomplete-utility' => 
    array (
      2 => 'weltpixel-sociallogin-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage\\Save_dispatch_weltpixel-sociallogin-utility' => 
    array (
      2 => 'weltpixel-speedoptimization-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\View\\Giftmessage\\Save_dispatch_weltpixel-speedoptimization-utility' => 
    array (
      2 => 'weltpixel-thankyoupage-utility',
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
    'Magento\\Eav\\Model\\Adminhtml\\System\\Config\\Source\\Inputtype_toOptionArray___self' => 
    array (
      4 => 
      array (
        0 => 'process_page_builder_input_type',
      ),
    ),
    'Magento\\Eav\\Model\\Adminhtml\\System\\Config\\Source\\Inputtype_getVolatileInputTypes___self' => 
    array (
      4 => 
      array (
        0 => 'process_page_builder_input_type',
        1 => 'append_compatible_input_types',
      ),
    ),
    'Magento\\Ui\\Model\\Export\\MetadataProvider_getHeaders___self' => 
    array (
      4 => 
      array (
        0 => 'orderGridExportFilterColumnPlugin',
      ),
    ),
    'Magento\\Ui\\Model\\Export\\MetadataProvider_getFields___self' => 
    array (
      4 => 
      array (
        0 => 'orderGridExportFilterColumnPlugin',
      ),
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
      2 => 'weltpixel-advancedwishlist-utility',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth_dispatch_weltpixel-advancedwishlist-utility' => 
    array (
      2 => 'weltpixel-ajaxinfinitescroll-utility',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth_dispatch_weltpixel-ajaxinfinitescroll-utility' => 
    array (
      2 => 'weltpixel-frontendoptions-utility',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth_dispatch_weltpixel-frontendoptions-utility' => 
    array (
      2 => 'weltpixel-customfooter-utility',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth_dispatch_weltpixel-customfooter-utility' => 
    array (
      2 => 'weltpixel-customheader-utility',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth_dispatch_weltpixel-customheader-utility' => 
    array (
      2 => 'weltpixel-designelements-utility',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth_dispatch_weltpixel-designelements-utility' => 
    array (
      2 => 'weltpixel-lazyloading-utility',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth_dispatch_weltpixel-lazyloading-utility' => 
    array (
      2 => 'weltpixel-fullpagescroll-utility',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth_dispatch_weltpixel-fullpagescroll-utility' => 
    array (
      2 => 'weltpixel-googlecards-utility',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth_dispatch_weltpixel-googlecards-utility' => 
    array (
      2 => 'weltpixel-googletagmanager-utility',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth_dispatch_weltpixel-googletagmanager-utility' => 
    array (
      2 => 'weltpixel-instagramwidget-utility',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth_dispatch_weltpixel-instagramwidget-utility' => 
    array (
      2 => 'weltpixel-owlcarouselslider-utility',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth_dispatch_weltpixel-owlcarouselslider-utility' => 
    array (
      2 => 'weltpixel-newsletter-utility',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth_dispatch_weltpixel-newsletter-utility' => 
    array (
      2 => 'weltpixel-categorypage-utility',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth_dispatch_weltpixel-categorypage-utility' => 
    array (
      2 => 'weltpixel-productpage-utility',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth_dispatch_weltpixel-productpage-utility' => 
    array (
      2 => 'weltpixel-quickcart-utility',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth_dispatch_weltpixel-quickcart-utility' => 
    array (
      2 => 'weltpixel-quickview-utility',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth_dispatch_weltpixel-quickview-utility' => 
    array (
      2 => 'weltpixel-searchautocomplete-utility',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth_dispatch_weltpixel-searchautocomplete-utility' => 
    array (
      2 => 'weltpixel-sociallogin-utility',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth_dispatch_weltpixel-sociallogin-utility' => 
    array (
      2 => 'weltpixel-speedoptimization-utility',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth_dispatch_weltpixel-speedoptimization-utility' => 
    array (
      2 => 'weltpixel-thankyoupage-utility',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth\\Login_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
        3 => 'security_login_form',
      ),
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth\\Login_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth\\Login_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
      2 => 'weltpixel-advancedwishlist-utility',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth\\Login_dispatch_weltpixel-advancedwishlist-utility' => 
    array (
      2 => 'weltpixel-ajaxinfinitescroll-utility',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth\\Login_dispatch_weltpixel-ajaxinfinitescroll-utility' => 
    array (
      2 => 'weltpixel-frontendoptions-utility',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth\\Login_dispatch_weltpixel-frontendoptions-utility' => 
    array (
      2 => 'weltpixel-customfooter-utility',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth\\Login_dispatch_weltpixel-customfooter-utility' => 
    array (
      2 => 'weltpixel-customheader-utility',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth\\Login_dispatch_weltpixel-customheader-utility' => 
    array (
      2 => 'weltpixel-designelements-utility',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth\\Login_dispatch_weltpixel-designelements-utility' => 
    array (
      2 => 'weltpixel-lazyloading-utility',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth\\Login_dispatch_weltpixel-lazyloading-utility' => 
    array (
      2 => 'weltpixel-fullpagescroll-utility',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth\\Login_dispatch_weltpixel-fullpagescroll-utility' => 
    array (
      2 => 'weltpixel-googlecards-utility',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth\\Login_dispatch_weltpixel-googlecards-utility' => 
    array (
      2 => 'weltpixel-googletagmanager-utility',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth\\Login_dispatch_weltpixel-googletagmanager-utility' => 
    array (
      2 => 'weltpixel-instagramwidget-utility',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth\\Login_dispatch_weltpixel-instagramwidget-utility' => 
    array (
      2 => 'weltpixel-owlcarouselslider-utility',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth\\Login_dispatch_weltpixel-owlcarouselslider-utility' => 
    array (
      2 => 'weltpixel-newsletter-utility',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth\\Login_dispatch_weltpixel-newsletter-utility' => 
    array (
      2 => 'weltpixel-categorypage-utility',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth\\Login_dispatch_weltpixel-categorypage-utility' => 
    array (
      2 => 'weltpixel-productpage-utility',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth\\Login_dispatch_weltpixel-productpage-utility' => 
    array (
      2 => 'weltpixel-quickcart-utility',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth\\Login_dispatch_weltpixel-quickcart-utility' => 
    array (
      2 => 'weltpixel-quickview-utility',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth\\Login_dispatch_weltpixel-quickview-utility' => 
    array (
      2 => 'weltpixel-searchautocomplete-utility',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth\\Login_dispatch_weltpixel-searchautocomplete-utility' => 
    array (
      2 => 'weltpixel-sociallogin-utility',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth\\Login_dispatch_weltpixel-sociallogin-utility' => 
    array (
      2 => 'weltpixel-speedoptimization-utility',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth\\Login_dispatch_weltpixel-speedoptimization-utility' => 
    array (
      2 => 'weltpixel-thankyoupage-utility',
    ),
    'Magento\\User\\Model\\UserValidationRules_addUserInfoRules___self' => 
    array (
      4 => 
      array (
        0 => 'user_expiration_validator',
      ),
    ),
    'Magento\\User\\Model\\UserValidationRules_addPasswordRules___self' => 
    array (
      2 => 'remove_user_validation_rules',
    ),
    'Magento\\User\\Model\\UserValidationRules_addPasswordConfirmationRule___self' => 
    array (
      2 => 'remove_user_validation_rules',
    ),
    'Magento\\Backend\\Block\\Widget\\Form_getForm___self' => 
    array (
      4 => 
      array (
        0 => 'remove_password_and_user_confirmation_form_fields',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Form\\Generic_getForm___self' => 
    array (
      4 => 
      array (
        0 => 'remove_password_and_user_confirmation_form_fields',
      ),
    ),
    'Magento\\User\\Block\\User\\Edit\\Tab\\Main_getForm___self' => 
    array (
      4 => 
      array (
        0 => 'remove_password_and_user_confirmation_form_fields',
      ),
    ),
    'Magento\\User\\Block\\User\\Edit\\Tab\\Main_getFormHtml___self' => 
    array (
      2 => 'user_expiration_user_form_field',
    ),
    'Magento\\User\\Block\\User\\Edit\\Tab\\Main_getFormHtml_user_expiration_user_form_field' => 
    array (
      1 => 
      array (
        0 => 'admin_adobe_ims_reauth_button_user_edit',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Action\\Full_execute___self' => 
    array (
      4 => 
      array (
        0 => 'invalidate_pagecache_after_full_reindex',
      ),
    ),
    'Magento\\Eav\\Api\\AttributeSetRepositoryInterface_delete___self' => 
    array (
      4 => 
      array (
        0 => 'remove_products',
      ),
    ),
    'Magento\\Catalog\\Model\\ProductLink\\Search_prepareCollection___self' => 
    array (
      4 => 
      array (
        0 => 'processOutOfStockProducts',
      ),
    ),
    'Magento\\CatalogRule\\Model\\Rule_getMatchingProductIds___self' => 
    array (
      2 => 'addVariationsToProductRule',
    ),
    'Magento\\CatalogRule\\Model\\Rule_validate___self' => 
    array (
      4 => 
      array (
        0 => 'configurableChildValidation',
      ),
    ),
    'Magento\\Catalog\\Model\\Category_save___self' => 
    array (
      4 => 
      array (
        0 => 'apply_after_products_assign',
        1 => 'apply_quickviewmessages_after_products_assign',
      ),
    ),
    'Magento\\Catalog\\Model\\Category_delete___self' => 
    array (
      4 => 
      array (
        0 => 'apply_after_products_assign',
      ),
    ),
    'Magento\\Customer\\Model\\Group_delete___self' => 
    array (
      4 => 
      array (
        0 => 'reindex_after_delete_customer_group',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Form_getForm___self' => 
    array (
      4 => 
      array (
        0 => 'remove_password_and_user_confirmation_form_fields',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Edit\\Tab\\Attributes_getForm___self' => 
    array (
      4 => 
      array (
        0 => 'remove_password_and_user_confirmation_form_fields',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Edit\\Tab\\Attributes_setForm___self' => 
    array (
      4 => 
      array (
        0 => 'product_form_url_key_plugin',
      ),
    ),
    'Magento\\Bundle\\Block\\Adminhtml\\Catalog\\Product\\Edit\\Tab\\Attributes_getForm___self' => 
    array (
      4 => 
      array (
        0 => 'remove_password_and_user_confirmation_form_fields',
      ),
    ),
    'Magento\\Bundle\\Block\\Adminhtml\\Catalog\\Product\\Edit\\Tab\\Attributes_setForm___self' => 
    array (
      4 => 
      array (
        0 => 'product_form_url_key_plugin',
        1 => 'bundle_msrp_plugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Attribute\\Edit\\Tab\\Front_getForm___self' => 
    array (
      4 => 
      array (
        0 => 'remove_password_and_user_confirmation_form_fields',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Attribute\\Edit\\Tab\\Front_setForm___self' => 
    array (
      1 => 
      array (
        0 => 'search_weigh',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\Collection\\AbstractCollection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Framework\\View\\Element\\UiComponent\\DataProvider\\SearchResult_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Framework\\View\\Element\\UiComponent\\DataProvider\\SearchResult_addFieldToFilter___self' => 
    array (
      2 => 'orderGridCollectionFilterPlugin',
    ),
    'Magento\\Framework\\View\\TemplateEngineFactory_create___self' => 
    array (
      4 => 
      array (
        0 => 'debug_hints',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Sidebar\\AbstractSidebar_getItemQty___self' => 
    array (
      2 => 'GroupedProduct',
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Sidebar\\AbstractSidebar_isConfigurationRequired___self' => 
    array (
      2 => 'GroupedProduct',
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Sidebar\\AbstractSidebar_getItemQty_GroupedProduct' => 
    array (
      2 => 'Bundle',
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Sidebar\\AbstractSidebar_isConfigurationRequired_GroupedProduct' => 
    array (
      2 => 'Bundle',
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Sidebar\\AbstractSidebar_getItemQty_Bundle' => 
    array (
      2 => 'configurable',
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Sidebar\\AbstractSidebar_isConfigurationRequired_Bundle' => 
    array (
      2 => 'configurable',
    ),
    'Magento\\Bundle\\Model\\ResourceModel\\Selection\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Bundle\\Model\\ResourceModel\\Selection\\Collection_addStoreFilter___self' => 
    array (
      2 => 'Bundle',
    ),
    'Magento\\Framework\\Data\\Form\\Element\\Fieldset_addField___self' => 
    array (
      4 => 
      array (
        0 => 'Bundle',
      ),
    ),
    'Magento\\Sales\\Model\\AdminOrder\\Product\\Quote\\Initializer_init___self' => 
    array (
      4 => 
      array (
        0 => 'sales_adminorder_quote_initializer_plugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Builder_build___self' => 
    array (
      4 => 
      array (
        0 => 'configurable',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Validator_validate___self' => 
    array (
      1 => 
      array (
        0 => 'configurable',
      ),
      4 => 
      array (
        0 => 'configurable',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Button\\ToolbarInterface_pushButtons___self' => 
    array (
      1 => 
      array (
        0 => 'login_as_customer_button_toolbar',
      ),
    ),
    'Magento\\Customer\\Model\\Customer\\DataProviderWithDefaultAddresses_getData___self' => 
    array (
      4 => 
      array (
        0 => 'login_as_customer_customer_data_provider_plugin',
      ),
    ),
    'Magento\\Customer\\Model\\Customer\\DataProviderWithDefaultAddresses_getMeta___self' => 
    array (
      4 => 
      array (
        0 => 'login_as_customer_customer_data_provider_plugin',
      ),
    ),
    'Magento\\Customer\\Model\\Metadata\\Form_extractData___self' => 
    array (
      1 => 
      array (
        0 => 'login_as_customer_customer_data_validate_plugin',
      ),
    ),
    'Magento\\LoginAsCustomerAdminUi\\Ui\\Customer\\Component\\Button\\DataProvider_getData___self' => 
    array (
      4 => 
      array (
        0 => 'login_as_customer_button_data_provider_plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\ImageUploader_moveFileFromTmp___self' => 
    array (
      4 => 
      array (
        0 => 'save_category_image',
      ),
    ),
    'Magento\\Ui\\Component\\Form\\Element\\DataType\\Media\\OpenDialogUrl_get___self' => 
    array (
      4 => 
      array (
        0 => 'new_media_gallery_open_dialog_url',
      ),
    ),
    'Magento\\Framework\\File\\Uploader_save___self' => 
    array (
      4 => 
      array (
        0 => 'save_asset_image',
      ),
    ),
    'Magento\\Cms\\Block\\Adminhtml\\Wysiwyg\\Images\\Content_setLayout___self' => 
    array (
      1 => 
      array (
        0 => 'add_search_button',
      ),
    ),
    'Magento\\MediaGalleryUi\\Model\\GetDetailsByAssetId_execute___self' => 
    array (
      4 => 
      array (
        0 => 'add_adobe_stock_image_details_plugin',
      ),
    ),
    'Magento\\MediaGalleryUi\\Ui\\Component\\Listing\\Columns\\Source\\Options_toOptionArray___self' => 
    array (
      4 => 
      array (
        0 => 'add_adobe_stock_source_option_plugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\ImageFactory_create___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Frontend\\Inputtype\\Presentation_getPresentationInputType___self' => 
    array (
      1 => 
      array (
        0 => 'process_page_builder',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Frontend\\Inputtype\\Presentation_convertPresentationDataToInputType___self' => 
    array (
      4 => 
      array (
        0 => 'process_page_builder',
      ),
    ),
    'Magento\\Framework\\Filter\\Template_filter___self' => 
    array (
      4 => 
      array (
        0 => 'convertBackgroundImages',
      ),
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Form\\Modifier\\Eav_setupAttributeMeta___self' => 
    array (
      4 => 
      array (
        0 => 'pagebuilder_product_form_eav',
      ),
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Form\\Modifier\\Eav_setupAttributeContainerMeta___self' => 
    array (
      4 => 
      array (
        0 => 'pagebuilder_product_form_eav',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Structure_getElementByPathParts___self' => 
    array (
      2 => 'paypal_system_configuration',
    ),
    'Magento\\Config\\Model\\Config\\Structure_getElementByPathParts_paypal_system_configuration' => 
    array (
      4 => 
      array (
        0 => 'Amasty_Base:advertise',
        1 => 'Amasty_Base:infoblock',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Structure\\Element\\Field_getConfigPath___self' => 
    array (
      4 => 
      array (
        0 => 'paypal_system_configuration_field',
      ),
    ),
    'Magento\\Backend\\Block\\Store\\Switcher_getUrl___self' => 
    array (
      1 => 
      array (
        0 => 'paypal_store_switcher',
      ),
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
      2 => 'weltpixel-advancedwishlist-utility',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed_dispatch_weltpixel-advancedwishlist-utility' => 
    array (
      2 => 'weltpixel-ajaxinfinitescroll-utility',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed_dispatch_weltpixel-ajaxinfinitescroll-utility' => 
    array (
      2 => 'weltpixel-frontendoptions-utility',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed_dispatch_weltpixel-frontendoptions-utility' => 
    array (
      2 => 'weltpixel-customfooter-utility',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed_dispatch_weltpixel-customfooter-utility' => 
    array (
      2 => 'weltpixel-customheader-utility',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed_dispatch_weltpixel-customheader-utility' => 
    array (
      2 => 'weltpixel-designelements-utility',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed_dispatch_weltpixel-designelements-utility' => 
    array (
      2 => 'weltpixel-lazyloading-utility',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed_dispatch_weltpixel-lazyloading-utility' => 
    array (
      2 => 'weltpixel-fullpagescroll-utility',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed_dispatch_weltpixel-fullpagescroll-utility' => 
    array (
      2 => 'weltpixel-googlecards-utility',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed_dispatch_weltpixel-googlecards-utility' => 
    array (
      2 => 'weltpixel-googletagmanager-utility',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed_dispatch_weltpixel-googletagmanager-utility' => 
    array (
      2 => 'weltpixel-instagramwidget-utility',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed_dispatch_weltpixel-instagramwidget-utility' => 
    array (
      2 => 'weltpixel-owlcarouselslider-utility',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed_dispatch_weltpixel-owlcarouselslider-utility' => 
    array (
      2 => 'weltpixel-newsletter-utility',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed_dispatch_weltpixel-newsletter-utility' => 
    array (
      2 => 'weltpixel-categorypage-utility',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed_dispatch_weltpixel-categorypage-utility' => 
    array (
      2 => 'weltpixel-productpage-utility',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed_dispatch_weltpixel-productpage-utility' => 
    array (
      2 => 'weltpixel-quickcart-utility',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed_dispatch_weltpixel-quickcart-utility' => 
    array (
      2 => 'weltpixel-quickview-utility',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed_dispatch_weltpixel-quickview-utility' => 
    array (
      2 => 'weltpixel-searchautocomplete-utility',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed_dispatch_weltpixel-searchautocomplete-utility' => 
    array (
      2 => 'weltpixel-sociallogin-utility',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed_dispatch_weltpixel-sociallogin-utility' => 
    array (
      2 => 'weltpixel-speedoptimization-utility',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed_dispatch_weltpixel-speedoptimization-utility' => 
    array (
      2 => 'weltpixel-thankyoupage-utility',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed\\Index_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed\\Index_dispatch___self' => 
    array (
      2 => 'adminAuthentication',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed\\Index_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'adminLoadDesign',
      ),
      2 => 'weltpixel-advancedwishlist-utility',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed\\Index_dispatch_weltpixel-advancedwishlist-utility' => 
    array (
      2 => 'weltpixel-ajaxinfinitescroll-utility',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed\\Index_dispatch_weltpixel-ajaxinfinitescroll-utility' => 
    array (
      2 => 'weltpixel-frontendoptions-utility',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed\\Index_dispatch_weltpixel-frontendoptions-utility' => 
    array (
      2 => 'weltpixel-customfooter-utility',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed\\Index_dispatch_weltpixel-customfooter-utility' => 
    array (
      2 => 'weltpixel-customheader-utility',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed\\Index_dispatch_weltpixel-customheader-utility' => 
    array (
      2 => 'weltpixel-designelements-utility',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed\\Index_dispatch_weltpixel-designelements-utility' => 
    array (
      2 => 'weltpixel-lazyloading-utility',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed\\Index_dispatch_weltpixel-lazyloading-utility' => 
    array (
      2 => 'weltpixel-fullpagescroll-utility',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed\\Index_dispatch_weltpixel-fullpagescroll-utility' => 
    array (
      2 => 'weltpixel-googlecards-utility',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed\\Index_dispatch_weltpixel-googlecards-utility' => 
    array (
      2 => 'weltpixel-googletagmanager-utility',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed\\Index_dispatch_weltpixel-googletagmanager-utility' => 
    array (
      2 => 'weltpixel-instagramwidget-utility',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed\\Index_dispatch_weltpixel-instagramwidget-utility' => 
    array (
      2 => 'weltpixel-owlcarouselslider-utility',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed\\Index_dispatch_weltpixel-owlcarouselslider-utility' => 
    array (
      2 => 'weltpixel-newsletter-utility',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed\\Index_dispatch_weltpixel-newsletter-utility' => 
    array (
      2 => 'weltpixel-categorypage-utility',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed\\Index_dispatch_weltpixel-categorypage-utility' => 
    array (
      2 => 'weltpixel-productpage-utility',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed\\Index_dispatch_weltpixel-productpage-utility' => 
    array (
      2 => 'weltpixel-quickcart-utility',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed\\Index_dispatch_weltpixel-quickcart-utility' => 
    array (
      2 => 'weltpixel-quickview-utility',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed\\Index_dispatch_weltpixel-quickview-utility' => 
    array (
      2 => 'weltpixel-searchautocomplete-utility',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed\\Index_dispatch_weltpixel-searchautocomplete-utility' => 
    array (
      2 => 'weltpixel-sociallogin-utility',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed\\Index_dispatch_weltpixel-sociallogin-utility' => 
    array (
      2 => 'weltpixel-speedoptimization-utility',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed\\Index_dispatch_weltpixel-speedoptimization-utility' => 
    array (
      2 => 'weltpixel-thankyoupage-utility',
    ),
    'Magento\\CatalogRule\\Model\\Indexer\\AbstractIndexer_executeFull___self' => 
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
    'Magento\\CatalogRule\\Model\\Indexer\\AbstractIndexer_executeList___self' => 
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
    'Magento\\CatalogRule\\Model\\Indexer\\AbstractIndexer_executeRow___self' => 
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
    'Magento\\CatalogRule\\Model\\Indexer\\Product\\ProductRuleIndexer_executeFull___self' => 
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
    'Magento\\CatalogRule\\Model\\Indexer\\Product\\ProductRuleIndexer_executeList___self' => 
    array (
      1 => 
      array (
        0 => 'cache_cleaner_after_reindex',
        1 => 'productRuleReindex',
      ),
      4 => 
      array (
        0 => 'cache_cleaner_after_reindex',
      ),
    ),
    'Magento\\CatalogRule\\Model\\Indexer\\Product\\ProductRuleIndexer_executeRow___self' => 
    array (
      1 => 
      array (
        0 => 'cache_cleaner_after_reindex',
      ),
      4 => 
      array (
        0 => 'cache_cleaner_after_reindex',
      ),
      2 => 'productRuleReindex',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
      2 => 'weltpixel-advancedwishlist-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute_dispatch_weltpixel-advancedwishlist-utility' => 
    array (
      2 => 'weltpixel-ajaxinfinitescroll-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute_dispatch_weltpixel-ajaxinfinitescroll-utility' => 
    array (
      2 => 'weltpixel-frontendoptions-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute_dispatch_weltpixel-frontendoptions-utility' => 
    array (
      2 => 'weltpixel-customfooter-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute_dispatch_weltpixel-customfooter-utility' => 
    array (
      2 => 'weltpixel-customheader-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute_dispatch_weltpixel-customheader-utility' => 
    array (
      2 => 'weltpixel-designelements-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute_dispatch_weltpixel-designelements-utility' => 
    array (
      2 => 'weltpixel-lazyloading-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute_dispatch_weltpixel-lazyloading-utility' => 
    array (
      2 => 'weltpixel-fullpagescroll-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute_dispatch_weltpixel-fullpagescroll-utility' => 
    array (
      2 => 'weltpixel-googlecards-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute_dispatch_weltpixel-googlecards-utility' => 
    array (
      2 => 'weltpixel-googletagmanager-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute_dispatch_weltpixel-googletagmanager-utility' => 
    array (
      2 => 'weltpixel-instagramwidget-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute_dispatch_weltpixel-instagramwidget-utility' => 
    array (
      2 => 'weltpixel-owlcarouselslider-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute_dispatch_weltpixel-owlcarouselslider-utility' => 
    array (
      2 => 'weltpixel-newsletter-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute_dispatch_weltpixel-newsletter-utility' => 
    array (
      2 => 'weltpixel-categorypage-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute_dispatch_weltpixel-categorypage-utility' => 
    array (
      2 => 'weltpixel-productpage-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute_dispatch_weltpixel-productpage-utility' => 
    array (
      2 => 'weltpixel-quickcart-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute_dispatch_weltpixel-quickcart-utility' => 
    array (
      2 => 'weltpixel-quickview-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute_dispatch_weltpixel-quickview-utility' => 
    array (
      2 => 'weltpixel-searchautocomplete-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute_dispatch_weltpixel-searchautocomplete-utility' => 
    array (
      2 => 'weltpixel-sociallogin-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute_dispatch_weltpixel-sociallogin-utility' => 
    array (
      2 => 'weltpixel-speedoptimization-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute_dispatch_weltpixel-speedoptimization-utility' => 
    array (
      2 => 'weltpixel-thankyoupage-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute\\Save_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute\\Save_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'save_swatches_frontend_input',
        1 => 'adminMassactionKey',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute\\Save_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
      2 => 'weltpixel-advancedwishlist-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute\\Save_dispatch_weltpixel-advancedwishlist-utility' => 
    array (
      2 => 'weltpixel-ajaxinfinitescroll-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute\\Save_dispatch_weltpixel-ajaxinfinitescroll-utility' => 
    array (
      2 => 'weltpixel-frontendoptions-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute\\Save_dispatch_weltpixel-frontendoptions-utility' => 
    array (
      2 => 'weltpixel-customfooter-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute\\Save_dispatch_weltpixel-customfooter-utility' => 
    array (
      2 => 'weltpixel-customheader-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute\\Save_dispatch_weltpixel-customheader-utility' => 
    array (
      2 => 'weltpixel-designelements-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute\\Save_dispatch_weltpixel-designelements-utility' => 
    array (
      2 => 'weltpixel-lazyloading-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute\\Save_dispatch_weltpixel-lazyloading-utility' => 
    array (
      2 => 'weltpixel-fullpagescroll-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute\\Save_dispatch_weltpixel-fullpagescroll-utility' => 
    array (
      2 => 'weltpixel-googlecards-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute\\Save_dispatch_weltpixel-googlecards-utility' => 
    array (
      2 => 'weltpixel-googletagmanager-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute\\Save_dispatch_weltpixel-googletagmanager-utility' => 
    array (
      2 => 'weltpixel-instagramwidget-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute\\Save_dispatch_weltpixel-instagramwidget-utility' => 
    array (
      2 => 'weltpixel-owlcarouselslider-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute\\Save_dispatch_weltpixel-owlcarouselslider-utility' => 
    array (
      2 => 'weltpixel-newsletter-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute\\Save_dispatch_weltpixel-newsletter-utility' => 
    array (
      2 => 'weltpixel-categorypage-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute\\Save_dispatch_weltpixel-categorypage-utility' => 
    array (
      2 => 'weltpixel-productpage-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute\\Save_dispatch_weltpixel-productpage-utility' => 
    array (
      2 => 'weltpixel-quickcart-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute\\Save_dispatch_weltpixel-quickcart-utility' => 
    array (
      2 => 'weltpixel-quickview-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute\\Save_dispatch_weltpixel-quickview-utility' => 
    array (
      2 => 'weltpixel-searchautocomplete-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute\\Save_dispatch_weltpixel-searchautocomplete-utility' => 
    array (
      2 => 'weltpixel-sociallogin-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute\\Save_dispatch_weltpixel-sociallogin-utility' => 
    array (
      2 => 'weltpixel-speedoptimization-utility',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute\\Save_dispatch_weltpixel-speedoptimization-utility' => 
    array (
      2 => 'weltpixel-thankyoupage-utility',
    ),
    'Magento\\AdminNotification\\Model\\ResourceModel\\System\\Message\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\AdminNotification\\Model\\ResourceModel\\System\\Message\\Collection\\Synchronized_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\AdminNotification\\Model\\ResourceModel\\System\\Message\\Collection\\Synchronized_toArray___self' => 
    array (
      4 => 
      array (
        0 => 'afterToArray',
      ),
    ),
    'Magento\\AdminNotification\\Ui\\Component\\DataProvider\\DataProvider_getMeta___self' => 
    array (
      4 => 
      array (
        0 => 'afterGetMeta',
      ),
    ),
    'Magento\\Cms\\Model\\Page\\DataProvider_prepareMeta___self' => 
    array (
      4 => 
      array (
        0 => 'google_optimizer_cms_page_data_provider',
      ),
    ),
    'Magento\\Cms\\Model\\Page\\DataProvider_getData___self' => 
    array (
      4 => 
      array (
        0 => 'weltpixel-add-og-image-to-form',
      ),
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Form\\NewCategoryDataProvider_getMeta___self' => 
    array (
      4 => 
      array (
        0 => 'google_optimizer_product_new_category_data_provider',
      ),
    ),
    'Magento\\Framework\\View\\Result\\Layout_addDefaultHandle___self' => 
    array (
      4 => 
      array (
        0 => 'add_adobe_ims_layout_handle',
      ),
    ),
    'Magento\\User\\Model\\Backend\\Config\\ObserverConfig_getAdminPasswordLifetime___self' => 
    array (
      4 => 
      array (
        0 => 'disable_password_reset',
      ),
    ),
    'Magento\\User\\Model\\Backend\\Config\\ObserverConfig_isPasswordChangeForced___self' => 
    array (
      4 => 
      array (
        0 => 'disable_forced_password_change',
      ),
    ),
    'Magento\\Security\\Model\\AdminSessionsManager_logoutOtherUserSessions___self' => 
    array (
      2 => 'keep_other_user_sessions',
    ),
    'Magento\\Backend\\Block\\System\\Account\\Edit\\Form_getForm___self' => 
    array (
      4 => 
      array (
        0 => 'remove_password_and_user_confirmation_form_fields',
      ),
    ),
    'Magento\\Backend\\Block\\System\\Account\\Edit\\Form_getFormHtml___self' => 
    array (
      1 => 
      array (
        0 => 'admin_adobe_ims_reauth_button_account_edit',
      ),
    ),
    'Magento\\User\\Block\\Role\\Tab\\Info_getForm___self' => 
    array (
      4 => 
      array (
        0 => 'remove_password_and_user_confirmation_form_fields',
      ),
    ),
    'Magento\\User\\Block\\Role\\Tab\\Info_getFormHtml___self' => 
    array (
      1 => 
      array (
        0 => 'admin_adobe_ims_reauth_button_role_edit',
      ),
    ),
    'Magento\\AdobeIms\\Block\\Adminhtml\\SignIn_getComponentJsonConfig___self' => 
    array (
      2 => 'authentication_component_config',
    ),
    'Magento\\Integration\\Block\\Adminhtml\\Integration\\Edit\\Tab\\Info_getForm___self' => 
    array (
      4 => 
      array (
        0 => 'remove_password_and_user_confirmation_form_fields',
      ),
    ),
    'Magento\\Integration\\Block\\Adminhtml\\Integration\\Edit\\Tab\\Info_getFormHtml___self' => 
    array (
      1 => 
      array (
        0 => 'admin_adobe_ims_reauth_button_integration_edit',
      ),
    ),
    'Magento\\Shipping\\Block\\Adminhtml\\Order\\Packaging_isDisplayGirthValue___self' => 
    array (
      2 => 'usps',
    ),
    'Magento\\Wishlist\\Model\\Wishlist_execute___self' => 
    array (
      2 => 'weltpixel-advancedwishlist-adminhtml-wishlist',
    ),
    'Magento\\Wishlist\\Model\\Wishlist_getName___self' => 
    array (
      1 => 
      array (
        0 => 'weltpixel-advancedwishlist-adminhtml-wishlist',
      ),
    ),
    'Magento\\AdminNotification\\Block\\Grid\\Renderer\\Actions_render___self' => 
    array (
      2 => 'Amasty_Base::show-unsubscribe-link',
    ),
    'Magento\\AdminNotification\\Block\\Grid\\Renderer\\Notice_render___self' => 
    array (
      2 => 'Amasty_Base::add-amasty-class',
    ),
    'Magento\\AdminNotification\\Block\\ToolbarEntry_toHtml___self' => 
    array (
      4 => 
      array (
        0 => 'Amasty_Base::add-amasty-class-logo',
      ),
    ),
    'Magento\\Config\\Block\\System\\Config\\Form\\Field_render___self' => 
    array (
      4 => 
      array (
        0 => 'Amasty_Base::replace-image-path',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Form\\Element\\Dependence_addFieldDependence___self' => 
    array (
      2 => 'Amasty_Base::fix-dependence',
    ),
    'Magento\\Backend\\Model\\Menu\\Builder_getResult___self' => 
    array (
      4 => 
      array (
        0 => 'Amasty_Base::menu_builder',
        1 => 'Magefan_Community_Plugin_Magento_Backend_Model_Menu_Builder',
      ),
    ),
    'Magento\\Config\\Block\\System\\Config\\Tabs_toHtml___self' => 
    array (
      4 => 
      array (
        0 => 'Amasty_Base::build_amasty_tabs',
      ),
    ),
    'Magento\\Payment\\Helper\\Data_getPaymentMethodList___self' => 
    array (
      1 => 
      array (
        0 => 'Amasty_Conditions::payment_helper_getlist',
      ),
      4 => 
      array (
        0 => 'Amasty_Conditions::payment_helper_getlist',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Button\\Toolbar_pushButtons___self' => 
    array (
      1 => 
      array (
        0 => 'login_as_customer_button_toolbar',
        1 => 'elsener_paytrace_custombutton_for_sales_order_view',
      ),
    ),
    'Magento\\Ui\\Component\\Wysiwyg\\ConfigInterface_getConfig___self' => 
    array (
      1 => 
      array (
        0 => 'Magefan_WysiwygAdvanced_Plugin_Magento_Ui_Component_Wysiwyg_ConfigInterface',
      ),
      4 => 
      array (
        0 => 'Magefan_WysiwygAdvanced_Plugin_Magento_Ui_Component_Wysiwyg_ConfigInterface',
      ),
    ),
    'Magento\\PageBuilder\\Model\\ConfigInterface_isEnabled___self' => 
    array (
      4 => 
      array (
        0 => 'Magefan_WysiwygAdvanced_Plugin_Backend_Magento_PageBuilder_Model_ConfigInterface',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Structure\\Data_merge___self' => 
    array (
      1 => 
      array (
        0 => 'mageplaza_module_activate',
      ),
    ),
    'Magento\\Backend\\Model\\Menu\\Builder\\AbstractCommand_execute___self' => 
    array (
      4 => 
      array (
        0 => 'mageplaza_move_menu',
      ),
    ),
    'Mageplaza\\Reports\\Block\\Dashboard\\ConversionFunnel_getDetailUrl___self' => 
    array (
      2 => 'addViewDetailLink',
    ),
    'Mageplaza\\Reports\\Block\\Dashboard\\ConversionFunnel_canShowDetail___self' => 
    array (
      2 => 'addViewDetailLink',
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Grid\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Grid\\Collection_addFieldToFilter___self' => 
    array (
      2 => 'orderGridCollectionFilterPlugin',
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Grid\\Collection_getSelect___self' => 
    array (
      4 => 
      array (
        0 => 'mp_ace_blacklist_add_to_customer_grid',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Grid\\Collection_getItems___self' => 
    array (
      1 => 
      array (
        0 => 'mp_ace_blacklist_add_to_customer_grid',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Grid\\Collection_addFieldToFilter_orderGridCollectionFilterPlugin' => 
    array (
      1 => 
      array (
        0 => 'mp_ace_blacklist_add_to_customer_grid',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Grid\\Column\\Filter\\Datetime_getHtml___self' => 
    array (
      4 => 
      array (
        0 => 'fix_send_date_overall_report_grid',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View\\Tab\\Info_getGiftOptionsHtml___self' => 
    array (
      4 => 
      array (
        0 => 'mp_delivery_information',
        1 => 'osc_additional_content',
      ),
    ),
    'Magento\\Ui\\Component\\Listing\\Columns\\Column_prepare___self' => 
    array (
      4 => 
      array (
        0 => 'osc_customer_grid',
      ),
    ),
    'Magento\\Email\\Model\\Template\\Config_getAvailableTemplates___self' => 
    array (
      4 => 
      array (
        0 => 'mageplaza_smtp_template_abandoned_cart',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Grid\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Grid\\Collection_addFieldToFilter___self' => 
    array (
      2 => 'orderGridCollectionFilterPlugin',
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Grid\\Collection_load___self' => 
    array (
      1 => 
      array (
        0 => 'braintreeSalesOrderGrid',
      ),
    ),
    'Magento\\Config\\Model\\Config_save___self' => 
    array (
      1 => 
      array (
        0 => 'admin_system_config_save_plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
      2 => 'weltpixel-advancedwishlist-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order_dispatch_weltpixel-advancedwishlist-utility' => 
    array (
      2 => 'weltpixel-ajaxinfinitescroll-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order_dispatch_weltpixel-ajaxinfinitescroll-utility' => 
    array (
      2 => 'weltpixel-frontendoptions-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order_dispatch_weltpixel-frontendoptions-utility' => 
    array (
      2 => 'weltpixel-customfooter-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order_dispatch_weltpixel-customfooter-utility' => 
    array (
      2 => 'weltpixel-customheader-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order_dispatch_weltpixel-customheader-utility' => 
    array (
      2 => 'weltpixel-designelements-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order_dispatch_weltpixel-designelements-utility' => 
    array (
      2 => 'weltpixel-lazyloading-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order_dispatch_weltpixel-lazyloading-utility' => 
    array (
      2 => 'weltpixel-fullpagescroll-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order_dispatch_weltpixel-fullpagescroll-utility' => 
    array (
      2 => 'weltpixel-googlecards-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order_dispatch_weltpixel-googlecards-utility' => 
    array (
      2 => 'weltpixel-googletagmanager-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order_dispatch_weltpixel-googletagmanager-utility' => 
    array (
      2 => 'weltpixel-instagramwidget-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order_dispatch_weltpixel-instagramwidget-utility' => 
    array (
      2 => 'weltpixel-owlcarouselslider-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order_dispatch_weltpixel-owlcarouselslider-utility' => 
    array (
      2 => 'weltpixel-newsletter-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order_dispatch_weltpixel-newsletter-utility' => 
    array (
      2 => 'weltpixel-categorypage-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order_dispatch_weltpixel-categorypage-utility' => 
    array (
      2 => 'weltpixel-productpage-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order_dispatch_weltpixel-productpage-utility' => 
    array (
      2 => 'weltpixel-quickcart-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order_dispatch_weltpixel-quickcart-utility' => 
    array (
      2 => 'weltpixel-quickview-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order_dispatch_weltpixel-quickview-utility' => 
    array (
      2 => 'weltpixel-searchautocomplete-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order_dispatch_weltpixel-searchautocomplete-utility' => 
    array (
      2 => 'weltpixel-sociallogin-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order_dispatch_weltpixel-sociallogin-utility' => 
    array (
      2 => 'weltpixel-speedoptimization-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order_dispatch_weltpixel-speedoptimization-utility' => 
    array (
      2 => 'weltpixel-thankyoupage-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\AddressSave_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
      4 => 
      array (
        0 => 'wesupply-toolbox-address-save',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\AddressSave_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\AddressSave_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
      2 => 'weltpixel-advancedwishlist-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\AddressSave_dispatch_weltpixel-advancedwishlist-utility' => 
    array (
      2 => 'weltpixel-ajaxinfinitescroll-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\AddressSave_dispatch_weltpixel-ajaxinfinitescroll-utility' => 
    array (
      2 => 'weltpixel-frontendoptions-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\AddressSave_dispatch_weltpixel-frontendoptions-utility' => 
    array (
      2 => 'weltpixel-customfooter-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\AddressSave_dispatch_weltpixel-customfooter-utility' => 
    array (
      2 => 'weltpixel-customheader-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\AddressSave_dispatch_weltpixel-customheader-utility' => 
    array (
      2 => 'weltpixel-designelements-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\AddressSave_dispatch_weltpixel-designelements-utility' => 
    array (
      2 => 'weltpixel-lazyloading-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\AddressSave_dispatch_weltpixel-lazyloading-utility' => 
    array (
      2 => 'weltpixel-fullpagescroll-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\AddressSave_dispatch_weltpixel-fullpagescroll-utility' => 
    array (
      2 => 'weltpixel-googlecards-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\AddressSave_dispatch_weltpixel-googlecards-utility' => 
    array (
      2 => 'weltpixel-googletagmanager-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\AddressSave_dispatch_weltpixel-googletagmanager-utility' => 
    array (
      2 => 'weltpixel-instagramwidget-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\AddressSave_dispatch_weltpixel-instagramwidget-utility' => 
    array (
      2 => 'weltpixel-owlcarouselslider-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\AddressSave_dispatch_weltpixel-owlcarouselslider-utility' => 
    array (
      2 => 'weltpixel-newsletter-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\AddressSave_dispatch_weltpixel-newsletter-utility' => 
    array (
      2 => 'weltpixel-categorypage-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\AddressSave_dispatch_weltpixel-categorypage-utility' => 
    array (
      2 => 'weltpixel-productpage-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\AddressSave_dispatch_weltpixel-productpage-utility' => 
    array (
      2 => 'weltpixel-quickcart-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\AddressSave_dispatch_weltpixel-quickcart-utility' => 
    array (
      2 => 'weltpixel-quickview-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\AddressSave_dispatch_weltpixel-quickview-utility' => 
    array (
      2 => 'weltpixel-searchautocomplete-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\AddressSave_dispatch_weltpixel-searchautocomplete-utility' => 
    array (
      2 => 'weltpixel-sociallogin-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\AddressSave_dispatch_weltpixel-sociallogin-utility' => 
    array (
      2 => 'weltpixel-speedoptimization-utility',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\AddressSave_dispatch_weltpixel-speedoptimization-utility' => 
    array (
      2 => 'weltpixel-thankyoupage-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\AddTrack_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
      2 => 'wesupply_tracking_number_added_plugin',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\AddTrack_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\AddTrack_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
      2 => 'weltpixel-advancedwishlist-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\AddTrack_dispatch_weltpixel-advancedwishlist-utility' => 
    array (
      2 => 'weltpixel-ajaxinfinitescroll-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\AddTrack_dispatch_weltpixel-ajaxinfinitescroll-utility' => 
    array (
      2 => 'weltpixel-frontendoptions-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\AddTrack_dispatch_weltpixel-frontendoptions-utility' => 
    array (
      2 => 'weltpixel-customfooter-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\AddTrack_dispatch_weltpixel-customfooter-utility' => 
    array (
      2 => 'weltpixel-customheader-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\AddTrack_dispatch_weltpixel-customheader-utility' => 
    array (
      2 => 'weltpixel-designelements-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\AddTrack_dispatch_weltpixel-designelements-utility' => 
    array (
      2 => 'weltpixel-lazyloading-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\AddTrack_dispatch_weltpixel-lazyloading-utility' => 
    array (
      2 => 'weltpixel-fullpagescroll-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\AddTrack_dispatch_weltpixel-fullpagescroll-utility' => 
    array (
      2 => 'weltpixel-googlecards-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\AddTrack_dispatch_weltpixel-googlecards-utility' => 
    array (
      2 => 'weltpixel-googletagmanager-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\AddTrack_dispatch_weltpixel-googletagmanager-utility' => 
    array (
      2 => 'weltpixel-instagramwidget-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\AddTrack_dispatch_weltpixel-instagramwidget-utility' => 
    array (
      2 => 'weltpixel-owlcarouselslider-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\AddTrack_dispatch_weltpixel-owlcarouselslider-utility' => 
    array (
      2 => 'weltpixel-newsletter-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\AddTrack_dispatch_weltpixel-newsletter-utility' => 
    array (
      2 => 'weltpixel-categorypage-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\AddTrack_dispatch_weltpixel-categorypage-utility' => 
    array (
      2 => 'weltpixel-productpage-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\AddTrack_dispatch_weltpixel-productpage-utility' => 
    array (
      2 => 'weltpixel-quickcart-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\AddTrack_dispatch_weltpixel-quickcart-utility' => 
    array (
      2 => 'weltpixel-quickview-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\AddTrack_dispatch_weltpixel-quickview-utility' => 
    array (
      2 => 'weltpixel-searchautocomplete-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\AddTrack_dispatch_weltpixel-searchautocomplete-utility' => 
    array (
      2 => 'weltpixel-sociallogin-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\AddTrack_dispatch_weltpixel-sociallogin-utility' => 
    array (
      2 => 'weltpixel-speedoptimization-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\AddTrack_dispatch_weltpixel-speedoptimization-utility' => 
    array (
      2 => 'weltpixel-thankyoupage-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\RemoveTrack_execute___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
      2 => 'wesupply_tracking_number_deleted_plugin',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\RemoveTrack_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\RemoveTrack_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
      2 => 'weltpixel-advancedwishlist-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\RemoveTrack_dispatch_weltpixel-advancedwishlist-utility' => 
    array (
      2 => 'weltpixel-ajaxinfinitescroll-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\RemoveTrack_dispatch_weltpixel-ajaxinfinitescroll-utility' => 
    array (
      2 => 'weltpixel-frontendoptions-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\RemoveTrack_dispatch_weltpixel-frontendoptions-utility' => 
    array (
      2 => 'weltpixel-customfooter-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\RemoveTrack_dispatch_weltpixel-customfooter-utility' => 
    array (
      2 => 'weltpixel-customheader-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\RemoveTrack_dispatch_weltpixel-customheader-utility' => 
    array (
      2 => 'weltpixel-designelements-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\RemoveTrack_dispatch_weltpixel-designelements-utility' => 
    array (
      2 => 'weltpixel-lazyloading-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\RemoveTrack_dispatch_weltpixel-lazyloading-utility' => 
    array (
      2 => 'weltpixel-fullpagescroll-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\RemoveTrack_dispatch_weltpixel-fullpagescroll-utility' => 
    array (
      2 => 'weltpixel-googlecards-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\RemoveTrack_dispatch_weltpixel-googlecards-utility' => 
    array (
      2 => 'weltpixel-googletagmanager-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\RemoveTrack_dispatch_weltpixel-googletagmanager-utility' => 
    array (
      2 => 'weltpixel-instagramwidget-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\RemoveTrack_dispatch_weltpixel-instagramwidget-utility' => 
    array (
      2 => 'weltpixel-owlcarouselslider-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\RemoveTrack_dispatch_weltpixel-owlcarouselslider-utility' => 
    array (
      2 => 'weltpixel-newsletter-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\RemoveTrack_dispatch_weltpixel-newsletter-utility' => 
    array (
      2 => 'weltpixel-categorypage-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\RemoveTrack_dispatch_weltpixel-categorypage-utility' => 
    array (
      2 => 'weltpixel-productpage-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\RemoveTrack_dispatch_weltpixel-productpage-utility' => 
    array (
      2 => 'weltpixel-quickcart-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\RemoveTrack_dispatch_weltpixel-quickcart-utility' => 
    array (
      2 => 'weltpixel-quickview-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\RemoveTrack_dispatch_weltpixel-quickview-utility' => 
    array (
      2 => 'weltpixel-searchautocomplete-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\RemoveTrack_dispatch_weltpixel-searchautocomplete-utility' => 
    array (
      2 => 'weltpixel-sociallogin-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\RemoveTrack_dispatch_weltpixel-sociallogin-utility' => 
    array (
      2 => 'weltpixel-speedoptimization-utility',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\RemoveTrack_dispatch_weltpixel-speedoptimization-utility' => 
    array (
      2 => 'weltpixel-thankyoupage-utility',
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View_setLayout___self' => 
    array (
      1 => 
      array (
        0 => 'wesupply_external_links',
      ),
    ),
    'Magento\\CatalogStaging\\Model\\Category\\DataProvider_prepareMeta___self' => 
    array (
      4 => 
      array (
        0 => 'weltpixel-backend-categorystaging-dataprovider',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Sidebar\\Wishlist_getItemCollection___self' => 
    array (
      1 => 
      array (
        0 => 'weltpixel-advancedwishlist-adminhtml-order-wishlist',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Sidebar\\Wishlist_getItemQty___self' => 
    array (
      2 => 'GroupedProduct',
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Sidebar\\Wishlist_isConfigurationRequired___self' => 
    array (
      2 => 'GroupedProduct',
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Sidebar\\Wishlist_getItemQty_GroupedProduct' => 
    array (
      2 => 'Bundle',
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Sidebar\\Wishlist_isConfigurationRequired_GroupedProduct' => 
    array (
      2 => 'Bundle',
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Sidebar\\Wishlist_getItemQty_Bundle' => 
    array (
      2 => 'configurable',
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Sidebar\\Wishlist_isConfigurationRequired_Bundle' => 
    array (
      2 => 'configurable',
    ),
    'Magento\\Cms\\Model\\PageRepository_save___self' => 
    array (
      1 => 
      array (
        0 => 'weltpixel-save-og-image',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockItemRepositoryInterface_save___self' => 
    array (
      4 => 
      array (
        0 => 'apply_quickviewmessages_rules_after_product_save',
      ),
    ),
    'Magento\\CatalogRule\\Model\\Rule\\Condition\\Product_validate___self' => 
    array (
      4 => 
      array (
        0 => 'apply_quickviewmessages_quantity_combination_assign',
      ),
    ),
  ),
);