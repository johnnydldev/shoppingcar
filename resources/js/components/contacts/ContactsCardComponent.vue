<template>
<div class="col-xs-12col-sm-6col-md-4">
    <div class="card">
    <div class="paddingtext-centerbg-primary">
    </div>
    <header class="padding">
      
        </header>
        <div class="card-body">
        
        <h4 class="card-title">{{contact.email}}</h4>
        
        <h4 class="card-subtitle">{{contact.name}}</h4>
        <h4 class="card-subtitle">{{contact.lastname}}</h4>
        <p class="card-text">{{contact.description}}</p>
        </div>
        </div>
        </div>
        </template>
<script> export default{ 
    props:{
        contact:{
            type: 
            Object
            }
    }
}</script>