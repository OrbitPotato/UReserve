@extends('layouts.main')


@section('content')

  <div class="container">

      @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('success') }}
        </div>
      @endif
      

      <form method="POST" action="{{ url('/reserve-equipment') }}">
      {{-- <form method="GET" action="{{ url('/review') }}"> --}}
        @csrf

            <input type="hidden" name="user_id" value="{{ Auth::user()->user_id }}" />
            <div class="form-group row">
              <label for="purpose" class="col-sm-2 col-form-label">Purpose</label>
              <div class="col-sm-10">
              <textarea type="input" class="form-control" id="purpose" aria-describedby="emailHelp" placeholder="Enter purpose here"></textarea>
              </div>
            </div>
            
            <div class="row">
                <div class="form-group col-md-6">
                  <label for="fromDate" class="form-label">From</label>
                  <input type="date" class="form-control" id="fromDate" name="fromDate">
                </div>
                <div class="form-group col-md-6">
                  <label for="toDate" class="form-label">To</label>
                  <input type="date" class="form-control" id="toDate" name="toDate">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                  <label for="fromTime" class="form-label">From</label>
                  <input type="time" class="form-control" id="fromTime" name="fromTime">
                </div>
                <div class="form-group col-md-6">
                  <label for="toTime" class="form-label">To</label>
                  <input type="time" class="form-control" id="toTime" name="toTime">
                </div>
            </div>

            <div class="form-row">
              <label for="professor" class="form-label">Professor</label>
              <select class="form-select" aria-label="Default select example">
                <option selected>Select Professor</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>

            <div class="row" id="equipment">
            <div class="row equipments">
              <div class="form-group col-md-4">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="input" class="form-control" id="quantity" name="equipment[0][quantity]">
              </div>
              <div class="form-group col-md-4">
                <label for="item" class="form-label">Item</label>
                <select class="form-select" aria-label="Default select example" name="equipment[0][item]">
                  <option selected>Select Item</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" aria-label="Default select example" name="equipment[0][category]">
                  <option selected>Select Category</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              </div>
            </div>
              <a href="javascript:void(0);" id="add" class="btn btn-primary">+ADD</a>

            <br/>
            <br/>
            <br/>
            <div class="row">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
      </form>
  </div>

@endsection

@section('js')
  <script>
    $(function(){

      $('#add').on('click', function(e) {

        const totalCount = $('.equipments').length;

        $('#equipment').append(`
          <div class="row equipments">
            <div class="form-group col-md-4">
              <label for="quantity" class="form-label">Quantity</label>
              <input type="input" class="form-control" id="quantity" name="equipment[${totalCount}][quantity]">
            </div>
            <div class="form-group col-md-4">
              <label for="item" class="form-label">Item</label>
              <select class="form-select" aria-label="Default select example" name="equipment[${totalCount}][item]">
                <option selected>Select Item</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="form-group col-md-4">
              <label for="category" class="form-label">Category</label>
              <select class="form-select" aria-label="Default select example" name="equipment[${totalCount}][category]">
                <option selected>Select Category</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
          </div>
        `)
      })
    })
  </script>
@endsection



{{-- 

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       
        <div class="container">
          <h1 class="h2">Reserve Equipment</h1>          
          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Purpose:</label>
            <div class="col-sm-10">
              <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                <label for="floatingTextarea">Type purpose here</label>
              </div>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Date of Use:</label>
            <div class="col-auto">
              <input type="date" class="form-control" id="fromDate">
            </div>
            <div class="col-auto">
              <input type="date" class="form-control" id="fromDate">
            </div>
          </div>

          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Time of Use:</label>
            <div class="col-auto">
              <input type="time" class="form-control" id="fromTime">
            </div>
             
            <div class="col-auto">
              <input type="time" class="form-control" id="fromTime">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Professor:</label>
            <div class="col-sm-10">
              <select class="form-select" aria-label="Default select example">
                <option selected>Select Professor</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
          </div>
          <div class="mb-3 row">
             <label for="equipment" class="col-sm-2 col-form-label">Professor:</label>
          </div>
          <div class="mb-3 row">      
            <a class="btn btn-primary" href="{{ url('add-equipment') }}">Proceed</a>
          </div>
      </div>
     </div> --}}