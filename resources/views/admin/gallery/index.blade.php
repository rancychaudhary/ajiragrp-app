@extends('layouts.admin.master')
@section('content')

<div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0 text-capitalize">gallerys</h5>
        <small class="text-muted float-end">
            <a href="{{ route('gallery.create') }}"
                class="btn btn-sm btn-primary d-flex justify-content-between align-items-center gap-2">
                Create
            </a>
        </small>
    </div>
</div>
<div class="card">
    <h5 class="card-header">Striped rows</h5>
    <div class="card_body">
        <div class="table-responsive text-nowrap">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>SN</th>
                  <th>Image</th>
                  <th>Title</th>
                  <th>Order</th>
                  <th>Status</th>
                  <th>Actions</th>

                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
               @foreach ( $gallerys as $gallery)
               <tr>
                <td>{{$gallery->id}}</td>
                <td><img class="img-table" src="{{asset($gallery->image)}}" alt="{{$gallery->title}}"></td>
                <td>{{$gallery->title}}</td>
                <td>{{$gallery->order}}</td>
                <td>
@if($gallery->status ==1)
<span class="badge bg-label-success">Publish</span>
@else
<span class="badge bg-label-danger">Draft</span>
@endif                   {{-- {{$gallery->status}} --}}
                </td>

                <td>
                    {{-- <button type="button" class="btn btn-sm btn-primary"><i class="ri-edit-2-fill"></i></button> --}}
                    {{-- <button type="button" class="btn btn-sm btn-danger"><i class="ri-delete-bin-5-line"></i></button> --}}
                           <a href="" class="btn btn-primary btn-sm">
                                        <i class="ri-eye-fill"></i></a>
                     <a href="{{ route('admin.gallery.edit', $gallery->id) }}" class="btn btn-primary btn-sm">
                                        <i class="ri-edit-2-fill"></i></a>
                    <form action="{{ route('admin.gallery.destroy', $gallery->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"><i
                            class="ri-delete-bin-5-line"></i></button>
                    </form>
                    {{-- {{$gallery->actions}} --}}
                </td>
             </tr>
               @endforeach
              </tbody>
            </table>
          </div>
    </div>
  </div>

@endsection

