<div class="col-12">
    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('question.format')}} <span style="color: red">*</span></label>
    <input type="text" name="title" autocomplete="off" class="form-control @error('title') is-invalid @enderror"
           placeholder="{{__('question.enter format title')}}"
           value="{{Request::old('title') ? Request::old('title') : $format->title}}" required>
    @error('question')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>


<div class="col-md-6">
    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('question.question type')}} <span style="color: red">*</span></label>

    <select class="default-select form-control" name="type" required>
        <option value="final_exam" {{$format->type == 'final_exam' ? 'selected' : ''}}>{{__('question.final exam')}}</option>
        <option value="exercise" {{$format->type == 'exercise' ? 'selected' : ''}}>{{__('question.exercise')}}</option>
        <option value="test" {{$format->type == 'test' ? 'selected' : ''}}>{{__('question.test')}}</option>
    </select>
</div>


<div class="col-md-6">
    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('group.groups')}} <span style="color: red">*</span></label>

    @inject('group','App\Models\Group')
    {!! Form::select('group_id',$group->status('active')->pluck('name','id'),Request::old('group_id') ? Request::old('group_id') :  $format->group_id ,[
        'class' => 'default-select form-control'. ( $errors->has('group_id') ? ' is-invalid' : '' ),
        'placeholder' => __('home.please choose'),
        'required'
    ]) !!}
    @error('group_id') <div class="invalid-feedback">{{$message}}</div> @enderror
</div>

<div class="col-md-6">
    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('course.courses')}} <span style="color: red">*</span></label>

    @inject('course','App\Models\Course')
    {!! Form::select('course_id',$course->status('active')->pluck('title','id'),Request::old('course_id') ? Request::old('course_id') :  $format->course_id ,[
        'class' => 'default-select form-control'. ( $errors->has('course_id') ? ' is-invalid' : '' ),
        'placeholder' => __('home.please choose'),
        'required'
    ]) !!}
    @error('course_id') <div class="invalid-feedback">{{$message}}</div> @enderror
</div>


<div class="col-md-6">
    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('lecture.lectures')}} <span style="color: red">*</span></label>

    @inject('lecture','App\Models\Lecture')
    {!! Form::select('lecture_id',$lecture->status('active')->pluck('name','id'),Request::old('lecture_id') ? Request::old('lecture_id') :  $format->lecture_id ,[
        'class' => 'default-select form-control'. ( $errors->has('lecture_id') ? ' is-invalid' : '' ),
        'placeholder' => __('home.please choose')
    ]) !!}
    @error('lecture_id') <div class="invalid-feedback">{{$message}}</div> @enderror
</div>
