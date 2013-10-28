<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0031)http://segmentfault.com/ask/101 -->
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<meta name="apple-itunes-app" content="app-id=593777236">
<meta property="qc:admins" content="15317273575564615446375">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>提出新问题 - 101 新手上路 - SegmentFault</title>
<meta name="description" content="面向新手开发者的问题集中营">
<meta name="keywords" content=" SegmentFault SF 开发者 程序员 中文 问答 社区">

<link rel="stylesheet" href="http://s.segmentfault.com/css/normalize.css?13.10.24.1">
<link rel="stylesheet" href="http://s.segmentfault.com/css/style.css?13.10.24.1">
<link rel="stylesheet" href="http://s.segmentfault.com/css/responsive.css?13.10.24.1">
<link rel="stylesheet" href="__CSS__/select.css">
<!-- <link href="./提出新问题 - 101 新手上路 - SegmentFault_files/bootstrap.css" rel="stylesheet" />
 -->
<link href="http://getbootstrap.com/2.3.2/assets/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap-responsive.css" rel="stylesheet"/>
<link href="__CSS__/bootstrap-modal.css" rel="stylesheet"/>


<!-- <link rel="stylesheet" href="./提出新问题 - 101 新手上路 - SegmentFault_files/normalize.css@13.10.24.1">
<link rel="stylesheet" href="./提出新问题 - 101 新手上路 - SegmentFault_files/style.css@13.10.24.1">
<link rel="stylesheet" href="./提出新问题 - 101 新手上路 - SegmentFault_files/responsive.css@13.10.24.1">
 -->
<script type="text/javascript" async="" src="__JS__/ga.js"></script>
<script type="text/javascript" async="" src="__JS__/hm.js"></script>
<script src="__JS__/jquery.js" style="color: rgb(51, 51, 51);"></script>
<script src="__JS__/lib.js"></script>
<script src="__JS__/highlight.js"></script>
<script src="__JS/markdown.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="http://getbootstrap.com/2.3.2/assets/js/google-code-prettify/prettify.js"></script>
<script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap.js"></script>
<script src="__JS__/bootstrap-modalmanager.js"></script>
<script src="__JS__/bootstrap-modal.js"></script>


<!--[if gt IE 8]>
<link rel="stylesheet" href="http://s.segmentfault.com/css/ie.css?13.10.24.1"/>
<![endif]-->
<!--[if lte IE 8]>
<script src="http://s.segmentfault.com/js/html5.js?13.10.22.3"></script>
<link rel="stylesheet" href="http://s.segmentfault.com/css/old-ie.css?13.10.24.1"/>
<![endif]-->

<link href="http://sfault-avatar.b0.upaiyun.com/261/411/2614115123-i-1140000000142909_icon" rel="shortcut icon"
      type="image/x-icon">
<link rel="search" type="application/opensearchdescription+xml" href="http://segmentfault.com/opensearch.xml"
      title="SegmentFault">

<link rel="apple-touch-icon-precomposed" href="http://s.segmentfault.com/img/icon/sf-57.png?13.10.21.1">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://s.segmentfault.com/img/icon/sf-72.png?13.10.21.1">
<link rel="apple-touch-icon-precomposed" sizes="114x114"
      href="http://s.segmentfault.com/img/icon/sf-114.png?13.10.21.1">

<link rel="alternate" type="application/atom+xml" title="订阅 提出新问题 - SegmentFault" href="http://segmentfault.com/feeds">

<style>
    #category_1:hover {
        cursor: pointer;
    }

    #category_2:hover {
        cursor: pointer;
    }

    #category_3:hover {
        cursor: pointer;
    }

    #category_4:hover {
        cursor: pointer;
    }

    #category_5:hover {
        cursor: pointer;
    }

    #highermsg {
        display: none;
    }

    #lowermsg {
        display: none;
    }
</style>

