@extends('layouts.app')

@section('content')
    @if (Route::has('login'))
        @auth
            <section class="single-post">
                <div class="container">
                    <h1>Lorem ipsum - novi post</h1>


                </div>
            </section>
        @else
            <h1>aj se prvo uloguj</h1>
        @endauth
    @endif
@endsection
