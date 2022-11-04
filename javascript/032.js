var texto1 = "*";

var i = 0;
for (i; i < 10; i = i + 1) {
  console.log(texto1);
  if (texto1 == "*") {
    texto1 = "   *";
  } else {
    texto1 = "*";
  }
}
