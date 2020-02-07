@extends('layouts.app')

@section('content')
<div class='account_wrapper'>
    <div class='container'>
        <div class='row'>
            <div class='col-12 col-sm-4'>
                <ul id='tab_list'>
                    <li id='acc_orders'>заказы</li>
                    <li id='acc_details'>персональные данные</li>
                    <li id='acc_pass'>пароль</li>
                    <li>
                        <form  action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class='acc_logout'>выход</button>
                        </form>
                    </li>
                </ul>
            </div>
            <div class='col-12 col-sm-8'>
                <div class='result_msg'>
                @if(session('result'))
                    {{session()->pull('result')}}
                @endif                    
                
                @if (isset($errors) && count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif   
                </div>
                <div class='acc_tab_contents'>
                    <!-- single tab start -->
                    <div  data-toggle='acc_orders'>
                        <div class="myaccount-table table-responsive text-center">
                            <table class="table table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th>номер заказа</th>
                                        <th>дата заказа</th>                                
                                        <th>тотал</th> 
                                        <th>детали</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(!is_null($orders))
                                    @foreach($orders as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->created_at}}</td>
                                                <td>{{ $item->total}}</td>   
                                                <td><button class='order_tbl_btn'>детали</button></td>   
                                            </tr>
                                        @endforeach
                                    @endif                                                                
                                </tbody>
                            </table>
                            <div class="table-links">
                                @if(!is_null($orders))
                                    {{ $orders->links() }}
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- single tab end  -->
                    
                    <!-- single tab start -->
                    <div data-toggle='acc_details'>
                        <div>
                            <form action='/account/email' method='POST' enctype='multipart/form-data'>
                            @csrf
                            <div class="row">
                                @if(!is_null($user))
                                    <div class="col">
                                        <input type="text" name='name' class="form-control" value="{{$user->name}}" contenteditable>                                        
                                    </div>
                                    <div class="col">
                                        <input type="email" name='email' class="form-control" value="{{$user->email}}" contenteditable>                                        
                                    </div>
                                @endif
                            </div>
                                <button class=''>Submit</button>
                            </form>
                        </div>
                    </div>
                    <!-- single tab end  -->
                    
                    <!-- single tab start -->
                    <div data-toggle='acc_pass'>
                        <div>
                            <form action='/account/password' method='POST' enctype='multipart/form-data'>
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <input type="email" name='email' class="form-control" placeholder='эл. почта' >                                        
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" name='new_pass' class="form-control" placeholder='новый пароль'>                                       
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" name='conf_pass' class="form-control" placeholder='повторить пароль'>                                        
                                    </div>
                                </div>
                                <button class=''>Submit</button>
                            </form>
                        </div>
                    </div>
                    <!-- single tab end  -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection