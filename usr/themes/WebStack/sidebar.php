        <div class="sidebar-menu toggle-others fixed">
            <div class="sidebar-menu-inner">
                <header class="logo-env">
                    <!-- logo -->
                    <div class="logo">
                        <a href="<?php $this->options->siteUrl(); ?>" class="logo-expanded">
                            <img class="logo_size" src="<?php $this->options->Biglogo(); ?>" width="100%" alt="<?php $this->options->IndexName(); ?>" />
                        </a>
                    </div>
                    <div class="mobile-menu-toggle visible-xs">
                        <a href="#" data-toggle="mobile-menu">
                            <i class="fa-bars"></i>
                        </a>
                    </div>
                </header>
                <ul id="main-menu" class="main-menu">
                    <?php $this->widget('Widget_Metas_Category_List')->to($categorys); ?>
                     <?php while ($categorys->next()): ?>
                         <?php if ($categorys->levels === 0): ?>
                             <?php $children = $categorys->getAllChildren($categorys->mid); ?>
                             <?php if (empty($children)) { ?>
                                 <li>
                                     <a href="<?php if ($this->is('index')): ?><?php
            else: ?>/<?php
            endif; ?>#<?php $categorys->name(); ?>" class="smooth">
                                        <i class="fa fa-<?php $categorys->slug(); ?>"></i>
                                        <span class="title"><?php $categorys->name(); ?></span>
                                     </a>
                                 </li>
                             <?php
        } else { ?>
                                 <li>
                                     <a>
                                        <i class="fa fa-<?php $categorys->slug(); ?>"></i>
                                        <span class="title"><?php $categorys->name(); ?></span>
                                     </a>
                                     <ul>
                      <?php foreach ($children as $mid) { ?>
                          <?php $child = $categorys->getCategory($mid); ?>
                          <li>
                              <a href="<?php if ($this->is('index')): ?><?php
                else: ?>/<?php
                endif; ?>#<?php echo $child['name']; ?>" class="smooth"><?php echo $child['name']; ?></a>
                          </li>
                      <?php
            } ?>
                                      </ul>
                                 </li>
                             <?php
        } ?>
                         <?php
    endif; ?>
                     <?php
endwhile; ?>
                     <li class="submit-tag">
                        <a href="<?php $this->options->Isabout(); ?>">
                            <i class="linecons-heart"></i>
                            <span class="smooth">关于本站</span>
                            <span class="label label-Primary pull-right hidden-collapsed">♥</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
        <!--顶部美化开始-->  
   <div class="board">
          <div class="left">
       <ul class="user-info-menu left-links list-inline list-unstyled">	 
     <li><span class="board-title zmki_wap_zsy1"><a href="<?php $this->options->siteUrl(); ?>" ><i class="fa fa-home  "></i> 首页</a></span></li>
	 <li><span class="board-title"><a href="<?php $this->options->zmki_links(); ?>"><i class="fa fa-plus-square  " ></i> 收录提交</a></span></li>
	 <li><span class="board-title "><a href="<?php $this->options->zmki_url(); ?>" target="_blank"><i class="fa fa-heart xiaotubiao" style="color: #fb5962;"></i>&nbsp;<?php $this->options->zmki_name(); ?></a></span></li>
	 <?php if ($this->options->zmki_tianqi == '1'): ?>  
	 <li class="zmki_tianqi zmki_wap"><div class="zmki_wap" id="he-plugin-simple"></div></li>
	 <?php
endif; ?>
	 <?php if ($this->options->zmki_ah == '1'): ?>  
	 <li><div class="zmki_yldh zmki_wap_zsy2"  title="切换模式"><a href="javascript:switchNightMode()"  target="_self"><svg  class="icon zmki_dh" aria-hidden="true"><use xlink:href="#icon-yueliang2"></use></svg></a></div></li> 
	 <?php
endif; ?>
		  </ul>
       </div>
   </div>
   	<li><a type="button" id="fullscreen" > </li> 
   	
<?php if ($this->options->zmki_tianqi == '1'): ?>  
<!--天气开始-->
<!--由于默认调用的免费版每分钟20次API调用限制，如有需求可前往知心天气官网购买服务配置-->
<script>
WIDGET = {
  "CONFIG": {
    "modules": "104",
    "background": "5",
    "tmpColor": "373E4A",
    "tmpSize": "14",
    "cityColor": "373E4A",
    "citySize": "14",
    "aqiColor": "373E4A",
    "aqiSize": "14",
    "weatherIconSize": "25",
    "alertIconSize": "20",
    "padding": "0px 0px 0px 0px",
    "shadow": "0",
    "language": "auto",
    "borderRadius": "7",
    "fixed": "false",
    "vertical": "center",
    "horizontal": "center",
    "key": "07516dfe756c4f0ca1710d083add02bd"
  }
}
</script>
<script 
<script src="https://widget.qweather.net/simple/static/js/he-simple-common.js?v=2.0"></script>
<!--天气结束--> 
<?php
endif; ?>   	
   	<div class="main-content">  
	<!--顶部美化结束-->	  
	<!--顶部新增模块开始	-->
	 <?php if ($this->options->zmki_top_main == '1'): ?>  
		<div  class="wapnone zmki_top_main" style="display: flex;"> 
	  <div class="col-lg-4 wapnone ">
        <a class="colorful-card zmki_top_one"  target="_blank" href="<?php $this->options->zmki_top_main_one_url(); ?>">
          <i class="<?php $this->options->zmki_top_main_one_icon(); ?>"></i><?php $this->options->zmki_top_main_one_name(); ?></a>
      </div>
      <div class="col-lg-4 wapnone ">
        <a class="colorful-card zmki_top_two" target="_blank" href="<?php $this->options->zmki_top_main_two_url(); ?>">
          <i class="<?php $this->options->zmki_top_main_two_icon(); ?>"></i><?php $this->options->zmki_top_main_two_name(); ?></a>
      </div>
      <div class="col-lg-4 wapnone ">
        <a class="colorful-card zmki_top_three"  target="_blank" href="<?php $this->options->zmki_top_main_three_url(); ?>">
          <i class="<?php $this->options->zmki_top_main_three_icon(); ?>"></i><?php $this->options->zmki_top_main_three_name(); ?></a>
      </div>
	  <div class="col-lg-4 wapnone ">
        <a class="colorful-card zmki_top_four"  target="_blank" href="<?php $this->options->zmki_top_main_four_url(); ?>">
          <i class="<?php $this->options->zmki_top_main_four_icon(); ?>"></i><?php $this->options->zmki_top_main_four_name(); ?></a>
      </div> 
      </div>  
      <?php
endif; ?></a>
	<?php if ($this->options->isSearch == '1'): ?>
    <?php $this->need('list_search.php'); ?> 
	<?php
endif; ?> 
	<br>    