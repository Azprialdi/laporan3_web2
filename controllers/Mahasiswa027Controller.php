<?php

namespace app\controllers;
use app\models\Mahasiswa027;
use app\models\Profile027;
use yii\data\ActiveDataProvider;

class Mahasiswa027Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa027::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionProfile()
    {
        $profile = Profile027::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $profile
        ]);
        return $this->render('profile', [
            'dataProvider' => $dataProvider,
        ]);
    }


}
