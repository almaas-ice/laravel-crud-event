<!DOCTYPE html>
<html>
<head>
 <title>CRUD Event</title>
 <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class= "container mx-auto px-4 py-8">
    <div class="border border-gray-300 p-6 rounded-lg">

    <h2 class="text-2xl font-semibold mt-5 mb-2">Membuat CRUD Event Kelompok 6</h2>
    <h3 class="text-lg font-normal mb-2">Update Event</h3>
        <div class="space-y-4">
    {!! Form::model($event, ['url' => ['events', $event->id], 'method' => 'put']) !!}
        <div class="form-group @if($errors->first('name')) has-error @endif">
            {{ Form::label('name',null, 'Event', ['class' => 'control-label block font-medium text-gray-700 ml-7']) }}
            {{ Form::text('name', null, array_merge(['class' => 'form-control space-y-4 form-input mt-1 ml-6 block w-64 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50', 'placeholder' => 'Nama Event'])) }}
            <small class="text-danger">{{ $errors->first('name') }} </small>
        </div>
        <div class="form-group @if($errors->first('date')) has-error @endif">
            {{ Form::label('date', 'Date', ['class' => 'control-label block font-medium text-gray-700 ml-7']) }}
            {{ Form::date('date', null, array_merge(['class' => 'form-control form-input mt-1 ml-6 block w-64 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50', 'placeholder' => 'Tanggal Event'])) }}
            <small class="text-danger">{{ $errors->first('date') }} </small>
        </div>
        <div class="form-group @if($errors->first('time')) has-error @endif">
            {{ Form::label('time', 'Time', ['class' => 'control-label control-label block font-medium text-gray-700 ml-7']) }}
            {{ Form::time('time', null, array_merge(['class' => 'form-control form-input mt-1 ml-6 block w-64 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50', 'placeholder' => 'Waktu Event'])) }}
            <small class="text-danger">{{ $errors->first('name') }} </small>
        </div>
        <div class="form-group @if($errors->first('description')) has-error @endif">
            {{ Form::label('description', 'Description', ['class' => 'control-label control-label block font-medium text-gray-700 ml-7']) }}
            {{ Form::textarea('description', null, array_merge(['class' => 'form-control form-input mt-1 ml-6 block w-64 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50', 'placeholder' => 'Deskripsi Event'])) }}
            <small class="text-danger">{{ $errors->first('description') }} </small>
        </div>
        <button type="submit" class="btn btn-danger bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 ml-6 rounded">Update</button>
        <a href="/events" class ="block mt-4 text-blue-500 ml-6 hover:text-blue-700">Kembali</a>
    {!! Form::close() !!}
        </div>
    </div>
</div>
</body>
</html>
