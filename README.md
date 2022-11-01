# 作戦バーン！
 
戦術ボードを気軽に作成し、共有出来るWebアプリ。

# DEMO
 
[こちら](https://evil-barrow-43093.herokuapp.com/)
で試すことができます
 
# Features

チームスポーツにおいて重要な戦術理解をサポートできる.
1. 気軽に作戦盤を使って戦術を可視化  
2. 作成した画像をアップする事で簡単にチームで共有可能
3. 画像にコメントが付けられる

# Usage
 
DEMOの実行方法など、"hoge"の基本的な使い方を説明する

# Requirement
 
 * "php": "^7.2.5|~8.0.0"
 * "aws/aws-sdk-php": "^3.240"
 * "fideloper/proxy": "^4.4"
 * "laravel/framework": "^6.20.26"
 * "laravel/tinker": "^2.5"
 * "league/flysystem-aws-s3-v3": "^1.0"
 

# Installation
* インストールと初期設定   
git clone  
cd laravel6-blog  
composer install  
npm install  
npm run dev  
cp .env.example .env  
php artisan key:generate  

* .envの中身を設定  
DB_DATABASE={db_name}  
DB_USERNAME={db_username}  
DB_PASSWORD={db_password} 

* マイグレーションを実行して，サーバを起動  
php artisan migrate:fresh --seed  
php artisan serve --port=8080  

 
# Note
 
作成中のアプリなのでバグ等が生じた場合は下記までご連絡ください。
 
# Author
 
* 作成者：Takuma Furuichi
* 所属：東京大学工学部システム創成学科
* E-mail：tkf38640966@gmail.com


# License
 
"作戦バーン" is under MIT license.

