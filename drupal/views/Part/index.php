

<div id="main-wrapper" class="clearfix"><div id="main" class="clearfix">

          <div id="breadcrumb"><h2 class="element-invisible">你在这里</h2><div class="breadcrumb"><span class="inline odd first"><a href="">首页</a></span> <span class="delimiter">»</span> <span class="inline even last"><a href="" class="active">Drupal 兼职外包</a></span></div></div>
    
    
    <div id="content" class="column"><div class="section">
            <a id="main-content"></a>
                    <h1 class="title" id="page-title">
          Drupal 兼职外包        </h1>
                          <div class="tabs">
                  </div>
                          <div class="region region-content">
    <div id="block-system-main" class="block block-system">

    
  <div class="content">
    <div class="view view-outsource-project view-id-outsource_project view-display-id-page view-dom-id-7037b0d55459ff6040a3a99f74b656c1">
            <div class="view-header">
      <p><a href="http://drupalct.org/contact-us"><strong>提交需求</strong></a></p>
<p style="color: red;"><i><strong>说明</strong>：因版面问题各任务需求未能详述，参与项目请加QQ：7078141（验证信息：DrupalCT兼职外包）。</i></p>    </div>
  
  
  
      <div class="view-content">
        <foreach name='list' item='list1'>
        <div class="views-row views-row-1 views-row-odd views-row-first">
      
    <div class="views-field views-field-title">        
      <span class="field-content">
        <a href="">{$list1.title}</a>

      </span>  
    </div>  

    <span class="views-field views-field-field-drupal-version">    <strong class="views-label views-label-field-drupal-version">Drupal 版本:</strong>    
        <span class="field-content">{$list1.drupal_version}</span>  
    </span>  


    <span class="views-field views-field-field-project-duration">    <strong class="views-label views-label-field-project-duration">项目周期:</strong>    
        <span class="field-content">{$list1.project_cycle}</span>  
    </span>  


    <span class="views-field views-field-field-project-status"> 
      <span class="field-content">
        <if condition='$list1.project_status eq 1'>未接单
        <elseif condition='$list1.project_status eq 2' />已接单
        <elseif condition='$list1.project_status eq 3' />已完成
        <elseif condition='$list1.project_status eq 4' />进行中
        </if>
      </span>  
    </span>  
  <div class="views-field views-field-body">        
    <div class="field-content">{$list1.body}</div>  
  </div>  
</div>
</foreach>

  
 
      <h2 class="element-invisible">页面</h2>
      <div class="item-list">
        <ul class="pager">
          {$page}
        </ul>
      </div>  

  
  
  
  
</div>  </div>
</div>
  </div>
      

    </div></div> <!-- /.section, /#content -->

    
  </div></div> <!-- /#main, /#main-wrapper -->