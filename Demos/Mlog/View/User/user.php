<div class="user">
    <ul class="nav nav-pills nav-justified">
        <li><a href="<?php echo \M\App::buildUrl('User','post') ?>">文章管理</a></li>
        <li class="active"><a href="<?php echo \M\App::buildUrl('User','user') ?>">账户信息</a></li>
        <li><a href="<?php echo \M\App::buildUrl('User','setting') ?>">账户设置</a></li>
    </ul>
</div>
<hr>
<div class="well">共创建 <strong><?php echo $postNumber?></strong> 篇文章</div>
<div class="well">共创建 <strong><?php echo $tagNumber?></strong> 个标签</div>
