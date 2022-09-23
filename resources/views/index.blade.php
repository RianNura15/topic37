<!DOCTYPE html>
<html>
<head>
	<title>Quran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <br>
    <h1 style="text-align: center;">Surah - Surah Al-Quran</h1>
    <br>
    <div class="container">
    <table class="table table-bordered">
    <thead>
    <tr>
      <th scope="col">Nomer</th>
      <th scope="col">Arti</th>
      <th scope="col">Asma</th>
      <th scope="col">Audio</th>
      <th scope="col">Ayat</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Nama</th>
      <th scope="col">Nomor</th>
      <th scope="col">Rukuk</th>
      <th scope="col">Type</th>
      <th scope="col">Urut</th>
    </tr>
    </thead>
    <tbody>
        @foreach($data as $surah)
        <tr>
        <th scope="row">1</th>
        <td>{{ $surah->data->arti }}</td>
        <td>Otto</td>
        <td>@mdo</td>
        </tr>
        @endforeach
    </tbody>
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>