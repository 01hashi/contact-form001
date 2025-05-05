お問い合わせフォーム

環境構築
Dockerビルド
1.　git clone git@github.com:coachtech-material/laravel-docker-template.git　をリンク
2.　docker-compose up -d --build

laravel環境構築
1.　docker-compose exec php bash
2.　composer install
3.　cp .env.example .env　で.envをコピーして作成
4.　php artisan key:generate
5.　php artisan migrate
6.　
7.
8.


