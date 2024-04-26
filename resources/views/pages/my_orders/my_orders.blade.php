@extends('layouts.index')
@section('content')

<h1 class="pl-20 pt-10">my orders :</h1>
    <div class="flex justify-center w-full  mt-10">
        <div class="w-[70%]  pt-2  shadow-xl border-2 rounded-xl max-h-[70vh] overflow-auto p-2">
            <table class="w-full table-fixed text-center  " >
                <thead class="border-b-2  ">
                    <th>Order</th>
                    <th>event_title</th>
                    <th>ticket_price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>payed</th>
                </thead>
                <tbody >
                    @foreach ($tickets as $ticket)
                    @if ($ticket->user->id == Auth::user()->id)
                    <tr class=" border-t-2">
                        <td>{{ $numberEvent++ }}</td>
                        <td>{{ $ticket->event->title }}</td>
                        <td>{{ $ticket->price }} MAD</td>
                        <td>{{ $ticket->quantity }}</td>
                        <td>{{ $ticket->price*$ticket->quantity }} MAD</td>
                        <td><div class="flex justify-center "><p class="m-0 my-1 {{ $ticket->payedBolean ?  "bg-green-600"  : "bg-red-600" }} w-[50%] py-1 text-white rounded-lg">{{ $ticket->payedBolean ?  "Payed"  : "No Payed"}}</p></div></td>
                    </tr>
                    @endif

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    {{-- @foreach ($tickets as $ticket)
        <h1>{{ $ticket->user->name }} event : {{ $ticket->event->title }} ticket payed :{{ $ticket->payedBolean ? "payed" :"no payed" }}</h1>
        <h1></h1>
    @endforeach --}}
@endsection