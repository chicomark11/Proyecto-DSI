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
            [['NOMBRE_INSTITUCION', 'TIPO_INSTITUCION', 'PAIS', 'DIRECCION', 'TELEFONO', 'EMAIL', 'LINK','VIGENCIA'], 'required'],
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
            'ID_INSTITUCION' => 'ID Institución',
            'NOMBRE_INSTITUCION' => 'Nombre de la institución',
            'TIPO_INSTITUCION' => 'Tipo de institución',
            'PAIS' => 'País',
            'DIRECCION' => 'Dirección',
            'TELEFONO' => 'Teléfono',
            'EMAIL' => 'E-Mail',
            'LINK' => 'Link',
            'VIGENCIA' => 'Vigencia',
        ];
    }
}
