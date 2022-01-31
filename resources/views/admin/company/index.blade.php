@extends('layouts.admin_layout')

@section('title')
Компании
@endsection

@section('content')
<h1>Компании

</h1>

<div class="card-footer">
<a href="{{ route('company.create')}}" class="nav-link">Добавить компанию</a>
                  
                </div>

                <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Компании</h3>
          @if (session('success'))
              <div class="alert alert-success" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                  <h4><i class="icon fa fa-check"></i>{{ session('success')}}</h4>
</div>
@endif
          <div class="card-tools">
              
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0" style="display: block;">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 5%">
                         ID
                      </th>
                      <th style="width: 30%">
                          Название
                      </th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($companies as $company)
                  <tr>
                      <td>
                        {{ $company->id}}
                      </td>
                     
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  
                              <h5>{{ $company->name}}</h4>
                              </li>
                             
                          </ul>
                      </td>
                     
                          
                      <td class="project-actions text-right">
                         
                          <a class="btn btn-info btn-sm" href="{{ route('company.edit', $company->id)}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                             Редактировать
                          </a>
                          <form action="{{ route('company.destroy', $company->id)}}" method="POST" style="display: inline-block">
                              @csrf
                              @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm delete-btn">
                              <i class="fas fa-trash">
                              </i>
                             Удалить
                            </button>
                            </form>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
              
@endsection