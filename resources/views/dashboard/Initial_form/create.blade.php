@extends('layout.main')
@section('title', 'نموذج التقييم المبدأي ')
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
                                            <h2>تفاصيل دراسة الحالة</h2>
                                        </div>
                                    </div>

                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-12 mt-8">

                                                    <label for="case_manager_name_id_fk" class="form-label required"> اسم مدير الحالة</label>
                                                    <input type="text" class="form-control form-control-solid" id="case_manager_name_id_fk" name="case_manager_name_id_fk" value="احمد محمد" disabled>

                                                </div>
                                                <div class="col-md-4 col-sm-12 mt-8">

                                                    <label for="case_code" class="form-label required">رمز الحالة</label>
                                                    <input type="text" class="form-control form-control-solid" id="case_code" name="case_code" value="10203020" disabled>

                                                </div>


                                                <div class="col-md-4 col-sm-12 mt-8">

                                                    <label for="evaluation_initial_start_date" class="form-label required">تاريخ  بدء التقييم  </label>
                                                    <input type="date" class="form-control form-control-solid" name="evaluation_initial_start_date" id="evaluation_initial_start_date">

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
                                            <h2>تفاصيل المقابلات</h2>
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

                                                            <label for="person_interviewed" class="form-label required"> الشخص الذي تمت مقابلته</label>
                                                            <input type="text" class="form-control form-control-solid" name="person_interviewed" id="person_interviewed">

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="connection_type" class="form-label required">نوع الاتصال</label>

                                                            <select class="form-select form-control form-control-solid"
                                                                aria-label="Default select example" id="connection_type" name="connection_type">
                                                                <option value="AE" selected> أختار</option>
                                                                <option value="AE"  > مؤسسة</option>
                                                                <option value="GB"  > فرد من العائلة</option>
                                                                <option value="GB"  >المدرسة</option>

                                                            </select>

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for=" " class="form-label required">التاريخ</label>
                                                            <input type="date" class="form-control form-control-solid" name="date" id="date">

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="place" class="form-label required"> المكان</label>
                                                            <input type="text" class="form-control form-control-solid" name="place" id="place">

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="communication_way" class="form-label required">طريقه التواصل</label>

                                                            <select class="form-select form-control form-control-solid"
                                                                aria-label="Default select example" id="communication_way" name="communication_way">
                                                                <option value="AE" selected> أختار</option>

                                                                <option value="AE"  > تليفون</option>
                                                                <option value="GB"  > زيارة منزلية</option>
                                                                <option value="GB"  >إجتماع </option>

                                                            </select>

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

                                                                <label for="person_interviewed" class="form-label required"> الشخص الذي تمت مقابلته</label>
                                                                <input type="text" class="form-control form-control-solid" name="person_interviewed" id="person_interviewed">

                                                            </div>
                                                            <div class="col-md-4 col-sm-12 mt-8">

                                                                <label for="connection_type" class="form-label required">نوع الاتصال</label>

                                                                <select class="form-select form-control form-control-solid"
                                                                    aria-label="Default select example" id="connection_type" name="connection_type">
                                                                    <option value="AE" selected> أختار</option>
                                                                    <option value="AE"  > مؤسسة</option>
                                                                    <option value="GB"  > فرد من العائلة</option>
                                                                    <option value="GB"  >المدرسة</option>

                                                                </select>

                                                            </div>
                                                            <div class="col-md-4 col-sm-12 mt-8">

                                                                <label for=" " class="form-label required">التاريخ</label>
                                                                <input type="date" class="form-control form-control-solid" name="date" id="date">

                                                            </div>
                                                            <div class="col-md-4 col-sm-12 mt-8">

                                                                <label for="place" class="form-label required"> المكان</label>
                                                                <input type="text" class="form-control form-control-solid" name="place" id="place">

                                                            </div>
                                                            <div class="col-md-4 col-sm-12 mt-8">

                                                                <label for="communication_way" class="form-label required">طريقه التواصل</label>

                                                                <select class="form-select form-control form-control-solid"
                                                                    aria-label="Default select example" id="communication_way" name="communication_way">
                                                                    <option value="AE" selected> أختار</option>

                                                                    <option value="AE"  > تليفون</option>
                                                                    <option value="GB"  > زيارة منزلية</option>
                                                                    <option value="GB"  >إجتماع </option>

                                                                </select>

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
                        <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <!--begin::General options-->
                                <div class="card card-flush py-10">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>تكوين الأسرة</h2>
                                        </div>
                                    </div>

                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-12 mt-8">

                                                    <label for="relationship_cd" class="form-label required">العلاقة بالطفل</label>
                                                    <input type="text" class="form-control form-control-solid" id="relationship_cd" name="relationship_cd" value="أب" disabled>

                                                </div>
                                                <div class="col-md-4 col-sm-12 mt-8">

                                                    <label for="name" class="form-label required"> الاسم  </label>
                                                    <input type="text" class="form-control form-control-solid" id="name" name="name" value="محمد محمد" disabled>

                                                </div>
                                                <div class="col-md-4 col-sm-12 mt-8">

                                                    <label for="age" class="form-label required"> العمر</label>
                                                    <input type="text" class="form-control form-control-solid"  id="age" name="age"  value="23" disabled>

                                                </div>

                                                <div class="col-md-4 col-sm-12 mt-8">

                                                    <label for="gender_cd" class="form-label required">الجنس</label>

                                                    <select class="form-select form-control form-control-solid"
                                                        aria-label="Default select example" id="gender_cd" name="gender_cd">

                                                        <option value="AE" selected> ذكر</option>
                                                        <option value="GB" disabled>انثى</option>

                                                    </select>

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
                                            <h2>  ترتيبات المعيشة  الحالية </h2>
                                        </div>
                                    </div>
                                    <!--begin::Repeater-->
                                    <div id="kt_docs_repeater_basic_two">
                                        <!--begin::Form group-->
                                        <div class="form-group p-12">
                                            <div data-repeater-list="kt_docs_repeater_basic_two">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="living_arrangements_cd" class="form-label required">إختيار ترتيبات المعيشة </label>

                                                            <select class="form-select form-control form-control-solid"
                                                                aria-label="Default select example" name="living_arrangements_cd" id="living_arrangements_cd">
                                                                <option selected>اختار</option>
                                                                <option value="AE"  > في حال كان مع والديه</option>
                                                                <option value="GB"  > في حال كان منفصل عن والديه</option>

                                                            </select>

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="address_one" class="form-label required"> العنوان  </label>
                                                            <input type="text" class="form-control form-control-solid"  id="address_one" name="address_one">

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="parents_names" class="form-label required">أسماء أولياء الأمور</label>
                                                            <textarea class="form-control form-control-solid" id="parents_names" name="parents_names" rows="4" cols="50"></textarea>

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="relationship_cd" class="form-label required">العلاقة بالطفل</label>

                                                            <select class="form-select form-control form-control-solid"
                                                                aria-label="Default select example" id="relationship_cd" name="relationship_cd">
                                                                <option selected>اختار</option>
                                                                <option value="AE"  >الأب</option>
                                                                <option value="GB"  >الأم </option>
                                                                <option value="GB"  >الإخوة </option>
                                                                <option value="GB"  >أقرباء </option>
                                                                <option value="GB"  >أخرونF29</option>

                                                            </select>

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

                                                                <label for="living_arrangements_cd" class="form-label required">إختيار ترتيبات المعيشة </label>

                                                                <select class="form-select form-control form-control-solid"
                                                                    aria-label="Default select example" name="living_arrangements_cd" id="living_arrangements_cd">
                                                                    <option selected>اختار</option>
                                                                    <option value="AE"  > في حال كان مع والديه</option>
                                                                    <option value="GB"  > في حال كان منفصل عن والديه</option>

                                                                </select>

                                                            </div>
                                                            <div class="col-md-4 col-sm-12 mt-8">

                                                                <label for="address" class="form-label required"> العنوان  </label>
                                                                <input type="text" class="form-control form-control-solid" id="address" name="address" >

                                                            </div>
                                                            <div class="col-md-4 col-sm-12 mt-8">

                                                                <label for="parents_names" class="form-label required">أسماء أولياء الأمور</label>
                                                                <textarea class="form-control form-control-solid" id="parents_names" name="parents_names" rows="4" cols="50"></textarea>

                                                            </div>
                                                            <div class="col-md-4 col-sm-12 mt-8">

                                                                <label for="relationship_cd" class="form-label required">العلاقة بالطفل</label>

                                                                <select class="form-select form-control form-control-solid"
                                                                    aria-label="Default select example" id="relationship_cd" name="relationship_cd">
                                                                    <option selected>اختار</option>
                                                                    <option value="AE"  >الأب</option>
                                                                    <option value="GB"  >الأم </option>
                                                                    <option value="GB"  >الإخوة </option>
                                                                    <option value="GB"  >أقرباء </option>
                                                                    <option value="GB"  >أخرونF29</option>

                                                                </select>

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
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="are_there_current_care_concerns_cd" class="form-label required">هل هنالك مخاوف للرعاية الحالية</label>

                                                <select class="form-select form-control form-control-solid"
                                                    aria-label="Default select example" id="are_there_current_care_concerns_cd" name="are_there_current_care_concerns_cd">

                                                    <option value="AE" selected> نعم</option>
                                                    <option value="GB" disabled>لا</option>

                                                </select>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="concerns_description" class="form-label required">وصف المخاوف</label>
                                                <textarea class="form-control form-control-solid" id="concerns_description" name="concerns_description" rows="4" cols="50"></textarea>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="child_last_vision_of_his_caregiver" class="form-label required">أخر رؤية للطفل لوالدته/مزودة الرعاية</label>
                                                <input type="date" class="form-control form-control-solid" id="child_last_vision_of_his_caregiver" name="child_last_vision_of_his_caregiver" >

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="where_last_seen" class="form-label required">أين ؟ </label>
                                                <textarea class="form-control form-control-solid" id="where_last_seen" name="where_last_seen" rows="4" cols="50"></textarea>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="where_has_she_been_since" class="form-label required">أين هي منذ ذلك الحين؟</label>
                                                <textarea class="form-control form-control-solid" id="where_has_she_been_since" name="where_has_she_been_since" rows="4" cols="50"></textarea>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="where_is_she_now" class="form-label required">أين هي الأن ؟ </label>
                                                <textarea class="form-control form-control-solid" id="where_is_she_now" name="where_is_she_now" rows="4" cols="50"></textarea>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="is_there_a_way_to_contact_cd" class="form-label required"> هل هناك وسيلة إتصال ؟ </label>

                                                <select class="form-select form-control form-control-solid"
                                                    aria-label="Default select example" id="is_there_a_way_to_contact_cd" name="is_there_a_way_to_contact_cd">

                                                    <option value="AE" selected> نعم</option>
                                                    <option value="GB" disabled>لا</option>

                                                </select>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="mother_contact_address" class="form-label required">عنوان التواصل</label>
                                                <textarea class="form-control form-control-solid" id="mother_contact_address" name="mother_contact_address" rows="4" cols="50"></textarea>

                                            </div>

                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for=" mother_telephone_number" class="form-label required">رقم هاتف التواصل</label>
                                                <input type="number" class="form-control form-control-solid" id=" mother_telephone_number" name=" mother_telephone_number" >

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="name_of_mother_contact_person" class="form-label required">اسم شخص التواصل</label>
                                                <input type="text" class="form-control form-control-solid" id="name_of_mother_contact_person" name="name_of_mother_contact_person" >

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
                                            <h2>احتياجات الرعاية الفورية وتقييم الرعاية   </h2>
                                        </div>
                                    </div>

                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-12 mt-8">

                                                    <label for="risk_level_cd" class="form-label">مستوى الخطر</label>

                                                    <select class="form-select form-control form-control-solid"
                                                        aria-label="Default select example" id="risk_level_cd" name="risk_level_cd">
                                                        <option selected>أختار</option>
                                                        <option value="AE">مستوى 1 </option>
                                                        <option value="AE">مستوى 2 </option>
                                                        <option value="GB"> مستوى 3  </option>
                                                        <option value="GB">مستوى 4</option>

                                                    </select>

                                                </div>
                                                <div class="col-md-4 col-sm-12 mt-8">

                                                    <label for="protection_issues" class="form-label required">القضية</label>
                                                    <input type="text" class="form-control form-control-solid" name="protection_issues" id="protection_issues" value=" القضية " disabled>

                                                </div>
                                                <div class="col-md-4 col-sm-12 mt-8">

                                                    <label for="cases_Initial_rating_cd" class="form-label"> إختار قضايا الحماية  </label>

                                                    <select class="form-select form-control form-control-solid"
                                                        aria-label="Default select example" id="cases_Initial_rating_cd" name="cases_Initial_rating_cd">
                                                        <option selected>أختار</option>
                                                        <option value="AE">  1 </option>
                                                        <option value="AE">  2 </option>
                                                        <option value="GB">   3  </option>
                                                        <option value="GB">  4</option>

                                                    </select>

                                                </div>
                                                <div class="col-md-4 col-sm-12 mt-8">

                                                    <label for="else_description" class="form-label required"> وصف أخرى</label>
                                                    <textarea class="form-control form-control-solid" id="else_description" name="else_description" rows="4" cols="50"></textarea>

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
                                            <h2> ملخص لحماية الطفل</h2>
                                        </div>
                                    </div>

                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-12 mt-8">

                                                    <label for="are_there_other_children_at_risk_cd" class="form-label">هل يوجد أطفال أخرون معرضون للخطر</label>

                                                    <select class="form-select form-control form-control-solid"
                                                        aria-label="Default select example" id="are_there_other_children_at_risk_cd" name="are_there_other_children_at_risk_cd">
                                                        <option selected>أختار</option>
                                                        <option value="AE">نعم</option>
                                                        <option value="AE">لا </option>
                                                    </select>

                                                </div>
                                                <div class="col-md-4 col-sm-12 mt-8">

                                                    <label for="existing_protective_factors" class="form-label required">عوامل حماية موجودة</label>
                                                    <textarea class="form-control form-control-solid" id="existing_protective_factors" name="existing_protective_factors" rows="4" cols="50"></textarea>

                                                </div>
                                                <div class="col-md-4 col-sm-12 mt-8">

                                                    <label for="the_child_point_of_view" class="form-label required">وجهة نظر الطفل (أراء, رغبات, مخاوف)</label>
                                                    <textarea class="form-control form-control-solid" id="the_child_point_of_view" name="the_child_point_of_view" rows="4" cols="50"></textarea>

                                                </div>
                                                <div class="col-md-4 col-sm-12 mt-8">

                                                    <label for="the_family_point_of_view" class="form-label required">وجهة نظر العائلة (أراء, رغبات, مخاوف)</label>
                                                    <textarea class="form-control form-control-solid" id="the_family_point_of_view" name="the_family_point_of_view" rows="4" cols="50"></textarea>

                                                </div>
                                                <div class="col-md-4 col-sm-12 mt-8">

                                                    <label for="other_organization_information" class="form-label required">معلومات المؤسسات الأخرى</label>
                                                    <textarea class="form-control form-control-solid" id="other_organization_information" name="other_organization_information" rows="4" cols="50"></textarea>

                                                </div>
                                                <div class="col-md-4 col-sm-12 mt-8">

                                                    <label for="developed_safety_plan_cd" class="form-label">خطة السلامة تم وضعها</label>

                                                    <select class="form-select form-control form-control-solid"
                                                        aria-label="Default select example" name="developed_safety_plan_cd" id="developed_safety_plan_cd">
                                                        <option selected>أختار</option>
                                                        <option value="AE">نعم</option>
                                                        <option value="AE">لا </option>
                                                    </select>

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
                                            <h2>الاجراءات الموصى بها من عامل الحالة</h2>
                                        </div>
                                    </div>
                                    <!--begin::Repeater-->
                                    <div id="kt_docs_repeater_basic_three">
                                        <!--begin::Form group-->
                                        <div class="form-group p-12">
                                            <div data-repeater-list="kt_docs_repeater_basic_three">
                                                <div class="container">

                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="procedure_cd" class="form-label">الإجراء المطلوب</label>

                                                            <select class="form-select form-control form-control-solid"
                                                                aria-label="Default select example" id="procedure_cd" name="procedure_cd">
                                                                <option selected>أختار</option>
                                                                <option value="AE">إيواء </option>
                                                                <option value="AE">الحماية الفورية من الأذى</option>
                                                                <option value="AE"> الاستجابة الطبية</option>
                                                                <option value="AE">الاحتياجات الأساسية</option>

                                                            </select>

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="why" class="form-label required">لماذا</label>
                                                            <input type="text" class="form-control form-control-solid" name="why" id="why">

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="due_date" class="form-label required">تاريخ الاستحقاق</label>
                                                            <input type="date" class="form-control form-control-solid" id="due_date" name="due_date" >

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="responsibility" class="form-label required">المسؤولية</label>
                                                            <input type="text" class="form-control form-control-solid" id="responsibility" name="responsibility" >

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

                                                                <label for="procedure_cd" class="form-label">الإجراء المطلوب</label>

                                                                <select class="form-control form-control-solid"
                                                                    aria-label="Default select example" id="procedure_cd" name="procedure_cd">
                                                                    <option selected>أختار</option>
                                                                    <option value="AE">إيواء </option>
                                                                    <option value="AE">الحماية الفورية من الأذى</option>
                                                                    <option value="AE"> الاستجابة الطبية</option>
                                                                    <option value="AE">الاحتياجات الأساسية</option>

                                                                </select>

                                                            </div>
                                                            <div class="col-md-4 col-sm-12 mt-8">

                                                                <label for="why" class="form-label required">لماذا</label>
                                                                <input type="text" class="form-control form-control-solid" name="why" id="why">

                                                            </div>
                                                            <div class="col-md-4 col-sm-12 mt-8">

                                                                <label for="due_date" class="form-label required">تاريخ الاستحقاق</label>
                                                                <input type="date" class="form-control form-control-solid" id="due_date" name="due_date" >

                                                            </div>
                                                            <div class="col-md-4 col-sm-12 mt-8">

                                                                <label for="responsibility" class="form-label required">المسؤولية</label>
                                                                <input type="text" class="form-control form-control-solid" id="responsibility" name="responsibility" >

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
                        <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <!--begin::General options-->
                                <div class="card card-flush py-10">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>هل تلقت الأسرة خدمات حماية سابقة</h2>
                                        </div>
                                    </div>

                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-12 mt-8">

                                                    <label for="has_family_received_prior_protection_services_cd" class="form-label">هل تلقت الأسرة خدمات حماية سابقة</label>

                                                    <select class="form-select form-control form-control-solid"
                                                        aria-label="Default select example" id="has_family_received_prior_protection_services_cd" name="has_family_received_prior_protection_services_cd">
                                                        <option selected>أختار</option>
                                                        <option value="AE">نعم</option>
                                                        <option value="AE">لا </option>
                                                    </select>

                                                </div>
                                                <div class="col-md-4 col-sm-12 mt-8">

                                                    <label for="services_description" class="form-label required">وصف الخدمات</label>
                                                    <textarea class="form-control form-control-solid" id="services_description" name="services_description" rows="4" cols="50"></textarea>

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
                                            <h2>تم تعبئة النموذج من قبل</h2>
                                        </div>
                                    </div>

                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-12 mt-8">

                                                    <label for="evaluation_initial_end_date" class="form-label required">  تاريخ انتهاء التقييم </label>
                                                    <input type="date" class="form-control form-control-solid"  id="evaluation_initial_end_date" name="evaluation_initial_end_date">

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
