<?php if(!empty($list)) {
    foreach ($list as $r) {
?>
<div class="demo-mdl-wide mdl-card">
    <div class="mdl-card__title">
        <h3 class="mdl-card__title-text"><?php echo $r->title;?></h3>
    </div>
    <div class="mdl-card__supporting-text"><?php echo $r->description;?></div >
    <div class="mdl-card__actions mdl-card--border">
        <span style="color: #c7c7c7;font-size: 12px;font-weight: normal;">
            <?php echo date('d m月 Y', strtotime($r->updated_at));?>&nbsp;&nbsp;•</span>
        <a href="/article/<?php echo $r->unique_id?>" class="mdl-button mdl-button--accent mdl-js-button mdl-js-ripple-effect"> 继续阅读</a>
    </div>
</div>
<?php
    }
}
?>        