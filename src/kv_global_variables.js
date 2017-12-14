(function(window){
    
	//I recommend this
	'use strict';
	function defineLibrary() {

		var kvGlobals = {};

		kvGlobals.globalVariableAeoYear = "2017"; 

	};

      
    // end section of library declaration  
      
     return kvGlobals;
    }
  
    //define globally if it doesn't already exist
    if(typeof(kvGlobals) === 'undefined'){
        window.kvGlobals = defineLibrary();
    }
    else{
        console.log("kvGlobals Library already defined.");
    }  
  
})(window);
