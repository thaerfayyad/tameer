@extends('layout.main')
@section('title', 'أضافة طفل جديد')
@section('css')
@section('content')

    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">

            <form   class="form d-flex flex-column flex-lg-row needs-validation"  >
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

                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-12 mt-8">

                                                    <label for="full_name" class="form-label required">الاسم بالكامل </label>
                                                    <input type="text" class="form-control form-control-solid" name="full_name" id="full_name" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                      </div>
                                                </div>

                                                <div class="col-md-4 col-sm-12 mt-8">

                                                    <label for="id_number" class="form-label required"> رقم الهوية</label>
                                                    <input type="number" class="form-control form-control-solid" name="id_number" id="id_number">

                                                </div>
                                                <div class="col-md-4 col-sm-12 mt-8">

                                                    <label for="age" class="form-label required"> العمر</label>
                                                    <input type="text" value="14" disabled
                                                        class="form-control form-control-solid" name="age" id="age">

                                                </div>
                                                <div class="col-md-4 col-sm-12 mt-8">

                                                    <label for="date_of_birth" class="form-label required">تاريخ الميلاد</label>
                                                    <input type="date" class="form-control form-control-solid" name="date_of_birth" id="date_of_birth">

                                                </div>

                                                <div class="col-md-4 col-sm-12 mt-6">

                                                    <label for="place_of_birth" class="form-label required"> مكان الميلاد </label>
                                                    <input type="text" class="form-control form-control-solid" name="place_of_birth" id="place_of_birth">

                                                </div>
                                                <div class="col-md-4 col-sm-12 mt-8">

                                                    <label for="citzienship_cd" class="form-label required"> حالة المواطنة</label>

                                                    <select class="form-select form-control form-control-solid"
                                                        aria-label="Default select example" name="citzienship_cd" id="citzienship_cd">
                                                        <option selected> أختار</option>
                                                        <option value="1">مواطن</option>
                                                        <option value="2">لاجئ</option>

                                                    </select>

                                                </div>
                                                <div class="col-md-4 col-sm-12 mt-8">

                                                    <label for="gender_cd" class="form-label required"> الجنس </label>

                                                    <select class="form-control form-control-solid" name="gender_cd" id="gender_cd"
                                                        aria-label="Default select example" >
                                                        <option selected>أختار</option>
                                                        <option value="1">ذكر</option>
                                                        <option value="2">أنثى</option>
                                                    </select>

                                                </div>
                                                <div class="col-md-4 col-sm-12 mt-8">

                                                    <label for=" " class="form-label required"> نوع الإعاقة </label>

                                                    <select class="form-select form-control form-control-solid"
                                                        aria-label="Default select example" name="disability_type_cd" id="disability_type_cd">
                                                        <option selected> أختار</option>
                                                        <option value="AE">سمعية</option>
                                                        <option value="GB">بصرية </option>
                                                        <option value="GB">تواصل </option>
                                                        <option value="GB">جسدية </option>
                                                        <option value="GB">عقلية </option>
                                                        <option value="GB">متعددة </option>

                                                    </select>

                                                </div>
                                                <div class="col-md-4 col-sm-12 mt-8">

                                                    <label for="notes" class="form-label required">الملاحظات</label>
                                                    <textarea class="form-control form-control-solid" id="notes" name="notes" rows="4" cols="50"></textarea>

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

                                                            <label for=" " class="form-label required"> العلاقة بالطفل
                                                            </label>

                                                            <select class="form-select form-control form-control-solid"
                                                                aria-label="Default select example" id="relationship_cd" name="relationship_cd">
                                                                <option selected>أختار</option>
                                                                <option value="AE">أب</option>
                                                                <option value="GB">أم </option>
                                                                <option value="GB">أخت </option>
                                                                <option value="GB">أخ</option>
                                                                <option value="GB">زوجة الأب</option>
                                                                <option value="GB">زوجة الأم</option>
                                                                <option value="GB"> جد</option>
                                                            </select>

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="full_name_two" class="form-label required"> الأسم
                                                                بالكامل</label>
                                                            <input type="text" class="form-control form-control-solid"
                                                                id="full_name_two" name="full_name_two">
                                                        <div class="invalid-feedback">
                                                            Please choose a username.
                                                        </div>

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="id_number_two" class="form-label required"> رقم الهوية</label>
                                                            <input type="number" class="form-control form-control-solid"
                                                                name="id_number_two" id="id_number_two">

                                                        </div>

                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="date_of_birth_two" class="form-label required">تاريخ الميلاد</label>
                                                            <input type="date" class="form-control form-control-solid"
                                                               name="date_of_birth_two" id="date_of_birth_two">

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="place_of_birth_two" class="form-label required"> مكان الميلاد
                                                            </label>
                                                            <input type="text" class="form-control form-control-solid"
                                                               name="place_of_birth_two" id="place_of_birth_two">

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="citzienship_cd_two" class="form-label required"> حالة المواطنة</label>

                                                            <select class="form-select form-control form-control-solid"
                                                                aria-label="Default select example" name="citzienship_cd_two" id="citzienship_cd_two">
                                                                <option selected> أختار</option>
                                                                <option value="1">مواطن</option>
                                                                <option value="2">لاجئ</option>

                                                            </select>

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="gender_cd_two" class="form-label required"> الجنس </label>

                                                            <select class="form-select form-control form-control-solid"
                                                                aria-label="Default select example" id="gender_cd_two" name="gender_cd_two">
                                                                <option selected> أختار</option>
                                                                <option value="1">ذكر</option>
                                                                <option value="2">أنثى</option>

                                                            </select>

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="disability_type_cd_two" class="form-label required"> نوع الإعاقة </label>

                                                            <select class="form-select form-control form-control-solid"
                                                                aria-label="Default select example" name="disability_type_cd_two" id="disability_type_cd_two">
                                                                <option selected> أختار</option>
                                                                <option value="AE">سمعية</option>
                                                                <option value="GB">بصرية </option>
                                                                <option value="GB">تواصل </option>
                                                                <option value="GB">جسدية </option>
                                                                <option value="GB">عقلية </option>
                                                                <option value="GB">متعددة </option>

                                                            </select>

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="living_status_cd" class=" form-label required"> حالة العيش </label>

                                                            <select class="form-control form-control-solid"
                                                                aria-label="Default select example" id="living_status_cd" name="living_status_cd">
                                                                <option selected> أختار</option>
                                                                <option value="AE">يعيش مع الطفل</option>
                                                                <option value="GB">لا يعيش مع الطفل </option>


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

                                                                <label for=" " class="form-label required"> العلاقة بالطفل
                                                                </label>

                                                                <select class="form-select form-control form-control-solid"
                                                                    aria-label="Default select example" id="relationship_cd" name="relationship_cd">
                                                                    <option selected>أختار</option>
                                                                    <option value="AE">أب</option>
                                                                    <option value="GB">أم </option>
                                                                    <option value="GB">أخت </option>
                                                                    <option value="GB">أخ</option>
                                                                    <option value="GB">زوجة الأب</option>
                                                                    <option value="GB">زوجة الأم</option>
                                                                    <option value="GB"> جد</option>
                                                                </select>

                                                            </div>
                                                            <div class="col-md-4 col-sm-12 mt-8">

                                                                <label for="full_name_two" class="form-label required"> الأسم
                                                                    بالكامل</label>
                                                                <input type="text" class="form-control form-control-solid"
                                                                    id="full_name_two" name="full_name_two">
                                                            <div class="invalid-feedback">
                                                                Please choose a username.
                                                            </div>

                                                            </div>
                                                            <div class="col-md-4 col-sm-12 mt-8">

                                                                <label for="id_number_two" class="form-label required"> رقم الهوية</label>
                                                                <input type="number" class="form-control form-control-solid"
                                                                    name="id_number_two" id="id_number_two">

                                                            </div>

                                                            <div class="col-md-4 col-sm-12 mt-8">

                                                                <label for="date_of_birth_two" class="form-label required">تاريخ الميلاد</label>
                                                                <input type="date" class="form-control form-control-solid"
                                                                   name="date_of_birth_two" id="date_of_birth_two">

                                                            </div>
                                                            <div class="col-md-4 col-sm-12 mt-8">

                                                                <label for="place_of_birth_two" class="form-label required"> مكان الميلاد
                                                                </label>
                                                                <input type="text" class="form-control form-control-solid"
                                                                   name="place_of_birth_two" id="place_of_birth_two">

                                                            </div>
                                                            <div class="col-md-4 col-sm-12 mt-8">

                                                                <label for="citzienship_cd_two" class="form-label required"> حالة المواطنة</label>

                                                                <select class="form-select form-control form-control-solid"
                                                                    aria-label="Default select example" name="citzienship_cd_two" id="citzienship_cd_two">
                                                                    <option selected> أختار</option>
                                                                    <option value="1">مواطن</option>
                                                                    <option value="2">لاجئ</option>

                                                                </select>

                                                            </div>
                                                            <div class="col-md-4 col-sm-12 mt-8">

                                                                <label for="gender_cd_two" class="form-label required"> الجنس </label>

                                                                <select class="form-select form-control form-control-solid"
                                                                    aria-label="Default select example" id="gender_cd_two" name="gender_cd_two">
                                                                    <option selected> أختار</option>
                                                                    <option value="1">ذكر</option>
                                                                    <option value="2">أنثى</option>

                                                                </select>

                                                            </div>
                                                            <div class="col-md-4 col-sm-12 mt-8">

                                                                <label for="disability_type_cd_two" class="form-label required"> نوع الإعاقة </label>

                                                                <select class="form-select form-control form-control-solid"
                                                                    aria-label="Default select example" name="disability_type_cd_two" id="disability_type_cd_two">
                                                                    <option selected> أختار</option>
                                                                    <option value="AE">سمعية</option>
                                                                    <option value="GB">بصرية </option>
                                                                    <option value="GB">تواصل </option>
                                                                    <option value="GB">جسدية </option>
                                                                    <option value="GB">عقلية </option>
                                                                    <option value="GB">متعددة </option>

                                                                </select>

                                                            </div>
                                                            <div class="col-md-4 col-sm-12 mt-8">

                                                                <label for="living_status_cd" class=" form-label required"> حالة العيش </label>

                                                                <select class="form-control form-control-solid"
                                                                    aria-label="Default select example" id="living_status_cd" name="living_status_cd">
                                                                    <option selected> أختار</option>
                                                                    <option value="AE">يعيش مع الطفل</option>
                                                                    <option value="GB">لا يعيش مع الطفل </option>


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
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="governorates_cd" class="form-label required"> المحافظة </label>

                                                <select class="form-select form-control form-control-solid"
                                                    aria-label="Default select example" name="governorates_cd" id="governorates_cd">
                                                    <option selected>أختار</option>
                                                    <option value="1">شمال</option>
                                                    <option value="2">جنوب</option>
                                                    <option value="2">وسطى</option>
                                                </select>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="cities_cd" class="form-label required"> المدينة </label>

                                                <select class="form-select form-control form-control-solid"
                                                    aria-label="Default select example" id="cities_cd" name="cities_cd">
                                                    <option selected>أختار</option>
                                                    <option value="1">غزة</option>
                                                    <option value="2">خانيونس</option>
                                                    <option value="2">رفح</option>
                                                </select>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="areas_cd" class="form-label required"> الحي </label>

                                                <select class="form-select form-control form-control-solid"
                                                    aria-label="Default select example" id="areas_cd" name="areas_cd">
                                                    <option selected>أختار</option>
                                                    <option value="1">غزة</option>
                                                    <option value="2">خانيونس</option>
                                                    <option value="2">رفح</option>
                                                </select>

                                            </div>
                                            <div class="col-md-4 col-sm-12  mt-8">

                                                <label for="address" class="form-label required">العنوان</label>
                                                <input type="text" class="form-control form-control-solid" name="address" id="address">

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="phone" class="form-label required"> رقم الهاتف</label>
                                                <input type="number" class="form-control form-control-solid" name="phone" id="phone">

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="mobile" class="form-label required"> رقم الجوال</label>
                                                <input type="number" class="form-control form-control-solid" name="mobile" id="mobile">

                                            </div>
                                        </div>

                                    </div>
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
                                    <div class="container">
                                        <div class="row">

                                            <div class="col-md-4 col-sm-12  mt-8">

                                                <label for="school_name" class="form-label required">اسم المدرسة</label>
                                                <input type="text" class="form-control form-control-solid" name="school_name" id="school_name">

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="school_address" class="form-label required">عنوان المدرسة</label>
                                                <input type="number" class="form-control form-control-solid" name="school_address" id="school_address">

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="school_contact_person" class="form-label required"> شخص التواصل </label>
                                                <input type="number" class="form-control form-control-solid" name="school_contact_person" id="school_contact_person">

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="school_phone" class="form-label required"> رقم الهاتف </label>
                                                <input type="number" class="form-control form-control-solid" name="school_phone" id="school_phone">

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="school_mobile" class="form-label required"> رقم الجوال </label>
                                                <input type="number" class="form-control form-control-solid" name="school_mobile" id="school_mobile">

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
                                            <h2> تفاصيل عمل الطفل/الأسرة </h2>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="employment_status_cd" class="form-label">حالة الوظيفة</label>

                                                <select class="form-select form-control form-control-solid "
                                                    aria-label="Default select example" name="employment_status_cd" id="employment_status_cd">
                                                    <option selected>أختار</option>
                                                    <option value="AE">يعمل </option>
                                                    <option value="GB">لا يعمل </option>
                                                    <option value="GB">يعمل لحسابه الشخصي </option>

                                                </select>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8 ">

                                                <label for="employer_name" class="form-label required">اسم المشغل</label>
                                                <input type="text" class="form-control form-control-solid" name="employer_name" id=" employer_name">

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="employer_phone" class="form-label required"> رقم الهاتف </label>
                                                <input type="number" class="form-control form-control-solid" name="employer_phone" id="employer_phone">

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="employer_mobile" class="form-label required"> رقم الجوال </label>
                                                <input type="number" class="form-control form-control-solid" name="employer_mobile" id="employer_mobile">

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="created_by" class="form-label ">اسم الشخص المسجل </label>
                                                <input type="text" value="أحمد محمد" placeholder="" disabled
                                                    class="form-control form-control-solid" name="created_by" id="created_by">

                                            </div>



                                        </div>

                                    </div>
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
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
  })()
    {{--  <script>
        (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
              .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                  if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                  }

                  form.classList.add('was-validated')
                }, false)
              })
          })()
    </script>  --}}

@stop
