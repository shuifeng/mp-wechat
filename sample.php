<?php
require(__DIR__ . '/vendor/autoload.php');

//获取 OPEN_ID
$wechat = new \SFWechat\WechatBase('app_id', 'app_secret');
$wechat->checkState = false;
$detail = $wechat->getOpenID();

//获取 JS 签名包
$wechat = new \SFWechat\WechatJs('app_id', 'app_secret');
$detail = $wechat->getSignPackage('http://www.example.com');
