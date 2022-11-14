select
   sum(importe) as gasto
    ,empresa
from
    Facturas
    GROUP BY empresa
    