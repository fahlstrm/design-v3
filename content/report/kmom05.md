---
Title: Kmom05
Description: Part 5
Template: kmom
---

Kursmoment 5
==================

Min första reflektion av resultatet av analyserna är att samtliga hade lägre performance än väntat. För att ha en referenspunkt valde jag att, utanför analysen, testa tre teknikinriktade webbshoppar för att jämföra om dessa presterade bättre med avseende på målgrupp - den tesen sprack då de hade lika "illa" resultat. Blev förvånad över resultaten samtidigt som sidorna i analysen har tungt content och många bilder. En vidare reflektion var att testerna inte tar hänsyn till laddtid i förhållande till antal request/dess innehåll och även trafik vid testets tidpunkt. Gör man, eller bör man, anpassa sitt content beroende på ovan faktorer? Kan man anpassa sin webbshop's content för dagar där det förväntas högre trafik, eller bör man se över budget för vad servern klarar av? 
Frågor som jag tyvärr inte funnit svar på under kursmomentet, men tar med mig som reflektion för framtida projekt.

Jag har efter kursmomentet fått djupare förståelse för Devtools och filken Network och också för Lighthouse. Två enkla mätverktyg där det finns förklaringar vad mätetalet innebär och konkreta förbättringsförslag.

<br>

I min egen portfolio-sida har jag anpassat de bilder som ligger med i rapporten och i kursmomenten. De låg tidigare på ~1.5-2MB/st vilket gjorde att sidans resources var uppe på nästan 6MB - efter att ha applicerat picture & source-elementen samt srcset och Cimage är sidorna nu runt 2.5 MB och laddar in under 0.7 sekunder. Cimage var ett smidigt verktyg för att bibehålla ursprungsbilden men samtidigt möjlighet att anpassa den. För min egen sida la jag till ytterligare ett element i corp-arrayen 5:8 för att få samma mått på de bilder jag laddar in. Normalt är jag också van användare av Adobe Photoshop, men att både bildbehandla och koda på en vecka fanns det tyvärr inte utrymme för, jag har därför lånat bilderna från [Unsplash](https://unsplash.com/).

<br>

Jag har inte tidigare reflekterat över bilder på hemsidor förutsatt att de laddats in inom rimlig tid. Men kan relatera till den studie som [Ericsson](https://www.ericsson.com/en/press-releases/2016/2/streaming-delays-mentally-taxing-for-smartphone-users-ericsson-mobility-report) gjort angående den stressfaktor som uppstår när sidor inte laddas som förväntat. Har historiskt lämnat webbplatser där sidor inte laddas och eller bilder inte visas, framförallt under dagar då sidorna förmodligen haft mycket trafik. Detta kursmoment har således ökat mitt intresse för hur detta förhåller sig. 

<br>
<div class="embed-container">
    <iframe title="Talking animals, BBC" src="https://www.youtube.com/embed/ExukCRD7gN0" frameborder="0">
    </iframe>
</div>

<br>

<b>TIL:</b> Använda Network i devtools och anpassa bilder via Cimage 
