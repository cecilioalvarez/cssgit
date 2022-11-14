/*alter table Facturas 
 add column Fecha Date;*/
/*update facturas set fecha="2022-10-10";*/
/*update facturas set fecha="2021-05-05" WHERE
 empresa="empresaA";*/
/*select
 day(fecha),
 MONTH(fecha),
 year(fecha)
 from
 Facturas;*/
 /*
select
    date_format(fecha, "%h:%m %e-%M-%Y")
from
    Facturas;

    */

    select addDate(fecha,2) from Facturas;