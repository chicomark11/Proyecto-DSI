<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ACTIVIDAD_CONVENIO".
 *
 * @property integer $ID_ACTIVIDAD
 * @property integer $ID_CONVENIO
 * @property string $FECHA_INICIO
 * @property string $FECHA_FIN
 * @property string $DESCRIPCION
 * @property boolean $VIGENTE
 *
 * @property CONVENIO $iDCONVENIO
 */
class Aconvenio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ACTIVIDAD_CONVENIO';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_CONVENIO', 'FECHA_INICIO', 'FECHA_FIN', 'DESCRIPCION', 'VIGENTE'], 'required'],
            [['ID_CONVENIO'], 'integer'],
            [['FECHA_INICIO', 'FECHA_FIN'],'safe'],
            [['VIGENTE'], 'boolean'],
            [['DESCRIPCION'], 'string', 'max' => 255],
            [['ID_CONVENIO'], 'exist', 'skipOnError' => true, 'targetClass' => CONVENIO::className(), 'targetAttribute' => ['ID_CONVENIO' => 'ID_CONVENIO']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_ACTIVIDAD' => 'ID Actividad',
            'ID_CONVENIO' => 'Convenio',
            'FECHA_INICIO' => 'Fecha de inicio',
            'FECHA_FIN' => 'Fecha de término',
            'DESCRIPCION' => 'Nombre de la actividad',
            'VIGENTE' => 'Vigente',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIDCONVENIO()
    {
        return $this->hasOne(CONVENIO::className(), ['ID_CONVENIO' => 'ID_CONVENIO']);
    }
}
