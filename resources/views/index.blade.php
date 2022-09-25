<!DOCTYPE html>
<html>
<head>
	<title>Quran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        table {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container" style="text-align: center;">
    <br>
    <h1 style="text-align: center;">Surah - Surah Al-Quran</h1>
    <br>
    <table class="table table-bordered">
    <thead>
    <tr>
      <th scope="col">Nomer</th>
      <th scope="col">Arti</th>
      <th scope="col">Asma</th>
      <th scope="col">Ayat</th>
      <th scope="col">Nama</th>
      <th scope="col">Type</th>
      <th scope="col">Urut</th>
      <th scope="col">Audio</th>
      <th scope="col">Nomor</th>
      <th scope="col">Rukuk</th>
      <th scope="col">Keterangan</th>
    </tr>
    </thead>
    <tbody>
        @foreach($data['data'] as $surah)
        <tr>
        <td>{{$loop->iteration}}<td>
        <td>{{ $surah['arti'] }}</td>
        <td>{{ $surah['asma'] }}</td>
        <td>{{ $surah['ayat'] }}</td>
        <td>{{ $surah['nama'] }}</td>
        <td>{{ $surah['type'] }}</td>
        <td>{{ $surah['urut'] }}</td>
        <td>{{ $surah['audio'] }}</td>
        <td>{{ $surah['nomor'] }}</td>
        <td>{{ $surah['rukuk'] }}</td>
        <td>{{ $surah['keterangan'] }}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>