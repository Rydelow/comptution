function r(e,n=null){setTimeout(()=>{jQuery(document.body).trigger(e,n)},1)}function i(e,n,t=document.body){jQuery(t).on(e,n)}function u(){let e=window.Webflow;e&&e.require("ix2")&&(e.require("ix2").init(),document.dispatchEvent(new Event("scroll")))}export{r as a,i as b,u as c};