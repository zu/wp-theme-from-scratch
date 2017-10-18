# Die Ausgabe von Post-Metadaten anpassen

Immer noch im Header, möchte ich auch die Post-Metadaten ändern. Im Moment ist es buchstabiert die Worte, gepostet auf, gefolgt von den Veröffentlichungsdaten und dies ist ein Link zu dem Beitrag selbst. Dann das Wort, durch, gefolgt von dem Autorennamen und dies ist ein Link zum Autorenarchiv. Ich möchte dieses herum verwirren, also fängt es an, indem ich sage, geschrieben durch, dann den Autornamen, dann veröffentlicht, dann das Veröffentlichungsdatum und dann möchte ich einen Link dem Kommentarabschnitt hinzufügen, der entweder sagt, keine Anmerkungen, ein Kommentar oder die Zahl Kommentaren an. Und schließlich möchte ich den Edit-Link in den Header-Meta-Abschnitt verschieben.

Genau wie vorher werde ich in der Datei content. php anfangen, um herauszufinden, was diesen Inhalt gerade generiert. Ich scrollen nach unten, bis der Eintrag Meta-Sektion, und hier sehen wir eine weitere Funktion, humescores_posted on. Ich behalte die Befehlsgewalt, um zur Funktion zu gehen. Diese Funktion ist in der Datei templatetags. php, genau wie die vorhergehende. Und hier haben wir den ganzen Code, der das erzeugt, was Sie auf der Vorderseite sehen. Und auf den ersten Blick sieht das ziemlich einschüchternd aus, denn am Frontend haben wir nur "Posted on", dann ein Veröffentlichungsdatum und "By Morten", und am Backend haben wir diese riesige Menge an Code.

Nun, was hier passiert, ist, dass das Thema alle notwendigen Informationen für den Browser bereitstellt, um zu verstehen, was vor sich geht. Dies gilt sowohl für den Browser als auch für die Suchmaschinen. Dieses einfache Element hier, das das Veröffentlichungsdatum anzeigt, ist also eigentlich ein sehr komplexes HTML. Wenn wir dieses Element für eine Sekunde untersuchen, werden Sie sehen, dass es ein Zeitelement enthält. In diesem Zeitelement haben wir eine computerlesbare Zeit und eine menschlich lesbare Zeit, und es gibt auch ein zusätzliches Zeitelement, das mit CSS versteckt wurde, das ist eine weitere computerlesbare Zeit und eine menschlich lesbare Zeit.

Dies ist die aktualisierte Zeit, d. h. jedes Mal, wenn Sie einen Beitrag aktualisieren, ändert sich dieser, obwohl das ursprüngliche Veröffentlichungsdatum gleich bleibt. All das wird von diesen beiden ersten Abschnitten hier erledigt. Wir richten einen Zeitstring ein, der das Zeitelement enthält. Dann, wenn der Pfosten aktualisiert worden ist, ändern wir die Zeitzeichenkette, um die aktualisierte Zeit einzuschließen, und dann verwenden wir diese verschiedenen Funktionen, um das Datum für Computer zu ergreifen, dann ergreifen das Datum für Menschen und ergreifen das geänderte Datum für Computer und das geänderte Datum für Menschen und setzen sie innen zu den verschiedenen Positionen.

Nur als Referenz: Jedes Mal, wenn Sie so etwas sehen, %1$s, beziehen Sie sich auf einzelne Stücke. Also, %1$s bezieht sich auf das erste Element hier unten. %2$s bezieht sich auf das zweite Element, usw. usw. in dieser Liste. Sobald wir einen Zeitstring haben, wird er in eine andere Variable eingefügt, die als Posted on aufgerufen wird. Und diese Variable hat die Wörter "posted on", gefolgt von einem Link, der auf den aktuellen Pfosten zeigt, und dann die Zeitzeichenfolge selbst.

