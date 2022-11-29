select
    numero,
    date_format(fecha, '%d/%m/%Y') as fecha,
    titulo
from
    Alquileres
    inner join Peliculas on Alquileres.peliculas_isbn = Peliculas.isbn
where
    clientes_dni = '1'