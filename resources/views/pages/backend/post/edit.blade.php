@extends('layouts.backend.master')
@section('title', 'Edit Posts')
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
            <a href="{{ route('backend.posts.index') }}" class="text-white">Posts</a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item">
            <i class="ki-outline ki-right fs-4 text-white mx-n1"></i>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-white fw-bold lh-1">Edit Posts</li>
        <!--end::Item-->
    </ul>
    <!--end::Breadcrumb-->
@endsection
@section('title', 'Edit Post')
@section('content')
    <form id="edit_post_form" class="form d-flex flex-column flex-lg-row"
        data-kt-redirect="{{ route('backend.posts.index') }}" action="{{ route('backend.posts.update', $post->id) }}"
        method="PUT" enctype="multipart/form-data">
        <!--begin::Aside column-->
        <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
            <!--begin::Thumbnail settings-->
            <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>Thumbnail</h2>
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
                    <div class="image-input image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
                        <!--begin::Preview existing image-->
                        <div class="image-input-wrapper w-150px h-150px"
                            style="background-image: url({{ asset('images/posts/' . $post->image) }})">
                        </div>
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
            <div class="card card-flush py-4">
                <div class="card-header">
                    <div class="card-title">
                        <h2>Status</h2>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <select name="status" class="form-select" data-control="select2" data-hide-search="true"
                        data-placeholder="Select an option">
                        <option value="">Select an option</option>
                        <option value="publish" {{ $post->status == 'publish' ? 'selected' : '' }}>Publish
                        </option>
                        <option value="draft" {{ $post->status == 'draft' ? 'selected' : '' }}>Draft</option>
                    </select>
                </div>
            </div>
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
                        <label class="required form-label">Post Title</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-solid" name="title"
                            placeholder="Post Title" value="{{ $post->title }}" />
                        <!--end::Input-->
                        <!--begin::Description-->
                        <div class="text-muted fs-7">Enter the title for the post.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-10 fv-row">
                        <!--begin::Label-->
                        <label class="required form-label">Slug</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-solid" name="slug" placeholder="Slug"
                            value="{{ $post->slug }}" />
                        <!--end::Input-->
                        <!--begin::Description-->
                        <div class="text-muted fs-7">Enter the slug for the post.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-10 fv-row">
                        <!--begin::Label-->
                        <label class="required form-label">Excerpt</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-solid" name="excerpt" placeholder="Excerpt"
                            value="{{ $post->excerpt }}" />
                        <!--end::Input-->
                        <!--begin::Description-->
                        <div class="text-muted fs-7">Enter the excerpt for the post.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-10 fv-row">
                        <!--begin::Label-->
                        <label class="form-label">Content</label>
                        <!--end::Label-->
                        <!--begin::Editor-->
                        <div id="content" name="content" class="min-h-200px mb-2">
                            {!! $post->content !!}
                        </div>
                        <input type="hidden" name="content" value="{{ $post->content }}">
                        <!--end::Editor-->
                        <!--begin::Description-->
                        <div class="text-muted fs-7">Enter the content for the post.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Card header-->
            </div>
            <!--end::General options-->
            <div class="d-flex justify-content-end">
                <!--begin::Button-->
                <a href="{{ route('backend.posts.index') }}" class="btn btn-light me-5">Cancel</a>
                <!--end::Button-->
                <!--begin::Button-->
                <button type="submit" id="edit_post_submit" class="btn btn-primary" data-kt-element="submit">
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
        "use strict";
        // Class definition
        const PostForm = function() {
            // Base elements
            const formEl = $('#edit_post_form');
            const editorEl = $('#content');
            const toolbar = [
                [{
                    'font': []
                }, {
                    'size': []
                }],
                ['bold', 'italic', 'underline', 'strike'],
                [{
                    'color': []
                }, {
                    'background': []
                }],
                [{
                    'script': 'super'
                }, {
                    'script': 'sub'
                }],
                [{
                    'header': [false, 1, 2, 3, 4, 5, 6]
                }, 'blockquote', 'code-block'],
                [{
                    'list': 'ordered'
                }, {
                    'list': 'bullet'
                }, {
                    'indent': '-1'
                }, {
                    'indent': '+1'
                }],
                ['direction', {
                    'align': []
                }],
                ['link', 'image', 'video', 'formula'],
                ['clean']
            ];
            var editor;
            // Private functions
            const _initEditor = function() {
                editor = new Quill(editorEl.get(0), {
                    placeholder: 'Enter the content',
                    theme: 'snow',
                    modules: {
                        'toolbar': toolbar
                    }
                });
            }

            const _autoSave = function() {
                editor.on('text-change', function(delta, oldDelta, source) {
                    if (source == 'user') {
                        $('input[name="content"]').val(editor.root.innerHTML);
                    }
                });
            }

            const _onSubmitForm = function() {
                formEl.on('submit', function(e) {
                    e.preventDefault();
                    KTFormControls.onSubmitForm(formEl);
                });
            }

            return {
                // public functions
                init: function() {
                    _initEditor();
                    _autoSave();
                    _onSubmitForm();
                }
            };
        }();

        // On document ready
        KTUtil.onDOMContentLoaded(function() {
            PostForm.init();
        });
    </script>
@endpush
