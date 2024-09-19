<template>
<div class="cartBlockTotalOne blockLittleHide">
  <div class="row">
    <h5 class="cartFont col-6">Ваша корзина</h5>
    <p class="col-6 cartColorOne">{{ subtotal }} товар(ов)</p>
  </div>
</div>
<div class="row blockLittleHide">
  <div class="row">
    <h5 class="col-6 cartFont">Итого</h5>
    <p class="col-6 cartColorTwo">{{ total }} ₽</p>
  </div>
</div>
<div class="row blockBigHide">
  <p class="cartColorTwo">{{ total }} ₽</p>
  <p class="cartColorOne">{{ subtotal }} товар(ов)</p>
</div>
</template>

<script>

export default {
   name: 'Cart',
   data(){
    return {
      subtotal:'',
      total:'',
      totalRend:'',

    }
   },

   props: {
    basketList:{
      required: true,
      type: Object
    },
    
   },
   mounted(){
    let sum = 0;
    let totalSum = 0;
    let x = 0;
    for(let i=0; i<this.basketList.length; i++){
      sum += this.basketList[i].gty
    }
    this.subtotal = sum
    for(let i=0; i<this.basketList.length; i++){
      x += i
      totalSum += this.basketList[i].price
    }
    this.total = totalSum

    // console.log(this.subtotal)
    // console.log(this.total)
    // console.log(this.x)
   }
  }
</script>

<style scoped>

</style>