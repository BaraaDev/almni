<div class="row">
    <div class="mb-3 col-12">
        <label class="form-label">{{__('home.stages')}} <span style="color: red">*</span></label>
        <input type="text" name="stage" class="form-control input-default @error('stage') is-invalid @enderror"
               placeholder="{{__('life_stage.Enter the life Stage name')}}"
               value="{{Request::old('stage') ? Request::old('stage') : $model->stage}}" required>
        @error('stage') <div class="invalid-feedback">{{$message}}</div> @enderror
    </div>


    <div class="mb-3 col-12">
        <label class="form-label">{{__('home.description')}} <span style="color: red">*</span></label>
        <textarea name="description" class="form-control input-default @error('description') is-invalid @enderror" placeholder="{{__('life_stage.Enter the life stages description')}}" required>{{Request::old('description') ? Request::old('description') : $model->description}}</textarea>
        @error('description') <div class="invalid-feedback">{{$message}}</div> @enderror
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
