SELECT count(titulo) AS 'Numero de entradas', categoria_id FROM entradas GROUP BY categoria_id;

SELECT count(titulo) AS 'Numero de entradas', categoria_id
FROM entradas GROUP BY categoria_id HAVING COUNT (titulo)>=1;

SELECT AVG(id) AS 'media de entradas' FROM entradas;
SELECT MAX (id) as 'Maxima id' from entradas;
SELECT min (id) as 'minima id' from entradas;
SELECT SUM (id) as 'suma de id' from entradas;

