@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/products.css')}}">
@endsection

@section('content')
<div class="container">
    <div class="product">
        <div class="product-list--top">
            <h1 class="product-list__label">商品一覧</h1>
            <button class="product-list__add">＋商品を追加</button>
        </div>
        
        <!-- 検索機能ここから　-->
        <div class="product-search">
            <form action="{{ route('search.show') }}" method="GET">
                @csrf
            <input type="search" name="keyword" placeholder="商品名で検索">
            <input type="submit" name="submit" value="検索">
            </form>
            <p class="product-search__order">価格順で表示</p>
            </section>

        </div>
        
        <label for="product-search"></label>
        
        <div class="product-list__items">
            <div class="product-list__item">
                <ul>
                    <li>
                        <a href="/{productId}"><img src="https://www.figma.com/file/B9Bm4lnEyi7GdUHJg2G4ZU/image/8a8f8db0f468e545955952fbf25cbda934e31e40" alt=""></a>
                        <div class="item-body">
                            <h5>キウイ</h5>
                            <p>¥800</p>
                        </div><!-- end product-list__item -->
                    </li>

                    <li>
                        <a href="/{productId}"><img src="https://www.figma.com/file/B9Bm4lnEyi7GdUHJg2G4ZU/image/afde116182301c702fd88387a5cdf3eb5fdf1650" alt=""></a>
                        <div class="item-body">
                            <h5>ストロベリー</h5>
                            <p>¥1200</p>
                        </div>
                    </li>

                    <li>
                        <a href="/{productId}"><img src="https://www.figma.com/file/B9Bm4lnEyi7GdUHJg2G4ZU/image/c491673a1b566ed1054990915a0d1db0d0c7a9e6" alt=""></a>
                        <div class="item-body">
                            <h5>オレンジ</h5>
                            <p>¥850</p>
                        </div>
                    </li>

                    <li>
                        <a href="/{productId}"><img src="https://www.figma.com/file/B9Bm4lnEyi7GdUHJg2G4ZU/image/75f9da803800e7030c39a31741d42f5e99ad638d" alt=""></a>
                        <div class="item-body">
                            <h5>スイカ</h5>
                            <p>¥700</p>
                        </div>
                    </li>

                    <li>
                        <a href="/{productId}"><img src="https://www.figma.com/file/B9Bm4lnEyi7GdUHJg2G4ZU/image/fe95745f94fa1b1eb14b91d0578bf265085f9f01" alt=""></a>
                        <div class="item-body">
                            <h5>ピーチ</h5>
                            <p>¥1000</p>
                        </div>
                    </li>

                    <li>
                        <a href="/{productId}"><img src="https://www.figma.com/file/B9Bm4lnEyi7GdUHJg2G4ZU/image/ab6288f083a6a4ccd62a60da3fdb4a3973191c29" alt=""></a>
                        <div class="item-body">
                            <h5>シャインマスカット</h5>
                            <p>¥1400</p>
                        </div>
                    </li>

                    <li>
                        <a href="/{productId}"><img src="https://file+.vscode-resource.vscode-cdn.net/Users/ayako/Downloads/fruits-img/pineapple.png?version%3D1734928840912
                        " alt=""></a>
                        <div class="item-body">
                            <h5>パイナップル</h5>
                            <p>¥800</p>
                        </div>
                    </li>

                    <li>
                        <a href="/{productId}"><img src="https://file+.vscode-resource.vscode-cdn.net/Users/ayako/Downloads/fruits-img/grapes.png?version%3D1734928864493
                        " alt=""></a>
                        <div class="item-body">
                            <h5>ブドウ</h5>
                            <p>¥1100</p>
                        </div>
                    </li>

                    <li>
                        <a href="/{productId}"><img src="file:///Users/ayako/Downloads/fruits-img/banana.png
                        " alt=""></a>
                        <div class="item-body">
                            <h5>バナナ</h5>
                            <p>¥600</p>
                        </div>
                    </li>

                    <li>
                        <a href="/{productId}"><img src="https://file+.vscode-resource.vscode-cdn.net/Users/ayako/Downloads/fruits-img/melon.png?version%3D1734928902437
                        " alt=""></a>
                        <div class="item-body">
                            <h5>メロン</h5>
                            <p>¥900</p>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</div>
    