{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body> --}}

@extends('layouts.admin.master')
@section('content')
    <div class="container mt-5">
        <h2 class="mb-3">Edit Blog</h2>
        <a href="{{ route('blogs.index') }}" class="btn btn-secondary mb-3">Back to List</a>

        <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div>
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="{{ $blog->title }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <label for="slug" class="form-label">Slug</label>
                                        <input type="text" class="form-control" id="slug" placeholder="Slug" name="slug" value="{{ $blog->slug }}">
                                    </div>
                                </div>
                            </div>
                            <div class="my-4">
                                <label for="short_description" class="form-label">Short_Description</label>

                                <textarea class="form-control" id="short_description" name="short_description" placeholder="Short_Description"
                                    rows="10">{{ $blog->short_description }}</textarea>
                            </div>
                            <div class="my-4">
                                <label for="description" class="form-label">Description</label>

                                <textarea class="form-control" id="description" name="description" placeholder="Description" rows="10">{{ $blog->description}}</textarea>
                            </div>
                        </div>

                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="my-4">
                                <label for="image" class="form-label">image</label>
                                <input type="file" class="form-control dropify" id="image" name="image" value="image" value="{{ $blog->image }}" data-default-file="{{ asset($blog->image) }}">

                                {{-- <input class="form-control dropify" type="file" id="image" name="image" placeholder="Image" rows="10" value="{{ $blog->image }}"></input> --}}
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
                                <input type="number" class="form-control" id="order" placeholder="Order" name="order" value="{{ $blog->order }}">
                            </div>
                            <div class="mb-3">
                                <label for="image_1" class="form-label">image_1</label>
                                <input type="file" class="form-control dropify" id="image_1" name="image_1" value="image_1" value="{{ $blog->image_1 }}" data-default-file="{{ asset($blog->image_1) }}">
_
                                {{-- <input type="file" class="form-control dropify" id="image_1" name="image_1" value="image_1" value="{{ $blog->image_1 }}"> --}}
                            </div>
                            <div class="mb-3">
                                <label for="image_2" class="form-label">image_2</label>
                                <input type="file" class="form-control dropify" id="image_2" name="image_2" value="image_2" value="{{ $blog->image_2 }}" data-default-file="{{ asset($blog->image_2) }}">
                                {{-- <input type="file" class="form-control dropify" id="image_2" name="image_2" value="image_2" value="{{ $blog->image_2 }}"> --}}
                            </div>
                            {{-- <div class="mb-3">
                                <a href="{{ route('blogs.create') }}"
                                    class="btn btn-sm btn-primary d-flex justify-content-between align-items-center gap-2">
                                    Create
                                </a>

                            </div> --}}
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary d-flex justify-content-between align-items-center gap-2">Update Blogs</button>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="seo_title" class="form-label">seo_title</label>
                                <input type="text" class="form-control" id="seo_title" placeholder="Seo title" name="seo_title" value="{{ $blog->seo_title }}">

                            </div>
                            <div class="mb-3">
                                <label for="meta_keywords" class="form-label">meta keywords</label>
                                <input type="text" class="form-control" id="meta_keywords" placeholder="Meta keywords" name="meta_keywords" value="{{ $blog->meta_keywords }}">

                            </div>
                            <div class="my-4">
                                <label for="meta_description" class="form-label">meta Description</label>

                                <textarea class="form-control" id="meta_description" name="meta_description" placeholder="Meta Description" rows="6" value="">{{ $blog->meta_description }}</textarea>
                            </div>
                            <div class="my-4">
                                <label for="seo_schema" class="form-label">seo schema</label>

                                <textarea class="form-control" id="seo_schema" name="seo_schema" placeholder="Seo schema" rows="6" value="">{{ $blog->seo_schema }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>


@endsection

{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html> --}}
