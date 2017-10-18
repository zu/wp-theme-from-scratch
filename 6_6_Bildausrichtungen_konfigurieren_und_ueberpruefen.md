# Bildausrichtungen konfigurieren und überprüfen 

Sobald wir das Styling für normalen Text mit Hilfe der HTML-Tags und Formatierungs-Posts sortiert haben, können wir zu Bildern übergehen und mit der Bildausrichtung beginnen. In der Post-Markup-Bildausrichtung sehen Sie alle verschiedenen Arten von Ausrichtungen und Konfigurationen, die wir für Bilder haben können. Beim Scrollen nach unten haben wir eine Reihe von Bildern und für jedes Bild gibt es eine Beschreibung, wie das Bild ausgerichtet ist. Diese erste ist zentriert, dann haben wir eine linke Ausrichtung, eine, die keine Ausrichtung hat, was bedeutet, dass sie gerade in der Zeile angezeigt wird, eine rechts ausgerichtete, dann haben wir eine Reihe von Bildern mit Bildunterschriften, genau die gleiche Anordnung.

Ein zentriertes Bild mit einer Bildunterschrift, linksbündiges Bild mit einer Bildunterschrift, kein Ausrichtungsbild mit einer Bildunterschrift und ein rechtsbündiges Bild mit einer Bildunterschrift. Was Sie sehen, wenn Sie durch diesen Pfosten gehen, ist, dass Unterstreichungen Griffe Bildausrichtungen wirklich gut handhaben. Wir müssen nur noch daran feilen, wenn wir wollen. Es ist wichtig zu wissen, wie WordPress Image-Alignments verwaltet werden. Wenn ich zum hinteren Ende gehe und mir eines dieser Bilder anschaue, sagen wir mal dieses, im Editor kann ich auf ein beliebiges Bild klicken und von hier aus kann ich die Ausrichtung ändern, indem ich einfach auf diese Buttons klicke und du siehst, dass wir links, zentriert, rechts und ohne Ausrichtung ausgerichtet haben.

Was WordPress macht, wenn Sie Ausrichtung auf ein Bild anwenden, ist es eine Klasse auf das Bildelement anwendet. Hier haben wir ein Bild, das in der Mitte ausgerichtet ist und Sie können sehen, dass es hier eine Klasse gibt, aligncenter. Beim Scrollen nach unten habe ich ein linksbündiges Bild. Überprüfen Sie das Element, und dieses Bild hat die Klasse alignleft. Wenn das Bild eine Bildunterschrift hat, ändert sich das ein wenig. Wenn wir also ein Bild mit einer Bildunterschrift untersuchen, sehen Sie, dass die um das Bild gewickelte Figur und die Bildunterschrift mit dem Ausrichtungsmittelpunkt versehen sind. Auch hier unten haben wir ein linksbündiges Bild mit einer Bildunterschrift, und wieder linksbündig wird auf die Figur angewendet, die um dieses Bild und seine Bildunterschrift herum wickelt.

In unserem Sass-Setup finden Sie die Ausrichtungsregeln unter Module und Ausrichtungen. Hier sehen Sie alignleft, alignright und aligncenter. Der Grund, warum diese so generisch sind, ist, dass Sie sie auf andere Elemente anwenden können. Zum Beispiel habe ich gesehen, wie Theme-Entwickler die Alignments-Klassen benutzen, um Blockquotes so auszurichten, dass sich Blockquotes in Pullquotes in den Beiträgen verwandeln. Für meine Zwecke sind diese Einstellungen genau das, was ich mir wünsche. Ich werde sie überhaupt nicht anfassen. Für Ihre Themen möchten Sie sie vielleicht ändern, und jetzt wissen Sie, wo Sie das tun können.