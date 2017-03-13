import * as article from "./article";
import "whatwg-fetch";


fetch('http://localhost:8000')
	.then(function(reponse) {
		//console.log(reponse);
		return reponse.text();
	})
	.then(function(body) {
		console.log(body);
	})
;

let elements = Array.from(document.getElementsByClassName('btn'));
elements.forEach(element => element.addEventListener('click', btnListener));

function btnListener(event){
	article.remove();
	event.preventDefault(); //prend pas en compte click
	article.remove(event.currentTarget.getAttribute('href'));
}


const name = 'toto';
//alert(`Hello ${name} !`);