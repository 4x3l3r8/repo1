$(document).ready(function() {
    $('#contents').fadeIn('slow');
});
$(document).ready(function(){
    $('#container_section').fadeIn('slow');
});
$(document).ready(function(){
    $('#container_section2').fadeIn('slow');
});
$(document).ready(function(){
    $('#top-head').fadeIn('slow');
});
$(document).ready(function(){
    $('#container').fadeIn('slow');
});

var loadVar;

function loaderFunction() {
    loadVar = setTimeout(showPage, 1500);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("contents").style.display = "block";
  document.getElementsById("container_section").style.display = "block";
  document.getElementsById("container_section2").style.display = "block";
  document.getElementsByClassName("container").style.display = "block";
}