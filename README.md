# **News**Api #
**v0.1.0**

 一个简单的文字实时通知api（我也不知道为什么这样叫，反正我现在就用它做实时通知😳）

 🖐 前端demo：**Textweb**

 ☕ 后端demo：**news**

主要参考一言api [官网](https://hitokoto.cn "一言官网") [接口地址
](https://v1.hitokoto.cn "一言api接口")（灵感来源）
# 部署

1. 将**news**文件夹下载放置你的网站目录下（hitokoto文本可自定义内容，自由发挥即可）
   访问 http://你的域名/news/就可以看到内容了

2. 引用api使用方法，将下列代码添加到你想显示的位置,参考**Textweb**文件


```
<script type="text/javascript" src="https://你的域名/news/?format=js&charset=utf-8"></script>
    <div id="yiyan"><script>hitokoto()</script></div>
```

## 小程序 ##
  
1. 小程序的后台获取数据方式get/post具体函数格式如下：wx.request({})，具体参数可以参考[小程序开发官方文档](https://developers.weixin.qq.com/miniprogram/dev/framework/ "微信小程序开发文档")
2. 可代码参考**pages**文件，根据需求修改

## 项目代码地址 ##

[Github](https://github.com/2286605128/newsAPI_demo "Github项目地址")

[码云](https://gitee.com/hzxCodecloud/palid_newsAPI-master "码云项目代码地址")
