var monthname = ['janvier', 'fevrier', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'november', 'decembre'];
var jourferie = ['01/01/2020', '04/05/2020', '05/01/2020', '05/08/2020', '05/13/2020', '05/24/2020', '07/14/2020', '08/15/2020', '11/01/2020', '11/11/2020', '12/25/2020'];

function jourtravaille(date) {
    date = new Date(date);

    for (i = 0; i < 11; i++) {
        var datejourferie = new Date(jourferie[i]);
        if (date.getTime() == datejourferie.getTime()) {
            var monthvalue = date.getMonth()
            console.log('non, ' + date.getDate() + " " + monthname[monthvalue] + " " + date.getFullYear() + " est un jour ferié")
            return
        }

    }

    if (date.getDay() == 0 || date.getDay() == 6) {
        var monthvalue = date.getMonth()
        console.log('non, ' + date.getDate() + " " + monthname[monthvalue] + " " + date.getFullYear() + " est un jour de week-end")
    } else {
        var monthvalue = date.getMonth()
        console.log('oui, ' + date.getDate() + " " + monthname[monthvalue] + " " + date.getFullYear() + " est un jour travaillé")
    }
}
jourtravaille("01/01/2020")