<div class="row">
    <div class="mb-3 col-12">
        <label class="form-label">{{__('category.category')}} <span style="color: red">*</span></label>
        <input type="text" name="name" class="form-control input-default @error('name') is-invalid @enderror"
               placeholder="{{__('category.Enter the category name')}}"
               value="{{Request::old('name') ? Request::old('name') : $model->name}}" required>
        @error('name') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>

    <div class="mb-3 col-12">
        <label class="form-label">{{__('home.icon')}} <span style="color: red">*</span></label>
        <input type="text" name="icon" class="form-control input-default @error('icon') is-invalid @enderror"
               placeholder="{{__('home.Enter icon')}}"
               value="{{Request::old('icon') ? Request::old('icon') : $model->icon}}" required>
        @error('icon') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>


<div class="mb-3 col-6">
    <label class="form-label">{{__('subject.subject')}}</label>
    @inject('subject','App\Models\Subject')
    {!! Form::select('subject_id',$subject->pluck('name','id'),Request::old('subject_id') ? Request::old('subject_id') :  $model->subject_id ,[
        'class' => 'default-select form-control'. ( $errors->has('subject_id') ? ' is-invalid' : '' ),
    ]) !!}
    @error('subject_id') <div class="invalid-feedback">{{$message}}</div> @enderror
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
