@extends('layouts.index')
@section('content')
    <div class="p-10 flex gap-4 flex-wrap">
        @foreach ($events as $event)
            @include('pages.home.components.card')
        @endforeach


    </div>
@endsection
