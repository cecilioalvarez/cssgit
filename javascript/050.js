var lista= [2,4,6,10,8,9];

var elegido=lista[0];

for (var i=0;i<lista.length;i++) {

    //console.log("recorriendo :"+lista[i]);
   
   if(lista[i]<elegido) {
    
    elegido=lista[i];
    //console.log("el elegido es:"+elegido);
   }
}
console.log(elegido);
