<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "OBJETIVO_CONVENIO".
 *
 * @property integer $ID_OBJETIVO
 * @property integer $ID_CONVENIO
 * @property string $DESCRIPCION
 *
 * @property CONVENIO $iDCONVENIO
 */
class OBJETIVOCONVENIO extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'OBJETIVO_CONVENIO';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_OBJETIVO', 'ID_CONVENIO', 'DESCRIPCION'], 'required'],
            [['ID_OBJETIVO', 'ID_CONVENIO'], 'integer'],
            [['DESCRIPCION'], 'string', 'max' => 255],
            [['ID_OBJETIVO'], 'unique'],
            [['ID_CONVENIO'], 'exist', 'skipOnError' => true, 'targetClass' => CONVENIO::className(), 'targetAttribute' => ['ID_CONVENIO' => 'ID_CONVENIO']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_OBJETIVO' => 'Id  Objetivo',
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
