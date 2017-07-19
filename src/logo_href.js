(function(){
   
   var DEBUG = false;

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
      //logoElement.setAttribute("href", "/#start");
      logoElement.setAttribute("href", "#");
      var path = ""; 
      var addressComponents = [];
      var lastElement = "";
      var priorToLastElement = "";

      logoElement.onclick = function () {
         path = window.location.pathname;
         addressComponents = path.split("/");
         lastElement = addressComponents[addressComponents.length - 1];
         if(addressComponents.length > 1) {
            priorToLastElement = addressComponents[addressComponents.length - 2];
         }

         DEBUG && console.log("path: ", path);
         DEBUG && console.log("addressComponents: ", addressComponents);
         DEBUG && console.log("lastElement: ", lastElement);
         DEBUG && console.log("priorToLastElement: ", priorToLastElement);

         if(
            (lastElement === "" && (priorToLastElement === "" || 
                                    priorToLastElement === "en" ||
                                    priorToLastElement === "pt" ||
                                    priorToLastElement === "fr" ||
                                    priorToLastElement === "de")
            ) 
            || 
            (lastElement !== "" && (lastElement === "en" ||
                                    lastElement === "pt" ||
                                    lastElement === "fr" ||
                                    lastElement === "de")
            )
            
           ) {
            
            DEBUG && console.log("scrolling to top");
            document.body.scrollTop = document.documentElement.scrollTop = 0;         
            
         } else if (addressComponents.indexOf("en") !== -1) {
            
            window.open("/en/","_self");
            //logoElement.setAttribute("href", "/en/");
            
         } else if (addressComponents.indexOf("pt") !== -1) {
            window.open("/pt/","_self");
            //logoElement.setAttribute("href", "/pt/");
            
         } else if (addressComponents.indexOf("fr") !== -1) {
            window.open("/fr/","_self");
            //logoElement.setAttribute("href", "/fr/");
            
         } else if (addressComponents.indexOf("de") !== -1) {
            window.open("/de/","_self");
            //logoElement.setAttribute("href", "/de/");
            
         } else {
            window.open("/","_self");
            //logoElement.setAttribute("href", "/");
            DEBUG && console.log("else, href set to /");
         }

        /* if(start !== null) start.style.top = "65px";
         if(headerPlaceholder!== null) headerPlaceholder.style.height = "65px";
         if(topBar!== null) topBar.style.top = "0px";*/

         return false;
      };
   }

}());
