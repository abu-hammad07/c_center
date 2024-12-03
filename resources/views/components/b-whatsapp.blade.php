<div class="page-header settings-pg-header">
    <div class="add-item d-flex">
        <div class="page-title">
            <h1>WhatsApp Broadcasts</h4>
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
            <button type="submit" class="btn btn-submit">Save WhatsApp</button>
        </div>
    </div>
</form>
<!-- /add -->