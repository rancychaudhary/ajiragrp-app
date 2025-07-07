@extends('layouts.admin.master')
@section('content')
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0 text-capitalize">Create Blogs</h5>
            <small class="text-muted float-end">
                <a href="{{ route('blogs.index') }}"
                    class="btn btn-sm btn-primary d-flex justify-content-between align-items-center gap-2">
                    back
                </a>
            </small>
        </div>
    </div>

    <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            {{--
            <div class="col-md-8">

                <div class="card mb-4">
                    <div class="card_body">

                        <div class="row mb-4">
                            <div class="col-md-8">
                                <div>
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" placeholder="title" />
                                    <div id="title" class="form-text">
                          We'll never share your details with anyone else.
                        </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div>
                                    <label for="slug" class="form-label">Slug</label>
                                    <input type="text" class="form-control" id="slug" placeholder="slug" />
                                    <div id="title" class="form-text">
                          We'll never share your details with anyone else.
                        </div>
                                </div>
                            </div>

                        </div>
                        <div class="my-4">
                            <label for="short_description" class="form-label">Short_description</label>
                            <textarea class="from-control" id="short_description" name="short_description" placeholder="short_description"
                                rows="10"></textarea>
                        </div>
                        <div class="my-4">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="from-control" id="description" name="description" placeholder="description" rows="10"></textarea>
                        </div>

                    </div>
                </div>

                <div class="card">
                    <div class="card_body">
                        <div class="my-4">
                            <label for="image" class="form-label">Image</label>
                            <textarea type="file" class="from-control" id="image" name="image" placeholder="image" rows="10"></textarea>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4">

                <div class="card mb-4">
                    <div class="card_body">
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <input type="select" class="form-control" id="status" name="status" placeholder="status" />
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <input type="select" class="form-control" id="status" name="status" placeholder="status" />
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <input type="select" class="form-control" id="status" name="status" placeholder="status" />
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <input type="select" class="form-control" id="status" name="status" placeholder="status" />
                        </div>
                        <div class="mb-3">
                            <a href="{{ route('blogs.create') }}"
                                class="btn btn-sm btn-primary d-flex justify-content-between align-items-center gap-2">
                                create
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card_body">
                        <div class="mb-3">
                            <label for="seo_title" class="form-label">Seo title</label>
                            <input type="text" class="form-control" id="status" name="seo_title"
                                placeholder="seo_title" />
                        </div>
                        <div class="mb-3">
                            <label for="meta_keywords" class="form-label">Meta keywords</label>
                            <input type="text" class="form-control" id="meta_keywords" name="meta_keywords"
                                placeholder="meta_keywords" />
                        </div>
                        <div class="my-4">
                            <label for="meta_description" class="form-label">Meta description</label>
                            <textarea class="form-control" id="meta_description" name="meta_description" placeholder="meta_description"
                                row="6"> </textarea>
                        </div>
                        <div class="my-4">
                            <label for="seo_schema" class="form-label">Seo schema</label>
                            <textarea class="form-control" id="sero_schema" name="seo_schema" placeholder="seo_schema" row="6"> </textarea>
                        </div>

                    </div>
                </div>
            </div> --}}


            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div>
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" placeholder="Title" name="title">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div>
                                    <label for="slug" class="form-label">Slug</label>
                                    <input type="text" class="form-control" id="slug" placeholder="Slug" name="slug">
                                </div>
                            </div>
                        </div>
                        <div class="my-4">
                            <label for="short_description" class="form-label">Short_Description</label>

                            <textarea class="form-control" id="short_description" name="short_description" placeholder="Short_Description"
                                rows="10"></textarea>
                        </div>
                        <div class="my-4">
                            <label for="description" class="form-label">Description</label>

                            <textarea class="form-control" id="description" name="description" placeholder="Description" rows="10"></textarea>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="my-4">
                            <label for="image" class="form-label">image</label>
                            <input class="form-control dropify" type="file" id="image" name="image" placeholder="Image" rows="10"></input>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="status" class="form-label">status</label>
                            {{-- <input type="text" class="form-control" id="status" placeholder="status" name="status"> --}}
                            <select class="form-select" name="status" id="status"><option value="
                                0">Draft</option>
                            <option value="1">Published</option></select>
                        </div>
                        <div class="mb-3">
                            <label for="order" class="form-label">order</label>
                            <input type="number" class="form-control" id="order" placeholder="Order" name="order">
                        </div>
                        <div class="mb-3">
                            <label for="image_1" class="form-label">image_1</label>
                            <input type="file" class="form-control dropify" id="image_1" name="image_1" value="image_1">
                        </div>
                        <div class="mb-3">
                            <label for="image_2" class="form-label">image_2</label>
                            <input type="file" class="form-control dropify" id="image_2" name="image_2" value="image_2">
                        </div>
                        {{-- <div class="mb-3">
                            <a href="{{ route('blogs.create') }}"
                                class="btn btn-sm btn-primary d-flex justify-content-between align-items-center gap-2">
                                Create
                            </a>

                        </div> --}}
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary d-flex justify-content-between align-items-center gap-2">Submit</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="seo_title" class="form-label">seo_title</label>
                            <input type="text" class="form-control" id="seo_title" placeholder="Seo title" name="seo_title">

                        </div>
                        <div class="mb-3">
                            <label for="meta_keywords" class="form-label">meta keywords</label>
                            <input type="text" class="form-control" id="meta_keywords" placeholder="Meta keywords" name="meta_keywords">

                        </div>
                        <div class="my-4">
                            <label for="meta_description" class="form-label">meta Description</label>

                            <textarea class="form-control" id="meta_description" name="meta_description" placeholder="Meta Description" rows="6"></textarea>
                        </div>
                        <div class="my-4">
                            <label for="seo_schema" class="form-label">seo schema</label>

                            <textarea class="form-control" id="seo_schema" name="seo_schema" placeholder="Seo schema" rows="6"></textarea>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </form>
@endsection
