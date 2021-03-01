@extends('layout')

@section('content')
    content here

    <ul>
        @foreach ($movies as $movie)

            {{-- @dd($movie) --}}
            <li>{{ $movie->name }}
            <br>
            {{ $movie->type->name }}
        </li>


        @endforeach
    </ul>

    {{ $movies->links() }}


@endsection
