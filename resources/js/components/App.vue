<template>
    <div class="flex flex-col h-screen">
        <header class="py-5"><slot></slot></header>
        <div class="flex-1">
            <div class="py-5">
                <div v-for="flavor in flavors">
                    <label>{{ flavor }}</label>
                    <input type="number">
                </div>
            </div>
             <div class="py-5">
                <div v-for="topping in toppings">
                    <label>{{ topping }}</label>
                    <input type="number">
                </div>
            </div>
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
                flavors: ['rockyroad',
                'cookiesandcream',
                'chocolate',
                'vanilla',],
                toppings: ['sprinkles',
                'caramel',
                'eminems',
                'cherries'],
                containers: ['bowl', 'cone'],
                order_name: '',
                order_items: [],
            }
        }
    }
</script>
