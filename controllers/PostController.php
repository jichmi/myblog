<?php
	
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Catalog;
use app\models\Post;
use app\models\FmPost;

class PostController extends Controller
{
	public function behaviors()
	{
	  return [];
	}

	public function actionGetPostList($type = "all",$key = "all"){
	  $type = Yii::$app->request->get("type");
	  $key  = Yii::$app->request->get("key");
    if($type === "catalog"){
      $list = Post::find()->where(['catalog'=>$key,'status'=>1])->all();
      $key  = Catalog::findone(['id'=>$key])->name;
    }
    else if($type === "tag")
      $list = Post::find(['tag'=>'%'.$key.'%','status'=>1])->all();
    else
      $list = Post::find(['summary'=>'%'.$key.'%','status'=>1])->all();
      $model = ["list"=>$list,"key"=>$key,"type"=>$type];
	  return $this->render('list',["model"=>$model]);
	}
	
	public function actionGetPostDetail($title = "all"){
	  $id = Yii::$app->request->get('id');
    $post = Post::findOne(['id'=>$id]);
  return $this->render('detail', ['model' => $post]);
	}
  public function actionCreatPost(){
    $id = Yii::$app->request->get('id');
    $post = Post::findOne(['id'=>$id]);
    $post->status = 1;
    $post->save();
	  return $this->render('detail', ['model' => $post]);
  }
  //need modify
	public function actionAddPost(){
    $model = new FmPost();
	  if ($model->load(Yii::$app->request->post()) && $model->validate()) {
      $res = $model->save();
	    return $this->render('detail', ['model' => $model]);
	  } else {
	    return $this->render('add', ['model' => $model]);
	}
	}
}
