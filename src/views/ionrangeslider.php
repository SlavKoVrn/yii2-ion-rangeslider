<?php

use yii\helpers\Html;

/** @var string $id */
/** @var string $name */
/** @var string $class */
/** @var string $path */

echo Html::textInput($name, '', ['class' => $class, 'id' => $id]);
echo Html::img($path . '/images/loading.gif', ['style' => 'display:none', 'id' => 'ionslider-loading-' . $id]);
