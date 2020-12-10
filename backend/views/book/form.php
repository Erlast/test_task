<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $authors array */

$this->title = 'Добавить книгу';

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use brussens\bootstrap\select\Widget as Select;

?>
<div>
    <?php $form = ActiveForm::begin() ?>
    <?= $form->field($model, 'title')->label('Название') ?>
    <?= $form->field($model, 'year')->label('Год выпуска') ?>
    <?= $form->field($model, 'pages')->label('Количество страниц') ?>
    <?= $form->field($model, 'authors[]')
        ->widget(Select::className(), [
            'options' => ['data-live-search' => 'true','multiple'=>'true'],
            'items' => $authors])->label("Авторы"); ?>
    <?= Html::submitButton('Сохранить', ['class' => 'btn btn-sm btn-success']) ?>
    <?php ActiveForm::end() ?>
</div>
