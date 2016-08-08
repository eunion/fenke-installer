@extends('vendor.installer.layouts.master')

@section('title', trans('messages.welcome.title'))
@section('container')
    @if ($message['status'] == 'success')
        <p class="alert danger">{{ $message['message'] }}</p>
        <div class="buttons">
            <a class="button" href="javascript:history.go(-1)">
                {{ trans('messages.back') }}
            </a>
            <a href="{{ route('LaravelInstaller::config') }}" class="button">{{ trans('messages.next') }}</a>
        </div>
    @else
        <p class="alert danger">{{ $message['message'] }}</p>
        <div class="buttons">
            <a class="button" href="javascript:history.go(-1)">
                {{ trans('messages.back') }}
            </a>
        </div>
    @endif

@stop