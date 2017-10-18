# Eine WordPress Entwicklungsumgebung aufsetzen

Bevor Sie ein Theme erstellen können, müssen Sie eine ordnungsgemässe Entwicklungsumgebung auf Ihrem Computer eingerichtet haben. Das bedeutet, alle notwendigen Teile zusammenzufügen, um den Entwicklungsprozess selbst so einfach und unkompliziert wie möglich zu gestalten. Es gibt ungefähr so viele Entwicklungsumgebungs-Setups wie es Entwickler gibt und jeder hat seine eigenen persönlichen Vorlieben. In diesem Kapitel werde ich Ihnen zeigen, wie Sie Ihre eigene Entwicklungsumgebung einrichten und Ihnen einige Optionen zur Auswahl an geeigneter Stelle geben. Ich sage Ihnen auch, wie mein Setup aussieht. Zuerst müssen Sie WordPress selbst lokal auf Ihrem System laufen lassen.

### Lokale WordPress Installation

Mit einer lokalen WordPress-Installation können Sie direkt mit den Theme-Dateien arbeiten. Änderungen, die Sie vorgenommen haben, werden auf der Seite sofort wirksam und sichtbar. Es ist kein Upload oder Download von Dateien erforderlich. Eine lokale Installation bedeutet auch, dass Sie nicht wirklich eine Internetverbindung benötigen, um Ihre Arbeit testen zu können und als Bonus sind Sie der Einzige, der Ihre Inhalte sehen kann. Abhängig von Ihren Plattform-Kenntnissen und wie Sie arbeiten möchten, gibt es viele verschiedene Methoden für die Installation und Ausführung von WordPress auf Ihrem Computer. Um diesen Prozess so einfach wie möglich zu machen, haben wir die Installation und Ausführung der WordPress-Serie erstellt, die Sie durch den Prozess mit verschiedenen Optionen führt.

Für den in diesem Kurs beschriebenen Prozess empfehle ich [LOCAL by Flywheel](https://local.getflywheel.com/) für Windows oder Mac zu nutzen, aber wenn Sie eine andere bevorzugte Option haben, können Sie diese auch verwenden. Während dieses Kurses werde ich LOCAL benutzen, und ich habe es mit der DOMAIN [http://wptheme.dev/](http://wptheme.dev/) eingerichtet. Für eine Übereinstimmung empfehle ich, wenn Sie dasselbe tun. Die Zip-Datei um eine vorkonfigurierte LOCAL-Umgebung zu nutzen erhalten Sie mit den Übungsdateien.

### Editor (Coding-Umgebung)

Zweitens benötigen Sie eine Coding-Umgebung. Ich werde am Ende des Kapitels mehr darüber reden, aber das Wesentliche ist, dass Sie einen Code-Editor benötigen, am besten eine erweiterte IDE.

Es gibt viele Optionen hier verfügbar, einige frei und einige für Bezahlung und ich werde den kostenlosen Code-Editor [Visual Studio Code](https://code.visualstudio.com/) von Microsoft nutzen. 

### Inhalte

Drittens müssen Sie Ihre Website mit Inhalten füllen. Wenig später zeige ich Ihnen, wie Sie die so genannten WordPress-Testdaten für die Unit-Tests für WordPress-Themen installieren, und Sie profitieren auch davon, dass Sie Ihre eigenen benutzerdefinierten Inhalte auf Ihrer Website hinzufügen können, während Sie das Theme weiter entwickeln.

Wenn Sie Bilder brauchen, können Sie einen der diversen Bild-Platzhalter-Dienste nutzen, z. B:

- [placehold.it](http://placehold.it/), der inzwischen auf placeholder.com hört und mit Werbung überhäuft ist.

- [Dynamic Dummy Image](https://dummyimage.com/) ist demgegenüber deutlich benutzerorientierter und enthält eine Tabelle der wichtigsten Standard-Bild-Grössen für Werbebanner.

- [lorempixel](http://lorempixel.com/) lässt einen Bilder aus unterschiedlichen Kategorien, wie Abstrakt, Leute, Sport, Nightlife, Fashion, Technik oder Katzen wählen.

- [placekitten](http://placekitten.com/) bietet hingegen, wie der Name vermuten lässt, ausschliesslich junge Katzen.

  Eine grosse Auswahl an Bildern bieten auch


- [LoremFlickr](https://loremflickr.com/), bei dem man innerhalb Flickr  Bilder mittels Schlüsselworten und Dimensionen  finden kann, die unter einer Creative Commons Lizenz angeboten werden.
- [Lorem Picsum](https://picsum.photos/) bietet viele verschiedene [Bilder](https://picsum.photos/images) und die Möglichkeit diese verschwommen und/oder in Graustufen darzustellen.

Und natürlich gibt es für WordPress auch ein Plugin:

[\[lorem\] shortcode](https://soderlind.no/lorem-shortcode/)

### Automatisierung von repetitiven Prozessen mit Gulp

Viertens: In diesem Kurs stelle ich einen Prozess vor, der sich auf den Gulp Task Runner und eine lange Liste von Kommandozeilen-Tools zur Automatisierung verschiedener Prozesse stützt. Um das Skript für den Task-Runner verwenden zu können, stelle ich die Übungsdateien zur Verfügung.

Da wir ein Theme erstellen, das in einem Webbrowser angezeigt wird, ist es wichtig, dass alle gängigen Browser installiert sind, damit Sie während des gesamten Prozesses Tests durchführen können. Auf einem Windows-Computer würde ich Chrome, Firefox, Opera und Microsoft Edge und auf einem Mac Chrome, Firefox, Opera und Safari installieren.

Ich habe auch iOS und Android Geräte für mobile Tests zur Verfügung. Während dieses Kurses werden Sie mich in Chrome arbeiten sehen und wenn Sie mir genau folgen wollen, schlage ich vor, Sie verwenden ebenfalls Chrome. Da Sie nun wissen, was wir tun, folgen Sie meinem Prozess in den restlichen Lektionen dieses Kapitels, um Ihre Entwicklungsumgebung zu konfigurieren.

