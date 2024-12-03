<?php $page = 'my-requests'; ?>
@section('directry')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
            <li class="breadcrumb-item"><a href="#">Channels & Number</a></li>
            <li class="breadcrumb-item"><a href="#">My Requests</a></li>
            <li class="breadcrumb-item active" aria-current="page">Request Channel</li>
        </ol>
    </nav>
@endsection
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content settings-content">

            <div class="page-header settings-pg-header">
                <div class="add-item d-flex">
                    <div class="me-3 dash-widgetimg">
                        <svg width="70px" height="70px" viewBox="0 0 48 48" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="bepo-pictogram-svg _2bvj2j0">
                            <path
                                d="M14.6 15.1494C12.3633 15.1494 10.55 16.9627 10.55 19.1994C10.55 19.6136 10.2142 19.9494 9.80002 19.9494C9.3858 19.9494 9.05002 19.6136 9.05002 19.1994C9.05002 16.1342 11.5348 13.6494 14.6 13.6494C17.6652 13.6494 20.15 16.1342 20.15 19.1994C20.15 20.8027 19.4692 22.2481 18.3831 23.2603C18.2859 23.3509 18.1885 23.4411 18.0913 23.5311C17.438 24.1361 16.7934 24.733 16.2786 25.3836C15.6933 26.1233 15.35 26.8444 15.35 27.5994C15.35 28.0136 15.0142 28.3494 14.6 28.3494C14.1858 28.3494 13.85 28.0136 13.85 27.5994C13.85 26.3662 14.4153 25.3211 15.1023 24.4529C15.6952 23.7035 16.4342 23.0201 17.0802 22.4228L17.0816 22.4215C17.1768 22.3334 17.27 22.2472 17.3604 22.163C18.1548 21.4226 18.65 20.3694 18.65 19.1994C18.65 16.9627 16.8368 15.1494 14.6 15.1494Z"
                                fill="#FC6423" class="bepo-2-pictogram--color-secondary"></path>
                            <path
                                d="M16.04 32.1588C16.04 32.954 15.3953 33.5988 14.6 33.5988C13.8047 33.5988 13.16 32.954 13.16 32.1588C13.16 31.3635 13.8047 30.7188 14.6 30.7188C15.3953 30.7188 16.04 31.3635 16.04 32.1588Z"
                                fill="#FC6423" class="bepo-2-pictogram--color-secondary"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6.19999 8.84961C4.46029 8.84961 3.04999 10.2599 3.04999 11.9996V35.9996C3.04999 37.7393 4.46029 39.1496 6.19999 39.1496H24.2C25.9397 39.1496 27.35 37.7393 27.35 35.9996V11.9996C27.35 10.2599 25.9397 8.84961 24.2 8.84961H6.19999ZM4.54999 11.9996C4.54999 11.0883 5.28872 10.3496 6.19999 10.3496H24.2C25.1113 10.3496 25.85 11.0883 25.85 11.9996V35.9996C25.85 36.9109 25.1113 37.6496 24.2 37.6496H6.19999C5.28872 37.6496 4.54999 36.9109 4.54999 35.9996V11.9996Z"
                                fill="#FC6423" class="bepo-2-pictogram--color-secondary"></path>
                            <path
                                d="M29 8.84961C28.5858 8.84961 28.25 9.1854 28.25 9.59961C28.25 10.0138 28.5858 10.3496 29 10.3496H32.6C33.5113 10.3496 34.25 11.0883 34.25 11.9996V35.9996C34.25 36.9109 33.5113 37.6496 32.6 37.6496H29C28.5858 37.6496 28.25 37.9854 28.25 38.3996C28.25 38.8138 28.5858 39.1496 29 39.1496H32.6C34.3397 39.1496 35.75 37.7393 35.75 35.9996V11.9996C35.75 10.2599 34.3397 8.84961 32.6 8.84961H29Z"
                                fill="#1B1B1A" class="bepo-2-pictogram--color-primary"></path>
                            <path
                                d="M37.4 8.84961C36.9858 8.84961 36.65 9.1854 36.65 9.59961C36.65 10.0138 36.9858 10.3496 37.4 10.3496H41C41.9113 10.3496 42.65 11.0883 42.65 11.9996V35.9996C42.65 36.9109 41.9113 37.6496 41 37.6496H37.4C36.9858 37.6496 36.65 37.9854 36.65 38.3996C36.65 38.8138 36.9858 39.1496 37.4 39.1496H41C42.7397 39.1496 44.15 37.7393 44.15 35.9996V11.9996C44.15 10.2599 42.7397 8.84961 41 8.84961H37.4Z"
                                fill="#1B1B1A" class="bepo-2-pictogram--color-primary"></path>
                        </svg>
                    </div>
                    <div class="page-title mt-2">
                        <h1>Request Channel</h1>
                        <h6>Request access to any channel and we can start aligning configuration with your needs.</h6>
                    </div>
                </div>
                <ul class="table-top-head">
                    <li>
                        <div class="page-btn">
                            <a href="{{ url('my-requests') }}" class="btn btn-secondary"><i data-feather="arrow-left"
                                    class="me-2"></i>Back to My Request</a>
                        </div>
                    </li>
                    <li>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i
                                data-feather="chevron-up" class="feather-chevron-up"></i></a>
                    </li>
                </ul>
            </div>

            <div class="row">
                {{--  <div class="col-md-6 ">
                    <!-- /product list -->
                    <form action="{{ url('add-employee') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="new-employee-field">
                                    <div class="card-title-head">
                                        <h6><span><i data-feather="info" class="feather-edit"></i></span>Channel
                                            Information</h6>
                                    </div>
                                    <div class="profile-pic-upload">
                                        <div class="profile-pic">
                                            <span><i data-feather="plus-circle" class="plus-down-add"></i> Profile
                                                Photo</span>
                                        </div>
                                        <div class="input-blocks mb-0">
                                            <div class="image-upload mb-0">
                                                <input type="file">
                                                <div class="image-uploads">
                                                    <h4>Change Image</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">First Name</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="input-blocks">
                                                <label>Date of Birth</label>
    
                                                <div class="input-groupicon calender-input">
                                                    <i data-feather="calendar" class="info-img"></i>
                                                    <input type="text" class="datetimepicker form-control"
                                                        placeholder="Select Date">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Gender</label>
                                                <select class="js-example-basic-single select2">
                                                    <option>Choose</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <!-- /product list -->
    
                        <div class="text-end mb-3">
                            <button type="button" class="btn btn-cancel me-2">Cancel</button>
                            <button type="submit" class="btn btn-submit">Save Product</button>
                        </div>
                    </form>
                </div>  --}}
                <div class="d-flex justify-content-center align-items-center">
                    <div class="col-md-6">
                        <!-- /product list -->
                        <form action="{{ route('request-channel') }}">
                            <div class="card">
                                <div class="card-body">
                                    <div class="new-employee-field">
                                        <div class="card-title-head">
                                            <h6><span><i data-feather="info" class="feather-edit"></i></span>Channel
                                                Information</h6>
                                        </div>
                                        {{--  <div class="profile-pic-upload">
                                            <div class="profile-pic">
                                                <span><i data-feather="plus-circle" class="plus-down-add"></i> Profile Photo</span>
                                            </div>
                                            <div class="input-blocks mb-0">
                                                <div class="image-upload mb-0">
                                                    <input type="file">
                                                    <div class="image-uploads">
                                                        <h4>Change Image</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  --}}
                                        <div class="row">
                                            {{--  <div class="col-lg-4 col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">First Name</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="input-blocks">
                                                    <label>Date of Birth</label>
                                                    <div class="input-groupicon calender-input">
                                                        <i data-feather="calendar" class="info-img"></i>
                                                        <input type="text" class="datetimepicker form-control" placeholder="Select Date">
                                                    </div>
                                                </div>
                                            </div>  --}}
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Channel</label>
                                                    <select class="js-example-basic-single select2">
                                                        <option>Choose Channel</option>
                                                        <option value="Alphanumeric Sender">Alphanumeric Sender</option>
                                                        <option value="WhatsApp">WhatsApp</option>
                                                        <option value="RCS Business Messaging">RCS Business Messaging
                                                        </option>
                                                        <option value="Apple Messages for Business">Apple Messages for
                                                            Business
                                                        </option>
                                                        <option value="Messenger">Messenger</option>
                                                        <option value="Instagram Messaging">Instagram Messaging</option>
                                                        <option value="Email">Email</option>
                                                        <option value="Voice and Video">Voice and Video</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <p>Navigate to SMS and get your own number or alphanumeric sender.</p>
                                        {{--  <button type="button" class="btn btn-cancel me-2">Cancel</button>  --}}
                                        <button type="submit" class="btn btn-submit">Go To</button>
                                    </div>

                                </div>
                            </div>
                            <!-- /product list -->

                        </form>
                    </div>
                </div>

            </div>

        </div>



    </div>
@endsection
