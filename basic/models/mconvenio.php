<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "MODALIDAD_CONVENIO".
 *
 * @property integer $ID_MODALIDAD
 * @property integer $ID_CONVENIO
 * @property string $DESCRIPCION
 *
 * @property CONVENIO $iDCONVENIO
 */
class mconvenio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'MODALIDAD_CONVENIO';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_MODALIDAD', 'ID_CONVENIO', 'DESCRIPCION'], 'required'],
            [['ID_MODALIDAD', 'ID_CONVENIO'], 'integer'],
            [['DESCRIPCION'], 'string', 'max' => 255],
            [['ID_MODALIDAD'], 'unique'],
            [['ID_CONVENIO'], 'exist', 'skipOnError' => true, 'targetClass' => CONVENIO::className(), 'targetAttribute' => ['ID_CONVENIO' => 'ID_CONVENIO']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_MODALIDAD' => 'Id  Modalidad',
            'ID_CONVENIO' => 'Id  Convenio',
            'DESCRIPCION' => 'Descripcion',
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
