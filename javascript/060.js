var factura = {
  numero: 1,
  concepto: "ordenador",
  importe: 1000,
};

var factura2 = {
  numero: 2,
  concepto: "tablet",
  importe: 500,
};

var factura3 = {
  numero: 3,
  concepto: "raton",
  importe: 50,
};

var misfacturas=[factura,factura2,factura3];

var sumahorrible=0;
for(var i=0;i<misfacturas.length;i++) {
  sumahorrible=sumahorrible+misfacturas[i].importe;
}
console.log("suma total:"+sumahorrible);