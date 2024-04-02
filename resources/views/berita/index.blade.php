<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  

    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col md-8 mx-auto">
                <h2>Data Berita</h2>
                <table class="table">
                    <tbody>
                        <tr>
                            <th>#</th>
                            <th>judul</th>
                            <th>slug</th>
                            <th>action</th>
                        </tr>
                        @foreach ($berita as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->judul }}</td>
                            <td>{{ $data->judul }}</td>
                            <td>
                                <form action="{{ route('berita.destroy', $data->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                </table>
                <a href="{{ route('berita.create') }}" class="btn btn-primary">Tambah berita</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>