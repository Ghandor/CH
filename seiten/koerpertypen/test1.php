
<h1>Test Körpertypen</h1>
<h4>Teil I: Klicke bei jeder Frage auf eine der möglichen Antworten. Sollte keine Antwort zutreffen, dann entscheide dich für die, die deiner Ansicht am nächsten kommt. Bitte alle Fragen beantworten und dann auf «Weiter» klicken.</h4>
<h4>Dieser Test ist völlig diskret, keinerlei Daten werden gespeichert oder irgend wohin übermittelt.</h4>
<br />

<!-- Hier fängt das Formular an -->
<form name="Koerpertypen" method="POST" action="test2.php">
 
	
<?php
function getarr($string)
{
  $werte = explode(';', $string);
  $antwort = array();
  $antwort['id'] = $werte[0];
  $antwort['name'] = $werte[1];
  $antwort['value'] = $werte[2];
  $antwort['span'] = $werte[3];
  return $antwort;
}
$ask = array();
/* 1. Frage----------------------------------------------------------- URLAUB */
$i = 0;
$f = $i + 1;
$ask[$i]['text'] = $f . '. Welche Art Urlaub bevorzugst Du?';
$ask[$i]['anser'][] = getarr($f . 'a;F' . $f . ';D;Ich bleibe am liebsten daheim oder fahre immer an denselben Ort');
$ask[$i]['anser'][] = getarr($f . 'b;F' . $f . ';E;Ich will möglichst viel sehen und erleben');
$ask[$i]['anser'][] = getarr($f . 'c;F' . $f . ';C;Abenteuerurlaub');
$ask[$i]['anser'][] = getarr($f . 'd;F' . $f . ';A;Ich fahre am liebsten in die Berge oder in einsame Gegenden');
$ask[$i]['anser'][] = getarr($f . 'e;F' . $f . ';B;Sonne, Meer und viele Menschen');

/* 2. Frage----------------------------------------------------------- Filme */
$i = 1;
$f = $i + 1;
$ask[$i]['text'] = $f . '. Welche Art von Filmen siehst du am liebsten?';
$ask[$i]['anser'][] = getarr($f . 'a;F' . $f . ';C;Actionfilme');
$ask[$i]['anser'][] = getarr($f . 'b;F' . $f . ';B;Romantische Filme');
$ask[$i]['anser'][] = getarr($f . 'c;F' . $f . ';E;Erotische Filme');
$ask[$i]['anser'][] = getarr($f . 'd;F' . $f . ';A;Gruselfilme');
$ask[$i]['anser'][] = getarr($f . 'e;F' . $f . ';D;Humorvolle Filme');

/* 3. Frage----------------------------------------------------------- Angst */
$i = 2;
$f = $i + 1;
$ask[$i]['text'] = $f . '. Wovor hast Du am meisten Angst?';
$ask[$i]['anser'][] = getarr($f . 'a;F' . $f . ';E;Vor Abhängigkeit');
$ask[$i]['anser'][] = getarr($f . 'b;F' . $f . ';B;Vor dem Alleinsein');
$ask[$i]['anser'][] = getarr($f . 'c;F' . $f . ';A;Vor Nähe');
$ask[$i]['anser'][] = getarr($f . 'd;F' . $f . ';C;Vor Unterdrückung');
$ask[$i]['anser'][] = getarr($f . 'e;F' . $f . ';D;Vor Demütigung');

/* 4. Frage----------------------------------------------------------- Partner */
$i = 3;
$f = $i + 1;
$ask[$i]['text'] = $f . '. Was tust du, nachdem du mit deinem Partner geschlafen hast?';
$ask[$i]['anser'][] = getarr($f . 'a;F' . $f . ';E;Ich möchte am liebsten von vorne anfangen');
$ask[$i]['anser'][] = getarr($f . 'b;F' . $f . ';C;Ich erkundige mich, ob ich auch gut gewesen bin');
$ask[$i]['anser'][] = getarr($f . 'c;F' . $f . ';B;Ich überschütte meinen Partner mit Zärtlichkeiten');
$ask[$i]['anser'][] = getarr($f . 'd;F' . $f . ';D;Ich entschuldige mich, weil ich zu früh oder gar nicht gekommen bin');
$ask[$i]['anser'][] = getarr($f . 'e;F' . $f . ';A;Ich habe keinen Partner');


