# Lösung: Hinzufügen eines Social Media-Menüs zum Footer

Hast du die Herausforderung beendet? Gut, lassen Sie mich zeigen, wie ich es lösen würde. Als erstes gehen Sie auf functions. php und suchen Sie das Setup für die Menüs. Hier unter register_nav_menus möchte ich ein neues Menü registrieren. Also kopiere ich einfach die Zeile, die bereits hier ist. Einfügen. Ich nenne das hier gesellschaftlich. Es spielt keine Rolle, solange wir uns daran erinnern, wie es heißt. Und ich werde es als Social Media Menü markieren. Speichern Sie dies ab, springen Sie zu meinem Browser, und hier, weil ich den Customizer benutzen werde, muss ich eine separate Registerkarte öffnen.

Dann gehe ich zum Customizer. Einige Menüs. Ich möchte ein Menü erstellen, deshalb klicke ich auf Menü hinzufügen. Geben Sie ihm den Namen Social Media Menu. Im Menü werde ich es mit ein paar Gegenständen füllen. Und hier werde ich benutzerdefinierte Links verwenden. Also werde ich sagen, mal sehen, twitter. com/mor10. Und dann vielleicht linkedin. com. Facebook. com.

Und instagram. com. Ich habe also jetzt vier Menüpunkte, und ich möchte diese dem Social Media Menüpunkt zuordnen. Speichern & Veröffentlichen. Jetzt natürlich, ich z. Zt. werde ich das Menü nirgendwo anzeigen, so dass dies nichts mit meiner aktuellen Seite zu tun hat. Das kommt als nächstes. Also, um es mir jetzt einfach zu machen, werde ich zu einem einzelnen Pfosten navigieren. Denn dann ist das Scrollen nach unten viel schneller. Hier unten habe ich eine Fußzeile, die besagt: Proudly powered by WordPress, Theme: humescores von Morten Rand-Hendriksen.

Deshalb möchte ich hier unten mein Social Media Menü hinzufügen, wie ich es in den Anleitungen zur Challenge angedeutet habe. Die Fußzeile, ist in einer Datei namens footer. php enthalten. Wenn Sie nach unten scrollen, sehen Sie die Datei in ihrer Gesamtheit hier. Und im Augenblick haben wir die Fußzeile, mit einem div, das eine Kategorie site-info hat, und das ist, wo wir alle haben, dass Site info. Also werde ich meine Speisekarte genau darüber platzieren. Und hier werde ich einfach nur betrügen. Also gehe ich auf header. php und kopiere den dort vorhandenen Code für das Menü.

Ihr seht hier wp_nav_menu und ein paar andere Sachen. Wir kopieren das raus. Einfügen. Und dann nehmen Sie einige Änderungen daran vor. Für den Header richten wir also wp_nav_menu so ein, dass wir primär auf den Theme-Standort zeigen. Aber jetzt zeigen wir auf den neuen Themenort, der sozial ist. Also werde ich es ändern, gesellschaftlich. Und in diesem Fall will ich die Menü-IDs nicht. Ich werde das einfach rausnehmen. Sobald der Code hinzugefügt wurde, möchte ich sehen, wie das am Frontend aussieht und sicherstellen, dass es auch wirklich funktioniert. Also werde ich den Code speichern.

Gehen Sie zum Browser. Blättern Sie nach unten. Hier sehe ich meine Speisekarte auftauchen. Und wenn ich mir den Code anschaue, wird man sehen, dass er genau so aufgebaut ist, wie wir es mit dem Header-Menü hatten. Wir beginnen mit einem Div. Diese hat den Klasse-Menü-Sozial-Medien-Menü-Container. Dann gibt es noch eine ungeordnete Liste mit einem Klassenmenü, das das aktuelle Menü enthält. Und das sind die Menüpunkte ist Listeneintrag, mit einem Link darin. Jetzt nur der Vollständigkeit halber möchte ich dieses Menü in ein Navi einpacken, also richte ich ein Navi für die Klasse Social-Menu ein.

