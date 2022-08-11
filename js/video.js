var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {  
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i,
      x = document.getElementsByClassName("video-slide"),
      y = document.getElementsByTagName("video");
  
  if (n > x.length) {
    slideIndex = 1
  }
  
  if (n < 1) {
    slideIndex = x.length
  }
  
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
    y[i].pause();
  }
  
  x[slideIndex-1].style.display = "block";
  
}

