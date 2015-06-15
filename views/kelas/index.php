<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kelas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kelas-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kelas', ['create'], ['class' => 'btn btn-success']) ?>
        <?php  var_dump(\Yii::$app->viewPath); ?>
        <?php  var_dump(\Yii::$app->layoutPath); ?>
        <?php  var_dump(\Yii::$app->runtimePath); ?>
        <?php  var_dump(\Yii::$app->vendorPath); ?>
    </p>

    <?php // print_r($this);exit; ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_kelas',
            'nama_kelas',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
