<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "CONVENIO".
 *
 * @property integer $ID_CONVENIO
 * @property integer $ID_COORDINADOR
 * @property integer $ID_TIPO_CONVENIO
 * @property integer $ID_ESTADO_CONVENIO
 * @property string $NOMBRE_CONVENIO
 * @property string $FECHA_INICIO
 * @property string $FECHA_TERMINO
 * @property string $DESCRIPCION
 * @property boolean $VIGENCIA
 *
 * @property COORDINADOR $iDCOORDINADOR
 */
class Convenio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'CONVENIO';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_CONVENIO'], 'required'],
            [['ID_CONVENIO', 'ID_COORDINADOR', 'ID_TIPO_CONVENIO', 'ID_ESTADO_CONVENIO'], 'integer'],
            [['FECHA_INICIO', 'FECHA_TERMINO'], 'safe'],
            [['VIGENCIA'], 'boolean'],
            [['NOMBRE_CONVENIO', 'DESCRIPCION'], 'string', 'max' => 255],
            [['ID_CONVENIO'], 'unique'],
            [['ID_COORDINADOR'], 'exist', 'skipOnError' => true, 'targetClass' => COORDINADOR::className(), 'targetAttribute' => ['ID_COORDINADOR' => 'ID_COORDINADOR']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_CONVENIO' => 'Id  Convenio',
            'ID_COORDINADOR' => 'Id  Coordinador',
            'ID_TIPO_CONVENIO' => 'Id  Tipo  Convenio',
            'ID_ESTADO_CONVENIO' => 'Id  Estado  Convenio',
            'NOMBRE_CONVENIO' => 'Nombre  Convenio',
            'FECHA_INICIO' => 'Fecha  Inicio',
            'FECHA_TERMINO' => 'Fecha  Termino',
            'DESCRIPCION' => 'Descripcion',
            'VIGENCIA' => 'Vigencia',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIDCOORDINADOR()
    {
        return $this->hasOne(COORDINADOR::className(), ['ID_COORDINADOR' => 'ID_COORDINADOR']);
    }
}
