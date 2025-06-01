<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>livedoor Blog - 日本最大級のブログサービス</title>
    <meta name="description" content="livedoor Blog（ライブドアブログ）は、無料で簡単に始められる日本最大級のブログサービスです。豊富なテンプレートと充実した機能で、あなたの思いを自由に表現できます。">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        .livedoor-red { background-color: #e60012; }
        .livedoor-red-text { color: #e60012; }
        .livedoor-red-border { border-color: #e60012; }
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
</head>
<body class="bg-gray-50 font-sans">
    <header class="bg-white border-b-4 livedoor-red-border">
        <div class="max-w-6xl mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <a href="/" class="livedoor-red text-white px-4 py-2 text-2xl font-bold rounded">
                        livedoor
                    </a>
                </div>
                
                <nav class="hidden md:flex space-x-8">
                    <a href="https://news.livedoor.com/" class="text-gray-700 hover:text-red-600 font-medium">ニュース</a>
                    <a href="/blog" class="text-gray-700 hover:text-red-600 font-medium">ブログ</a>
                    <a href="/blog/create" class="text-gray-700 hover:text-red-600 font-medium">ブログを書く</a>
                    <a href="/help" class="text-gray-700 hover:text-red-600 font-medium">ヘルプ</a>
                </nav>
                
                <div class="flex items-center space-x-4 text-sm">
                    <span class="text-gray-600">ゲストさん</span>
                    <a href="/register" class="text-gray-600 hover:text-red-600">ユーザー登録</a>
                    <a href="/login" class="text-gray-600 hover:text-red-600">ログイン</a>
                </div>
            </div>
        </div>
    </header>

    <div class="max-w-6xl mx-auto px-4 py-6">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            
            <div class="lg:col-span-2 space-y-6">
                
                <div class="livedoor-red text-white rounded-lg p-8 text-center">
                    <h1 class="text-3xl font-bold mb-3">livedoor Blog</h1>
                    <p class="text-lg mb-6">日本最大級のブログサービスで、あなたの思いを自由に表現しよう</p>
                    <a href="/register" class="bg-white text-red-600 px-8 py-3 rounded-full font-bold text-lg hover:bg-gray-100 transition-colors">
                        無料でブログを始める
                    </a>
                </div>

                <div class="bg-white rounded-lg shadow-sm border">
                    <div class="p-6 border-b">
                        <h2 class="text-xl font-bold text-gray-800">注目の記事</h2>
                    </div>
                    <div class="p-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach($featuredPosts as $post)
                            <div class="border rounded-lg overflow-hidden hover:shadow-md transition-shadow">
                                <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="w-full h-32 object-cover">
                                <div class="p-4">
                                    <h3 class="font-medium text-sm mb-2 line-clamp-2">{{ $post['title'] }}</h3>
                                    <p class="text-xs text-gray-600 mb-2">{{ $post['excerpt'] }}</p>
                                    <div class="flex justify-between items-center text-xs text-gray-500">
                                        <span>by {{ $post['author'] }}</span>
                                        <span>{{ $post['views'] }} views</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-sm border">
                    <div class="p-6 border-b">
                        <h2 class="text-xl font-bold text-gray-800">人気カテゴリ</h2>
                    </div>
                    <div class="p-6">
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                            @foreach($categories as $category)
                            <div class="border rounded-lg p-4 text-center hover:shadow-md transition-shadow cursor-pointer">
                                <div class="w-12 h-12 {{ $category['color'] }} rounded-full mx-auto mb-3"></div>
                                <h3 class="font-medium text-sm mb-1">{{ $category['name'] }}</h3>
                                <p class="text-xs text-gray-600">{{ $category['count'] }} 記事</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg border">
                    <div class="p-6 border-b bg-white rounded-t-lg">
                        <h2 class="text-xl font-bold text-gray-800">人気ブログランキング</h2>
                    </div>
                    <div class="p-6">
                        <ol class="space-y-3">
                            @foreach($blogRanking as $index => $blog)
                            <li class="flex items-center py-2 border-b border-gray-200 last:border-b-0">
                                <span class="livedoor-red text-white w-6 h-6 rounded-full flex items-center justify-center text-xs font-bold mr-4">
                                    {{ $index + 1 }}
                                </span>
                                <div class="flex-1">
                                    <a href="#" class="text-gray-800 hover:text-red-600 text-sm font-medium">{{ $blog['title'] }}</a>
                                    <div class="text-xs text-gray-500 mt-1">by {{ $blog['author'] }} • {{ $blog['views'] }} views</div>
                                </div>
                            </li>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>

            <div class="space-y-6">
                
                <div class="bg-white rounded-lg shadow-sm border">
                    <div class="livedoor-red text-white p-4 rounded-t-lg">
                        <h3 class="font-bold">ログイン</h3>
                    </div>
                    <div class="p-4">
                        <form class="space-y-3" id="loginForm">
                            <input type="email" placeholder="メールアドレス" class="w-full px-3 py-2 border border-gray-300 rounded text-sm focus:outline-none focus:border-red-500">
                            <input type="password" placeholder="パスワード" class="w-full px-3 py-2 border border-gray-300 rounded text-sm focus:outline-none focus:border-red-500">
                            <button type="submit" class="w-full livedoor-red text-white py-2 rounded font-bold text-sm hover:bg-red-700 transition-colors">
                                ログイン
                            </button>
                        </form>
                        <div class="text-center mt-3">
                            <a href="/register" class="text-red-600 text-xs hover:underline">新規ユーザー登録はこちら</a>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-sm border">
                    <div class="livedoor-red text-white p-4 rounded-t-lg">
                        <h3 class="font-bold">最新ニュース</h3>
                    </div>
                    <div class="p-4">
                        <ul class="space-y-3">
                            @foreach($latestNews as $news)
                            <li class="border-b border-gray-200 pb-2 last:border-b-0 last:pb-0">
                                <div class="text-xs text-gray-500 mb-1">{{ $news['time'] }}</div>
                                <a href="#" class="text-sm text-gray-800 hover:text-red-600 line-clamp-2">{{ $news['title'] }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-sm border">
                    <div class="livedoor-red text-white p-4 rounded-t-lg">
                        <h3 class="font-bold">ブログの特徴</h3>
                    </div>
                    <div class="p-4">
                        <ul class="space-y-2 text-sm">
                            <li class="flex items-center">
                                <span class="text-green-500 mr-2">✓</span>
                                無料で簡単に始められる
                            </li>
                            <li class="flex items-center">
                                <span class="text-green-500 mr-2">✓</span>
                                豊富なテンプレート
                            </li>
                            <li class="flex items-center">
                                <span class="text-green-500 mr-2">✓</span>
                                スマートフォン対応
                            </li>
                            <li class="flex items-center">
                                <span class="text-green-500 mr-2">✓</span>
                                SNS連携機能
                            </li>
                            <li class="flex items-center">
                                <span class="text-green-500 mr-2">✓</span>
                                アクセス解析
                            </li>
                            <li class="flex items-center">
                                <span class="text-green-500 mr-2">✓</span>
                                独自ドメイン対応
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-gray-800 text-gray-300 py-8 mt-12">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-center space-x-8 mb-6 text-sm">
                <a href="https://livedoor.co.jp/" class="hover:text-white">運営会社</a>
                <a href="/terms" class="hover:text-white">利用規約</a>
                <a href="/privacy" class="hover:text-white">プライバシーポリシー</a>
                <a href="/help" class="hover:text-white">ヘルプ</a>
                <a href="/contact" class="hover:text-white">お問い合わせ</a>
            </div>
            <p class="text-center text-xs text-gray-500">© livedoor</p>
        </div>
    </footer>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('ログイン機能はデモ版です');
        });

        document.querySelector('.bg-white.text-red-600').addEventListener('click', function(e) {
            e.preventDefault();
            alert('ブログ登録機能はデモ版です');
        });
    </script>
</body>
</html>
