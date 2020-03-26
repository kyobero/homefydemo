@extends('layouts.appk')

@section('content') 

<div class="card card-default">

<div class="card-header">

<h2>Land Verification</h2>
@if($errors->any())
{{implode('',$errors->all(':message'))}}
@endif
</div>

    <div class="card-body">

        <form action="{{ route ('landposts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

                    <div class="form-group">
                    <label for="land_title">Land_title</label>
                            <select  class="form-control" name ="land_title" id="land_title">
                                <option disabled selected>Select Type of Land Title</option>
                                <option>Receipt of Land Payment</option>
                                <option>Approved Survey plan</option>
                                <option>Approved Layout</option>
                                <option>Excision Document</option>
                                <option>Power of Attorney</option>
                                <option>Deed of Assignment</option>
                                <option>Certificate of Occupancy</option>
                                <option>Governors Consent</option>
                            </select>
                    </div>
                    <div class="form-group">
                            <label for="land_interest"> Land_interest</label>

                                        <select  class="form-control" name ="land_interest" id="land_interest">
                                                <option disabled selected>What is your interest on the Land?</option>
                                                <option>Commercial</option>
                                                <option>Agriculture</option>
                                                <option>Residential</option>
                                                <option>Recreational</option>
                                                <option>Transport</option>


                                        </select>
                        </div>
                    <div class="form-group">
                        <label for="state">State</label>
								<select  class="form-control" name ="state" id="state">
										<option disabled selected>Select State</option>
										<option>Lagos</option>
										<option>Abuja</option>
										<option>Anambra</option>
										<option>Enugu</option>
										<option>Ogun</option>
										<option>PortHarcourt</option>
										<option>Kaduna</option>
										<option>Ibadan</option>
								</select>
					</div>
        
                    <div class="form-group"> 
                            <label for="city">City</label>
									<select  class="form-control" name ="city" id="city">
										<option disabled selected>Select City</option>
										<option>Ikorodu</option>
										<option>egbeda</option>
										<option>Surulere</option>
										<option>Ikotun</option>
										<option>Ikeja</option>
										<option>Lekki</option>
										<option>Yaba</option>
										<option>Ojota</option>
									</select>
						</div>


            <div class="form-group">

            <label for ="numberOfPlot">Number of Plots</label>

        <input type="text" class="form-control" name="numberOfPlot" id="numberOfPlot" placeholder = "Number of Plots e.g 1">

        </div>
 <div class="form-group">

            <label for ="allocationNumber">Allocation Number</label>

        <input type="text" class="form-control" name="allocationNumber" id="allocationNumber" placeholder = "Allocation Number e.g LAG-4567890">

        </div>
    
    
        <div class="form-group">

            <label for ="location_description"> location_description </label>
            <textarea name="location_description" id="location_description" cols="5" class="form-control" placeholder = "Describe Property Location (e.g Nearest Landmark)"></textarea>

            </div>
                <div class="form-group" class="toggleShowDiv">
                <label for ="survey_plan_no">survey_plan_no</label>
        
									<select  class="form-control" required="" id="survey_plan_no" name="survey_plan_no" >
										<option disabled selected>Do you have a Survey Plan Number?</option>
										<option>Yes</option>
										<option>No</option>
									</select>
								</div>
                                <div class="form-group">

            <label for ="title">Survey Plan Number</label>

        <input type="text" class="form-control" name="allocationNumber" id="allocationNumber" placeholder = "Input Survey Plan Number">

        </div>
        <div class="form-group">
        <label for ="choose_lawyer">choose_lawyer</label>
                            <select  class="form-control"  id = "choose_lawyer" name="choose_lawyer" required="">
                                <option disabled selected>Choose a Lawyer</option>
                                <option value="3">Vivian Egwu</option>
                                <option value="3">Alfred Egwu</option>
                            </select>
                        </div>

                        
            <div class="form-group">
                <label for="image">title_pic</label>
                <input type="file" class="form-control" name="title_pic" id="title_pic">
            </div>

        <div class="form-group">
        <label for ="description">survey_No</label>
                            <input type="text" class="form-control" id = "survey_No" name="survey_No">
    
                        </div>


           <div class="form-group">
                <label for="survey_doc_pic">survey document pic</label>
                <input type="file" class="form-control" name="survey_doc_pic" id="survey_doc_pic">
            </div> 

            <!-- <div class="form-group">

                <label for ="title">Content</label>
                <textarea name="title" id="title" cols="5" class="form-control"></textarea>

            </div>

            <div class="form-group">

                <label for ="description">Content</label>
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

                <label for ="image">image</label>
                <input type="file" id="image"  class="form-control" name="image" id ="image">

            </div> -->



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

