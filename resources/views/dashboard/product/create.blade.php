@extends('layout.main')
@section('title', 'تعديل الحساب')
@section('css')
@section('content')

    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">


            <form class="form d-flex flex-column flex-lg-row" id="create-form"
            action="{{ route('changes.update', Auth::user()->id) }}" method="post">

                @csrf
                @method('put')


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
                                            <h2>تعديل  الحساب الخاص في {{ Auth::user()->name}}</h2>
                                        </div>
                                    </div>
                                    @if (count($errors))
                                    @foreach ($errors->all() as $error)
                                      <p class="alert alert-danger">{{$error}}</p>
                                    @endforeach
                                   @endif
                                    <div class="container">
                                        <div class="row">

                                            <div class="col-md-12 col-sm-12 mt-8">
                                                <input type="hidden" disabled value="{{ Auth::user()->id}}" class="form-control form-control-solid"
                                                   id="id"  name="id">
                                            </div>
                                            <div class="col-md-12 col-sm-12 mt-8">

                                                <label for="title" class="form-label required"> الايميل </label>
                                                <input type="text" disabled value="{{ Auth::user()->email}}" class="form-control form-control-solid"
                                                    >
                                            </div>
                                            <div class="col-md-12 col-sm-12 mt-8">

                                                <label for="title" class="form-label required"> كلمة السر السابقة </label>
                                                <input type="password" class="form-control form-control-solid"  id="old_password" name="old_password">
                                            </div>
                                            <div class="col-md-12 col-sm-12 mt-8">

                                                <label for="title" class="form-label required">  كلمة السر الجديدة   </label>
                                                <input type="password" class="form-control form-control-solid"  id="password" name="password">
                                            </div>
                                            <div class="col-md-12 col-sm-12 mt-8">

                                                <label for="title" class="form-label required">   تحقق من الكلمة السر الجديدة       </label>
                                                <input type="password" class="form-control form-control-solid" i id="password_confirmation" name="password_confirmation">
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
                        <button type="reset" id="kt_ecommerce_add_product_cancel"
                            class="btn btn-light me-5">الغاء</button>
                        <!--end::Button-->
                        <!--begin::Button-->


                        <button type="submit"   class="btn btn-primary">
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
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>


    <script src=" {{ asset('asset(js/ckeditor/ckeditor.js') }}"></script>
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

    <script>
        function store() {
            let formData = new FormData($('#create-form')[0]);
            axios.post('/dashboard/resetPassword', formData, {
            }).then(function (response) {
                console.log(response);
                toastr.success(response.data.message);
                document.getElementById('create-form').reset();
                // window.location.href = '/dashboard/settings/';
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
