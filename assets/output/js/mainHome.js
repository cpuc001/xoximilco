require.config({baseUrl:"/assets/output/js/",paths:{moment:"https://www.bexcaret.com/cart/js/moment",sa:"https://www.bexcaret.com/cart/plugins/builds/sa.min",configCart:"configCart",configPrices:"configPrices",prices:"https://www.bexcaret.com/cart/plugins/builds/prices.min",datetimepicker:"https://www.bexcaret.com/cart/js/bootstrap-datetimepicker.min",impromptu:"https://www.bexcaret.com/cart/js/impromptu",inview:"in-view",modulesConvert:"modulesConvert.min",libraries:"libs.min"},waitSeconds:200,shim:{inview:{exports:"Inview"},libraries:{deps:["modulesConvert"],exports:"Scripts"},prices:{deps:["sa","datetimepicker"],exports:"prices"},datetimepicker:{deps:["sa","moment"],exports:"datetimepicker"},impromptu:{deps:["sa"],exports:"impromptu"},configCart:{deps:["sa","impromptu"],exports:"configCart"},configPrices:{deps:["prices"],exports:"configPrices"}}}),require(["libraries","modulesConvert","inview"],function(e,t,a){$.domReady(function(){function i(e){var t=this.parentNode,a=t.getAttribute("data-promoId"),i=t.getAttribute("data-promoName"),n=t.getAttribute("data-promoDescription"),o=t.getAttribute("data-promoPosition");dataLayer.push({event:"promotionClick",ecommerce:{promoClick:{promotions:[{id:a,name:i,creative:n,position:o}]}}})}t.run(".gallery",{animation:"fadeIn",noScrollbars:!0});var n=$(window),o=$(".header--bottom"),s=$("header").height(),r=$("footer").height(),d=$("body").height();$(n).on("scroll",function(e){var t=window.pageYOffset||document.documentElement.scrollTop;t>s/2&&$(o).addClass("is_fixed"),(s/2>t||t>d-r-837)&&$(o).removeClass("is_fixed")}),a(".lazy").on("enter",function(e){var t=e.querySelector("img");"undefined"!=typeof t.dataset.src&&(e.classList.add("is-loading"),newImg=new Image,newImg.src=t.dataset.src,newImg.classList.add("img--responsive"),newImg.addEventListener("load",function(){e.innerHTML="",e.appendChild(this),setTimeout(function(){e.classList.remove("is-loading"),e.classList.add("is-loaded")},300)}))});var c=document.getElementById("carouselHtml");if(null!=c){var l=$(".carousel-inner .toModalS"),m=$(l).attr("data-modal");$(l).on("click",function(e){e.preventDefault(),e.stopPropagation(),$(this).hasClass("play")||($(this).attr("data-interval","false"),$(this).addClass("play").append('<div class="vid"><div class="embed-responsive"><iframe width="990" height="557" src="https://www.youtube.com/embed/'+m+'?rel=0&amp;controls=0&amp;autoplay=1" frameborder="0" allowfullscreen></iframe></div></div>'))}),c.addEventListener("slid.bs.carousel",function(){$(this).attr("data-interval","true"),$(l).removeClass("play").find(".vid").remove()})}var u=$("body");$(".go-top").on("click",function(e){Velocity(u,"scroll",{duration:500,offset:-40,easing:"ease-in-out"})});{var p=document.getElementsByClassName("toModal");document.getElementById("modals")}if($(p).on("click",function(t){t.preventDefault();var a=$(this).attr("data-modal"),i=$(this).attr("data-target")||$(this).attr("href");json_data=$(this).attr("data-json"),$.ajax({url:a,method:"post",dataType:"json",data:JSON.parse(json_data),success:function(t){new e.Modal(i,{content:t});document.querySelectorAll('[id="mc-embedded-subscribe-form"]').length&&document.getElementById("mc-embedded-subscribe-form").addEventListener("submit",function(e){e.preventDefault();var t=e.target,a=new FormData(t);$.ajax({url:"/helpers/mailchimp",method:"post",data:a,processData:!1,contentType:!1,success:function(e){var t=document.getElementById("mce-MMERGE5").value;dataLayer.push({action:"newsletter",label:t,event:"registros"});var e=JSON.parse(e),a=document.getElementsByClassName("m-item");for(var i in a)a[i].innerHTML="";for(var n in e)document.getElementById("m-"+n).innerHTML=e[n]}})});var a=document.querySelectorAll('[id="carouselAjax"]'),n=0,o=a.length;for(n;o>n;n++){var s=a[n],r={};r.interval=s.getAttribute("data-interval")&&s.getAttribute("data-interval"),r.pause=s.getAttribute("data-pause")&&s.getAttribute("data-pause")||"hover",r.keyboard=s.getAttribute("data-keyboard")&&s.getAttribute("data-keyboard")||!1,r.duration=s.getAttribute("data-duration")&&s.getAttribute("data-duration")||!1,new e.Carousel(s,r)}},error:function(e){console.log(e)}})}),Response.band(0,1024)===!0){var v=$(".accordion--item");v.on("click",function(e){var t=$(this).hasClass("is_open"),a=$(this).parent();v.hasClass("is_open")&&(a.find(".accordion--item i.icon-angle-up").attr("class","icon icon-angle-down"),Velocity(a.find(".accordion-content"),"slideUp",400),a.find(".accordion--item").removeClass("is_open")),t||($(this).toggleClass("is_open"),$(this).find("i.icon-angle-down").attr("class","icon icon-angle-up"),Velocity($(this).find(".accordion-content"),"slideDown",400))});var g=$("#showNav"),h=$("#nav-hide");g.on("click",function(e){$(this).hasClass("open")?($(this).removeClass("open"),$(this).find("i").attr("class","icon icon-plus-circled"),Velocity(h,"transition.slideUpOut",400)):($(this).addClass("open"),$(this).find("i").attr("class","icon icon-remove-circled-two"),Velocity(h,"transition.slideDownIn",400))});var n=$(window),o=$("header"),s=o.height();n.on("scroll",function(e){var t=window.pageYOffset||document.documentElement.scrollTop;t>s/2&&o.addClass("is_fixed"),s/2>t&&o.removeClass("is_fixed"),t>500&&g.hasClass("open")&&(g.removeClass("open"),g.find("i").attr("class","icon icon-plus-circled"),Velocity(h,"transition.slideUpOut",400))})}var f=document.getElementById("trigger-por-que-reservar");f&&f.addEventListener("click",function(){dataLayer.push({event:"reservarconnosotros"})});for(var b=document.querySelectorAll(".savings--item button"),y=b.length-1;y>=0;y--)b[y].addEventListener("click",function(){var e=this.innerText;dataLayer.push({action:e,event:"ahorrar"})});for(var w=document.getElementsByClassName("num-phone-top"),y=w.length-1;y>=0;y--)w[y].addEventListener("click",function(){var e=this.innerText.split(":")[0];dataLayer.push({action:"atencion a clientes",label:e,event:"llamadas"})});for(var C=document.getElementsByClassName("num-phone-footer"),y=C.length-1;y>=0;y--)C[y].addEventListener("click",function(){var e=this.innerText.split(":")[0];dataLayer.push({action:"bottom",label:e,event:"llamadas"})});for(var E=document.getElementsByClassName("link-social"),y=E.length-1;y>=0;y--)E[y].addEventListener("click",function(e){var t=this.getAttribute("data-red");dataLayer.push({event:"redessociales",actionredes:t+" Xoximilco"})});for(var L=document.getElementsByClassName("link-lang"),y=L.length-1;y>=0;y--)L[y].addEventListener("click",function(e){var t=this.getAttribute("data-lang");dataLayer.push({event:"cambiodeidioma",actionidioma:t})});var k=document.getElementsByClassName("slide-promotion");if(k.length){for(var x=[],y=0;y<k.length;y++){var A=k[y].getAttribute("data-promoId"),I=k[y].getAttribute("data-promoName"),B=k[y].getAttribute("data-promoDescription"),N=k[y].getAttribute("data-promoPosition");x.push({id:A,name:I,creative:B,position:N});var T=k[y].getElementsByTagName("a");T.length&&T[0].addEventListener("click",i)}dataLayer.push({event:"promocionesInternas",ecommerce:{promoView:{promotions:x}}})}var j=document.getElementsByClassName("home-atraction-promotion");if(j.length)for(var y=j.length-1;y>=0;y--)j[y].addEventListener("click",i);var S=document.getElementsByClassName("promo-register");if(S.length)for(var y=S.length-1;y>=0;y--)S[y].addEventListener("click",i)})});