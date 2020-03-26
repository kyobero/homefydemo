@extends('layouts.app')

@section('content') 

<div class="card card-default">

<div class="card-header">

Create Land title

</div>

    <div class="card-body">

        <form action="{{ route ('landposts.store') }}" method="POST">
            @csrf

            <div class="form-group">

            <label for ="title">Title</label>

        <input type="text" class="form-control" name="title" id="title">

        </div>

        <div class="form-group">

            <label for ="description">Description</label>
            <textarea name="description" id="description" cols="5" class="form-control"></textarea>

            </div>

            <div class="form-group">

            <label for ="Content">Content</label>
            <textarea name="Content" id="Content" cols="5" class="form-control"></textarea>

            </div>

            <div class="form-group">

            <label for ="published_at">published_at</label>
            <input type="text" name="published_at" id="published_at"  class="form-control">

            </div>

            <div class="form-group">

            <label for ="Image">Image</label>
            <input type="file" id="Image"  class="form-control" name="image" id ="Image">

            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">
                submit for verification
                </button>
            </div>
        </form>
     </div>
 </div> 
</div>
   

@endsection

