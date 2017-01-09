<?php

namespace frontend\controllers;

use Yii;
use frontend\models\ImpactData;
use frontend\models\PatientInfo;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\AccessControl;
use common\components\AccessRule;
use common\models\User;

/**
 * Controller implements the CRUD actions for User model.
 */
class ImpactDataController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                // We will override the default rule config with the new AccessRule class
                'ruleConfig' => [
                    'class' => AccessRule::className(),
                ],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => [
                            User::ROLE_ADMIN
                        ]
                    ]
                ]
            ]
        ];
    }

    /**
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex($id)
    {
        $patient = $this->findPatientModel($id);
        $impactData = $this->findModel($id);
        $pageName="ngs-index";
        switch($patient->disease_type){
            case "脑梗塞":
                $pageName="ngs-index";
                break;
            case "脑出血":
                $pageName="ncx-index";
                break;
            case "蛛网膜下腔出血":
                $pageName="sah-index";
                break;
        }
        return $this->render($pageName,[
            'patient' => $patient,
            'impactData' => json_decode($impactData->info)
        ]);
    }

    public function actionInfoUpdate(){
        $params=Yii::$app->request->post();
        $model=$this->findModel($params["patientId"]);
        $col=$params["col"];
        $type=$params["type"];

        if(!$model){
            $model=new ImpactData();
            if($type){
                $info=array($type=>$params[$type]);
            }else{
                $info=$params[$col];
            }
            $model->patient_id=$params["patientId"];
        }else{
            if(isset($model->$col)){
                $info=$model->$col;
                $info=json_decode($info);
                if($type){
                    $info->$type=$params[$type];
                }else{
                    $info=$params[$col];
                }

            }else{
                if($type){
                    $info=array($type=>$params[$type]);
                }else{
                    $info=$params[$col];
                }
            }
        }

        if($type){
            $model->$col=json_encode($info);
        }else{
            $model->$col=$info;
        }

        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        if($model->save()){
            return [
                "success"=>true
            ];
        }else{
            return [
                "success"=>false,
                "error_code"=>"diagnoseInfoUpdateError"
            ];
        }
    }

    protected function findModel($patientId)
    {
        if (($model = ImpactData::findOne(['patient_id' => $patientId])) !== null) {
            return $model;
        } else {
            return false;
        }
    }

    protected function findPatientModel($id)
    {
        if (($model = PatientInfo::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
