

@extends('layouts.main')
@section('main-section')
<form action="{{url('/')}}/submitform" method="post" enctype="multipart/form-data">
    @csrf
     <div class="col-md-6">
                    <input type="file" name="image" class="form-control">
                </div>
<input type="text" name="name"/><br>
<input type="text" name="info"/><br>
<button>submit</button>
</form>

@endsection