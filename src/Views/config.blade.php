@extends('vendor.installer.layouts.master')

@section('title', trans('messages.config.title'))
@section('container')
    <script>
        function Submit(){
            document.getElementById('config').submit()
        }
    </script>
    @if (session('message'))
        <p class="alert">{{ session('message') }}</p>
    @endif
        <form method="post" action="{{ route('FenkeInstaller::config') }}" id="config">
            <div class="form-group">
                <label for="school_name">{{ trans('messages.config.school_name') }}</label>
                <input type="text" name="school_name" class="form-control" id="school_name" value="{{ old('school_name') }}" placeholder="{{ trans('messages.config.school_name') }}">
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="addr">{{ trans('messages.config.school_addr') }}</label>
                <input type="text" name="addr" class="form-control" id="addr" value="{{ old('addr') }}" placeholder="{{ trans('messages.config.school_addr') }}">
            </div>
            <div class="form-group">
                <label for="type">{{ trans('messages.config.school_type') }}</label>
                <select name="type" id="type" class="form-control">
                    <option value="primary" @if(old('type') == 'primary') selected @endif>{{ trans('messages.type.primary') }}</option>
                    <option value="junior" @if(old('type') == 'junior') selected @endif>{{ trans('messages.type.junior') }}</option>
                    <option value="senior" @if(old('type') == 'senior') selected @endif>{{ trans('messages.type.senior') }}</option>
                    <option value="college" @if(old('type') == 'college') selected @endif>{{ trans('messages.type.college') }}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="contact">{{ trans('messages.config.school_contact') }}</label>
                <input type="text" name="contact" class="form-control" value="{{ old('contact') }}" id="contact" placeholder="{{ trans('messages.config.school_contact') }}">
            </div>

            <div class="buttons">
                <a class="button" href="javascript:history.go(-1)">
                    {{ trans('messages.back') }}
                </a>
                <a href="javascript:Submit()" class="button">{{ trans('messages.next') }}</a>
            </div>
        </form>


@stop