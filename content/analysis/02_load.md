---
Title: Bilder
Description: Part 2
Image: 
    - url: granit.PNG
      alt: Granit
    - url: mio.PNG
      alt: Mio     
    - url: ellos.PNG
      alt: Ellos

Template: kmom
---
<!-- "../image/report-kmom05/granit.PNG" -->


Laddningstid & användbarhet
=======================

<!-- Skriv en eller två rader om vad uppgiften handlar om. -->
Analysens syftar till att undersöka och jämföra tre webbsidors laddningstid och användbarhet och utifrån mätningar analysera hur detta kan tänkas påverka användbarheten.

<br>
Urval
-----------------------

<!-- Berätta vilka webbplatser du valt att undersöka och varför eller hur du gick tillväga när du gjorde ditt urval. -->
Urvalet är slumpaktigt utvalt bland tillgängliga svenska webbshoppar inom detaljhandel/heminredning. [Granit](https://www.granit.com/se/), [Mio](https://www.mio.se/), [Ellos](https://www.ellos.se/)


<br>

Metod
-----------------------

<!-- Berätta kort om din "metod", hur du gör för att utföra undersökningen. Berätta om du använder något speciellt verktyg. -->
För insamling av mätdata har devtools i webbläsaren använts och som underlag vid analys och förbättringsförslag har, utöver nämna referenser, [PageSpeed Insights](https://developers.google.com/speed/pagespeed/insights/) och devtools inbyggda Lighthouse använts


<br>
Resultat
-----------------------

<!-- Dokumentera dina resultat från din studie. Berätta vad du kom fram till, vilka resultat du hittade och observerade. -->
[Analysunderlag Google-Docs](https://docs.google.com/spreadsheets/d/1Z15Jq_YHlI1b5meegoCRuXg9tHocPWtrbDuysc3otSI/edit?usp=sharing)

<br>

### Granit: 

Hemsida: [Granit](https://www.granit.com/se/)

Url: https://www.granit.com/se/

<br>

#### Mätdata desktop:

- Requests: 283.7
- Resources: 8.4 MB
- Load: 2.2 s

<br>

#### Förbättringsförslag:  
Se över bildstorlek/kvalitet, får felmeddelande om att alt-atribut saknas för vissa bilder vilket både påverkar användarvänligheten och sökbarheten i sökmotorer
 <br>

<br>

<div class="img-cont">

<a href="%base_url%/image/pagespeed_granit_desktop.PNG">
    <img class="in-report right" src="%base_url%/image/pagespeed_granit_desktop.PNG?q=100">
</a>

<a href="%base_url%/image/pagespeed_granit_mobile.PNG">
    <img class="in-report left" src="%base_url%/image/pagespeed_granit_mobile.PNG?q=100">
</a>

</div>


<br>

### Mio: 
Hemsida: [Mio](https://www.mio.se/)

Url: https://www.mio.se/

<br>

#### Mätdata desktop:

- Requests: 87
- Resources: 3.6 MB
- Load: 2.3 s

<br>

#### Förbättringsförslag: 
Se över JavaScript koden. Img-element saknar alt-atribut

<br>
<div class="img-cont">

<a href="%base_url%/image/pagespeed_mio_desktop.PNG">
    <img class="in-report right" src="%base_url%/image/pagespeed_mio_desktop.PNG?q=100">
</a>

<a href="%base_url%/image/pagespeed_mio_mobile.PNG">
    <img class="in-report left" src="%base_url%/image/pagespeed_mio_mobile.PNG?q=100">
</a>

</div>
<br>
<br>

### Ellos: 
Hemsida: [Ellos](https://www.ellos.se/)

Url: https://www.ellos.se/

<br>

#### Mätdata desktop:

- Requests: 123
- Resources: 4.8 MB
- Load: 3.7 s

<br>

#### Förbättringsförslag:
Se över koden, läser in oödig JavaScript samt stort DOM-träd vilket skapar längre inladdningstid 

<br>

<div class="img-cont">

<a href="%base_url%/image/pagespeed_ellos_desktop.PNG">
    <img class="in-report right" src="%base_url%/image/pagespeed_ellos_desktop.PNG?q=100">
</a>

<a href="%base_url%/image/pagespeed_ellos_mobile.PNG">
    <img class="in-report left" src="%base_url%/image/pagespeed_ellos_mobile.PNG?q=100">
</a>

</div>


<br>
Analys
-----------------------
<!-- 
Diskutera och analysera de resultaten du fann. -->
Samtliga tre sidorna har mycket innehåll på sina sidor och stor del av dess content består av bilder och olika typsnitt.
Sett till mätdata som hämtats ur devtools network för desktop har Granit bäst laddningstid, men de har högst antal request för att rendera sidan. För mobila enheter är Mio  överlägsen i samtliga tre mätetal (requets, rescources & load). Mio är också den sida som fick bäst rating på PageSpeed Insights för desktop(men inte för mobila enheter). Generellt fick sidorna sämre resultat i PageSpeed Insights/Lighthouse. 

<br>
Medel- eller undermåligt [Speed Index](https://web.dev/speed-index/?utm_source=lighthouse&utm_medium=unknown) för samtliga tre webbsidor. På web.dev förklarar man Speec Index som ett mätetal hur snabbt sidans innehåll visas för användaren under tiden sidan laddas. [[1]](https://web.dev/speed-index/?utm_source=lighthouse&utm_medium=unknown). I en artikel på Moz (Page Speed) [[2]](https://moz.com/learn/seo/page-speed) förklarar man hur viktigt page speed är och hur det påverkar dels att sidan syns i sökresultat liksom det är viktigt för den enskilde användaren och sannolikheten att denne stannar kvar på sidan. Man nämner också vikten av optimering av bilder, med det menar man att bilderna inte ska vara större än de behöver, att de är i rätt filformat och att kvaliteten inte är högre än nödvändigt. Vidare har det i studier från 2016 genomförda av Ericsson [[3]](https://www.ericsson.com/en/press-releases/2016/2/streaming-delays-mentally-taxing-for-smartphone-users-ericsson-mobility-report) visat sig att långsamt laddade sidor ökar stressnivåerna. 


<br>
Lång laddtid på Largest Contentful Paint[[4]](https://web.dev/lighthouse-largest-contentful-paint/?utm_source=lighthouse&utm_medium=unknown) för samtliga, från Mio's 2,6 s,  Ellos 4,4 s  till Granits 4,9 s (mätning genomförd lördag kväll). LCP mäter när det största elementet har renderats till sidan, detta kan jämställas med när det huvudsakliga innehållet är tillgängligt för användaren och anses vara god om den är lägre än 2,5 s. Web.dev anser att om LCP är > 4,0 s anses den vara undermålig och man menar på att är en grundläggande del för god användarvänlighet [[5]](https://web.dev/lcp/#largest-contentful-paint-defined). 

<br>
Performance generellt är också något som är viktigt ur ett ekonomiskt perspektiv. I en artikel på web.dev (Why Speed Matters) [[6]](https://web.dev/why-speed-matters/) skriver man om hur olika företag ökat sin försäljning med ~10%. Det borde således vara av intresse för samtliga tre i webbsidor i analysen.

<br>
Vid första anblick är mätetalen inget vidare i PageSpeed Insight, däremot är det viktigt att lyfta och ifrågasätta hur dåligt det är i förhållande till dess mängd content? Sidorna är, förutom Ellos som är strax över, under 3 sekunder i laddtid vilket ofta används som en gyllene gräns och utan bilderna/content finns risk att webbsidan förlorar sitt syfte. Testerna är dock genomförda senare kväll och en ytterligare frågeställning blir således - hur klarar dessa sidor sig vid högre belastning, exempelvis på Black Friday eller julrea?
Personligen upplever jag att både Mio's och Ellos sidor laddas långsamt, min gräns för en snabb sida går ~1.5s. Jag kan också reflektera över hur jag historiskt valt att lämna sidor där produktsidor inte laddat in tillräckligt snabbt. Jag har genomfört testerna en gång till och märker att LCP är närmre hälften så långsamt och hade varit intressant att se mätetalen i förhållande till trafiken på sidan.

<br> 
Generellt för sidor med mycket bilder ger web.dev [[7]](https://web.dev/fast/#optimize-your-images) följande rekommendationer för optimering av bilder:
* Rätt bildformat
* Komprimera bilderna korrekt, Ilya Grigorik [[8]](https://web.dev/compress-images/) menar att det är något som kan generera stora besparingar i sidans laddtid samtidigt som det fodrar en hel del utvärdering innan det implementeras.
* Ladda in bilderna med rätt dimensioner


<br>
Mio har lägst siffror i 2 av 3 och kommer inte långt efter Granit i laddtid. Men jag har också valt att dividera sidans Resources med antal Request och då är Granits innehåll mindre per request. De har förmodligen optimerat sitt content bättre - ett antagande som stärks av laddtiden som är 2.2 s för desktop. Granit blir vinnaren i testet.


<br>
Referenser
-----------------------

[Chrome DevTools](https://developers.google.com/web/tools/chrome-devtools/network)

[1] web.dev "Speed Index, Performance Audits", 2019. [Online]. TIllgänglig: 
[web.dev/speed-index](https://web.dev/speed-index/?utm_source=lighthouse&utm_medium=unknown)

[2] Moz "Page Speed", 2020. [Online]. Tillgänglig: [Moz] (https://moz.com/learn/seo/page-speed)

[3] Ericsson "Streaming delats mentally taxing for smartphone users: Ericsson Mobility Report", 2016. [Online]. Tillgänglig: [Ericsson](https://www.ericsson.com/en/press-releases/2016/2/streaming-delays-mentally-taxing-for-smartphone-users-ericsson-mobility-report)

[4] Philip Walton "Largest Contentful Paint (LCP)", 2020. Tillgänglig: [web.dev/lcp](https://web.dev/lighthouse-largest-contentful-paint/?utm_source=lighthouse&utm_medium=unknown)

[5] web.dev "Larget Contentful Paint (LCP)", 2020. [Online]. Tillgänglig: [web.dev/lcp](https://web.dev/lcp/#largest-contentful-paint-defined)

[6] web.dev "Why does speed matter?", 2020. [Online]. Tillgänglig: [web.dev/why-speed-matters](https://web.dev/why-speed-matters/)

[7] web.dev "Fast load times", 2020. [Online]. Tillgänglig: [web.dev/fast](https://web.dev/fast/#optimize-your-images)

[8] web.dev "Choose the correct level of compression", 2020. [Online]. Tillgänglig: [web.dev/compress-images](https://web.dev/compress-images/)



<!-- Ange de eventuella referenser du använder dig av, om några. -->

<br>
Övrigt
-----------------------

<!-- Skriv ditt eget namn samt vilka gruppmedlemmar som deltog i att författa rapporten. -->
Frida Ahlström

<br>