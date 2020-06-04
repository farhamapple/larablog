@extends('backend.template')

@section('page_title')
Category
@endsection

@section('content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Category</h1>
      </div>
      <div class="section-body">
      <a href="/category/create" class="btn btn-info btn-sm">Tambah Kategori</a>
          <br>
          <div class="table-responsive">
            <table class="table table-bordered table-md">
              <tbody><tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
              </tr>
              @foreach ($category as $key => $value)
              <tr>
                <td>{{ $key + $category->firstitem() }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->slug }}</td>
                <td>{{ $value->created_at }}</td>
                <td>{{ $value->updated_at }}</td>
                <td><a href="#" class="btn btn-secondary">Detail</a></td>
              </tr>
              @endforeach
            </tbody></table>
            {{ $category->links() }}
          </div>
      </div>
    </section>
  </div>
@endsection