/* 5. Frage----------------------------------------------------------- Komiker */
$i = 4;
$f = $i + 1;
$ask[$i]['text'] = $f . '. Welcher dieser Komiker ist dir am sympathischsten?';
$ask[$i]['anser'][] = getarr($f . 'a;F' . $f . ';A;Woody Allen');
$ask[$i]['anser'][] = getarr($f . 'b;F' . $f . ';C;Bud Spencer');
$ask[$i]['anser'][] = getarr($f . 'c;F' . $f . ';D;Oliver Hardy («Dick»)');
$ask[$i]['anser'][] = getarr($f . 'd;F' . $f . ';B;Stan Laurel («Doof»)');
$ask[$i]['anser'][] = getarr($f . 'e;F' . $f . ';E;Charlie Chaplin');


/* 6. Frage----------------------------------------------------------- Sätze */
$i = 5;
$f = $i + 1;
$ask[$i]['text'] = $f . '. Welcher dieser Sätze könnte am ehesten von dir stammen?';
$ask[$i]['anser'][] = getarr($f . 'a;F' . $f . ';AA;Mit mir ist etwas verkehrt');
$ask[$i]['anser'][] = getarr($f . 'b;F' . $f . ';DD;Ich mache alles verkehrt');
$ask[$i]['anser'][] = getarr($f . 'c;F' . $f . ';BB;Es ist niemand für mich da');
$ask[$i]['anser'][] = getarr($f . 'd;F' . $f . ';CC;Ich brauche niemanden');
$ask[$i]['anser'][] = getarr($f . 'e;F' . $f . ';EE;Ich werde es schaffen');


/* 7. Frage----------------------------------------------------------- Komiker */
$i = 6;
$f = $i + 1;
$ask[$i]['text'] = $f . '. Du kommst in eine Diskothek, in der du niemanden kennst. Wie verhältst du dich?';
$ask[$i]['anser'][] = getarr($f . 'a;F' . $f . ';A;Ich setze mich auf einen Eckplatz und beobachte die Szenerie');
$ask[$i]['anser'][] = getarr($f . 'b;F' . $f . ';E;Ich versuche, mit netten Menschen ins Gespräch zu kommen');
$ask[$i]['anser'][] = getarr($f . 'c;F' . $f . ';C;Ich gehe auf die Tanzfläche');
$ask[$i]['anser'][] = getarr($f . 'd;F' . $f . ';D;Ich fühle mich unwohl, versuche aber, das nicht zu zeigen');
$ask[$i]['anser'][] = getarr($f . 'e;F' . $f . ';B;Ich schaue hilflos herum und warte darauf, dass mich jemand anspricht');


/* 8. Frage----------------------------------------------------------- Streit */
$i = 7;
$f = $i + 1;
$ask[$i]['text'] = $f . '. Ein guter Freund bricht grundlos einen Streit vom Zaun. Wie verhältst Du dich?';
$ask[$i]['anser'][] = getarr($f . 'a;F' . $f . ';C;Ich schreie zurück');
$ask[$i]['anser'][] = getarr($f . 'b;F' . $f . ';D;Ich gebe um des lieben Friedens willen nach');
$ask[$i]['anser'][] = getarr($f . 'c;F' . $f . ';B;Ich rede beruhigend auf ihn ein');
$ask[$i]['anser'][] = getarr($f . 'd;F' . $f . ';A;Ich ziehe mich zurück');
$ask[$i]['anser'][] = getarr($f . 'e;F' . $f . ';E;Ich erkläre ihm, dass ich auch noch andere Freunde habe');


/* 9. Frage----------------------------------------------------------- Geheimnis */
$i = 8;
$f = $i + 1;
$ask[$i]['text'] = $f . '. Jemand vertraut dir ein Geheimnis an. Wie gehst du damit um?';
$ask[$i]['anser'][] = getarr($f . 'a;F' . $f . ';D;Ich hoffe, mich nicht irgendwann zu verplappern');
$ask[$i]['anser'][] = getarr($f . 'b;F' . $f . ';A;Ich behalte es für mich');
$ask[$i]['anser'][] = getarr($f . 'c;F' . $f . ';C;Ich vergesse es');
$ask[$i]['anser'][] = getarr($f . 'd;F' . $f . ';E;Es fällt mir schwer, es für mich zu behalten, aber ich versuche es trotzdem');
$ask[$i]['anser'][] = getarr($f . 'e;F' . $f . ';B;Ich erzähle es nur engen Freunden weiter, auf die ich mich wirklich verlassen kann');


