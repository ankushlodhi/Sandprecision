(function(require){
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    map: {
        '*': {
            directoryRegionUpdater: 'Magento_Directory/js/region-updater'
        }
    }
};

require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    waitSeconds: 0,
    map: {
        '*': {
            'ko': 'knockoutjs/knockout',
            'knockout': 'knockoutjs/knockout',
            'mageUtils': 'mage/utils/main',
            'rjsResolver': 'mage/requirejs/resolver',
            'jquery-ui-modules/core': 'jquery/ui-modules/core',
            'jquery-ui-modules/accordion': 'jquery/ui-modules/widgets/accordion',
            'jquery-ui-modules/autocomplete': 'jquery/ui-modules/widgets/autocomplete',
            'jquery-ui-modules/button': 'jquery/ui-modules/widgets/button',
            'jquery-ui-modules/datepicker': 'jquery/ui-modules/widgets/datepicker',
            'jquery-ui-modules/dialog': 'jquery/ui-modules/widgets/dialog',
            'jquery-ui-modules/draggable': 'jquery/ui-modules/widgets/draggable',
            'jquery-ui-modules/droppable': 'jquery/ui-modules/widgets/droppable',
            'jquery-ui-modules/effect-blind': 'jquery/ui-modules/effects/effect-blind',
            'jquery-ui-modules/effect-bounce': 'jquery/ui-modules/effects/effect-bounce',
            'jquery-ui-modules/effect-clip': 'jquery/ui-modules/effects/effect-clip',
            'jquery-ui-modules/effect-drop': 'jquery/ui-modules/effects/effect-drop',
            'jquery-ui-modules/effect-explode': 'jquery/ui-modules/effects/effect-explode',
            'jquery-ui-modules/effect-fade': 'jquery/ui-modules/effects/effect-fade',
            'jquery-ui-modules/effect-fold': 'jquery/ui-modules/effects/effect-fold',
            'jquery-ui-modules/effect-highlight': 'jquery/ui-modules/effects/effect-highlight',
            'jquery-ui-modules/effect-scale': 'jquery/ui-modules/effects/effect-scale',
            'jquery-ui-modules/effect-pulsate': 'jquery/ui-modules/effects/effect-pulsate',
            'jquery-ui-modules/effect-shake': 'jquery/ui-modules/effects/effect-shake',
            'jquery-ui-modules/effect-slide': 'jquery/ui-modules/effects/effect-slide',
            'jquery-ui-modules/effect-transfer': 'jquery/ui-modules/effects/effect-transfer',
            'jquery-ui-modules/effect': 'jquery/ui-modules/effect',
            'jquery-ui-modules/menu': 'jquery/ui-modules/widgets/menu',
            'jquery-ui-modules/mouse': 'jquery/ui-modules/widgets/mouse',
            'jquery-ui-modules/position': 'jquery/ui-modules/position',
            'jquery-ui-modules/progressbar': 'jquery/ui-modules/widgets/progressbar',
            'jquery-ui-modules/resizable': 'jquery/ui-modules/widgets/resizable',
            'jquery-ui-modules/selectable': 'jquery/ui-modules/widgets/selectable',
            'jquery-ui-modules/slider': 'jquery/ui-modules/widgets/selectmenu',
            'jquery-ui-modules/sortable': 'jquery/ui-modules/widgets/sortable',
            'jquery-ui-modules/spinner': 'jquery/ui-modules/widgets/spinner',
            'jquery-ui-modules/tabs': 'jquery/ui-modules/widgets/tabs',
            'jquery-ui-modules/tooltip': 'jquery/ui-modules/widgets/tooltip',
            'jquery-ui-modules/widget': 'jquery/ui-modules/widget',
            'jquery-ui-modules/timepicker': 'jquery/timepicker',
            'vimeo': 'vimeo/player',
            'vimeoWrapper': 'vimeo/vimeo-wrapper'
        }
    },
    shim: {
        'jquery/jquery-migrate': ['jquery'],
        'mage/adminhtml/backup': ['prototype'],
        'mage/captcha': ['prototype'],
        'mage/new-gallery': ['jquery'],
        'jquery/ui': ['jquery'],
        'matchMedia': {
            'exports': 'mediaCheck'
        },
        'magnifier/magnifier': ['jquery'],
        'vimeo/player': {
            'exports': 'Player'
        }
    },
    paths: {
        'jquery/validate': 'jquery/jquery.validate',
        'jquery/file-uploader': 'jquery/fileUploader/jquery.fileuploader',
        'prototype': 'legacy-build.min',
        'jquery/jquery.cookie': 'js-cookie/cookie-wrapper',
        'jquery/jquery-storageapi': 'js-storage/storage-wrapper',
        'text': 'mage/requirejs/text',
        'domReady': 'requirejs/domReady',
        'spectrum': 'jquery/spectrum/spectrum',
        'tinycolor': 'jquery/spectrum/tinycolor',
        'jquery-ui-modules': 'jquery/ui-modules'
    },
    deps: [
        'jquery/jquery-migrate'
    ],
    config: {
        text: {
            'headers': {
                'X-Requested-With': 'XMLHttpRequest'
            }
        }
    }
};

require(['jquery'], function ($) {
    'use strict';

    $.noConflict();
});

