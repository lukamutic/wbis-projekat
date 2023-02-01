@extends('layouts.app')

@section('content')
    @if (Route::has('login'))
        @auth
            <section class="create-new-post">
                <div class="container">
                    <h1>Kreiraj novi post</h1>


                </div>
            </section>
        @else
            <h1>aj se prvo uloguj</h1>
        @endauth
    @endif
@endsection
