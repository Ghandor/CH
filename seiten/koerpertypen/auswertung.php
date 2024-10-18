
<script language="javascript" type="text/javascript" src="./public/js/tabs.js"></script>
<!-- Chartscript für die Auswertung der Körpertypen -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>


<h1>Auswertung: Welcher Körpertyp bist Du?</h1>
      <h4>Natürlich ist man nie genau ein bestimmter Typ, sondern eine Mischung der verschiedenen Typen. (<a href="?sites=gesellschaft/bioenergetik/koerpertypen">Hier</a> finden Sie übrigens eine Beschreibung, falls Sie diese noch nicht entdeckt haben). Mehr noch: Im Laufe des Lebens verändert sich diese Gewichtung, je nach persönlicher Erfahrung und den Schlüssen, die man darauf zieht.</h4>
      <?php
		$schizoider = 0;
$oraler = 0;
$psychopat = 0;
$masochist = 0;
$rigider = 0;
for ($i = 1; $i <= 104; $i++) {
    $frage = 'F' . $i;
    if (isset($_POST[$frage])) {
        $antwort = $_POST[$frage];
        switch ($antwort) {
            case 'D':
                $masochist++;
                break;
            case 'E':
                $rigider++;
                break;
            case 'C':
                $psychopat++;
                break;
            case 'A':
                $schizoider++;
                break;
            case 'B':
                $oraler++;
                break;
            case 'DD':
                $masochist++;
                $masochist++;
                break;
            case 'EE':
                $rigider++;
                $rigider++;
                break;
            case 'CC':
                $psychopat++;
                $psychopat++;
                break;
            case 'AA':
                $schizoider++;
                $schizoider++;
                break;
            case 'BB':
                $oraler++;
                $oraler++;
                break;
        }
    }
}

          echo "Anteil Oraler: " . $oraler . "<br />";
          echo "Anteil Schizoider: " . $schizoider . "<br />";
          echo "Anteil Psychopat: " . $psychopat . "<br />";
          echo "Anteil Masochist: " . $masochist . "<br />";
          echo "Anteil Rigider: " . $rigider . "<br />";
   


      $oraler = $oraler * 1;
      $schizoider = $schizoider * 1;
      $psychopat = $psychopat * 1;
      $masochist = $masochist * 1;
      $rigider = $rigider * 1;

      ?>
      <canvas id="koerpertypen" style="width:100%;max-width:1200px"></canvas>
      <script>
      
      var ctx = document.getElementById('koerpertypen').getContext('2d');
      var myChart = new Chart(ctx, {
         type: 'bar',
         data: {
            labels: ['Oraler Typus', 'Schizoider Typus', 'Psychopatgischer Typus', 'Masochistischer Typus', 'Rigider Typus'],
            datasets: [{
                  label: 'Deine Prägungen',
                  data: [<?php echo $oraler.",".$schizoider.",".$psychopat.",".$masochist.",".$rigider; ?>],
                  backgroundColor: [
                     'rgba(255, 99, 132, 0.2)',
                     'rgba(54, 162, 235, 0.2)',
                     'rgba(255, 206, 86, 0.2)',
                     'rgba(75, 192, 192, 0.2)',
                     'rgba(153, 102, 255, 0.2)'
                  ],
                  borderColor: [
                     'rgba(255, 99, 132, 1)',
                     'rgba(54, 162, 235, 1)',
                     'rgba(255, 206, 86, 1)',
                     'rgba(75, 192, 192, 1)',
                     'rgba(153, 102, 255, 1)'
                  ],
                  borderWidth: 1
            }]
         },
         options: {
            scales: {
                  yAxes: [{
                     ticks: {beginAtZero: true
                     
                  }}]
            }
         }
      });
      </script>
      <h4>In der Regel wird es so sein, dass Du eine Mischung verschiedener Körpertypen bist. Oben siehst Du, zu welchem Anteil die jeweiligen Typen Teil Deiner Prägung sind. Es versteht sich, dass sich diese Zusammensetzung im Laufe des Lebens ändert.</h4>
      <p>Du kannst unten auf die jeweiligen Tabs klicken, um Informationen über die unterschiedlichen Typen zu erhalten.</p>
      
      <!-- Ab hier die Tabs mit der B eschreibung der Typen --> 
      
      <!-- Tab links -->
      <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'oral')"><small>Oraler Typus</small></button>
        <button class="tablinks" onclick="openCity(event, 'schizo')"><small>Schizoider Typus</small></button>
        <button class="tablinks" onclick="openCity(event, 'psycho')"><small>Psychopatischer Typus</small></button>
        <button class="tablinks" onclick="openCity(event, 'maso')"><small>Masochistischer Typus</small></button>
        <button class="tablinks" onclick="openCity(event, 'rigide')"><small>Rigider Typus</small></button>
        <button class="tablinks" onclick="openCity(event, 'fragen')"><small>Fragen?</small></button>
      </div>
      
      <!-- Tab content -->
      <div id="oral" class="tabcontent" style="display:none">
        <h2>Oraler Typus</h2>
        <p>
        <h4>Ursächliche Faktoren</h4>
        <p>Deprivation, Entzug im Babyalter; fehlende Befriedigung, weil die Mutter nicht da war, krank war oder zu wenig Zeit hatte; zu wenig Liebe, Wärme, Körperkontakt; zu frühes Abstillen; nicht genügende Ernährung über den Mund; In der Kindheit oft Enttäuschungs- und Frustrationserlebnisse bei versuchter Kontaktaufnahme oder suche nach Nähe und Wärme; oft depressive Phasen in später Kindheit oder früher Jugend; Kompensationsverhalten: frühreife Entwicklung, frühes Gehen und Sprechen.</p>
        <h4>Energetischer Zustand</h4>
        <p>Ungenügende Ladung, die zur Peripherie des Körpers zwar fliesst, aber zu schwach. Mangel an Energie in Augen, Händen, Füssen und Genitalien; am wenigsten in der unteren Körperhälfte; Geschlechtsorgane nicht voll erregungsfähig.</p>
        <h4>Körperliche Erscheinung</h4>
        <img src="./public/sites/gesellschaft/bioenergetik/img/e_oral.gif" alt="der orale Typus" style="float: right; margin-left: 15px;">
        <p>Längenwachstum betont; Körper lang und dünn; Muskulatur unterentwickelt, vor allem an Armen und Beinen; oft unterernährt; Körper wirkt, als fiele er in sich zusammen; Becken meist klein; Körperbehaarung spärlich, Augen ausdruckslos; schmollender, saugender Mund; durch Entzug der oralen Befriedigung ist Saugimpuls vermindert - kein richtiges tiefes Atmen möglich -  Energiepegel bleibt niedrig.</p>
        <h4>Psychologische Begleitmerkmale</h4>
        <p>Angst: Allein und verlassen zu sein; Angst, zu sterben, nicht existieren zu können, wenn nicht genug 'Nahrung' da ist; ständiges Gefühl von Mangel ('Es ist nicht genug für mich da'); Resignation; mangelnde Selbständigkeit ('hilf mir', 'ich brauch dich, um zu überleben', 'mach's für mich'); Verantwortung abgeben; Anklammern oder Anlehnen an andere; nicht gut oder überhaupt nicht allein sein können; übertriebenes Bedürfnis nach Kontakt mit anderen Menschen, nach deren Wärme und Hilfe. Unterdrückung starker Sehnsuchts- oder Wunschgefühle erzeugt inneres Gefühl der Leere, andere sollen diese Leere ausfüllen; starke Stimmungsschwankungen (stake Depression - grundlose Freude); Einstellung, 'man schulde ihm etwas'; oft saugende, vereinnahmende Art, Unfähigkeit, zu geben; verminderte Aggressivität; Kompensationsverhalten: übertriebene Selbständigkeit, die jedoch in Stress-Situationen zusammenbricht. Nähe kann nur auf der Basis des Bedürfnisses nach Wärme und Halt hergestellt werden (infantile Basis); Konflikt: 'Wenn ich unabhängig und selbständig bin, muss ich auf Halt und Wärme verzichten'. Oraler bleibt daher in abhängiger Position ('Ich kann mein Bedürfnis nach Halt und Wärme befriedigen, solange ich nicht selbständig bin'). Häufig geht der orale Typus gar keine Beziehung ein (was es ihm dann nicht möglich macht, sich mit seinen Ängsten zu konfrontieren). Wenn er eine eingeht, dann möchte er alles von diesem einen Partner haben. Essen: Orale essen meist sehr viel, nehmen aber nicht zu (wachsen nicht wirklich an dem was, sie bekommen). Sexualität: Hingabefähigkeit, aber kein Feuer; zärtlich, Schmelzbedürfnisse; Sinnlichkeit; manchmal lasch. Stärken: Schönheitsideal; Anhänglichkeit, Zartes; Feinfühligkeit für Situationen, Stimmungen, Atmosphäre; Ästhetik. Häufige Krankheiten: Depression, Kreislauf, Gelenke.</p>
        <h4>Therapieziele</h4>
        <p>Kontaktaufnahme mit der ohnmächtigen Wut, dem Terror, den man erlebt hat; Annehmen der Wut; oft ist aber Arschtritt notwendig, dass diese Wut überhaupt zugelassen wird; am Anfang oft Theater -  das ist aber schon ein grosser Sprung, um mit Energien überhaupt in Kontakt zu kommen; zuerst ist Resignation da, dann kommt Wut. Oraler Typ muss lernen, aus eigener Kraft zu geben und darauf zu vertrauen, dass er auch dann noch geliebt wird, wenn er unabhängig und selbständig ist; er muss lernen, die eigenen Bedürfnisse und Sehnsüchte direkt auszudrücken. Beschäftigung mit dem Positiven: Feiern, Tanzen, Energie in Bewegung setzen! Gut: Rebirthing, Dynamische Meditation.</p>
      </div>
      <div id="schizo" class="tabcontent" style="display:none">
        <h2>Schizoider Typus</h2>
        <p>
        <h4>Ursächliche Faktoren</h4>
        <p>Zurückweisung durch die Mutter schon während der Schwangerschaft, während der Geburt oder kurz danach; versteckte oder auch offene Feindseligkeit der Mutter; versuchte Abtreibungsversuche; Schocks; -- wird vom Kind als Bedrohung seiner Existenz empfunden; Mangel an jedem starken positiven Gefühl der Sicherheit oder Freude; in Kindheit häufig Tagträume, nächtliche Alpträume, Angstzustände; Rückzugsverhalten (manchmal Autismus); dominierende Gefühle von panischer Angst und blinder Wut.</p>
        <h4>Energetischer Zustand</h4>
        <p>Die innere Ladung ist im Kern (Zentrum) gestaut und eingefroren und wird von den äusseren Körperteilen und Organen, die den Kontakt zur Aussenwelt herstellen (Gesicht, Hände, Füsse, Genitalien) zurückgehalten. Energiefluss wird durch chronische Muskelspannungen an der Kopfbasis, an den Schultern, im Becken und an den Hüftgelenken verhindert. Schwache Impulsbildung; durch den Stau ist die innere Ladung jedoch explosiv (Gewalttätigkeit bei Durchbruch möglich). Energetische Spaltung der oberen und unteren Körperhälfte.</p>
        <h4>Körperliche Erscheinung</h4>
        <img src="./public/sites/gesellschaft/bioenergetik/img/e_schizo.gif" alt="der schizoide Typus" style="float: right; margin-left: 15px;">
        <p>Der Körper wirkt meist schmal, zusammengezogen, verkrampft. Spannungen in den Gelenken (Schädelbasis, Schultergelenke, Beingelenke, Beckengelenke, Zwerchfellgegend) und kleinen Muskeln (vor allem Muskeln um die Sprechwerkzeuge); extreme Inflexibilität oder Hyperflexibilität der Gelenke. Die Körperlinie ist häufig gebrochen (links/rechts-Verschiebungen), Diskrepanz zwischen den Körperhälften, Oben - Unten - Schnitt. Schiefe Kopf- und Körperhaltung (z. B. im Sitzen, beim Gehen und Stehen). Die Bewegungen sind oft mechanisch und unkoordiniert, Gliedmassen 'körperfremd', Füsse und Hände häufig kalt und verkrampft. Das Gesicht ist oft maskenhaft, die Augen leer und abwesend, die Haut ist wachsartig, durchsichtig.</p>
        <h4>Psychologische Begleitmerkmale</h4>
        <p>Angst: Identitätsverlust, Vernichtungsangst, Angst auseinanderzufallen, sich im Kontakt mit anderen zu verlieren. Begrenztes selbst-Gefühl, schwaches Ich, stark reduzierter Kontakt zum eigenen Körper und zu Gefühlen. Spaltung der Persönlichkeit in entgegengesetzte Einstellungen, dabei Schwierigkeiten, diese miteinander zu verbinden (z. B. Arroganz - Minderwertigkeit, Jungfrau - Hure). Durch schwache Ich-Abgrenzung Überempfindlichkeit und extreme Sensibilität - erfordert oft Abwehrmuster. Vermeiden von intimen, gefühlsbetonten Beziehungen bzw. Schwierigkeiten, diese herzustellen; «wenn ich mein Bedürfnis nach Nähe ausdrücke ist meine Existenz bedroht». Aktionen und Taten werden vom Kopf aus motiviert ('Mein Kopf ist mein Sein'), alles, was im Kopf ist, ist wirklich. Oft Flucht in Traumwelt, wenn die Realität nicht angenommen werden will, oft extrem wenig Kontakt zur Umgebung. Isolation ('Ich kann existieren, sofern ich keine Nähe brauche'). Kompensation der Angst durch aussergewöhnliche Leistungen - Künstler, Genies, - wobei der Motor für alles Tun die Suche nach der eigenen Identität ist. Oder: Suche nach extremen Erfahrungen, um sich spüren zu können (Bergsteigen, Autorennen, Drogen, etc.) Um das Gefühl des Getrenntseins von der Umwelt zu überwinden manchmal extreme Anpassung an die Umgebung (Chamäleon, Film von W. Allen: Zelig). Identität: schnelle Wechsel, heute habe ich gewonnen an Identität, morgen weiss ich nicht mehr, wer ich bin. Schlafen/Wachen: Schwierigkeiten, schlafen zu gehen und Aufzustehen (Wechsel von einem Zustand zum anderen wird als bedrohlich erlebt). Sexualität: wenig Ladung in Genitalien, aber Ekstasefähigkeit, kaum genitaler Orgasmus, oft sexuelle Fantasien (Mind_Fuck). Es geht nicht um Entladung, sondern um Aufladung, Auflösung, kosm. Orgasmus. Stärken des Typus (wenn Muster befreit sind): Vielseitigkeit, Verrücktheit, Aussergewöhnlichkeit, Phantasie, Tiefe, Sensibilität und Feinfühligkeit, Flexibilität, Anpassungsfähigkeit, Spielen versch. Rollen, Zugang zu anderen Wirklichkeiten. Häufige Krankheiten: Gelenkserkrankungen, Migräne, Alkoholismus/Drogen, Nieren/Blase, Sehstörungen, Kreislaufbeschwerden.</p>
        <h4>Therapieziele</h4>
        <p>Am wichtigsten: Gefühl für sich selbst entwickeln, Körperkontakt, Vertrauen! Raum geben, dass Klient wirklich in seine Extremteile hineingehen kann, es geht nicht darum, dass die versch. Identitäten zusammengebracht werden, sondern dass sie angenommen werden. Zum Kern (Angst der Vernichtung) kommen und die Angst annehmen, leben. Positive leere kann daraus entstehen. Gut: Alles was beschäftigt, am Boden hält, ins Hier und Jetzt bringt (Massage, Körperarbeit, Körperbewusstheit, Zentrierungsübungen, Bewegung, Tai Chi, aktive Meditation). Körperübungen erfordern oft viel Geduld, da die Angst da ist, auseinanderzufallen, kleine Schritte. Der schizoide Typus muss geschmolzen werden, direkte Konfrontation ist kaum möglich (geschicktes Ausweichen, 'Schlüpfrigkeit'), eher 'verführen' möglich. Wichtigste Voraussetzung für Therapie: zuerst hergestelltes Vertrauen und Sicherheit, Gefühl, wirklich angenommen zu sein.</p>
      </div>
      <div id="psycho" class="tabcontent" style="display:none">
        <h2>Psychopatischer Typus</h2>
        <p>
        <h4>Ursächliche Faktoren</h4>
        <p>Hauptfaktor ist ein sexuell verführender Elternteil (unterschwellig); Verführung mit dem Ziel, das Kind an sich zu binden (und dabei die eigenen narzisstischen Bedürfnisse zu befriedigen). Verführung wird vom Kind als Zurückweisung erlebt und damit auch als Mangel an Kontakt und Halt; Verführungsbeziehung lässt Dreiecksverhältnisse entstehen, in dem das Kind mit dem gleichgeschlechtlichen Elternteil konkurriert und sich daher nicht mit diesem identifizieren kann. In dieser Situation wird das Kind sehr verletzlich und es setzt sich über seine Bedürfnisse hinweg (tyrannisierender Typus) oder es manipuliert seine Eltern (manipulierender Typus). andere Faktoren sind starke Einschränkungen von aussen (verbale und nonverbale), die von den Eltern auf beherrschende oder manipulierende Art vermittelt werden: 'sei still!', 'gib Ruhe' (beherrschend) oder 'du brauchst nur lieb zu sein!', 'du bist ja so lieb, aber jetzt sei still!' (manipulativ). Das Kind will sich die Welt erobern und kämpft gegen diese Einschränkungen (indem es Geschwister, Spielkameraden tyrannisiert oder die Eltern manipuliert). Die Demütigungen durch die Eltern lässt Hass entstehen, und damit auch Schuldgefühle gegenüber ihnen.</p>
        <h4>Energetischer Zustand</h4>
        <p>Obere und untere Körperhälfte stehen energetisch in auffallendem Missverhältnis; alle Energie fliesst zum Kopf (ständiges Überlegen, wie eine Situation unter Kontrolle gebracht werden kann). Fluss von Energie und Gefühlen ist nach unten blockiert (starke Verkrampfungen in der Zwerchfell- und Taillengegend). Tyrannischer Typ: das Becken ist ungenügend geladen; alle Energie fliesst aufwärts; Becken starr. Manipulativer Typ: Becken zu stark geladen; nicht mit dem Kern verbunden.</p>
        <h4>Körperliche Erscheinung</h4>
        <img src="./public/sites/gesellschaft/bioenergetik/img/e_psycho.gif" alt="der psychopatische Typus" style="float: right; margin-left: 15px;">
        <p>Tyrannischer Typ: Oberkörper sehr stark entwickelt; unten schmal (oral); hochgezogene, 'gepolsterte' Schultern; herausgestreckte Brust; starrer Körperbau; Augen brillant; Kopf insgesamt sehr wach. Manipulativer Typ: Körper ausgeglichener; Rücken hyperflexibel; Augen verführend. Beide Typen haben Verspannungen in der Zwerchfellgegend, in der Augenpartie und am Hinterkopf.</p>
        <h4>Psychologische Begleitmerkmale</h4>
        <p>Angst: vor Erniedrigung und Niederlage; unterlegen zu sein; Angst vor Abhängigkeit; Angst vor Fehlern; Angst vor Bedürftigkeit. Das Grundgefühl der Minderwertigkeit äussert sich in dem Bedürfnis, andere zu steuern, zu manipulieren, die Kontrolle zu bewahren; gleichzeitig aber auch Abhängigkeit von denjenigen, die gesteuert und kontrolliert werden (d.h., der psychopatische Typ hat auch orale Persönlichkeit. Furcht, gesteuert zu werden (und damit benützt zu werden) bewirkt Bedürfnis, selbst zu steuern. Konflikt zwischen Unabhängigkeit bzw. Selbständigkeit und Bedürfnis nach Geborgenheit und Anschluss ('Ich kann dir nahe sein, wenn ich zulasse, dass du mich lenkst oder benutzt'); Zwickmühle (Bedürfnisse können nicht geleugnet werden, wie z.B. der schizoide Typus es tut, Risiko der Unabhängigkeit ist auch zu gefährlich - wie Oraler es macht); Der Psycho muss also Kontrolle über andere behalten, damit er Nähe zulassen kann; 'Du darfst mir nahe sein, solange du zu mir aufblickst' anstatt: 'Ich habe das Bedürfnis, dir Nahe zu sein'. Der psychopatische Typ muss in jeder Konkurrenzsituation Sieger bleiben ('Ich gebe niemals auf!' 'Ich lass mich nicht unterkriegen!' 'alles kann ich haben, wenn ich nur will'); wobei er fast immer mit Sexualität bzw. einschmeichelnden Verführungskünsten arbeitet. Er will alles unter Kontrolle haben (illusionäre Freiheit). Tyrannischer Typ: offensichtlich, konfrontierend, stolz (vor allem wenn starke rigide Anteile dabei sind); 'Ich bin der Stärkere!' Manipulativer Typ: trycki, hintenherum, schlau, verführerisch 'Du kriegst mich nicht' (umso stärker, je mehr Schizo- oder Masoanteile dabei sind). Leugnen von Gefühlen: Bedeutet, dass der psychopatische Typ sein Bedürfnis nach anderen Menschen leugnet; mit Manövern bringt er andere dazu, dass sie ihn brauchen, damit er seine Bedürfnisse nicht zeigen muss. Der psychopatische Typ kann nie entspannen, sich kaum hingeben; kontrolliertes Atemmuster! In der Gesellschaft ist er oft in leitenden Positionen; Machtmenschen, aber auch Herrschaft im positiven Sinn; auch Mode ist psychopatisch bestimmt. Sexualität: Lust und Sex ist Machtmittel, um Kontrolle auszuüben, andere zu benützen; die sexuelle Betätigung ist meist von Leistungszwang begleitet (häufig Impotenz als Begleiterscheinung); Lust spielt eine sekundäre Rolle; schwache energetische Impulse abwärts. Der psychopatische Typus 'tut' viel, kann sich kaum hingeben und geniessen. Stärken: Direktheit, Kraft und Stärke, mut, Wille, Angreifbarkeit (beim tyrannischen Typ); Begabung, andere aus der Reserve zu holen; Macht im positiven Sinn. Häufige Krankheiten: Magengeschwüre, Herzkrankheit (wenn er verliert) Midlife-Krise.</p>
        <h4>Therapieziele</h4>
        <p>Der psychopatische Typ muss dahin gebracht werden, dass er aufgibt und an die tieferen Schichten seiner Persönlichkeit kommt, d.h. an seine Bedürftigkeit, seine Traurigkeit, sein Verletztsein, seine Angst, manipuliert und kontrolliert zu werden. Möglichkeiten: durch Verunsicherung und Fehlschläge; durch Erfolgskarriere und darauf folgende Midliefe-Krise, durch Hingabe und Grounding; Verbindung zum Herz (Schmelzen!) er muss lernen zu nehmen, rezeptiv zu sein, seine Bedürfnisse zu äussern, zu bitten, dankbar zu sein. wichtig für Therapie: nicht auf Kampf einsteigen, Aufgaben stellen, aus dem Kopf herausbringen und Verbindung zum Herz herstellen. Zuerst kommt Wut, dann Traurigkeit. Gut: Körperarbeit, Pulsation, 'Kopfabnehmen', alle Energieübungen.</p>
      </div>
      <div id="maso" class="tabcontent" style="display:none">
        <h2>Masochistischer Typus</h2>
        <p>
        <h4>Ursächliche Faktoren</h4>
        <p>Störungen in der Zeit, wo das Kind anfängt, sein 'Nein' zu entwickeln (Reinlichkeitserziehung, frühes Trotzalter); Familie, in der Liebe und Anerkennung mit starkem Druck einhergehen. Beim Kind wird 'Nein' zerschlagen bzw. weggesteckt. Dominierende, sich aufopfernde Mutter erstickt das Kind ('Sei ein braves Kind', 'mach deiner Mutter Freude', 'iss brav deinen Teller leer',...), der Vater ist meist passiv und unterwürfig. Schuldgefühle bei Versuchen, selbständig zu sein, 'Nein' zu sagen. Im Vordergrund sind Kinder dann lieb und freundlich, im Hintergrund ist das 'Nein' immer da (Sabotage). Starke Fixierung auf Essen und Reinlichkeitserziehung. alle Wutanfälle werden im Keime erstickt (Hass und Groll aufgrund der Erniedrigungsgefühle).</p>
        <h4>Energetischer Zustand</h4>
        <p>Ladung im Inneren sehr stark, wird aber mit allen Mitteln zurückgehalten oder eingedämmt. Die äusseren Organe und Körperteile sind nur ungenügend geladen (Entladung und Entspannung unmöglich). Impulse nach oben und unten werden im Hals und in der Taille abgewürgt (Dabotage-Muskulatur) - ausgeprägte Angsttendenz.</p>
        <h4>Körperliche Erscheinung</h4>
        <img src="./public/sites/gesellschaft/bioenergetik/img/e_maso.gif" alt="der masochistische Typus" style="float: right; margin-left: 15px;">
        <p>Kurzer, dicklicher, muskulöser Körper, kurzer dicker Hals und Taille (zusammengestaucht). Vorgeschobenes Becken und eingezogenes Gesäss, Füsse nach aussen gerichtet; Knopfaugen; Fettring um die Taille, tiefsitzender ring muskulärer Spannung. Eingezogene Daumen, dunkel getönte Haut, meist starke Körperbehaarung.</p>
        <h4>Psychologische Begleitmerkmale</h4>
        <p>Angst: vernichtend bestraft zu werden, wenn er das 'Nein' zeigt und sich selbst behauptet; wenn er Gefühle zeigt. Äusserlich: Unterwürfigkeit ('Nur wenn ich mich selbst verleugne, bekomm ich deine Liebe'), Under-Dog ('Ich versuch es dir recht zu machen'); Schwäche, Leiden, Jammern, Sumpf, Gefallsucht. Darunter (unbewusst): Hass-, Negativismus-, Feindseligkeits- und Überlegenheitsgefühle ('Ich geb dir recht, und tu was du willst, aber ich behalte mich', 'Du kriegst mich nie'); jedoch Furcht, dass diese Gefühle in gewalttätiges Verhalten ausbrechen könnten. Aggressivität ist stark vermindert. Doch manchmal herausforderndes Verhalten, um den anderen dazu zu bringen, dass er heftig reagiert, um selbst auch explosiv reagieren zu können. Angst, aus sich heraus zu gehen oder nach etwas zu greifen (aus Furcht, verstümmelt zu werden, Kastrationsangst!), daher schwerfällige Energie, wenig Bewegung, Faulheit, Bequemlichkeit; traurige Ausstrahlung (wegen unterdrücktem Nein). Der masochistische Typ ist schwer fassbar, meist charmant, einwickelnd, ohne Angriffsfläche. (Nicht greifbar wie z.B. der psychopatische Typus). Konflikt zwischen Bedürfnis nach Liebe und Freiheitsbedürfnis ('Wenn ich frei bin, wirst du mich nicht lieben'). Der Masochist erklärt deshalb: 'Ich will dir gehorchen und du wirst mich dafür lieben'. Sexualität: Die Energie wird an der Taille abgewürgt; Angst, aktiv zu werden (wird gleichgesetzt mit Bestrafung); oft Kastrationsangst; Trägheit, Bequemlichkeit. Der masochistische Typus lässt andere für sich machen. Stärken: Freundlichkeit, Gemütlichkeit, Häuslichkeit, Hilfsbereitschaft; liebt das Harmonische; Möglichkeit, bei ihm zu entspannen; nichts Bedrohliches, Ruhe. Häufige Krankheiten: Verdauungsbeschwerden (v.a. Verstopfung), Asthma, Atembeschwerden, hoher Blutdruck.</p>
        <h4>Therapieziele</h4>
        <p>Im richtigen Augenblick mit Liebe aufzeigen, dass 'Nein' da ist. Manchmal ist auch Konfrontation notwendig (Stau erhöhen und damit 'Nein' spürbar machen, z. B. Luft anhalten oder zusammenpressen). Ekelgefühle sichtbar machen und annehmen. Der Maso ist oft sehr indirekt - Klarheit und Offenheit im Ausdruck fördern: lernen, zu sich selbst zu stehen, zu seinem 'Nein' zu stehen. Gut: Atmen, Körperarbeit, Bewegung, Tanzen, Tiefenmassage (PI, Rohlfing)...</p>
      </div>
      <div id="rigide" class="tabcontent" style="display:none">
        <h2>Rigider Typus</h2>
        <p>
        <h4>Ursächliche Faktoren</h4>
        <p>Frustrations- und Versagenserlebnisse beim Streben nach erotischer Befriedigung im Alter, wo Gefühl für Sexualität auftaucht. Das Kind wird für sexuelle Interessen bestraft oder sexuelles Interesse eines Elternteiles wird vom Kind als bedrohlich erlebt. Zurückweisung des Bedürfnisses nach erotischer und sexueller Lust wird als Zurückweisung des Liebesbedürfnisses erlebt, als Verletzung des Stolzes. Das Kind holt sich Nähe dann indirekt, indem es zu manövrieren beginnt.</p>
        <h4>Energetischer Zustand</h4>
        <p>Viel Energie, die vom Zentrum nach aussen geht, aber an der Peripherie gestoppt wird; Gefühle fliessen, werden aber nur beschränkt ausgedrückt. Heisse Gliedmassen, starke Oberflächenspannung, Hauptspannung in äusserer Muskulatur (vor allem in den langen Muskeln - Streck- und Beugemuskeln). Der rigide Typus ist leicht erregbar, drückt aber seine eigenen Impulse nur wenig aus. Augen: energetisch aufgeladen, Ausdruck eines gebrochenen Herzens.</p>
        <h4>Körperliche Erscheinung</h4>
        <img src="./public/sites/gesellschaft/bioenergetik/img/e_rigide.gif" alt="der rigide Typus" style="float: right; margin-left: 15px;">
        <p>Der Körper ist gut proportioniert, muskulös, kompakt, sehr lebhaft und beweglich. Gute Hautfarbe, glänzende Augen; Beckenbereich zurückgeschoben (zurückgehaltene Sexualität), Hohlrücken, sehr betonten Po (Sexy-Po); betont gerade Rückgrat und hochgehaltenen Kopf (rigide - steife Haltung - Stolz!)</p>
        <h4>Psychologische Begleitmerkmale</h4>
        <p>Angst: verraten und ertappt zu werden, wenn er sich hingibt; Angst bei Hingabe und Unterwerfung die Freiheit zu verlieren, manipuliert und ausgenützt zu werden. Tendenz, sich steif zu halten (aus Stolz oder Unnahbarkeit) und nicht nachzugeben. Nachgeben wird mit Kollaps gleichgesetzt; starke Ich-Position ist gepaart mit starker Verhaltenskontrolle ('Ich kann frei sein, wenn ich mich nicht hingebe, wenn ich meine Energie nicht fliessen lasse', 'Ich gebe nichts her'); richtige Entladung ist daher kaum möglich. Restlose Hingabe und Öffnung wäre traumatisch, da dann die rigide Körperstruktur aufgeweicht wird und geballte Ladung von Energie zum Vorschein kommt - und damit auch die einstmals bestraften Bedürfnisse nach Lust und Sexualität. Rigide sind meist weltorientiert, ehrgeizig, kämpferisch und aggressiv; Passivität wird als Verwundbarkeit empfunden. Oft auch eigensinnig und störrisch (auf Stolz beruhend); Angst, lächerlich oder dumm zu wirken, wenn er sich hingibt oder sich gehen lässt. Rigide haben ein starkes Gefühl für sich selbst und können viel aus sich machen (vor allem wenn Struktur aufgeweicht ist); erfolgreiche Menschen, die sich gerne darstellen ('Darstellen ist alles'), die mit Sex-Appeal alles erreichen, wobei aber die Hingabe fehlt und das Herz nicht offen ist. Männer: Potenzprotze, phallisch disponierter, narzisstischer Typ. Frauen: viktorianischer Typ der hysterischen Frau, die Sex als Abwehr gegen Sexualität benützt; Frigidität. Nicht-Einlassen: Der rigide Typ bleibt letztendlich allein mit seiner Energie ('Ich zeig's dir, aber ich geb's dir nicht'). Konflikt: Freiheit gegen Kapitulation vor der Liebe ('Ich kann frei sein, wenn ich nicht den Kopf verliere und nicht vor der Liebe kapituliere'). Der Rigide achtet darauf, dass sein Verlangen und seine Liebe nicht zu stark werden. Sexualität: siehe Männer/Frauen; nicht Einlassen, keine Hingabe, Show, keine wirkliche Entladung und Entspannung, viel Energie. Stärken: Leidenschaftlichkeit, Energie, Ekstasefähigkeit, beneidenswertes Selbstgefühl, physische Kraft, schöner Körper, Beweglichkeit; wenn von Muster befreit: Hingabe. Häufige Krankheiten: Krebs, Koliken, Unfälle (nach innen gerichtete Aggression), Alkoholismus (mit starkem Alkohol) - Selbstzerstörung; alle aggressiven Krankheiten.</p>
        <h4>Therapieziele</h4>
        <p>Kontrolle aufgeben, Hingabe, Herz öffnen; Gut: alles, was Energie und Gefühle in Bewegung setzt (z. B. Pulsation). Rigide kommen aber selten in Therapie, da sie von sich überzeugt sind und für sie alles zum Besten steht; kaum Leidensdruck.</p>
        </p>
      </div>
      <div id="fragen" class="tabcontent" style="display:none">
        <h2>Fragen ?</h2>
        <p>Falls Du Fragen oder Anregungen hast, falls technische Probleme stören, danke ich Dir für eine Mitteilung an <a href="mailto:"paul@strassmann.ch>paul@strassmann.ch</a>.<br />
          Sehr gerne unterhalte ich mich über das Rätsel der Bioenergetik. Ich habe diese Methode im weissen Lotus bei <a href="https://burkhardt-kiegeland.net" target="_blank">Burkhardt Kiegeland</a> kennen und schätzen gelernt. Welche Erfahrungen mit diesem Thema hast Du? Ich freue mich natürlich über einen Austausch und danke an dieser Stelle für Deine Mitteilung.<br />
          Falls Du mehr Informationen über diese Lehre kennen lernen willst, empfehle ich Dir Bücher über Wilhelm Reich, Alexander Lowen und vor allem - sehr gut und unterhaltend lesbar - das Buch: <a href="http://www.amazon.de/exec/obidos/ASIN/3922389317/strassmann-21" alt="Per Klick direkt bestellen bei Amazon: Körpertypen. Vom Typentrauma zum Traumtypen Broschiert – 1. Januar 1988 "  title="Per Klick direkt bestellen bei Amazon: Körpertypen. Vom Typentrauma zum Traumtypen Broschiert – 1. Januar 1988 " target="_blank">'Körpertypen - vom Typentrauma zum Traumtypen'</a> von Roland Bäurle. </p>
      </div>      
