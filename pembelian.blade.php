@extends('template')
@section('content')

<div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables Pembelian</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Pembelian</h6>
              <hr>
              <a href="{{ route('pembelian.create') }} " class="btn btn-sm btn-primary">Tambah Pembelian</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Kode Barang</th>
                      <th>Jumlah</th>
                      <th>Total Harga</th>
                      <th>Action</th>
                    </tr>
                  <tbody>
                  @php $no = 1; @endphp
                @foreach($data as $datas)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $datas->kode_barang }}</td>
                        <td>{{ $datas->jml }}</td>
                        <td>{{ $datas->total_harga }}</td>
                        <td>
                            <form action="{{ route('pembelian.destroy', $datas->id )}}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <a href="{{ route('pembelian.edit',$datas->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin Ingin mengahpus Data Pembelian?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

@endsection