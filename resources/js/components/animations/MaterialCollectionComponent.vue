<script>
export default {
 functional: true, //Indicamos que se trata de un componente funcional
 render: function(createElement, context){
 var data = {
 ...context.data, //Expresión que posibilita la extracción de datos
 css: false,
 on:{
 //Eventos
 beforeEnter: function(el){
 el.style.opacity = 1;
 el.style.transform = "scale(0)";
 el.style.transition="all 0.3s cubic-bezier(0.4, 0.0, 0.2, 1)"
 },

 enter: function(el){
 const delay = 200 * el.dataset.index;
 setTimeout(()=>{
 el.style.opacity = 1;
 el.style.transform = "scale(1)";
 },delay)

 },
 leave: function(el){
 const delay = 200 * el.dataset.index;
 setTimeout(()=>{
 el.style.opacity = 0;
 el.style.transform = "scale(0)";
 },delay)
 }
 }
 };
 //Retorna un transitongroup con todos los elementos por cada elemento(hijo)
 return createElement('transition-group', data, context.children);
 }
}
</script>