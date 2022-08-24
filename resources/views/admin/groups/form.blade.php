<div class="row">
    <div class="mb-3 col-12">
        <label class="form-label">{{__('group.group')}} <span style="color: red">*</span></label>
        <input type="text" name="name" class="form-control input-default @error('name') is-invalid @enderror" placeholder="{{__('group.Enter the group name')}}" value="{{Request::old('name') ? Request::old('name') : $model->name}}" required>
        @error('name') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">{{__('home.description')}}</label>
        <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="2" id="comment" placeholder="{{__('home.description')}}">{{Request::old('description') ? Request::old('description') : $model->description}}</textarea>
        @error('description') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>

    <div class="mb-3 col-12">
        <label class="form-label">{{__('group.start date')}} <span style="color: red">*</span></label>
        <input type="datetime-local" name="start_date" class="form-control input-default @error('start_date') is-invalid @enderror" value="{{Request::old('start_date') ? Request::old('start_date') : $model->start_date}}" required>
        @error('start_date') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>

    <div class="mb-3 col-6">
        <label class="form-label">{{__('user.users waiting')}}</label>
        {!! Form::select('student_id[]',$students,$model->students->pluck('id'),[
            'class' => 'js-example-programmatic-multi default-select form-control',
            'multiple'
        ]) !!}
        @error('student_id') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>

    <div class="mb-3 col-6">
        <label class="form-label">{{__('instructor.instructors')}}</label>
        {!! Form::select('user_id[]',$instructors,$model->instructor->pluck('id'),[
            'class' => 'js-example-programmatic-multi default-select form-control',
            'multiple'
        ]) !!}
        @error('user_id') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>


    <div class="mb-3 col-6">
        <label class="form-label">{{__('level.level')}}</label>
        @inject('level','App\Models\Level')
        {!! Form::select('level_id',$level->pluck('level','id'),Request::old('level_id') ? Request::old('level_id') :  $model->level_id ,[
            'class' => 'default-select form-control'. ( $errors->has('level_id') ? ' is-invalid' : '' ),
        ]) !!}
        @error('level_id') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>

    <div class="mb-3 col-6">
        <label class="form-label">{{__('course.course')}}</label>
        @inject('course','App\Models\Course')
        {!! Form::select('course_id',$course->pluck('title','id'),Request::old('course_id') ? Request::old('course_id') :  $model->course_id ,[
            'class' => 'default-select form-control'. ( $errors->has('course_id') ? ' is-invalid' : '' ),
        ]) !!}
        @error('course_id') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>

    <div class="mb-3 col-6">
        <label class="form-label">{{__('home.months')}}</label>
        {!! Form::selectMonth('months',Request::old('months') ? Request::old('months') :  $model->months ,[
            'class' => 'default-select form-control'. ( $errors->has('months') ? ' is-invalid' : '' ),
        ]) !!}
        @error('months') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>

    <div class="mb-3 col-6">
        <label class="form-label">{{__('home.days')}}</label>
        {!! Form::select('days[]',[
            'Saturday'  => __('home.Saturday'),
            'Sunday'    => __('home.Sunday'),
            'Monday'    => __('home.Monday'),
            'Tuesday'   => __('home.Tuesday'),
            'Wednesday' => __('home.Wednesday'),
            'Thursday'  => __('home.Thursday'),
            'Friday'    => __('home.Friday')
            ]
        ,Request::old('days') ? Request::old('days') :  $model->days,[
        'class'       => 'default-select form-control js-example-programmatic-multi'. ( $errors->has('days') ? ' is-invalid' : '' ),
        'multiple'    => 'multiple',
        ]) !!}
        @error('days') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>

    <div class="mb-3 col-6">
        <label class="form-label">{{__('home.time start')}} <span style="color: red">*</span></label>
        <input type="time" name="time_start" class="form-control input-default @error('time_start') is-invalid @enderror"
               value="{{Request::old('time_start') ? Request::old('time_start') : $model->time_start}}" required>
        @error('time_start') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>

    <div class="mb-3 col-6">
        <label class="form-label">{{__('home.time end')}} <span style="color: red">*</span></label>
        <input type="time" name="time_end" class="form-control input-default @error('time_end') is-invalid @enderror"
               value="{{Request::old('time_end') ? Request::old('time_end') : $model->time_end}}" required>
        @error('time_end') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>

    <div class="mb-3 col-6">
        <label class="form-label">{{__('classrooms.classroom')}}</label>
        @inject('classroom','App\Models\Classroom')
        {!! Form::select('classroom_id',$classroom->status('active')->pluck('name','id'),Request::old('classroom_id') ? Request::old('classroom_id') :  $model->classroom_id ,[
            'class' => 'default-select form-control',
        ]) !!}
        @error('classroom_id') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>

    <div class="mb-3 col-6">
        <label class="form-label">{{__('home.status')}} <span style="color: red">*</span></label>
        <select name="status"  class="default-select form-control @error('status') is-invalid @enderror " required>
            <option disabled>{{__('home.please choose')}}</option>
            <option value="active" {{ isset($model) && $model->status == 'active' ? 'selected'  : '' }}>{{__('home.active')}}</option>
            <option value="stopped" {{ isset($model) && $model->status == 'stopped' ? 'selected'  : '' }}>{{__('home.stopped')}}</option>
        </select>
        @error('status') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>
</div>
