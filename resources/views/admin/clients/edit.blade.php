@extends('layouts.admin_layout')

@section('title')
Редактировать клиента
@endsection

@section('content')
<h1>Редактировать 

</h1>
<div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start --> 
              @if (session('success'))
              <div class="alert alert-success" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                  <h4><i class="icon fa fa-check"></i>{{ session('success')}}</h4>
</div>
@endif
              <br>
              <form action="{{ route('client.update', $client->id) }}" method="POST">
                  @csrf
                  @method('PUT')
                <div class="card-body">
                
                  <div class="form-group">
                    <label for="exampleInputEmail12">Имя :</label>
                    <input type="text" name="name" value="{{ $client->name}}"class="form-control" id="exampleInputEmail12" placeholder="Введите имя">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email :</label>
                    <input type="email" name="email" class="form-control" value="{{ $client->email}}" id="exampleInputEmail1" placeholder="Введите ваш email" >
                  </div>
                      <!-- select -->
                      <div class="form-group">
                      <label >Компания {{ $client->company['name']}} </label>
                      <br><br>
                        <label>Выбрать компанию :</label>
                        
                        <select name="id_company" value="{{ $client->id_company}}" class="form-control">
                        @foreach ($companies as $company)
                          <option value="{{$company->id}}">{{ $company->name}}</option>
                          @endforeach
                        </select>
                        
                      </div>
                    
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Обновить</button>
                </div>
              </form>
            </div>
@endsection