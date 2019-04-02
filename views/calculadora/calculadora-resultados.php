<?php 
use yii\helpers\Html; 
?> 
<p>You have entered the following information:</p>

<ul> 
	<li><label>Numero 1</label>: <?= Html::encode($model->x) ?></li> 
	<li><label>Operador</label>: <?= Html::encode(implode('', $model->operador)) ?></li> 
	<li><label>Numero 2</label>: <?= Html::encode($model->y) ?></li> 
	<li><label>Resultado</label>: <?= Html::encode($model->result) ?></li> 
</ul>