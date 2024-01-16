@extends('front.layouts.app')
@section('title' , "Careers Birzeit Pharmaceutical Company")
@section('titlePage' , 'Careers')
@section('titleLinks')
<li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
<li class="breadcrumb-item active">Careers</li>
@endsection

@section('content')

  <section>
    <div class="container ">
        <div class="cs-cta cs-style2 text-center cs-gradient_bg pb-5">
            <h2 class="cs-cta_title text-white">JOIN A TEAM AND INSPIRE THE WORK</h2>
            <div class="cs-cta_subtitle text-white">Our values are part of everything built here — including careers.</div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6 ">
                    <div class="cs-iconbox  cs-style1 bg-light  wow  animate__animated animate__fadeInUp">
                        <h2 class="cs-iconbox_title">Accessibility</h2>
                        <div class="cs-iconbox_subtitle">
                            Technology is most powerful when everyone can make their mark.
                        </div>
                    </div>
                    <div class="cs-height_30 cs-height_lg_30"></div>
                </div>
                <div class="col-lg-3 col-sm-6 ">
                    <div class="cs-iconbox  cs-style1 bg-light  wow  animate__animated animate__fadeInUp">
                        <h2 class="cs-iconbox_title">Environment</h2>
                        <div class="cs-iconbox_subtitle">
                            Our goal is to leave the planet better than we found it.
                        </div>
                    </div>
                    <div class="cs-height_30 cs-height_lg_30"></div>
                </div>
                <div class="col-lg-3 col-sm-6 ">
                    <div class="cs-iconbox  cs-style1 bg-light  wow  animate__animated animate__fadeInUp">
                        <h2 class="cs-iconbox_title">Education</h2>
                        <div class="cs-iconbox_subtitle">
                            Education is a potent equalizer, providing opportunity for all.
                        </div>
                    </div>
                    <div class="cs-height_30 cs-height_lg_30"></div>
                </div>

            </div>
        </div>
    </div>
  </section>
  <section class="mt-5">
    <div class="container-lg">
        <div class="row justify-content-center">

          <div class="col-lg-12">
            <div class="cs-contact_box bg-light rounded-lg">
              <div class="cs-section_heading cs-style4">
                <h2 class="cs-section_title cs-accent_color">Job Application</h2>
              </div>
              <div class="cs-height_45 cs-height_lg_45"></div>
              <form class="cs-contact_form">
                <div class="row">
                    <div class="col-lg-3">
                        <label for="formFile" class="form-label text-dark fw-bold">Personal Photo</label>
                        <div class="cs-file_wrap">
                            <div class="cs-file_in">
                            <svg width="46" height="47" viewBox="0 0 46 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M44.125 36.5H39.25V31.625C39.25 31.194 39.0788 30.7807 38.774 30.476C38.4693 30.1712 38.056 30 37.625 30C37.194 30 36.7807 30.1712 36.476 30.476C36.1712 30.7807 36 31.194 36 31.625V36.5H31.125C30.694 36.5 30.2807 36.6712 29.976 36.976C29.6712 37.2807 29.5 37.694 29.5 38.125C29.5 38.556 29.6712 38.9693 29.976 39.274C30.2807 39.5788 30.694 39.75 31.125 39.75H36V44.625C36 45.056 36.1712 45.4693 36.476 45.774C36.7807 46.0788 37.194 46.25 37.625 46.25C38.056 46.25 38.4693 46.0788 38.774 45.774C39.0788 45.4693 39.25 45.056 39.25 44.625V39.75H44.125C44.556 39.75 44.9693 39.5788 45.274 39.274C45.5788 38.9693 45.75 38.556 45.75 38.125C45.75 37.694 45.5788 37.2807 45.274 36.976C44.9693 36.6712 44.556 36.5 44.125 36.5Z" fill="#737A99"/>
                                <path d="M24.625 36.5H5.125C4.69402 36.5 4.2807 36.3288 3.97595 36.024C3.67121 35.7193 3.5 35.306 3.5 34.875V5.625C3.5 5.19402 3.67121 4.7807 3.97595 4.47595C4.2807 4.17121 4.69402 4 5.125 4H34.375C34.806 4 35.2193 4.17121 35.524 4.47595C35.8288 4.7807 36 5.19402 36 5.625V25.125C36 25.556 36.1712 25.9693 36.476 26.274C36.7807 26.5788 37.194 26.75 37.625 26.75C38.056 26.75 38.4693 26.5788 38.774 26.274C39.0788 25.9693 39.25 25.556 39.25 25.125V5.625C39.25 4.33207 38.7364 3.09209 37.8221 2.17785C36.9079 1.26361 35.6679 0.75 34.375 0.75H5.125C3.83207 0.75 2.59209 1.26361 1.67785 2.17785C0.763615 3.09209 0.25 4.33207 0.25 5.625V34.875C0.25 36.1679 0.763615 37.4079 1.67785 38.3221C2.59209 39.2364 3.83207 39.75 5.125 39.75H24.625C25.056 39.75 25.4693 39.5788 25.774 39.274C26.0788 38.9693 26.25 38.556 26.25 38.125C26.25 37.694 26.0788 37.2807 25.774 36.976C25.4693 36.6712 25.056 36.5 24.625 36.5Z" fill="#737A99"/>
                                <path d="M14.875 15.375C17.1187 15.375 18.9375 13.5562 18.9375 11.3125C18.9375 9.06884 17.1187 7.25 14.875 7.25C12.6313 7.25 10.8125 9.06884 10.8125 11.3125C10.8125 13.5562 12.6313 15.375 14.875 15.375Z" fill="#737A99"/>
                                <path d="M8.84625 20.7209L6.75 22.8334V33.2497H32.75V22.8334L25.7787 15.8459C25.6277 15.6936 25.448 15.5727 25.2499 15.4902C25.0519 15.4077 24.8395 15.3652 24.625 15.3652C24.4105 15.3652 24.1981 15.4077 24.0001 15.4902C23.802 15.5727 23.6223 15.6936 23.4713 15.8459L14.875 24.4584L11.1537 20.7209C11.0027 20.5686 10.823 20.4477 10.6249 20.3652C10.4269 20.2827 10.2145 20.2402 10 20.2402C9.78548 20.2402 9.57308 20.2827 9.37506 20.3652C9.17704 20.4477 8.99731 20.5686 8.84625 20.7209Z" fill="#737A99"/>
                            </svg>
                            <h3>Drag and drop an image or <span>Upload</span></h3>
                            <p>high resulation image (jpeg, png, svg)</p>
                            </div>
                            <div class="cs-close_file" title="Close">
                            <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.421875" y="0.163086" width="32" height="32" rx="16" fill="url(#paint0_linear_1353_4256)"/>
                                <path d="M22.129 11.8702C22.5195 11.4797 22.5195 10.8465 22.129 10.456C21.7385 10.0655 21.1053 10.0655 20.7148 10.456L22.129 11.8702ZM10.7148 20.456C10.3242 20.8465 10.3242 21.4797 10.7148 21.8702C11.1053 22.2607 11.7385 22.2607 12.129 21.8702L10.7148 20.456ZM12.129 10.456C11.7385 10.0655 11.1053 10.0655 10.7148 10.456C10.3242 10.8465 10.3242 11.4797 10.7148 11.8702L12.129 10.456ZM20.7148 21.8702C21.1053 22.2607 21.7385 22.2607 22.129 21.8702C22.5195 21.4797 22.5195 20.8465 22.129 20.456L20.7148 21.8702ZM20.7148 10.456L10.7148 20.456L12.129 21.8702L22.129 11.8702L20.7148 10.456ZM10.7148 11.8702L20.7148 21.8702L22.129 20.456L12.129 10.456L10.7148 11.8702Z" fill="white"/>
                                <defs>
                                <linearGradient id="paint0_linear_1353_4256" x1="0.421875" y1="0.163086" x2="38.7886" y2="19.5877" gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-color="#01acab"/>
                                <stop offset="1" stop-color="#095d5c"/>
                                </linearGradient>
                                </defs>
                            </svg>
                            </div>
                            <input type="file" class="cs-file" accept="image/*">
                            <img src="/" class="cs-preview" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">

                            <div class="col-lg-6 mb-3">
                                <div class="cs-form_field_wrap">
                                <input type="text" class="cs-form_field" placeholder="Your Full Name">
                                </div>
                                <div class="cs-height_20 cs-height_lg_20"></div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="cs-form_field_wrap_v2">
                                  <select class="select2 cs-form_field" name="Position Applied For*">
                                    <option value="" selected>Position Applied For*</option>
                                    <option value="">Developer</option>
                                    <option value="1">Designer</option>
                                    <option value="2">Manager</option>
                                  </select>

                                </div>
                            </div>
                            <div class="col-12">
                                <h5><i class="fa-solid fa-address-book cs-accent_color"></i> Personal Information</h5>
                            </div>
                            <div class="col-lg-6 mt-3">
                                <div class="cs-form_field_wrap">
                                <input type="text" class="cs-form_field" placeholder="Address">
                                </div>
                            </div>
                            <div class="col-lg-6 mt-3">
                                <div class="cs-form_field_wrap">
                                <input type="text" class="cs-form_field" placeholder="Mobile/Tel Number">
                                </div>
                            </div>
                            <div class="col-lg-6 mt-3">
                                <div class="cs-form_field_wrap">
                                <input type="text" class="cs-form_field" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-lg-6 mt-3">
                                <div class="cs-form_field_wrap_v2">
                                  <select class="select2 cs-form_field" name="Place Of Birth*">
                                    <option value="" selected>Place Of Birth*</option>
                                    <option value="">Palestin</option>
                                    <option value="1">Jorden</option>
                                    <option value="2">Egypt</option>
                                  </select>

                                </div>
                            </div>
                            <div class="col-lg-6 mt-3">
                                <div class="mt-3">
                                    <label class="form-label">Date Of Birth*</label>
                                </div>
                                <div class="cs-form_field_wrap">
                                <input type="date" class="cs-form_field" placeholder="Date Of Birth">
                                </div>
                                <div class="cs-height_20 cs-height_lg_20"></div>
                            </div>
                            <div class="col-lg-6 mt-3">
                                <div class="mt-3 mb-3">
                                  <label class="form-label">Gender*</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" required checked name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                  <label class="form-check-label" for="inlineRadio1">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" required name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                  <label class="form-check-label" for="inlineRadio2">Female</label>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-3">
                                <div class="cs-form_field_wrap">
                                <input type="text" class="cs-form_field" placeholder="ID / Passport No">
                                </div>
                                <div class="cs-height_20 cs-height_lg_20"></div>
                            </div>
                            <div class="col-lg-6 mt-3">
                                <div class="cs-form_field_wrap_v2">
                                  <select class="select2 cs-form_field" name="Marital Status">
                                    <option value="" selected>Marital Status</option>
                                    <option value="">Single</option>
                                    <option value="1">Married</option>
                                    <option value="2">Other</option>
                                  </select>

                                </div>
                            </div>


                            <div class="col-12 d-flex justify-content-between mt-4">
                                <h5><i class="fa-solid fa-graduation-cap cs-accent_color"></i> Educational Background</h5>
                                <button type="button" onclick="add_educational(this);" class="cs-btn btn-sm cs-style1 cs-btn_sm"><span><i class="fa-solid fa-plus"></i></span></button>
                            </div>
                            <div class="educational-rows">
                                <div class="row position-relative border rounded-lg py-3 mt-3">

                                    <button type="button" onclick="remove(this);" class="cs-btn btn-sm cs-style1 bg-danger cs-btn_sm position-absolute top-0 end-0 text-center remove-row-btn"><span><i class="fa-solid fa-times"></i></span></button>

                                    <div class="col-lg-6 mt-3 mt-lg-0">
                                        <div class="cs-form_field_wrap_v2">
                                          <select class="select2 cs-form_field" name="Degree[]">
                                            <option value="" selected>Degree</option>
                                            <option value="">Read & Write</option>
                                            <option value="1">High School</option>
                                            <option value="2">Diploma</option>
                                            <option value="2">Bachelors</option>
                                            <option value="2">Master’s</option>
                                            <option value="2">PHD</option>
                                          </select>

                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-3 mt-lg-0">
                                        <div class="cs-form_field_wrap">
                                        <input type="text" name="specialization[]" class="cs-form_field" placeholder="Specialization">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mt-3 ">
                                        <div class="cs-form_field_wrap">
                                          <select class="select2 cs-form_field" name="university[]">
                                            <option value="" selected>University / School</option>
                                            <option value="1">University 1</option>
                                            <option value="2">University 2</option>
                                            <option value="3">University 3</option>
                                            <option value="4">University 4</option>

                                          </select>

                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-3">
                                        <div class="cs-form_field_wrap">
                                            <input type="date" name="dob[]" class="cs-form_field" placeholder="Date Of Graduation">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-between mt-4">
                                <h5><i class="fa-solid fa-language cs-accent_color"></i> Languages</h5>
                                <button type="button" onclick="add_language(this);" class="cs-btn btn-sm cs-style1 cs-btn_sm"><span><i class="fa-solid fa-plus"></i></span></button>
                            </div>
                            <div class="languages-rows">
                                <div class="row position-relative border rounded-lg py-3 mt-3">

                                    <button type="button" onclick="remove(this);" class="cs-btn btn-sm cs-style1 bg-danger cs-btn_sm position-absolute top-0 end-0 text-center remove-row-btn"><span><i class="fa-solid fa-times"></i></span></button>

                                    <div class="col-lg-3 mt-3 mt-lg-0">
                                        <div class="cs-form_field_wrap_v2">
                                          <select class="select2 cs-form_field" name="language[]">
                                            <option value="" selected>Language</option>
                                            <option value="1">Arabic</option>
                                            <option value="2">English</option>
                                            <option value="2">Frans</option>
                                            <option value="2">Ispan</option>
                                          </select>

                                        </div>
                                    </div>
                                    <div class="col-lg-3 mt-3 mt-lg-0">
                                        <div class="cs-form_field_wrap_v2">
                                          <select class="select2 cs-form_field" name="reading[]">
                                            <option value="" selected>Reading</option>
                                            <option value="1">Weak</option>
                                            <option value="2">Good</option>
                                            <option value="2">Excellent</option>
                                          </select>

                                        </div>
                                    </div>
                                    <div class="col-lg-3 mt-3 mt-lg-0">
                                        <div class="cs-form_field_wrap_v2">
                                          <select class="select2 cs-form_field" name="writing[]">
                                            <option value="" selected>Writing</option>
                                            <option value="1">Weak</option>
                                            <option value="2">Good</option>
                                            <option value="2">Excellent</option>
                                          </select>

                                        </div>
                                    </div>
                                    <div class="col-lg-3 mt-3 mt-lg-0">
                                        <div class="cs-form_field_wrap_v2">
                                          <select class="select2 cs-form_field" name="speaking[]">
                                            <option value="" selected>Speaking</option>
                                            <option value="1">Weak</option>
                                            <option value="2">Good</option>
                                            <option value="2">Excellent</option>
                                          </select>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-between mt-4">
                                <h5><i class="fa-solid fa-laptop cs-accent_color"></i> Computer skills</h5>
                                <button type="button" onclick="add_skill(this);" class="cs-btn btn-sm cs-style1 cs-btn_sm"><span><i class="fa-solid fa-plus"></i></span></button>
                            </div>
                            <div class="skills-rows">
                                <div class="row position-relative border rounded-lg py-3 mt-3">

                                    <button type="button" onclick="remove(this);" class="cs-btn btn-sm cs-style1 bg-danger cs-btn_sm position-absolute top-0 end-0 text-center remove-row-btn"><span><i class="fa-solid fa-times"></i></span></button>

                                    <div class="col-lg-6 mt-3 mt-lg-0">
                                        <div class="cs-form_field_wrap">
                                        <input type="text" name="programs[]" class="cs-form_field" placeholder="Computer Programs">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 mt-3 mt-lg-0">
                                        <div class="cs-form_field_wrap_v2">
                                          <select class="select2 cs-form_field" name="experience[]">
                                            <option value="" selected>Experience</option>
                                            <option value="1">Weak</option>
                                            <option value="2">Good</option>
                                            <option value="2">Excellent</option>
                                          </select>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-between mt-4">
                                <h5><i class="fa-solid fa-chalkboard-user cs-accent_color"></i> Training Courses</h5>
                                <button type="button" onclick="add_course(this);" class="cs-btn btn-sm cs-style1 cs-btn_sm"><span><i class="fa-solid fa-plus"></i></span></button>
                            </div>
                            <div class="courses-rows">
                                <div class="row position-relative border rounded-lg py-3 mt-3">

                                    <button type="button" onclick="remove(this);" class="cs-btn btn-sm cs-style1 bg-danger cs-btn_sm position-absolute top-0 end-0 text-center remove-row-btn"><span><i class="fa-solid fa-times"></i></span></button>

                                    <div class="col-lg-4 mt-3 mt-lg-0">
                                        <div class="cs-form_field_wrap">
                                        <input type="text" name="course_names[]" class="cs-form_field" placeholder="Courses Names">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mt-3 mt-lg-0">
                                        <div class="cs-form_field_wrap">
                                        <input type="text" name="institute[]" class="cs-form_field" placeholder="Training Institute">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mt-3 mt-lg-0">
                                        <div class="cs-form_field_wrap">
                                        <input type="text" name="period[]" class="cs-form_field" placeholder="Period">
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-between mt-4">
                                <h5><i class="fa-solid fa-briefcase cs-accent_color"></i> Work Experience</h5>
                                <button type="button" onclick="add_work(this);" class="cs-btn btn-sm cs-style1 cs-btn_sm"><span><i class="fa-solid fa-plus"></i></span></button>
                            </div>
                            <div class="works-rows">
                                <div class="row position-relative border rounded-lg py-3 mt-3">

                                    <button type="button" onclick="remove(this);" class="cs-btn btn-sm cs-style1 bg-danger cs-btn_sm position-absolute top-0 end-0 text-center remove-row-btn"><span><i class="fa-solid fa-times"></i></span></button>

                                    <div class="col-12">
                                        <h6 class="mb-0 mt-3"><i class="fa-solid fa-building cs-accent_color"></i> Company Information</h6>
                                    </div>
                                    <div class="col-lg-4 mt-3 mt-lg-0">
                                        <div class="cs-form_field_wrap">
                                        <input type="text" name="company_name[]" class="cs-form_field" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mt-3 mt-lg-0">
                                        <div class="cs-form_field_wrap">
                                        <input type="text" name="company_address[]" class="cs-form_field" placeholder="Address">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mt-3 mt-lg-0">
                                        <div class="cs-form_field_wrap">
                                        <input type="text" name="company_number[]" class="cs-form_field" placeholder="Tel. Number">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <h6 class="mb-0 mt-3"><i class="fa-solid fa-money-bills cs-accent_color"></i> Salary</h6>
                                    </div>
                                    <div class="col-lg-6 mt-3">
                                        <div class="cs-form_field_wrap">
                                        <input type="text" name="salary_starting[]" class="cs-form_field" placeholder="Starting">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-3">
                                        <div class="cs-form_field_wrap">
                                        <input type="text" name="salary_ending[]" class="cs-form_field" placeholder="End">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <h6 class="mb-0 mt-3"><i class="fa-solid fa-calendar-days cs-accent_color"></i> Recruitment period</h6>
                                    </div>
                                    <div class="col-lg-6 mt-3">
                                        <div class="cs-form_field_wrap">
                                            <label>From</label>
                                            <input type="date" name="period_from[]" class="cs-form_field" placeholder="From">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-3">
                                        <div class="cs-form_field_wrap">
                                            <label>To</label>
                                            <input type="date" name="period_to[]" class="cs-form_field" placeholder="To">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mt-3">
                                        <div class="cs-form_field_wrap">
                                            <textarea cols="30" rows="3" placeholder="Reason for leaving" class="cs-form_field"></textarea>
                                        </div>
                                    </div>



                                </div>
                            </div>
                            <div class="col-lg-12 mb-3 mt-3">
                                <div class="mt-3">
                                  <label class="form-label text-dark">Do you suffer from any physical disability, hearing or vision impairment?</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" onchange="specify_status(this);" type="radio" required checked name="inlineRadioOptions3" id="inlineRadio31" value="0">
                                  <label class="form-check-label" for="inlineRadio31">No</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" onchange="specify_status(this);" type="radio" required name="inlineRadioOptions3" id="inlineRadio32" value="1">
                                  <label class="form-check-label" for="inlineRadio32">Yes</label>
                                </div>
                                <div class="cs-form_field_wrap mt-3 specify-textarea">
                                    <textarea cols="30" rows="3" placeholder="Please Specify" disabled class="cs-form_field"></textarea>
                                </div>

                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="mt-3">
                                  <label class="form-label text-dark">Do have penicillin allergy?</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" required checked name="inlineRadioOptions2" id="inlineRadio21" value="option1">
                                  <label class="form-check-label" for="inlineRadio21">No</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" required name="inlineRadioOptions2" id="inlineRadio22" value="option2">
                                  <label class="form-check-label" for="inlineRadio22">Yes</label>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="mt-3">
                                  <label class="form-label text-dark">Do you smoke ?</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" required checked name="inlineRadioOptions1" id="inlineRadio23" value="option1">
                                  <label class="form-check-label" for="inlineRadio23">No</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" required name="inlineRadioOptions1" id="inlineRadio24" value="option2">
                                  <label class="form-check-label" for="inlineRadio24">Yes</label>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3 mt-3">

                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                  <label class="form-check-label text-dark" for="defaultCheck1">
                                    I Approved and pledge the validity of the data that was uploaded on the application for employment, ready for approval and I bear any responsibility in the event that an error is proven in the uploaded data.
                                  </label>
                                </div>

                            </div>
                            <div class="cs-height_40 cs-height_lg_40"></div>

                            <div class="col-lg-12">
                                <button class="cs-btn cs-style1 cs-btn_lg"><span>Send</span></button>
                            </div>
                        </div>
                    </div>


                </div>
              </form>
            </div>
          </div>
        </div>

    </div>
  </section>
@endsection
