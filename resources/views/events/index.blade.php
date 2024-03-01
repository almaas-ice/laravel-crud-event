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

    <a href="/events/create" class="bg-green-500 hover:bg-green-700 text-white font-semibold py-2 px-2 rounded border border-gray-300 block w-max mt-5"> Tambah Event Baru</a>
    <br>

    <table class="w-half border-collapse border border-gray-300">
        <tr>
            <th class="border border-gray-300 px-4 py-2">Event</th>
            <th class="border border-gray-300 px-2 py-2">Date</th>
            <th class="border border-gray-300 px-4 py-2">Time</th>
            <th class="border border-gray-300 px-4 py-2 w-1/6">Opsi</th>
        </tr>

        @foreach($events as $event)
        <tr>
            <td class="border border-gray-300 px-4 py-2">{{ $event->name }}</td>
            <td class="border border-gray-300 px-4 py-2">{{ $event->date }}</td>
            <td class="border border-gray-300 px-4 py-2">{{ $event->time }}</td>
            <td class="border border-gray-300 px-4 py-2">
                <a href="/events/detail/{{ $event->id }}" class="bg-green-400 hover:bg-blue-700 text-white font-semibold py-1.5 px-3 rounded border border-gray-300">Detail</a>
                <a href="/events/edit/{{ $event->id }}" class="bg-blue-400 hover:bg-blue-700 text-white font-semibold py-1.5 px-3 rounded border border-gray-300">Edit</a>
                <a href="/events/delete/{{ $event->id }}" class="bg-red-500 hover:bg-red-700 text-white font-semibold py-1.5 px-3 rounded border border-gray-300">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>

 </div>
</body>
</html>