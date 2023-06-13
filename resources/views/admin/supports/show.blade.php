@extends('admin.layout.app')
@section('title', 'Detalhes')
@section('header')
    <h1 class="text-lg text-black-500">Detalhes da dúvida {{$support->id}}</h1>
@endsection
@section('content')
    <ul>
        <li>Assunto: {{$support->subject}}</li>
        <li>Status: {{$support->status}}</li>
        <li>Descrição: {{$support->body}}</li>
    </ul>
    <form action="{{route('supports.destroy', $support->id)}}" method="POST">
        @csrf()
        @method("DELETE")
        <button type="submit" class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Deletar</button>
    </form>
@endsection
