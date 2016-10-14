(function(){
	$(function(){
		init();
	})

	function init() {

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

  function appendOpeningMovie() {
    var openingMovieDom = "";
    openingMovieDom += '<div class="video">';
    openingMovieDom += '<video src="assets/movie/movie24fps640.mp4" type="video/mp4" autoplay></video>';
    openingMovieDom += '<div class="video__cover"></div>';
    openingMovieDom += '</div>';
    $("body").append(openingMovieDom);
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