<!doctype html>
{{-- {{ dd($response) }} --}}
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
      <div class="row justify-content-center py-4">
        <h1 class="text-center">KELAS CODING BWA</h1>
      <div class="col-10 ">
    <table class="table">
        <thead>
            <tr>
                <td>Id Kelas</td>
                <td>Nama Kelas</td>
                <td>Level Kelas</td>
                <td>Link Drive Kelas</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($response['courses'] as $item)
            @if ($item['tipe_kelas'] == 'Premium')
            <tr>
                <td>{{ $item['id'] }}</td>
                <td>{{ $item['level_kelas'] }}</td>
                <td>{{ $item['nama_kelas'] }}</td>
                <td><a href="{{ $item['link_assets'] }}">{{ $item['link_assets'] }}</a></td>
            </tr>
            @endif
              
            @endforeach
            
        </tbody>
    </table>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>