(function(){
   
   var DEBUG = true;

   var  logoElement =  document.getElementById("logo");
   
  /* var start = document.getElementById("start");
   var topBar= document.getElementById("topBar");
   var headerPlaceholder = null;

   var header = document.getElementById("Header");
   var iLimit = header.childNodes.length;
   for (var i = 0; i < iLimit; i++) {
       if (header.childNodes[i].className == "header_placeholder") {
         headerPlaceholder = header.childNodes[i];
         break;
       }        
   }*/
   
   

   if(logoElement !== null) {
      logoElement.setAttribute("href", "/#start");
      var path = ""; 
      var addressComponents = [];
      var lastElement = "";

      logoElement.onclick = function () {
         path = window.location.pathname;
         addressComponents = path.split("/");
         lastElement = addressComponents[addressComponents.length - 1];
         
         DEBUG && console.log("path: ", path);
         DEBUG && console.log("addressComponents: ", addressComponents);
         DEBUG && console.log("lastElement: ", lastElement);

         if(lastElement === "" || lastElement === "en" || lastElement === "pt" ||
            lastElement === "fr" || lastElement === "de" ) {
            
            document.body.scrollTop = document.documentElement.scrollTop = 0;         
            
         } else if (addressComponents.indexOf("en") !== -1) {
            
            logoElement.setAttribute("href", "/en/");
            
         } else if (addressComponents.indexOf("pt") !== -1) {
           
            logoElement.setAttribute("href", "/pt/");
            
         } else if (addressComponents.indexOf("fr") !== -1) {
            
            logoElement.setAttribute("href", "/fr/");
            
         } else if (addressComponents.indexOf("de") !== -1) {
            
            logoElement.setAttribute("href", "/de/");
            
         } else 
            logoElement.setAttribute("href", "/");
         }

        /* if(start !== null) start.style.top = "65px";
         if(headerPlaceholder!== null) headerPlaceholder.style.height = "65px";
         if(topBar!== null) topBar.style.top = "0px";*/

         return false;
      };
   }

}());
