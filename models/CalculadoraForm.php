<?php

namespace app\models;

use yii\base\Model;

class CalculadoraForm extends Model
{
    public $x;
    public $y;
    public $operador;
    public $result;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['x', 'y', 'operador'], 'required' ],
            [['x', 'y'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'x' => 'Ingresa el numero 1',
            'y' => 'Ingresa el numero 2',
            'result' => 'Resultado',
        ];
    }

}
