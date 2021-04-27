@extends('layouts.index')

@section('content')
    <h1>Page home</h1>

    <a href="{{ route('file.index') }}" class="btn btn-primary">Go add File</a>
@endsection