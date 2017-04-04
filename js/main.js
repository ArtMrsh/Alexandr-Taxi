var firstBox = document.querySelector('.services');
var secondBox = document.querySelector('.payment');
var thirdBox = document.querySelector('.autos');

var firstTriangle = document.querySelector('.triangle_one');
firstTriangle.onclick = function () {
   firstBox.classList.toggle("show_box");
   this.classList.toggle("rotate");
}
var secondTriangle = document.querySelector('.triangle_two');
secondTriangle.onclick = function () {
   secondBox.classList.toggle("show_box");
   this.classList.toggle("rotate");
}
var thirdTriangle = document.querySelector('.triangle_three');
thirdTriangle.onclick = function () {
   thirdBox.classList.toggle("show_box");
   this.classList.toggle("rotate");
}

var botTriangle = document.querySelector(".bottom_triangle");
botTriangle.onclick = function () {

   firstBox.classList.toggle("show_box");
   secondBox.classList.toggle("show_box");
   thirdBox.classList.toggle("show_box");

   firstTriangle.classList.toggle("rotate");
   secondTriangle.classList.toggle("rotate");
   thirdTriangle.classList.toggle("rotate");
}
