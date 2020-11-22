---
Title: Kmom02
Description: Part 2
Template: kmom
---

Kursmoment 2
==================

I detta kursmoment har Sass introcuderats och implementerats i temat. Samtliga verktyg som används är nya för mig. Jag har inte tidigare arbetat med pakethanterare men ser en stor fördel att använda dessa. 

Sass tillåter uppdelning av css-koden i moduler och variabler vilket förenklat scss/css-hanteringen väsentligt. För denna webbsida har tidigare css-koden delats upp i flera moduler, därbland en base-scss som ligger placerad i shared-mappen, då den innehåller normalized och font-awesome. Dessa är generic och kan enkelt importeras i nästa tema via 1 fil (base). Jag har valt att dela upp sidans kod motsvarande dess grid-element för att enkelt hitta när korrigeringar skall göras. En reflektion jag haft under kursmomentet är huruvida fallback-font borde kunnas ange som en default variabel som alltid används om importerat font inte fungerar som det ska. Ex via en Ternary Operator $font: 'angivet font' ?? 'Arial'; Har via 
<a href="https://htmlcolorcodes.com/color-picker/">Sass dokumentationssida</a> läst om Default Values, men hittar inte en lösning enligt ovan. Ett sätt att minimera upprepning ytterligare.

<br>

Desginens stomme tog form redan i kmom01 men har utvecklats genom att header, flash-img och footern täcker hela enhetens bredd. Den grid som innehåller content har jag angett till 50vw för att behålla läsbarheten. Storleken på texten är ökad för att det inte skall finnas fler än 70 tecken per rad liksom jag har ökat radavståndet för att det ska vara enkelt för den som läser att följa texten. 
Jag har aktivt valt två typsnitt, ett till header som skall bli mer personligt och sedan ett tydligt sans-serif typsnitt till sidans innehåll. Jag har definerat sidans färger i variabler.scss tillsammans med fonts. 
Motsvarande ändringar har skett i responsiviteten för mindre enheter.


<br>
TIL: hur grundläggande npm & Sass fungerar och hur detta är sätt att återanvända kod. Gjort lite förändring i Twig gällande meta-datan för bilder i content. 

<br>