# 作戦バーン！
 
戦術ボードを気軽に作成し、共有出来るWebアプリ。

# DEMO
 
[こちら](https://evil-barrow-43093.herokuapp.com/)
で試すことができます  
(2022/11/28のHerokuの無料プラン廃止により現在利用できない可能性があります。)
 
# Features

チームスポーツにおいて重要な戦術理解をサポートできる.
1. 気軽に作戦盤を使って戦術を可視化  
2. 作成した画像をアップする事で簡単にチームで共有可能
3. 画像にコメントが付けられる
4. 作成例<br>
<img src="https://user-images.githubusercontent.com/104728126/207908945-d6eef8d8-93d9-4193-a587-c8f1547b07eb.png" width="480px"> <br> 

# Usage
 
### 1.一覧画面(過去作った作戦盤のタイトルと画像が表示される)
<img src="https://user-images.githubusercontent.com/104728126/207902180-174447ef-8944-4279-bfd1-2768d636bce9.png" width="480px"> <br> 

### 2.作成画面  
(①書き込む→②画像変換してダウンロード→③画像ファイルに題名・コメント付与→④投稿)  
#### 作成画面１
<img src="https://user-images.githubusercontent.com/104728126/207903903-b8731267-0d64-412f-ae77-ca7f5d7d99ae.png" width="480px"><br>
#### 作成画面２(スタンプ/ペンのモード変更、色の変更が可能。前後の作業の復元や盤面のリセットも可能。)
<img src="https://user-images.githubusercontent.com/104728126/207904449-48f69d43-d268-4082-9d3c-e32cdab1eba3.png" width="480px"><br>
<br>
### 3.デモ
#### ①作戦盤の作成・投稿
<img src="https://user-images.githubusercontent.com/104728126/207907084-36255863-acde-4d1b-a143-4b5a59934038.png" width="480px"><br>
#### ②投稿された画像が一覧画面に反映
<img src="https://user-images.githubusercontent.com/104728126/207907416-a346880a-ceae-43e2-afce-9baeb3221e4f.png" width="480px"><br>
#### ③詳細画面(文字のコメントまで表示される)
<img src="https://user-images.githubusercontent.com/104728126/207908507-e7919682-fd1a-4f02-971d-0b6b3b9c2340.png" width="480px"><br>

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

