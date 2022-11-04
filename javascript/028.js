var i = 0;
//acumular la suma
//segun vamos dando vueltas
var suma = 0;
for (var i = 0; i <= 5; i = i + 1) {
  suma = suma + i;
  console.log("vuelta :"+i);
  console.log("suma parcial :"+suma);
}
console.log(suma);
