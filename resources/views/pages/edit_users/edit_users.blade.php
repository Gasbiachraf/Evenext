@extends('layouts.index')

@section('content')




        <div class="flex justify-center w-full mt-10">
            <div class="w-[70%]    p-2 shadow-xl border-2 rounded-xl max-h-[70vh] overflow-auto ">
                <table class="w-full table-fixed text-center  ">
                    <thead class="border-b-2  ">
                        <th>#</th>
                        <th>user name</th>
                        <th>email</th>
                        <th>role</th>
                        <th>update</th>
                        <th>delete</th>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr class=" border-t-2">
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td> {{-- getRoleNames()[0] --}}
                                <td>@include('pages.edit_users.components.update_user')</td>
                                <td> @include('pages.edit_users.components.delete')</td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    @endsection
