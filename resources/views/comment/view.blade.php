<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Baby Care</title>
    <!-- Bootstrap -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/responsive.css') }}">

    <style>
        .comment-div {
            border: solid;
            padding: 10px;
            border-radius: 10px;
        }

        .reply-div {
            border: solid;
            border-radius: 15px;
            padding: 8px;
            margin-right: 10px;
            margin-top: 8px;
            flex-wrap: wrap;
            border-color: crimson;
        }

        .single-comment {
            padding: 0 0 20px;
            margin: 10px 0px;
        }

        .comment {
            border: 1px solid #044f61;
            padding: 10px;
            border-radius: 5px;
        }

        .comment-reply {
            padding-left: 20px;
            margin: 5px 0;
        }

        .comment-posted-time, .comment-posted-date {
            margin: 0 20px 5px 20px;
            color: #ce196c;
        }

        .comment-posted {
            display: flex;
        }
    </style>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
@include('shared.header')

<section class="wpm_title_ber" style="background:url({{asset('images/bg-image.jpg')}}) center center fixed;">

    <div class="wpm_opacity_bg">

        <div class="container">

            <div class="row">

                <div class="col-sm-12">

                    <h2 class="text-black">Comment</h2>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="about-us" style="
    background: none;
">

    <div class="container">
        <div class="row">
            <div class="top-abouts">

                <div class="col-xl-12">
                    <div class="col-xl-8 col-md-8">
                        <div class="about-content">
                            <h3>Author - <span class="wpm_color_word">{{$data->name}}</span></h3>
                            <h3>
                                {{$data->review}}
                            </h3>

                            <div class="container">
                                <h2>Comments</h2>
                                <div class="all-comments">
                                    @foreach($data->comments as $comment)
                                        <div class="single-comment">
                                            <div class="comment">
                                                <div class="row">
                                                    <div class="col-md-11">
                                                        <div class="comment-posted">
                                                            <p>Commented by - <b>{{$comment->user->name}}</b></p>
                                                            <p class="comment-posted-time">{{\Illuminate\Support\Carbon::parse($comment->created_at)->format('h:m:s a')}}</p>
                                                            <p class="comment-posted-date">{{\Illuminate\Support\Carbon::parse($comment->created_at)->format('d-M-Y')}}</p>
                                                        </div>
                                                        <p class="comment-body">
                                                            {{$comment->message}}
                                                        </p>
                                                        <div class="new-reply">
                                                            <form action="{{url('/reply/comment')}}" method="POST">
                                                                @csrf
                                                                <br>
                                                                <input type="hidden" hidden name="userId" value="3">
                                                                <input type="hidden" hidden name="commentId"
                                                                       value="{{$comment->id}}">
                                                                <div class="form-group">
                                                                    <textarea class="form-control"
                                                                              id="exampleFormControlTextarea1" rows="1"
                                                                              name="reply_message"
                                                                              placeholder="reply here"></textarea>
                                                                    <br>
                                                                    <button type="submit" class="btn btn-success">
                                                                        Reply
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                @foreach($comment->replies as $reply)
                                                    <div class="comment-reply">
                                                        <div class="comment">
                                                            <div class="row">
                                                                <div class="col-md-11">
                                                                    <div class="comment-posted">
                                                                        <p>Commented by - <b>{{$reply->user->name}}</b></p>
                                                                        <p class="comment-posted-time">{{\Illuminate\Support\Carbon::parse($reply->created_at)->format('h:m:s a')}}</p>
                                                                        <p class="comment-posted-date">{{\Illuminate\Support\Carbon::parse($reply->created_at)->format('d-M-Y')}}</p>
                                                                    </div>
                                                                    <p class="comment-body">
                                                                        {{$reply->message}}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>

                        <div class="post-comment">
                            <div class="container">
                                <h2>Post a comment</h2>
                                <form action="{{url('/post/comment')}}" method="POST">
                                    @csrf
                                    <input type="hidden" hidden name="userId"
                                           value="2">
                                    {{--                                    {{//\Illuminate\Support\Facades\Auth::id()}}--}}
                                    <input type="hidden" hidden name="reviewId" value="{{$data->id}}">
                                    <div class="form-group">
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                  name="comment_message" rows="3"
                                                  placeholder="reply here"></textarea>
                                        <br>
                                        <button type="submit" class="btn btn-success">Comment</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>


<section class="wpm_frooter_ending">

    <div class="container">

        <div class="col-sm-12 wpm_mobile_center">
            <div class="footer-icon">
                <div class="social">
                    <a href=""><img src="{{asset('/icon/facebook.png')}}" alt=""></a>

                    <a href=""><img src="{{asset('/icon/instagram.png')}}" alt=""></a>

                    <a href=""><img src="{{asset('/icon/twitter.png')}}" alt=""></a>

                    <a href=""><img src="{{asset('/icon/linkedin.png')}}" alt=""></a>

                </div>
                <div class="logo-footer">
                    <img src="{{asset('/icon/logo.png')}}" alt="">
                </div>

                <div class="contacts">
                    <a href=""><img src="{{asset('/icon/call.svg')}}" alt=""> <span>0179853585</span></a>
                    <a href=""><img src="{{asset('/icon/gmail.svg')}}" alt=""> <span>infobabycare@gmail.com</span></a>
                </div>
            </div>


            <p>Copyright &copy; <a href="#" target="_blank">{{date('Y')}}</a></p>
        </div>

    </div>

</section>


<script src="{{asset('/js/jquery.min.js') }}"></script>
<script src="{{asset('/js/custom.js') }}"></script>
</body>
</html>