
cartchecker();

async function cartchecker() {

    var existecookie = checkCookie();
    if(existecookie == 1){
     var arrayitems = {};           
        var arrayitems = JSON.parse($.cookie('cart'));
    
   

    for (var i = 0; i < arrayitems['item'].length; i++) {

    	var soma = parseInt(arrayitems['quantidade'][i]) * parseInt(arrayitems['preco'][i]);
    	
    }

    }
    setTimeout(cartchecker, 2000); // Change image every 10 seconds
}

function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}