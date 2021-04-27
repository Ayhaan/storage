@extends('layouts.index')

@section('content')
    <h1>file</h1>
    <form  action="{{ route('file.store') }}" method="post" enctype="multipart/form-data" class="d-flex flex-column align-items-center my-5">
        @csrf
        <div class="form-group">
          <label for="img">Votre Img :</label>
          <input type="file" class="form-control-file" id="img" name="img">
        </div>

        <button type="submit" class="btn btn-secondary text-left">Envoyer</button>
      </form>



      <h3>LISTE file (img) : </h3>
      @foreach ($files as $file)
          {{-- <img width="25%" src="{{ asset('img/' . $file->src) }}" alt=""> --}}
          <img width="25%" src="{{ asset('storage/img/' . $file->src) }}" alt="">
          <p> name src : {{ $file->src }}</p>
        <hr>
      @endforeach
@endsection