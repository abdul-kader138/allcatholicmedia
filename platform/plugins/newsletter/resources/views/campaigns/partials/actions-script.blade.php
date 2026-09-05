{{--
    Campaign actions live inside the main edit form, so they cannot be nested
    <form> elements. They post over fetch() instead and reload on success.
--}}
<script>
    (function () {
        if (window.__newsletterCampaignActionsBound) {
            return;
        }

        window.__newsletterCampaignActionsBound = true;

        document.addEventListener('click', function (event) {
            var button = event.target.closest('[data-newsletter-action]');

            if (!button) {
                return;
            }

            event.preventDefault();

            var confirmMessage = button.dataset.newsletterConfirm;

            if (confirmMessage && !window.confirm(confirmMessage)) {
                return;
            }

            var body = new FormData();
            var emailSelector = button.dataset.newsletterEmailFrom;

            if (emailSelector) {
                var input = document.querySelector(emailSelector);

                if (!input || !input.value) {
                    return;
                }

                body.append('email', input.value);
            }

            button.disabled = true;

            fetch(button.dataset.newsletterAction, {
                method: 'POST',
                body: body,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '',
                    'X-Requested-With': 'XMLHttpRequest',
                    Accept: 'application/json',
                },
            })
                .then(function (response) {
                    return response.json().catch(function () {
                        return {};
                    });
                })
                .then(function (payload) {
                    if (payload.error) {
                        window.Botble ? Botble.showError(payload.message) : window.alert(payload.message);
                        button.disabled = false;

                        return;
                    }

                    if (payload.message && window.Botble) {
                        Botble.showSuccess(payload.message);
                    }

                    // Reload so status badges, counters and available actions
                    // all reflect the new state.
                    if (!emailSelector) {
                        window.setTimeout(function () {
                            window.location.reload();
                        }, 800);

                        return;
                    }

                    button.disabled = false;
                })
                .catch(function () {
                    button.disabled = false;
                });
        });
    })();
</script>
