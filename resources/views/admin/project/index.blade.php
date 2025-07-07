@extends('layouts.admin.master')
@section('content')

<div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0 text-capitalize">Project</h5>
        <small class="text-muted float-end">
            <a href="{{ route('project.create') }}"
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
               @foreach()
               <tr>
                <td>SN</td>
                <td>Image</td>
                <td>Title</td>
                <td>Order</td>
                <td>Status</td>
                <td>Actions</td>
             </tr>
              </tbody>
            </table>
          </div>
    </div>
  </div>

@endsection

