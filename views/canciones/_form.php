<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Canciones */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="canciones-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cancion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_album')->textInput() ?>

    <?= $form->field($model, 'id_artista')->textInput() ?>

    <?= $form->field($model, 'duracion')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
