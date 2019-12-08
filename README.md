# IonRangeSlider widget for Yii2 Framework uses Ion.RangeSlider plugin version 2.3.0 for jQuery with pjax support
[IonRangeSlider widget demo page](http://yii2.kadastrcard.ru/ionrangeslider)

The extension uses Ion.RangeSlider plugin version 2.3.0 for jQuery https://github.com/IonDen
and makes user interface for changing min,max values of any range with pjax support

![IonRangeSlider widget](http://yii2.kadastrcard.ru/uploads/ionrangeslider.jpg)

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run:

```bash
composer require slavkovrn/yii2-ion-rangeslider
```

or add

```bash
"slavkovrn/yii2-ion-rangeslider": "*"
```

to the require section of your `composer.json` file.

Usage
-----

Set link to extension in your view:

```php
<?php
use slavkovrn\ionrangeslider\IonRangeSliderWidget;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->widget(IonRangeSliderWidget::class,[
	'min' => 0,
	'max' => 10,
	'from' => 2,
	'to' => 6,
    ]) ?>

    <?= $form->field($model, 'email')->widget(IonRangeSliderWidget::class,[
	'min' => 0,
	'max' => 10,
	'from' => 4,
	'to' => 8,
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>​
```
<a href="mailto:slavko.chita@gmail.com">write comments to admin</a>
