//Popout alert
function popup(){
    alert("Welcome to Shorui !!!");
}

function trigger(){
  document.getElementById("hover").addEventListener("mouseover", popup);
}

// Border color and text color (personal about page and disclaimer page)
function proChange1() {
  document.getElementById("detail1").style.color = "#027f97";
  document.getElementById("detail2").style.borderColor = "#027f97";
  document.getElementById("detail2").style.borderStyle = "solid";
}

function proChange2() {
  document.getElementById("detail1").style.color = "#976502";
  document.getElementById("detail2").style.borderColor = "#976502";
  document.getElementById("detail2").style.borderStyle = "solid";
}

function proChange3() {
  document.getElementById("detail1").style.color = "#000000";
  document.getElementById("detail2").style.borderColor = "#000000";
  document.getElementById("detail2").style.borderStyle = "solid";
}

function disclaimerChange1() {
  document.getElementById("disclaimer").style.borderColor = "red red";
  document.getElementById("disclaimer").style.borderStyle = "solid";
}

function disclaimerChange2() {
  document.getElementById("disclaimer").style.borderColor = "#976502";
  document.getElementById("disclaimer").style.borderStyle = "solid";
}

function disclaimerChange3() {
  document.getElementById("disclaimer").style.borderColor = "#000000";
  document.getElementById("disclaimer").style.borderStyle = "solid";
}
// Print function (enquiry page and individual product page)
function printFunction(){
	window.print();
}

// life time function (enquiry page)
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}

function init () {
	document.getElementById("print_btn").addEventListener("click", printFunction);
  // data and time format
  var today = new Date();
  var d = today.getDate();
  var mo = today.getMonth() + 1;
  var y = today.getFullYear();
  var h = today.getHours();
  var mi = today.getMinutes();
  var s = today.getSeconds();
  var ampm = h >= 12 ? 'PM' : 'AM';
  h = h%12;
  if (h == 0){
    h = 12;
  }
  mi = checkTime(mi);
  s = checkTime(s);
  document.getElementById('today').innerHTML =
  "<strong>Date:</strong> "+ d +" / "+ mo +" / "+ y +"&nbsp; &nbsp; &nbsp; &nbsp;"+ "<strong>Time:</strong> "+ h + ":" + mi + ":"+ s + " "+ampm;
  var t = setTimeout(init, 500);
}

window.onload = init;