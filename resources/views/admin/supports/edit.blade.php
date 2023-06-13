@extends('admin.layout.app')
@section('title', 'Editar dúvida')
@section('header')
    <h1 class="text-lg text-black-500">Editar dúvida {{$support->id}}</h1>
@endsection
@section('content')
    <x-alert/>
    <form action="{{route('supports.update', $support->id)}}" method="POST">
        @method("PUT")
        @include('admin.supports.partials.form',[
            'support' => $support
        ])
    </form>
@endsection