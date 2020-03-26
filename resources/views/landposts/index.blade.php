@extends('layouts.appk')

@section('content')

<div class="d-flex justify-content-end mb-2">
<a href="{{ route('landposts.create')}}" class="btn btn-success float-right"> Add land post</a>
</div>

<div class="card card-default">

    <div class="card-header"> Land posts</div>



        <div class="card-body">

            <table class="table">

                <thead>

                    <th>Land title</th>

                    <th>Allocation Number</th>

                    <th></th> 

                    <th></th>

                    <th>Status</th>

                </thead>

            <!-- </table>             -->

         </tbody>

         @foreach($landposts as $landpost)

             <tr>

                  <td>
                      {{ $landpost->land_title}}
                  </td>

                  <td>
                   {{ $landpost->allocationNumber}}
                  </td>
             
             <!-- </tr> -->

             <td>
             
             <a href="" class="btn btn-info btn-sm">Edit</a>

             </td>

             <td>
             
             <a href="" class="btn btn-danger btn-sm">Trash</a>

             </td>

             <td>
             
             <!-- <a href="" class="btn btn-danger btn-sm">status</a> -->

             </div>
        <!-- <div class="form-group">
        <label for ="Set_status">Set_status</label> -->
                            <select  class="form-control"  id = "Set_status" name="Set_status" required="">
                                <option disabled selected>Pending</option>
                                <option value="3">Approved with documentation</option>
                                <option value="3">Approved with documentation pending</option>
                                <option value="3">Not started</option>
                            </select>
                        <!-- </div> -->


             </td>
        
        </tr>
                  @endforeach

       </div>

</div>

@endsection