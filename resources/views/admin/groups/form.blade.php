<div class="row">
    <div class="mb-3 col-12">
        <label class="form-label">{{__('group.group')}} <span style="color: red">*</span></label>
        <input type="text" name="name" class="form-control input-default @error('name') is-invalid @enderror"
               placeholder="{{__('group.Enter the group name')}}"
               value="{{Request::old('name') ? Request::old('name') : $model->name}}" required>
        @error('name') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>


<div class="mb-3">
    <label class="form-label">{{__('home.description')}}</label>
    <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="2" id="comment" placeholder="{{__('home.description')}}">{{Request::old('description') ? Request::old('description') : $model->description}}</textarea>
    @error('description') <div class="invalid-feedback">{{$message}}</div> @enderror
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
    <label class="form-label">{{__('home.status')}} <span style="color: red">*</span></label>
    <select name="status"  class="default-select form-control @error('status') is-invalid @enderror " required>
        <option disabled>{{__('home.please choose')}}</option>
        <option value="active" {{ isset($model) && $model->status == 'active' ? 'selected'  : '' }}>{{__('home.active')}}</option>
        <option value="stopped" {{ isset($model) && $model->status == 'stopped' ? 'selected'  : '' }}>{{__('home.stopped')}}</option>
    </select>
    @error('status') <div class="invalid-feedback">{{$message}}</div> @enderror
</div>
</div>
