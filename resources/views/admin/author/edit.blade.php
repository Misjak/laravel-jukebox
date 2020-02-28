@extends('admin.layout', [
  'title' => 'Create a new author'
])

@section('headline')

Create a new author
    
@endsection

{{-- @section('content')
  If you see this within HTML document, everything is great.
@endsection --}}


@section('content')

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(Session::has('success_message'))
    <div class="alert alert-success">
        {{ Session::get('success_message') }}
    </div>
@endif


@if ($author->id !== null)
  <form action="{{ action('AuthorController@update', ['id' =>$author->id]) }}" method="post">
      @method('put')
@else
  <form action="{{action('AuthorController@store') }}" method="post">

@endif


@csrf

  <div class="form-group">

    <label for=""> Name: </label>
  <input type="text" name="name" value="{{old ('name', $author->name)}}"> <br>
   
  

  </div class="form-group">

  <div class="submit">

    <input type="submit" value="save">

  </div>

</form>


    
@endsection