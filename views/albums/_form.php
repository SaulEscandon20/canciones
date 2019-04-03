<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Albumes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="albumes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'album')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_artista')->textInput() ?>

    <?= $form->field($model, 'lanzamiento')->textInput() ?>

    <?= $form->field($model, 'genero')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
