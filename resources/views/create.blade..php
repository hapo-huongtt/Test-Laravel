@extends('layout')
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a sstudent</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('students.store') }}">
          @csrf
          <div class="form-group">    
              <label for="first_name">name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>

          <div class="form-group">
              <label for="last_name">address:</label>
              <input type="text" class="form-control" name="address"/>
          </div>

          <div class="form-group">
              <label for="email">email:</label>
              <input type="text" class="form-control" name="email"/>
          </div>                     
          <button type="submit" class="btn btn-primary-outline">Add student</button>
      </form>
  </div>
</div>
</div>
@endsection