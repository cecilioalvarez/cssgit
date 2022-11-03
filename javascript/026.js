//acumulador
var linea = "";
for (var i = 0; i <= 10; i = i + 1) {
  if (i == 0) {
    linea = linea + "(" + i;
  }else if (i==10) {
    linea = linea + "," + i+ ")";
  }
   else {
    linea = linea + "," + i;
  }
}
console.log(linea);
