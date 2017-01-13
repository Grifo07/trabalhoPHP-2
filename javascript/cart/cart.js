
function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
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
        alert("Welcome again " + user);
    } else {
       user = prompt("Please enter your name:","");
       if (user != "" && user != null) {
           setCookie("username", user, 30);
       }
    }
}

function addToCart(id){

	// var arr = [];
	// var cart = getCookie('cart');
	// alert("ola");
	
	// var arr = JSON.parse(cart);
	// alert(arr);
	// arr.push("id");

	// var cart_str = JSON.stringify(arr);
	// var cart_str = ['1', '2', '3'];
alert("hi");
	var myJSON = '{ "item1":3, "item2":2, "item3":1 }';
	var myObj = JSON.parse(myJSON);
	myObj.item1 = id;
	alert(myObj.item1);



	// setCookie('cart', cart_str, 30);
	// checkCookie();
}