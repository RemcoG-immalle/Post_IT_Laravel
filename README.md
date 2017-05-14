# Post_IT_Laravel

## Gebruik
###### Met mijn webapp kunnen mensen kleine anecdotes en berichten delen met elkaar per thema. Zo kan men inloggen op de site en een pagina aanmaken met een thema naar keuze. Andere gebruikers kunnen ook inloggen en deze pagina bezoeken, hierop kunnen zijn dan een berichtje achterlaten met de andere bezoekers van deze pagina.

### Setup
- Zorg ervoor composer geinstalleerd is, als dit het geval is, `cd` in de repo en voer `composer install` uit
- Om de database aan te maken, voer je `php artisan migrate:refresh --seed` uit
- Maak een nieuwe `.env` file aan doormiddel van de `.env.example`
- Voer het commando `php artisan key:generate` om een nieuwe key aan te maken
- Run de WebApp dan uiteindelijk met het commando `php artisan serve`

### Problemen
In het begin had ik het vooral moeilijk met het kiezen van een framework om in te werken. Ik ben begonnen in Flask, maar dit leek dan toch moeilijker dan verwacht, door de uiteindelijk duidelijke uitleg die we in de klas hebben gekregen ben ik overgeschakeld naar Laravel. Dit framework zorgt ervoor dat je back- en frontend zeer goed kan combineren. Ik ben er zeer tevreden van.
