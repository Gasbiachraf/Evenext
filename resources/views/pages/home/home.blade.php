@extends('layouts.index')
@section('content')
    @include('pages.home.components.heroSection')
    <div class="max-[430px]:p-4 lg:p-10  flex gap-4 flex-wrap">
        @foreach ($events as $event)
            @include('pages.home.components.card')
        @endforeach
    </div>
    @include('pages.home.components.motivation')
    @include('pages.home.components.statistic')
    @include('pages.home.components.sponsor')
@endsection
