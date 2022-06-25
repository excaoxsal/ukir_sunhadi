@extends('layouts.app')


@section('content')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th></th>
                    <th>Nama Barang</th>
                    <th>Berat</th>
                    <th>Harga</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($product as $p)
                  <tr>
                    <td>
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary2">
                        <label for="checkboxPrimary2">
                        </label>
                      </div>
                    </td>
                    <td>{{$p->name}}</td>
                    <td>{{$p->weight}}</td>
                    <td>{{$p->price}}</td>
                    <td>{{$p->created_at}}</td>
                    <td>unfinished</td>
                  </tr>
                  @endforeach

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    
    @endsection