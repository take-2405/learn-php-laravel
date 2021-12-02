# learn-php-laravel
phpとlaravelを描けるようになる

### 環境構築(Mac)
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
https://github.com/phpbrew/phpbrew/wiki/Requirement#HomeBrew  
https://yurupro.cloud/2070/#toc4


## メモ
 #### phpとJavaScriptの違い
 - phpはサーバーサイドで実行される
 - JavaScriptはクライアントサイドで実行される