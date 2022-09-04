<div class="col-md-12">
    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('question.questions')}} <span style="color: red">*</span></label>

    @inject('question','App\Models\Question')
    {!! Form::select('question_id',$question->where('instructor_id',auth()->user()->id)->pluck('question','id'),Request::old('question_id') ? Request::old('question_id') :  $option->question_id ,[
        'class' => 'default-select form-control'. ( $errors->has('question_id') ? ' is-invalid' : '' ),
        'placeholder' => __('home.please choose'),
        'required'
    ]) !!}
    @error('question_id') <div class="invalid-feedback">{{$message}}</div> @enderror
</div>

<div class="col-md-12">
    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('question.option')}} <span style="color: red">*</span></label>
    <input type="text" name="option" required autocomplete="off" class="form-control @error('option') is-invalid @enderror"
           placeholder="{{__('question.enter option')}}"
           value="{{Request::old('option') ? Request::old('option') : $question->option}}">
    @error('option')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="col-md-6">
    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('question.correct')}}</label>
    {!! Form::hidden('correct', 0) !!}
    {!! Form::checkbox('correct', 1, 0, ['class' => 'form-control pl-3']) !!}
    @error('option')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
