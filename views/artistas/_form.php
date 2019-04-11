<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Artistas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="artistas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'artista')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'edad')->textInput() ?>

    <?= $form->field($model, 'nacionalidad')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'genero')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
