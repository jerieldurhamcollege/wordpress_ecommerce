this.wc=this.wc||{},this.wc.wcBlocksMiddleware=function(e){var t={};function o(n){if(t[n])return t[n].exports;var r=t[n]={i:n,l:!1,exports:{}};return e[n].call(r.exports,r,r.exports,o),r.l=!0,r.exports}return o.m=e,o.c=t,o.d=function(e,t,n){o.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},o.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},o.t=function(e,t){if(1&t&&(e=o(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(o.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)o.d(n,r,function(t){return e[t]}.bind(null,r));return n},o.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(t,"a",t),t},o.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},o.p="",o(o.s=143)}({12:function(e,t){e.exports=window.wp.apiFetch},143:function(e,t,o){"use strict";o.r(t);var n=o(12),r=o.n(n);let i="",c=0;try{const e=window.localStorage.getItem("storeApiNonce"),t=e?JSON.parse(e):{};i=(null==t?void 0:t.nonce)||"",c=(null==t?void 0:t.timestamp)||0}catch{}const u=(e,t)=>{e!==i&&(c&&t<c||(i=e,c=t||Date.now()/1e3,window.localStorage.setItem("storeApiNonce",JSON.stringify({nonce:i,timestamp:c}))))},a=e=>{const t=e.headers||{};return e.headers={...t,"X-WC-Store-API-Nonce":i},e};r.a.use((e,t)=>{var o,n;return(e=>{const t=e.url||e.path;return!(!t||!e.method||"GET"===e.method)&&null!==/wc\/store\/v1\//.exec(t)})(e)&&(e=a(e),Array.isArray(null===(o=e)||void 0===o||null===(n=o.data)||void 0===n?void 0:n.requests)&&(e.data.requests=e.data.requests.map(a))),t(e,t)}),r.a.setNonce=e=>{const t="function"==typeof(null==e?void 0:e.get)?e.get("X-WC-Store-API-Nonce"):e["X-WC-Store-API-Nonce"],o="function"==typeof(null==e?void 0:e.get)?e.get("X-WC-Store-API-Nonce-Timestamp"):e["X-WC-Store-API-Nonce-Timestamp"];t&&u(t,o)},u(wcBlocksMiddlewareConfig.storeApiNonce,wcBlocksMiddlewareConfig.storeApiNonceTimestamp)}});