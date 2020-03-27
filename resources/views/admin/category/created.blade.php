@extends('admin.layout')
<div id="page-wrapper" class="col-lg-6">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Them Danh Muc</h4></div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                </ol>
            </div>
            <form action="{{url("admin/category/store")}}" method="post">
            @csrf
            <div class="form-group has-success">
                <label for="cc-name" class="control-label"><p>Tên danh mục</p></label>
                <p>Ten hs</p>
                <input id="cc-name" name="product_name" type="text" value="{{old("product_name")}}"
                       class="form-control cc-name @if($errors->has("product_name"))is-invalid @endif">
                <p>dia chi</p>
                <input id="cd-name" name="product_desc" type="text" value="{{old("product_desc")}}"
                       class="form-control cd-name @if($errors->has("product_desc"))is-invalid @endif">
                <p>tuoi</p>
                <input id="ag-name" name="age" type="number" value="{{old("age")}}"
                       class="form-control ag-name @if($errors->has("telephone"))is-invalid @endif">
                <p>sdt</p>
                <input id="tl-name" name="telephone" type="text" value="{{old("telephone")}}"
                       class="form-control tl-name @if($errors->has("telephone"))is-invalid @endif">
                <span class="help-block field-validation-valid"></span>
                @if($errors->has("product_name"))
                    <p style="color:red">{{$errors->first("product_name")}}</p>
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

