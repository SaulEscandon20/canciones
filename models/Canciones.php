<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "canciones".
 *
 * @property int $id
 * @property string $cancion
 * @property int $id_album
 * @property int $id_artista
 * @property string $duracion
 *
 * @property Albumes $album
 * @property Artistas $artista
 */
class Canciones extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'canciones';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cancion'], 'string'],
            [['id_album', 'id_artista'], 'integer'],
            [['duracion'], 'safe'],
            [['id_album'], 'exist', 'skipOnError' => true, 'targetClass' => Albumes::className(), 'targetAttribute' => ['id_album' => 'id']],
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
            'cancion' => 'Cancion',
            'id_album' => 'Id Album',
            'id_artista' => 'Id Artista',
            'duracion' => 'Duracion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlbum()
    {
        return $this->hasOne(Albumes::className(), ['id' => 'id_album']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArtista()
    {
        return $this->hasOne(Artistas::className(), ['id' => 'id_artista']);
    }
}
