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
        <a href="https://www.barryblueice.top" target="_blank" class="mdui-btn mdui-btn-icon"  mdui-tooltip="{content :'查看起始页源码'}">
            <i class="mdui-icon material-icons">code</i>
        </a>
    </div>
    <body class="mdui-drawer-body-left"> <!--menu-->
      <div class="mdui-drawer  mdui-drawer-close" id="left-drawer">
        <ul class="mdui-list">
          <li class="mdui-list-item mdui-ripple">
            <i class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-black-icon">move_to_inbox</i>
            <div class="mdui-list-item-content mdui-text-color-black">常用</div>
          </li>
          <li class="mdui-list-item mdui-ripple "  mdui-drawer-close>
            <i class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-black-icon">exit_to_app</i>
            <div class="mdui-list-item-content mdui-text-color-black">返回</div>
          </li>
        </ul>
      </div>
      <div class="mdui-container">
        <div class="mdui-row">
          <div class="mdui-col-md-8 mdui-col-offset-md-5">
            <div class="mdui-typo-display-3"  style="padding-top: 250px;">RE-LINK</div>
          </div>
        </div>
      </div>
      <div class="mdui-textfield mdui-center" style="padding-top: 50px;">
        <div class=" mdui-container">
          <form method="get" class="search-bar" action="https://www.baidu.com/s?">
            <div class="mdui-row">
              <div class="mdui-col-md-7 mdui-col-offset-md-2">
                <div class="mdui-textfield">
                  <i class="mdui-icon material-icons">search</i>
                  <input class="mdui-textfield-input"  type="text" name="wd" placeholder="Search..."/>
                </div>
              </div>
              <div class="mdui-col-offset-md-1 "  style="padding-top: 16px;">
                <button class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent">Search!</button>
              </div>
            </div>
          </form>
        </div>
      </div>  
    </body>

    <h1></h1>
    <!-- MDUI JavaScript -->
    <script src="/mdui/js/mdui.min.js"></script>
  </body>
</html>