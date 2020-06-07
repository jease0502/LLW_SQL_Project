<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist\css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>     
	<script src="bootstrap-3.3.7-dist\js/bootstrap.min.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<style type="text/css">
		body{
			background-color: #eaf3db;
			opacity: 0.8;
		}
		.fromcss {
			line-height: 1.2em;
			font-style: italic;
			font-size:150%;
		}
		#accordion{

		}
		
		#img{
			opacity: 0.8;
		}

		#topContent 
		{
			background-image: url('./Images/login_banner.jpg');
			background-repeat: no-repeat;
			text-align: right;
			background-color: #006699;
			color: White;
			font-size: x-large;
			text-decoration: none;
			font-weight: bold;
			padding: 10px;
			height: 75px;
			min-width: 970px;	
		}

		#topContent a {
			text-decoration: underline;
			color: White;
			text-align: justify;
		}

		#topContent table {
			font-size: small;
    
		}
		
		#mainContent {
			text-align: left;
			margin-left: 0px;
			padding: 10px;
			margin-top: 6px;    
		}
    
		
	</style>
</head>
<body>
	<header>
<div id="topContent">
        <span  style="text-align: left; display:block;"><font size="8">逢甲大學選課系統</font></span>
        <br>
        <br>
        <table style="position: absolute; left: 10px; top: 55px;
            min-width: 970px" width="99%" align="right">
            <tbody><tr>
                <td align="right">
                    <a  href="coursequest.aspx" target="_blank">課程檢索系統</a>
                    <a  href="http://curriculummapping.fcu.edu.tw/about.do" target="_blank">選課地圖</a>
                    <a href="http://www.registration.fcu.edu.tw/wSite/public/Attachment/f1514282000124.mp4" target="_blank">系統操作說明</a>
                    <a  href="http://www.registration.fcu.edu.tw/wSite/mp?mp=211101" target="_blank">註課組首頁</a>
                    <a  href="http://www.fcu.edu.tw/" target="_blank">逢甲首頁</a>
                    <a href="http://www.fcu.edu.tw/wSite/lp?ctNode=16062&amp;mp=1" target="_blank">隱私權聲明</a>
                </td>
            </tr>
        </tbody></table>
    </div>
		
	</header>
	
		
<div style="position: relative; width: 2560px; height: 70px;font-family:DFKai-sb;font-size:200%;">
<?php
include"func.php";
nav_judge();

?>
</div>
<div align="center" style="width: 90%;margin:5%;">
<div align="center" id="accordion">
<div id="mainContent">
        
    <noscript>
        <meta http-equiv='refresh' content='0;url=NoJavaScript.aspx' />
    </noscript>
    <div id="ctl00_MainContent_AnnouncementPanel" class="annoncepanel">
	<fieldset>
		<legend>
			公告事項
		</legend>
        <span id="ctl00_MainContent_lblAnnouncement"><h1>
 <span style="font-size: 72px"><span style="color: #0066ff"><span style="color: #ff0000">加選截止後退選仍須繳費且不予退費。</span></span><span style="color: #0066ff"><span style="color: #ff0000">(亦不可要求改選)</span></span></span></h1>
<p>
 <strong><span style="font-size: 16px"><span style="color: #0066ff">[<span style="background-color: #e6e6fa">查詢項目說明</span>]</span></span></strong></p>
<p>
 <span style="font-size: 16px">1、辦理選課前，請同學務必事先閱讀並依逢甲大學學生選課施行準則、各統籌教學單位(如通識教育中心、體育教學中心等)及各學系、所、學位學程等選課規定辦理。<br>
 各單位規定請至逢甲大學首頁（<a href="http://www.fcu.edu.tw/wSite/mp?mp=1">http://www.fcu.edu.tw/wSite/mp?mp=1</a>），點選認識逢甲、教學單位之各單位公告內容查詢。</span></p>
  
 
<p>
 <span style="font-size: 16px">2、如要查詢各學系、所、學位學程之新生必選修科目表及輔系、雙主修、學分學程之修習科目，可至註冊課務組網頁之課程資訊（<span style="font-family: Roboto, Helvetica, Arial, sans-serif; white-space: normal; word-spacing: 0px; text-transform: none; float: none; font-weight: 400; color: rgb(68,68,68); font-style: normal; orphans: 2; widows: 2; display: inline !important; letter-spacing: normal; text-indent: 0px; font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial"><a href="https://goo.gl/Z9A3FR">https://goo.gl/Z9A3FR</a></span>）公告。</span></p>
