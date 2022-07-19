<div class="row">
    <div class="mb-3 col-12">
        <label class="form-label">{{__('city.city')}} <span style="color: red">*</span></label>
        <input type="text" name="city" class="form-control input-default @error('city') is-invalid @enderror"
               placeholder="{{__('city.Enter the city name')}}"
               value="{{Request::old('city') ? Request::old('city') : $model->city}}" required>
        @error('city') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>
</div>

