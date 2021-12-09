# 新規ページを作成  
### 内部処理がない場合
1. ページを表示するプログラムを準備
- ファイルを置く場所  
resources/views/  
拡張子「.blade.php」

2. 新規ページを認識させる
- 変更ファイル  
route/web.php
デフォルト
```
Route::get('/', function () { 
    return view('welcome');   
}); 
```

### 内部処理がある場合

1. コントローラーを作成
```
php artisan make:controller 任意の名前Controller
```

