@extends('layout.main')
@section('title', '  اضافة    المنتج  ' )
@section('css')
@section('content')

    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">

            <form class="form d-flex flex-column flex-lg-row" id="create-form">
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
                                            <h2> اضافة   المنتج</h2>
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="category_id" class="form-label required">الاقسام</label>
                                                <select class="form-control form-control-solid"
                                                 name="category_id" id="category_id">
                                                    <option value="">اختار  قسم</option>
                                                    @foreach ($categories as $i )
                                                    <option value="{{ $i->id }}"  > {{ $i->name }}</option>

                                                    @endforeach
                                                </select>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="title" class="form-label required"> الاسم </label>
                                                <input type="text" class="form-control form-control-solid" id="name"
                                                    name="name"  >
                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="title" class="form-label required"> السعر </label>
                                                <input type="number" class="form-control form-control-solid" id="price"
                                                    name="price" >
                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="title" class="form-label required"> السعرات الحرارية </label>
                                                <input type="number" class="form-control form-control-solid" id="cal"
                                                    name="cal"  >
                                            </div>

                                            <div class="col-md-12 col-sm-12 mt-6">


                                                <!--begin::Image input-->
                                                <div class="image-input image-input-empty" data-kt-image-input="true"
                                                    style="background-image:      url({{asset('assets/media/avatars/blank.png')}}) ">
                                                    <!--begin::Image preview wrapper-->
                                                    <div class="image-input-wrapper w-125px h-125px"></div>
                                                    <!--end::Image preview wrapper-->

                                                    <!--begin::Edit button-->
                                                    <label
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                        data-bs-dismiss="click" title="اضافة صورة">
                                                        <i class="bi bi-pencil-fill fs-7"></i>

                                                        <!--begin::Inputs-->
                                                        <input type="file" id="image" name="image" accept=".png, .jpg, .jpeg" />
                                                        <input type="hidden" name="avatar_remove" />
                                                        <!--end::Inputs-->
                                                    </label>
                                                    <!--end::Edit button-->

                                                    <!--begin::Cancel button-->
                                                    <span
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                        data-bs-dismiss="click" title="Cancel avatar">
                                                        <i class="bi bi-x fs-2"></i>
                                                    </span>
                                                    <!--end::Cancel button-->

                                                    <!--begin::Remove button-->
                                                    <span
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                        data-bs-dismiss="click" title="Remove avatar">
                                                        <i class="bi bi-x fs-2"></i>
                                                    </span>
                                                    <!--end::Remove button-->
                                                </div>
                                                <!--end::Image input-->

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


                        <button type="button" onclick="store()" class="btn btn-primary">
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
        function store() {
            let formData = new FormData($('#create-form')[0]);

            axios.post('/dashboard/products', formData).then(function (response) {
                console.log(response);
                toastr.success(response.data.message);
                window.location.href = '/dashboard/products/';
            }).catch(function (error) {

                let messages = '';
                if(typeof  error.response.data.message == 'string'){
                    toastr.error(error.response.data.message);
                }else{
                    for (const [key, value] of Object.entries(error.response.data.message)) {
                        messages+='-'+value+'</br>';
                    }
                    toastr.error(messages);
                }

            });

        }

    </script>


@stop
