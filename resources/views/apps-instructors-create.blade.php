@extends('layouts.master')
@section('title')
@lang('translation.create-instructor')
@endsection
@section('css')
<link href="{{ URL::asset('build/libs/dropzone/dropzone.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1')
Instructors
@endslot
@slot('title')
Create Instructor
@endslot
@endcomponent

                    <form action="#!">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <h5 class="card-title mb-3">Personal Information</h5>
                                        <p class="text-muted">Personal identification numbers: social security number (SSN), passport number, driver's license number, taxpayer identification number, patient identification number.</p>
                                    </div><!--end col-->
                                    <div class="col-xl-8">
                                        <div class="row g-3">
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="firstName" class="form-label">First Name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="firstName" placeholder="First name" required>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="lastName" class="form-label">Last Name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="lastName" placeholder="Last name" required>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="username" placeholder="Username" required>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="JoiningdatInput" class="form-label">Joining Date</label>
                                                    <input type="text" class="form-control" data-provider="flatpickr" id="JoiningdatInput" data-date-format="d M, Y" data-default-date="24 Nov, 2021" placeholder="Select date" >
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-12">
                                                <div>
                                                    <label for="designation" class="form-label">Designation <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="designation" placeholder="Designation" required>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="emailAddress" class="form-label">Email <span class="text-danger">*</span></label>
                                                    <input type="email" class="form-control" id="emailAddress" placeholder="Email" required>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="phoneNumber" class="form-label">Phone Number</label>
                                                    <input type="number" class="form-control" id="phoneNumber" placeholder="256 35659 47856" required>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-4">
                                                <div>
                                                    <label for="city" class="form-label">City</label>
                                                    <input type="text" class="form-control" id="city" placeholder="Enter your city" required>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-4">
                                                <div>
                                                    <label for="country" class="form-label">Country</label>
                                                    <input type="text" class="form-control" id="country" placeholder="Enter your country" required>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-4">
                                                <div>
                                                    <label for="zipCode" class="form-label">Zip Code</label>
                                                    <input type="number" class="form-control" id="zipCode" placeholder="Zip code" required>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-12">
                                                <div>
                                                    <label for="productTags" class="form-label">Featured Skills</label>
                                                    <input class="form-control" id="productTags" data-choices data-choices-text-unique-true data-choices-removeItem type="text" value="Marketing, Management, Shopify Development, Content SEO" >
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="languageKnows" class="form-label">Language Knows</label>
                                                    <input class="form-control" id="languageKnows" data-choices data-choices-text-unique-true data-choices-removeItem type="text" value="English, France" >
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="websiteUrl" class="form-label">Website URL</label>
                                                    <input type="url" class="form-control" id="websiteUrl" placeholder="Enter website url" required>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-12">
                                                <div>
                                                    <label for="shortDecs" class="form-label">Short Description</label>
                                                    <textarea class="form-control" id="shortDecs" placeholder="Must enter minimum of a 150 characters" rows="3"></textarea>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-12">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="exchangeableInput">
                                                    <label class="form-check-label" for="exchangeableInput">I agree with <a href="#!" class="text-decoration-underline">Term & Conditions</a></label>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <h5 class="card-title mb-3">Social Media Profile</h5>
                                        <p class="text-muted">Personal identification numbers: social security number (SSN), passport number, driver's license number, taxpayer identification number, patient identification number.</p>
                                    </div><!--end col-->
                                    <div class="col-xl-8">
                                        <div class="row g-3">
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="githubUsername" class="form-label">Github</label>
                                                    <input type="text" class="form-control" id="githubUsername" placeholder="Username" required>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="website-input" class="form-label">Website</label>
                                                    <input type="url" class="form-control" id="website-input" placeholder="www.example.com" required>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="dribble-username" class="form-label">Dribble</label>
                                                    <input type="text" class="form-control" id="dribble-username" placeholder="Username" required>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="pinterest-username" class="form-label">Pinterest</label>
                                                    <input type="text" class="form-control" id="pinterest-username" placeholder="Username" required>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="whatsapp-username" class="form-label">Whatsapp</label>
                                                    <input type="text" class="form-control" id="whatsapp-username" placeholder="258 0123 6789" required>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <h5 class="card-title mb-3">Education Details</h5>
                                        <p class="text-muted">Education refers to the discipline that is concerned with methods of teaching and learning in schools or school-like environments</p>
                                    </div><!--end col-->
                                    <div class="col-xl-8">
                                        <div id="newlink">
                                            <div id="1">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="degreeTitle" class="form-label">Degree Title</label>
                                                            <input type="text" class="form-control" id="degreeTitle" placeholder="Degree title">
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="companyName" class="form-label">University/School</label>
                                                            <input type="text" class="form-control" id="companyName" placeholder="University/School">
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="passedYear" class="form-label">Passed Years</label>
                                                            <div class="row">
                                                                <div class="col-lg-5">
                                                                    <select class="form-control" data-choices data-choices-search-false name="passedYear" id="passedYear">
                                                                        <option value="">Select years</option>
                                                                        <option value="Choice 1">2001</option>
                                                                        <option value="Choice 2">2002</option>
                                                                        <option value="Choice 3">2003</option>
                                                                        <option value="Choice 4">2004</option>
                                                                        <option value="Choice 5">2005</option>
                                                                        <option value="Choice 6">2006</option>
                                                                        <option value="Choice 7">2007</option>
                                                                        <option value="Choice 8">2008</option>
                                                                        <option value="Choice 9">2009</option>
                                                                        <option value="Choice 10">2010</option>
                                                                        <option value="Choice 11">2011</option>
                                                                        <option value="Choice 12">2012</option>
                                                                        <option value="Choice 13">2013</option>
                                                                        <option value="Choice 14">2014</option>
                                                                        <option value="Choice 15">2015</option>
                                                                        <option value="Choice 16">2016</option>
                                                                        <option value="Choice 17" selected>2017</option>
                                                                        <option value="Choice 18">2018</option>
                                                                        <option value="Choice 19">2019</option>
                                                                        <option value="Choice 20">2020</option>
                                                                        <option value="Choice 21">2021</option>
                                                                        <option value="Choice 22">2022</option>
                                                                    </select>
                                                                </div><!--end col-->
                                                                <div class="col-auto align-self-center">
                                                                    to
                                                                </div><!--end col-->
                                                                <div class="col-lg-5">
                                                                    <select class="form-control" data-choices data-choices-search-false name="choices-single-default2">
                                                                        <option value="">Select years</option>
                                                                        <option value="Choice 1">2001</option>
                                                                        <option value="Choice 2">2002</option>
                                                                        <option value="Choice 3">2003</option>
                                                                        <option value="Choice 4">2004</option>
                                                                        <option value="Choice 5">2005</option>
                                                                        <option value="Choice 6">2006</option>
                                                                        <option value="Choice 7">2007</option>
                                                                        <option value="Choice 8">2008</option>
                                                                        <option value="Choice 9">2009</option>
                                                                        <option value="Choice 10">2010</option>
                                                                        <option value="Choice 11">2011</option>
                                                                        <option value="Choice 12">2012</option>
                                                                        <option value="Choice 13">2013</option>
                                                                        <option value="Choice 14">2014</option>
                                                                        <option value="Choice 15">2015</option>
                                                                        <option value="Choice 16">2016</option>
                                                                        <option value="Choice 17">2017</option>
                                                                        <option value="Choice 18">2018</option>
                                                                        <option value="Choice 19">2019</option>
                                                                        <option value="Choice 20" selected>2020</option>
                                                                        <option value="Choice 21">2021</option>
                                                                        <option value="Choice 22">2022</option>
                                                                    </select>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="description" class="form-label">Description</label>
                                                            <textarea class="form-control" id="description" rows="3" placeholder="Enter description"></textarea>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a class="btn btn-danger" href="javascript:deleteEl(1)">Delete</a>
                                                    </div>
                                                </div>
                                                <!--end row-->
                                            </div>
                                        </div>
                                        <div id="newForm" style="display: none;">
                                    
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="hstack gap-2">
                                                <a href="javascript:new_link()" class="btn btn-primary">Add New</a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div><!--end col-->
                                </div><!--end col-->
                            </div>
                        </div>
                        <div class="text-end mb-3">
                            <button type="submit" class="btn btn-secondary"><i class="bi bi-plus-circle align-baseline me-1"></i> Add Instructor</button>
                        </div>
                    </form>

                    @endsection

@section('script')
<script src="{{ URL::asset('build/js/pages/learning-instructor-create.init.js') }}"></script>
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
