＃ アプリケーション名 　Fashionably-Late お問い合わせフォーム

＃＃ 環境構築

Dockerビルド
git clone https://github.com/subaru-tm/fashionably-late.git
docker-compose up -d --build 

マイグレーション
php artisan make:migration CreateContactsTable
php artisan make:migration CreateCategoriesTable

シーディング
php artisan make:seeder ContactsTableSeeder
php artisan make:seeder CategoriesTableSeeder

ファクトリ
php artisan make:factory ContactFactory


＃＃ 使用技術（実行環境）
　Laravel 3.8
　MySQL 8.0.26

＃＃ ER図 (無し ##申し訳ありません、時間不足により作成できませんでした)

＃＃ URL
　開発環境：http://localhost/
　phpMyAdmin：http://localhost:8080/
