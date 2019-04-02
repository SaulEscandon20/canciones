<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\CalculadoraForm;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class CalculadoraController extends Controller
{
    public function actionCalculadora()
    {
    	$model = new CalculadoraForm;

    	if ($model->load(Yii::$app->request->post()) && $model->validate()) {

    		$op = implode('', $model->operador);

   			if ($op == '+') {
   				$model->result = $model->x + $model->y;
   			}
   			if ($op == '-') {
   				$model->result = $model->x - $model->y;
   			}
   			if ($op == '*') {
   				$model->result = $model->x * $model->y;
   			}
   			if ($op == '/') {
   				$model->result = $model->x / $model->y;
   			}
    		
        	return $this->render('calculadora', ['model' => $model]);
    	} else {

    		return $this->render('calculadora', ['model' => $model]); 
    	} 
    }

}
