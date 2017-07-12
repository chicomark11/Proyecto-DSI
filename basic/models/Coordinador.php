<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "COORDINADOR".
 *
 * @property integer $ID_COORDINADOR
 * @property string $RUT_COORDINADOR
 * @property string $NOMBRE_COORDINADOR
 * @property string $EMAIL
 * @property string $TELEFONO
 * @property string $DIRECCION
 * @property boolean $VIGENCIA
 */
class Coordinador extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'COORDINADOR';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['RUT_COORDINADOR', 'NOMBRE_COORDINADOR', 'EMAIL', 'TELEFONO', 'DIRECCION', 'VIGENCIA'], 'required'],
            [['VIGENCIA'], 'boolean'],
            [['RUT_COORDINADOR', 'NOMBRE_COORDINADOR', 'EMAIL', 'TELEFONO', 'DIRECCION'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_COORDINADOR' => 'ID coordinador',
            'RUT_COORDINADOR' => 'Rut del coordinador',
            'NOMBRE_COORDINADOR' => 'Nombre del coordinador',
            'EMAIL' => 'E-Mail',
            'TELEFONO' => 'Teléfono',
            'DIRECCION' => 'Dirección',
            'VIGENCIA' => 'Vigencia',
        ];
    }
}
