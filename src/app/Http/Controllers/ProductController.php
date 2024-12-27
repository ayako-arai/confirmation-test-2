<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    //
    /**
     * コンストラクタ ↓下記設定するとlocalhostアクセス時にエラーとなる。
     * public function __construct()
     * {
     * $this->product = new Product();
     * }
     * 
     */
    
     public function put(Request $request) {
        $image = fruits-img
        Storage::put('banana.png','watermelon.png','kiwi.png','grapes.png','melon.png','muscat.png','orange.png','peach.png','pineaple.png','strawberry.png', $image);
    }

    public function index()
    {
        return view('products');
    }
    /**
     * 商品の検索
     */
    public function show(Request $request)
    {// Request　を　＄requestに代入する

        /* テーブルから全てのレコードを取得する */
        $products = Product::query();

        /* キーワードから検索処理 */
        $keyword = $request->input('keyword');
        if(!empty($keyword)) {//$keyword　が空ではない場合、検索処理を実行します
            $products->where('name', 'LIKE', "%{$keyword}%")
            ->orwhereHas('products', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', "%{$keyword}%");
            })->get();
        
        /* where句の引数に条件式を指定することで合致するレコードを取得することができます。*/
        /**
         * $対象の変数->where('対象のカラム名', 'like', "%{$キーワードを代入した変数}%")
         * ->orwhereHas('対象のモデル名', function ($query) use ($キーワードを代入した変数){
         * $query->where('対象のカラム名', 'LIKE', "%{$キーワードを代入した変数}%");
         * })->get();
         * イメージとしてデータベースの全レコードが代入された$対象の変数から
         * whereメソッドとorwhereHasメソッドでキーワードに該当するレコードのみを選択し
         * 最終的にgetメソッドでレコードを取得し上書きします。
         */
        }

        $posts = $products->paginate(6);

        return view('product_search', ['posts' => $posts]);



    }
    /**
     * 商品の詳細
     */
    public function link($id)
    {
        $product = Product::find($id);
        return view('{productId}', compact('product'));
    }
    /**
     * 商品名の登録画面の表示
     */
    public function create(Request $request)
    {
        return view('product_register');
    }
    /**
     *商品の登録処理
     */
    public function store(Request $request)
    {
        
    }


}
