@extends('layouts.appk')

@section('content')

<div class="card card-default">

    <div class="card-header"> 
    {{ isset($categoryregistration) ? 'Edit categoryregistration' : 'Create categoryregistration'}}
    </div>
        
        <div class="card-body">
        <!-- display errors if any -->
        @if($errors->any())
        
        <div class="alert alert-danger">
        
        <ul class="list-group">
        
        @foreach($errors->all() as $error)
        <li class="list-group-item text-danger">
        {{ $error }}
        </li>
        @endforeach
        </ul>
        </div>
        @endif

            <form action="{{ isset($categoryregistration) ? route('categoryregistration.update', $categoryregistration->id) : route('categoryregistration.store') }}" method="POST">
            @csrf

            @if(isset($categoryregistration))

            @method('PUT')

            @endif
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" class="form-control" name="name" value="{{ isset($categoryregistration) ? $categoryregistration->name : ''}}">
                </div>
            <div class="form-group">
            <button class="btn btn-success"> 
            {{ isset($categoryregistration) ? 'Update Category': 'Add Category'}}
            </button>
            </div>
        </form>
    </div>
</div>

@endsection