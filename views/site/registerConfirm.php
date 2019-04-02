<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Datos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>Has ingresado la siguiente información:</p>

    <ul> 
		<li><label>Nombre</label>: <?= Html::encode($model->nombre) ?></li> 
		<li><label>Password</label>: <?= Html::encode($model->password) ?></li>
	</ul>

     <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary']) ?>
            </div>
        </div>
</div>