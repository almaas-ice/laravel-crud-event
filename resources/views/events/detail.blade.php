<!DOCTYPE html>
<html>
<head>
 <title>CRUD Event</title>
 <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

 <div class="border border-gray-300 mx-3 p-4 rounded-lg">

    <h2 class="text-2xl font-semibold mt-5 mb-2">Membuat CRUD Event Kelompok 6</h2>
    <h3 class="text-lg font-normal mb-2">Data Event</h3>

    <a href="/events" class="bg-green-500 hover:bg-green-700 text-white font-semibold py-2 px-2 rounded border border-gray-300 block w-max mt-5"> Kembali</a>
    <br>

    <h5 class="font-semibold">Nama Event</h5>
    <p>{{$event->name}}</p>
    <br>

    <h5 class="font-semibold">Tanggal</h5>
    <p>{{$event->date}}</p>
    <br>

    <h5 class="font-semibold">Waktu</h5>
    <p>{{$event->time}}</p>
    <br>

    <h5 class="font-semibold">Deskripsi Event</h5>
    <p>{{$event->description}}</p>

 </div>
</body>
</html>