<?php

$pattern = '/fa-([\w|\-])+:before/i';
$data = file_get_contents('./awesome.css');

preg_match_all($pattern,$data,$matches);

$all = $matches[0];

$li = '';
foreach ($all as $item){
    $tmp = explode(':',$item);
    $tmp2 = explode('-',$tmp[0]);
    unset($tmp2[0]);
    $li .= '<li>
            <i class="fa '.$tmp[0].'"></i>
            <div class="name">'.(implode('-',$tmp2)).'</div>
            <div class="fontclass">'.$tmp[0].'</div>
        </li>';
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>IconFont</title>
    <link rel="stylesheet" href="./demo.css">
    <link rel="stylesheet" href="./awesome.css">
</head>
<body>
<div class="main markdown">
    <h1>IconFont 图标</h1>
    <ul class="icon_lists clear">

       <?php
       echo $li;
       ?>

    </ul>

    <h2 id="font-class-">font-class引用</h2>
    <hr>

    <p>font-class是unicode使用方式的一种变种，主要是解决unicode书写不直观，语意不明确的问题。</p>
    <p>与unicode使用方式相比，具有如下特点：</p>
    <ul>
        <li>兼容性良好，支持ie8+，及所有现代浏览器。</li>
        <li>相比于unicode语意明确，书写更直观。可以很容易分辨这个icon是什么。</li>
        <li>因为使用class来定义图标，所以当要替换图标时，只需要修改class里面的unicode引用。</li>
        <li>不过因为本质上还是使用的字体，所以多色图标还是不支持的。</li>
    </ul>
    <p>使用步骤如下：</p>
    <h3 id="-fontclass-">第一步：引入项目下面生成的fontclass代码：</h3>


    <pre><code class="lang-js hljs javascript"><span class="hljs-comment">&lt;link rel="stylesheet" type="text/css" href="./awesome.css"&gt;</span></code></pre>
    <h3 id="-">第二步：挑选相应图标并获取类名，应用于页面：</h3>
    <pre><code class="lang-css hljs">&lt;<span class="hljs-selector-tag">i</span> <span class="hljs-selector-tag">class</span>="<span class="hljs-selector-tag">iconfont</span> <span class="hljs-selector-tag">icon-xxx</span>"&gt;&lt;/<span class="hljs-selector-tag">i</span>&gt;</code></pre>
    <blockquote>
        <p>"iconfont"是你项目下的font-family。可以通过编辑项目查看，默认是"iconfont"。</p>
    </blockquote>
</div>
</body>
</html>
