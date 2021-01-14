---
Title: Kmom01
Description: Part 1
Image: 
    - url: "../image/designv3_kmom01.PNG"
      alt: grid
Template: kmom
---

Kursmoment 1
==================

Då jag sedan innan terminsstart varit obekant med terminalen som verktyg liksom ramverk blev installation av labbmiljön en kalldusch, men guiderna på dbwebb utförliga så att det gick vägen. Hade dock önskat att jag gjort det en vecka i förväg så jag kunde fokusera fullt ut på kursmomentet. Att försöka greppa sambandet mellan Composer och Pico (CMS'en), de nya fil-ändelserna (twig, md, json), skriva markdown och mängden kod i portfolien har varit en utmaning. Jag hoppas det klarnar under kursens gång.
Samtidigt som det är tacksamt att ha kod att arbeta med har det varit en utmaning att förstå vilken kod jag förväntas förändra för att uppfylla kravet att skapa ett eget tema. 

Jag har medvetet kommenterat bort Title i index.md i både docs och example då jag inte ville ha kvar dem synliga i min navbar (mapparna är dock kvar).
Jag har i mitt eget tema implementerat ett grid i twig-filen. Eftersom det var första gången jag arbetar med grid har jag färglagt varje div under processen för att veta exakt hur de hamnar, klicka på bilden till vänster för större upplösning. Har också valt att kommentera bort loggan tillsvidare, eftersom jag inte besitter vidare kunskaper i illustrera. Flash-bilden är uppdaterad enligt kravet och är en gammal bild jag hittade i mitt foto-arkiv på ett blommande körsbärsträd. Det har fått sätta färgerna på sidan, vilket jag sedan använde 
<a href="https://htmlcolorcodes.com/color-picker/">htmlcolorcodes</a> för att smidigt hitta färger som passar ihop.
I css-filen har jag lånat delar från dbwebb-css'en för att hantera toggle-menyn/menyn, i övrigt har jag använt diverse propertys för att hantera sidan. Bland annat grid-template-columns där jag angett hur många kolumner grid'en skall ha samt bredden på dessa. Har angetts i procent för att behålla flexibiliteten mellan mindre och större bildskärmar. Vad gäller responsivitet mellan just bildskärmar har stor del av css-koden skrivits i vh eller vw för att anpassas efter specifika skärmen. Varje item(del i grid'en) är sedan specificerad med propertyn grid-column.


TIL: grundläggande grid. Samt går genom redan skriven kod. Reflekterar över hur man anger semantiska element i html vid användning av grid... 
<br><br>
