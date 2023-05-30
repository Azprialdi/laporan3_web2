<?php

namespace app\controllers;
use app\models\Transkrip;
use yii\data\ActiveDataProvider;

class TranskripController extends \yii\web\Controller
{
    public function actionDelete()
    {
        $transkrip= Transkrip::findOne(['id'=> $id]);
        if ($transkrip->delete()) {
          return $this->redirect(['index']);
        }
 
    }

    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Transkrip::find()
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionTambah()
    {
        $transkrip= new Transkrip();
        if ($transkrip->load($this->request->post()) && $transkrip->save()) {
        return $this->redirect(['index']);
       }
               
       return $this->render('create', ['transkrip' => $transkrip]);

    }

    public function actionUpdate()
    {
        $transkrip= Transkrip::findOne(['id'=> $id]);
       if ($transkrip->load ($this->request->post()) && $transkrip->save()) {
        return $this->redirect(['index']);
       }
           
       return $this->render('update', ['transkrip' => $transkrip]);

    }

}
