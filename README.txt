Šeit aprakstīšu vajadzīgos soļus, lai veiksmīgi startētu manējo projektu.

Vajadzīgo aplikāciju saraksts:
Xampp
MySQL Workbench

1. Solis: Atvērt Xampp;
2. Solis: Startēt MySQL serveri un iegaumēt Port(s) sadaļu;
3. Solis: Atvērt MySQL Workbench;
4. Solis: Izveidot jaunu savienojumu, kur Port sadaļa sakrīt ar iegaumēto MySQL portu;
5. Solis: Aizpildi atlikušos laukus, ja tādi ir;
6. Solis: Palaid Šo skriptu: "
CREATE DATABASE rihify_data;
use rihify_data;
create user 'admin'@'localhost' identified by 'password';
grant all privileges on rihify_data.* to 'admin'@'localhost';
FLUSH PRIVILEGES;
";
7. Solis: Izveidot kopiju ".env.example" un nosauc to .env;
8. Solis: Samainīt DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME un DB_PASSWORD sadaļu uz šo: "

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT={{Tavs iegaumētais ports}}
DB_DATABASE=Rihify_Data
DB_USERNAME="admin"
DB_PASSWORD=password

";
9. Solis: Samainīt MAIL_MAILER, MAIL_HOST, MAIL_PORT, MAIL_USERNAME, MAIL_PASSWORD, MAIL_ENCRYPTION, MAIL_FROM_ADDRESS un MAIL_FROM_NAME sadaļu uz šo: "

MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=RihifyMail@gmail.com
MAIL_PASSWORD="{{Parole}}"
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="RihifyMail@gmail.com"
MAIL_FROM_NAME="RihifyHelp"

" --Šis ir mans epasts, ko izveidoju ši projekta ietvaros. MAIL_PASSWORD satur sensitīvus datus, tāpēc tie nav šeit ievietoti;
10. Solis atvērt termināli un palaist šo komandu: composer install;
11. Solis termināli ieraksti šo komandu: php artisan key:generate;
12. Solis termināli ieraksti šo komandu: php artisan migrate --Šis izveidos datubāzes tabulas un ierakstus;
13. Solis termināli ieraksti šo komandu: php artisan ser --Startēs web serveri;
14. Solis ieraksti adresi, kas atrodās terminālī: Server running on [{{adrese}}]. adreses piemērs: "http://127.0.0.1:8000";
