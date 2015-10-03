<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" media="screen" />
  <title>
    simonsmh - server Website
  </title>
  <!-- CSS -->
  <link href="css/googleapi.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <script src="js/jquery-2.1.4.min.js">
  </script>
  <script src="js/materialize.js">
  </script>
  <script src="js/init.js">
  </script>
</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.php" class="brand-logo">
        主页
      </a>
      <ul class="right hide-on-med-and-down">
        <li>
          <a class="dropdown-button waves-effect waves-light" href="#" data-activates="dropdown1">
            菜单
            <i class="mdi-navigation-arrow-drop-down right">
            </i>
          </a>
        </li>
      </ul>
      <ul id="dropdown1" class="dropdown-content">
        <li>
          <a href="index.php" class="waves-effect black-text">
            主页
          </a>
        </li>
        <li>
          <a href="files.php" class="waves-effect black-text">
            文件储存
          </a>
        </li>
        <li>
          <a href="http://192.168.1.1/" class="waves-effect black-text">
            光猫
          </a>
        </li>
        <li>
          <a href="http://192.168.199.1" class="waves-effect black-text">
            Openwrt
          </a>
        </li>
        <li>
          <a href="info.php" class="waves-effect black-text">
            代理相关
          </a>
        </li>
      </ul>
      <ul id="nav-mobile" class="side-nav">
        <li>
          <a href="index.php" class="waves-effect">
            主页
          </a>
        </li>
        <li>
          <a href="files.php" class="waves-effect">
            文件储存
          </a>
        </li>
        <li>
          <a href="http://192.168.1.1/" class="waves-effect">
            电信光猫
          </a>
        </li>
        <li>
          <a href="http://192.168.199.1" class="waves-effect">
            Openwrt
          </a>
        </li>
        <li>
          <a href="info.php" class="waves-effect">
            代理相关
          </a>
        </li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse">
        <i class="mdi-navigation-menu">
        </i>
      </a>
    </div>
  </nav>
    <div class="section no-pad-bot" id="index-banner">
      <div class="container">
        <br>
        <br>
        <h2 class="header center orange-text">
          &nbsp;simonsmh
          </br>
          个人页面
        </h2>
        <div class="row center">
          <h5 class="header col s12 light">
            快来与我一起发现更加广阔的互联网世界吧
          </h5>
        </div>
        <div class="row center">
          <a href="info.html" id="download-button" class="btn-large waves-effect waves-light orange">
            START:DASH!!
          </a>
        </div>
        <div class="progress">
          <div class="indeterminate blue">
          </div>
        </div>
        <br>
      </div>
    </div>
    <div class="container">
      <div class="section">
        <!-- Icon Section -->
        <div class="row">
          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center light-blue-text">
                <i class="material-icons">
                  &#xE3E7;
                </i>
              </h2>
              <h5 class="center">
                速度提升
              </h5>
              <p class="light">
                simonsmh.tk运用世界先进的代理程序，更加快速（都不能满速真是low），稳定（3天一小炸，5天一大炸），安全，可靠。
              </p>
            </div>
          </div>
          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center light-blue-text">
                <i class="material-icons">
                  &#xE7EF;
                </i>
              </h2>
              <h5 class="center">
                开源支持
              </h5>
              <p class="light">
                感谢@clowwindy为首的团队在开源开发平台GitHub无私贡献shadowsocks代码。纪念@clowwindy（被抓去喝茶真是惨兮兮）。
              </p>
            </div>
          </div>
          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center light-blue-text">
                <i class="material-icons">
                  &#xE8B8;
                </i>
              </h2>
              <h5 class="center">
                设置快捷
              </h5>
              <p class="light">
                simonsmh.tk支持多种代理模式，支持所有平台（包括1%），优秀的兼容性让你随时随地接入国际互联网。
              </p>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
      <div class="section">
      </div>
    </div>
    <?php include( "footer.php"); ?>