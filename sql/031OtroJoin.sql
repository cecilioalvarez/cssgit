/*insert into personita values ("gema",10);*/

/*select * from personita;*/

select * from personita left JOIN regalo
on personita.nombre=regalo.personita_nombre