/* 10. Frage----------------------------------------------------------- Berufswunsch */
$i = 9;
$f = $i + 1;
$ask[$i]['text'] = $f . '. Was wolltest du als Kind werden?';
$ask[$i]['anser'][] = getarr($f . 'a;F' . $f . ';E;Sportler oder Schauspieler');
$ask[$i]['anser'][] = getarr($f . 'b;F' . $f . ';A;Künstler');
$ask[$i]['anser'][] = getarr($f . 'c;F' . $f . ';C;Berühmt');
$ask[$i]['anser'][] = getarr($f . 'd;F' . $f . ';B;Reich');
$ask[$i]['anser'][] = getarr($f . 'e;F' . $f . ';D;Nichts Besonderes');


/* 11. Frage----------------------------------------------------------- Wohnung */
$i = 10;
$f = $i + 1;
$ask[$i]['text'] = $f . '. Wie ist deine Wohnung eingerichtet?';
$ask[$i]['anser'][] = getarr($f . 'a;F' . $f . ';D;Behaglich');
$ask[$i]['anser'][] = getarr($f . 'b;F' . $f . ';B;Ästhetisch');
$ask[$i]['anser'][] = getarr($f . 'c;F' . $f . ';A;Spartanisch');
$ask[$i]['anser'][] = getarr($f . 'd;F' . $f . ';C;Praktisch');
$ask[$i]['anser'][] = getarr($f . 'e;F' . $f . ';E;Anspruchsvoll');


/* 12. Frage----------------------------------------------------------- Mutter */
$i = 11;
$f = $i + 1;
$ask[$i]['text'] = $f . '. Wie hat dich deine Mutter behandelt?';
$ask[$i]['anser'][] = getarr($f . 'a;F' . $f . ';DD;Fürsorglich');
$ask[$i]['anser'][] = getarr($f . 'b;F' . $f . ';CC;Trickreich');
$ask[$i]['anser'][] = getarr($f . 'c;F' . $f . ';AA;Eher ablehnend');
$ask[$i]['anser'][] = getarr($f . 'd;F' . $f . ';BB;Sie war oft nicht da');
$ask[$i]['anser'][] = getarr($f . 'e;F' . $f . ';EE;Fordernd');


/* 13. Frage----------------------------------------------------------- Vater */
$i = 12;
$f = $i + 1;
$ask[$i]['text'] = $f . '. Welches Verhältnis hast du zu deinem Vater?';
$ask[$i]['anser'][] = getarr($f . 'a;F' . $f . ';A;Ein sehr distanziertes');
$ask[$i]['anser'][] = getarr($f . 'b;F' . $f . ';B;Ich bewundere ihn');
$ask[$i]['anser'][] = getarr($f . 'c;F' . $f . ';C;Ein kameradschaftliches');
$ask[$i]['anser'][] = getarr($f . 'd;F' . $f . ';E;Ein schwieriges');
$ask[$i]['anser'][] = getarr($f . 'e;F' . $f . ';D;Ein freundliches');


/* 14. Frage----------------------------------------------------------- U-Bahn */
$i = 13;
$f = $i + 1;
$ask[$i]['text'] = $f . '. In der U-Bahn sitzt dir eine Frau/ein Mann gegenüber, die/der dir unglaublich gut gefällt. Was tust du?';
$ask[$i]['anser'][] = getarr($f . 'a;F' . $f . ';A;Nichts');
$ask[$i]['anser'][] = getarr($f . 'b;F' . $f . ';B;Ich lächle sie/ihn schüchtern an');
$ask[$i]['anser'][] = getarr($f . 'c;F' . $f . ';C;Ich versuche, mit den Augen zu flirten');
$ask[$i]['anser'][] = getarr($f . 'd;F' . $f . ';E;Ich spreche sie/ihn an');
$ask[$i]['anser'][] = getarr($f . 'e;F' . $f . ';D;Ich schaue sehnsüchtig, schweige aber, weil es in der U-Bahn ja doch keinen Zweck hat');


