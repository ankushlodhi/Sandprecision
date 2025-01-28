define([
    'mage/utils/wrapper',
    './recaptcha-assigner'
], function (wrapper, recaptchaAssigner) {
    'use strict';

    return function (errorProcessor) {
        errorProcessor.process = wrapper.wrap(
            errorProcessor.process,
            function (originalMethod, response, messageContainer) {
                const params = response && response.responseJSON && response.responseJSON.parameters;
                const [error, initiator] = Array.isArray(params) ? params : [];

                if (initiator == 'Swissup_Recaptcha'
                    && error == 'missing-input-response'
                ) {
                    if (recaptchaAssigner.hideServerResponseMessage) {
                        /* Suppress recaptcha server validation error. Because it wasn't place order action. */
                        return;
                    } else {
                        recaptchaAssigner.hideServerResponseMessage = true;

                        return originalMethod(response, messageContainer);
                    }
                }

                return originalMethod(response, messageContainer);
            }
        );

        return errorProcessor;
    };
});
