// function bisextile(annee){

//      var annee = 365;
//      if (annee = 365){
//      return false 
//      }
//      else
//      {
//      return true
// }
// }  


console.log(bisextile(2020));

function bisextile(annee) {

     if ((annee % 4 == 0) && ((annee % 100 != 0) || (annee % 400 == 0))) return true;
     else return false;
}