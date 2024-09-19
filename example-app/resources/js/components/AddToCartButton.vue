<template>
 <a href ='' @click.prevent="addToCart" class="btn btn-primary addToCart">Add to cart</a>
</template>

<script>

export default {
    name: 'AddToCartButton',
    props: {
        product: {
            required: true,
            type: Object,
        }
    },
    methods: {
        async addToCart() {
            let responce = await axios.post('/cart', { 'product_id': this.product.id });
            console.log(responce.data)
        }
    },
}
</script>

<style scoped>

</style>