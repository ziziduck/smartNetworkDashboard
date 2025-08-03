# Smart Network Dashboard

## 專案簡介
Smart Network Dashboard 是一套全端網路監控儀表板 Side Project，採 monorepo 結構設計。專案展示企業級全端技術：PHP OOP、Laravel、Vue 3、MySQL、Docker、K8s、CI/CD、API 串接與前後端分離開發能力。

## 架構概覽
- `backend/` : Laravel 10 (PHP 8+)
- `frontend/` : Vue 3 + Vite
- `infra/` : K8s YAML、CI/CD script（未來可擴充）
- `docker-compose.yml` : 後續補上

## 主要開發分支（小駝峰命名）
- initMonorepo：專案初始化與 monorepo 結構
- dockerSetup：Docker、DB、.env 設定
- backendApiInit：Laravel DB 與基本 API
- frontendInit：Vue 專案與 API 串接
- basicCrudFeature：CRUD 主功能
- featureIntegration：功能整合與優化
- ciCdAndDeploy：CI/CD 與自動化建置部屬

## 注意事項
- .env 不進 git，請本機複製 .env.example 自行設定
- storage/logs, storage/framework/cache/data 資料夾需本機先建立
- 分支命名皆使用小駝峰

## Docker 快速啟動
1. 複製 backend/.env.sample 為 backend/.env，檢查資料庫連線資訊
2. 執行 `docker compose up --build`
3. 第一次啟動會自動安裝 composer、產生 key、migrate 資料庫
4. 服務啟動後，Laravel API 可由 [http://localhost:8080](http://localhost:8080) 存取
5. 資料庫可由本機 33060 port 連接，帳密為 root / secret

## 開發環境注意
**所有 composer、php artisan、migration 指令都請在 container 內執行，避免本機環境差異與連線問題。**
### 啟動與資料表建置流程
1. 啟動 docker compose      docker compose up -d
2. 進入 backend container   docker compose exec app bash
3. 安裝 Laravel（若還沒裝好），或 composer install
4. 複製 .env.example → .env，產生 APP key
5. 執行 migration 建表