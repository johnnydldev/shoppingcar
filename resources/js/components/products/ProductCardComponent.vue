<template>
<div class="col-xs-12 col-sm-6 col-md-4">
 <div class="card">
 <div class="padding text-center bg-primary"></div>
 <header class=" padding">
 <a :href="'/productos/'+product.id"> <img :src="'images/consolas.jpg '" width="200" height="180" class="mx-auto d-block"></a>
 </header>
 <div class="card-body">
 <a :href=" '/productos/'+ product.id"> <h2 class="card-title"> {{product.name}} </h2> </a>
 <h4 class="card-subtitle">{{product.humanPrice}}</h4>
 <p class="card-text">{{product.description}}</p>
 </div>
 </div>
</div>
</template>
<script>
export default {
 props:{
 product:{
 type: Object
 }
 }
 }

</script>