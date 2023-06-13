@extends('admin.layout.app')
@section('title', 'Nova dúvida')
@section('header')
    <h1 class="text-lg text-black-500">Nova dúvida</h1>
@endsection
@section('content')
    <x-alert/>
    <form action="{{route('supports.store')}}" method="POST">
        @include('admin.supports.partials.form')
    </form>
@endsection