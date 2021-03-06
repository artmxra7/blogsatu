@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">

                @foreach ($post as $posts)


                <article class="post-item">
                    <div class="post-item-image">
                        <a href="post.html">
                            <img src="{{$posts->imageurl}}" alt="">
                        </a>
                    </div>
                    <div class="post-item-body">
                        <div class="padding-10">
                            <h2><a href="post.html">{{$posts->title}}</a></h2>
                            <p>{{$posts->excerpt}}</p>
                        </div>

                        <div class="post-meta padding-10 clearfix">
                            <div class="pull-left">
                                <ul class="post-meta-group">
                                    <li><i class="fa fa-user"></i><a href="#"> {{$posts->author['name']}}</a></li>
                                    <li><i class="fa fa-clock-o"></i><time> {{$posts->date}}</time></li>
                                    <li><i class="fa fa-tags"></i><a href="#"> Blog</a></li>
                                    <li><i class="fa fa-comments"></i><a href="#">4 Comments</a></li>
                                </ul>
                            </div>
                            <div class="pull-right">
                                <a href="post.html">Continue Reading &raquo;</a>
                            </div>
                        </div>
                    </div>
                </article>

                @endforeach
                <nav>
                    {{$post->links()}}
                  {{--  <ul class="pager">
                    <li class="previous disabled"><a href="#"><span aria-hidden="true">&larr;</span> Newer</a></li>
                    <li class="next"><a href="#">Older <span aria-hidden="true">&rarr;</span></a></li>
                  </ul>  --}}
                </nav>
            </div>
           @include('layouts.sidebar')
        </div>
    </div>

@endsection
