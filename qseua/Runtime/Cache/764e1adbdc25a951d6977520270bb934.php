<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0042)http://segmentfault.com/q/1010000000313007 -->
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script async="" src="__JS__/markdown.js"></script>
    <meta charset="UTF-8">
    <meta name="apple-itunes-app" content="app-id=593777236">
    <meta property="qc:admins" content="15317273575564615446375">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>同一程序中使用一种数据结构时有多种不同的元素类型，最好的处理方式是？ - SegmentFault</title>
    <meta name="description" content="专业面向开发者的中文技术问答社区">
    <meta name="keywords" content="SegmentFault SF 开发者 程序员 中文 问答 社区">

    <link rel="stylesheet" href="http://s.segmentfault.com/css/normalize.css?13.10.24.1">
    <link rel="stylesheet" href="http://s.segmentfault.com/css/style.css?13.10.24.1">
    <link rel="stylesheet" href="http://s.segmentfault.com/css/responsive.css?13.10.24.1">

    <script type="text/javascript" async=""
            src="__JS__/ga.js"></script>
    <script type="text/javascript" async=""
            src="__JS__/hm.js"></script>
    <script src="__JS__/jquery.js"
            style="color: rgb(51, 51, 51);"></script>
    <script src="__JS__/lib.js"></script>
    <script src="__JS__/highlight.js"></script>

    <!--[if gt IE 8]>
    <link rel="stylesheet" href="http://s.segmentfault.com/css/ie.css?13.10.24.1"/>
    <![endif]-->
    <!--[if lte IE 8]>
    <script src="http://s.segmentfault.com/js/html5.js?13.10.22.3"></script>
    <link rel="stylesheet" href="http://s.segmentfault.com/css/old-ie.css?13.10.24.1"/>
    <![endif]-->

    <link href="http://s.segmentfault.com/img/icon/favicon.ico?13.10.21.1" rel="shortcut icon" type="image/x-icon">
    <link rel="search" type="application/opensearchdescription+xml" href="http://segmentfault.com/opensearch.xml"
          title="SegmentFault">

    <link rel="apple-touch-icon-precomposed" href="http://s.segmentfault.com/img/icon/sf-57.png?13.10.21.1">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="http://s.segmentfault.com/img/icon/sf-72.png?13.10.21.1">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="http://s.segmentfault.com/img/icon/sf-114.png?13.10.21.1">

    <link rel="alternate" type="application/atom+xml" title="订阅 同一程序中使用一种数据结构时有多种不同的元素类型，最好的处理方式是？ - SegmentFault"
          href="http://segmentfault.com/feeds/q/1010000000313007">
    <style type="text/css">
        #answermsg {
            display: none;
        }
    </style>

    <script type="text/javascript">
        $(function(){
            $('#postanswer').click(function(){
//                alert('post answer');
//                alert('cleantha');
                $.get('__ROOT__/Ask/answervalidate', {
                    'qid': '<?php echo ($question["question_id"]); ?>'
                }, function(data){
//                    alert(data);
//                    alert(data.status);
//                    alert(data);
                    if(data.status == 1){
//                        alert('fine');
                        $('#answermsg').hide();
                        $('#postanswerform').submit();
                    }else{
//                        alert('bad');
                        $('#answermsg').show();
                    }
                });
                return false;
            });
        });
    </script>

</head>
<body id="body">

<input type="hidden" id="session"
       data-user="{&quot;id&quot;:&quot;1030000000246353&quot;,&quot;name&quot;:&quot;zjh&quot;,&quot;url&quot;:&quot;http://segmentfault.com/u/zjh&quot;,&quot;rank&quot;:&quot;56&quot;}">

<!--[if lte IE 8]>
<div class="error chromeframe">您的浏览器版本<strong>很旧很旧</strong>，为了正常地访问网站，请升级您的浏览器 <a target="_blank"
                                                                                  href="http://browsehappy.com">立即升级</a>
</div>
<![endif]-->
<div id="answermsg">
    <div id="msg-bar" class="warn is-sticky" style="width: 1349px; position: fixed;">
        <a title="关闭" class="i-cancel msg-close right" id="closelower">✕</a><strong>你已经回答过这个问题了，如果有什么想说的修改你的回答吧</strong>
    </div>
</div>

<nav class="global-nav clearfix">
    <a href="http://segmentfault.com/q/1010000000313007###" id="site-nav-btn">导航</a>
    <ul class="site-nav mobi-hide">
        <li><a href="http://segmentfault.com/">问答</a></li>
        <li><a href="http://segmentfault.com/blogs">博客</a></li>
        <!-- <li><a href="http://segmentfault.com/news">新闻</a></li> -->
        <li><a href="http://segmentfault.com/tags">标签</a></li>
        <li><a href="http://segmentfault.com/users">用户</a></li>
        <li><a href="http://segmentfault.com/badges">徽章</a></li>
        <li><a href="http://segmentfault.com/events">活动</a></li>
    </ul>
    <ul class="user-nav">
        <li class="has-dropdown">
            <a href="http://segmentfault.com/ask">撰写</a>
            <ul class="dropdown-item hid">
                <li><a href="http://segmentfault.com/ask">提出问题</a></li>
                <li><a href="http://segmentfault.com/write">撰写文章</a></li>
                <li class="hr"><a href="http://segmentfault.com/drafts">草稿</a></li>
            </ul>
        </li>
        <li class="has-dropdown">
            <a id="msg-link" href="http://segmentfault.com/user/events">消息<span class=""></span></a>
            <ul id="msg-box" class="dropdown-msg"></ul>
        </li>
        <li class="has-dropdown">
            <a href="http://segmentfault.com/u/zjh">zjh <i class="i-arrow-s"></i></a>
            <ul class="dropdown-item hid">
                <li><a href="http://segmentfault.com/u/zjh">我的主页</a></li>
                <li><a href="http://segmentfault.com/user/settings">帐号设置</a></li>
                <li><a href="http://segmentfault.com/user/logout">退出</a></li>
                <li class="hr"><a href="http://segmentfault.com/faq">帮助中心</a></li>
                <li><a href="http://0x.segmentfault.com/">建议反馈</a></li>
            </ul>
        </li>
    </ul>
</nav>
<!-- end .global-nav -->
<header class="site-header">
    <div class="inner clearfix">
        <div class="head-name">
            <a href="http://segmentfault.com/">
                <img alt="SegmentFault" src="./同一程序中使用一种数据结构时有多种不同的元素类型，最好的处理方式是？ - SegmentFault_files/logo.png">
                <strong>问答</strong>
            </a>
        </div>
        <div class="head-search">
            <form id="search" action="http://segmentfault.com/search">
                <input type="text" class="text-27 input-search" name="q" autocomplete="off" spellcheck="false"
                       placeholder="搜索问题，标签，用户" style="z-index: 10;">
                <button class="btn-search" type="submit">搜索</button>
            </form>
            <ul id="search-box" style="display: none;"></ul>
        </div>
        <ul class="head-nav">
            <li class="current"><a href="http://segmentfault.com/">技术问答</a></li>
            <li><a href="http://segmentfault.com/101">新手问答</a></li>
            <li><a href="http://segmentfault.com/sites">子站问答</a></li>
        </ul>
        <div class="head-misc">
            <span>找不到答案？</span> <a class="btn-f-m action" href="http://segmentfault.com/ask">+ 提问</a>
        </div>
    </div>
</header>
<!-- end .site-header -->

<div class="wrap">

<div class="inner edge">
<h1 class="top-title" data-id="1010000000313007"><?php echo ($question["title"]); ?></h1>

