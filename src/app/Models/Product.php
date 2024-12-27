<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    /**
     * モデルに関連付けるテーブル
     */
    protected $table = 'products';
    /**
     * テーブルに関連付ける主キー
     */
    protected $primaryKey = 'id';

    public function products()
    {
        /**
         * // productsテーブルの全てのレコードを取得します
         * $任意の変数名 = モデル名::all();
         * //モデル名は命名のルールとして頭文字が大文字になっています
         */
        $products = Product::all();

        return view('products')->with('products', $products);
        /**
         * withメソッドはビューへ変数の情報を個別で渡すことができます
         * 開くviewに対して -> withメソッドで変数情報を渡します。
         * withメソッドの引数は次のようになります
         * ('viewファイルで使いたい変数の名前','$テーブル情報を代入した変数')
         */
    }
}