Die Variable, die den Zeitstring enthält, wird dann hier unten am unteren Rand benutzt, um die tatsächliche Ausgabe auf der Seite wiederzugeben. Also fangen wir mit einer Spanne an, mit der Klasse, die angeschlagen ist, und wir setzen "angeschlagen auf" innen, und angeschlagen auf hat Time String, dann beenden wir die Spanne, beginnen eine neue Spanne mit der Klasse "by" Zeile und greifen uns dann die "by" -Zeile, die Sie hier oben finden. "By" -Zeile ist ziemlich genau so strukturiert, wie es auf dem Posting steht. Wir beginnen mit dem Wort "by", gefolgt von einer Spanne, die alle Mikrodaten des Autors enthält, und einem Link zu den Autorenarchiven. Das wird in diese "by" -Zeilenspanne gelegt, und dann wird die Spanne geschlossen.

Das alles bedeutet, wenn ich die Wörter, die vor dem Autor-Link oder dem Veröffentlichungsdatum erscheinen, ändern möchte, muss ich nur diese Variablen hier ändern. Also, ich fange damit an, zu sagen, anstatt auf, ich werde nur sagen,"veröffentlicht". Und statt von "geschrieben von" wird es "heißen. Jetzt wollte ich auch die Reihenfolge dieser Elemente ändern, und das ist hier unten geschehen, wo alles widergespiegelt wird. Also schnappe ich mir das "by" -Linienelement, schneide es aus und klebe es ganz vorne ein, und erstelle einen Zwischenraum zwischen den beiden Elementen.

Speichern Sie, und gehen Sie zurück zum Browser, jetzt steht dort "Written by Morten""Published" und das Veröffentlichungsdatum. Der nächste Schritt ist, die Kommentarinformationen zu holen. Aber ich sehe hier im Moment keine Kommentar-Informationen. Wenn ich jedoch auf die Titelseite der Seite navigiere und nach unten scrolle, bis ich den Post von Hello World finde, werden Sie feststellen, dass in der Fußzeile "One Comment"steht. Es handelt sich also um eine bedingte Funktion, die momentan nur in Indexseiten angezeigt wird. Da ich weiß, dass es sich in der Fußzeile befindet, kann ich innerhalb der Template-Tags nach unten scrollen. Die Fußzeile wird direkt darunter definiert.

Hier haben wir zuerst eine Tag-Liste und dann den Kommentar-Link. Also werde ich einfach diesen ganzen Stapel Code hier schnappen, ausschneiden und ihn direkt nach der Spanne einfügen für "by" Zeile und "posted on". Jetzt ist diese Funktion auf einer Reihe von verschiedenen Faktoren abhängig, einschließlich, ob wir auf einem einzelnen Pfosten sind oder nicht. Und gerade jetzt steht dort, wenn du nicht auf einem einzelnen Beitrag bist, dann zeig den Kommentar-Link an. Also werde ich diese Bedingung ausschalten, und einfach verlassen, wenn Kennwort erforderlich ist, und wenn Kommentare offen sind, und das alles an Ort und Stelle.

Und retten. Überprüfen Sie, und jetzt können Sie den Kommentar oben sehen. Es ist ein wenig nah an dem Datum zwar, also füge ich ein Leerzeichen vor der überspannung hinzu. Wenn ich möchte, kann ich den Text auch so ändern, dass er von der Funktion Kommentar-Popup-Link ausgegeben wird. Wenn es keine Kommentare gibt, wird es heißt, hinterlasst einen Kommentar. Ansonsten wird entweder ein Kommentar, zwei Kommentare, drei Kommentare usw. stehen. Ich kann das in dieser Variable ändern, wenn ich will. Bleibt noch eine letzte Komponente übrig. Ich möchte den Edit-Link nach oben in den Metainhalt verschieben. Und wie ihr sehen könnt, befindet sich der Edit-Link auch in der Fußzeile des Eintrags, so dass ich wieder in die Fußzeile des Eintrags scrollen werde und hier haben wir den Edit-Post-Link.

Also schnappe ich mir einfach diesen Inhalt, schneide ihn aus, räume ihn ein wenig auf und füge ihn direkt unter den Kommentaren ein. Speichern Sie noch einmal, und laden Sie die Seite neu, und jetzt haben wir "Geschrieben von Morten" Veröffentlichungsdatum, ein Kommentar, und bearbeiten. Und wieder haben wir dieses Platzproblem zwischen den beiden, also gehe ich in den Bearbeiten-Link und füge ein Leerzeichen vor dem Span hinzu. Speichern Sie ein letztes Mal, und jetzt habe ich die Metadaten-Struktur, die ich will.