@extends('layouts.admin_layout')

@section('title')
Клиенты
@endsection

@section('content')
<h1>Клиенты

</h1>

<div class="card-footer">
<a href="{{ route('client.create')}}" class="nav-link">Добавить Клиента</a>
                  
                </div>

                <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Клиенты</h3>
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
                      <th style="width: 15%">
                          Название
                      </th>
                      <th style="width: 15%">
                          Email
                      </th>
                      <th style="width: 15%">
                         Имя компании
                      </th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($clients as $client)
                  <tr>
                      <td style="width: 5%">
                        {{ $client->id}}
                      </td>
                      <td style="width: 15%">
                        {{ $client->name}}
                      </td>
                      <td style="width: 15%">
                        {{ $client->email}}
                      </td>
                      <td style="width: 15%">
                       {{ $client->company['name'] }} 
      
                      </td>
                      
                     
                          
                      <td class="project-actions text-right">
                         
                          <a class="btn btn-info btn-sm" href="{{ route('client.edit', $client->id)}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                             Редактировать
                          </a>
                          <form action="{{ route('client.destroy', $client->id)}}" method="POST" style="display: inline-block">
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