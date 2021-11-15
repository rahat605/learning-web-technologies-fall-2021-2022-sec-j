"use strict"
var b=20;
let c=30;
const d=50;

let student = [1, 'alamin', 'alamin@aiub.edu', 2.4];

student[0];

function f2(){

	let name = document.getElementById('name').value;
	
	if(name != ""){
		document.getElementById('d1').innerHTML = "<p style='color:white'>Can't be empty</p>";

		
	}else{
		document.getElementsByTagName('h1')[0].innerHTML = name;
		document.getElementById('d1').innerHTML = "";
	}
}




