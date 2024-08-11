@extends('layout.app')
@section('content')
<div id="head" class="flex border-blue-800 border-t-2"></div>
<div id="content" class="mx-auto" style="max-width:500px;">
    
    @livewire('todos.createtodo')
    @livewire('todos.searchtodo')
    @livewire('todos.listtodo',['lazy'=>true,])
    @livewire('modal')
</div>

@endsection