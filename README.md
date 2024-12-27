環境構築
Dockerビルド

1.git clone リンク

2.docker-compose up -d --build

Laravel環境構築

Docker-compose exec php bash
composer install
.env.exampleファイルから.envを作成し、環境変数を変更。
php artisan key:generate
php artisan migrate
php artisan db:seed
使用技術
php 7.4.9
Laravel 8.83.27
Mysql 9.0.1
URL
開発環境：http://localhost/
phpMyAdmin：http://localhost/8080/
