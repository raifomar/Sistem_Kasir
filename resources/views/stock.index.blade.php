<!DOCTYPE html>
<html lang="en">
<head>
    <title>Stok Makanan</title>
</head>
<body>
    <h1>Stok Makanan</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Stok Saat Ini</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->stock }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>