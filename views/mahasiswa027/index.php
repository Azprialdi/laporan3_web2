<?php 
    use yii\grid\GridView;
    use app\models\Mahasiswa027;
    use yii\helpers\Html;
    use yii\helpers\Url;
    use yii\grid\ActionColumn;
    use yii\grid\GridViev;
?>

<div class="mhs-nim-index">
    <h1><?= Html::encode($this->title) ?></h1>

    </p>
    <?= Html::button('Mahasiswa Baru', ['class' => 'btn btn-primary']) ?>
    </p>
</div>
<?= 
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'nim',
            'nama',
            'kelas',
            'jurusan',
            'profile027.foto_profile',

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function($action, Mahasiswa027 $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]);
?>


