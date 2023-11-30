<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Page</title>

    <script defer src="{{ mix('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body class="antialiased">
    <div id="app">
        <div>
            <h1>{{ $product['name'] }}</h1>

            <p>{{ $product['description'] }}</p>

            <p>Price: ${{ $product['price']['discounted'] }}</p>

            <p>Discount: {{ $product['discount']['amount'] }}% off</p>
            <a href="" class="btn">sample</a>
            <h2>Images</h2>
            <ul>
                @foreach ($product['images'] as $image)
                    <li><img src="{{ $image }}" alt="Product Image"></li>
                @endforeach
            </ul>
        </div>
        <hr>

    </div>
</body>

</html>
