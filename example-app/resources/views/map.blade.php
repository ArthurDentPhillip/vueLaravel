@extends('layouts.add')

@section('content')
<div class="container">
    <div class="row">
        <div class="blockLittleHide5 col-12 col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12" style='padding-top: 2% !important'>
                      
            <div id="cart_left">
               
            <h4 style="margin-top: 3%;">Куда доставить заказ?</h4>
            <p>Выберите пункт выдачи на карте или используйте поиск</p>
            </div>
            <h4>Данные получателя</h4>
            <p><strong>Имя:</strong> {{$data['name']}}</p>
            <p><strong>Email:</strong> {{$data['email']}}</p>
            <div class="btn btn-primary" id='btn'>Привезти заказ сюда</div>
        </div>
        <div class="col-12 col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12 mapClass">
            <maps></maps>
        </div>
        <div class="blockBigHide5 col-12 col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12" style='padding-top: 2% !important'>
                      
            <div id="cart_left">
               
            <h4 style="margin-top: 3%;">Куда доставить заказ?</h4>
            <p>Выберите пункт выдачи на карте или используйте поиск</p>
            </div>
            <h4>Данные получателя</h4>
            <p><strong>Имя:</strong> {{$data['name']}}</p>
            <p><strong>Email:</strong> {{$data['email']}}</p>
            <div class="btn btn-primary" id='btn'>Привезти заказ сюда</div>
        </div>
    </div>
</div>
@endsection


