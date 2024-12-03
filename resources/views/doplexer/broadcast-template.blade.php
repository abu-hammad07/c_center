<?php $page = 'broadcast-voice'; ?>
@section('directry')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
            <li class="breadcrumb-item"><a href="#">Broadcast</a></li>
            <li class="breadcrumb-item active" aria-current="page">Template</li>
        </ol>
    </nav>
@endsection
@extends('layout.mainlayout')
@section('content')
@section('style')
    <style>
        .broadcast {
            display: none;
        }
    </style>
@endsection
<div class="page-wrapper">
    <div class="content settings-content">

        {{--  <div class="col-md-12">
                <ul class="nav nav-tabs nav-tabs-top mb-3">
                    <li class="nav-item"><a class="nav-link active" href="#top-tab1"
                            data-bs-toggle="tab">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#top-tab2" data-bs-toggle="tab">Profile</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#top-tab3" data-bs-toggle="tab">Messages</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane show active" id="top-tab1">
                        Tab content 1
                    </div>
                    <div class="tab-pane" id="top-tab2">
                        Tab content 2
                    </div>
                    <div class="tab-pane" id="top-tab3">
                        Tab content 3
                    </div>
                </div>
            </div>  --}}
        {{--  <div class="row mb-3">
                <div class="col-md-4">
                    <ul class="nav nav-tabs flex-column vertical-tabs-3" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active text-break" data-bs-toggle="tab" role="tab"
                                aria-current="page" href="#employee-vertical" aria-selected="true">
                                <i class="feather-user me-2 align-middle d-inline-block"></i>Employees
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-break" data-bs-toggle="tab" role="tab"
                                aria-current="page" href="#customers-vertical" aria-selected="true">
                                <i class="feather-users me-2 align-middle d-inline-block"></i>Customers
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-break mb-0" data-bs-toggle="tab" role="tab"
                                aria-current="page" href="#products-vertical" aria-selected="true">
                                <i class="feather-gift me-2 align-middle d-inline-block"></i>Products
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <div class="tab-content">
                        <div class="tab-pane show active text-muted" id="employee-vertical"
                            role="tabpanel">
                            <ul class="mb-0">
                                <li class="mb-2">
                                    How travel coupons make you a better lover. Why cultural solutions are
                                    the new black. Why mom was right about travel insurances. How family
                                    trip ideas can helpyou predict the future. <b>How carnival cruises make
                                        you a better lover</b>. Why you'll never succeed at daily deals.
                                </li>
                                <li>How hotel deals can help you live a better life. <b>How celebrity
                                        cruises</b> aren't as bad as you think. How cultural solutions can
                                    help you predict the future. How to cheat at dog friendly hotels and get
                                    away with it.
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane text-muted" id="customers-vertical" role="tabpanel">
                            <ul class="mb-0">
                                <li class="mb-2">
                                    The standard chunk of Lorem Ipsum used since the 1500s is reproduced
                                    below for those interested. Sections 1.10.32 and 1.10.33 from "de
                                    Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact
                                    original form, accompanied by English versions from the 1914 translation
                                    by H. Rackham,How hotel deals can help you live a better life. <b>How
                                        celebrity
                                        cruises</b>
                                </li>
                                <li>How hotel deals can help you live a better life. <b>How celebrity
                                        cruises</b> aren't as bad as you think. How cultural solutions can
                                    help you predict the future. How to cheat at dog friendly hotels and get
                                    away with it.
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane text-muted" id="products-vertical" role="tabpanel">
                            <ul class="mb-0">
                                <li class="mb-2">
                                    There are many variations of passages of Lorem Ipsum available, but the
                                    majority have suffered alteration in some form, by injected humour, or
                                    randomised words which don't look even slightly believable. If you are
                                    going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                    anything embarrassing hidden.
                                </li>
                                <li>How hotel deals can help you live a better life. <b>How celebrity
                                        cruises</b> aren't as bad as you think. How cultural solutions can
                                    help you predict the future. How to cheat at dog friendly hotels and get
                                    away with it.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>  --}}



        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                <a onclick="showBroadcast('voice-broadcast')">
                    <div class="card card-bg-light text-center" id="card-tab">
                        <div class="card-body">
                            <div class="cals-icon">
                                <svg width="40px" height="40px" viewBox="0 0 48 48" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="bepo-pictogram-svg _2bvj2j0">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.79999 15.85C5.2142 15.85 5.54999 16.1858 5.54999 16.6V23.8592C5.54999 24.2734 5.2142 24.6092 4.79999 24.6092C4.38577 24.6092 4.04999 24.2734 4.04999 23.8592V16.6C4.04999 16.1858 4.38577 15.85 4.79999 15.85Z"
                                        fill="#1B1B1A" class="bepo-2-pictogram--color-primary"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9.59998 11.05C10.0142 11.05 10.35 11.3858 10.35 11.8V27.4C10.35 27.8142 10.0142 28.15 9.59998 28.15C9.18576 28.15 8.84998 27.8142 8.84998 27.4V11.8C8.84998 11.3858 9.18576 11.05 9.59998 11.05Z"
                                        fill="#1B1B1A" class="bepo-2-pictogram--color-primary"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.4 7.45001C14.8142 7.45001 15.15 7.7858 15.15 8.20001V31C15.15 31.4142 14.8142 31.75 14.4 31.75C13.9857 31.75 13.65 31.4142 13.65 31V8.20001C13.65 7.7858 13.9857 7.45001 14.4 7.45001Z"
                                        fill="#FC6423" class="bepo-2-pictogram--color-secondary"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M19.2 13.45C19.6142 13.45 19.95 13.7858 19.95 14.2V20.2C19.95 20.6142 19.6142 20.95 19.2 20.95C18.7858 20.95 18.45 20.6142 18.45 20.2V14.2C18.45 13.7858 18.7858 13.45 19.2 13.45Z"
                                        fill="#1B1B1A" class="bepo-2-pictogram--color-primary"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M24 11.05C24.4142 11.05 24.75 11.3858 24.75 11.8V20.2C24.75 20.6142 24.4142 20.95 24 20.95C23.5858 20.95 23.25 20.6142 23.25 20.2V11.8C23.25 11.3858 23.5858 11.05 24 11.05Z"
                                        fill="#1B1B1A" class="bepo-2-pictogram--color-primary"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M28.8 15.85C29.2142 15.85 29.55 16.1858 29.55 16.6V20.2C29.55 20.6143 29.2142 20.95 28.8 20.95C28.3858 20.95 28.05 20.6143 28.05 20.2V16.6C28.05 16.1858 28.3858 15.85 28.8 15.85Z"
                                        fill="#1B1B1A" class="bepo-2-pictogram--color-primary"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M18.45 27.4C18.45 25.6603 19.8603 24.25 21.6 24.25H34.8C36.5397 24.25 37.95 25.6603 37.95 27.4V38.2C37.95 39.9397 36.5397 41.35 34.8 41.35H21.6C19.8603 41.35 18.45 39.9397 18.45 38.2V27.4ZM21.6 25.75C20.6887 25.75 19.95 26.4887 19.95 27.4V38.2C19.95 39.1113 20.6887 39.85 21.6 39.85H34.8C35.7113 39.85 36.45 39.1113 36.45 38.2V27.4C36.45 26.4887 35.7113 25.75 34.8 25.75H21.6Z"
                                        fill="#1B1B1A" class="bepo-2-pictogram--color-primary"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M40.9577 27.0038C42.1726 26.0521 43.95 26.9177 43.95 28.4609V36.9392C43.95 38.4824 42.1726 39.3479 40.9578 38.3963L38.1546 36.2005C37.0786 35.3577 36.45 34.0668 36.45 32.7C36.45 31.3333 37.0786 30.0425 38.1545 29.1997L40.9577 27.0038ZM42.45 28.4609C42.45 28.1683 42.113 28.0042 41.8827 28.1846L39.0795 30.3805C38.3665 30.939 37.95 31.7944 37.95 32.7C37.95 33.6057 38.3665 34.4611 39.0795 35.0196L41.8828 37.2154C42.1131 37.3958 42.45 37.2317 42.45 36.9392V28.4609Z"
                                        fill="#1B1B1A" class="bepo-2-pictogram--color-primary"></path>
                                </svg>
                            </div>
                            <p class="mb-0 fs-20 fw-semibold lh-1 text-dark">
                                Voice
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                <a onclick="showBroadcast('whatsapp-broadcast')">
                    <div class="card card-bg-light text-center" id="card-tab">
                        <div class="card-body">
                            <div class="cals-icon">
                                <svg width="40px" height="40px" viewBox="0 0 40 40" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="bepo-pictogram-svg _2bvj2j0">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M31.2812 8.65007C28.2879 5.65292 24.3069 4.00152 20.0651 4C11.3246 4 4.21111 11.1127 4.20807 19.8555C4.20655 22.6504 4.93721 25.3784 6.32478 27.7826L4.07501 36L12.481 33.7951C14.7969 35.0588 17.4048 35.724 20.0583 35.7248H20.0651C28.8041 35.7248 35.9184 28.6113 35.9214 19.8685C35.9229 15.6313 34.2753 11.648 31.2812 8.65083V8.65007ZM20.0651 33.047H20.0598C17.6952 33.0462 15.3755 32.4106 13.3516 31.21L12.8703 30.9242L7.8819 32.2327L9.2132 27.3689L8.89995 26.8702C7.58081 24.7717 6.8836 22.3463 6.88512 19.8563C6.88817 12.59 12.8003 6.67782 20.0705 6.67782C23.5907 6.67934 26.8996 8.05171 29.3881 10.5432C31.8766 13.034 33.2459 16.346 33.2444 19.867C33.2413 27.134 27.3292 33.0462 20.0651 33.0462V33.047ZM27.2942 23.1766C26.898 22.9782 24.9502 22.0201 24.5867 21.8879C24.2233 21.7555 23.9595 21.6895 23.6956 22.0863C23.4318 22.4832 22.6723 23.3758 22.4411 23.6396C22.21 23.9042 21.9788 23.9369 21.5827 23.7384C21.1866 23.54 19.91 23.1218 18.3963 21.7723C17.2186 20.7215 16.4232 19.4245 16.1921 19.0275C15.961 18.6307 16.1678 18.4163 16.3654 18.2193C16.5433 18.0414 16.7616 17.7563 16.96 17.5252C17.1585 17.294 17.2239 17.1283 17.3561 16.8645C17.4885 16.5999 17.4223 16.3688 17.3235 16.1703C17.2246 15.9719 16.4324 14.0216 16.1016 13.2287C15.78 12.4562 15.4531 12.5611 15.2106 12.5482C14.9794 12.5368 14.7156 12.5345 14.451 12.5345C14.1864 12.5345 13.7576 12.6333 13.3942 13.0302C13.0308 13.4271 12.0073 14.3858 12.0073 16.3353C12.0073 18.2847 13.4269 20.1696 13.6253 20.4342C13.8237 20.6988 16.4194 24.7003 20.3936 26.4171C21.3387 26.8253 22.0769 27.0694 22.6524 27.2519C23.6014 27.5537 24.465 27.5112 25.1478 27.4092C25.9089 27.2952 27.4919 26.4505 27.8218 25.5252C28.1518 24.5999 28.1518 23.8061 28.053 23.6411C27.9542 23.4761 27.6896 23.3765 27.2934 23.1781L27.2942 23.1766Z"
                                        fill="#25D366"></path>
                                </svg>
                            </div>
                            <p class="mb-0 fs-20 fw-semibold lh-1 text-dark">WhatsApp</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                <a onclick="showBroadcast('sms-broadcast')">
                    <div class="card card-bg-light text-center" id="card-tab">
                        <div class="card-body">
                            <div class="cals-icon">
                                <svg width="40px" height="40px" viewBox="0 0 48 48" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="bepo-pictogram-svg _2bvj2j0">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M19.2 13.6134C18.7581 13.6134 18.4 13.9716 18.4 14.4134C18.4 14.8552 18.7581 15.2134 19.2 15.2134H28.7776C29.2194 15.2134 29.5776 14.8552 29.5776 14.4134C29.5776 13.9716 29.2194 13.6134 28.7776 13.6134H19.2ZM19.2 18.4134C18.7581 18.4134 18.4 18.7716 18.4 19.2134C18.4 19.6552 18.7581 20.0134 19.2 20.0134H26.4649C26.9067 20.0134 27.2649 19.6552 27.2649 19.2134C27.2649 18.7716 26.9067 18.4134 26.4649 18.4134H19.2Z"
                                        fill="#FC6423" class="bepo-2-pictogram--color-secondary">
                                    </path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M11.16 5.61337C10.9584 5.61337 10.7651 5.69344 10.6226 5.83597C10.4801 5.97849 10.4 6.1718 10.4 6.37337V39.4515C10.4008 39.6013 10.4459 39.7476 10.5297 39.8718C10.6136 39.9965 10.7326 40.0934 10.8717 40.1504C11.0107 40.2074 11.1635 40.2219 11.3108 40.1921C11.4581 40.1623 11.5932 40.0895 11.6991 39.9829L11.7016 39.9804L18.1782 33.5171C18.3934 33.2976 18.6498 33.1224 18.9326 33.0017C19.2173 32.8802 19.5233 32.8162 19.8328 32.8134L19.84 32.8133L36.84 32.8134C37.0416 32.8134 37.2349 32.7333 37.3774 32.5908C37.5199 32.4482 37.6 32.2549 37.6 32.0534V6.37337C37.6 6.1718 37.5199 5.97849 37.3774 5.83597C37.2349 5.69344 37.0415 5.61337 36.84 5.61337H11.16ZM9.49122 4.70459C9.9338 4.26201 10.5341 4.01337 11.16 4.01337H36.84C37.4659 4.01337 38.0662 4.26201 38.5088 4.70459C38.9513 5.14718 39.2 5.74746 39.2 6.37337V32.0534C39.2 32.6793 38.9513 33.2796 38.5088 33.7221C38.0662 34.1647 37.4659 34.4134 36.84 34.4134H19.8442C19.7467 34.4146 19.6504 34.435 19.5607 34.4732C19.4702 34.5119 19.3881 34.5681 19.3193 34.6386L19.3118 34.6464L12.8342 41.1105C12.8337 41.111 12.8332 41.1115 12.8328 41.112C12.5041 41.4422 12.085 41.6678 11.6283 41.7603C11.171 41.8529 10.6965 41.8078 10.2647 41.6308C9.83295 41.4538 9.46337 41.1528 9.20267 40.7658C8.94196 40.3787 8.80183 39.9231 8.79999 39.4565L8.79999 39.4534V6.37337C8.79999 5.74746 9.04863 5.14718 9.49122 4.70459Z"
                                        fill="#1B1B1A" class="bepo-2-pictogram--color-primary"></path>
                                </svg>
                            </div>
                            <p class="mb-0 fs-20 fw-semibold lh-1 text-dark">SMS</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                <a onclick="showBroadcast('email-broadcast')">
                    <div class="card card-bg-light text-center" id="card-tab">
                        <div class="card-body">
                            <div class="cals-icon">
                                <svg width="40px" height="40px" viewBox="0 0 48 48" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="bepo-pictogram-svg _2bvj2j0">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M39.2472 11.2019C39.5559 11.1976 39.8625 11.2543 40.1493 11.3687C40.4384 11.4842 40.7017 11.656 40.9237 11.8743C41.1457 12.0925 41.3221 12.3528 41.4424 12.64C41.5628 12.9271 41.6247 13.2353 41.6247 13.5466V34.4399C41.6247 34.7495 41.5637 35.0562 41.4452 35.3423C41.3267 35.6283 41.153 35.8883 40.934 36.1072C40.7151 36.3262 40.4551 36.4999 40.169 36.6184C39.883 36.7369 39.5763 36.7979 39.2667 36.7979H8.77334C8.14796 36.7979 7.5482 36.5495 7.10599 36.1072C6.66378 35.665 6.41534 35.0653 6.41534 34.4399V13.5599C6.41534 13.2502 6.47634 12.9436 6.59484 12.6575C6.71334 12.3714 6.88703 12.1115 7.10599 11.8925C7.32495 11.6736 7.58489 11.4999 7.87098 11.3814C8.15707 11.2629 8.46369 11.2019 8.77334 11.2019H39.2472ZM39.2671 12.7978L39.2533 12.7979H8.77334C8.67327 12.7979 8.57419 12.8176 8.48174 12.8559C8.38929 12.8942 8.30529 12.9503 8.23453 13.0211C8.16377 13.0918 8.10764 13.1758 8.06935 13.2683C8.03105 13.3607 8.01134 13.4598 8.01134 13.5599V34.4399C8.01134 34.642 8.09163 34.8358 8.23453 34.9787C8.37743 35.1216 8.57125 35.2019 8.77334 35.2019H39.2667C39.3667 35.2019 39.4658 35.1822 39.5583 35.1439C39.6507 35.1056 39.7347 35.0495 39.8055 34.9787C39.8763 34.9079 39.9324 34.8239 39.9707 34.7315C40.009 34.639 40.0287 34.54 40.0287 34.4399V13.5466C40.0287 13.4471 40.0089 13.3486 39.9705 13.2569C39.9321 13.1652 39.8758 13.0821 39.8049 13.0124C39.734 12.9427 39.6499 12.8879 39.5576 12.851C39.4653 12.8142 39.3665 12.7961 39.2671 12.7978Z"
                                        fill="#1B1B1A" class="bepo-2-pictogram--color-primary"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M8.96597 13.882C9.24692 13.5425 9.74995 13.495 10.0895 13.7759L22.5087 24.0517L22.5227 24.0635C22.9328 24.419 23.4573 24.6147 24 24.6147C24.5427 24.6147 25.0672 24.419 25.4773 24.0635L25.4904 24.0524L37.8715 13.7767C38.2107 13.4953 38.7138 13.542 38.9952 13.8812C39.2767 14.2203 39.23 14.7234 38.8908 15.0049L26.5158 25.2754C25.8166 25.8787 24.9237 26.2107 24 26.2107C23.0765 26.2107 22.1838 25.8788 21.4846 25.2758L9.07208 15.0056C8.73252 14.7246 8.68501 14.2216 8.96597 13.882Z"
                                        fill="#FC6423" class="bepo-2-pictogram--color-secondary">
                                    </path>
                                </svg>
                            </div>
                            <p class="mb-0 fs-20 fw-semibold lh-1 text-dark">Email</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>





        {{--  <div class="row">
            <!-- Voice Broadcast -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                <a onclick="showBroadcast('voice-broadcast')">
                    <div class="card border border-primary text-center">
                        <div class="card-body">
                            <div class="icon-container mb-3">
                                <!-- Voice Icon -->
                                <svg width="40px" height="40px" viewBox="0 0 48 48" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <!-- SVG content here -->
                                </svg>
                            </div>
                            <p class="mb-0 fs-20 fw-semibold text-primary">Voice</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- WhatsApp Broadcast -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                <a onclick="showBroadcast('whatsapp-broadcast')">
                    <div class="card card-bg-light text-center">
                        <div class="card-body">
                            <div class="icon-container mb-3">
                                <!-- WhatsApp Icon -->
                                <svg width="40px" height="40px" viewBox="0 0 40 40" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <!-- SVG content here -->
                                </svg>
                            </div>
                            <p class="mb-0 fs-20 fw-semibold text-success">WhatsApp</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- SMS Broadcast -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                <a onclick="showBroadcast('sms-broadcast')">
                    <div class="card card-bg-light text-center">
                        <div class="card-body">
                            <div class="icon-container mb-3">
                                <!-- SMS Icon -->
                                <svg width="40px" height="40px" viewBox="0 0 48 48" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <!-- SVG content here -->
                                </svg>
                            </div>
                            <p class="mb-0 fs-20 fw-semibold text-warning">SMS</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>  --}}




        <!-- Navigation Buttons -->
        {{--  
        <a onclick="showBroadcast('voice-broadcast')">Voice Broadcast</a>
        <a onclick="showBroadcast('whatsapp-broadcast')">WhatsApp Broadcast</a>
        <a onclick="showBroadcast('sms-broadcast')">SMS Broadcast</a>
        <a onclick="showBroadcast('email-broadcast')">Email Broadcast</a>
        --}}

        <!-- Broadcast Sections -->
        <div id="voice-broadcast" class="broadcast">
            {{--  <h1>Voice Broadcast</h1>  --}}
            @component('components.b-voice')
            @endcomponent
        </div>
        <div id="whatsapp-broadcast" class="broadcast">
            {{--  <h1>WhatsApp Broadcast</h1>  --}}
            @component('components.b-whatsapp')
            @endcomponent
        </div>
        <div id="sms-broadcast" class="broadcast">
            {{--  <h1>SMS Broadcast</h1>  --}}
            @component('components.b-sms')
            @endcomponent
        </div>
        <div id="email-broadcast" class="broadcast">
            {{--  <h1>Email Broadcast</h1>  --}}
            @component('components.b-email')
            @endcomponent
        </div>


    </div>
