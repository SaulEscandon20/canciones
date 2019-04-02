<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CalculadoraForm */
/* @var $form ActiveForm */

$this->title = 'Calculadora';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form">
	<h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->errorSummary($model); ?>

    	<div class="row">
    		<?= $form->field($model, 'x') ?>
    	</div>
    	<div class="row">
    		 <?= $form->field($model, 'operador[]')->dropDownList(
            ['+' => '+', '-' => '-', '*' => '*', '/' => '/']
    	); ?>
    	</div>
    	<div class="row">
    		<?= $form->field($model, 'y') ?>
    	</div>

    	<div class="row">
    		<?= $form->field($model, 'result') ?>
    	</div>

		<div class="row">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>

        
    <?php ActiveForm::end(); ?>

</div><!-- calculadora-calculadora -->
