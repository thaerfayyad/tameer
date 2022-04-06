@extends('layout.main')
@section('title', 'نموذج السلامة 2')
@section('css')
@section('content')

    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">

            <form   class="form d-flex flex-column flex-lg-row" >
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
                                            <h2>نموذج خطة السلامة من عمر 6 سنوات فما فوق</h2>
                                        </div>
                                    </div>

                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-12 mt-8">

                                                    <label for="case_code" class="form-label required">رمز الحالة</label>
                                                    <input type="text" class="form-control form-control-solid" id="case_code" name="case_code" value="123123" disabled>

                                                </div>

                                                <div class="col-md-4 col-sm-12 mt-8">

                                                    <label for="case_manager_name_id_fk" class="form-label required">اسم مدير الحالة</label>
                                                    <input type="text" class="form-control form-control-solid" name="case_manager_name_id_fk" id="case_manager_name_id_fk" value="محمد محمد احمد" disabled>

                                                </div>

                                                <div class="col-md-4 col-sm-12 mt-8">

                                                    <label for="safety_plan_date" class="form-label required">تاريخ خطة الأمان</label>
                                                    <input type="date" class="form-control form-control-solid" name="safety_plan_date" id="safety_plan_date">

                                                </div>
                                            </div>

                                        </div>


                                </div>
                                <!--end::General options-->


                            </div>
                        </div>


                    </div>
                    <!--end::Tab content-->
                    <div class="tab-content">
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade show active">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <!--begin::General options-->
                                <div class="card card-flush py-10">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>الأسئلة</h2>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="what_signs_of_feeling_safe_reactive" class="form-label required">ما هي علامات الشعور بالأمان وردة الفعل</label>
                                                <textarea class="form-control form-control-solid" id="what_signs_of_feeling_safe_reactive" name="what_signs_of_feeling_safe_reactive" rows="4" cols="50"></textarea>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="what_signs_feeling_unsafe_reacting" class="form-label required">ما هي علامات الشعور بعدم الأمان وردة الفعل</label>
                                                <textarea class="form-control form-control-solid" id="what_signs_feeling_unsafe_reacting" name="what_signs_feeling_unsafe_reacting" rows="4" cols="50"></textarea>

                                            </div>

                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="what_situations_feel_unsafe" class="form-label required">ما هي الأوضاع الشعور بعدم الأمان</label>
                                                <textarea class="form-control form-control-solid" id="what_situations_feel_unsafe" name="what_situations_feel_unsafe" rows="4" cols="50"></textarea>

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
                        <div class="tab-pane fade show active">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <!--begin::General options-->
                                <div class="card card-flush py-10">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>الأشخاص الموثوقون</h2>
                                        </div>
                                    </div>
                                    <!--begin::Repeater-->
                                    <div id="kt_docs_repeater_basic1">
                                        <!--begin::Form group-->
                                        <div class="form-group p-12">
                                            <div data-repeater-list="kt_docs_repeater_basic">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="fullname" class="form-label required">الاسم  </label>
                                                            <input type="text" class="form-control form-control-solid" name="fullname" id="fullname">

                                                        </div>

                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="phone_number" class="form-label required">  رقم الهاتف</label>
                                                            <input type="number" class="form-control form-control-solid" name="phone_number"   id="phone_number">

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="how_can_he_help_me" class="form-label required">كيف يمكنه مساعدتي</label>
                                                            <textarea class="form-control form-control-solid" id="how_can_he_help_me" name="how_can_he_help_me" rows="4" cols="50"></textarea>

                                                        </div>


                                                    </div>


                                                </div>

                                                <div data-repeater-item>

                                                    <div class="container">
                                                        <div class="row text-start">
                                                            <div class="col-md-12 d-flex justify-content-end mt-6">
                                                                <a href="javascript:;" data-repeater-delete
                                                                    class="btn btn-sm btn-danger  ">
                                                                    <i class="la"></i>Remove
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-12 mt-8">

                                                                <label for="fullname" class="form-label required">الاسم  </label>
                                                                <input type="text" class="form-control form-control-solid" name="fullname" id="fullname">

                                                            </div>

                                                            <div class="col-md-4 col-sm-12 mt-8">

                                                                <label for="phone_number" class="form-label required">  رقم الهاتف</label>
                                                                <input type="number" class="form-control form-control-solid" name="phone_number"   id="phone_number">

                                                            </div>
                                                            <div class="col-md-4 col-sm-12 mt-8">

                                                                <label for="how_can_he_help_me" class="form-label required">كيف يمكنه مساعدتي</label>
                                                                <textarea class="form-control form-control-solid" id="how_can_he_help_me" name="how_can_he_help_me" rows="4" cols="50"></textarea>

                                                            </div>


                                                        </div>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Form group-->

                                        <!--begin::Form group-->
                                        <div class="form-group mt-2 p-12 " style="float: left;">
                                            <a href="javascript:;" data-repeater-create class="btn btn-primary">
                                                <i class="la la-plus"></i>أضافة
                                            </a>
                                        </div>
                                        <!--end::Form group-->
                                    </div>
                                    <!--end::Repeater-->

                                </div>
                                <!--end::General options-->


                            </div>
                        </div>


                    </div>
                    <div class="tab-content">
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade show active">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <!--begin::General options-->
                                <div class="card card-flush py-10">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>الأماكن الأمنة</h2>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="safe_places_in_my_house" class="form-label required">الأماكن الأمنة في منزلي</label>
                                                <textarea class="form-control form-control-solid" id="safe_places_in_my_house" name="safe_places_in_my_house" rows="4" cols="50"></textarea>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="safe_places_near_my_house" class="form-label required">الأماكن الأمنة القريبة من منزلي</label>
                                                <textarea class="form-control form-control-solid" id="safe_places_near_my_house" name="safe_places_near_my_house" rows="4" cols="50"></textarea>

                                            </div>

                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="how_get_out_of_house_indanger_case" class="form-label required"> كيفية الخروج من المنزل في حال الخطر</label>
                                                <textarea class="form-control form-control-solid" id="how_get_out_of_house_indanger_case" name="how_get_out_of_house_indanger_case" rows="4" cols="50"></textarea>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="how_get_safe_place_if_you_outside_house" class="form-label required">كيفية الوصول للمكان الأمن إذا كنت خارج المنزل </label>
                                                <textarea class="form-control form-control-solid" id="how_get_safe_place_if_you_outside_house" name="how_get_safe_place_if_you_outside_house" rows="4" cols="50"></textarea>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="who_willbe_in_mysafe_place" class="form-label required"> من سيكون موجود في مكاني الأمن</label>
                                                <textarea class="form-control form-control-solid" id="who_willbe_in_mysafe_place" name="who_willbe_in_mysafe_place" rows="4" cols="50"></textarea>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="password" class="form-label required">كلمة السر</label>
                                                <input type="text" class="form-control form-control-solid" name="password"   id="password">

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="trusted_persons_name" class="form-label required">  اسم الشخص الموثوق</label>
                                                <input type="text" class="form-control form-control-solid" name="trusted_persons_name"   id="trusted_persons_name">

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
                        <div class="tab-pane fade show active">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <!--begin::General options-->
                                <div class="card card-flush py-10">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>الاتصال بالشرطة</h2>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="police_department_no" class="form-label required">رقم قسم الشرطة</label>
                                                <input type="text" class="form-control form-control-solid" name="police_department_no" id="police_department_no">

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="police_phone_number" class="form-label required">رقم الهاتف</label>
                                                <input type="number" class="form-control form-control-solid" name="police_phone_number" id="police_phone_number">

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="police_address" class="form-label required">العنوان</label>
                                                <input type="text" class="form-control form-control-solid" name="police_address" id="police_address">

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="police_explanation_of_situations" class="form-label required">شرح المواقف</label>
                                                <textarea class="form-control form-control-solid" id="police_explanation_of_situations" name="police_explanation_of_situations" rows="4" cols="50"></textarea>

                                            </div>

                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="xpolice_answer_the_questionsx" class="form-label required">الإجابة على الأسئلة</label>
                                                <textarea class="form-control form-control-solid" id="police_answer_the_questions" name="police_answer_the_questions" rows="4" cols="50"></textarea>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="i_responsible_for_helping_my_brothers_cd" class="form-label required"> هل أنا مسؤول عن مساعدة إخوتي أو
                                                    أطفال أخرين في حال الخطر</label>

                                                <select class=" form-select form-control form-control-solid"
                                                    aria-label="Default select example" name="i_responsible_for_helping_my_brothers_cd" id="i_responsible_for_helping_my_brothers_cd">
                                                    <option selected>أختار</option>
                                                    <option value="AE">نعم</option>
                                                    <option value="GB">لا </option>
                                                </select>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="i_responsible_for_helping_my_brothers_details" class="form-label required">التفاصيل</label>
                                                <textarea class="form-control form-control-solid" id="i_responsible_for_helping_my_brothers_details" name="i_responsible_for_helping_my_brothers_details" rows="4" cols="50"></textarea>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="mybrothers_responsible_forhelp_me_cd" class="form-label required">هل أخوتي أو الأطفال الأخرين مسؤولين عن
                                                    مساعدتي في حال الخطر </label>

                                                <select class="form-select form-control form-control-solid"
                                                    aria-label="Default select example" name="mybrothers_responsible_forhelp_me_cd" id="mybrothers_responsible_forhelp_me_cd">
                                                    <option selected>أختار</option>
                                                    <option value="AE">نعم</option>
                                                    <option value="GB">لا </option>
                                                </select>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="mybrothers_responsible_forhelp_me_details" class="form-label required">التفاصيل</label>
                                                <textarea class="form-control form-control-solid" id="mybrothers_responsible_forhelp_me_details" name="mybrothers_responsible_forhelp_me_details" rows="4" cols="50"></textarea>

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
                        <div class="tab-pane fade show active">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <!--begin::General options-->
                                <div class="card card-flush py-10">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2> بيانات الاسرة </h2>
                                        </div>
                                    </div>
                                    <!--begin::Repeater-->
                                    <div id="kt_docs_repeater_basic">
                                        <!--begin::Form group-->
                                        <div class="form-group p-12">
                                            <div data-repeater-list="kt_docs_repeater_basic">
                                                <div class="container">
                                                    <div class="row">

                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="things_taken_quickly" class="form-label required"> الشئ </label>
                                                            <input type="text" class="form-control form-control-solid"
                                                               name="things_taken_quickly" id="things_taken_quickly">

                                                        </div>


                                                    </div>

                                                </div>

                                                <div data-repeater-item>

                                                    <div class="container">
                                                        <div class="row text-start">
                                                            <div class="col-md-12 d-flex justify-content-end mt-6">
                                                                <a href="javascript:;" data-repeater-delete
                                                                    class="btn btn-sm btn-danger  ">
                                                                    <i class="la"></i>Remove
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="row">

                                                            <div class="col-md-4 col-sm-12 mt-8">

                                                                <label for="things_taken_quickly" class="form-label required"> الشئ </label>
                                                                <input type="text" class="form-control form-control-solid"
                                                                   name="things_taken_quickly" id="things_taken_quickly">

                                                            </div>


                                                        </div>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Form group-->

                                        <!--begin::Form group-->
                                        <div class="form-group mt-2 p-12 " style="float: left;">
                                            <a href="javascript:;" data-repeater-create class="btn btn-primary">
                                                <i class="la la-plus"></i>أضافة
                                            </a>
                                        </div>
                                        <!--end::Form group-->
                                    </div>
                                    <!--end::Repeater-->

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
                        <button type="submit"  class="btn btn-primary">
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
        $('#kt_docs_repeater_basic1').repeater({
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
