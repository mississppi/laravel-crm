import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        host: '0.0.0.0', // コンテナ内でのアクセスを許可
        port: 5173, // Viteのデフォルトポート
        strictPort: true, // このポートで確実に起動
        hmr: {
            host: 'localhost', // ホットモジュールリロード用のホスト名
        },
        watch: {
            usePolling: true, // ファイル変更をポーリングで監視
        },
    },
});
