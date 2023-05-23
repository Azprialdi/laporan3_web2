<?php

namespace app\controllers;
use app\models\Mahasiswa;
use yii\data\ActiveDataProvider;

class MahasiswaController extends \yii\web\Controller
{
    public function actionProfil()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Mahasiswa::find()
        ]);
        return $this->render('profil', [
            'dataProvider' => $dataProvider,
        ]);
    }
    // public function actionUploadBerkas()
    // {
    //     return $this->render('upload-berkas');
    // }

}
