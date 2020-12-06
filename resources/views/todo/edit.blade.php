@extends('app.app')

@section('content')
<h1 class="text-center my-5">Edit Todo</h1>

<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card card-default">
      <div class="card-header">{{$name}}</div>
      <div class="card-body">
        <form action="/todos/{{$id}}/update" method="post">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Nome" value="{{$name}}"/>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="description" placeholder="Descrição" row="5" column="5">{{$description}}</textarea>
        </div>
        <div class="form-group">
            <input type="radio" name="completed" id="complete" value="true" @if($completed) checked @endif  />
            <label for="complete">Completed</label></br>
            <input type="radio" name="completed" id="not-complete" value="false" @if(!$completed) checked @endif/>
            <label for="complete">Not Completed</label></br>
        </div>

        <div class="form-group text-center">
            <button type="submit" class="btn btn-success">Edit Todo </button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
