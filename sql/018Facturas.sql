select
    count(*) as numerito,
    empresa as superempresa
from
    Facturas
    GROUP BY empresa
    