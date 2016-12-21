<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "impact_data".
 *
 * @property string $patient_id
 * @property string $info
 *
 * @property PatientInfo $patient
 */
class ImpactData extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'impact_data';
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
            'patient_id' => 'Patient ID',
            'info' => 'Info'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPatient()
    {
        return $this->hasOne(PatientInfo::className(), ['id' => 'patient_id']);
    }
}
