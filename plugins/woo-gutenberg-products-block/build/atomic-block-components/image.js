(window.webpackWcBlocksJsonp=window.webpackWcBlocksJsonp||[]).push([[11],{260:function(e,t,a){"use strict";t.a={showProductLink:{type:"boolean",default:!0},showSaleBadge:{type:"boolean",default:!0},saleBadgeAlign:{type:"string",default:"right"},imageSizing:{type:"string",default:"full-size"},productId:{type:"number",default:0}}},261:function(e,t,a){"use strict";var c=a(5),l=a.n(c),n=a(0),o=(a(10),a(1)),s=a(4),r=a.n(s),i=a(2),d=a(28),u=a(59),m=a(51),b=a(205),g=(a(319),a(41));const p=()=>Object(n.createElement)("img",{src:i.PLACEHOLDER_IMG_SRC,alt:"",width:500,height:500}),w=e=>{let{image:t,onLoad:a,loaded:c,showFullSize:o,fallbackAlt:s}=e;const{thumbnail:r,src:i,srcset:d,sizes:u,alt:m}=t||{},b={alt:m||s,onLoad:a,hidden:!c,src:r,...o&&{src:i,srcSet:d,sizes:u}};return Object(n.createElement)(n.Fragment,null,b.src&&Object(n.createElement)("img",l()({"data-testid":"product-image"},b)),!c&&Object(n.createElement)(p,null))};t.a=Object(u.withProductDataContext)(e=>{const{className:t,imageSizing:a="full-size",showProductLink:c=!0,showSaleBadge:l,saleBadgeAlign:s="right"}=e,{parentClassName:i}=Object(d.useInnerBlockLayoutContext)(),{product:u}=Object(d.useProductDataContext)(),[O,h]=Object(n.useState)(!1),{dispatchStoreEvent:j}=Object(m.a)(),f=Object(g.d)(e),k=Object(g.a)(e);if(!u.id)return Object(n.createElement)("div",{className:r()(t,"wc-block-components-product-image","wc-block-components-product-image--placeholder",{[i+"__product-image"]:i})},Object(n.createElement)(p,null));const E=!!u.images.length,S=E?u.images[0]:null,y=c?"a":n.Fragment,L=Object(o.sprintf)(
/* translators: %s is referring to the product name */
Object(o.__)("Link to %s","woo-gutenberg-products-block"),u.name),z={href:u.permalink,rel:"nofollow",...!E&&{"aria-label":L},onClick:()=>{j("product-view-link",{product:u})}};return Object(n.createElement)("div",{className:r()(t,"wc-block-components-product-image",{[i+"__product-image"]:i},k.className),style:{...f.style,...k.style}},Object(n.createElement)(y,c&&z,!!l&&Object(n.createElement)(b.default,{align:s,product:u}),Object(n.createElement)(w,{fallbackAlt:u.name,image:S,onLoad:()=>h(!0),loaded:O,showFullSize:"cropped"!==a})))})},319:function(e,t){},531:function(e,t,a){"use strict";a.r(t);var c=a(59),l=a(261),n=a(260);t.default=Object(c.withFilteredAttributes)(n.a)(l.a)}}]);