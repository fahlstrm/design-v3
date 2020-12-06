---
Title: Kmom04
Description: Part 4
Image:  
    - img: "../image/color_before.PNG"
    - img: "../image/portfolio_monokrom.PNG"
Template: kmom
---

Kursmoment 4
==================




Skrivandet av rapporten krävde att man läste genom kurslitteraturen och artiklarna en extra gång, både för att omsätta informationen i skrift men också för att kunna hitta tillbaka till de referenser man använde vid slutsatserna. Skapade också en förståelse för sammansättning av färgschema kan appliceras på verkligheten.
Jag gjorde ett försök att använda IEEE för referering. 

<br>
I kursmomentet har jag både uppdaterat mitt gamla färgschema och det mörkare temat.
För mitt "orginaltema" har jag bytt ut accentfärgen mot en färg som återfinns i flash-bilden. Sedan har jag använt ett monokromt färgschema baserat på denne. 
<table style="border-spacing: 4px; border-collapse: separate">
<tr>
<td style="height: 50px; width: 50px; background-color: #BA5A63"> 
<td style="height: 50px; width: 50px; background-color: #575252"> 
<td style="height: 50px; width: 50px; background-color: #3B1C1F"> 
<td style="height: 50px; width: 50px; background-color: #874148">
<td style="height: 50px; width: 50px; background-color: #BA5A63"> 
</tr>
</table>

Fördelningen av färgerna är baserad på kontrast gentemot bakgrund, snarare än i procent.

<br>
För mitt mörka tema tog jag mörkaste färgen i orginaltemats färgschema och skapade en ny monokrom färgpalett. Jag gjorde på detta vis för att sidorna skulle ha snarlik känsla även om man ville ha ett mörkare tema- innehållet på sidan och dess syfte är ju trots allt det samma. Här valde jag att mätta färgerna för gråskala och använde både gråskala-filter samt tonade ned ljusstyrkan i bilderna för att det vita i dem inte skulle fräta genom.


<table style="border-spacing: 4px; border-collapse: separate">
<tr>
<td style="height: 50px; width: 50px; background-color: #4A3434"> 
<td style="height: 50px; width: 50px; background-color: #7D7D7D"> 
<td style="height: 50px; width: 50px; background-color: #785456"> 
<td style="height: 50px; width: 50px; background-color: #874047"> 
<td style="height: 50px; width: 50px; background-color: #7D5757"> 
</tr>
</table>

För att minska upprepningen har variabler använts, vilka har satts för respektive tema i två olika sass-filer som sedan importerats. En if-sats har använts i twig-filerna för att avgöra sessionens innehåll och temat renderats utifrån det. 