require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    map: {
        '*': {
            'rowBuilder':             'Magento_Theme/js/row-builder',
            'toggleAdvanced':         'mage/toggle',
            'translateInline':        'mage/translate-inline',
            'sticky':                 'mage/sticky',
            'tabs':                   'mage/tabs',
            'collapsible':            'mage/collapsible',
            'dropdownDialog':         'mage/dropdown',
            'dropdown':               'mage/dropdowns',
            'accordion':              'mage/accordion',
            'loader':                 'mage/loader',
            'tooltip':                'mage/tooltip',
            'deletableItem':          'mage/deletable-item',
            'itemTable':              'mage/item-table',
            'fieldsetControls':       'mage/fieldset-controls',
            'fieldsetResetControl':   'mage/fieldset-controls',
            'redirectUrl':            'mage/redirect-url',
            'loaderAjax':             'mage/loader',
            'menu':                   'mage/menu',
            'popupWindow':            'mage/popup-window',
            'validation':             'mage/validation/validation',
            'breadcrumbs':            'Magento_Theme/js/view/breadcrumbs',
            'jquery/ui':              'jquery/compat',
            'cookieStatus':           'Magento_Theme/js/cookie-status'
        }
    },
    deps: [
        'mage/common',
        'mage/dataPost',
        'mage/bootstrap'
    ],
    config: {
        mixins: {
            'Magento_Theme/js/view/breadcrumbs': {
                'Magento_Theme/js/view/add-home-breadcrumb': true
            }
        }
    }
};

/* eslint-disable max-depth */
/**
 * Adds polyfills only for browser contexts which prevents bundlers from including them.
 */
if (typeof window !== 'undefined' && window.document) {
    /**
     * Polyfill localStorage and sessionStorage for browsers that do not support them.
     */
    try {
        if (!window.localStorage || !window.sessionStorage) {
            throw new Error();
        }

        localStorage.setItem('storage_test', 1);
        localStorage.removeItem('storage_test');
    } catch (e) {
        config.deps.push('mage/polyfill');
    }
}
/* eslint-enable max-depth */

require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    map: {
        '*': {
            checkoutBalance:    'Magento_Customer/js/checkout-balance',
            address:            'Magento_Customer/js/address',
            changeEmailPassword: 'Magento_Customer/js/change-email-password',
            passwordStrengthIndicator: 'Magento_Customer/js/password-strength-indicator',
            zxcvbn: 'Magento_Customer/js/zxcvbn',
            addressValidation: 'Magento_Customer/js/addressValidation',
            showPassword: 'Magento_Customer/js/show-password',
            'Magento_Customer/address': 'Magento_Customer/js/address',
            'Magento_Customer/change-email-password': 'Magento_Customer/js/change-email-password',
            globalSessionLoader:    'Magento_Customer/js/customer-global-session-loader.js'
        }
    }
};

require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    map: {
        '*': {
            escaper: 'Magento_Security/js/escaper'
        }
    }
};

require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    map: {
        '*': {
            quickSearch: 'Magento_Search/js/form-mini',
            'Magento_Search/form-mini': 'Magento_Search/js/form-mini'
        }
    }
};

require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    map: {
        '*': {
            priceBox:             'Magento_Catalog/js/price-box',
            priceOptionDate:      'Magento_Catalog/js/price-option-date',
            priceOptionFile:      'Magento_Catalog/js/price-option-file',
            priceOptions:         'Magento_Catalog/js/price-options',
            priceUtils:           'Magento_Catalog/js/price-utils'
        }
    }
};

require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    map: {
        '*': {
            compareList:            'Magento_Catalog/js/list',
            relatedProducts:        'Magento_Catalog/js/related-products',
            upsellProducts:         'Magento_Catalog/js/upsell-products',
            productListToolbarForm: 'Magento_Catalog/js/product/list/toolbar',
            catalogGallery:         'Magento_Catalog/js/gallery',
            catalogAddToCart:       'Magento_Catalog/js/catalog-add-to-cart'
        }
    },
    config: {
        mixins: {
            'Magento_Theme/js/view/breadcrumbs': {
                'Magento_Catalog/js/product/breadcrumbs': true
            }
        }
    }
};

require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    map: {
        '*': {
            addToCart: 'Magento_Msrp/js/msrp'
        }
    }
};

require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    map: {
        '*': {
            catalogSearch: 'Magento_CatalogSearch/form-mini'
        }
    }
};

require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    map: {
        '*': {
            creditCardType: 'Magento_Payment/js/cc-type',
            'Magento_Payment/cc-type': 'Magento_Payment/js/cc-type'
        }
    }
};

require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    map: {
        '*': {
            giftMessage:    'Magento_Sales/js/gift-message',
            ordersReturns:  'Magento_Sales/js/orders-returns',
            'Magento_Sales/gift-message':    'Magento_Sales/js/gift-message',
            'Magento_Sales/orders-returns':  'Magento_Sales/js/orders-returns'
        }
    }
};