<script>
    var category_flags = [0, 0, 0, 0, 0];
    var category_total = 0;
    var category_select = new Array(0, 0, 0, 0, 0);

    $(document).ready(function () {
        $('#highermsg').hide();
        $('#lowermsg').hide();
        $('#category_1').click(function () {
            // alert('1');
            if (category_flags[0] == 0) {
                $('#category_1').append('<a class="i-cancel" title="删除" id="delete_cate_1">✖</a>');
                $('#delete_cate_1').click(function (event) {
                    category_flags[0] = 0;
                    $('#delete_cate_1').remove();
                    event.stopPropagation();
                    return;
                });
                category_flags[0] = 1;
            }
        });
        $('#category_2').click(function () {
            if (category_flags[1] == 0) {
                $('#category_2').append('&nbsp<a class="i-cancel" title="删除" id="delete_cate_2">✖</a>');
                $('#delete_cate_2').click(function (event) {
                    category_flags[1] = 0;
                    $('#delete_cate_2').remove();
                    event.stopPropagation();
                    return;
                });
                category_flags[1] = 1;
            }
        });
        $('#category_3').click(function () {
            // alert('3');
            if (category_flags[2] == 0) {
                $('#category_3').append('<a class="i-cancel" title="删除" id="delete_cate_3">✖</a>');
                $('#delete_cate_3').click(function (event) {
                    category_flags[2] = 0;
                    $('#delete_cate_3').remove();
                    event.stopPropagation();
                    return;
                });
                category_flags[2] = 1;
            }
        });
        $('#category_4').click(function () {
            // alert('4');
            if (category_flags[3] == 0) {
                $('#category_4').append('<a class="i-cancel" title="删除" id="delete_cate_4">✖</a>');
                $('#delete_cate_4').click(function (event) {
                    category_flags[3] = 0;
                    $('#delete_cate_4').remove();
                    event.stopPropagation();
                    return;
                });
                category_flags[3] = 1;
            }
        });
        $('#category_5').click(function () {
            // alert('5');
            if (category_flags[4] == 0) {
                $('#category_5').append('<a class="i-cancel" title="删除" id="delete_cate_5">✖</a>');
                $('#delete_cate_5').click(function (event) {
                    category_flags[4] = 0;
                    $('#delete_cate_5').remove();
                    event.stopPropagation();
                    return;
                });
                category_flags[4] = 1;
            }
        });

        $('#q1').click(function () {
            if ($(this).attr('checked') == 'checked') {
                // alert('get');
                category_total += 1;
                category_flags[0] = 1;
            } else {
                // alert('drop');
                category_total -= 1;
                category_flags[0] = 0;
            }
            // alert($(this).attr('checked'));
            // alert(category_total);
        });
        $('#q2').click(function () {
            // alert(2);
            if ($(this).attr('checked') == 'checked') {
                // alert('get');
                category_total += 1;
                category_flags[1] = 1;
            } else {
                // alert('drop');
                category_total -= 1;
                category_flags[1] = 0;
            }
            // alert(category_total);
        });
        $('#q3').click(function () {
            // alert(3);
            if ($(this).attr('checked') == 'checked') {
                // alert('get');
                category_total += 1;
                category_flags[2] = 1;
            } else {
                // alert('drop');
                category_total -= 1;
                category_flags[2] = 0;
            }
            // alert(category_total);
        });
        $('#q4').click(function () {
            // alert(4);
            if ($(this).attr('checked') == 'checked') {
                // alert('get');
                category_total += 1;
                category_flags[3] = 1;
            } else {
                // alert('drop');
                category_total -= 1;
                category_flags[3] = 0;
            }
            // alert(category_total);
        });
        $('#q5').click(function () {
            // alert(5);
            if ($(this).attr('checked') == 'checked') {
                // alert('get');
                category_total += 1;
                category_flags[4] = 1;
            } else {
                // alert('drop');
                category_total -= 1;
                category_flags[4] = 0;
            }
            // alert(category_total);
        });

        $('#question_title').focus(function () {
            var text = $(this).attr('placeholder')
            // alert(text);
            if (text == '标题，用一句话说清你的问题') {
                $(this).attr('placeholder', '');
            }
        });

        $('#question_title').blur(function () {
            var text = $(this).attr('placeholder');
            // alert(text);
            if (text == "") {
                $(this).attr('placeholder', '标题，用一句话说清你的问题');
            }
        });

        $('#closehigher').click(function () {
            $('#highermsg').hide();
        });

        $('#closelower').click(function () {
            $('#lowermsg').hide();
        });

        $('#postques').click(function (event) {
            // alert('postquestion');
            if (category_total < 1) {
                $('#lowermsg').show();
                $('#highermsg').hide();
                event.stopPropagation();
                return false;
            }
            if (category_total > 1) {
                $('#lowermsg').hide();
                $('#highermsg').show();
                event.stopPropagation();
                return false;
            }
            if (category_total == 1) {
//                alert(category_flags.length);
                for(var i=0; i<category_flags.length; i++){
                    if(category_flags[i] == 1){
//                        alert(i);
                        $('#cateparam').val(i);
                    }
                }
//                event.stopPropagation();
//                return false;
                $('#ask').submit();
            }

        });
    });
