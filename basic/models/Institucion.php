<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "INSTITUCION".
 *
 * @property integer $ID_INSTITUCION
 * @property string $NOMBRE_INSTITUCION
 * @property string $TIPO_INSTITUCION
 * @property string $PAIS
 * @property string $DIRECCION
 * @property string $TELEFONO
 * @property string $EMAIL
 * @property string $LINK
 * @property boolean $VIGENCIA
 */
class Institucion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'INSTITUCION';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_INSTITUCION'], 'required'],
            [['ID_INSTITUCION'], 'integer'],
            [['VIGENCIA'], 'boolean'],
            [['NOMBRE_INSTITUCION', 'TIPO_INSTITUCION', 'PAIS', 'DIRECCION', 'TELEFONO', 'EMAIL', 'LINK'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_INSTITUCION' => 'Id  Institucion',
            'NOMBRE_INSTITUCION' => 'Nombre  Institucion',
            'TIPO_INSTITUCION' => 'Tipo  Institucion',
            'PAIS' => 'Pais',
            'DIRECCION' => 'Direccion',
            'TELEFONO' => 'Telefono',
            'EMAIL' => 'Email',
            'LINK' => 'Link',
            'VIGENCIA' => 'Vigencia',
        ];
    }
}
