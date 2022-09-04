<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$test->format->title ?? ''}}</title>
    <!-- Google-fonts-include -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;700&family=Oswald:wght@700&display=swap" rel="stylesheet">
    <!-- Bootstrap-css include -->
    <link rel="stylesheet" href="{{asset('quiz/css/bootstrap.min.css')}}">
    <!-- Main-StyleSheet include -->
    <link rel="stylesheet" href="{{asset('quiz/css/thank-style.css')}}">
</head>
<body>
<div id="wrapper">
    <div class="container">
        <div class="row text-center">
            <div class="check_mark_img">
                <img src="{{asset('quiz/images/background/Exams-bro.png')}}" alt="image_not_found">
            </div>
            <div class="sub_title">
                Your percentage {{intval($test->result / $results->count() * 100)}}%
            </div>
            <p>I got {{$test->result}} out of {{$results->count()}}.</p>
            <div class="title pt-1">
                <h3>Thankyou For Give Answer</h3>
            </div>
        </div>
    </div>
</div>
</body>
</html>
