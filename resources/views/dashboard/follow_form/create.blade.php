@extends('layout.main')
@section('title', 'نموذج متابعة الحالة')
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
                                        <h2> نموذج متابعة الحالة</h2>
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

                                            <label for="case_manager_name_id_fk" class="form-label required"> اسم مدير الحالة </label>
                                            <input type="text" class="form-control form-control-solid"
                                                id="case_manager_name_id_fk" name="case_manager_name_id_fk"  value="ثائر فياض" disabled >

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
                                        <h2> تفاصيل المتابعة   </h2>
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

                                                        <label for="follow_up_date" class="form-label required">تاريخ المتابعة</label>
                                                        <input type="date" class="form-control form-control-solid"
                                                            id="follow_up_date" name="follow_up_date" >

                                                    </div>
                                                    <div class="col-md-4 col-sm-12 mt-8">

                                                        <label for="follow_up_type_cd" class="form-label required">  نوع المتابعة </label>

                                                        <select class="form-select form-control form-control-solid"
                                                            aria-label="Default select example" id="follow_up_type_cd"
                                                            name="follow_up_type_cd">
                                                            <option value="AE" selected> أختار</option>
                                                            <option value="AE">  مكالمة هاتفية زيارة منزلية تحويل ملاحظة</option>
                                                            <option value="GB"> زيارة مدرسية لقاء</option>
                                                            <option value="GB">أخرى </option>


                                                        </select>

                                                    </div>
                                                    <div class="col-md-4 col-sm-12 mt-8">

                                                        <label for="other" class="form-label required">  أخرى </label>
                                                        <input type="text" class="form-control form-control-solid"
                                                            id="other" name="other" >

                                                    </div>
                                                    <div class="col-md-4 col-sm-12 mt-8">

                                                        <label for="details" class="form-label required">التفاصيل</label>
                                                        <textarea class="form-control form-control-solid" id="details" name="details" rows="4" cols="50"></textarea>

                                                    </div>
                                                    <div class="col-md-4 col-sm-12 mt-8">

                                                        <label for="next_steps" class="form-label required">الخطوات القادمة</label>
                                                        <textarea class="form-control form-control-solid" id="next_steps" name="next_steps" rows="4" cols="50"></textarea>

                                                    </div>
                                                    <div class="col-md-4 col-sm-12 mt-8">

                                                        <label for="next_procedure_date" class="form-label required"> تاريخ الاجراء القادم  </label>
                                                        <input type="date" class="form-control form-control-solid"
                                                            id="next_procedure_date" name="next_procedure_date" >

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

                                                            <label for="follow_up_date" class="form-label required">تاريخ المتابعة</label>
                                                            <input type="date" class="form-control form-control-solid"
                                                                id="follow_up_date" name="follow_up_date" >

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="follow_up_type_cd" class="form-label required">  نوع المتابعة </label>

                                                            <select class="form-select form-control form-control-solid"
                                                                aria-label="Default select example" id="follow_up_type_cd"
                                                                name="follow_up_type_cd">
                                                                <option value="AE" selected> أختار</option>
                                                                <option value="AE">  مكالمة هاتفية زيارة منزلية تحويل ملاحظة</option>
                                                                <option value="GB"> زيارة مدرسية لقاء</option>
                                                                <option value="GB">أخرى </option>


                                                            </select>

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="other" class="form-label required">  أخرى </label>
                                                            <input type="text" class="form-control form-control-solid"
                                                                id="other" name="other" >

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="details" class="form-label required">التفاصيل</label>
                                                            <textarea class="form-control form-control-solid" id="details" name="details" rows="4" cols="50"></textarea>

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="next_steps" class="form-label required">الخطوات القادمة</label>
                                                            <textarea class="form-control form-control-solid" id="next_steps" name="next_steps" rows="4" cols="50"></textarea>

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="next_procedure_date" class="form-label required"> تاريخ الاجراء القادم  </label>
                                                            <input type="date" class="form-control form-control-solid"
                                                                id="next_procedure_date" name="next_procedure_date" >

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
