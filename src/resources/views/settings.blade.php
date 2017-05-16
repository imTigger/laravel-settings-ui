@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

{!! form_start($form) !!}

{!! form_rest($form) !!}

<div class="form-footer">
    <button type="submit" class="btn-success btn">{{ trans('settings.button.save') }}</button>
</div>

{!! form_end($form) !!}