<div id="main">
<div id="question">
    <article class="q-post" id="q-1010000000313007" data-id="1010000000313007">
        <div class="post-cell">
            <a href="http://segmentfault.com/q/1010000000313007###" class="post-big-vote">
                <span>0</span>赞
            </a>
            <a href="http://segmentfault.com/q/1010000000313007###" class="post-big-hate tip-pop" data-tip="w:该投票为匿名"
               original-title="">踩</a>

            <a href="http://segmentfault.com/q/1010000000313007###" class="post-fav tip-pop" data-tip="w:关注并收藏"
               original-title="">收藏</a>
        </div>
        <div class="fmt post-content">
            <p><?php echo ($question["body"]); ?></p>
        </div>
        <!-- end .post-content -->
        <div class="post-foot">
            <div class="hor-tabs post-action">
                <a href="./同一程序中使用一种数据结构时有多种不同的元素类型，最好的处理方式是？ - SegmentFault_files/同一程序中使用一种数据结构时有多种不同的元素类型，最好的处理方式是？ - SegmentFault.html"
                   class="i-link">链接</a>
                <!-- <a href="#" class="i-flag">操作</a> -->
            </div>

            <table class="post-parter">
                <tbody>
                <tr>
                    <td>
                        <a href="http://segmentfault.com/u/justjavac" tabindex="-1"><img class="avatar-32"
                                                                                         src="./同一程序中使用一种数据结构时有多种不同的元素类型，最好的处理方式是？ - SegmentFault_files/4069158281-1030000000093539_small"
                                                                                         alt=""></a>
                    </td>
                    <td>
                        <h4><a href="http://segmentfault.com/u/justjavac">justjavac</a><strong>9.1k</strong></h4>9月26日更新
                    </td>
                    <td>
                        <a href="http://segmentfault.com/u/jycomputer" tabindex="-1"><img class="avatar-32"
                                                                                          src="./同一程序中使用一种数据结构时有多种不同的元素类型，最好的处理方式是？ - SegmentFault_files/user-32.png"
                                                                                          alt=""></a>
                    </td>
                    <td class="post-author">
                        <h4><a href="http://segmentfault.com/u/jycomputer">JYcomputer</a><strong>18</strong></h4>9月26日提问<br>
                    </td>
                </tr>
                </tbody>
            </table>
            <ul class="comment-list">
                <li><a class="more-comments" href="http://segmentfault.com/q/1010000000313007#"
                       data-url="http://segmentfault.com/api/comment?do=show&amp;id=1010000000313007">添加评论</a></li>
                <li class="add-comment hidden">
                    <form action="http://segmentfault.com/api/comment?do=post"><input type="hidden"
                                                                                      value="1010000000313007"
                                                                                      name="id">

                        <div class="form-content" style="position: relative;"><textarea name="text"
                                                                                        class="textarea-13 placeholder"
                                                                                        holder="写下您的评论"
                                                                                        style="overflow-y: hidden;"></textarea>

                            <div style="font-family: Menlo, Monaco, Consolas, &#39;Lucida Console&#39;, &#39;Courier New&#39;, monospace; font-size: 13px; font-weight: 400; font-style: normal; color: rgb(51, 51, 51); box-sizing: border-box; text-transform: none; text-decoration: none; letter-spacing: 0px; box-shadow: rgba(0, 0, 0, 0.0980392) 0px 1px 2px 0px inset, rgba(255, 255, 255, 0.498039) 0px 1px 0px 0px; line-height: 20px; text-align: start; vertical-align: top; direction: ltr; background-color: rgb(255, 255, 255); background-image: none; background-attachment: scroll; opacity: 1; width: 100%; height: auto; top: auto; right: auto; bottom: auto; left: auto; margin: 0px; padding: 6px; border: 1px solid rgb(198, 198, 198); position: static; display: none; visibility: visible; z-index: auto; overflow: auto; white-space: pre-wrap; clip: auto; float: none; clear: none; cursor: auto; list-style: none outside none; word-wrap: break-word; min-height: 20px; background-position: 0% 0%; background-repeat: repeat repeat;"></div>
                            <div class="placeholder-wrap"
                                 style="font-family: Menlo, Monaco, Consolas, &#39;Lucida Console&#39;, &#39;Courier New&#39;, monospace; font-size: 13px; font-weight: 400; font-style: normal; color: rgb(153, 153, 153); box-sizing: inherit; text-transform: none; text-decoration: none; letter-spacing: 0px; box-shadow: none; line-height: 20px; text-align: start; vertical-align: middle; direction: ltr; background-color: transparent; opacity: 1; width: 98px; height: 20px; top: 1698px; right: auto; bottom: auto; left: 0px; margin: 0px; padding: 7px 9px; border: none; position: absolute; display: block; visibility: visible; z-index: 10; overflow: auto; white-space: pre-wrap; clip: auto; float: none; clear: none; cursor: text; list-style: none outside none; background-position: initial initial; background-repeat: initial initial;">
                                写下您的评论
                            </div>
                        </div>
                        <div class="form-action"><input type="submit" class="btn btn-l" value="提交评论"></div>
                    </form>
                </li>
            </ul>
            <!-- end .comment-list -->
        </div>
        <!-- end .post-foot -->
    </article>
</div>
<!-- end #question -->
<div id="answer">
    <div class="hor-tabs right">
        <a class="current by-votes" href="http://segmentfault.com/q/1010000000313007#">得票数</a>
        <i></i>
        <a class="by-created" href="http://segmentfault.com/q/1010000000313007#">时间先后</a>
    </div>
    <h2 class="a-title"><?php echo ($answercount); ?> 个回答</h2>

    <!--
    <div class="iamgg-main rounded-2">
        <small><a href="http://segmentfault.com/advertise">赞助商广告</a></small>
    </div>
    -->
    <?php if(is_array($answer)): foreach($answer as $key=>$vo): ?><article class="a-post available" id="a-1020000000315609" data-id="1020000000315609" data-created="1380870838"
                 data-votes="0">
            <div class="post-cell">
                <a href="http://segmentfault.com/q/1010000000313007###" class="post-big-vote">
                    <span>0</span>赞
                </a>
                <a href="http://segmentfault.com/q/1010000000313007###" class="post-big-hate tip-pop" data-tip="w:该投票为匿名"
                   original-title="">踩</a>

                <div class="accept-mark" title="采纳答案">采纳</div>
            </div>
            <div class="fmt post-content">
                <p><?php echo ($vo["body"]); ?></p>
            </div>
            <!-- end .post-content -->
            <div class="post-foot">
                <div class="hor-tabs post-action">
                    <a href="http://segmentfault.com/q/1010000000313007/a-1020000000315609" class="i-link">链接</a>
                    <!-- <a href="#" class="i-flag">操作</a> -->
                </div>

                <table class="post-parter">
                    <tbody>
                    <tr>

                        <td>
                            <a href="http://segmentfault.com/u/bigwangdi" tabindex="-1"><img class="avatar-32"
                                                                                             src="./同一程序中使用一种数据结构时有多种不同的元素类型，最好的处理方式是？ - SegmentFault_files/user-32.png"
                                                                                             alt=""></a>
                        </td>
                        <td class="post-author">
                            <h4><a href="http://segmentfault.com/u/bigwangdi"><?php echo ($vo["username"]); ?></a><strong>2</strong></h4><?php echo ($vo["date_entered"]); ?>回答
                        </td>
                    </tr>
                    </tbody>
                </table>

                <ul class="comment-list">
                    <li><a class="more-comments" href="http://segmentfault.com/q/1010000000313007#"
                           data-url="http://segmentfault.com/api/comment?do=show&amp;id=1020000000315609">显示评论 (1条)</a></li>
                    <li class="add-comment hidden">
                        <form action="http://segmentfault.com/api/comment?do=post"><input type="hidden"
                                                                                          value="1020000000315609"
                                                                                          name="id">

                            <div class="form-content" style="position: relative;"><textarea name="text"
                                                                                            class="textarea-13 placeholder"
                                                                                            holder="写下您的评论"
                                                                                            style="overflow-y: hidden;"></textarea>

                                <div style="font-family: Menlo, Monaco, Consolas, &#39;Lucida Console&#39;, &#39;Courier New&#39;, monospace; font-size: 13px; font-weight: 400; font-style: normal; color: rgb(51, 51, 51); box-sizing: border-box; text-transform: none; text-decoration: none; letter-spacing: 0px; box-shadow: rgba(0, 0, 0, 0.0980392) 0px 1px 2px 0px inset, rgba(255, 255, 255, 0.498039) 0px 1px 0px 0px; line-height: 20px; text-align: start; vertical-align: top; direction: ltr; background-color: rgb(255, 255, 255); background-image: none; background-attachment: scroll; opacity: 1; width: 100%; height: auto; top: auto; right: auto; bottom: auto; left: auto; margin: 0px; padding: 6px; border: 1px solid rgb(198, 198, 198); position: static; display: none; visibility: visible; z-index: auto; overflow: auto; white-space: pre-wrap; clip: auto; float: none; clear: none; cursor: auto; list-style: none outside none; word-wrap: break-word; min-height: 20px; background-position: 0% 0%; background-repeat: repeat repeat;"></div>
                                <div class="placeholder-wrap"
                                     style="font-family: Menlo, Monaco, Consolas, &#39;Lucida Console&#39;, &#39;Courier New&#39;, monospace; font-size: 13px; font-weight: 400; font-style: normal; color: rgb(153, 153, 153); box-sizing: inherit; text-transform: none; text-decoration: none; letter-spacing: 0px; box-shadow: none; line-height: 20px; text-align: start; vertical-align: middle; direction: ltr; background-color: transparent; opacity: 1; width: 98px; height: 20px; top: 1698px; right: auto; bottom: auto; left: 0px; margin: 0px; padding: 7px 9px; border: none; position: absolute; display: block; visibility: visible; z-index: 10; overflow: auto; white-space: pre-wrap; clip: auto; float: none; clear: none; cursor: text; list-style: none outside none; background-position: initial initial; background-repeat: initial initial;">
                                    写下您的评论
                                </div>
                            </div>
                            <div class="form-action"><input type="submit" class="btn btn-l" value="提交评论"></div>
                        </form>
                    </li>
                </ul>
                <!-- end .comment-list -->
            </div>
        </article><?php endforeach; endif; ?>



