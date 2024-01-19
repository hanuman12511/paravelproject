

@extends('layouts.main')
@section('main-section')
<form action="{{url('/')}}/submitform" method="post">
    @csrf
<input type="text" name="name"/><br>

<button>submit</button>
</form>


@endsection