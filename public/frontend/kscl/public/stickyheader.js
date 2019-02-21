


// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};


// Get the header
// var header = document.getElementById("logobar");
var header = document.querySelector("header");
var body = document.querySelector('body');
$(body).css({'padding-top': header.offsetHeight+'px'})

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position

function myFunction() {
	
	// Get the offset position of the navbar
	var sticky = header.offsetTop;
  if (window.pageYOffset > header.offsetHeight) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
};

function topBanner(){
	var a = document.querySelector("#divTopBanner");
	var b = document.querySelector("#divTopBanner > div");
	var w = window.innerWidth;
	var c= document.querySelector('nav > .container').offsetWidth;
	$(b).css({'margin-left': (w-c)/2-10+'px'});
	$(a).css({'margin-top':'-'+header.offsetHeight+'px'});
}

topBanner();
window.onresize = function(){
	topBanner();
};


$(function(){
 if ('speechSynthesis' in window) {
    var button = document.querySelector('#btn-screen-reader');
    button.addEventListener("click", function(evt) {
	evt.preventDefault();
	console.log("screen reader start");
	speechSynthesis.cancel();
    var bodytext = document.querySelector("body");
    var text = bodytext.innerText;
    console.log(text);
    var msg = new SpeechSynthesisUtterance();
	var voices = window.speechSynthesis.getVoices().filter(function(voices) { return voices.default == true; })[0];
	console.log("=====",voices);
	msg.voice = voices; // Note: some voices don't support altering params
	//~ msg.voiceURI = 'native';
	msg.volume = 1; // 0 to 1
	msg.rate = 0.9; // 0.1 to 10
	msg.pitch = 1; //0 to 2
	msg.text = text;
	//~ msg.lang = 'en-US';

	msg.onend = function(e) {
	  console.log('Finished in ' + event.elapsedTime + ' seconds.');
	};

	speechSynthesis.speak(msg);
   });
 }
});

//~ var button = document.querySelector('.btn-white');
    //~ button.addEventListener("click", function() {
    //~ speechSynthesis.cancel();    
//~ });
window.onbeforeunload = function(){
    speechSynthesis.cancel();
};

// Increase size
var fsize,i=1;


function getCookie(c_name) {
    c_start = document.cookie.indexOf(c_name + "=");
	if (c_start != -1) {
		c_start = c_start + c_name.length + 1;
		c_end = document.cookie.indexOf(";", c_start);
		if (c_end == -1) {
			c_end = document.cookie.length;
		}		
		$(body).css({
		'font-size':unescape(document.cookie.substring(c_start, c_end)) +'%'
		});
		console.log(unescape(document.cookie.substring(c_start, c_end)));
		return unescape(document.cookie.substring(c_start, c_end));
	}
    return "";
}

if(getCookie("ts_name")){
	fsize = getCookie("ts_name");
	console.log("if");
}else{
	fsize = 100;
	console.log("else");
}

if(getCookie("cs_filename")){
	var  fileName = getCookie("cs_filename");
	var link = $("<link />",{id: "cs_files",rel: "stylesheet",  type: "text/css",  href: "/app/default/assets/public/"+fileName })
	$('head').append(link);
}


var button = document.querySelector('#btn-font-increase');
    button.addEventListener("click", function(evt) {
	evt.preventDefault();
	if(fsize < 111){
		increaseFontSize();
	}
	
});

var button = document.querySelector('#btn-font-decrease');
    button.addEventListener("click", function(evt) {
	evt.preventDefault();	
	if(fsize > 90){
		decreaseFontSize();
	}
	
});

var button = document.querySelector('#btn-font-reset');
    button.addEventListener("click", function(evt) {
	evt.preventDefault();
	clearFontSize("ts_name", "", -1);
	
});

function increaseFontSize(){
	console.log('fsize = ', fsize);
	var size = ++fsize;
	console.log(size); 
	$(body).css({
	'font-size':size +'%'
	});
	document.cookie = "ts_name = " + size;
}

function decreaseFontSize(){
	var size = --fsize;
	console.log(size);
	$(body).css({
	'font-size':size +'%'	
	});
	document.cookie = "ts_name = " + size;
}

function clearFontSize(name, value, days){
	$(body).css({
	'font-size':''	
	});
	fsize = 100;
	if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = "; expires=" + date.toGMTString();
    }
    else var expires = "";
    document.cookie = name + "=" + value + expires + "; path=/";
}


var button = document.querySelector('.btn-green');
    button.addEventListener("click", function(evt) {
	evt.preventDefault();
	document.cookie = "cs_filename = stylesmain_2.css";
	window.location.reload();
	
});

var button = document.querySelector('#orange-theme');
    button.addEventListener("click", function(evt) {
	evt.preventDefault();
	document.cookie = "cs_filename = stylesmain_2.css";
	window.location.reload();
	
});

var button = document.querySelector('#blue-theme');
    button.addEventListener("click", function(evt) {
	evt.preventDefault();
	clearStyle("cs_filename", "", -1);
	window.location.reload();
	
});



function clearStyle(name, value, days){	
	if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = "; expires=" + date.toGMTString();
    }
    else var expires = "";
    document.cookie = name + "=" + value + expires + "; path=/";
}