</div>
@endsection

@section('script')
<script>
    function showBroadcast(id) {
        // Hide all broadcast sections
        const sections = document.querySelectorAll('.broadcast');
        sections.forEach(section => {
            section.style.display = 'none';
        });

        // Show the selected section
        const selectedSection = document.getElementById(id);
        if (selectedSection) {
            selectedSection.style.display = 'block';
        }
    }
</script>

{{--  <script>
    function showBroadcast(id) {
        // Hide all broadcast sections
        const sections = document.querySelectorAll('.broadcast');
        sections.forEach(section => section.style.display = 'none');
    
        // Show the selected section
        const selectedSection = document.getElementById(id);
        const selectedTab = document.querySelector('#card-tab');
        
        if (selectedSection) {
            selectedSection.style.display = 'block';
    
            // Toggle classes: remove 'card-bg-light' and add 'border border-primary'
            selectedTab.classList.remove('card-bg-light');  // Remove the old class
            selectedTab.classList.add('border', 'border-primary');  // Add the new classes
        }
    }
    
</script>  --}}

<script>
    document.getElementById('failoverSwitch').addEventListener('change', function() {
        const smsOptions = document.getElementById('smsOptions');
        if (this.checked) {
            smsOptions.style.display = 'block'; // Show the SMS options
        } else {
            smsOptions.style.display = 'none'; // Hide the SMS options
        }
    });
</script>
@endsection
