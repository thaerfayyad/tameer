@extends('layout.main')
@section('title', 'أضافة طفل جديد')
@section('css')
@section('content')

    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">

            <form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row">
                <!--begin::Aside column-->


                <!--end::Aside column-->
                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <!--begin:::Tabs-->

                    <!--end:::Tabs-->
                    <!--begin::Tab content-->
                    <div class="tab-content">
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <!--begin::General options-->
                                <div class="card card-flush py-10">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2> بيانات الطفل </h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="modal-body py-10 px-lg-17 ">
                                        <div class="d-flex flex-column flex-md-row gap-5">





                                            <div class="flex-row-fluid">
                                                <!--begin::Label-->
                                                <label for="full_name" class="required form-label">الاسم كامل</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control" type="text" id="full_name" name="full_name"
                                                    placeholder="" value="">
                                                <!--end::Input-->
                                            </div>
                                            <div class="fv-row flex-row-fluid fv-plugins-icon-container">
                                                <!--begin::Label-->
                                                <label for="id_number" class="required form-label">رقم الهوية</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control" type="number" id="id_number" name="id_number"
                                                    placeholder="" value="">
                                                <!--end::Input-->
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                            <div class="fv-row flex-row-fluid fv-plugins-icon-container">
                                                <!--begin::Label-->
                                                <label for="date_birth" class="required form-label">تاريخ الميلاد</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control" type="date" id="date_birth" name="date_birth"
                                                    placeholder="" value="">
                                                <!--end::Input-->
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="d-flex flex-column flex-md-row gap-5">



                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7">
                                                <!--begin::Label-->
                                                <label class="required fs-6 fw-bold mb-2"> حالة المواطنة</label>
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->

                                                    <!--begin::Row-->
                                                    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9"
                                                        data-kt-buttons="true"
                                                        data-kt-buttons-target="[data-kt-button='true']">
                                                        <!--begin::Col-->
                                                        <div class="col">
                                                            <!--begin::Option-->
                                                            <label
                                                                class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6"
                                                                data-kt-button="true">
                                                                <!--begin::Radio-->
                                                                <span
                                                                    class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="Citzienship" value="1">
                                                                </span>
                                                                <!--end::Radio-->
                                                                <!--begin::Info-->
                                                                <span class="ms-5">
                                                                    <span
                                                                        class="fs-4 fw-bolder text-gray-800 d-block">لاجىء</span>
                                                                </span>
                                                                <!--end::Info-->
                                                            </label>
                                                            <!--end::Option-->
                                                        </div>
                                                        <div class="col">
                                                            <!--begin::Option-->
                                                            <label
                                                                class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6"
                                                                data-kt-button="true">
                                                                <!--begin::Radio-->
                                                                <span
                                                                    class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="Citzienship" value="1">
                                                                </span>
                                                                <!--end::Radio-->
                                                                <!--begin::Info-->
                                                                <span class="ms-5">
                                                                    <span
                                                                        class="fs-4 fw-bolder text-gray-800 d-block">مواطن</span>
                                                                </span>
                                                                <!--end::Info-->
                                                            </label>
                                                            <!--end::Option-->
                                                        </div>





                                                    </div>


                                                </div>

                                            </div>
                                            <div class="fv-row mb-7">
                                                <!--begin::Label-->
                                                <label class="required fs-6 fw-bold mb-2"> الجنس </label>
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->

                                                    <!--begin::Row-->
                                                    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9"
                                                        data-kt-buttons="true"
                                                        data-kt-buttons-target="[data-kt-button='true']">
                                                        <!--begin::Col-->
                                                        <div class="col">
                                                            <!--begin::Option-->
                                                            <label
                                                                class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6"
                                                                data-kt-button="true">
                                                                <!--begin::Radio-->
                                                                <span
                                                                    class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="Gender" value="1">
                                                                </span>
                                                                <!--end::Radio-->
                                                                <!--begin::Info-->
                                                                <span class="ms-5">
                                                                    <span
                                                                        class="fs-4 fw-bolder text-gray-800 d-block">زكر</span>
                                                                </span>
                                                                <!--end::Info-->
                                                            </label>
                                                            <!--end::Option-->
                                                        </div>
                                                        <div class="col">
                                                            <!--begin::Option-->
                                                            <label
                                                                class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6"
                                                                data-kt-button="true">
                                                                <!--begin::Radio-->
                                                                <span
                                                                    class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="Gender" value="1">
                                                                </span>
                                                                <!--end::Radio-->
                                                                <!--begin::Info-->
                                                                <span class="ms-5">
                                                                    <span
                                                                        class="fs-4 fw-bolder text-gray-800 d-block">أنثى</span>
                                                                </span>
                                                                <!--end::Info-->
                                                            </label>
                                                            <!--end::Option-->
                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->

                                                        <!--end::Col-->
                                                        <!--begin::Col-->

                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Row-->
                                                </div>

                                            </div>
                                            <!--end::Input group-->

                                        </div>




                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-7 fv-row">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold mb-2">
                                                <span class="required">نوع الإعاقة</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Country of origination"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select name="country" aria-label="" data-control="select2"
                                                class="form-select form-select-solid fw-bolder">
                                                <option value="">اختار نوع الإعاقة</option <option value="AF">بصرية</option>
                                                <option value="AE">سمعية</option>
                                                <option value="GB">تواصل </option>
                                                <option value="GB">جسدية </option>
                                                <option value="GB">عقلية</option>
                                                <option value="GB">متعدد</option>

                                            </select>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <div>
                                            <!--begin::Label-->
                                            <label class="form-label">الملاحظات</label>
                                            <!--end::Label-->
                                            <!--begin::Editor-->
                                            <div class="ql-toolbar ql-snow"><span class="ql-formats"><span
                                                        class="ql-header ql-picker"><span class="ql-picker-label"
                                                            tabindex="0" role="button" aria-expanded="false"
                                                            aria-controls="ql-picker-options-0"><svg viewBox="0 0 18 18">
                                                                <polygon class="ql-stroke"
                                                                    points="7 11 9 13 11 11 7 11"></polygon>
                                                                <polygon class="ql-stroke" points="7 7 9 5 11 7 7 7">
                                                                </polygon>
                                                            </svg></span><span class="ql-picker-options" aria-hidden="true"
                                                            tabindex="-1" id="ql-picker-options-0"><span tabindex="0"
                                                                role="button" class="ql-picker-item"
                                                                data-value="1"></span><span tabindex="0" role="button"
                                                                class="ql-picker-item" data-value="2"></span><span
                                                                tabindex="0" role="button"
                                                                class="ql-picker-item ql-selected"></span></span></span><select
                                                        class="ql-header" style="display: none;">
                                                        <option value="1"></option>
                                                        <option value="2"></option>
                                                        <option selected="selected"></option>
                                                    </select></span><span class="ql-formats"><button type="button"
                                                        class="ql-bold"><svg viewBox="0 0 18 18">
                                                            <path class="ql-stroke"
                                                                d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z">
                                                            </path>
                                                            <path class="ql-stroke"
                                                                d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z">
                                                            </path>
                                                        </svg></button><button type="button" class="ql-italic"><svg
                                                            viewBox="0 0 18 18">
                                                            <line class="ql-stroke" x1="7" x2="13" y1="4" y2="4">
                                                            </line>
                                                            <line class="ql-stroke" x1="5" x2="11" y1="14" y2="14">
                                                            </line>
                                                            <line class="ql-stroke" x1="8" x2="10" y1="14" y2="4">
                                                            </line>
                                                        </svg></button><button type="button" class="ql-underline"><svg
                                                            viewBox="0 0 18 18">
                                                            <path class="ql-stroke"
                                                                d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3">
                                                            </path>
                                                            <rect class="ql-fill" height="1" rx="0.5" ry="0.5"
                                                                width="12" x="3" y="15"></rect>
                                                        </svg></button></span><span class="ql-formats"><button
                                                        type="button" class="ql-image"><svg viewBox="0 0 18 18">
                                                            <rect class="ql-stroke" height="10" width="12" x="3" y="4">
                                                            </rect>
                                                            <circle class="ql-fill" cx="6" cy="7" r="1"></circle>
                                                            <polyline class="ql-even ql-fill"
                                                                points="5 12 5 11 7 9 8 10 11 7 13 9 13 12 5 12"></polyline>
                                                        </svg></button><button type="button" class="ql-code-block"><svg
                                                            viewBox="0 0 18 18">
                                                            <polyline class="ql-even ql-stroke" points="5 7 3 9 5 11">
                                                            </polyline>
                                                            <polyline class="ql-even ql-stroke" points="13 7 15 9 13 11">
                                                            </polyline>
                                                            <line class="ql-stroke" x1="10" x2="8" y1="5" y2="13">
                                                            </line>
                                                        </svg></button></span></div>
                                            <div id="kt_ecommerce_add_product_description"
                                                name="kt_ecommerce_add_product_description"
                                                class="min-h-200px mb-2 ql-container ql-snow">
                                                <div class="ql-editor ql-blank" data-gramm="false" contenteditable="true"
                                                    data-placeholder="">
                                                    <p><br></p>
                                                </div>
                                                <div class="ql-clipboard" contenteditable="true" tabindex="-1"></div>
                                                <div class="ql-tooltip ql-hidden"><a class="ql-preview"
                                                        rel="noopener noreferrer" target="_blank"
                                                        href="about:blank"></a><input type="text" data-formula="e=mc^2"
                                                        data-link="https://quilljs.com" data-video="Embed URL"><a
                                                        class="ql-action"></a><a class="ql-remove"></a></div>
                                            </div>
                                            <!--end::Editor-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7"></div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::General options-->


                            </div>
                        </div>
                        <br> <br>

                    </div>
                    <!--end::Tab content-->
                    <div class="tab-content">
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <!--begin::General options-->
                                <div class="card card-flush py-10">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2> بيانات الاسرة </h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="modal-body py-10 px-lg-17 ">
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-7 fv-row">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold mb-2">
                                                <span class="required"> العلاقة بالطفل</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Country of origination"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select name="country" aria-label="" data-control="select2"
                                                class="form-select form-select-solid fw-bolder">
                                                <option value="">اختار</option <option value="AE">أب</option>
                                                <option value="AE">أم</option>
                                                <option value="GB">أخ </option>
                                                <option value="GB">أخت </option>
                                                <option value="GB">زوجة الأب</option>
                                                <option value="GB">زوجة الأم</option>
                                                <option value="GB"> جد</option>

                                            </select>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <br><br>

                                        <div class="d-flex flex-column flex-md-row gap-5">



                                            <div class="flex-row-fluid">
                                                <!--begin::Label-->
                                                <label for="full_name" class="required form-label">الاسم كامل</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control" type="text" id="full_name" name="full_name"
                                                    placeholder="" value="">
                                                <!--end::Input-->
                                            </div>
                                            <div class="fv-row flex-row-fluid fv-plugins-icon-container">
                                                <!--begin::Label-->
                                                <label for="id_number" class="required form-label">رقم الهوية</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control" type="number" id="id_number" name="id_number"
                                                    placeholder="" value="">
                                                <!--end::Input-->
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                            <div class="fv-row flex-row-fluid fv-plugins-icon-container">
                                                <!--begin::Label-->
                                                <label for="date_birth" class="required form-label">تاريخ الميلاد</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control" type="date" id="date_birth" name="date_birth"
                                                    placeholder="" value="">
                                                <!--end::Input-->
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="flex-row-fluid">
                                            <!--begin::Label-->
                                            <label for="place_birth" class="required form-label"> مكان الميلاد</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input class="form-control" type="text" id="place_birth" name="place_birth"
                                                placeholder="" value="">
                                            <!--end::Input-->
                                        </div>
                                        <!--begin::Input group-->
                                        <br>
                                        <div class="d-flex flex-column flex-md-row gap-5">



                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7">
                                                <!--begin::Label-->
                                                <label class="required fs-6 fw-bold mb-2"> حالة المواطنة</label>
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->

                                                    <!--begin::Row-->
                                                    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9"
                                                        data-kt-buttons="true"
                                                        data-kt-buttons-target="[data-kt-button='true']">
                                                        <!--begin::Col-->
                                                        <div class="col">
                                                            <!--begin::Option-->
                                                            <label
                                                                class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6"
                                                                data-kt-button="true">
                                                                <!--begin::Radio-->
                                                                <span
                                                                    class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="Citzienship" value="1">
                                                                </span>
                                                                <!--end::Radio-->
                                                                <!--begin::Info-->
                                                                <span class="ms-5">
                                                                    <span
                                                                        class="fs-4 fw-bolder text-gray-800 d-block">لاجىء</span>
                                                                </span>
                                                                <!--end::Info-->
                                                            </label>
                                                            <!--end::Option-->
                                                        </div>
                                                        <div class="col">
                                                            <!--begin::Option-->
                                                            <label
                                                                class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6"
                                                                data-kt-button="true">
                                                                <!--begin::Radio-->
                                                                <span
                                                                    class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="Citzienship" value="1">
                                                                </span>
                                                                <!--end::Radio-->
                                                                <!--begin::Info-->
                                                                <span class="ms-5">
                                                                    <span
                                                                        class="fs-4 fw-bolder text-gray-800 d-block">مواطن</span>
                                                                </span>
                                                                <!--end::Info-->
                                                            </label>
                                                            <!--end::Option-->
                                                        </div>





                                                    </div>


                                                </div>

                                            </div>
                                            <div class="fv-row mb-7">
                                                <!--begin::Label-->
                                                <label class="required fs-6 fw-bold mb-2"> الجنس </label>
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->

                                                    <!--begin::Row-->
                                                    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9"
                                                        data-kt-buttons="true"
                                                        data-kt-buttons-target="[data-kt-button='true']">
                                                        <!--begin::Col-->
                                                        <div class="col">
                                                            <!--begin::Option-->
                                                            <label
                                                                class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6"
                                                                data-kt-button="true">
                                                                <!--begin::Radio-->
                                                                <span
                                                                    class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="Gender" value="1">
                                                                </span>
                                                                <!--end::Radio-->
                                                                <!--begin::Info-->
                                                                <span class="ms-5">
                                                                    <span
                                                                        class="fs-4 fw-bolder text-gray-800 d-block">زكر</span>
                                                                </span>
                                                                <!--end::Info-->
                                                            </label>
                                                            <!--end::Option-->
                                                        </div>
                                                        <div class="col">
                                                            <!--begin::Option-->
                                                            <label
                                                                class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6"
                                                                data-kt-button="true">
                                                                <!--begin::Radio-->
                                                                <span
                                                                    class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="Gender" value="1">
                                                                </span>
                                                                <!--end::Radio-->
                                                                <!--begin::Info-->
                                                                <span class="ms-5">
                                                                    <span
                                                                        class="fs-4 fw-bolder text-gray-800 d-block">أنثى</span>
                                                                </span>
                                                                <!--end::Info-->
                                                            </label>
                                                            <!--end::Option-->
                                                        </div>

                                                    </div>
                                                    <!--end::Row-->
                                                </div>

                                            </div>
                                            <!--end::Input group-->

                                        </div>


                                        <!--end::Input group-->


                                        <div>
                                            <!--begin::Label-->
                                            <label class="form-label">الملاحظات</label>
                                            <!--end::Label-->
                                            <!--begin::Editor-->
                                            <div class="ql-toolbar ql-snow"><span class="ql-formats"><span
                                                        class="ql-header ql-picker"><span class="ql-picker-label"
                                                            tabindex="0" role="button" aria-expanded="false"
                                                            aria-controls="ql-picker-options-0"><svg viewBox="0 0 18 18">
                                                                <polygon class="ql-stroke"
                                                                    points="7 11 9 13 11 11 7 11"></polygon>
                                                                <polygon class="ql-stroke" points="7 7 9 5 11 7 7 7">
                                                                </polygon>
                                                            </svg></span><span class="ql-picker-options" aria-hidden="true"
                                                            tabindex="-1" id="ql-picker-options-0"><span tabindex="0"
                                                                role="button" class="ql-picker-item"
                                                                data-value="1"></span><span tabindex="0" role="button"
                                                                class="ql-picker-item" data-value="2"></span><span
                                                                tabindex="0" role="button"
                                                                class="ql-picker-item ql-selected"></span></span></span><select
                                                        class="ql-header" style="display: none;">
                                                        <option value="1"></option>
                                                        <option value="2"></option>
                                                        <option selected="selected"></option>
                                                    </select></span><span class="ql-formats"><button type="button"
                                                        class="ql-bold"><svg viewBox="0 0 18 18">
                                                            <path class="ql-stroke"
                                                                d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z">
                                                            </path>
                                                            <path class="ql-stroke"
                                                                d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z">
                                                            </path>
                                                        </svg></button><button type="button" class="ql-italic"><svg
                                                            viewBox="0 0 18 18">
                                                            <line class="ql-stroke" x1="7" x2="13" y1="4" y2="4">
                                                            </line>
                                                            <line class="ql-stroke" x1="5" x2="11" y1="14" y2="14">
                                                            </line>
                                                            <line class="ql-stroke" x1="8" x2="10" y1="14" y2="4">
                                                            </line>
                                                        </svg></button><button type="button" class="ql-underline"><svg
                                                            viewBox="0 0 18 18">
                                                            <path class="ql-stroke"
                                                                d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3">
                                                            </path>
                                                            <rect class="ql-fill" height="1" rx="0.5" ry="0.5"
                                                                width="12" x="3" y="15"></rect>
                                                        </svg></button></span><span class="ql-formats"><button
                                                        type="button" class="ql-image"><svg viewBox="0 0 18 18">
                                                            <rect class="ql-stroke" height="10" width="12" x="3"
                                                                y="4"></rect>
                                                            <circle class="ql-fill" cx="6" cy="7" r="1"></circle>
                                                            <polyline class="ql-even ql-fill"
                                                                points="5 12 5 11 7 9 8 10 11 7 13 9 13 12 5 12"></polyline>
                                                        </svg></button><button type="button" class="ql-code-block"><svg
                                                            viewBox="0 0 18 18">
                                                            <polyline class="ql-even ql-stroke" points="5 7 3 9 5 11">
                                                            </polyline>
                                                            <polyline class="ql-even ql-stroke" points="13 7 15 9 13 11">
                                                            </polyline>
                                                            <line class="ql-stroke" x1="10" x2="8" y1="5" y2="13">
                                                            </line>
                                                        </svg></button></span></div>
                                            <div id="kt_ecommerce_add_product_description"
                                                name="kt_ecommerce_add_product_description"
                                                class="min-h-200px mb-2 ql-container ql-snow">
                                                <div class="ql-editor ql-blank" data-gramm="false" contenteditable="true"
                                                    data-placeholder="">
                                                    <p><br></p>
                                                </div>
                                                <div class="ql-clipboard" contenteditable="true" tabindex="-1"></div>
                                                <div class="ql-tooltip ql-hidden"><a class="ql-preview"
                                                        rel="noopener noreferrer" target="_blank"
                                                        href="about:blank"></a><input type="text" data-formula="e=mc^2"
                                                        data-link="https://quilljs.com" data-video="Embed URL"><a
                                                        class="ql-action"></a><a class="ql-remove"></a></div>
                                            </div>
                                            <!--end::Editor-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7"></div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::General options-->


                            </div>
                        </div>
                        <br> <br>

                    </div>
                    <div class="tab-content">
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <!--begin::General options-->
                                <div class="card card-flush py-10">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2> بيانات التواصل مع الطفل </h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="modal-body py-10 px-lg-17 ">
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-7 fv-row">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold mb-2">
                                                <span class="required"> المحافظة </span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Country of origination"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select name="country" aria-label="" data-control="select2"
                                                class="form-select form-select-solid fw-bolder">
                                                <option value="">اختار</option <option value="AE">الشمال</option>
                                                <option value="AE">غزة</option>
                                                <option value="GB">الوسطى </option>
                                                <option value="GB">الجنوب </option>


                                            </select>
                                            <!--end::Input-->
                                        </div>

                                        <div class="d-flex flex-column mb-7 fv-row">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold mb-2">
                                                <span class="required"> المدينة</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Country of origination"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select name="country" aria-label="" data-control="select2"
                                                class="form-select form-select-solid fw-bolder">
                                                <option value="">اختار</option <option value="AE">x</option>
                                                <option value="AE">x</option>
                                                <option value="GB">x </option>


                                            </select>
                                            <!--end::Input-->
                                        </div>
                                        <div class="d-flex flex-column mb-7 fv-row">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold mb-2">
                                                <span class="required"> الحي</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Country of origination"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select name="country" aria-label="" data-control="select2"
                                                class="form-select form-select-solid fw-bolder">
                                                <option value="">اختار</option <option value="AE">xx</option>
                                                <option value="AE">xx</option>


                                            </select>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <br><br>
                                        <div class="fv-row flex-row-fluid fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label for="date_birth" class="required form-label">العنوان </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input class="form-control" type="text" id="date_birth" name="date_birth"
                                                placeholder="" value="">
                                            <!--end::Input-->
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                        <br>
                                        <div class="d-flex flex-column flex-md-row gap-5">



                                            <div class="flex-row-fluid">
                                                <!--begin::Label-->
                                                <label for="full_name" class="required form-label"> رقم الهاتف</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control" type="tel" id="full_name" name="full_name"
                                                    placeholder="" value="">
                                                <!--end::Input-->
                                            </div>
                                            <div class="fv-row flex-row-fluid fv-plugins-icon-container">
                                                <!--begin::Label-->
                                                <label for="id_number" class="required form-label">رقم الجوال </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control" type="tel" id="id_number" name="id_number"
                                                    placeholder="" value="">
                                                <!--end::Input-->
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>

                                        </div>


                                        <!--end::Input group-->


                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::General options-->


                            </div>
                        </div>
                        <br> <br>

                    </div>

                    <div class="tab-content">
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <!--begin::General options-->
                                <div class="card card-flush py-10">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2> تفاصيل مدرسة الطفل </h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="modal-body py-10 px-lg-17 ">

                                        <div class="d-flex flex-column flex-md-row gap-5">



                                            <div class="flex-row-fluid">
                                                <!--begin::Label-->
                                                <label for="teacher_name" class="required form-label">  اسم المدرسة</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control" type="text" id="teacher_name" name="full_name"
                                                    placeholder="" value="">
                                                <!--end::Input-->
                                            </div>
                                            <div class="fv-row flex-row-fluid fv-plugins-icon-container">
                                                <!--begin::Label-->
                                                <label for="school_address" class="required form-label">عنوان المدرسة  </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control" type="tel" id="school_address" name="id_number"
                                                    placeholder="" value="">
                                                <!--end::Input-->
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>

                                        </div>
                                        <br><br>
                                        <div class="d-flex flex-column flex-md-row gap-5">



                                            <div class="flex-row-fluid">
                                                <!--begin::Label-->
                                                <label for="contact_person" class="required form-label">  شخص التواصل </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control" type="text" id="contact_person" name="full_name"
                                                    placeholder="" value="">
                                                <!--end::Input-->
                                            </div>
                                            <div class="fv-row flex-row-fluid fv-plugins-icon-container">
                                                <!--begin::Label-->
                                                <label for="tel_number" class="required form-label">رقم الهاتف   </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control" type="tel" id="tel_number" name="number"
                                                    placeholder="" value="">
                                                <!--end::Input-->
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>

                                            <div class="fv-row flex-row-fluid fv-plugins-icon-container">
                                                <!--begin::Label-->
                                                <label for="mob_num" class="required form-label">رقم الجوال    </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control" type="tel" id="mob_num" name="id_number"
                                                    placeholder="" value="">
                                                <!--end::Input-->
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>

                                        </div>


                                        <!--end::Input group-->


                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::General options-->


                            </div>
                        </div>
                        <br> <br>

                    </div>

                    <div class="tab-content">
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <!--begin::General options-->
                                <div class="card card-flush py-10">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>  تفاصيل عمل الطفل/الأسرة </h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="modal-body py-10 px-lg-17 ">
                                        <!--begin::Input group-->

                                        <br><br>
                                        <div class="fv-row flex-row-fluid fv-plugins-icon-container">


                                            <div class="fv-row mb-7">
                                                <!--begin::Label-->
                                                <label class="required fs-6 fw-bold mb-2"> حالة الوظيفة </label>
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->

                                                    <!--begin::Row-->
                                                    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9"
                                                        data-kt-buttons="true"
                                                        data-kt-buttons-target="[data-kt-button='true']">
                                                        <!--begin::Col-->
                                                        <div class="col">
                                                            <!--begin::Option-->
                                                            <label
                                                                class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6"
                                                                data-kt-button="true">
                                                                <!--begin::Radio-->
                                                                <span
                                                                    class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="Gender" value="1">
                                                                </span>
                                                                <!--end::Radio-->
                                                                <!--begin::Info-->
                                                                <span class="ms-5">
                                                                    <span
                                                                        class="fs-4 fw-bolder text-gray-800 d-block">يعمل</span>
                                                                </span>
                                                                <!--end::Info-->
                                                            </label>
                                                            <!--end::Option-->
                                                        </div>
                                                        <div class="col">
                                                            <!--begin::Option-->
                                                            <label
                                                                class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6"
                                                                data-kt-button="true">
                                                                <!--begin::Radio-->
                                                                <span
                                                                    class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="Gender" value="1">
                                                                </span>
                                                                <!--end::Radio-->
                                                                <!--begin::Info-->
                                                                <span class="ms-5">
                                                                    <span
                                                                        class="fs-4 fw-bolder text-gray-800 d-block">لا يعمل</span>
                                                                </span>
                                                                <!--end::Info-->
                                                            </label>
                                                            <!--end::Option-->
                                                        </div>
                                                        <div class="col">
                                                            <!--begin::Option-->
                                                            <label
                                                                class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6"
                                                                data-kt-button="true">
                                                                <!--begin::Radio-->
                                                                <span
                                                                    class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="Gender" value="1">
                                                                </span>
                                                                <!--end::Radio-->
                                                                <!--begin::Info-->
                                                                <span class="ms-5">
                                                                    <span
                                                                        class="fs-4 fw-bolder text-gray-800 d-block">يعمل لحسابه الشخصي</span>
                                                                </span>
                                                                <!--end::Info-->
                                                            </label>
                                                            <!--end::Option-->
                                                        </div>
                                                    </div>
                                                    <!--end::Row-->
                                                </div>

                                            </div>



                                        </div>
                                        <br>

                                        <div class="d-flex flex-column flex-md-row gap-5">
                                            <div class="flex-row-fluid">
                                                <!--begin::Label-->
                                                <label for="place_birth" class="required form-label">  أسم المشغل</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control" type="text" id="place_birth" name="place_birth"
                                                    placeholder="" value="">
                                                <!--end::Input-->
                                            </div>


                                            <div class="flex-row-fluid">
                                                <!--begin::Label-->
                                                <label for="full_name" class="required form-label"> رقم الهاتف</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control" type="tel" id="full_name" name="full_name"
                                                    placeholder="" value="">
                                                <!--end::Input-->
                                            </div>
                                            <div class="fv-row flex-row-fluid fv-plugins-icon-container">
                                                <!--begin::Label-->
                                                <label for="id_number" class="required form-label">رقم الجوال </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control" type="tel" id="id_number" name="id_number"
                                                    placeholder="" value="">
                                                <!--end::Input-->
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>

                                        </div>
                                        <br> <br>
                                        <div class="flex-row-fluid">
                                            <!--begin::Label-->
                                            <label for="place_birth" class="required form-label">  أسم الشخص المسجل</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input class="form-control" type="text" id="place_birth" name="place_birth"
                                                placeholder="" value="">
                                            <!--end::Input-->
                                        </div>

                                        <!--end::Input group-->


                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::General options-->


                            </div>
                        </div>
                        <br> <br>

                    </div>
                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <a href="../../demo1/dist/apps/ecommerce/catalog/products.html" id="kt_ecommerce_add_product_cancel"
                            class="btn btn-light me-5">الغاء</a>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                            <span class="indicator-label">حفظ</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <!--end::Button-->
                    </div>
                </div>
                <!--end::Main column-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->

@endsection
@section('js')
