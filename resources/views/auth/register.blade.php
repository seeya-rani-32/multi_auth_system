@extends('layouts.app')

@section('content')
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Create your account</h2>
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
    </div>

    <div>
        <form action="{{ route('register.post')}}" method="post">
            @csrf
            <div>
                <label for="">Name</label>
                <input type="text" class="border-1" name='name'>
            </div>
            <div>
                <label for="">Email</label>
                <input type="email" class="border-1" name="email">
            </div>
            <div>
                <label for="">Password</label>
                <input type="password" name="password" class="border-1">
            </div>
            <div>
                <label for="">Confirm Password</label>
                <input type="password" name="password_confirmation" class="border-1">
            </div>

            <div>
                <button type="submit" class='bg-gray-200 p-2 text-blue-500'>Register</button>
            </div>
        </form>

    </div>
</div>
@endsection