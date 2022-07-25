<div class="mb-3 col-6">
    <label class="form-label">{{__('home.name')}} <span style="color: red">*</span></label>
    <input type="text" name="name" class="form-control input-default @error('name') is-invalid @enderror" placeholder="{{__('role.Enter name')}}" value="{{Request::old('name') ? Request::old('name') : $role->name}}" required>
    @error('name') <div class="invalid-feedback">{{$message}}</div> @enderror
</div>
