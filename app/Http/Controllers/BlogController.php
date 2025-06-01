<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display the blog homepage.
     */
    public function index()
    {
        $featuredPosts = [
            [
                'id' => 1,
                'title' => '今日の美味しいランチ探訪記',
                'author' => 'グルメ太郎',
                'category' => 'グルメ・料理',
                'image' => 'https://via.placeholder.com/300x200/ff6b6b/ffffff?text=グルメ',
                'excerpt' => '新宿で見つけた絶品ラーメン店をご紹介します。',
                'views' => 1250,
                'created_at' => '2025-06-01 12:30:00'
            ],
            [
                'id' => 2,
                'title' => '子育てママの日常ブログ',
                'author' => 'ママ花子',
                'category' => 'ライフスタイル',
                'image' => 'https://via.placeholder.com/300x200/4ecdc4/ffffff?text=子育て',
                'excerpt' => '2歳の息子との毎日は発見の連続です。',
                'views' => 980,
                'created_at' => '2025-06-01 11:45:00'
            ],
            [
                'id' => 3,
                'title' => '週末カメラマンの写真日記',
                'author' => '写真次郎',
                'category' => 'アート・写真',
                'image' => 'https://via.placeholder.com/300x200/45b7d1/ffffff?text=写真',
                'excerpt' => '桜の季節に撮影した美しい風景をお届けします。',
                'views' => 756,
                'created_at' => '2025-06-01 10:15:00'
            ]
        ];

        $blogRanking = [
            ['title' => '今日の美味しいランチ探訪記', 'author' => 'グルメ太郎', 'views' => 1250],
            ['title' => '子育てママの日常ブログ', 'author' => 'ママ花子', 'views' => 980],
            ['title' => '週末カメラマンの写真日記', 'author' => '写真次郎', 'views' => 756],
            ['title' => 'アニメ・ゲーム最新情報', 'author' => 'オタク三郎', 'views' => 654],
            ['title' => '一人暮らしの節約レシピ', 'author' => '節約四郎', 'views' => 543],
            ['title' => '旅行好きOLの週末旅行記', 'author' => '旅行花子', 'views' => 432],
            ['title' => 'ペットと暮らす毎日', 'author' => 'ペット愛好家', 'views' => 321],
            ['title' => 'DIY・ハンドメイド日記', 'author' => '手作り職人', 'views' => 298],
            ['title' => 'スポーツ観戦記録', 'author' => 'スポーツファン', 'views' => 276],
            ['title' => '読書感想文ブログ', 'author' => '本好き', 'views' => 234]
        ];

        $categories = [
            ['name' => 'グルメ・料理', 'count' => 1250, 'color' => 'bg-red-500'],
            ['name' => 'ライフスタイル', 'count' => 980, 'color' => 'bg-blue-500'],
            ['name' => '旅行・お出かけ', 'count' => 756, 'color' => 'bg-green-500'],
            ['name' => 'エンタメ・芸能', 'count' => 654, 'color' => 'bg-purple-500'],
            ['name' => 'アート・写真', 'count' => 543, 'color' => 'bg-yellow-500'],
            ['name' => 'テクノロジー', 'count' => 432, 'color' => 'bg-indigo-500']
        ];

        $latestNews = [
            ['title' => '新機能「ブログテンプレート」をリリースしました', 'time' => '13:30'],
            ['title' => 'メンテナンス完了のお知らせ', 'time' => '12:15'],
            ['title' => 'ブログコンテスト開催中！豪華賞品をプレゼント', 'time' => '11:45'],
            ['title' => 'スマートフォンアプリがアップデートされました', 'time' => '10:30'],
            ['title' => 'セキュリティ強化に関するお知らせ', 'time' => '09:00']
        ];

        return view('blog.index', compact('featuredPosts', 'blogRanking', 'categories', 'latestNews'));
    }
}
