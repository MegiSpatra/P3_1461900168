<!DOCTYPE html>
<html>
<head>
<title>1461900168</title>
</head>
<body>
<p>Cari :</p>
<form action="/pasien/cari" method="GET">
<input type="text" name="lihat" placeholder="Cari pasien .." value="{{ old('cari') }}">
<input type="submit" value="CARI">
<h3>Data User</h3>
</form>
<br>
<form action="/pasien/kamar" method="GET">
<input type="text" name="lihat" placeholder="Cari Kamar" value="{{ old('cari') }}">
<input type="submit" value="CARI">
</form>

<a href="/pasien/tambah"> + User Baru </a>
<br/>
<br/>
<table border="1">
<tr>
<th>Id</th>
<th>Nama</th>
<th>Alamat</th>
</tr>
@foreach($pasien as $p)
<tr>
<td>{{ $p->id }}</td>
<td>{{ $p->nama }}</td>
<td>{{ $p->alamat }}</td>
<td>
<a href="/pasien/edit/{{ $p->id }}">Edit</a>
|
<a href="/pasien/hapus/{{ $p->id }}">Hapus</a>
</td>
</tr>
@endforeach
</table>
</body>
</html>
