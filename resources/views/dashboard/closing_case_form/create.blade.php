@extends('layout.main')
@section('title', ' نموذج إغلاق الحالة')
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
                                        <h2>القسم الأول (معلومات الطفل)</h2>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="case_code" class="form-label required">رمز الحالة</label>
                                            <input type="text" class="form-control form-control-solid" id="case_code"
                                                name="case_code" value="1020302010" disabled>

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="case_manager_name_id_fk" class="form-label required"> اسم مدير الحالة  </label>
                                            <input type="text" class="form-control form-control-solid" id="case_manager_name_id_fk"
                                                name="case_manager_name_id_fk" value=" ثائر فياض" disabled>

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="child_name_quad" class="form-label required"> اسم الطفل رباعي </label>
                                            <input type="text" class="form-control form-control-solid" id="child_name_quad"
                                                name="child_name_quad" value="محمد احمد محمد سعد" disabled>

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="last_review_date" class="form-label required">تاريخ أخر مراجعة</label>
                                            <input type="text" class="form-control form-control-solid" id="last_review_date"
                                                name="last_review_date" value=" 02/01/2022 " disabled>

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
                                        <h2>القسم الثاني (تفاصيل الاغلاق)</h2>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="select_reason_for_closing_cd " class="form-label required"> إختر سبب الاغلاق</label>

                                            <select class="form-select form-control form-control-solid"
                                                aria-label="Default select example" id="select_reason_for_closing_cd " name="select_reason_for_closing_cd ">
                                                <option value="AE" selected> أختار</option>
                                                <option value="AE"  > تم معالجة مشاكل الحماية </option>
                                                <option value="GB" >الطفل اصبح 18 سنة</option>
                                                <option value="GB" >وفاة الطفل  </option>
                                                <option value="GB" >نقل الحالة </option>
                                                <option value="GB" > أخرى (حدد)</option>



                                            </select>

                                        </div>

                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="other" class="form-label required"> أخرى  </label>
                                            <input type="text" class="form-control form-control-solid" id="other"
                                                name="other" >

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="details" class="form-label required"> التفاصيل  </label>
                                            <textarea class="form-control form-control-solid" id="details" name="details" rows="4" cols="50"></textarea>

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="quadrant_care_provider_name" class="form-label required">اسم مزود الرعاية رباعي</label>
                                            <input type="text" class="form-control form-control-solid" id="quadrant_care_provider_name"
                                                name="quadrant_care_provider_name" value=" ثائر فياض" disabled>

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="relationship_with_the_child" class="form-label required">علاقته بالطفل</label>
                                            <input type="text" class="form-control form-control-solid" id="relationship_with_the_child"
                                                name="relationship_with_the_child" value=" اب " disabled>

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="address_of_the_relationship_provider" class="form-label required">العنوان لمزود العلاقة</label>
                                            <input type="text" class="form-control form-control-solid" id="address_of_the_relationship_provider"
                                                name="address_of_the_relationship_provider" value="غزة " disabled>

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="provider_phone_number" class="form-label required">رقم جوال المزود</label>
                                            <input type="text" class="form-control form-control-solid" id="provider_phone_number"
                                                name="provider_phone_number" value="1020302010 " disabled>

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="are_these_permanent_arrangements_cd " class="form-label required"> هل هذه ترتيبات دائمة </label>

                                            <select class="form-select form-control form-control-solid"
                                                aria-label="Default select example" id="are_these_permanent_arrangements_cd " name="are_these_permanent_arrangements_cd ">
                                                <option value="AE" selected> أختار</option>
                                                <option value="GB" > نعم </option>
                                                <option value="GB" > لا   </option>

                                            </select>

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">
                                            <label for="are_these_permanent_arrangements_cd" class="form-label required">هل هذه ترتيبات دائمة</label>

                                            <select class="form-select form-control form-control-solid"
                                                aria-label="Default select example" id="are_these_permanent_arrangements_cd " name="are_these_permanent_arrangements_cd">
                                                <option value="AE" selected> أختار</option>
                                                <option value="GB" > نعم </option>
                                                <option value="GB" > لا   </option>

                                            </select>

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">
                                            <label for="shall_I_tell_the_child_who_to_call_cd" class="form-label required"> هل أخبر الطفل بالذي سيتصل به </label>

                                            <select class="form-select form-control form-control-solid"
                                                aria-label="Default select example" id="shall_I_tell_the_child_who_to_call_cd " name="shall_I_tell_the_child_who_to_call_cd">
                                                <option value="AE" selected> أختار</option>
                                                <option value="GB" > نعم </option>
                                                <option value="GB" > لا   </option>

                                            </select>

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="contact_name" class="form-label required">اسم جهة الاتصال</label>
                                            <input type="text" class="form-control form-control-solid" id="contact_name"
                                                name="contact_name" >

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="contact_number" class="form-label required">رقم التواصل </label>
                                            <input type="number" class="form-control form-control-solid" id="contact_number"
                                                name="contact_number"  >

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
                                        <h2> القسم الثالث (اكمال النموذج)</h2>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="row">

                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="supervisor_name" class="form-label required"> اسم المشرف</label>
                                            <input type="number" class="form-control form-control-solid" id="supervisor_name"
                                                name="supervisor_name" value="xx" disabled>

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="job_title" class="form-label required">   المسمى الوظيفي</label>
                                            <input type="text" class="form-control form-control-solid" id="job_title"
                                                name="job_title"  value="xx" disabled>

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="approval_cd " class="form-label required"> إختر سبب الاغلاق</label>

                                            <select class="form-select form-control form-control-solid"
                                                aria-label="Default select example" id="approval_cd " name="approval_cd ">
                                                <option value="AE" selected> أختار</option>
                                                <option value="GB" >   معتمد</option>
                                                <option value="GB" >غير معتمد </option>




                                            </select>

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="closing_date" class="form-label required">   تاريخ الإغلاق     </label>
                                            <input type="text" class="form-control form-control-solid" id="closing_date"
                                                name="closing_date" >

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
