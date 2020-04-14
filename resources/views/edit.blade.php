@extends('layout') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a student</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('students.update', $student->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="first_name">name:</label>
                <input type="text" class="form-control" name="name" value={{ $contact->name}} />
            </div>

            <div class="form-group">
                <label for="last_name">address:</label>
                <input type="text" class="form-control" name="address" value={{ $contact->address }} />
            </div>

            <div class="form-group">
                <label for="email">email:</label>
                <input type="text" class="form-control" name="email" value={{ $contact->email }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection