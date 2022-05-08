@extends('layouts.main')


@section('content')
    <div class="align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Equipment</h1>
        <div class="container">
            <form id="equipment-form">
                <div class="row g-3 equipment">
                    <div class="col-auto">
                        <label for="staticEmail2" class="visually-hidden">Email</label>
                        <input type="text" aria-label="First name" class="form-control" name="quantity">
                    </div>
                    <div class="col-auto">
                        <select class="form-select" aria-label="Default select example" name="category">
                            <option selected>Make a selection</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-auto">
                        <select class="form-select" aria-label="Default select example" name="item">
                            <option selected>Make a selection</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <button id="save" class="btn btn-primary">Save</button>

    <button id="add" class="btn btn-primary" type="submit" value="Submit" class="col-1-4">+ Add Item</button>
    </div>

  </div>

@endsection

@section('js')
<script>
   $( "#add" ).click(function() {

    // const totalCount = $('.equipment').length;

    $( "#equipment-form" ).append(`
    <div class="row g-3 equipment"><div class="col-auto">
    <label for="staticEmail2" class="visually-hidden">Email</label>
    <input type="text" aria-label="First name" class="form-control" name="quantity">
</div>
<div class="col-auto">
    <select class="form-select" aria-label="Default select example" name="quantity">
        <option selected>Make a selection</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
</div>
<div class="col-auto">
    <select class="form-select" aria-label="Default select example" name="quantity">
        <option selected>Make a selection</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
</div></div>` );
});
$('#save').on('click', function(){
    console.log('test');
    // $.ajax({
    //     type: 'POST',
    //     url: 'http://localhost:8000/api/reserve-rooms',
    //     data: $('form').serializeArray(),
    //     headers: {
    //         'Content-Type': 'application/json'
    //     },
    //     success: function(data) {
    //         console.log(data);
    //     }
    // });

    const equipment = $('form').serializeArray().map(function(item) {
        return {
            [item.name]: item.value
        }
    });


    console.log({equipment})


    $.post('http://localhost:8000/api/reserve-rooms', { equipment }, function(data){
        console.log(data);
    })
});

</script>
@endsection

