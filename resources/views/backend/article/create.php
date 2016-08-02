<form method="post" action="/backend-article-create">
    <input type="hidden" name="id" value="<?php echo isset($id)?$id:0;?>"/>
    <div>
        <div style="width: 100%" class="mdl-textfield  mdl-js-textfield mdl-textfield--expandable">
            <input class="mdl-textfield__input" type="text" name="title" value="<?php echo isset($title)?$title:'';?>" />
            <label class="mdl-textfield__label">标题</label>
        </div>
    </div>
    <div>
        <div style="width: 100%" class="mdl-textfield mdl-textfield--expandable mdl-js-textfield">
            <textarea class="mdl-textfield__input" rows="3" name="description"><?php echo isset($description)?$description:'';?></textarea>
            <label class="mdl-textfield__label" for="schools">描述</label>
        </div>
    </div>
    <div>
        <div style="width: 100%" class="mdl-textfield mdl-textfield--expandable mdl-js-textfield">
            <textarea class="mdl-textfield__input" name="content" rows="10"><?php echo isset($content)?$content:'';?></textarea>
            <label class="mdl-textfield__label">内容</label>
        </div>
    </div>
    <!-- Colored raised button -->
    <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">保存</button>
</form>