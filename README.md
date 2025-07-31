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
