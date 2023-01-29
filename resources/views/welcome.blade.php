{{--@include ('layouts.header')--}}
@extends('layouts.app')

@section('content')
    @if (Route::has('login'))
        @auth
            <div class="logged-in">

                <div class="container">
                    <h2>Najnovije iz sveta fotografije</h2>
                    <section class="posts">
                        <article class="post my-4">
                            <a href="#">
                                <img class="w-50 mb-3"
                                     src="https://images.ctfassets.net/hrltx12pl8hq/5596z2BCR9KmT1KeRBrOQa/4070fd4e2f1a13f71c2c46afeb18e41c/shutterstock_451077043-hero1.jpg"
                                     alt="">
                                <h3>Lorem ipsum dolor sit amet</h3>
                            </a>

                            <p class="post-excerpt">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                                molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                                numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                                optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                                obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
                                nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
                                tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
                                quia. Quo neque error repudiandae fuga?
                            </p>

                        </article> {{--  .post END  --}}
                    </section> {{--  .posts END  --}}
                </div> {{--  .container END  --}}

            </div>
        @else
            <section class="logged-out py-5">
                <div class="container">
                    <h1>Dobrodošli na FotoNews portal!</h1>
                    <h2>Molimo vas da se prijavite kako biste mogli da pristupite sadržaju portala.</h2>

                    <div class="login-btn">
                        <a href="/login">Login</a>
                    </div>
                    <div class="register-btn">
                        <a href="/login">Register</a>
                    </div>
                </div> {{--  .container END  --}}
            </section> {{--  .logged-out END  --}}

        @endauth

    @endif

@endsection

{{--@include ('layouts.footer')--}}

