<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php if(emptyflag == 1): ?>你还没有任何回答
    <?php else: ?>
    <?php if(is_array($answers)): foreach($answers as $key=>$vo): ?><a href="__ROOT__/Ask/showusersingle?qid=<?php echo ($vo["question_id"]); ?>"><?php echo ($vo["title"]); ?></a></br><?php endforeach; endif; endif; ?>

</body>
</html>