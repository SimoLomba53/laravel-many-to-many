

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite('resources/js/app.js')
</head>
<body>
    @extends('layouts.app')


@section('content')
<section class="conteiner p-5">
   <form action="{{ route('admin.projs.store') }}" method="POST">
    @csrf
<table class="table">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}"  />
   

    <label for="Description" class="form-label">Description</label>
    <input type="text" class="form-control @error('description') is-invalid @enderror" id="Description" name="Description" value="{{ old('description') }}" />
    

    <label for="Image" class="form-label">Image</label>
    <input type="text" class="form-control @error('image') is-invalid @enderror" id="Image" name="Image" value="{{ old('image') }}"  />
    

    <button type="submit" class="btn btn-primary mt-3 text-center">Salva</button>

    @if ($errors->any())
  <div class="alert alert-danger mt-5">
    <h4>Correggi i seguenti errori per proseguire: </h4>
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
</table>
</form>
</section>
@endsection
</body>
</html>

