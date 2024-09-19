<template>
  <h1 v-on:click="open" v-show="openBtn">Open</h1>
  <h1 v-text="site" v-show="blockShow"></h1>
  <h1 v-on:click="close" v-show="closeBtn">Close</h1>
</template>
    
<script>
export default {
   name: 'Modal',
   data() {
    return{
        site: 'Block',
        blockShow: false,
        openBtn: true,
        closeBtn: false,
    }   
    },
    methods: {
        open(){
            if(this.blockShow === false){
                this.blockShow = true
                this.openBtn = false
                this.closeBtn = true
            }
            
        },
        close(){
            if(this.blockShow === true){
                this.blockShow = false
                this.closeBtn = false
                this.openBtn = true
            }
        }
    }   
}
    
</script>
    
<style scoped>

</style>