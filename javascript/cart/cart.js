

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

function checkCookie() {
    var user=getCookie("cart");
    if (user != "") {
        return 1;
    } else {
        return 0;
    }
}

function addToCart(id, preco){

  var existe = checkCookie();

    if(existe == 0){
     var arritem = {};           
        arritem['item'] = [];                       //id
        arritem['item'].push(id);

        arritem['preco'] = [];                       //preco
        arritem['preco'].push(preco);

        arritem['quantidade'] = [];                       //preco
        arritem['quantidade'].push('1');

        $.cookie('cart', JSON.stringify(arritem));
        alert("cookie adicionado!");
    }
     else {
        var arritem = JSON.parse($.cookie('cart'));


        for (var i = 0; i < arritem['item'].length; i++) {
            if(arritem['item'][i] == id){
               var aux =  parseInt(arritem['quantidade'][i]);
               aux = aux + 1;
               arritem['quantidade'][i] = aux;           //ADICIONA 1 A QUANTIDADE SE EXISTIR ID
                alert('entra');
                alert(arritem['quantidade'][i]);
                var semaforo = 1;
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
        alert("Item adicionado!");
     

    }

}

