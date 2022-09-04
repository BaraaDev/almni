<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from jthemes.net/themes/html/BeWizard/Quiz/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Jul 2022 14:06:17 GMT -->
<head>
    <meta charset="utf-8">
    <title>اختبار</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('quiz/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('quiz/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('quiz/css/quiz.css')}}">

<body>
<div class="quiz-top-area text-center">
    <h1>English Quiz</h1>
    <div class="quiz-countdown text-center ul-li">
        <ul>
            <li class="days">
                <span class="count-down-number"></span>
                <span class="count-unit">Days</span>
            </li>

            <li class="hours">
                <span class="count-down-number"></span>
                <span class="count-unit">Hours</span>
            </li>

            <li class="minutes">
                <span class="count-down-number"></span>
                <span class="count-unit">Min</span>
            </li>

            <li class="seconds">
                <span class="count-down-number"></span>
                <span class="count-unit">Sec</span>
            </li>
        </ul>
    </div>
</div>
<div class="wrapper position-relative">
    <div class="wizard-content-1 clearfix">
        <div class="steps d-inline-block position-absolute clearfix">
            <ul class="tablist multisteps-form__progress">
                <li class="multisteps-form__progress-btn js-active current"></li>
                <li class="multisteps-form__progress-btn "></li>
                <li class="multisteps-form__progress-btn"></li>
                <li class="multisteps-form__progress-btn"></li>
                <li class="multisteps-form__progress-btn"></li>
            </ul>
        </div>
        <div class="step-inner-content clearfix position-relative">
            <!-- Action Attr Go to link of thanks page -->
            {!! Form::open(['method' => 'POST',
                'route' => ['quizzes.store',$quiz->id],
                'class' => 'multisteps-form__form'])
            !!}
            <div class="form-area position-relative">
            <?php $i = 1; ?>

            @forelse($quiz->questions as $key => $question)

                <!-- step {{$loop->iteration}} -->
                    <div class="multisteps-form__panel @if($loop->first) js-active @endif" data-animation="fadeIn">
                        <div class="wizard-forms clearfix position-relative">

                            @if($loop->first)
                                <div class="quiz-title">
                                    <h2 class="text-center mb-5">Start Quiz</h2>
                                </div>
                            @endif

                        <!-- Q -->
                            <div class="container">
                                <!-- Q -->

                                <div class="question">
                                    <h4>{{$loop->iteration . '- ' . $question->question}} ?</h4>
                                    <input type="hidden" name="questions[{{$i}}]" value="{{ $question->id }}">
                                    @foreach($question->options as $option)
                                        <label for="Q{{$question->id}}_{{$loop->iteration}}" class="answer">
                                            <input type="radio" required id="Q{{$question->id}}_{{$loop->iteration}}" value="{{$option->id}}" name="answers[{{$question->id}}]">
                                            <label for="Q{{$question->id}}_{{$loop->iteration}}">{{$option->option}}</label>
                                        </label>
                                    @endforeach
                                </div><!-- Q -->

                            </div><!-- Q -->


                            <div class="bottom-vector">
                                <img src="{{asset('quiz/images/bq1.png')}}" alt="">
                            </div>


                            <div class="quiz-progress-area">
                                <div class="progress">
                                    <div class="progress-bar position-relative" style="width: {{intval($loop->iteration / $question->count() * 100)}}%">
                                        <span>{{intval($loop->iteration / $question->count() * 100)}}%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="actions clearfix">
                                <ul>
                                    @if($loop->first)
                                        <li class="d-none"><span class="js-btn-next" title="PREV">Previous Question</span></li>
                                    @else
                                        <li><span class="js-btn-prev" title="PREV">Previous Question</span></li>
                                    @endif


                                    @if($loop->last)
                                        <li><button class="js-btn-submit" type="submit"><span>SUBMIT</span></button></li>
                                    @else
                                        <li><span class="js-btn-next" title="NEXT">Next Question</span></li>
                                    @endif
                                </ul>
                            </div>

                        </div>
                    </div>
                    <?php $i++; ?>
                @empty
                    <div class="alert alert-danger">
                        {{__('home.There is no data')}}.
                    </div>
                @endforelse
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

<script src="{{asset('quiz/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('quiz/js/bootstrap.min.js')}}"></script>
<script src="{{asset('quiz/js/form-step.js')}}"></script>
<script src="{{asset('quiz/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('quiz/js/quiz.js')}}"></script>
<!-- <script src="quiz/js/switch.js"></script> -->
</body>
</html>








