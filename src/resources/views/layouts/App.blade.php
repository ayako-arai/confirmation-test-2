<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mogitate</title>
    <link rel="stylesheet" href="{{ asset('css/common.css')}}">
　　 @yield('css')
</head>

<body>
    <header>
       <h2 class="header-title">mogitate</h2>
    </header>

    <div class="content">
        @yield('content')
    </div>
</body>
</html>