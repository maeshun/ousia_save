(function(){
	$(function(){
		init();
	})

	function init() {

    myMenu.init();


    if (!isSmartDevice()) {
      console.log("pc");
      // appendOpeningMovie();
    }

		// $(".footerLink__list a, .rimNavi__list a").on("click", function(){

		// 	var $target = "";
		// 	if ($(this).attr("href") == "#") {
		// 		$target = $("body");
		// 	} else {
		// 		$target = $($(this).attr("href"));
		// 	}
			// $("body, html").animate({
			// 	scrollTop: $target.offset().top
			// }, 500);
		// })
	}

  var myMenu = {
    "init" : function() {
      var me = this;
      $(".header__menuBtn").on("click", function(){
        $(this).toggleClass("header__menuBtn--open");
        me.open();
      })
    },
    "open" : function() {
      // $(".header__navi").toggleClass("header__navi--open");
      $(".header__navi").fadeIn();
      console.log("open")
    }
  }


  function appendOpeningMovie() {
    var openingMovieDom = "";
    openingMovieDom += '<video src="assets/movie/movie24fps640.mp4" type="video/mp4" autoplay loop></video>';
    openingMovieDom += '<div class="video__cover"></div>';
    $(".video").append(openingMovieDom);
    $("video").ready(function(){
      $(".openingMask").fadeOut(2000);
    })
  }

  function isSmartDevice() {
    var agent = navigator.userAgent;
    if(agent.search(/iPhone/) != -1){
      return 1;
    } else if(agent.search(/iPad/) != -1){
      return 1;
    } else if(agent.search(/Android/) != -1){
      return 1;
    }
    return 0;
  }

})()