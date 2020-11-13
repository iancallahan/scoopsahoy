<template>
    <div class="flex flex-col h-screen">
        <header class="py-5 bg-red-100"><slot></slot></header>
        
        <div class="flex-1">
            <button v-show="!addingItem" v-on:click="addingItem = true" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Add an Item
            </button>
            
            <add-item v-on:item-added="addItem" v-show="addingItem"></add-item>
            
            <running-total :items="order_items"></running-total>
            
            <div v-show="order_items.length > 0" class="flex flex-col">
                <label>Order Email</label>
                <input v-model="order_email" name="order_email">
                <label>Order Name</label>
                <input v-model="order_name" name="order_name">
                <button v-on:click="submitOrder" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Submit Order
                </button>
            </div>
        </div>
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
                order_email: '',
                order_items: [],
                addingItem: false
            }
        },
        methods: {
            addItem: function(item){
                this.order_items.push(item);
                this.addingItem = false;
            },
            submitOrder: function(){
                var order = {'order_name':this.order_name, 'order_email':this.order_email, 'order_items':this.order_items};
                axios.post('/order',order);
            }
        }
    }
</script>
