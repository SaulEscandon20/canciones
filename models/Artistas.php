<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "artistas".
 *
 * @property int $id
 * @property string $artista
 * @property int $edad
 * @property string $nacionalidad
 * @property string $genero
 *
 * @property Albumes[] $albumes
 * @property Canciones[] $canciones
 */
class Artistas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'artistas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['artista', 'nacionalidad', 'genero'], 'string'],
            [['edad'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'artista' => 'Artista',
            'edad' => 'Edad',
            'nacionalidad' => 'Nacionalidad',
            'genero' => 'Genero',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlbumes()
    {
        return $this->hasMany(Albumes::className(), ['id_artista' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCanciones()
    {
        return $this->hasMany(Canciones::className(), ['id_artista' => 'id']);
    }
}
