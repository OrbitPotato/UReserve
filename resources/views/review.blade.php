@extends('layouts.main')

@section('content')

 @foreach ($data as $key => $value)

    <span>{{ $value }}</span>
     
 @endforeach

@endsection