/* 15. Frage----------------------------------------------------------- Schwierig */
$i = 14;
$f = $i + 1;
$ask[$i]['text'] = $f . '. Was fällt dir am schwersten?';
$ask[$i]['anser'][] = getarr($f . 'a;F' . $f . ';A;Unter Menschen sein');
$ask[$i]['anser'][] = getarr($f . 'b;F' . $f . ';B;Alleine sein');
$ask[$i]['anser'][] = getarr($f . 'c;F' . $f . ';C;Schwach sein');
$ask[$i]['anser'][] = getarr($f . 'd;F' . $f . ';D;Schnell sein');
$ask[$i]['anser'][] = getarr($f . 'e;F' . $f . ';E;Untätig sein');


/* 16. Frage----------------------------------------------------------- Vorliebe */
$i = 15;
$f = $i + 1;
$ask[$i]['text'] = $f . '. Was magst du am wenigsten?';
$ask[$i]['anser'][] = getarr($f . 'a;F' . $f . ';D;Stress');
$ask[$i]['anser'][] = getarr($f . 'b;F' . $f . ';E;Langeweile');
$ask[$i]['anser'][] = getarr($f . 'c;F' . $f . ';C;Verlieren');
$ask[$i]['anser'][] = getarr($f . 'd;F' . $f . ';B;Kargheit');
$ask[$i]['anser'][] = getarr($f . 'e;F' . $f . ';A;Menschenmassen');


/* 17. Frage----------------------------------------------------------- Eigenschaften */
$i = 16;
$f = $i + 1;
$ask[$i]['text'] = $f . '. Welche dieser Eigenschaften ist bei dir am stärksten ausgeprägt?';
$ask[$i]['anser'][] = getarr($f . 'a;F' . $f . ';DD;Humor oder Ausdauer');
$ask[$i]['anser'][] = getarr($f . 'b;F' . $f . ';AA;Sensibilität');
$ask[$i]['anser'][] = getarr($f . 'c;F' . $f . ';BB;Ästhetik oder Fantasie');
$ask[$i]['anser'][] = getarr($f . 'd;F' . $f . ';CC;Kreativität');
$ask[$i]['anser'][] = getarr($f . 'e;F' . $f . ';EE;Lebendigkeit');


/* 18. Frage----------------------------------------------------------- Freunde */
$i = 17;
$f = $i + 1;
$ask[$i]['text'] = $f . '. Wieviele Freunde hast du?';
$ask[$i]['anser'][] = getarr($f . 'a;F' . $f . ';A;So gut wie keine');
$ask[$i]['anser'][] = getarr($f . 'b;F' . $f . ';D;Sehr wenige');
$ask[$i]['anser'][] = getarr($f . 'c;F' . $f . ';C;Wenige');
$ask[$i]['anser'][] = getarr($f . 'd;F' . $f . ';E;Einige');
$ask[$i]['anser'][] = getarr($f . 'e;F' . $f . ';B;Eher viele');


/* 19. Frage----------------------------------------------------------- Beziehungen */
$i = 18;
$f = $i + 1;
$ask[$i]['text'] = $f . '. Wie fühlst du dich in Beziehungen?';
$ask[$i]['anser'][] = getarr($f . 'a;F' . $f . ';BB;Eher unterlegen');
$ask[$i]['anser'][] = getarr($f . 'b;F' . $f . ';DD;Nach aussen hin eher unterlegen, in Wirklichkeit aber oft überlegen');
$ask[$i]['anser'][] = getarr($f . 'c;F' . $f . ';AA;Gleichwertig, im Zweifelsfall eher unterlegen');
$ask[$i]['anser'][] = getarr($f . 'd;F' . $f . ';EE;Gleichwertig, im Zweifelsfall eher überlegen');
$ask[$i]['anser'][] = getarr($f . 'e;F' . $f . ';CC;Eher überlegen');


/* 20. Frage----------------------------------------------------------- Störung */
$i = 19;
$f = $i + 1;
$ask[$i]['text'] = $f . '. Was stört dich am meisten?';
$ask[$i]['anser'][] = getarr($f . 'a;F' . $f . ';A;Aufdringlichkeit');
$ask[$i]['anser'][] = getarr($f . 'b;F' . $f . ';B;Ausgeschlossensein');
$ask[$i]['anser'][] = getarr($f . 'c;F' . $f . ';D;Erniedrigung');
$ask[$i]['anser'][] = getarr($f . 'd;F' . $f . ';C;Manipulation');
$ask[$i]['anser'][] = getarr($f . 'e;F' . $f . ';E;Abweisung');


