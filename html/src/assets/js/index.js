(function(){
	$(function(){
		init();
	})

	function init() {

    movie.init();

    // メニューの初期化
    myMenu.init();

    myHeader.init();


    // var hoge = new Vivus('openingLogo', {
    //   type: 'delayed',
    //   duration: 200,
    //   animTimingFunction: Vivus.EASE
    // }, function(){
    //   console.log("hoge")
    // });


    // $("#openingLogo").on("click", function(){
    //   console.log("あああ")
    //   hoge.reset().play();
    // })


    // topページ
    if ($("body").hasClass("top")) {
      // デバイス判定して表示切り替え
      if (!isSmartDevice()) {
        movie.appendOpeningMovie();
      } else {
        movie.appendSmartphoneImage();
      }
    } else {
      $(".mask").fadeOut(600);
    }
	}



  var myMenu = {
    "init" : function() {
      var me = this;
      $(".header__menuBtn").on("click", function(){
        if ($(this).hasClass("header__menuBtn--open")) {
          me.close();
        } else {
          me.open();          
        }
      })


      $(".navi a, .footerLinkList__link").on("click", function() {
        var targetHash = $(this).attr("href");
        me.scroll(targetHash);
      })
    },
    "open" : function() {
      $(".header__menuBtn").addClass("header__menuBtn--open");
      $(".header__navi").fadeIn(200);
      console.log("open")
    },
    "close" : function() {
      $(".header__menuBtn").removeClass("header__menuBtn--open");
      $(".header__navi").fadeOut(200);
      console.log("close")      
    },
    "scroll" : function(targetHash) {
      var me = this;
      $("html,body").animate({scrollTop: $(targetHash).offset().top - 100}, function() {
        setTimeout(function(){
          me.close()
        }, 200);
      });
    }
  }

  var movie = {
    "init": function() {

    },
    // "removeMovieInit" : function() {
    //   var me = this;
    //   // クリックでmovie削除
    //   $(".videoOver__down").on("click", function(){
    //     me.removeMovie();
    //   })

    //   // スクロールでmovie削除
    //   var mousewheelevent = 'onwheel' in document ? 'wheel' : 'onmousewheel' in document ? 'mousewheel' : 'DOMMouseScroll';
    //   $(document).on(mousewheelevent,function(e){
    //     me.removeMovie();
    //   });

    //   $(".video").on("scrollstart", function() {
    //     me.removeMovie();        
    //   })
    // },
    "appendOpeningMovie" : function() {
      var me = this;
      var openingMovieDom = "";
      openingMovieDom += '<video src="/assets/movie/movie24fps640.mp4" type="video/mp4" autoplay loop></video>';
      $(".video").append(openingMovieDom);
      $("video").ready(function(){
        $("video").fadeIn(1000);
        // $(".openingMask").fadeOut(2000, function(){
          // 動画が再生されてからスクロールイベント取得
          // me.removeMovieInit();
        // });
      })
    }, 
    "appendSmartphoneImage" : function() {
      var me = this;
      $(".video").css({
        "background-image": "url(/assets/img/sp_dummy_top.jpg)",
        "background-size" : "cover",
        "background-repeat" : "no-repeat",
        "background-position" : "center center"
      });
      $(".openingMask").fadeOut(2000, function(){
        // 動画が再生されてからスクロールイベント取得
        // me.removeMovieInit();
      });
    }, 
    // "removeMovie" : function() {
    //   $(".video").animate({
    //     "top": "-100%",
    //     "opacity": "0.5"
    //   }, 500, "linear", function(){
    //     $("body").removeClass("top");
    //     $(".openingContent").remove();
    //   });
    //   $("video").animate({
    //     "top": "-50%",
    //     "opacity": "0.5"
    //   }, 500, "linear");
    //   $(".openingLogo").fadeOut();
    // }
  }

  var myHeader = {
    "init" : function() {
      var me = this;
      var winHeight = 0
      winHeight = $(window).height();
      $(".top .wrapper").css({"margin-top":winHeight});
      $(window).resize(function(){
        winHeight = $(this).height();
        $(".top .wrapper").css({"margin-top":winHeight});
      });

      var scrollAmount = 0;
      $(window).scroll(function(){
        // console.log("winHeight:"+winHeight);
        if ($(this).scrollTop() > winHeight) {
          $(".top .header").fadeIn(200);
        } else {
          $(".top .header").fadeOut(200);          
        }
      })

      // console.log(scrollAmount);

      // this.windowHeight = winHeight;
    },
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