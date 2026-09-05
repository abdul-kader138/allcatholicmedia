{{-- Reveals the date picker only when the campaign is being scheduled. --}}
<script>
    (function () {
        document.addEventListener('DOMContentLoaded', function () {
            var status = document.querySelector('[data-newsletter-status]');
            var schedule = document.querySelector('[data-newsletter-schedule]');

            if (!status || !schedule) {
                return;
            }

            var sync = function () {
                schedule.style.display = status.value === @json(\Botble\Newsletter\Enums\CampaignStatusEnum::SCHEDULED) ? '' : 'none';
            };

            status.addEventListener('change', sync);
            sync();
        });
    })();
</script>
