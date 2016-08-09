@extends('vendor.installer.layouts.master')

@section('title', trans('messages.welcome.title'))
@section('container')
    <p class="paragraph" style="text-align: center">{{ trans('messages.welcome.message') }}</p>
    <div class="buttons">
        <a href="{{ route('FenkeInstaller::environment') }}" class="button">{{ trans('messages.next') }}</a>
    </div>
@stop