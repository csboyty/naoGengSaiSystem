<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "base_info".
 *
 * @property string $pateient_id
 * @property string $info
 *
 * @property PatientInfo $pateient
 */
class BaseInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'base_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['patient_id'], 'required'],
            [['info'], 'string'],
            [['patient_id'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'patient_id' => 'Pateient ID',
            'info' => 'Info',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPateient()
    {
        return $this->hasOne(PatientInfo::className(), ['id' => 'patient_id']);
    }
}
