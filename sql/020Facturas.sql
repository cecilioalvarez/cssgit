/*select
   sum(importe) as gasto
    ,empresa
from
    Facturas
    GROUP BY empresa 
    having gasto>3000
*/
/*
select avg(importe) as media,empresa from Facturas
group by empresa having media>1000
*/

select sum(importe) as total,empresa from Facturas
group by empresa having total>2000