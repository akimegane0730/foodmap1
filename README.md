# アプリ名
## Foodmap  

# 概要
## お店の情報とおすすめの一品を紹介し合うサイト  

# 本番環境(デプロイ先 テストアカウント＆ID)
## デプロイ先:heroku
## テストアカウント
### mail:test1@gmail.com
### password:testtest  

# 制作背景(意図)
## 初めていくお店でどれがおすすめの一品かを知りたいときに実際にいったことのある人の生の声を聞くことができればいいなと思ったから。


# 工夫したポイント
## googlemapの搭載、ログインしているユーザーのみ新規投稿できないこと、レスポンシブ対応
# 使用技術(開発環境)
## Laravel,HTML,CSS,Bootstrap,heroku  

# 課題や今後実装したい機能
## いいね機能, 画像投稿機能,  

# DB設計

## shopテーブル

|Column|Type|Options|
|------|----|-------|
|name|string|null:false|
|address|string|null:false|
|item|string|null:false|
|reason|string|null:false|
|user_id|integer|null:false|
|category_id|integer|null:false|

### Association
- belongs_to :user
- has_many :categories

## categoryテーブル
|Column|Type|Options|
|------|----|-------|
|name|string|nu;;:false|

### Association
- belongs_to :shop