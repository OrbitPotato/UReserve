@extends('layouts.main')


@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       
        <div class="container">
          <h1 class="h2">Reserve Equipment</h1>

          <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Purpose:</label>
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
            <a class="btn btn-primary" href="{{ url('add-equipment') }}">Proceed</a>
          </div>
      </div>
     </div>
@endsection