@extends ('layouts.master')

@section ('content')

    <div class="col-sm-8 blog-main">
        <h1>Edit A comment</h1>

        <hr>

         <form method="post" action="/posts/{{$comment->id}}/update">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="body">Body : </label>
                <textarea name="body" id="body" class="form-control" >{{$comment->body}}</textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-warning">update</button>
            </div>



            </form>


            @include ('layouts.errors')
    </div>
@endsection