</script>

<style>#banner-101 {
    display: block;
    padding: 10px;
    background: #59857a;
    color: #FFF;
    font-size: 18px;
    line-height: 1.3
}

#banner-101 span {
    color: #273c38;
    font-size: 16px
}

#banner-101:hover {
    text-decoration: none
}

.post-action a:hover {
    color: #59857a !important
}

a, .pagenav a, .load-more a, .pagenav span, .load-more span, .stream-list h2 a, .folist h2 a {
    color: #59857a
}

a:hover, .pagenav a:hover, .load-more a:hover, .pagenav span:hover, .load-more span:hover, .stream-list h2 a:hover, .folist h2 a:hover {
    color: #80aaa0
}

.post h2 a {
    color: #333
}

.post h2 a:hover {
    color: #45665e
}

.hor-tabs a, .editor a, .timestream span a, .comment-list .more-comments, .subhead span.right a, .message-center .post a {
    color: #71a094
}

.post .status .answer {
    background-color: #bb4844
}

.post .status .answered, .post .status .answered-accepted {
    background-color: #59857a
}

.post .status .closed {
    background-color: #999
}

.up-color, .post-big-vote:hover, .voted {
    color: #59857a
}

.down-color, .post-big-hate:hover, .hated {
    color: #bb4844
}</style>
</head>
<body id="body">

<input type="hidden" id="session"
       data-user="{&quot;id&quot;:&quot;1030000000246353&quot;,&quot;name&quot;:&quot;zjh&quot;,&quot;url&quot;:&quot;http://segmentfault.com/u/zjh&quot;,&quot;rank&quot;:&quot;54&quot;}">

<!--[if lte IE 8]>
<div class="error chromeframe">您的浏览器版本<strong>很旧很旧</strong>，为了正常地访问网站，请升级您的浏览器 <a target="_blank"
                                                                                  href="http://browsehappy.com">立即升级</a>
</div>
<![endif]-->

<div id="lowermsg">
    <div id="msg-bar" class="warn is-sticky" style="width: 1349px; position: fixed;">
        <a title="关闭" class="i-cancel msg-close right" id="closelower">✕</a><strong>还没有选择问题标签</strong>
    </div>
</div>
<div id="highermsg">
    <div id="msg-bar" class="warn is-sticky" style="width: 1349px; position: fixed;">
        <a title="关闭" class="i-cancel msg-close right" id="closehigher">✕</a><strong>问题标签太多了，只能选择一个</strong>
    </div>
</div>

<nav class="global-nav clearfix">
    <a href="http://segmentfault.com/ask/101###" id="site-nav-btn">导航</a>
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
            <a href="http://segmentfault.com/101">
                <!--<img alt="SegmentFault" src="./提出新问题 - 101 新手上路 - SegmentFault_files/logo.png">-->
                <!--&nbsp;<img class="site-logo" alt=""-->
                           <!--src="./提出新问题 - 101 新手上路 - SegmentFault_files/1929165094-1140000000142909_tiny24">-->
                <strong>搜寻你想要的问题</strong>
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
        <!--<ul class="head-nav">-->
            <!--<li><a href="http://segmentfault.com/">技术问答</a></li>-->
            <!--<li class="current"><a href="http://segmentfault.com/101">新手问答</a></li>-->
            <!--<li><a href="http://segmentfault.com/sites">子站问答</a></li>-->
        <!--</ul>-->
        <!--<div class="head-misc">-->
            <!--<span>找不到答案？</span> <a class="btn-f-m action"-->
                                   <!--href="./提出新问题 - 101 新手上路 - SegmentFault_files/提出新问题 - 101 新手上路 - SegmentFault.htm">+-->
            <!--提问</a>-->
        <!--</div>-->
    </div>
</header>
<!-- end .site-header -->

