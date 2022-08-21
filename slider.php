<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>

<div class="w3-content w3-display-container">
   <a href="#baslik1"> <img class="mySlides" src="lat.jpg" style="width:100%" ></a> 
  <a href="#baslik2"><img class="mySlides" src="ev4.jpg" style="width:100%"></a>
  <a href="#baslik3"><img class="mySlides" src="nevair2.jpg" style="width:100%"></a>
  <a href="#baslik4"><img class="mySlides" src="tatli.jpg" style="width:100%"></a>

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>