Und dann das Navigationssystem beenden. Und dann kann ich ein paar Stile darauf anwenden. Jetzt in meinem Sass-Setup, werden Sie sich unter der Seite erinnern, wir haben bereits Header, primäre und sekundäre. Daher wäre es natürlich, wenn Sie hier einen neuen Ordner mit dem Namen Footer anlegen würden. Und in diesen Ordner legen wir eine neue Sass-Datei, die Fußzeile. Dann werden wir uns die Sass-Datei in der Site. scss unten anstellen. Also kopiere ich zum Beispiel das hier. Einfügen.

Und sagen Sie Fußzeile/Fußzeile. Und von jetzt an geht es nur noch darum, ein paar einfache Stylings anzuwenden. Also erst mal stelle ich die gesamte Fußzeile ein. Wenn du sie dir ansiehst, wirst du sehen, dass sie die Klassenseite hat. Also fange ich damit an, das ins Visier zu nehmen. Ich sage "Site-footer" und stelle die Hintergrundfarbe ein. Und hier möchte ich die gleiche Hintergrundfarbe wie für den Header verwenden. Also gehe ich schnell und überprüfe, was wir für den Header benutzen. Ganz oben an der Spitze hier verwenden wir Hintergrundfarbe color_skin.

Eigentlich sollte ich jetzt, da ich darüber nachdenke, das alles in seiner Gesamtheit kopieren. Also nehme ich die gesamte Site-Header-Regel. In footer. scss setzen. Und ändere einfach die Regel in "Seitenfußzeile". Gehen Sie zurück zur Seite und scrollen Sie nach unten, und die Fußzeile ist jetzt blau mit etwas weißem Text. Dann werde ich alle Inhalte in der Fußzeile zentrieren. Also sage ich einfach: text-align: center; Das macht es nur etwas strukturierter. Und dann muss ich an der Speisekarte arbeiten.

Jetzt, da ich das Navi um ihn gewickelt habe, kann ich auch auf das Social-Menü zielen. Und im Social-Menü will ich das ul. Und dieses ul hat Listenart-Art eingestellt auf keinen, also haben wir nicht die Punkte. Dann möchte ich die Menüpunkte auslegen. Also sage ich: Display: Flex; Zurück und überprüfen Sie es, und jetzt sollten die Menüpunkte nebeneinander stehen. Dann will ich diese Dinge zentrieren. So werde ich ein wenig mit Flexbox hier experimentieren, und sagen, überprüfen Sie das Element und finden Sie das ul.

Und gehen Sie hier rein und versuchen Sie etwas wie, justify-content: center; Aha, das den Inhalt zentriert, also lasst uns das hier hinzufügen. Rechtfertigen-Inhalt: Mitte; Dann möchte ich auch dafür sorgen, dass zwischen jedem dieser Menüeinträge ein wenig Platz ist. Also werde ich den Anker in der Ul. Setzen Sie die Display-Eigenschaft für jede von ihnen auf ein Block-Level-Element. Stellen Sie die Polsterung für jedes Element auf vielleicht. 5ems oben und unten, und 1em links und rechts.

Und stell die Farbe auf weiß, spar dir das. Wieder neu laden. Und jetzt haben wir schöne Links unten drauf. Und der letzte Schritt ist, die Text-Dekoration auf Null zu setzen. Und dann auf &: hover, und &: focus, setze ich Text-Dekoration auf unterstreichen. Sparen Sie sich eine letzte Zeit. Scrollen Sie wieder nach unten. Und hier sehen Sie ein voll funktionsfähiges Menü, das sich nahezu korrekt ausrichtet.

Hier geht's ein bisschen nach rechts. Und wenn ich mir das Ul ansehe, siehst du warum. Sie sehen, dass das ul etwas Anreden erbt, das Polsterung und Rand auf die linke Seite setzt. Um alles abzuschließen, gehe ich zurück zum Ul. Display einstellen: flex; und all das Zeug. Und dann sag einfach Marge: 0; Und Polsterung: 0; Speichern. Nachladen. Blättern Sie nach unten. Und für das, was wir jetzt im Kurs sind, wird das sehr gut gehen.