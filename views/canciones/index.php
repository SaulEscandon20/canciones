<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CancionesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Canciones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="canciones-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Canciones', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'cancion:ntext',
            'id_album',
            'id_artista',
            'duracion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
