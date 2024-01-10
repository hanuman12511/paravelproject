

@extends('layouts.main')
@section('main-section')
<form action="/register" method="post">
    @csrf
<input type="text" name="name"/><br>

<button>submit</button>
</form>
@endsection