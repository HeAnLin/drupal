<?php

use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
<div id="main-wrapper" class="clearfix"><div id="main" class="clearfix">

          <div id="breadcrumb"><h2 class="element-invisible">你在这里</h2><div class="breadcrumb"><span class="inline odd first"><a href="">首页</a></span> <span class="delimiter">»</span> <span class="inline even last"><a href="" class="active">Drupal 教程文档</a></span></div></div>
    
    
    <div id="content" class="column"><div class="section">
            <a id="main-content"></a>
                    <h1 class="title" id="page-title">
          Drupal 教程文档        </h1>
                          <div class="tabs">
                  </div>
                          <div class="region region-content">
    <div id="block-system-main" class="block block-system">

    
  <div class="content">
    <div class="view view-writing-list view-id-writing_list view-display-id-page view-dom-id-6fceba774ffb6963a25b870a232806e7">
            <div class="view-header">
      <a href="" style="font-weight: bold;font-size: 16px;">我要投稿</a><br /><br />    </div>
  
  
  
      <div class="view-content">
        <?php foreach ($model as $key => $value) { ; ?>
        <div class="views-row views-row-1 views-row-odd views-row-first">
  <div class="views-field views-field-field-preview">        <div class="field-content"><a href=""><img src="__PUBLIC__/images/{$lists.image}" width="240" height="167" alt="" /></a></div>  </div>  
  <div class="views-field views-field-title">        <span class="field-content"><a href="<?php echo Url::toRoute(['page',['id'=>$value['id']]]);?>"><?php print $value['title'];?> </a></span>  </div>  
  <div class="views-field views-field-body-1">        <div class="field-content"><?php print $value['body']; ?></div>  </div>  </div>
 <?php };?>

  
  
      
  
  
      <h2 class="element-invisible">页面</h2>
      <div class="item-list">
      <ul class="pager">
        <?= LinkPager::widget(['pagination' => $pages]); ?>
      </ul>
      </div>  
  
  
  
  
</div>  </div>
</div>
  </div>
      

    </div></div> <!-- /.section, /#content -->

    
  </div></div> <!-- /#main, /#main-wrapper -->