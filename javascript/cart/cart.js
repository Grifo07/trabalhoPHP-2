window.onload = function() { updateCart(); };

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function isThereCookie() {
    var user=getCookie("cart");
    if (user != "") {
        return 1;
    } else {
        return 0;
    }
}

function updateCart() {

    var existecookie = isThereCookie();
    var soma=0;
    if(existecookie == 1){
         var arrayitems = {};           
            var arrayitems = JSON.parse($.cookie('cart'));
        
        

        for (var i = 0; i < arrayitems['item'].length; i++) {

            soma = soma +parseInt(arrayitems['quantidade'][i]) * parseInt(arrayitems['preco'][i]);
        }

    }

    document.getElementById("precototal").textContent=soma + " €";

    
}

function addToCart(id, preco){
  var existe = isThereCookie();

    if(existe == 0){
     var arritem = {};           
        arritem['item'] = [];                       //id
        arritem['item'].push(id);

        arritem['preco'] = [];                       //preco
        arritem['preco'].push(preco);

        arritem['quantidade'] = [];                       //preco
        arritem['quantidade'].push('1');

        $.cookie('cart', JSON.stringify(arritem));
    }
     else {
        var arritem = JSON.parse($.cookie('cart'));
        var semaforo = 0;

        for (var i = 0; i < arritem['item'].length; i++) {
            if(arritem['item'][i] == id){
               var aux =  parseInt(arritem['quantidade'][i]);
               aux = aux + 1;
               arritem['quantidade'][i] = aux;           //ADICIONA 1 A QUANTIDADE SE EXISTIR ID
                semaforo = 1;
                break;
            }
        }
            if(semaforo != 1){
                arritem['item'].push(id);
                arritem['preco'].push(preco);       //CASO NAO EXISTA DUPLICADO
                arritem['quantidade'].push('1');
                semaforo = 0;
            }
        
        $.cookie('cart', JSON.stringify(arritem));
     

    }
    updateCart();
}

