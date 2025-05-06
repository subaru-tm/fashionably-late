＃   アプリケーション名
　Fashionably-Late お問い合わせフォーム

＃＃ 環境構築
 Dockerビルド
  1. git clone https://github.com/subaru-tm/fashionably-late.git
  2. docker-compose up -d --build
 マイグレーション
　3. php artisan make:migration CreateContactsTable
  4. php artisan make:migration CreateCategoriesTable
 シーディング
  5. php artisan make:seeder ContactsTableSeeder
  6. php artisan make:seeder CategoriesTableSeeder
 ファクトリ
  7. php artisan make:factory ContactFactory

＃＃ 使用技術（実行環境）
 Laravel 3.8
 MySQL 8.0.26

＃＃ ER図
 (無し ##申し訳ありません、時間不足により作成できませんでした)

＃＃ URL
　開発環境：http://localhost/
  phpMyAdmin：http://localhost:8080/
