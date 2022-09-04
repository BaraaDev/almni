<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{__('question.exercises')}}</title>
    <!-- FontAwesome-cdn include -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Google fonts include -->
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700;800;900&amp;family=Poppins:wght@700;800&amp;display=swap"
        rel="stylesheet">
    <!-- Bootstrap-css include -->
    <link rel="stylesheet" href="{{asset('quiz/css/bootstrap.min.css')}}">
    <!-- Animate-css include -->
    <link rel="stylesheet" href="{{asset('quiz/css/animate.min.css')}}">
    <!-- Main-StyleSheet include -->
    <link rel="stylesheet" href="{{asset('quiz/css/style.css')}}">
</head>

<body>
<div class="wrapper overflow-hidden">
    <div id="overlay"></div>
    <!-- Top content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="logo_area pt-5 ps-5">
                    <a href="{{route('home')}}">
                        <img src="{{asset('quiz//images/logo/logo.png')}}" alt="image-not-found">
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="count_box d-flex float-end pt-5 pe-5">
                    <img src="{{asset('quiz//images/watch.png')}}" alt="image-not-found">
                    <div class="count_clock countdown_timer d-flex align-items-center pe-5 me-3" data-countdown="2022/9/2">
                    </div>
                    <!-- <div id="countdown"></div> -->
                    <!-- Step Progress bar -->
                    <div class="count_progress clip-1">
                        <span class="progress-left">
                            <span class="progress_bar"></span>
                        </span>
                        <span class="progress-right">
                            <span class="progress_bar"></span>
                        </span>
                        <div class="progress-value">
                            <div id="value">100%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container p-5 ">


        {!! Form::open(['method' => 'POST',
            'route' => ['exercises.store',$exercise->id],
            'class' => 'multisteps_form bg-white position-relative overflow-hidden'])
        !!}

            <?php $i = 1; ?>
            @forelse($exercise->questions as $question)

            <!------------------------- Step-{{$loop->iteration}} ----------------------------->
            <div class="multisteps_form_panel step">
                <div class="question_title text-center text-uppercase">
                    <h1 class="animate__animated animate__fadeInRight animate_25ms">{{$question->question}}?</h1>
                </div>
                <div class="question_number text-center text-uppercase text-white">
                    <span class="rounded-pill">Question {{$loop->iteration}} to {{$exercise->questions->count()}}</span>
                </div>
                <div class="row pt-5 mt-4 form_items">
                    <input type="hidden" name="questions[{{$i}}]" value="{{ $question->id }}">
                    @foreach($question->options as $option)
                    <div class="col-6">
                        <ul class="list-unstyled p-0">
                            <li class="step_{{$question->id}} animate__animated animate__fadeInRight animate_50ms">
                                <input id="opt_{{$option->id}}" required type="radio" value="{{$option->id}}" name="answers[{{ $option->id }}]">
                                <label for="opt_{{$option->id}}">{{$option->option}}</label>
                            </li>
                        </ul>
                    </div>
                    @endforeach
                </div>
            </div>
            <?php $i++; ?>
            @empty
                <div class="alert alert-danger">
                    {{__('home.There is no data')}}.
                </div>
            @endforelse
            <!---------- Form Button ---------->
            <div class="form_btn">
                <button type="button" class="prev_btn position-absolute text-uppercase border-0" id="prevBtn" onclick="nextPrev(-1)"> <span><i class="fas fa-arrow-left"></i></span> Back</button>
                <button type="button" class="next_btn rounded-pill position-absolute text-uppercase text-white" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
            {!! Form::close() !!}

    </div>
</div>
<!-- jQuery-js include -->
<script src="{{asset('quiz/js/jquery-3.6.0.min.js')}}"></script>
<!-- Bootstrap-js include -->
<script src="{{asset('quiz/js/bootstrap.min.js')}}"></script>
<!-- jQuery-counter-up-js include -->
<script src="{{asset('quiz/js/countdown.js')}}"></script>
<!-- jQuery-validate-js include -->
<script src="{{asset('quiz/js/jquery.validate.min.js')}}"></script>
<!-- Custom-js include -->
<script>

    $(function(){
        "use strict";
        // ========== Form-select-option ========== //
        @foreach($exercise->questions as $question)
        $(".step_{{$question->id}}").on('click', function(){
            $(".step_{{$question->id}}").removeClass("active");
            $(this).addClass("active");
        });
        @endforeach


        // =====================Progress Increment====================
        $(document).on( 'click', '#nextBtn', function(){
            var $progressbar = $('.count_progress');
            for (var i = 1; i<4; i++) {
                var className = 'clip-'+i;
                if ($progressbar.hasClass(className)) {
                    $progressbar.removeClass(className).addClass('clip-'+(i+1));
                    break;
                }
            }
        });
        // =====================Progress Decrement====================
        $(document).on( 'click', '#prevBtn', function(){
            var $progressbar = $('.count_progress');
            for (var i = 1; i<4; i++) {
                var className = 'clip-'+i;
                if ($progressbar.hasClass(className)) {
                    $progressbar.removeClass(className).addClass('clip-'+(i+1));
                    break;
                }
            }
        });

        // ================== CountDown function ================
        $('.countdown_timer').each(function(){
            $('[data-countdown]').each(function() {
                var $this = $(this), finalDate = $(this).data('countdown');
                $this.countdown(finalDate, function(event) {
                    var $this = $(this).html(event.strftime(''

                        + '<span class="pe-5 counter">%M:%S</span>'));
                });
            });
        });

    });

    // Progress bar counter ======================
    function animateValue(obj, start, end, duration) {
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            obj.innerHTML = Math.floor(progress * (end - start) + start);
            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        };
        window.requestAnimationFrame(step);
    }

    const obj = document.getElementById("value");
    animateValue(obj, 100, 0, 90000);



    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form ...
        var x = document.getElementsByClassName("multisteps_form_panel");
        x[n].style.display = "block";
        // ... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
            document.getElementById("nextBtn").type = "submit";

        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        // ... and run a function that displays the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("multisteps_form_panel");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form... :
        if (currentTab >= x.length) {
            //...the form gets submitted:
            document.getElementById("wizard").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("multisteps_form_panel");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false:
                valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class to the current step:
        x[n].className += " active";
    }


</script>
</body>

</html>
