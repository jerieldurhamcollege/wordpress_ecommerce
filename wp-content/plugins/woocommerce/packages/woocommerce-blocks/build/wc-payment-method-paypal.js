!function(e){var t={};function n(o){if(t[o])return t[o].exports;var r=t[o]={i:o,l:!1,exports:{}};return e[o].call(r.exports,r,r.exports,n),r.l=!0,r.exports}n.m=e,n.c=t,n.d=function(e,t,o){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:o})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var o=Object.create(null);if(n.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)n.d(o,r,function(t){return e[t]}.bind(null,r));return o},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=12)}([function(e,t){e.exports=window.wp.element},function(e,t){e.exports=window.wp.i18n},function(e,t){e.exports=window.wc.wcSettings},,function(e,t){e.exports=window.wp.htmlEntities},function(e,t){e.exports=window.wc.wcBlocksRegistry},,,,,,,function(e,t,n){"use strict";n.r(t);var o,r=n(0),c=n(5),i=n(1),u=n(2),a=n(4);const l=Object(u.getSetting)("paypal_data",{}),p=()=>Object(a.decodeEntities)(l.description||""),s={name:"paypal",label:Object(r.createElement)("img",{src:u.WC_ASSET_URL+"/images/paypal.png",alt:Object(a.decodeEntities)(l.title||Object(i.__)("PayPal",'woocommerce'))}),placeOrderButtonLabel:Object(i.__)("Proceed to PayPal",'woocommerce'),content:Object(r.createElement)(p,null),edit:Object(r.createElement)(p,null),canMakePayment:()=>!0,ariaLabel:Object(a.decodeEntities)(l.title||Object(i.__)("Payment via PayPal",'woocommerce')),supports:{features:null!==(o=l.supports)&&void 0!==o?o:[]}};Object(c.registerPaymentMethod)(s)}]);