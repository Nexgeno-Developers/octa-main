<?php
/**
 * Client-side tracking (Facebook Pixel, Brevo SDK).
 * Keys are public in the browser by design; values come from secrets.local.php only.
 */
if (empty(Yii::app()->params['enableClientTracking'])) {
	return;
}

$pixelId = isset(Yii::app()->params['facebookPixelId']) ? Yii::app()->params['facebookPixelId'] : '';
$brevoClientKey = isset(Yii::app()->params['brevoClientKey']) ? Yii::app()->params['brevoClientKey'] : '';
$hasPixel = $pixelId !== '' && strpos($pixelId, 'your-') !== 0;
$hasBrevo = $brevoClientKey !== '' && strpos($brevoClientKey, 'your-') !== 0;

if (!$hasPixel && !$hasBrevo) {
	return;
}
?>
<?php if ($hasPixel): ?>
    <!-- Meta Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return; n = f.fbq = function () {
                n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
            n.queue = []; t = b.createElement(e); t.async = !0;
            t.src = v; s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '<?php echo CHtml::encode($pixelId); ?>');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=<?php echo CHtml::encode($pixelId); ?>&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
<?php endif; ?>
<?php if ($hasBrevo): ?>
<script src="https://cdn.brevo.com/js/sdk-loader.js" async></script>
<script>
    window.Brevo = window.Brevo || [];
    Brevo.push([
        "init",
        {
            client_key: "<?php echo CHtml::encode($brevoClientKey); ?>",
        }
    ]);
</script>
<?php endif; ?>
