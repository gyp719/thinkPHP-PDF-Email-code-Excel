<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div>
    <form action="<?php echo U('Index/pdf');?>" method="post">
        输入内容：<textarea name="content" cols="30" rows="10"><h1 style="color:red">hello word</h1></textarea>
        <input type="submit" value="生成pdf">
    </form>
</div>
<hr/>
<div>
    <form action="<?php echo U('index/qrcode');?>" method="post">
        <input type="text" name="url" />
        <input type="submit" value="生成二维码" />
    </form>
</div>
<hr/>
<div>
    <form action="<?php echo U('index/xsl');?>" method="post">
        <input type="text" name="data[1][1]" value="1" />
        <input type="text" name="data[1][2]" value="2" />
        <input type="text" name="data[1][3]" value="3" />
        <input type="submit" value="生成xsl文件" />
    </form>
</div>
<hr/>
<div>
    <a href="<?php echo U('index/import_xls');?>" target="_blank">导入xls格式文件</a>
</div>
<hr/>
<div>
    <form action="<?php echo U('index/csv');?>" method="post">
        <input type="text" name="data[2][1]" value="3" />
        <input type="text" name="data[2][2]" value="6" />
        <input type="text" name="data[2][3]" value="9" />
        <input type="submit" value="生成csv文件" />
    </form>
</div>
<hr/>
<div>
    <a href="<?php echo U('index/import_csv');?>" target="_blank">导入csv格式文件</a>
</div>
<hr/>

<div>
    <form action="<?php echo U('Home/Index/send_email');?>" method="post">
        输入邮箱：<input type="text" name="email" value="baijunyao@baijunyao.com">
        <input type="submit" value="发送邮件">
    </form>
</div>
</body>
</html>