@extends('layout.main')
@section('title', 'نموذج الموافقة لحماية الطفل')
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
                                        <h2> نموذج الموافقة للحالة</h2>
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

                                            <label for="approval_person_cd " class="form-label required">الشخص الموافق</label>

                                            <select class="form-select form-control form-control-solid"
                                                aria-label="Default select example" id="approval_person_cd" name="approval_person_cd">
                                                <option value="AE" selected> أختار </option>
                                                <option value="AE"   >أحد الأبوين| الوصي</option>
                                                <option value="GB"  > لطفل (في حالة وجوده دون مرافق)</option>
                                                <option value="GB"  >مدير الحالة</option>

                                            </select>

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="approval_person_name" class="form-label required">اسم الشخص الموافق</label>
                                            <input type="text" class="form-control form-control-solid"
                                                id="approval_person_name" name="approval_person_name" >

                                        </div>

                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="approval_date" class="form-label required">تاريخ الموافقة </label>
                                            <input type="date" class="form-control form-control-solid" name="approval_date"
                                                id="approval_date">

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="organization_name" class="form-label required">اسم المؤسسة</label>
                                            <input type="text" class="form-control form-control-solid"
                                                id="organization_name" name="organization_name"
                                                value="احمد محمد" disabled>

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
                                        <h2>منع المشاركة</h2>
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

                                                        <label for="block_sharing_from_aproval_person_cd" class="form-label required"> الامتناع للمشاركة للشخص الموافق </label>

                                                        <select class="form-select form-control form-control-solid"
                                                            aria-label="Default select example" id="block_sharing_from_aproval_person_cd"
                                                            name="block_sharing_from_aproval_person_cd">
                                                            <option value="AE" selected> أختار</option>
                                                            <option value="AE"> نعم</option>
                                                            <option value="GB">لا</option>


                                                        </select>

                                                    </div>
                                                    <div class="col-md-4 col-sm-12 mt-8">

                                                        <label for="target_group_cd" class="form-label required"> الفئة المستهدفة  </label>

                                                        <select class="form-select form-control form-control-solid"
                                                            aria-label="Default select example" id="target_group_cd"
                                                            name="target_group_cd">
                                                            <option value="AE" selected> أختار</option>
                                                            <option value="AE">المؤسسة الحكومة المجتمع أفراد العائلة أخرى</option>
                                                            <option value="GB">2</option>
                                                            <option value="GB">3</option>

                                                        </select>

                                                    </div>
                                                    <div class="col-md-4 col-sm-12 mt-8">

                                                        <label for="notes" class="form-label required">التفاصيل</label>
                                                        <textarea class="form-control form-control-solid" id="details" name="details" rows="4" cols="50"></textarea>

                                                    </div>
                                                    <div class="col-md-4 col-sm-12 mt-8">

                                                        <label for="notes" class="form-label required">الأسباب</label>
                                                        <textarea class="form-control form-control-solid" id="reasons" name="reasons" rows="4" cols="50"></textarea>

                                                    </div>


                                                </div>

                                            </div>

                                            <div data-repeater-item>

                                                <div class="container">
                                                    <div class="row text-start">
                                                        <div class="col-md-12 d-flex justify-content-end mt-8">
                                                            <a href="javascript:;" data-repeater-delete
                                                                class="btn btn-sm btn-danger  ">
                                                                <i class="la"></i>Remove
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="block_sharing_from_aproval_person_cd" class="form-label required"> الامتناع للمشاركة للشخص الموافق </label>

                                                            <select class="form-select form-control form-control-solid"
                                                                aria-label="Default select example" id="block_sharing_from_aproval_person_cd"
                                                                name="block_sharing_from_aproval_person_cd">
                                                                <option value="AE" selected> أختار</option>
                                                                <option value="AE"> نعم</option>
                                                                <option value="GB">لا</option>


                                                            </select>

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="target_group_cd" class="form-label required"> الفئة المستهدفة  </label>

                                                            <select class="form-select form-control form-control-solid"
                                                                aria-label="Default select example" id="target_group_cd"
                                                                name="target_group_cd">
                                                                <option value="AE" selected> أختار</option>
                                                                <option value="AE">المؤسسة الحكومة المجتمع أفراد العائلة أخرى</option>
                                                                <option value="GB">2</option>
                                                                <option value="GB">3</option>

                                                            </select>

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="notes" class="form-label required">التفاصيل</label>
                                                            <textarea class="form-control form-control-solid" id="details" name="details" rows="4" cols="50"></textarea>

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="notes" class="form-label required">الأسباب</label>
                                                            <textarea class="form-control form-control-solid" id="reasons" name="reasons" rows="4" cols="50"></textarea>

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
                                        <h2> مشاركة المعلومات </h2>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="organization_name" class="form-label required"> اسم المؤسسة  </label>
                                            <input type="text" class="form-control form-control-solid" id="organization_name"
                                                name="organization_name" value="مؤسسة تامر لطفل" disabled>

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
                                        <h2>ضمان الجودة</h2>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="approval_person_name" class="form-label required">اسم الشخص الموافق</label>
                                            <input type="text" class="form-control form-control-solid" id="approval_person_name"
                                                name="approval_person_name" value="   ثائر  " disabled>

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
