
    <div class="mb-3 col-6">
        <label class="form-label">{{__('home.name')}} <span style="color: red">*</span></label>
        <input type="text" name="name" class="form-control input-default @error('name') is-invalid @enderror" placeholder="{{__('user.Enter the full name')}}" value="{{Request::old('name') ? Request::old('name') : $model->name}}" required>
        @error('name') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>

    <div class="mb-3 col-6">
        <label class="form-label">{{__('user.user name')}} <span style="color: red">*</span></label>
        <input type="text" name="username" class="form-control input-default @error('username') is-invalid @enderror" placeholder="{{__('user.Enter the username')}}" value="{{Request::old('username') ? Request::old('username') : $model->username}}" required>
        @error('username') <div class="invalid-feedback">{{$message}}</div> @enderror
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
        <label class="form-label">{{__('user.job')}}</label>
        <input type="text" name="job" class="form-control input-default @error('job') is-invalid @enderror" placeholder="{{__('home.Enter your job')}}" value="{{Request::old('job') ? Request::old('job') : $model->job}}">
        @error('job') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>

    <div class="mb-3 col-6">
        <label class="form-label">{{__('home.date')}}</label>
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
        <label class="form-label">{{__('home.whatsApp')}} <span style="color: red">*</span></label>
        <input type="tel" name="whatsApp" class="form-control input-default" placeholder="{{__('home.number whatsApp')}}" value="{{Request::old('whatsApp') ? Request::old('whatsApp') : $model->whatsApp}}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">{{__('user.bio')}}</label>
        <textarea name="bio" class="form-control @error('bio') is-invalid @enderror" rows="2" id="comment" placeholder="{{__('user.bio')}}">{{Request::old('bio') ? Request::old('bio') : $model->bio}}</textarea>
        @error('bio') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>

    <div class="mb-3 col-12">
        <label for="file">{{__('home.add image')}} <span style="color: red">*</span></label>
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
        ]) !!}
        @error('city_id') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>

    <div class="mb-3  col-md-4 col-6">
        <label class="form-label">{{__('home.facebook')}}</label>
        <input type="text" name="facebook" class="form-control input-default" placeholder="{{__('home.username facebook')}}" value="{{Request::old('facebook') ? Request::old('facebook') : $model->facebook}}">
    </div>

    <div class="mb-3  col-md-4 col-6">
        <label class="form-label">{{__('home.twitter')}}</label>
        <input type="text" name="twitter" class="form-control input-default" placeholder="{{__('home.username twitter')}}" value="{{Request::old('twitter') ? Request::old('twitter') : $model->twitter}}">
    </div>

    <div class="mb-3 col-md-4 col-6">
        <label class="form-label">{{__('home.linkedin')}}</label>
        <input type="text" name="linkedin" class="form-control input-default" placeholder="{{__('home.username linkedin')}}" value="{{Request::old('linkedin') ? Request::old('linkedin') : $model->linkedin}}">
    </div>

    <div class="mb-3 col-md-4 col-6">
        <label class="form-label">{{__('home.instagram')}}</label>
        <input type="text" name="instagram" class="form-control input-default" placeholder="{{__('home.username instagram')}}" value="{{Request::old('instagram') ? Request::old('instagram') : $model->instagram}}">
    </div>

    <div class="mb-3 col-md-4 col-6">
        <label class="form-label">{{__('home.instagram')}}</label>
        <input type="text" name="AskFM" class="form-control input-default" placeholder="{{__('home.username AskFM')}}" value="{{Request::old('AskFM') ? Request::old('AskFM') : $model->AskFM}}">
    </div>

    <div class="mb-3 col-md-4 col-6">
        <label class="form-label">{{__('home.YouTube')}}</label>
        <input type="text" name="YouTube" class="form-control input-default" placeholder="{{__('home.username YouTube')}}" value="{{Request::old('YouTube') ? Request::old('YouTube') : $model->YouTube}}">
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


