<?php

namespace app\controller;

use Yii;
use yii\models\tag;
use yii\models\Post;

class CatalogController extends Controller
{
 public function getPostList($catalog){
     $list = Post::find(['catalog'=>$catalog])->all();
     return $this->render('postlist')
   }   
}
