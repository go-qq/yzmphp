<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"D:\phpStudy\WWW\tp_1\public/../application/admin\view\manger\ajax_update.html";i:1533405507;}*/ ?>
<th>
    <input type="checkbox" name=""  value="<?php echo $dat['id']; ?>" class='checks'>
</th>
<th><?php echo $dat['id']; ?></th>
<th><?php echo $dat['username']; ?></th>
<th><?php echo $dat['lastlogin']==0?'从未登录':date("Y-m-d H:i:s",$dat['lastlogin']); ?></th>
<th>0</th>
<th>
    <?php if($dat['status'] == 1): ?>
    <button class='btn btn-info' onclick="status(this,<?php echo $dat['id']; ?>,<?php echo $dat['status']; ?>)">正常</button>
    <?php else: ?>
    <button class='btn btn-danger' onclick="status(this,<?php echo $dat['id']; ?>,<?php echo $dat['status']; ?>)">禁止</button>
    <?php endif; ?>
</th>

<th>
    <span onclick='del(this,<?php echo $dat['id']; ?>)' class='glyphicon glyphicon-trash'>删除</span> |
    <span onclick='find(<?php echo $dat['id']; ?>)' class='glyphicon glyphicon-pencil' data-toggle="modal" data-target="#edit">修改</span>
</th>