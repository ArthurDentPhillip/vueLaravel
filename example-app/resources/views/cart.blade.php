@extends('layouts.add')

@section('content')
<div class="container">
            <div class="row">
<div class="col-12 cartHeader">
    <h3>Корзина</h3>
    <p class="badgeRed">{{$sum}}+</p>
</div>
    <div class="col-8 leftOuterBlock">
        <ul class="leftInnerBlock">
            @foreach($baskets as $basket)
                            <li class="row mb-4 p-10 d-flex justify-content-between productListBasicAddStyles">
                                <div class="col-1 imgCartList">
                                    <img src="{{asset($basket->post->img)}}" class="rounded-3">
                                </div>
                                <div class="col-5 cartListTitle">
                                    <h6 class="text-muted">{{$basket->post->title}}</h6>
                                    <h6 class="text-black mb-0">{!!$basket->post->text!!}</h6>
                                </div>
                                <div class="col-6 row">
                                <div class="col-3 cartBtnMin">
                                    <a class="btn btn-primary" href="{{ route('cart.edit', ['id' => $basket->id, 'gty' => $basket->gty-1]) }}"><span class="cartBtnMinSpan">-<span></a>
                               </div>
                                <div class="col-3">
                                    <p class="inpСounter">{{$basket->gty}}</p>
                                </div>
                                <div class="col-3 cartBtnMax">
                                    <a class="btn btn-primary" href="{{ route('cart.edit',  ['id' => $basket->id, 'gty' => $basket->gty+1]) }}"><span class="cartBtnMaxSpan">+<span></a>

                                </div>  

                                <div class="col-3 cartDelete">
                                <form action="{{route('cart.destroy', $basket->id)}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger cartDeleteBtn">
                                            <span><i class="bi bi-backspace-reverse-fill"></i>Del</span>
                                        </button>
                                    </form>
                                </div>                           
                                    
                                </div>

                            </li>
                            <hr class="cartLine">
                        @endforeach
                        <div class="col-12 blockBigHide">
                            <div class="row">
                                <p class="col-6">
                                    <cart :basket-list="{{$baskets}}"></cart>
                                </p>
                                <a href="{{route('map')}}" class="btn btn-primary col-4 btnCartInBlockLittleSize">Cart</a>
                            </div>          
                        </div>
        
    </ul>
    </div>

<div class="col-4 rightOuterBlock blockLittleHide">
        <p><cart :basket-list="{{$baskets}}"></cart></p>
        <a href="{{route('map')}}" class="btn btn-primary">Cart</a>
</div>

</div>
</div>
@endsection