<div class="wrap">

    <div class="inner edge">
        <h2 class="common-title">提出新问题</h2>

        <form id="ask" action="__ROOT__/Ask/getquestion" method="post">
            <div id="edit-main">
                <div id="content" class="edit-post">
                    <div class="p" style="position: relative;">
                        <label for="title" class="hid">标题</label>
                        <input type="text" name="title" tabindex="1" value="" class="text-34 placeholder"
                               autocomplete="off" spellcheck="false" placeholder="标题，用一句话说清你的问题" id="question_title">
                    </div>


                    <div class="p">
                        <div class="editor-help">
                            <ul class="editor-help-tabs" style="display: block;">
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
                                <li class="right"><a href="http://segmentfault.com/q/1010000000187808" target="_blank">高级技巧</a>
                                </li>
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
                                <p>支持的语言：<code>actionscript, apache, bash, clojure, cmake, coffeescript, cpp, cs, css,
                                    d, delphi, django, erlang, go, haskell, html, http, ini, java, javascript, json,
                                    lisp, lua, markdown, matlab, nginx, objectivec, perl, php, python, r, ruby, scala,
                                    smalltalk, sql, tex, vbscript, xml</code></p>

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
                        <label for="wmd-input" class="hid">内容</label>
                        <textarea id="wmd-input" class="textarea-14" name="text" tabindex="2" autocomplete="off"
                                  spellcheck="false" rows="15"></textarea><span class="resize"></span>
                        <input type="hidden" name="category" id="cateparam"/>
                    </div>

                    <div id="wmd-preview" class="fmt preview"></div>
                </div>
                <!-- end #content -->
            </div>
            <!-- end #edit-main -->

            <div id="edit-secondary">
                <aside class="warn edit-guide">
                    <h3>提问指南</h3>
                    <ul>
                        <li>内容与技术相关，有明确的答案，有代码贴代码，附上已尝试过的解决方案</li>
                        <li>良好的排版，正确使用 Markdown 语法</li>
                    </ul>
                </aside>

                <div class="tag-edit-form p q-info rounded-2">
                    <h3 class="required">问题标签</h3>
                    <!-- <ul class="tag-list show-pop-tag"><ul class="tag-list show-pop-tag">
                        <li class="attached"><a class="tag tag-img" style="background-image: url(http://sfault-avatar.b0.upaiyun.com/106/562/1065623784-i-1040000000089564_icon);" id="category_1">生活娱乐</a></li>
                        <li class="attached"><a class="tag tag-img" style="background-image: url(http://sfault-avatar.b0.upaiyun.com/210/885/2108853470-i-1040000000089646_icon);" id="category_2">学习考试</a></li>
                        <li class="attached"><a class="tag" id="category_3">技术专业</a></li>
                        <li class="attached"><a class="tag tag-img" style="background-image: url(http://sfault-avatar.b0.upaiyun.com/236/829/2368296350-i-1040000000089699_icon);" id="category_4">规章制度</a></li>
                        <li class="attached"><a class="tag tag-img" style="background-image: url(http://sfault-avatar.b0.upaiyun.com/389/392/3893927083-i-1040000000089387_icon);" id="category_5">其他</a></li> -->
                    <div>
                        <input type="checkbox" name="q[]" id="q1"/>
                        <label for="q1" id="labelq1">生活娱乐</label></br></br>
                        <input type="checkbox" name="q[]" id="q2"/>
                        <label for="q2" id="labelq2">学习考试</label></br></br>
                        <input type="checkbox" name="q[]" id="q3"/>
                        <label for="q3" id="labelq3">技术专业</label></br></br>
                        <input type="checkbox" name="q[]" id="q4"/>
                        <label for="q4" id="labelq4">规章制度</label></br></br>
                        <input type="checkbox" name="q[]" id="q5"/>
                        <label for="q5" id="labelq5">其他</label></br></br>
                    </div>

                </div>

                <div id="responsive" class="modal hide fade" tabindex="-1" data-width="760">
                    <div id="static" class="modal hide fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
                        <div class="modal-body">
                            <p>Would you like to continue with some arbitrary task?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn">Cancel</button>
                            <button type="button" data-dismiss="modal" class="btn btn-primary">Continue Task</button>
                        </div>
                    </div>
                </div>

                <div class="p">
                    <input type="submit" class="btn btn-xl action w-xxl" tabindex="7" value="提交问题" id="postques">
                </div>
            </div>
            <!-- end #edit-secondary -->
        </form>
    </div>

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
            <dd><a href="http://segmentfault.com/feeds">RSS 订阅</a></dd>
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


