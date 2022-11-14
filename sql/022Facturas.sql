select
    max(importe) as importeMaximo,
    empresa,
    concepto
from
    Facturas
group BY
    empresa
HAVING
    importeMaximo > 1000
    and importeMaximo < 3000