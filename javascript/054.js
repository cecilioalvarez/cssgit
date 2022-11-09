var lista= [2,4,5,8,5];
var lista2=[3,4,5,9,1];
var seleccionado=0;
for (var i=0 ;i<lista.length;i++) {

      if (seleccionado<lista[i]) {

       seleccionado=lista[i];
      }
}

for (var i=0 ;i<lista2.length;i++) {

       if (seleccionado<lista2[i]) {
 
        seleccionado=lista2[i];
       }
 }
console.log(seleccionado);
