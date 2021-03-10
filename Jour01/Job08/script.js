function nbrPremier(nbr) {
    for (var i = 2; i < nbr; i++)
        if (nbr % i === 0) return false;
    return true;
}


function sommeNombrePremier(premier, deuxieme) {
    if ((nbrPremier(premier)) != false && (nbrPremier(deuxieme) != false)) {
        result = premier + deuxieme
        return result
    } else {
        return false
    }
}
console.log(sommeNombrePremier(5, 2))