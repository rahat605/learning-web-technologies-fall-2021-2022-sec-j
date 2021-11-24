let display = document.getElementById('display');

let buttons = Array.from(document.getElementsByClassName('button'));

buttons.map( button => {
    button.addEventListener('click', (e) => {
        switch(e.target.innerText){
            case 'C':
                display.innerText = '';
                break;
            case '=':
                try{
                    display.innerText = eval(display.innerText);
                } catch {
                    display.innerText = "Error"
                }
                break;
            case '←':
                if (display.innerText){
                   display.innerText = display.innerText.slice(0, -1);
                }
                break;
            case 'CE':
                    if (display.innerText){
                       display.innerText = display.innerText.slice(0, -1);
                    }
                    break;
            default:
                display.innerText += e.target.innerText;
        }
    });
});

function ajax(){

	let buttons = document.getElementsById('equal').value;
	let xhttp= new XMLHttpRequest();

	xhttp.open('POST', 'calculator.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('equal='+equal);

	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('h1').innerHTML = this.responseText;		
		}
	}
}