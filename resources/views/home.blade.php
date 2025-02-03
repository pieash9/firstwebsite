@extends("layouts.default")

@section('header')
<h1 class="text-5xl">This is header</h1>
@endsection


@section('maincontent')
<h1 class="text-3xl text-red-500">Home!</h1>
<form action="{{ route('formsubmitted') }}" method="post">
    @csrf
    <label for="fullname">Full Name</label>
    <input type="text" id="fullname" name="fullname" placeholder="Type your full name" required>
    <br>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Type your email" required>
    <br>

    <button type="submit">Submit</button>
</form>
@endsection


@section('footer')
<h2>This is footer</h2>
@endsection