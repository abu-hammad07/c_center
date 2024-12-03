<?php $page = 'broadcast-sms'; ?>
@section('directry')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
            <li class="breadcrumb-item"><a href="#">Broadcast</a></li>
            <li class="breadcrumb-item active" aria-current="page">SMS Broadcast</li>
        </ol>
    </nav>
@endsection
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content settings-content">

            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <a href="{{ route('broadcast.voice') }}">
                        <div class="card card-bg-light text-center">
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
                                <p class="mb-0 fs-20 fw-semibold lh-1 text-dark">Voice</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <a href="{{ route('broadcast.whatsapp') }}">
                        <div class="card card-bg-light text-center">
                            <div class="card-body">
                                <div class="cals-icon">
                                    <svg width="40px" height="40px" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="bepo-pictogram-svg _2bvj2j0">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M31.2812 8.65007C28.2879 5.65292 24.3069 4.00152 20.0651 4C11.3246 4 4.21111 11.1127 4.20807 19.8555C4.20655 22.6504 4.93721 25.3784 6.32478 27.7826L4.07501 36L12.481 33.7951C14.7969 35.0588 17.4048 35.724 20.0583 35.7248H20.0651C28.8041 35.7248 35.9184 28.6113 35.9214 19.8685C35.9229 15.6313 34.2753 11.648 31.2812 8.65083V8.65007ZM20.0651 33.047H20.0598C17.6952 33.0462 15.3755 32.4106 13.3516 31.21L12.8703 30.9242L7.8819 32.2327L9.2132 27.3689L8.89995 26.8702C7.58081 24.7717 6.8836 22.3463 6.88512 19.8563C6.88817 12.59 12.8003 6.67782 20.0705 6.67782C23.5907 6.67934 26.8996 8.05171 29.3881 10.5432C31.8766 13.034 33.2459 16.346 33.2444 19.867C33.2413 27.134 27.3292 33.0462 20.0651 33.0462V33.047ZM27.2942 23.1766C26.898 22.9782 24.9502 22.0201 24.5867 21.8879C24.2233 21.7555 23.9595 21.6895 23.6956 22.0863C23.4318 22.4832 22.6723 23.3758 22.4411 23.6396C22.21 23.9042 21.9788 23.9369 21.5827 23.7384C21.1866 23.54 19.91 23.1218 18.3963 21.7723C17.2186 20.7215 16.4232 19.4245 16.1921 19.0275C15.961 18.6307 16.1678 18.4163 16.3654 18.2193C16.5433 18.0414 16.7616 17.7563 16.96 17.5252C17.1585 17.294 17.2239 17.1283 17.3561 16.8645C17.4885 16.5999 17.4223 16.3688 17.3235 16.1703C17.2246 15.9719 16.4324 14.0216 16.1016 13.2287C15.78 12.4562 15.4531 12.5611 15.2106 12.5482C14.9794 12.5368 14.7156 12.5345 14.451 12.5345C14.1864 12.5345 13.7576 12.6333 13.3942 13.0302C13.0308 13.4271 12.0073 14.3858 12.0073 16.3353C12.0073 18.2847 13.4269 20.1696 13.6253 20.4342C13.8237 20.6988 16.4194 24.7003 20.3936 26.4171C21.3387 26.8253 22.0769 27.0694 22.6524 27.2519C23.6014 27.5537 24.465 27.5112 25.1478 27.4092C25.9089 27.2952 27.4919 26.4505 27.8218 25.5252C28.1518 24.5999 28.1518 23.8061 28.053 23.6411C27.9542 23.4761 27.6896 23.3765 27.2934 23.1781L27.2942 23.1766Z"
                                            fill="#25D366"></path>
                                    </svg>
                                </div>
                                <p class="mb-0 fs-20 fw-semibold lh-1">WhatsApp</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <a href="{{ route('broadcast.sms') }}">
                        <div class="card border border-primary text-center">
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
                    <a href="{{ route('broadcast.email') }}">
                        <div class="card card-bg-light text-center">
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


            <div class="page-header settings-pg-header">
                <div class="add-item d-flex">
                    <div class="page-title">
                        <h1>SMS Broadcasts</h4>
                    </div>
                </div>
                <ul class="table-top-head">
                    <li>
                        <div class="page-btn">
                            <a href="{{ url('broadcast') }}" class="btn btn-secondary"><i data-feather="arrow-left"
                                    class="me-2"></i>Back to Broadcast</a>
                        </div>
                    </li>
                    <li>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i
                                data-feather="chevron-up" class="feather-chevron-up"></i></a>
                    </li>
                </ul>
            </div>


            <!-- /add -->
            <form action="{{ route('broadcast') }}">
                <div class="card">
                    <div class="card-body add-product pb-0">
                        <div class="accordion-card-one accordion" id="accordionExample">
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingOne">
                                    <div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                        aria-controls="collapseOne">
                                        <div class="addproduct-icon">
                                            <h5><i data-feather="info" class="add-info"></i><span>Recipients and
                                                    message</span>
                                            </h5>
                                            <a href="javascript:void(0);"><i data-feather="chevron-down"
                                                    class="chevron-down-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-blocks">
                                                    <label>Recipients</label>
                                                    <select class="js-example-placeholder-multiple select2 js-states"
                                                        multiple="multiple">
                                                        <option value="">Type of select the recipients name</option>
                                                        <option>Thomas</option>
                                                        <option>Rasmussen</option>
                                                        <option>Fred john</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-blocks">
                                                    <label>Sender</label>
                                                    <select class="js-example-basic-single select2">
                                                        <option value="" disabled selected hidden>Type or select the
                                                            sender number</option>
                                                        <option>+923 4567890123</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <div class="form-check form-check-md form-switch">
                                                    <input class="form-check-input" type="checkbox" id="failoverSwitch">
                                                    <label class="form-check-label fw-bold" for="failoverSwitch">Failover
                                                        to SMS</label>
                                                    <p class="fs-15">Make sure your messages get delivered to customers
                                                        through SMS when they cannot receive a WhatsApp message.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="smsOptions" style="display: none;">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="input-blocks">
                                                        <label>Sender</label>
                                                        <select class="js-example-basic-single select2">
                                                            <option value="" disabled selected hidden>Type or select the
                                                                sender number</option>
                                                            <option>+923 4567890123</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="input-blocks">
                                                        <label>Description</label>
                                                        <textarea class="form-control h-100" rows="5"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="input-blocks">
                                                        <label>Character set</label>
                                                        <select class="js-example-basic-single select2">
                                                            <option value="" disabled selected hidden>Character set
                                                            </option>
                                                            <option value="unicode">Unicode</option>
                                                            <option value="default" selected>Default</option>
                                                            <option value="greek">Greek</option>
                                                            <option value="cyrillic">Cyrillic</option>
                                                            <option value="central_european">Central European</option>
                                                            <option value="turkish">Turkish</option>
                                                            <option value="serbian_cyrillic">Serbian Cyrillic</option>
                                                            <option value="baltic">Baltic</option>
                                                            <option value="bulgarian_cyrillic">Bulgarian Cyrillic</option>
                                                            <option value="portuguese">Portuguese</option>
                                                            <option value="spanish">Spanish</option>
                                                            <option value="turkish_nli">Turkish NLI</option>
                                                            <option value="portuguese_nli">Portuguese NLI</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card-one accordion" id="accordionExample2">
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingTwo">
                                    <div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                        aria-controls="collapseTwo">
                                        <div class="text-editor add-list">
                                            <div class="addproduct-icon list icon">
                                                <h5><i data-feather="watch" class="add-info"></i><span>
                                                        Message scheduling</span></h5>
                                                <a href="javascript:void(0);"><i data-feather="chevron-down"
                                                        class="chevron-down-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapseTwo" class="accordion-collapse collapse show"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <h5>Campaign time zone</h5>
                                        <div class="row mt-2">
                                            <div class="col-md-6">
                                                <div class="input-blocks">
                                                    <label>Time zone</label>
                                                    <select class="js-example-basic-single select2">
                                                        <option>United Arab Emirates / Abu Dhabi (GST)</option>
                                                        <option>Ghana / Accra (GMT)</option>
                                                        <option>Australia / Adelaide (ACST/ACDT)</option>
                                                        <option>Ethiopia / Addis Ababa (EAT)</option>
                                                        <option>Qatar / Doha (AST)</option>
                                                        <option>Jordan / Amman (EET/EEST)</option>
                                                        <option>United States / Adak (HST/HDT)</option>
                                                        <option>Algeria / Algiers (CET)</option>
                                                        <option>Bahrain / Manama (AST)</option>
                                                        <option>Netherlands / Amsterdam (CET/CEST)</option>
                                                        <option>Russia / Anadyr (ANAT)</option>
                                                        <option>United States / Anchorage (AKST/AKDT)</option>
                                                        <option>Turkey / Ankara (TRT)</option>
                                                        <option>Madagascar / Antananarivo (EAT)</option>
                                                        <option>Paraguay / Asuncion (PYT/PYST)</option>
                                                        <option>Greece / Athens (EET/EEST)</option>
                                                        <option>Iraq / Baghdad (AST)</option>
                                                        <option>Thailand / Bangkok (ICT)</option>
                                                        <option>Mali / Bamako (GMT)</option>
                                                        <option>Gambia / Banjul (GMT)</option>
                                                        <option>China / Beijing (CST)</option>
                                                        <option>Lebanon / Beirut (EET/EEST)</option>
                                                        <option>Serbia / Belgrade (CET/CEST)</option>
                                                        <option>Belize / Belmopan (CST)</option>
                                                        <option>Germany / Berlin (CET/CEST)</option>
                                                        <option>Bermuda / Hamilton (AST/ADT)</option>
                                                        <option>Guinea-Bissau / Bissau (GMT)</option>
                                                        <option>Colombia / Bogota (COT)</option>
                                                        <option>Brazil / Brasilia (BRT)</option>
                                                        <option>Barbados / Bridgetown (AST)</option>
                                                        <option>Australia / Brisbane (AEST)</option>
                                                        <option>Belgium / Brussels (CET/CEST)</option>
                                                        <option>Romania / Bucharest (EET/EEST)</option>
                                                        <option>Hungary / Budapest (CET/CEST)</option>
                                                        <option>Argentina / Buenos Aires (ART)</option>
                                                        <option>Egypt / Cairo (EET)</option>
                                                        <option>Canada / Calgary (MST/MDT)</option>
                                                        <option>Venezuela / Caracas (VET)</option>
                                                        <option>Morocco / Casablanca (WET/WEST)</option>
                                                        <option>French Guiana / Cayenne (GFT)</option>
                                                        <option>New Zealand / Chatham Islands (CHAST/CHADT)</option>
                                                        <option>United States / Chicago (CST/CDT)</option>
                                                        <option>Guinea / Conakry (GMT)</option>
                                                        <option>Denmark / Copenhagen (CET/CEST)</option>
                                                        <option>Australia / Darwin (ACST)</option>
                                                        <option>Bangladesh / Dhaka (BST)</option>
                                                        <option>Senegal / Dakar (GMT)</option>
                                                        <option>United States / Denver (MST/MDT)</option>
                                                        <option>Ireland / Dublin (GMT/IST)</option>
                                                        <option>Fiji / Suva (FJT/FJT)</option>
                                                        <option>Sierra Leone / Freetown (GMT)</option>
                                                        <option>Botswana / Gaborone (CAT)</option>
                                                        <option>Guyana / Georgetown (GYT)</option>
                                                        <option>Gibraltar / Gibraltar (CET/CEST)</option>
                                                        <option>Guam / Hagåtña (ChST)</option>
                                                        <option>Guatemala / Guatemala City (CST)</option>
                                                        <option>Vietnam / Hanoi (ICT)</option>
                                                        <option>Zimbabwe / Harare (CAT)</option>
                                                        <option>Cuba / Havana (CST/CDT)</option>
                                                        <option>Finland / Helsinki (EET/EEST)</option>
                                                        <option>Hong Kong / Hong Kong (HKT)</option>
                                                        <option>United States / Honolulu (HST)</option>
                                                        <option selected>Pakistan / Islamabad (PKT)</option>
                                                        <option>Indonesia / Jakarta (WIB)</option>
                                                        <option>Israel / Jerusalem (IST/IDT)</option>
                                                        <option>South Africa / Johannesburg (SAST)</option>
                                                        <option>Afghanistan / Kabul (AFT)</option>
                                                        <option>Uganda / Kampala (EAT)</option>
                                                        <option>Nepal / Kathmandu (NPT)</option>
                                                        <option>Sudan / Khartoum (CAT)</option>
                                                        <option>Rwanda / Kigali (CAT)</option>
                                                        <option>Jamaica / Kingston (EST)</option>
                                                        <option>Congo Democratic Republic / Kinshasa (WAT)</option>
                                                        <option>Malaysia / Kuala Lumpur (MYT)</option>
                                                        <option>Kuwait / Kuwait City (AST)</option>
                                                        <option>Nigeria / Lagos (WAT)</option>
                                                        <option>Gabon / Libreville (WAT)</option>
                                                        <option>Malawi / Lilongwe (CAT)</option>
                                                        <option>Peru / Lima (PET)</option>
                                                        <option>Portugal / Lisbon (WET/WEST)</option>
                                                        <option>Togo / Lomé (GMT)</option>
                                                        <option>United Kingdom / London (GMT/BST)</option>
                                                        <option>United States / Los Angeles (PST/PDT)</option>
                                                        <option>Angola / Luanda (WAT)</option>
                                                        <option>Congo Democratic Republic / Lubumbashi (CAT)</option>
                                                        <option>Zambia / Lusaka (CAT)</option>
                                                        <option>Spain / Madrid (CET/CEST)</option>
                                                        <option>Nicaragua / Managua (CST)</option>
                                                        <option>Brazil / Manaus (AMT)</option>
                                                        <option>Philippines / Manila (PHT)</option>
                                                        <option>Mozambique / Maputo (CAT)</option>
                                                        <option>Lesotho / Maseru (SAST)</option>
                                                        <option>Mexico / Mazatlan (MST/MDT)</option>
                                                        <option>eSwatini / Mbabane (SAST)</option>
                                                        <option>Australia / Melbourne (AEST/AEDT)</option>
                                                        <option>Mexico / Mexicali (PST/PDT)</option>
                                                        <option>Mexico / Mexico City (CST/CDT)</option>
                                                        <option>Somalia / Mogadishu (EAT)</option>
                                                        <option>Liberia / Monrovia (GMT)</option>
                                                        <option>Uruguay / Montevideo (UYT)</option>
                                                        <option>Canada / Montréal (EST/EDT)</option>
                                                        <option>Russia / Moscow (MSK)</option>
                                                        <option>Oman / Muscat (GST)</option>
                                                        <option>Kenya / Nairobi (EAT)</option>
                                                        <option>The Bahamas / Nassau (EST/EDT)</option>
                                                        <option>Chad / N'Djamena (WAT)</option>
                                                        <option>Canada / St. John's (NST/NDT)</option>
                                                        <option>India / New Delhi (IST)</option>
                                                        <option>Moldova / Chișinău (EET/EEST)</option>
                                                        <option>Niger / Niamey (WAT)</option>
                                                        <option>Mauritania / Nouakchott (GMT)</option>
                                                        <option>Burkina Faso / Ouagadougou (GMT)</option>
                                                        <option>Norway / Oslo (CET/CEST)</option>
                                                        <option>Ecuador / Quito (ECT)</option>
                                                        <option>Panama / Panama (EST)</option>
                                                        <option>Papua New Guinea / Port Moresby (PGT)</option>
                                                        <option>Suriname / Paramaribo (SRT)</option>
                                                        <option>France / Paris (CET/CEST)</option>
                                                        <option>Australia / Perth (AWST)</option>
                                                        <option>United States / Phoenix (MST)</option>
                                                        <option>Cambodia / Phnom Penh (ICT)</option>
                                                        <option>Mauritius / Port Louis (MUT)</option>
                                                        <option>Benin / Porto Novo (WAT)</option>
                                                        <option>Czechia / Prague (CET/CEST)</option>
                                                        <option>North Korea / Pyongyang (KST)</option>
                                                        <option>Myanmar / Yangon (MMT)</option>
                                                        <option>Canada / Regina (CST)</option>
                                                        <option>Iceland / Reykjavik (GMT)</option>
                                                        <option>Saudi Arabia / Riyadh (AST)</option>
                                                        <option>Italy / Rome (CET/CEST)</option>
                                                        <option>Reunion / Saint-Denis (RET)</option>
                                                        <option>Costa Rica / San Jose (CST)</option>
                                                        <option>Puerto Rico / San Juan (AST)</option>
                                                        <option>El Salvador / San Salvador (CST)</option>
                                                        <option>Chile / Santiago (CLT/CLST)</option>
                                                        <option>South Korea / Seoul (KST)</option>
                                                        <option>Singapore / Singapore (SGT)</option>
                                                        <option>Australia / Sydney (AEST/AEDT)</option>
                                                        <option>South Sudan / Juba (CAT)</option>
                                                        <option>Sweden / Stockholm (CET/CEST)</option>
                                                        <option>Norfolk Island / Kingston (NFT)</option>
                                                        <option>Poland / Warsaw (CET/CEST)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                        <h5>Communication start</h5>
                                        <div class="row mt-2">
                                            <div class="col-md-4">
                                                <div class="input-blocks">
                                                    <label>Start date</label>
                                                    <div class="input-groupicon calender-input">
                                                        <i data-feather="calendar" class="info-img"></i>
                                                        <input type="text" class="datetimepicker"
                                                            placeholder="Choose Date">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="input-blocks">
                                                    <label>Start time</label>
                                                    <select class="js-example-basic-single select2">
                                                        <option value="00:00">00:00</option>
                                                        <option value="00:15">00:15</option>
                                                        <option value="00:30">00:30</option>
                                                        <option value="00:45">00:45</option>
                                                        <option value="01:00">01:00</option>
                                                        <option value="01:15">01:15</option>
                                                        <option value="01:30">01:30</option>
                                                        <option value="01:45">01:45</option>
                                                        <option value="02:00">02:00</option>
                                                        <option value="02:15">02:15</option>
                                                        <option value="02:30">02:30</option>
                                                        <option value="02:45">02:45</option>
                                                        <option value="03:00">03:00</option>
                                                        <option value="03:15">03:15</option>
                                                        <option value="03:30">03:30</option>
                                                        <option value="03:45">03:45</option>
                                                        <option value="04:00">04:00</option>
                                                        <option value="04:15">04:15</option>
                                                        <option value="04:30">04:30</option>
                                                        <option value="04:45">04:45</option>
                                                        <option value="05:00">05:00</option>
                                                        <option value="05:15">05:15</option>
                                                        <option value="05:30">05:30</option>
                                                        <option value="05:45">05:45</option>
                                                        <option value="06:00">06:00</option>
                                                        <option value="06:15">06:15</option>
                                                        <option value="06:30">06:30</option>
                                                        <option value="06:45">06:45</option>
                                                        <option value="07:00">07:00</option>
                                                        <option value="07:15">07:15</option>
                                                        <option value="07:30">07:30</option>
                                                        <option value="07:45">07:45</option>
                                                        <option value="08:00">08:00</option>
                                                        <option value="08:15">08:15</option>
                                                        <option value="08:30">08:30</option>
                                                        <option value="08:45">08:45</option>
                                                        <option value="09:00">09:00</option>
                                                        <option value="09:15">09:15</option>
                                                        <option value="09:30">09:30</option>
                                                        <option value="09:45">09:45</option>
                                                        <option value="10:00">10:00</option>
                                                        <option value="10:15">10:15</option>
                                                        <option value="10:30">10:30</option>
                                                        <option value="10:45">10:45</option>
                                                        <option value="11:00">11:00</option>
                                                        <option value="11:15">11:15</option>
                                                        <option value="11:30">11:30</option>
                                                        <option value="11:45">11:45</option>
                                                        <option value="12:00">12:00</option>
                                                        <option value="12:15">12:15</option>
                                                        <option value="12:30">12:30</option>
                                                        <option value="12:45">12:45</option>
                                                        <option value="13:00">13:00</option>
                                                        <option value="13:15">13:15</option>
                                                        <option value="13:30">13:30</option>
                                                        <option value="13:45">13:45</option>
                                                        <option value="14:00">14:00</option>
                                                        <option value="14:15">14:15</option>
                                                        <option value="14:30">14:30</option>
                                                        <option value="14:45">14:45</option>
                                                        <option value="15:00">15:00</option>
                                                        <option value="15:15">15:15</option>
                                                        <option value="15:30">15:30</option>
                                                        <option value="15:45">15:45</option>
                                                        <option value="16:00">16:00</option>
                                                        <option value="16:15">16:15</option>
                                                        <option value="16:30">16:30</option>
                                                        <option value="16:45">16:45</option>
                                                        <option value="17:00">17:00</option>
                                                        <option value="17:15">17:15</option>
                                                        <option value="17:30">17:30</option>
                                                        <option value="17:45">17:45</option>
                                                        <option value="18:00">18:00</option>
                                                        <option value="18:15">18:15</option>
                                                        <option value="18:30">18:30</option>
                                                        <option value="18:45">18:45</option>
                                                        <option value="19:00">19:00</option>
                                                        <option value="19:15">19:15</option>
                                                        <option value="19:30">19:30</option>
                                                        <option value="19:45">19:45</option>
                                                        <option value="20:00">20:00</option>
                                                        <option value="20:15">20:15</option>
                                                        <option value="20:30">20:30</option>
                                                        <option value="20:45">20:45</option>
                                                        <option value="21:00">21:00</option>
                                                        <option value="21:15">21:15</option>
                                                        <option value="21:30">21:30</option>
                                                        <option value="21:45">21:45</option>
                                                        <option value="22:00">22:00</option>
                                                        <option value="22:15">22:15</option>
                                                        <option value="22:30">22:30</option>
                                                        <option value="22:45">22:45</option>
                                                        <option value="23:00">23:00</option>
                                                        <option value="23:15">23:15</option>
                                                        <option value="23:30">23:30</option>
                                                        <option value="23:45">23:45</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                        <h5>Delivery time window</h5>
                                        <div class="row mt-2">
                                            <div class="col-md-4">
                                                <div class="input-blocks">
                                                    <label>Start time</label>
                                                    <select class="js-example-basic-single select2">
                                                        <option value="00:00">00:00</option>
                                                        <option value="00:15">00:15</option>
                                                        <option value="00:30">00:30</option>
                                                        <option value="00:45">00:45</option>
                                                        <option value="01:00">01:00</option>
                                                        <option value="01:15">01:15</option>
                                                        <option value="01:30">01:30</option>
                                                        <option value="01:45">01:45</option>
                                                        <option value="02:00">02:00</option>
                                                        <option value="02:15">02:15</option>
                                                        <option value="02:30">02:30</option>
                                                        <option value="02:45">02:45</option>
                                                        <option value="03:00">03:00</option>
                                                        <option value="03:15">03:15</option>
                                                        <option value="03:30">03:30</option>
                                                        <option value="03:45">03:45</option>
                                                        <option value="04:00">04:00</option>
                                                        <option value="04:15">04:15</option>
                                                        <option value="04:30">04:30</option>
                                                        <option value="04:45">04:45</option>
                                                        <option value="05:00">05:00</option>
                                                        <option value="05:15">05:15</option>
                                                        <option value="05:30">05:30</option>
                                                        <option value="05:45">05:45</option>
                                                        <option value="06:00">06:00</option>
                                                        <option value="06:15">06:15</option>
                                                        <option value="06:30">06:30</option>
                                                        <option value="06:45">06:45</option>
                                                        <option value="07:00">07:00</option>
                                                        <option value="07:15">07:15</option>
                                                        <option value="07:30">07:30</option>
                                                        <option value="07:45">07:45</option>
                                                        <option value="08:00">08:00</option>
                                                        <option value="08:15">08:15</option>
                                                        <option value="08:30">08:30</option>
                                                        <option value="08:45">08:45</option>
                                                        <option value="09:00">09:00</option>
                                                        <option value="09:15">09:15</option>
                                                        <option value="09:30">09:30</option>
                                                        <option value="09:45">09:45</option>
                                                        <option value="10:00">10:00</option>
                                                        <option value="10:15">10:15</option>
                                                        <option value="10:30">10:30</option>
                                                        <option value="10:45">10:45</option>
                                                        <option value="11:00">11:00</option>
                                                        <option value="11:15">11:15</option>
                                                        <option value="11:30">11:30</option>
                                                        <option value="11:45">11:45</option>
                                                        <option value="12:00">12:00</option>
                                                        <option value="12:15">12:15</option>
                                                        <option value="12:30">12:30</option>
                                                        <option value="12:45">12:45</option>
                                                        <option value="13:00">13:00</option>
                                                        <option value="13:15">13:15</option>
                                                        <option value="13:30">13:30</option>
                                                        <option value="13:45">13:45</option>
                                                        <option value="14:00">14:00</option>
                                                        <option value="14:15">14:15</option>
                                                        <option value="14:30">14:30</option>
                                                        <option value="14:45">14:45</option>
                                                        <option value="15:00">15:00</option>
                                                        <option value="15:15">15:15</option>
                                                        <option value="15:30">15:30</option>
                                                        <option value="15:45">15:45</option>
                                                        <option value="16:00">16:00</option>
                                                        <option value="16:15">16:15</option>
                                                        <option value="16:30">16:30</option>
                                                        <option value="16:45">16:45</option>
                                                        <option value="17:00">17:00</option>
                                                        <option value="17:15">17:15</option>
                                                        <option value="17:30">17:30</option>
                                                        <option value="17:45">17:45</option>
                                                        <option value="18:00">18:00</option>
                                                        <option value="18:15">18:15</option>
                                                        <option value="18:30">18:30</option>
                                                        <option value="18:45">18:45</option>
                                                        <option value="19:00">19:00</option>
                                                        <option value="19:15">19:15</option>
                                                        <option value="19:30">19:30</option>
                                                        <option value="19:45">19:45</option>
                                                        <option value="20:00">20:00</option>
                                                        <option value="20:15">20:15</option>
                                                        <option value="20:30">20:30</option>
                                                        <option value="20:45">20:45</option>
                                                        <option value="21:00">21:00</option>
                                                        <option value="21:15">21:15</option>
                                                        <option value="21:30">21:30</option>
                                                        <option value="21:45">21:45</option>
                                                        <option value="22:00">22:00</option>
                                                        <option value="22:15">22:15</option>
                                                        <option value="22:30">22:30</option>
                                                        <option value="22:45">22:45</option>
                                                        <option value="23:00">23:00</option>
                                                        <option value="23:15">23:15</option>
                                                        <option value="23:30">23:30</option>
                                                        <option value="23:45">23:45</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="input-blocks">
                                                    <label>End time</label>
                                                    <select class="js-example-basic-single select2">
                                                        <option value="00:00">00:00</option>
                                                        <option value="00:15">00:15</option>
                                                        <option value="00:30">00:30</option>
                                                        <option value="00:45">00:45</option>
                                                        <option value="01:00">01:00</option>
                                                        <option value="01:15">01:15</option>
                                                        <option value="01:30">01:30</option>
                                                        <option value="01:45">01:45</option>
                                                        <option value="02:00">02:00</option>
                                                        <option value="02:15">02:15</option>
                                                        <option value="02:30">02:30</option>
                                                        <option value="02:45">02:45</option>
                                                        <option value="03:00">03:00</option>
                                                        <option value="03:15">03:15</option>
                                                        <option value="03:30">03:30</option>
                                                        <option value="03:45">03:45</option>
                                                        <option value="04:00">04:00</option>
                                                        <option value="04:15">04:15</option>
                                                        <option value="04:30">04:30</option>
                                                        <option value="04:45">04:45</option>
                                                        <option value="05:00">05:00</option>
                                                        <option value="05:15">05:15</option>
                                                        <option value="05:30">05:30</option>
                                                        <option value="05:45">05:45</option>
                                                        <option value="06:00">06:00</option>
                                                        <option value="06:15">06:15</option>
                                                        <option value="06:30">06:30</option>
                                                        <option value="06:45">06:45</option>
                                                        <option value="07:00">07:00</option>
                                                        <option value="07:15">07:15</option>
                                                        <option value="07:30">07:30</option>
                                                        <option value="07:45">07:45</option>
                                                        <option value="08:00">08:00</option>
                                                        <option value="08:15">08:15</option>
                                                        <option value="08:30">08:30</option>
                                                        <option value="08:45">08:45</option>
                                                        <option value="09:00">09:00</option>
                                                        <option value="09:15">09:15</option>
                                                        <option value="09:30">09:30</option>
                                                        <option value="09:45">09:45</option>
                                                        <option value="10:00">10:00</option>
                                                        <option value="10:15">10:15</option>
                                                        <option value="10:30">10:30</option>
                                                        <option value="10:45">10:45</option>
                                                        <option value="11:00">11:00</option>
                                                        <option value="11:15">11:15</option>
                                                        <option value="11:30">11:30</option>
                                                        <option value="11:45">11:45</option>
                                                        <option value="12:00">12:00</option>
                                                        <option value="12:15">12:15</option>
                                                        <option value="12:30">12:30</option>
                                                        <option value="12:45">12:45</option>
                                                        <option value="13:00">13:00</option>
                                                        <option value="13:15">13:15</option>
                                                        <option value="13:30">13:30</option>
                                                        <option value="13:45">13:45</option>
                                                        <option value="14:00">14:00</option>
                                                        <option value="14:15">14:15</option>
                                                        <option value="14:30">14:30</option>
                                                        <option value="14:45">14:45</option>
                                                        <option value="15:00">15:00</option>
                                                        <option value="15:15">15:15</option>
                                                        <option value="15:30">15:30</option>
                                                        <option value="15:45">15:45</option>
                                                        <option value="16:00">16:00</option>
                                                        <option value="16:15">16:15</option>
                                                        <option value="16:30">16:30</option>
                                                        <option value="16:45">16:45</option>
                                                        <option value="17:00">17:00</option>
                                                        <option value="17:15">17:15</option>
                                                        <option value="17:30">17:30</option>
                                                        <option value="17:45">17:45</option>
                                                        <option value="18:00">18:00</option>
                                                        <option value="18:15">18:15</option>
                                                        <option value="18:30">18:30</option>
                                                        <option value="18:45">18:45</option>
                                                        <option value="19:00">19:00</option>
                                                        <option value="19:15">19:15</option>
                                                        <option value="19:30">19:30</option>
                                                        <option value="19:45">19:45</option>
                                                        <option value="20:00">20:00</option>
                                                        <option value="20:15">20:15</option>
                                                        <option value="20:30">20:30</option>
                                                        <option value="20:45">20:45</option>
                                                        <option value="21:00">21:00</option>
                                                        <option value="21:15">21:15</option>
                                                        <option value="21:30">21:30</option>
                                                        <option value="21:45">21:45</option>
                                                        <option value="22:00">22:00</option>
                                                        <option value="22:15">22:15</option>
                                                        <option value="22:30">22:30</option>
                                                        <option value="22:45">22:45</option>
                                                        <option value="23:00">23:00</option>
                                                        <option value="23:15">23:15</option>
                                                        <option value="23:30">23:30</option>
                                                        <option value="23:45">23:45</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-blocks">
                                                    <label>End time</label>
                                                    <select class="js-example-placeholder-multiple select2 js-states"
                                                        multiple="multiple">
                                                        <option value="Monday">Monday</option>
                                                        <option value="Tuesday">Tuesday</option>
                                                        <option value="Wednesday">Wednesday</option>
                                                        <option value="Thursday">Thursday</option>
                                                        <option value="Friday">Friday</option>
                                                        <option value="Saturday">Saturday</option>
                                                        <option value="Sunday">Sunday</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tracking and reporting -->
                        <div class="accordion-card-one accordion" id="accordionExample4">
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingFour">
                                    <div class="accordion-button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-controls="collapseFour">
                                        <div class="text-editor add-list">
                                            <div class="addproduct-icon list">
                                                <h5><i data-feather="activity" class="add-info"></i><span>
                                                        Tracking and reporting
                                                    </span>
                                                </h5>
                                                <a href="javascript:void(0);"><i data-feather="chevron-down"
                                                        class="chevron-down-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapseFour" class="accordion-collapse collapse show"
                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample4">
                                    <div class="accordion-body">
                                        <div class="text-editor add-list add">
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-check form-check-md form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch"
                                                            id="">
                                                        <label class="form-check-label fw-bold" for="">Shorten
                                                            URLs</label>
                                                        <p class="fs-15">Required to track URL clicks. Short URLs expire
                                                            90 days after the launch.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5>Tracking options</h5>
                                            <div class="row mt-2 p-2">
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-check form-check-md form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch"
                                                            id="">
                                                        <label class="form-check-label fw-bold" for="">Track URL
                                                            clicks</label>
                                                        <p class="fs-15">Discover which campaign links were clicked on,
                                                            how many times, and by whom.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5>Reporting options</h5>
                                            <div class="row mt-2 p-2">
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-check form-check-md form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch"
                                                            id="">
                                                        <label class="form-check-label fw-bold" for="">Enable
                                                            delivery
                                                            reports over API pull</label>
                                                        <p class="fs-15">Discover how many messages were delivered.</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-check form-check-md form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch"
                                                            id="">
                                                        <label class="form-check-label fw-bold" for="">Push
                                                            delivery
                                                            reports to webhook</label>
                                                        <p class="fs-15">Subscribe to events happening in your account
                                                            with your integration installed.</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h6>Data Payload</h6>
                                                    <p class="fs-15">Select additional data from contacts and add it to
                                                        the message. This data will be visible on message reports.
                                                        Learn More</p>
                                                    <div class="input-blocks">
                                                        <select class="js-example-placeholder-multiple select2 js-states"
                                                            multiple="multiple">
                                                            <option value="">Select an attribute</option>
                                                            <!-- Company Attributes -->
                                                            <optgroup label="Company Attributes">
                                                                <option value="externalId">External ID</option>
                                                                <option value="name">Name</option>
                                                                <option value="notes">Notes</option>
                                                                <option value="region">Region</option>
                                                                <option value="country">Country</option>
                                                                <option value="segment">Segment</option>
                                                                <option value="accountManager">Account Manager</option>
                                                                <option value="customerStage">Customer Stage</option>
                                                                <option value="industry">Industry</option>
                                                                <option value="vatNumber">VAT Number</option>
                                                                <option value="domains">Domains</option>
                                                                <option value="tags">Tags</option>
                                                            </optgroup>
                                                            <!-- Contact Information -->
                                                            <optgroup label="Contact Information">
                                                                <option value="msisdn">MSISDN</option>
                                                                <option value="email">Email</option>
                                                            </optgroup>
                                                            <!-- Standard Attributes -->
                                                            <optgroup label="Standard Attributes">
                                                                <option value="firstName">First Name</option>
                                                                <option value="lastName">Last Name</option>
                                                                <option value="type">Type</option>
                                                                <option value="address">Address</option>
                                                                <option value="city">City</option>
                                                                <option value="country">Country</option>
                                                                <option value="gender">Gender</option>
                                                                <option value="birthDate">Birth Date</option>
                                                                <option value="nickName">Nickname</option>
                                                                <option value="middleName">Middle Name</option>
                                                                <option value="origin">Origin</option>
                                                                <option value="modifiedFrom">Modified From</option>
                                                                <option value="externalPersonId">External Person ID
                                                                </option>
                                                                <option value="tags">Tags</option>
                                                                <option value="language">Language</option>
                                                                <option value="integrations">Integrations</option>
                                                                <option value="verificationServiceVerified">Verification
                                                                    Service Verified</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Tracking and reporting -->

                        <div class="accordion-card-one accordion" id="accordionExample4">
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingFour">
                                    <div class="accordion-button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-controls="collapseFive">
                                        <div class="text-editor add-list">
                                            <div class="addproduct-icon list">
                                                <h5><i data-feather="settings" class="add-info"></i><span>
                                                        Advanced settings
                                                    </span>
                                                </h5>
                                                <a href="javascript:void(0);"><i data-feather="chevron-down"
                                                        class="chevron-down-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapseFive" class="accordion-collapse collapse show"
                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample4">
                                    <div class="accordion-body">
                                        <div class="text-editor add-list add">
                                            <div class="row mb-3">
                                                <div class="col-md-7">
                                                    <h5>Message sending speed</h5>
                                                    <p class="fs-15">
                                                        Limit the number of messages sent out over time. Set the speed that
                                                        your customer support can handle to prevent crashes.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="input-blocks add-product">
                                                        <label>Time unit</label>
                                                        <select class="js-example-basic-single select2">
                                                            <option>Select none</option>
                                                            <option>per Minute</option>
                                                            <option>per Hour</option>
                                                            <option>per Day</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="input-blocks add-product">
                                                        <label>Number of messages</label>
                                                        <input type="number" class="form-control" name=""
                                                            id="">
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-7">
                                                    <h5>Validity period</h5>
                                                    <p class="fs-15">
                                                        The period during which the platform will try to deliver the
                                                        message.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="input-blocks add-product">
                                                        <label>Period</label>
                                                        <input type="number" class="form-control" name=""
                                                            id="">
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-7">
                                                    <h5>Failover to SMS validity period</h5>
                                                    <p class="fs-15">
                                                        The period during which the platform will try to deliver the
                                                        failover message in case the main one was not delivered.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="input-blocks add-product">
                                                        <label>Period</label>
                                                        <input type="number" class="form-control" name=""
                                                            id="">
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="btn-addproduct mb-4">
                        <a href="{{ route('broadcast') }}" class="btn btn-cancel me-2">Cancel</a>
                        <button type="submit" class="btn btn-submit">Save SMS</button>
                    </div>
                </div>
            </form>
            <!-- /add -->

        </div>
    </div>
@endsection
@section('script')
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
