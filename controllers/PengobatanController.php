<?php

namespace app\controllers;

use app\models\Obat;
use app\models\Pasien;
use app\models\Pengobatan;
use app\models\Tindakan;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;

class PengobatanController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Pengobatan::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionCreate()
    {
        $model = new Pengobatan();
        $pasien = Pasien::find()->all();
        $tindakan = Tindakan::find()->all();
        $obat = Obat::find()->all();


        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Pengobatan created successfully.');
            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
            'pasien' => $pasien,
            'tindakan' => $tindakan,
            'obat' => $obat,
        ]);
    }



    public function actionView($id)
    {
        $pasien = $this->findModel($id); // Use $pasien instead of $patient
        $pengobatan = new Pengobatan();

        if ($pengobatan->load(Yii::$app->request->post())) {
            $pengobatan->patient_id = $pasien->id;

            if ($pengobatan->save()) {
                Yii::$app->session->setFlash('success', 'Pengobatan saved successfully.');
                return $this->refresh();
            } else {
                Yii::$app->session->setFlash('error', 'Failed to save pengobatan.');
            }
        }

        return $this->render('view', [
            'pasien' => $pasien,
            'pengobatan' => $pengobatan,
            'tindakan' => Tindakan::find()->all(),
            'obat' => Obat::find()->all(),
        ]);
    }


    protected function findModel($id)
    {
        if (($model = Pasien::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
