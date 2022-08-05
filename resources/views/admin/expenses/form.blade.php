<div class="row">
    <div class="mb-3 col-12">
        <label class="form-label">{{__('expenses.expense')}} <span style="color: red">*</span></label>
        <input type="text" name="title" class="form-control input-default @error('title') is-invalid @enderror"
               placeholder="{{__('expenses.Enter the expense title')}}"
               value="{{Request::old('title') ? Request::old('title') : $model->title}}" required>
        @error('title') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>

    <div class="mb-3 col-12">
        <label class="form-label">{{__('expenses.price')}} <span style="color: red">*</span></label>
        <input type="number" name="price" class="form-control input-default @error('price') is-invalid @enderror"
               placeholder="{{__('expenses.Enter the expense price')}}"
               value="{{Request::old('price') ? Request::old('price') : $model->price}}" required>
        @error('price') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>

    <div class="mb-3 col-12">
        <label class="form-label">{{__('expenses.count')}} <span style="color: red">*</span></label>
        <input type="number" name="count" class="form-control input-default @error('count') is-invalid @enderror"
               placeholder="{{__('expenses.Enter the expense count')}}"
               value="{{Request::old('count') ? Request::old('count') : $model->count}}" required>
        @error('count') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>


    <div class="mb-3 col-12">
        <label class="form-label">{{__('expenses.date')}} <span style="color: red">*</span></label>
        <input type="date" name="date" class="form-control input-default @error('date') is-invalid @enderror"
               placeholder="{{__('expenses.Enter the expense date')}}"
               value="{{Request::old('date') ? Request::old('date') : $model->date}}" required>
        @error('date') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>


    <div class="mb-3 col-6">
        <label class="form-label">{{__('user.users')}}</label>
        @inject('user','App\Models\User')
        {!! Form::select('user_id',$user->status('active')->type('admin')->pluck('name','id'),Request::old('user_id') ? Request::old('user_id') :  $model->user_id ,[
            'class' => 'default-select form-control'. ( $errors->has('user_id') ? ' is-invalid' : '' ),
        ]) !!}
        @error('user_id') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>
</div>

