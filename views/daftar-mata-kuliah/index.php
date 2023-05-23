<!-- <?php
/** @var yii\web\View $this */
?>
<h1>Daftar-Mata-Kuliah/index</h1>
<h2>Tampilan Index</h2>
<h3>Azprialdi Caesar Aqiila</h3>
<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p> -->


<?php 
    use yii\grid\GridView;
?>

<?= 
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'Namamk',
            'Kodemk',
        ]
    ])
?>