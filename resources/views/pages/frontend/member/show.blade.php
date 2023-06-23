<div class="modal-dialog modal-dialog-centered mw-650px">
    <!--begin::Modal content-->
    <div class="modal-content">
        <!--begin::Modal header-->
        <div class="modal-header">
            <!--begin::Modal title-->
            <h2 class="fw-bold">{{ $member->fullname }}</h2>
            <!--end::Modal title-->
            <!--begin::Close-->
            <div type="button" class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-toggle="tooltip" title="Close"
                data-bs-dismiss="modal">
                <i class="fa fa-times fs-2x"></i>
            </div>
            <!--end::Close-->
        </div>
        <!--end::Modal header-->
        <!--begin::Modal body-->
        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
            <div class="d-flex flex-column scroll-y me-n7 pe-7" data-kt-scroll="true" data-kt-scroll-height="auto"
                data-kt-scroll-offset="300px">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card my-card border-0">
                            <div class="card-body py-4">
                                <div class="d-flex justify-content-center align-items-cemter mt-2">
                                    <img src="{{ asset('images/members/' . $member->image) }}"
                                        class="my-image rounded rounded-circle">
                                </div>
                                <div class="text-center mt-3 border-bottom-dashed">
                                    <div class="text-muted fw-light text-uppercase" style="font-size: 12px">
                                        {{ $member->position->name ?? '' }}</div>
                                    <h4 class="text-center fw-500 mb-3">{{ $member->name ?? '-' }}</h2>
                                </div>
                                <div class="text-center text-muted mt-2 border-bottom-dashed pb-2">
                                    <div>NIM : {{ $member->nim ?? '-' }}</div>
                                    <div>Email : {{ $member->email ?? '-' }}</div>
                                </div>
                                <div class="text-start text-muted mt-2 border-bottom-dashed pb-3 pt-2 px-2">
                                    <i class="fa fa-building me-3"></i>
                                    {{ $member->department->name ?? '-' }}
                                </div>
                                <div class="text-start text-muted mt-2 border-bottom-dashed pb-3 pt-2 px-2">
                                    <i class="fa fa-phone me-3"></i>
                                    {{ $member->phone ?? '-' }}
                                </div>
                                <div class="text-start text-muted mt-2 border-bottom-dashed pb-3 pt-2 px-2">
                                    <i class="fa fa-linkedin me-3"></i>
                                    {{ $member->linkedin ?? '-' }}
                                </div>
                                <div class="text-start text-muted mt-2 border-bottom-dashed pb-3 pt-2 px-2">
                                    <i class="fa fa-instagram me-3"></i>
                                    {{ $member->instagram ?? '-' }}
                                </div>
                                <div class="text-start text-muted mt-2 border-bottom-dashed pb-3 pt-2 px-2">
                                    <i class="fa fa-github me-3"></i>
                                    {{ $member->github ?? '-' }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Modal body-->
    </div>
    <!--end::Modal content-->
</div>
<!--end::Modal dialog-->
