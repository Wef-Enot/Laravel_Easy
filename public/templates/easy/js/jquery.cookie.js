/*!
 * jQuery Cookie Plugin v1.4.1
 * Copyright 2013 Klaus Hartl
 * Released under the MIT license
 */
(function(d){"function"===typeof define&&define.amd?define(["jquery"],d):"object"===typeof exports?d(require("jquery")):d(jQuery)})(function(d){function l(b,c){if(f.raw)var a=b;else a:{var e=b;0===e.indexOf('"')&&(e=e.slice(1,-1).replace(/\\"/g,'"').replace(/\\\\/g,"\\"));try{e=decodeURIComponent(e.replace(m," "));a=f.json?JSON.parse(e):e;break a}catch(g){}a=void 0}return d.isFunction(c)?c(a):a}var m=/\+/g,f=d.cookie=function(b,c,a){if(void 0!==c&&!d.isFunction(c)){a=d.extend({},f.defaults,a);if("number"===
typeof a.expires){var e=a.expires,g=a.expires=new Date;g.setTime(+g+864E5*e)}b=f.raw?b:encodeURIComponent(b);c=f.json?JSON.stringify(c):String(c);c=f.raw?c:encodeURIComponent(c);return document.cookie=[b,"=",c,a.expires?"; expires="+a.expires.toUTCString():"",a.path?"; path="+a.path:"",a.domain?"; domain="+a.domain:"",a.secure?"; secure":""].join("")}a=b?void 0:{};e=document.cookie?document.cookie.split("; "):[];g=0;for(var n=e.length;g<n;g++){var h=e[g].split("=");var k=h.shift();k=f.raw?k:decodeURIComponent(k);
h=h.join("=");if(b&&b===k){a=l(h,c);break}b||void 0===(h=l(h))||(a[k]=h)}return a};f.defaults={};d.removeCookie=function(b,c){if(void 0===d.cookie(b))return!1;d.cookie(b,"",d.extend({},c,{expires:-1}));return!d.cookie(b)}});
