@extends ('layouts.master')


@section ('content')

    <div class="col-sm-8 blog-main">
    
        <h1>{{$post->title}} </h1>
        
        {{$post->body}}

        <hr>

        <div class="comments">

            <ul class="list-group">

                @foreach ($post->comments as $comment) 


                    <li class="list-group-item">
                        
                        <strong>
                            {{$comment->created_at->diffForHumans()}}
                            :
                        </strong>

                        {{$comment->body}}
                        
                        <hr>

                        <div class="row">
                            
                            <div class="col-sm-2">

                                <form method="get" action="/posts/{{$comment->id}}/comment">
                                    <button class="btn btn-info btn-sm">edit</button>
                                </form>

                            </div>

                            <div class="col-sm-2">
                                
                                <form method="post" action="/posts/{{$comment->id}}/remove">

                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm">remove</button>

                                </form>

                            </div>

                        </div>
                        

                       


                    </li>


                @endforeach

            </ul>

            <hr>

            <div class="card">
            
                <div class="card-body">

                    <form method="post" action="/posts/{{$post->id}}/comments">

                        {{ csrf_field() }}

                        <div class="form-group">

                            <textarea name="body" placeholder="your comment here." class="form-control" ></textarea>

                        </div>

                        <div class="form-group">

                            <button type="submit" class="btn btn-primary btn-sm" >Add Comment</button>
                        

                        </div>

                    </form>

                </div>

            </div>

            @include ('layouts.errors')

            <hr>

        </div>


    </div>

    
    
@endsection