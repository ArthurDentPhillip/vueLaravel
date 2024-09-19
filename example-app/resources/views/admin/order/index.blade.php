@extends('layouts.admin_layout')

@section('title', 'Главная')

@section('content')
    <!-- Main content -->
    <section class="content" style="margin-top: 2% !important">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Заказы Avion</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Название и количество товара</th>
                    <th>Адрес пункта выдачи</th>
                    <th>Имя покупателя</th>
                    <th>Email</th>
                    <th>Дата создания</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($orders as $order)
                    <tr>
                    <td>{{$order->title}}</td>
                    <td>{{$order->adress}}</td>
                    <td>{{$order->user}}</td>
                    <td>{{$order->email}}</td>
                    <td>{{$order->created_at}}</td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection