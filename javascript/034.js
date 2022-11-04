//xxx*xxx 1*  6 espacios 3 espacios por lado
//xx***xx 3*  4 espacios 2 espacios por laod
//x*****x 5*  2 espacios 1 espacio por lado
var asteriscos = "*";
var tope = 3;
for (var i = 1; i <= tope; i = i + 1) {
  espacios="";
  var totalEspacios = tope + 1 - i;
  var espacios = "";
  for (var j = 1; j <= totalEspacios; j++) {
    espacios = espacios + " ";
    
  }
  console.log(espacios+asteriscos);
  asteriscos = "*" + asteriscos + "*";
}
