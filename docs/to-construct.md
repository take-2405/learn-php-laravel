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

### Laravelの環境を構築  
- composer インストール
```
brew install composer
```
- laravelをインストール
```
composer global require "laravel/installer"
```
- laravelコマンドを使用可能に
```
vim ~/.zshrc

//以下内容を追記
export PATH="$PATH:/Users/<ユーザー名>/.composer/vendor/bin"

source ~/.zshrc
```