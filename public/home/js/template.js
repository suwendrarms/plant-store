var e=[];function n(e,n){$.t({url:e,headers:{o:$('meta[name="csrf-token"]').i("content")},type:"POST",s:"json",data:{link:n}})}function a(e,n,t){$.t({url:e,headers:{o:$('meta[name="csrf-token"]').i("content")},type:"POST",s:"json",data:{u:n,link:t},async:!1,l:function(e){console.log(e)}})}$(document).$("click","a",function(){n("/store-clicks",$(this).i("href"))}),$(window).$("load",function(){n("/store-pages",route)}),$(document).m(function(){var t=new Date;$(window).$("unload",function(){var e=new Date,n=Math.abs(new Date(e)-new Date(t));a("/page-visited-time",Math.floor(n/1e3),route)})});

new WOW().init();

$(document).ready(function() {
  function setHeight() {
    windowHeight = $(window).innerHeight();
    $('.landing-banner-area').css('min-height', windowHeight);
  };
  setHeight();
  
  $(window).resize(function() {
    setHeight();
  });
});
