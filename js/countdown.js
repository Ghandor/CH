
    var urodz = new Date("December 1, 2021");
var now = new Date();
var ile = urodz.getTime() - now.getTime();
var dni = Math.floor(ile / (1000 * 60 * 60 * 24));
if (dni > 1)
    document.write("Bis dahin dauert es genau " + dni + " Tage. Ich bin gespannt...")
else if (dni == 1)
    document.write("Nur noch zwei Tage bis Ende des Jahrhunderts!")
else if (dni == 0)
    document.write("Nur noch einen Tag bis Ende des Jahrhunderts")
else
    document.write("December 1, 2021");
