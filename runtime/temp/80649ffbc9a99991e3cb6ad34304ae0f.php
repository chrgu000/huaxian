<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"E:\WWW\huaxian\public/../application/admin\view\city\basics-add.html";i:1527674046;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,member-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
<link rel="icon" href="" type="image/x-icon"/>
<link href="__PUBLIC__/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/lib/icheck/icheck.css" rel="stylesheet" type="text/css" />
<link href="../../../static/admin/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->

<title>添加基础设施</title>
</head>
<body>
<a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" 
 href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
<div class="pd-20">
  <form action="<?php echo url('City/basicsadd'); ?>" method="post" class="form form-horizontal" enctype="multipart/form-data">
    <div class="row cl" style="margin-top: 40px;">
      <label class="form-label col-2"><span class="c-red">*</span>描述：</label>
      <div class="formControls col-8">
          <textarea name="description" class="textarea"  placeholder="请输入基础设施的相关描述内容..." nullmsg="描述内容不能为空！" onKeyUp="textarealength(this,300)"></textarea>
      </div>
    </div>
    <div class="row cl">
      <label class="form-label col-2"><span class="c-red">*</span>卫生：</label>
      <div class="formControls col-8">
          <textarea name="health" class="textarea"  placeholder="请输入卫生的相关内容..." nullmsg="卫生内容不能为空！" onKeyUp="textarealength(this,300)"></textarea>
      </div>
    </div>
    <div class="row cl">
      <label class="form-label col-2"><span class="c-red">*</span>文化：</label>
      <div class="formControls col-8">
          <textarea name="culture" class="textarea"  placeholder="请输入文化的相关内容..." nullmsg="文化内容不能为空！" onKeyUp="textarealength(this,300)"></textarea>
      </div>
    </div>
    <div class="row cl">
      <label class="form-label col-2"><span class="c-red">*</span>教育：</label>
      <div class="formControls col-8">
          <textarea name="edu" class="textarea"  placeholder="请输入教育的相关内容..." nullmsg="教育内容不能为空！" onKeyUp="textarealength(this,300)"></textarea>
      </div>
    </div>
      <div class="col-9 col-offset-3" style="margin-top:10px;">
        <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
        <a href="<?php echo url('City/lst_basics'); ?>" class="btn btn-primary radius">&nbsp;&nbsp;返回&nbsp;&nbsp;</a>
      </div>
    </div>
  </form>
</div>
</div>
<script type="text/javascript" src="__PUBLIC__/lib/jquery/1.9.1/jquery.min.js"></script>  
<script type="text/javascript" src="__PUBLIC__/js/H-ui.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/H-ui.admin.js"></script> 
</body>
</html>