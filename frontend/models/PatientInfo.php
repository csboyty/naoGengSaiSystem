<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "patient_info".
 *
 * @property string $id
 * @property string $disease_type
 * @property string $doctor
 * @property string $date
 * @property string $disease_date
 * @property string $AD
 * @property string $address
 * @property string $tel
 * @property string $fullname
 * @property string $sex
 * @property string $age
 * @property integer $height
 * @property integer $weight
 * @property string $waist
 * @property string $hip
 * @property string $BMI
 *
 * @property BaseInfo $baseInfo
 * @property ImpactData $impactData
 */
class PatientInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'patient_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['date', 'disease_date'], 'safe'],
            [['age'], 'integer'],
            [['id', 'doctor', 'AD', 'address', 'fullname', 'tel', 'disease_type'], 'string', 'max' => 32],
            [['sex'], 'string', 'max' => 2],
            [['waist', 'hip', 'BMI', 'height', 'weight'], 'string', 'max' => 8]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'disease_type' => 'Disease Type',
            'doctor' => 'Doctor',
            'date' => 'Date',
            'disease_date' => 'Disease Date',
            'AD' => 'Ad',
            'address' => 'Address',
            'fullname' => 'Fullname',
            'sex' => 'Sex',
            'age' => 'Age',
            'tel' => 'Tel',
            'height' => 'Height',
            'weight' => 'Weight',
            'waist' => 'Waist',
            'hip' => 'Hip',
            'BMI' => 'Bmi'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBaseInfo()
    {
        return $this->hasOne(BaseInfo::className(), ['patient_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImpactData()
    {
        return $this->hasOne(ImpactData::className(), ['patient_id' => 'id']);
    }
}
