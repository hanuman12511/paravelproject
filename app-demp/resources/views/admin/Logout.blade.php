@extends('layouts.main')
@section('main-section')
<form action="/submitform" method="post">
    @csrf
<input type="text" name="name"/><br>
<input type="text" name="info"/><br>
<button>submit</button>
</form>
@endsection