<a id="backtop" class="mobi-hide hidden" href="http://segmentfault.com/ask/101#body">回顶部</a>

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
<script>(function () {
    SF.attachTag = function (tagList, tagInput, tagInputBtn) {
        var list = $(tagList), input = $(tagInput), lastTag, tagSelect = $('.tag-select'), tagDetect = $('<input id="tag-detect" type="hidden" />').insertAfter(input);
        if (tagSelect.length > 0) {
            $.get('http://segmentfault.com/api/tag?do=listSuggest', function (o) {
                if (!o.status) {
                    var suggestList = $('<div class="tag-all-list">'
                            + '<ul class="tag-index">'
                            + '<li rel="0">A-D</li>'
                            + '<li rel="1">E-H</li>'
                            + '<li rel="2">I-L</li>'
                            + '<li rel="3">M-Q</li>'
                            + '<li rel="4">R-V</li>'
                            + '<li rel="5">W-Z</li>'
                            + '</ul></div>').insertAfter(list).hide();
                    for (var i = 0; i < o.data.length; i++) {
                        var suggest = $('<ul class="tag-index-section hidden"></ul>').appendTo(suggestList);
                        for (var j = 0; j < o.data[i].length; j++) {
                            var tag = o.data[i][j], li = $('<li><a href="#" data-tid="'
                                    + tag.id + '" class="tag">' + tag.name + '</a></li>').appendTo(suggest);
                            $('a', li).data('tag', tag).click(function () {
                                addTag($(this).data('tag'));
                                return false;
                            }).tagPopup('http://segmentfault.com/api/tag');
                        }
                    }
                    $('.tag-index li', suggestList).click(function () {
                        $('.tag-index li', suggestList).removeClass('current');
                        var rel = $(this).addClass('current').attr('rel');
                        $('.tag-index-section', suggestList).addClass('hidden');
                        $('.tag-index-section:eq(' + rel + ')', suggestList).removeClass('hidden');
                    });
                    $('.tag-index li:eq(0)').trigger('click');
                    tagSelect.click(function () {
                        var t = $(this).toggleClass('active');
                        if (t.hasClass('active')) {
                            suggestList.fadeIn();
                        } else {
                            suggestList.fadeOut();
                        }
                    });
                    if (tagSelect.hasClass('active')) {
                        suggestList.fadeIn();
                    }
                    input.bind('dropdown', function () {
                        suggestList.hide();
                        tagSelect.removeClass('active');
                    });
                }
            }, 'json');
        }
        function attachTag() {
            var tags = $('li', list), values = [];
            if ($('li a.tag', list).length >= 5) {
                $('input,button', input.parent()).addClass('btn-disabled').attr('disabled', 'disabled');
            } else {
                $('input,button', input.parent()).removeClass('btn-disabled').removeAttr('disabled');
            }
            lastTag = null;
            tags.each(function () {
                var t = $(this), tag = $('a.tag', t);
                if (tag.length > 0) {
                    var tid = tag.data('tid');
                    values.push(tid);
                    lastTag = t;
                    if (!t.hasClass('attached')) {
                        var delBtn = $('<a href="#" class="i-cancel" title="删除">&#10006;</a>').appendTo(t).click(function () {
                            $(this).parent().remove();
                            attachTag();
                            input.focus();
                            return false;
                        }), idInput = $('<input type="hidden" name="tags[]">').val(tid).appendTo(t);
                        t.addClass('attached');
                    }
                }
            });
            tagDetect.val(values.join(','));
        }

        function addTag(tag) {
            var exists = $('li a.tag[data-tid="' + tag.id + '"]', list);
            if (exists.length > 0) {
                exists.css('backgroundColor', '#9a4444').animate({backgroundColor: '#FFF'}, function () {
                    $(this).css('backgroundColor', '#FFF');
                });
                return;
            }
            if (input.hasClass('btn-disabled')) {
                return;
            }
            input.val('');
            var li = $('<li><a target="_blank" data-tid="' + tag.id + '" href="' +
                    tag.url + '" class="tag' + (tag.iconUrl ? ' tag-img" style="background-image: url(' + tag.iconUrl + ');">' : '">') + tag.name + '</a></li>');
            if (lastTag) {
                li.insertAfter(lastTag);
            } else {
                li.prependTo(list);
            }
            $('a.tag').tagPopup('http://segmentfault.com/api/tag');
            attachTag();
            if (!input.hasClass('btn-disabled')) {
                input.focus();
            } else {
                input.blur();
            }
        }

        input.commonAutoComplete({'url': 'http://x.segmentfault.com/autocomplete/tag', 'insertAfter': tagList, 'cache': true, 'button': tagInputBtn, 'resultsFormatter': function (item, query) {
            var keyword = SF.slug(query, '-');
            return item.prefix ? '<li><cite>添加标签</cite> <strong>' + item.name + '</strong></li>' : '<li>' + (item.iconUrl ? '<img src="' + item.iconUrl + '" />' : '')
                    + item.name.replace(keyword, '<strong>' + keyword + '</strong>') + '</li>';
        }, 'preSelect': true, 'onResult': function (o, query) {
            input.removeClass('loading');
            return o.data;
        }, 'onLoading': function () {
            input.addClass('loading');
        }, 'onEmpty': '<li>没有合适的标签</li>', 'onEnter': function (tag) {
            if (tag.prefix) {
                SF.addCustomTag.call(tag, addTag);
                return;
            }
            addTag(tag);
        }});
        attachTag();
    }
    SF.addCustomTag = function (addTag, input) {
        if (!this.available) {
            $('<p>标签「<strong>' + this.name + '</strong>」已经被禁用, 无法再次添加</p>').modal({'title': '标签被禁用'});
            return;
        }
        if (login.rank < 0) {
            SF.commonError({status: 3, data: ['access', 'add_tag', 0]});
            return;
        }
        var editable = login.rank >= 100, postable = !editable;
        $('<p><input type="text" name="name" class="text-28" value="' + this.name + '" holder="标签名称" /></p>'
                + (!editable ? '' : '<p><textarea name="description" disabled holder="请对此标签补充一些描述资料, 以供他人参考" class="textarea-13" rows="5"></textarea>'
                + '<span class="input-desc wiki-loading">正在载入维基百科上 <a target="_blank" href="http://zh.wikipedia.org/wiki/'
                + encodeURIComponent(this.name) + '"> ' + this.name + '</a> 的解释</span></p>')).modal({'title': '添加标签', 'action': '添加', 'onShow': function (c) {
                    var name = $('input[name=name]', c).placeholder();
                    if (editable) {
                        var description = $('textarea[name=description]', c);
                        $.get('http://segmentfault.com/api/tag', {'do': 'fetch', 'name': name.val()}, function (o) {
                            if (!o.status && o.data) {
                                description.val(o.data);
                            } else {
                                var error = true;
                            }
                            description.removeAttr('disabled').placeholder();
                            $('.wiki-loading', c).fadeOut(function () {
                                if (error) {
                                    description.error('没有在维基百科上找到合适的解释');
                                }
                            });
                            postable = true;
                        }, 'json');
                    }
                }, 'onAction': function (c) {
                    var name = $('input[name=name]', c), description = $('textarea[name=description]', c), struct = {'do': 'add', 'name': name.val()};
                    if (editable) {
                        struct.description = description.val();
                    }
                    if (!postable) {
                        return;
                    }
                    $.post('http://segmentfault.com/api/tag', struct, function (o) {
                        if (!o.status) {
                            addTag(o.data);
                            c.trigger('close');
                        } else if (4 == o.status) {
                            name.error('请输入标签名称');
                        } else if (5 == o.status) {
                            name.error('标签名称过长');
                        } else if (6 == o.status) {
                            name.error('标签已经存在');
                        } else if (7 == o.status) {
                            description.error('请至少输入20个字描述此标签');
                        }
                    }, 'json');
                }, 'onClose': function (c) {
                    if (input) {
                        input.focus();
                    }
                }});
    }
})();</script>
<script>(function () {
    SF.detectInput = function (inputs, button) {
        var disabled = false, last, btn = $(button), inputList = $(inputs);
        setInterval(function () {
            disabled = false;
            inputList.each(function () {
                if (0 == $.trim($(this).val()).length) {
                    disabled = true;
                }
            });
            if (last !== disabled) {
                if (disabled) {
                    btn.addClass('btn-disabled').attr('disabled', 'disabled');
                } else {
                    btn.removeClass('btn-disabled').removeAttr('disabled');
                }
                last = disabled;
            }
        }, 100);
    }
})();</script>
<script>$(document).ready(function () {
    SF.editor('http://segmentfault.com/img/', 'http://segmentfault.com/api/upload/img', 'http://segmentfault.com/api/upload/fetch');
    SF.attachTag('.tag-list', '.tag-input', '.tag-input-btn');
    SF.detectInput('input[name=title],#wmd-input,#tag-detect', '#edit-secondary input.action');
    $('input[name=title]').focus();
});</script>


<div class="s-loading" style="display: none;">加载中</div>
<div>
    <object id="ClCache" click="sendMsg" host="" width="0" height="0"></object>
</div>
</body>
</html>