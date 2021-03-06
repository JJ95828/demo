<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Sure" email="Sure@tuiyilin.com">
	<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<meta content="yes" name="apple-mobile-web-app-capable" />
	<meta content="black" name="apple-mobile-web-app-status-bar-style" />
	<meta content="telephone=no" name="format-detection" />
	<title>优质内容录入中心</title>
	<link rel="stylesheet" href="http://localhost/koudai/kdxs/static/css/lib/weui.css">
	<style>
	.main-head {
		padding-top: 50px;
		padding-bottom: 20px;
		text-align: center;
		font-weight: 100;
	}
	.sub-btn{
		padding:0 5%;
	}
	</style>
</head>
<body>
	<div class="container">
		<header class="main-head">
			<h1>口袋高校</h1>
			<h3>优质内容、下沙福利录入中心</h3>
		</header>
		<section class="main-page">
			<form action="" >
				<div class="weui-cells__title">类别选择</div>
				<div class="weui-cell weui-cell_select">
	                <div class="weui-cell__bd">
	                    <select class="weui-select" name="data_type">
	                        <option value="1">优质内容</option>
	                        <option value="2">下沙福利</option>
	                    </select>
	                </div>
	            </div>

	            <div class="weui-cells__title">标题</div>
	            <div class="weui-cells">
		            <div class="weui-cell">
		                <div class="weui-cell__bd">
		                    <input name="title" class="weui-input" type="text" placeholder="请输入文章标题">
		                </div>
		            </div>
		        </div>

		        <div class="weui-cells__title">文章来源</div>
	            <div class="weui-cells">
		            <div class="weui-cell">
		                <div class="weui-cell__bd">
		                    <input name="from_author" class="weui-input" type="text" placeholder="请输入文章来自于哪里">
		                </div>
		            </div>
		        </div>

		        <div class="weui-cells__title">文字摘要</div>
	            <div class="weui-cells">
		            <div class="weui-cell">
		                <div class="weui-cell__bd">
		                    <input name="synopsis" class="weui-input" type="text" placeholder="文字摘要">
		                </div>
		            </div>
		        </div>

				<div class="weui-cells__title">本系统只针对，微信公众号录入</div>
				<div class="weui-cells weui-cells_form">
		            <div class="weui-cell">
		                <div class="weui-cell__bd">
		                    <textarea id="link" name="link" class="weui-textarea" placeholder="请输入公众号图文链接 http:// 或者 https:// 开头" rows="3" ></textarea>
		                    <div id="link_num" class="weui-textarea-counter"><span>0</span>/200</div>
		                </div>
		            </div>
		        </div>
				<div class="sub-btn">
		        	<button id="submit" type="submit" class="weui-btn weui-btn_primary">提交</button>
				</div>
			</form>
	    </section>
        <div class="weui-footer">
            <p class="weui-footer__text">Copyright © 2016-2020 口袋高校</p>
        </div>
	</div>
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.js"></script>
	<script>
		$('#submit').click(function(){
			var linkReg =  /^(http(s)?:\/\/)([\w-]+\.)?[\w-]+\.\w{2,4}(\/)?[^\t\n\v\r]+$/
				,
				val = $('#link').val();
			console.log( linkReg.test( val ) );
			if( !linkReg.test( val ) ){
				return false;
			} else {
				return  true;
			}
		});

		$('#link').keyup(function(){
			$("#link_num span").html( $(this).val().length );
		});
	</script>
</body>
</html>