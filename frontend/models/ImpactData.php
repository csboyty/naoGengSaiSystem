<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "impact_data".
 *
 * @property string $patient_id
 * @property string $TCD
 * @property string $jingdongmaicaichao
 * @property string $MRA
 * @property string $CT
 * @property string $yandongmaiyinghua
 * @property string $dongmaiyinghua
 * @property string $toast_type
 * @property string $ciss_type
 * @property string $chaojixingqizhiliao
 * @property string $nihss_in
 * @property string $nihss_out
 * @property string $rankin
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
            [['TCD', 'jingdongmaicaichao', 'MRA', 'CT', 'yandongmaiyinghua', 'dongmaiyinghua', 'rankin'], 'string'],
            [['patient_id', 'toast_type', 'ciss_type', 'chaojixingqizhiliao'], 'string', 'max' => 32],
            [['nihss_in', 'nihss_out'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'patient_id' => 'Patient ID',
            'TCD' => 'Tcd',
            'jingdongmaicaichao' => 'Jingdongmaicaichao',
            'MRA' => 'Mra',
            'CT' => 'Ct',
            'yandongmaiyinghua' => 'Yandongmaiyinghua',
            'dongmaiyinghua' => 'Dongmaiyinghua',
            'toast_type' => 'Toast Type',
            'ciss_type' => 'Ciss Type',
            'chaojixingqizhiliao' => 'Chaojixingqizhiliao',
            'nihss_in' => 'Nihss In',
            'nihss_out' => 'Nihss Out',
            'rankin' => 'Rankin',
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
