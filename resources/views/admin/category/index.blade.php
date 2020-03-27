@extends('admin.layout')
@section('listsales')
        <div class="container-fluid">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">
                    <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                        <select class="form-control pull-right row b-none">
                            <option>March 2017</option>
                            <option>April 2017</option>
                            <option>May 2017</option>
                            <option>June 2017</option>
                            <option>July 2017</option>
                        </select>
                    </div>
                    <h3 class="box-title">Danh muc san pham</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>AGE</th>
                                <th>TELE</th>
                                <th>ADDRESS</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($categories as $c)
                            <tr>
                                <td>{{$c->id}}</td>
                                <td class="txt-oflo">{{$c->product_name}}</td>
                                <td class="txt-oflo">{{$c->age}}</td>
                                <td>{{$c->telephone}}</td>
                                <td>{{$c->product_desc}}</td>
                                <td>
                                <div class="icon-arrows-button-on">
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                        <a href="{{url("/admin/category/edit",['id'=>$c->id])}}" class="zmdi zmdi-edit"></a>
                                    </button>
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                        <a class="zmdi zmdi-edit"></a>
                                    </button>
                                </div>
                                </td>
                            </tr>
                            <tr class="spacer"></tr>
                            @empty
                                <p>No Products</p>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection




