

@extends('layouts.main')
@section('main-section')
<h1>fhfghfg</h1>
@foreach($data as $d)
    <h1>{{$d->name}},{{$d->info}}</h1>
    <img src="{{url('/images')}}/{{$d->info}}" alt="" width="200px">
   
@endforeach
 <form action="{{url('/')}}/register" method="post">
    @csrf
<input type="text" name="name"/><br>

<button>submit</button>
</form>


@endsection