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
            [['ID_COORDINADOR', 'ID_TIPO_CONVENIO', 'ID_ESTADO_CONVENIO', 'FECHA_INICIO', 'FECHA_TERMINO','VIGENCIA','NOMBRE_CONVENIO', 'DESCRIPCION'], 'required'],

            [['ID_COORDINADOR', 'ID_TIPO_CONVENIO', 'ID_ESTADO_CONVENIO'], 'integer'],
            
            [['FECHA_INICIO', 'FECHA_TERMINO'], 'safe'],
            
            [['VIGENCIA'], 'boolean'],
            
            [['NOMBRE_CONVENIO', 'DESCRIPCION'], 'string', 'max' => 255],
            
            [['ID_COORDINADOR'], 'exist', 'skipOnError' => true, 'targetClass' => COORDINADOR::className(), 'targetAttribute' => ['ID_COORDINADOR' => 'ID_COORDINADOR']],
            [['ID_TIPO_CONVENIO'], 'exist', 'skipOnError' => true, 'targetClass' => TIPOCONVENIO::className(), 'targetAttribute' => ['ID_TIPO_CONVENIO' => 'ID_TIPO_CONVENIO']],
            [['ID_ESTADO_CONVENIO'], 'exist', 'skipOnError' => true, 'targetClass' => ECONVENIO::className(), 'targetAttribute' => ['ID_ESTADO_CONVENIO' => 'ID_ESTADO_CONVENIO']],
              
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_CONVENIO' => 'ID Convenio',
            'ID_COORDINADOR' => 'Coordinador',
            'ID_TIPO_CONVENIO' => 'Tipo de convenio',
            'ID_ESTADO_CONVENIO' => 'Estado de convenio',
            'NOMBRE_CONVENIO' => 'Nombre convenio',
            'FECHA_INICIO' => 'Fecha de inicio',
            'FECHA_TERMINO' => 'Fecha de término',
            'DESCRIPCION' => 'Descripción',
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

    public function getTIPOCONVENIO()
    {
        return $this->hasOne(TIPO_CONVENIO::className(), ['ID_TIPO_CONVENIO' => 'ID_TIPO_CONVENIO']);
    }

    public function getESTADOCONVENIO()
    {
        return $this->hasOne(ESTADO_CONVENIO::className(), ['ID_ESTADO_CONVENIO' => 'ID_ESTADO_CONVENIO']);
    }

}
