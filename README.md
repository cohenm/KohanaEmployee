KohanaEmployee
==============

Aplikacja która zawiera 3 podstawowe widoki oraz szablon. 
Wygląd folderu views/employee/ zawiera on 3 pliki - index.php, add.php, edit.php
Wygląd folderu template/ - zawiera on plik template/php oraz folder part/ z 3 stałymi częściami szablonu, footer.php, header.php oraz menu.php
Jeden model do obsługi bazy danych - class/models/employee.php
Dwa kontrolery - class/controller/employee.php oraz class/controller/base.php (pierwszy obsługuje tabele employee, drugi szablon template/template.php
Jeden plik messages - messages/msg.php - to tablica z wszystkimi możliwymi błędami.
bootstrat.php - konfiguracja ustawień podstawowych (strefa czasowa, informacje lokalne, język strony, katalog strony, obsługiwane moduły (tutaj tylko database) oraz routing (controller - employee, action - index)
config/database.php - do zmiany parametry połączenia domyślnego

Podsumowanie
---------------
Przy usuwaniu - jest drobny problem z przekierunkowaniem, ale mimo to działa poprawnie (po ręcznym przejściu na stronę główną lub po przycisku wstecz), walidacja zrobiona poprawnie, jakiś szablon strony.

Zawiera tylko pliki zmieniane/dodawane
---------------
Z celu uruchomienia potrzetny jest kompletny pakiet Kohana v.3.3.1 - https://github.com/kohana/kohana/releases/download/v3.3.1/kohana-v3.3.1.zip. Folderami wykluczonymi w GitHub są m.in.

application/cache/*
application/logs/*
application/i18n/*
modules/*
system/*
.htaccess
index.php
