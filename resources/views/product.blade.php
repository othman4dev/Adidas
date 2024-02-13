@extends('layout')
@section('content')
<div class="headerSection">
    <h2>Items</h2>
    <span><span>Home</span> / Items</span>
</div>
<div class="modalAddCatgory mt-3 mb-3">
  <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addCategory">Add New Product</button>
  <div class="modal fade" id="addCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h2>Add New Product</h2>
          </div>
          <div class="modal-body">
              <form action="/addProduct" method='post'>
                  @csrf
                  <input type="text" name='name' class="form-control mt-3" placeholder="Product Name">
                  <input type="Number" name='price' class="form-control mt-3" placeholder="Product Price">
                  <textarea  type="text" name="description" rows="6" class="form-control mt-3 tiny" placeholder="Product Description"></textarea>
                  <select name="category_id" class='form-select  mt-3'>
                    @foreach($categories as $categorie)
                    <option value="{{ $categorie->id}}">{{$categorie->name}}</option>
                    @endforeach
                  </select>
                  <select name="tages_id[]" class='form-select  mt-3' multiple>
                    @foreach($tages as $tage)
                    <option value="{{ $tage->id}}">{{$tage->name}}</option>
                    @endforeach
                  </select>
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
        <th>Product Name </th>
        <th>Product Description </th>
        <th>Category Name</th>
        <th>Tages Names</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($products as $product)
      <tr>
        <td>
          <div class="d-flex align-items-center">
            <img src="assets/img/item.png" alt=""  style="width: 45px; height: 45px" class="rounded-circle"/>
            <p class="fw-bold mb-1 ms-3">{{$product->name}}</p>
          </div>
        </td>
        <td>
          <p class="fw-normal mb-1">{{$product->description}}</p>
        </td>
        <td>
          <p class="fw-normal mb-1">{{$product->category->name}}</p>
        </td>
        <td>
          
        @if(!empty($TagList[$product->id]))
          @foreach($TagList[$product->id] as $tageList)
              <span class="fw-normal mb-1 mx-1">{{$tageList->name}}</span>
          @endforeach
        @endif
        </td>
        <td>
          <button class="edit" data-bs-toggle="modal" data-bs-target="#updateCategory{{$product->id}}">
            <i class="bi bi-pencil-square"></i>
            Edit
          </button>
          <button class="delete" data-bs-toggle="modal" data-bs-target="#delectProd{{$tage->id}}">
            <i class="bi bi-trash3"></i>
            Delete
          </button>
        <div class="modal fade" id="delectProd{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-body">
                  <h1 class='text-center text-secondary'>Are you sure you want to delete this?</h1>
                  <div class="button mt-3 mb-3 d-flex gap-2 justify-content-center">
                      <a type="submit" class="btn btn-outline-danger" href="/DeletProduct/{{$product->id}}">Confirm</a>
                      <button type="reset"  data-bs-dismiss="modal" class="btn btn-outline-dark">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <div class="modal fade" id="updateCategory{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h2>Add New Product</h2>
                </div>
                <div class="modal-body">
                    <form action="/UpdateProduct/{{$product->id}}" method='POST'>
                        @csrf
                        <input type="text" name='name' value='{{$product->name}}' class="form-control mt-3" placeholder="Product Name">
                        <input type="Number" name='price' value='{{$product->price}}'  class="form-control mt-3" placeholder="Product Price">
                        <textarea  type="text" name="description" rows="6" class="form-control mt-3 tiny" placeholder="Product Description">{{$product->description}}</textarea>
                        <select name="category_id" class='form-select  mt-3'>
                          @foreach($categories as $categorie)
                          <option value="{{ $categorie->id}}">{{$categorie->name}}</option>
                          @endforeach
                        </select>
                        <select name="tages_id[]" class='form-select mt-3' multiple>
                          @foreach($tages as $tage)
                          <option value="{{ $tage->id }}" 
                            @if(isset($TagList[$product->id]))
                                @foreach($TagList[$product->id] as $selectedTag)
                                    @if($tage->id == $selectedTag->id) selected @endif
                                @endforeach
                            @endif > {{ $tage->name }}
                          </option>
                          @endforeach
                        </select>
                        <div class="button mt-3 mb-3 d-flex gap-2 justify-content-end">
                            <button type="submit" class="btn btn-outline-success">Update</button>
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
