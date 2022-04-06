@extends('layout.main')
@section('title', 'نموذج الاحالة')
@section('css')
@section('content')

<div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">

        <form class="form d-flex flex-column flex-lg-row">
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
                                        <h2> نموذج  الإحالة</h2>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="select_risk_level" class="form-label required">مستوى الخطورة</label>

                                            <select class="form-select form-control form-control-solid"
                                                aria-label="Default select example" id="select_risk_level"
                                                name="select_risk_level">
                                                <option value="AE" selected> أختار</option>
                                                <option value="AE">مستوى أول </option>
                                                <option value="GB">  مستوى ثاني</option>
                                                <option value="GB">  مستوى ثالث </option>
                                                <option value="GB"> نقل الحالة</option>


                                            </select>

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="case_code" class="form-label required">رمز الحالة</label>
                                            <input type="text" class="form-control form-control-solid" id="case_code"
                                                name="case_code" value="1020302010" disabled>

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="age" class="form-label required"> عمر الطفل  </label>
                                            <input type="text" class="form-control form-control-solid" id="age"
                                                name="age" value="12" disabled>

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="gender" class="form-label required">الجنس </label>
                                            <input type="text" class="form-control form-control-solid" id="gender"
                                                name="gender" value="ذكر" disabled>

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="governorate" class="form-label required"> المحافظة  </label>
                                            <input type="text" class="form-control form-control-solid" id="governorate"
                                                name="governorate" value="خانيونس" disabled>

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="city" class="form-label required"> المدينة  </label>
                                            <input type="text" class="form-control form-control-solid" id="city"
                                                name="city" value="البلد" disabled>

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="area" class="form-label required"> الحي  </label>
                                            <input type="text" class="form-control form-control-solid" id="area"
                                                name="area" value="جلال" disabled>

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="application_date" class="form-label required">  تاريخ الطلب </label>
                                            <input type="date" class="form-control form-control-solid"
                                                id="application_date" name="application_date">

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
                                        <h2>معلومات عن الوكالة التي نفذت الإحالة</h2>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="row">

                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="organization_name" class="form-label required"> اسم المؤسسة  </label>
                                            <input type="text" class="form-control form-control-solid" id="organization_name"
                                                name="organization_name" >

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="referrers_name" class="form-label required">  اسم الشخص </label>
                                            <input type="text" class="form-control form-control-solid" id="referrers_name"
                                                name="referrers_name" >

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="job_title" class="form-label required"> المسمى الوظيفي </label>
                                            <input type="text" class="form-control form-control-solid" id="job_title"
                                                name="job_title" >

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="communication_type" class="form-label required"> وسيلة الاتصال  </label>
                                            <input type="text" class="form-control form-control-solid" id="communication_type"
                                                name="communication_type" >

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
                                        <h2>معلومات عن الوكالة التي تمت الإحالة اليها</h2>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="row">

                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="organization_name_two" class="form-label required"> اسم المؤسسة  </label>
                                            <input type="text" class="form-control form-control-solid" id="organization_name_two"
                                                name="organization_name_two" >

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="recipients_name" class="form-label required">اسم الشخص المستقبل</label>
                                            <input type="text" class="form-control form-control-solid" id="recipients_name"
                                                name="recipients_name" >

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="communication_type_two" class="form-label required"> وسيلة الاتصال  </label>
                                            <input type="text" class="form-control form-control-solid" id="communication_type_two"
                                                name="communication_type_two" >

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
                                        <h2>الخدمات المطلوبة</h2>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="referrals_services_cd" class="form-label required"> الخدمات  </label>

                                            <select class="form-select form-control form-control-solid"
                                                aria-label="Default select example" id="referrals_services_cd"
                                                name="referrals_services_cd">
                                                <option value="AE" selected> أختار</option>
                                                <option value="AE"> 1 </option>
                                                <option value="GB">   2  </option>
                                                <option value="GB">   أخرى   </option>



                                            </select>

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="others" class="form-label required">أخرى</label>
                                            <input type="text" class="form-control form-control-solid" id="others"
                                                name="others" >

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
                                        <h2>إقرار الموافقة المبني على الفهم</h2>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="approval_from_parish_provider_cd" class="form-label required">منح الموافقة من مقدم الرعية</label>

                                            <select class="form-select form-control form-control-solid"
                                                aria-label="Default select example" id="approval_from_parish_provider_cd"
                                                name="approval_from_parish_provider_cd">
                                                <option value="AE" selected> أختار</option>
                                                <option value="AE"> نعم  </option>
                                                <option value="GB">لا </option>
                                                <option value="GB"> لا أعلم</option>



                                            </select>

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="approval_from_child_cd" class="form-label required">منح موافقة الطفل</label>

                                            <select class="form-select form-control form-control-solid"
                                                aria-label="Default select example" id="approval_from_child_cd"
                                                name="approval_from_child_cd">
                                                <option value="AE" selected> أختار</option>
                                                <option value="AE"> نعم  </option>
                                                <option value="GB">لا </option>
                                                <option value="GB"> لا أعلم</option>



                                            </select>

                                        </div>


                                   </div>

                                </div>


                            </div>
                            <!--end::General options-->


                        </div>
                    </div>


                </div>






                <div class="d-flex justify-content-end">
                    <!--begin::Button-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/products.html" id="kt_ecommerce_add_product_cancel"
                        class="btn btn-light me-5">الغاء</a>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button type="submit" class="btn btn-primary">
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
<script src="{{ asset('assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
<script>
    $('#kt_docs_repeater_basic').repeater({
            initEmpty: true,

            defaultValues: {
                'text-input': 'foo'
            },

            show: function() {
                $(this).slideDown();
            },

            hide: function(deleteElement) {
                $(this).slideUp(deleteElement);
            }
        });
</script>
<script>
    $('#kt_docs_repeater_basic_two').repeater({
            initEmpty: true,

            defaultValues: {
                'text-input': 'foo'
            },

            show: function() {
                $(this).slideDown();
            },

            hide: function(deleteElement) {
                $(this).slideUp(deleteElement);
            }
        });
</script>
<script>
    $('#kt_docs_repeater_basic_three').repeater({
            initEmpty: true,

            defaultValues: {
                'text-input': 'foo'
            },

            show: function() {
                $(this).slideDown();
            },

            hide: function(deleteElement) {
                $(this).slideUp(deleteElement);
            }
        });
</script>



@stop
