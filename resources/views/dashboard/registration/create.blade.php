@extends('layout.main')
@section('title', ' نموذج التسجيل')
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
                                            <h2> قسم معلومات الطفل </h2>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="application_type_cd" class="form-label">نوع الطلب  </label>

                                                <select class="form-select form-control form-control-solid"
                                                    aria-label="Default select example" name="application_type_cd" id="application_type_cd">
                                                    <option selected>أختار</option>
                                                    <option value="AE">عادي </option>
                                                    <option value="AE">عاجل </option>
                                                    <option value="GB"> طارئ  </option>
                                                    <option value="GB">نقل</option>

                                                </select>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8 ">

                                                <label for="application_date" class="form-label required"> تاريخ الطلب </label>
                                                <input type="date" class="form-control form-control-solid" name="application_date" id="application_date">

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="case_code" class="form-label required"> رمز الحالة </label>
                                                <input type="number" class="form-control form-control-solid" name="case_code" id="case_code">

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="id_number" class="form-label "> رقم الهوية </label>
                                                <input type="number" class="form-control form-control-solid" name="id_number" id="id_number">

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="full_name" class="form-label "> الاسم بالكامل </label>
                                                <input type="text" class="form-control form-control-solid" name="full_name" id="full_name">

                                            </div>
                                           <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="citzienship_cd" class="form-label required"> حالة
                                                    المواطنة</label>

                                                <select class="form-select form-control form-control-solid"
                                                    aria-label="Default select example" name="citzienship_cd" id="citzienship_cd">
                                                    <option selected> أختار</option>
                                                    <option value="1">مواطن</option>
                                                    <option value="2">لاجئ</option>

                                                </select>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="age" class="form-label ">  العمر   </label>
                                                <input type="number" class="form-control form-control-solid" name="age" id="age">

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="place_of_date" class="form-label ">مكان الميلاد</label>
                                                <input type="text" class="form-control form-control-solid" name="place_of_date" id="place_of_date">

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="gender_cd" class="form-label required"> الجنس </label>

                                                <select class="form-select form-control form-control-solid"
                                                    aria-label="Default select example" id="gender_cd" name="gender_cd">
                                                    <option selected> أختار</option>
                                                    <option value="1">ذكر</option>
                                                    <option value="2">أنثى</option>

                                                </select>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="parents_approval_cd" class="form-label required">الموافقة من الوالدين</label>

                                                <select class="form-select form-control form-control-solid"
                                                    aria-label="Default select example" id="parents_approval_cd" name="parents_approval_cd">
                                                    <option selected> أختار</option>
                                                    <option value="1">نعم</option>
                                                    <option value="2">لا</option>
                                                    <option value="2">بشكل جزئي</option>

                                                </select>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="approval_details " class="form-label required"> تفاصيل الموافقة </label>
                                                <textarea class="form-control form-control-solid" id="approval_details " name="approval_details " rows="4" cols="50"></textarea>

                                            </div>





                                        </div>

                                    </div>
                                </div>
                                <!--end::General options-->


                            </div>
                        </div>


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
                                            <h2> قسم العائلة /مقدمي الرعاية </h2>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="protection_issues_cd" class="form-label"> إختار قضايا الحماية</label>

                                                <select class="form-select form-control form-control-solid"
                                                    aria-label="Default select example" name="protection_issues_cd" id="protection_issues_cd">
                                                    <option selected>أختار</option>
                                                    <option value="AE">عادي </option>
                                                    <option value="AE">عاجل </option>
                                                    <option value="GB"> طارئ  </option>
                                                    <option value="GB">نقل</option>

                                                </select>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">
                                                <label for="other_protection_issue_description" class="form-label required">  وصف اخرى   </label>
                                                <textarea class="form-control form-control-solid" id="other_protection_issue_description" name="other_protection_issue_description" rows="4" cols="50"></textarea>

                                            </div>
                                         </div>

                                    </div>
                                </div>
                                <!--end::General options-->


                            </div>
                        </div>


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
                                            <h2>ملخص </h2>
                                        </div>
                                        <div class="container">
                                            <div class="row">

                                                <div class="col-md-4 col-sm-12 mt-8">
                                                    <label for="case_summary" class="form-label required">ملخص الحالة </label>
                                                    <textarea class="form-control form-control-solid" id="case_summary" name="case_summary" rows="4" cols="50"></textarea>

                                                </div>
                                                <div class="col-md-4 col-sm-12 mt-8">
                                                    <label for="procedure_summary" class="form-label required">ملخص الإجراءات النتخذة</label>
                                                    <textarea class="form-control form-control-solid" id="procedure_summary" name="procedure_summary" rows="4" cols="50"></textarea>

                                                </div>
                                             </div>

                                        </div>
                                    </div>

                                </div>
                                <!--end::General options-->


                            </div>
                        </div>


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
                                            <h2> التخطيط للتتقييم المبدأي</h2>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">

                                            <div class="col-md-4 col-sm-12 mt-8">
                                                <label for="who_will_you_meet_firs" class="form-label required">من ستقابل اولاً</label>
                                                <textarea class="form-control form-control-solid" id="who_will_you_meet_firs" name="who_will_you_meet_firs" rows="4" cols="50"></textarea>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">
                                                <label for="where_interview_take_place" class="form-label required">أين ستتم المقابلة</label>
                                                <textarea class="form-control form-control-solid" id="where_interview_take_place" name="where_interview_take_place" rows="4" cols="50"></textarea>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">
                                                <label for="how_reporter_be_safeguarded" class="form-label required">كيف ستتم حماية المبلغ </label>
                                                <textarea class="form-control form-control-solid" id="how_reporter_be_safeguarded" name="how_reporter_be_safeguarded" rows="4" cols="50"></textarea>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">
                                                <label for="what_information_willbe_give_to_abuser" class="form-label required">ما هي المعلومات التي سيتم إعطاؤها المعتدي</label>
                                                <textarea class="form-control form-control-solid" id="what_information_willbe_give_to_abuser" name="what_information_willbe_give_to_abuser" rows="4" cols="50"></textarea>

                                            </div>
                                         </div>

                                    </div>
                                </div>
                                <!--end::General options-->


                            </div>
                        </div>

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
                                            <h2> الخاتمة الطلب</h2>
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-12 mt-8">

                                                    <label for="risk_level_cd" class="form-label">مستوى الخطر</label>

                                                    <select class="form-select form-control form-control-solid"
                                                        aria-label="Default select example" name="risk_level_cd" id="risk_level_cd">
                                                        <option selected>أختار</option>
                                                        <option value="AE">مستوى 1 </option>
                                                        <option value="AE">مستوى 2 </option>
                                                        <option value="GB"> مستوى 3  </option>
                                                        <option value="GB">مستوى 4</option>

                                                    </select>

                                                </div>
                                                <div class="col-md-4 col-sm-12 mt-8">

                                                    <label for="case_manager_name_id_fk" class="form-label">اسم الشخص المسجل /مدير الحالة</label>

                                                    <select class="form-select form-control form-control-solid"
                                                        aria-label="Default select example" name="case_manager_name_id_fk" id="case_manager_name_id_fk">
                                                        <option selected>أختار</option>
                                                        <option value="AE"> 1   </option>
                                                        <option value="AE"> 2 </option>


                                                    </select>

                                                </div>
                                                <div class="col-md-4 col-sm-12 mt-8">

                                                    <label for="case_manager_approval_cd" class="form-label">إعتماد مدير الحالة</label>

                                                    <select class="form-select form-control form-control-solid"
                                                        aria-label="Default select example" id="case_manager_approval_cd" name="case_manager_approval_cd">
                                                        <option selected>أختار</option>
                                                        <option value="AE">  معتمد</option>
                                                        <option value="AE"> غير معتمد </option>


                                                    </select>

                                                </div>

                                             </div>

                                        </div>
                                    </div>

                                </div>
                                <!--end::General options-->


                            </div>
                        </div>

                    </div>
                    <!--end::Tab content-->
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
