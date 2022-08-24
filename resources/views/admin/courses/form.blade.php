<div class="row">
    <div class="mb-3 col-6">
        <label class="form-label">{{__('home.title')}} <span style="color: red">*</span></label>
        <input type="text" name="title" class="form-control input-default @error('title') is-invalid @enderror" placeholder="{{__('course.Enter the course title')}}" value="{{Request::old('title') ? Request::old('title') : $model->title}}" required>
        @error('title') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>

    <div class="mb-3 col-6">
        <label class="form-label">{{__('course.Course Date')}} <span style="color: red">*</span></label>
        <input type="date" name="course_date" class="form-control @error('course_date') is-invalid @enderror" placeholder="{{__('course.Enter course date')}}" value="{{Request::old('course_date') ? Request::old('course_date') : $model->course_date}}" required>
        @error('course_date') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>

    <div class="mb-3 col-12">
        <label class="form-label">{{__('home.short description')}}</label>
        <textarea name="short_description" class="form-control input-default @error('short_description') is-invalid @enderror" placeholder="{{__('course.Enter the course short description')}}">{{Request::old('short_description') ? Request::old('short_description') : $model->short_description}}</textarea>
        @error('short_description') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>

    <div class="mb-3 col-12">
        <label class="form-label">{{__('home.description')}} <span style="color: red">*</span></label>
        <textarea name="description" class="form-control input-default @error('description') is-invalid @enderror" placeholder="{{__('course.Enter the course description')}}" required>{{Request::old('description') ? Request::old('description') : $model->description}}</textarea>
        @error('description') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>

    <div class="mb-3 col-lg-3 col-6">
        <label for="mdate">{{__('home.price')}}</label>
        <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" placeholder="{{__('home.Enter price')}}" value="{{Request::old('price') ? Request::old('price') : $model->price}}">
        @error('price') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>

    <div class="mb-3 col-lg-3 col-6">
        <label for="mdate">{{__('home.discount')}}</label>
        <input type="text" name="discount" class="form-control @error('discount') is-invalid @enderror" placeholder="{{__('home.Enter discount')}}" value="{{Request::old('discount') ? Request::old('discount') : $model->discount}}">
        @error('discount') <div class="invalid-feedback">{{$message}}</div> @enderror
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
        <label for="file">{{__('home.add image')}} <span style="color: red">*</span></label>
        <div class="form-file">
            <input id="file" type="file" name="image" class="form-file-input form-control">
        </div>
    </div>

    <div class="mb-3 col-6">
        <label for="file">{{__('home.add video')}}</label>
        <div class="form-file">
            <input id="file" type="file" name="video" class="form-file-input form-control">
        </div>
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
        <label class="form-label">{{__('category.category')}}</label>
        @inject('category','App\Models\Category')
        {!! Form::select('category_id',$category->pluck('name','id'),Request::old('category_id') ? Request::old('category_id') :  $model->category_id ,[
            'class' => 'default-select form-control'. ( $errors->has('category_id') ? ' is-invalid' : '' ),
        ]) !!}
        @error('category_id') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>

    <div class="mb-3 col-6">
        <label class="form-label">{{__('instructor.instructors')}}</label>
        @inject('instructor','App\Models\User')
        {!! Form::select('instructor_id[]',$instructor->status('active')->type('instructor')->pluck('name','id'),$model->courseInstructor->pluck('id')->all(),[
            'class' => 'js-example-programmatic-multi default-select form-control',
            'multiple'
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

