@extends('vendor.installer.layouts.master')

@section('title', trans('messages.config.title'))
@section('container')
    <script>
        function Submit(){
            document.getElementById('config').submit()
        }
    </script>
    @if (session('message'))
        <p class="alert">{{ session('message')['message'] }}</p>
        <div class="buttons">
            <a class="button" href="javascript:history.go(-1)">
                {{ trans('messages.back') }}
            </a>
        </div>
    @else
        <form method="post" action="{{ route('FenkeInstaller::config') }}" id="config">
            <div class="form-group">
                <label for="exampleInputEmail1">School Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="School Name">
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="exampleInputPassword1">School Addr</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="School Addr">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">School Type</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="School Type">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">School Contact</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Tel No.">
            </div>

            <div class="buttons">
                <a class="button" href="javascript:history.go(-1)">
                    {{ trans('messages.back') }}
                </a>
                <a href="javascript:Submit()" class="button">{{ trans('messages.next') }}</a>
            </div>
        </form>
    @endif

@stop