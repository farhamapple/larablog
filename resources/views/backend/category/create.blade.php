@extends('backend.template')

@section('page_title')
Category
@endsection

@section('content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Tambah Category</h1>
      </div>
      <div class="section-body">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
              <div class="card-header">
                <h4>Form Tambah Kategori</h4>
              </div>
              <div class="card-body">
                  @if(count($errors)>0)
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                  @endif
                <form action="{{ route('category.store') }}" method="POST" >
                    @csrf
                    <div class="form-group">
                    <label>Nama Kategori</label>
                    <input type="text" name='name' class="form-control">
                    </div>
                    <hr>
                    <div class="card-footer">
                        <button class="btn btn-md btn-primary">Simpan Data</button>
                    </div>
                </form>
              </div>
            </div>

          </div>
      </div>
    </section>
  </div>
@endsection
