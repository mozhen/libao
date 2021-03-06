<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>新建礼包</title>
		<link rel="stylesheet" href="/libao/Public/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/libao/Public/css/ace.min.css" />
		<link rel="stylesheet" href="/libao/Public/css/font-awesome.min.css" />
		<link rel="stylesheet" href="/libao/Public/css/main.css" />
		<script type="text/javascript" src="/libao/Public/js/jquery-2.2.4.min.js" ></script>
		<script type="text/javascript" src="/libao/Public/js/bootstrap.min.js" ></script>
		<script type="text/javascript" src="/libao/Public/js/ace.min.js" ></script>
		<script type="text/javascript" src="/libao/Public/js/ace-extra.min.js" ></script>
		<script type="text/javascript" src="/libao/Public/js/ace-elements.min.js" ></script>
		<script type="text/javascript" src="/libao/Public/js/fuelux.wizard.min.js" ></script>
		<script type="text/javascript" src="/libao/Public/js/jquery.validate.js" ></script>
		<script type="text/javascript" src="/libao/Public/js/newPackage.js" ></script>
	</head>
	<body>
		<div class="navbar navbar-default index-header-bar" id="navbar">
			<script type="text/javascript">
				try {
					ace.settings.check('navbar', 'fixed')
				} catch (e) {}
			</script>
			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand index-header-logo">
                       <lable>后台管理</lable> 
					</a>

				</div>

			</div>
		</div>
		<div class="main-container-inner main-container">
	        <a class="menu-toggler" id="menu-toggler" href="#">
	            <span class="menu-text"></span>
	        </a>
	        <div class="sidebar" id="sidebar">
		        <script type="text/javascript">
		            try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
		        </script>
		        <ul class="nav nav-list">
		            <li class="active">
		                <a href="<?php echo U('Home/Record/lists');?>">
		                    <i class="icon-dashboard"></i>
		                    <span class="menu-text"> 公众号礼包 </span>
		                </a>
		            </li>
		                
		        </ul><!-- /.nav-list -->
		
		        <script type="text/javascript">
		            try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
		        </script>
	    	</div>
	        <div class="main-content">
		        <div class="breadcrumbs" id="breadcrumbs">
		            <script type="text/javascript">
		                try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
		            </script>
		            <ul class="breadcrumb">
		                <li>
		                    <i class="icon-dashboard"></i>
		                    <span><a href="<?php echo U('Home/Record/lists');?>">公众号礼包</a></span>
		                </li>
		                <li class="active">新建礼包</li>
		            </ul>
		        </div>
		        <div class="page-content padding-top" id="organization-detail">
		        	<div class="tabbable">
						<ul class="nav nav-tabs padding-12 tab-color-blue background-blue " id="myTab4">
							<li class="active">
								<a data-toggle="tab" href="#profile5">新建礼包</a>
							</li>
						</ul>
					</div>
					<div class="tab-content">
						<div id="profile5" class="tab-pane in active row">
				            <form class="form-horizontal importPackage col-sm-10 step1-margin show" id="validation-form-step2"  action="<?php echo U('Home/Index/index');?>" method="POST" enctype="multipart/form-data">
								<div class="form-group">
				                    <label class="control-label col-sm-2 control-label" >游戏名称：</label>
				                    <div class="col-sm-10">
				                        <span><?php echo ($gamename); ?></span>
				                        <input type="hidden" id="parentId" name="gamename" value="<?php echo ($gamename); ?>">
				                    </div>
				                </div>
								<div class="form-group">
									<label class="control-label col-sm-2 control-label" for="giftname">礼包名称：</label>
									<div class="col-sm-10">
										<div class="clearfix">
											<input value="" type="text" id="giftname" name="giftname" class="col-xs-12 col-sm-5 display-block">
										</div>
									</div>
								</div>
				
								<div class="form-group">
									<label class="control-label col-sm-2 control-label" for="code">领取口令：</label>
									<div class="col-sm-10">
										<div class="clearfix">
											<input value="" type="text" id="token" name="token" class="col-xs-12 col-sm-5 display-block">
										</div>
									</div>
								</div>
				
								<div class="form-group">
									<label class="control-label col-sm-2 control-label">礼包内容：</label>
				
									<div class="col-sm-10 ">
										<textarea class="col-xs-12 col-sm-5 display-block" name="content" maxlength="200"  rows="4"  datatype="*" errormsg="请填写活动内容" nullmsg="请填写活动内容" ></textarea>
				
										<div class="Validform_checktip"></div>
				
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2 control-label">使用说明：</label>
				
									<div class="col-sm-10 ">
										<textarea class="col-xs-12 col-sm-5 display-block" name="shuoming" maxlength="200"  rows="4"  datatype="*" errormsg="请填写活动说明" nullmsg="请填写活动说明" ></textarea>
				
										<div class="Validform_checktip"></div>
				
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2 control-label" for="code">试用平台：</label>
									<div class="col-sm-10">
										<div class="clearfix">
											<input value="" type="text" id="platform" name="platform" class="col-xs-12 col-sm-5 display-block">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2 control-label" for="time">有效期：</label>
									<div class="col-sm-10">
										<div class="clearfix">
											<input value="" type="date" id="time" name="time" class="col-xs-12 col-sm-5 display-block">
										</div>
									</div>
								</div>
								<div class="form-group micro-form-group">
									<label class="control-label col-sm-2 control-label">选择文件：</label>
									<div class="col-sm-10">
										<div class="clearfix">
											<input class="upload" id="file" name="file" type="file" />
										<!--  	<input type="button" value="上传" class="btn btn-default btn-radius padding-12" > -->
										</div>
									</div>
								</div>
							
				                <div class="form-group">
									<div class="col-sm-10 col-sm-offset-2">
										<button type="submit" name="submit" id="next-valicty-step2" class="btn-radius padding-12 btn btn-default">确定</button>
									</div>
								</div>
							</form>
						</div>	
					</div>
        		</div>			
			</div>
	    </div>
	</body>
</html>