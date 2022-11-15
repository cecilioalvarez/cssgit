/*select * from personita;*/
/*select * from regalo;*/
/*join*/
select
    nombre as nombreNiño,
   
    descripcion as nombreRegalo
   
from
    personita
    inner join regalo on 
    personita.nombre = regalo.personita_nombre

