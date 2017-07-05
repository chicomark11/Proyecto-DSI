<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "TIPO_CONVENIO".
 *
 * @property integer $ID_TIPO_CONVENIO
 * @property string $NOMBRE
 *
 * @property CONVENIO[] $cONVENIOs
 */
class TIPOCONVENIO extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'TIPO_CONVENIO';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_TIPO_CONVENIO', 'NOMBRE'], 'required'],
            [['ID_TIPO_CONVENIO'], 'integer'],
            [['NOMBRE'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_TIPO_CONVENIO' => 'Id  Tipo  Convenio',
            'NOMBRE' => 'Nombre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCONVENIOs()
    {
        return $this->hasMany(CONVENIO::className(), ['ID_TIPO_CONVENIO' => 'ID_TIPO_CONVENIO']);
    }
}
