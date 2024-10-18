
function LoadMainSeite(url = "seiten/home.php", data = "") {
  // Variante 1: laden einer seite über AJAX (Typ: html oder JSON und Daten können übermittelt werden)
  var data = ""; // Daten die wir mitgeben möchten, damit diese auf dem Server verarbeitet werden könnten
  $.ajax({
    url: url, // welche Datei wird aufgerufen
    dataType: "html", // Rückgabetyp von der url (JSON, HTML, XML usw.)
    data: data, // Daten die wir mitgeben möchten, damit diese auf dem Server verarbeitet werden könnten
    success: function (response) {
      // was passiert wenn die Datei erfolgreich aufgerufen wurde
      $("main").html(response); // Seite wird im main-Tag dargestellt
    },
  });
}


// about - Funktion
// ------------------------------------------------------------------------------
$("#about").click(function () {
  console.log("About geklickt");
  LoadMainSeite("seiten/about.php");
});

// bioenergetik - Funktion
// ------------------------------------------------------------------------------
$("#bioenergetik").click(function () {
  console.log("Bioenergetik geklickt");
  LoadMainSeite("seiten/bioenergetik.php");
});

// home - Funktion
// ------------------------------------------------------------------------------
$("#home").click(function () {
  console.log("Home geklickt");
  LoadMainSeite("seiten/home.php");
});
// koerpertypen - Funktion
// ------------------------------------------------------------------------------
$("#koerpertypen").click(function () {
  console.log("Körpertypen geklickt");
  LoadMainSeite("seiten/koerpertypen/koerpertypen.php");
});

// masochistischer_typus - Funktion
// ------------------------------------------------------------------------------
$("#masochistischer_typus").click(function () {
  console.log("masochistischer Typus geklickt");
  LoadMainSeite("seiten/koerpertypen/masochistischer_typus.php");
});
// oraler_typus - Funktion
// ------------------------------------------------------------------------------
$("#oraler_typus").click(function () {
  console.log("oraler Typus geklickt");
  LoadMainSeite("seiten/koerpertypen/oraler_typus.php");
});
// psychopatischer_typus - Funktion
// ------------------------------------------------------------------------------
$("#psychopatischer_typus").click(function () {
  console.log("psychopatischer Typus geklickt");
  LoadMainSeite("seiten/koerpertypen/psychopatischer_typus.php");
});
// rigider_typus - Funktion
// ------------------------------------------------------------------------------
$("#rigider_typus").click(function () {
  console.log("rigider Typus geklickt");
  LoadMainSeite("seiten/koerpertypen/rigider_typus.php");
});
// schizoider_typus - Funktion
// ------------------------------------------------------------------------------
$("#schizoider_typus").click(function () {
  console.log("schizoider Typus geklickt");
  LoadMainSeite("seiten/koerpertypen/schizoider_typus.php");
});
// test1 - Funktion
// ------------------------------------------------------------------------------
$("#test1").click(function () {
  console.log("Test1 geklickt");
  LoadMainSeite("seiten/koerpertypen/test1.php");
});
