Kmom05 Webbsidors laddtid.
==========================

Denna rapport kommer behandla webbsidors
laddtid och eventuella förbättringsmöjligheter.

Urval
-----------------------

För att begränsa urvalet kommer denna rapport
behandla tre webbsidor inom webbhandel av
hemelektronik. Detta för att webbsidor i den
kategorin ofta använder sig av mycket bilder
och rent generellt är relativt komplexa.

De tre webbsidor som valts är:

* [Komplett](https://www.komplett.se)
* [Inet](https://www.inet.se)
* [CDON.COM](https://cdon.se)

Metod
-----------------------

För var och en av de tre webbsidorna (se Urval)
har jag valt tre undersidor som kommer undersökas.

Med Googles verktyg
[PageSpeed Insights](https://developers.google.com/speed/pagespeed/insights/)
får jag ut poäng för mobil- samt desktop-version av sidan.
För att mäta laddtid, resurser och storlek använder
jag Google Chromes DevTools. Där läser jag av
antal requests, kB/MB transferred och Finish-tiden.
Då vissa sidor fortsätter att hämta data då och
då efter att sidan laddats "färdigt" väljer jag
att läsa av finish-tiden då den inte ändrats på
några sekunder. Laddtider och poäng kommer
dokumenteras och jämföras i ett kalkylblad,
för detta använder jag Microsoft Excel.

Resultat
-----------------------

[Delat Excel-dokument med rå-data](https://1drv.ms/x/s!AhFF5ZvlLi6OgrdN3sUNgXMNBYwcMA).

####komplett.se

![Screenshot av Komplett.se](img/kmom05/komplett.jpg)

**Sidor**

* [Startsida](https://www.komplett.se/)
* [Mobil](https://www.komplett.se/category/21064/mobil/mobiltelefon)
* [Datorkomponenter](https://www.komplett.se/category/28003/datorutrustning/datorkomponenter)

|Genomsnittliga värden|Startsida|Mobil|Datorkomponenter|
|---------------------|--------:|----:|---------------:|
|Poäng, Mobile        |       57|   54|              54|
|Poäng, Desktop       |       99|  100|              95|
|Laddtid (s)          |      3,9|  4,2|             4,2|
|Resurser (st)        |      126|  128|             125|
|Storlek (kB)         |     1100|  800|             900|

Trots störst storlek har startsidan kortast laddtid.
För att ge en ännu bättre upplevelse skulle den kunna
minskas ner en aning med kanske färre/mindre bilder.

####inet.se

![Screenshot av Inet.se](img/kmom05/inet.jpg)

**Sidor**

* [Startsida](https://www.inet.se)
* [Mobil](https://www.inet.se/kategori/734/mobiltelefon)
* [Datorkomponenter](https://www.inet.se/kategori/31/datorkomponenter)

|Genomsnittliga värden|Startsida|Mobil|Datorkomponenter|
|---------------------|--------:|----:|---------------:|
|Poäng, Mobile        |       33|   46|              30|
|Poäng, Desktop       |       97|   98|              79|
|Laddtid (s)          |      2,5|  2,4|             2,7|
|Resurser (st)        |      149|  145|             126|
|Storlek (kB)         |     1800| 1300|            1600|

Startsidan och datorkomponenter får väldigt
dåligt betyg av PageSpeed Insights. De laddar
en hel del resurser både i antal och mängd data.
Laddtiden är visserligen väldigt låg men på
långsammare internet kan det bli ett problem.
Att minska ner totala storleken med mindre/färre
bilder och kanske lite lättare scripts skulle
mobil-upplevelsen kunna förbättras väsentligt.

####cdon.se

![Screenshot av CDON.se](img/kmom05/cdon.jpg)

**Sidor**

* [Startsida](https://cdon.se)
* [Mobil](https://cdon.se/mobiltelefoni/)
* [Datorkomponenter](https://cdon.se/spel/gamingtillbehor/datorkomponenter/)


|Genomsnittliga värden|Startsida|Mobil|Datorkomponenter|
|---------------------|--------:|----:|---------------:|
|Poäng, Mobile        |       24|   44|              34|
|Poäng, Desktop       |       84|   94|              91|
|Laddtid (s)          |      6,2|  5,3|             7,0|
|Resurser (st)        |      202|  204|             188|
|Storlek (kB)         |     2100| 1800|            1800|

Både antal resurser och totala storleken på dessa sidor
är väldigt högt. Detta leder, i detta fallet, till en
väldigt lång laddtid. Även PageSpeed Insights betyg
för mobila enheter på startsidan är väldigt lågt.
Att dra ner på antalet bilder och tunga scripts skulle
kunna förbättra upplevelsen både för mobil och desktop.

Analys
-----------------------

Alla tre webbplatserna och dess undersidor har ett tydligt
problem gemensamt. Antal resurser och totala storleken på
sidorna är höga, vilket ibland leder till långa laddtider.

**Snabbast laddtid**

1. [Inet](https://www.inet.se)
2. [Komplett](https://www.komplett.se)
3. [CDON.COM](https://cdon.se)

**Bästa mobil-upplevelse**

1. [Komplett](https://www.komplett.se)
2. [Inet](https://www.inet.se)
3. [CDON.COM](https://cdon.se)

**Bästa desktop-upplevelse**

1. [Komplett](https://www.komplett.se)
2. [Inet](https://www.inet.se)
3. [CDON.COM](https://cdon.se)

För att ytterligare betygsätta webbsidorna
sätter jag en gräns på 5 sekunder för vad
jag anser som en snabb/långsam laddning.
Inets genomsnittliga laddtid är den lägsta i
urvalet på endast 2,5 sekunder vilket
definitivt räknas som snabbt. Kompletts 4
sekunder är ganska nära gränsen men ändå
helt ok. CDON har dock betydligt längre
laddtider med ett genomsnitt på 6,1 sekunder
och en längsta tid på 7 sekunder.

Som tidigare nämnt verkar storleken och antalet
resurser vara sen största boven i detta urvalet.
För att minska ner på detta gäller det nog alltid
att minska ner på antalet bilder och deras
storlekar, men även som sagt minska ner på
användandet av tunga scripts och js-ramverk.

Referenser
-----------------------

**Analyserade webbsidor**

* [Komplett](https://www.komplett.se)
    * [- Startsida](https://www.komplett.se/)
    * [- Mobil](https://www.komplett.se/category/21064/mobil/mobiltelefon)
    * [- Datorkomponenter](https://www.komplett.se/category/28003/datorutrustning/datorkomponenter)
* [Inet](https://www.inet.se)
    * [- Startsida](https://www.inet.se)
    * [- Mobil](https://www.inet.se/kategori/734/mobiltelefon)
    * [- Datorkomponenter](https://www.inet.se/kategori/31/datorkomponenter)
* [CDON.COM](https://cdon.se)
    * [- Startsida](https://cdon.se)
    * [- Mobil](https://cdon.se/mobiltelefoni/)
    * [- Datorkomponenter](https://cdon.se/spel/gamingtillbehor/datorkomponenter/)

**Verktyg**

* [PageSpeed Insights](https://developers.google.com/speed/pagespeed/insights/)

**Data**

[Delat Excel-dokument med rå-data](https://1drv.ms/x/s!AhFF5ZvlLi6OgrdN3sUNgXMNBYwcMA).

Övrigt
-----------------------

Undersökning genomförd och rapport författad av Anton Johnsson Håkansson,
Webbprogrammering Distans 120hp, Blekinge Tekniska Högskola.