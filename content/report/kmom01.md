---
Title: Kmom01
Description: Part 1
---

Kursmoment 1
==================
<img src="../image/banner_1.png" alt="design" class="r-img">

Då jag sedan innan terminsstart varit obekant med terminalen som verktyg liksom ramverk blev installation av labbmiljön en kalldusch, men i vanlig ordning var guiderna på dbwebb utförliga så att det gick vägen. Hade dock önskat att jag gjort det en vecka i förväg så jag kunde fokusera fullt ut på kursmomentet. Att försöka greppa sambandet mellan Composer och Pico (CMS'en), de nya fil-ändelserna (twig, md, json), skriva markdown och mängden kod i portfolien har varit en utmaning. Jag hoppas det klarnar under kursens gång och när jag väl fått hem kurslitteraturen. 
Samtidigt som det är tacksamt att ha kod att arbeta med har det varit en utmaning att förstå vilken kod jag förväntas förändra för att uppfylla kravet att skapa ett eget tema. 

Jag har medvetet kommenterat bort Title i index.md i både docs och example då jag inte ville ha kvar dem synliga i min navbar (mapparna är dock kvar).
Jag har inte gjort några förändringar i index.twig-filen då både headern med dess navigering och footern med dess social-element innehåller knappen till GitHub försvann när jag tog bort raderna. 
Jag har rensat bort vissa klasser ur css-filen som inte används. Vissa element har dock fått vara kvar, eftersom de styr markdown-innehållet. Reflekterat över hur klasserna är angivna och jämfört med SMACSS och konstaterar vikten av uppdelning av css-koden när man själv inte skrivit den. Blivit naturligt att använda sig av Devtools för att snabbt hitta rätt i css-filen.
Har läst in ett font i twig-filen som är hämtat från google-fonts.