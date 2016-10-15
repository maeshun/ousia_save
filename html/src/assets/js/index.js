(function(){
	$(function(){
		init();
	})

	function init() {

    myMenu.init();


    if (!isSmartDevice()) {
      console.log("pc");
      appendOpeningMovie();
    } else {
      $(".video").css({
        "background-image": "url(/assets/img/sp_dummy_top.jpg)",
        "background-size" : "cover",
        "background-repeat" : "no-repeat",
        "background-position" : "center center"
      });
      $(".openingMask").fadeOut(2000);
    }


    $(".videoOver__down").on("click", function(){
      $(".video").animate({
        "top": "-100%",
        "opacity": "0.5"
      }, 500, "linear", function(){
        console.log("れもゔぇ")
        $("body").removeClass("openingVideo");
        $(".openingContent").remove();
      });
      $("video").animate({
        "top": "-50%",
        "opacity": "0.5"
      }, 500, "linear");
      $(".openingLogo").fadeOut();
      // $("body").removeClass("openingVideo");
    })

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
        if ($(this).hasClass("header__menuBtn--open")) {
          // $(this).toggleClass("header__menuBtn--open");
          me.close();
        } else {
          // $(this).toggleClass("header__menuBtn--open");
          me.open();          
        }
      })


      $(".navi a").on("click", function() {
        var targetHash = $(this).attr("href");
        me.scroll(targetHash);
      })
    },
    "open" : function() {
      $(".header__menuBtn").addClass("header__menuBtn--open");
      $(".header__navi").fadeIn(200);
      // $(".header__navi").addClass("header__navi--open");
      console.log("open")
    },
    "close" : function() {
      $(".header__menuBtn").removeClass("header__menuBtn--open");
      $(".header__navi").fadeOut(200);
      // $(".header__navi").removeClass("header__navi--open");
      console.log("close")      
    },
    "scroll" : function(targetHash) {
      var me = this;
      $("html,body").animate({scrollTop: $(targetHash).offset().top}, function() {
        setTimeout(function(){
          me.close()
        }, 200);
      });
    }
  }


  function appendOpeningMovie() {
    var openingMovieDom = "";
    openingMovieDom += '<video src="assets/movie/movie24fps640.mp4" type="video/mp4" autoplay loop></video>';
    // openingMovieDom += '<div class="video__cover"><div class="videoOver__down"><a href="javascript:void(0);">CONTENT</a></div></div>';
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