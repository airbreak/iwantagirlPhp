<?php
require_once "jssdk.php";
$jssdk = new JSSDK("wx2f3a32d7659540d0", "724b2c25abf17a825ecb870098a6194a");
$signPackage = $jssdk->GetSignPackage();

$counterFile = "counter.txt";
if (!file_exists($counterFile))
{
    file_put_contents($counterFile, 0);
}
$num = intval(file_get_contents($counterFile));
$num ++;
file_put_contents($counterFile, $num);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width ,initial-scale=1.0,maximum-scale=1.0,user-scalable=0;" />
	<meta name="sharecontent" data-msg-img="http://game.hisihi.com/double11/area/imgs/home/shareSmall.jpg" data-msg-title="活捉一只妹纸" data-msg-content="活捉一只妹纸" data-msg-callBack="" data-line-img="http://game.hisihi.com/double11/area/imgs/home/shareSmall.jpg" data-line-title="活捉一只妹纸" data-line-callBack=""/>
	<meta name="description" content="嘿设汇,活捉一只妹纸" />
	<meta name="keywords" content="嘿设汇,活捉一只妹纸" />
    <title>活捉一只妹纸</title>
	<link href="area/style.css" rel="stylesheet"/>
</head>
<body>
  <img src="http://game.hisihi.com/double11/area/imgs/home/shareBig.jpg" id="noAttentionImg" height="0" width="0" />
  <div id="wrapper">
      <!--游戏加载-->
      <div id="loadingPage" class="pageItem active">
          <div id="loadingPageContent">
              <div class="smallItem" id="girlAndNet">
                  <img class="runnningGirl" src="area/imgs/loading/2.png" />
                  <img class="net" src="area/imgs/loading/3.png" />
              </div>
              <div class="normatItem loadingProgressBar">
                  <div id="loadingProgressBar">
                      <div class="progress">
                          <div class="progress-bar"></div>
                      </div>
                  </div>
              </div>
              <div class="normatItem" id="loadingTips">
                  <img src="area/imgs/loading/5.png" />
              </div>
          </div>
      </div>

      <!--游戏性别选择-->
      <div id="homePage" class="pageItem">
          <div id="homePageHead">
              <img src="area/imgs/home/3.png" class="btn audioControl" />
          </div>
          <div id="homePageBottom">
              <div id="airPlane"><img src="area/imgs/home/2.png" /></div>
              <div id="genderBtns">
                  <img src="area/imgs/home/4.png" class="btn" />
                  <img src="area/imgs/home/5.png" class="btn" />
              </div>
          </div>
      </div>

      <!--游戏介绍-->
      <div id="gameDesciption" class="pageItem">
          <div class="gameDesciptionItem">
              <img src="area/imgs/gamedescription/2.png" />
          </div>
          <div class="gameDesciptionItem">
              <img src="area/imgs/gamedescription/3.png" />
          </div>
          <div class="gameDesciptionItem">
              <img src="area/imgs/gamedescription/4.png" />
          </div>
      </div>

      <!--游戏页面-->
      <div id="gamePage" class="pageItem">
          <!--人物-->
          <div class="horizontal">
              <div class="vertical">
                  <img src="#" class="person btn" />
              </div>
          </div>
          <!--宝典-->
          <div id="hisihiDictionary">
              <img src="area/imgs/game/5.png" class="btn" />
          </div>
          <!--宝典内容-->
          <div id="hisihiDictionaryCon" class="pageItem">
              <div id="useDictionaryBtn">
                  <img src="area/imgs/game/8.png" class="btn" />
                  <div class="errorInfo">你已经使用过宝典了</div>
              </div>
          </div>
          <!--logo-->
          <div id="hisihiLogoH">
              <div id="hisihiLogoV">
                  <img src="area/imgs/game/4.png" />
              </div>
          </div>
      </div>

      <!--游戏结束-->
      <div id="resultPage" class="pageItem">
          <div class="resultContainer">
              <div class="imgContainer">
                  <img src="area/imgs/gameover/7.jpg" />
              </div>
              <div class="resultInfoItem nameAndLevel">
                    <span class="namesContainer">
                        <span>&diams;</span>
                        <span class="nameFiled"></span>
                        <span>&diams;</span>
                    </span>
                  <img src="" class="level" />
              </div>
              <div class="resultInfoItem">
                    <span class="hAndwIconCon">
                        <img src="area/imgs/gameover/h.png" class="hAndwIncon" />
                        <span class="hInfo"></span>
                    </span>
                    <span class="hAndwIconCon">
                        <img src="area/imgs/gameover/w.png" class="hAndwIncon" />
                        <span class="wInfo"></span>
                    </span>
              </div>
              <div class="resultInfoItem description">
                  <p></p>
              </div>
              <div class="resultInfoItem shareAndGiveUpBtns">
                  <img src="area/imgs/gameover/share.png" />
                  <img src="area/imgs/gameover/giveup.png" />
              </div>
          </div>

          <div id="downloadCon">
              <img src="area/imgs/gameover/2.png" class="allDownImg" />
<!--              <a href="http://www.hisihi.com/download.php">-->
                  <img src="area/imgs/gameover/3.png" class="btn downBtn" />
<!--              </a>-->
          </div>
      </div>
      <div id="shareTips" class="pageItem"></div>
  </div>
  <script src="area/js/jquery-1.8.2.min.js"></script>
  <script src="area/js/prefixfree.min.js"></script>
  <script src="area/js/jweixin-1.0.0.js"></script>
  <script src="area/js/home.js"></script>

</body>
<script>
  /*
   * 注意：
   * 1. 所有的JS接口只能在公众号绑定的域名下调用，公众号开发者需要先登录微信公众平台进入“公众号设置”的“功能设置”里填写“JS接口安全域名”。
   * 2. 如果发现在 Android 不能分享自定义内容，请到官网下载最新的包覆盖安装，Android 自定义分享接口需升级至 6.0.2.58 版本及以上。
   * 3. 常见问题及完整 JS-SDK 文档地址：http://mp.weixin.qq.com/wiki/7/aaa137b55fb2e0456bf8dd9148dd613f.html
   *
   * 开发中遇到问题详见文档“附录5-常见错误及解决办法”解决，如仍未能解决可通过以下渠道反馈：
   * 邮箱地址：weixin-open@qq.com
   * 邮件主题：【微信JS-SDK反馈】具体问题
   * 邮件内容说明：用简明的语言描述问题所在，并交代清楚遇到该问题的场景，可附上截屏图片，微信团队会尽快处理你的反馈。
   */
  wx.config({
    debug: false,
    appId: '<?php echo $signPackage["appId"];?>',
    timestamp: <?php echo $signPackage["timestamp"];?>,
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
    jsApiList: [
      // 所有要调用的 API 都要加到这个列表中
        'checkJsApi','chooseImage','onMenuShareAppMessage','onMenuShareQQ','onMenuShareWeibo','onMenuShareQZone','onMenuShareTimeline'
    ]
  });

</script>
<script src="area/js/hisihi.share.js"></script>
</html>
