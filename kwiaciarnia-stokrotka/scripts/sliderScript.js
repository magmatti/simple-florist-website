var curRadio = 0;

var slideradio = document.getElementsByClassName("slideradio");
for (var i = 0; i < slideradio.length; i++) {
  (function() {
    var j = i;
    slideradio[i].onclick = function() {
      clearTimeout(counterTimeout);

      slideradio[j].checked = true;
      var transam = j * document.getElementById( 'mslider' ).clientWidth;
      document.getElementById("slideholder").style.transform = "translateX(-"+transam+"px)";
      curRadio = j;

      document.getElementById("slidercounter").innerHTML = 8;
      counterTimeout = setTimeout(timerCountdown, 1000);
    };
  }());
}
slideradio[0].click();

var counterTimeout;
function timerCountdown() {
  var curcount = parseInt(document.getElementById("slidercounter").innerHTML);
  if (curcount > 0) {
    document.getElementById("slidercounter").innerHTML = curcount - 1;
    counterTimeout = setTimeout(timerCountdown, 1000);
  }
  else {
    document.getElementById("slidercounter").innerHTML = 0;
    if (curRadio < 3) {
      slideradio[curRadio+1].click();
    }
    else {
      slideradio[0].click();
    }
  }
}