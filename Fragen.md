# Fragen zu KT WebDB Projekt

## Fragen zu Lumen

1. wie wird die Benutzerauthentifizierung erledigt? Wie verhindern 
   wir, dass nicht autorisierte Personen die Dten sehen können?

   Antwort: Das erledigt man über so genannte Middleware entweder global (in unserem Fall) oder auf speziellen Seiten (in deinem Admin-Fall)

2. Auf welchen Werten sollen in `.env` die Einstellungen
   `CACHE_DRIVER` und `QUEUE_CONNECTION` stehen?
   Antwort: Das hängt davon ab, das schauen wir uns aber bei deployment an. Das kann erst mal so bleiben

3. Wie soll das Passwort in der DB gespeichert werden?
   Antwort: Entweder auf dem weg, den uns Laravel vorgibt oder aber verschlüsselt mittels Salt (da wir den aber angeben müssen und die basic auth nutzen können ist das abgedeckt)

