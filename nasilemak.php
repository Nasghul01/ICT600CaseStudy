<!DOCTYPE html>
<?php
    date_default_timezone_set('Asia/Kuala_Lumpur');
    include 'dba.inc.php';
    include 'comments.inc.php';
    session_start();
    
?>
<html dir='ltr' lang='ms-MY' xmlns='http://www.w3.org/1999/xhtml' xmlns:b='http://www.google.com/2005/gml/b' xmlns:data='http://www.google.com/2005/gml/data' xmlns:expr='http://www.google.com/2005/gml/expr'>
<!--<head>
<link href='https://www.blogger.com/static/v1/widgets/55013136-widget_css_bundle.css' rel='stylesheet' type='text/css'/>
-->
<head>
    <!-- meta -->
    <meta charset='UTF-8'/>
        <meta content='IE=edge' http-equiv='X-UA-Compatible'/>
        <meta content='width=device-width,initial-scale=1.0, minimum-scale=1, maximum-scale=1, user-scalable=no' name='viewport'/>
        <link href='//1.bp.blogspot.com' rel='dns-prefetch'/>
        <link href='//2.bp.blogspot.com' rel='dns-prefetch'/>
        <link href='//3.bp.blogspot.com' rel='dns-prefetch'/>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href='//4.bp.blogspot.com' rel='dns-prefetch'/>
        <link href='//lh3.googleusercontent.com' rel='dns-prefetch'/>
        <link href='//www.blogger.com' rel='dns-prefetch'/>
        <link href='//fonts.gstatic.com' rel='dns-prefetch'/>
        <link href='//pagead2.googlesyndication.com' rel='dns-prefetch'/>
        <link href='//www.google-analytics.com' rel='dns-prefetch'/>
        <link href='//googleads.g.doubleclick.net' rel='dns-prefetch'/>
        <link href='//adservice.google.com/' rel='dns-prefetch'/>
        <meta content='blogger' name='generator'/>
        <title>Nasi Lemak Sambal Ikan Bilis Sedap</title>
        <meta content='article' property='og:type'/>
        <meta content='Nasi Lemak Sambal Ikan Bilis Sedap' property='og:title'/>
        <meta content='Nasi Lemak Sambal Ikan Bilis Sedap' name='twitter:title'/>
        <meta content='summary' name='twitter:card'/>
        <meta content='Cara masak nasi lemak setanding resepi nasi lemak Azie Kitchen dan sambal nasi lemak Chef Wan. Sedap dimakan dengan sambal bilis, ditambah ayam berempah atau ayam goreng. Nasi lemak pandan, nasi lemak tanpa santan, nasi lemak kukus, nasi lemak Kelantan, nasi lemak Terengganu tak jauh beza ...' name='description'/>
        <meta content='Cara masak nasi lemak setanding resepi nasi lemak Azie Kitchen dan sambal nasi lemak Chef Wan. Sedap dimakan dengan sambal bilis, ditambah ayam berempah atau ayam goreng. Nasi lemak pandan, nasi lemak tanpa santan, nasi lemak kukus, nasi lemak Kelantan, nasi lemak Terengganu tak jauh beza ...' property='og:description'/>
        <meta content='Cara masak nasi lemak setanding resepi nasi lemak Azie Kitchen dan sambal nasi lemak Chef Wan. Sedap dimakan dengan sambal bilis, ditambah ayam berempah atau ayam goreng. Nasi lemak pandan, nasi lemak tanpa santan, nasi lemak kukus, nasi lemak Kelantan, nasi lemak Terengganu tak jauh beza ...' name='twitter:description'/>
        <link href='https://www.anekaresipi.com/feeds/8323444581280108712/posts/summary' rel='alternate' title='Nasi Lemak Sambal Ikan Bilis Sedap — Atom' type='application/atom+xml'/>
        <link href='https://www.anekaresipi.com/feeds/8323444581280108712/posts/summary?alt=rss' rel='alternate' title='Nasi Lemak Sambal Ikan Bilis Sedap — RSS' type='application/rss+xml'/>
        <link href='https://www.anekaresipi.com/feeds/8323444581280108712/comments/summary' rel='alternate' title='Nasi Lemak Sambal Ikan Bilis Sedap — Comment Atom' type='application/atom+xml'/>
        <link href='https://www.anekaresipi.com/feeds/8323444581280108712/comments/summary?alt=rss' rel='alternate' title='Nasi Lemak Sambal Ikan Bilis Sedap — Comment RSS' type='application/rss+xml'/>
        <link href='https://lh3.googleusercontent.com/-znX-KsHkwjs/WkxrKSfPEDI/AAAAAAAAAls/rRJnqpitpXQoXKze4XINYiUv9ZahN6COACHMYCw/s600-e60/nasi%2Blemak%2Bterbaik%255B5%255D' rel='image_src'/>
        <meta content='https://lh3.googleusercontent.com/-znX-KsHkwjs/WkxrKSfPEDI/AAAAAAAAAls/rRJnqpitpXQoXKze4XINYiUv9ZahN6COACHMYCw/s600-e60/nasi%2Blemak%2Bterbaik%255B5%255D' property='og:image'/>
        <meta content='https://lh3.googleusercontent.com/-znX-KsHkwjs/WkxrKSfPEDI/AAAAAAAAAls/rRJnqpitpXQoXKze4XINYiUv9ZahN6COACHMYCw/s600-e60/nasi%2Blemak%2Bterbaik%255B5%255D' name='twitter:image'/>
        <link href='https://www.anekaresipi.com/2018/01/nasi-lemak-sambal-ikan-bilis-sedap.html?m=1' media='only screen and (max-width:640px)' rel='alternate'/>
        <link href='https://www.anekaresipi.com/2018/01/nasi-lemak-sambal-ikan-bilis-sedap.html' rel='canonical'/>
        <meta content='https://www.anekaresipi.com/2018/01/nasi-lemak-sambal-ikan-bilis-sedap.html' property='og:url'/>
        <meta content='Aneka Resipi' property='og:site_name'/>
        <meta content='ms_MY' property='og:locale'/>
        <link href='https://www.anekaresipi.com/favicon.ico' rel='icon' type='image/x-icon'/>
        <meta content='noarchive,noodp,noydir' name='robots'/>

    
    
        <!--
    <style type='text/css'></style>-->
    <style type='text/css'>
    /* common bundle */
    section,nav,article,aside,hgroup,header,footer{display:block}time,mark{display:inline}.blog-list-container ul{padding-left:0}.blog-list-container ul li{padding-left:0;list-style:none;list-style-image:none;clear:left}.blog-list-container a{text-decoration:none}.blog-list-container a:hover{text-decoration:underline}.blog-list-container 
    .blog-content{float:left;margin:0 0 5px 5px;text-indent:0;width:85%}
    .blog-list-container .blog-title{font-weight:bold;line-height:16px;margin:2px 0 0}.blog-list-container .blog-icon{float:left;margin-top:2px;vertical-align:top;text-indent:0;width:16px;height:16px}.blog-list-container .item-content{font-size:95%;line-height:1.3em}.blog-list-container .item-thumbnail{float:left;margin:2px 5px 5px 0}.blog-list-container .item-time{font-size:95%;font-style:italic;clear:left}.blog-list-title{font-weight:bold}.blog-list-container .show-option{font-size:75%;text-align:right}a.next-page-link{cursor:pointer}.quickedit{cursor:pointer}.default-avatar{display:none}.status-msg-wrap{font-size:110%;width:90%;margin:10px auto;position:relative}.status-msg-border{border:1px solid #000;opacity:.4;width:100%;position:relative}.status-msg-bg{background-color:#ccc;opacity:.8;width:100%;position:relative;z-index:1}.status-msg-body{text-align:center;padding:.3em 0;width:100%;position:absolute;z-index:4}.status-msg-hidden{visibility:hidden;padding:.3em 0}.status-msg-wrap a{padding-left:.4em;text-decoration:underline}
    table.tr-caption-container{padding:4px;margin-bottom:.5em}td.tr-caption{font-size:80%}.icon-action{border-style:none!important;margin:0 0 0 .5em!important;vertical-align:middle}.item-control{display:none}
    .no-items.section {display:none}
    @media all{.BLOG_mobile_video_class{display:none}}@media handheld{.BLOG_mobile_video_class{display:inline}.BLOG_video_class{display:none}}.blog-mobile-link{padding:15px}
    </style>
    <style id='page-skin-1' type='text/css'><!--
    /* GLOBAL ~~~~~~~~~~~~~~~~~~~~~ */
    /*@font-face {font-family: 'Google Sans'; font-style: normal; font-weight: 400; font-display: swap; src: local('Google Sans'), local('GoogleSans'), url(https://fonts.gstatic.com/s/googlesans/v27/4UaGrENHsxJlGDuGo1OIlL3Awp5MKg.woff2) format('woff2'); unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}*/
    @font-face {font-family: 'Google Sans'; font-style: normal; font-weight: 400; font-display: swap; src: local('Google Sans'), local('GoogleSans'), url(https://fonts.gstatic.com/s/googlesans/v27/4UaGrENHsxJlGDuGo1OIlL3Owp4.woff2) format('woff2'); unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
    *{margin:0;padding:0;/*box-sizing:border-box*/}div.clear{clear:both}img{font-size:small}body{word-wrap:break-word;background:#fafafa;color:#202020;font-family:arial,tahoma;/*font-size:1.05rem;*/width:100%}strong,b{font-weight:500}
    #outer-wrapper{
        position:relative;width:100%;margin:0 auto
        
    }
    #content-wrapper,#middleads-wrapper,#main-wrapper,.sidebar-wrapper,.small-sidebar-wrapper,#lower-wrapper,.lowerbar-wrapper,.widget{overflow:hidden}.tbig{font-size:1.15em}.txbig{font-size:1.4em}.tred{color:#ff0000}.tgrey{color:#999}/* #topwrap{position:fixed;z-index:10;top:0;left:0;right:0;width:100%;height:54px;margin:0 auto;background:#f4f4f4}*/
    #blog-wrapper{border:0 solid #eee;position:relative;max-width:970px;margin:0 auto}
    #spacer{clear:both}.widget.LinkList li{margin-left:15px}dt{font-weight:normal}
    a:link{color:#138be6;outline:none;text-decoration:none}a:visited{color:#138be6}
    a:hover{text-decoration:underline}a:active{background:#ddd}
    #header-wrapper{height:46px;position:fixed;z-index:10;top:0;width:100%;max-width:970px;background:#e6ccb2;border-bottom: 1px solid blakc;left: 0;right: 0; margin: 0 auto;}
    #middleads-wrapper{margin-top:47px;position:relative;padding:0;/*min-width:300px;*/max-width:970px;}
    .header {font-size: 30px;font-weight: bold;line-height:0.95;letter-spacing: -0.5px;padding: 7px 15px;display:flex;justify-content:space-between;align-items:center;/*width:100%*/}
    .header h1{line-height:0.95;font-size:inherit;}.site-title{text-shadow:0.5px 0.5px #000}
    .site-title .satu{color:#EF748B}.site-title .dua{color:#31cdde}.site-title .tiga{color:#ff9939}.site-title a{line-height:inherit;text-decoration:none}#header .description{display:none;color:#fff;padding:1px 20px 25px}#header img{border:0;padding:0 0 0 12px;max-width:100%}#middleads{border-left:0 solid #ccc;border-right:0 solid #ccc}
    #content-wrapper{background:#fff;position:relative;width:100%;}
    #main-wrapper{background-color:#ddbea9;vertical-align:top;}.main{padding:0 0 5px}
    .main .widget{padding:0 20px}h3.date-header{color:#b3b3b3;font-size:85%;text-decoration:none;text-transform:uppercase;padding:0 0 7px}
    .post-outer{margin:0;}.post{line-height:1.5em;-webkit-touch-callout:none;-moz-user-select:-moz-none;-ms-user-select:none;user-select:none}
    h1,h2,h3,h4,h5,h6{line-height:1.1em;text-align:left;clear:both}
    .post h1{font-size:1.6rem;padding-top:10px}.post h2{font-size:1.4rem;padding:0 0 3px}
    .post h3{font-weight:500;font-size:1.3rem;padding:0 0 3px}.post h4{font-weight:500;font-size:1.2rem;padding:0 0 3px}
    .post h5{font-weight:500;font-size:1.1rem;padding:3px 0}.post-title{text-transform:capitalize;padding:15px 0 0}.post-title a{display:block;color:#444}
    h2.post-title{/*font-weight:bold;*/font-size:1.3rem;padding:18px 0 5px;clear:none}
    .post-header-line-1{font-size:80%;margin:0 0 5px}.post-timestamp{margin-left:0}
    .post ul{list-style-type:circle;padding:6px 0 6px 20px}.post ul ul{list-style-type:disc}
    .post ol,.post-body ul{font-size:98%;padding:0 15px 10px 25px!important}.post-body p{padding:6px 0}
    .post-body li{padding-left:2px;margin-top:0.4em;line-height: 1.3em;}.post-body ol li{/*margin-top:6px*/}
    .widetable{margin:0 auto;overflow-x:auto;text-align:center}.post-body table li:first-child{margin-top:0}
    .post-body li h4{margin-top:5px}.post-body img{padding:6px 0 0;width:100%;height:auto}
    .post-body table{font-size:90%;text-align:left;border-collapse:collapse;width:100%;margin:5px auto;background-color:#f8f8f8;color:#333}
    .post-body table p{padding:3px 0}.post table ol,.post-body table ul{padding:0 5px 5px 15px!important;line-height:1.2em!important}
    .post-body tr:nth-child(odd){background-color:#e8e8e8}.post-body tr{line-height:1.2em}
    .post-body tr.section{border-bottom:2px solid #aaa)}
    .post-body td,.post-body th{padding:5px;border:1px solid rgba(0,0,0,0.05)}
    .post-body tbody:first-child tr:first-child,.post-body th,.post-body table .kepala{color:#fff;background-color:#5cbe4a;text-align:center;font-weight:normal}.post-body .hilite{background-color:#fef577!important}.post-body .hilite-gray{padding:5px 15px;background-color:#f4f4f4;display:inline-block;font-size:95%}.post-body table img{width:100%!important}.greyedout *{color:rgba(0,0,0,0.38) !important}.greyedout tbody:first-child tr:first-child,.greyedout th,.greyedout table .kepala{color:rgba(250,250,250,0.38) !important}.greyedout a{color:rgba(36,93,193,0.38) !important}.post-body .mnavig{background:#e5fcc2}.post-body .sumber{font-size:85%;line-height:1.1em;padding:2px 0}.post-body .recipe-meta{font-size: 90%;/*line-height: 1.3em;*/padding: 5px;margin-top:5px;background-color:#c1fbff;/*border: 1px solid #31cdde*/}.post-body .recipe-meta span{padding-right:10px}.post-body .img-caption{text-align:center;font-style:italic;padding-top:0}.post-footer{display:block;font-size:95%;line-height:1.1em;text-decoration:none}.item .post-header-line-1{clear:both} .item .post-footer{margin-top: 15px}.post-footer img{background:#fff;color:#fff}.feed-links{clear:both;margin:10px 0 0}#blog-pager{margin:0;overflow:hidden;text-align:center;font-size:20px;padding:15px; display:flex; align-items:center; justify-content:space-between}#blog-pager svg{fill:#666}#blog-pager svg:hover {fill:#31cdde}.home-link{font-size:28px;line-height:24px;}blockquote{background:#f4f4f4;border-left:5px solid #ffd100;font:italic 95% 'Trebuchet MS',arial;padding:5px 15px;margin:5px 0;display:table}code{color:#B0456F;text-align:left;font-family:Courier ,"lucida console";line-height:1em;font-size:105%}
    .sidebar-wrapper{border-bottom:0 solid #e6e6e6;vertical-align:top;margin:0;background:#e6ccb2;}.small-sidebar-wrapper{float:left;}.small-sidebar-wrapper .widget{border-bottom:0 solid #e6e6e6;padding:10px}#sidebar2,#sidebar2 .widget{box-sizing:border-box}#sidebar2{border-bottom:1px solid #e6e6e6;color:#222; padding:5px 15px} #sidebar3{color:#222;line-height:1.1em;width:160px;border-right:1px solid #e6e6e6}
    #sidebar4{color:#222;line-height:1.8em;width:160px}
    #sidebar2 .widget{border-bottom:0 solid #e6e6e6;line-height:140%;padding:5px 5px 10px}
    .sidebar a{color:#222}
    #sidebar2 .widget > h6,#sidebar3 h6,#sidebar4 h6,.lowerbar h6{border-bottom: 1px solid #ccc;color:#EF748B;font-variant:small-caps;font-weight:bold;text-decoration:none;margin:0 0 10px;padding:3px 0 0;letter-spacing:1px;font-size:1.2em}
    h6 span{border-bottom:1px solid #31cdde;bottom:-1px;position:relative;display:inline-block;padding-bottom:5px}
    
    .sidebar ul{list-style-type:circle}.sidebar li{text-decoration:none;padding:2px 0!important}.cloud-label-widget-content{text-align:left}.bslabel{font-size:0.95em;display:inline-block;margin:0 2px 5px 0;border-radius:10px;border:1px solid #ddd}
    
    .bslabel a{cursor:pointer;text-decoration:none;background:#f1f2f1;padding:2px 6px 1px;display:block;border-radius:10px;color:#222!important}
    
    .bslabel a:hover{background:#fff!important}
    .post-comment-link{display:none}html>body a.comment-link{padding-left:0}#backlinks-container{margin-top:0}#backlinks-container a img{margin:0 0 -2px}#backlinks-block{font-size:85%;margin:10px 0}#lower-wrapper{background:#777;color:#fff;font-size:90%;}.lowerbar-wrapper{min-width:300px;max-width:970px;margin:0 auto}.lowerbar{display:inline-block;width:296px;padding:0 10px}.lowerbar .widget{padding:5px 10px}
    .lowerbar h6{border-bottom:1px solid #999;color:#ccc}
    
    .lowerbar li{border-bottom:0 solid #d5cDc3;line-height:1.2em;padding:4px 0}.lowerbar a{color:#ddd}#footer-wrapper{background:#696969;position:relative;width:100%;margin:10px auto 0;padding:8px 0;font-size:80%}#footer-wrapper,#footer-wrapper a{color:#ccc;text-decoration:none}.lowerbar a:hover,#footer-wrapper a:hover{color:#fff}.item-author{color:#333} .post-footer-line{padding:5px 0}.paging-control-container{float:none}.iklan,.iklan2,.iklan3,#iklan4,.iklan5{text-align:center;/*overflow:hidden*/}.iklan.moved,.iklan3.moved,.iklan4.moved{margin:15px auto;min-height:280px}.iklan2{padding:10px;border-bottom:1px solid #ddd;background:#fff;}.d .iklan2{max-height:250px}#iklan4{margin:0px auto;}/*table .iklan4ad, table #iklan4{display:none}*/.iklan5{padding:10px 0px;text-align:center}.d .iklan5{min-height:280px}.update{display:table;font-size:95%;line-height:1.3em;background-color:#dbfed3;padding:10px!important;border:1px dashed #777}.post-body .guest{background-color:#e3ffcc;border-left:10px solid #ff690e;font-size:90%;padding:5px 10px!important;margin:10px 0 5px;color:#111}.date-header{display:none}
    /*.static_page .post-footer,.static_page .sidebar,.static_page .date-header{display:none!important}.static_page #main-wrapper{width:100%}.static_page .main{max-width:800px;margin:0 auto}*/
    .blog-feeds,.post-feeds,.static_page #blog-pager, .static_page .iklan4{display:none!important}
    .index .post,.archive .post{border-bottom:1px solid #ccc}.index .image-thumb,.archive .image-thumb{margin:25px 15px 0 0px;float:left;}#first-thumb{display:block;margin:0 auto 5px;}.imgcredit{font-size:90%;clear:both}.index .imgcredit,.archive .imgcredit{display:none}#page-name{text-transform:capitalize;font:.9em arial,verdana,arial}#page-name div{margin:5px 0 10px;text-decoration:underline}#page-name #error{text-transform:none;font:1.4em arial,Verdana,Arial;text-decoration:none;margin:25px 0 10px}.sidebar select{width:100%;padding:2px}.breadcrumbs{padding:10px 0 8px;font-size:1.2rem;text-transform:capitalize;border-bottom:1px solid #ccc}.baru{background:url(https://1.bp.blogspot.com/-Jo3Jsx9zfBo/UZ-reRmXN4I/AAAAAAAAEgQ/Dyn-wLgBuoU/s000/baru.gif) right center no-repeat;padding-right:35px}#email-sub img{background:transparent}.gray-border{border:1px solid #aaa}#BlogArchive1{margin:10px 15px 20px}#ArchiveList .flat li{list-style:circle inside} #BlogArchive1_ArchiveMenu{width:100%}#BlogArchive2 ul{list-style-type: none;}#BlogArchive2 ul .posts{margin-left: 23px;}.footnote{font-size:.9em;line-height:1.3em}
    .post .wts,.post .sw{text-align:center;margin-left:auto;margin-right:auto}.post .mysms{text-align:left}.myIframe{position:relative;padding-bottom:56.25%;padding-top:35px;height:0;overflow:auto;-webkit-overflow-scrolling:touch;clear:both}.myIframe iframe,.myIframe object,.myIframe embed{position:absolute;top:0;left:0;width:100%;height:100%}
    .searchbar {padding:15px 0px;width: 100%; margin: 0 auto;}
    #searchbox form, .searchbar form {border: 1px solid #666;border-radius: 3px;-webkit-border-radius: 3px; padding: 8px; display: flex; color: #888; background: #fff; overflow:hidden;font-size:28px; line-height:18px;}
    #searchbox input, .searchbar input {border: none; margin-left: 10px;width: 100%;color: #888}
    /* navi tabs */
    #m_item #searchbox {padding: 10px;}#m_item {background:rgba(100,100,100,0.95);overflow:hidden; -webkit-transition: height 0.5s;transition: height 0.2s;}
    #m_item a {padding:9px 0px;color:#fff;display:block;text-align:center;border-top: 1px solid #aaa}
    #m_item a:hover,#m_item a:active{background-color:#ffd100;}
    #mm {vertical-align: middle;cursor:pointer;}
    .menu_closed #m_item {height:0px}.menu_opened #m_item {clear:both}
    .menu_closed #mm::after {content:"\2630"}
    .m .menu_opened #mm::after {content:"\2573"}
    .d .menu_opened #mm::after {content:"\2716"}

    --></style>
    <style type='text/css'>
    @media print {
    #header-wrapper,#middleads-wrapper,.breadcrumbs,.sidebar-wrapper,#lower-wrapper,.comments,.post-footer,#blog-pager,.post-feeds,#backlinks-container,.lowerbar-wrapper,.iklan,#iklan4{display:none!important}
    body{background-color:#fff;}
    #content-wrapper,#main-wrapper,.main{background-color:#fff;border:none;color:#000;float:none!important;font-size:10pt;overflow:visible!important;width:auto!important;max-width: none;}
    .post{margin:0;padding:0}
    h1,h1 a,.post-title a,h2,h2 a,h3,h4,h3,h5{color:#666!important;}
    img{max-width:300pt!important}
    table{font-size:9pt;}
    .main a{text-decoration:underline}}
    </style>
    <style type='text/css'>
    @media only screen and (min-width:701px){
    .d #content-wrapper{display:flex} .d .sidebar-wrapper{width:340px}.d #main-wrapper{max-width:calc(100% - 340px)}
    }  
    @media screen and (-webkit-min-device-pixel-ratio:0) {
    /*.post-body a {word-break: break-all}
    .post-body table a{word-break: normal}*/
    }
    @media only screen and (max-width: 750px) {
    .main .widget{padding:0 5px}
    #topmenu{float:none}
    #topmenu li{text-align:center;display:inline-block}
    }
    @media only screen and (max-width: 500px) {
    .main .widget{padding:0 5px!important}
    #sidebar2 .widget {padding: 5px 0px 10px;}  
    #first-thumb{width:auto;height:auto;/*float:none;*/}
    .index .image-thumb, .archive .image-thumb {margin:20px auto -5px;float:none;display:block}
    .iklan{float:none}
    }
    @media only screen and (max-width: 400px) {
    .post-footer-line{padding:4px 0}
    /*.m.index .iklan4ad, .m.archive .iklan4ad[data-adsbygoogle-status="done"]{max-width:330px;border:0px solid #ddd}
    .m ul .iklan4ad, .m ol .iklan4ad[data-adsbygoogle-status="done"]{max-width:290px;margin-left:0px}*/
    }
    @media only screen and (max-width: 320px) {
    .m .header,.m .header h1{font-size:22px;}
    }

    </style>
    <script async='async' crossorigin='anonymous' src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9901055153683349'></script>
    
    <!--<link href='https://www.blogger.com/dyn-css/authorization.css?targetBlogID=7678562731459322471&amp;zx=ee69baab-14c5-4507-9865-908b1ebac1ba' media='none' onload='if(media!=&#39;all&#39;)media=&#39;all&#39;' rel='stylesheet'/><noscript><link href='https://www.blogger.com/dyn-css/authorization.css?targetBlogID=7678562731459322471&amp;zx=ee69baab-14c5-4507-9865-908b1ebac1ba' rel='stylesheet'/></noscript>
    <meta name='google-adsense-platform-account' content='ca-host-pub-1556223355139109'/>
    <meta name='google-adsense-platform-domain' content='blogspot.com'/>

    <!-- data-ad-client=ca-pub-9901055153683349 -->

</head>
<body class='d item' style="background-color:#b08968">
    <div id='outer-wrapper'>
    <div id='topwrap'>
    <div class='menu_closed' id='header-wrapper'>
    
        <div class='header section' id='header'><div class='widget Header' data-version='1' id='Header1'>
        <div id='header-inner'>
        <div class='titlewrapper'>
        <div class='site-title'>
        <a href='https://www.anekaresipi.com/'>
        <span class='satu'>Aneka</span><span class='dua'>Resipi</span><span class='tiga'>.com</span>
        </a>
        </div>
        </div>
        </div>
        </div>
        <div class='widget HTML' data-version='1' id='HTML3'>

    <div class='widget-content'>
    <div title='Klik untuk Menu dan Carian ' id='topmenu' onclick='var hwMenu= document.getElementById("header-wrapper");if(hwMenu.className==&#39;menu_opened&#39;) {hwMenu.className=&#39;menu_closed&#39;}else{hwMenu.className=&#39;menu_opened&#39;}'><span id='mm'></span></div>
    </div>
    </div></div>
    <!-- Navigation tabs start -->
        <div id='m_item'>
        <div id='searchbox'>
        <form action='/search' method='get'>
        <svg height='20px' style='fill:#666' viewBox='0 0 57.2 57.2' width='20px'>
        <path d='M56.1 50.5l-10-10a25.5 25.5 0 10-5.2 5.4l10 9.9a3.7 3.7 0 105.2-5.3zM6 25.8a19.5 19.5 0 1139 0 19.5 19.5 0 01-39 0z'></path></svg><input name='q' placeholder='Cari resipi...' type='text' value=''/>
        </form>
        </div>
        <div><a href='index.php' title='Aneka Resipi'>Home</a></div>
        <div><a href='//www.anekaresipi.com/p/arkib.html' title='Arkib Resipi'>Arkib Resipi</a></div>
        <div><a href='https://www.malaysiatercinta.com/p/waktu-solat-malaysia.html' target='_blank'>Waktu Solat Malaysia</a></div>
        <div><a href='login.php'>Log Masuk/Log Keluar</a></div>
        <div><a href='signup.php'>Daftar</a></div>

    </div>
    <!-- Navigation tabs end -->
    </div>
    </div><!-- end of topwrap -->
    <div class='clear' id='middleads-wrapper'>
    </div><!-- middleads wrapper end -->


    <div class='clear'></div>
    <div id='blog-wrapper'><!--blog-wrapper start-->
    <!--<div expr:itemscope='data:blog.pageType == &quot;item&quot; ? &quot;&quot; : &quot;itemscope&quot;' expr:itemtype='data:blog.pageType == &quot;item&quot; ? &quot;&quot; : &quot;https://schema.org/ItemList&quot;' id='blog-wrapper'>-->
    <div class='middleads no-items section' id='middleads'></div>
    <!-- <b:if cond='!data:blog.searchQuery'> -->
    <!--<b:if cond='data:view.isMultipleItems and not data:blog.searchQuery and not data:blog.searchLabel'>-->
    <!--<b:if cond='!data:blog.isMobileRequest'> <div class='iklan2'> Suha Responsive 1 <ins class='adsbygoogle' data-ad-client='ca-pub-9901055153683349' data-ad-format='auto' data-ad-slot='4099681011' style='display:block; max-height:250px'/> </div> <b:elseif cond='data:view.isMultipleItems'/> <div class='iklan2'>-->
    <!-- Suha 300x250 <ins class='adsbygoogle' data-ad-client='ca-pub-9901055153683349' data-ad-slot='1501437830' style='display:inline-block;width:300px;height:250px'/> </div> <b:else/> </b:if> </b:if> -->
    <div class='clear' id='content-wrapper'>
    <div id='main-wrapper'>
    <div class='main section' id='main'><div class='widget Blog' data-version='1' id='Blog1'>
    <div class='blog-posts' ondragstart='return false'>
    <div class='post-outer'>
    <div class='post' itemprop='' itemscope='itemscope' itemtype='https://schema.org/Recipe'>
    <meta content='Cara mudah buat nasi lemak dengan sambal ikan bilis yang sedap . Selain roti canai , nasi lemak juga merupakan makanan sarapan pagi yang san...' itemprop='description'/>
    <meta content='https://lh3.googleusercontent.com/-znX-KsHkwjs/WkxrKSfPEDI/AAAAAAAAAls/rRJnqpitpXQoXKze4XINYiUv9ZahN6COACHMYCw/w400-h400-p-k-no-nu/nasi%2Blemak%2Bterbaik%255B5%255D' itemprop='image'/>
    <h1 class='post-title' itemprop='name'>
    Nasi Lemak Sambal Ikan Bilis Sedap
    </h1>
    <div class='post-header-line-1'>
    <span class='post-comment-link'>
    </span>
    </div>
    <div class='post-body' id='post-8323444581280108712'>
    <p><strong>Cara mudah buat nasi lemak dengan sambal ikan bilis yang sedap</strong>. Selain <a href="https://www.anekaresipi.com/2018/03/resepi-roti-canai-lembut-rangup.html" target="_blank">roti canai</a>, nasi lemak juga merupakan makanan sarapan pagi yang sangat digemari rakyat Malaysia.</p>
    <a name='more'></a>
    <p>Terdapat bermacam jenis nasi lemak  contohnya nasi lemak biasa, nasi lemak pandan, nasi lemak kukus, nasi lemak tanpa santan. Harga pula berbeza-beza bergantung kepada lauk dan lokasi di mana ia dijual, dari satu ringgit sebungkus untuk nasi lemak ikan bilis campur kacang simple yang dijual di tepi jalan, hinggalah puluhan ringgit sepinggan untuk nasi lemak lobster yang dihidang di restoran atau hotel.</p>
    <p><a href="https://lh3.googleusercontent.com/-znX-KsHkwjs/WkxrKSfPEDI/AAAAAAAAAls/rRJnqpitpXQoXKze4XINYiUv9ZahN6COACHMYCw/s1600-h/nasi%2Blemak%2Bterbaik%255B5%255D" target="_blank"><img alt="nasi lemak kelantan azie kitchen dan nasi lemak chef wan" height="450" loading="lazy" src="https://lh3.googleusercontent.com/-znX-KsHkwjs/WkxrKSfPEDI/AAAAAAAAAls/rRJnqpitpXQoXKze4XINYiUv9ZahN6COACHMYCw/s600-e60/nasi%2Blemak%2Bterbaik%255B5%255D" style="margin: 0px auto; border-image: none; float: none; display: block;" title="nasi lemak terbaik" width="600"></a></p>
    <p class="img-caption">Nasi lemak ... enak dimakan bila-bila masa</p>
    <p>Apapun, nasi lemak yang baik nasinya peroi berderai, rasanya lemak dan baunya wangi. Manakala sambal nasi lemak yang sedap kuahnya pekat, berwarna merah gelap dan seimbang rasa pedas, masin dan manisnya. </p>
    <p>Berikut kami kongsikan resepi nasi lemak biasa dengan <a href="https://www.anekaresipi.com/2017/01/resepi-sambal-tumis-ikan-bilis-sedap.html" target="_blank">sambal ikan bilis</a>.</p>

    <h2><strong><br>Resipi Nasi Lemak Sambal Ikan Bilis</strong></h2>
    <p class="recipe-meta">Masa persediaan:<span itemprop="prepTime" content="PT20M"> 20 minit</span> &#9830; Masa memasak:<span itemprop="cookTime" content="PT45M"> 45 minit</span> &#9830; Hidangan:<span itemprop="recipeYield"> 6 orang</span></p>
    <p>Berikut adalah bahan-bahan yang diperlukan untuk membuat nasi lemak dan sambal ikan bilis.</p>
    <h3><br>Bahan-bahan nasi</h3>
    <ul>
    <li itemprop="recipeIngredient">3 cawan beras
    <li itemprop="recipeIngredient">3 cawan air
    <li itemprop="recipeIngredient">&#189; cawan santan pekat
    <li itemprop="recipeIngredient">2 helai daun pandan (disiat dan disimpul) atau 1 batang serai (diketuk)
    <li itemprop="recipeIngredient">&#8531; sudu kecil garam</li></ul>
    <h3><br>Bahan-bahan sambal ikan bilis</h3><ul>
    <li itemprop="recipeIngredient">1 cawan ikan bilis 
    <li itemprop="recipeIngredient">20 biji cili kering
    <li itemprop="recipeIngredient">&#189;  cawan minyak masak 
    <li itemprop="recipeIngredient">5 biji bawang merah kecil 
    <li itemprop="recipeIngredient">2 biji bawang besar
    <li itemprop="recipeIngredient">1 cm halia
    <li itemprop="recipeIngredient">
    Sedikit belacan 
    <li itemprop="recipeIngredient">Air asam jawa
    <li itemprop="recipeIngredient">2 sudu besar gula 
    <li itemprop="recipeIngredient">Garam secukup rasa</li></ul><h3><br>Bahan-bahan lain</h3><ul><li itemprop="recipeIngredient">Kacang tanah yang telah digoreng<li itemprop="recipeIngredient">Ikan bilis goreng<li itemprop="recipeIngredient">Telur rebus<li itemprop="recipeIngredient">Timun</li></ul>
    <h3><br>Persediaan Bahan-bahan</h3><ol itemprop="recipeInstructions">
    <li>Basuh ikan bilis dan tuskan. 
    <li>Potong cili kering, buang biji dan rebus atau rendamkan dalam air panas 
    hingga kembang. Kemudian kisar bersama halia.
    <li>Kisar bawang merah bersama bawang besar.</li><li>Kupas telur rebus dan belah dua. Potong serong timun.</li></ol>

    <h3><br>Cara Membuat Nasi Lemak</h3>
    <p>Berikut adalah langkah-langkah menyediakan nasi lemak yang peroi, lemak &amp; wangi dan sambal tumis ikan bilis yang sangat sedap.</p>
    <h5><br>Memasak nasi</h5>
    <ol itemprop="recipeInstructions">
    <li>Bersihkan beras dan tuskan. <li>Masukkan beras ke dalam rice cooker dan masak sehingga air kering.
    <li>Kemudian masukkan air, garam dan daun pandan. Kacau sebati. Teruskan memasak seperti biasa.<li>Bila air hampir kering, masukkan santan dan kacau sekata.</li><li>Tutup balik periuk dan tunggu sehingga nasi masak.</li></ol>
    <h5><br>Membuat sambal ikan bilis</h5><ol itemprop="recipeInstructions">
    <li>Panaskan minyak dalam kuali atau periuk.  
    <li>Tumiskan bawang kisar sehingga naik bau.  
    <li>Masukkan cili kisar dan belacan, dan tumis menggunakan api 
    kecil sehingga pecah minyak.  
    <li>Masukkan gula dan teruskan menumis sehingga sambal berwarna merah gelap dan 
    berkilat.  
    <li>Kemudian masukkan ikan bilis, air, air asam jawa dan garam. Kacau rata. <li>
    Biarkan mereneh selama 10 minit atau sehingga sambal pekat, kemudian angkat.</li></ol>
    <h5><br>Cadangan Hidangan</h5>
    <p>Hidangkan nasi lemak panas-panas bersama sambal ikan bilis, telur rebus, kacang tanah goreng dan hirisan timun. Boleh juga ditambah lauk lain seperti <a href="https://www.anekaresipi.com/2017/01/resepi-ayam-goreng-berempah-sedap.html" target="_blank">ayam goreng</a>, <a href="https://www.anekaresipi.com/2017/09/resepi-rendang-ayam-kelantan.html" target="_blank">rendang</a>, sambal sotong atau telur goreng.</p>
    
        
<!-- 
    SINI -->
    
    </div>
    
    <!-- footer -->
        <div class='post-footer clear'>
        <div class='post-footer-line post-footer-line-1'>
        <span itemprop='publisher' itemscope='itemscope' itemtype='https://schema.org/Organization'><span itemprop='logo' itemscope='itemscope' itemtype='https://schema.org/ImageObject'>
        </span><meta content='Aneka Resipi' itemprop='name'/>
        </span>
        
        <meta content='2021-05-01T14:00:00+08:00' itemprop='datePublished'/>
        <meta content='2021-05-06T18:31:27Z' itemprop='dateModified'/>
        <span class='post-labels'>
        Kategori:
        <a href='https://www.anekaresipi.com/search/label/Ikan' itemprop='recipeCategory' rel='tag'>Ikan</a>,
        <a href='https://www.anekaresipi.com/search/label/Lauk%20Pauk' itemprop='recipeCategory' rel='tag'>Lauk Pauk</a>,
        <a href='https://www.anekaresipi.com/search/label/Masakan%20Goreng' itemprop='recipeCategory' rel='tag'>Masakan Goreng</a>,
        <a href='https://www.anekaresipi.com/search/label/Masakan%20Melayu' itemprop='recipeCategory' rel='tag'>Masakan Melayu</a>,
        <a href='https://www.anekaresipi.com/search/label/Nasi' itemprop='recipeCategory' rel='tag'>Nasi</a>,
        <a href='https://www.anekaresipi.com/search/label/Sambal%20dan%20Sos' itemprop='recipeCategory' rel='tag'>Sambal dan Sos</a>,
        <a href='https://www.anekaresipi.com/search/label/Telur' itemprop='recipeCategory' rel='tag'>Telur</a>
        </span>

        <br><br><h3>Komen</h3>
        <?php
    
        if (isset($_SESSION['id'])){
            echo "<form method='post' action='".setComment($conn)."'>
             <input type='hidden' name='uid' value='".$_SESSION['id']."'>
            <input type='hidden' name='date' value='".date('Y-m-d H:i:s' )."'>
            <textarea name='message'></textarea></br>
            <button type='submit' name='commentSubmit'>Comment</button>
        </form></br>";
        } else {
            echo "<br><br>Anda tidak Log masuk. Untuk komen sila <a href=login.php>Log masuk di sini!</a> <br><br>" ;
        }

        getComment($conn);
?><div class='clear'></div>
        </div>
        <div class='post-footer-line post-footer-line-2'></div>
        </div>
    </div>
    </div>
    </div>
    <div class='blog-pager' id='blog-pager'>
    <span id='blog-pager-newer-link'>
    <a class='blog-pager-newer-link' href='https://www.anekaresipi.com/2017/05/resepi-nasi-ayam-garing-sedap-simple.html' id='Blog1_blog-pager-newer-link' rel='nofollow' title='Catatan Terbaru'><svg height='24px' viewBox='0 0 50 49' width='24px'>
    <path d='M50 20H19L32 7l-7-7L0 25l25 24 7-7-13-13h31zm0 0'></path></svg></a>
    </span>
    <a class='home-link' href='https://www.anekaresipi.com/' title='Homepage'><img alt='' height='36' loading='lazy' src='https://1.bp.blogspot.com/-fANfYKV9D9s/YKW4aQ5OIfI/AAAAAAAAJh8/Fq8xrBxh4kwN-J-8eAuRb0k_iM-kech7wCLcBGAsYHQ/s0-e60/home.png' width='36'/></a>
    <span id='blog-pager-older-link'>
    <a class='blog-pager-older-link' href='https://www.anekaresipi.com/2020/05/kari-ayam-kampung-sedap.html' id='Blog1_blog-pager-older-link' rel='nofollow' title='Catatan Lama'><svg height='24px' viewBox='0 0 50 49' width='24px'>
    <path d='M25 49l25-24L25 0l-7 7 13 13H0v9h31L18 42zm0 0'></path></svg></a>
    </span>
    </div>
    <div class='clear'></div>
    <div class='post-feeds'>
    </div>
    </div>
    </div>
    </div>
    <div class='sidebar-wrapper'>
    <div class='sidebar section' id='sidebar2'><div class='widget HTML' data-version='1' id='HTML6'>
    <script>
    // Blogger Recent Posts Gallery by Bloggersentral.com
    // Tutorial at http://www.bloggersentral.com/2013/05/recent-posts-image-gallery-for-blogger.html 
    // Free to use or share, but please keep this notice intact.
    //<![CDATA[
    function bsrpGallery(root){var entries=root.feed.entry||[];var html=['<div class="bsrp-gallery nopin">'];for(var i=0;i<entries.length;++i){var thumby=["https://4.bp.blogspot.com/-sO3wcd2x1uU/UZy9Rpquc6I/AAAAAAAAEfQ/oIrnPYlkk-A/s72-c/t1.jpg","https://3.bp.blogspot.com/-AjbTonNFFp8/UZy9SJieE7I/AAAAAAAAEfg/_w7YOGL07YU/s72-c/t2.jpg","https://1.bp.blogspot.com/-MzK6sKWLpBo/UZy9Rk3LoZI/AAAAAAAAEfU/Nt3t9oIX4vw/s72-c/t3.jpg","https://2.bp.blogspot.com/-WuSP2WNWyog/UZy9TpXDqEI/AAAAAAAAEfo/O-fv_FyHIpA/s72-c/t4.jpg","https://1.bp.blogspot.com/-PByKbzUVuaI/UZy9V5VxwYI/AAAAAAAAEfw/asGFWutrauk/s72-c/t5.jpg"];var random=Math.floor(5*Math.random());var post=entries[i];var postTitle=post.title.$t;var orgImgUrl=post.media$thumbnail?post.media$thumbnail.url:thumby[random];var newImgUrl=orgImgUrl.replace(/s72-.?c/,'w'+bsrpTW+'-h'+bsrpTH+'-c-e60');var links=post.link||[];for(var j=0;j<links.length;++j){if(links[j].rel=='alternate')break;}
    var postUrl=links[j].href;var imgTag='<img loading="lazy" src="'+newImgUrl+'" alt="'+postTitle+'" width="'+bsrpTW+'" height="'+bsrpTH+'"/>';var pTitle=showTitle?'<span class="ptitle">'+postTitle+'</span>':'';var item='<a href="'+postUrl+'">'+imgTag+pTitle+'</a>';html.push('<div class="bs-item">',item,'</div>');}
    html.push('</div>');document.getElementById('gallery1').innerHTML = html.join("");}
    //]]>
    </script>
    <!-- <h6 class='title'><span>Terbaharu</span></h6>
    <div class='widget-content'>
    <script>
    var bsrpTW=200,bsrpTH=120,showTitle=true; 
    </script>
    <div id='gallery1'></div>
    <style>
    /* BloggerSentral Recent Posts Image Gallery CSS Start */
    .bsrp-gallery {clear:both;display:flex;justify-content:space-between;flex-wrap:wrap}
    .m .bsrp-gallery {text-align: center}
    .bsrp-gallery .bs-item {width:50%; line-height:0; height:auto; padding:2px; box-sizing:border-box;}
    @media only screen and (min-width:451px){.bsrp-gallery .bs-item{width:calc(100%/3)}}        
    @media only screen and (min-width:701px){.d .bsrp-gallery .bs-item {width:50%} .d #gallery1 {height:275px;overflow:hidden}}       
    .bsrp-gallery .bs-item a {height:100%; display:block; position:relative; text-decoration:none;}     
    .bsrp-gallery .bs-item .ptitle {width:100%; line-height:1; position:absolute; bottom:0; left:0; text-align:center; color:#fff;padding:3px 0px; box-sizing:border-box; font-size:75%; font-weight:bold; text-shadow: 0px 0px 2px #000;background: rgba(0, 0, 0, 0.3)}
    .m .bsrp-gallery .bs-item .ptitle {font-size:85%;}
    .bsrp-gallery a img {width:100%; height:auto; background: #eee}
    .bsrp-gallery a:hover .ptitle {background: #eec000}        
    /* BloggerSentral Recent Posts Image Gallery CSS End */
    </style>
    </div> -->
    <!-- Kategori -->
    </div><div class='widget Label' data-version='1' id='Label1'>
    <h6><span>Kategori</span></h6>
        <div class='widget-content cloud-label-widget-content'>
        <span class='bslabel'><a href='https://www.anekaresipi.com/search/label/Bubur' rel=''>Bubur</a></span>
        <span class='bslabel'><a href='https://www.anekaresipi.com/search/label/Hidangan%20Sampingan' rel=''>Hidangan Sampingan</a></span>
        <span class='bslabel'><a href='https://www.anekaresipi.com/search/label/Kek' rel=''>Kek</a></span>
        <span class='bslabel'><a href='https://www.anekaresipi.com/search/label/Kuih-muih' rel=''>Kuih-muih</a></span>
        <span class='bslabel'><a href='https://www.anekaresipi.com/search/label/Lauk%20Pauk' rel=''>Lauk Pauk</a></span>
        <span class='bslabel'><a href='https://www.anekaresipi.com/search/label/Mee%20dan%20Pasta' rel=''>Mee dan Pasta</a></span>
        <span class='bslabel'><a href='https://www.anekaresipi.com/search/label/Minuman' rel=''>Minuman</a></span>
        <span class='bslabel'><a href='https://www.anekaresipi.com/search/label/Nasi' rel=''>Nasi</a></span>
        <span class='bslabel'><a href='https://www.anekaresipi.com/search/label/Pencuci%20Mulut' rel=''>Pencuci Mulut</a></span>
        <span class='bslabel'><a href='https://www.anekaresipi.com/search/label/Pengat' rel=''>Pengat</a></span>
        <span class='bslabel'><a href='https://www.anekaresipi.com/search/label/Petua' rel=''>Petua</a></span>
        <span class='bslabel'><a href='https://www.anekaresipi.com/search/label/Sambal%20dan%20Sos' rel=''>Sambal dan Sos</a></span>
        <span class='bslabel'><a href='https://www.anekaresipi.com/search/label/Sayuran' rel=''>Sayuran</a></span>
        </div>
    </div><div class='widget Label' data-version='1' id='Label2'>
    <!-- Bahan masakan -->
    <h6><span>Bahan Masakan</span></h6>
        <div class='widget-content cloud-label-widget-content'>
        <span class='bslabel'><a href='https://www.anekaresipi.com/search/label/Ayam' rel=''>Ayam</a></span>
        <span class='bslabel'><a href='https://www.anekaresipi.com/search/label/Buah' rel=''>Buah</a></span>
        <span class='bslabel'><a href='https://www.anekaresipi.com/search/label/Daging' rel=''>Daging</a></span>
        <span class='bslabel'><a href='https://www.anekaresipi.com/search/label/Ikan' rel=''>Ikan</a></span>
        <span class='bslabel'><a href='https://www.anekaresipi.com/search/label/Makanan%20Dalam%20Tin' rel=''>Makanan Dalam Tin</a></span>
        <span class='bslabel'><a href='https://www.anekaresipi.com/search/label/Sayuran' rel=''>Sayuran</a></span>
        <span class='bslabel'><a href='https://www.anekaresipi.com/search/label/Sotong' rel=''>Sotong</a></span>
        <span class='bslabel'><a href='https://www.anekaresipi.com/search/label/Telur' rel=''>Telur</a></span>
        <span class='bslabel'><a href='https://www.anekaresipi.com/search/label/Udang' rel=''>Udang</a></span>
        <div class='clear'></div>
        </div>
    </div><div class='widget HTML' data-version='1' id='HTML5'>
    <div class='widget-content'>
    <div style="text-align:center;margin-top:10px">
    <!-- AR 300x600 -->
    <ins class="adsbygoogle" style="display:inline-block;width:300px;height:600px" data-ad-client="ca-pub-9901055153683349" data-ad-slot="7073328718"></ins>
    </div>
    </div>
    </div><div class='widget Label' data-version='1' id='Label3'>
    <!-- Kaedah Masakan -->
    <h6><span>Kaedah Masakan</span></h6>
        <div class='widget-content cloud-label-widget-content'>
        <span class='bslabel'><a href='https://www.anekaresipi.com/search/label/Masakan%20Barat' rel=''>Masakan Barat</a></span>
        <span class='bslabel'><a href='https://www.anekaresipi.com/search/label/Masakan%20Berkuah' rel=''>Masakan Berkuah</a></span>
        <span class='bslabel'><a href='https://www.anekaresipi.com/search/label/Masakan%20Goreng' rel=''>Masakan Goreng</a></span>
        <span class='bslabel'><a href='https://www.anekaresipi.com/search/label/Masakan%20Kukus' rel=''>Masakan Kukus</a></span>
        <span class='bslabel'><a href='https://www.anekaresipi.com/search/label/Masakan%20Melayu' rel=''>Masakan Melayu</a></span>
        <span class='bslabel'><a href='https://www.anekaresipi.com/search/label/Masakan%20Tradisional' rel=''>Masakan Tradisional</a></span>
        <span class='bslabel'><a href='https://www.anekaresipi.com/search/label/Tanpa%20Memasak' rel=''>Tanpa Memasak</a></span>
        <div class='clear'></div>
        </div>
    </div><div class='widget BlogArchive' data-version='1' id='BlogArchive2'>
    <!-- Arkib Resepi -->
    <h6><span>Arkib Resipi</span></h6>
        <div class='widget-content'>
        <div id='ArchiveList'>
        <div id='BlogArchive2_ArchiveList'>
        <ul class='flat'>
        <li class='archivedate'>
        <a href='https://www.anekaresipi.com/2021/09/'>September</a> (1)
            </li>
        <li class='archivedate'>
        <a href='https://www.anekaresipi.com/2021/07/'>Julai</a> (1)
            </li>
        <li class='archivedate'>
        <a href='https://www.anekaresipi.com/2021/06/'>Jun</a> (1)
            </li>
        <li class='archivedate'>
        <a href='https://www.anekaresipi.com/2021/05/'>Mei</a> (2)
            </li>
        <li class='archivedate'>
        <a href='https://www.anekaresipi.com/2021/04/'>April</a> (2)
            </li>
        <li class='archivedate'>
        <a href='https://www.anekaresipi.com/2021/03/'>Mac</a> (1)
            </li>
        <li class='archivedate'>
        <a href='https://www.anekaresipi.com/2020/05/'>Mei</a> (2)
            </li>
        <li class='archivedate'>
        <a href='https://www.anekaresipi.com/2020/04/'>April</a> (4)
            </li>
        <li class='archivedate'>
        <a href='https://www.anekaresipi.com/2019/11/'>November</a> (2)
            </li>
        <li class='archivedate'>
        <a href='https://www.anekaresipi.com/2019/02/'>Februari</a> (3)
            </li>
        <li class='archivedate'>
        <a href='https://www.anekaresipi.com/2018/10/'>Oktober</a> (1)
            </li>
        <li class='archivedate'>
        <a href='https://www.anekaresipi.com/2018/07/'>Julai</a> (1)
            </li>
        <li class='archivedate'>
        <a href='https://www.anekaresipi.com/2018/05/'>Mei</a> (2)
            </li>
        <li class='archivedate'>
        <a href='https://www.anekaresipi.com/2018/04/'>April</a> (9)
            </li>
        <li class='archivedate'>
        <a href='https://www.anekaresipi.com/2018/03/'>Mac</a> (9)
            </li>
        <li class='archivedate'>
        <a href='https://www.anekaresipi.com/2018/02/'>Februari</a> (9)
            </li>
        <li class='archivedate'>
        <a href='https://www.anekaresipi.com/2018/01/'>Januari</a> (8)
            </li>
        <li class='archivedate'>
        <a href='https://www.anekaresipi.com/2017/12/'>Disember</a> (9)
            </li>
        <li class='archivedate'>
        <a href='https://www.anekaresipi.com/2017/11/'>November</a> (8)
            </li>
        <li class='archivedate'>
        <a href='https://www.anekaresipi.com/2017/10/'>Oktober</a> (8)
            </li>
        <li class='archivedate'>
        <a href='https://www.anekaresipi.com/2017/09/'>September</a> (11)
            </li>
        <li class='archivedate'>
        <a href='https://www.anekaresipi.com/2017/08/'>Ogos</a> (4)
            </li>
        <li class='archivedate'>
        <a href='https://www.anekaresipi.com/2017/07/'>Julai</a> (5)
            </li>
        <li class='archivedate'>
        <a href='https://www.anekaresipi.com/2017/06/'>Jun</a> (7)
            </li>
        <li class='archivedate'>
        <a href='https://www.anekaresipi.com/2017/05/'>Mei</a> (13)
            </li>
        <li class='archivedate'>
        <a href='https://www.anekaresipi.com/2017/04/'>April</a> (10)
            </li>
        <li class='archivedate'>
        <a href='https://www.anekaresipi.com/2017/03/'>Mac</a> (19)
            </li>
        <li class='archivedate'>
        <a href='https://www.anekaresipi.com/2017/02/'>Februari</a> (16)
            </li>
        <li class='archivedate'>
        <a href='https://www.anekaresipi.com/2017/01/'>Januari</a> (17)
            </li>
        </ul>
        </div>
    </div>
    <div class='clear'></div>
    </div>
    </div><div class='widget HTML' data-version='1' id='HTML1'>
    <h6 class='title'><span>Cari Resipi</span></h6>
    <div class='widget-content'>
    <div class="searchbar">
    <form action="/search" method="get">
    <svg height='20px' style='fill:#666' viewbox='0 0 57.2 57.2' width='20px'>
    <path d="M56.1 50.5l-10-10a25.5 25.5 0 10-5.2 5.4l10 9.9a3.7 3.7 0 105.2-5.3zM6 25.8a19.5 19.5 0 1139 0 19.5 19.5 0 01-39 0z"/>
    </path></svg>
    <input name="q" placeholder="Cari resipi di sini..." value="" type="text" />
    </form>
    </div>
    </div>
    <div class='clear'></div>
    </div></div>
    <div class='clear'></div>
    <div class='small-sidebar-wrapper'>
    <div class='sidebar no-items section' id='sidebar3'></div>
    </div>
    <div class='small-sidebar-wrapper'>
    <div class='sidebar no-items section' id='sidebar4'></div>
    </div>
    </div><!-- end sidebar-wrapper -->
    <!-- spacer for skins that sets sidebar and main to be the same height-->
    </div><!-- end content-wrapper -->
    </div>
    <!--</div>--><!-- end blog-wrapper -->
    <div class='clear' id='lower-wrapper'>
    <div class='lowerbar-wrapper'>
    <div class='lowerbar no-items section' id='lowerbar1'></div>
    <div class='lowerbar no-items section' id='lowerbar2'></div>
    <div class='lowerbar no-items section' id='lowerbar3'></div>
    </div>
    <div class='clear' id='footer-wrapper'>
    <p style='text-align: center;'>
    Copyright &#169; 2021 <a href='https://www.anekaresipi.com/' title='Aneka Resipi'>AnekaResipi.com</a> | <a href='//www.anekaresipi.com/p/hubungi-kami.html' rel='nofollow' target='_blank' title='Hubungi'>Hubungi</a> | <a href='//www.anekaresipi.com/p/privacy-policy.html' rel='nofollow' target='_blank' title='Privacy Policy'>Dasar Privasi</a> | <a href='//www.anekaresipi.com/p/penafian.html' rel='nofollow' target='_blank' title='Penafian'>Penafian</a></p>
    <div class='footer no-items section' id='footer1'></div>
    </div><!-- end footer-wrapper -->
    </div><!-- end lower-wrapper -->
    
    </div><!-- end outer-wrapper -->
    <!--<b:if cond='data:blog.isMobileRequest'> <script> //<![CDATA[ window.addEventListener('scroll',imgLoad,{once:true}); //]]> </script> </b:if>-->
    <script>
        //move iklan, iklan4 and iklan3
    //var _0xe7e3=["\x70\x6F\x73\x74\x2D\x62\x6F\x64\x79","\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x73\x42\x79\x43\x6C\x61\x73\x73\x4E\x61\x6D\x65","\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x42\x79\x49\x64","\x68\x32\x2C\x68\x33\x2C\x68\x34\x2C\x68\x35\x2C\x74\x61\x62\x6C\x65\x2C\x62\x6C\x6F\x63\x6B\x71\x75\x6F\x74\x65\x2C\x2E\x70\x6F\x73\x74\x2D\x62\x6F\x64\x79\x3E\x70\x2C\x2E\x70\x6F\x73\x74\x2D\x62\x6F\x64\x79\x3E\x75\x6C\x20\x6C\x69\x2C\x2E\x70\x6F\x73\x74\x2D\x62\x6F\x64\x79\x3E\x6F\x6C\x20\x6C\x69\x2C\x2E\x70\x6F\x73\x74\x2D\x62\x6F\x64\x79\x3E\x62\x72","\x71\x75\x65\x72\x79\x53\x65\x6C\x65\x63\x74\x6F\x72\x41\x6C\x6C","\x6C\x65\x6E\x67\x74\x68","\x66\x6C\x6F\x6F\x72","\x6E\x65\x78\x74\x45\x6C\x65\x6D\x65\x6E\x74\x53\x69\x62\x6C\x69\x6E\x67","\x69\x6E\x73\x65\x72\x74\x42\x65\x66\x6F\x72\x65","\x70\x61\x72\x65\x6E\x74\x4E\x6F\x64\x65","\x69\x6B\x6C\x61\x6E","\x69\x6B\x6C\x61\x6E\x34","\x69\x6B\x6C\x61\x6E\x33"];function pindahAd(_0x8b62x2,_0x8b62x3){var _0x8b62x4=document[_0xe7e3[1]](_0xe7e3[0])[0];var _0x8b62x5=document[_0xe7e3[2]](_0x8b62x2);var _0x8b62x6=_0x8b62x4[_0xe7e3[4]](_0xe7e3[3]);var _0x8b62x7=Math[_0xe7e3[6]](_0x8b62x6[_0xe7e3[5]]* _0x8b62x3);var _0x8b62x8=_0x8b62x6[_0x8b62x7];_0x8b62x8[_0xe7e3[9]][_0xe7e3[8]](_0x8b62x5,_0x8b62x8[_0xe7e3[7]])}pindahAd(_0xe7e3[10],0.2);pindahAd(_0xe7e3[11],0.5);pindahAd(_0xe7e3[12],0.9) 
        //move iklan and iklan3
    var _0xdda8=["\x70\x6F\x73\x74\x2D\x62\x6F\x64\x79","\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x73\x42\x79\x43\x6C\x61\x73\x73\x4E\x61\x6D\x65","\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x42\x79\x49\x64","\x68\x32\x2C\x68\x33\x2C\x68\x34\x2C\x68\x35\x2C\x74\x61\x62\x6C\x65\x2C\x62\x6C\x6F\x63\x6B\x71\x75\x6F\x74\x65\x2C\x2E\x70\x6F\x73\x74\x2D\x62\x6F\x64\x79\x3E\x70\x2C\x2E\x70\x6F\x73\x74\x2D\x62\x6F\x64\x79\x3E\x75\x6C\x20\x6C\x69\x2C\x2E\x70\x6F\x73\x74\x2D\x62\x6F\x64\x79\x3E\x6F\x6C\x20\x6C\x69\x2C\x2E\x70\x6F\x73\x74\x2D\x62\x6F\x64\x79\x3E\x62\x72","\x71\x75\x65\x72\x79\x53\x65\x6C\x65\x63\x74\x6F\x72\x41\x6C\x6C","\x6C\x65\x6E\x67\x74\x68","\x66\x6C\x6F\x6F\x72","\x6E\x65\x78\x74\x45\x6C\x65\x6D\x65\x6E\x74\x53\x69\x62\x6C\x69\x6E\x67","\x69\x6E\x73\x65\x72\x74\x42\x65\x66\x6F\x72\x65","\x70\x61\x72\x65\x6E\x74\x4E\x6F\x64\x65","\x63\x6C\x61\x73\x73\x4E\x61\x6D\x65","\x20\x6D\x6F\x76\x65\x64","\x69\x6B\x6C\x61\x6E","\x69\x6B\x6C\x61\x6E\x33"];function pindahAd(_0xb08bx2,_0xb08bx3){var _0xb08bx4=document[_0xdda8[1]](_0xdda8[0])[0];var _0xb08bx5=document[_0xdda8[2]](_0xb08bx2);var _0xb08bx6=_0xb08bx4[_0xdda8[4]](_0xdda8[3]);var _0xb08bx7=Math[_0xdda8[6]](_0xb08bx6[_0xdda8[5]]* _0xb08bx3);var _0xb08bx8=_0xb08bx6[_0xb08bx7];_0xb08bx8[_0xdda8[9]][_0xdda8[8]](_0xb08bx5,_0xb08bx8[_0xdda8[7]]);_0xb08bx5[_0xdda8[10]]+= _0xdda8[11]}pindahAd(_0xdda8[12],0.3);pindahAd(_0xdda8[13],0.8)
    </script>
    <!--<b:if cond='data:blog.isMobileRequest'> <script> //load iklan to the one third, iklan4 to two third var _0xb4e6=[&quot;\x70\x6F\x73\x74\x2D\x62\x6F\x64\x79&quot;,&quot;\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x73\x42\x79\x43\x6C\x61\x73\x73\x4E\x61\x6D\x65&quot;,&quot;\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x42\x79\x49\x64&quot;,&quot;\x68\x32\x2C\x68\x33\x2C\x68\x34\x2C\x68\x35\x2C\x70\x2C\x6C\x69\x2C\x62\x72&quot;,&quot;\x71\x75\x65\x72\x79\x53\x65\x6C\x65\x63\x74\x6F\x72\x41\x6C\x6C&quot;,&quot;\x6C\x65\x6E\x67\x74\x68&quot;,&quot;\x66\x6C\x6F\x6F\x72&quot;,&quot;\x6E\x65\x78\x74\x45\x6C\x65\x6D\x65\x6E\x74\x53\x69\x62\x6C\x69\x6E\x67&quot;,&quot;\x69\x6E\x73\x65\x72\x74\x42\x65\x66\x6F\x72\x65&quot;,&quot;\x70\x61\x72\x65\x6E\x74\x4E\x6F\x64\x65&quot;,&quot;\x69\x6B\x6C\x61\x6E&quot;,&quot;\x69\x6B\x6C\x61\x6E\x34&quot;];function pindahAd(_0x989bx2,_0x989bx3){var _0x989bx4=document[_0xb4e6[1]](_0xb4e6[0])[0];var _0x989bx5=document[_0xb4e6[2]](_0x989bx2);var _0x989bx6=_0x989bx4[_0xb4e6[4]](_0xb4e6[3]);var _0x989bx7=Math[_0xb4e6[6]](_0x989bx6[_0xb4e6[5]]* _0x989bx3);var _0x989bx8=_0x989bx6[_0x989bx7];_0x989bx8[_0xb4e6[9]][_0xb4e6[8]](_0x989bx5,_0x989bx8[_0xb4e6[7]])}pindahAd(_0xb4e6[10],0.15);pindahAd(_0xb4e6[11],0.65) </script> <b:else/> <script> // load iklan4 to the middle var _0x2879=[&quot;\x70\x6F\x73\x74\x2D\x62\x6F\x64\x79&quot;,&quot;\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x73\x42\x79\x43\x6C\x61\x73\x73\x4E\x61\x6D\x65&quot;,&quot;\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x42\x79\x49\x64&quot;,&quot;\x68\x32\x2C\x68\x33\x2C\x68\x34\x2C\x68\x35\x2C\x70\x2C\x6C\x69\x2C\x62\x72&quot;,&quot;\x71\x75\x65\x72\x79\x53\x65\x6C\x65\x63\x74\x6F\x72\x41\x6C\x6C&quot;,&quot;\x6C\x65\x6E\x67\x74\x68&quot;,&quot;\x66\x6C\x6F\x6F\x72&quot;,&quot;\x6E\x65\x78\x74\x45\x6C\x65\x6D\x65\x6E\x74\x53\x69\x62\x6C\x69\x6E\x67&quot;,&quot;\x69\x6E\x73\x65\x72\x74\x42\x65\x66\x6F\x72\x65&quot;,&quot;\x70\x61\x72\x65\x6E\x74\x4E\x6F\x64\x65&quot;,&quot;\x69\x6B\x6C\x61\x6E\x34&quot;];function pindahAd(_0x4936x2,_0x4936x3){var _0x4936x4=document[_0x2879[1]](_0x2879[0])[0];var _0x4936x5=document[_0x2879[2]](_0x4936x2);var _0x4936x6=_0x4936x4[_0x2879[4]](_0x2879[3]);var _0x4936x7=Math[_0x2879[6]](_0x4936x6[_0x2879[5]]* _0x4936x3);var _0x4936x8=_0x4936x6[_0x4936x7];_0x4936x8[_0x2879[9]][_0x2879[8]](_0x4936x5,_0x4936x8[_0x2879[7]])}pindahAd(_0x2879[10],0.50)</script> </b:if>-->
    <style>/*.post-body table strong{font-weight:bold !important}.site-title{font-family:Righteous,arial;font-weight:normal}*/</style>
    <!-- Google Analytics -->
    <script>
    //<![CDATA[
    window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
    ga('create', 'UA-12143048-3', 'auto');
    ga('send', 'pageview');
    window.google_analytics_uacct = "UA-12143048-3";
    //]]>
    </script>
    <!-- End Google Analytics -->
    <script type='text/javascript'>
    //<![CDATA[
    // google font
    //function loadCSS(e) {var i = document.createElement("link"); var o=document.getElementsByTagName("script")[0]; i.rel="stylesheet"; i.href=e; o.parentNode.insertBefore(i, o);setTimeout(function(){document.body.className+=" pscrolled";},100);}
    //window.addEventListener('scroll', function(){loadCSS("//fonts.googleapis.com/css?family=Material+Icons&display=swap");},{once:!0});

    //function loadCSS(e, t, n) { "use strict"; var i = window.document.createElement("link"); var o = t || window.document.getElementsByTagName("script")[0]; i.rel = "stylesheet"; i.href = e; i.media = "only x"; o.parentNode.insertBefore(i, o); setTimeout(function () { i.media = n || "all" }) }
    //loadCSS("//fonts.googleapis.com/css?family=Material+Icons&display=swap");

    function loadJSOnLoad (jsSrc) {
        //document.body.className += " html-loaded";tumpang je
        var el = document.createElement("script");
        el.src = jsSrc;
        document.body.appendChild(el);
    }
    window.addEventListener('load', function () {loadJSOnLoad("https://www.google-analytics.com/analytics.js");}, {once: true});

    function GalleryLoad(){
    var sNew = document.createElement("script");
    sNew.src = "/feeds/posts/summary?alt=json-in-script&start-index=1&max-results=6&callback=bsrpGallery";
    document.body.appendChild(sNew);
    }
    //window.addEventListener('scroll',function(){if(typeof bsrpGallery=='function') GalleryLoad();},{once:true});

    function loadJSOnScroll() {
        var element = document.createElement("script");
        element.src = "//platform-api.sharethis.com/js/sharethis.js#property=5a3ceac57820fd001360b22d&amp;product=sticky-share-buttons";
        document.body.appendChild(element);
    }
    window.addEventListener('scroll', loadJSOnScroll, {once: true});
    var bilikl = document.getElementsByClassName("adsbygoogle").length;
    //function adsPush(c) {var i;for (i = 0; i < c; i++) {(adsbygoogle = window.adsbygoogle || []).push({});}}
    //if (fr<=2){window.addEventListener('load', function () {adsPush(fr);}, {once: true});}
    //else
    //{window.addEventListener('load', function () {adsPush(1);}, {once: true}); window.addEventListener('scroll', function () {adsPush(fr-1);}, {once: true});}

    //]]>
    </script>
    <script>
    var ldnow = (false==true) ? 1:2;
    function adsPush(e){var n;for(n=0;n<e;n++)(adsbygoogle=window.adsbygoogle||[]).push({})}bilikl<=ldnow?window.addEventListener("load",function(){adsPush(bilikl)},{once:!0}):(adsPush(ldnow),window.addEventListener("scroll",function(){adsPush(bilikl-ldnow)},{once:!0}));
    //false ? window.addEventListener("scroll",function(){"function"==typeof bsrpGallery&&GalleryLoad()},{once:!0}):GalleryLoad();  
    false==true?window.addEventListener("scroll",GalleryLoad,{once:!0}):GalleryLoad();   
    </script>  

    <!--
    <script type="text/javascript" src="https://www.blogger.com/static/v1/widgets/2092647672-widgets.js"></script>
    <script type='text/javascript'>
    window['__wavt'] = 'AOuZoY5TtPlBqC223vDm5DwE-zUvVDKDEw:1671175955832';_WidgetManager._Init('//www.blogger.com/rearrange?blogID\x3d7678562731459322471','//www.anekaresipi.com/2018/01/nasi-lemak-sambal-ikan-bilis-sedap.html','7678562731459322471');
    _WidgetManager._SetDataContext([{'name': 'blog', 'data': {'blogId': '7678562731459322471', 'title': 'Aneka Resipi', 'url': 'https://www.anekaresipi.com/2018/01/nasi-lemak-sambal-ikan-bilis-sedap.html', 'canonicalUrl': 'https://www.anekaresipi.com/2018/01/nasi-lemak-sambal-ikan-bilis-sedap.html', 'homepageUrl': 'https://www.anekaresipi.com/', 'searchUrl': 'https://www.anekaresipi.com/search', 'canonicalHomepageUrl': 'https://www.anekaresipi.com/', 'blogspotFaviconUrl': 'https://www.anekaresipi.com/favicon.ico', 'bloggerUrl': 'https://www.blogger.com', 'hasCustomDomain': true, 'httpsEnabled': true, 'enabledCommentProfileImages': true, 'gPlusViewType': 'FILTERED_POSTMOD', 'adultContent': false, 'analyticsAccountNumber': '', 'encoding': 'UTF-8', 'locale': 'ms', 'localeUnderscoreDelimited': 'ms', 'languageDirection': 'ltr', 'isPrivate': false, 'isMobile': false, 'isMobileRequest': false, 'mobileClass': '', 'isPrivateBlog': false, 'isDynamicViewsAvailable': true, 'feedLinks': '\x3clink rel\x3d\x22alternate\x22 type\x3d\x22application/atom+xml\x22 title\x3d\x22Aneka Resipi - Atom\x22 href\x3d\x22https://www.anekaresipi.com/feeds/posts/default\x22 /\x3e\n\x3clink rel\x3d\x22alternate\x22 type\x3d\x22application/rss+xml\x22 title\x3d\x22Aneka Resipi - RSS\x22 href\x3d\x22https://www.anekaresipi.com/feeds/posts/default?alt\x3drss\x22 /\x3e\n\x3clink rel\x3d\x22service.post\x22 type\x3d\x22application/atom+xml\x22 title\x3d\x22Aneka Resipi - Atom\x22 href\x3d\x22https://www.blogger.com/feeds/7678562731459322471/posts/default\x22 /\x3e\n\n\x3clink rel\x3d\x22alternate\x22 type\x3d\x22application/atom+xml\x22 title\x3d\x22Aneka Resipi - Atom\x22 href\x3d\x22https://www.anekaresipi.com/feeds/8323444581280108712/comments/default\x22 /\x3e\n', 'meTag': '', 'adsenseClientId': 'ca-pub-9901055153683349', 'adsenseHostId': 'ca-host-pub-1556223355139109', 'adsenseHasAds': false, 'adsenseAutoAds': false, 'boqCommentIframeForm': true, 'loginRedirectParam': '', 'view': '', 'dynamicViewsCommentsSrc': '//www.blogblog.com/dynamicviews/4224c15c4e7c9321/js/comments.js', 'dynamicViewsScriptSrc': '//www.blogblog.com/dynamicviews/4e9cb753f8a3c3d1', 'plusOneApiSrc': 'https://apis.google.com/js/platform.js', 'disableGComments': true, 'sharing': {'platforms': [{'name': 'Dapatkan pautan', 'key': 'link', 'shareMessage': 'Dapatkan pautan', 'target': ''}, {'name': 'Facebook', 'key': 'facebook', 'shareMessage': 'Kongsi ke Facebook', 'target': 'facebook'}, {'name': 'BlogThis!', 'key': 'blogThis', 'shareMessage': 'BlogThis!', 'target': 'blog'}, {'name': 'Twitter', 'key': 'twitter', 'shareMessage': 'Kongsi ke Twitter', 'target': 'twitter'}, {'name': 'Pinterest', 'key': 'pinterest', 'shareMessage': 'Kongsi ke Pinterest', 'target': 'pinterest'}, {'name': 'E-mel', 'key': 'email', 'shareMessage': 'E-mel', 'target': 'email'}], 'disableGooglePlus': true, 'googlePlusShareButtonWidth': 0, 'googlePlusBootstrap': '\x3cscript type\x3d\x22text/javascript\x22\x3ewindow.___gcfg \x3d {\x27lang\x27: \x27ms\x27};\x3c/script\x3e'}, 'hasCustomJumpLinkMessage': false, 'jumpLinkMessage': 'Baca lagi', 'pageType': 'item', 'postId': '8323444581280108712', 'postImageThumbnailUrl': 'https://lh3.googleusercontent.com/-znX-KsHkwjs/WkxrKSfPEDI/AAAAAAAAAls/rRJnqpitpXQoXKze4XINYiUv9ZahN6COACHMYCw/s72-c-e60/nasi%2Blemak%2Bterbaik%255B5%255D', 'postImageUrl': 'https://lh3.googleusercontent.com/-znX-KsHkwjs/WkxrKSfPEDI/AAAAAAAAAls/rRJnqpitpXQoXKze4XINYiUv9ZahN6COACHMYCw/s600-e60/nasi%2Blemak%2Bterbaik%255B5%255D', 'pageName': 'Nasi Lemak Sambal Ikan Bilis Sedap', 'pageTitle': 'Aneka Resipi: Nasi Lemak Sambal Ikan Bilis Sedap', 'metaDescription': 'Cara masak nasi lemak setanding resepi nasi lemak Azie Kitchen dan sambal nasi lemak Chef Wan. Sedap dimakan dengan sambal bilis, ditambah ayam berempah atau ayam goreng. Nasi lemak pandan, nasi lemak tanpa santan, nasi lemak kukus, nasi lemak Kelantan, nasi lemak Terengganu tak jauh beza ...'}}, {'name': 'features', 'data': {'sharing_get_link_dialog': 'true', 'sharing_native': 'false'}}, {'name': 'messages', 'data': {'edit': 'Edit', 'linkCopiedToClipboard': 'Pautan disalin ke papan keratan!', 'ok': 'Ok', 'postLink': 'Pautan Catatan'}}, {'name': 'template', 'data': {'name': 'custom', 'localizedName': 'Peribadi', 'isResponsive': false, 'isAlternateRendering': false, 'isCustom': true}}, {'name': 'view', 'data': {'classic': {'name': 'classic', 'url': '?view\x3dclassic'}, 'flipcard': {'name': 'flipcard', 'url': '?view\x3dflipcard'}, 'magazine': {'name': 'magazine', 'url': '?view\x3dmagazine'}, 'mosaic': {'name': 'mosaic', 'url': '?view\x3dmosaic'}, 'sidebar': {'name': 'sidebar', 'url': '?view\x3dsidebar'}, 'snapshot': {'name': 'snapshot', 'url': '?view\x3dsnapshot'}, 'timeslide': {'name': 'timeslide', 'url': '?view\x3dtimeslide'}, 'isMobile': false, 'title': 'Nasi Lemak Sambal Ikan Bilis Sedap', 'description': 'Cara masak nasi lemak setanding resepi nasi lemak Azie Kitchen dan sambal nasi lemak Chef Wan. Sedap dimakan dengan sambal bilis, ditambah ayam berempah atau ayam goreng. Nasi lemak pandan, nasi lemak tanpa santan, nasi lemak kukus, nasi lemak Kelantan, nasi lemak Terengganu tak jauh beza ...', 'featuredImage': 'https://lh3.googleusercontent.com/-znX-KsHkwjs/WkxrKSfPEDI/AAAAAAAAAls/rRJnqpitpXQoXKze4XINYiUv9ZahN6COACHMYCw/s600-e60/nasi%2Blemak%2Bterbaik%255B5%255D', 'url': 'https://www.anekaresipi.com/2018/01/nasi-lemak-sambal-ikan-bilis-sedap.html', 'type': 'item', 'isSingleItem': true, 'isMultipleItems': false, 'isError': false, 'isPage': false, 'isPost': true, 'isHomepage': false, 'isArchive': false, 'isLabelSearch': false, 'postId': 8323444581280108712}}]);
    _WidgetManager._RegisterWidget('_HeaderView', new _WidgetInfo('Header1', 'header', document.getElementById('Header1'), {}, 'displayModeFull'));
    _WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML3', 'header', document.getElementById('HTML3'), {}, 'displayModeFull'));
    _WidgetManager._RegisterWidget('_BlogView', new _WidgetInfo('Blog1', 'main', document.getElementById('Blog1'), {'cmtInteractionsEnabled': false}, 'displayModeFull'));
    _WidgetManager._RegisterWidget('_BlogArchiveView', new _WidgetInfo('BlogArchive1', 'main', document.getElementById('BlogArchive1'), {'languageDirection': 'ltr', 'loadingMessage': 'Memuatkan\x26hellip;'}, 'displayModeFull'));
    _WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML6', 'sidebar2', document.getElementById('HTML6'), {}, 'displayModeFull'));
    _WidgetManager._RegisterWidget('_LabelView', new _WidgetInfo('Label1', 'sidebar2', document.getElementById('Label1'), {}, 'displayModeFull'));
    _WidgetManager._RegisterWidget('_LabelView', new _WidgetInfo('Label2', 'sidebar2', document.getElementById('Label2'), {}, 'displayModeFull'));
    _WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML5', 'sidebar2', document.getElementById('HTML5'), {}, 'displayModeFull'));
    _WidgetManager._RegisterWidget('_LabelView', new _WidgetInfo('Label3', 'sidebar2', document.getElementById('Label3'), {}, 'displayModeFull'));
    _WidgetManager._RegisterWidget('_BlogArchiveView', new _WidgetInfo('BlogArchive2', 'sidebar2', document.getElementById('BlogArchive2'), {'languageDirection': 'ltr', 'loadingMessage': 'Memuatkan\x26hellip;'}, 'displayModeFull'));
    _WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML1', 'sidebar2', document.getElementById('HTML1'), {}, 'displayModeFull'));
    </script>
    </body>--> 
</body>
</html>