require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    map: {
        '*': {
            discountCode:           'Magento_Checkout/js/discount-codes',
            shoppingCart:           'Magento_Checkout/js/shopping-cart',
            regionUpdater:          'Magento_Checkout/js/region-updater',
            sidebar:                'Magento_Checkout/js/sidebar',
            checkoutLoader:         'Magento_Checkout/js/checkout-loader',
            checkoutData:           'Magento_Checkout/js/checkout-data',
            proceedToCheckout:      'Magento_Checkout/js/proceed-to-checkout',
            catalogAddToCart:       'Magento_Catalog/js/catalog-add-to-cart'
        }
    },
    shim: {
        'Magento_Checkout/js/model/totals' : {
            deps: ['Magento_Customer/js/customer-data']
        }
    }
};

require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    map: {
        '*': {
            requireCookie: 'Magento_Cookie/js/require-cookie',
            cookieNotices: 'Magento_Cookie/js/notices'
        }
    }
};

require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    map: {
        '*': {
            downloadable: 'Magento_Downloadable/js/downloadable',
            'Magento_Downloadable/downloadable': 'Magento_Downloadable/js/downloadable'
        }
    }
};

require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    map: {
        '*': {
            bundleOption:   'Magento_Bundle/bundle',
            priceBundle:    'Magento_Bundle/js/price-bundle',
            slide:          'Magento_Bundle/js/slide',
            productSummary: 'Magento_Bundle/js/product-summary'
        }
    }
};

require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    map: {
        '*': {
            giftOptions:    'Magento_GiftMessage/js/gift-options',
            'Magento_GiftMessage/gift-options':    'Magento_GiftMessage/js/gift-options'
        }
    }
};

require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    deps: [],
    shim: {
        'chartjs/chartjs-adapter-moment': ['moment'],
        'tiny_mce_5/tinymce.min': {
            exports: 'tinyMCE'
        }
    },
    paths: {
        'ui/template': 'Magento_Ui/templates'
    },
    map: {
        '*': {
            uiElement:      'Magento_Ui/js/lib/core/element/element',
            uiCollection:   'Magento_Ui/js/lib/core/collection',
            uiComponent:    'Magento_Ui/js/lib/core/collection',
            uiClass:        'Magento_Ui/js/lib/core/class',
            uiEvents:       'Magento_Ui/js/lib/core/events',
            uiRegistry:     'Magento_Ui/js/lib/registry/registry',
            consoleLogger:  'Magento_Ui/js/lib/logger/console-logger',
            uiLayout:       'Magento_Ui/js/core/renderer/layout',
            buttonAdapter:  'Magento_Ui/js/form/button-adapter',
            chartJs:        'chartjs/Chart.min',
            'chart.js':     'chartjs/Chart.min',
            tinymce:        'tiny_mce_5/tinymce.min',
            wysiwygAdapter: 'mage/adminhtml/wysiwyg/tiny_mce/tinymce5Adapter'
        }
    }
};

require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    deps: [
        'Magento_Ui/js/core/app'
    ]
};

require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    map: {
        '*': {
            pageCache:  'Magento_PageCache/js/page-cache'
        }
    },
    deps: ['Magento_PageCache/js/form-key-provider']
};

require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    map: {
        '*': {
            captcha: 'Magento_Captcha/js/captcha',
            'Magento_Captcha/captcha': 'Magento_Captcha/js/captcha'
        }
    }
};

require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    map: {
        '*': {
            configurable: 'Magento_ConfigurableProduct/js/configurable'
        }
    },
    config: {
        mixins: {
            'Magento_Catalog/js/catalog-add-to-cart': {
                'Magento_ConfigurableProduct/js/catalog-add-to-cart-mixin': true
            }
        }
    }
};

require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    map: {
        '*': {
            multiShipping: 'Magento_Multishipping/js/multi-shipping',
            orderOverview: 'Magento_Multishipping/js/overview',
            payment: 'Magento_Multishipping/js/payment',
            billingLoader: 'Magento_Checkout/js/checkout-loader',
            cartUpdate: 'Magento_Checkout/js/action/update-shopping-cart',
            multiShippingBalance: 'Magento_Multishipping/js/multi-shipping-balance'
        }
    }
};

require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    map: {
        '*': {
            recentlyViewedProducts: 'Magento_Reports/js/recently-viewed'
        }
    }
};

require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    map: {
        '*': {
            subscriptionStatusResolver: 'Magento_Newsletter/js/subscription-status-resolver',
            newsletterSignUp:  'Magento_Newsletter/js/newsletter-sign-up'
        }
    }
};

require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    config: {
        mixins: {
            'Magento_Checkout/js/action/select-payment-method': {
                'Magento_SalesRule/js/action/select-payment-method-mixin': true
            },
            'Magento_Checkout/js/model/shipping-save-processor': {
                'Magento_SalesRule/js/model/shipping-save-processor-mixin': true
            },
            'Magento_Checkout/js/action/place-order': {
                'Magento_SalesRule/js/model/place-order-mixin': true
            }
        }
    }
};

require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    map: {
        '*': {
            'slick': 'Magento_PageBuilder/js/resource/slick/slick',
            'jarallax': 'Magento_PageBuilder/js/resource/jarallax/jarallax',
            'jarallaxVideo': 'Magento_PageBuilder/js/resource/jarallax/jarallax-video',
            'Magento_PageBuilder/js/resource/vimeo/player': 'vimeo/player',
            'Magento_PageBuilder/js/resource/vimeo/vimeo-wrapper': 'vimeo/vimeo-wrapper',
            'jarallax-wrapper': 'Magento_PageBuilder/js/resource/jarallax/jarallax-wrapper'
        }
    },
    shim: {
        'Magento_PageBuilder/js/resource/slick/slick': {
            deps: ['jquery']
        },
        'Magento_PageBuilder/js/resource/jarallax/jarallax-video': {
            deps: ['jarallax-wrapper', 'vimeoWrapper']
        }
    }
};

