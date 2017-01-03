<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\models\tag;
use yii\models\Post;

class TestController extends Controller
{
 public function actionTest1(){
   /*
    $dataS = file_get_contents("/var/log/wtmp");
    $dataA = unpack("",$dataS);
    */
    exec("last",$dataA);
    foreach($dataA as $data)
      print_r($data."<br/>");
   }   
   public function actionTest2(){
    $dataS = file_get_contents("/var/log/wtmp");
    $dataA = unpack("S1*type/i1*pid/C*",$dataS);
      print_r($dataA);
   }
   public function actionTest3(){
    $dataS = file_get_contents("/home/jcm/test/sample.xml");
      print_r($dataS);
   }
   public function actionTest4(){
    $dataS = file_get_contents("/home/jcm/.bash_history");
      print_r($dataS);
   }
 public function actionTest5(){
    exec("dmesg",$dataA);
    foreach($dataA as $data)
      print_r($data."<br/>");
   }   
 
}
