!function(t){var n={};function o(a){if(n[a])return n[a].exports;var r=n[a]={i:a,l:!1,exports:{}};return t[a].call(r.exports,r,r.exports,o),r.l=!0,r.exports}o.m=t,o.c=n,o.d=function(t,n,a){o.o(t,n)||Object.defineProperty(t,n,{configurable:!1,enumerable:!0,get:a})},o.n=function(t){var n=t&&t.__esModule?function(){return t.default}:function(){return t};return o.d(n,"a",n),n},o.o=function(t,n){return Object.prototype.hasOwnProperty.call(t,n)},o.p="/",o(o.s=130)}({130:function(t,n,o){t.exports=o(131)},131:function(t,n){jQuery(document).ready(function(t){jQuery(document).on("ninja_table_loaded",function(n,o,a){"wp_woo"==a.provider&&(o.on("change",".nt_woo_quantity",function(n){var a=t(this),r=a.data("product_id");o.find(".nt_add_to_cart_"+r).attr("data-quantity",a.val()),console.log(t(this).val())}),o.on("click",".single_add_to_cart_button",function(n){n.preventDefault(),$thisbutton=t(this),$thisbutton.parent().addClass("nt_added_cart");var r=$thisbutton.html();$thisbutton.append('<span class="fooicon fooicon-loader"></span>');var e=$thisbutton.attr("data-product_id");t.post(a.wc_ajax_url,{product_id:e,quantity:$thisbutton.attr("data-quantity")}).then(function(n){t(document.body).trigger("added_to_cart",[n.fragments,n.cart_hash,$thisbutton]),o.find("a.added_to_cart.wc-forward").html(""),t("#nt_product_qty_"+e).val(1),t("#nt_product_qty_"+e).trigger("change")}).fail(function(t){}).always(function(){$thisbutton.html(r)})}))})})}});