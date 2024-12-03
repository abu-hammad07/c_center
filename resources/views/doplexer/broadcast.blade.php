<?php $page = 'broadcast'; ?>
@section('directry')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
            {{--  <li class="breadcrumb-item"><a href="#">Channels & Number</a></li>  --}}
            <li class="breadcrumb-item active" aria-current="page">Broadcast</li>
        </ol>
    </nav>
@endsection
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content settings-content">

            <div class="page-header settings-pg-header">
                <div class="add-item d-flex">
                    <div class="page-title">
                        <h1>All Broadcasts</h1>
                    </div>
                </div>
                <ul class="table-top-head">
                    <li>
                        <a href="{{ route('broadcast.list') }}" class="btn  btn-square btn-secondary">Create Broadcast</a>
                    </li>
                    {{--  <li>
                        <button type="button" class="btn  btn-square btn-secondary">Buy Number</button>
                    </li>  --}}
                    <li>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i
                                data-feather="chevron-up" class="feather-chevron-up"></i></a>
                    </li>
                </ul>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <!-- /product list -->
                    <div class="card table-list-card">
                        <div class="card-body">
                            <div class="table-top">
                                <div class="search-set">
                                    <div class="search-input">
                                        <a href="" class="btn btn-searchset"><i data-feather="search"
                                                class="feather-search"></i></a>
                                    </div>
                                </div>
                                <div class="search-path">
                                    <div class="d-flex align-items-center">
                                        <a class="btn btn-filter" id="filter_search">
                                            <i data-feather="filter" class="filter-icon"></i>
                                            <span><img src="{{ URL::asset('/build/img/icons/closes.svg') }}"
                                                    alt="img"></span>
                                        </a>
                                        <div class="layout-hide-box">
                                            <a href="javascript:void(0);" class="me-3 layout-box"><i data-feather="layout"
                                                    class="feather-search"></i></a>
                                            <div class="layout-drop-item card">
                                                <div class="drop-item-head">
                                                    <h5>Want to manage datatable?</h5>
                                                    <p>Please drag and drop your column to reorder your table and
                                                        enable see
                                                        option
                                                        as you want.</p>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <div
                                                            class="status-toggle modal-status d-flex justify-content-between align-items-center">
                                                            <span class="status-label"><i data-feather="menu"
                                                                    class="feather-menu"></i>Type</span>
                                                            <input type="checkbox" id="option1" class="check" checked>
                                                            <label for="option1" class="checktoggle"></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div
                                                            class="status-toggle modal-status d-flex justify-content-between align-items-center">
                                                            <span class="status-label"><i data-feather="menu"
                                                                    class="feather-menu"></i>Requested By</span>
                                                            <input type="checkbox" id="option2" class="check" checked>
                                                            <label for="option2" class="checktoggle"> </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div
                                                            class="status-toggle modal-status d-flex justify-content-between align-items-center">
                                                            <span class="status-label"><i data-feather="menu"
                                                                    class="feather-menu"></i>Sender</span>
                                                            <input type="checkbox" id="option3" class="check" checked>
                                                            <label for="option3" class="checktoggle"> </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div
                                                            class="status-toggle modal-status d-flex justify-content-between align-items-center">
                                                            <span class="status-label"><i data-feather="menu"
                                                                    class="feather-menu"></i>Request Date</span>
                                                            <input type="checkbox" id="option4" class="check" checked>
                                                            <label for="option4" class="checktoggle"> </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div
                                                            class="status-toggle modal-status d-flex justify-content-between align-items-center">
                                                            <span class="status-label"><i data-feather="menu"
                                                                    class="feather-menu"></i>Country</span>
                                                            <input type="checkbox" id="option5" class="check" checked>
                                                            <label for="option5" class="checktoggle"> </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div
                                                            class="status-toggle modal-status d-flex justify-content-between align-items-center">
                                                            <span class="status-label"><i data-feather="menu"
                                                                    class="feather-menu"></i>Status</span>
                                                            <input type="checkbox" id="option5" class="check" checked>
                                                            <label for="option5" class="checktoggle"> </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-sort">
                                    <i data-feather="sliders" class="info-img"></i>
                                    <select class="select">
                                        <option>Sort by Date</option>
                                        <option>Newest</option>
                                        <option>Oldest</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /Filter -->
                            <div class="card" id="filter_inputs">
                                <div class="card-body pb-0">
                                    {{--  <div class="page-header">
                                        <ul class="table-top-head">
                                            <li>
                                                <div class="input-blocks">
                                                    <i data-feather="search" class="info-img"></i>
                                                    <select class="js-example-placeholder-multiple select2 js-states" multiple="multiple">
                                                        <option value="">Channels</option>
                                                        <option value="SMS">SMS</option>
                                                        <option value="Email">Email</option>
                                                        <option value="Voice">Voice</option>
                                                        <option value="WhatsApp">WhatsApp</option>
                                                    </select>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="input-blocks">
                                                    <i data-feather="search" class="info-img"></i>
                                                    <select class="js-example-basic-single select2">
                                                        <option value="">Status  </option>
                                                        <option value="Canceled">Canceled</option>
                                                        <option value="Drafted">Drafted</option>
                                                        <option value="Failed">Failed</option>
                                                        <option value="Finished">Finished</option>
                                                        <option value="In progress">In progress</option>
                                                        <option value="Paused">Paused</option>
                                                        <option value="Scheduled">Scheduled</option>
                                                    </select>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="input-blocks">
                                                    <i data-feather="search" class="info-img"></i>
                                                    <select class="js-example-basic-single select2">
                                                        <option value="">Traffic</option>
                                                        <option value="0 to 1000">0 to 1000</option>
                                                        <option value="1001 to 10000">1001 to 10000</option>
                                                        <option value="10001 ot 100000">10001 ot 100000</option>
                                                        <option value="100000 ot 1000000">100000 ot 1000000</option>
                                                    </select>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="input-blocks">
                                                    <i data-feather="search" class="info-img"></i>
                                                    <select class="js-example-basic-single select2">
                                                        <option value="">Templates</option>
                                                    </select>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="input-blocks">
                                                    <i data-feather="search" class="info-img"></i>
                                                    <div class="input-groupicon">
                                                        <input type="text" class="datetimepicker"
                                                            placeholder="Choose Date">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="input-blocks">
                                                    <i data-feather="search" class="info-img"></i>
                                                    <select class="js-example-basic-single select2">
                                                        <option value="">Created by</option>
                                                        <option value="Completed">Admin</option>
                                                    </select>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <div class="input-blocks">
                                                    <a class="btn btn-filters ms-auto"> <i data-feather="search"
                                                            class="feather-search"></i> Search </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>  --}}
                                    <div class="row">
                                        <div class="col-xl-2 col-lg-3 col-4">
                                            <div class="input-blocks">
                                                <i data-feather="search" class="info-img"></i>
                                                <select class="js-example-basic-single select2">
                                                    <option value="">Channels</option>
                                                    <option value="SMS">SMS</option>
                                                    <option value="Email">Email</option>
                                                    <option value="Voice">Voice</option>
                                                    <option value="WhatsApp">WhatsApp</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-4">
                                            <div class="input-blocks">
                                                <i data-feather="search" class="info-img"></i>
                                                <select class="js-example-basic-single select2">
                                                    <option value="">Status</option>
                                                    <option value="Canceled">Canceled</option>
                                                    <option value="Drafted">Drafted</option>
                                                    <option value="Failed">Failed</option>
                                                    <option value="Finished">Finished</option>
                                                    <option value="In progress">In progress</option>
                                                    <option value="Paused">Paused</option>
                                                    <option value="Scheduled">Scheduled</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-4">
                                            <div class="input-blocks">
                                                <i data-feather="search" class="info-img"></i>
                                                <select class="js-example-basic-single select2">
                                                    <option value="">Traffic</option>
                                                    <option value="0 to 1000">0 to 1000</option>
                                                    <option value="1001 to 10000">1001 to 10000</option>
                                                    <option value="10001 ot 100000">10001 ot 100000</option>
                                                    <option value="100000 ot 1000000">100000 ot 1000000</option>
                                                </select>
                                            </div>
                                        </div>
                                        {{--  <div class="col-xl-2 col-lg-3 col-4">
                                            <div class="input-blocks">
                                                <i data-feather="search" class="info-img"></i>
                                                <select class="js-example-basic-single select2">
                                                    <option value="">Templates</option>
                                                </select>
                                            </div>
                                        </div>  --}}
                                        <div class="col-xl-2 col-lg-3 col-4">
                                            <div class="input-blocks">
                                                <i data-feather="calendar" class="info-img"></i>
                                                <div class="input-groupicon">
                                                    <input type="text" class="datetimepicker"
                                                        placeholder="Choose Date">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-4">
                                            <div class="input-blocks">
                                                <i data-feather="search" class="info-img"></i>
                                                <select class="js-example-basic-single select2">
                                                    <option value="">Created by</option>
                                                    <option value="Completed">Admin</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-12 ms-auto">
                                            <div class="input-blocks">
                                                <a class="btn btn-filters ms-auto"> <i data-feather="search"
                                                        class="feather-search"></i> Search </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Filter -->
                            <div class="table-responsive">
                                <table class="table  datanew">
                                    <thead>
                                        <tr>
                                            <th class="no-sort">
                                                <label class="checkboxs">
                                                    <input type="checkbox" id="select-all">
                                                    <span class="checkmarks"></span>
                                                </label>
                                            </th>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th>Traffic</th>
                                            <th>Created date</th>
                                            <th>Schedule date</th>
                                            <th>Launched date</th>
                                            <th>Created by</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            // Generate a random timestamp between two dates
                                            $startDate = strtotime('2024-01-01'); // Start date
                                            $endDate = time(); // Current date as the end date
                                            $randomTimestamp = rand($startDate, $endDate);
                                            // Format the random timestamp into a readable date
                                            $randomDate = date('d-M-Y', $randomTimestamp);
                                        @endphp
                                        <tr>
                                            <td>
                                                <label class="checkboxs">
                                                    <input type="checkbox">
                                                    <span class="checkmarks"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <span>
                                                    <svg width="32px" height="32px" viewBox="0 0 48 48"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg"
                                                        class="bepo-pictogram-svg _2bvj2j0">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M14.4 11.2002C14.8418 11.2002 15.2 11.5584 15.2 12.0002V31.2002C15.2 31.642 14.8418 32.0002 14.4 32.0002C13.9582 32.0002 13.6 31.642 13.6 31.2002V12.0002C13.6 11.5584 13.9582 11.2002 14.4 11.2002Z"
                                                            fill="#FC6423" class="bepo-2-pictogram--color-secondary">
                                                        </path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M22.4 9.60017C22.4 9.15834 22.0418 8.80017 21.6 8.80017C21.1582 8.80017 20.8 9.15834 20.8 9.60017V38.4002C20.8 38.842 21.1582 39.2002 21.6 39.2002C22.0418 39.2002 22.4 38.842 22.4 38.4002V9.60017ZM7.2 18.4002C7.64183 18.4002 8 18.7583 8 19.2002V28.8002C8 29.242 7.64183 29.6002 7.2 29.6002C6.75817 29.6002 6.4 29.242 6.4 28.8002V19.2002C6.4 18.7583 6.75817 18.4002 7.2 18.4002ZM43.2 18.4002C43.6418 18.4002 44 18.7583 44 19.2002V28.8002C44 29.242 43.6418 29.6002 43.2 29.6002C42.7582 29.6002 42.4 29.242 42.4 28.8002V19.2002C42.4 18.7583 42.7582 18.4002 43.2 18.4002ZM28.8 20.8002C29.2418 20.8002 29.6 21.1583 29.6 21.6002V31.2002C29.6 31.642 29.2418 32.0002 28.8 32.0002C28.3582 32.0002 28 31.642 28 31.2002V21.6002C28 21.1583 28.3582 20.8002 28.8 20.8002ZM36.8 12.0002C36.8 11.5583 36.4418 11.2002 36 11.2002C35.5582 11.2002 35.2 11.5583 35.2 12.0002V36.0002C35.2 36.442 35.5582 36.8002 36 36.8002C36.4418 36.8002 36.8 36.442 36.8 36.0002V12.0002Z"
                                                            fill="#1B1B1A" class="bepo-2-pictogram--color-primary"></path>
                                                    </svg>
                                                </span>
                                                Broadcast_Voice
                                            </td>
                                            <td><span class="badge badge-md bg-outline-dark text-dark">Drafted</span></td>
                                            <td>0</td>
                                            <td>{{ $randomDate }}</td>
                                            <td></td>
                                            <td></td>
                                            <td><span class="badge badge-bgdanger">Admin</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="checkboxs">
                                                    <input type="checkbox">
                                                    <span class="checkmarks"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <span>
                                                    <svg width="32px" height="32px" viewBox="0 0 40 40"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg"
                                                        class="bepo-brand-icon-svg zwub5m0">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M31.2812 8.65007C28.2879 5.65292 24.3069 4.00152 20.0651 4C11.3246 4 4.21111 11.1127 4.20807 19.8555C4.20655 22.6504 4.93721 25.3784 6.32478 27.7826L4.07501 36L12.481 33.7951C14.7969 35.0588 17.4048 35.724 20.0583 35.7248H20.0651C28.8041 35.7248 35.9184 28.6113 35.9214 19.8685C35.9229 15.6313 34.2753 11.648 31.2812 8.65083V8.65007ZM20.0651 33.047H20.0598C17.6952 33.0462 15.3755 32.4106 13.3516 31.21L12.8703 30.9242L7.8819 32.2327L9.2132 27.3689L8.89995 26.8702C7.58081 24.7717 6.8836 22.3463 6.88512 19.8563C6.88817 12.59 12.8003 6.67782 20.0705 6.67782C23.5907 6.67934 26.8996 8.05171 29.3881 10.5432C31.8766 13.034 33.2459 16.346 33.2444 19.867C33.2413 27.134 27.3292 33.0462 20.0651 33.0462V33.047ZM27.2942 23.1766C26.898 22.9782 24.9502 22.0201 24.5867 21.8879C24.2233 21.7555 23.9595 21.6895 23.6956 22.0863C23.4318 22.4832 22.6723 23.3758 22.4411 23.6396C22.21 23.9042 21.9788 23.9369 21.5827 23.7384C21.1866 23.54 19.91 23.1218 18.3963 21.7723C17.2186 20.7215 16.4232 19.4245 16.1921 19.0275C15.961 18.6307 16.1678 18.4163 16.3654 18.2193C16.5433 18.0414 16.7616 17.7563 16.96 17.5252C17.1585 17.294 17.2239 17.1283 17.3561 16.8645C17.4885 16.5999 17.4223 16.3688 17.3235 16.1703C17.2246 15.9719 16.4324 14.0216 16.1016 13.2287C15.78 12.4562 15.4531 12.5611 15.2106 12.5482C14.9794 12.5368 14.7156 12.5345 14.451 12.5345C14.1864 12.5345 13.7576 12.6333 13.3942 13.0302C13.0308 13.4271 12.0073 14.3858 12.0073 16.3353C12.0073 18.2847 13.4269 20.1696 13.6253 20.4342C13.8237 20.6988 16.4194 24.7003 20.3936 26.4171C21.3387 26.8253 22.0769 27.0694 22.6524 27.2519C23.6014 27.5537 24.465 27.5112 25.1478 27.4092C25.9089 27.2952 27.4919 26.4505 27.8218 25.5252C28.1518 24.5999 28.1518 23.8061 28.053 23.6411C27.9542 23.4761 27.6896 23.3765 27.2934 23.1781L27.2942 23.1766Z"
                                                            fill="#25D366"></path>
                                                    </svg>
                                                </span>
                                                Broadcast_WhatsApp
                                            </td>
                                            <td><span class="badge badge-md bg-outline-dark text-dark">Drafted</span></td>
                                            <td>0</td>
                                            <td>{{ $randomDate }}</td>
                                            <td></td>
                                            <td></td>
                                            <td><span class="badge badge-bgdanger">Admin</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /product list -->
                </div>
            </div>


        </div>
    </div>
@endsection
