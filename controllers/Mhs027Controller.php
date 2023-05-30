<?php

namespace app\controllers;
use app\models\Mhs027;
use yii\data\ActiveDataProvider;
use Yii;

class Mhs027Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mhs027::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionCreate(){
       $mhs027  = new Mhs027;
       $mhs027->no_induk_mahasiswa = '60200121027'.rand(100,999);
       $mhs027->nama_mahasiswa = 'Azprialdi Caesar Aqiila';
       $mhs027->kelas = 'B';
       $mhs027->status = 'Baru';
       if ($mhs027->save()){
        Yii::$app->session->setFlash('success', 'ata Tersimpan');
        return $this->redirect(['index']);
       }
    }
    public function actionUpdate($id){
        $mhs027 = Mhs027::findOne(['id' => $id]);
        if($mhs027 !== null){
            $mhs027->kelas = 'D';
            $mhs027->status = 'Update';
            $mhs027->save();
            Yii::$app->session->setFlash('Success', 'Data Tersimpan');
        }
        return $this->redirect(['index']);
    }
    public function actionDelete($id){
        $mhs027 = Mhs027::findOne($id);
        if($mhs027->delete()){
            return $this->redirect(['index']);
        }
    }
    public function actionView($id){
        $mhs027 = Mhs027::findOne($id);
        return $this -> render('view', ['mhs' => $mhs027]);
    }
}
