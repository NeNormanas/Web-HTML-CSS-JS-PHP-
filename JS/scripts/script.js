
// alert ("Labas vakaras");
console.log("tekstas atsiduria konsoleje");
document.write("tekstas atsoduria dokumente body skiltyje html faile");

var kintamasis = "Kintamojo tekstas";
console.log(kintamasis);

kintamasis = 15;
console.log(kintamasis);

var masyvas = ["tekstas", 23, true, null];
console.log(masyvas.length);

masyvas.pop(); //istrina paskutine reiksme masyvo
console.log(masyvas);

masyvas.push(50); // ikelia i paskutine masyvo vieta
console.log(masyvas);

masyvas.shift();
console.log(masyvas);

masyvas.unshift("labadiena");
console.log(masyvas);



var index = masyvas.indexOf("labadiena");
if (index > -1) {
	masyvas.splice(index, 1);
}
console.log(masyvas);

// OBJEKTO KURIMAS

var alus = {
	//properciai

	tipas: "tamsus",
	kiekis: "0.5L",
	gamintojas: "FAXE",
	pilnas: true,

	//Metodai

	isgerti: function() {
		
		console.log("opa ir nebera alaus. Nera " + this.tipas + " alaus.");
		this.pilnas = false;
	}
}
console.log(alus.tipas);
alus.isgerti();



var i = 5;
var j = "5";
if (i === j) { // trys lygibes padaro kad paima tik tam tikra 
	console.log("i lygu j");

}
else {
	console.log("i nelygu j");
}

function suma(a, b){
	console.log(a+b);
	return a+b;

}
suma(10,6);

var skaicius = suma (50, 6);

console.log(document.body);

console.log(document.images);

console.log(document.getElementsByTagName("p"));

console.log(document.getElementsByClassName("ivadas"));
console.log(document.getElementById("tekstas"));

console.log(document.querySelectorAll("body div.antras p.ivadas"));
console.log(document.querySelector("body div.antras p.ivadas"));




function spalvosPakeitimas(){
var antraste = document.getElementsByTagName("h1");
console.log(antraste[0]);

antraste[0].style.color = "blue";
}

var mygtukas = document.getElementById("spalva");
mygtukas.addEventListener("click", spalvosPakeitimas);

$("#change-Img").on("click", function(){

	$(".Paveikslelis").attr("src", "https://picsum.photos/400/200");
})