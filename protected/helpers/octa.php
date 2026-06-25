<?php

/**
 * Public asset URL under /assets (respects app subdirectory, e.g. /octa-main/).
 */
function octa_asset($path = '')
{
	$base = Yii::app()->request->baseUrl . '/assets';
	if ($path === '') {
		return $base;
	}
	return $base . '/' . ltrim($path, '/');
}
