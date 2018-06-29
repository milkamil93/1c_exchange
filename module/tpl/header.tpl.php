<?php
include_once MODX_MANAGER_PATH . 'includes/header.inc.php';
?>
<h1>1C Exchange</h1>
<div class="container container-body">
    <ul class="actionButtons" style="float:left">
        <li><a href="<?=$mod_page.'&action=load_attributes'?>"><img src="media/style/<?php echo $theme; ?>/images/icons/table.gif" alt="">&nbsp; Свойства номенклатуры</a></li>
    </ul>
    <ul class="actionButtons" style="float:left">
        <li><a href="<?=$mod_page.'&action=load_options'?>"><img src="media/style/<?php echo $theme; ?>/images/icons/table.gif" alt="">&nbsp; Харктеристики номенклатуры</a></li>
    </ul>
    <ul class="actionButtons" style="float:left">
        <li><a href="<?=$mod_page.'&action='?>"><img src="media/style/<?php echo $theme; ?>/images/icons/refresh.gif" alt="">&nbsp; Настройки</a></li>
    </ul>
</div>