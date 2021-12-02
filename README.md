# learn-php-laravel
phpとlaravelを書けるようになる

### リポジトリの目的
phpとlaravelについて学び、書けるようになること

### ディレクトリ構成  
フォルダ単位で説明する  
- docs：メモを記載
```
.
├── LICENSE
├── README.md
├── docs
│   └── basic-grammer.md
└── main.php
```

### オーナー
take2405

---
# 環境構築(Mac)
- phpをインストール  

```
brew install php
```

- phpbrewをインストール  
phpbrewをインストールしておくことで複数のバージョンのphpを楽に管理できるためおすすめ(Docker、Vargrantなどで構築も可能)
```
brew install autoconf pkg-config
brew install bison re2c

curl -L -O https://github.com/phpbrew/phpbrew/releases/latest/download/phpbrew.phar

chmod +x phpbrew.phar
sudo mv phpbrew.phar /usr/local/bin/phpbrew
```
- bashに設定
```
php brew init
source $HOME/.phpbrew/bashrc
```

- 参考サイト  
    - https://github.com/phpbrew/phpbrew/wiki/Requirement#HomeBrew  
https://yurupro.cloud/2070/#toc4
    - https://github.com/phpbrew/phpbrew/blob/master/README.ja.md


### phpbrew使用方法  
わざわざ書くのは面倒なので一部のみ記載、詳細は参考記事を利用する  
- インストール可能versionの確認  
```
phpbrew known
```
- インストール
```
phpbrew install 5.5.24 +default
```
- バージョン切り替え
```
phpbrew switch 5.5.24
```
- 参考記事  
https://github.com/phpbrew/phpbrew/blob/master/README.ja.md

## メモ
 #### phpとJavaScriptの違い
 - phpはサーバーサイドで実行される
 - JavaScriptはクライアントサイドで実行される
 #### バリアント  
 - php拡張モジュールの管理をしてくるもの