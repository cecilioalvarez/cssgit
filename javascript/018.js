var edad = 13;
var nota = 7;

// si tengo un niño con menos de 12
// no tiene paga

// si el niño tiene 12 o mas años
// tiene paga de 20 euros
// si la nota del examen fue aprobado
// 5 euros mas
// si saco mas de un 8
// 10 euros mas
// y si saco un 10 20 euros mas

if (edad >= 12) {
  console.log("te damos 20 euros");
  if (nota >= 5 && nota <= 8) {
    console.log("te damos 5 euros mas");
  } else if (nota > 8 && nota < 10) {
    console.log("te damos 10 euros mas");
  } else {
    console.log("te datos 20 euros mas");
  }
} else {
  console.log("nada que eres muy pequeño");
}
