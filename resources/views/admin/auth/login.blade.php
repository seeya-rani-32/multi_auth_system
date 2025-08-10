@extends('layouts.app')

@section('content')
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">

    <h3>Admin Login</h3>
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Sign In</h2>
    </div>

    <div>
        @if($errors->any())
        <div class="mb-4 text-sm/6 text-red-600">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if(session('error'))
        <div class="mb-4 text-sm/6 text-red-600">
            {{ session('message') }}
        </div>
        @endif

        @if(session('success'))
        <div class="mb-4 text-sm/6 text-green-600">
            {{ session('success') }}
        </div>
        @endif
    </div>

    <div>
        <form action="{{ route('admin.login.post')}}" method="post">
            @csrf

            <div>
                <label for="">Email</label>
                <input type="email" class="border-1" name="email">
            </div>
            <div>
                <label for="">Password</label>
                <input type="password" name="password" class="border-1">
            </div>

            <div>
                <button type="submit" class='bg-gray-200 p-2 text-blue-500'>Login</button>
            </div>
        </form>

    </div>
</div>
@endsection