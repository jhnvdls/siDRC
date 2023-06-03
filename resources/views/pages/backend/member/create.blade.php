@extends('layouts.backend.master')
@section('title', 'Create Member')
@section('breadcrumb')
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-separatorless fw-semibold">
        <!--begin::Item-->
        <li class="breadcrumb-item text-white fw-bold lh-1">
            <a href="{{ route('backend.dashboard') }}" class="text-white">
                <i class="ki-outline ki-home text-white fs-3"></i>
            </a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item">
            <i class="ki-outline ki-right fs-4 text-white mx-n1"></i>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-white fw-bold lh-1">
            <a href="{{ route('backend.members.index') }}" class="text-white">Members</a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item">
            <i class="ki-outline ki-right fs-4 text-white mx-n1"></i>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-white fw-bold lh-1">Create Member</li>
        <!--end::Item-->
    </ul>
    <!--end::Breadcrumb-->
@endsection
@section('content')
    <form id="form_input" class="form d-flex flex-column flex-lg-row"
        data-kt-redirect="{{ route('backend.members.index') }}" action="{{ route('backend.members.store') }}" method="POST"
        enctype="multipart/form-data">
        <!--begin::Aside column-->
        <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
            <!--begin::Thumbnail settings-->
            <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>Image</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body text-center pt-0">
                    <!--begin::Image input-->
                    <!--begin::Image input placeholder-->
                    <style>
                        .image-input-placeholder {
                            background-image: url({{ asset('backend/media/svg/files/blank-image.svg') }})
                        }

                        [data-theme="dark"] .image-input-placeholder {
                            background-image: url({{ asset('backend/media/svg/files/blank-image-dark.svg') }})
                        }
                    </style>
                    <!--end::Image input placeholder-->
                    <!--begin::Image input-->
                    <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
                        data-kt-image-input="true">
                        <!--begin::Preview existing image-->
                        <div class="image-input-wrapper w-150px h-150px"></div>
                        <!--end::Preview existing image-->
                        <!--begin::Label-->
                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change image">
                            <!--begin::Icon-->
                            <i class="bi bi-pencil-fill fs-7"></i>
                            <!--end::Icon-->
                            <!--begin::Inputs-->
                            <input type="file" name="image" accept=".png, .jpg, .jpeg, .gif, .svg" />
                            <input type="hidden" name="image_remove" />
                            <!--end::Inputs-->
                        </label>
                        <!--end::Label-->
                        <!--begin::Cancel-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel image">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                        <!--end::Cancel-->
                        <!--begin::Remove-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove image">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                        <!--end::Remove-->
                    </div>
                    <!--end::Image input-->
                    <!--begin::Description-->
                    <div class="text-muted fs-7">Set the post thumbnail image. Only *.png,
                        *.jpg, *.jpeg, *.gif, *.svg are allowed.</div>
                    <!--end::Description-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Thumbnail settings-->
        </div>
        <!--end::Aside column-->
        <!--begin::Main column-->
        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
            <!--begin::General options-->
            <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <div class="card-title">
                        <h2>General</h2>
                    </div>
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Input group-->
                    <div class="mb-10 fv-row">
                        <!--begin::Label-->
                        <label class="required form-label">Name</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-solid" name="name" placeholder="Name" />
                        <!--end::Input-->
                        <!--begin::Description-->
                        <div class="text-muted fs-7">Enter the name for the member.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-10 fv-row">
                        <!--begin::Label-->
                        <label class="required form-label">NIM</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-solid" name="nim" placeholder="NIM" />
                        <!--end::Input-->
                        <!--begin::Description-->
                        <div class="text-muted fs-7">Enter the NIM for the member.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-10 fv-row">
                        <!--begin::Label-->
                        <label class="required form-label">Email</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-solid" name="email" placeholder="Email" />
                        <!--end::Input-->
                        <!--begin::Description-->
                        <div class="text-muted fs-7">Enter the Email for the member.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-10 fv-row">
                        <!--begin::Label-->
                        <label class="required form-label">Phone</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-solid" name="phone" placeholder="Phone" />
                        <!--end::Input-->
                        <!--begin::Description-->
                        <div class="text-muted fs-7">Enter the phone for the member.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-10 fv-row">
                        <!--begin::Label-->
                        <label class="required form-label">Department</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <select name="department_id" class="form-select form-select-solid" data-control="select2"
                            data-placeholder="Select option" data-allow-clear="true" data-hide-search="true">
                            <option></option>
                            @foreach ($departments as $department)
                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach
                        </select>
                        <!--end::Input-->
                        <!--begin::Description-->
                        <div class="text-muted fs-7">Enter the department for the member.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-10 fv-row">
                        <!--begin::Label-->
                        <label class="required form-label">Position</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <select name="position_id" class="form-select form-select-solid" data-control="select2"
                            data-placeholder="Select option" data-allow-clear="true" data-hide-search="true">
                            <option></option>
                            @foreach ($positions as $position)
                                <option value="{{ $position->id }}">{{ $position->name }}</option>
                            @endforeach
                        </select>
                        <!--end::Input-->
                        <!--begin::Description-->
                        <div class="text-muted fs-7">Enter the position for the member.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-10 fv-row">
                        <!--begin::Label-->
                        <label class="required form-label">LinkedIn</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-solid" name="linkedin"
                            placeholder="LinkedIn" />
                        <!--end::Input-->
                        <!--begin::Description-->
                        <div class="text-muted fs-7">Enter the LinkedIn for the member.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-10 fv-row">
                        <!--begin::Label-->
                        <label class="required form-label">Instagram</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-solid" name="instagram"
                            placeholder="Instagram" />
                        <!--end::Input-->
                        <!--begin::Description-->
                        <div class="text-muted fs-7">Enter the Instagram for the member.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-10 fv-row">
                        <!--begin::Label-->
                        <label class="required form-label">Github</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-solid" name="github"
                            placeholder="Github" />
                        <!--end::Input-->
                        <!--begin::Description-->
                        <div class="text-muted fs-7">Enter the Github for the member.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Input group-->
                    <!--end::Card header-->
                </div>
                <!--end::General options-->
                <div class="d-flex justify-content-end">
                    <!--begin::Button-->
                    <button type="button" data-kt-element="cancel" class="btn btn-light me-5">Cancel</button>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button type="submit" class="btn btn-primary" data-kt-element="submit">
                        <span class="indicator-label">Save Changes</span>
                        <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <!--end::Button-->
                </div>
            </div>
            <!--end::Main column-->
    </form>
@endsection
@push('custom-scripts')
    <script src="{{ asset('js/FormControls.js') }}"></script>
    <script>
        const formEl = $('#form_input');
        formEl.on('submit', function(e) {
            e.preventDefault();
            KTFormControls.onSubmitForm(formEl);
        });
        const btnCancelEl = formEl.find('[data-kt-element="cancel"]');
        btnCancelEl.on('click', function(e) {
            e.preventDefault();
            KTFormControls.onCancelForm(formEl);
        });
    </script>
@endpush