require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    shim: {
        cardinaljs: {
            exports: 'Cardinal'
        },
        cardinaljsSandbox: {
            exports: 'Cardinal'
        }
    },
    paths: {
        cardinaljsSandbox: 'https://includestest.ccdc02.com/cardinalcruise/v1/songbird',
        cardinaljs: 'https://songbird.cardinalcommerce.com/edge/v1/songbird'
    }
};


require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    map: {
        '*': {
            transparent: 'Magento_Payment/js/transparent',
            'Magento_Payment/transparent': 'Magento_Payment/js/transparent'
        }
    }
};

require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    map: {
        '*': {
            orderReview: 'Magento_Paypal/js/order-review',
            'Magento_Paypal/order-review': 'Magento_Paypal/js/order-review',
            paypalCheckout: 'Magento_Paypal/js/paypal-checkout'
        }
    }
};

require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    config: {
        mixins: {
            'Magento_Customer/js/customer-data': {
                'Magento_Persistent/js/view/customer-data-mixin': true
            }
        }
    }
};

require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    map: {
        '*': {
            loadPlayer: 'Magento_ProductVideo/js/load-player',
            fotoramaVideoEvents: 'Magento_ProductVideo/js/fotorama-add-video-events',
            'vimeoWrapper': 'vimeo/vimeo-wrapper'
        }
    },
    shim: {
        vimeoAPI: {},
        'Magento_ProductVideo/js/load-player': {
            deps: ['vimeoWrapper']
        }
    }
};

require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    config: {
        mixins: {
            'Magento_Checkout/js/action/place-order': {
                'Magento_CheckoutAgreements/js/model/place-order-mixin': true
            },
            'Magento_Checkout/js/action/set-payment-information': {
                'Magento_CheckoutAgreements/js/model/set-payment-information-mixin': true
            }
        }
    }
};

require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

// eslint-disable-next-line no-unused-vars
var config = {
    config: {
        mixins: {
            'Magento_Checkout/js/model/place-order': {
                'Magento_ReCaptchaCheckout/js/model/place-order-mixin': true
            }
        }
    }
};

require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

/*eslint strict: ["error", "global"]*/

'use strict';

var config = {
    config: {
        mixins: {
            'Magento_Ui/js/view/messages': {
                'Magento_ReCaptchaFrontendUi/js/ui-messages-mixin': true
            }
        }
    }
};

require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

// eslint-disable-next-line no-unused-vars
var config = {
    config: {
        mixins: {
            'Magento_Paypal/js/view/payment/method-renderer/payflowpro-method': {
                'Magento_ReCaptchaPaypal/js/payflowpro-method-mixin': true
            }
        }
    }
};

require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

// eslint-disable-next-line no-unused-vars
var config = {
    config: {
        mixins: {
            'jquery': {
                'Magento_ReCaptchaWebapiUi/js/jquery-mixin': true
            }
        }
    }
};

require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    map: {
        '*': {
            mageTranslationDictionary: 'Magento_Translation/js/mage-translation-dictionary'
        }
    },
    deps: [
        'mageTranslationDictionary'
    ]
};

require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    map: {
        '*': {
            editTrigger: 'mage/edit-trigger',
            addClass: 'Magento_Translation/js/add-class',
            'Magento_Translation/add-class': 'Magento_Translation/js/add-class'
        }
    }
};

require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    config: {
        mixins: {
            'Magento_Checkout/js/view/payment/list': {
                'Magento_PaypalCaptcha/js/view/payment/list-mixin': true
            },
            'Magento_Paypal/js/view/payment/method-renderer/payflowpro-method': {
                'Magento_PaypalCaptcha/js/view/payment/method-renderer/payflowpro-method-mixin': true
            },
            'Magento_Captcha/js/view/checkout/defaultCaptcha': {
                'Magento_PaypalCaptcha/js/view/checkout/defaultCaptcha-mixin': true
            }
        }
    }
};

require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    map: {
        '*': {
            'taxToggle': 'Magento_Weee/js/tax-toggle',
            'Magento_Weee/tax-toggle': 'Magento_Weee/js/tax-toggle'
        }
    }
};

require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    map: {
        '*': {
            wishlist:       'Magento_Wishlist/js/wishlist',
            addToWishlist:  'Magento_Wishlist/js/add-to-wishlist',
            wishlistSearch: 'Magento_Wishlist/js/search'
        }
    }
};

