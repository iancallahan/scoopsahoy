<template>
    <div class="flex flex-col h-screen">
        <header class="py-5"><slot></slot></header>
        
        <div class="flex-1">
            <add-item></add-item>
        </div>
        
        <footer class="py-5"></footer>    
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data: function(){
            return {
                order_name: '',
                order_items: [],
            }
        }
    }
</script>
