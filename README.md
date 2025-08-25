# Tailwind3.4-Slim2-for-goodsdesign

這是一套結合 **Gulp + TailwindCSS + Babel**（前端）與 **PHP Slim2**（後端路由）的開發環境。  
目標是提供 **快速開發、即時預覽、清晰路由** 的工作流程，並支援正式環境部署。  

---

## 🚀 功能特色

### 前端
- **SCSS 編譯** → 自動轉換 SCSS → CSS。  
- **TailwindCSS** → 使用原子化 class 快速排版。  
- **PostCSS + Autoprefixer** → 自動補齊前綴。  
- **Babel + Uglify** → 支援 ES6+ 語法並壓縮 JS。  
- **Source Maps** → 方便除錯。  
- **BrowserSync** → 即時刷新，支援 PHP 頁面。  

### 後端
- **Slim2 Framework** → 輕量級 PHP 路由框架。  
- **Guzzle** → HTTP client，方便串接 API。  

---

## 📂 專案結構
```
project/
├─ sass/ # SCSS 原始碼
├─ src/ # JavaScript 原始碼
├─ stylesheets/ # 編譯後 CSS
├─ dist/ # 編譯後 JS
├─ views/ # PHP 模板
│ ├─ index.php
│ └─ project.php
├─ gulpfile.js # Gulp 任務
├─ package.json # 前端套件管理 (npm)
└─ composer.json # 後端套件管理 (composer)
```

---

## 📦 套件一覽

### 前端 (npm)
- **gulp** → 自動化核心  
- **browser-sync** → 即時預覽  
- **gulp-sass / sass** → SCSS 編譯  
- **gulp-postcss + autoprefixer** → CSS 後處理  
- **tailwindcss** → 原子化 CSS  
- **gulp-babel + @babel/core** → JS 轉譯  
- **gulp-uglify** → JS 壓縮  
- **gulp-sourcemaps** → 除錯用  

### 後端 (composer)
- **slim/slim ~2.0** → PHP 輕量級路由框架  
- **guzzlehttp/guzzle ^7.0** → HTTP Client  

---

## 🛠 安裝與使用

### 1. 安裝前端套件
```bash
npm install
```

### 2. 安裝後端套件
```bash
composer install
```

### 3. 啟動開發環境
```bash
gulp
```

---

## 🔧 Slim2 路由範例

```php
<?php
require 'vendor/autoload.php';

$app = new \Slim\Slim(array(
    'templates.path' => './'
));

$app->get('/', function () use ($app) {
    $app->render('views/index.php');
});

$app->get('/project', function () use ($app) {
    $app->render('views/project.php');
});

$app->run();
```

路由對應：

- http://localhost:8888/ryder/ → 渲染 views/index.php
- http://localhost:8888/ryder/project → 渲染 views/project.php



## 📊 工作流程圖
```
(src/*.js)    (sass/*.scss)     (php routes)
     │              │                  │
     ▼              ▼                  ▼
   Babel → Uglify   Sass → PostCSS     Slim2
     │              │                  │
     ▼              ▼                  ▼
   dist/*.js     stylesheets/*.css   /views/*.php
          │              │                │
          └───→ BrowserSync ←─────────────┘
```


## 📋 開發環境需求
- Node.js: v18+
- npm: 9+
- PHP: 7.4+ (Slim2 相容)
- Composer: 2.x

---

## ❓ 常見問題

### Q1. 為什麼跑 gulp 出錯？
- Node.js 版本不符 → 請使用v18+版本。
- 缺少套件 → 請先執行 npm install。
- 套件版本更新 → 根據錯誤訊息安裝相依套件或其他處理方式

### Q2. Composer 安裝出錯？
- 請確認已安裝 Composer
- 如果 vendor/ 缺失 → 執行 composer install。

### Q3. 不會 Gulp 也能工作嗎？
- 可以但是要注意自動編譯的檔案是否會被覆蓋
  - 原始檔案放在 /src 與 /sass，再由 Gulp 編譯輸出。
  - 直接改 /src 卻不編譯，下次跑 Gulp 會被覆蓋。
