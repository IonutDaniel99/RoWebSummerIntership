function focusInput(t){$(t).siblings("label").addClass("focusInput")}function blurInput(t=".pop-up-black form .form-col input, textarea"){$(t).val()||$(t).siblings("label").removeClass("focusInput")}function openContactPopUP(t){t.find(".pop-up-black").slideDown("500","linear"),$("#cssmenu").find("ul").addClass("padding-zero"),$("#second-cssmenu").find("ul").addClass("padding-zero"),t.addClass("active")}function closeContactPopUp(){$(".pop-up-black").slideUp("500","linear",function(){if($("#cssmenu").find("ul").removeClass("padding-zero"),$(".contact-black").removeClass("active"),void 0!==$("#first").find(".pop-up-black").html()){var t=$("#first").find(".pop-up-black");$("#first").find(".pop-up-black").remove(),$(".contact-form-hidden").append(t)}else if(void 0!==$("#second").find(".pop-up-black").html()){t=$("#second").find(".pop-up-black");$("#second").find(".pop-up-black").remove(),$(".contact-form-hidden").append(t)}blurInput(),$(".pop-up-black form .form-col input, textarea").siblings("label").removeClass("focusInput")})}function submitContactForm(t){$(".name-validation").removeClass("validate-slide-down").css("padding-top","0"),$(".email-validation").removeClass("validate-slide-down").css("padding-top","0");var n=$('input[name="name"]').val(),e=$('input[name="e-mail"]').val(),o=e.substr(0,e.indexOf("@")).length;n.match(/(:?[a-zA-Z]+\s?)/)&&0!==n.length||(0===n.length?$(".name-error p").text("Please provide a name"):$(".name-error p").text("Invalid name"),$(".contact-pop-up input").first().css("margin-bottom","18px"),$(".contact-pop-up .form-col").slice(0,1).css("margin-bottom","30px"),$(".name-validation").css("padding-top","9px").addClass("validate-slide-down"),t.preventDefault()),e.match(/[\w\-\.\+]{5,}\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/)&&0!==e.length||(0===e.length?$(".email-error p").text("Please provide an e-mail address"):o>0&&o<6?$(".email-error p").text("E-mail must be of at least 5 characters"):$(".email-error p").text("Invalid e-mail address"),$(".email-validation").css("padding-top","9px").addClass("validate-slide-down"),$(".contact-pop-up input").slice(1,2).css("margin-bottom","18px"),$(".contact-pop-up .form-col").slice(1,2).css("margin-bottom","30px"),t.preventDefault())}!function(t){t.fn.menumaker=function(n){var e=t(this),o=t.extend({format:"dropdown",sticky:!1},n);return this.each(function(){return t(this).find(".button").on("click",function(){t(this).toggleClass("menu-opened");var n=t(this).next("ul");n.hasClass("open")?n.slideToggle().removeClass("open"):(n.slideToggle().addClass("open"),"dropdown"===o.format&&n.find("ul").show())}),e.find("li ul").parent().addClass("has-sub"),multiTg=function(){e.find(".has-sub").prepend('<span class="submenu-button"></span>'),e.find(".submenu-button").on("click",function(){t(this).toggleClass("submenu-opened"),t(this).siblings("ul").hasClass("open")?t(this).siblings("ul").removeClass("open").slideToggle():t(this).siblings("ul").addClass("open").slideToggle()})},"multitoggle"===o.format?multiTg():e.addClass("dropdown"),!0===o.sticky&&e.css("position","fixed"),resizeFix=function(){t(window).width()>1e3&&e.find("ul").show(),t(window).width()<=1e3&&void 0===t(".contact-black").find(".pop-up-black").html()&&e.find("ul").hide().removeClass("open")},resizeFix(),t(window).on("resize",resizeFix)})}}(jQuery),function(t){t(document).ready(function(){t("#cssmenu").menumaker({format:"multitoggle"}),t("#second-cssmenu").menumaker({format:"multitoggle"})})}(jQuery),$(document).ready(function(){$(document).on("click",".checkout",function(){$(".checkoutMenu").addClass("checkoutMenuOpen")}),$(document).on("click",".close-checkoutMenu",function(){$(".checkoutMenu").removeClass("checkoutMenuOpen")}),$(window).on("scroll",function(t){var n=$(document).scrollTop();window.innerWidth>1017&&(n>300?$("#second-cssmenu").addClass("visible"):$("#second-cssmenu").removeClass("visible"))});var t=$(".checkoutMenu .products .product").length;$(".checkout .number").html(t);var n=0;$(".product .checkout-price").each(function(t,e){n+=parseInt($(this).html())}),$(".checkoutMenu h3 .total-checkout-price").html(n),$(document).on("click",".addToCartButton",function(){$(this).addClass("addedToCard"),$(this).removeClass("addToCartButton"),$(this).html("ADDED TO CART");var e=$(this).closest(".card"),o=$(this).closest(".card").attr("id"),i=$(".product-example"),a=e.find(".image-product").find("img").attr("src"),s=e.find(".info-product").find("h2").html();i.find(".product").attr("id","checkout-"+o),i.find(".product").find("img").attr("src",a),i.find(".product").find("img").attr("width",85),i.find(".product").find("img").attr("height",65),i.find(".product").find("p").html("Lorem ipsum dolor sit amet."),i.find(".product").find("h3").html(s),i.find(".product").find("h3").find("p").addClass("checkout-price"),$(".products").append(i.html()),n+=parseInt(i.find(".product").find("h3").find("p").html()),$(".checkoutMenu h3 .total-checkout-price").html(n),t++,$(".checkout .number").html(t)}),$(window).on("resize",function(t){void 0===$(".contact-black").find(".pop-up-black").html()&&(closeContactPopUp(),$("#cssmenu").find(".button").removeClass("menu-opened"))}),$(document).on("click",function(t){(!$(".contact-us-menu").is(t.target)&&0===$(".contact-us-menu").has(t.target).length||$(".contact-pop-up img").is(t.target))&&closeContactPopUp()}),$(document).on("click",".contact-black",function(){var t=$(".contact-form-hidden").html();$(".contact-form-hidden").html(""),$(this).append(t),window.innerWidth>1017?openContactPopUP($(this)):($(".pop-up-black").addClass("contact-pop-up-mobile-visible"),openContactPopUP($(this)))})});