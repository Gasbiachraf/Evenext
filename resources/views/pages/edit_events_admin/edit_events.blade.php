@extends('layouts.admin_organizer')
@section('content2')

<div class="flex justify-center w-full   mb-20">
    <div class="w-[90%]  pt-2  shadow-xl border-2 rounded-xl max-h-[70vh] overflow-auto p-2">
        <table class="w-full table-fixed text-center  " >
            <thead class="border-b-2  ">
                <th>#</th>
                <th>user_name</th>
                <th>event_id</th>
                <th>Title</th>
                <th>Location</th>
                <th>Price</th>
                <th class="w-[20%]">Date</th>
                <th>Update</th>
                <th>Delete</th>
            </thead>
            <tbody >
                @foreach ($events as $event)
                        <tr class=" border-t-2">
                            <td>{{ $numberEvent++ }}</td>
                            <td>{{ $event->user->name }}</td>
                            <td>{{ $event->id }}</td>
                            <td>{{ $event->title }}</td>
                            <td>{{ $event->location }}</td>
                            <td>{{ $event->price }} MAD</td>
                            <td>{{ $event->date_start }}</td>
                            <td>@include('pages.create_events.components.update_modal')</td>
                            <td>@include('pages.create_events.components.delete')</td>
                        </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    
@endsection