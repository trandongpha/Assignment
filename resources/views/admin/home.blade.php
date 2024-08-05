@extends('admin.layouts.master')

@section('content')
   <div class=" container">
    <h2 class="mt-4">Xin chào Admin: {{ Auth::user()->name }}</h2>
   </div>

@endsection
