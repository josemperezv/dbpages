// JavaScript Document

window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  document.body.appendChild(css);
};

 $('#toTop').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 2000);
        return false;
    });
	
	$(window).scroll(function(event) {
  var scrollTop = $(window).scrollTop();
  docHeight = $(document).height(),
  winHeight = $(window).height(),
  scrollPercent = (scrollTop) / (docHeight - winHeight),
  scrollPercentageString = (scrollPercent * 100) + "%",
  readingIndicator = $(".reading-progress");
  readingIndicator.width(scrollPercentageString);
});