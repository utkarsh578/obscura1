/*
Co-maintained by BS Systems - CSSBS "http://www.cssbs.altervista.org" - Ver 1.2 (Last update 29 Aug 2012)
Originally written by Rafael Lima (http://rafael.adm.br)
License: http://creativecommons.org/licenses/by/2.5/
*/
function css_browser_selector(u){ua=u.toLowerCase(),is=function(t){return RegExp(t,"i").test(ua)},version=function(p,n){n=n.replace(".","_");var i=n.indexOf('_'),ver="";while(i>0){ver+=" "+p+n.substring(0,i);i=n.indexOf('_',i+1)}ver+=" "+p+n;return ver},f='ff',g='gecko',s='safari',o='opera',w='webkit',c='chrome',m='mobile',a='android',bb='blackberry',html=document.documentElement,b=[(!(/opera|webtv/i.test(ua))&&/msie\s(\d)/.test(ua))?('ie ie'+RegExp.$1):is('firefox')?g+' '+(/version\/(\d+)/.test(ua)?' '+f+RegExp.$1:(/firefox(\s|\/)(\d+)/.test(ua)?' '+f+RegExp.$2:'')):is('gecko/')?g:is('opera')?o+(/version\/(\d+)/.test(ua)?' '+o+RegExp.$1:(/opera(\s|\/)(\d+)/.test(ua)?' '+o+RegExp.$2:'')):is('konqueror')?'konqueror':is('blackberry')?m+' blackberry':is('android')?m+' android':is('chrome')?w+' '+c+(/chrome\/(\d+)/.test(ua)?' '+c+RegExp.$1:(/chrome(\s|\/)(\d+)/.test(ua)?' '+c+RegExp.$2:'')):is('iron')?w+' iron':is('applewebkit/')?w+' '+s+(/version\/(\d+)/.test(ua)?' '+s+RegExp.$1:''):is('mozilla/')?g:'',is('j2me')?m+' j2me':is('iphone')?m+' iphone':is('ipod')?m+' ipod':is('ipad')?m+' ipad':is('mac')?'mac':is('darwin')?'mac':is('webtv')?'webtv':is('win')?'win'+(is('windows nt 6.0')?' vista':'')+(is('windows nt 6.1')?' win7':'')+(is('windows nt 6.2')?' win8':''):is('freebsd')?'freebsd':(is('x11')||is('linux'))?'linux':''];var xbs=(b.join(' '));html.className=(xbs+html.className.replace(/\b/g,"")).replace(/^ /,"").replace(/ +/g," ");return xbs}css_browser_selector(navigator.userAgent);