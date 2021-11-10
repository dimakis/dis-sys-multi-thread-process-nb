<!DOCTYPE html>

<html  dir="ltr" lang="en" xml:lang="en">
<head>
    <title>Distributed Systems I-89894-[2021-2022]: Multiprocessing, Multithreading and Parallel Computing</title>
    <link rel="shortcut icon" href="https://moodle.wit.ie/theme/image.php/wit/theme/1635263493/favicon" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="moodle, Distributed Systems I-89894-[2021-2022]: Multiprocessing, Multithreading and Parallel Computing" />
<link rel="stylesheet" type="text/css" href="https://moodle.wit.ie/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.css" /><script id="firstthemesheet" type="text/css">/** Required in order to fix style inclusion problems in IE with YUI **/</script><link rel="stylesheet" type="text/css" href="https://moodle.wit.ie/theme/styles.php/wit/1635263493_1633074715/all" />
<script>
//<![CDATA[
var M = {}; M.yui = {};
M.pageloadstarttime = new Date();
M.cfg = {"wwwroot":"https:\/\/moodle.wit.ie","sesskey":"zIwEUP5IRf","sessiontimeout":"28800","themerev":"1635263493","slasharguments":1,"theme":"wit","iconsystemmodule":"core\/icon_system_fontawesome","jsrev":"1633429171","admin":"admin","svgicons":true,"usertimezone":"Europe\/Dublin","contextid":5963732,"langrev":1633350712,"templaterev":"1633350712"};var yui1ConfigFn = function(me) {if(/-skin|reset|fonts|grids|base/.test(me.name)){me.type='css';me.path=me.path.replace(/\.js/,'.css');me.path=me.path.replace(/\/yui2-skin/,'/assets/skins/sam/yui2-skin')}};
var yui2ConfigFn = function(me) {var parts=me.name.replace(/^moodle-/,'').split('-'),component=parts.shift(),module=parts[0],min='-min';if(/-(skin|core)$/.test(me.name)){parts.pop();me.type='css';min=''}
if(module){var filename=parts.join('-');me.path=component+'/'+module+'/'+filename+min+'.'+me.type}else{me.path=component+'/'+component+'.'+me.type}};
YUI_config = {"debug":false,"base":"https:\/\/moodle.wit.ie\/lib\/yuilib\/3.17.2\/","comboBase":"https:\/\/moodle.wit.ie\/theme\/yui_combo.php?","combine":true,"filter":null,"insertBefore":"firstthemesheet","groups":{"yui2":{"base":"https:\/\/moodle.wit.ie\/lib\/yuilib\/2in3\/2.9.0\/build\/","comboBase":"https:\/\/moodle.wit.ie\/theme\/yui_combo.php?","combine":true,"ext":false,"root":"2in3\/2.9.0\/build\/","patterns":{"yui2-":{"group":"yui2","configFn":yui1ConfigFn}}},"moodle":{"name":"moodle","base":"https:\/\/moodle.wit.ie\/theme\/yui_combo.php?m\/1633429171\/","combine":true,"comboBase":"https:\/\/moodle.wit.ie\/theme\/yui_combo.php?","ext":false,"root":"m\/1633429171\/","patterns":{"moodle-":{"group":"moodle","configFn":yui2ConfigFn}},"filter":null,"modules":{"moodle-core-lockscroll":{"requires":["plugin","base-build"]},"moodle-core-notification":{"requires":["moodle-core-notification-dialogue","moodle-core-notification-alert","moodle-core-notification-confirm","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-core-notification-dialogue":{"requires":["base","node","panel","escape","event-key","dd-plugin","moodle-core-widget-focusafterclose","moodle-core-lockscroll"]},"moodle-core-notification-alert":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-confirm":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-exception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-ajaxexception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-maintenancemodetimer":{"requires":["base","node"]},"moodle-core-tooltip":{"requires":["base","node","io-base","moodle-core-notification-dialogue","json-parse","widget-position","widget-position-align","event-outside","cache-base"]},"moodle-core-actionmenu":{"requires":["base","event","node-event-simulate"]},"moodle-core-formchangechecker":{"requires":["base","event-focus","moodle-core-event"]},"moodle-core-blocks":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification"]},"moodle-core-popuphelp":{"requires":["moodle-core-tooltip"]},"moodle-core-event":{"requires":["event-custom"]},"moodle-core-languninstallconfirm":{"requires":["base","node","moodle-core-notification-confirm","moodle-core-notification-alert"]},"moodle-core-handlebars":{"condition":{"trigger":"handlebars","when":"after"}},"moodle-core-chooserdialogue":{"requires":["base","panel","moodle-core-notification"]},"moodle-core-dragdrop":{"requires":["base","node","io","dom","dd","event-key","event-focus","moodle-core-notification"]},"moodle-core_availability-form":{"requires":["base","node","event","event-delegate","panel","moodle-core-notification-dialogue","json"]},"moodle-backup-backupselectall":{"requires":["node","event","node-event-simulate","anim"]},"moodle-backup-confirmcancel":{"requires":["node","node-event-simulate","moodle-core-notification-confirm"]},"moodle-course-util":{"requires":["node"],"use":["moodle-course-util-base"],"submodules":{"moodle-course-util-base":{},"moodle-course-util-section":{"requires":["node","moodle-course-util-base"]},"moodle-course-util-cm":{"requires":["node","moodle-course-util-base"]}}},"moodle-course-categoryexpander":{"requires":["node","event-key"]},"moodle-course-formatchooser":{"requires":["base","node","node-event-simulate"]},"moodle-course-management":{"requires":["base","node","io-base","moodle-core-notification-exception","json-parse","dd-constrain","dd-proxy","dd-drop","dd-delegate","node-event-delegate"]},"moodle-course-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-course-coursebase","moodle-course-util"]},"moodle-form-shortforms":{"requires":["node","base","selector-css3","moodle-core-event"]},"moodle-form-passwordunmask":{"requires":[]},"moodle-form-dateselector":{"requires":["base","node","overlay","calendar"]},"moodle-question-preview":{"requires":["base","dom","event-delegate","event-key","core_question_engine"]},"moodle-question-chooser":{"requires":["moodle-core-chooserdialogue"]},"moodle-question-searchform":{"requires":["base","node"]},"moodle-availability_completion-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_date-form":{"requires":["base","node","event","io","moodle-core_availability-form"]},"moodle-availability_grade-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_group-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_grouping-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_profile-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-mod_assign-history":{"requires":["node","transition"]},"moodle-mod_attendance-groupfilter":{"requires":["base","node"]},"moodle-mod_checklist-linkselect":{"requires":["node","event-valuechange"]},"moodle-mod_quiz-questionchooser":{"requires":["moodle-core-chooserdialogue","moodle-mod_quiz-util","querystring-parse"]},"moodle-mod_quiz-toolboxes":{"requires":["base","node","event","event-key","io","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-slot","moodle-core-notification-ajaxexception"]},"moodle-mod_quiz-util":{"requires":["node","moodle-core-actionmenu"],"use":["moodle-mod_quiz-util-base"],"submodules":{"moodle-mod_quiz-util-base":{},"moodle-mod_quiz-util-slot":{"requires":["node","moodle-mod_quiz-util-base"]},"moodle-mod_quiz-util-page":{"requires":["node","moodle-mod_quiz-util-base"]}}},"moodle-mod_quiz-quizbase":{"requires":["base","node"]},"moodle-mod_quiz-autosave":{"requires":["base","node","event","event-valuechange","node-event-delegate","io-form"]},"moodle-mod_quiz-modform":{"requires":["base","node","event"]},"moodle-mod_quiz-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-base","moodle-mod_quiz-util-page","moodle-mod_quiz-util-slot","moodle-course-util"]},"moodle-message_airnotifier-toolboxes":{"requires":["base","node","io"]},"moodle-filter_glossary-autolinker":{"requires":["base","node","io-base","json-parse","event-delegate","overlay","moodle-core-event","moodle-core-notification-alert","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-filter_mathjaxloader-loader":{"requires":["moodle-core-event"]},"moodle-editor_atto-rangy":{"requires":[]},"moodle-editor_atto-editor":{"requires":["node","transition","io","overlay","escape","event","event-simulate","event-custom","node-event-html5","node-event-simulate","yui-throttle","moodle-core-notification-dialogue","moodle-core-notification-confirm","moodle-editor_atto-rangy","handlebars","timers","querystring-stringify"]},"moodle-editor_atto-plugin":{"requires":["node","base","escape","event","event-outside","handlebars","event-custom","timers","moodle-editor_atto-menu"]},"moodle-editor_atto-menu":{"requires":["moodle-core-notification-dialogue","node","event","event-custom"]},"moodle-format_simple-section":{"requires":["base","node","anim"]},"moodle-report_eventlist-eventfilter":{"requires":["base","event","node","node-event-delegate","datatable","autocomplete","autocomplete-filters"]},"moodle-report_loglive-fetchlogs":{"requires":["base","event","node","io","node-event-delegate"]},"moodle-gradereport_grader-gradereporttable":{"requires":["base","node","event","handlebars","overlay","event-hover"]},"moodle-gradereport_history-userselector":{"requires":["escape","event-delegate","event-key","handlebars","io-base","json-parse","moodle-core-notification-dialogue"]},"moodle-tool_capability-search":{"requires":["base","node"]},"moodle-tool_lp-dragdrop-reorder":{"requires":["moodle-core-dragdrop"]},"moodle-tool_monitor-dropdown":{"requires":["base","event","node"]},"moodle-assignfeedback_editpdf-editor":{"requires":["base","event","node","io","graphics","json","event-move","event-resize","transition","querystring-stringify-simple","moodle-core-notification-dialog","moodle-core-notification-alert","moodle-core-notification-warning","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-atto_accessibilitychecker-button":{"requires":["color-base","moodle-editor_atto-plugin"]},"moodle-atto_accessibilityhelper-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_align-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_bold-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_charmap-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_clear-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_collapse-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_emojipicker-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_emoticon-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_equation-button":{"requires":["moodle-editor_atto-plugin","moodle-core-event","io","event-valuechange","tabview","array-extras"]},"moodle-atto_h5p-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_html-codemirror":{"requires":["moodle-atto_html-codemirror-skin"]},"moodle-atto_html-button":{"requires":["promise","moodle-editor_atto-plugin","moodle-atto_html-beautify","moodle-atto_html-codemirror","event-valuechange"]},"moodle-atto_html-beautify":{},"moodle-atto_image-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_indent-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_italic-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_link-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-usedfiles":{"requires":["node","escape"]},"moodle-atto_media-button":{"requires":["moodle-editor_atto-plugin","moodle-form-shortforms"]},"moodle-atto_noautolink-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_orderedlist-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_recordrtc-button":{"requires":["moodle-editor_atto-plugin","moodle-atto_recordrtc-recording"]},"moodle-atto_recordrtc-recording":{"requires":["moodle-atto_recordrtc-button"]},"moodle-atto_rtl-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_snippet-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_strike-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_subscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_superscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_table-button":{"requires":["moodle-editor_atto-plugin","moodle-editor_atto-menu","event","event-valuechange"]},"moodle-atto_teamsmeeting-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_title-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_underline-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_undo-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_unorderedlist-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_wordimport-button":{"requires":["moodle-editor_atto-plugin"]}}},"gallery":{"name":"gallery","base":"https:\/\/moodle.wit.ie\/lib\/yuilib\/gallery\/","combine":true,"comboBase":"https:\/\/moodle.wit.ie\/theme\/yui_combo.php?","ext":false,"root":"gallery\/1633429171\/","patterns":{"gallery-":{"group":"gallery"}}}},"modules":{"core_filepicker":{"name":"core_filepicker","fullpath":"https:\/\/moodle.wit.ie\/lib\/javascript.php\/1633429171\/repository\/filepicker.js","requires":["base","node","node-event-simulate","json","async-queue","io-base","io-upload-iframe","io-form","yui2-treeview","panel","cookie","datatable","datatable-sort","resize-plugin","dd-plugin","escape","moodle-core_filepicker","moodle-core-notification-dialogue"]},"core_comment":{"name":"core_comment","fullpath":"https:\/\/moodle.wit.ie\/lib\/javascript.php\/1633429171\/comment\/comment.js","requires":["base","io-base","node","json","yui2-animation","overlay","escape"]},"mathjax":{"name":"mathjax","fullpath":"https:\/\/cdn.jsdelivr.net\/npm\/mathjax@2.7.8\/MathJax.js?delayStartupUntil=configured"}}};
M.yui.loader = {modules: {}};

//]]>
</script>

<link href='//fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,300' rel='stylesheet' type='text/css'>

<link href='//fonts.googleapis.com/css?family=Merriweather:400,300' rel='stylesheet' type='text/css'>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-5259392-12', 'wit.ie');
  ga('send', 'pageview');

</script>
<meta name="google-site-verification" content="N9DfSduIrvjRn_kWZhwSbrWk_CWRs2CBzKblv94DzuQ" />

<!-- Global site tag (gtag.js) - Google Analytics 4 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SZ4GGDSTEQ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SZ4GGDSTEQ');
</script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body  id="page-mod-resource-view" class="format-simple  path-mod path-mod-resource gecko dir-ltr lang-en yui-skin-sam yui3-skin-sam moodle-wit-ie pagelayout-incourse course-182858 context-5963732 cmid-3613324 category-32372 drawer-open-left">

<div id="page-wrapper">

    <div>
    <a class="sr-only sr-only-focusable" href="#maincontent">Skip to main content</a>
</div><script src="https://moodle.wit.ie/lib/javascript.php/1633429171/lib/babel-polyfill/polyfill.min.js"></script>
<script src="https://moodle.wit.ie/lib/javascript.php/1633429171/lib/polyfills/polyfill.js"></script>
<script src="https://moodle.wit.ie/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.js"></script><script src="https://moodle.wit.ie/lib/javascript.php/1633429171/lib/javascript-static.js"></script>
<script>
//<![CDATA[
document.body.className += ' jsenabled';
//]]>
</script>


<style>
.btn-info {
    color: #fff;
    background-color: #5bc0de !important;
    border-color: #5bc0de !important;
}
#page-navbar .breadcrumb-button{
    margin-top:30px; 
}
#action-menu-2{
    z-index: 100;
    position: relative;
}
#groupingdropdown{
color: #fff;
background-color: #1177d1;
border-color: #1177d1;
}
.message-app.drawer {
    z-index: 1040;
}

fieldset:target::before

{ content: unset; }

.profilepicture .d-inline-block {
  display: inline !important;
}
</style>



    <nav class="fixed-top navbar navbar-light bg-white navbar-expand moodle-has-zindex" aria-label="Site navigation">
    
            <div data-region="drawer-toggle" class="d-inline-block mr-3">
                <button aria-expanded="true" aria-controls="nav-drawer" type="button" class="btn nav-link float-sm-left mr-1 btn-light bg-gray" data-action="toggle-drawer" data-side="left" data-preference="drawer-open-nav"><i class="icon fa fa-bars fa-fw " aria-hidden="true"  ></i><span class="sr-only">Side panel</span></button>
            </div>
    
            <a href="https://moodle.wit.ie" class="navbar-brand aabtn has-logo
                    ">
                    <span class="logo d-none d-sm-inline">
                        <img src="https://moodle.wit.ie/pluginfile.php/1/core_admin/logocompact/300x300/1635263493/moodlewit_small.png" alt="Moodle">
                    </span>
                <span class="site-name d-none d-md-inline">Moodle</span>
            </a>
    
            <ul class="navbar-nav d-none d-md-flex">
                <!-- custom_menu -->
                
                <!-- page_heading_menu -->
                
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <li class="d-none d-lg-block">
                    
                </li>
                <!-- navbar_plugin_output -->
                <li class="nav-item">
                    <div class="popover-region collapsed popover-region-notifications"
    id="nav-notification-popover-container" data-userid="105144"
    data-region="popover-region">
    <div class="popover-region-toggle nav-link"
        data-region="popover-region-toggle"
        role="button"
        aria-controls="popover-region-container-618bae8ab34fa618bae8ab04102"
        aria-haspopup="true"
        aria-label="Show notification window with no new notifications"
        tabindex="0">
                <i class="icon fa fa-bell fa-fw "  title="Toggle notifications menu" aria-label="Toggle notifications menu"></i>
        <div class="count-container " data-region="count-container"
        aria-label="There are 3 unread notifications">3</div>

    </div>
    <div 
        id="popover-region-container-618bae8ab34fa618bae8ab04102"
        class="popover-region-container"
        data-region="popover-region-container"
        aria-expanded="false"
        aria-hidden="true"
        aria-label="Notification window"
        role="region">
        <div class="popover-region-header-container">
            <h3 class="popover-region-header-text" data-region="popover-region-header-text">Notifications</h3>
            <div class="popover-region-header-actions" data-region="popover-region-header-actions">        <a class="mark-all-read-button"
           href="#"
           title="Mark all as read"
           data-action="mark-all-read"
           role="button"
           aria-label="Mark all as read">
            <span class="normal-icon"><i class="icon fa fa-check fa-fw " aria-hidden="true"  ></i></span>
            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
        </a>
        <a href="https://moodle.wit.ie/message/notificationpreferences.php?userid=105144"
           title="Notification preferences"
           aria-label="Notification preferences">
            <i class="icon fa fa-cog fa-fw " aria-hidden="true"  ></i>
        </a>
</div>
        </div>
        <div class="popover-region-content-container" data-region="popover-region-content-container">
            <div class="popover-region-content" data-region="popover-region-content">
                        <div class="all-notifications"
            data-region="all-notifications"
            role="log"
            aria-busy="false"
            aria-atomic="false"
            aria-relevant="additions"></div>
        <div class="empty-message" tabindex="0" data-region="empty-message">You have no notifications</div>

            </div>
            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
        </div>
                <a class="see-all-link"
                    href="https://moodle.wit.ie/message/output/popup/notifications.php">
                    <div class="popover-region-footer-container">
                        <div class="popover-region-seeall-text">See all</div>
                    </div>
                </a>
    </div>
</div><div class="popover-region collapsed" data-region="popover-region-messages">
    <a id="message-drawer-toggle-618bae8ab408e618bae8ab04103" class="nav-link d-inline-block popover-region-toggle position-relative" href="#"
            role="button">
        <i class="icon fa fa-comment fa-fw "  title="Toggle messaging drawer" aria-label="Toggle messaging drawer"></i>
        <div class="count-container hidden" data-region="count-container"
        aria-label="There are 0 unread conversations">0</div>
    </a>
    <span class="sr-only sr-only-focusable" data-region="jumpto" tabindex="-1"></span></div>
                </li>
                <!-- user_menu -->
                <li class="nav-item d-flex align-items-center">
                    <div class="usermenu"><div class="action-menu moodle-actionmenu nowrap-items d-inline" id="action-menu-1" data-enhance="moodle-core-actionmenu">

        <div class="menubar d-flex " id="action-menu-1-menubar" role="menubar">

            


                <div class="action-menu-trigger">
                    <div class="dropdown">
                        <a href="#" tabindex="0" class="d-inline-block  dropdown-toggle icon-no-margin" id="action-menu-toggle-1" aria-label="User menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" aria-controls="action-menu-1-menu">
                            
                            <span class="userbutton"><span class="usertext mr-1">Dimitri Saridakis</span><span class="avatars"><span class="avatar current"><img src="https://moodle.wit.ie/pluginfile.php/3941087/user/icon/wit/f2?rev=20179319" class="userpicture" width="35" height="35" alt="" /></span></span></span>
                                
                            <b class="caret"></b>
                        </a>
                            <div class="dropdown-menu dropdown-menu-right menu  align-tr-br" id="action-menu-1-menu" data-rel="menu-content" aria-labelledby="action-menu-toggle-1" role="menu" data-align="tr-br">
                                                                <a href="https://moodle.wit.ie/my/" class="dropdown-item menu-action" role="menuitem" data-title="mymoodle,admin" aria-labelledby="actionmenuaction-1">
                                <i class="icon fa fa-tachometer fa-fw " aria-hidden="true"  ></i>
                                <span class="menu-action-text" id="actionmenuaction-1">My Home</span>
                        </a>
                    <div class="dropdown-divider" role="presentation"><span class="filler">&nbsp;</span></div>
                                                                <a href="https://moodle.wit.ie/user/profile.php?id=105144" class="dropdown-item menu-action" role="menuitem" data-title="profile,moodle" aria-labelledby="actionmenuaction-2">
                                <i class="icon fa fa-user fa-fw " aria-hidden="true"  ></i>
                                <span class="menu-action-text" id="actionmenuaction-2">Profile</span>
                        </a>
                                                                <a href="https://moodle.wit.ie/grade/report/overview/index.php" class="dropdown-item menu-action" role="menuitem" data-title="grades,grades" aria-labelledby="actionmenuaction-3">
                                <i class="icon fa fa-table fa-fw " aria-hidden="true"  ></i>
                                <span class="menu-action-text" id="actionmenuaction-3">Grades</span>
                        </a>
                                                                <a href="https://moodle.wit.ie/message/index.php" class="dropdown-item menu-action" role="menuitem" data-title="messages,message" aria-labelledby="actionmenuaction-4">
                                <i class="icon fa fa-comment fa-fw " aria-hidden="true"  ></i>
                                <span class="menu-action-text" id="actionmenuaction-4">Messages</span>
                        </a>
                                                                <a href="https://moodle.wit.ie/user/preferences.php" class="dropdown-item menu-action" role="menuitem" data-title="preferences,moodle" aria-labelledby="actionmenuaction-5">
                                <i class="icon fa fa-wrench fa-fw " aria-hidden="true"  ></i>
                                <span class="menu-action-text" id="actionmenuaction-5">Preferences</span>
                        </a>
                    <div class="dropdown-divider" role="presentation"><span class="filler">&nbsp;</span></div>
                                                                <a href="https://moodle.wit.ie/login/logout.php?sesskey=zIwEUP5IRf" class="dropdown-item menu-action" role="menuitem" data-title="logout,moodle" aria-labelledby="actionmenuaction-6">
                                <i class="icon fa fa-sign-out fa-fw " aria-hidden="true"  ></i>
                                <span class="menu-action-text" id="actionmenuaction-6">Log out</span>
                        </a>
                            </div>
                    </div>
                </div>

        </div>

</div></div>
                </li>
            </ul>
            <!-- search_box -->
    </nav>
    

    <div id="page" class="container-fluid">
        <header id="page-header" class="row"><div class="col-12 pt-3 pb-3"><div class="card"><div class="card-block"><div class="pull-xs-right context-header-settings-menu"></div><div class="pull-xs-left"><div class="context_container"><div id="course-header"><img src="https://moodle.wit.ie/theme/image.php/wit/format_simple/1635263493/no-course-img" class="course-image" alt="Course Image" /></div></div><div class="page-context-header"><div class="page-header-headings"><h1>Distributed Systems I-89894-[2021-2022]</h1></div></div><div class="clearfix w-100" id="page-navbar"><div class="breadcrumb-nav"><nav aria-label="Navigation bar">
    <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="https://moodle.wit.ie/my/"  >My Home</a>
                </li>
        
                <li class="breadcrumb-item">My modules</li>
        
                <li class="breadcrumb-item">
                    <a href="https://moodle.wit.ie/course/view.php?id=182858"  title="Distributed Systems I-89894-[2021-2022]">Distributed Systems I-89894-[2021-2022]</a>
                </li>
        
                <li class="breadcrumb-item">
                    <a href="https://moodle.wit.ie/course/view.php?id=182858&amp;section=6"  >Multiprocessing-Multithreading-Parallel Computing, Flask and Productionization</a>
                </li>
        
                <li class="breadcrumb-item">
                    <a href="https://moodle.wit.ie/mod/resource/view.php?id=3613324" aria-current="page" title="File">Multiprocessing, Multithreading and Parallel Computing</a>
                </li>
        </ol>
</nav></div><div class="breadcrumb-button pull-xs-right customise-this-page"></div></div></div></div></div></div></header>

        <div id="page-content" class="row">
            <div id="region-main-box" class="col-12">
                <section id="region-main" >
                    <div class="card">
                        <div class="card-body">
                            <span class="notifications" id="user-notifications"></span>
                            <div role="main"><span id="maincontent"></span><h2>Multiprocessing, Multithreading and Parallel Computing</h2><div id="resourceintro" class="box py-3 mod_introbox"><div class="no-overflow"><p dir="ltr" style="text-align: left;">Ipython notebook containing code for multiprocessing, multithreading and parallel computing as discussed in class during the code-walkthrough session. We have covered low level as well as abstracted library based implementation.</p><p dir="ltr" style="text-align: left;">The related concepts were included as whiteboard sessions along with the code-walkthrough.&nbsp;</p></div></div><div class="resourceworkaround">Click <a href="https://moodle.wit.ie/pluginfile.php/5963732/mod_resource/content/1/Multithreading_Multiprocessing_Parallel_Computing.ipynb" onclick="this.target='_blank'">Multithreading_Multiprocessing_Parallel_Computing.ipynb</a> link to view the file.</div></div>
                            <div class="mt-5 mb-1 activity-navigation container-fluid">
<div class="row">
    <div class="col-md-4">        <div class="float-left">
                <a href="https://moodle.wit.ie/mod/resource/view.php?id=3613322&forceview=1" id="prev-activity-link" class="btn btn-link"  title="API Control Flow Notes" >&#x25C4; API Control Flow Notes</a>

        </div>
</div>
    <div class="col-md-4">        <div class="mdl-align">
            <div class="urlselect">
    <form method="post" action="https://moodle.wit.ie/course/jumpto.php" class="form-inline" id="url_select_f618bae8ab041012">
        <input type="hidden" name="sesskey" value="zIwEUP5IRf">
            <label for="jump-to-activity" class="sr-only">
                Jump to...
            </label>
        <select  id="jump-to-activity" class="custom-select urlselect" name="jump"
                 >
                    <option value="" selected>Jump to...</option>
                    <option value="/mod/forum/view.php?id=3511733&amp;forceview=1" >Announcements</option>
                    <option value="/mod/page/view.php?id=3580853&amp;forceview=1" >Books and Blogs</option>
                    <option value="/mod/resource/view.php?id=3580852&amp;forceview=1" >Introduction to Distributed Systems Design</option>
                    <option value="/mod/resource/view.php?id=3595325&amp;forceview=1" >DS-Project Selection-S.M.A.R.T. Framework </option>
                    <option value="/mod/resource/view.php?id=3605590&amp;forceview=1" >Network Layers and Sockets</option>
                    <option value="/mod/resource/view.php?id=3605591&amp;forceview=1" >API Design</option>
                    <option value="/mod/resource/view.php?id=3605592&amp;forceview=1" >Exposing APIs</option>
                    <option value="/mod/resource/view.php?id=3605593&amp;forceview=1" >Webservice-REST-Old-Notes</option>
                    <option value="/mod/resource/view.php?id=3613321&amp;forceview=1" >Bing Search API IPython Notebook </option>
                    <option value="/mod/resource/view.php?id=3613322&amp;forceview=1" >API Control Flow Notes</option>
                    <option value="/mod/resource/view.php?id=3619096&amp;forceview=1" >Parallelization in Production Environment</option>
                    <option value="/mod/resource/view.php?id=3619097&amp;forceview=1" >Example on AWS Deployment</option>
                    <option value="/mod/resource/view.php?id=3619098&amp;forceview=1" >Code Example and Snippets from Parallelization in Production Enviornments </option>
                    <option value="/mod/resource/view.php?id=3619102&amp;forceview=1" >Selected code snippets from sentiment analysis example (AWS Deployment)</option>
                    <option value="/mod/url/view.php?id=3581104&amp;forceview=1" >ZooKeeper at Twitter</option>
                    <option value="/mod/url/view.php?id=3581105&amp;forceview=1" >ZooKeeper</option>
                    <option value="/mod/resource/view.php?id=3581146&amp;forceview=1" >Apache Zookeeper - Installation and Troubleshooting</option>
                    <option value="/mod/url/view.php?id=3584326&amp;forceview=1" >Introduction to Apache Zookeeper</option>
                    <option value="/mod/url/view.php?id=3584356&amp;forceview=1" >Apache Zookeeper Useful Links and Tutorials</option>
                    <option value="/mod/url/view.php?id=3584357&amp;forceview=1" >Useful GitHub Links</option>
                    <option value="/mod/folder/view.php?id=3593214&amp;forceview=1" >Lab - Week - 27th Sep(Mon) - 29th Sep(Wed)</option>
                    <option value="/mod/assign/view.php?id=3598876&amp;forceview=1" >General Programming Assignment</option>
                    <option value="/mod/assign/view.php?id=3613735&amp;forceview=1" >Make-Up Assignment</option>
                    <option value="/mod/resource/view.php?id=3605602&amp;forceview=1" >Live Streaming Project Design  - Part 1</option>
                    <option value="/mod/resource/view.php?id=3610243&amp;forceview=1" >Live Video Streaming Service - Part 2</option>
                    <option value="/mod/resource/view.php?id=3605697&amp;forceview=1" >Distributed Systems – General Programming Assignment-Assignment-Solution </option>
        </select>
            <noscript>
                <input type="submit" class="btn btn-secondary ml-1" value="Go">
            </noscript>
    </form>
</div>

        </div>
</div>
    <div class="col-md-4">        <div class="float-right">
                <a href="https://moodle.wit.ie/mod/resource/view.php?id=3619096&forceview=1" id="next-activity-link" class="btn btn-link"  title="Parallelization in Production Environment" >Parallelization in Production Environment &#x25BA;</a>

        </div>
</div>
</div>
</div>
                            
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div
    id="drawer-618bae8ab7df0618bae8ab041013"
    class=" drawer bg-white hidden"
    aria-expanded="false"
    aria-hidden="true"
    data-region="right-hand-drawer"
    role="region"
    tabindex="0"
>
            <div id="message-drawer-618bae8ab7df0618bae8ab041013" class="message-app" data-region="message-drawer" role="region">
            <div class="closewidget bg-light border-bottom text-right">
                <a class="text-dark" data-action="closedrawer" href="#"
                   title="Close" aria-label="Close"
                >
                    <i class="icon fa fa-window-close fa-fw " aria-hidden="true"  ></i>
                </a>
            </div>
            <div class="header-container position-relative" data-region="header-container">
                <div class="hidden border-bottom px-2 py-3" aria-hidden="true" data-region="view-contacts">
                    <div class="d-flex align-items-center">
                        <div class="align-self-stretch">
                            <a class="h-100 d-flex align-items-center mr-2" href="#" data-route-back role="button">
                                <div class="icon-back-in-drawer">
                                    <span class="dir-rtl-hide"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"  ></i></span>
                                    <span class="dir-ltr-hide"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"  ></i></span>
                                </div>
                                <div class="icon-back-in-app">
                                    <span class="dir-rtl-hide"><i class="icon fa fa-times fa-fw " aria-hidden="true"  ></i></span>
                                </div>                            </a>
                        </div>
                        <div>
                            Contacts
                        </div>
                        <div class="ml-auto">
                            <a href="#" data-route="view-search" role="button" aria-label="Search">
                                <i class="icon fa fa-search fa-fw " aria-hidden="true"  ></i>
                            </a>
                        </div>
                    </div>
                </div>                
                <div
                    class="hidden bg-white position-relative border-bottom p-1 p-sm-2"
                    aria-hidden="true"
                    data-region="view-conversation"
                >
                    <div class="hidden" data-region="header-content"></div>
                    <div class="hidden" data-region="header-edit-mode">
                        
                        <div class="d-flex p-2 align-items-center">
                            Messages selected:
                            <span class="ml-1" data-region="message-selected-court">1</span>
                            <button type="button" class="ml-auto close" aria-label="Cancel message selection"
                                data-action="cancel-edit-mode">
                                    <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div data-region="header-placeholder">
                        <div class="d-flex">
                            <div
                                class="ml-2 rounded-circle bg-pulse-grey align-self-center"
                                style="height: 38px; width: 38px"
                            >
                            </div>
                            <div class="ml-2 " style="flex: 1">
                                <div
                                    class="mt-1 bg-pulse-grey w-75"
                                    style="height: 16px;"
                                >
                                </div>
                            </div>
                            <div
                                class="ml-2 bg-pulse-grey align-self-center"
                                style="height: 16px; width: 20px"
                            >
                            </div>
                        </div>
                    </div>
                    <div
                        class="hidden position-absolute z-index-1"
                        data-region="confirm-dialogue-container"
                        style="top: 0; bottom: -1px; right: 0; left: 0; background: rgba(0,0,0,0.3);"
                    ></div>
                </div>                <div class="border-bottom  p-1 px-sm-2 py-sm-3" aria-hidden="false"  data-region="view-overview">
                    <div class="d-flex align-items-center">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text pr-2 bg-white">
                                    <i class="icon fa fa-search fa-fw " aria-hidden="true"  ></i>
                                </span>
                            </div>
                            <input
                                type="text"
                                class="form-control border-left-0"
                                placeholder="Search"
                                aria-label="Search"
                                data-region="view-overview-search-input"
                            >
                        </div>
                        <div class="ml-2">
                            <a
                                href="#"
                                data-route="view-settings"
                                data-route-param="105144"
                                aria-label="Settings"
                                role="button"
                            >
                                <i class="icon fa fa-cog fa-fw " aria-hidden="true"  ></i>
                            </a>
                        </div>
                    </div>
                    <div class="text-right mt-sm-3">
                        <a href="#" data-route="view-contacts" role="button">
                            <i class="icon fa fa-user fa-fw " aria-hidden="true"  ></i>
                            Contacts
                            <span class="badge badge-primary bg-primary ml-2 hidden"
                            data-region="contact-request-count"
                            aria-label="There are 0 pending contact requests">
                                0
                            </span>
                        </a>
                    </div>
                </div>
                
                <div class="hidden border-bottom px-2 py-3 view-search"  aria-hidden="true" data-region="view-search">
                    <div class="d-flex align-items-center">
                        <a
                            class="mr-2 align-self-stretch d-flex align-items-center"
                            href="#"
                            data-route-back
                            data-action="cancel-search"
                            role="button"
                        >
                            <div class="icon-back-in-drawer">
                                <span class="dir-rtl-hide"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"  ></i></span>
                                <span class="dir-ltr-hide"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"  ></i></span>
                            </div>
                            <div class="icon-back-in-app">
                                <span class="dir-rtl-hide"><i class="icon fa fa-times fa-fw " aria-hidden="true"  ></i></span>
                            </div>                        </a>
                        <div class="input-group">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Search"
                                aria-label="Search"
                                data-region="search-input"
                            >
                            <div class="input-group-append">
                                <button
                                    class="btn btn-outline-secondary"
                                    type="button"
                                    data-action="search"
                                    aria-label="Search"
                                >
                                    <span data-region="search-icon-container">
                                        <i class="icon fa fa-search fa-fw " aria-hidden="true"  ></i>
                                    </span>
                                    <span class="hidden" data-region="loading-icon-container">
                                        <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>                
                <div class="hidden border-bottom px-2 py-3" aria-hidden="true" data-region="view-settings">
                    <div class="d-flex align-items-center">
                        <div class="align-self-stretch" >
                            <a class="h-100 d-flex mr-2 align-items-center" href="#" data-route-back role="button">
                                <div class="icon-back-in-drawer">
                                    <span class="dir-rtl-hide"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"  ></i></span>
                                    <span class="dir-ltr-hide"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"  ></i></span>
                                </div>
                                <div class="icon-back-in-app">
                                    <span class="dir-rtl-hide"><i class="icon fa fa-times fa-fw " aria-hidden="true"  ></i></span>
                                </div>                            </a>
                        </div>
                        <div>
                            Settings
                        </div>
                    </div>
                </div>
            </div>
            <div class="body-container position-relative" data-region="body-container">
                
                <div
                    class="hidden"
                    data-region="view-contact"
                    aria-hidden="true"
                >
                    <div class="p-2 pt-3" data-region="content-container"></div>
                </div>                <div class="hidden h-100" data-region="view-contacts" aria-hidden="true" data-user-id="105144">
                    <div class="d-flex flex-column h-100">
                        <div class="p-3 border-bottom">
                            <ul class="nav nav-pills nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a
                                        id="contacts-tab-618bae8ab7df0618bae8ab041013"
                                        class="nav-link active"
                                        href="#contacts-tab-panel-618bae8ab7df0618bae8ab041013"
                                        data-toggle="tab"
                                        data-action="show-contacts-section"
                                        role="tab"
                                        aria-controls="contacts-tab-panel-618bae8ab7df0618bae8ab041013"
                                        aria-selected="true"
                                    >
                                        Contacts
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a
                                        id="requests-tab-618bae8ab7df0618bae8ab041013"
                                        class="nav-link"
                                        href="#requests-tab-panel-618bae8ab7df0618bae8ab041013"
                                        data-toggle="tab"
                                        data-action="show-requests-section"
                                        role="tab"
                                        aria-controls="requests-tab-panel-618bae8ab7df0618bae8ab041013"
                                        aria-selected="false"
                                    >
                                        Requests
                                        <span class="badge badge-primary bg-primary ml-2 hidden"
                                        data-region="contact-request-count"
                                        aria-label="There are 0 pending contact requests">
                                            0
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content d-flex flex-column h-100">
                                            <div
                    class="tab-pane fade show active h-100 lazy-load-list"
                    aria-live="polite"
                    data-region="lazy-load-list"
                    data-user-id="105144"
                                        id="contacts-tab-panel-618bae8ab7df0618bae8ab041013"
                    data-section="contacts"
                    role="tabpanel"
                    aria-labelledby="contacts-tab-618bae8ab7df0618bae8ab041013"

                >
                    
                    <div class="hidden text-center p-2" data-region="empty-message-container">
                        No contacts
                    </div>
                    <div class="hidden list-group" data-region="content-container">
                        
                    </div>
                    <div class="list-group" data-region="placeholder-container">
                        
                    </div>
                    <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
                        <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
                    </div>
                </div>
                
                                            <div
                    class="tab-pane fade h-100 lazy-load-list"
                    aria-live="polite"
                    data-region="lazy-load-list"
                    data-user-id="105144"
                                        id="requests-tab-panel-618bae8ab7df0618bae8ab041013"
                    data-section="requests"
                    role="tabpanel"
                    aria-labelledby="requests-tab-618bae8ab7df0618bae8ab041013"

                >
                    
                    <div class="hidden text-center p-2" data-region="empty-message-container">
                        No contact requests
                    </div>
                    <div class="hidden list-group" data-region="content-container">
                        
                    </div>
                    <div class="list-group" data-region="placeholder-container">
                        
                    </div>
                    <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
                        <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
                    </div>
                </div>
                        </div>
                    </div>
                </div>                
                <div
                    class="view-conversation hidden h-100"
                    aria-hidden="true"
                    data-region="view-conversation"
                    data-user-id="105144"
                    data-midnight="1636502400"
                    data-message-poll-min="10"
                    data-message-poll-max="120"
                    data-message-poll-after-max="300"
                    style="overflow-y: auto; overflow-x: hidden"
                >
                    <div class="position-relative h-100" data-region="content-container" style="overflow-y: auto; overflow-x: hidden">
                        <div class="content-message-container hidden h-100 px-2 pt-0" data-region="content-message-container" role="log" style="overflow-y: auto; overflow-x: hidden">
                            <div class="py-3 sticky-top z-index-1 border-bottom text-center hidden" data-region="contact-request-sent-message-container">
                                <p class="m-0">Contact request sent</p>
                                <p class="font-italic font-weight-light" data-region="text"></p>
                            </div>
                            <div class="p-3 text-center hidden" data-region="self-conversation-message-container">
                                <p class="m-0">Personal space</p>
                                <p class="font-italic font-weight-light" data-region="text">Save draft messages, links, notes etc. to access later.</p>
                           </div>
                            <div class="hidden text-center p-3" data-region="more-messages-loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</div>
                        </div>
                        <div class="p-4 w-100 h-100 hidden position-absolute z-index-1" data-region="confirm-dialogue-container" style="top: 0; background: rgba(0,0,0,0.3);">
                            
                            <div class="p-3 bg-white" data-region="confirm-dialogue" role="alert">
                                <p class="text-muted" data-region="dialogue-text"></p>
                                <div class="mb-2 custom-control custom-checkbox hidden" data-region="delete-messages-for-all-users-toggle-container">
                                    <input type="checkbox" class="custom-control-input" id="delete-messages-for-all-users" data-region="delete-messages-for-all-users-toggle">
                                    <label class="custom-control-label text-muted" for="delete-messages-for-all-users">
                                        Delete for me and for everyone else
                                    </label>
                                </div>
                                <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-block">
                                    <span data-region="dialogue-button-text">Block</span>
                                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                                </button>
                                <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-unblock">
                                    <span data-region="dialogue-button-text">Unblock</span>
                                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                                </button>
                                <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-remove-contact">
                                    <span data-region="dialogue-button-text">Remove</span>
                                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                                </button>
                                <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-add-contact">
                                    <span data-region="dialogue-button-text">Add</span>
                                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                                </button>
                                <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-delete-selected-messages">
                                    <span data-region="dialogue-button-text">Delete</span>
                                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                                </button>
                                <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-delete-conversation">
                                    <span data-region="dialogue-button-text">Delete</span>
                                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                                </button>
                                <button type="button" class="btn btn-primary btn-block hidden" data-action="request-add-contact">
                                    <span data-region="dialogue-button-text">Send contact request</span>
                                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                                </button>
                                <button type="button" class="btn btn-primary btn-block hidden" data-action="accept-contact-request">
                                    <span data-region="dialogue-button-text">Accept and add to contacts</span>
                                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                                </button>
                                <button type="button" class="btn btn-secondary btn-block hidden" data-action="decline-contact-request">
                                    <span data-region="dialogue-button-text">Decline</span>
                                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                                </button>
                                <button type="button" class="btn btn-primary btn-block" data-action="okay-confirm">OK</button>
                                <button type="button" class="btn btn-secondary btn-block" data-action="cancel-confirm">Cancel</button>
                            </div>
                        </div>
                        <div class="px-2 pb-2 pt-0" data-region="content-placeholder">
                            <div class="h-100 d-flex flex-column">
                                <div
                                    class="px-2 pb-2 pt-0 bg-light h-100"
                                    style="overflow-y: auto"
                                >
                                    <div class="mt-4">
                                        <div class="mb-4">
                                            <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                    </div>                                    <div class="mt-4">
                                        <div class="mb-4">
                                            <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                    </div>                                    <div class="mt-4">
                                        <div class="mb-4">
                                            <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                    </div>                                    <div class="mt-4">
                                        <div class="mb-4">
                                            <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                    </div>                                    <div class="mt-4">
                                        <div class="mb-4">
                                            <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                    </div>                                </div>
                            </div>                        </div>
                    </div>
                </div>
                
                <div
                    class="hidden"
                    aria-hidden="true"
                    data-region="view-group-info"
                >
                    <div
                        class="pt-3 h-100 d-flex flex-column"
                        data-region="group-info-content-container"
                        style="overflow-y: auto"
                    ></div>
                </div>                <div class="h-100 view-overview-body" aria-hidden="false" data-region="view-overview"  data-user-id="105144">
                    <div id="message-drawer-view-overview-container-618bae8ab7df0618bae8ab041013" class="d-flex flex-column h-100" style="overflow-y: auto">
                            
                            
                            <div
                                class="section border-0 card"
                                data-region="view-overview-favourites"
                            >
                                <div id="view-overview-favourites-toggle" class="card-header p-0" data-region="toggle">
                                    <button
                                        class="btn btn-link w-100 text-left p-1 p-sm-2 d-flex align-items-center overview-section-toggle collapsed"
                                        data-toggle="collapse"
                                        data-target="#view-overview-favourites-target-618bae8ab7df0618bae8ab041013"
                                        aria-expanded="false"
                                        aria-controls="view-overview-favourites-target-618bae8ab7df0618bae8ab041013"
                                    >
                                        <span class="collapsed-icon-container">
                                            <i class="icon fa fa-caret-right fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                        <span class="expanded-icon-container">
                                            <i class="icon fa fa-caret-down fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                        <span class="font-weight-bold">Starred</span>
                                        <small class="hidden ml-1" data-region="section-total-count-container"
                                        aria-label=" total conversations">
                                            (<span data-region="section-total-count"></span>)
                                        </small>
                                        <span class="hidden ml-2" data-region="loading-icon-container">
                                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
                                        </span>
                                        <span class="hidden badge badge-pill badge-primary ml-auto bg-primary"
                                        data-region="section-unread-count"
                                        >
                                            
                                        </span>
                                    </button>
                                </div>
                                                            <div
                                class="collapse border-bottom  lazy-load-list"
                                aria-live="polite"
                                data-region="lazy-load-list"
                                data-user-id="105144"
                                            id="view-overview-favourites-target-618bae8ab7df0618bae8ab041013"
            aria-labelledby="view-overview-favourites-toggle"
            data-parent="#message-drawer-view-overview-container-618bae8ab7df0618bae8ab041013"

                            >
                                
                                <div class="hidden text-center p-2" data-region="empty-message-container">
                                            <p class="text-muted mt-2">No starred conversations</p>

                                </div>
                                <div class="hidden list-group" data-region="content-container">
                                    
                                </div>
                                <div class="list-group" data-region="placeholder-container">
                                            <div class="text-center py-2"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</div>

                                </div>
                                <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
                                    <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
                                </div>
                            </div>
                            </div>
                            
                            
                            <div
                                class="section border-0 card"
                                data-region="view-overview-group-messages"
                            >
                                <div id="view-overview-group-messages-toggle" class="card-header p-0" data-region="toggle">
                                    <button
                                        class="btn btn-link w-100 text-left p-1 p-sm-2 d-flex align-items-center overview-section-toggle collapsed"
                                        data-toggle="collapse"
                                        data-target="#view-overview-group-messages-target-618bae8ab7df0618bae8ab041013"
                                        aria-expanded="false"
                                        aria-controls="view-overview-group-messages-target-618bae8ab7df0618bae8ab041013"
                                    >
                                        <span class="collapsed-icon-container">
                                            <i class="icon fa fa-caret-right fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                        <span class="expanded-icon-container">
                                            <i class="icon fa fa-caret-down fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                        <span class="font-weight-bold">Group</span>
                                        <small class="hidden ml-1" data-region="section-total-count-container"
                                        aria-label=" total conversations">
                                            (<span data-region="section-total-count"></span>)
                                        </small>
                                        <span class="hidden ml-2" data-region="loading-icon-container">
                                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
                                        </span>
                                        <span class="hidden badge badge-pill badge-primary ml-auto bg-primary"
                                        data-region="section-unread-count"
                                        >
                                            
                                        </span>
                                    </button>
                                </div>
                                                            <div
                                class="collapse border-bottom  lazy-load-list"
                                aria-live="polite"
                                data-region="lazy-load-list"
                                data-user-id="105144"
                                            id="view-overview-group-messages-target-618bae8ab7df0618bae8ab041013"
            aria-labelledby="view-overview-group-messages-toggle"
            data-parent="#message-drawer-view-overview-container-618bae8ab7df0618bae8ab041013"

                            >
                                
                                <div class="hidden text-center p-2" data-region="empty-message-container">
                                            <p class="text-muted mt-2">No group conversations</p>

                                </div>
                                <div class="hidden list-group" data-region="content-container">
                                    
                                </div>
                                <div class="list-group" data-region="placeholder-container">
                                            <div class="text-center py-2"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</div>

                                </div>
                                <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
                                    <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
                                </div>
                            </div>
                            </div>
                            
                            
                            <div
                                class="section border-0 card"
                                data-region="view-overview-messages"
                            >
                                <div id="view-overview-messages-toggle" class="card-header p-0" data-region="toggle">
                                    <button
                                        class="btn btn-link w-100 text-left p-1 p-sm-2 d-flex align-items-center overview-section-toggle collapsed"
                                        data-toggle="collapse"
                                        data-target="#view-overview-messages-target-618bae8ab7df0618bae8ab041013"
                                        aria-expanded="false"
                                        aria-controls="view-overview-messages-target-618bae8ab7df0618bae8ab041013"
                                    >
                                        <span class="collapsed-icon-container">
                                            <i class="icon fa fa-caret-right fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                        <span class="expanded-icon-container">
                                            <i class="icon fa fa-caret-down fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                        <span class="font-weight-bold">Private</span>
                                        <small class="hidden ml-1" data-region="section-total-count-container"
                                        aria-label=" total conversations">
                                            (<span data-region="section-total-count"></span>)
                                        </small>
                                        <span class="hidden ml-2" data-region="loading-icon-container">
                                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
                                        </span>
                                        <span class="hidden badge badge-pill badge-primary ml-auto bg-primary"
                                        data-region="section-unread-count"
                                        >
                                            
                                        </span>
                                    </button>
                                </div>
                                                            <div
                                class="collapse border-bottom  lazy-load-list"
                                aria-live="polite"
                                data-region="lazy-load-list"
                                data-user-id="105144"
                                            id="view-overview-messages-target-618bae8ab7df0618bae8ab041013"
            aria-labelledby="view-overview-messages-toggle"
            data-parent="#message-drawer-view-overview-container-618bae8ab7df0618bae8ab041013"

                            >
                                
                                <div class="hidden text-center p-2" data-region="empty-message-container">
                                            <p class="text-muted mt-2">No private conversations</p>

                                </div>
                                <div class="hidden list-group" data-region="content-container">
                                    
                                </div>
                                <div class="list-group" data-region="placeholder-container">
                                            <div class="text-center py-2"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</div>

                                </div>
                                <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
                                    <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
                                </div>
                            </div>
                            </div>
                    </div>
                </div>
                
                <div
                    data-region="view-search"
                    aria-hidden="true"
                    class="h-100 hidden"
                    data-user-id="105144"
                    data-users-offset="0"
                    data-messages-offset="0"
                    style="overflow-y: auto"
                    
                >
                    <div class="hidden" data-region="search-results-container" style="overflow-y: auto">
                        
                        <div class="d-flex flex-column">
                            <div class="mb-3 bg-white" data-region="all-contacts-container">
                                <div data-region="contacts-container"  class="pt-2">
                                    <h4 class="h6 px-2">Contacts</h4>
                                    <div class="list-group" data-region="list"></div>
                                </div>
                                <div data-region="non-contacts-container" class="pt-2 border-top">
                                    <h4 class="h6 px-2">Non-contacts</h4>
                                    <div class="list-group" data-region="list"></div>
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-link text-primary" data-action="load-more-users">
                                        <span data-region="button-text">Load more</span>
                                        <span data-region="loading-icon-container" class="hidden"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                                    </button>
                                </div>
                            </div>
                            <div class="bg-white" data-region="messages-container">
                                <h4 class="h6 px-2 pt-2">Messages</h4>
                                <div class="list-group" data-region="list"></div>
                                <div class="text-right">
                                    <button class="btn btn-link text-primary" data-action="load-more-messages">
                                        <span data-region="button-text">Load more</span>
                                        <span data-region="loading-icon-container" class="hidden"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                                    </button>
                                </div>
                            </div>
                            <p class="hidden p-3 text-center" data-region="no-results-container">No results</p>
                        </div>                    </div>
                    <div class="hidden" data-region="loading-placeholder">
                        <div class="text-center pt-3 icon-size-4"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</div>
                    </div>
                    <div class="p-3 text-center" data-region="empty-message-container">
                        <p>Search people and messages</p>
                    </div>
                </div>                
                <div class="h-100 hidden bg-white" aria-hidden="true" data-region="view-settings">
                    <div class="hidden" data-region="content-container">
                        
                        <div data-region="settings" class="p-3">
                            <h3 class="h6 font-weight-bold">Privacy</h3>
                            <p>You can restrict who can message you</p>
                            <div data-preference="blocknoncontacts" class="mb-3">
                                <fieldset>
                                    <legend class="sr-only">Accept messages from:</legend>
                                        <div class="custom-control custom-radio mb-2">
                                            <input
                                                type="radio"
                                                name="message_blocknoncontacts"
                                                class="custom-control-input"
                                                id="block-noncontacts-618bae8ab7df0618bae8ab041013-1"
                                                value="1"
                                            >
                                            <label class="custom-control-label ml-2" for="block-noncontacts-618bae8ab7df0618bae8ab041013-1">
                                                My contacts only
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio mb-2">
                                            <input
                                                type="radio"
                                                name="message_blocknoncontacts"
                                                class="custom-control-input"
                                                id="block-noncontacts-618bae8ab7df0618bae8ab041013-0"
                                                value="0"
                                            >
                                            <label class="custom-control-label ml-2" for="block-noncontacts-618bae8ab7df0618bae8ab041013-0">
                                                My contacts and anyone in my modules
                                            </label>
                                        </div>
                                </fieldset>
                            </div>
                        
                            <div class="hidden" data-region="notification-preference-container">
                                <h3 class="mb-2 mt-4 h6 font-weight-bold">Notification preferences</h3>
                            </div>
                        
                            <h3 class="mb-2 mt-4 h6 font-weight-bold">General</h3>
                            <div data-preference="entertosend">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="enter-to-send-618bae8ab7df0618bae8ab041013" >
                                    <label class="custom-control-label" for="enter-to-send-618bae8ab7df0618bae8ab041013">
                                        Use enter to send
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-region="placeholder-container">
                        
                        <div class="d-flex flex-column p-3">
                            <div class="w-25 bg-pulse-grey h6" style="height: 18px"></div>
                            <div class="w-75 bg-pulse-grey mb-4" style="height: 18px"></div>
                            <div class="mb-3">
                                <div class="w-100 d-flex mb-3">
                                    <div class="bg-pulse-grey rounded-circle" style="width: 18px; height: 18px"></div>
                                    <div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
                                </div>
                                <div class="w-100 d-flex mb-3">
                                    <div class="bg-pulse-grey rounded-circle" style="width: 18px; height: 18px"></div>
                                    <div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
                                </div>
                                <div class="w-100 d-flex mb-3">
                                    <div class="bg-pulse-grey rounded-circle" style="width: 18px; height: 18px"></div>
                                    <div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
                                </div>
                            </div>
                            <div class="w-50 bg-pulse-grey h6 mb-3 mt-2" style="height: 18px"></div>
                            <div class="mb-4">
                                <div class="w-100 d-flex mb-2 align-items-center">
                                    <div class="bg-pulse-grey w-25" style="width: 18px; height: 27px"></div>
                                    <div class="bg-pulse-grey w-25 ml-2" style="height: 18px"></div>
                                </div>
                                <div class="w-100 d-flex mb-2 align-items-center">
                                    <div class="bg-pulse-grey w-25" style="width: 18px; height: 27px"></div>
                                    <div class="bg-pulse-grey w-25 ml-2" style="height: 18px"></div>
                                </div>
                            </div>
                            <div class="w-25 bg-pulse-grey h6 mb-3 mt-2" style="height: 18px"></div>
                            <div class="mb-3">
                                <div class="w-100 d-flex mb-2 align-items-center">
                                    <div class="bg-pulse-grey w-25" style="width: 18px; height: 27px"></div>
                                    <div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
                                </div>
                            </div>
                        </div>                    </div>
                </div>            </div>
            <div class="footer-container position-relative" data-region="footer-container">
                
                <div
                    class="hidden border-top bg-white position-relative"
                    aria-hidden="true"
                    data-region="view-conversation"
                    data-enter-to-send="0"
                >
                    <div class="hidden p-sm-2" data-region="content-messages-footer-container">
                        
                            <div
                                class="emoji-auto-complete-container w-100 hidden"
                                data-region="emoji-auto-complete-container"
                                aria-live="polite"
                                aria-hidden="true"
                            >
                            </div>
                        <div class="d-flex mt-sm-1">
                            <textarea
                                dir="auto"
                                data-region="send-message-txt"
                                class="form-control bg-light"
                                rows="3"
                                data-auto-rows
                                data-min-rows="3"
                                data-max-rows="5"
                                aria-label="Write a message..."
                                placeholder="Write a message..."
                                style="resize: none"
                                maxlength="4096"
                            ></textarea>
                        
                            <div class="position-relative d-flex flex-column">
                                    <div
                                        data-region="emoji-picker-container"
                                        class="emoji-picker-container hidden"
                                        aria-hidden="true"
                                    >
                                        
                                        <div
                                            data-region="emoji-picker"
                                            class="card shadow emoji-picker"
                                        >
                                            <div class="card-header px-1 pt-1 pb-0 d-flex justify-content-between flex-shrink-0">
                                                <button
                                                    class="btn btn-outline-secondary icon-no-margin category-button selected"
                                                    data-action="show-category"
                                                    data-category="Recent"
                                                    title="Recent"
                                                >
                                                    <i class="icon fa fa-clock-o fa-fw " aria-hidden="true"  ></i>
                                                </button>
                                                <button
                                                    class="btn btn-outline-secondary icon-no-margin category-button"
                                                    data-action="show-category"
                                                    data-category="Smileys & People"
                                                    title="Smileys & people"
                                                >
                                                    <i class="icon fa fa-smile-o fa-fw " aria-hidden="true"  ></i>
                                                </button>
                                                <button
                                                    class="btn btn-outline-secondary icon-no-margin category-button"
                                                    data-action="show-category"
                                                    data-category="Animals & Nature"
                                                    title="Animals & nature"
                                                >
                                                    <i class="icon fa fa-leaf fa-fw " aria-hidden="true"  ></i>
                                                </button>
                                                <button
                                                    class="btn btn-outline-secondary icon-no-margin category-button"
                                                    data-action="show-category"
                                                    data-category="Food & Drink"
                                                    title="Food & drink"
                                                >
                                                    <i class="icon fa fa-cutlery fa-fw " aria-hidden="true"  ></i>
                                                </button>
                                                <button
                                                    class="btn btn-outline-secondary icon-no-margin category-button"
                                                    data-action="show-category"
                                                    data-category="Travel & Places"
                                                    title="Travel & places"
                                                >
                                                    <i class="icon fa fa-plane fa-fw " aria-hidden="true"  ></i>
                                                </button>
                                                <button
                                                    class="btn btn-outline-secondary icon-no-margin category-button"
                                                    data-action="show-category"
                                                    data-category="Activities"
                                                    title="Activities"
                                                >
                                                    <i class="icon fa fa-futbol-o fa-fw " aria-hidden="true"  ></i>
                                                </button>
                                                <button
                                                    class="btn btn-outline-secondary icon-no-margin category-button"
                                                    data-action="show-category"
                                                    data-category="Objects"
                                                    title="Objects"
                                                >
                                                    <i class="icon fa fa-lightbulb-o fa-fw " aria-hidden="true"  ></i>
                                                </button>
                                                <button
                                                    class="btn btn-outline-secondary icon-no-margin category-button"
                                                    data-action="show-category"
                                                    data-category="Symbols"
                                                    title="Symbols"
                                                >
                                                    <i class="icon fa fa-heart fa-fw " aria-hidden="true"  ></i>
                                                </button>
                                                <button
                                                    class="btn btn-outline-secondary icon-no-margin category-button"
                                                    data-action="show-category"
                                                    data-category="Flags"
                                                    title="Flags"
                                                >
                                                    <i class="icon fa fa-flag fa-fw " aria-hidden="true"  ></i>
                                                </button>
                                            </div>
                                            <div class="card-body p-2 d-flex flex-column overflow-hidden">
                                                <div class="input-group mb-1 flex-shrink-0">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text pr-0 bg-white text-muted">
                                                            <i class="icon fa fa-search fa-fw " aria-hidden="true"  ></i>
                                                        </span>
                                                    </div>
                                                    <input
                                                        type="text"
                                                        class="form-control border-left-0"
                                                        placeholder="Search"
                                                        aria-label="Search"
                                                        data-region="search-input"
                                                    >
                                                </div>
                                                <div class="flex-grow-1 overflow-auto emojis-container h-100" data-region="emojis-container">
                                                    <div class="position-relative" data-region="row-container"></div>
                                                </div>
                                                <div class="flex-grow-1 overflow-auto search-results-container h-100 hidden" data-region="search-results-container">
                                                    <div class="position-relative" data-region="row-container"></div>
                                                </div>
                                            </div>
                                            <div
                                                class="card-footer d-flex flex-shrink-0"
                                                data-region="footer"
                                            >
                                                <div class="emoji-preview" data-region="emoji-preview"></div>
                                                <div data-region="emoji-short-name" class="emoji-short-name text-muted text-wrap ml-2"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <button
                                        class="btn btn-link btn-icon icon-size-3 ml-1"
                                        aria-label="Toggle emoji picker"
                                        data-action="toggle-emoji-picker"
                                    >
                                        <i class="icon fa fa-smile-o fa-fw " aria-hidden="true"  ></i>
                                    </button>
                                <button
                                    class="btn btn-link btn-icon icon-size-3 ml-1 mt-auto"
                                    aria-label="Send message"
                                    data-action="send-message"
                                >
                                    <span data-region="send-icon-container"><i class="icon fa fa-paper-plane fa-fw " aria-hidden="true"  ></i></span>
                                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="hidden p-sm-2" data-region="content-messages-footer-edit-mode-container">
                        
                        <div class="d-flex p-3 justify-content-end">
                            <button
                                class="btn btn-link btn-icon my-1 icon-size-4"
                                data-action="delete-selected-messages"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Delete selected messages"
                            >
                                <span data-region="icon-container"><i class="icon fa fa-trash fa-fw " aria-hidden="true"  ></i></span>
                                <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                                <span class="sr-only">Delete selected messages</span>
                            </button>
                        </div>                    </div>
                    <div class="hidden bg-secondary p-sm-3" data-region="content-messages-footer-require-contact-container">
                        
                        <div class="p-3 bg-white">
                            <p data-region="title"></p>
                            <p class="text-muted" data-region="text"></p>
                            <button type="button" class="btn btn-primary btn-block" data-action="request-add-contact">
                                <span data-region="dialogue-button-text">Send contact request</span>
                                <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                            </button>
                        </div>
                    </div>
                    <div class="hidden bg-secondary p-sm-3" data-region="content-messages-footer-require-unblock-container">
                        
                        <div class="p-3 bg-white">
                            <p class="text-muted" data-region="text">You have blocked this user.</p>
                            <button type="button" class="btn btn-primary btn-block" data-action="request-unblock">
                                <span data-region="dialogue-button-text">Unblock user</span>
                                <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                            </button>
                        </div>
                    </div>
                    <div class="hidden bg-secondary p-sm-3" data-region="content-messages-footer-unable-to-message">
                        
                        <div class="p-3 bg-white">
                            <p class="text-muted" data-region="text">You are unable to message this user</p>
                        </div>
                    </div>
                    <div class="p-sm-2" data-region="placeholder-container">
                        <div class="d-flex">
                            <div class="bg-pulse-grey w-100" style="height: 80px"></div>
                            <div class="mx-2 mb-2 align-self-end bg-pulse-grey" style="height: 20px; width: 20px"></div>
                        </div>                    </div>
                    <div
                        class="hidden position-absolute z-index-1"
                        data-region="confirm-dialogue-container"
                        style="top: -1px; bottom: 0; right: 0; left: 0; background: rgba(0,0,0,0.3);"
                    ></div>
                </div>                    <div data-region="view-overview" class="text-center">
                        <a href="https://moodle.wit.ie/message/index.php">
                            See all
                        </a>
                    </div>
            </div>
        </div>

</div>
    <div id="nav-drawer" data-region="drawer" class="d-print-none moodle-has-zindex " aria-hidden="false" tabindex="-1">
        <nav class="list-group">
            <a class="list-group-item list-group-item-action  " href="https://moodle.wit.ie/course/view.php?id=182858" data-key="coursehome" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="60" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" >
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Distributed Systems I-89894-[2021-2022]</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action  " href="https://moodle.wit.ie/grade/report/index.php?id=182858" data-key="grades" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="70" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="182858">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-table fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Grades</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action  " href="https://moodle.wit.ie/course/view.php?id=182858&amp;section=1" data-key="5123285" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="30" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="182858">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-folder-o fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Suggested Readings</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action  " href="https://moodle.wit.ie/course/view.php?id=182858&amp;section=2" data-key="5123287" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="30" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="182858">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-folder-o fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">List of Topics Covered</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action  " href="https://moodle.wit.ie/course/view.php?id=182858&amp;section=3" data-key="5123283" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="30" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="182858">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-folder-o fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Introduction and Key Concepts</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action  " href="https://moodle.wit.ie/course/view.php?id=182858&amp;section=4" data-key="5123286" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="30" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="182858">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-folder-o fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Project Selection-SDLC</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action  " href="https://moodle.wit.ie/course/view.php?id=182858&amp;section=5" data-key="5123288" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="30" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="182858">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-folder-o fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">API Design and Related Concepts</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action active " href="https://moodle.wit.ie/course/view.php?id=182858&amp;section=6" data-key="5123292" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="30" data-nodetype="1" data-collapse="0" data-forceopen="1" data-isactive="1" data-hidden="0" data-preceedwithhr="0" data-parent-key="182858">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-folder-o fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body font-weight-bold">Multiprocessing-Multithreading-Parallel Computing, Flask and Productionization</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action  " href="https://moodle.wit.ie/course/view.php?id=182858&amp;section=7" data-key="5123284" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="30" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="182858">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-folder-o fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Labs-Assignments 2021</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action  " href="https://moodle.wit.ie/course/view.php?id=182858&amp;section=8" data-key="5123291" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="30" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="182858">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-folder-o fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Distributed System Project -Live Streaming Service-Design</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action  " href="https://moodle.wit.ie/course/view.php?id=182858&amp;section=9" data-key="5123289" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="30" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="182858">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-folder-o fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Assignment Solution</span>
                    </div>
                </div>
            </a>
        </nav>
        <nav class="list-group m-t-1">
            <a class="list-group-item list-group-item-action  " href="https://moodle.wit.ie/my/" data-key="myhome" data-isexpandable="0" data-indent="0" data-showdivider="1" data-type="1" data-nodetype="1" data-collapse="0" data-forceopen="1" data-isactive="0" data-hidden="0" data-preceedwithhr="0" >
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-tachometer fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">My Home</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action  " href="https://moodle.wit.ie/?redirect=0" data-key="home" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="70" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="myhome">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-home fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Site news</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action  " href="https://moodle.wit.ie/calendar/view.php?view=month&amp;course=182858" data-key="calendar" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="60" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="1">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-calendar fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Calendar</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action  " href="https://moodle.wit.ie/user/files.php" data-key="privatefiles" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="70" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="1">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-file-o fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Private files</span>
                    </div>
                </div>
            </a>
            <div class="list-group-item" data-key="mycourses" data-isexpandable="1" data-indent="0" data-showdivider="0" data-type="0" data-nodetype="1" data-collapse="0" data-forceopen="1" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="myhome">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body">My modules</span>
                    </div>
                </div>
            </div>
            <a class="list-group-item list-group-item-action  " href="https://moodle.wit.ie/course/view.php?id=184699" data-key="184699" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                <div class="m-l-1">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Final Year Projects for Computing and Maths Dept-[2021-2022]</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action  " href="https://moodle.wit.ie/course/view.php?id=183219" data-key="183219" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                <div class="m-l-1">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Network and System Security-94072-[2021-2022]</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action  " href="https://moodle.wit.ie/course/view.php?id=183218" data-key="183218" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                <div class="m-l-1">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Mobile Game Development-94067-[2021-2022]</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action  " href="https://moodle.wit.ie/course/view.php?id=183026" data-key="183026" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                <div class="m-l-1">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Mobile App Development 1-91735-[2021-2022]</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action  " href="https://moodle.wit.ie/course/view.php?id=182956" data-key="182956" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                <div class="m-l-1">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Cloud Computing 1-91481-[2021-2022]</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action  " href="https://moodle.wit.ie/course/view.php?id=182859" data-key="182859" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                <div class="m-l-1">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Data Mining I-89898-[2021-2022]</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action  " href="https://moodle.wit.ie/course/view.php?id=182858" data-key="182858" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="1" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                <div class="m-l-1">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Distributed Systems I-89894-[2021-2022]</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action  " href="https://moodle.wit.ie/course/view.php?id=183082" data-key="183082" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                <div class="m-l-1">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Project 1 (Development)-92001-[2021-2022]</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action  " href="https://moodle.wit.ie/course/view.php?id=185404" data-key="185404" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                <div class="m-l-1">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">20-21 Flexible Semester</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action  " href="https://moodle.wit.ie/course/view.php?id=101567" data-key="101567" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                <div class="m-l-1">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Study Abroad</span>
                    </div>
                </div>
            </a>
        </nav>
    </div>
    <div id="goto-top-link">
        <a class="btn btn-light" role="button" href="#" aria-label="Go to top">
            <i class="icon fa fa-arrow-up fa-fw " aria-hidden="true"  ></i>
        </a>
    </div>
    <footer id="page-footer" class="py-3 bg-dark text-light">
        <div class="container">
            <div id="course-footer"></div>
    
    
            <div class="logininfo">You are logged in as <a href="https://moodle.wit.ie/user/profile.php?id=105144" title="View profile">Dimitri Saridakis</a> (<a href="https://moodle.wit.ie/login/logout.php?sesskey=zIwEUP5IRf">Log out</a>)</div>
            <div class="tool_usertours-resettourcontainer"></div>
            <div class="homelink"><a href="https://moodle.wit.ie/course/view.php?id=182858">Distributed Systems I-89894-[2021-2022]</a></div>
            <nav class="nav navbar-nav d-md-none" aria-label="Custom menu">
                    <ul class="list-unstyled pt-3">
                    </ul>
            </nav>
            <a href="https://download.moodle.org/mobile?version=2020061510&amp;lang=en&amp;iosappid=633359593&amp;androidappid=com.moodle.moodlemobile">Get the mobile app</a>
            <script>
//<![CDATA[
var require = {
    baseUrl : 'https://moodle.wit.ie/lib/requirejs.php/1633429171/',
    // We only support AMD modules with an explicit define() statement.
    enforceDefine: true,
    skipDataMain: true,
    waitSeconds : 0,

    paths: {
        jquery: 'https://moodle.wit.ie/lib/javascript.php/1633429171/lib/jquery/jquery-3.5.1.min',
        jqueryui: 'https://moodle.wit.ie/lib/javascript.php/1633429171/lib/jquery/ui-1.12.1/jquery-ui.min',
        jqueryprivate: 'https://moodle.wit.ie/lib/javascript.php/1633429171/lib/requirejs/jquery-private'
    },

    // Custom jquery config map.
    map: {
      // '*' means all modules will get 'jqueryprivate'
      // for their 'jquery' dependency.
      '*': { jquery: 'jqueryprivate' },
      // Stub module for 'process'. This is a workaround for a bug in MathJax (see MDL-60458).
      '*': { process: 'core/first' },

      // 'jquery-private' wants the real jQuery module
      // though. If this line was not here, there would
      // be an unresolvable cyclic dependency.
      jqueryprivate: { jquery: 'jquery' }
    }
};

//]]>
</script>
<script src="https://moodle.wit.ie/lib/javascript.php/1633429171/lib/requirejs/require.min.js"></script>
<script>
//<![CDATA[
M.util.js_pending("core/first");require(['core/first'], function() {
require(['core/prefetch']);
;
require(["media_videojs/loader"], function(loader) {
    loader.setUp(function(videojs) {
        videojs.options.flash.swf = "https://moodle.wit.ie/media/player/videojs/videojs/video-js.swf";
videojs.addLanguage('en', {
  "Audio Player": "Audio Player",
  "Video Player": "Video Player",
  "Play": "Play",
  "Pause": "Pause",
  "Replay": "Replay",
  "Current Time": "Current Time",
  "Duration": "Duration",
  "Remaining Time": "Remaining Time",
  "Stream Type": "Stream Type",
  "LIVE": "LIVE",
  "Seek to live, currently behind live": "Seek to live, currently behind live",
  "Seek to live, currently playing live": "Seek to live, currently playing live",
  "Loaded": "Loaded",
  "Progress": "Progress",
  "Progress Bar": "Progress Bar",
  "progress bar timing: currentTime={1} duration={2}": "{1} of {2}",
  "Fullscreen": "Fullscreen",
  "Non-Fullscreen": "Non-Fullscreen",
  "Mute": "Mute",
  "Unmute": "Unmute",
  "Playback Rate": "Playback Rate",
  "Subtitles": "Subtitles",
  "subtitles off": "subtitles off",
  "Captions": "Captions",
  "captions off": "captions off",
  "Chapters": "Chapters",
  "Descriptions": "Descriptions",
  "descriptions off": "descriptions off",
  "Audio Track": "Audio Track",
  "Volume Level": "Volume Level",
  "You aborted the media playback": "You aborted the media playback",
  "A network error caused the media download to fail part-way.": "A network error caused the media download to fail part-way.",
  "The media could not be loaded, either because the server or network failed or because the format is not supported.": "The media could not be loaded, either because the server or network failed or because the format is not supported.",
  "The media playback was aborted due to a corruption problem or because the media used features your browser did not support.": "The media playback was aborted due to a corruption problem or because the media used features your browser did not support.",
  "No compatible source was found for this media.": "No compatible source was found for this media.",
  "The media is encrypted and we do not have the keys to decrypt it.": "The media is encrypted and we do not have the keys to decrypt it.",
  "Play Video": "Play Video",
  "Close": "Close",
  "Close Modal Dialog": "Close Modal Dialog",
  "Modal Window": "Modal Window",
  "This is a modal window": "This is a modal window",
  "This modal can be closed by pressing the Escape key or activating the close button.": "This modal can be closed by pressing the Escape key or activating the close button.",
  ", opens captions settings dialog": ", opens captions settings dialog",
  ", opens subtitles settings dialog": ", opens subtitles settings dialog",
  ", opens descriptions settings dialog": ", opens descriptions settings dialog",
  ", selected": ", selected",
  "captions settings": "captions settings",
  "subtitles settings": "subtitles settings",
  "descriptions settings": "descriptions settings",
  "Text": "Text",
  "White": "White",
  "Black": "Black",
  "Red": "Red",
  "Green": "Green",
  "Blue": "Blue",
  "Yellow": "Yellow",
  "Magenta": "Magenta",
  "Cyan": "Cyan",
  "Background": "Background",
  "Window": "Window",
  "Transparent": "Transparent",
  "Semi-Transparent": "Semi-Transparent",
  "Opaque": "Opaque",
  "Font Size": "Font Size",
  "Text Edge Style": "Text Edge Style",
  "None": "None",
  "Raised": "Raised",
  "Depressed": "Depressed",
  "Uniform": "Uniform",
  "Dropshadow": "Dropshadow",
  "Font Family": "Font Family",
  "Proportional Sans-Serif": "Proportional Sans-Serif",
  "Monospace Sans-Serif": "Monospace Sans-Serif",
  "Proportional Serif": "Proportional Serif",
  "Monospace Serif": "Monospace Serif",
  "Casual": "Casual",
  "Script": "Script",
  "Small Caps": "Small Caps",
  "Reset": "Reset",
  "restore all settings to the default values": "restore all settings to the default values",
  "Done": "Done",
  "Caption Settings Dialog": "Caption Settings Dialog",
  "Beginning of dialog window. Escape will cancel and close the window.": "Beginning of dialog window. Escape will cancel and close the window.",
  "End of dialog window.": "End of dialog window.",
  "{1} is loading.": "{1} is loading.",
  "Exit Picture-in-Picture": "Exit Picture-in-Picture",
  "Picture-in-Picture": "Picture-in-Picture"
});

    });
});;
function legacy_activity_onclick_handler_1(e) { e.halt(); window.open('https://moodle.wit.ie/mod/resource/view.php?id=3613324&redirect=1'); return false; };
function legacy_activity_onclick_handler_2(e) { e.halt(); window.open('https://moodle.wit.ie/mod/resource/view.php?id=3619096&redirect=1'); return false; };
function legacy_activity_onclick_handler_3(e) { e.halt(); window.open('https://moodle.wit.ie/mod/resource/view.php?id=3619097&redirect=1'); return false; };
function legacy_activity_onclick_handler_4(e) { e.halt(); window.open('https://moodle.wit.ie/mod/resource/view.php?id=3619098&redirect=1'); return false; };
function legacy_activity_onclick_handler_5(e) { e.halt(); window.open('https://moodle.wit.ie/mod/resource/view.php?id=3619102&redirect=1'); return false; };

require(['jquery', 'message_popup/notification_popover_controller'], function($, controller) {
    var container = $('#nav-notification-popover-container');
    var controller = new controller(container);
    controller.registerEventListeners();
    controller.registerListNavigationEventListeners();
});
;

require(
[
    'jquery',
    'core_message/message_popover'
],
function(
    $,
    Popover
) {
    var toggle = $('#message-drawer-toggle-618bae8ab408e618bae8ab04103');
    Popover.init(toggle);
});
;

        require(['jquery', 'core/custom_interaction_events'], function($, CustomEvents) {
            CustomEvents.define('#jump-to-activity', [CustomEvents.events.accessibleChange]);
            $('#jump-to-activity').on(CustomEvents.events.accessibleChange, function() {
                if (!$(this).val()) {
                    return false;
                }
                $('#url_select_f618bae8ab041012').submit();
            });
        });
    ;

require(['jquery', 'core_message/message_drawer'], function($, MessageDrawer) {
    var root = $('#message-drawer-618bae8ab7df0618bae8ab041013');
    MessageDrawer.init(root, '618bae8ab7df0618bae8ab041013', false);
});
;

require(['theme_boost/loader']);
require(['theme_boost/drawer'], function(mod) {
    mod.init();
});
;
M.util.js_pending('filter_oembed/oembed'); require(['filter_oembed/oembed'], function(amd) {amd.init(); M.util.js_complete('filter_oembed/oembed');});;
M.util.js_pending('core/notification'); require(['core/notification'], function(amd) {amd.init(5963732, [], true); M.util.js_complete('core/notification');});;
M.util.js_pending('core/log'); require(['core/log'], function(amd) {amd.setConfig({"level":"warn"}); M.util.js_complete('core/log');});;
M.util.js_pending('core/page_global'); require(['core/page_global'], function(amd) {amd.init(); M.util.js_complete('core/page_global');});M.util.js_complete("core/first");
});
//]]>
</script>
<script>
//<![CDATA[
M.str = {"moodle":{"lastmodified":"Last modified","name":"Name","error":"Error","info":"Information","yes":"Yes","no":"No","ok":"OK","cancel":"Cancel","confirm":"Confirm","areyousure":"Are you sure?","closebuttontitle":"Close","unknownerror":"Unknown error","file":"File","url":"URL"},"repository":{"type":"Type","size":"Size","invalidjson":"Invalid JSON string","nofilesattached":"No files attached","filepicker":"File picker","logout":"Logout","nofilesavailable":"No files available","norepositoriesavailable":"Sorry, none of your current repositories can return files in the required format.","fileexistsdialogheader":"File exists","fileexistsdialog_editor":"A file with that name has already been attached to the text you are editing.","fileexistsdialog_filemanager":"A file with that name has already been attached","renameto":"Rename to \"{$a}\"","referencesexist":"There are {$a} links to this file","select":"Select"},"admin":{"confirmdeletecomments":"You are about to delete comments, are you sure?","confirmation":"Confirmation"},"debug":{"debuginfo":"Debug info","line":"Line","stacktrace":"Stack trace"},"langconfig":{"labelsep":": "}};
//]]>
</script>
<script>
//<![CDATA[
(function() {Y.use("moodle-filter_glossary-autolinker",function() {M.filter_glossary.init_filter_autolinking({"courseid":0});
});
Y.use("moodle-filter_mathjaxloader-loader",function() {M.filter_mathjaxloader.configure({"mathjaxconfig":"\nMathJax.Hub.Config({\n    config: [\"Accessible.js\", \"Safe.js\"],\n    errorSettings: { message: [\"!\"] },\n    skipStartupTypeset: true,\n    messageStyle: \"none\"\n});\n","lang":"en"});
});
M.util.help_popups.setup(Y);
 M.util.js_pending('random618bae8ab041014'); Y.on('domready', function() { M.util.js_complete("init");  M.util.js_complete('random618bae8ab041014'); });
})();
//]]>
</script>

        </div>
    </footer>
</div>



</body>
</html>