require.config(config);
})();
(function() {
var config = {
    config: {
        mixins: {
            'Magento_Checkout/js/model/shipping-rates-validation-rules': {
                'Amasty_Conditions/js/model/shipping-rates-validation-rules-mixin': true
            }
        }
    }
};

require.config(config);
})();
(function() {
/**
 * Ebizmarts_MailChimp Magento JS component
 *
 * @category    Ebizmarts
 * @package     Ebizmarts_MailChimp
 * @author      Ebizmarts Team <info@ebizmarts.com>
 * @copyright   Ebizmarts (http://ebizmarts.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

var config = {
    "map": {
        "*": {
            campaigncatcher: 'Ebizmarts_MailChimp/js/campaigncatcher'
        }
    }
};
require.config(config);
})();
(function() {
/**
 * @author Elsner Team
 * @copyright Copyright (c) 2021 Elsner Technologies Pvt. Ltd (https://www.elsner.com/)
 * @package Elsnertech_Paytrace
 */
 
var config = {
 config: {
     mixins: {
         'Magento_Checkout/js/model/error-processor': {
                'Elsnertech_Paytrace/js/model/payment/error-processor-mixin': true
          }
     }
 }
};

require.config(config);
})();
(function() {
var config = {
    config: {
        mixins: {
            'Magento_Swatches/js/swatch-renderer': {
                'Lof_Webp2/js/swatch-renderer-mixin': true
            },
            'mage/gallery/gallery': {
                'Lof_Webp2/js/gallery-mixin': true
            }
        }
    }
};

require.config(config);
})();
(function() {
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_Core
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

var config = {
    paths: {
        'mageplaza/core/jquery/popup': 'Mageplaza_Core/js/jquery.magnific-popup.min',
        'mageplaza/core/owl.carousel': 'Mageplaza_Core/js/owl.carousel.min',
        'mageplaza/core/bootstrap': 'Mageplaza_Core/js/bootstrap.min',
        mpIonRangeSlider: 'Mageplaza_Core/js/ion.rangeSlider.min',
        touchPunch: 'Mageplaza_Core/js/jquery.ui.touch-punch.min',
        mpDevbridgeAutocomplete: 'Mageplaza_Core/js/jquery.autocomplete.min'
    },
    shim: {
        "mageplaza/core/jquery/popup": ["jquery"],
        "mageplaza/core/owl.carousel": ["jquery"],
        "mageplaza/core/bootstrap": ["jquery"],
        mpIonRangeSlider: ["jquery"],
        mpDevbridgeAutocomplete: ["jquery"],
        touchPunch: ['jquery', 'jquery-ui-modules/core', 'jquery-ui-modules/mouse', 'jquery-ui-modules/widget']
    }
};

require.config(config);
})();
(function() {
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_BetterPopup
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

var config = {
    paths: {
        mpPopup: 'Mageplaza_BetterPopup/js/popup',
        bioEp: 'Mageplaza_BetterPopup/js/lib/bioep.min',
        fireworks: 'Mageplaza_BetterPopup/js/lib/fireworks.min'
    }
};

require.config(config);
})();
(function() {
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_AbandonedCart
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

var config = {
    config: {
        mixins: {
            'mage/validation': {
                'Mageplaza_AbandonedCart/js/validate/validation-mixin': true
            }
        }
    }
};

require.config(config);
})();
(function() {
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_DeliveryTime
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

var config = {
    config: {
        mixins: {
            'Magento_Checkout/js/action/set-shipping-information': {
                'Mageplaza_DeliveryTime/js/action/set-shipping-information-mixin': true
            }
        }
    }
};
require.config(config);
})();
(function() {
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_Osc
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

var config = {};
if (typeof window.oscRoute !== 'undefined' && window.location.href.indexOf(window.oscRoute) !== -1) {
    config = {
        paths: {
            socialPopupForm: 'Mageplaza_Osc/js/social-login-popup'
        },
        map: {
            '*': {
                'Magento_Checkout/js/model/shipping-rate-service': 'Mageplaza_Osc/js/model/shipping-rate-service',
                'Magento_Checkout/js/model/shipping-rates-validator': 'Mageplaza_Osc/js/model/shipping-rates-validator',
                'Magento_CheckoutAgreements/js/model/agreements-assigner': 'Mageplaza_Osc/js/model/agreements-assigner',
                'Magento_Paypal/js/in-context/express-checkout-smart-buttons': 'Mageplaza_Osc/js/in-context/express-checkout-smart-buttons',
                'Magento_SalesRule/js/action/select-payment-method-mixin': 'Mageplaza_Osc/js/action/select-payment-method-mixin'
            },
            'Mageplaza_Osc/js/model/shipping-rates-validator': {
                'Magento_Checkout/js/model/shipping-rates-validator': 'Magento_Checkout/js/model/shipping-rates-validator'
            },
            'Magento_Checkout/js/model/shipping-save-processor/default': {
                'Magento_Checkout/js/model/full-screen-loader': 'Mageplaza_Osc/js/model/osc-loader'
            },
            'Magento_Checkout/js/action/set-billing-address': {
                'Magento_Checkout/js/model/full-screen-loader': 'Mageplaza_Osc/js/model/osc-loader'
            },
            'Magento_SalesRule/js/action/set-coupon-code': {
                'Magento_Checkout/js/model/full-screen-loader': 'Mageplaza_Osc/js/model/osc-loader/discount'
            },
            'Magento_SalesRule/js/action/cancel-coupon': {
                'Magento_Checkout/js/model/full-screen-loader': 'Mageplaza_Osc/js/model/osc-loader/discount'
            },
            'Mageplaza_Osc/js/model/osc-loader': {
                'Magento_Checkout/js/model/full-screen-loader': 'Magento_Checkout/js/model/full-screen-loader'
            }
        },
        config: {
            mixins: {
                'PayPal_Braintree/js/view/payment/method-renderer/paypal': {
                    'Mageplaza_Osc/js/view/payment/method-renderer/braintree-paypal-mixins': true
                },
                'PayPal_Braintree/js/view/payment/adapter': {
                    'Mageplaza_Osc/js/view/payment/braintree-adapter-mixin': true
                },
                'Magento_Checkout/js/action/place-order': {
                    'Mageplaza_Osc/js/action/place-order-mixins': true
                },
                'Magento_Paypal/js/action/set-payment-method': {
                    'Mageplaza_Osc/js/model/paypal/set-payment-method-mixin': true
                }
            }
        }
    };

    if (window.isEnableAmazonPayCv2 === 1) {
        config.config.mixins['Mageplaza_Osc/js/view/shipping-address/address-renderer/default'] = {
            'Amazon_Pay/js/view/shipping-address/address-renderer/default': true
        };
    }

    if (window.location.href.indexOf('#') !== -1) {
        window.history.pushState("", document.title, window.location.pathname);
    }
}

require.config(config);
})();
(function() {
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_Smtp
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */
var config = {};
if (typeof window.AVADA_EM !== 'undefined') {
    config = {
        config: {
            mixins: {
                'Magento_Checkout/js/view/billing-address': {
                    'Mageplaza_Smtp/js/view/billing-address-mixins' : true
                },
                'Magento_Checkout/js/view/shipping': {
                    'Mageplaza_Smtp/js/view/shipping-mixins' : true
                }
            }
        }
    };
}

require.config(config);
})();
(function() {
/**
 * Config to pull in all the relevant Braintree JS SDKs
 * @type {{paths: {braintreePayPalInContextCheckout: string, braintreePayPalCheckout: string, braintreeVenmo: string, braintreeHostedFields: string, braintreeDataCollector: string, braintreeThreeDSecure: string, braintreeGooglePay: string, braintreeApplePay: string, braintreeAch: string, braintreeLpm: string, googlePayLibrary: string}, map: {"*": {braintree: string}}}}
 */
var config = {
    map: {
        '*': {
            braintree: 'https://js.braintreegateway.com/web/3.79.1/js/client.min.js',
        }
    },

    paths: {
        "braintreePayPalCheckout": "https://js.braintreegateway.com/web/3.79.1/js/paypal-checkout.min",
        "braintreeHostedFields": "https://js.braintreegateway.com/web/3.79.1/js/hosted-fields.min",
        "braintreeDataCollector": "https://js.braintreegateway.com/web/3.79.1/js/data-collector.min",
        "braintreeThreeDSecure": "https://js.braintreegateway.com/web/3.79.1/js/three-d-secure.min",
        "braintreeApplePay": 'https://js.braintreegateway.com/web/3.79.1/js/apple-pay.min',
        "braintreeGooglePay": 'https://js.braintreegateway.com/web/3.79.1/js/google-payment.min',
        "braintreeVenmo": 'https://js.braintreegateway.com/web/3.79.1/js/venmo.min',
        "braintreeAch": "https://js.braintreegateway.com/web/3.79.1/js/us-bank-account.min",
        "braintreeLpm": "https://js.braintreegateway.com/web/3.79.1/js/local-payment.min",
        "googlePayLibrary": "https://pay.google.com/gp/p/js/pay",
        "braintreePayPalInContextCheckout": "https://www.paypalobjects.com/api/checkout"
    }
};

require.config(config);
})();
(function() {
var config = {
    config: {
        mixins: {
            'Magento_Checkout/js/model/step-navigator': {
                'PayPal_Braintree/js/model/step-navigator-mixin': true
            },
            'PayPal_Braintree/js/view/payment/method-renderer/cc-form': {
                'PayPal_Braintree/js/reCaptcha/braintree-cc-method-mixin': true
            }
        }
    },
    map: {
        '*': {
            braintreeCheckoutPayPalAdapter: 'PayPal_Braintree/js/view/payment/adapter'
        }
    },
};

require.config(config);
})();
(function() {
var config = {
    config: {
        mixins: {
            'Magento_Checkout/js/model/error-processor': {
                'Swissup_Recaptcha/js/model/error-processor-mixin': true
            },
            'Magento_Checkout/js/action/place-order': {
                'Swissup_Recaptcha/js/model/place-order-mixin': true
            },
            'Magento_Checkout/js/action/set-payment-information': {
                'Swissup_Recaptcha/js/model/place-order-mixin': true
            },
            'Magento_Checkout/js/action/set-payment-information-extended': {
                'Swissup_Recaptcha/js/model/place-order-mixin': true
            },
            // Paypal
            'Magento_Paypal/js/action/set-payment-method': {
                'Swissup_Recaptcha/js/model/place-order-mixin': true
            },
            // Amazon Payment
            'Amazon_Payment/js/action/place-order': {
                'Swissup_Recaptcha/js/model/place-order-mixin': true
            },
            // Mageplaza OSC
            'Mageplaza_Osc/js/action/set-payment-method': {
                'Swissup_Recaptcha/js/model/place-order-mixin': true
            },
            'Mageplaza_Osc/js/action/place-order': {
                'Swissup_Recaptcha/js/model/place-order-mixin': true
            },
            // CustomerParadigm Order Comments
            'CustomerParadigm_OrderComments/js/action/place-order': {
                'Swissup_Recaptcha/js/model/place-order-mixin': true
            },
            // Mageants Front Order Comments
            'Mageants_FrontOrderComment/js/action/place-order': {
                'Swissup_Recaptcha/js/model/place-order-mixin': true
            },
            // VLC Solutions Order Comments
            'VLCSolutions_OrderComments/js/action/place-order': {
                'Swissup_Recaptcha/js/model/place-order-mixin': true
            },
            // Ravedigital CoreUpdate
            'Ravedigital_CoreUpdate/js/action/place-order': {
                'Swissup_Recaptcha/js/model/place-order-mixin': true
            },
            // payment method EsteSolutions_ManualCCPayment
            'EsteSolutions_ManualCCPayment/js/action/place-order': {
                'Swissup_Recaptcha/js/model/place-order-mixin': true
            },
            // australian payment method ZipMoney_ZipMoneyPayment
            'ZipMoney_ZipMoneyPayment/js/action/set-payment-method': {
                'Swissup_Recaptcha/js/model/place-order-mixin': true
            },
            // This fixes weirdest bug ever in Swissup Recaptcha history.
            // After passing recaptcha paypal button doesn't react on clicks:
            //  - no reaction on all clicks in Magento 2.3.x;
            //  - no reaction on first click in Magneto 2.4.x.
            'Magento_Paypal/js/in-context/express-checkout-smart-buttons': {
                'Swissup_Recaptcha/js/model/paypal/rerender-in-context-buttons': true
            }
        }
    }
};

require.config(config);
})();
(function() {
var config = {
    map: {
        '*': {
            wesupplyestimations: 'WeSupply_Toolbox/js/wesupplyestimations',
            iframeResizer: 'WeSupply_Toolbox/js/lib/iframeResizer.min',
            wesupplyOrderView: 'WeSupply_Toolbox/js/embedded/wesupplyOrderView',
            loadIframe: 'WeSupply_Toolbox/js/embedded/loadIframe',
            deliveryEstimate: 'WeSupply_Toolbox/js/estimations/delivery'
        }
    },
    shim: {
        wesupplyestimations: {
            deps: ['jquery']
        },
        wesupplyOrderView: {
            deps: ['jquery']
        },
        loadIframe: {
            deps: ['jquery']
        },
        iframeResizer: {
            deps: ['jquery']
        },
        deliveryEstimate: {
            deps: ['jquery']
        }
    },
    config: {
        mixins: {
            'Magento_Checkout/js/model/shipping-save-processor/payload-extender': {
                'WeSupply_Toolbox/js/estimations/model/shipping-save-processor/payload-extender': true
            }
        }
    }
};

require.config(config);
})();
(function() {
var config = {
    map: {
        '*': {
            ajaxinfinitescroll: 'WeltPixel_AjaxInfiniteScroll/js/ajaxinfinitescroll',
            ias: 'WeltPixel_AjaxInfiniteScroll/js/jquery-ias.min'
        }
    },
    shim : {
        ias: ['jquery']
    }
};

require.config(config);
})();
(function() {
var config = {
    map: {
        '*': {
            mute_migrate: 'WeltPixel_FrontendOptions/js/mute_migrate'
        }
    },
    shim: {
        'jquery/jquery-migrate': {
            deps: ['jquery','mute_migrate']
        }
    }
};

require.config(config);
})();
(function() {
var config = {
    config: {
        mixins: {
            'mage/sticky': {
                'WeltPixel_CustomHeader/js/sticky-mixin': true
            }
        }
    }
};
require.config(config);
})();
(function() {
var config = {
    map: {
        '*': {
            designelements_base: 'WeltPixel_DesignElements/js/designelements_base',
            designelements_default: 'WeltPixel_DesignElements/js/designelements_default',
            toggles_accordions_tabs: 'WeltPixel_DesignElements/js/toggles_accordions_tabs',
            jRespond: 'WeltPixel_DesignElements/js/canvas/jRespond',
            Morphext: 'WeltPixel_DesignElements/js/canvas/Morphext',
            headings_blockquotes: 'WeltPixel_DesignElements/js/headings_blockquotes',
            smooth_scrolling:  'WeltPixel_DesignElements/js/smooth_scrolling',
            Alert: 'WeltPixel_DesignElements/js/bootstrap/alert',
            Button: 'WeltPixel_DesignElements/js/bootstrap/button',
            Dropdown: 'WeltPixel_DesignElements/js/bootstrap/dropdown',
            testimonialsGrid:  'WeltPixel_DesignElements/js/testimonialsGrid',
            flexslider: 'WeltPixel_DesignElements/js/canvas/jquery.flexslider',
            load_flex_slider: 'WeltPixel_DesignElements/js/load_flex_slider',
            stellar: 'WeltPixel_DesignElements/js/canvas/jquery.parallax',
            load_parallax: 'WeltPixel_DesignElements/js/load_parallax',
            jquery_important: 'WeltPixel_DesignElements/js/canvas/jquery.important',
            animations:  'WeltPixel_DesignElements/js/animations',
            aos_animation:  'WeltPixel_DesignElements/js/aos',
            jquery_transition: 'WeltPixel_DesignElements/js/canvas/jquery.transition',
            btt_button:  'WeltPixel_DesignElements/js/btt_button',
        }
    },
    shim: {
        "mage/tabs": {
            deps: ['toggles_accordions_tabs']
        },
        Morphext: {
            deps: ['jquery']
        },
        toggles_accordions_tabs: {
            deps: ['jquery']
        },
        Alert: {
            deps: ['jquery']
        },
        Button: {
            deps: ['jquery']
        },
        Dropdown: {
            deps: ['jquery']
        },
        flexslider: {
            deps: ['jquery']
        },
        stellar: {
            deps: ['jquery']
        },
        jquery_important: {
            deps: ['jquery']
        },
        jquery_transition: {
            deps: ['jquery']
        }
    },
    config: {
        mixins: {
            'mage/collapsible': {
                'WeltPixel_DesignElements/js/collapsible-mixin': true
            }
        }
    }
};

require.config(config);
})();
(function() {
var config = {
    map: {
        '*': {
            full_page: 'WeltPixel_FullPageScroll/js/jquery.fullPage',
            scrolloverflow: 'WeltPixel_FullPageScroll/js/scrolloverflow',
            fullpagescroll: 'WeltPixel_FullPageScroll/js/fullPageScroll'
        }
    },
    shim: {
        fullpagescroll: {
            deps: ['jquery', 'full_page']
        }
    }
};
require.config(config);
})();
(function() {
var config = {
    map: {
        '*': {
            weltpixel_gtm: 'WeltPixel_GoogleTagManager/js/weltpixel_gtm',
            weltpixel_persistentLayer: 'WeltPixel_GoogleTagManager/js/weltpixel_persistentlayer'
        }
    }
};
require.config(config);
})();
(function() {
var config = {
    map: {
        '*': {
            Instafeed: 'WeltPixel_InstagramWidget/js/Instafeed',
            shufflejs: 'WeltPixel_InstagramWidget/js/Shuffle',
            polyfill: 'WeltPixel_InstagramWidget/js/Polyfill',
            instagramFeed: 'WeltPixel_InstagramWidget/js/instagramFeed',
            instagramFeedBasic: 'WeltPixel_InstagramWidget/js/instagramFeedBasic'
        }
    },
    shim: {
        Instafeed: {
            deps: ['jquery']
        },
        shufflejs : {
            deps: ['polyfill']
        },
        instagramFeed: {
            deps: ['jquery']
        },
        instagramFeedBasic: {
            deps: ['jquery']
        }
    }
};

require.config(config);
})();
(function() {
var config = {
    map: {
        '*': {
            owl_carousel: 'WeltPixel_OwlCarouselSlider/js/owl.carousel',
            owl_config: 'WeltPixel_OwlCarouselSlider/js/owl.config',
            owlAjax: 'WeltPixel_OwlCarouselSlider/js/owlAjax'
        }
    },
    shim: {
        owl_carousel: {
            deps: ['jquery']
        },
        owl_config: {
            deps: ['jquery','owl_carousel']
        },
        owlAjax: {
            deps: ['jquery','owl_carousel', 'owl_config']
        }
    }
};
require.config(config);
})();
(function() {
var config = {
    map: {
        '*': {
            productPage: 'WeltPixel_ProductPage/js/productPage',
        }
    },
    shim: {
        productPage: {
            deps: ['jquery']
        }
    }
};
require.config(config);
})();
(function() {
var config = {
    map: {
        '*': {
            weltpixel_quickcart: 'WeltPixel_QuickCart/js/quickcart'
        }
    }
};
require.config(config);
})();
(function() {
var config = {
    map: {
        '*': {
            magnificPopup: 'WeltPixel_Quickview/js/jquery.magnific-popup.min',            
            weltpixel_quickview: 'WeltPixel_Quickview/js/weltpixel_quickview'
        }
    },
    shim: {
        magnificPopup: {
            deps: ['jquery']
        }
    }
};
require.config(config);
})();
(function() {
var config = {
    map: {
        '*': {
            weltpixel_searchautocomplete: 'WeltPixel_SearchAutoComplete/js/searchautocomplete'
        }
    }
};
require.config(config);
})();
(function() {
var config = {
    map: {
        '*': {
            'sociallogin': 'WeltPixel_SocialLogin/js/sociallogin',
            'slReferer': 'WeltPixel_SocialLogin/js/slreferer'
        }
    }
};
require.config(config);
})();
(function() {
var config = {
    deps: ['js-cookie/cookie-wrapper']
};

require.config(config);
})();
(function() {
var config = {
    config: {
        mixins: {
            'Magento_Checkout/js/view/registration': {
                'WeltPixel_ThankYouPage/js/view/registration': true
            }
        }
    }
};
require.config(config);
})();
(function() {
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    deps: [
        'Magento_Theme/js/theme'
    ]
};

require.config(config);
})();
(function() {
var config = {
    config: {
        mixins: {
            'Magento_Swatches/js/swatch-renderer': {
                'WeltPixel_CategoryPage/js/swatch-renderer': true
            }
        }
    }
};
require.config(config);
})();



})(require);