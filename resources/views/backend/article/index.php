<?php 
if(!empty($list)) {
?>
<table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
    <thead>
    <tr>
        <th class="mdl-data-table__cell--non-numeric">标题</th>
        <th>更新时间</th>
        <th>创建时间</th>
        <th>状态</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($list as $r) { ?>
        <tr>
            <td class="mdl-data-table__cell--non-numeric"><?php echo $r->title;?></td>
            <td><?php echo $r->updated_at;?></td>
            <td><?php echo $r->created_at;?></td>
            <td>
                <?php if($r->publish) { ?>
                    <a href="javascript:;"><i class="material-icons">star</i></a>
                <?php } ?>
            </td>
            <td>
                <a href="/backend-article-create?id=<?php echo $r->id;?>">更新</a>
                <a target="_blank" href="/article/<?php echo $r->unique_id;?>">预览</a>
            </td>
        </tr>
    <?php } ?>    
    </tbody>
</table>
<?php 
} 
?>