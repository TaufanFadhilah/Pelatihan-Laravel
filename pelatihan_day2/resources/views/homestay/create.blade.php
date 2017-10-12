@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">Add Homestay</div>

          <div class="panel-body">
            <form action="{{route('homestay.store')}}" method="post">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="nama">
              </div>
              <div class="form-group">
                <label for="address">Address</label>
                <textarea class="form-control" name="alamat"></textarea>
              </div>
              <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="no_telp">
              </div>
              <div class="form-group">
                <label for="desc">Description</label>
                <textarea class="form-control" name="deskripsi"></textarea>
              </div>
              <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="harga">
              </div>
              <div class="form-group">
                <label for="status">Status</label>
                <input type="text" class="form-control" id="status" name="status">
              </div>
              <button type="submit" class="btn btn-default">Add</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
