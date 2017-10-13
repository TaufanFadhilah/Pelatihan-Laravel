@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">Homestay</div>

          <div class="panel-body">
            @role('writer')
                I am loggin
            @else
                I am not loggin
            @endrole
            @can('edit homestay')
              <a href="{{route('homestay.create')}}"><button class="btn btn-default">Add Homestay</button></a>
            @endcan

            <table class="table">
              <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Desc</th>
                <th>Price</th>
                <th>Status</th>
                <th>Action</th>
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
                  <td>
                    <a href="{{route('homestay.edit',['homestay' => $row->id])}}"><button class="btn btn-warning">Edit</button></a>
                    <form action="{{route('homestay.destroy',['homestay' => $row->id])}}" method="post">
                      {{csrf_field()}}
                      <input type="hidden" name="_method" value="DELETE" >
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
