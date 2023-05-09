<?php

namespace app\controllers;

class KrsMahasiswaController extends \yii\web\Controller
{
    public function actionPilihMatakuliah()
    {
        return $this->render('pilih-matakuliah');
    }

}
