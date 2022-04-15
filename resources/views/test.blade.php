<form action="/action_page.php">
@foreach ($arr as $key => $value)

    <div class="mb-3 mt-3">
       <p>
           { "data" : "{{$value}}"  } ,
       </p>
    </div>
@endforeach
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