{{--






<!DOCTYPE html>

<html lang="en">


<!-- Mirrored from jthemes.net/themes/html/BeWizard/Quiz/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Jul 2022 14:06:17 GMT -->
<head>
    <meta charset="utf-8">
    <title>اختبار</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('quiz/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('quiz/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('quiz/css/quiz.css')}}">

<body>
<div class="quiz-top-area text-center">
    <h1>English Quiz</h1>
    <div class="quiz-countdown text-center ul-li">
        <ul>
            <li class="days">
                <span class="count-down-number"></span>
                <span class="count-unit">Days</span>
            </li>

            <li class="hours">
                <span class="count-down-number"></span>
                <span class="count-unit">Hours</span>
            </li>

            <li class="minutes">
                <span class="count-down-number"></span>
                <span class="count-unit">Min</span>
            </li>

            <li class="seconds">
                <span class="count-down-number"></span>
                <span class="count-unit">Sec</span>
            </li>
        </ul>
    </div>
</div>
<div class="wrapper position-relative">
    <div class="wizard-content-1 clearfix">
        <div class="steps d-inline-block position-absolute clearfix">
            <ul class="tablist multisteps-form__progress">
                <li class="multisteps-form__progress-btn js-active current"></li>
                <li class="multisteps-form__progress-btn "></li>
                <li class="multisteps-form__progress-btn"></li>
                <li class="multisteps-form__progress-btn"></li>
                <li class="multisteps-form__progress-btn"></li>
            </ul>
        </div>
        <div class="step-inner-content clearfix position-relative">
            <!-- Action Attr Go to link of thanks page -->
            {!! Form::open(['method' => 'POST',
                'route' => ['quizzes.store',$quiz->id],
                'class' => 'multisteps-form__form'])
            !!}
                <div class="form-area position-relative">

                    <?php $i = 1; $f = 0; $d = 0?>
                    @forelse($quiz->questions->slice($f,1) as $key => $question)
                            <?php $f++; ?>
                    <div class="multisteps-form__panel @if($loop->iteration == $d || $loop->iteration == $d || $loop->iteration == $d) js-active @endif" data-animation="fadeIn">
                        <div class="wizard-forms clearfix position-relative">
                            <div class="quiz-title">
                                <h2 class="text-center mb-5">Start Quiz</h2>
                            </div>

                            <!-- Q -->
                            <div class="container">

                            @foreach($quiz->questions->slice($d,3) as $key => $question)

                                <?php $d++; ?>
                            <!-- Q -->
                                <div class="question">
                                    <h4>{{$loop->iteration . '- ' . $question->question}}?</h4>
                                    @foreach($question->options as $option)
                                        <label for="Q1_1" class="answer">
                                            <input type="radio" id="Q1_1" name="Q1">
                                            <label for="Q1_1">{{$option->option}}</label>
                                        </label>

                                    @endforeach
                                </div>
                                <!-- Q -->
                                @endforeach



                            </div>
                            <!-- Q -->

                            <div class="bottom-vector">
                                <img src="{{asset('quiz/images/bq1.png')}}" alt="">
                            </div>
                            <div class="quiz-progress-area">
                                <div class="progress">
                                    <div class="progress-bar position-relative" style="width: 10%">
                                        <span>10%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="actions clearfix">
                                <ul>
                                    <li class="d-none"><span class="js-btn-next" title="PREV">Previous Question</span></li>
                                    <li><span class="js-btn-next" title="NEXT">Next Question</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                        <?php $i++; ?>
                    @empty
                        <div class="alert alert-danger">
                            {{__('home.There is no data')}}.
                        </div>
                    @endforelse


             --}}
{{--       @forelse($quiz->questions as $key => $question)
                    <div class="multisteps-form__panel" data-animation="fadeIn">
                        <div class="wizard-forms clearfix position-relative">
                            <div class="quiz-title">
                                <h2 class="text-center mb-5">Start Quiz</h2>
                            </div>

                            <!-- Q -->
                            <div class="container">

                                @foreach($quiz->questions->slice(3,3) as $key => $question)
                                <!-- Q -->
                                <div class="question">
                                    <h4>{{$loop->iteration . '- ' . $question->question}}?</h4>
                                    @foreach($question->options as $option)
                                    <label for="Q1_1" class="answer">
                                        <input type="radio" id="Q1_1" name="Q1">
                                        <label for="Q1_1">{{$option->option}}</label>
                                    </label>

                                    @endforeach
                                </div>
                                <!-- Q -->
                                    @endforeach


                            </div>
                            <!-- Q -->

                            <div class="bottom-vector">
                                <img src="{{asset('quiz/images/bq1.png')}}" alt="">
                            </div>
                            <div class="quiz-progress-area">
                                <div class="progress">
                                    <div class="progress-bar position-relative" style="width: 10%">
                                        <span>10%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="actions clearfix">
                                <ul>
                                    <li class="d-none"><span class="js-btn-next" title="PREV">Previous Question</span></li>
                                    <li><span class="js-btn-next" title="NEXT">Next Question</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                        <?php $i++; ?>
                    @empty
                        <div class="alert alert-danger">
                            {{__('home.There is no data')}}.
                        </div>
                    @endforelse--}}{{--


                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

<script src="{{asset('quiz/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('quiz/js/bootstrap.min.js')}}"></script>
<script src="{{asset('quiz/js/form-step.js')}}"></script>
<script src="{{asset('quiz/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('quiz/js/quiz.js')}}"></script>
<!-- <script src="quiz/js/switch.js"></script> -->
</body>
</html>
--}}
