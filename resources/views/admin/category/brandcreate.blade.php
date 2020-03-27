@extends('admin.layout')
<div id="page-wrapper" class="col-lg-6">
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Them Thuong Hieu</h4></div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <a href="#">Dashboard</a>
            </ol>
        </div>
        <form action="{{url("admin/category/brandstore")}}" method="post">
        @csrf
        <div class="form-group has-success">
            <label for="bb-name" class="control-label"><p>Sua thuong hiêu</p></label>
            <input id="bb-name" name="brand_name" type="text" value="{{old("brand_name")}}"
            class="form-control bb-name @if($errors->has("brand_name"))is-invalid @endif">
            <span class="help-block field-validation-valid"></span>
            @if($errors->has("brand_name"))
            <p style="color:red">{{$errors->first("brand_name")}}</p>
            @endif
        </div>
        <div>
            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                <i class="fa fa-lock fa-lg"></i>&nbsp;
                <span id="payment-button-amount">Gửi đi</span>
                <span id="payment-button-sending" style="display:none;">Sending…</span>
            </button>
        </div>
        </form>
    </div>
</div>
</div>
