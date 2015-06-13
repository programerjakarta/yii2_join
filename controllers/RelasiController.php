<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Kelas;
use app\models\Guru;

class RelasiController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$model = new Kelas();
		$customer = $model::findOne(5);
		$orders = $customer->getGurus()->all();;
		var_dump($orders);exit;
        return $this->render('index');

        // $dataProvider = new ActiveDataProvider([
        //     'query' => Kelas::find(),
        //     'pagination' => [
       	// 		 'pageSize' => 2,
       	// 		 ],
        // ]);
        // // var_dump($posts);exit;

        // return $this->render('index', [
        //     'dataProvider' => $dataProvider,
        // ]);

    }

    public function actionGuru()
    {
    	$model = new Guru();
    	// SELECT * FROM `customer` WHERE `id` = 123
		$customer = $model::findOne(3);
		// var_dump($customer);exit;
		// SELECT * FROM `order` WHERE `customer_id` = 123
		// $orders is an array of Order objects
		$orders = $customer->getIdKelas();
		var_dump($orders);exit;

        return $this->render('index');
    }

    public function actionGurukelas()
    {
    	$customers = Guru::find()
		    ->select('guru.*')
		    ->leftJoin('kelas', '`kelas`.`id_kelas` = `guru`.`id_kelas`')
		    // ->where(['kelas.status' => Kelas::STATUS_ACTIVE])
		    ->with('idKelas');
		    // var_dump($customers);

    // var_dump($tes);exit;
		// $tes = Guru::find();
		$tes = Guru::find()
			->select('guru.*,kelas.nama_kelas')
		    ->leftJoin('kelas', '`kelas`.`id_kelas` = `guru`.`id_kelas`')
		    ->with('idKelas');
// var_dump($tes);exit;
        $dataProvider = new ActiveDataProvider([
            'query' => $tes,
            'pagination' => [
       			 'pageSize' => 2,
       			 ],
        ]);
        // $posts = $dataProvider->getModels();
      	// var_dump($posts);exit;
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

}
