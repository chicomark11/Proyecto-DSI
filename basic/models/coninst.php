<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "CONVENIOINSTITUCION".
 *
 * @property integer $ID_INSTITUCION
 * @property integer $ID_CONVENIO
 *
 * @property CONVENIO $iDCONVENIO
 * @property INSTITUCION $iDINSTITUCION
 */
class coninst extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'CONVENIOINSTITUCION';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_INSTITUCION', 'ID_CONVENIO'], 'required'],
            [['ID_INSTITUCION', 'ID_CONVENIO'], 'integer'],
            [['ID_CONVENIO'], 'exist', 'skipOnError' => true, 'targetClass' => CONVENIO::className(), 'targetAttribute' => ['ID_CONVENIO' => 'ID_CONVENIO']],
            [['ID_INSTITUCION'], 'exist', 'skipOnError' => true, 'targetClass' => INSTITUCION::className(), 'targetAttribute' => ['ID_INSTITUCION' => 'ID_INSTITUCION']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_INSTITUCION' => 'Id  Institucion',
            'ID_CONVENIO' => 'Id  Convenio',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIDCONVENIO()
    {
        return $this->hasOne(CONVENIO::className(), ['ID_CONVENIO' => 'ID_CONVENIO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIDINSTITUCION()
    {
        return $this->hasOne(INSTITUCION::className(), ['ID_INSTITUCION' => 'ID_INSTITUCION']);
    }
}
