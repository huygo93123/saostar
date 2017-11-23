## SAOSTAR (v 1.0.0)
## Requirement and Web Server (Laravel 5.4)
- PHP >= 5.6.4
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- Apache 
      <ul>
      <li>Mod_rewrite URL (https://www.digitalocean.com/community/tutorials/how-to-set-up-mod_rewrite-for-apache-on-ubuntu-14-04)</li>
      </ul>
- NGNIX
## Setup 
- Install Composer (https://getcomposer.org/download/)
- cd path/to/SaoStar
- composer install
- php artisan key:generate
- mv .env.example .env
- <b>Config</b> .env
- setup TimeZone 'timezone' => 'Asia/Ho_Chi_Minh',
- php artisan config:cache
- composer dump-autoload
- Symlink : php artisan storage:link
- sudo usermod -a -G www-data ubuntu (Nếu cần FTP thì ubuntu chính là tên user sẽ được nhóm với apache và cấp quyền ngang hàng với apache(www-data))
- sudo chown -R www-data:www-data /path/to/your/root/directory
- sudo find /path/to/your/root/directory -type f -exec chmod 644 {} \;    
- sudo find /path/to/your/root/directory -type d -exec chmod 755 {} \;
- sudo chgrp -R www-data storage bootstrap/cache
- sudo chmod -R ug+rwx storage bootstrap/cache 
## Config vitural host
https://www.digitalocean.com/community/tutorials/how-to-set-up-apache-virtual-hosts-on-ubuntu-14-04-lts