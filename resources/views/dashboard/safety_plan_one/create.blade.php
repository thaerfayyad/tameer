@extends('layout.main')
@section('title', 'نموذج السلامة 1')
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
                                            <h2>نموذج خطة السلامة للبالغين</h2>
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
                                            <h2>    مؤشرات الضرر الوشيك </h2>
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

                                                            <label for="procedures_taken_to_counter_danger" class="form-label required">الإجراء المتخذ لمواجهة الخطر</label>
                                                            <input type="text" class="form-control form-control-solid"
                                                              name="procedures_taken_to_counter_danger"  id="procedures_taken_to_counter_danger">

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="by_who" class="form-label required">بوساطة من</label>
                                                            <input type="text" class="form-control form-control-solid"
                                                               name="by_who" id="by_who">

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="how_many_time" class="form-label required">  كم مرة</label>
                                                            <input type="number" class="form-control form-control-solid"
                                                              name="how_many_time"  id="how_many_time">

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="when_dt" class="form-label required"> متى</label>
                                                            <input type="date" class="form-control form-control-solid"
                                                               name="when_dt" id="when_dt">

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="order_no" class="form-label required">ترتيب الإجراءات المتخذة
                                                                لمواجهة الضرر </label>

                                                            <select class="form-select form-control form-control-solid"
                                                                aria-label="Default select example" id="order_no" name="order_no">
                                                                <option selected>أختار</option>
                                                                <option value="AE">1</option>
                                                                <option value="GB">2 </option>
                                                                <option value="GB">3 </option>
                                                                <option value="GB">4</option>

                                                            </select>

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="agreed_procedures_coordination" class="form-label required">تنسيق الإجراءات المتفق عليها  </label>
                                                            <textarea class="form-control form-control-solid" id="agreed_procedures_coordination" name="agreed_procedures_coordination" rows="4" cols="50"></textarea>

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

                                                                <label for="procedures_taken_to_counter_danger" class="form-label required">الإجراء المتخذ لمواجهة الخطر</label>
                                                                <input type="text" class="form-control form-control-solid"
                                                                  name="procedures_taken_to_counter_danger"  id="procedures_taken_to_counter_danger">

                                                            </div>
                                                            <div class="col-md-4 col-sm-12 mt-8">

                                                                <label for="by_who" class="form-label required">بوساطة من</label>
                                                                <input type="text" class="form-control form-control-solid"
                                                                   name="by_who" id="by_who">

                                                            </div>
                                                            <div class="col-md-4 col-sm-12 mt-8">

                                                                <label for="how_many_time" class="form-label required">  كم مرة</label>
                                                                <input type="number" class="form-control form-control-solid"
                                                                  name="how_many_time"  id="how_many_time">

                                                            </div>
                                                            <div class="col-md-4 col-sm-12 mt-8">

                                                                <label for="when_dt" class="form-label required"> متى</label>
                                                                <input type="date" class="form-control form-control-solid"
                                                                   name="when_dt" id="when_dt">

                                                            </div>
                                                            <div class="col-md-4 col-sm-12 mt-8">

                                                                <label for="order_no" class="form-label required">ترتيب الإجراءات المتخذة
                                                                    لمواجهة الضرر </label>

                                                                <select class="form-select form-control form-control-solid"
                                                                    aria-label="Default select example" id="order_no" name="order_no">
                                                                    <option selected>أختار</option>
                                                                    <option value="AE">1</option>
                                                                    <option value="GB">2 </option>
                                                                    <option value="GB">3 </option>
                                                                    <option value="GB">4</option>

                                                                </select>

                                                            </div>
                                                            <div class="col-md-4 col-sm-12 mt-8">

                                                                <label for="agreed_procedures_coordination" class="form-label required">تنسيق الإجراءات المتفق عليها  </label>
                                                                <textarea class="form-control form-control-solid" id="agreed_procedures_coordination" name="agreed_procedures_coordination" rows="4" cols="50"></textarea>

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
                                            <h2>     توقيع المشاركين     </h2>
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

                                                            <label for="full_name" class="form-label required">الاسم الأول</label>
                                                            <input type="text" name="full_name" id="full_name" class="form-control form-control-solid" value=" احمد محمد" disabled  id=" ">

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="relationship_cd" class="form-label required">علاقته بالطفل</label>
                                                            <input type="text" class="form-control form-control-solid" id="relationship_cd" name="relationship_cd" value=" أب " disabled     id=" ">

                                                        </div>

                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="checked_cd" class="form-label required"> تحديد </label>

                                                            <select class="form-select form-control form-control-solid"
                                                                aria-label="Default select example" id="checked_cd" name="checked_cd">
                                                                <option selected>أختار</option>
                                                                <option value="AE">مشارك</option>
                                                                <option value="GB">غير مشارك</option>


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

                                                                <label for="full_name" class="form-label required">الاسم الأول</label>
                                                                <input type="text" name="full_name" id="full_name" class="form-control form-control-solid" value=" احمد محمد" disabled  id=" ">

                                                            </div>
                                                            <div class="col-md-4 col-sm-12 mt-8">

                                                                <label for="relationship_cd" class="form-label required">علاقته بالطفل</label>
                                                                <input type="text" class="form-control form-control-solid" id="relationship_cd" name="relationship_cd" value=" أب " disabled     id=" ">

                                                            </div>

                                                            <div class="col-md-4 col-sm-12 mt-8">

                                                                <label for="checked_cd" class="form-label required"> تحديد </label>

                                                                <select class="form-select form-control form-control-solid"
                                                                    aria-label="Default select example" id="checked_cd" name="checked_cd">
                                                                    <option selected>أختار</option>
                                                                    <option value="AE">مشارك</option>
                                                                    <option value="GB">غير مشارك</option>


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
                                            <h2>ملاحظات المشرف</h2>
                                        </div>
                                    </div>

                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-12 mt-8">

                                                    <label for="notes" class="form-label required">الملاحظة</label>
                                                    <textarea class="form-control form-control-solid" id="notes" name="notes" rows="4" cols="50"></textarea>

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
                                            <h2>موافقة المشرف</h2>
                                        </div>
                                    </div>

                                        <div class="container">
                                            <div class="row">



                                                <div class="col-md-4 col-sm-12 mt-8">

                                                    <label for="supervisor_approval_cd" class="form-label"> موافقة المشرف  </label>

                                                    <select class="form-select form-control form-control-solid"
                                                        aria-label="Default select example" name="supervisor_approval_cd" id="supervisor_approval_cd">
                                                        <option selected>أختار</option>
                                                        <option value="AE">موافق</option>
                                                        <option value="AE">غير موافق </option>
                                                    </select>

                                                </div>
                                                <div class="col-md-4 col-sm-12 mt-8">

                                                    <label for="approval_date" class="form-label required">تاريخ الإعتماد</label>
                                                    <input type="date" class="form-control form-control-solid" name="approval_date" id="approval_date">

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
