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
<table class="mt-3 table align-middle mb-0 bg-white">
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
        <svg data-bs-toggle="modal" data-bs-target="#updateCategory{{$product->id}}" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="cursor-pointer bi bi-pencil-square" viewBox="0 0 16 16">
          <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
        </svg>
        <svg data-bs-toggle="modal" data-bs-target="#delectProd{{$product->id}}" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="ml-2 cursor-pointer bi bi-trash3" viewBox="0 0 16 16">
          <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
        </svg>
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