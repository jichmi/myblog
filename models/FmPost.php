<?php

namespace app\models;

class FmPost extends \yii\base\Model
{
  private $id;
  public  $title;
  public  $summary;
  public  $content;
  public  $tags;
  public  $catalog = 1;
  private $post;
  public function rules()
  {
    return [
    [['title','content','summary','tags'],'required'],
    [['catalog'],'number'],
    ];
  }
  public function _construct(){
    parent::_construct(); 
    $id = Yii::$app->request->get('id');
    if($id == null){
      $this->post = new Post();
      $post->save();
      }
    else{
      $this->post = Post::findOne(['id'=>$id]);
      $this->title = $post->title;
      $this->content = $post->content;
      $this->summary = $post->summary;
      $post->tags = $this->tags;
      $post->catalog = $this->catalog;
      }
    }
 public function save(){
      $post = $this->post;
      $post->title = $this->title;
      $post->content = $this->content;
      $post->summary = $this->summary;
      $post->tags = $this->tags;
      $post->catalog = $this->catalog;
      return $post->save();
   } 
}
