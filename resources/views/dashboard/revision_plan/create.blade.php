@extends('layout.main')
@section('title', 'مراجعة خطة الحالة')
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
                                        <h2> مراجعة خطة الحالة </h2>
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

                                            <label for="case_manager_name_id_fk" class="form-label required"> اسم
                                                مديرالحالة</label>
                                            <input type="text" class="form-control form-control-solid"
                                                id="case_manager_name_id_fk" name="case_manager_name_id_fk"
                                                value="احمد محمد" disabled>

                                        </div>

                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="plan_date" class="form-label required">تاريخ الخطة</label>
                                            <input type="date" class="form-control form-control-solid"
                                                name="plan_date" id="plan_date">

                                        </div>

                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="revision_date" class="form-label required">تاريخ المراجعة
                                            </label>
                                            <input type="date" class="form-control form-control-solid"
                                                name="revision_date" id="revision_date">

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="revision_date" class="form-label required">  الهدف/النتيجة   </label>
                                            <input type="text" class="form-control form-control-solid"
                                                name="revision_date" id="revision_date">

                                        </div>

                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="target_basic_need_cd" class="form-label required">الحاجة
                                                الأساسية المستهدفة</label>
                                            <input type="date" class="form-control form-control-solid"
                                                name="target_basic_need_cd" id="target_basic_need_cd">

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
                                        <h2>الأشخاص المشاركون فى وضع الخطة 	</h2>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="name" class="form-label required"> الاسم</label>
                                            <input type="text" class="form-control form-control-solid" value="ahmed"
                                                name="name" id="name" disabled>

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="organization" class="form-label required"> المؤسسة</label>
                                            <input type="text" class="form-control form-control-solid"
                                                value="organization" name="organization" id="organization" disabled>

                                        </div>

                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="role" class="form-label required">الدور</label>
                                            <input type="text" class="form-control form-control-solid" value="xxxx"
                                                name="role" id="role" disabled>

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="approval " class="form-label required"> الاعتماد </label>

                                            <select class="form-select form-control form-control-solid"
                                                aria-label="Default select example" id="approval" name="approval ">
                                                <option value="AE" selected> 1</option>
                                                <option value="GB" disabled>2</option>
                                                <option value="GB" disabled>3</option>

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
                    <div class="tab-pane fade show active">
                        <div class="d-flex flex-column gap-7 gap-lg-10">
                            <!--begin::General options-->
                            <div class="card card-flush py-10">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2> لاجراءات المطلوبة</h2>
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

                                                        <label for="procedure " class="form-label required"> لاجراء
                                                        </label>

                                                        <select class="form-select form-control form-control-solid"
                                                            aria-label="Default select example" id="procedure"
                                                            name="procedure">
                                                            <option value="AE" selected> أختار</option>
                                                            <option value="AE"> 1</option>
                                                            <option value="GB">2</option>
                                                            <option value="GB">3</option>

                                                        </select>

                                                    </div>
                                                    <div class="col-md-4 col-sm-12 mt-8">

                                                        <label for="procedure_status_cd" class="form-label required">
                                                            حالة الاجراء </label>

                                                        <select class="form-select form-control form-control-solid"
                                                            aria-label="Default select example" id="procedure_status_cd"
                                                            name="procedure_status_cd">
                                                            <option value="AE" selected> أختار</option>
                                                            <option value="AE"> 1</option>
                                                            <option value="GB">2</option>
                                                            <option value="GB">3</option>

                                                        </select>

                                                    </div>
                                                    <div class="col-md-4 col-sm-12 mt-8">

                                                        <label for="responsibility_id_fk " class="form-label required">
                                                            المسؤولية </label>

                                                        <select class="form-select form-control form-control-solid"
                                                            aria-label="Default select example"
                                                            id="responsibility_id_fk" name="responsibility_id_fk">
                                                            <option value="AE" selected> أختار</option>
                                                            <option value="AE"> 1</option>
                                                            <option value="GB">2</option>
                                                            <option value="GB">3</option>

                                                        </select>

                                                    </div>
                                                    <div class="col-md-4 col-sm-12 mt-8">

                                                        <label for="due_date" class="form-label required">تاريخ
                                                            الاستحقاق</label>
                                                        <input type="date" class="form-control form-control-solid"
                                                            name="due_date" id="due_date">

                                                    </div>
                                                    <div class="col-md-4 col-sm-12 mt-8">

                                                        <label for="review_date" class="form-label required">موعد
                                                            المراجعة</label>
                                                        <input type="date" class="form-control form-control-solid"
                                                            name="review_date" id="review_date">

                                                    </div>
                                                    <div class="col-md-4 col-sm-12 mt-8">

                                                        <label for="supervisor_approval_cd "
                                                            class="form-label required"> الموافقة من المشرف </label>

                                                        <select class="form-select form-control form-control-solid"
                                                            aria-label="Default select example"
                                                            id="supervisor_approval_cd" name="supervisor_approval_cd">
                                                            <option value="AE" selected> أختار</option>
                                                            <option value="AE"> 1</option>
                                                            <option value="GB">2</option>
                                                            <option value="GB">3</option>

                                                        </select>

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

                                                            <label for="procedure " class="form-label required"> لاجراء
                                                            </label>

                                                            <select class="form-select form-control form-control-solid"
                                                                aria-label="Default select example" id="procedure"
                                                                name="procedure">
                                                                <option value="AE" selected> أختار</option>
                                                                <option value="AE"> 1</option>
                                                                <option value="GB">2</option>
                                                                <option value="GB">3</option>

                                                            </select>

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="procedure_status_cd"
                                                                class="form-label required"> حالة الاجراء </label>

                                                            <select class="form-select form-control form-control-solid"
                                                                aria-label="Default select example"
                                                                id="procedure_status_cd" name="procedure_status_cd">
                                                                <option value="AE" selected> أختار</option>
                                                                <option value="AE"> 1</option>
                                                                <option value="GB">2</option>
                                                                <option value="GB">3</option>

                                                            </select>

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="responsibility_id_fk "
                                                                class="form-label required"> المسؤولية </label>

                                                            <select class="form-select form-control form-control-solid"
                                                                aria-label="Default select example"
                                                                id="responsibility_id_fk" name="responsibility_id_fk">
                                                                <option value="AE" selected> أختار</option>
                                                                <option value="AE"> 1</option>
                                                                <option value="GB">2</option>
                                                                <option value="GB">3</option>

                                                            </select>

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="due_date" class="form-label required">تاريخ
                                                                الاستحقاق</label>
                                                            <input type="date" class="form-control form-control-solid"
                                                                name="due_date" id="due_date">

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="review_date" class="form-label required">موعد
                                                                المراجعة</label>
                                                            <input type="date" class="form-control form-control-solid"
                                                                name="review_date" id="review_date">

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="supervisor_approval_cd "
                                                                class="form-label required"> الموافقة من المشرف </label>

                                                            <select class="form-select form-control form-control-solid"
                                                                aria-label="Default select example"
                                                                id="supervisor_approval_cd"
                                                                name="supervisor_approval_cd">
                                                                <option value="AE" selected> أختار</option>
                                                                <option value="AE"> 1</option>
                                                                <option value="GB">2</option>
                                                                <option value="GB">3</option>

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
