var lista=[3,7,9];

var edadMayor=0;

for (var i=0;i<lista.length;i++) {

    //edad guardadda es menor que la de la lista
    if (edadMayor<lista[i]) {
        // si es asi guardame el nuevo valor en la variable
        //edadmayor
       edadMayor=lista[i];
    }
}
console.log(edadMayor);


