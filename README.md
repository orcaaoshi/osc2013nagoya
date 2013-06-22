
# FuelPHPライブコーディング ソースコード @ OSC2013 Nagoya
---

このソースは、MacOS X環境でMAMPを動作させ、ローカル環境でデモしたものです。

---
#### このデモを動作させるにあたって

FuelPHPは本来、publicディレクトリだけを公開できる状態とする必要があります

外部公開する場合にはエイリアスを作成するなどして、fuelディレクトリを公開しないようにしてください

今回は（MAMP環境の場合）/Application/MAMP/htdocs以下にosc2013nagoyaディレクトリを置いたと仮定します

http://localhost/osc2013nagoya/public/ をブラウザから開いて、FuelPHPのwelcomeページが表示されることを確認してください

---
#### その他、スライドにて説明した処理は以下URLで開くことができます

http://localhost/osc2013nagoya/public/demo/index/

http://localhost/osc2013nagoya/public/demo/greeting/

http://localhost/osc2013nagoya/public/api/population.json

http://localhost/osc2013nagoya/public/api/population.xml

ただし、次のURLはこれ以下の設定を行わないと正しく動作しません

http://localhost/osc2013nagoya/public/demo/population/

---
#### データベースを動かすために必要な設定

MySQLのユーザーとして「osc」を作成してください

接続可能ホストはローカルのみとし、パスワードは空にしておいてください

ここを変えたい場合はapp/config/development/db.phpを変更してください

データベースoscを作成し、ユーザーoscから利用できるようにしてください

---
#### oilの実行

既に「php oil generate model ...」は実行済の状態です

上記データベース設定ができている状態であれば、以下のコマンドが通ります

$ php oil refine migrate

このコマンドが通れば、oscデータベースにpopulationsテーブルが作成されます

---
#### データを登録する

population_data.sqlを実行して、populationsテーブルにデータを登録します

これで http://localhost/osc2013nagoya/public/demo/population/ を動作させられるようになります

---
## FuelPHP

### Version: 1.6.1