/* 21. Frage----------------------------------------------------------- Erscheinungsbild */
$i = 20;
$f = $i + 1;
$ask[$i]['text'] = $f . '. Wie würdest du dein körperliches Erscheinungsbild am ehesten charakterisieren?';
$ask[$i]['anser'][] = getarr($f . 'a;F' . $f . ';DD;Eher dick');
$ask[$i]['anser'][] = getarr($f . 'b;F' . $f . ';BB;Eher dünn');
$ask[$i]['anser'][] = getarr($f . 'c;F' . $f . ';AA;Normal, aber etwas ungleichmässig');
$ask[$i]['anser'][] = getarr($f . 'd;F' . $f . ';CC;Kräftig');
$ask[$i]['anser'][] = getarr($f . 'e;F' . $f . ';EE;Ausgeglichen');


/* 22. Frage----------------------------------------------------------- Zutreffen */
$i = 21;
$f = $i + 1;
$ask[$i]['text'] = $f . '. Welcher Satz trifft am ehesten auf dich zu?';
$ask[$i]['anser'][] = getarr($f . 'a;F' . $f . ';C;Ich vertraue niemandem ausser mir selbst');
$ask[$i]['anser'][] = getarr($f . 'b;F' . $f . ';A;Ich vertraue niemandem, mir selbst am allerwenigsten');
$ask[$i]['anser'][] = getarr($f . 'c;F' . $f . ';B;Sobald ich vertraue, werde ich im Stich gelassen');
$ask[$i]['anser'][] = getarr($f . 'd;F' . $f . ';D;Ich verdiene es nicht, dass jemand mir vertraut');
$ask[$i]['anser'][] = getarr($f . 'e;F' . $f . ';E;Wenn ich zuviel vertraue, ist meine Freiheit in Gefahr');


/* 23. Frage----------------------------------------------------------- Ansicht */
$i = 22;
$f = $i + 1;
$ask[$i]['text'] = $f . '. Welcher Satz könnte am ehesten von dir stammen?';
$ask[$i]['anser'][] = getarr($f . 'a;F' . $f . ';A;Ich bin unerwünscht');
$ask[$i]['anser'][] = getarr($f . 'b;F' . $f . ';B;Ich bin schwach');
$ask[$i]['anser'][] = getarr($f . 'c;F' . $f . ';C;Ich bin der Stärkere');
$ask[$i]['anser'][] = getarr($f . 'd;F' . $f . ';D;Ich bin wertlos');
$ask[$i]['anser'][] = getarr($f . 'e;F' . $f . ';E;Ich bin jemand, den keiner verstehen kann');


/* 24. Frage----------------------------------------------------------- Aussage */
$i = 23;
$f = $i + 1;
$ask[$i]['text'] = $f . '. Welche Aussage könnte am ehesten von dir sein?';
$ask[$i]['anser'][] = getarr($f . 'a;F' . $f . ';AA;Ich weiss nicht, wer ich bin');
$ask[$i]['anser'][] = getarr($f . 'b;F' . $f . ';BB;Ich bekomme nie genug');
$ask[$i]['anser'][] = getarr($f . 'c;F' . $f . ';CC;Ich darf nicht aufgeben');
$ask[$i]['anser'][] = getarr($f . 'd;F' . $f . ';DD;Ich verachte mich');
$ask[$i]['anser'][] = getarr($f . 'e;F' . $f . ';EE;Ich muss etwas leisten');


// Template für die Darstellung

    $template = '
    {{#.}}
      <h5>{{text}}<h5>
      {{#anser}}
        {{#.}}
          <p>
            <label>
                <input name="{{name}}" value="{{value}}" type="radio" id="{{id}}" required />
                <span>{{span}}</span>
            </label>
          </p>
        {{/.}}
      {{/anser}}
    {{/.}}
    ';
    // Mustache Array mit dem Template rendern lassen und ausgeben
    $m = new Mustache_Engine(array('entity_flags' => ENT_QUOTES));
    echo $m->render($template, $ask);
    ?>
	
<input type="submit" name="submit" id="submit" value="weiter..." class="btn">
          <!--  &nbsp;&nbsp;
            <input type="reset" value="Eingaben löschen" class="btn"> -->

</form>
