	 function prepareFrame() {
        var ifrm = document.createElement("iframe");
        ifrm.setAttribute("src", "http://selectyouruniversity.com/contactforms/slide-contact-include-bogo.php");
        ifrm.style.width = "300px";
        document.body.appendChild(ifrm);
        ifrm.setAttribute("id","contactSlidefrm");
    }
    	prepareFrame();
    	
	var btnOne = document.createElement("BUTTON"); 
	var t = document.createTextNode("CONTACT US");
	  btnOne.appendChild(t);   
	var buttonOne=document.body.appendChild(btnOne); 
		buttonOne.setAttribute("id", "contactSlideBtn");

	document.addEventListener('DOMContentLoaded', function() {
			 document.getElementById("contactSlideBtn").addEventListener("click", contactSlide);
			  		function contactSlide(){
 			
 				 var x = document.getElementById("contactSlidefrm");
  x.classList.toggle("visible");
  var y=document.getElementById("contactSlideBtn");
  y.classList.toggle("movebtn");

		}	
}, false);
