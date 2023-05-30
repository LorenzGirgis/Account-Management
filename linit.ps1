function linit {
    param(
        [Parameter(Mandatory=$true, Position=0)]
        [string]$projectName
    )

    composer create-project laravel/laravel $projectName
    composer install
    cd $projectName
    cp .env.example .env
    php artisan key:generate
    npm install -D tailwindcss postcss autoprefixer
    npx tailwindcss init -p
    Set-Content -Path "tailwind.config.js" -Value '/* ** @type {import("tailwindcss").Config} */`nmodule.exports = {`n    content: [`n        "./resources/**/*.blade.php",`n        "./resources/**/*.js",`n        "./resources/**/*.vue",`n    ],`n    theme: {`n        extend: {},`n    },`n    plugins: [],`n};'
    Set-Content -Path "resources/css/app.css" -Value '@tailwind base;`n@tailwind components;`n@tailwind utilities;'
    npm i vite
    code .
}
