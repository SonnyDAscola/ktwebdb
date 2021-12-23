# KT WebDb

Kontakt: Lars: 0176-78020628

## wie nutzen?

In der Shell im Wurzelverzeichnis zunächst mit 

`composer` die notwendigen Pakete installieren.

In `.env` die korrekten Datenbank-Zugangsdaten eintragen.

Dann mit `php artisan migrate --seed` die Datenbank anlegen. Das `--seed`
führt dazu, dass auch Daten eingetragen werden. Ich habe noch nicht alles
davon geprüft, war froh, dass es anscheinend gut durch lief.  
Manchmal gibt es hier einen Fehler, dass ein Wert doppelt eingetragen 
werden soll. Dann einfach nochmal starten, das ist Glückssache.

## Fragen

### Fragen zu Lumen

1. wie wird die Benutzerauthentifizierung erledigt? Wie verhindern 
   wir, dass nicht autorisierte Personen die Daten sehen können?

2. Auf welchen Werten sollen in `.env` die Einstellungen
   `CACHE_DRIVER` und `QUEUE_CONNECTION` stehen?

3. Wie soll das Passwort in der DB gespeichert werden?


## Seeder

### users
* Namen aus Menge
* E-Mail random
* Description: 60%, Textlänge zwischen 3 und 30 Worten
* active: 90% true
* is_admin: 1 und 2

### Clients
* Namen aus Random
* revisit_client: 10% true

### Tags
* Tag aus Set
* Beschreibung: 20%, zwischen 3 und 30 Worten

### Client_Tag
* Anzahl: 1/2 * clients
* client: Random
* Tag: Random
* keine doppelten

### Documentations
* die letzten 100 Tage
* jeweils 1 oder 2 MA
* zwischen 0 und 4 Gesprächen
* author_id: 10% etwas anderes als Advisor_id (dann für alle Anrufe an den Advisor an dem Abend)
* timestamp: created_at: entweder call_started oder, bei author != advisor + 11h + random(260)
* call_started: 1800 + random (240)
* call_duration: random(14) * 5
* client_id: random (1/2 * clients) + random (1/2 * clients)
* erstelle documentation_texts (documentation_id)

### texttype
klar vorgegeben

### documentation_texts
* 1 - n: ids durchgehen
* in 60% der Fälle: erstelle Text(texttype_id)
* documentation_id: Parameter

### texts
* content: Lorem Ipsum 3-80
* texttype: Parameter


## Schema

### user
* int: id
* varchar(50): name
* varchar(50): e-mail *(als login)*
* password: passwort *(sha-1 oder so)*
* text: description
* datetime: date_created
* bool: active
* bool: is_admin

### client
* int: id
* varchar(30): name
* datetime: created_on *(wenn es mehrere Schreibweisen gibt, kann man hiermit zum Anfang kommen)*
* bool: revisit_client *(ich kenne den Klienten, weiß aber den Namen nicht mehr)*

### tag
* int: id
* varchar(30): text *(Stichwort)*
* text: description *(falls es noch eine kleine Beschreibung dazu geben muss)*

### client_tag
* int: FK: client_id
* int: FK: tag_id

### documentation
* int: id
* datetime: created_on *(wann wurde der GB angelegt)*
* int: FK: author => user_id *(von wem wurde der GB angelegt)*
* int: FK: adviser => user_id *(wer führte das Gespräch)*
* datetime: call_start
* datetime: call_end
* int: FK: client_id

### texttype
* int: id
* varchar(80): title *Befindlichkeit, Problematik, aktuelle Situation etc*
* text: description *nähere Beschreibung des Typs, Fragen, die helfen, den Infotext zu schreiben*
* int: order *Reihenfolge der Texte im Protokoll*

### documentation_text
* int: FK: text_id
* int: FK: documentation_id

### text
* int: id
* int: FK: texttype_id
* text: content

### message
* int: id
* int: FK: sender => user_id
* int: FK: receiver => user_id
* datetime: date_send
* datetime: date_received
* bool: star_by_receiver

-----

### phone_number
* varchar(50): number 
* bool: is_default *(kann festgelegt werden)*
* varchar(30): name *(pretty name)*
* int: FK: user_id

### phone_forward
* int: id
* datetime: start
* datetime: end
* int: FK: phone_number_id
* bool: active
* bool: success
