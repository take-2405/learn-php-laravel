### php artisan serverでエラー
- エラー内容  
```
Warning: require(ファイルパス) : Failed to open stream: No such file or directory in (ファイルパス)//artisan on line 18
```

- 解決法  
コンポーザーをアップデート 
```
composer update
```

### プロジェクトを起動するとエラー(もしくは差分が反映されない)  
- 解決法  

```
// .envファイル作成
copy .env.example .env

// APP_KEYの作成
php artisan key:generate

// キャッシュクリア
php artisan cache:clear

//再起動
php artisan serve
```

### 起動後にステータスコード500  
- 解決法  
```
// .envファイル作成
copy .env.example .env

//再起動
php artisan serve
```