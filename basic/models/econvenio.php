<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ESTADO_CONVENIO".
 *
 * @property integer $ID_ESTADO_CONVENIO
 * @property string $DESCRIPCION
 *
 * @property CONVENIO[] $cONVENIOs
 */
class econvenio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ESTADO_CONVENIO';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_ESTADO_CONVENIO', 'DESCRIPCION'], 'required'],
            [['ID_ESTADO_CONVENIO'], 'integer'],
            [['DESCRIPCION'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_ESTADO_CONVENIO' => 'Id  Estado  Convenio',
            'DESCRIPCION' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCONVENIOs()
    {
        return $this->hasMany(CONVENIO::className(), ['ID_ESTADO_CONVENIO' => 'ID_ESTADO_CONVENIO']);
    }
}
