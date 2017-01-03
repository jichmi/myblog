<?php

/* @var $this yii\web\View */

$this->title = 'My Index';
?>
<div class="site-index">
<div class="container-fluid">
  <div class="row-fluid">
      <div class="span12">
            <p><strong>专题</strong></p><hr />
            <ul class="nav nav-list">
            <?php foreach($list as $list)
              echo'
            <li class="active">
              <a href="/index.php?r=post%2Fget-post-list&type=catalog&key='.$list->id.'">'.$list->name.'</a>
            </li>'
            ?>
            </ul>
      </div>
  </div>
</div>
</div>
