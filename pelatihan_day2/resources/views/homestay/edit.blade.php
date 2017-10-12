@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">Edit Homestay</div>

          <div class="panel-body">
            <form action="{{route('homestay.update',['homestay' => $homestay->id])}}" method="post">
            <input name="_method" type="hidden" value="PUT">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="nama" value="{{$homestay->nama}}">
              </div>
              <div class="form-group">
                <label for="address">Address</label>
                <textarea class="form-control" name="alamat">{{$homestay->alamat}}</textarea>
              </div>
              <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="no_telp" value="{{$homestay->no_telp}}">
              </div>
              <div class="form-group">
                <label for="desc">Description</label>
                <textarea class="form-control" name="deskripsi">{{$homestay->deskripsi}}</textarea>
              </div>
              <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="harga" value="{{$homestay->harga}}">
              </div>
              <div class="form-group">
                <label for="status">Status</label>
                <input type="text" class="form-control" id="status" name="status" value="{{$homestay->status}}">
              </div>
              <button type="submit" class="btn btn-warning">Save</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
