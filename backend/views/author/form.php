<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

$this->title = 'Добавить автора';

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\jui\DatePicker;

?>
<div>
    <?php $form = ActiveForm::begin() ?>
    <?= $form->field($model, 'surname')->label('Фамилия') ?>
    <?= $form->field($model, 'name')->label('Имя') ?>
    <?= $form->field($model, 'second_name')->label('Отчество') ?>
    <?= $form->field($model, 'birthday')->widget(DatePicker::class, [
        'language' => 'ru',
        'dateFormat' => 'dd.MM.yyyy',
        'options' => [
            'placeholder' => '',
            'class' => 'form-control',
            'autocomplete' => 'off'
        ],
        'clientOptions' => [
            'changeMonth' => true,
            'changeYear' => true,
            'yearRange' => '1900:2020',
        ]])->label('Дата рождения') ?>
    <?= Html::submitButton('Сохранить', ['class' => 'btn btn-sm btn-success']) ?>
    <?php ActiveForm::end() ?>
</div>
