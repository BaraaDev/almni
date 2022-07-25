<div class="row">
    <div class="mb-3 col-12">
        <label class="form-label">{{__('home.name')}} <span style="color: red">*</span></label>
        <input type="text" name="name" class="form-control input-default @error('name') is-invalid @enderror" placeholder="{{__('lecture.Enter the lecture name')}}" value="{{Request::old('name') ? Request::old('name') : $model->name}}" required>
        @error('name') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>


    <div class="mb-3 col-12">
        <label class="form-label">{{__('home.description')}} <span style="color: red">*</span></label>
        <textarea name="description" class="form-control input-default @error('description') is-invalid @enderror" placeholder="{{__('lecture.Enter the lecture description')}}" required>{{Request::old('description') ? Request::old('description') : $model->description}}</textarea>
        @error('description') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>


    <div class="mb-3 col-6">
        <label for="file">{{__('home.add image')}}</label>
        <div class="form-file">
            <input id="file" type="file" name="image" class="form-file-input form-control">
        </div>
    </div>

    <div class="mb-3 col-6">
        <label for="file">{{__('home.add PDF')}}</label>
        <div class="form-file">
            <input id="file" type="file" name="pdf" class="form-file-input form-control">
        </div>
    </div>

    <div class="mb-3 col-6">
        <label for="file">{{__('home.add video')}}</label>
        <div class="form-file">
            <input id="file" type="file" name="video" class="form-file-input form-control">
        </div>
    </div>

    <div class="mb-3 col-6">
        <label class="form-label">{{__('group.group')}}</label>
        @inject('group','App\Models\Group')
        {!! Form::select('group_id',$group->pluck('name','id'),Request::old('group_id') ? Request::old('group_id') :  $model->group_id ,[
            'class' => 'default-select form-control'. ( $errors->has('group_id') ? ' is-invalid' : '' ),
        ]) !!}
        @error('group_id') <div class="invalid-feedback">{{$message}}</div> @enderror
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
        <label class="form-label">{{__('instructor.instructor')}}</label>
        @inject('instructor','App\Models\User')
        {!! Form::select('instructor_id',$instructor->type('instructor')->pluck('name','id'),Request::old('instructor_id') ? Request::old('instructor_id') :  $model->instructor_id ,[
            'class' => 'default-select form-control'. ( $errors->has('instructor_id') ? ' is-invalid' : '' ),
        ]) !!}
        @error('instructor_id') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>

    <div class="mb-3 col-6">
        <label class="form-label">{{__('home.status')}} <span style="color: red">*</span></label>
        <select name="status"  class="default-select form-control @error('status') is-invalid @enderror" required>
            <option disabled>{{__('home.please choose')}}</option>
            <option value="active" {{ isset($model) && $model->status == 'active' ? 'selected'  : '' }}>{{__('home.active')}}</option>
            <option value="stopped" {{ isset($model) && $model->status == 'stopped' ? 'selected'  : '' }}>{{__('home.stopped')}}</option>
        </select>
        @error('status') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>
</div>

