@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">Homestay</div>

          <div class="panel-body">
            <a href="{{route('homestay.create')}}"><button class="btn btn-default">Add Homestay</button></a>
            <table class="table">
              <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Desc</th>
                <th>Price</th>
                <th>Status</th>
              </tr>
              @foreach ($data as $key => $row)
                <tr>
                  <td>{{++$key}}</td>
                  <td>{{$row->nama}}</td>
                  <td>{{$row->alamat}}</td>
                  <td>{{$row->no_telp}}</td>
                  <td>{{$row->deskripsi}}</td>
                  <td>Rp. {{number_format($row->harga)}}</td>
                  <td>{{$row->status}}</td>
                </tr>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
