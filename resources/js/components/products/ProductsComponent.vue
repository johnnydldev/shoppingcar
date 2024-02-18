<template>
<section>
 <material-transition-group tag="div" class="row">
<product-card-component v-bind:product="product" :data-index="index"
v-for="(product, index) in products" :key="product.id">
</product-card-component>
</material-transition-group>

</section>

</template>
<script>
 export default {
    data(){
        return{
            name: 'Products component',
            products: [], //Array que será llenado con los datos de la petición
            endPoint: "/productos" //Ruta de la petición
         }
    },
        created(){
        //En cuanto el componente se crea, manda llamar al método fetchProducts
         this.fetchProducts();
         },



 //Se definen los métodos que ejecutará el componente vía una propiedad methods
 methods: {
 //Método que ejecutará una petición asíncrona al servidor
 fetchProducts(){
 /*
 Axios se encarga de enviar la información al servidor al mismo tiempo
 verificar que dicha petición es válida
 */
 axios.get(this.endPoint).then((response)=>{
 console.log(response.data.data); //Verificamos qué devolvió los datos de la petición
 this.products = response.data.data;
 });
 }
 }
 }
</script>