<div class="row">
    <div class="mb-3 col-6">
        <label class="form-label">{{__('home.name')}} <span style="color: red">*</span></label>
        <input type="text" name="name" class="form-control input-default @error('name') is-invalid @enderror" placeholder="{{__('user.Enter the full name')}}" value="{{Request::old('name') ? Request::old('name') : $model->name}}" required>
        @error('name') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>

    <div class="mb-3 col-6">
        <label class="form-label">{{__('user.email address')}} <span style="color: red">*</span></label>
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{__('home.Enter your email')}}" value="{{Request::old('email') ? Request::old('email') : $model->email}}" required>
        @error('email') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>

    <div class="mb-3 col-6">
        <label class="form-label">{{__('user.password')}} <span style="color: red">*</span></label>

        <div class="input-group transparent-append">

            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="dlab-password" placeholder="{{__('user.Enter your password')}}" {{ isset($model) && $model->password  ? ''  : 'required' }} >
            <span class="input-group-text show-pass">
                <i class="fa fa-eye-slash"></i>
                <i class="fa fa-eye"></i>
            </span>
            @error('password') <div class="invalid-feedback">{{$message}}</div> @enderror
        </div>
    </div>


    <div class="mb-3 col-6">
        <label class="form-label">{{__('home.date of birthday')}}</label>
        <input type="date" name="age" class="form-control input-default @error('age') is-invalid @enderror" placeholder="{{__('user.Enter your age')}}" value="{{Request::old('age') ? Request::old('age') : $model->age}}">
        @error('age') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>

    <div class="mb-3 col-4">
        <label class="form-label">{{__('home.phone')}} <span style="color: red">*</span></label>
        <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror" id="validationNumber" placeholder="{{__('user.Enter your phone number')}}" value="{{Request::old('phone') ? Request::old('phone') : $model->phone}}" required>
        @error('phone') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>

    <div class="mb-3 col-4">
        <label class="form-label">{{__('home.another phone')}}</label>
        <input type="tel" name="phone2" class="form-control @error('phone2') is-invalid @enderror" id="validationNumber2" placeholder="{{__('user.Enter your phone number2')}}" value="{{Request::old('phone2') ? Request::old('phone2') : $model->phone2}}">
        @error('phone2') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>

    <div class="mb-3 col-md-4 col-6">
        <label class="form-label">{{__('home.whatsApp')}} </label>
        <input type="tel" name="whatsApp" class="form-control input-default @error('whatsApp') is-invalid @enderror" placeholder="{{__('home.number whatsApp')}}" value="{{Request::old('whatsApp') ? Request::old('whatsApp') : $model->whatsApp}}">
        @error('whatsApp') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">{{__('user.bio')}}</label>
        <textarea name="bio" class="form-control @error('bio') is-invalid @enderror" rows="2" id="comment" placeholder="{{__('user.bio')}}">{{Request::old('bio') ? Request::old('bio') : $model->bio}}</textarea>
        @error('bio') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">{{__('user.notes')}}</label>
        <textarea name="notes" class="form-control @error('notes') is-invalid @enderror" rows="2" id="comment" placeholder="{{__('user.notes')}}">{{Request::old('notes') ? Request::old('notes') : $model->notes}}</textarea>
        @error('notes') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>
    <div class="mb-3 col-12">
        <label for="file">{{__('home.add image')}}</label>
        <div class="form-file">
            <input id="file" type="file" name="photo" class="form-file-input form-control">
        </div>
    </div>

    <div class="mb-3 col-6">
        <label class="form-label">{{__('home.location')}}</label>
        <input type="text" name="location" class="form-control input-default @error('location') is-invalid @enderror" placeholder="{{__('home.Enter your location')}}" value="{{Request::old('location') ? Request::old('location') : $model->location}}">
        @error('location') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>

    <div class="mb-3 col-6">
        <label class="form-label">{{__('city.city')}}</label>
        @inject('city','App\Models\City')
        {!! Form::select('city_id',$city->pluck('city','id'),Request::old('city_id') ? Request::old('city_id') :  $model->city_id ,[
            'class' => 'default-select form-control'. ( $errors->has('city_id') ? ' is-invalid' : '' ),
            'placeholder' => __('home.please choose')
        ]) !!}
        @error('city_id') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>

    <div class="mb-3 col-6">
        <label class="form-label">{{__('level.level')}}</label>
        @inject('level','App\Models\Level')
        {!! Form::select('level_id',$level->pluck('level','id'),Request::old('level_id') ? Request::old('level_id') :  $model->level_id ,[
            'placeholder' => __('home.please choose'),
            'class' => 'default-select form-control'. ( $errors->has('level_id') ? ' is-invalid' : '' ),
        ]) !!}
        @error('level_id') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>

    <div class="mb-3 col-6">
        <label class="form-label">{{__('category.category')}}</label>
        @inject('category','App\Models\Category')
        {!! Form::select('category_id',$category->pluck('name','id'),Request::old('category_id') ? Request::old('category_id') :  $model->category_id ,[
            'class' => 'default-select form-control',
            'placeholder' => __('home.please choose')
        ]) !!}
        @error('category_id') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>

    <div class="mb-3 col-6">
        <label class="form-label">{{__('life_stage.life Stage')}}</label>
        @inject('life_stage','App\Models\LifeStage')
        {!! Form::select('life_stage_id',$life_stage->pluck('stage','id'),Request::old('life_stage_id') ? Request::old('life_stage_id') :  $model->life_stage_id ,[
            'placeholder' => __('home.please choose'),
            'class' => 'default-select form-control'. ( $errors->has('life_stage_id') ? ' is-invalid' : '' ),
        ]) !!}
        @error('life_stage_id') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>

    <div class="mb-3 col-6">
        <label class="form-label">{{__('group.groups')}}</label>
        @inject('group','App\Models\Group')
        {!! Form::select('group_id[]',$group->status('active')->pluck('name','id'),$model->groups->pluck('id')->all(),[
            'placeholder' => __('home.please choose'),
            'class' => 'js-example-programmatic-multi default-select form-control',
            'multiple'
        ]) !!}
        @error('group_id') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>

    <div class="mb-3 col-6">
        <label class="form-label">{{__('course.course')}}</label>
        @inject('course','App\Models\Course')
        {!! Form::select('course_id[]',$course->status('active')->pluck('title','id'),$model->courseStudent->pluck('id')->all(),[
            'placeholder' => __('home.please choose'),
            'class' => 'js-example-programmatic-multi default-select form-control',
            'multiple'
        ]) !!}
        @error('course_id') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>


    <div class="mb-3 col-6">
        <label class="form-label">{{__('classrooms.classroom')}}</label>
        @inject('classroom','App\Models\Classroom')
        {!! Form::select('classroom_id',$classroom->status('active')->pluck('name','id'),Request::old('classroom_id') ? Request::old('classroom_id') :  $model->classroom_id ,[
            'class' => 'default-select form-control',
            'placeholder' => __('home.please choose')
        ]) !!}
        @error('classroom_id') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>


    <div class="mb-3 col-6">
        <label class="form-label">{{__('home.gender')}} <span style="color: red">*</span></label>
        <select name="gender" class="default-select form-control @error('gender') is-invalid @enderror" required>
            <option>{{__('home.please choose')}}</option>
            <option value="male" {{ isset($model) && $model->gender == 'male' ? 'selected'  : '' }}>{{__('home.male')}}</option>
            <option value="female" {{ isset($model) && $model->gender == 'female' ? 'selected'  : '' }}>{{__('home.female')}}</option>
        </select>
        @error('gender') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>


    <div class="mb-3 col-6">
        <label class="form-label">{{__('home.status')}} <span style="color: red">*</span></label>
        <select name="status"  class="default-select form-control @error('status') is-invalid @enderror " required>
            <option>{{__('home.please choose')}}</option>
            <option value="stopped" {{ isset($model) && $model->status == 'stopped' ? 'selected'  : '' }}>{{__('home.stopped')}}</option>
            <option value="active" {{ isset($model) && $model->status == 'active' ? 'selected'  : '' }}>{{__('home.active')}}</option>
            <option value="waiting" {{ isset($model) && $model->status == 'waiting' ? 'selected'  : '' }}>{{__('home.waiting')}}</option>
        </select>
        @error('status') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>
</div>
