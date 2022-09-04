@extends('layouts.web.instructors.app')
@inject('question','App\Models\Question')

@section('title') {{__('question.add new options')}} @endsection
@section('content')
    <div class="dashboard -home-9 js-dashboard-home-9">
        <div class="dashboard__sidebar scroll-bar-1">
            @include('layouts.web.instructors.sidebar')
        </div>

        <div class="dashboard__main">
            <div class="dashboard__content bg-light-4">
                <div class="row pb-50 mb-10">
                    <div class="col-auto">
                        <h1 class="text-30 lh-12 fw-700">{{__('question.add new questions')}}</h1>
                        <div class="mt-10">{{__('question.check question data')}}</div>
                    </div>
                </div>
                @include('layouts.web.alert.success')
                @include('layouts.web.alert.validation-errors')

                <div class="row y-gap-60">
                    <div class="col-12">
                        <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
                            <div class="d-flex items-center py-20 px-30 border-bottom-light">
                                <h2 class="text-17 lh-1 fw-500">{{__('question.question data')}}</h2>
                            </div>

                            <div class="py-30 px-30">
                                <form class="contact-form row y-gap-30" action="{{route('questions.store')}}" method="post">
                                    @csrf
                                    <div class="col-12">
                                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('question.question')}} <span style="color: red">*</span></label>
                                        <input type="text" name="question" required autocomplete="off" class="form-control @error('question') is-invalid @enderror"
                                               placeholder="{{__('question.enter question')}}"
                                               value="{{Request::old('question') ? Request::old('question') : $question->question}}">
                                        @error('question')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('home.description')}} <span style="color: red">*</span></label>
                                        <textarea name="description" required class="form-control @error('description') is-invalid @enderror" placeholder="{{__('question.enter description question')}}" rows="7">{{Request::old('description') ? Request::old('description') : $question->description}}</textarea>
                                        @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('question.formats')}} <span style="color: red">*</span></label>

                                        @inject('format','App\Models\Format')
                                        {!! Form::select('format_id',$format->where('instructor_id',auth()->user()->id)->pluck('title','id'),Request::old('format_id') ? Request::old('format_id') :  $question->format_id ,[
                                            'class' => 'default-select form-control'. ( $errors->has('format_id') ? ' is-invalid' : '' ),
                                            'placeholder' => __('home.please choose'),
                                            'required'
                                        ]) !!}
                                        @error('format_id') <div class="invalid-feedback">{{$message}}</div> @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('question.Option 1')}} <span style="color: red">*</span></label>
                                        <input type="text" name="option1" required autocomplete="off" class="form-control @error('option1') is-invalid @enderror"
                                               placeholder="{{__('question.enter option 1')}}"
                                               value="{{Request::old('option1') ? Request::old('option1') : $question->option1}}">
                                        @error('option1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('question.Option 2')}} <span style="color: red">*</span></label>
                                        <input type="text" name="option2" required autocomplete="off" class="form-control @error('option2') is-invalid @enderror"
                                               placeholder="{{__('question.enter option 2')}}"
                                               value="{{Request::old('option2') ? Request::old('option2') : $question->option2}}">
                                        @error('option2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('question.Option 3')}} <span style="color: red">*</span></label>
                                        <input type="text" name="option3" required autocomplete="off" class="form-control @error('option3') is-invalid @enderror"
                                               placeholder="{{__('question.enter option 3')}}"
                                               value="{{Request::old('option3') ? Request::old('option3') : $question->option3}}">
                                        @error('option3')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('question.Option 4')}} <span style="color: red">*</span></label>
                                        <input type="text" name="option4" required autocomplete="off" class="form-control @error('option4') is-invalid @enderror"
                                               placeholder="{{__('question.enter option 4')}}"
                                               value="{{Request::old('option4') ? Request::old('option4') : $question->option4}}">
                                        @error('option4')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('question.correct')}} <span style="color: red">*</span></label>
                                        {!! Form::select('correct',$correct_options,Request::old('correct') ? Request::old('correct') :  $question->correct ,[
                                            'class' => 'default-select form-control'. ( $errors->has('correct') ? ' is-invalid' : '' ),
                                            'placeholder' => __('home.please choose'),
                                            'required'
                                        ]) !!}
                                        @error('correct') <div class="invalid-feedback">{{$message}}</div> @enderror
                                    </div>

                                    <div class="col-12">
                                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('home.answer explanation')}} </label>
                                        <textarea name="answer_explanation" class="form-control @error('answer_explanation') is-invalid @enderror" placeholder="{{__('question.enter answer explanation question')}}" rows="7">{{Request::old('answer_explanation') ? Request::old('answer_explanation') : $question->answer_explanation}}</textarea>
                                        @error('answer_explanation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="row y-gap-20 justify-between pt-15">
                                        <div class="col-auto">
                                            <button type="submit" class="button -md -purple-1 text-white">{{__('home.create')}}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.web.instructors.footer')
        </div>
    </div>
@endsection
