function pageInit(){innerHeight=jQuery(".inner-page").outerHeight(!0),windowHeight=jQuery(window).height(),windowWidth=jQuery(window).width(),welcomeHeight=jQuery("#welcome").outerHeight(),originsHeight=windowHeight-welcomeHeight,originsInnerHeight=jQuery("#origins .description").outerHeight(!0),/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i.test(navigator.userAgent||navigator.vendor||window.opera)||(jQuery("#about-us-info .title").css("top",windowHeight/2),jQuery("#about-us-info .title").css("left",windowWidth/2),jQuery("#about-us-info .title").addClass("centered"),windowHeight>originsInnerHeight+welcomeHeight&&jQuery("#origins").height(originsHeight),jQuery(window).resize(function(){jQuery("#about-us-info .title").css("top",windowHeight/2),jQuery("#about-us-info .title").css("left",windowWidth/2),windowHeight>originsInnerHeight+welcomeHeight&&jQuery("#origins").height(originsHeight)})),jQuery("#about-us-info").css("margin-top",windowHeight),jQuery(window).resize(function(){jQuery("#about-us-info").css("margin-top",windowHeight)}),windowHeight>innerHeight&&jQuery(".outer-page").addClass("fill"),jQuery(window).resize(function(){windowHeight>innerHeight?jQuery(".outer-page").addClass("fill"):jQuery(".outer-page").removeClass("fill")}),jQuery("a").click(function(){return jQuery("html, body").animate({scrollTop:$($.attr(this,"href")).offset().top},700),!1})}function sidrInit(){jQuery("#drawer-menu").sidr({side:"right",displace:!1,onOpen:function(e){jQuery("#drawer-menu").addClass("push"),disableScroll()},onClose:function(e){jQuery("#drawer-menu").removeClass("push"),enableScroll()}}),jQuery(".sidr").removeClass("displace")}function sidrMobileInit(){jQuery("#drawer-menu").sidr({side:"right",displace:!0,onOpen:function(e){jQuery("#drawer-menu").addClass("push"),disableScroll()},onClose:function(e){jQuery("#drawer-menu").removeClass("push"),enableScroll()}}),jQuery(".sidr").addClass("displace")}function sidrSelect(){jQuery(window).width()>640?sidrInit():sidrMobileInit()}function setSkrollr(){/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i.test(navigator.userAgent||navigator.vendor||window.opera)||(skrollr=skrollr.init({forceHeight:!1}))}function disableScroll(){var e=[self.pageXOffset||document.documentElement.scrollLeft||document.body.scrollLeft,self.pageYOffset||document.documentElement.scrollTop||document.body.scrollTop],i=jQuery("html");i.data("scroll-position",e),i.data("previous-overflow",i.css("overflow")),i.css("overflow","hidden"),window.scrollTo(e[0],e[1]),mobileScrollDisable=!0}function enableScroll(){var e=jQuery("html"),i=e.data("scroll-position");e.css("overflow",e.data("previous-overflow")),window.scrollTo(i[0],i[1]),mobileScrollDisable=!1}var innerHeight=jQuery(".inner-page").outerHeight(!0),windowHeight=jQuery(window).height(),windowWidth=jQuery(window).width(),welcomeHeight=jQuery("#welcome").outerHeight(),originsHeight=windowHeight-welcomeHeight,originsInnerHeight=jQuery("#origins .description").outerHeight(!0),mobileScrollDisable=!1;jQuery(window).resize(function(){windowHeight=jQuery(window).height(),windowWidth=jQuery(window).width()}),jQuery(document).ready(function(){sidrSelect(),jQuery(window).resize(function(){sidrSelect()}),document.ontouchmove=function(e){mobileScrollDisable&&e.preventDefault()},$(document).mouseup(function(e){var i=jQuery("#sidr");i.is(e.target)||0!==i.has(e.target).length||jQuery.sidr("close","sidr")}),document.addEventListener("touchstart",function(e){var i=jQuery("#sidr");i.is(e.target)||0!==i.has(e.target).length||jQuery.sidr("close","sidr")},!1),pageInit(),setSkrollr()});