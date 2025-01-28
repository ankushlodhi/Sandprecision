define([
    'jquery',
    './recaptcha-assigner',
    'mage/validation'
], function ($, recaptchaAssigner) {
    'use strict';

    var errorClass = '_error';

    /**
     * [addErrorMessage description]
     */
    function addErrorMessage(element) {
        var messageHtml = '<div generated="true" class="mage-error">' + $.validator.messages.required + '</div>';

        $(element).addClass(errorClass);

        if ($('.mage-error', element).length < 1) {
            $(element).append(messageHtml);
        }
    }

    /**
     * [removeErrorMessage description]
     */
    function removeErrorMessage(element) {
        $(element).removeClass(errorClass);
        $('.mage-error', element).remove();
    }

    return {
        /**
         * Validate recaptcha
         *
         * @returns {Boolean}
         */
        validate: function (hideError) {
            var isValid = true,
                recaptcha = recaptchaAssigner.getRecaptcha(),
                element = recaptcha && recaptcha.element;

            recaptchaAssigner.hideServerResponseMessage = hideError;

            if (recaptcha && recaptcha.options.size !== 'invisible') {
                isValid = !!recaptcha.getResponse();

                if (isValid) {
                    removeErrorMessage(element);
                } else if (!hideError) {
                    addErrorMessage(element);
                    element.get(0).scrollIntoViewIfNeeded && element.get(0).scrollIntoViewIfNeeded();
                }

                // Add listener to validate Recaptcha after response
                $(element).one('recaptchaexecuted', function () {
                    removeErrorMessage(element);
                });
            }

            // `hideError` is "false" when validation is triggered by place order action
            if (isValid && !hideError) {
                // Don't suppress server error when field is valid `hideError` fals is false
                recaptchaAssigner.hideServerResponseMessage = false
            } else {
                // Suppress server error otherwise
                recaptchaAssigner.hideServerResponseMessage = true
            }

            return isValid;
        }
    };
});