<p>
 <span style="font-size: 16px">3、查詢開課資料，建議使用課程檢索系統（<span style="font-family: Roboto, Helvetica, Arial, sans-serif; white-space: normal; word-spacing: 0px; text-transform: none; float: none; font-weight: 400; color: rgb(68,68,68); font-style: normal; orphans: 2; widows: 2; display: inline !important; letter-spacing: normal; text-indent: 0px; font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial"><a href="https://goo.gl/l1yl5h">https://goo.gl/l1yl5h</a></span>）進行動態查詢。</span></p>
<p>
 <span style="font-size: 16px">4、如要快速查詢相關選課資訊，可多利用註冊課務組之選課資訊（<span style="font-family: Roboto, Helvetica, Arial, sans-serif; white-space: normal; word-spacing: 0px; text-transform: none; float: none; font-weight: 400; color: rgb(68,68,68); font-style: normal; orphans: 2; widows: 2; display: inline !important; letter-spacing: normal; text-indent: 0px; font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial"><a href="https://goo.gl/BmzkfV">https://goo.gl/BmzkfV</a>）</span>。</span></p>
<p>
 <span style="font-size: 16px">5、若NID帳號使用有任何問題，請洽詢資訊處（04-24517250#2712，人言大樓3F）。</span></p>
<p>
 <span style="font-size: 16px">&nbsp;</span></p>
 
 <p>
 <strong><span style="font-size: 16px"><span style="color: #0066ff">[<span style="background-color: #e6e6fa">選課須知</span>]</span></span></strong></p>
<p>
 <span style="font-size: 16px">電腦預選：(開學前之選課，不含大四生先選先上階段) 採混合圈填志願，電腦作業採「亂數」隨機選取，各年級選課機會均等，應屆畢業生並無優先選課之處理，亦即按志願預選該班時，如預選人數多於名額，則「隨機」選取。填寫志願時請務必考慮被選取之機率，以免因志願過於集中而降低修習之機會。</span></p>
 
<p>
 <span style="font-size: 16px">&nbsp;</span></p>
 
<p>
 <strong><span style="font-size: 16px"><span style="color: #0066ff">[<span style="background-color: #e6e6fa">公告內容</span>]</span></span></strong></p>
<p>
 <span style="font-size: 16px">1、108學年度第2學期起，註冊課務組網頁<u><span style="color: #ff0000">新增教室更換紀錄公告</span></u>，如要確認上課教室更換情形，請至<a href="http://www.registration.fcu.edu.tw/wSite/lp?ctNode=48129&amp;mp=211101&amp;idPath=34124_48129">註冊課務組／教室更換查詢</a>瀏覽。</span></p>
<p>
 <span style="font-size: 16px">2、108學年度第2學期學生選課行事曆已公布於註冊課務組網頁之<a href="http://www.registration.fcu.edu.tw">最新消息</a>，請自行上網查詢。</span></p>
<p>
 <span style="font-size: 16px">3、108學年度第2學期校際選課資訊已公布於註冊課務組網頁之<a href="http://www.registration.fcu.edu.tw">最新消息</a>，請自行上網查詢。</span></p>
<p>
 <span style="font-size: 16px">4、<a href="http://www.pe.fcu.edu.tw/wSite/ct?xItem=272520&amp;ctNode=13635&amp;mp=590101">體育處公告：逢甲大學通識教育課程修克要點通過修正，取消大二必修體育</a>。</span></p>
<p>
 <span style="font-size: 16px">5、108學年度第2學期註冊選課通知已公布於註冊課務組網頁之<a href="http://www.registration.fcu.edu.tw">最新消息</a>，請自行上網查詢。</span></p>
<p>
 <span style="font-size: 16px">6、因應新導師制度實施，自108學年度起（商學進修學士班、營建管理進修學士班、商學創新、普渡電資、大數據分析、聖荷西工程除外），二年級（含）以上之班級活動課程停止開設。</span></p>
<p>
 <span style="font-size: 16px">7、系統操作說明請參閱註冊課務組網頁公告（<a href="https://goo.gl/DjT1i2">https://goo.gl/DjT1i2</a>）。</span></p>
<p>
 ＜<a href="http://www.registration.fcu.edu.tw/wSite/lp?ctNode=34743&amp;mp=211101&amp;idPath=">更多消息</a>＞</p>
<p>
 &nbsp;</p>
<p>
 <span style="font-size: 16px">選課過程中如有相關問題，歡迎電洽04-24517250#2111，謝謝。</span></p>

    
	</fieldset>
</div>

    </div>
<div>
<script>
	$("#accordion").accordion();
	</script>
</body>
</html>
