# mediaSpeler

Dit is een basic MediaSpeler. Het is nog niet af, maar is werkende.

# Setup

Deze versie vereist lichte setup, namelijk het aanmaak van de media bestand, hier kun je je muziek en films folder in doen.
de structuur moet er zo uit komen te zien:

``` ./mediaSpeler/media/films ``` en ``` ./mediaSpeler/media/muziek ```

De Toevoegen functie is extreem handig, maar kan het meeste setup veroorzaken, want de functie werkt met een form en alle webservers hebben een limiet op de filesize die je kunt uploaden om dit tegen te gaan gebruik deze 2 scripts aan het begin van de code (maakt niet uit waar): ``` echo "max upload size: " . ini_get('upload_max_filesize'); echo "post max size: " . ini_get('post_max_size');``` Dan kunt u zien wat de max is en verander dan in uw .ini bestand deze 2 variabelen naar wat u wilt ``` post_max_size ``` en ``` upload_max_filesize ``` voor mij is dat 2G (2 gigabyte)

# Toekomst 

De volgende dingen zullen in de komende updates :

- preinstalled media folders
- database om categorieen en andere belangrijke dingen bij te houden
- optie om gehele albums in de muziek folder te gooien in plaats van losse mp3 bestanden
- verbeterde front-end
- filters om je film/muziek beter te vinden tussen je grote lijst van spullen
- sidebar waar je je films/muziek kunt bekijken op basis van categorie
- versie voor servers met login systeem
- playlist systeem voor muziek
- suport voor meer file formats


# Gedaan✅

Deze dingen stonden eerst onder toekomst maar zijn inmiddels al gedaan: 

- Pagina om nieuwe films/muziek toe te voegen zonder in de files te moeten