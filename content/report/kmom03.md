---
Title: Kmom03
Description: Part 3
Image:  
    - img: "../image/grid.PNG"
    - img:  "../image/grid2.PNG"
    - img: "../image/grid3.PNG"
Template: kmom
---

Kursmoment 3
==================

Jag, som tidigare nämnt, har implementerat ett grid på sidan från kmom01. Jag arbetade en del med flexbox i projektet i HtmlPhp-kursen så hade lite koll på begreppet sedan tidigare. Kmom03 har gett ökad förståelse för relationen mellan parent och child, hur angivet mått på föräldrar-elementet påverkar barnet och hur detta kan användas för att centrera sidans content beroende på relativa enheter istället för att hådkoda. I detta kursmoment har jag arbetat utifrån mitt ursprungliga grid och inom detta (item4, se bild till vänster, klicka på bilden för större format) applicerat ytterligare ett lager med grid beroende på vilket innehåll som skall visas på sidan. För att avgöra detta har jag i mina kmom blandannat skapat en array med bilder vilka loopas genom för att visas. I varje templatefil finns if-satser som avgör vilka klasser och element som finns på sidan.
Jag föredrar grids före flex då jag upplever att det finns större möjlighet att anpassa sidan som man önskar, kräver färre containrar än flex för att skapa samma display. Eftersom jag arbetat utifrån item4-griden har jag arbetat med article.scss filen där det mesta styrs, förutom report som fick sin egen. 

<br> 
I mitt tidigare grid har jag också förändrat så att allt content på sidans "mage" och i footern är centrerat i vertikal-led. Dessutom i grid'en för sidan har columnernas bredd satts till auto och item4'as bredd är satt till 60vw, så om fönstret minimeras (till en viss gräns) kommer de "vita"-kolumnerna minimeras först. 
<br>

TIL: djupare förståelse för grid-template, förhållandet mellan parent-child och styra barn-element via förälder. 