</div>
<!-- end #answer -->

<div id="write-answer">
    <h2 class="common-title">撰写答案</h2>

    <form method="post" action="__ROOT__/Ask/answer" id="postanswerform">
        <div id="wmd-button-bar"></div>

        <div class="p" style="position: relative;">
            <div class="editor-help hidden">
                <ul class="editor-help-tabs">
                    <li rel="heading">标题 / 粗斜体</li>
                    <!--
                            -->
                    <li rel="code">代码</li>
                    <!--
                            -->
                    <li rel="link">链接</li>
                    <!--
                            -->
                    <li rel="image">图片</li>
                    <!--
                            -->
                    <li rel="split">换行 / 分隔符</li>
                    <!--
                            -->
                    <li rel="list">列表 / 引用</li>
                    <!--
                            -->
                    <li class="right"><a href="http://segmentfault.com/q/1010000000187808" target="_blank">高级技巧</a></li>
                </ul>

                <!-- 链接 -->
                <div class="editor-help-content hidden" rel="link">

                    <p>常用链接方法</p>
<pre>文字链接 [链接名称](http://链接网址)
网址链接 &lt;http://链接网址&gt;
</pre>
                    <p>高级链接技巧</p>
<pre>这个链接用 1 作为网址变量 [Google][1].
这个链接用 yahoo 作为网址变量 [Yahoo!][yahoo].
然后在文档的结尾为变量赋值（网址）

<i class="nbsp">&nbsp;</i><i class="nbsp">&nbsp;</i>[1]: http://www.google.com/
<i class="nbsp">&nbsp;</i><i class="nbsp">&nbsp;</i>[yahoo]: http://www.yahoo.com/
</pre>

                </div>
                <!-- end 链接 -->

                <!-- 图片 -->
                <div class="editor-help-content hidden" rel="image">

                    <p>跟链接的方法区别在于前面加了个感叹号 <code>!</code>，这样是不是觉得好记多了呢？</p>
<pre>![图片名称](http://图片网址)
</pre>
                    <p>当然，你也可以像网址那样对图片网址使用变量</p>
<pre>这个链接用 1 作为网址变量 [Google][1].
然后在文档的结尾位变量赋值（网址）

<i class="nbsp">&nbsp;</i><i class="nbsp">&nbsp;</i>[1]: http://www.google.com/logo.png
</pre>

                </div>
                <!-- end 图片 -->

                <!-- 粗斜体、标题 -->
                <div class="editor-help-content hidden" rel="heading">

                    <p>文章内容较多时，可以用标题分段：</p>
<pre>## 大标题 ##
### 小标题 ###
</pre>

                    <p>粗体 / 斜体</p>
<pre>*斜体文本*    _斜体文本_
**粗体文本**    __粗体文本__
***粗斜体文本***    ___粗斜体文本___
</pre>

                </div>
                <!-- end 粗斜体、标题 -->

                <!-- 换行、分隔符 -->
                <div class="editor-help-content hidden" rel="split">

                    <p>如果另起一行，只需在当前行结尾加 2 个空格</p>
<pre>在当前行的结尾加 2 个空格<i class="nbsp">&nbsp;</i><i class="nbsp">&nbsp;</i>
这行就会新起一行
</pre>
                    <p>如果是要起一个新段落，只需要空出一行即可。</p>

                    <p>如果你有写分割线的习惯，可以新起一行输入三个减号 <code>-</code>：</p>
<pre>---
</pre>

                </div>
                <!-- end 换行、分隔符 -->

                <!-- 列表、引用 -->
                <div class="editor-help-content hidden" rel="list">

                    <p>普通列表</p>
<pre>-<i class="nbsp">&nbsp;</i>列表文本前使用 [减号+空格]
+<i class="nbsp">&nbsp;</i>列表文本前使用 [加号+空格]
*<i class="nbsp">&nbsp;</i>列表文本前使用 [星号+空格]
</pre>
                    <p>带数字的列表</p>
<pre>1.<i class="nbsp">&nbsp;</i>列表前使用 [数字+空格]
2.<i class="nbsp">&nbsp;</i>我们会自动帮你添加数字
7.<i class="nbsp">&nbsp;</i>不用担心数字不对，显示的时候我们会自动把这行的 7 纠正为 3
</pre>
                    <p>引用</p>
<pre>&gt;<i class="nbsp">&nbsp;</i>引用文本前使用 [大于号+空格]
&gt;<i class="nbsp">&nbsp;</i>折行可以不加，新起一行都要加上哦
</pre>

                </div>
                <!-- end 列表、引用 -->

                <!-- 代码 -->
                <div class="editor-help-content hidden" rel="code">


                    <p>如果你只想高亮语句中的某个函数名或关键字，可以使用 <code>`function_name()`</code> 实现</p>

                    <p>通常我们会根据您的代码片段适配合适的高亮方法，但你也可以用 <code>```</code> 包裹一段代码，并指定一种语言</p>
<pre>```<strong>javascript</strong>
$(document).ready(function () {
    alert('hello world');
});
```
</pre>
                    <p>支持的语言：<code>actionscript, apache, bash, clojure, cmake, coffeescript, cpp, cs, css, d, delphi,
                        django, erlang, go, haskell, html, http, ini, java, javascript, json, lisp, lua, markdown,
                        matlab, nginx, objectivec, perl, php, python, r, ruby, scala, smalltalk, sql, tex, vbscript,
                        xml</code></p>

                    <p>您也可以使用 4 空格缩进，再贴上代码，实现相同的的效果</p>
<pre><i class="nbsp">&nbsp;</i><i class="nbsp">&nbsp;</i><i class="nbsp">&nbsp;</i><i class="nbsp">&nbsp;</i>def g(x):
<i class="nbsp">&nbsp;</i><i class="nbsp">&nbsp;</i><i class="nbsp">&nbsp;</i><i class="nbsp">&nbsp;</i><i class="nbsp">
        &nbsp;</i><i class="nbsp">&nbsp;</i><i class="nbsp">&nbsp;</i><i class="nbsp">&nbsp;</i>yield from range(x, 0, -1)
<i class="nbsp">&nbsp;</i><i class="nbsp">&nbsp;</i><i class="nbsp">&nbsp;</i><i class="nbsp">&nbsp;</i><i class="nbsp">
        &nbsp;</i><i class="nbsp">&nbsp;</i><i class="nbsp">&nbsp;</i><i class="nbsp">&nbsp;</i>yield from range(x)
</pre>
                </div>
                <!-- end 代码 -->

            </div>
            <!-- end .editor-help -->
            <label for="answer" class="hid">答案内容</label>
            <textarea id="answer" class="textarea-14 placeholder" placeholder="为此问题提供一个答案" rows="8" autocomplete="off"
                      spellcheck="false" name="text"></textarea>
            <input type="hidden" name="qid" value="<?php echo ($question["question_id"]); ?>">

        </div>

        <div class="form-action">
                    <span class="left">
                                            <input type="checkbox" disabled=""> 转发到新浪微博 <a
                            href="http://segmentfault.com/user/settings?tab=auth" target="_blank">绑定 ↩</a>
                                        </span>
            <input type="submit" class="btn btn-xl" value="提交答案" id="postanswer">
            <input type="hidden" value="1010000000313007" name="id">
        </div>

        <div id="wmd-preview" class="fmt preview"></div>
    </form>
</div>
<!-- end #write-answer -->
</div>
<!-- end #main -->

<div id="secondary">
    <aside class="q-info">
        <ul class="hor-count">
            <li><strong>235</strong>浏览数</li>
            <!--
                            -->
            <li><strong>0</strong>收藏数</li>
        </ul>

        <ul class="tag-list show-pop-tag edit-disabled">
            <li>
                <a data-tid="1040000000089457" href="http://segmentfault.com/t/c" class="tag">c</a>
            </li>
            <li>
                <a data-tid="1040000000089741" href="http://segmentfault.com/t/c%2B%2B" class="tag">c++</a>
            </li>
            <li>
                <a data-tid="1040000000090074" href="http://segmentfault.com/t/%E6%95%B0%E6%8D%AE%E7%BB%93%E6%9E%84"
                   class="tag">数据结构</a>
            </li>
        </ul>

    </aside>

    <div class="iamgg-sidebar rounded-2">
        <script type="text/javascript" src="./同一程序中使用一种数据结构时有多种不同的元素类型，最好的处理方式是？ - SegmentFault_files/bdad.js"></script>
        <script type="text/javascript">BAIDU_CLB_fillSlot("656843");</script>
        <div id="BAIDU_CLB_SLOT_PS_656843"></div>
        <script charset="utf-8" src="./同一程序中使用一种数据结构时有多种不同的元素类型，最好的处理方式是？ - SegmentFault_files/ecom"></script>
        <div id="baidu_clb_slot_656843">
            <iframe id="baidu_clb_slot_iframe_656843"
                    src="./同一程序中使用一种数据结构时有多种不同的元素类型，最好的处理方式是？ - SegmentFault_files/同一程序中使用一种数据结构时有多种不同的元素类型，最好的处理方式是？ - SegmentFault.html"
                    onload="BAIDU_CLB_renderFrame(&#39;656843&#39;)" width="220" height="220" vspace="0" hspace="0"
                    allowtransparency="true" scrolling="no" marginheight="0" marginwidth="0" frameborder="0"
                    style="border: 0; vertical-align: bottom; margin: 0; display: block;"></iframe>
        </div>
    </div>

    <aside class="input-share box">
        <h3>转发分享</h3>
        <input title="本页网址" type="text" class="text-27" readonly="" value="http://sfau.lt/bNbtAF"><br><br>
        <a target="_blank" href="http://segmentfault.com/share/weibo/1010000000313007"><img
                src="./同一程序中使用一种数据结构时有多种不同的元素类型，最好的处理方式是？ - SegmentFault_files/auth-weibo.png" alt="新浪微博"></a>
        <a target="_blank" href="http://segmentfault.com/share/twitter/1010000000313007"><img
                src="./同一程序中使用一种数据结构时有多种不同的元素类型，最好的处理方式是？ - SegmentFault_files/auth-twitter.png" alt="twitter"></a>
        <a target="_blank" href="http://segmentfault.com/share/renren/1010000000313007"><img
                src="./同一程序中使用一种数据结构时有多种不同的元素类型，最好的处理方式是？ - SegmentFault_files/auth-renren.png" alt="人人网"></a>
        <a target="_blank" href="http://segmentfault.com/share/qq/1010000000313007"><img
                src="./同一程序中使用一种数据结构时有多种不同的元素类型，最好的处理方式是？ - SegmentFault_files/auth-tqq.png" alt="腾讯微博"></a>
        <a target="_blank" href="http://segmentfault.com/share/douban/1010000000313007"><img
                src="./同一程序中使用一种数据结构时有多种不同的元素类型，最好的处理方式是？ - SegmentFault_files/auth-douban.png" alt="腾讯微博"></a>
    </aside>

    <aside class="box invite-to-answer">
        <h3>邀请别人回答问题</h3>
        <a href="http://segmentfault.com/q/1010000000313007#" class="btn-m">邀请回答</a><br><br>
        <ul class="invited-list">
        </ul>
    </aside>
    <aside class="box">
        <h3>相关问题</h3>
        <ul class="link-list">
            <li><a href="http://segmentfault.com/q/1010000000252866">python中如何使字典在程序退出时保存现有内容？</a></li>
            <li><a href="http://segmentfault.com/q/1010000000191910">关于用C从txt文件查找单词的搜索算法优化问题</a></li>
            <li><a href="http://segmentfault.com/q/1010000000094800">c++面向对象怎么学？</a></li>
            <li><a href="http://segmentfault.com/q/1010000000126373">单向链表如何实现一个迭代器函数</a></li>
            <li><a href="http://segmentfault.com/q/1010000000125896">linked list API design- 单向链表的API设计问题</a></li>
            <li><a href="http://segmentfault.com/q/1010000000250435">按下ctr键结束输入的例子</a></li>
            <li><a href="http://segmentfault.com/q/1010000000196194">程序崩溃怎么破</a></li>
            <li><a href="http://segmentfault.com/q/1010000000250403">请问在C++中如何通过命令行输入，当用户输入Ctrl+C结束输入。给出例子呗，谢谢</a></li>
            <li><a href="http://segmentfault.com/q/1010000000179004">需要开发一个沙盒，有什么技术资料可以看的么？</a></li>
            <li><a href="http://segmentfault.com/q/1010000000193354">NSTimer、NSThread 和 NSRunloop 之间区别?</a></li>
        </ul>
    </aside>
</div>
<!-- end #secondary -->
</div>


<div id="invite-popup" class="hidden">
    <p class="hor-tabs">
        <a href="http://segmentfault.com/q/1010000000313007#" data-by="username" class="current">站内邀请</a>
        <i></i>
        <a href="http://segmentfault.com/q/1010000000313007#" data-by="email">Email 邀请</a>
        <i></i>
        <a href="http://segmentfault.com/q/1010000000313007#" data-by="weibo">新浪微博邀请</a>
    </p>

    <!-- 站内邀请 -->
    <div id="by-username" class="reged-user">
        <div class="search-user">
            <input class="text-28" type="text" data-holder="输入对方用户名">
        </div>
        <ul class="invited-list"></ul>
        <p>您可以邀请站内用户来解答问题<br>有针对性的邀请才能提高问题解决效率</p>
    </div>
    <!-- end .reged-user -->

    <!-- Email 邀请 -->
    <div id="by-email" class="unreg-user hidden">
        <p><input class="text-28" type="email" data-holder="Email 地址"></p>

        <p><textarea class="textarea-13" rows="5"></textarea></p>
    </div>
    <!-- end .unreg-user -->


    <!-- 新浪微博 邀请 -->
    <div id="by-weibo" class="unreg-user hidden">
        <p>绑定新浪微博后才能邀请 <a href="http://segmentfault.com/user/settings?tab=auth" target="_blank">绑定 ↩</a></p>
    </div>
    <!-- end .unreg-user -->

</div>
<!-- end pop-body -->

</div>
<!-- end .wrap -->

<footer id="footer">
    <div class="inner mobi-hide">
        <dl class="site-link">
            <dt>网站相关</dt>
            <dd><a href="http://segmentfault.com/about">关于我们</a></dd>
            <dd><a href="http://segmentfault.com/license">服务条款</a></dd>
            <dd><a href="http://segmentfault.com/faq">帮助中心</a></dd>
            <dd><a href="http://segmentfault.com/q/1010000000187808">编辑器语法</a></dd>
            <dd><a href="http://0x.segmentfault.com/">建议反馈</a></dd>
        </dl>
        <dl class="site-link">
            <dt>联系合作</dt>
            <dd><a href="http://segmentfault.com/link">合作伙伴</a></dd>
            <dd><a href="http://segmentfault.com/advertise">广告投放</a></dd>
            <dd><a href="http://segmentfault.com/press">媒体报道</a></dd>
        </dl>
        <dl class="site-link">
            <dt>常用链接</dt>
            <dd><a href="http://blog.segmentfault.com/" target="_blank">开发日志</a></dd>
            <dd><a href="http://segmentfault.com/mobileapp">移动应用</a></dd>
            <dd><a href="http://segmentfault.com/events?category=3">黑客马拉松</a></dd>
            <dd><a href="http://yumiwan.com/" target="_blank">玉米湾域名</a></dd>
        </dl>
        <dl class="site-link">
            <dt>关注我们</dt>
            <dd><a href="http://segmentfault.com/feeds/q/1010000000313007">RSS 订阅</a></dd>
            <dd><a href="http://weibo.com/segmentfault" target="_blank">新浪微博</a></dd>
            <dd><a href="http://twitter.com/segment_fault" target="_blank">Twitter</a></dd>
            <dd><a href="http://t.qq.com/segmentfault" target="_blank">腾讯微博</a></dd>
            <dd><a href="http://page.renren.com/699146294" target="_blank">人人网</a></dd>
        </dl>
        <dl class="site-link" id="license">
            <dt>内容许可</dt>
            <dd>除特别说明外，用户内容均采用 <a rel="license" target="_blank"
                                  href="http://creativecommons.org/licenses/by-sa/3.0/cn/">知识共享署名-相同方式共享 3.0
                中国大陆许可协议</a> 进行许可
            </dd>
            <dd>本站由 <a target="_blank" href="http://elinkhost.com/">Elinkhost</a> 提供 IDC 服务<br><a target="_blank"
                                                                                                  href="https://www.upyun.com/?utm_source=segmentfault&utm_medium=link&utm_campaign=upyun&md=segmentfault">又拍云</a>
                提供 CDN 存储服务
            </dd>
        </dl>
    </div>
    <div class="inner copyright">
        Copyright © 2011-2013 SegmentFault. 当前呈现版本 13.10.21 <br>京ICP备12004937号, 京公网安备110108008332号
    </div>
</footer>


<a id="backtop" class="mobi-hide" href="http://segmentfault.com/q/1010000000313007#body">回顶部</a>

<script>$(document).ready(function () {
    $('#session').login();
    $('input[holder],textarea[holder]').placeholder();
    $('input.input-error,textarea.input-error').keyup(function () {
        $('.text-error', $(this).removeClass('input-error').parent()).remove();
    });
    $('.has-dropdown').hover(function () {
        var $item = $('.dropdown-item', this);
        $item.toggleClass('hid');
    });
    $('#site-nav-btn').click(function () {
        $('.site-nav').toggleClass('mobi-hide');
        return false;
    });
    $('html').click(function () {
        $('.site-nav').addClass('mobi-hide');
    });
    $(document).scroll(function () {
        if ($(this).scrollTop() > 720) {
            $('#backtop').removeClass('hidden');
        } else {
            $('#backtop').addClass('hidden');
        }
    });
    $('#backtop').click(function () {
        $('body,html').animate({scrollTop: 0});
        return false;
    })
    $('#msg-link').eventPopup({url: 'http://x.segmentfault.com/event'});
    $('.meta-tags a, .tag').tagPopup('http://segmentfault.com/api/tag', '#main');
    $('#search .input-search').searchAutoComplete({url: 'http://x.segmentfault.com/autocomplete', insertAfter: '#search', searchUrl: 'http://segmentfault.com/search', askUrl: 'http://segmentfault.com/ask', ask: '#top-nav a.btn-m'});
    $('a.msg-close', $('#msg-bar').fadeIn().sticky()).click(function () {
        $(this).parent().fadeOut(function () {
            $(this).parent().remove();
        });
        return false;
    });
    var topNav = $('.head-nav'), search = $('#search .input-search').css({'position': 'relavtive', 'z-index': 10}), searchWidth = search.outerWidth();
    search.focus(function () {
        search.animate({width: searchWidth * 1.5}, 'fast');
        topNav.hide();
    }).blur(function () {
                if (0 == search.val().length) {
                    search.animate({width: searchWidth}, 'fast', function () {
                        topNav.show();
                    });
                }
            });
    $('.tip-pop').each(function () {
        var t = $(this), str = t.data('tip');
        if (!!!str) {
            return;
        }
        t.removeAttr('title');
        var parts = str.split(':');
        $(this).tipsy({'html': true, 'gravity': parts.shift(), 'fallback': parts.join(':')});
    });
    if ($('#profile-tab,.greeting').length > 0) {
        $.get('http://x.segmentfault.com/news', function (o) {
            if (!o.status && o.data) {
                var cv = $.cookie('sfns_viewed'), viewed = (!!cv ? cv + ',' : '');
                if (viewed.indexOf(o.data[0]) < 0) {
                    var a = $('<a href="' + o.data[1] + '" target="_blank" class="update-log rounded-2">'
                            + '<strong>' + o.data[3] + '更新</strong> ' + o.data[2] + '</a>').prependTo('#secondary').animate({backgroundColor: '#ffebb7'}, 'slow',function () {
                                $(this).animate({backgroundColor: '#FFF7E2'}, 'slow');
                            }).click(function () {
                                $.cookie('sfns_viewed', viewed + o.data[0], {path: '/', expires: 30});
                                $(this).remove();
                            });
                }
            }
        }, 'jsonp');
    }
    if (login) {
        $('#main, .layout-main').highlightTag({url: 'http://x.segmentfault.com/tag/following', selector: '#content article .meta-tags li a, #user-question article .meta-tags li a,'
                + ' .article-item .tags li a', className: 'q-highlight'});
    } else if (0 == $('.auth-login,.session-form,.session-finished').length) {
        if (1 != $.cookie('sfln_viewed')) {
            $.cookie('sfln_viewed', 1, {path: '/'});
            $.cookie('sfln_available', 1, {path: '/'});
        } else if (1 == $.cookie('sfln_available')) {
            $('.i-cancel', $('.login-notify').css('bottom', -60).removeClass('hidden').animate({'bottom': 0})).click(function () {
                $.cookie('sfln_available', 0, {path: '/'});
                $(this).parents('.login-notify').animate({'bottom': -60}, function () {
                    $(this).remove();
                });
                return false;
            });
        }
    }
    var tagInterestShow = false;
    $('.tag-interest-click').click(function () {
        if (!tagInterestShow) {
            $('.tag-interest-list').fadeIn();
            tagInterestShow = true;
        } else {
            $('.tag-interest-list').fadeOut();
            tagInterestShow = false;
        }
        return false;
    });
});
(function () {
    var hm = document.createElement('script');
    hm.type = 'text/javascript';
    hm.async = true;
    hm.src = '//hm.baidu.com/hm.js?e23800c454aa573c0ccb16b52665ac26';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(hm, s);
})();
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-918487-8']);
_gaq.push(['_trackPageview']);
(function () {
    var ga = document.createElement('script');
    ga.type = 'text/javascript';
    ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ga, s);
})();</script>
<script>(function () {
    if ('undefined' == typeof(hljs)) {
        return;
    }
    hlNames = {actionscript: /^as[1-3]$/i, cmake: /^(make|makefile)$/i, cs: /^csharp$/i, css: /^css[1-3]$/i, delphi: /^pascal$/i, javascript: /^js$/i, markdown: /^md$/i, objectivec: /^objective-c$/i, php: /^php[1-6]$/i, sql: /^mysql$/i, xml: /^(html|html5|xhtml)$/i}, hlLangs = hljs.LANGUAGES;
    SF.highlight = function (sel) {
        var el = $(sel);
        $('pre', el).each(function () {
            if (!this.parentNode) {
                return;
            }
            var t = $(this), children = t.children(), highlighted = false;
            if (children.length > 0 && 'code' == children.get(0).nodeName.toLowerCase()) {
                var className = children.attr('class');
                if (!!className) {
                    var classes = className.split(/\s+/);
                    for (var i = 0; i < classes.length; i++) {
                        if (0 === classes[i].indexOf('lang-')) {
                            var lang = classes[i].substring(5).toLowerCase(), finalLang;
                            if (hlLangs[lang]) {
                                finalLang = lang;
                            } else {
                                for (var l in hlNames) {
                                    if (lang.match(hlNames[l])) {
                                        finalLang = l;
                                    }
                                }
                            }
                            if (!!finalLang) {
                                var result = hljs.highlight(finalLang, children.text(), true);
                                children.html(result.value);
                                highlighted = true;
                                break;
                            }
                        }
                    }
                }
            }
            if (!highlighted) {
                var html = t.html();
                t.html(html.replace(/<\/?[a-z]+[^>]*>/ig, ''));
                hljs.highlightBlock(this, '', false);
            }
        });
    };
})();</script>
<script>$(document).ready(function () {
    var title = $('.top-title');
    SF.highlight('article .post-content');
    $('article .post-content a').attr('target', '_blank');
    $('article .post-content').specialUrl();
    $('article .post-content img').each(function () {
        var t = $(this), url = t.attr('src');
        t.wrap('<a target="_blank" title="点击查看原图" href="' + url + '/view"></a>');
    });
    function applyCommentEvent(li) {
        $('.comment-vote', li).click(function () {
            var t = $(this), comment = t.parents('li.comment').data('comment');
            $.post('http://segmentfault.com/api/comment', {'do': 'like', 'id': comment.id, 'cancel': t.hasClass('c-voted') ? 1 : 0}, function (o) {
                if (!o.status) {
                    t.toggleClass('c-voted').text(o.data);
                    if (o.data == 0) {
                        t.addClass('no-vote');
                    } else {
                        t.removeClass('no-vote');
                    }
                }
            }, 'json');
            return false;
        });
        $('.reply', li).click(function () {
            var comment = $(this).parents('li.comment').data('comment'), p = $(this).parents('ul.comment-list'), formAction = $('.add-comment form .form-action', p);
            $('li:last', p).removeClass('hidden');
            $('.reply-to', formAction).remove();
            var reply = $('<span class="reply-to left"><a href="#" class="i-cancel">&#10006;</a>回复 <a target="_blank" href="'
                    + comment.user.url + '">' + comment.user.name + '</a><input type="hidden" name="reply" value="' + comment.user.id + '" /></span>').prependTo(formAction);
            $('a.i-cancel', reply).click(function () {
                $(this).parent().remove();
                return false;
            });
            $('.add-comment form textarea', p).focus();
            return false;
        });
        $('.edit', li).click(function () {
            var t = $(this).parents('li.comment'), comment = t.data('comment'), p = $('.comment-content p', t).hide(), formP = $('<div class="add-comment"></div>').insertAfter(p), contentP = $('<div class="form-content"></div>').appendTo(formP), textarea = $('<textarea name="text" class="textarea-13" holder="输入您要修改的文字" rows="1"></textarea>').appendTo(contentP).autoResize().val(comment.originalText).placeholder();
            var actionP = $('<div class="form-action"></div>').appendTo(formP), submitBtn = $('<button class="btn btn-l action">修改评论</button>').appendTo(actionP), cancelBtn = $('<button class="btn btn-l">取消</button>').appendTo(actionP);
            submitBtn.click(function () {
                var btn = $(this);
                btn.attr('disabled', 'disabled').addClass('btn-disabled');
                $.post('http://segmentfault.com/api/comment', {'do': 'edit', 'id': comment.id, 'text': textarea.val()}, function (o) {
                    if (!o.status) {
                        appendComment.call(p, o.data, t);
                        t.remove();
                    } else if (5 == o.status) {
                        textarea.error('字数太短, 至少要包括6个字符');
                        btn.removeAttr('disabled').removeClass('btn-disabled');
                    }
                }, 'json');
            });
            cancelBtn.click(function () {
                p.show();
                $('.comment-action', t).removeClass('hidden');
                formP.remove();
            });
            $('.comment-action', t).addClass('hidden');
            return false;
        });
        $('.delete', li).click(function () {
            var t = $(this).parents('li.comment'), comment = t.data('comment');
            $('<p>您确认删除来自「' + comment.user.name + '」的评论吗?</p>').modal({'title': '删除确认', 'action': '删除', 'onAction': function (c) {
                $.post('http://segmentfault.com/api/comment', {'do': 'delete', 'id': comment.id}, function (o) {
                    if (!o.status) {
                        t.fadeOut();
                    }
                    c.trigger('close');
                }, 'json');
            }});
            return false;
        });
    }

    function appendComment(c, after) {
        var html = '<li class="comment" id="c-' + c.objectId + '-' + c.id + '">';
        html += '<div class="left comment-vote' + (c.votes > 0 ? '' : ' no-vote')
                + (c.isLiked ? ' c-voted' : '') + '">' + c.votesWord + '</div>', p = $(this), f = $('li:last', p);
        if (login) {
            html += '<div class="right comment-action">'
                    + (c.canEdit ? '<a class="i-edit edit" href="#">修改</a> ' : '')
                    + (c.canDelete ? '<a class="i-trash delete" href="#">删除</a> ' : '')
                    + (login.id != c.user.id ? '<a class="i-reply reply" href="#">回复</a> ' : '')
                    + '</div>';
        }
        html += '<div class="fmt comment-content">'
                + '<cite><a href="' + c.user.url + '">' + c.user.name + '</a> &middot; ' + c.createdDate + '</cite>'
                + (c.replyUser ? '回复<a target="_blank" href="' + c.replyUser.url + '">'
                + c.replyUser.name + '</a>:<br />' : '') + c.parsedText
                + '</div></li>';
        var li = $(html).data('comment', c);
        if (after) {
            li.insertAfter(after);
        } else {
            if (f) {
                li.insertBefore(f);
            } else {
                li.appendTo(p);
            }
        }
        applyCommentEvent(li);
    }

    $('ul.comment-list').each(function () {
        var p = $(this), closed = $('#question article').hasClass('closed'), deleted = $('#question article').hasClass('deleted'), f;
        $('li.comment', this).each(function () {
            applyCommentEvent(this);
        });
        if (login && !closed && !deleted) {
            f = $('<li class="add-comment hidden"><form action="http://segmentfault.com/api/comment?do=post">'
                    + '<input type="hidden" value="' + p.parents('article').data('id') + '" name="id" />'
                    + '<div class="form-content"><textarea name="text" class="textarea-13" holder="写下您的评论"></textarea></div>'
                    + '<div class="form-action"><input type="submit" class="btn btn-l" value="提交评论" /></div></form></li>');
            $('textarea', f.appendTo(p)).placeholder().autoResize();
            $('form', f).submit(function () {
                var t = $(this), url = t.attr('action');
                $('.btn', this).attr('disabled', 'disabled');
                $.post(url, t.serialize(), function (o) {
                    var ta = $('textarea', t);
                    $('.btn', t).removeAttr('disabled');
                    if (!o.status) {
                        appendComment.call(p, o.data);
                        $('.reply-to', t).remove();
                        ta.val('').focus();
                    } else if (5 == o.status) {
                        ta.error('字数太短, 至少要包括6个字符');
                    }
                }, 'json');
                return false;
            });
        } else if (!login) {
            f = $('<li class="hidden"><cite>您还没有登录, 请<a href="http://segmentfault.com/user/login">登录</a>后添加评论</cite></li>').appendTo(p);
        } else if (closed) {
            f = $('<li class="hidden"><cite>此问题已关闭, 无法添加评论</cite></li>').appendTo(p);
        } else if (deleted) {
            f = $('<li class="hidden"><cite>此问题已删除, 无法添加评论</cite></li>').appendTo(p);
        }
    });
    $('a.more-comments').click(function () {
        if (this.clicked) {
            return false;
        }
        this.clicked = true;
        var t = $(this), p = t.parents('ul.comment-list'), f = $('li:last', p).removeClass('hidden');
        t.addClass('loading');
        $('textarea', f.removeClass('hidden'));
        $.getJSON(t.data('url'), function (o) {
            t.parent().remove();
            if (!o.status) {
                var lastUid, lastName, submit = $('input[type=submit]', f);
                $('li.comment', p).remove();
                for (var i = 0; i < o.data.length; i++) {
                    appendComment.call(p, o.data[i]);
                    if (login && login.id != o.data[i].user.id) {
                        lastUid = o.data[i].user.id;
                        lastName = o.data[i].user.name;
                    }
                }
            }
        });
        return false;
    });
    $('#answer .hor-tabs .by-votes').click(function () {
        $('.current', $(this).parent()).removeClass('current');
        $(this).addClass('current');
        function sortByVotes(a, b) {
            var a = $(a), b = $(b), votesA = a.data('votes'), votesB = b.data('votes'), idA = a.data('id'), idB = b.data('id');
            if (votesA > votesB) {
                return-1;
            } else if (votesA < votesB) {
                return 1;
            } else {
                return idA > idB ? 1 : -1;
            }
        }

        $('#answer article.available').sortElements(sortByVotes);
        $('#answer article.ignored').sortElements(sortByVotes);
        return false;
    });
    $('#answer .hor-tabs .by-created').click(function () {
        $('.current', $(this).parent()).removeClass('current');
        $(this).addClass('current');
        function sortByCreated(a, b) {
            var a = $(a), b = $(b), createdA = a.data('created'), createdB = b.data('created'), idA = a.data('id'), idB = b.data('id');
            if (createdA > createdB) {
                return 1;
            } else if (createdA < createdB) {
                return-1;
            } else {
                return idA > idB ? 1 : -1;
            }
        }

        $('#answer article.available').sortElements(sortByCreated);
        $('#answer article.ignored').sortElements(sortByCreated);
        return false;
    });
    $('.input-share input.text-27').click(function () {
        $(this).select();
        return false;
    });
    $('article.a-ignore a').click(function () {
        $(this).parent().remove();
        $('#answer article.ignored').show();
        return false;
    });
    $('#question .post-fav').click(function () {
        var t = $(this), id = t.parents('article').data('id');
        $.post('http://segmentfault.com/api/question', {'do': 'bookmark', 'id': id, 'cancel': t.hasClass('faved') ? 1 : 0}, function (o) {
            if (!o.status) {
                t.toggleClass('faved').html(t.hasClass('faved') ? '已收藏' : '收藏');
            }
        }, 'json');
        return false;
    });
    $('#question article .post-big-vote').click(function (e) {
        var t = $(this), p = t.parents('article'), id = p.data('id');
        $.post('http://segmentfault.com/api/question', {'do': 'like', 'id': id, 'cancel': t.hasClass('voted') ? 1 : 0}, function (o) {
            if (!o.status) {
                $('span', t.toggleClass('voted')).html(o.data);
                if (t.hasClass('voted')) {
                    $('.post-big-hate', p).removeClass('hated');
                }
            }
        }, 'json');
        return false;
    });
    $('#question article .post-big-hate').click(function (e) {
        var t = $(this), p = t.parents('article'), id = p.data('id');
        $.post('http://segmentfault.com/api/question', {'do': 'hate', 'id': id, 'cancel': t.hasClass('hated') ? 1 : 0}, function (o) {
            if (!o.status) {
                t.toggleClass('hated');
                $('.post-big-vote span', p).html(o.data);
                if (t.hasClass('hated')) {
                    $('.post-big-vote', p).removeClass('voted');
                }
            }
        }, 'json');
        return false;
    });
    $('#answer article .post-big-vote').click(function () {
        var t = $(this), p = t.parents('article'), id = p.data('id');
        $.post('http://segmentfault.com/api/answer', {'do': 'like', 'id': id, 'cancel': t.hasClass('voted') ? 1 : 0}, function (o) {
            if (!o.status) {
                $('span', t.toggleClass('voted')).html(o.data);
                if (t.hasClass('voted')) {
                    $('.post-big-hate', p).removeClass('hated');
                }
            }
        }, 'json');
        return false;
    });
    $('#answer article .post-big-hate').click(function () {
        var t = $(this), p = t.parents('article'), id = p.data('id');
        $.post('http://segmentfault.com/api/answer', {'do': 'hate', 'id': id, 'cancel': t.hasClass('hated') ? 1 : 0}, function (o) {
            if (!o.status) {
                t.toggleClass('hated');
                $('.post-big-vote span', p).html(o.data);
                if (t.hasClass('hated')) {
                    $('.post-big-vote', p).removeClass('voted');
                }
            }
        }, 'json');
        return false;
    });
    $('#question .post-action .close').click(function () {
        var p = $(this).parents('article.q-post'), cancel = $(this).data('cancel'), word = $('<p>您确认要' + (cancel ? '重新打开' : '关闭')
                + '问题「<strong></strong>」吗?</p>');
        $('strong', word).text(title.text());
        word.modal({'title': cancel ? '重新打开确认' : '关闭确认', 'action': cancel ? '重新打开' : '关闭', 'data': p.data('id'), 'onAction': function (c, data) {
            $.post('http://segmentfault.com/api/question', {'do': 'close', 'id': data, 'cancel': cancel}, function (o) {
                if (!o.status) {
                    window.location.reload();
                }
            }, 'json');
        }});
        return false;
    });
    $('#question .post-action .delete').click(function () {
        var p = $(this).parents('article.q-post'), cancel = $(this).data('cancel'), word = $('<p>您确认要' + (cancel ? '恢复' : '删除')
                + '问题「<strong></strong>」吗?</p>');
        $('strong', word).text(title.text());
        word.modal({'title': cancel ? '恢复确认' : '删除确认', 'action': cancel ? '恢复' : '删除', 'data': p.data('id'), 'onAction': function (c, data) {
            $.post('http://segmentfault.com/api/question', {'do': 'delete', 'id': data, 'cancel': cancel}, function (o) {
                if (!o.status) {
                    window.location.reload();
                }
            }, 'json');
        }});
        return false;
    });
    $('#question .post-action .hide').click(function () {
        var p = $(this).parents('article.q-post'), cancel = $(this).data('cancel'), word = $('<p>您确认要' + (cancel ? '显示' : '隐藏')
                + '问题「<strong></strong>」吗?</p>');
        $('strong', word).text(title.text());
        word.modal({'title': cancel ? '显示确认' : '隐藏确认', 'action': cancel ? '显示' : '隐藏', 'data': p.data('id'), 'onAction': function (c, data) {
            $.post('http://segmentfault.com/api/question', {'do': 'hide', 'id': data, 'cancel': cancel}, function (o) {
                if (!o.status) {
                    window.location.reload();
                }
            }, 'json');
        }});
        return false;
    });
    $('#question .post-action .push').click(function () {
        var p = $(this).parents('article.q-post'), cancel = $(this).data('cancel'), word = $('<p>您确认要问题「<strong></strong>」' + (cancel ? '在主站隐藏' : '在主站显示')
                + '吗?</p>');
        $('strong', word).text(title.text());
        word.modal({'title': cancel ? '主站隐藏确认' : '主站显示确认', 'action': cancel ? '主站隐藏' : '主站显示', 'data': p.data('id'), 'onAction': function (c, data) {
            $.post('http://segmentfault.com/api/question', {'do': 'push', 'id': data, 'cancel': cancel}, function (o) {
                if (!o.status) {
                    window.location.reload();
                }
            }, 'json');
        }});
        return false;
    });
    $('#question .post-action .site').click(function () {
        var p = $(this).parents('article.q-post');
        $.get('http://segmentfault.com/api/site?do=list', function (o) {
            if (!o.status && !!o.data && o.data.length > 0) {
                var select = '<select id="site-select"><option value="0">主站</option>';
                for (var i = 0; i < o.data.length; i++) {
                    var s = o.data[i];
                    select += '<option value="' + s.id + '">' + s.name + '</option>';
                }
                select += '</select>';
                $('<p><label for="site-select">请选择站点</label> ' + select + '</p>').modal({'title': '站点推送', 'action': '推送', 'data': p.data('id'), 'onAction': function (c, data) {
                    $.post('http://segmentfault.com/api/question', {'do': 'site', 'id': data, 'site': $('select', c).val()}, function (o) {
                        if (!o.status) {
                            window.location.reload();
                        }
                    }, 'json');
                }});
            }
        }, 'json');
        return false;
    });
    $('#question .post-action .publish').click(function () {
        var p = $(this).parents('article.q-post'), word = $('<p>您确认要发布问题「<strong></strong>」吗?</p>');
        $('strong', word).text(title.text());
        word.modal({'title': '发布确认', 'action': '发布', 'data': p.data('id'), 'onAction': function (c, data) {
            $.post('http://segmentfault.com/api/question', {'do': 'publish', 'id': data}, function (o) {
                if (!o.status) {
                    window.location.reload();
                }
            }, 'json');
        }});
        return false;
    });
    $('#answer .a-post .post-action .delete').click(function () {
        var p = $(this).parents('article.a-post'), word = $('<p>您确认要删除「<strong></strong>」的答案吗?</p>');
        $('strong', word).text($('.post-author h4 a', p).text());
        word.modal({'title': '删除确认', 'action': '删除', 'data': p.data('id'), 'onAction': function (c, data) {
            $.post('http://segmentfault.com/api/answer', {'do': 'delete', 'id': data}, function (o) {
                if (!o.status) {
                    p.fadeOut();
                    c.trigger('close');
                }
            }, 'json');
        }});
        return false;
    });
    $('#answer .a-post .post-action .ignore').click(function () {
        var p = $(this).parents('article.a-post'), cancel = $(this).data('cancel'), word = $('<p>您确认要' + (cancel ? '取消忽略' : '忽略')
                + '「<strong></strong>」的答案吗?</p>');
        $('strong', word).text($('.post-author h4 a', p).text());
        word.modal({'title': cancel ? '取消忽略确认' : '忽略确认', 'action': cancel ? '取消忽略' : '忽略', 'data': p.data('id'), 'onAction': function (c, data) {
            $.post('http://segmentfault.com/api/answer', {'do': 'ignore', 'id': data, 'cancel': cancel}, function (o) {
                if (!o.status) {
                    window.location.reload();
                }
            }, 'json');
        }});
        return false;
    });
    $('#answer .a-post .post-action .btn-accept').click(function () {
        var p = $(this).parents('article.a-post'), cancel = $(this).data('cancel'), word = $('<p>您确认要' + (cancel ? '取消采纳' : '采纳')
                + '「<strong></strong>」的答案吗?</p>');
        $('strong', word).text($('.post-author h4 a', p).text());
        word.modal({'title': cancel ? '取消采纳确认' : '采纳确认', 'action': cancel ? '取消采纳' : '采纳', 'data': p.data('id'), 'onAction': function (c, data) {
            $.post('http://segmentfault.com/api/answer', {'do': 'accept', 'id': data, 'cancel': cancel}, function (o) {
                if (!o.status) {
                    window.location.reload();
                }
            }, 'json');
        }});
        return false;
    });
    var mdLoaded = false;
    $('#wmd-input').focus(function () {
        if (!mdLoaded) {
            $.getScript('http://s.segmentfault.com/js/markdown.js?13.10.22.3', function () {
                SF.editor('http://segmentfault.com/img/', 'http://segmentfault.com/api/upload/img', 'http://segmentfault.com/api/upload/fetch');
            });
            $('#write-answer .preview, #write-answer .form-action').removeClass('hidden');
            $(this).removeClass('fold');
        }
        mdLoaded = true;
    });
    $('#confirm-answer').click(function () {
        $(this).parent().remove();
        $('#wmd-input').focus();
        return false;
    });
    var inviteHtml = $('#invite-popup').html(), inviteTab;
    $('.invite-to-answer a.btn-m').click(function () {
        var showed = {username: true, email: false, weibo: false}, id = $('#question article.q-post').data('id');
        $(inviteHtml).modal({title: '邀请回答', action: '邀请', onShow: function (c) {
            $('#by-weibo textarea', c).val('我在 @SegmentFault 上遇到了问题「'
                    + title.text() + '」, 希望您能帮我解答 ' + $('.input-share input.text-27').val());
            $('#by-email textarea', c).val('我在 SegmentFault.com 上遇到了问题「'
                    + title.text() + '」, 希望您能帮我解答 ' + $('.input-share input.text-27').val());
            inviteTab = 'username';
            $('#by-username input.text-28', c).placeholder('holder').commonAutoComplete({'url': 'http://x.segmentfault.com/autocomplete/user', 'resultsFormatter': function (item) {
                return'<li>' + (item.avatarUrl ? '<img class="avatar-24" src="' + item.avatarUrl + '" />' : '') + item.name
                        + ' &nbsp; <small>@' + item.slug + '</small>' + '</li>';
            }, 'onEmpty': '<li>没有找到用户</li>', 'onEnter': function (user) {
                $('.i-cancel', $('<li><a target="_blank" href="' + user.url + '"><img class="avatar-24" src="' + user.avatarUrl
                        + '" alt="' + user.name + '">' + user.name
                        + '</a> <a href="#" class="i-cancel">&#10006;</a></li>').appendTo($('.invited-list', c)).data('uid', user.id)).click(function () {
                            $('#by-username .search-user', c).show();
                            $('#by-username .invited-list', c).html('');
                            return false;
                        });
                $(this).val('');
                $('#by-username .search-user').hide();
            }});
            $('.hor-tabs a', c).click(function () {
                var current = $('a.current', $(this).parent()), currentBy = current.data('by'), nowBy = $(this).data('by');
                $('#by-' + currentBy, c).hide();
                $('#by-' + nowBy, c).show();
                current.removeClass('current');
                $(this).addClass('current');
                inviteTab = nowBy;
                if (!showed[nowBy]) {
                    $('#by-' + nowBy + ' input.text-28').placeholder('holder');
                    if ('weibo' == nowBy) {
                        $('#by-weibo input.text-28', c).commonAutoComplete({'url': 'http://x.segmentfault.com/autocomplete/weibo', 'resultsFormatter': function (item) {
                            return'<li>' + item.name + '</li>';
                        }, 'onTip': '<li>输入关键字搜索微博用户</li>', 'onEmpty': '<li>没有找到微博用户</li>', 'onEnter': function (user) {
                            var text = $('#by-weibo textarea.textarea-13', c).val();
                            $(this).val('');
                            $('#by-weibo textarea.textarea-13', c).val('@' + user.name + ' ' + text);
                        }});
                    }
                    showed[nowBy] = true;
                }
                return false;
            });
        }, onAction: function (c) {
            switch (inviteTab) {
                case'username':
                    var userId = $('.invited-list li', c).data('uid');
                    $.post('http://segmentfault.com/api/question', {'do': 'invite', 'id': id, 'uid': userId, 'type': 'user'}, function (o) {
                        if (!o.status) {
                            c.trigger('close');
                            window.location.reload();
                        } else {
                            $('#by-username .search-user', c).show();
                            $('#by-username .invited-list', c).html('');
                            if (4 == o.status) {
                                $('#by-username input.text-28', c).error('请选择一个用户邀请');
                            } else if (5 == o.status) {
                                $('#by-username input.text-28', c).error('此用户已经被邀请过');
                            } else if (6 == o.status) {
                                $('#by-username input.text-28', c).error('此用户已经回答过该问题');
                            } else if (7 == o.status) {
                                $('#by-username input.text-28', c).error('邀请次数超过每天的最大限制');
                            }
                        }
                    });
                    break;
                case'email':
                    var mail = $('#by-email input.text-28', c).val(), text = $('#by-email textarea.textarea-13', c).val();
                    $.post('http://segmentfault.com/api/question', {'do': 'invite', 'id': id, 'mail': mail, 'text': text, 'type': 'mail'}, function (o) {
                        if (!o.status) {
                            c.trigger('close');
                            window.location.reload();
                        } else if (4 == o.status) {
                            $('#by-email input.text-28', c).error('请准确输入发送邮箱');
                        } else if (5 == o.status) {
                            $('#by-email textarea.textarea-13', c).error('请至少输入10字以上的邀请文字');
                        } else if (6 == o.status) {
                            $('#by-email textarea.textarea-13', c).error('邀请文字中必须包含问题链接');
                        } else if (7 == o.status) {
                            $('#by-email textarea.textarea-13', c).error('邀请次数超过每天的最大限制');
                        }
                    });
                    break;
                case'weibo':
                    var text = $('#by-weibo textarea.textarea-13', c).val();
                    $.post('http://segmentfault.com/api/question', {'do': 'invite', 'id': id, 'text': text, 'type': 'weibo'}, function (o) {
                        if (!o.status) {
                            c.trigger('close');
                            window.location.reload();
                        } else if (4 == o.status) {
                            $('#by-weibo textarea.textarea-13', c).error('请正确邀请文字');
                        } else if (5 == o.status) {
                            $('#by-weibo textarea.textarea-13', c).error('邀请文字不能超过140字');
                        } else if (6 == o.status) {
                            $('#by-weibo textarea.textarea-13', c).error('邀请文字中必须包含问题链接');
                        }
                    });
                    break;
            }
        }});
        return false;
    });
    var shareWeibo = $('#share-weibo');
    if (shareWeibo.length > 0) {
        $('<p><textarea class="textarea-13" rows="5"></textarea></p>').modal({'title': '转发到微博', 'action': '转发', 'scroll': true, 'onShow': function () {
            $('textarea', this).val(shareWeibo.val());
        }, 'onAction': function (c) {
            var ta = $('textarea', this);
            $.post('http://segmentfault.com/api/user', {'do': 'weibo', 'text': ta.val()}, function (o) {
                if (!o.status) {
                    c.trigger('close');
                } else if (4 == o.status) {
                    ta.error('分享内容不能为空白');
                } else if (5 == o.status) {
                    ta.error('分享内容不能超过140字');
                } else if (6 == o.status) {
                    window.oauthComplete = function () {
                        c.trigger('action');
                    }
                    var message = $('<p>微博账号登录信息已经过期, 请<strong><a href="#">刷新登录信息</a></strong><p>').insertAfter(ta.parent().hide());
                    $('a', message).click(function () {
                        window.open('http://segmentfault.com/user/oauth/weibo');
                        message.remove();
                        ta.parent().show();
                        return false;
                    });
                }
            })
        }, });
    }
    (function () {
        var id = $('#question article.q-post').attr('id');

        function flash(e) {
            var e = $(e), a = 255, b = 239, c = 0, d = 1, to;
            setTimeout(function () {
                $(window).scrollTop(e.offset().top - 50);
            }, 10);
            if (e.hasClass('comment')) {
                a = 239;
                b = 191;
                c = 1;
                d = 4;
            }
            to = setInterval(function () {
                a += c;
                b += d;
                e.css('backgroundColor', '#ff' + a.toString(16) + b.toString(16));
                if (b >= 255) {
                    clearInterval(to);
                    to = null;
                }
            }, 60);
            return e.css('backgroundColor', '#ff' + a.toString(16) + b.toString(16));
        }

        if (window.location.hash) {
            id = window.location.hash.substring(1);
        }
        var type = id.substring(0, 1);
        switch (type) {
            case'q':
                break;
            case'a':
                var el = $('#' + id);
                if (el.hasClass('ignored')) {
                    $('article.a-ignore a').trigger('click');
                    window.location.hash = '#' + id;
                }
                flash(el);
                break;
            case'c':
                var parts = id.split('-'), el = $('#q-' + parts[1] + ',#a-' + parts[1]);
                if (el.hasClass('ignored')) {
                    $('article.a-ignore a').trigger('click');
                }
                window.location.hash = '#' + el.attr('id');
                flash(el);
                setTimeout(function () {
                    $('.comment-list a.more-comments', el).trigger('click');
                });
                var toc = setInterval(function () {
                    var c = $('#' + id);
                    if (c.length > 0) {
                        window.location.hash = '#' + id;
                        flash(c);
                        clearInterval(toc);
                        toc = null;
                    }
                }, 100);
                break;
            default:
                break;
        }
    })();
});</script>


<div class="s-loading" style="display: none;">加载中</div>
</body>
</html>