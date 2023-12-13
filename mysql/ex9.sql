use blindcode ;
/*
    Affichez les élèves nés entre 1980 ET 1990.
Affichez les élèves qui ne sont pas nés entre 1980 ET 1990.
    Pour cela, vous devez inverser la requête précédente.
    Pour rappel, dans une inversion de condition:
AND devient OR
OR devient AND
= devient <>
<> devient =
> devient <=
>= devient <
< devient >=
<= devient >
    Exemple: a \< b AND d >= e devient a \>= b OR d \< e A vous de jouer. :-)
Reprenez la requète des élèves nés entre 1980 ET 1990.
    Encadrez celle-ci de parenthèses et ajoutez juste devant le NOT.
    Vous devriez avoir le même résultat que la requête précédente.
    Parfois quand on a des requêtes complexes, il est plus facile de les inverser en ajoutant un NOT devant la requête.
    C'est plus facile que de tout inverser. :-)
 */
 SELECT nom, prenom , naissance
 FROM eleve
 WHERE naissance =  >='1980-01-01' AND <'1990-01-01' ;