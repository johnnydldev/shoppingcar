<template>

<section>

<div class="row">
<product-card-component v-bind:contact="contact" :data-index="index" v-for="(contact,index) in products" :key="contact.id">
    </product-card-component>

    </div>
    </section>

</template>

<script>

export default{

        }
</script>

