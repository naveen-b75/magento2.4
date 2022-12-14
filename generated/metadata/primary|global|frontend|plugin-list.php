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
    'Magento\\Framework\\App\\Response\\Http' => 
    array (
      'genericHeaderPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Response\\HeaderManager',
      ),
      'response-http-page-cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\App\\Response\\HttpPlugin',
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
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
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
    'Magento\\Store\\Model\\StoreResolver' => 
    array (
      'staging_preview_allowed_stores_check_bypass' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\Store\\Model\\StoreResolver',
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
      'requestPreprocessor' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Store\\App\\FrontController\\Plugin\\RequestPreprocessor',
      ),
    ),
    'Magento\\Framework\\Stdlib\\DateTime\\Timezone' => 
    array (
      'staging_datetime_timezone_bypass' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\DateTime\\Timezone',
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
      'staging_preview_customer_session_id_change_bypass' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\Customer\\Model\\Session',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Customer' => 
    array (
      'recollect_quote_on_customer_group_change' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Checkout\\Model\\Plugin\\RecollectQuoteOnCustomerGroupChange',
      ),
      'cart_recollect_on_group_change' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Plugin\\RecollectOnGroupChange',
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
      'customerRegister' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\CustomerRegister',
      ),
      'mpcustomerapproval_customer_authenticated' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Mageplaza\\CustomerApproval\\Plugin\\CustomerAuthenticated',
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
      'customerGroupEdit' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\GroupRepository',
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
    'Magento\\Indexer\\Model\\Indexer' => 
    array (
      'reindexRow' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Helper\\Indexer',
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
      'catalogPermissionsIndexerConfigGet' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\IndexerConfigData',
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
    'Magento\\Backend\\Model\\Auth\\Session' => 
    array (
      'admin_adobe_ims_backend_auth_session' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\BackendAuthSessionPlugin',
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
    'Magento\\Framework\\Amqp\\Bulk\\Exchange' => 
    array (
      'amqpStoreIdFieldForAmqpBulkExchange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AmqpStore\\Plugin\\Framework\\Amqp\\Bulk\\Exchange',
      ),
    ),
    'Magento\\AsynchronousOperations\\Model\\MassConsumerEnvelopeCallback' => 
    array (
      'amqpStoreIdFieldForAsynchronousOperationsMassConsumerEnvelopeCallback' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AmqpStore\\Plugin\\AsynchronousOperations\\MassConsumerEnvelopeCallback',
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
    'Magento\\Config\\Model\\Config' => 
    array (
      'configPermissionChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\ConfigData',
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
    'Magento\\Cms\\Model\\ResourceModel\\Page\\Grid\\Collection' => 
    array (
      'setStagingFlagCmsPageUpdate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsStaging\\Model\\ResourceModel\\Grid\\Collection\\UpdatePlugin',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Block\\Grid\\Collection' => 
    array (
      'setStagingFlagCmsBlockUpdate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsStaging\\Model\\ResourceModel\\Grid\\Collection\\UpdatePlugin',
      ),
    ),
    'Magento\\Cms\\Ui\\Component\\DataProvider' => 
    array (
      'filterCmsPageAndBlockUpdate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsStaging\\Ui\\Component\\DataProvider\\UpdatePlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product' => 
    array (
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
      'catalogPermissionsProductChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\Product',
      ),
      'availabilityStaging' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Model\\Product',
      ),
      'exclude_swatch_attribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\Product',
      ),
      'add_bundle_child_identities' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Bundle\\Model\\Plugin\\Frontend\\ProductIdentitiesExtender',
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
      'catalogCategoryDataProviderTrimData' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Catalog\\Model\\Category\\DataProvider\\TrimData',
      ),
    ),
    'Magento\\Theme\\Block\\Html\\Topmenu' => 
    array (
      'catalogTopmenu' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Block\\Topmenu',
      ),
      'catalogPermissionsCachingTopmenu' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Plugin\\Theme\\Block\\Html\\Topmenu',
      ),
      'catalog_permissions_topmenu' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Plugin\\Theme\\Block\\Html\\Topmenu',
      ),
    ),
    'Magento\\Framework\\Mview\\View\\StateInterface' => 
    array (
      'setStatusForMview' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\MviewState',
      ),
      'catalogPermissionsIndexerSetStatusForMview' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\MviewState',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Collection' => 
    array (
      'joinProductsWhenFlatEnabled' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\JoinProductsWhenFlatEnabled',
      ),
      'joinAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\Collection',
      ),
      'add_stock_information' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\AddStockStatusToCollection',
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
      'assign_website_to_default_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Store\\Model\\ResourceModel\\Website\\AssignWebsiteToDefaultStockPlugin',
      ),
      'delete_website_to_stock_link' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Store\\Model\\ResourceModel\\Website\\DeleteWebsiteToStockLinkPlugin',
      ),
      'update_sales_channel_website_code' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Store\\Model\\ResourceModel\\Website\\UpdateSalesChannelWebsiteCodePlugin',
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
      'invalidateTargetRuleOnStoreViewChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\TargetRule\\Model\\Indexer\\TargetRule\\Plugin\\Store',
      ),
      'catalogPermissionsIndexerStoreView' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\Store\\View',
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
      'invalidateTargetRuleOnStoreGroupChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\TargetRule\\Model\\Indexer\\TargetRule\\Plugin\\StoreGroup',
      ),
      'catalogPermissionsIndexerStoreGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\Store\\Group',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\Attribute\\Set' => 
    array (
      'invalidateEavIndexerOnAttributeSetSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Eav\\Plugin\\AttributeSet',
      ),
      'invalidateTargetRuleOnDeleteAttributeSet' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\TargetRule\\Model\\Indexer\\TargetRule\\Plugin\\AttributeSet',
      ),
    ),
    'Magento\\Catalog\\Helper\\Product\\Flat\\Indexer' => 
    array (
      'addRowIdToFlatDefinition' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Helper\\Product\\Flat\\FlatColumnsDefinition',
      ),
      'addRowIdToIndex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Helper\\Product\\Flat\\FlatIndexes',
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
    'Magento\\Sales\\Api\\OrderItemRepositoryInterface' => 
    array (
      'get_gift_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\OrderItemGet',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Collection\\ProductLimitation' => 
    array (
      'isUsingPriceIndex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\Collection\\ProductLimitation',
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
      'append_gift_card_data_to_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCard\\Model\\Plugin\\QuoteItem',
      ),
      'gift_registry_item_from_quote_item' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftRegistry\\Model\\Plugin\\QuoteItem',
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
    ),
    'Magento\\Framework\\View\\Model\\Layout\\Merge' => 
    array (
      'widget-layout-update-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Widget\\Model\\ResourceModel\\Layout\\Plugin',
      ),
      'layout-merge-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\Layout\\MergePlugin',
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
    'Magento\\Backend\\Model\\Auth' => 
    array (
      'disable_admin_login_auth' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\DisableAdminLoginAuthPlugin',
      ),
      'login_as_customer_admin_logout' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomer\\Plugin\\AdminLogoutPlugin',
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
      'convertQuoteAddressToCustomerAddress' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\ConvertQuoteAddressToCustomerAddress',
      ),
      'manage_assignment_of_pickup_location_to_quote_address' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\Address\\ManageAssignmentOfPickupLocationToQuoteAddress',
      ),
    ),
    'Magento\\Quote\\Model\\ResourceModel\\Quote\\Address' => 
    array (
      'load_pickup_location_for_quote_address' => 
      array (
        'sortOrder' => 30,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\Address\\LoadPickupLocationForQuoteAddress',
      ),
    ),
    'Magento\\Quote\\Model\\ResourceModel\\Quote' => 
    array (
      'substract_product_from_quotes' => 
      array (
        'sortOrder' => 800,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Quote\\SubstractProductFromQuotes',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product' => 
    array (
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
      'catalogsearchFulltextProduct' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Product',
      ),
      'update_quote_items_after_giftcard_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCard\\Plugin\\Catalog\\Model\\ResourceModel\\Product',
      ),
      'delete_source_items' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\DeleteSourceItemsPlugin',
      ),
      'process_source_items_after_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\ProcessSourceItemsPlugin',
      ),
      'process_reservations_after_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\UpdateReservationsPlugin',
      ),
      'delete_reservations' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\DeleteReservationsPlugin',
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
    'Magento\\Catalog\\Model\\Product\\Action' => 
    array (
      'quoteProductMassChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Product\\Plugin\\MarkQuotesRecollectMassDisabled',
      ),
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
      'catalogPermissionsProductMassChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\Product\\Action',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Creditmemo' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'redirect_creditmemo' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Controller\\Order\\CustomerRedirectPlugin',
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
      'redirect_invoice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Controller\\Order\\CustomerRedirectPlugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintAction' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'redirect_print' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Controller\\Order\\CustomerRedirectPlugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintCreditmemo' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'redirect_print_creditmemo' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Controller\\Order\\CustomerRedirectPlugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintInvoice' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'redirect_print_invoice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Controller\\Order\\CustomerRedirectPlugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintShipment' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'redirect_print_shipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Controller\\Order\\CustomerRedirectPlugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Reorder' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'redirect_reorder' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Controller\\Order\\CustomerRedirectPlugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Shipment' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'redirect_shipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Controller\\Order\\CustomerRedirectPlugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\View' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'redirect_view_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Controller\\Order\\CustomerRedirectPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Shipment' => 
    array (
      'SaveSourceForShipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShipping\\Plugin\\Sales\\ResourceModel\\Order\\Shipment\\SaveSourceForShipmentPlugin',
      ),
      'LoadSourceForShipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShipping\\Plugin\\Sales\\ResourceModel\\Order\\Shipment\\LoadSourceForShipmentPlugin',
      ),
      'DeleteSourceForShipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShipping\\Plugin\\Sales\\ResourceModel\\Order\\Shipment\\DeleteSourceForShipmentPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Creditmemo' => 
    array (
      'refundRewardPoints' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\RewardPointsRefund',
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
    'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Price' => 
    array (
      'bundle' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Bundle\\Model\\Plugin\\PriceBackend',
      ),
      'giftCardOpenAmount' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCard\\Plugin\\Catalog\\Model\\Product\\Attribute\\Backend\\Price',
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
    'Magento\\Bundle\\Model\\Product\\Type' => 
    array (
      'adapt_is_product_salable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\Bundle\\Model\\Product\\Type\\AdaptIsSalablePlugin',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteManagement' => 
    array (
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
      'validate_purchase_order_number' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\OfflinePayments\\Plugin\\ValidatePurchaseOrderNumber',
      ),
    ),
    'Magento\\CatalogImportExport\\Model\\StockItemImporterInterface' => 
    array (
      'update_bundle_products_stock_item_status' => 
      array (
        'sortOrder' => 200,
        'disabled' => true,
        'instance' => 'Magento\\BundleImportExport\\Plugin\\Import\\Product\\UpdateBundleProductsStockItemStatusPlugin',
      ),
      'update_configurable_products_stock_item_status' => 
      array (
        'sortOrder' => 100,
        'disabled' => true,
        'instance' => 'Magento\\ConfigurableImportExport\\Plugin\\Import\\Product\\UpdateConfigurableProductsStockItemStatusPlugin',
      ),
      'update_grouped_product_stock_status_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedImportExport\\Plugin\\CatalogImportExport\\Model\\StockItemImporter\\UpdateGroupedProductStockStatusPlugin',
      ),
      'update_bundle_products_stock_item_status_single_source_only' => 
      array (
        'sortOrder' => 200,
        'instance' => 'Magento\\InventoryBundleImportExport\\Plugin\\Import\\Product\\UpdateBundleProductsStockItemStatusPlugin',
      ),
      'updateConfigurableProductsStockItemStatusInventory' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\InventoryImportExport\\Plugin\\Import\\UpdateConfigurableProductsPlugin',
      ),
      'importStockItemDataForSourceItem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryImportExport\\Plugin\\Import\\SourceItemImporter',
      ),
    ),
    'Magento\\BundleImportExport\\Model\\Import\\Product\\Type\\Bundle\\RelationsDataSaver' => 
    array (
      'sequence_application' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\BundleImportExportStaging\\Plugin\\BundleImportExport\\Model\\Import\\Product\\Type\\Bundle\\RelationsDataSaver',
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
      'update_identities_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Plugin\\UpdateIdentitiesPlugin',
      ),
      'catalogProductViewCanEmailToFriend' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SendFriend\\Block\\Plugin\\Catalog\\Product\\View',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Configuration' => 
    array (
      'out_of_stock_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventoryStaging\\Model\\Plugin\\Configuration',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save' => 
    array (
      'massAction' => 
      array (
        'sortOrder' => 0,
        'disabled' => true,
        'instance' => 'Magento\\CatalogInventory\\Plugin\\MassUpdateProductAttribute',
      ),
      'inventoryUpdate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save\\ProcessInventoryPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Provider\\Query\\IdListBuilder' => 
    array (
      'process_archive_entities' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesArchive\\Plugin\\ArchivedEntitiesProcessorPlugin',
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
      'targetRuleImportInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\TargetRule\\Model\\Indexer\\TargetRule\\Plugin\\Import',
      ),
      'catalogPermissionImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\Import',
      ),
    ),
    'Magento\\CatalogImportExport\\Model\\Import\\Product' => 
    array (
      'staging-import-products' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExportStaging\\Model\\Import\\ProductPlugin',
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
        'disabled' => true,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Plugin\\StockedProductsFilterPlugin',
      ),
      'stockedProductFilterByInventoryStockPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryElasticsearch\\Plugin\\CatalogSearch\\Model\\Indexer\\Fulltext\\Action\\DataProvider\\StockedProductFilterByInventoryStock',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Advanced\\Collection' => 
    array (
      'add_catalog_permissions_information' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ElasticsearchCatalogPermissions\\Plugin\\AddCategoryPermissionsToCollection',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\Collection' => 
    array (
      'can_show_price_in_layered_navigation_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Plugin\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\Collection',
      ),
      'loadPreview' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\Fulltext\\Collection',
      ),
      'add_catalog_permissions_information' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ElasticsearchCatalogPermissions\\Plugin\\AddCategoryPermissionsToFulltextCollection',
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
    'Magento\\Quote\\Model\\Quote\\Address\\ToOrderAddress' => 
    array (
      'convertQuoteAddressToOrderAddress' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\ConvertQuoteAddressToOrderAddress',
      ),
      'gift_registry_quote_address_to_order_address' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftRegistry\\Model\\Plugin\\ConvertQuoteAddressToOrderAddress',
      ),
    ),
    'Magento\\Customer\\Block\\Widget\\Name' => 
    array (
      'formatPrefixSuffixOptions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Plugin\\FormatPrefixSuffixOptions',
      ),
    ),
    'Magento\\Customer\\Model\\Address' => 
    array (
      'updateDataCustomerAddress' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\AddCustomAttributesToCustomerAddress',
      ),
    ),
    'Magento\\CustomAttributeManagement\\Block\\Form' => 
    array (
      'set_customer_custom_attribute_for_company' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Plugin\\Customer\\Block\\Form\\CustomerCustomAttributePlugin',
      ),
    ),
    'Magento\\Checkout\\Api\\PaymentInformationManagementInterface' => 
    array (
      'process_billing_custom_customer_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\ProcessCustomerBillingAddressCustomAttributes',
      ),
      'validate-agreements' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutAgreements\\Model\\Checkout\\Plugin\\Validation',
      ),
      'disable-place-order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutStaging\\Plugin\\PaymentInformationManagementPlugin',
      ),
      'ProcessPaymentVaultInformationManagement' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Vault\\Plugin\\PaymentVaultInformationManagement',
      ),
    ),
    'Magento\\Checkout\\Api\\ShippingInformationManagementInterface' => 
    array (
      'process_shipping_custom_customer_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\ProcessCustomerShippingAddressCustomAttributes',
      ),
      'gift_registry_save_address' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftRegistry\\Model\\Plugin\\SaveAddress',
      ),
    ),
    'Magento\\Checkout\\Api\\GuestPaymentInformationManagementInterface' => 
    array (
      'process_billing_custom_guest_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\ProcessGuestBillingAddressCustomAttributes',
      ),
      'validate-guest-agreements' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutAgreements\\Model\\Checkout\\Plugin\\GuestValidation',
      ),
      'disable-guest-place-order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutStaging\\Plugin\\GuestPaymentInformationManagementPlugin',
      ),
    ),
    'Magento\\Checkout\\Api\\GuestShippingInformationManagementInterface' => 
    array (
      'process_shipping_custom_guest_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\ProcessGuestShippingAddressCustomAttributes',
      ),
    ),
    'Magento\\SalesRule\\Model\\ResourceModel\\Rule\\Collection' => 
    array (
      'aroundSetValidationFilter' => 
      array (
        'sortOrder' => 500,
        'instance' => 'Magento\\AdvancedSalesRule\\Model\\ResourceModel\\Plugin\\Rule\\Collection',
      ),
      'beforeSetValidationFilter' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\SalesRuleStaging\\Model\\ResourceModel\\Plugin\\Rule\\Collection',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Config' => 
    array (
      'append_sales_rule_keys_to_quote' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRule\\Model\\Plugin\\QuoteConfigProductAttributes',
      ),
    ),
    'Magento\\SalesRule\\Model\\Rule\\Condition\\Product' => 
    array (
      'apply_rule_on_configurable_children' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\SalesRule\\Model\\Rule\\Condition\\Product',
      ),
    ),
    'Magento\\Quote\\Model\\Cart\\CartTotalRepository' => 
    array (
      'coupon_label_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRule\\Plugin\\CartTotalRepository',
      ),
      'multishipping_shipping_addresses' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Multishipping\\Model\\Cart\\CartTotalRepositoryPlugin',
      ),
      'rewardTotal' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\CartTotalRepository',
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
      'customer_cart' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Cart\\ConfigPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\CartConfiguration' => 
    array (
      'Downloadable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Downloadable\\Model\\Product\\CartConfiguration\\Plugin\\Downloadable',
      ),
      'GiftCard' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCard\\Model\\Product\\CartConfiguration\\Plugin\\GiftCard',
      ),
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Product\\CartConfiguration\\Plugin\\Configurable',
      ),
      'isProductConfigured' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\Product\\Cart\\Configuration\\Plugin\\Grouped',
      ),
    ),
    'Magento\\Framework\\App\\FrontControllerInterface' => 
    array (
      'staging_preview_permissions_check' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\Framework\\App\\FrontController',
      ),
      'configHash' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Deploy\\Model\\Plugin\\ConfigChangeDetector',
      ),
      'front-controller-builtin-cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\App\\FrontController\\BuiltinPlugin',
      ),
      'front-controller-varnish-cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\App\\FrontController\\VarnishPlugin',
      ),
      'page_cache_form_key_from_cookie' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Plugin\\RegisterFormKeyFromCookie',
      ),
    ),
    'Magento\\Webapi\\Controller\\Rest' => 
    array (
      'beforeRestDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\RestPlugin',
      ),
      'webapiContorllerRestAsync' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiAsync\\Plugin\\ControllerRest',
      ),
    ),
    'Magento\\PageCache\\Model\\Config' => 
    array (
      'staging_pagecache_bypass' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\PageCache\\Model\\Config',
      ),
      'login-as-customer-disable-page-cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerPageCache\\Plugin\\PageCache\\Model\\Config\\DisablePageCacheIfNeededPlugin',
      ),
    ),
    'Magento\\Store\\Model\\BaseUrlChecker' => 
    array (
      'staging_store_baseurl_check_bypass' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\Store\\Model\\BaseUrlChecker',
      ),
    ),
    'Magento\\Store\\Controller\\Store\\SwitchAction' => 
    array (
      'staging_preview_store_switch_fixing' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\Store\\Controller\\Store\\SwitchAction',
      ),
    ),
    'Magento\\Wishlist\\Block\\Catalog\\Product\\View\\AddTo\\Wishlist' => 
    array (
      'getWishlistOptions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCard\\Block\\Product\\View\\Plugin',
      ),
    ),
    'Magento\\Wishlist\\Block\\Item\\Configure' => 
    array (
      'getWishlistOptions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCard\\Block\\Product\\View\\Plugin',
      ),
    ),
    'Magento\\GiftRegistry\\Helper\\Data' => 
    array (
      'getWishlistOptions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCard\\Helper\\GiftRegistry\\Plugin',
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
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Listing\\DataProvider' => 
    array (
      'wishlistSettingsDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Wishlist\\Plugin\\Ui\\DataProvider\\WishlistSettings',
      ),
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
    ),
    'Magento\\CatalogGraphQl\\Model\\Resolver\\Products\\DataProvider\\Product\\CompositeCollectionProcessor' => 
    array (
      'applyCategoryPermissionsOnProductProcessor' => 
      array (
        'sortOrder' => 0,
        'disabled' => false,
        'instance' => '\\Magento\\CatalogPermissionsGraphQl\\Plugin\\CatalogGraphQl\\Model\\Resolver\\Products\\DataProvider\\Product\\CompositeCollectionProcessorPlugin',
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
    'Magento\\Catalog\\Helper\\Product\\Configuration' => 
    array (
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Helper\\Product\\Configuration\\Plugin',
      ),
      'grouped_options' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Helper\\Product\\Configuration\\Plugin\\Grouped',
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
    'Magento\\Catalog\\Model\\Product\\Type' => 
    array (
      'configurable_output' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Product\\Type\\Plugin',
      ),
      'grouped_output' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\Product\\Type\\Plugin',
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
      'used_products_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\Frontend\\UsedProductsCache',
      ),
      'used_products_website_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\Frontend\\UsedProductsWebsiteFilter',
      ),
      'is_option_salable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProduct\\Plugin\\Model\\Product\\Type\\Configurable\\IsSalableOptionPlugin',
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
    'Magento\\Tax\\Model\\Sales\\Total\\Quote\\CommonTaxCollector' => 
    array (
      'apply_tax_class_id' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Tax\\Model\\Sales\\Total\\Quote\\CommonTaxCollector',
      ),
    ),
    'Magento\\Quote\\Model\\Quote' => 
    array (
      'gift_registry_update_quote_item' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftRegistry\\Model\\Plugin\\UpdateQuoteItem',
      ),
      'remove_store_credit_after_product_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerBalance\\Plugin\\Model\\Quote\\ResetCustomerBalanceUsage',
      ),
      'clear_addresses_after_product_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Checkout\\Plugin\\Model\\Quote\\ResetQuoteAddresses',
      ),
      'skip_collect_totals' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\DeferredTotalCalculating\\Plugin\\TotalsCollectorPlugin',
      ),
      'delete_gift_wrapping_for_empty_quote' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftWrapping\\Plugin\\Model\\Quote\\DeleteGiftWrappingForEmptyQuote',
      ),
      'gtmQuote' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GoogleTagManager\\Model\\Plugin\\Quote',
      ),
      'set_google_analytics_on_cart_add' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GoogleTagManager\\Model\\Plugin\\Quote\\SetGoogleAnalyticsOnCartAdd',
      ),
      'set_google_analytics_on_cart_remove' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GoogleTagManager\\Model\\Plugin\\Quote\\SetGoogleAnalyticsOnCartRemove',
      ),
      'multishipping_reset_shipping_assigment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Multishipping\\Plugin\\ResetShippingAssigment',
      ),
    ),
    'Magento\\Quote\\Api\\CartRepositoryInterface' => 
    array (
      'save_fake_quota_in_preview' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutStaging\\Plugin\\SavePreviewQuotaPlugin',
      ),
      'remove_in_store_pickup_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupMultishipping\\Plugin\\Quote\\RemoveInStorePickupDataInMultishippingModePlugin',
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
    'Magento\\Quote\\Model\\Quote\\Address\\ToOrder' => 
    array (
      'add_tax_to_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\Quote\\ToOrderConverter',
      ),
      'set_pickup_location_to_order_during_address_conversion' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\SetPickupLocationToOrder',
      ),
    ),
    'Magento\\Quote\\Model\\Cart\\TotalsConverter' => 
    array (
      'add_tax_details' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\Quote\\GrandTotalDetailsPlugin',
      ),
      'giftCardAmountTotal' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCardAccount\\Model\\Plugin\\TotalsConverter',
      ),
      'gift_wrapping_total' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftWrapping\\Model\\Plugin\\TotalsConverter',
      ),
    ),
    'Magento\\Sales\\Api\\OrderRepositoryInterface' => 
    array (
      'save_order_tax' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\Plugin\\OrderSave',
      ),
      'get_customer_balance' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerBalance\\Model\\Plugin\\OrderRepository',
      ),
      'gift_card_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCardAccount\\Model\\Plugin\\OrderRepository',
      ),
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
      'get_order_gift_wrapping' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftWrapping\\Model\\Plugin\\OrderGiftWrapping',
      ),
      'get_order_item_gift_wrapping' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftWrapping\\Model\\Plugin\\OrderItemGiftWrapping',
      ),
      'get_pickup_location_for_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSales\\Plugin\\Sales\\Order\\GetPickupLocationForOrderPlugin',
      ),
      'save_pickup_location_for_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSales\\Plugin\\Sales\\Order\\SavePickupLocationForOrderPlugin',
      ),
      'rewardCreditmemoUpdater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\OrderRepository',
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
    'Magento\\ConfigurableProduct\\Model\\ResourceModel\\Product\\Type\\Configurable\\Product\\Collection' => 
    array (
      'catalogRulePriceForConfigurableProduct' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleConfigurable\\Plugin\\ConfigurableProduct\\Model\\ResourceModel\\AddCatalogRulePrice',
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
    'Magento\\Config\\Model\\Config\\Structure\\Converter' => 
    array (
      'cron_backend_config_structure_converter_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Cron\\Model\\Backend\\Config\\Structure\\Converter',
      ),
    ),
    'Magento\\Framework\\App\\RouterInterface' => 
    array (
      'csp_aware_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Csp\\Plugin\\CspAwareControllerPlugin',
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
    'Magento\\Quote\\Model\\Quote\\TotalsCollector' => 
    array (
      'quoteCustomerSegmentUpdater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerBalance\\Model\\Plugin\\TotalsCollector',
      ),
      'quoteGiftCardAmountUpdater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCardAccount\\Model\\Plugin\\TotalsCollector',
      ),
      'in-store-pickup-set-shipping-description' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\Address\\SetShippingDescription',
      ),
      'quoteRewardAmountUpdater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\TotalsCollector',
      ),
    ),
    'Magento\\Sales\\Api\\InvoiceRepositoryInterface' => 
    array (
      'get_customer_balance' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerBalance\\Model\\Plugin\\InvoiceRepository',
      ),
      'gift_card_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCardAccount\\Model\\Plugin\\InvoiceRepository',
      ),
      'get_invoice_gift_wrapping' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftWrapping\\Model\\Plugin\\InvoiceGiftWrapping',
      ),
    ),
    'Magento\\Sales\\Api\\CreditmemoRepositoryInterface' => 
    array (
      'get_customer_balance' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerBalance\\Model\\Plugin\\CreditmemoRepository',
      ),
      'gift_card_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCardAccount\\Model\\Plugin\\CreditmemoRepository',
      ),
      'get_credit_memo_gift_wrapping' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftWrapping\\Model\\Plugin\\CreditMemoGiftWrapping',
      ),
      'deduct_source_item_quantity_on_refund' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Sales\\OrderManagement\\DeductSourceItemQuantityOnRefundPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\Order' => 
    array (
      'can_creditmemo_with_store_credit' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerBalance\\Plugin\\CreditMemoResolver',
      ),
      'express_order_invoice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\OrderCanInvoice',
      ),
      'front-order-placement-comment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerSales\\Plugin\\FrontAddCommentOnOrderPlacementPlugin',
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
    ),
    'Magento\\Catalog\\Model\\Category' => 
    array (
      'targetRuleCategoryInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\TargetRule\\Model\\Indexer\\TargetRule\\Plugin\\Category',
      ),
      'categoryChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\Category',
      ),
      'catalogStagingCategoryPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Model\\Category',
      ),
    ),
    'Magento\\CustomerSegment\\Model\\Segment' => 
    array (
      'targetRuleCustomerSegmentInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\TargetRule\\Model\\Indexer\\TargetRule\\Plugin\\CustomerSegment',
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
    'Magento\\CatalogGraphQl\\DataProvider\\Product\\SearchCriteriaBuilder' => 
    array (
      'product_search_criteria_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ElasticsearchCatalogPermissionsGraphQl\\Plugin\\CatalogGraphQl\\ProductSearchCriteriaFilter',
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
      'magePalGmailSmtpAppTransportInterface' => 
      array (
        'sortOrder' => 100,
        'instance' => 'MagePal\\GmailSmtpApp\\Plugin\\Mail\\TransportPlugin',
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
    'Magento\\Theme\\Model\\Favicon\\Favicon' => 
    array (
      'enterprise_favicon' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Enterprise\\Model\\Plugin\\Favicon',
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
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Edit\\Index' => 
    array (
      'order_edit' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\GiftCardAccount\\Controller\\Adminhtml\\Order\\Edit\\Plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Layer\\FilterList' => 
    array (
      'catalogPermissionsFilterListRemovePrice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Plugin\\Catalog\\Model\\Layer\\FilterList',
      ),
    ),
    'Magento\\Framework\\Pricing\\Render\\PriceBox' => 
    array (
      'can_show_price_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Plugin\\Framework\\Pricing\\Render\\CanShowPricePlugin',
      ),
      'price_box_staging_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Catalog\\Pricing\\Render\\PriceBox',
      ),
      'catalog_price_box_key' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Block\\Category\\Plugin\\PriceBoxTags',
      ),
    ),
    'Magento\\Backend\\Block\\Dashboard\\Orders\\Grid' => 
    array (
      'orders_grid_plugin' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Block\\Dashboard\\Orders\\Grid',
      ),
    ),
    'Magento\\Sales\\Helper\\Guest' => 
    array (
      'redirect_guest_on_received_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Helper\\GuestPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\OrderIncrementIdChecker' => 
    array (
      'after_increment_id_check' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Model\\OrderIncrementIdCheckerPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\OrderCustomerExtractor' => 
    array (
      'after_extract' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Model\\OrderCustomerExtractorPlugin',
      ),
    ),
    'Magento\\Payment\\Observer\\SalesOrderBeforeSaveObserver' => 
    array (
      'skip_order_payment_verification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\OrderPaymentVerificationPlugin',
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
    'Magento\\Framework\\App\\MaintenanceMode' => 
    array (
      'amqp_maintenance_mode' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MessageQueue\\Model\\Plugin\\ResourceModel\\Lock',
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
    'Magento\\Catalog\\Api\\ProductCustomOptionRepositoryInterface' => 
    array (
      'isOptionExists' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Api\\Plugin\\ProductCustomOptionRepository',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Product\\Flat\\Table\\BuilderInterface' => 
    array (
      'addRowIdToFlat' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Model\\Indexer\\Product\\Flat\\Table\\Builder',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\AbstractFlatState' => 
    array (
      'staging_flat_bypass' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Catalog\\Model\\Indexer\\AbstractFlatState',
      ),
    ),
    'Magento\\Catalog\\Controller\\Category\\View' => 
    array (
      'replaceIndex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\Controller\\View',
      ),
    ),
    'Magento\\Catalog\\Api\\CategoryRepositoryInterface' => 
    array (
      'DateRangeDesignUpdateCategorySavePlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Api\\DateRangeDesignUpdateCategorySavePlugin',
      ),
    ),
    'Magento\\Staging\\Model\\VersionManager' => 
    array (
      'catalogStagingVersionManager' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Staging\\Model\\VersionManager',
      ),
    ),
    'Magento\\Inventory\\Model\\ResourceModel\\IsProductAssignedToStock' => 
    array (
      'cache_product_stock_assignment_check' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Inventory\\Plugin\\Inventory\\Model\\ResourceModel\\IsProductAssignedToStockCache',
      ),
    ),
    'Magento\\AdvancedCheckout\\Model\\AreProductsSalableForRequestedQty' => 
    array (
      'inventory_advanced_checkout_is_in_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryAdvancedCheckout\\Plugin\\Model\\AreProductsSalablePlugin',
      ),
    ),
    'Magento\\BundleImportExport\\Model\\Import\\Product\\Type\\Bundle' => 
    array (
      'process_shipment_type_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleImportExport\\Plugin\\BundleImportExport\\Model\\Import\\Product\\Type\\Bundle\\ProcessShipmentTypePlugin',
      ),
    ),
    'Magento\\InventoryConfigurationApi\\Model\\IsSourceItemManagementAllowedForProductTypeInterface' => 
    array (
      'disable_bundle_type' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\InventoryConfigurationApi\\IsSourceItemManagementAllowedForProductType\\DisableBundleTypePlugin',
      ),
      'disable_grouped_type' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProduct\\Plugin\\InventoryConfigurationApi\\IsSourceItemManagementAllowedForProductType\\DisableGroupedTypePlugin',
      ),
    ),
    'Magento\\Bundle\\Model\\ResourceModel\\Selection\\Collection' => 
    array (
      'adapt_add_quantity_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\Bundle\\Model\\ResourceModel\\Selection\\Collection\\AdaptAddQuantityFilterPlugin',
      ),
    ),
    'Magento\\Bundle\\Api\\ProductLinkManagementInterface' => 
    array (
      'validate_source_items_before_add_bundle_selection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\Bundle\\Model\\LinkManagement\\ValidateSourceItemsBeforeAddBundleSelectionPlugin',
      ),
      'validate_source_items_before_save_bundle_selection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\Bundle\\Model\\LinkManagement\\ValidateSourceItemsBeforeSaveBundleSelectionPlugin',
      ),
      'reindex_source_items_after_add_bundle_selection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\Bundle\\Model\\LinkManagement\\ReindexSourceItemsAfterAddBundleSelectionPlugin',
      ),
      'reindex_source_items_after_save_bundle_selection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\Bundle\\Model\\LinkManagement\\ReindexSourceItemsAfterSaveBundleSelectionPlugin',
      ),
      'reindex_source_items_after_remove_bundle_selection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\Bundle\\Model\\LinkManagement\\ReindexSourceItemsAfterRemoveBundleSelectionPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Helper\\Stock' => 
    array (
      'adapt_assign_stock_status_to_bundle_product' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\CatalogInventory\\Helper\\Stock\\AdaptAssignStatusToProductPlugin',
      ),
      'adapt_add_in_stock_filter_to_collection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Helper\\Stock\\AdaptAddInStockFilterToCollectionPlugin',
      ),
      'adapt_add_stock_status_to_products' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Helper\\Stock\\AdaptAddStockStatusToProductsPlugin',
      ),
      'adapt_assign_status_to_product' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Helper\\Stock\\AdaptAssignStatusToProductPlugin',
      ),
      'adapt_assign_stock_status_to_configurable_product' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProduct\\Plugin\\CatalogInventory\\Helper\\Stock\\AdaptAssignStatusToProductPlugin',
      ),
    ),
    'Magento\\Inventory\\Model\\SourceItem\\Command\\DecrementSourceItemQty' => 
    array (
      'update_parent_bundle_product_stock_status_in_legacy_stock' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\InventoryApi\\UpdateParentStockStatusInLegacyStockPlugin',
      ),
      'synchronize_legacy_catalog_inventory_at_source_item_decrement_quantity' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\SynchronizeLegacyStockAfterDecrementStockPlugin',
      ),
      'update_parent_configurable_product_stock_status_in_legacy_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProduct\\Plugin\\InventoryApi\\UpdateParentStockStatusInLegacyStockPlugin',
      ),
      'reindex_after_decrement_source_item_quantity' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\ReindexAfterDecrementSourceItemQty',
      ),
    ),
    'Magento\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync' => 
    array (
      'bundle_product_index_full' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexFullPlugin',
      ),
      'bundle_product_index_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexListPlugin',
      ),
      'update_product_prices_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\PriceIndexUpdatePlugin',
      ),
      'configurable_product_full_index' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexFullPlugin',
      ),
      'configurable_product_index_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexListPlugin',
      ),
      'grouped_product_index_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexListPlugin',
      ),
      'grouped_product_index_full' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexFullPlugin',
      ),
      'invalidate_products_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCache\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\CacheFlush',
      ),
    ),
    'Magento\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync' => 
    array (
      'bundle_product_index' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\SourceItemIndexerPlugin',
      ),
      'priceIndexUpdater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\PriceIndexUpdater',
      ),
      'fulltextIndexUpdater' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\InventoryCatalogSearch\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\FulltextIndexUpdater',
      ),
      'configurable_product_index' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\InventoryConfigurableProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\SourceItemIndexerPlugin',
      ),
      'grouped_product_index' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\SourceItemIndexerPlugin',
      ),
      'invalidate_products_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCache\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\CacheFlush',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockRepositoryInterface' => 
    array (
      'prevent_default_stock_deleting' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\StockRepository\\PreventDeleting\\DefaultStockPlugin',
      ),
      'load_sales_channels_on_get_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\InventoryApi\\StockRepository\\LoadSalesChannelsOnGetListPlugin',
      ),
      'load_sales_channels_on_get' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\InventoryApi\\StockRepository\\LoadSalesChannelsOnGetPlugin',
      ),
      'save_sales_channels_links' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventorySales\\Plugin\\InventoryApi\\StockRepository\\SaveSalesChannelsLinksPlugin',
      ),
      'prevent_deleting_assigned_to_sales_channels_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\InventoryApi\\StockRepository\\PreventDeletingAssignedToSalesChannelsStockPlugin',
      ),
    ),
    'Magento\\InventoryApi\\Api\\SourceItemsSaveInterface' => 
    array (
      'set_data_to_legacy_catalog_inventory_at_source_items_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\SetDataToLegacyCatalogInventoryAtSourceItemsSavePlugin',
      ),
      'reindex_after_source_items_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\ReindexAfterSourceItemsSavePlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Indexer\\ProductPriceIndexFilter' => 
    array (
      'change_select_for_price_modifier' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\Indexer\\ModifySelectInProductPriceIndexFilter',
      ),
    ),
    'Magento\\InventoryApi\\Api\\SourceItemsDeleteInterface' => 
    array (
      'set_to_zero_legacy_catalog_inventory_at_source_items_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\SetToZeroLegacyCatalogInventoryAtSourceItemsDeletePlugin',
      ),
      'reindex_after_source_items_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\ReindexAfterSourceItemsDeletePlugin',
      ),
      'inventory_low_quantity_notification_source_item_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\InventoryApi\\SourceItemsDeleteInterfacePlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\QtyCounterInterface' => 
    array (
      'update_source_item_at_legacy_qty_counter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\UpdateSourceItemAtLegacyQtyCounterPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\Stock\\Item' => 
    array (
      'update_source_item_at_legacy_stock_item_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\UpdateSourceItemAtLegacyStockItemSavePlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status' => 
    array (
      'adapt_add_stock_data_to_collection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status\\AdaptAddStockDataToCollectionPlugin',
      ),
      'adapt_add_stock_status_to_select' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status\\AdaptAddStockStatusToSelectPlugin',
      ),
      'adapt_add_is_in_stock_filter_to_collection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status\\AdaptAddIsInStockFilterToCollectionPlugin',
      ),
    ),
    'Magento\\InventorySalesApi\\Api\\GetStockBySalesChannelInterface' => 
    array (
      'adapt_stock_resolver_to_admin_website' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventorySalesApi\\StockResolver\\AdaptStockResolverToAdminWebsitePlugin',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockSourceLinksDeleteInterface' => 
    array (
      'prevent_delete_default_stock_links' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\StockSourceLinksDelete\\PreventDeleteDefaultStockLinksPlugin',
      ),
      'invalidate_after_stock_source_links_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\InvalidateAfterStockSourceLinksDeletePlugin',
      ),
    ),
    'Magento\\Inventory\\Model\\SourceItem\\Command\\SourceItemsSaveWithoutLegacySynchronization' => 
    array (
      'set_data_to_legacy_catalog_inventory_at_source_items_save' => 
      array (
        'sortOrder' => 0,
        'disabled' => true,
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockRegistryInterface' => 
    array (
      'adapt_get_stock_status' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\StockRegistry\\AdaptGetStockStatusPlugin',
      ),
      'adapt_get_stock_status_by_sku' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\StockRegistry\\AdaptGetStockStatusBySkuPlugin',
      ),
      'adapt_get_product_stock_status' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\StockRegistry\\AdaptGetProductStockStatusPlugin',
      ),
      'adapt_get_product_stock_status_by_sku' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\StockRegistry\\AdaptGetProductStockStatusBySkuPlugin',
      ),
      'adapt_update_product_stock_status_by_sku' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\StockRegistry\\AdaptUpdateStockStatusBySkuPlugin',
      ),
      'inventory_catalog_add_qty_to_legacy_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\StockRegistry\\SetQtyToLegacyStock',
      ),
      'inventory_catalog_add_qty_to_legacy_stock_configurable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProduct\\Plugin\\CatalogInventory\\Api\\StockRegistry\\SetQtyToLegacyStock',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\StockDataFilter' => 
    array (
      'allow_negative_min_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\StockDataFilter\\AllowNegativeMinQtyPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\Data\\StockItemInterface' => 
    array (
      'adapt_min_qty_to_backorders' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\Data\\StockItemInterface\\AdaptMinQtyToBackordersPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Spi\\StockStateProviderInterface' => 
    array (
      'adapt_verify_stock_to_negative_min_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\Spi\\StockStateProvider\\AdaptVerifyStockToNegativeMinQtyPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\StockStatusFilterInterface' => 
    array (
      'inventory_catalog_stock_status_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\ResourceModel\\StockStatusFilterPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Source\\Stock' => 
    array (
      'inventory_catalog_add_sort_by_stock_qty_to_collection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\Source\\StockPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockStateInterface' => 
    array (
      'check_quote_item_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\StockState\\CheckQuoteItemQtyPlugin',
      ),
      'suggest_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\StockState\\SuggestQtyPlugin',
      ),
    ),
    'Magento\\InventoryReservationsApi\\Model\\AppendReservationsInterface' => 
    array (
      'prevent_append_reservation_on_not_manage_items_in_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\InventoryReservationsApi\\PreventAppendReservationOnNotManageItemsInStockPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\StockManagement' => 
    array (
      'process_back_item_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\CatalogInventory\\StockManagement\\ProcessBackItemQtyPlugin',
      ),
      'process_revert_products_sale' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\CatalogInventory\\StockManagement\\ProcessRevertProductsSalePlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\RegisterProductSaleInterface' => 
    array (
      'process_register_products_sale' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\CatalogInventory\\StockManagement\\ProcessRegisterProductsSalePlugin',
      ),
    ),
    'Magento\\Sales\\Api\\OrderManagementInterface' => 
    array (
      'inventory_reservations_placement' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Sales\\OrderManagement\\AppendReservationsAfterOrderPlacementPlugin',
      ),
      'reset_payment_attempts_after_order_is_placed_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Captcha\\Plugin\\ResetPaymentAttemptsAfterOrderIsPlacedPlugin',
      ),
    ),
    'Magento\\SalesInventory\\Model\\Order\\ReturnProcessor' => 
    array (
      'process_return_product_qty_on_credit_memo' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\SalesInventory\\ProcessReturnQtyOnCreditMemoPlugin',
      ),
    ),
    'Magento\\InventoryConfigurationApi\\Api\\GetStockItemConfigurationInterface' => 
    array (
      'load_stock_item_is_in_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryConfigurationApi\\GetStockItemConfiguration\\LoadIsInStockPlugin',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Action\\GetSearchableProductsSelect' => 
    array (
      'stock_filters_by_child_products' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalogSearch\\Plugin\\CatalogSearch\\Model\\Indexer\\ChildProductFilterByInventoryStockPlugin',
      ),
    ),
    'Magento\\InventorySalesApi\\Model\\GetSkuFromOrderItemInterface' => 
    array (
      'get_configurable_option_sku_from_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProduct\\Plugin\\Sales\\GetSkuFromOrderItem',
      ),
    ),
    'Magento\\CatalogInventory\\Observer\\ParentItemProcessorInterface' => 
    array (
      'adapt_parent_stock_processor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProduct\\Plugin\\CatalogInventory\\Observer\\ParentItemProcessor\\AdaptParentItemProcessorPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\System\\Config\\Backend\\Minqty' => 
    array (
      'allow_negative_min_qty_in_config' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfiguration\\Plugin\\CatalogInventory\\Model\\System\\Config\\Backend\\Minqty\\AllowNegativeMinQtyInConfigPlugin',
      ),
    ),
    'Magento\\InventoryConfiguration\\Model\\GetLegacyStockItem' => 
    array (
      'cache_legacy_stock_item' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfiguration\\Plugin\\InventoryConfiguration\\Model\\GetLegacyStockItemCache',
      ),
      'inventory_catalog_get_legacy_stock_item_from_stock_registry' => 
      array (
        'sortOrder' => 0,
        'instance' => '\\Magento\\InventoryCatalog\\Plugin\\InventoryConfiguration\\Model\\GetLegacyStockItemFromStockRegistry',
      ),
    ),
    'Magento\\InventoryApi\\Api\\SourceRepositoryInterface' => 
    array (
      'updateSourceLatitudeAndLongitude' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\InventoryDistanceBasedSourceSelection\\Plugin\\FillSourceLatitudeAndLongitude',
      ),
      'invalidate_after_enabling_or_disabling_source' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\InvalidateAfterEnablingOrDisablingSourcePlugin',
      ),
      'load_in_store_pickup_on_get_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickup\\Plugin\\InventoryApi\\SourceRepository\\LoadInStorePickupOnGetListPlugin',
      ),
      'load_in_store_pickup_on_get' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickup\\Plugin\\InventoryApi\\SourceRepository\\LoadInStorePickupOnGetPlugin',
      ),
      'save_in_store_pickup_links' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickup\\Plugin\\InventoryApi\\SourceRepository\\SaveInStorePickupPlugin',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockSourceLinksSaveInterface' => 
    array (
      'invalidate_after_stock_source_links_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\InvalidateAfterStockSourceLinksSavePlugin',
      ),
    ),
    'Magento\\InventorySales\\Model\\PlaceReservationsForSalesEvent' => 
    array (
      'schedule_reservation_place' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventorySales\\EnqueueAfterPlaceReservationsForSalesEvent',
      ),
    ),
    'Magento\\InventoryCatalog\\Model\\UpdateInventory' => 
    array (
      'updateParentLegacyStockStatus' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProduct\\Plugin\\InventoryCatalog\\Model\\UpdateParentStockStatusPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Link' => 
    array (
      'process_source_items_after_save_links' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProductAdminUi\\Plugin\\Catalog\\Model\\Product\\Link\\ProcessSourceItemsAfterSaveAssociatedLinks',
      ),
      'isInStockFilter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Plugin\\ProductLinks',
      ),
    ),
    'Magento\\Quote\\Model\\ResourceModel\\Quote\\Address\\Collection' => 
    array (
      'add_pickup_location_to_quote_address' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\AddressCollection\\GetPickupLocationInformationPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\ShippingAddressManagementInterface' => 
    array (
      'shipping_address_management_replace_shipping_address' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\ReplaceShippingAddressForShippingAddressManagement',
      ),
    ),
    'Magento\\Quote\\Api\\BillingAddressManagementInterface' => 
    array (
      'do_not_use_billing_address_for_shipping_for_in_store_pickup_quote' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\DoNotUseBillingAddressForShipping',
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
    'Magento\\InventoryIndexer\\Model\\Queue\\UpdateIndexSalabilityStatus' => 
    array (
      'invalidate_products_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCache\\Plugin\\InventoryIndexer\\Queue\\Reservation\\UpdateSalabilityStatus\\CacheFlush',
      ),
    ),
    'Magento\\InventoryCatalogApi\\Api\\BulkInventoryTransferInterface' => 
    array (
      'inventory_low_quantity_bulk_transfer' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\InventoryCatalogApi\\BulkConfigurationTransferInterfacePlugin',
      ),
    ),
    'Magento\\InventoryCatalogApi\\Api\\BulkSourceAssignInterface' => 
    array (
      'inventory_low_quantity_bulk_source_assign' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\InventoryCatalogApi\\BulkSourceAssignInterfacePlugin',
      ),
    ),
    'Magento\\InventoryCatalogApi\\Api\\BulkSourceUnassignInterface' => 
    array (
      'inventory_low_quantity_bulk_source_unassign' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\InventoryCatalogApi\\BulkSourceUnassignInterfacePlugin',
      ),
    ),
    'Magento\\InventoryLowQuantityNotificationApi\\Api\\SourceItemConfigurationsSaveInterface' => 
    array (
      'update_legacy_stock_item_configuration_at_source_item_configuration_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\InventoryLowQuantityNotificationApi\\UpdateLegacyStockItemConfigurationAtSourceItemConfigurationSavePlugin',
      ),
    ),
    'Magento\\Inventory\\Model\\ResourceModel\\SourceItem\\DeleteMultiple' => 
    array (
      'delete_source_items_configuration' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\Inventory\\Model\\ResourceModel\\SourceItem\\DeleteMultiple\\DeleteSourceItemsConfigurationPlugin',
      ),
    ),
    'Magento\\ProductAlert\\Model\\ProductSalability' => 
    array (
      'product_alert_adapt_salability' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryProductAlert\\Plugin\\AdaptProductSalabilityPlugin',
      ),
    ),
    'Magento\\RequisitionList\\Model\\RequisitionListItem\\Validator\\Stock' => 
    array (
      'magentoRequisitionListStockPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryRequisitionList\\Plugin\\Model\\RequisitionListItem\\Validator\\StockPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Block\\Stockqty\\AbstractStockqty' => 
    array (
      'magentoInventorySalesFrontendUiAbstractStockqty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySalesFrontendUi\\Plugin\\Block\\Stockqty\\AbstractStockqtyPlugin',
      ),
    ),
    'Magento\\Setup\\Model\\FixtureGenerator\\EntityGeneratorFactory' => 
    array (
      'update_custom_table_map' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySetupFixtureGenerator\\Plugin\\Setup\\Model\\FixtureGenerator\\EntityGeneratorFactory\\UpdateCustomTableMapPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\ShipmentFactory' => 
    array (
      'assign_source_code_to_shipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShipping\\Plugin\\Sales\\Shipment\\AssignSourceCodeToShipmentPlugin',
      ),
    ),
    'Magento\\Sales\\Api\\ShipmentRepositoryInterface' => 
    array (
      'GetListShipmentRepository' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShipping\\Plugin\\Sales\\Model\\Order\\GetListShipmentRepositoryPlugin',
      ),
      'Helloworld\\ShipmentAttributes\\Plugin\\ShipmentRepositoryPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Helloworld\\ShipmentAttributes\\Plugin\\ShipmentRepositoryPlugin',
      ),
    ),
    'Magento\\VisualMerchandiser\\Model\\Resolver\\QuantityAndStock' => 
    array (
      'magentoVisualMerchandiserResolverQuantityAndStockPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryVisualMerchandiser\\Plugin\\Model\\Resolver\\QuantityAndStockPlugin',
      ),
    ),
    'Magento\\VisualMerchandiser\\Model\\Sorting\\OutStockBottom' => 
    array (
      'magentoVisualMerchandiserOutStockBottomSortingPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryVisualMerchandiser\\Plugin\\Model\\Sorting\\OutStockBottomSortingPlugin',
      ),
    ),
    'Magento\\Framework\\Api\\DataObjectHelper' => 
    array (
      'add_allow_remote_shopping_assistance_to_customer' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerGraphQl\\Plugin\\DataObjectHelperPlugin',
      ),
    ),
    'Magento\\LoginAsCustomerApi\\Api\\AuthenticateCustomerBySecretInterface' => 
    array (
      'process_shopping_cart' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerQuote\\Plugin\\LoginAsCustomerApi\\ProcessShoppingCartPlugin',
      ),
      'log_authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerLogging\\Plugin\\LoginAsCustomerApi\\LogAuthenticationPlugin',
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
    'Magento\\Wishlist\\Model\\Rss\\Wishlist' => 
    array (
      'aroundGetHeader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MultipleWishlist\\Model\\Plugin\\Rss\\Wishlist',
      ),
    ),
    'Magento\\MultipleWishlist\\Controller\\AbstractIndex' => 
    array (
      'multiple_enabled_filter' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\MultipleWishlist\\Controller\\Index\\Plugin',
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
    ),
    'Magento\\CatalogWidget\\Block\\Product\\ProductsList' => 
    array (
      'pagebuilder_product_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Catalog\\Block\\Product\\ProductsListPlugin',
      ),
    ),
    'Magento\\Payment\\Model\\Method\\AbstractMethod' => 
    array (
      'paymentMethodIsAvailable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PaymentStaging\\Plugin\\Model\\Method\\PaymentMethodIsAvailable',
      ),
    ),
    'Magento\\Payment\\Model\\Method\\Adapter' => 
    array (
      'paymentGatewayIsAvailable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PaymentStaging\\Plugin\\Model\\Method\\PaymentMethodIsAvailable',
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
    'Magento\\Payment\\Model\\Checks\\Composite' => 
    array (
      'paypal_specification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Model\\Method\\Checks\\SpecificationPlugin',
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
    'Magento\\Sales\\Model\\ResourceModel\\Collection\\ExpiredQuotesCollection' => 
    array (
      'cleanExpiredQuotesPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PersistentHistory\\Plugin\\CleanExpiredQuotesPlugin',
      ),
    ),
    'Magento\\Catalog\\Ui\\Component\\Listing\\Columns\\Price' => 
    array (
      'price-permission-grid-columns-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PricePermissions\\Ui\\Component\\Listing\\Columns\\Price\\Plugin',
      ),
    ),
    'Magento\\Downloadable\\Model\\Link\\UpdateHandler' => 
    array (
      'replaceDownloadableLinksIds' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\DownloadableStaging\\Model\\Plugin\\Link\\UpdateHandlerPlugin',
      ),
    ),
    'Magento\\Downloadable\\Model\\Sample\\UpdateHandler' => 
    array (
      'replaceDownloadableSamplesIds' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\DownloadableStaging\\Model\\Plugin\\Sample\\UpdateHandlerPlugin',
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
    'Magento\\ScheduledImportExport\\Model\\Scheduled\\Operation\\Data' => 
    array (
      'serverType' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\RemoteStorageCommerce\\Plugin\\ServerType',
      ),
    ),
    'Magento\\CustomerImportExport\\Model\\Import\\Customer' => 
    array (
      'rewardAttributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\ImportCustomer',
      ),
    ),
    'Magento\\CustomerBalance\\Model\\Creditmemo\\Balance' => 
    array (
      'customerBalanceSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\CustomerBalance',
      ),
    ),
    'Magento\\SalesRule\\Model\\Rule' => 
    array (
      'salesRuleAroundSave' => 
      array (
        'sortOrder' => 500,
        'instance' => 'Magento\\AdvancedSalesRule\\Model\\Plugin\\Rule',
      ),
      'salesRuleDateResolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRuleStaging\\Model\\Plugin\\DateResolverPlugin',
      ),
      'salesRuleBeforeBeforeSave' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\SalesRuleStaging\\Model\\Plugin\\Rule',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View\\Tab\\History' => 
    array (
      'sales-order-history-rma-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Rma\\Block\\Adminhtml\\Order\\View\\Tab\\HistoryPlugin',
      ),
    ),
    'Magento\\Rma\\Model\\RmaRepository' => 
    array (
      'authorization' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Rma\\Model\\Rma\\Plugin\\Authorization',
      ),
    ),
    'Magento\\Sales\\Model\\RefundOrder' => 
    array (
      'refundOrderAfter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesInventory\\Model\\Plugin\\Order\\ReturnToStockOrder',
      ),
    ),
    'Magento\\Sales\\Model\\RefundInvoice' => 
    array (
      'refundInvoiceAfter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesInventory\\Model\\Plugin\\Order\\ReturnToStockInvoice',
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
    'Magento\\CatalogRule\\Model\\Rule' => 
    array (
      'catalogRuleDateResolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleStaging\\Model\\Plugin\\DateResolverPlugin',
      ),
    ),
    'Magento\\CatalogRule\\Observer\\ProcessFrontFinalPriceObserver' => 
    array (
      'previewCatalogPriceRule' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleStaging\\Model\\Plugin\\FinalPricePlugin',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\ObjectRelationProcessor' => 
    array (
      'object_constraints_resolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\ForeignKey\\ObjectRelationProcessor\\Plugin',
      ),
    ),
    'Magento\\CatalogGraphQl\\Model\\Resolver\\Products' => 
    array (
      'catalog_search_permissions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissionsGraphQl\\Model\\Resolver\\Products',
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
    'Magento\\Banner\\Block\\Widget\\Banner' => 
    array (
      'additional_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\BannerPageBuilder\\Plugin\\Widget\\Banner',
      ),
      'gtmBannerBlockWidgetBanner' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GoogleTagManager\\Block\\Plugin\\Banner\\Widget\\Banner',
      ),
    ),
    'Magento\\PageBuilder\\Model\\Stage\\Renderer\\CmsStaticBlock' => 
    array (
      'dynamic_block_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\BannerPageBuilder\\Plugin\\CmsStaticBlockRenderer',
      ),
    ),
    'Magento\\VersionsCms\\Model\\Hierarchy\\Node' => 
    array (
      'versions-cms-reset-page-cache-after-nodes-save' => 
      array (
        'sortOrder' => 0,
        'instance' => '\\Magento\\VersionsCmsPageCache\\Plugin\\VersionsCms\\Hierarchy\\Node',
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
    'Magento\\Webapi\\Model\\Config\\Converter' => 
    array (
      'webapiResourceSecurity' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiSecurity\\Model\\Plugin\\AnonymousResourceSecurity',
      ),
    ),
    'Magento\\CatalogStaging\\Model\\Product\\Retriever' => 
    array (
      'update_bundle_product_properties' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\BundleStaging\\Model\\Product\\RetrieverPlugin',
      ),
    ),
    'MagePal\\GmailSmtpApp\\Model\\Transport' => 
    array (
      'magePalGmailSmtpAppTransport' => 
      array (
        'sortOrder' => 100,
        'instance' => 'MagePal\\GmailSmtpApp\\Plugin\\Mail\\TransportPlugin',
      ),
    ),
    'Magento\\Framework\\Mail\\Template\\TransportBuilder' => 
    array (
      'magePalGmailSmtpAppTransportBuilder' => 
      array (
        'sortOrder' => 1,
        'instance' => 'MagePal\\GmailSmtpApp\\Plugin\\Mail\\Template\\TransportBuilderPlugin',
      ),
    ),
    'Magento\\Framework\\Mail\\Template\\TransportBuilderByStore' => 
    array (
      'magePalGmailSmtpAppTransportBuilderByStore' => 
      array (
        'sortOrder' => 1,
        'instance' => 'MagePal\\GmailSmtpApp\\Plugin\\Mail\\Template\\TransportBuilderByStorePlugin',
      ),
    ),
    'Magento\\Customer\\Model\\EmailNotification' => 
    array (
      'mpcustomerapproval_disable_email_notification' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Mageplaza\\CustomerApproval\\Plugin\\EmailNewAccount',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\CreatePost' => 
    array (
      'mpcustomerapproval_account_create_post' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Mageplaza\\CustomerApproval\\Plugin\\CustomerCreatePost',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\Confirm' => 
    array (
      'mpcustomerapproval_account_create_confirm' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Mageplaza\\CustomerApproval\\Plugin\\CustomerConfirm',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\LoginPost' => 
    array (
      'mpcustomerapproval_account_login_post' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Mageplaza\\CustomerApproval\\Plugin\\CustomerLoginPost',
      ),
    ),
    'Magento\\Framework\\View\\Asset\\Minification' => 
    array (
      'braintreeExcludeFromMinification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'PayPal\\Braintree\\Plugin\\ExcludeFromMinification',
      ),
      'exclude-recaptcha-from-minification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ReCaptchaFrontendUi\\Plugin\\ExcludeFromMinification',
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
    'Magento\\Ui\\Component\\Wysiwyg\\ConfigInterface' => 
    array (
      'solwin_cpanel_config' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Solwin\\Cpanel\\Plugin\\Config',
      ),
    ),
    'Magento\\Framework\\App\\Action\\AbstractAction' => 
    array (
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
    ),
    'Magento\\Framework\\Controller\\ResultInterface' => 
    array (
      'result-messages' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Controller\\Result\\MessagePlugin',
      ),
      'result-builtin-cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\Controller\\Result\\BuiltinPlugin',
      ),
      'result-varnish-cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\Controller\\Result\\VarnishPlugin',
      ),
    ),
    'Magento\\Framework\\View\\Result\\Layout' => 
    array (
      'asyncCssLoad' => 
      array (
        'sortOrder' => -20,
        'instance' => 'Magento\\Theme\\Controller\\Result\\AsyncCssPlugin',
      ),
      'deferJsToFooter' => 
      array (
        'sortOrder' => -10,
        'instance' => 'Magento\\Theme\\Controller\\Result\\JsFooterPlugin',
      ),
    ),
    'Magento\\Framework\\View\\Layout' => 
    array (
      'customer-session-depersonalize' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\Layout\\DepersonalizePlugin',
      ),
      'catalog-session-depersonalize' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Catalog\\Model\\Layout\\DepersonalizePlugin',
      ),
      'checkout-session-depersonalize' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\Checkout\\Model\\Layout\\DepersonalizePlugin',
      ),
      'tax-session-depersonalize' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\Tax\\Model\\Layout\\DepersonalizePlugin',
      ),
      'layout-model-caching-unique-name' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\Layout\\LayoutPlugin',
      ),
      'core-session-depersonalize' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\PageCache\\Model\\Layout\\DepersonalizePlugin',
      ),
      'customer-segment-session-depersonalize' => 
      array (
        'sortOrder' => 15,
        'instance' => 'Magento\\CustomerSegment\\Model\\Layout\\DepersonalizePlugin',
      ),
      'gtmLayout' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GoogleTagManager\\Model\\Plugin\\Layout',
      ),
      'persistent-session-depersonalize' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Persistent\\Model\\Layout\\DepersonalizePlugin',
      ),
    ),
    'Magento\\Customer\\Controller\\AccountInterface' => 
    array (
      'customer_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Controller\\Plugin\\Account',
      ),
    ),
    'Magento\\Framework\\Session\\SessionManagerInterface' => 
    array (
      'session_checker' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\CustomerData\\Plugin\\SessionChecker',
      ),
      'keep_login_as_customer_session_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\KeepLoginAsCustomerSessionDataPlugin',
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
    'Magento\\Store\\Api\\StoreCookieManagerInterface' => 
    array (
      'update_quote_store_after_switch_store_view' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Plugin\\UpdateQuoteStore',
      ),
    ),
    'Magento\\Checkout\\Block\\Checkout\\LayoutProcessor' => 
    array (
      'ProcessPaymentConfiguration' => 
      array (
        'sortOrder' => 0,
        'disabled' => true,
        'instance' => 'Magento\\Payment\\Plugin\\PaymentConfigurationProcess',
      ),
      'ProcessPaymentVaultConfiguration' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Vault\\Plugin\\PaymentVaultConfigurationProcess',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Type\\AbstractType' => 
    array (
      'add_to_cart_single_option' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Bundle\\Plugin\\Catalog\\Model\\Product\\Type\\AbstractType',
      ),
    ),
    'Magento\\Catalog\\ViewModel\\Product\\OptionsData' => 
    array (
      'add_bundle_options_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Bundle\\Plugin\\Catalog\\ViewModel\\Product\\AddBundleOptionsData',
      ),
    ),
    'Magento\\Catalog\\Helper\\Product' => 
    array (
      'dont_show_if_child_products_disabled' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Bundle\\Plugin\\Catalog\\Helper\\Product',
      ),
    ),
    'Magento\\Ui\\Component\\Form\\AttributeMapper' => 
    array (
      'processCustomerCustomBooleanAttributeOptions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Plugin\\ProcessCustomerCustomBooleanAttributeOptions',
      ),
    ),
    'Magento\\Catalog\\Helper\\Product\\View' => 
    array (
      'pre_render_product_options_from_wishlist' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Wishlist\\Plugin\\Helper\\Product\\View',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\ResourceModel\\Attribute\\OptionSelectBuilderInterface' => 
    array (
      'Magento_ConfigurableProduct_Plugin_Model_ResourceModel_Attribute_InStockOptionSelectBuilder' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProduct\\Plugin\\Model\\ResourceModel\\Attribute\\IsSalableOptionSelectBuilder',
      ),
      'option_select_website_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Model\\ResourceModel\\Attribute\\ScopedOptionSelectBuilder',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Address' => 
    array (
      'gift_registry_order_address_name' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftRegistry\\Model\\Plugin\\OrderAddressName',
      ),
    ),
    'Magento\\Checkout\\CustomerData\\Cart' => 
    array (
      'cart_private_data_tax' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Plugin\\Checkout\\CustomerData\\Cart',
      ),
      'cart_empty_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdvancedCheckout\\Plugin\\Checkout\\CustomerData\\Cart',
      ),
    ),
    'Magento\\Contact\\Block\\ContactForm' => 
    array (
      'set_view_model' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Contact\\Plugin\\UserDataProvider\\ViewModel',
      ),
    ),
    'Magento\\Checkout\\Model\\Cart\\CollectQuote' => 
    array (
      'checkout_cart_collect_totals' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerSegment\\Model\\Checkout\\Block\\Cart\\Shipping\\Plugin',
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
    'Magento\\Customer\\Model\\Registration' => 
    array (
      'websiterestriction_customer_registration_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebsiteRestriction\\Model\\Plugin\\CustomerRegistration',
      ),
      'invitation_customer_registration_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Invitation\\Model\\Plugin\\CustomerRegistration',
      ),
    ),
    'Magento\\Multishipping\\Block\\Checkout\\Shipping' => 
    array (
      'getItemsBoxTextAfter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Block\\Message\\Multishipping\\Plugin\\ItemsBox',
      ),
    ),
    'Magento\\Checkout\\Model\\Type\\Onepage' => 
    array (
      'save_gift_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Type\\Plugin\\Onepage',
      ),
    ),
    'Magento\\Multishipping\\Model\\Checkout\\Type\\Multishipping' => 
    array (
      'save_gift_messages' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Type\\Plugin\\Multishipping',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Item\\Processor' => 
    array (
      'mergeQuoteItems' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\MergeQuoteItems',
      ),
    ),
    'Magento\\Framework\\App\\Http\\Context' => 
    array (
      'update_cache_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Plugin\\UpdateCachePlugin',
      ),
      'persistent_page_cache_variation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Persistent\\Model\\Plugin\\PersistentCustomerContext',
      ),
    ),
    'Magento\\Wishlist\\Model\\Item' => 
    array (
      'groupedProductWishlistProcessor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\Wishlist\\Product\\Item',
      ),
    ),
    'Magento\\InventoryIndexer\\Model\\ResourceModel\\GetStockItemData' => 
    array (
      'inventory_catalog_get_legacy_stock_item_data_from_stock_registry' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryIndexer\\Model\\ResourceModel\\GetLegacyStockStatusDataFromStockRegistry',
      ),
    ),
    'Magento\\ConfigurableProduct\\Block\\Product\\View\\Type\\Configurable' => 
    array (
      'add_sales_channel_info' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProductFrontendUi\\Plugin\\ConfigurableProduct\\Block\\Product\\View\\Type\\AddAdditionalInfo',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart\\Add' => 
    array (
      'multishipping_disabler' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Multishipping\\Plugin\\DisableMultishippingMode',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart\\UpdatePost' => 
    array (
      'multishipping_disabler' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Multishipping\\Plugin\\DisableMultishippingMode',
      ),
    ),
    'Magento\\Checkout\\Controller\\Index\\Index' => 
    array (
      'multishipping_disabler' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Multishipping\\Plugin\\DisableMultishippingMode',
      ),
      'sdk_url_configuration' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\CheckoutIndex',
      ),
    ),
    'Magento\\Checkout\\Model\\Cart' => 
    array (
      'multishipping_session_mapper' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Multishipping\\Model\\Checkout\\Type\\Multishipping\\Plugin',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart' => 
    array (
      'multishipping_clear_addresses' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Multishipping\\Model\\Cart\\Controller\\CartPlugin',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart\\UpdateItemQty' => 
    array (
      'multishipping_disabler' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Multishipping\\Plugin\\DisableMultishippingMode',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\Confirm' => 
    array (
      'invitation_enabled_check' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Invitation\\Controller\\Customer\\Account\\Plugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\Confirmation' => 
    array (
      'invitation_enabled_check' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Invitation\\Controller\\Customer\\Account\\Plugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\Create' => 
    array (
      'invitation_enabled_check' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Invitation\\Controller\\Customer\\Account\\Plugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\CreatePassword' => 
    array (
      'invitation_enabled_check' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Invitation\\Controller\\Customer\\Account\\Plugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\CreatePost' => 
    array (
      'invitation_enabled_check' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Invitation\\Controller\\Customer\\Account\\Plugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\Edit' => 
    array (
      'invitation_enabled_check' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Invitation\\Controller\\Customer\\Account\\Plugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\EditPost' => 
    array (
      'invitation_enabled_check' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Invitation\\Controller\\Customer\\Account\\Plugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\ForgotPassword' => 
    array (
      'invitation_enabled_check' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Invitation\\Controller\\Customer\\Account\\Plugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\ForgotPasswordPost' => 
    array (
      'invitation_enabled_check' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Invitation\\Controller\\Customer\\Account\\Plugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\Index' => 
    array (
      'invitation_enabled_check' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Invitation\\Controller\\Customer\\Account\\Plugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\Login' => 
    array (
      'invitation_enabled_check' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Invitation\\Controller\\Customer\\Account\\Plugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\LoginPost' => 
    array (
      'invitation_enabled_check' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Invitation\\Controller\\Customer\\Account\\Plugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\Logout' => 
    array (
      'invitation_enabled_check' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Invitation\\Controller\\Customer\\Account\\Plugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\LogoutSuccess' => 
    array (
      'invitation_enabled_check' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Invitation\\Controller\\Customer\\Account\\Plugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\ResetPasswordPost' => 
    array (
      'invitation_enabled_check' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Invitation\\Controller\\Customer\\Account\\Plugin',
      ),
    ),
    'Magento\\Customer\\Model\\CustomerExtractor' => 
    array (
      'add_assistance_allowed_to_customer_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerAssistance\\Plugin\\CustomerExtractorPlugin',
      ),
    ),
    'Magento\\Framework\\View\\Result\\Page' => 
    array (
      'pageLayoutDefaultClass' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Result\\Page',
      ),
    ),
    'Magento\\Email\\Model\\Template\\Filter' => 
    array (
      'escapeCustomVarDirectives' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Filter\\CustomVarTemplate',
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
    'Magento\\Quote\\Model\\QuoteRepository\\SaveHandler' => 
    array (
      'paypal-cartitem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Model\\Express\\QuotePlugin',
      ),
    ),
    'Magento\\Checkout\\Model\\DefaultConfigProvider' => 
    array (
      'mask_quote_id_substitutor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Persistent\\Model\\Checkout\\ConfigProviderPlugin',
      ),
    ),
    'Magento\\Checkout\\Model\\GuestPaymentInformationManagement' => 
    array (
      'inject_guest_address_for_nologin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Persistent\\Model\\Checkout\\GuestPaymentInformationManagementPlugin',
      ),
    ),
    'Magento\\Checkout\\Block\\Cart\\Coupon' => 
    array (
      'reset_layout_after_for_recaptcha_coupon_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ReCaptchaCheckoutSalesRule\\Plugin\\CouponSetLayoutPlugin',
      ),
    ),
    'Magento\\Customer\\Block\\Account\\AuthenticationPopup' => 
    array (
      'inject_recaptcha_in_authentication_popup' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\ReCaptchaCustomer\\Plugin\\Block\\Account\\InjectRecaptchaInAuthenticationPopup',
      ),
    ),
    'Magento\\Customer\\ViewModel\\LoginButton' => 
    array (
      'recaptcha_disable_login_button' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\ReCaptchaCustomer\\Plugin\\Customer\\DisableLoginButton',
      ),
    ),
    'Magento\\Customer\\ViewModel\\CreateAccountButton' => 
    array (
      'recaptcha_disable_create_account_button' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\ReCaptchaCustomer\\Plugin\\Customer\\DisableCreateAccountButton',
      ),
    ),
    'Magento\\Customer\\ViewModel\\ForgotPasswordButton' => 
    array (
      'recaptcha_disable_forgot_password_button' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\ReCaptchaCustomer\\Plugin\\Customer\\DisableForgotPasswordButton',
      ),
    ),
    'Mageplaza\\SocialLogin\\Controller\\Social\\Login' => 
    array (
      'mpcustomerapproval_socialogin_approval' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Mageplaza\\CustomerApproval\\Plugin\\SocialLogin\\Login',
      ),
    ),
    'Magento\\Tax\\Observer\\CustomerLoggedInObserver' => 
    array (
      'prevent_handle_customer_login' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Mageplaza\\CustomerApproval\\Plugin\\Magento\\Tax\\CustomerLoggedInObserver',
      ),
    ),
    'Mageplaza\\SocialLogin\\Controller\\Social\\AbstractSocial' => 
    array (
      'mp_socical_login_after_login' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Mageplaza\\CustomerApproval\\Plugin\\SocialLogin\\AbstractSocial',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\ListProduct' => 
    array (
      'braintreeProductDetailsBlockPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => '\\PayPal\\Braintree\\Plugin\\ProductDetailsBlockPlugin',
      ),
    ),
    'Magento\\Vault\\Api\\PaymentTokenRepositoryInterface' => 
    array (
      'braintreeDeleteStoredPaymentPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => '\\PayPal\\Braintree\\Plugin\\DeleteStoredPaymentPlugin',
      ),
    ),
  ),
  1 => 
  array (
    'Magento\\Catalog\\Model\\ResourceModel\\Category\\Collection\\FetchStrategy' => NULL,
    'Magento\\Catalog\\Block\\ShortcutButtons\\InCatalog' => NULL,
    'Magento\\Catalog\\Block\\ShortcutButtons\\InCatalog\\PositionAfter' => NULL,
    'Magento\\Catalog\\CustomerData\\RecentlyViewedProductsSection' => NULL,
    'Magento\\Catalog\\CustomerData\\RecentlyComparedProductsSection' => NULL,
    'Magento\\CatalogSearch\\Model\\Session\\Storage' => NULL,
    'Magento\\CatalogSearch\\Model\\Session' => NULL,
    'Magento\\CatalogSearch\\Block\\SearchResult\\ListProduct' => NULL,
    'Magento\\Wishlist\\Model\\Session\\Storage' => NULL,
    'Magento\\Wishlist\\Model\\Session' => NULL,
    'multishippingPaymentSpecification' => NULL,
    'Magento\\LayeredNavigation\\Block\\Navigation\\Category' => NULL,
    'Magento\\LayeredNavigation\\Block\\Navigation\\Search' => NULL,
    'Magento\\LayeredNavigationStaging\\Block\\Navigation\\Category' => NULL,
    'Magento\\LayeredNavigationStaging\\Block\\Navigation\\Search' => NULL,
    'Magento\\Paypal\\Model\\Session\\Storage' => NULL,
    'Magento\\Paypal\\Model\\Session' => NULL,
    'Magento\\Paypal\\Model\\PayflowSession\\Storage' => NULL,
    'Magento\\Paypal\\Model\\PayflowSession' => NULL,
    'PaypalIframeCcConfigProvider' => NULL,
    'Magento\\Review\\Model\\Session\\Storage' => NULL,
    'Magento\\Review\\Model\\Session' => NULL,
    'Magento\\Framework\\DB\\Adapter\\AdapterInterface' => 
    array (
      'execute_commit_callbacks' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\Model\\ExecuteCommitCallbacks',
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
      'response-http-page-cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\App\\Response\\HttpPlugin',
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
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
    'Magento\\Store\\Api\\StoreResolverInterface' => NULL,
    'Magento\\Store\\Model\\StoreResolver' => 
    array (
      'staging_preview_allowed_stores_check_bypass' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\Store\\Model\\StoreResolver',
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
      'staging_preview_permissions_check' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\Framework\\App\\FrontController',
      ),
      'front-controller-builtin-cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\App\\FrontController\\BuiltinPlugin',
      ),
      'front-controller-varnish-cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\App\\FrontController\\VarnishPlugin',
      ),
      'page_cache_form_key_from_cookie' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Plugin\\RegisterFormKeyFromCookie',
      ),
      'configHash' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Deploy\\Model\\Plugin\\ConfigChangeDetector',
      ),
    ),
    'Magento\\Framework\\App\\FrontController' => 
    array (
      'staging_preview_permissions_check' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\Framework\\App\\FrontController',
      ),
      'front-controller-builtin-cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\App\\FrontController\\BuiltinPlugin',
      ),
      'front-controller-varnish-cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\App\\FrontController\\VarnishPlugin',
      ),
      'page_cache_form_key_from_cookie' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Plugin\\RegisterFormKeyFromCookie',
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
      'requestPreprocessor' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Store\\App\\FrontController\\Plugin\\RequestPreprocessor',
      ),
    ),
    'Magento\\Framework\\Stdlib\\DateTime\\TimezoneInterface' => NULL,
    'Magento\\Framework\\Stdlib\\DateTime\\Timezone' => 
    array (
      'staging_datetime_timezone_bypass' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\DateTime\\Timezone',
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
    'Magento\\Framework\\Session\\SessionManagerInterface' => 
    array (
      'session_checker' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\CustomerData\\Plugin\\SessionChecker',
      ),
      'keep_login_as_customer_session_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\KeepLoginAsCustomerSessionDataPlugin',
      ),
    ),
    'Magento\\Framework\\Session\\SessionManager' => 
    array (
      'session_checker' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\CustomerData\\Plugin\\SessionChecker',
      ),
      'keep_login_as_customer_session_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\KeepLoginAsCustomerSessionDataPlugin',
      ),
    ),
    'Magento\\Customer\\Model\\Session' => 
    array (
      'session_checker' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\CustomerData\\Plugin\\SessionChecker',
      ),
      'keep_login_as_customer_session_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\KeepLoginAsCustomerSessionDataPlugin',
      ),
      'staging_preview_customer_session_id_change_bypass' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\Customer\\Model\\Session',
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
      'cart_recollect_on_group_change' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Plugin\\RecollectOnGroupChange',
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
      'customerRegister' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\CustomerRegister',
      ),
      'mpcustomerapproval_customer_authenticated' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Mageplaza\\CustomerApproval\\Plugin\\CustomerAuthenticated',
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
      'customerGroupEdit' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\GroupRepository',
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
    'Magento\\Framework\\Indexer\\IndexerInterface' => NULL,
    'Magento\\Indexer\\Model\\Indexer' => 
    array (
      'reindexRow' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Helper\\Indexer',
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
      'catalogPermissionsIndexerConfigGet' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\IndexerConfigData',
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
    'Magento\\Backend\\Model\\Auth\\StorageInterface' => NULL,
    'Magento\\Backend\\Model\\Auth\\Session' => 
    array (
      'session_checker' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\CustomerData\\Plugin\\SessionChecker',
      ),
      'keep_login_as_customer_session_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\KeepLoginAsCustomerSessionDataPlugin',
      ),
      'admin_adobe_ims_backend_auth_session' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\BackendAuthSessionPlugin',
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
    'Magento\\Framework\\MessageQueue\\Bulk\\ExchangeInterface' => NULL,
    'Magento\\Framework\\Amqp\\Bulk\\Exchange' => 
    array (
      'amqpStoreIdFieldForAmqpBulkExchange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AmqpStore\\Plugin\\Framework\\Amqp\\Bulk\\Exchange',
      ),
    ),
    'Magento\\AsynchronousOperations\\Model\\MassConsumerEnvelopeCallback' => 
    array (
      'amqpStoreIdFieldForAsynchronousOperationsMassConsumerEnvelopeCallback' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AmqpStore\\Plugin\\AsynchronousOperations\\MassConsumerEnvelopeCallback',
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
    'Magento\\Config\\Model\\Config' => 
    array (
      'configPermissionChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\ConfigData',
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
    'Magento\\Framework\\Data\\Collection\\AbstractDb' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Framework\\App\\ResourceConnection\\SourceProviderInterface' => NULL,
    'Magento\\Framework\\Model\\ResourceModel\\Db\\Collection\\AbstractCollection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\AbstractCollection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Framework\\Api\\Search\\SearchResultInterface' => NULL,
    'Magento\\Framework\\Api\\SearchResultsInterface' => NULL,
    'Magento\\Cms\\Model\\ResourceModel\\Page\\Grid\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'setStagingFlagCmsPageUpdate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsStaging\\Model\\ResourceModel\\Grid\\Collection\\UpdatePlugin',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Block\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Block\\Grid\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'setStagingFlagCmsBlockUpdate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsStaging\\Model\\ResourceModel\\Grid\\Collection\\UpdatePlugin',
      ),
    ),
    'Magento\\Framework\\View\\Element\\UiComponent\\DataProvider\\DataProviderInterface' => NULL,
    'Magento\\Framework\\View\\Element\\UiComponent\\DataProvider\\DataProvider' => NULL,
    'Magento\\Cms\\Ui\\Component\\DataProvider' => 
    array (
      'filterCmsPageAndBlockUpdate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsStaging\\Ui\\Component\\DataProvider\\UpdatePlugin',
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
      'catalogPermissionsProductChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\Product',
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
      'availabilityStaging' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Model\\Product',
      ),
      'add_bundle_child_identities' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Bundle\\Model\\Plugin\\Frontend\\ProductIdentitiesExtender',
      ),
    ),
    'Magento\\Cms\\Api\\PageRepositoryInterface' => NULL,
    'Magento\\Cms\\Model\\PageRepository\\ValidationComposite' => 
    array (
      'cms_validate_url_plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CmsUrlRewrite\\Plugin\\Cms\\Model\\PageRepository\\ValidationCompositePlugin',
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
    'Magento\\Ui\\DataProvider\\AbstractDataProvider' => NULL,
    'Magento\\Ui\\DataProvider\\ModifierPoolDataProvider' => NULL,
    'Magento\\Catalog\\Model\\Category\\DataProvider' => 
    array (
      'set_page_layout_default_value' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\SetPageLayoutDefaultValue',
      ),
      'catalogCategoryDataProviderTrimData' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Catalog\\Model\\Category\\DataProvider\\TrimData',
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
      'catalogPermissionsCachingTopmenu' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Plugin\\Theme\\Block\\Html\\Topmenu',
      ),
      'catalog_permissions_topmenu' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Plugin\\Theme\\Block\\Html\\Topmenu',
      ),
    ),
    'Magento\\Framework\\Mview\\View\\StateInterface' => 
    array (
      'setStatusForMview' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\MviewState',
      ),
      'catalogPermissionsIndexerSetStatusForMview' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\MviewState',
      ),
    ),
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
      'joinProductsWhenFlatEnabled' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\JoinProductsWhenFlatEnabled',
      ),
      'joinAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\Collection',
      ),
      'add_stock_information' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\AddStockStatusToCollection',
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
      'assign_website_to_default_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Store\\Model\\ResourceModel\\Website\\AssignWebsiteToDefaultStockPlugin',
      ),
      'delete_website_to_stock_link' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Store\\Model\\ResourceModel\\Website\\DeleteWebsiteToStockLinkPlugin',
      ),
      'update_sales_channel_website_code' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Store\\Model\\ResourceModel\\Website\\UpdateSalesChannelWebsiteCodePlugin',
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
      'invalidateTargetRuleOnStoreViewChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\TargetRule\\Model\\Indexer\\TargetRule\\Plugin\\Store',
      ),
      'catalogPermissionsIndexerStoreView' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\Store\\View',
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
      'invalidateTargetRuleOnStoreGroupChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\TargetRule\\Model\\Indexer\\TargetRule\\Plugin\\StoreGroup',
      ),
      'catalogPermissionsIndexerStoreGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\Store\\Group',
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
      'invalidateTargetRuleOnDeleteAttributeSet' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\TargetRule\\Model\\Indexer\\TargetRule\\Plugin\\AttributeSet',
      ),
    ),
    'Magento\\Framework\\App\\Helper\\AbstractHelper' => NULL,
    'Magento\\Catalog\\Helper\\Product\\Flat\\Indexer' => 
    array (
      'addRowIdToFlatDefinition' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Helper\\Product\\Flat\\FlatColumnsDefinition',
      ),
      'addRowIdToIndex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Helper\\Product\\Flat\\FlatIndexes',
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
    'Magento\\Sales\\Api\\OrderItemRepositoryInterface' => 
    array (
      'get_gift_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\OrderItemGet',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Collection\\ProductLimitation' => 
    array (
      'isUsingPriceIndex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\Collection\\ProductLimitation',
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
      'append_gift_card_data_to_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCard\\Model\\Plugin\\QuoteItem',
      ),
      'gift_registry_item_from_quote_item' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftRegistry\\Model\\Plugin\\QuoteItem',
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
    ),
    'Magento\\Framework\\View\\Layout\\ProcessorInterface' => NULL,
    'Magento\\Framework\\View\\Model\\Layout\\Merge' => 
    array (
      'layout-merge-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\Layout\\MergePlugin',
      ),
      'widget-layout-update-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Widget\\Model\\ResourceModel\\Layout\\Plugin',
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
    ),
    'Magento\\Framework\\App\\Action\\HttpGetActionInterface' => NULL,
    'Magento\\Framework\\App\\Action\\HttpPostActionInterface' => NULL,
    'Magento\\Framework\\App\\Action\\HttpHeadActionInterface' => NULL,
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'admin_forgot_password_plugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\AdminForgotPasswordPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
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
    'Magento\\Backend\\Model\\Auth' => 
    array (
      'disable_admin_login_auth' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminAdobeIms\\Plugin\\DisableAdminLoginAuthPlugin',
      ),
      'login_as_customer_admin_logout' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomer\\Plugin\\AdminLogoutPlugin',
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
    'Magento\\Quote\\Api\\CartRepositoryInterface' => 
    array (
      'save_fake_quota_in_preview' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutStaging\\Plugin\\SavePreviewQuotaPlugin',
      ),
      'remove_in_store_pickup_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupMultishipping\\Plugin\\Quote\\RemoveInStorePickupDataInMultishippingModePlugin',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository' => 
    array (
      'save_fake_quota_in_preview' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutStaging\\Plugin\\SavePreviewQuotaPlugin',
      ),
      'remove_in_store_pickup_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupMultishipping\\Plugin\\Quote\\RemoveInStorePickupDataInMultishippingModePlugin',
      ),
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
      'convertQuoteAddressToCustomerAddress' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\ConvertQuoteAddressToCustomerAddress',
      ),
      'manage_assignment_of_pickup_location_to_quote_address' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\Address\\ManageAssignmentOfPickupLocationToQuoteAddress',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\VersionControl\\AbstractDb' => NULL,
    'Magento\\Quote\\Model\\ResourceModel\\Quote\\Address' => 
    array (
      'load_pickup_location_for_quote_address' => 
      array (
        'sortOrder' => 30,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\Address\\LoadPickupLocationForQuoteAddress',
      ),
    ),
    'Magento\\Quote\\Model\\ResourceModel\\Quote' => 
    array (
      'substract_product_from_quotes' => 
      array (
        'sortOrder' => 800,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Quote\\SubstractProductFromQuotes',
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
      'catalogsearchFulltextProduct' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Product',
      ),
      'update_quote_items_after_giftcard_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCard\\Plugin\\Catalog\\Model\\ResourceModel\\Product',
      ),
      'delete_source_items' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\DeleteSourceItemsPlugin',
      ),
      'process_source_items_after_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\ProcessSourceItemsPlugin',
      ),
      'process_reservations_after_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\UpdateReservationsPlugin',
      ),
      'delete_reservations' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\DeleteReservationsPlugin',
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
    'Magento\\Catalog\\Model\\Product\\Action' => 
    array (
      'quoteProductMassChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Product\\Plugin\\MarkQuotesRecollectMassDisabled',
      ),
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
      'catalogPermissionsProductMassChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\Product\\Action',
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
    ),
    'Magento\\Sales\\Controller\\OrderInterface' => NULL,
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'redirect_creditmemo' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Controller\\Order\\CustomerRedirectPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'redirect_invoice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Controller\\Order\\CustomerRedirectPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'redirect_print' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Controller\\Order\\CustomerRedirectPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'redirect_print_creditmemo' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Controller\\Order\\CustomerRedirectPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'redirect_print_invoice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Controller\\Order\\CustomerRedirectPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'redirect_print_shipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Controller\\Order\\CustomerRedirectPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'redirect_reorder' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Controller\\Order\\CustomerRedirectPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'redirect_shipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Controller\\Order\\CustomerRedirectPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'redirect_view_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Controller\\Order\\CustomerRedirectPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\EntityAbstract' => NULL,
    'Magento\\Sales\\Model\\Spi\\ShipmentResourceInterface' => NULL,
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Shipment' => 
    array (
      'SaveSourceForShipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShipping\\Plugin\\Sales\\ResourceModel\\Order\\Shipment\\SaveSourceForShipmentPlugin',
      ),
      'LoadSourceForShipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShipping\\Plugin\\Sales\\ResourceModel\\Order\\Shipment\\LoadSourceForShipmentPlugin',
      ),
      'DeleteSourceForShipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShipping\\Plugin\\Sales\\ResourceModel\\Order\\Shipment\\DeleteSourceForShipmentPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\Spi\\CreditmemoResourceInterface' => NULL,
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Creditmemo' => 
    array (
      'refundRewardPoints' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\RewardPointsRefund',
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
      'giftCardOpenAmount' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCard\\Plugin\\Catalog\\Model\\Product\\Attribute\\Backend\\Price',
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
    'Magento\\Catalog\\Model\\Product\\Type\\AbstractType' => 
    array (
      'add_to_cart_single_option' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Bundle\\Plugin\\Catalog\\Model\\Product\\Type\\AbstractType',
      ),
    ),
    'Magento\\Bundle\\Model\\Product\\Type' => 
    array (
      'add_to_cart_single_option' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Bundle\\Plugin\\Catalog\\Model\\Product\\Type\\AbstractType',
      ),
      'adapt_is_product_salable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\Bundle\\Model\\Product\\Type\\AdaptIsSalablePlugin',
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
    'Magento\\CatalogImportExport\\Model\\StockItemImporterInterface' => 
    array (
      'update_grouped_product_stock_status_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedImportExport\\Plugin\\CatalogImportExport\\Model\\StockItemImporter\\UpdateGroupedProductStockStatusPlugin',
      ),
      'importStockItemDataForSourceItem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryImportExport\\Plugin\\Import\\SourceItemImporter',
      ),
      'update_configurable_products_stock_item_status' => 
      array (
        'sortOrder' => 100,
        'disabled' => true,
        'instance' => 'Magento\\ConfigurableImportExport\\Plugin\\Import\\Product\\UpdateConfigurableProductsStockItemStatusPlugin',
      ),
      'updateConfigurableProductsStockItemStatusInventory' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\InventoryImportExport\\Plugin\\Import\\UpdateConfigurableProductsPlugin',
      ),
      'update_bundle_products_stock_item_status' => 
      array (
        'sortOrder' => 200,
        'disabled' => true,
        'instance' => 'Magento\\BundleImportExport\\Plugin\\Import\\Product\\UpdateBundleProductsStockItemStatusPlugin',
      ),
      'update_bundle_products_stock_item_status_single_source_only' => 
      array (
        'sortOrder' => 200,
        'instance' => 'Magento\\InventoryBundleImportExport\\Plugin\\Import\\Product\\UpdateBundleProductsStockItemStatusPlugin',
      ),
    ),
    'Magento\\BundleImportExport\\Model\\Import\\Product\\Type\\Bundle\\RelationsDataSaver' => 
    array (
      'sequence_application' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\BundleImportExportStaging\\Plugin\\BundleImportExport\\Model\\Import\\Product\\Type\\Bundle\\RelationsDataSaver',
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
      'update_identities_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Plugin\\UpdateIdentitiesPlugin',
      ),
      'catalogProductViewCanEmailToFriend' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SendFriend\\Block\\Plugin\\Catalog\\Product\\View',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockConfigurationInterface' => NULL,
    'Magento\\CatalogInventory\\Model\\Configuration' => 
    array (
      'out_of_stock_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventoryStaging\\Model\\Plugin\\Configuration',
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
    ),
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'massAction' => 
      array (
        'sortOrder' => 0,
        'disabled' => true,
        'instance' => 'Magento\\CatalogInventory\\Plugin\\MassUpdateProductAttribute',
      ),
      'inventoryUpdate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save\\ProcessInventoryPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Provider\\Query\\IdListBuilder' => 
    array (
      'process_archive_entities' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesArchive\\Plugin\\ArchivedEntitiesProcessorPlugin',
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
      'targetRuleImportInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\TargetRule\\Model\\Indexer\\TargetRule\\Plugin\\Import',
      ),
      'catalogPermissionImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\Import',
      ),
    ),
    'Magento\\CatalogImportExport\\Model\\Import\\Product' => 
    array (
      'staging-import-products' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExportStaging\\Model\\Import\\ProductPlugin',
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
    'Magento\\Framework\\Config\\Reader\\Filesystem' => NULL,
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
        'disabled' => true,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Plugin\\StockedProductsFilterPlugin',
      ),
      'stockedProductFilterByInventoryStockPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryElasticsearch\\Plugin\\CatalogSearch\\Model\\Indexer\\Fulltext\\Action\\DataProvider\\StockedProductFilterByInventoryStock',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Advanced\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'joinProductsWhenFlatEnabled' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\JoinProductsWhenFlatEnabled',
      ),
      'joinAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\Collection',
      ),
      'add_stock_information' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\AddStockStatusToCollection',
      ),
      'add_catalog_permissions_information' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ElasticsearchCatalogPermissions\\Plugin\\AddCategoryPermissionsToCollection',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'joinProductsWhenFlatEnabled' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\JoinProductsWhenFlatEnabled',
      ),
      'joinAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\Collection',
      ),
      'add_stock_information' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\AddStockStatusToCollection',
      ),
      'can_show_price_in_layered_navigation_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Plugin\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\Collection',
      ),
      'loadPreview' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\Fulltext\\Collection',
      ),
      'add_catalog_permissions_information' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ElasticsearchCatalogPermissions\\Plugin\\AddCategoryPermissionsToFulltextCollection',
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
    'Magento\\Quote\\Model\\Quote\\Address\\ToOrderAddress' => 
    array (
      'convertQuoteAddressToOrderAddress' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\ConvertQuoteAddressToOrderAddress',
      ),
      'gift_registry_quote_address_to_order_address' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftRegistry\\Model\\Plugin\\ConvertQuoteAddressToOrderAddress',
      ),
    ),
    'Magento\\Customer\\Block\\Widget\\AbstractWidget' => NULL,
    'Magento\\Customer\\Block\\Widget\\Name' => 
    array (
      'formatPrefixSuffixOptions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Plugin\\FormatPrefixSuffixOptions',
      ),
    ),
    'Magento\\Customer\\Model\\Address' => 
    array (
      'updateDataCustomerAddress' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\AddCustomAttributesToCustomerAddress',
      ),
    ),
    'Magento\\CustomAttributeManagement\\Block\\Form' => 
    array (
      'set_customer_custom_attribute_for_company' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Plugin\\Customer\\Block\\Form\\CustomerCustomAttributePlugin',
      ),
    ),
    'Magento\\Checkout\\Api\\PaymentInformationManagementInterface' => 
    array (
      'process_billing_custom_customer_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\ProcessCustomerBillingAddressCustomAttributes',
      ),
      'validate-agreements' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutAgreements\\Model\\Checkout\\Plugin\\Validation',
      ),
      'disable-place-order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutStaging\\Plugin\\PaymentInformationManagementPlugin',
      ),
      'ProcessPaymentVaultInformationManagement' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Vault\\Plugin\\PaymentVaultInformationManagement',
      ),
    ),
    'Magento\\Checkout\\Api\\ShippingInformationManagementInterface' => 
    array (
      'process_shipping_custom_customer_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\ProcessCustomerShippingAddressCustomAttributes',
      ),
      'gift_registry_save_address' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftRegistry\\Model\\Plugin\\SaveAddress',
      ),
    ),
    'Magento\\Checkout\\Api\\GuestPaymentInformationManagementInterface' => 
    array (
      'process_billing_custom_guest_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\ProcessGuestBillingAddressCustomAttributes',
      ),
      'validate-guest-agreements' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutAgreements\\Model\\Checkout\\Plugin\\GuestValidation',
      ),
      'disable-guest-place-order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutStaging\\Plugin\\GuestPaymentInformationManagementPlugin',
      ),
    ),
    'Magento\\Checkout\\Api\\GuestShippingInformationManagementInterface' => 
    array (
      'process_shipping_custom_guest_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\ProcessGuestShippingAddressCustomAttributes',
      ),
    ),
    'Magento\\Rule\\Model\\ResourceModel\\Rule\\Collection\\AbstractCollection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\SalesRule\\Model\\ResourceModel\\Rule\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'beforeSetValidationFilter' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\SalesRuleStaging\\Model\\ResourceModel\\Plugin\\Rule\\Collection',
      ),
      'aroundSetValidationFilter' => 
      array (
        'sortOrder' => 500,
        'instance' => 'Magento\\AdvancedSalesRule\\Model\\ResourceModel\\Plugin\\Rule\\Collection',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Config' => 
    array (
      'append_sales_rule_keys_to_quote' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRule\\Model\\Plugin\\QuoteConfigProductAttributes',
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
    ),
    'Magento\\Quote\\Api\\CartTotalRepositoryInterface' => NULL,
    'Magento\\Quote\\Model\\Cart\\CartTotalRepository' => 
    array (
      'coupon_label_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRule\\Plugin\\CartTotalRepository',
      ),
      'multishipping_shipping_addresses' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Multishipping\\Model\\Cart\\CartTotalRepositoryPlugin',
      ),
      'rewardTotal' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\CartTotalRepository',
      ),
    ),
    'Magento\\Sales\\Api\\OrderManagementInterface' => 
    array (
      'inventory_reservations_placement' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Sales\\OrderManagement\\AppendReservationsAfterOrderPlacementPlugin',
      ),
      'reset_payment_attempts_after_order_is_placed_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Captcha\\Plugin\\ResetPaymentAttemptsAfterOrderIsPlacedPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\Service\\OrderService' => 
    array (
      'inventory_reservations_placement' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Sales\\OrderManagement\\AppendReservationsAfterOrderPlacementPlugin',
      ),
      'reset_payment_attempts_after_order_is_placed_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Captcha\\Plugin\\ResetPaymentAttemptsAfterOrderIsPlacedPlugin',
      ),
      'coupon_uses_decrement_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRule\\Plugin\\CouponUsagesDecrement',
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
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
      'customer_cart' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Cart\\ConfigPlugin',
      ),
      'login_captcha' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Captcha\\Model\\Cart\\ConfigPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\CartConfiguration' => 
    array (
      'Downloadable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Downloadable\\Model\\Product\\CartConfiguration\\Plugin\\Downloadable',
      ),
      'GiftCard' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCard\\Model\\Product\\CartConfiguration\\Plugin\\GiftCard',
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
    'Magento\\Webapi\\Controller\\Rest' => 
    array (
      'staging_preview_permissions_check' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\Framework\\App\\FrontController',
      ),
      'front-controller-builtin-cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\App\\FrontController\\BuiltinPlugin',
      ),
      'front-controller-varnish-cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\App\\FrontController\\VarnishPlugin',
      ),
      'page_cache_form_key_from_cookie' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Plugin\\RegisterFormKeyFromCookie',
      ),
      'beforeRestDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\RestPlugin',
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
    'Magento\\PageCache\\Model\\Config' => 
    array (
      'staging_pagecache_bypass' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\PageCache\\Model\\Config',
      ),
      'login-as-customer-disable-page-cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerPageCache\\Plugin\\PageCache\\Model\\Config\\DisablePageCacheIfNeededPlugin',
      ),
    ),
    'Magento\\Store\\Model\\BaseUrlChecker' => 
    array (
      'staging_store_baseurl_check_bypass' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\Store\\Model\\BaseUrlChecker',
      ),
    ),
    'Magento\\Store\\Controller\\Store\\SwitchAction' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'staging_preview_store_switch_fixing' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\Store\\Controller\\Store\\SwitchAction',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
    ),
    'Magento\\Wishlist\\Block\\Catalog\\Product\\View\\AddTo\\Wishlist' => 
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
      'update_identities_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Plugin\\UpdateIdentitiesPlugin',
      ),
      'catalogProductViewCanEmailToFriend' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SendFriend\\Block\\Plugin\\Catalog\\Product\\View',
      ),
      'getWishlistOptions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCard\\Block\\Product\\View\\Plugin',
      ),
    ),
    'Magento\\Wishlist\\Block\\Item\\Configure' => 
    array (
      'getWishlistOptions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCard\\Block\\Product\\View\\Plugin',
      ),
    ),
    'Magento\\GiftRegistry\\Helper\\Data' => 
    array (
      'getWishlistOptions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCard\\Helper\\GiftRegistry\\Plugin',
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
      'authentication' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Wishlist\\Controller\\Index\\Plugin',
      ),
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Listing\\DataProvider' => 
    array (
      'wishlistSettingsDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Wishlist\\Plugin\\Ui\\DataProvider\\WishlistSettings',
      ),
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
    ),
    'Magento\\CatalogGraphQl\\Model\\Resolver\\Products\\DataProvider\\Product\\CollectionProcessorInterface' => NULL,
    'Magento\\CatalogGraphQl\\Model\\Resolver\\Products\\DataProvider\\Product\\CompositeCollectionProcessor' => 
    array (
      'applyCategoryPermissionsOnProductProcessor' => 
      array (
        'sortOrder' => 0,
        'disabled' => false,
        'instance' => 'Magento\\CatalogPermissionsGraphQl\\Plugin\\CatalogGraphQl\\Model\\Resolver\\Products\\DataProvider\\Product\\CompositeCollectionProcessorPlugin',
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
    'Magento\\Catalog\\Model\\Entity\\Product\\Attribute\\Group\\AttributeMapperInterface' => 
    array (
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Entity\\Product\\Attribute\\Group\\AttributeMapper\\Plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Type' => 
    array (
      'configurable_output' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Product\\Type\\Plugin',
      ),
      'grouped_output' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\Product\\Type\\Plugin',
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
      'add_to_cart_single_option' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Bundle\\Plugin\\Catalog\\Model\\Product\\Type\\AbstractType',
      ),
      'add_swatch_attributes_to_configurable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\Configurable',
      ),
      'used_products_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\Frontend\\UsedProductsCache',
      ),
      'used_products_website_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\Frontend\\UsedProductsWebsiteFilter',
      ),
      'is_option_salable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProduct\\Plugin\\Model\\Product\\Type\\Configurable\\IsSalableOptionPlugin',
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
    'Magento\\Quote\\Api\\Data\\CartInterface' => NULL,
    'Magento\\Quote\\Model\\Quote' => 
    array (
      'gift_registry_update_quote_item' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftRegistry\\Model\\Plugin\\UpdateQuoteItem',
      ),
      'remove_store_credit_after_product_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerBalance\\Plugin\\Model\\Quote\\ResetCustomerBalanceUsage',
      ),
      'clear_addresses_after_product_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Checkout\\Plugin\\Model\\Quote\\ResetQuoteAddresses',
      ),
      'skip_collect_totals' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\DeferredTotalCalculating\\Plugin\\TotalsCollectorPlugin',
      ),
      'delete_gift_wrapping_for_empty_quote' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftWrapping\\Plugin\\Model\\Quote\\DeleteGiftWrappingForEmptyQuote',
      ),
      'gtmQuote' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GoogleTagManager\\Model\\Plugin\\Quote',
      ),
      'set_google_analytics_on_cart_add' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GoogleTagManager\\Model\\Plugin\\Quote\\SetGoogleAnalyticsOnCartAdd',
      ),
      'set_google_analytics_on_cart_remove' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GoogleTagManager\\Model\\Plugin\\Quote\\SetGoogleAnalyticsOnCartRemove',
      ),
      'multishipping_reset_shipping_assigment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Multishipping\\Plugin\\ResetShippingAssigment',
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
    'Magento\\Quote\\Model\\Quote\\Address\\ToOrder' => 
    array (
      'add_tax_to_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\Quote\\ToOrderConverter',
      ),
      'set_pickup_location_to_order_during_address_conversion' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\SetPickupLocationToOrder',
      ),
    ),
    'Magento\\Quote\\Model\\Cart\\TotalsConverter' => 
    array (
      'add_tax_details' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\Quote\\GrandTotalDetailsPlugin',
      ),
      'giftCardAmountTotal' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCardAccount\\Model\\Plugin\\TotalsConverter',
      ),
      'gift_wrapping_total' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftWrapping\\Model\\Plugin\\TotalsConverter',
      ),
    ),
    'Magento\\Sales\\Api\\OrderRepositoryInterface' => 
    array (
      'save_order_tax' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\Plugin\\OrderSave',
      ),
      'get_customer_balance' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerBalance\\Model\\Plugin\\OrderRepository',
      ),
      'gift_card_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCardAccount\\Model\\Plugin\\OrderRepository',
      ),
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
      'get_order_gift_wrapping' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftWrapping\\Model\\Plugin\\OrderGiftWrapping',
      ),
      'get_order_item_gift_wrapping' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftWrapping\\Model\\Plugin\\OrderItemGiftWrapping',
      ),
      'get_pickup_location_for_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSales\\Plugin\\Sales\\Order\\GetPickupLocationForOrderPlugin',
      ),
      'save_pickup_location_for_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSales\\Plugin\\Sales\\Order\\SavePickupLocationForOrderPlugin',
      ),
      'rewardCreditmemoUpdater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\OrderRepository',
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
    'Magento\\ConfigurableProduct\\Model\\ResourceModel\\Product\\Type\\Configurable\\Product\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'joinProductsWhenFlatEnabled' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\JoinProductsWhenFlatEnabled',
      ),
      'joinAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\Collection',
      ),
      'add_stock_information' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\AddStockStatusToCollection',
      ),
      'catalogRulePriceForConfigurableProduct' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleConfigurable\\Plugin\\ConfigurableProduct\\Model\\ResourceModel\\AddCatalogRulePrice',
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
    'Magento\\Config\\Model\\Config\\Structure\\Converter' => 
    array (
      'cron_backend_config_structure_converter_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Cron\\Model\\Backend\\Config\\Structure\\Converter',
      ),
    ),
    'Magento\\Framework\\App\\RouterInterface' => 
    array (
      'csp_aware_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Csp\\Plugin\\CspAwareControllerPlugin',
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
    'Magento\\Quote\\Model\\Quote\\TotalsCollector' => 
    array (
      'quoteCustomerSegmentUpdater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerBalance\\Model\\Plugin\\TotalsCollector',
      ),
      'quoteGiftCardAmountUpdater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCardAccount\\Model\\Plugin\\TotalsCollector',
      ),
      'in-store-pickup-set-shipping-description' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\Address\\SetShippingDescription',
      ),
      'quoteRewardAmountUpdater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\TotalsCollector',
      ),
    ),
    'Magento\\Sales\\Api\\InvoiceRepositoryInterface' => 
    array (
      'get_customer_balance' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerBalance\\Model\\Plugin\\InvoiceRepository',
      ),
      'gift_card_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCardAccount\\Model\\Plugin\\InvoiceRepository',
      ),
      'get_invoice_gift_wrapping' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftWrapping\\Model\\Plugin\\InvoiceGiftWrapping',
      ),
    ),
    'Magento\\Sales\\Api\\CreditmemoRepositoryInterface' => 
    array (
      'get_customer_balance' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerBalance\\Model\\Plugin\\CreditmemoRepository',
      ),
      'gift_card_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCardAccount\\Model\\Plugin\\CreditmemoRepository',
      ),
      'get_credit_memo_gift_wrapping' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftWrapping\\Model\\Plugin\\CreditMemoGiftWrapping',
      ),
      'deduct_source_item_quantity_on_refund' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Sales\\OrderManagement\\DeductSourceItemQuantityOnRefundPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\EntityInterface' => NULL,
    'Magento\\Sales\\Api\\Data\\OrderInterface' => NULL,
    'Magento\\Sales\\Model\\Order' => 
    array (
      'can_creditmemo_with_store_credit' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerBalance\\Plugin\\CreditMemoResolver',
      ),
      'express_order_invoice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\OrderCanInvoice',
      ),
      'front-order-placement-comment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerSales\\Plugin\\FrontAddCommentOnOrderPlacementPlugin',
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
    ),
    'Magento\\Catalog\\Api\\Data\\CategoryInterface' => NULL,
    'Magento\\Catalog\\Api\\Data\\CategoryTreeInterface' => NULL,
    'Magento\\Catalog\\Model\\Category' => 
    array (
      'targetRuleCategoryInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\TargetRule\\Model\\Indexer\\TargetRule\\Plugin\\Category',
      ),
      'categoryChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\Category',
      ),
      'catalogStagingCategoryPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Model\\Category',
      ),
    ),
    'Magento\\Rule\\Model\\AbstractModel' => NULL,
    'Magento\\CustomerSegment\\Model\\Segment' => 
    array (
      'targetRuleCustomerSegmentInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\TargetRule\\Model\\Indexer\\TargetRule\\Plugin\\CustomerSegment',
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
    'Magento\\CatalogGraphQl\\DataProvider\\Product\\SearchCriteriaBuilder' => 
    array (
      'product_search_criteria_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ElasticsearchCatalogPermissionsGraphQl\\Plugin\\CatalogGraphQl\\ProductSearchCriteriaFilter',
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
      'magePalGmailSmtpAppTransportInterface' => 
      array (
        'sortOrder' => 100,
        'instance' => 'MagePal\\GmailSmtpApp\\Plugin\\Mail\\TransportPlugin',
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
    'Magento\\Framework\\View\\Page\\FaviconInterface' => NULL,
    'Magento\\Theme\\Model\\Favicon\\Favicon' => 
    array (
      'enterprise_favicon' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Enterprise\\Model\\Plugin\\Favicon',
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
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Create' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Create\\Index' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Edit\\Index' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
      'order_edit' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\GiftCardAccount\\Controller\\Adminhtml\\Order\\Edit\\Plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Layer\\FilterList' => 
    array (
      'catalogPermissionsFilterListRemovePrice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Plugin\\Catalog\\Model\\Layer\\FilterList',
      ),
    ),
    'Magento\\Framework\\Pricing\\Render\\PriceBoxRenderInterface' => NULL,
    'Magento\\Framework\\Pricing\\Render\\PriceBox' => 
    array (
      'can_show_price_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Plugin\\Framework\\Pricing\\Render\\CanShowPricePlugin',
      ),
      'price_box_staging_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Catalog\\Pricing\\Render\\PriceBox',
      ),
      'catalog_price_box_key' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Block\\Category\\Plugin\\PriceBoxTags',
      ),
    ),
    'Magento\\Backend\\Block\\Template' => NULL,
    'Magento\\Backend\\Block\\Widget' => NULL,
    'Magento\\Backend\\Block\\Widget\\Grid' => NULL,
    'Magento\\Backend\\Block\\Widget\\Grid\\ExportInterface' => NULL,
    'Magento\\Backend\\Block\\Widget\\Grid\\Extended' => NULL,
    'Magento\\Backend\\Block\\Dashboard\\Grid' => NULL,
    'Magento\\Backend\\Block\\Dashboard\\Orders\\Grid' => 
    array (
      'orders_grid_plugin' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Block\\Dashboard\\Orders\\Grid',
      ),
    ),
    'Magento\\Sales\\Helper\\Guest' => 
    array (
      'redirect_guest_on_received_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Helper\\GuestPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\OrderIncrementIdChecker' => 
    array (
      'after_increment_id_check' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Model\\OrderIncrementIdCheckerPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\OrderCustomerExtractor' => 
    array (
      'after_extract' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\Model\\OrderCustomerExtractorPlugin',
      ),
    ),
    'Magento\\Payment\\Observer\\SalesOrderBeforeSaveObserver' => 
    array (
      'skip_order_payment_verification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsyncOrder\\Plugin\\OrderPaymentVerificationPlugin',
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
      'add_to_cart_single_option' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Bundle\\Plugin\\Catalog\\Model\\Product\\Type\\AbstractType',
      ),
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
    'Magento\\Framework\\App\\MaintenanceMode' => 
    array (
      'amqp_maintenance_mode' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MessageQueue\\Model\\Plugin\\ResourceModel\\Lock',
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
    'Magento\\Catalog\\Api\\ProductCustomOptionRepositoryInterface' => 
    array (
      'isOptionExists' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Api\\Plugin\\ProductCustomOptionRepository',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Product\\Flat\\Table\\BuilderInterface' => 
    array (
      'addRowIdToFlat' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Model\\Indexer\\Product\\Flat\\Table\\Builder',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\AbstractFlatState' => 
    array (
      'staging_flat_bypass' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Catalog\\Model\\Indexer\\AbstractFlatState',
      ),
    ),
    'Magento\\Catalog\\Controller\\Category\\View' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'replaceIndex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\Controller\\View',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
    ),
    'Magento\\Catalog\\Api\\CategoryRepositoryInterface' => 
    array (
      'DateRangeDesignUpdateCategorySavePlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Api\\DateRangeDesignUpdateCategorySavePlugin',
      ),
    ),
    'Magento\\Staging\\Model\\VersionManager' => 
    array (
      'catalogStagingVersionManager' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Staging\\Model\\VersionManager',
      ),
    ),
    'Magento\\InventoryApi\\Model\\IsProductAssignedToStockInterface' => NULL,
    'Magento\\Inventory\\Model\\ResourceModel\\IsProductAssignedToStock' => 
    array (
      'cache_product_stock_assignment_check' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Inventory\\Plugin\\Inventory\\Model\\ResourceModel\\IsProductAssignedToStockCache',
      ),
    ),
    'Magento\\AdvancedCheckout\\Model\\AreProductsSalableForRequestedQtyInterface' => NULL,
    'Magento\\AdvancedCheckout\\Model\\AreProductsSalableForRequestedQty' => 
    array (
      'inventory_advanced_checkout_is_in_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryAdvancedCheckout\\Plugin\\Model\\AreProductsSalablePlugin',
      ),
    ),
    'Magento\\CatalogImportExport\\Model\\Import\\Product\\Type\\AbstractType' => NULL,
    'Magento\\BundleImportExport\\Model\\Import\\Product\\Type\\Bundle' => 
    array (
      'process_shipment_type_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleImportExport\\Plugin\\BundleImportExport\\Model\\Import\\Product\\Type\\Bundle\\ProcessShipmentTypePlugin',
      ),
    ),
    'Magento\\InventoryConfigurationApi\\Model\\IsSourceItemManagementAllowedForProductTypeInterface' => 
    array (
      'disable_bundle_type' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\InventoryConfigurationApi\\IsSourceItemManagementAllowedForProductType\\DisableBundleTypePlugin',
      ),
      'disable_grouped_type' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProduct\\Plugin\\InventoryConfigurationApi\\IsSourceItemManagementAllowedForProductType\\DisableGroupedTypePlugin',
      ),
    ),
    'Magento\\Bundle\\Model\\ResourceModel\\Selection\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'joinProductsWhenFlatEnabled' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\JoinProductsWhenFlatEnabled',
      ),
      'joinAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\Collection',
      ),
      'add_stock_information' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\AddStockStatusToCollection',
      ),
      'adapt_add_quantity_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\Bundle\\Model\\ResourceModel\\Selection\\Collection\\AdaptAddQuantityFilterPlugin',
      ),
    ),
    'Magento\\Bundle\\Api\\ProductLinkManagementInterface' => 
    array (
      'validate_source_items_before_add_bundle_selection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\Bundle\\Model\\LinkManagement\\ValidateSourceItemsBeforeAddBundleSelectionPlugin',
      ),
      'validate_source_items_before_save_bundle_selection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\Bundle\\Model\\LinkManagement\\ValidateSourceItemsBeforeSaveBundleSelectionPlugin',
      ),
      'reindex_source_items_after_add_bundle_selection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\Bundle\\Model\\LinkManagement\\ReindexSourceItemsAfterAddBundleSelectionPlugin',
      ),
      'reindex_source_items_after_save_bundle_selection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\Bundle\\Model\\LinkManagement\\ReindexSourceItemsAfterSaveBundleSelectionPlugin',
      ),
      'reindex_source_items_after_remove_bundle_selection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\Bundle\\Model\\LinkManagement\\ReindexSourceItemsAfterRemoveBundleSelectionPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Helper\\Stock' => 
    array (
      'adapt_assign_stock_status_to_bundle_product' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\CatalogInventory\\Helper\\Stock\\AdaptAssignStatusToProductPlugin',
      ),
      'adapt_add_in_stock_filter_to_collection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Helper\\Stock\\AdaptAddInStockFilterToCollectionPlugin',
      ),
      'adapt_add_stock_status_to_products' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Helper\\Stock\\AdaptAddStockStatusToProductsPlugin',
      ),
      'adapt_assign_status_to_product' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Helper\\Stock\\AdaptAssignStatusToProductPlugin',
      ),
      'adapt_assign_stock_status_to_configurable_product' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProduct\\Plugin\\CatalogInventory\\Helper\\Stock\\AdaptAssignStatusToProductPlugin',
      ),
    ),
    'Magento\\Inventory\\Model\\SourceItem\\Command\\DecrementSourceItemQty' => 
    array (
      'synchronize_legacy_catalog_inventory_at_source_item_decrement_quantity' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\SynchronizeLegacyStockAfterDecrementStockPlugin',
      ),
      'update_parent_configurable_product_stock_status_in_legacy_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProduct\\Plugin\\InventoryApi\\UpdateParentStockStatusInLegacyStockPlugin',
      ),
      'reindex_after_decrement_source_item_quantity' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\ReindexAfterDecrementSourceItemQty',
      ),
      'update_parent_bundle_product_stock_status_in_legacy_stock' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\InventoryApi\\UpdateParentStockStatusInLegacyStockPlugin',
      ),
    ),
    'Magento\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync' => 
    array (
      'bundle_product_index_full' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexFullPlugin',
      ),
      'bundle_product_index_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexListPlugin',
      ),
      'update_product_prices_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\PriceIndexUpdatePlugin',
      ),
      'configurable_product_full_index' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexFullPlugin',
      ),
      'configurable_product_index_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexListPlugin',
      ),
      'grouped_product_index_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexListPlugin',
      ),
      'grouped_product_index_full' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexFullPlugin',
      ),
      'invalidate_products_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCache\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\CacheFlush',
      ),
    ),
    'Magento\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync' => 
    array (
      'priceIndexUpdater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\PriceIndexUpdater',
      ),
      'grouped_product_index' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\SourceItemIndexerPlugin',
      ),
      'invalidate_products_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCache\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\CacheFlush',
      ),
      'fulltextIndexUpdater' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\InventoryCatalogSearch\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\FulltextIndexUpdater',
      ),
      'configurable_product_index' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\InventoryConfigurableProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\SourceItemIndexerPlugin',
      ),
      'bundle_product_index' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\SourceItemIndexerPlugin',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockRepositoryInterface' => 
    array (
      'prevent_default_stock_deleting' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\StockRepository\\PreventDeleting\\DefaultStockPlugin',
      ),
      'load_sales_channels_on_get_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\InventoryApi\\StockRepository\\LoadSalesChannelsOnGetListPlugin',
      ),
      'load_sales_channels_on_get' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\InventoryApi\\StockRepository\\LoadSalesChannelsOnGetPlugin',
      ),
      'prevent_deleting_assigned_to_sales_channels_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\InventoryApi\\StockRepository\\PreventDeletingAssignedToSalesChannelsStockPlugin',
      ),
      'save_sales_channels_links' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventorySales\\Plugin\\InventoryApi\\StockRepository\\SaveSalesChannelsLinksPlugin',
      ),
    ),
    'Magento\\InventoryApi\\Api\\SourceItemsSaveInterface' => 
    array (
      'set_data_to_legacy_catalog_inventory_at_source_items_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\SetDataToLegacyCatalogInventoryAtSourceItemsSavePlugin',
      ),
      'reindex_after_source_items_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\ReindexAfterSourceItemsSavePlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Indexer\\Price\\PriceModifierInterface' => NULL,
    'Magento\\CatalogInventory\\Model\\Indexer\\ProductPriceIndexFilter' => 
    array (
      'change_select_for_price_modifier' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\Indexer\\ModifySelectInProductPriceIndexFilter',
      ),
    ),
    'Magento\\InventoryApi\\Api\\SourceItemsDeleteInterface' => 
    array (
      'set_to_zero_legacy_catalog_inventory_at_source_items_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\SetToZeroLegacyCatalogInventoryAtSourceItemsDeletePlugin',
      ),
      'reindex_after_source_items_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\ReindexAfterSourceItemsDeletePlugin',
      ),
      'inventory_low_quantity_notification_source_item_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\InventoryApi\\SourceItemsDeleteInterfacePlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\QtyCounterInterface' => 
    array (
      'update_source_item_at_legacy_qty_counter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\UpdateSourceItemAtLegacyQtyCounterPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\Stock\\Item' => 
    array (
      'update_source_item_at_legacy_stock_item_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\UpdateSourceItemAtLegacyStockItemSavePlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status' => 
    array (
      'adapt_add_stock_data_to_collection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status\\AdaptAddStockDataToCollectionPlugin',
      ),
      'adapt_add_stock_status_to_select' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status\\AdaptAddStockStatusToSelectPlugin',
      ),
      'adapt_add_is_in_stock_filter_to_collection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status\\AdaptAddIsInStockFilterToCollectionPlugin',
      ),
    ),
    'Magento\\InventorySalesApi\\Api\\GetStockBySalesChannelInterface' => 
    array (
      'adapt_stock_resolver_to_admin_website' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventorySalesApi\\StockResolver\\AdaptStockResolverToAdminWebsitePlugin',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockSourceLinksDeleteInterface' => 
    array (
      'prevent_delete_default_stock_links' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\StockSourceLinksDelete\\PreventDeleteDefaultStockLinksPlugin',
      ),
      'invalidate_after_stock_source_links_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\InvalidateAfterStockSourceLinksDeletePlugin',
      ),
    ),
    'Magento\\Inventory\\Model\\SourceItem\\Command\\SourceItemsSaveWithoutLegacySynchronization' => 
    array (
      'set_data_to_legacy_catalog_inventory_at_source_items_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\SetDataToLegacyCatalogInventoryAtSourceItemsSavePlugin',
        'disabled' => true,
      ),
      'reindex_after_source_items_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\ReindexAfterSourceItemsSavePlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockRegistryInterface' => 
    array (
      'adapt_get_stock_status' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\StockRegistry\\AdaptGetStockStatusPlugin',
      ),
      'adapt_get_stock_status_by_sku' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\StockRegistry\\AdaptGetStockStatusBySkuPlugin',
      ),
      'adapt_get_product_stock_status' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\StockRegistry\\AdaptGetProductStockStatusPlugin',
      ),
      'adapt_get_product_stock_status_by_sku' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\StockRegistry\\AdaptGetProductStockStatusBySkuPlugin',
      ),
      'adapt_update_product_stock_status_by_sku' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\StockRegistry\\AdaptUpdateStockStatusBySkuPlugin',
      ),
      'inventory_catalog_add_qty_to_legacy_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\StockRegistry\\SetQtyToLegacyStock',
      ),
      'inventory_catalog_add_qty_to_legacy_stock_configurable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProduct\\Plugin\\CatalogInventory\\Api\\StockRegistry\\SetQtyToLegacyStock',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\StockDataFilter' => 
    array (
      'allow_negative_min_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\StockDataFilter\\AllowNegativeMinQtyPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\Data\\StockItemInterface' => 
    array (
      'adapt_min_qty_to_backorders' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\Data\\StockItemInterface\\AdaptMinQtyToBackordersPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Spi\\StockStateProviderInterface' => 
    array (
      'adapt_verify_stock_to_negative_min_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\Spi\\StockStateProvider\\AdaptVerifyStockToNegativeMinQtyPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\StockStatusFilterInterface' => 
    array (
      'inventory_catalog_stock_status_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\ResourceModel\\StockStatusFilterPlugin',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\Attribute\\Source\\SourceInterface' => NULL,
    'Magento\\Eav\\Model\\Entity\\Attribute\\Source\\AbstractSource' => NULL,
    'Magento\\CatalogInventory\\Model\\Source\\Stock' => 
    array (
      'inventory_catalog_add_sort_by_stock_qty_to_collection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\Source\\StockPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockStateInterface' => 
    array (
      'check_quote_item_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\StockState\\CheckQuoteItemQtyPlugin',
      ),
      'suggest_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\StockState\\SuggestQtyPlugin',
      ),
    ),
    'Magento\\InventoryReservationsApi\\Model\\AppendReservationsInterface' => 
    array (
      'prevent_append_reservation_on_not_manage_items_in_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\InventoryReservationsApi\\PreventAppendReservationOnNotManageItemsInStockPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockManagementInterface' => NULL,
    'Magento\\CatalogInventory\\Api\\RegisterProductSaleInterface' => 
    array (
      'process_register_products_sale' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\CatalogInventory\\StockManagement\\ProcessRegisterProductsSalePlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\RevertProductSaleInterface' => NULL,
    'Magento\\CatalogInventory\\Model\\StockManagement' => 
    array (
      'process_register_products_sale' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\CatalogInventory\\StockManagement\\ProcessRegisterProductsSalePlugin',
      ),
      'process_back_item_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\CatalogInventory\\StockManagement\\ProcessBackItemQtyPlugin',
      ),
      'process_revert_products_sale' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\CatalogInventory\\StockManagement\\ProcessRevertProductsSalePlugin',
      ),
    ),
    'Magento\\SalesInventory\\Model\\Order\\ReturnProcessor' => 
    array (
      'process_return_product_qty_on_credit_memo' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\SalesInventory\\ProcessReturnQtyOnCreditMemoPlugin',
      ),
    ),
    'Magento\\InventoryConfigurationApi\\Api\\GetStockItemConfigurationInterface' => 
    array (
      'load_stock_item_is_in_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryConfigurationApi\\GetStockItemConfiguration\\LoadIsInStockPlugin',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Action\\GetSearchableProductsSelect' => 
    array (
      'stock_filters_by_child_products' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalogSearch\\Plugin\\CatalogSearch\\Model\\Indexer\\ChildProductFilterByInventoryStockPlugin',
      ),
    ),
    'Magento\\InventorySalesApi\\Model\\GetSkuFromOrderItemInterface' => 
    array (
      'get_configurable_option_sku_from_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProduct\\Plugin\\Sales\\GetSkuFromOrderItem',
      ),
    ),
    'Magento\\CatalogInventory\\Observer\\ParentItemProcessorInterface' => 
    array (
      'adapt_parent_stock_processor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProduct\\Plugin\\CatalogInventory\\Observer\\ParentItemProcessor\\AdaptParentItemProcessorPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\System\\Config\\Backend\\Minqty' => 
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
      'allow_negative_min_qty_in_config' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfiguration\\Plugin\\CatalogInventory\\Model\\System\\Config\\Backend\\Minqty\\AllowNegativeMinQtyInConfigPlugin',
      ),
    ),
    'Magento\\InventoryConfiguration\\Model\\GetLegacyStockItem' => 
    array (
      'cache_legacy_stock_item' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfiguration\\Plugin\\InventoryConfiguration\\Model\\GetLegacyStockItemCache',
      ),
      'inventory_catalog_get_legacy_stock_item_from_stock_registry' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryConfiguration\\Model\\GetLegacyStockItemFromStockRegistry',
      ),
    ),
    'Magento\\InventoryApi\\Api\\SourceRepositoryInterface' => 
    array (
      'invalidate_after_enabling_or_disabling_source' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\InvalidateAfterEnablingOrDisablingSourcePlugin',
      ),
      'load_in_store_pickup_on_get_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickup\\Plugin\\InventoryApi\\SourceRepository\\LoadInStorePickupOnGetListPlugin',
      ),
      'load_in_store_pickup_on_get' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickup\\Plugin\\InventoryApi\\SourceRepository\\LoadInStorePickupOnGetPlugin',
      ),
      'save_in_store_pickup_links' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickup\\Plugin\\InventoryApi\\SourceRepository\\SaveInStorePickupPlugin',
      ),
      'updateSourceLatitudeAndLongitude' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\InventoryDistanceBasedSourceSelection\\Plugin\\FillSourceLatitudeAndLongitude',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockSourceLinksSaveInterface' => 
    array (
      'invalidate_after_stock_source_links_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\InvalidateAfterStockSourceLinksSavePlugin',
      ),
    ),
    'Magento\\InventorySalesApi\\Api\\PlaceReservationsForSalesEventInterface' => NULL,
    'Magento\\InventorySales\\Model\\PlaceReservationsForSalesEvent' => 
    array (
      'schedule_reservation_place' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventorySales\\EnqueueAfterPlaceReservationsForSalesEvent',
      ),
    ),
    'Magento\\InventoryCatalog\\Model\\UpdateInventory' => 
    array (
      'updateParentLegacyStockStatus' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProduct\\Plugin\\InventoryCatalog\\Model\\UpdateParentStockStatusPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Link' => 
    array (
      'process_source_items_after_save_links' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProductAdminUi\\Plugin\\Catalog\\Model\\Product\\Link\\ProcessSourceItemsAfterSaveAssociatedLinks',
      ),
      'isInStockFilter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Plugin\\ProductLinks',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\VersionControl\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Quote\\Model\\ResourceModel\\Quote\\Address\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'add_pickup_location_to_quote_address' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\AddressCollection\\GetPickupLocationInformationPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\ShippingAddressManagementInterface' => 
    array (
      'shipping_address_management_replace_shipping_address' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\ReplaceShippingAddressForShippingAddressManagement',
      ),
    ),
    'Magento\\Quote\\Api\\BillingAddressManagementInterface' => 
    array (
      'do_not_use_billing_address_for_shipping_for_in_store_pickup_quote' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\DoNotUseBillingAddressForShipping',
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
    'Magento\\InventoryIndexer\\Model\\Queue\\UpdateIndexSalabilityStatus' => 
    array (
      'invalidate_products_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCache\\Plugin\\InventoryIndexer\\Queue\\Reservation\\UpdateSalabilityStatus\\CacheFlush',
      ),
    ),
    'Magento\\InventoryCatalogApi\\Api\\BulkInventoryTransferInterface' => 
    array (
      'inventory_low_quantity_bulk_transfer' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\InventoryCatalogApi\\BulkConfigurationTransferInterfacePlugin',
      ),
    ),
    'Magento\\InventoryCatalogApi\\Api\\BulkSourceAssignInterface' => 
    array (
      'inventory_low_quantity_bulk_source_assign' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\InventoryCatalogApi\\BulkSourceAssignInterfacePlugin',
      ),
    ),
    'Magento\\InventoryCatalogApi\\Api\\BulkSourceUnassignInterface' => 
    array (
      'inventory_low_quantity_bulk_source_unassign' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\InventoryCatalogApi\\BulkSourceUnassignInterfacePlugin',
      ),
    ),
    'Magento\\InventoryLowQuantityNotificationApi\\Api\\SourceItemConfigurationsSaveInterface' => 
    array (
      'update_legacy_stock_item_configuration_at_source_item_configuration_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\InventoryLowQuantityNotificationApi\\UpdateLegacyStockItemConfigurationAtSourceItemConfigurationSavePlugin',
      ),
    ),
    'Magento\\Inventory\\Model\\ResourceModel\\SourceItem\\DeleteMultiple' => 
    array (
      'delete_source_items_configuration' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\Inventory\\Model\\ResourceModel\\SourceItem\\DeleteMultiple\\DeleteSourceItemsConfigurationPlugin',
      ),
    ),
    'Magento\\ProductAlert\\Model\\ProductSalability' => 
    array (
      'product_alert_adapt_salability' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryProductAlert\\Plugin\\AdaptProductSalabilityPlugin',
      ),
    ),
    'Magento\\RequisitionList\\Model\\RequisitionListItem\\Validator\\Stock' => 
    array (
      'magentoRequisitionListStockPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryRequisitionList\\Plugin\\Model\\RequisitionListItem\\Validator\\StockPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Block\\Stockqty\\AbstractStockqty' => 
    array (
      'magentoInventorySalesFrontendUiAbstractStockqty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySalesFrontendUi\\Plugin\\Block\\Stockqty\\AbstractStockqtyPlugin',
      ),
    ),
    'Magento\\Setup\\Model\\FixtureGenerator\\EntityGeneratorFactory' => 
    array (
      'update_custom_table_map' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySetupFixtureGenerator\\Plugin\\Setup\\Model\\FixtureGenerator\\EntityGeneratorFactory\\UpdateCustomTableMapPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\ShipmentFactory' => 
    array (
      'assign_source_code_to_shipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShipping\\Plugin\\Sales\\Shipment\\AssignSourceCodeToShipmentPlugin',
      ),
    ),
    'Magento\\Sales\\Api\\ShipmentRepositoryInterface' => 
    array (
      'GetListShipmentRepository' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShipping\\Plugin\\Sales\\Model\\Order\\GetListShipmentRepositoryPlugin',
      ),
      'Helloworld\\ShipmentAttributes\\Plugin\\ShipmentRepositoryPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Helloworld\\ShipmentAttributes\\Plugin\\ShipmentRepositoryPlugin',
      ),
    ),
    'Magento\\VisualMerchandiser\\Model\\Resolver\\QuantityAndStock' => 
    array (
      'magentoVisualMerchandiserResolverQuantityAndStockPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryVisualMerchandiser\\Plugin\\Model\\Resolver\\QuantityAndStockPlugin',
      ),
    ),
    'Magento\\VisualMerchandiser\\Model\\Sorting\\SortAbstract' => NULL,
    'Magento\\VisualMerchandiser\\Model\\Sorting\\SortInterface' => NULL,
    'Magento\\VisualMerchandiser\\Model\\Sorting\\OutStockBottom' => 
    array (
      'magentoVisualMerchandiserOutStockBottomSortingPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryVisualMerchandiser\\Plugin\\Model\\Sorting\\OutStockBottomSortingPlugin',
      ),
    ),
    'Magento\\Framework\\Api\\DataObjectHelper' => 
    array (
      'add_allow_remote_shopping_assistance_to_customer' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerGraphQl\\Plugin\\DataObjectHelperPlugin',
      ),
    ),
    'Magento\\LoginAsCustomerApi\\Api\\AuthenticateCustomerBySecretInterface' => 
    array (
      'process_shopping_cart' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerQuote\\Plugin\\LoginAsCustomerApi\\ProcessShoppingCartPlugin',
      ),
      'log_authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerLogging\\Plugin\\LoginAsCustomerApi\\LogAuthenticationPlugin',
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
    'Magento\\Framework\\App\\Rss\\DataProviderInterface' => NULL,
    'Magento\\Wishlist\\Model\\Rss\\Wishlist' => 
    array (
      'aroundGetHeader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MultipleWishlist\\Model\\Plugin\\Rss\\Wishlist',
      ),
    ),
    'Magento\\MultipleWishlist\\Controller\\IndexInterface' => NULL,
    'Magento\\MultipleWishlist\\Controller\\AbstractIndex' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
      'authentication' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Wishlist\\Controller\\Index\\Plugin',
      ),
      'multiple_enabled_filter' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\MultipleWishlist\\Controller\\Index\\Plugin',
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
    'Magento\\Payment\\Model\\MethodInterface' => NULL,
    'Magento\\Quote\\Api\\Data\\PaymentMethodInterface' => NULL,
    'Magento\\Payment\\Model\\Method\\AbstractMethod' => 
    array (
      'paymentMethodIsAvailable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PaymentStaging\\Plugin\\Model\\Method\\PaymentMethodIsAvailable',
      ),
    ),
    'Magento\\Payment\\Model\\SaleOperationInterface' => NULL,
    'Magento\\Payment\\Model\\Method\\Adapter' => 
    array (
      'paymentGatewayIsAvailable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PaymentStaging\\Plugin\\Model\\Method\\PaymentMethodIsAvailable',
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
    'Magento\\Payment\\Model\\Checks\\SpecificationInterface' => NULL,
    'Magento\\Payment\\Model\\Checks\\Composite' => 
    array (
      'paypal_specification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Model\\Method\\Checks\\SpecificationPlugin',
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
    'Magento\\Sales\\Model\\ResourceModel\\Collection\\ExpiredQuotesCollection' => 
    array (
      'cleanExpiredQuotesPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PersistentHistory\\Plugin\\CleanExpiredQuotesPlugin',
      ),
    ),
    'Magento\\Ui\\Component\\Listing\\Columns\\ColumnInterface' => NULL,
    'Magento\\Ui\\Component\\Listing\\Columns\\Column' => NULL,
    'Magento\\Catalog\\Ui\\Component\\Listing\\Columns\\Price' => 
    array (
      'price-permission-grid-columns-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PricePermissions\\Ui\\Component\\Listing\\Columns\\Price\\Plugin',
      ),
    ),
    'Magento\\Framework\\EntityManager\\Operation\\ExtensionInterface' => NULL,
    'Magento\\Downloadable\\Model\\Link\\UpdateHandler' => 
    array (
      'replaceDownloadableLinksIds' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\DownloadableStaging\\Model\\Plugin\\Link\\UpdateHandlerPlugin',
      ),
    ),
    'Magento\\Downloadable\\Model\\Sample\\UpdateHandler' => 
    array (
      'replaceDownloadableSamplesIds' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\DownloadableStaging\\Model\\Plugin\\Sample\\UpdateHandlerPlugin',
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
    'Magento\\ScheduledImportExport\\Model\\Scheduled\\Operation\\Data' => 
    array (
      'serverType' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\RemoteStorageCommerce\\Plugin\\ServerType',
      ),
    ),
    'Magento\\ImportExport\\Model\\Import\\AbstractEntity' => NULL,
    'Magento\\ImportExport\\Model\\Import\\Entity\\AbstractEav' => NULL,
    'Magento\\CustomerImportExport\\Model\\Import\\AbstractCustomer' => NULL,
    'Magento\\CustomerImportExport\\Model\\Import\\Customer' => 
    array (
      'rewardAttributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\ImportCustomer',
      ),
    ),
    'Magento\\CustomerBalance\\Model\\Creditmemo\\Balance' => 
    array (
      'customerBalanceSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\CustomerBalance',
      ),
    ),
    'Magento\\SalesRule\\Model\\Rule' => 
    array (
      'salesRuleDateResolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRuleStaging\\Model\\Plugin\\DateResolverPlugin',
      ),
      'salesRuleBeforeBeforeSave' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\SalesRuleStaging\\Model\\Plugin\\Rule',
      ),
      'salesRuleAroundSave' => 
      array (
        'sortOrder' => 500,
        'instance' => 'Magento\\AdvancedSalesRule\\Model\\Plugin\\Rule',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Tab\\TabInterface' => NULL,
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View\\Tab\\History' => 
    array (
      'sales-order-history-rma-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Rma\\Block\\Adminhtml\\Order\\View\\Tab\\HistoryPlugin',
      ),
    ),
    'Magento\\Rma\\Api\\RmaRepositoryInterface' => NULL,
    'Magento\\Rma\\Model\\RmaRepository' => 
    array (
      'authorization' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Rma\\Model\\Rma\\Plugin\\Authorization',
      ),
    ),
    'Magento\\Sales\\Api\\RefundOrderInterface' => NULL,
    'Magento\\Sales\\Model\\RefundOrder' => 
    array (
      'refundOrderAfter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesInventory\\Model\\Plugin\\Order\\ReturnToStockOrder',
      ),
    ),
    'Magento\\Sales\\Api\\RefundInvoiceInterface' => NULL,
    'Magento\\Sales\\Model\\RefundInvoice' => 
    array (
      'refundInvoiceAfter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesInventory\\Model\\Plugin\\Order\\ReturnToStockInvoice',
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
    'Magento\\CatalogRule\\Api\\Data\\RuleInterface' => NULL,
    'Magento\\CatalogRule\\Model\\Rule' => 
    array (
      'catalogRuleDateResolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleStaging\\Model\\Plugin\\DateResolverPlugin',
      ),
    ),
    'Magento\\CatalogRule\\Observer\\ProcessFrontFinalPriceObserver' => 
    array (
      'previewCatalogPriceRule' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleStaging\\Model\\Plugin\\FinalPricePlugin',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\ObjectRelationProcessor' => 
    array (
      'object_constraints_resolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\ForeignKey\\ObjectRelationProcessor\\Plugin',
      ),
    ),
    'Magento\\CatalogGraphQl\\Model\\Resolver\\Products' => 
    array (
      'graphql_recaptcha_validation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ReCaptchaWebapiGraphQl\\Plugin\\GraphQlValidator',
      ),
      'catalog_search_permissions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissionsGraphQl\\Model\\Resolver\\Products',
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
    'Magento\\Banner\\Block\\Widget\\Banner' => 
    array (
      'additional_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\BannerPageBuilder\\Plugin\\Widget\\Banner',
      ),
      'gtmBannerBlockWidgetBanner' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GoogleTagManager\\Block\\Plugin\\Banner\\Widget\\Banner',
      ),
    ),
    'Magento\\PageBuilder\\Model\\Stage\\RendererInterface' => NULL,
    'Magento\\PageBuilder\\Model\\Stage\\Renderer\\CmsStaticBlock' => 
    array (
      'dynamic_block_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\BannerPageBuilder\\Plugin\\CmsStaticBlockRenderer',
      ),
    ),
    'Magento\\VersionsCms\\Api\\Data\\HierarchyNodeInterface' => NULL,
    'Magento\\VersionsCms\\Model\\Hierarchy\\Node' => 
    array (
      'versions-cms-reset-page-cache-after-nodes-save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\VersionsCmsPageCache\\Plugin\\VersionsCms\\Hierarchy\\Node',
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
    'Magento\\Webapi\\Model\\Config\\Converter' => 
    array (
      'webapiResourceSecurity' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiSecurity\\Model\\Plugin\\AnonymousResourceSecurity',
      ),
    ),
    'Magento\\Staging\\Model\\Entity\\RetrieverInterface' => NULL,
    'Magento\\CatalogStaging\\Model\\Product\\Retriever' => 
    array (
      'update_bundle_product_properties' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\BundleStaging\\Model\\Product\\RetrieverPlugin',
      ),
    ),
    'Zend_Mail_Transport_Abstract' => NULL,
    'Zend_Mail_Transport_Sendmail' => NULL,
    'MagePal\\GmailSmtpApp\\Model\\Transport' => 
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
      'magePalGmailSmtpAppTransportInterface' => 
      array (
        'sortOrder' => 100,
        'instance' => 'MagePal\\GmailSmtpApp\\Plugin\\Mail\\TransportPlugin',
      ),
      'magePalGmailSmtpAppTransport' => 
      array (
        'sortOrder' => 100,
        'instance' => 'MagePal\\GmailSmtpApp\\Plugin\\Mail\\TransportPlugin',
      ),
    ),
    'Magento\\Framework\\Mail\\Template\\TransportBuilder' => 
    array (
      'magePalGmailSmtpAppTransportBuilder' => 
      array (
        'sortOrder' => 1,
        'instance' => 'MagePal\\GmailSmtpApp\\Plugin\\Mail\\Template\\TransportBuilderPlugin',
      ),
    ),
    'Magento\\Framework\\Mail\\Template\\TransportBuilderByStore' => 
    array (
      'magePalGmailSmtpAppTransportBuilderByStore' => 
      array (
        'sortOrder' => 1,
        'instance' => 'MagePal\\GmailSmtpApp\\Plugin\\Mail\\Template\\TransportBuilderByStorePlugin',
      ),
    ),
    'Magento\\Customer\\Model\\EmailNotificationInterface' => NULL,
    'Magento\\Customer\\Model\\EmailNotification' => 
    array (
      'mpcustomerapproval_disable_email_notification' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Mageplaza\\CustomerApproval\\Plugin\\EmailNewAccount',
      ),
    ),
    'Magento\\Customer\\Controller\\AccountInterface' => 
    array (
      'customer_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Controller\\Plugin\\Account',
      ),
    ),
    'Magento\\Customer\\Controller\\AbstractAccount' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Controller\\Plugin\\Account',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
    ),
    'Magento\\Framework\\App\\CsrfAwareActionInterface' => NULL,
    'Magento\\Customer\\Controller\\Account\\CreatePost' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Controller\\Plugin\\Account',
      ),
      'mpcustomerapproval_account_create_post' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Mageplaza\\CustomerApproval\\Plugin\\CustomerCreatePost',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\Confirm' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Controller\\Plugin\\Account',
      ),
      'mpcustomerapproval_account_create_confirm' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Mageplaza\\CustomerApproval\\Plugin\\CustomerConfirm',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\LoginPost' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Controller\\Plugin\\Account',
      ),
      'mpcustomerapproval_account_login_post' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Mageplaza\\CustomerApproval\\Plugin\\CustomerLoginPost',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
    ),
    'Magento\\Framework\\View\\Asset\\Minification' => 
    array (
      'braintreeExcludeFromMinification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'PayPal\\Braintree\\Plugin\\ExcludeFromMinification',
      ),
      'exclude-recaptcha-from-minification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ReCaptchaFrontendUi\\Plugin\\ExcludeFromMinification',
      ),
    ),
    'Magento\\Checkout\\CustomerData\\ItemInterface' => NULL,
    'Magento\\Checkout\\CustomerData\\AbstractItem' => 
    array (
      'braintreeAddFlagForVirtualProducts' => 
      array (
        'sortOrder' => 0,
        'instance' => 'PayPal\\Braintree\\Plugin\\AddFlagForVirtualProducts',
      ),
    ),
    'Magento\\Ui\\Component\\Wysiwyg\\ConfigInterface' => 
    array (
      'solwin_cpanel_config' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Solwin\\Cpanel\\Plugin\\Config',
      ),
    ),
    'Magento\\Framework\\Controller\\ResultInterface' => 
    array (
      'result-messages' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Controller\\Result\\MessagePlugin',
      ),
      'result-builtin-cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\Controller\\Result\\BuiltinPlugin',
      ),
      'result-varnish-cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\Controller\\Result\\VarnishPlugin',
      ),
    ),
    'Magento\\Framework\\Controller\\AbstractResult' => 
    array (
      'result-messages' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Controller\\Result\\MessagePlugin',
      ),
      'result-builtin-cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\Controller\\Result\\BuiltinPlugin',
      ),
      'result-varnish-cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\Controller\\Result\\VarnishPlugin',
      ),
    ),
    'Magento\\Framework\\View\\Result\\Layout' => 
    array (
      'asyncCssLoad' => 
      array (
        'sortOrder' => -20,
        'instance' => 'Magento\\Theme\\Controller\\Result\\AsyncCssPlugin',
      ),
      'deferJsToFooter' => 
      array (
        'sortOrder' => -10,
        'instance' => 'Magento\\Theme\\Controller\\Result\\JsFooterPlugin',
      ),
      'result-messages' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Controller\\Result\\MessagePlugin',
      ),
      'result-builtin-cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\Controller\\Result\\BuiltinPlugin',
      ),
      'result-varnish-cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\Controller\\Result\\VarnishPlugin',
      ),
    ),
    'Magento\\Framework\\Simplexml\\Config' => NULL,
    'Magento\\Framework\\View\\LayoutInterface' => NULL,
    'Magento\\Framework\\View\\Layout' => 
    array (
      'layout-model-caching-unique-name' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\Layout\\LayoutPlugin',
      ),
      'gtmLayout' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GoogleTagManager\\Model\\Plugin\\Layout',
      ),
      'core-session-depersonalize' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\PageCache\\Model\\Layout\\DepersonalizePlugin',
      ),
      'customer-session-depersonalize' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\Layout\\DepersonalizePlugin',
      ),
      'catalog-session-depersonalize' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Catalog\\Model\\Layout\\DepersonalizePlugin',
      ),
      'persistent-session-depersonalize' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Persistent\\Model\\Layout\\DepersonalizePlugin',
      ),
      'customer-segment-session-depersonalize' => 
      array (
        'sortOrder' => 15,
        'instance' => 'Magento\\CustomerSegment\\Model\\Layout\\DepersonalizePlugin',
      ),
      'checkout-session-depersonalize' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\Checkout\\Model\\Layout\\DepersonalizePlugin',
      ),
      'tax-session-depersonalize' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\Tax\\Model\\Layout\\DepersonalizePlugin',
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
    'Magento\\Store\\Api\\StoreCookieManagerInterface' => 
    array (
      'update_quote_store_after_switch_store_view' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Plugin\\UpdateQuoteStore',
      ),
    ),
    'Magento\\Checkout\\Block\\Checkout\\LayoutProcessor' => 
    array (
      'ProcessPaymentConfiguration' => 
      array (
        'sortOrder' => 0,
        'disabled' => true,
        'instance' => 'Magento\\Payment\\Plugin\\PaymentConfigurationProcess',
      ),
      'ProcessPaymentVaultConfiguration' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Vault\\Plugin\\PaymentVaultConfigurationProcess',
      ),
    ),
    'Magento\\Catalog\\ViewModel\\Product\\OptionsData' => 
    array (
      'add_bundle_options_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Bundle\\Plugin\\Catalog\\ViewModel\\Product\\AddBundleOptionsData',
      ),
    ),
    'Magento\\Framework\\Url\\Helper\\Data' => NULL,
    'Magento\\Catalog\\Helper\\Product' => 
    array (
      'dont_show_if_child_products_disabled' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Bundle\\Plugin\\Catalog\\Helper\\Product',
      ),
    ),
    'Magento\\Ui\\Component\\Form\\AttributeMapper' => 
    array (
      'processCustomerCustomBooleanAttributeOptions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Plugin\\ProcessCustomerCustomBooleanAttributeOptions',
      ),
    ),
    'Magento\\Catalog\\Helper\\Product\\View' => 
    array (
      'pre_render_product_options_from_wishlist' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Wishlist\\Plugin\\Helper\\Product\\View',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\ResourceModel\\Attribute\\OptionSelectBuilderInterface' => 
    array (
      'Magento_ConfigurableProduct_Plugin_Model_ResourceModel_Attribute_InStockOptionSelectBuilder' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProduct\\Plugin\\Model\\ResourceModel\\Attribute\\IsSalableOptionSelectBuilder',
      ),
      'option_select_website_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Model\\ResourceModel\\Attribute\\ScopedOptionSelectBuilder',
      ),
    ),
    'Magento\\Sales\\Api\\Data\\OrderAddressInterface' => NULL,
    'Magento\\Sales\\Model\\Order\\Address' => 
    array (
      'gift_registry_order_address_name' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftRegistry\\Model\\Plugin\\OrderAddressName',
      ),
    ),
    'Magento\\Checkout\\CustomerData\\Cart' => 
    array (
      'cart_private_data_tax' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Plugin\\Checkout\\CustomerData\\Cart',
      ),
      'cart_empty_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdvancedCheckout\\Plugin\\Checkout\\CustomerData\\Cart',
      ),
    ),
    'Magento\\Contact\\Block\\ContactForm' => 
    array (
      'set_view_model' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Contact\\Plugin\\UserDataProvider\\ViewModel',
      ),
    ),
    'Magento\\Checkout\\Model\\Cart\\CollectQuote' => 
    array (
      'checkout_cart_collect_totals' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerSegment\\Model\\Checkout\\Block\\Cart\\Shipping\\Plugin',
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
    'Magento\\Customer\\Model\\Registration' => 
    array (
      'websiterestriction_customer_registration_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebsiteRestriction\\Model\\Plugin\\CustomerRegistration',
      ),
      'invitation_customer_registration_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Invitation\\Model\\Plugin\\CustomerRegistration',
      ),
    ),
    'Magento\\Sales\\Block\\Items\\AbstractItems' => NULL,
    'Magento\\Multishipping\\Block\\Checkout\\Shipping' => 
    array (
      'getItemsBoxTextAfter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Block\\Message\\Multishipping\\Plugin\\ItemsBox',
      ),
    ),
    'Magento\\Checkout\\Model\\Type\\Onepage' => 
    array (
      'save_gift_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Type\\Plugin\\Onepage',
      ),
    ),
    'Magento\\Multishipping\\Model\\Checkout\\Type\\Multishipping' => 
    array (
      'save_gift_messages' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Type\\Plugin\\Multishipping',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Item\\Processor' => 
    array (
      'mergeQuoteItems' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\MergeQuoteItems',
      ),
    ),
    'Magento\\Framework\\App\\Http\\Context' => 
    array (
      'update_cache_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Plugin\\UpdateCachePlugin',
      ),
      'persistent_page_cache_variation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Persistent\\Model\\Plugin\\PersistentCustomerContext',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Configuration\\Item\\ItemInterface' => NULL,
    'Magento\\Wishlist\\Model\\Item' => 
    array (
      'groupedProductWishlistProcessor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\Wishlist\\Product\\Item',
      ),
    ),
    'Magento\\InventorySalesApi\\Model\\GetStockItemDataInterface' => NULL,
    'Magento\\InventoryIndexer\\Model\\ResourceModel\\GetStockItemData' => 
    array (
      'inventory_catalog_get_legacy_stock_item_data_from_stock_registry' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryIndexer\\Model\\ResourceModel\\GetLegacyStockStatusDataFromStockRegistry',
      ),
    ),
    'Magento\\ConfigurableProduct\\Block\\Product\\View\\Type\\Configurable' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
      'add_sales_channel_info' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProductFrontendUi\\Plugin\\ConfigurableProduct\\Block\\Product\\View\\Type\\AddAdditionalInfo',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
      'multishipping_clear_addresses' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Multishipping\\Model\\Cart\\Controller\\CartPlugin',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart\\Add' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
      'multishipping_clear_addresses' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Multishipping\\Model\\Cart\\Controller\\CartPlugin',
      ),
      'multishipping_disabler' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Multishipping\\Plugin\\DisableMultishippingMode',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart\\UpdatePost' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
      'multishipping_clear_addresses' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Multishipping\\Model\\Cart\\Controller\\CartPlugin',
      ),
      'multishipping_disabler' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Multishipping\\Plugin\\DisableMultishippingMode',
      ),
    ),
    'Magento\\Checkout\\Controller\\Action' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
    ),
    'Magento\\Checkout\\Controller\\Onepage' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
    ),
    'Magento\\Checkout\\Controller\\Index\\Index' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'sdk_url_configuration' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\CheckoutIndex',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
      'multishipping_disabler' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Multishipping\\Plugin\\DisableMultishippingMode',
      ),
    ),
    'Magento\\Checkout\\Model\\Cart\\CartInterface' => NULL,
    'Magento\\Checkout\\Model\\Cart' => 
    array (
      'multishipping_session_mapper' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Multishipping\\Model\\Checkout\\Type\\Multishipping\\Plugin',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart\\UpdateItemQty' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
      'multishipping_disabler' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Multishipping\\Plugin\\DisableMultishippingMode',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\AccountInterface' => NULL,
    'Magento\\Invitation\\Controller\\Customer\\Account\\Confirm' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Controller\\Plugin\\Account',
      ),
      'mpcustomerapproval_account_create_confirm' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Mageplaza\\CustomerApproval\\Plugin\\CustomerConfirm',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
      'invitation_enabled_check' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Invitation\\Controller\\Customer\\Account\\Plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\Confirmation' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Controller\\Plugin\\Account',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\Confirmation' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Controller\\Plugin\\Account',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
      'invitation_enabled_check' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Invitation\\Controller\\Customer\\Account\\Plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\Create' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Controller\\Plugin\\Account',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\Create' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Controller\\Plugin\\Account',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
      'invitation_enabled_check' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Invitation\\Controller\\Customer\\Account\\Plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\CreatePassword' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Controller\\Plugin\\Account',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\CreatePassword' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Controller\\Plugin\\Account',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
      'invitation_enabled_check' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Invitation\\Controller\\Customer\\Account\\Plugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\CreatePost' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Controller\\Plugin\\Account',
      ),
      'mpcustomerapproval_account_create_post' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Mageplaza\\CustomerApproval\\Plugin\\CustomerCreatePost',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
      'invitation_enabled_check' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Invitation\\Controller\\Customer\\Account\\Plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\Edit' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Controller\\Plugin\\Account',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\Edit' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Controller\\Plugin\\Account',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
      'invitation_enabled_check' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Invitation\\Controller\\Customer\\Account\\Plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\EditPost' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Controller\\Plugin\\Account',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\EditPost' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Controller\\Plugin\\Account',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
      'invitation_enabled_check' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Invitation\\Controller\\Customer\\Account\\Plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\ForgotPassword' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Controller\\Plugin\\Account',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\ForgotPassword' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Controller\\Plugin\\Account',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
      'invitation_enabled_check' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Invitation\\Controller\\Customer\\Account\\Plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\ForgotPasswordPost' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Controller\\Plugin\\Account',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\ForgotPasswordPost' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Controller\\Plugin\\Account',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
      'invitation_enabled_check' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Invitation\\Controller\\Customer\\Account\\Plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\Index' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Controller\\Plugin\\Account',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\Index' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Controller\\Plugin\\Account',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
      'invitation_enabled_check' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Invitation\\Controller\\Customer\\Account\\Plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\Login' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Controller\\Plugin\\Account',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\Login' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Controller\\Plugin\\Account',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
      'invitation_enabled_check' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Invitation\\Controller\\Customer\\Account\\Plugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\LoginPost' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Controller\\Plugin\\Account',
      ),
      'mpcustomerapproval_account_login_post' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Mageplaza\\CustomerApproval\\Plugin\\CustomerLoginPost',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
      'invitation_enabled_check' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Invitation\\Controller\\Customer\\Account\\Plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\Logout' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Controller\\Plugin\\Account',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\Logout' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Controller\\Plugin\\Account',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
      'invitation_enabled_check' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Invitation\\Controller\\Customer\\Account\\Plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\LogoutSuccess' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Controller\\Plugin\\Account',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\LogoutSuccess' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Controller\\Plugin\\Account',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
      'invitation_enabled_check' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Invitation\\Controller\\Customer\\Account\\Plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\ResetPasswordPost' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Controller\\Plugin\\Account',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\ResetPasswordPost' => 
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
      'tax-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\App\\Action\\ContextPlugin',
      ),
      'weee-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Model\\App\\Action\\ContextPlugin',
      ),
      'invalidate_expired_session_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerFrontendUi\\Plugin\\InvalidateExpiredSessionPlugin',
      ),
      'catalog_app_action_dispatch_controller_context_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Framework\\App\\Action\\ContextPlugin',
      ),
      'customer_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Controller\\Plugin\\Account',
      ),
      'customer-app-action-executeController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Customer\\Model\\App\\Action\\ContextPlugin',
      ),
      'contextPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\Context',
      ),
      'customer-segment-app-action-dispatchController-context-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\CustomerSegment\\Model\\App\\Action\\ContextPlugin',
      ),
      'invitation_enabled_check' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Invitation\\Controller\\Customer\\Account\\Plugin',
      ),
    ),
    'Magento\\Customer\\Model\\CustomerExtractor' => 
    array (
      'add_assistance_allowed_to_customer_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerAssistance\\Plugin\\CustomerExtractorPlugin',
      ),
    ),
    'Magento\\Framework\\View\\Result\\Page' => 
    array (
      'asyncCssLoad' => 
      array (
        'sortOrder' => -20,
        'instance' => 'Magento\\Theme\\Controller\\Result\\AsyncCssPlugin',
      ),
      'deferJsToFooter' => 
      array (
        'sortOrder' => -10,
        'instance' => 'Magento\\Theme\\Controller\\Result\\JsFooterPlugin',
      ),
      'result-messages' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Controller\\Result\\MessagePlugin',
      ),
      'result-builtin-cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\Controller\\Result\\BuiltinPlugin',
      ),
      'result-varnish-cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\Controller\\Result\\VarnishPlugin',
      ),
      'pageLayoutDefaultClass' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Result\\Page',
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
    'Magento\\Email\\Model\\Template\\Filter' => 
    array (
      'convertBackgroundImages' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Filter\\TemplatePlugin',
      ),
      'escapeCustomVarDirectives' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Filter\\CustomVarTemplate',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository\\SaveHandler' => 
    array (
      'paypal-cartitem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Model\\Express\\QuotePlugin',
      ),
    ),
    'Magento\\Checkout\\Model\\ConfigProviderInterface' => NULL,
    'Magento\\Checkout\\Model\\DefaultConfigProvider' => 
    array (
      'mask_quote_id_substitutor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Persistent\\Model\\Checkout\\ConfigProviderPlugin',
      ),
    ),
    'Magento\\Checkout\\Model\\GuestPaymentInformationManagement' => 
    array (
      'process_billing_custom_guest_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\ProcessGuestBillingAddressCustomAttributes',
      ),
      'validate-guest-agreements' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutAgreements\\Model\\Checkout\\Plugin\\GuestValidation',
      ),
      'disable-guest-place-order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutStaging\\Plugin\\GuestPaymentInformationManagementPlugin',
      ),
      'inject_guest_address_for_nologin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Persistent\\Model\\Checkout\\GuestPaymentInformationManagementPlugin',
      ),
    ),
    'Magento\\Checkout\\Block\\Cart\\Coupon' => 
    array (
      'reset_layout_after_for_recaptcha_coupon_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ReCaptchaCheckoutSalesRule\\Plugin\\CouponSetLayoutPlugin',
      ),
    ),
    'Magento\\Customer\\Block\\Account\\AuthenticationPopup' => 
    array (
      'inject_recaptcha_in_authentication_popup' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\ReCaptchaCustomer\\Plugin\\Block\\Account\\InjectRecaptchaInAuthenticationPopup',
      ),
    ),
    'Magento\\Customer\\ViewModel\\LoginButton' => 
    array (
      'recaptcha_disable_login_button' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\ReCaptchaCustomer\\Plugin\\Customer\\DisableLoginButton',
      ),
    ),
    'Magento\\Customer\\ViewModel\\CreateAccountButton' => 
    array (
      'recaptcha_disable_create_account_button' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\ReCaptchaCustomer\\Plugin\\Customer\\DisableCreateAccountButton',
      ),
    ),
    'Magento\\Customer\\ViewModel\\ForgotPasswordButton' => 
    array (
      'recaptcha_disable_forgot_password_button' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\ReCaptchaCustomer\\Plugin\\Customer\\DisableForgotPasswordButton',
      ),
    ),
    'Mageplaza\\SocialLogin\\Controller\\Social\\Login' => 
    array (
      'mpcustomerapproval_socialogin_approval' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Mageplaza\\CustomerApproval\\Plugin\\SocialLogin\\Login',
      ),
    ),
    'Magento\\Tax\\Observer\\CustomerLoggedInObserver' => 
    array (
      'prevent_handle_customer_login' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Mageplaza\\CustomerApproval\\Plugin\\Magento\\Tax\\CustomerLoggedInObserver',
      ),
    ),
    'Mageplaza\\SocialLogin\\Controller\\Social\\AbstractSocial' => 
    array (
      'mp_socical_login_after_login' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Mageplaza\\CustomerApproval\\Plugin\\SocialLogin\\AbstractSocial',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\ListProduct' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
      'braintreeProductDetailsBlockPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'PayPal\\Braintree\\Plugin\\ProductDetailsBlockPlugin',
      ),
    ),
    'Magento\\Vault\\Api\\PaymentTokenRepositoryInterface' => 
    array (
      'braintreeDeleteStoredPaymentPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'PayPal\\Braintree\\Plugin\\DeleteStoredPaymentPlugin',
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
    'Magento\\Framework\\App\\Response\\Http_sendResponse___self' => 
    array (
      1 => 
      array (
        0 => 'genericHeaderPlugin',
        1 => 'response-http-page-cache',
      ),
    ),
    'Magento\\Framework\\App\\ActionInterface_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
        6 => 'customer-app-action-executeController-context-plugin',
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
    'Magento\\Store\\Model\\StoreResolver_getCurrentStoreId___self' => 
    array (
      2 => 'staging_preview_allowed_stores_check_bypass',
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
        0 => 'staging_preview_permissions_check',
      ),
      2 => 'front-controller-builtin-cache',
    ),
    'Magento\\Framework\\App\\FrontControllerInterface_dispatch_front-controller-builtin-cache' => 
    array (
      4 => 
      array (
        0 => 'front-controller-varnish-cache',
      ),
      1 => 
      array (
        0 => 'page_cache_form_key_from_cookie',
        1 => 'configHash',
      ),
    ),
    'Magento\\Framework\\App\\FrontController_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'staging_preview_permissions_check',
      ),
      2 => 'front-controller-builtin-cache',
    ),
    'Magento\\Framework\\App\\FrontController_dispatch_front-controller-builtin-cache' => 
    array (
      4 => 
      array (
        0 => 'front-controller-varnish-cache',
      ),
      1 => 
      array (
        0 => 'page_cache_form_key_from_cookie',
        1 => 'storeCookieValidate',
        2 => 'install',
        3 => 'configHash',
      ),
      2 => 'requestPreprocessor',
    ),
    'Magento\\Framework\\Stdlib\\DateTime\\Timezone_isScopeDateInInterval___self' => 
    array (
      4 => 
      array (
        0 => 'staging_datetime_timezone_bypass',
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
    'Magento\\Framework\\Data\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
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
    'Magento\\Framework\\Session\\SessionManagerInterface_start___self' => 
    array (
      1 => 
      array (
        0 => 'session_checker',
      ),
    ),
    'Magento\\Framework\\Session\\SessionManagerInterface_clearStorage___self' => 
    array (
      2 => 'keep_login_as_customer_session_data',
    ),
    'Magento\\Framework\\Session\\SessionManager_start___self' => 
    array (
      1 => 
      array (
        0 => 'session_checker',
      ),
    ),
    'Magento\\Framework\\Session\\SessionManager_clearStorage___self' => 
    array (
      2 => 'keep_login_as_customer_session_data',
    ),
    'Magento\\Customer\\Model\\Session_start___self' => 
    array (
      1 => 
      array (
        0 => 'session_checker',
      ),
    ),
    'Magento\\Customer\\Model\\Session_clearStorage___self' => 
    array (
      2 => 'keep_login_as_customer_session_data',
    ),
    'Magento\\Customer\\Model\\Session_regenerateId___self' => 
    array (
      2 => 'staging_preview_customer_session_id_change_bypass',
    ),
    'Magento\\Customer\\Model\\Session_destroy___self' => 
    array (
      2 => 'staging_preview_customer_session_id_change_bypass',
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
    'Magento\\Customer\\Model\\ResourceModel\\Customer_save_recollect_quote_on_customer_group_change' => 
    array (
      4 => 
      array (
        0 => 'cart_recollect_on_group_change',
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
    'Magento\\Customer\\Model\\AccountManagement_createAccountWithPasswordHash___self' => 
    array (
      4 => 
      array (
        0 => 'customerRegister',
      ),
    ),
    'Magento\\Customer\\Model\\AccountManagement_authenticate___self' => 
    array (
      2 => 'mpcustomerapproval_customer_authenticated',
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
        2 => 'customerGroupEdit',
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
    'Magento\\Customer\\Api\\GroupRepositoryInterface_save_invalidatePriceIndexerOnCustomerGroup' => 
    array (
      2 => 'customerGroupEdit',
    ),
    'Magento\\Customer\\Api\\GroupRepositoryInterface_delete___self' => 
    array (
      4 => 
      array (
        0 => 'customerGroupEdit',
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
    'Magento\\Indexer\\Model\\Indexer_isScheduled___self' => 
    array (
      4 => 
      array (
        0 => 'reindexRow',
      ),
    ),
    'Magento\\Indexer\\Model\\Config\\Data_get___self' => 
    array (
      4 => 
      array (
        0 => 'indexerCategoryFlatConfigGet',
        1 => 'indexerProductFlatConfigGet',
        2 => 'catalogPermissionsIndexerConfigGet',
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
    'Magento\\Backend\\Model\\Auth\\Session_start___self' => 
    array (
      1 => 
      array (
        0 => 'session_checker',
      ),
    ),
    'Magento\\Backend\\Model\\Auth\\Session_clearStorage___self' => 
    array (
      2 => 'keep_login_as_customer_session_data',
    ),
    'Magento\\Backend\\Model\\Auth\\Session_prolong___self' => 
    array (
      2 => 'admin_adobe_ims_backend_auth_session',
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
    'Magento\\Framework\\Amqp\\Bulk\\Exchange_enqueue___self' => 
    array (
      1 => 
      array (
        0 => 'amqpStoreIdFieldForAmqpBulkExchange',
      ),
    ),
    'Magento\\AsynchronousOperations\\Model\\MassConsumerEnvelopeCallback_execute___self' => 
    array (
      2 => 'amqpStoreIdFieldForAsynchronousOperationsMassConsumerEnvelopeCallback',
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
    'Magento\\Config\\Model\\Config_save___self' => 
    array (
      2 => 'configPermissionChange',
    ),
    'Magento\\Authorization\\Model\\Role_save___self' => 
    array (
      4 => 
      array (
        0 => 'updateRoleUsersAcl',
      ),
    ),
    'Magento\\Framework\\Data\\Collection\\AbstractDb_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\Collection\\AbstractCollection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\AbstractCollection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page\\Grid\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page\\Grid\\Collection_getItems___self' => 
    array (
      1 => 
      array (
        0 => 'setStagingFlagCmsPageUpdate',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Block\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Block\\Grid\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Block\\Grid\\Collection_getItems___self' => 
    array (
      1 => 
      array (
        0 => 'setStagingFlagCmsBlockUpdate',
      ),
    ),
    'Magento\\Cms\\Ui\\Component\\DataProvider_getSearchResult___self' => 
    array (
      1 => 
      array (
        0 => 'filterCmsPageAndBlockUpdate',
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
        3 => 'add_bundle_child_identities',
      ),
    ),
    'Magento\\Catalog\\Model\\Product_save___self' => 
    array (
      4 => 
      array (
        0 => 'catalogPermissionsProductChange',
      ),
    ),
    'Magento\\Catalog\\Model\\Product_delete___self' => 
    array (
      4 => 
      array (
        0 => 'catalogPermissionsProductChange',
      ),
    ),
    'Magento\\Catalog\\Model\\Product_getMediaAttributes___self' => 
    array (
      4 => 
      array (
        0 => 'exclude_swatch_attribute',
      ),
    ),
    'Magento\\Catalog\\Model\\Product_isAvailable___self' => 
    array (
      4 => 
      array (
        0 => 'availabilityStaging',
      ),
    ),
    'Magento\\Cms\\Model\\PageRepository\\ValidationComposite_save___self' => 
    array (
      1 => 
      array (
        0 => 'cms_validate_url_plugin',
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
    'Magento\\Catalog\\Model\\Category\\DataProvider_getData___self' => 
    array (
      4 => 
      array (
        0 => 'catalogCategoryDataProviderTrimData',
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
        1 => 'catalog_permissions_topmenu',
      ),
    ),
    'Magento\\Theme\\Block\\Html\\Topmenu_toHtml___self' => 
    array (
      1 => 
      array (
        0 => 'catalogPermissionsCachingTopmenu',
      ),
    ),
    'Magento\\Framework\\Mview\\View\\StateInterface_setStatus___self' => 
    array (
      4 => 
      array (
        0 => 'setStatusForMview',
        1 => 'catalogPermissionsIndexerSetStatusForMview',
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
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Collection_load___self' => 
    array (
      1 => 
      array (
        0 => 'joinProductsWhenFlatEnabled',
        1 => 'add_stock_information',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Collection_joinAttribute___self' => 
    array (
      1 => 
      array (
        0 => 'joinAttribute',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Website_delete___self' => 
    array (
      4 => 
      array (
        0 => 'invalidatePriceIndexerOnWebsite',
        1 => 'categoryProductWebsiteAfterDelete',
        2 => 'delete_website_to_stock_link',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Website_save___self' => 
    array (
      4 => 
      array (
        0 => 'invalidatePriceIndexerOnWebsite',
        1 => 'assign_website_to_default_stock',
      ),
      2 => 'update_sales_channel_website_code',
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
        5 => 'catalogPermissionsIndexerStoreView',
      ),
      1 => 
      array (
        0 => 'invalidateTargetRuleOnStoreViewChange',
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
        5 => 'catalogPermissionsIndexerStoreGroup',
      ),
      1 => 
      array (
        0 => 'invalidateTargetRuleOnStoreGroupChange',
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
    'Magento\\Eav\\Model\\Entity\\Attribute\\Set_delete___self' => 
    array (
      4 => 
      array (
        0 => 'invalidateTargetRuleOnDeleteAttributeSet',
      ),
    ),
    'Magento\\Catalog\\Helper\\Product\\Flat\\Indexer_getFlatColumnsDdlDefinition___self' => 
    array (
      4 => 
      array (
        0 => 'addRowIdToFlatDefinition',
      ),
    ),
    'Magento\\Catalog\\Helper\\Product\\Flat\\Indexer_getFlatIndexes___self' => 
    array (
      4 => 
      array (
        0 => 'addRowIdToIndex',
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
    'Magento\\Sales\\Api\\OrderItemRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'get_gift_message',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Collection\\ProductLimitation_isUsingPriceIndex___self' => 
    array (
      4 => 
      array (
        0 => 'isUsingPriceIndex',
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
        1 => 'append_gift_card_data_to_order',
        2 => 'gift_registry_item_from_quote_item',
        3 => 'gift_message_quote_item_conversion',
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
        0 => 'configurableProductSaveOptions',
      ),
      4 => 
      array (
        0 => 'configurableProductSaveOptions',
      ),
    ),
    'Magento\\Framework\\View\\Model\\Layout\\Merge_validateUpdate___self' => 
    array (
      1 => 
      array (
        0 => 'layout-merge-plugin',
      ),
    ),
    'Magento\\Framework\\View\\Model\\Layout\\Merge_getDbUpdateString___self' => 
    array (
      2 => 'widget-layout-update-plugin',
    ),
    'Magento\\Framework\\App\\Action\\AbstractAction_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
        6 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Framework\\App\\Action\\AbstractAction_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Framework\\App\\Action\\Action_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
        6 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Framework\\App\\Action\\Action_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Backend\\App\\AbstractAction_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
        6 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Backend\\App\\AbstractAction_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
        6 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth\\Forgotpassword_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'admin_forgot_password_plugin',
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth\\Forgotpassword_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\User\\Controller\\Adminhtml\\Auth\\Forgotpassword_execute_admin_forgot_password_plugin' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Captcha\\Observer\\CheckUserLoginBackendObserver_execute___self' => 
    array (
      2 => 'captcha_check_user_login_backend_observer_plugin',
    ),
    'Magento\\Captcha\\Observer\\ResetAttemptForBackendObserver_execute___self' => 
    array (
      2 => 'captcha_reset_attempt_for_backend_observer_plugin',
    ),
    'Magento\\Backend\\Model\\Auth_login___self' => 
    array (
      2 => 'disable_admin_login_auth',
    ),
    'Magento\\Backend\\Model\\Auth_logout___self' => 
    array (
      1 => 
      array (
        0 => 'login_as_customer_admin_logout',
      ),
    ),
    'Magento\\Integration\\Model\\AdminTokenService_createAdminAccessToken___self' => 
    array (
      2 => 'admin_adobe_ims_admin_token_plugin',
    ),
    'Magento\\Quote\\Api\\CartRepositoryInterface_save___self' => 
    array (
      4 => 
      array (
        0 => 'save_fake_quota_in_preview',
      ),
      1 => 
      array (
        0 => 'remove_in_store_pickup_data',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository_save___self' => 
    array (
      4 => 
      array (
        0 => 'save_fake_quota_in_preview',
      ),
      1 => 
      array (
        0 => 'remove_in_store_pickup_data',
        1 => 'multishipping_quote_repository',
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
    'Magento\\Quote\\Model\\Quote\\Address_exportCustomerAddress___self' => 
    array (
      4 => 
      array (
        0 => 'convertQuoteAddressToCustomerAddress',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address_afterSave___self' => 
    array (
      4 => 
      array (
        0 => 'manage_assignment_of_pickup_location_to_quote_address',
      ),
    ),
    'Magento\\Quote\\Model\\ResourceModel\\Quote\\Address_load___self' => 
    array (
      4 => 
      array (
        0 => 'load_pickup_location_for_quote_address',
      ),
    ),
    'Magento\\Quote\\Model\\ResourceModel\\Quote_subtractProductFromQuotes___self' => 
    array (
      2 => 'substract_product_from_quotes',
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
        1 => 'update_quote_items_after_product_save',
      ),
      2 => 'catalogsearchFulltextProduct',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product_delete___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
        1 => 'clean_quote_items_after_product_delete',
      ),
      2 => 'catalogsearchFulltextProduct',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product_save_catalogsearchFulltextProduct' => 
    array (
      4 => 
      array (
        0 => 'update_quote_items_after_giftcard_product_save',
        1 => 'process_source_items_after_product_save',
        2 => 'process_reservations_after_product_save',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product_delete_catalogsearchFulltextProduct' => 
    array (
      4 => 
      array (
        0 => 'delete_source_items',
        1 => 'delete_reservations',
      ),
    ),
    'Magento\\Catalog\\Api\\TierPriceStorageInterface_update___self' => 
    array (
      4 => 
      array (
        0 => 'update_quote_items_after_tier_prices_update',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Action_updateAttributes___self' => 
    array (
      4 => 
      array (
        0 => 'quoteProductMassChange',
        1 => 'ReindexUpdatedProducts',
        2 => 'catalogsearchFulltextMassAction',
        3 => 'catalogPermissionsProductMassChange',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Action_updateWebsites___self' => 
    array (
      4 => 
      array (
        0 => 'catalogsearchFulltextMassAction',
        1 => 'update_url_rewrites_after_websites_update_plugin',
        2 => 'catalogPermissionsProductMassChange',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\View_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
        6 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\View_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Creditmemo_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
        6 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Creditmemo_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Creditmemo_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'redirect_creditmemo',
    ),
    'Magento\\Sales\\Controller\\Order\\Creditmemo_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'authentication',
        2 => 'contextPlugin',
        3 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Creditmemo_execute_redirect_creditmemo' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\History_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
        6 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\History_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'authentication',
        2 => 'contextPlugin',
        3 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Invoice_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
        6 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Invoice_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Invoice_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'redirect_invoice',
    ),
    'Magento\\Sales\\Controller\\Order\\Invoice_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'authentication',
        2 => 'contextPlugin',
        3 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Invoice_execute_redirect_invoice' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintAction_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
        6 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintAction_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintAction_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'redirect_print',
    ),
    'Magento\\Sales\\Controller\\Order\\PrintAction_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'authentication',
        2 => 'contextPlugin',
        3 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintAction_execute_redirect_print' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintCreditmemo_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
        6 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintCreditmemo_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintCreditmemo_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'redirect_print_creditmemo',
    ),
    'Magento\\Sales\\Controller\\Order\\PrintCreditmemo_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'authentication',
        2 => 'contextPlugin',
        3 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintCreditmemo_execute_redirect_print_creditmemo' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintInvoice_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
        6 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintInvoice_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintInvoice_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'redirect_print_invoice',
    ),
    'Magento\\Sales\\Controller\\Order\\PrintInvoice_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'authentication',
        2 => 'contextPlugin',
        3 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintInvoice_execute_redirect_print_invoice' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintShipment_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
        6 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintShipment_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintShipment_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'redirect_print_shipment',
    ),
    'Magento\\Sales\\Controller\\Order\\PrintShipment_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'authentication',
        2 => 'contextPlugin',
        3 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintShipment_execute_redirect_print_shipment' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Reorder_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
        6 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Reorder_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Reorder_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'redirect_reorder',
    ),
    'Magento\\Sales\\Controller\\Order\\Reorder_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'authentication',
        2 => 'contextPlugin',
        3 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Reorder_execute_redirect_reorder' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Shipment_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
        6 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Shipment_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Shipment_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'redirect_shipment',
    ),
    'Magento\\Sales\\Controller\\Order\\Shipment_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'authentication',
        2 => 'contextPlugin',
        3 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Shipment_execute_redirect_shipment' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\View_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'redirect_view_order',
    ),
    'Magento\\Sales\\Controller\\Order\\View_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'authentication',
        2 => 'contextPlugin',
        3 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\View_execute_redirect_view_order' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Shipment_save___self' => 
    array (
      4 => 
      array (
        0 => 'SaveSourceForShipment',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Shipment_load___self' => 
    array (
      4 => 
      array (
        0 => 'LoadSourceForShipment',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Shipment_delete___self' => 
    array (
      4 => 
      array (
        0 => 'DeleteSourceForShipment',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Creditmemo_save___self' => 
    array (
      1 => 
      array (
        0 => 'refundRewardPoints',
      ),
      4 => 
      array (
        0 => 'refundRewardPoints',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Handler\\Address_process___self' => 
    array (
      4 => 
      array (
        0 => 'addressUpdate',
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
      1 => 
      array (
        0 => 'giftCardOpenAmount',
      ),
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
    'Magento\\Catalog\\Model\\Product\\Type\\AbstractType_isPossibleBuyFromList___self' => 
    array (
      4 => 
      array (
        0 => 'add_to_cart_single_option',
      ),
    ),
    'Magento\\Bundle\\Model\\Product\\Type_isPossibleBuyFromList___self' => 
    array (
      4 => 
      array (
        0 => 'add_to_cart_single_option',
      ),
    ),
    'Magento\\Bundle\\Model\\Product\\Type_isSalable___self' => 
    array (
      2 => 'adapt_is_product_salable',
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
    'Magento\\CatalogImportExport\\Model\\StockItemImporterInterface_import___self' => 
    array (
      4 => 
      array (
        0 => 'update_grouped_product_stock_status_plugin',
        1 => 'importStockItemDataForSourceItem',
        2 => 'updateConfigurableProductsStockItemStatusInventory',
        3 => 'update_bundle_products_stock_item_status_single_source_only',
      ),
    ),
    'Magento\\BundleImportExport\\Model\\Import\\Product\\Type\\Bundle\\RelationsDataSaver_saveOptions___self' => 
    array (
      1 => 
      array (
        0 => 'sequence_application',
      ),
    ),
    'Magento\\BundleImportExport\\Model\\Import\\Product\\Type\\Bundle\\RelationsDataSaver_saveSelections___self' => 
    array (
      1 => 
      array (
        0 => 'sequence_application',
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
    'Magento\\Catalog\\Block\\Product\\View_getIdentities___self' => 
    array (
      4 => 
      array (
        0 => 'update_identities_plugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View_canEmailToFriend___self' => 
    array (
      4 => 
      array (
        0 => 'catalogProductViewCanEmailToFriend',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Configuration_isShowOutOfStock___self' => 
    array (
      2 => 'out_of_stock_plugin',
    ),
    'Magento\\Backend\\App\\Action_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
        6 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Backend\\App\\Action_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
        6 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
        6 => 'customer-app-action-executeController-context-plugin',
      ),
      4 => 
      array (
        0 => 'inventoryUpdate',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Provider\\Query\\IdListBuilder_build___self' => 
    array (
      1 => 
      array (
        0 => 'process_archive_entities',
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
        6 => 'targetRuleImportInvalidate',
        7 => 'catalogPermissionImport',
      ),
    ),
    'Magento\\CatalogImportExport\\Model\\Import\\Product_saveProductEntity___self' => 
    array (
      1 => 
      array (
        0 => 'staging-import-products',
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
        0 => 'stockedProductFilterByInventoryStockPlugin',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Advanced\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Advanced\\Collection_load___self' => 
    array (
      1 => 
      array (
        0 => 'joinProductsWhenFlatEnabled',
        1 => 'add_stock_information',
        2 => 'add_catalog_permissions_information',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Advanced\\Collection_joinAttribute___self' => 
    array (
      1 => 
      array (
        0 => 'joinAttribute',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\Collection_load___self' => 
    array (
      1 => 
      array (
        0 => 'joinProductsWhenFlatEnabled',
        1 => 'add_stock_information',
        2 => 'loadPreview',
        3 => 'add_catalog_permissions_information',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\Collection_joinAttribute___self' => 
    array (
      1 => 
      array (
        0 => 'joinAttribute',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\Collection_getFacetedData___self' => 
    array (
      4 => 
      array (
        0 => 'can_show_price_in_layered_navigation_plugin',
      ),
      1 => 
      array (
        0 => 'add_catalog_permissions_information',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'add_catalog_permissions_information',
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
    'Magento\\Quote\\Model\\Quote\\Address\\ToOrderAddress_convert___self' => 
    array (
      4 => 
      array (
        0 => 'convertQuoteAddressToOrderAddress',
        1 => 'gift_registry_quote_address_to_order_address',
      ),
    ),
    'Magento\\Customer\\Block\\Widget\\Name_getPrefixOptions___self' => 
    array (
      2 => 'formatPrefixSuffixOptions',
    ),
    'Magento\\Customer\\Block\\Widget\\Name_getSuffixOptions___self' => 
    array (
      2 => 'formatPrefixSuffixOptions',
    ),
    'Magento\\Customer\\Model\\Address_updateData___self' => 
    array (
      1 => 
      array (
        0 => 'updateDataCustomerAddress',
      ),
    ),
    'Magento\\CustomAttributeManagement\\Block\\Form_getAttributeHtml___self' => 
    array (
      1 => 
      array (
        0 => 'set_customer_custom_attribute_for_company',
      ),
    ),
    'Magento\\Checkout\\Api\\PaymentInformationManagementInterface_savePaymentInformation___self' => 
    array (
      1 => 
      array (
        0 => 'process_billing_custom_customer_attributes',
        1 => 'ProcessPaymentVaultInformationManagement',
      ),
    ),
    'Magento\\Checkout\\Api\\PaymentInformationManagementInterface_savePaymentInformationAndPlaceOrder___self' => 
    array (
      1 => 
      array (
        0 => 'validate-agreements',
        1 => 'disable-place-order',
      ),
    ),
    'Magento\\Checkout\\Api\\ShippingInformationManagementInterface_saveAddressInformation___self' => 
    array (
      1 => 
      array (
        0 => 'process_shipping_custom_customer_attributes',
        1 => 'gift_registry_save_address',
      ),
    ),
    'Magento\\Checkout\\Api\\GuestPaymentInformationManagementInterface_savePaymentInformation___self' => 
    array (
      1 => 
      array (
        0 => 'process_billing_custom_guest_attributes',
      ),
    ),
    'Magento\\Checkout\\Api\\GuestPaymentInformationManagementInterface_savePaymentInformationAndPlaceOrder___self' => 
    array (
      1 => 
      array (
        0 => 'validate-guest-agreements',
        1 => 'disable-guest-place-order',
      ),
    ),
    'Magento\\Checkout\\Api\\GuestShippingInformationManagementInterface_saveAddressInformation___self' => 
    array (
      1 => 
      array (
        0 => 'process_shipping_custom_guest_attributes',
      ),
    ),
    'Magento\\Rule\\Model\\ResourceModel\\Rule\\Collection\\AbstractCollection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\SalesRule\\Model\\ResourceModel\\Rule\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\SalesRule\\Model\\ResourceModel\\Rule\\Collection_setValidationFilter___self' => 
    array (
      1 => 
      array (
        0 => 'beforeSetValidationFilter',
      ),
      2 => 'aroundSetValidationFilter',
    ),
    'Magento\\Quote\\Model\\Quote\\Config_getProductAttributes___self' => 
    array (
      4 => 
      array (
        0 => 'append_sales_rule_keys_to_quote',
      ),
    ),
    'Magento\\SalesRule\\Model\\Rule\\Condition\\Product_validate___self' => 
    array (
      1 => 
      array (
        0 => 'apply_rule_on_configurable_children',
      ),
    ),
    'Magento\\Quote\\Model\\Cart\\CartTotalRepository_get___self' => 
    array (
      4 => 
      array (
        0 => 'coupon_label_plugin',
        1 => 'multishipping_shipping_addresses',
        2 => 'rewardTotal',
      ),
    ),
    'Magento\\Sales\\Api\\OrderManagementInterface_place___self' => 
    array (
      2 => 'inventory_reservations_placement',
    ),
    'Magento\\Sales\\Api\\OrderManagementInterface_place_inventory_reservations_placement' => 
    array (
      4 => 
      array (
        0 => 'reset_payment_attempts_after_order_is_placed_plugin',
      ),
    ),
    'Magento\\Sales\\Model\\Service\\OrderService_place___self' => 
    array (
      2 => 'inventory_reservations_placement',
    ),
    'Magento\\Sales\\Model\\Service\\OrderService_place_inventory_reservations_placement' => 
    array (
      4 => 
      array (
        0 => 'reset_payment_attempts_after_order_is_placed_plugin',
      ),
    ),
    'Magento\\Sales\\Model\\Service\\OrderService_cancel___self' => 
    array (
      4 => 
      array (
        0 => 'coupon_uses_decrement_plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Ajax\\Login_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
        6 => 'customer-app-action-executeController-context-plugin',
      ),
      2 => 'captcha_validation',
    ),
    'Magento\\Customer\\Controller\\Ajax\\Login_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Checkout\\Block\\Cart\\Sidebar_getConfig___self' => 
    array (
      4 => 
      array (
        0 => 'addAgreementsToMinicartConfig',
        1 => 'customer_cart',
        2 => 'login_captcha',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\CartConfiguration_isProductConfigured___self' => 
    array (
      2 => 'Downloadable',
    ),
    'Magento\\Catalog\\Model\\Product\\CartConfiguration_isProductConfigured_Downloadable' => 
    array (
      2 => 'GiftCard',
    ),
    'Magento\\Catalog\\Model\\Product\\CartConfiguration_isProductConfigured_GiftCard' => 
    array (
      2 => 'isProductConfigured',
    ),
    'Magento\\Catalog\\Model\\Product\\CartConfiguration_isProductConfigured_isProductConfigured' => 
    array (
      2 => 'configurable_product',
    ),
    'Magento\\Webapi\\Controller\\Rest_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'staging_preview_permissions_check',
      ),
      2 => 'front-controller-builtin-cache',
    ),
    'Magento\\Webapi\\Controller\\Rest_dispatch_front-controller-builtin-cache' => 
    array (
      4 => 
      array (
        0 => 'front-controller-varnish-cache',
      ),
      1 => 
      array (
        0 => 'page_cache_form_key_from_cookie',
        1 => 'beforeRestDispatch',
        2 => 'webapiContorllerRestAsync',
        3 => 'configHash',
      ),
    ),
    'Magento\\PageCache\\Model\\Config_isEnabled___self' => 
    array (
      4 => 
      array (
        0 => 'staging_pagecache_bypass',
        1 => 'login-as-customer-disable-page-cache',
      ),
    ),
    'Magento\\Store\\Model\\BaseUrlChecker_isEnabled___self' => 
    array (
      4 => 
      array (
        0 => 'staging_store_baseurl_check_bypass',
      ),
    ),
    'Magento\\Store\\Controller\\Store\\SwitchAction_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'staging_preview_store_switch_fixing',
    ),
    'Magento\\Store\\Controller\\Store\\SwitchAction_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Store\\Controller\\Store\\SwitchAction_execute_staging_preview_store_switch_fixing' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Wishlist\\Block\\Catalog\\Product\\View\\AddTo\\Wishlist_getImage___self' => 
    array (
      1 => 
      array (
        0 => 'add_product_object_to_image_data_array',
      ),
    ),
    'Magento\\Wishlist\\Block\\Catalog\\Product\\View\\AddTo\\Wishlist_getQuantityValidators___self' => 
    array (
      4 => 
      array (
        0 => 'quantityValidators',
      ),
    ),
    'Magento\\Wishlist\\Block\\Catalog\\Product\\View\\AddTo\\Wishlist_getIdentities___self' => 
    array (
      4 => 
      array (
        0 => 'update_identities_plugin',
      ),
    ),
    'Magento\\Wishlist\\Block\\Catalog\\Product\\View\\AddTo\\Wishlist_canEmailToFriend___self' => 
    array (
      4 => 
      array (
        0 => 'catalogProductViewCanEmailToFriend',
      ),
    ),
    'Magento\\Wishlist\\Block\\Catalog\\Product\\View\\AddTo\\Wishlist_getWishlistOptions___self' => 
    array (
      4 => 
      array (
        0 => 'getWishlistOptions',
      ),
    ),
    'Magento\\Wishlist\\Block\\Item\\Configure_getWishlistOptions___self' => 
    array (
      4 => 
      array (
        0 => 'getWishlistOptions',
      ),
    ),
    'Magento\\GiftRegistry\\Helper\\Data_canAddToGiftRegistry___self' => 
    array (
      4 => 
      array (
        0 => 'getWishlistOptions',
      ),
    ),
    'Magento\\Wishlist\\Controller\\AbstractIndex_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
        6 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Wishlist\\Controller\\AbstractIndex_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
        3 => 'authentication',
      ),
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Listing\\DataProvider_getData___self' => 
    array (
      4 => 
      array (
        0 => 'wishlistSettingsDataProvider',
        1 => 'taxSettingsProvider',
        2 => 'weeeSettingsProvider',
      ),
    ),
    'Magento\\CatalogGraphQl\\Model\\Resolver\\Products\\DataProvider\\Product\\CompositeCollectionProcessor_process___self' => 
    array (
      4 => 
      array (
        0 => 'applyCategoryPermissionsOnProductProcessor',
      ),
    ),
    'Magento\\Framework\\View\\Asset\\MergeService_cleanMergedJsCss___self' => 
    array (
      4 => 
      array (
        0 => 'cleanMergedJsCss',
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
    'Magento\\Catalog\\Helper\\Product\\Configuration_getOptions___self' => 
    array (
      2 => 'grouped_options',
    ),
    'Magento\\Catalog\\Helper\\Product\\Configuration_getOptions_grouped_options' => 
    array (
      2 => 'configurable_product',
    ),
    'Magento\\Catalog\\Model\\Entity\\Product\\Attribute\\Group\\AttributeMapperInterface_map___self' => 
    array (
      2 => 'configurable_product',
    ),
    'Magento\\Catalog\\Model\\Product\\Type_getOptionArray___self' => 
    array (
      4 => 
      array (
        0 => 'configurable_output',
        1 => 'grouped_output',
      ),
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
    'Magento\\ConfigurableProduct\\Model\\Product\\Type\\Configurable_isPossibleBuyFromList___self' => 
    array (
      4 => 
      array (
        0 => 'add_to_cart_single_option',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\Product\\Type\\Configurable_getUsedProductCollection___self' => 
    array (
      4 => 
      array (
        0 => 'add_swatch_attributes_to_configurable',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\Product\\Type\\Configurable_getUsedProducts___self' => 
    array (
      2 => 'used_products_cache',
    ),
    'Magento\\ConfigurableProduct\\Model\\Product\\Type\\Configurable_getUsedProducts_used_products_cache' => 
    array (
      1 => 
      array (
        0 => 'used_products_website_filter',
      ),
      4 => 
      array (
        0 => 'is_option_salable',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Pricing\\Renderer\\SalableResolver_isSalable___self' => 
    array (
      4 => 
      array (
        0 => 'configurable',
      ),
    ),
    'Magento\\Tax\\Model\\Sales\\Total\\Quote\\CommonTaxCollector_mapItem___self' => 
    array (
      4 => 
      array (
        0 => 'apply_tax_class_id',
      ),
    ),
    'Magento\\Quote\\Model\\Quote_updateItem___self' => 
    array (
      4 => 
      array (
        0 => 'gift_registry_update_quote_item',
      ),
      2 => 'set_google_analytics_on_cart_add',
    ),
    'Magento\\Quote\\Model\\Quote_removeItem___self' => 
    array (
      4 => 
      array (
        0 => 'remove_store_credit_after_product_delete',
        1 => 'clear_addresses_after_product_delete',
        2 => 'delete_gift_wrapping_for_empty_quote',
        3 => 'set_google_analytics_on_cart_remove',
      ),
      1 => 
      array (
        0 => 'multishipping_reset_shipping_assigment',
      ),
    ),
    'Magento\\Quote\\Model\\Quote_collectTotals___self' => 
    array (
      2 => 'skip_collect_totals',
    ),
    'Magento\\Quote\\Model\\Quote_load___self' => 
    array (
      4 => 
      array (
        0 => 'gtmQuote',
      ),
    ),
    'Magento\\Quote\\Model\\Quote_updateItem_set_google_analytics_on_cart_add' => 
    array (
      2 => 'set_google_analytics_on_cart_remove',
    ),
    'Magento\\MediaGallerySynchronizationApi\\Model\\ImportFilesComposite_execute___self' => 
    array (
      1 => 
      array (
        0 => 'createMediaGalleryThumbnails',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address\\ToOrder_convert___self' => 
    array (
      1 => 
      array (
        0 => 'add_tax_to_order',
        1 => 'set_pickup_location_to_order_during_address_conversion',
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
        1 => 'giftCardAmountTotal',
        2 => 'gift_wrapping_total',
      ),
    ),
    'Magento\\Sales\\Api\\OrderRepositoryInterface_save___self' => 
    array (
      4 => 
      array (
        0 => 'save_order_tax',
        1 => 'save_gift_message',
        2 => 'save_pickup_location_for_order',
      ),
    ),
    'Magento\\Sales\\Api\\OrderRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'get_customer_balance',
        1 => 'gift_card_account',
        2 => 'get_gift_message',
        3 => 'get_order_gift_wrapping',
        4 => 'get_order_item_gift_wrapping',
        5 => 'get_pickup_location_for_order',
        6 => 'rewardCreditmemoUpdater',
      ),
    ),
    'Magento\\Sales\\Api\\OrderRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'get_customer_balance',
        1 => 'gift_card_account',
        2 => 'get_gift_message',
        3 => 'get_order_gift_wrapping',
        4 => 'get_order_item_gift_wrapping',
        5 => 'rewardCreditmemoUpdater',
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
        0 => 'joinProductsWhenFlatEnabled',
        1 => 'add_stock_information',
        2 => 'catalogRulePriceForConfigurableProduct',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\ResourceModel\\Product\\Type\\Configurable\\Product\\Collection_joinAttribute___self' => 
    array (
      1 => 
      array (
        0 => 'joinAttribute',
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
    'Magento\\Config\\Model\\Config\\Structure\\Converter_convert___self' => 
    array (
      4 => 
      array (
        0 => 'cron_backend_config_structure_converter_plugin',
      ),
    ),
    'Magento\\Framework\\App\\RouterInterface_match___self' => 
    array (
      4 => 
      array (
        0 => 'csp_aware_plugin',
      ),
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
    'Magento\\Quote\\Model\\Quote\\TotalsCollector_collect___self' => 
    array (
      1 => 
      array (
        0 => 'quoteCustomerSegmentUpdater',
        1 => 'quoteGiftCardAmountUpdater',
        2 => 'quoteRewardAmountUpdater',
      ),
      4 => 
      array (
        0 => 'in-store-pickup-set-shipping-description',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\TotalsCollector_collectQuoteTotals___self' => 
    array (
      1 => 
      array (
        0 => 'quoteGiftCardAmountUpdater',
      ),
    ),
    'Magento\\Sales\\Api\\InvoiceRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'get_customer_balance',
        1 => 'gift_card_account',
        2 => 'get_invoice_gift_wrapping',
      ),
    ),
    'Magento\\Sales\\Api\\InvoiceRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'get_customer_balance',
        1 => 'gift_card_account',
        2 => 'get_invoice_gift_wrapping',
      ),
    ),
    'Magento\\Sales\\Api\\InvoiceRepositoryInterface_save___self' => 
    array (
      1 => 
      array (
        0 => 'get_customer_balance',
        1 => 'gift_card_account',
      ),
    ),
    'Magento\\Sales\\Api\\CreditmemoRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'get_customer_balance',
        1 => 'gift_card_account',
        2 => 'get_credit_memo_gift_wrapping',
      ),
    ),
    'Magento\\Sales\\Api\\CreditmemoRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'get_customer_balance',
        1 => 'gift_card_account',
        2 => 'get_credit_memo_gift_wrapping',
      ),
    ),
    'Magento\\Sales\\Api\\CreditmemoRepositoryInterface_save___self' => 
    array (
      4 => 
      array (
        0 => 'gift_card_account',
      ),
      2 => 'deduct_source_item_quantity_on_refund',
    ),
    'Magento\\Sales\\Model\\Order_canCreditmemo___self' => 
    array (
      4 => 
      array (
        0 => 'can_creditmemo_with_store_credit',
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
        0 => 'front-order-placement-comment',
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
    'Magento\\Catalog\\Model\\Category_delete___self' => 
    array (
      4 => 
      array (
        0 => 'targetRuleCategoryInvalidate',
      ),
    ),
    'Magento\\Catalog\\Model\\Category_save___self' => 
    array (
      4 => 
      array (
        0 => 'targetRuleCategoryInvalidate',
        1 => 'categoryChange',
      ),
    ),
    'Magento\\Catalog\\Model\\Category_move___self' => 
    array (
      2 => 'categoryChange',
    ),
    'Magento\\Catalog\\Model\\Category_getCustomDesignDate___self' => 
    array (
      4 => 
      array (
        0 => 'catalogStagingCategoryPlugin',
      ),
    ),
    'Magento\\CustomerSegment\\Model\\Segment_delete___self' => 
    array (
      4 => 
      array (
        0 => 'targetRuleCustomerSegmentInvalidate',
      ),
    ),
    'Magento\\CustomerSegment\\Model\\Segment_save___self' => 
    array (
      4 => 
      array (
        0 => 'targetRuleCustomerSegmentInvalidate',
      ),
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
    'Magento\\CatalogGraphQl\\DataProvider\\Product\\SearchCriteriaBuilder_build___self' => 
    array (
      4 => 
      array (
        0 => 'product_search_criteria_filter',
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
      2 => 'magePalGmailSmtpAppTransportInterface',
    ),
    'Magento\\Email\\Model\\AbstractTemplate_getUrl___self' => 
    array (
      1 => 
      array (
        0 => 'EmailTemplateLinkUrl',
      ),
    ),
    'Magento\\Theme\\Model\\Favicon\\Favicon_getDefaultFavicon___self' => 
    array (
      4 => 
      array (
        0 => 'enterprise_favicon',
      ),
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
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Create_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
        6 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Create_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Create\\Index_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
        6 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Create\\Index_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Edit\\Index_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
        6 => 'customer-app-action-executeController-context-plugin',
        7 => 'order_edit',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Edit\\Index_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Layer\\FilterList_getFilters___self' => 
    array (
      4 => 
      array (
        0 => 'catalogPermissionsFilterListRemovePrice',
      ),
    ),
    'Magento\\Framework\\Pricing\\Render\\PriceBox_getCacheKey___self' => 
    array (
      4 => 
      array (
        0 => 'can_show_price_plugin',
        1 => 'price_box_staging_plugin',
        2 => 'catalog_price_box_key',
      ),
    ),
    'Magento\\Backend\\Block\\Dashboard\\Orders\\Grid_setCollection___self' => 
    array (
      1 => 
      array (
        0 => 'orders_grid_plugin',
      ),
    ),
    'Magento\\Sales\\Helper\\Guest_loadValidOrder___self' => 
    array (
      2 => 'redirect_guest_on_received_order',
    ),
    'Magento\\Sales\\Model\\OrderIncrementIdChecker_isIncrementIdUsed___self' => 
    array (
      4 => 
      array (
        0 => 'after_increment_id_check',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\OrderCustomerExtractor_extract___self' => 
    array (
      4 => 
      array (
        0 => 'after_extract',
      ),
    ),
    'Magento\\Payment\\Observer\\SalesOrderBeforeSaveObserver_execute___self' => 
    array (
      2 => 'skip_order_payment_verification',
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
    'Magento\\GroupedProduct\\Model\\Product\\Type\\Grouped_isPossibleBuyFromList___self' => 
    array (
      4 => 
      array (
        0 => 'add_to_cart_single_option',
      ),
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
    'Magento\\Framework\\App\\MaintenanceMode_set___self' => 
    array (
      4 => 
      array (
        0 => 'amqp_maintenance_mode',
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
    'Magento\\Catalog\\Api\\ProductCustomOptionRepositoryInterface_save___self' => 
    array (
      1 => 
      array (
        0 => 'isOptionExists',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Product\\Flat\\Table\\BuilderInterface_getTable___self' => 
    array (
      4 => 
      array (
        0 => 'addRowIdToFlat',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\AbstractFlatState_isAvailable___self' => 
    array (
      2 => 'staging_flat_bypass',
    ),
    'Magento\\Catalog\\Controller\\Category\\View_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
        6 => 'replaceIndex',
        7 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Category\\View_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Catalog\\Api\\CategoryRepositoryInterface_save___self' => 
    array (
      1 => 
      array (
        0 => 'DateRangeDesignUpdateCategorySavePlugin',
      ),
    ),
    'Magento\\Staging\\Model\\VersionManager_setCurrentVersionId___self' => 
    array (
      1 => 
      array (
        0 => 'catalogStagingVersionManager',
      ),
    ),
    'Magento\\Inventory\\Model\\ResourceModel\\IsProductAssignedToStock_execute___self' => 
    array (
      2 => 'cache_product_stock_assignment_check',
    ),
    'Magento\\AdvancedCheckout\\Model\\AreProductsSalableForRequestedQty_execute___self' => 
    array (
      2 => 'inventory_advanced_checkout_is_in_stock',
    ),
    'Magento\\BundleImportExport\\Model\\Import\\Product\\Type\\Bundle_prepareAttributesWithDefaultValueForSave___self' => 
    array (
      1 => 
      array (
        0 => 'process_shipment_type_plugin',
      ),
    ),
    'Magento\\InventoryConfigurationApi\\Model\\IsSourceItemManagementAllowedForProductTypeInterface_execute___self' => 
    array (
      2 => 'disable_bundle_type',
    ),
    'Magento\\InventoryConfigurationApi\\Model\\IsSourceItemManagementAllowedForProductTypeInterface_execute_disable_bundle_type' => 
    array (
      2 => 'disable_grouped_type',
    ),
    'Magento\\Bundle\\Model\\ResourceModel\\Selection\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Bundle\\Model\\ResourceModel\\Selection\\Collection_load___self' => 
    array (
      1 => 
      array (
        0 => 'joinProductsWhenFlatEnabled',
        1 => 'add_stock_information',
      ),
    ),
    'Magento\\Bundle\\Model\\ResourceModel\\Selection\\Collection_joinAttribute___self' => 
    array (
      1 => 
      array (
        0 => 'joinAttribute',
      ),
    ),
    'Magento\\Bundle\\Model\\ResourceModel\\Selection\\Collection_addQuantityFilter___self' => 
    array (
      2 => 'adapt_add_quantity_filter',
    ),
    'Magento\\Bundle\\Api\\ProductLinkManagementInterface_addChild___self' => 
    array (
      1 => 
      array (
        0 => 'validate_source_items_before_add_bundle_selection',
      ),
      4 => 
      array (
        0 => 'reindex_source_items_after_add_bundle_selection',
      ),
    ),
    'Magento\\Bundle\\Api\\ProductLinkManagementInterface_saveChild___self' => 
    array (
      1 => 
      array (
        0 => 'validate_source_items_before_save_bundle_selection',
      ),
      4 => 
      array (
        0 => 'reindex_source_items_after_save_bundle_selection',
      ),
    ),
    'Magento\\Bundle\\Api\\ProductLinkManagementInterface_removeChild___self' => 
    array (
      4 => 
      array (
        0 => 'reindex_source_items_after_remove_bundle_selection',
      ),
    ),
    'Magento\\CatalogInventory\\Helper\\Stock_assignStatusToProduct___self' => 
    array (
      1 => 
      array (
        0 => 'adapt_assign_stock_status_to_bundle_product',
        1 => 'adapt_assign_status_to_product',
        2 => 'adapt_assign_stock_status_to_configurable_product',
      ),
    ),
    'Magento\\CatalogInventory\\Helper\\Stock_addInStockFilterToCollection___self' => 
    array (
      2 => 'adapt_add_in_stock_filter_to_collection',
    ),
    'Magento\\CatalogInventory\\Helper\\Stock_addStockStatusToProducts___self' => 
    array (
      2 => 'adapt_add_stock_status_to_products',
    ),
    'Magento\\Inventory\\Model\\SourceItem\\Command\\DecrementSourceItemQty_execute___self' => 
    array (
      4 => 
      array (
        0 => 'synchronize_legacy_catalog_inventory_at_source_item_decrement_quantity',
        1 => 'update_parent_configurable_product_stock_status_in_legacy_stock',
        2 => 'reindex_after_decrement_source_item_quantity',
        3 => 'update_parent_bundle_product_stock_status_in_legacy_stock',
      ),
    ),
    'Magento\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync_executeFull___self' => 
    array (
      4 => 
      array (
        0 => 'bundle_product_index_full',
        1 => 'configurable_product_full_index',
        2 => 'grouped_product_index_full',
      ),
    ),
    'Magento\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync_executeList___self' => 
    array (
      4 => 
      array (
        0 => 'bundle_product_index_list',
        1 => 'update_product_prices_plugin',
        2 => 'configurable_product_index_list',
        3 => 'grouped_product_index_list',
      ),
      2 => 'invalidate_products_cache',
    ),
    'Magento\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync_executeList___self' => 
    array (
      4 => 
      array (
        0 => 'priceIndexUpdater',
        1 => 'grouped_product_index',
        2 => 'invalidate_products_cache',
      ),
      2 => 'fulltextIndexUpdater',
    ),
    'Magento\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync_executeRow___self' => 
    array (
      2 => 'fulltextIndexUpdater',
    ),
    'Magento\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync_executeList_fulltextIndexUpdater' => 
    array (
      4 => 
      array (
        0 => 'configurable_product_index',
      ),
      2 => 'bundle_product_index',
    ),
    'Magento\\InventoryApi\\Api\\StockRepositoryInterface_deleteById___self' => 
    array (
      1 => 
      array (
        0 => 'prevent_default_stock_deleting',
        1 => 'prevent_deleting_assigned_to_sales_channels_stock',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'load_sales_channels_on_get_list',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'load_sales_channels_on_get',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockRepositoryInterface_save___self' => 
    array (
      4 => 
      array (
        0 => 'save_sales_channels_links',
      ),
    ),
    'Magento\\InventoryApi\\Api\\SourceItemsSaveInterface_execute___self' => 
    array (
      4 => 
      array (
        0 => 'set_data_to_legacy_catalog_inventory_at_source_items_save',
        1 => 'reindex_after_source_items_save',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Indexer\\ProductPriceIndexFilter_modifyPrice___self' => 
    array (
      2 => 'change_select_for_price_modifier',
    ),
    'Magento\\InventoryApi\\Api\\SourceItemsDeleteInterface_execute___self' => 
    array (
      4 => 
      array (
        0 => 'set_to_zero_legacy_catalog_inventory_at_source_items_delete',
      ),
      2 => 'reindex_after_source_items_delete',
    ),
    'Magento\\InventoryApi\\Api\\SourceItemsDeleteInterface_execute_reindex_after_source_items_delete' => 
    array (
      4 => 
      array (
        0 => 'inventory_low_quantity_notification_source_item_delete',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\QtyCounterInterface_correctItemsQty___self' => 
    array (
      2 => 'update_source_item_at_legacy_qty_counter',
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\Stock\\Item_save___self' => 
    array (
      2 => 'update_source_item_at_legacy_stock_item_save',
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status_addStockDataToCollection___self' => 
    array (
      2 => 'adapt_add_stock_data_to_collection',
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status_addStockStatusToSelect___self' => 
    array (
      2 => 'adapt_add_stock_status_to_select',
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status_addIsInStockFilterToCollection___self' => 
    array (
      2 => 'adapt_add_is_in_stock_filter_to_collection',
    ),
    'Magento\\InventorySalesApi\\Api\\GetStockBySalesChannelInterface_execute___self' => 
    array (
      2 => 'adapt_stock_resolver_to_admin_website',
    ),
    'Magento\\InventoryApi\\Api\\StockSourceLinksDeleteInterface_execute___self' => 
    array (
      1 => 
      array (
        0 => 'prevent_delete_default_stock_links',
      ),
      4 => 
      array (
        0 => 'invalidate_after_stock_source_links_delete',
      ),
    ),
    'Magento\\Inventory\\Model\\SourceItem\\Command\\SourceItemsSaveWithoutLegacySynchronization_execute___self' => 
    array (
      4 => 
      array (
        0 => 'reindex_after_source_items_save',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockRegistryInterface_getStockStatus___self' => 
    array (
      4 => 
      array (
        0 => 'adapt_get_stock_status',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockRegistryInterface_getStockStatusBySku___self' => 
    array (
      4 => 
      array (
        0 => 'adapt_get_stock_status_by_sku',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockRegistryInterface_getProductStockStatus___self' => 
    array (
      2 => 'adapt_get_product_stock_status',
    ),
    'Magento\\CatalogInventory\\Api\\StockRegistryInterface_getProductStockStatusBySku___self' => 
    array (
      2 => 'adapt_get_product_stock_status_by_sku',
    ),
    'Magento\\CatalogInventory\\Api\\StockRegistryInterface_updateStockItemBySku___self' => 
    array (
      4 => 
      array (
        0 => 'adapt_update_product_stock_status_by_sku',
      ),
      1 => 
      array (
        0 => 'inventory_catalog_add_qty_to_legacy_stock',
        1 => 'inventory_catalog_add_qty_to_legacy_stock_configurable',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\StockDataFilter_filter___self' => 
    array (
      4 => 
      array (
        0 => 'allow_negative_min_qty',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\Data\\StockItemInterface_getMinQty___self' => 
    array (
      4 => 
      array (
        0 => 'adapt_min_qty_to_backorders',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Spi\\StockStateProviderInterface_verifyStock___self' => 
    array (
      4 => 
      array (
        0 => 'adapt_verify_stock_to_negative_min_qty',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\StockStatusFilterInterface_execute___self' => 
    array (
      2 => 'inventory_catalog_stock_status_filter',
    ),
    'Magento\\CatalogInventory\\Model\\Source\\Stock_addValueSortToCollection___self' => 
    array (
      2 => 'inventory_catalog_add_sort_by_stock_qty_to_collection',
    ),
    'Magento\\CatalogInventory\\Api\\StockStateInterface_checkQuoteItemQty___self' => 
    array (
      2 => 'check_quote_item_qty',
    ),
    'Magento\\CatalogInventory\\Api\\StockStateInterface_suggestQty___self' => 
    array (
      2 => 'suggest_qty',
    ),
    'Magento\\InventoryReservationsApi\\Model\\AppendReservationsInterface_execute___self' => 
    array (
      2 => 'prevent_append_reservation_on_not_manage_items_in_stock',
    ),
    'Magento\\CatalogInventory\\Api\\RegisterProductSaleInterface_registerProductsSale___self' => 
    array (
      2 => 'process_register_products_sale',
    ),
    'Magento\\CatalogInventory\\Model\\StockManagement_registerProductsSale___self' => 
    array (
      2 => 'process_register_products_sale',
    ),
    'Magento\\CatalogInventory\\Model\\StockManagement_backItemQty___self' => 
    array (
      2 => 'process_back_item_qty',
    ),
    'Magento\\CatalogInventory\\Model\\StockManagement_revertProductsSale___self' => 
    array (
      2 => 'process_revert_products_sale',
    ),
    'Magento\\SalesInventory\\Model\\Order\\ReturnProcessor_execute___self' => 
    array (
      2 => 'process_return_product_qty_on_credit_memo',
    ),
    'Magento\\InventoryConfigurationApi\\Api\\GetStockItemConfigurationInterface_execute___self' => 
    array (
      4 => 
      array (
        0 => 'load_stock_item_is_in_stock',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Action\\GetSearchableProductsSelect_execute___self' => 
    array (
      4 => 
      array (
        0 => 'stock_filters_by_child_products',
      ),
    ),
    'Magento\\InventorySalesApi\\Model\\GetSkuFromOrderItemInterface_execute___self' => 
    array (
      2 => 'get_configurable_option_sku_from_order',
    ),
    'Magento\\CatalogInventory\\Observer\\ParentItemProcessorInterface_process___self' => 
    array (
      2 => 'adapt_parent_stock_processor',
    ),
    'Magento\\CatalogInventory\\Model\\System\\Config\\Backend\\Minqty_save___self' => 
    array (
      4 => 
      array (
        0 => 'admin_system_config_media_gallery_renditions',
        1 => 'admin_system_config_adobe_stock_save_plugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\System\\Config\\Backend\\Minqty_afterSave___self' => 
    array (
      4 => 
      array (
        0 => 'webapiResourceSecurityCacheInvalidate',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\System\\Config\\Backend\\Minqty_beforeSave___self' => 
    array (
      2 => 'allow_negative_min_qty_in_config',
    ),
    'Magento\\InventoryConfiguration\\Model\\GetLegacyStockItem_execute___self' => 
    array (
      2 => 'cache_legacy_stock_item',
    ),
    'Magento\\InventoryConfiguration\\Model\\GetLegacyStockItem_execute_cache_legacy_stock_item' => 
    array (
      2 => 'inventory_catalog_get_legacy_stock_item_from_stock_registry',
    ),
    'Magento\\InventoryApi\\Api\\SourceRepositoryInterface_save___self' => 
    array (
      2 => 'invalidate_after_enabling_or_disabling_source',
    ),
    'Magento\\InventoryApi\\Api\\SourceRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'load_in_store_pickup_on_get_list',
      ),
    ),
    'Magento\\InventoryApi\\Api\\SourceRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'load_in_store_pickup_on_get',
      ),
    ),
    'Magento\\InventoryApi\\Api\\SourceRepositoryInterface_save_invalidate_after_enabling_or_disabling_source' => 
    array (
      1 => 
      array (
        0 => 'save_in_store_pickup_links',
        1 => 'updateSourceLatitudeAndLongitude',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockSourceLinksSaveInterface_execute___self' => 
    array (
      4 => 
      array (
        0 => 'invalidate_after_stock_source_links_save',
      ),
    ),
    'Magento\\InventorySales\\Model\\PlaceReservationsForSalesEvent_execute___self' => 
    array (
      4 => 
      array (
        0 => 'schedule_reservation_place',
      ),
    ),
    'Magento\\InventoryCatalog\\Model\\UpdateInventory_execute___self' => 
    array (
      4 => 
      array (
        0 => 'updateParentLegacyStockStatus',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Link_saveProductRelations___self' => 
    array (
      4 => 
      array (
        0 => 'process_source_items_after_save_links',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Link_getProductCollection___self' => 
    array (
      4 => 
      array (
        0 => 'isInStockFilter',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\VersionControl\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Quote\\Model\\ResourceModel\\Quote\\Address\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Quote\\Model\\ResourceModel\\Quote\\Address\\Collection_loadWithFilter___self' => 
    array (
      2 => 'add_pickup_location_to_quote_address',
    ),
    'Magento\\Quote\\Model\\ShippingAddressManagementInterface_assign___self' => 
    array (
      1 => 
      array (
        0 => 'shipping_address_management_replace_shipping_address',
      ),
    ),
    'Magento\\Quote\\Api\\BillingAddressManagementInterface_assign___self' => 
    array (
      1 => 
      array (
        0 => 'do_not_use_billing_address_for_shipping_for_in_store_pickup_quote',
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
    'Magento\\InventoryIndexer\\Model\\Queue\\UpdateIndexSalabilityStatus_execute___self' => 
    array (
      4 => 
      array (
        0 => 'invalidate_products_cache',
      ),
    ),
    'Magento\\InventoryCatalogApi\\Api\\BulkInventoryTransferInterface_execute___self' => 
    array (
      2 => 'inventory_low_quantity_bulk_transfer',
    ),
    'Magento\\InventoryCatalogApi\\Api\\BulkSourceAssignInterface_execute___self' => 
    array (
      4 => 
      array (
        0 => 'inventory_low_quantity_bulk_source_assign',
      ),
    ),
    'Magento\\InventoryCatalogApi\\Api\\BulkSourceUnassignInterface_execute___self' => 
    array (
      4 => 
      array (
        0 => 'inventory_low_quantity_bulk_source_unassign',
      ),
    ),
    'Magento\\InventoryLowQuantityNotificationApi\\Api\\SourceItemConfigurationsSaveInterface_execute___self' => 
    array (
      4 => 
      array (
        0 => 'update_legacy_stock_item_configuration_at_source_item_configuration_save',
      ),
    ),
    'Magento\\Inventory\\Model\\ResourceModel\\SourceItem\\DeleteMultiple_execute___self' => 
    array (
      4 => 
      array (
        0 => 'delete_source_items_configuration',
      ),
    ),
    'Magento\\ProductAlert\\Model\\ProductSalability_isSalable___self' => 
    array (
      2 => 'product_alert_adapt_salability',
    ),
    'Magento\\RequisitionList\\Model\\RequisitionListItem\\Validator\\Stock_validate___self' => 
    array (
      2 => 'magentoRequisitionListStockPlugin',
    ),
    'Magento\\CatalogInventory\\Block\\Stockqty\\AbstractStockqty_isMsgVisible___self' => 
    array (
      2 => 'magentoInventorySalesFrontendUiAbstractStockqty',
    ),
    'Magento\\CatalogInventory\\Block\\Stockqty\\AbstractStockqty_getStockQtyLeft___self' => 
    array (
      2 => 'magentoInventorySalesFrontendUiAbstractStockqty',
    ),
    'Magento\\Setup\\Model\\FixtureGenerator\\EntityGeneratorFactory_create___self' => 
    array (
      1 => 
      array (
        0 => 'update_custom_table_map',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\ShipmentFactory_create___self' => 
    array (
      4 => 
      array (
        0 => 'assign_source_code_to_shipment',
      ),
    ),
    'Magento\\Sales\\Api\\ShipmentRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'GetListShipmentRepository',
        1 => 'Helloworld\\ShipmentAttributes\\Plugin\\ShipmentRepositoryPlugin',
      ),
    ),
    'Magento\\Sales\\Api\\ShipmentRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'Helloworld\\ShipmentAttributes\\Plugin\\ShipmentRepositoryPlugin',
      ),
    ),
    'Magento\\VisualMerchandiser\\Model\\Resolver\\QuantityAndStock_joinStock___self' => 
    array (
      2 => 'magentoVisualMerchandiserResolverQuantityAndStockPlugin',
    ),
    'Magento\\VisualMerchandiser\\Model\\Sorting\\OutStockBottom_sort___self' => 
    array (
      2 => 'magentoVisualMerchandiserOutStockBottomSortingPlugin',
    ),
    'Magento\\Framework\\Api\\DataObjectHelper_populateWithArray___self' => 
    array (
      4 => 
      array (
        0 => 'add_allow_remote_shopping_assistance_to_customer',
      ),
    ),
    'Magento\\LoginAsCustomerApi\\Api\\AuthenticateCustomerBySecretInterface_execute___self' => 
    array (
      1 => 
      array (
        0 => 'process_shopping_cart',
      ),
      2 => 'log_authentication',
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
    'Magento\\Wishlist\\Model\\Rss\\Wishlist_getHeader___self' => 
    array (
      2 => 'aroundGetHeader',
    ),
    'Magento\\MultipleWishlist\\Controller\\AbstractIndex_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
        6 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\MultipleWishlist\\Controller\\AbstractIndex_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
        3 => 'authentication',
        4 => 'multiple_enabled_filter',
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
    'Magento\\Payment\\Model\\Method\\AbstractMethod_isAvailable___self' => 
    array (
      2 => 'paymentMethodIsAvailable',
    ),
    'Magento\\Payment\\Model\\Method\\Adapter_isAvailable___self' => 
    array (
      2 => 'paymentGatewayIsAvailable',
    ),
    'Magento\\Sales\\Api\\Data\\OrderPaymentInterface_getExtensionAttributes___self' => 
    array (
      4 => 
      array (
        0 => 'PaymentVaultExtensionAttributeOperations',
      ),
    ),
    'Magento\\Payment\\Model\\Checks\\Composite_isApplicable___self' => 
    array (
      4 => 
      array (
        0 => 'paypal_specification',
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
    'Magento\\Sales\\Model\\ResourceModel\\Collection\\ExpiredQuotesCollection_getExpiredQuotes___self' => 
    array (
      4 => 
      array (
        0 => 'cleanExpiredQuotesPlugin',
      ),
    ),
    'Magento\\Catalog\\Ui\\Component\\Listing\\Columns\\Price_prepare___self' => 
    array (
      2 => 'price-permission-grid-columns-plugin',
    ),
    'Magento\\Downloadable\\Model\\Link\\UpdateHandler_execute___self' => 
    array (
      1 => 
      array (
        0 => 'replaceDownloadableLinksIds',
      ),
    ),
    'Magento\\Downloadable\\Model\\Sample\\UpdateHandler_execute___self' => 
    array (
      1 => 
      array (
        0 => 'replaceDownloadableSamplesIds',
      ),
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
    'Magento\\ScheduledImportExport\\Model\\Scheduled\\Operation\\Data_getServerTypesOptionArray___self' => 
    array (
      4 => 
      array (
        0 => 'serverType',
      ),
    ),
    'Magento\\CustomerImportExport\\Model\\Import\\Customer_getValidColumnNames___self' => 
    array (
      4 => 
      array (
        0 => 'rewardAttributes',
      ),
    ),
    'Magento\\CustomerBalance\\Model\\Creditmemo\\Balance_save___self' => 
    array (
      1 => 
      array (
        0 => 'customerBalanceSave',
      ),
    ),
    'Magento\\SalesRule\\Model\\Rule_getFromDate___self' => 
    array (
      1 => 
      array (
        0 => 'salesRuleDateResolver',
      ),
    ),
    'Magento\\SalesRule\\Model\\Rule_getToDate___self' => 
    array (
      1 => 
      array (
        0 => 'salesRuleDateResolver',
      ),
    ),
    'Magento\\SalesRule\\Model\\Rule_beforeSave___self' => 
    array (
      1 => 
      array (
        0 => 'salesRuleBeforeBeforeSave',
      ),
    ),
    'Magento\\SalesRule\\Model\\Rule_save___self' => 
    array (
      2 => 'salesRuleAroundSave',
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View\\Tab\\History_getFullHistory___self' => 
    array (
      4 => 
      array (
        0 => 'sales-order-history-rma-plugin',
      ),
    ),
    'Magento\\Rma\\Model\\RmaRepository_get___self' => 
    array (
      4 => 
      array (
        0 => 'authorization',
      ),
    ),
    'Magento\\Sales\\Model\\RefundOrder_execute___self' => 
    array (
      4 => 
      array (
        0 => 'refundOrderAfter',
      ),
    ),
    'Magento\\Sales\\Model\\RefundInvoice_execute___self' => 
    array (
      4 => 
      array (
        0 => 'refundInvoiceAfter',
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
    'Magento\\CatalogRule\\Model\\Rule_getFromDate___self' => 
    array (
      1 => 
      array (
        0 => 'catalogRuleDateResolver',
      ),
    ),
    'Magento\\CatalogRule\\Model\\Rule_getToDate___self' => 
    array (
      1 => 
      array (
        0 => 'catalogRuleDateResolver',
      ),
    ),
    'Magento\\CatalogRule\\Observer\\ProcessFrontFinalPriceObserver_execute___self' => 
    array (
      2 => 'previewCatalogPriceRule',
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\ObjectRelationProcessor_delete___self' => 
    array (
      1 => 
      array (
        0 => 'object_constraints_resolver',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\ObjectRelationProcessor_validateDataIntegrity___self' => 
    array (
      1 => 
      array (
        0 => 'object_constraints_resolver',
      ),
    ),
    'Magento\\CatalogGraphQl\\Model\\Resolver\\Products_resolve___self' => 
    array (
      1 => 
      array (
        0 => 'graphql_recaptcha_validation',
        1 => 'catalog_search_permissions',
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
    'Magento\\Banner\\Block\\Widget\\Banner_getWidgetAttributes___self' => 
    array (
      4 => 
      array (
        0 => 'additional_attributes',
      ),
    ),
    'Magento\\Banner\\Block\\Widget\\Banner_toHtml___self' => 
    array (
      1 => 
      array (
        0 => 'gtmBannerBlockWidgetBanner',
      ),
    ),
    'Magento\\PageBuilder\\Model\\Stage\\Renderer\\CmsStaticBlock_render___self' => 
    array (
      4 => 
      array (
        0 => 'dynamic_block_filter',
      ),
    ),
    'Magento\\VersionsCms\\Model\\Hierarchy\\Node_collectTree___self' => 
    array (
      4 => 
      array (
        0 => 'versions-cms-reset-page-cache-after-nodes-save',
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
    'Magento\\Webapi\\Model\\Config\\Converter_convert___self' => 
    array (
      4 => 
      array (
        0 => 'webapiResourceSecurity',
      ),
    ),
    'Magento\\CatalogStaging\\Model\\Product\\Retriever_getEntity___self' => 
    array (
      4 => 
      array (
        0 => 'update_bundle_product_properties',
      ),
    ),
    'MagePal\\GmailSmtpApp\\Model\\Transport_sendMessage___self' => 
    array (
      1 => 
      array (
        0 => 'WindowsSmtpConfig',
      ),
      2 => 'EmailDisable',
    ),
    'MagePal\\GmailSmtpApp\\Model\\Transport_sendMessage_EmailDisable' => 
    array (
      2 => 'magePalGmailSmtpAppTransportInterface',
    ),
    'MagePal\\GmailSmtpApp\\Model\\Transport_sendMessage_magePalGmailSmtpAppTransportInterface' => 
    array (
      2 => 'magePalGmailSmtpAppTransport',
    ),
    'Magento\\Framework\\Mail\\Template\\TransportBuilder_setTemplateOptions___self' => 
    array (
      1 => 
      array (
        0 => 'magePalGmailSmtpAppTransportBuilder',
      ),
    ),
    'Magento\\Framework\\Mail\\Template\\TransportBuilderByStore_setFromByStore___self' => 
    array (
      1 => 
      array (
        0 => 'magePalGmailSmtpAppTransportBuilderByStore',
      ),
    ),
    'Magento\\Customer\\Model\\EmailNotification_newAccount___self' => 
    array (
      2 => 'mpcustomerapproval_disable_email_notification',
    ),
    'Magento\\Customer\\Controller\\AccountInterface_execute___self' => 
    array (
      2 => 'customer_account',
    ),
    'Magento\\Customer\\Controller\\AbstractAccount_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'customer_account',
    ),
    'Magento\\Customer\\Controller\\AbstractAccount_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\AbstractAccount_execute_customer_account' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\CreatePost_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'customer_account',
    ),
    'Magento\\Customer\\Controller\\Account\\CreatePost_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\CreatePost_execute_customer_account' => 
    array (
      4 => 
      array (
        0 => 'mpcustomerapproval_account_create_post',
      ),
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\Confirm_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'customer_account',
    ),
    'Magento\\Customer\\Controller\\Account\\Confirm_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\Confirm_execute_customer_account' => 
    array (
      4 => 
      array (
        0 => 'mpcustomerapproval_account_create_confirm',
      ),
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\LoginPost_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'customer_account',
    ),
    'Magento\\Customer\\Controller\\Account\\LoginPost_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\LoginPost_execute_customer_account' => 
    array (
      2 => 'mpcustomerapproval_account_login_post',
    ),
    'Magento\\Customer\\Controller\\Account\\LoginPost_execute_mpcustomerapproval_account_login_post' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Framework\\View\\Asset\\Minification_getExcludes___self' => 
    array (
      4 => 
      array (
        0 => 'braintreeExcludeFromMinification',
      ),
      2 => 'exclude-recaptcha-from-minification',
    ),
    'Magento\\Checkout\\CustomerData\\AbstractItem_getItemData___self' => 
    array (
      4 => 
      array (
        0 => 'braintreeAddFlagForVirtualProducts',
      ),
    ),
    'Magento\\Ui\\Component\\Wysiwyg\\ConfigInterface_getConfig___self' => 
    array (
      4 => 
      array (
        0 => 'solwin_cpanel_config',
      ),
    ),
    'Magento\\Framework\\Controller\\ResultInterface_renderResult___self' => 
    array (
      4 => 
      array (
        0 => 'result-messages',
        1 => 'result-builtin-cache',
        2 => 'result-varnish-cache',
      ),
    ),
    'Magento\\Framework\\Controller\\AbstractResult_renderResult___self' => 
    array (
      4 => 
      array (
        0 => 'result-messages',
        1 => 'result-builtin-cache',
        2 => 'result-varnish-cache',
      ),
    ),
    'Magento\\Framework\\View\\Result\\Layout_renderResult___self' => 
    array (
      4 => 
      array (
        0 => 'asyncCssLoad',
        1 => 'deferJsToFooter',
        2 => 'result-messages',
        3 => 'result-builtin-cache',
        4 => 'result-varnish-cache',
      ),
    ),
    'Magento\\Framework\\View\\Layout_generateElements___self' => 
    array (
      4 => 
      array (
        0 => 'layout-model-caching-unique-name',
        1 => 'core-session-depersonalize',
        2 => 'customer-session-depersonalize',
        3 => 'catalog-session-depersonalize',
        4 => 'persistent-session-depersonalize',
        5 => 'customer-segment-session-depersonalize',
        6 => 'checkout-session-depersonalize',
        7 => 'tax-session-depersonalize',
      ),
    ),
    'Magento\\Framework\\View\\Layout_getOutput___self' => 
    array (
      4 => 
      array (
        0 => 'layout-model-caching-unique-name',
      ),
    ),
    'Magento\\Framework\\View\\Layout_createBlock___self' => 
    array (
      4 => 
      array (
        0 => 'gtmLayout',
      ),
    ),
    'Magento\\Framework\\View\\Layout_generateXml___self' => 
    array (
      1 => 
      array (
        0 => 'customer-session-depersonalize',
        1 => 'customer-segment-session-depersonalize',
        2 => 'tax-session-depersonalize',
      ),
    ),
    'Magento\\Framework\\App\\ResourceConnection_getTableName___self' => 
    array (
      4 => 
      array (
        0 => 'get_catalog_category_product_index_table_name',
        1 => 'get_catalog_product_price_index_table_name',
      ),
    ),
    'Magento\\Store\\Api\\StoreCookieManagerInterface_setStoreCookie___self' => 
    array (
      4 => 
      array (
        0 => 'update_quote_store_after_switch_store_view',
      ),
    ),
    'Magento\\Checkout\\Block\\Checkout\\LayoutProcessor_process___self' => 
    array (
      1 => 
      array (
        0 => 'ProcessPaymentVaultConfiguration',
      ),
    ),
    'Magento\\Catalog\\ViewModel\\Product\\OptionsData_getOptionsData___self' => 
    array (
      4 => 
      array (
        0 => 'add_bundle_options_data',
      ),
    ),
    'Magento\\Catalog\\Helper\\Product_canShow___self' => 
    array (
      4 => 
      array (
        0 => 'dont_show_if_child_products_disabled',
      ),
    ),
    'Magento\\Ui\\Component\\Form\\AttributeMapper_map___self' => 
    array (
      4 => 
      array (
        0 => 'processCustomerCustomBooleanAttributeOptions',
      ),
    ),
    'Magento\\Catalog\\Helper\\Product\\View_prepareAndRender___self' => 
    array (
      1 => 
      array (
        0 => 'pre_render_product_options_from_wishlist',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\ResourceModel\\Attribute\\OptionSelectBuilderInterface_getSelect___self' => 
    array (
      4 => 
      array (
        0 => 'Magento_ConfigurableProduct_Plugin_Model_ResourceModel_Attribute_InStockOptionSelectBuilder',
        1 => 'option_select_website_filter',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Address_getName___self' => 
    array (
      4 => 
      array (
        0 => 'gift_registry_order_address_name',
      ),
    ),
    'Magento\\Checkout\\CustomerData\\Cart_getSectionData___self' => 
    array (
      4 => 
      array (
        0 => 'cart_private_data_tax',
        1 => 'cart_empty_message',
      ),
    ),
    'Magento\\Contact\\Block\\ContactForm_toHtml___self' => 
    array (
      1 => 
      array (
        0 => 'set_view_model',
      ),
    ),
    'Magento\\Checkout\\Model\\Cart\\CollectQuote_collect___self' => 
    array (
      1 => 
      array (
        0 => 'checkout_cart_collect_totals',
      ),
    ),
    'Magento\\Framework\\View\\TemplateEngineFactory_create___self' => 
    array (
      4 => 
      array (
        0 => 'debug_hints',
      ),
    ),
    'Magento\\Customer\\Model\\Registration_isAllowed___self' => 
    array (
      4 => 
      array (
        0 => 'websiterestriction_customer_registration_plugin',
        1 => 'invitation_customer_registration_plugin',
      ),
    ),
    'Magento\\Multishipping\\Block\\Checkout\\Shipping_getItemsBoxTextAfter___self' => 
    array (
      4 => 
      array (
        0 => 'getItemsBoxTextAfter',
      ),
    ),
    'Magento\\Checkout\\Model\\Type\\Onepage_saveShippingMethod___self' => 
    array (
      4 => 
      array (
        0 => 'save_gift_message',
      ),
    ),
    'Magento\\Multishipping\\Model\\Checkout\\Type\\Multishipping_setShippingMethods___self' => 
    array (
      1 => 
      array (
        0 => 'save_gift_messages',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Item\\Processor_merge___self' => 
    array (
      4 => 
      array (
        0 => 'mergeQuoteItems',
      ),
    ),
    'Magento\\Framework\\App\\Http\\Context_getData___self' => 
    array (
      4 => 
      array (
        0 => 'update_cache_plugin',
      ),
    ),
    'Magento\\Framework\\App\\Http\\Context_getVaryString___self' => 
    array (
      1 => 
      array (
        0 => 'persistent_page_cache_variation',
      ),
    ),
    'Magento\\Wishlist\\Model\\Item_representProduct___self' => 
    array (
      1 => 
      array (
        0 => 'groupedProductWishlistProcessor',
      ),
    ),
    'Magento\\Wishlist\\Model\\Item_compareOptions___self' => 
    array (
      1 => 
      array (
        0 => 'groupedProductWishlistProcessor',
      ),
    ),
    'Magento\\InventoryIndexer\\Model\\ResourceModel\\GetStockItemData_execute___self' => 
    array (
      2 => 'inventory_catalog_get_legacy_stock_item_data_from_stock_registry',
    ),
    'Magento\\ConfigurableProduct\\Block\\Product\\View\\Type\\Configurable_getImage___self' => 
    array (
      1 => 
      array (
        0 => 'add_product_object_to_image_data_array',
      ),
    ),
    'Magento\\ConfigurableProduct\\Block\\Product\\View\\Type\\Configurable_getJsonConfig___self' => 
    array (
      4 => 
      array (
        0 => 'add_sales_channel_info',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
        6 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
        3 => 'multishipping_clear_addresses',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart\\Add_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
        6 => 'customer-app-action-executeController-context-plugin',
        7 => 'multishipping_disabler',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart\\Add_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
        3 => 'multishipping_clear_addresses',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart\\UpdatePost_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
        6 => 'customer-app-action-executeController-context-plugin',
        7 => 'multishipping_disabler',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart\\UpdatePost_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
        3 => 'multishipping_clear_addresses',
      ),
    ),
    'Magento\\Checkout\\Controller\\Action_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
        6 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Checkout\\Controller\\Action_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Checkout\\Controller\\Onepage_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
        6 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Checkout\\Controller\\Onepage_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Checkout\\Controller\\Index\\Index_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
        6 => 'sdk_url_configuration',
        7 => 'customer-app-action-executeController-context-plugin',
        8 => 'multishipping_disabler',
      ),
    ),
    'Magento\\Checkout\\Controller\\Index\\Index_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Checkout\\Model\\Cart_save___self' => 
    array (
      1 => 
      array (
        0 => 'multishipping_session_mapper',
      ),
      4 => 
      array (
        0 => 'multishipping_session_mapper',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart\\UpdateItemQty_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
        6 => 'customer-app-action-executeController-context-plugin',
        7 => 'multishipping_disabler',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart\\UpdateItemQty_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\Confirm_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'customer_account',
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\Confirm_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
        3 => 'invitation_enabled_check',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\Confirm_execute_customer_account' => 
    array (
      4 => 
      array (
        0 => 'mpcustomerapproval_account_create_confirm',
      ),
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\Confirmation_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'customer_account',
    ),
    'Magento\\Customer\\Controller\\Account\\Confirmation_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\Confirmation_execute_customer_account' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\Confirmation_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'customer_account',
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\Confirmation_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
        3 => 'invitation_enabled_check',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\Confirmation_execute_customer_account' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\Create_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'customer_account',
    ),
    'Magento\\Customer\\Controller\\Account\\Create_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\Create_execute_customer_account' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\Create_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'customer_account',
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\Create_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
        3 => 'invitation_enabled_check',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\Create_execute_customer_account' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\CreatePassword_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'customer_account',
    ),
    'Magento\\Customer\\Controller\\Account\\CreatePassword_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\CreatePassword_execute_customer_account' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\CreatePassword_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'customer_account',
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\CreatePassword_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
        3 => 'invitation_enabled_check',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\CreatePassword_execute_customer_account' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\CreatePost_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'customer_account',
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\CreatePost_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
        3 => 'invitation_enabled_check',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\CreatePost_execute_customer_account' => 
    array (
      4 => 
      array (
        0 => 'mpcustomerapproval_account_create_post',
      ),
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\Edit_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'customer_account',
    ),
    'Magento\\Customer\\Controller\\Account\\Edit_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\Edit_execute_customer_account' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\Edit_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'customer_account',
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\Edit_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
        3 => 'invitation_enabled_check',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\Edit_execute_customer_account' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\EditPost_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'customer_account',
    ),
    'Magento\\Customer\\Controller\\Account\\EditPost_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\EditPost_execute_customer_account' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\EditPost_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'customer_account',
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\EditPost_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
        3 => 'invitation_enabled_check',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\EditPost_execute_customer_account' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\ForgotPassword_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'customer_account',
    ),
    'Magento\\Customer\\Controller\\Account\\ForgotPassword_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\ForgotPassword_execute_customer_account' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\ForgotPassword_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'customer_account',
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\ForgotPassword_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
        3 => 'invitation_enabled_check',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\ForgotPassword_execute_customer_account' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\ForgotPasswordPost_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'customer_account',
    ),
    'Magento\\Customer\\Controller\\Account\\ForgotPasswordPost_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\ForgotPasswordPost_execute_customer_account' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\ForgotPasswordPost_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'customer_account',
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\ForgotPasswordPost_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
        3 => 'invitation_enabled_check',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\ForgotPasswordPost_execute_customer_account' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\Index_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'customer_account',
    ),
    'Magento\\Customer\\Controller\\Account\\Index_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\Index_execute_customer_account' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\Index_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'customer_account',
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\Index_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
        3 => 'invitation_enabled_check',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\Index_execute_customer_account' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\Login_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'customer_account',
    ),
    'Magento\\Customer\\Controller\\Account\\Login_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\Login_execute_customer_account' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\Login_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'customer_account',
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\Login_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
        3 => 'invitation_enabled_check',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\Login_execute_customer_account' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\LoginPost_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'customer_account',
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\LoginPost_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
        3 => 'invitation_enabled_check',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\LoginPost_execute_customer_account' => 
    array (
      2 => 'mpcustomerapproval_account_login_post',
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\LoginPost_execute_mpcustomerapproval_account_login_post' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\Logout_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'customer_account',
    ),
    'Magento\\Customer\\Controller\\Account\\Logout_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\Logout_execute_customer_account' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\Logout_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'customer_account',
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\Logout_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
        3 => 'invitation_enabled_check',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\Logout_execute_customer_account' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\LogoutSuccess_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'customer_account',
    ),
    'Magento\\Customer\\Controller\\Account\\LogoutSuccess_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\LogoutSuccess_execute_customer_account' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\LogoutSuccess_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'customer_account',
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\LogoutSuccess_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
        3 => 'invitation_enabled_check',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\LogoutSuccess_execute_customer_account' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\ResetPasswordPost_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'customer_account',
    ),
    'Magento\\Customer\\Controller\\Account\\ResetPasswordPost_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\ResetPasswordPost_execute_customer_account' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\ResetPasswordPost_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'designLoader',
        2 => 'customerNotification',
        3 => 'tax-app-action-dispatchController-context-plugin',
        4 => 'weee-app-action-dispatchController-context-plugin',
        5 => 'invalidate_expired_session_plugin',
      ),
      2 => 'customer_account',
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\ResetPasswordPost_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_app_action_dispatch_controller_context_plugin',
        1 => 'contextPlugin',
        2 => 'customer-segment-app-action-dispatchController-context-plugin',
        3 => 'invitation_enabled_check',
      ),
    ),
    'Magento\\Invitation\\Controller\\Customer\\Account\\ResetPasswordPost_execute_customer_account' => 
    array (
      1 => 
      array (
        0 => 'customer-app-action-executeController-context-plugin',
      ),
    ),
    'Magento\\Customer\\Model\\CustomerExtractor_extract___self' => 
    array (
      4 => 
      array (
        0 => 'add_assistance_allowed_to_customer_data',
      ),
    ),
    'Magento\\Framework\\View\\Result\\Page_renderResult___self' => 
    array (
      4 => 
      array (
        0 => 'asyncCssLoad',
        1 => 'deferJsToFooter',
        2 => 'result-messages',
        3 => 'result-builtin-cache',
        4 => 'result-varnish-cache',
      ),
      1 => 
      array (
        0 => 'pageLayoutDefaultClass',
      ),
    ),
    'Magento\\Framework\\Filter\\Template_filter___self' => 
    array (
      4 => 
      array (
        0 => 'convertBackgroundImages',
      ),
    ),
    'Magento\\Email\\Model\\Template\\Filter_filter___self' => 
    array (
      4 => 
      array (
        0 => 'convertBackgroundImages',
      ),
    ),
    'Magento\\Email\\Model\\Template\\Filter_customvarDirective___self' => 
    array (
      4 => 
      array (
        0 => 'escapeCustomVarDirectives',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository\\SaveHandler_save___self' => 
    array (
      1 => 
      array (
        0 => 'paypal-cartitem',
      ),
    ),
    'Magento\\Checkout\\Model\\DefaultConfigProvider_getConfig___self' => 
    array (
      4 => 
      array (
        0 => 'mask_quote_id_substitutor',
      ),
    ),
    'Magento\\Checkout\\Model\\GuestPaymentInformationManagement_savePaymentInformation___self' => 
    array (
      1 => 
      array (
        0 => 'process_billing_custom_guest_attributes',
        1 => 'inject_guest_address_for_nologin',
      ),
    ),
    'Magento\\Checkout\\Model\\GuestPaymentInformationManagement_savePaymentInformationAndPlaceOrder___self' => 
    array (
      1 => 
      array (
        0 => 'validate-guest-agreements',
        1 => 'disable-guest-place-order',
      ),
    ),
    'Magento\\Checkout\\Block\\Cart\\Coupon_setLayout___self' => 
    array (
      4 => 
      array (
        0 => 'reset_layout_after_for_recaptcha_coupon_plugin',
      ),
    ),
    'Magento\\Customer\\Block\\Account\\AuthenticationPopup_getJsLayout___self' => 
    array (
      4 => 
      array (
        0 => 'inject_recaptcha_in_authentication_popup',
      ),
    ),
    'Magento\\Customer\\ViewModel\\LoginButton_disabled___self' => 
    array (
      4 => 
      array (
        0 => 'recaptcha_disable_login_button',
      ),
    ),
    'Magento\\Customer\\ViewModel\\CreateAccountButton_disabled___self' => 
    array (
      4 => 
      array (
        0 => 'recaptcha_disable_create_account_button',
      ),
    ),
    'Magento\\Customer\\ViewModel\\ForgotPasswordButton_disabled___self' => 
    array (
      4 => 
      array (
        0 => 'recaptcha_disable_forgot_password_button',
      ),
    ),
    'Mageplaza\\SocialLogin\\Controller\\Social\\Login_createCustomer___self' => 
    array (
      4 => 
      array (
        0 => 'mpcustomerapproval_socialogin_approval',
      ),
    ),
    'Magento\\Tax\\Observer\\CustomerLoggedInObserver_execute___self' => 
    array (
      2 => 'prevent_handle_customer_login',
    ),
    'Mageplaza\\SocialLogin\\Controller\\Social\\AbstractSocial__appendJs___self' => 
    array (
      2 => 'mp_socical_login_after_login',
    ),
    'Magento\\Catalog\\Block\\Product\\ListProduct_getImage___self' => 
    array (
      1 => 
      array (
        0 => 'add_product_object_to_image_data_array',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\ListProduct_getProductDetailsHtml___self' => 
    array (
      2 => 'braintreeProductDetailsBlockPlugin',
    ),
    'Magento\\Vault\\Api\\PaymentTokenRepositoryInterface_delete___self' => 
    array (
      1 => 
      array (
        0 => 'braintreeDeleteStoredPaymentPlugin',
      ),
    ),
  ),
);