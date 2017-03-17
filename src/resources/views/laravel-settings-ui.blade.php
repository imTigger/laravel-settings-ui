@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="main-container-padding">
        {!! form_start($form) !!}

        {!! form_rest($form) !!}

        <div class="form-footer">
            <button type="submit" class="btn-success btn">{{ trans('laravel-settings-ui.button.save') }}</button>
        </div>

        {!! form_end($form) !!}
    </div>
@endsection