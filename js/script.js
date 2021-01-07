function loadData(name){
	if(name=="button3"){
	document.getElementById("para").innerHTML = 
	"<h5> #1 rathnayaka99@gmail.com</h5>good gaming website<br><h5>#2 sunilperera59@gmail.com</h5>awsome. Best website for kids games<br><h5>#3 sarathpadukka81@gmail.com</h5>spent too much data<br><h5>#4 osandha79@gmail.com</h5>good website. there are lot of category in here.<br><h5>#5 pasindu289@gmail.com</h5>downloaded games are not working<br>";
	}
	
}
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