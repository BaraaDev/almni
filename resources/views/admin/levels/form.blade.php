<div class="row">
    <div class="mb-3 col-12">
        <label class="form-label">{{__('level.level')}} <span style="color: red">*</span></label>
        <input type="text" name="level" class="form-control input-default @error('level') is-invalid @enderror"
               placeholder="{{__('level.Enter the level name')}}"
               value="{{Request::old('level') ? Request::old('level') : $model->level}}" required>
        @error('level') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>
</div>

