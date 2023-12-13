use blindcode ;
    /*
 Affichez tous les élèves qui n'ont pas de numéro de téléphone: On utilisera IS NULL
A l'inverse, affichez les élèves qui ont un numéro de téléphone: On utilisera IS NOT NULL: On peut faire autrement, rappelez-le moi :)
 */
 SELECT nom ,prenom , gsm , tel
 FROM eleve
 WHERE tel IS NULL ;

SELECT nom , prenom , gsm , tel
FROM eleve
WHERE tel IS NOT NULL ;