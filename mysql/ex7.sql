use blindcode ;
    /*Affichez les élèves
  dont le code postal est dans les 4000
  */
SELECT nom , prenom , cp
FROM eleve
WHERE cp BETWEEN 6000 AND 6999 ;

SELECT nom , prenom , cp
FROM eleve
WHERE cp BETWEEN 1000 AND 1999 ;

SELECT nom , prenom , cp
FROM eleve
WHERE cp >=4000 AND cp <=4999 ; /* cp >=4000 AND cp <=4999     */

SELECT nom , prenom , cp
FROM eleve
WHERE cp BETWEEN 5000 AND 5999 ;