
function setCookie(cname,cvalue,exdays) {
    document.cookie = cname + "=" + cvalue + ";" + exdays + ";path=/";
}

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

function addToCart(id){
alert("ola0");
  var existe = checkCookie();

    if(existe == 0){
     var arr = {};           
        arr['item'] = [];          
        arr['item'].push(id);
        var json = JSON.stringify(arr);
        alert(json);
        alert("nice1");
        setCookie("cart", json, 33);
        alert("nice3");
    }
    else{
        alert("existe e fez check");
        var teste = getCookie("cart");
        alert("vao emtrar");
        var arr2 = JSON.parse(teste);
        alert(teste[0]);
    
       


    }

}

function addIdtoArray(id){



}