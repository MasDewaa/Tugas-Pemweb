@extends('Layout.Navbar')
@section('content')
    <div class="bg-cover bg-center " style="background-image: url({{ asset('assets/images/bg.png') }})">
        <section class="pb-16 w-full flex flex-row justify-center pt-24 ">
            <div class="flex flex-col p-10 w-1/2 max-sm:hidden">
                <h1 class="text-3xl font-bold">Selamat datang di <br>Boikot Sampah</h1>
                <p class="text-lg mt-2">Masuk dan dapatkan Kemudahan Dalam Pemanfaatan Sampah</p>
                <img class="h-auto w-full" src="{{ asset('assets/images/logo-2.png') }}">
            </div>
            <div class="flex flex-col md:w-1/2 p-10 my-16 md:my-0">
                <form class="space-y-2 md:space-y-8 flex flex-col p-12 shadow-xl rounded-xl bg-white" method="POST"
                    action="{{ route('login_action') }}">
                    @csrf
                    <div class="flex flex-col">
                        <label for="name" class="text-base md:text-2xl md:mb-4 text-left font-bold">Email</label>
                        <div class="relative">
                            <input type="text" id="email" name="email"
                                class="border-2 border-gray-400 rounded-md h-8 md:h-14 w-full p-4" placeholder="Example@example.com"
                                required>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <label for="password" class="text-base md:text-2xl md:mb-4 text-left font-bold">Password</label>
                        <div class="relative">
                            <input type="password" id="password" name="password"
                                class="border-2 border-gray-400 rounded-md h-8 md:h-14 w-full p-4" placeholder="Password"
                                autocomplete="off" required>
                        </div>
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <small><a href="{{ route('password.request') }}">Lupa password</a></small>
                    </div>
                    <button type="submit"
                        class="bg-green-600 text-white h-8 md:h-14 text-xl font-sans font-semibold rounded-lg">Masuk</button>
                </form>
            </div>
        </section>
    </div>
@endsection