## 概要
　

## 環境構築
1. 下記からクローンしてください
```
git clone git@github.com:n0ea5y/catchApp.git
```
2. .env.exsampleをコピー
```
cp .env.example .env
```

3. composerのインストトール
```
 docker run --rm \
  -v $(pwd):/opt \
  -w /opt \
  laravelsail/php83-composer:latest \
  bash -c "composer install"
```

**sail コマンドのエイリアス登録したほうがの今後楽です**

<sub>下記を.bashrcへ</sub>
```
alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'
```


4. コンテナの起動
```
sail up -d
```

5. npmのインストール
```
sail npm install && sail npm run dev
```
6. migrateしてください
```
sail artisan migrate --seed
```
