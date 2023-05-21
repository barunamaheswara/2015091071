<!DOCTYPE html>
<html>
<head>
    <title>Pemesanan Tiket Bioskop</title>
</head>
<body>
    <h1>Pemesanan Tiket Bioskop</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pemesanan.store') }}" method="POST">
        @csrf
        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="jumlah_tiket">Jumlah Tiket:</label>
            <input type="number" id="jumlah_tiket" name="jumlah_tiket" min="1" required>
        </div>
        <button type="submit">Pesan Tiket</button>
    </form>
</body>
</html>
