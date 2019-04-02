<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "albumes".
 *
 * @property int $id
 * @property string $album
 * @property int $id_artista
 * @property int $lanzamiento
 * @property string $genero
 *
 * @property Artistas $artista
 * @property Canciones[] $canciones
 */
class Albumes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'albumes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['album', 'genero'], 'string'],
            [['id_artista', 'lanzamiento'], 'integer'],
            [['id_artista'], 'exist', 'skipOnError' => true, 'targetClass' => Artistas::className(), 'targetAttribute' => ['id_artista' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'album' => 'Album',
            'id_artista' => 'Id Artista',
            'lanzamiento' => 'Lanzamiento',
            'genero' => 'Genero',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArtista()
    {
        return $this->hasOne(Artistas::className(), ['id' => 'id_artista']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCanciones()
    {
        return $this->hasMany(Canciones::className(), ['id_album' => 'id']);
    }
}
