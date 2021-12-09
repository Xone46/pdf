SELECT num,nom,fonction,FRPM emp WHERE fonction ="directeur"
SELECT num,nom, EMBAUCHE FROM emp WHERE embauche >= #01/01/1990#
SELECT Nom FROM emp WHERE NOM LIKE '?A*'
SELECT Nom FROM emp WHERE NOM LIKE '*I'
SELECT Nom,fonction FROM emp WHERE NOM LIKE '*I' AND fonction ='commercial'
SELECT Nom,fonction FROM emp WHERE NOM LIKE '*I' AND (fonction ='commercial' OR fonction ='ingenieur')
 