<!doctype html>
<html lang="zh-cmn-Hans">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no"/>
    <meta name="renderer" content="webkit"/>
    <meta name="force-rendering" content="webkit"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <!-- MDUI CSS -->
    <link rel="stylesheet" href="/mdui/css/mdui.min.css"/>
    <link rel="shortcut icon" type="image/png" href="/icon.jpg" />
    <title>RELINK睿连起始页——一个由某小白编写的轻量级起始页</title>
  </head>
  <body class="mdui-theme-primary-indigo mdui-theme-accent-indigo">
    <div class="mdui-toolbar mdui-color-theme"> <!-- toolbar -->
      <button class="mdui-btn" mdui-drawer="{target: '#left-drawer'}">
        <i class="mdui-icon material-icons">menu</i>
      </button>
        <span class="mdui-typo-title">RELINK睿连起始页</span>
        <div class="mdui-toolbar-spacer"></div>
        <a href="https://www.barryblueice.top" target="_blank" class="mdui-btn mdui-btn-icon"  mdui-tooltip="{content :'查看作者网站'}">
            <i class="mdui-icon material-icons">home</i>
        </a>
        <a href="https://github.com/barryblueice/RELINK-HOME-PAGE" target="_blank" class="mdui-btn mdui-btn-icon"  mdui-tooltip="{content :'查看起始页源码'}">
            <i class="mdui-icon material-icons">code</i>
        </a>
    </div>
    <body class="mdui-drawer-body-left"> <!--menu-->
      <div class="mdui-drawer  mdui-drawer-close" id="left-drawer">
        <ul class="mdui-list" mdui-collapse="{accordion: true}">
          <li class="mdui-collapse-item  mdui-collapse-item-close" id="collapse_website_normal">
            <div class="mdui-collapse-item-header mdui-list-item mdui-ripple" mdui-collapse="{target: '#collapse_website_normal'}">
              <i class="mdui-list-item-icon mdui-icon material-icons">dashboard</i>
              <div class="mdui-list-item-content">常用网站</div>
              <i class="mdui-collapse-item-arrow mdui-icon material-icons ">keyboard_arrow_down</i>
            </div>
            <ul class="mdui-collapse-item-body mdui-list mdui-list-dense">
              <a href="./sample.php">
                <li class="mdui-list-item mdui-ripple">国家政府相关</li>
              </a>
              <li class="mdui-list-item mdui-ripple">程序代码相关</li>
              <li class="mdui-list-item mdui-ripple">设计素材相关</li>
              <li class="mdui-list-item mdui-ripple">生活问答相关</li>
            </ul>
          </li>
          <li class="mdui-list-item mdui-ripple">
            <i class="mdui-list-item-icon mdui-icon material-icons ">account_circle</i>
            <div class="mdui-list-item-content">关于作者</div>
          </li>
          <li class="mdui-list-item mdui-ripple"  mdui-drawer-close>
            <i class="mdui-list-item-icon mdui-icon material-icons ">exit_to_app</i>
            <div class="mdui-list-item-content">返回</div>
          </li>
        </ul>
      </div>
    </body>

    <h1></h1>
    <!-- MDUI JavaScript -->
    <script src="/mdui/js/mdui.min.js"></script>
  </body>
</html>