@extends('app.app')

@section('content')
<h1 class="text-center my-5">Create Todos</h1>

<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card card-default">
      <div class="card-header">Create new todo</div>
      <div class="card-body">
        <form action="/todos/store" method="post">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Nome"/>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="description" placeholder="Descrição" row="5" column="5"></textarea>
        </div>
        <div class="form-group">
            <input type="radio" name="completed" id="complete" value="true"/>
            <label for="complete">Completed</label></br>
            <input type="radio" name="completed" id="not-complete" value="false"/>
            <label for="complete">Not Completed</label></br>
        </div>

        <div class="form-group text-center">
            <button type="submit" class="btn btn-success">Create Todo </button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
