@extends('layouts.admin_layout')

@section('title')
 Добавить Компанию
@endsection

@section('content')
<h1>Добавить Компанию

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
              <form action="{{ route('company.store') }}" method="POST">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Название</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Введите название компании" require>
                  </div>
                 
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Добавить</button>
                </div>
              </form>
            </div>
              
@endsection