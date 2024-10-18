 // home - Funktion		
			// ------------------------------------------------------------------------------
			$("#bioenergetik").click(function(){
					console.log('Bioenergetik geklickt');
					// Variante 1: laden einer seite über AJAX (Typ: html oder JSON und Daten können übermittelt werden)
					var data = ''; 						// Daten die wir mitgeben möchten, damit diese auf dem Server verarbeitet werden könnten
					$.ajax({
							url: 'seiten/bioenergetik.php', 			// welche Datei wird aufgerufen
							dataType: 'html', 				// Rückgabetyp von der url (JSON, HTML, XML usw.)
							data: data, 					// Daten die wir mitgeben möchten, damit diese auf dem Server verarbeitet werden könnten
							success: function(response){
								// was passiert wenn die Datei erfolgreich aufgerufen wurde
								console.log('Seite erfolgreich erhalten, wird nun im main dargestellt');
								$("main").html(response);	// Seite wird im main-Tag dargestellt
							}
						});
				});