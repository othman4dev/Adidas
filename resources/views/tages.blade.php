@extends('layout')
@section('content')
<div class="headerSection">
    <h2>Items</h2>
    <span><span>Home</span> / Tages</span>
</div>
<div class="modalAddCatgory mt-3 mb-3">
  <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addCategory">Add New Tages</button>
  <div class="modal fade" id="addCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h2>Add New Tages</h2>
          </div>
          <div class="modal-body">
              <form action="/addTags" method='post'>
                  @csrf
                  <input type="text" name='name' class="form-control mt-3" placeholder="Product Name">
                  <div class="button mt-3 mb-3 d-flex gap-2 justify-content-end">
                      <button type="submit" class="btn btn-outline-success">Add</button>
                      <button type="reset"  data-bs-dismiss="modal" class="btn btn-outline-dark">Close</button>
                  </div>
              </form>
          </div>
        </div>
      </div>
  </div>
</div>
<table class="mt-3 table align-middle mb-0 bg-white" id="myTable">
    <thead class="bg-light">
      <tr>
        <th>Tages Name </th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($tages as $tage)
      <tr>
        <td>
          <div class="d-flex align-items-center">
            <p class="fw-bold mb-1 ms-3">{{$tage->name}}</p>
          </div>
        </td>
        <td class="mini">
        <button class="edit" data-bs-toggle="modal" data-bs-target="#updateTage{{$tage->id}}">
            <i class="bi bi-pencil-square"></i>
            Edit
          </button>
          <button class="delete" data-bs-toggle="modal" data-bs-target="#delectTags{{$tage->id}}">
            <i class="bi bi-trash3"></i>
            Delete
          </button>
          <div class="modal fade" id="delectTags{{$tage->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-body">
                  <h1 class='text-center text-secondary'>Are you sure you want to delete this?</h1>
                  <div class="button mt-3 mb-3 d-flex gap-2 justify-content-center">
                      <a type="submit" class="btn btn-outline-danger" href="/DeletTage/{{$tage->id}}">Confirm</a>
                      <button type="reset"  data-bs-dismiss="modal" class="btn btn-outline-dark">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="updateTage{{$tage->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h2>Add New Tages</h2>
                </div>
                <div class="modal-body">
                    <form action="/updateTags/{{$tage->id}}" method='post'>
                        @csrf
                        <input type="text" name='name' value='{{$tage->name}}' class="form-control mt-3" placeholder="Product Name">
                        <div class="button mt-3 mb-3 d-flex gap-2 justify-content-end">
                            <button type="submit" class="btn btn-outline-success">Add</button>
                            <button type="reset"  data-bs-dismiss="modal" class="btn btn-outline-dark">Close</button>
                        </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
</table>
@endsection