<template>
    <div>
        <div class="py-5">
                <div v-for="flavor in flavors">
                    <label>{{ flavor.displayname }}</label>
                    <input v-model.number="item[flavor.name]" type="number" min=0 :max="max_scoops + item[flavor.name]" :name=flavor.name>
                </div>
            </div>
             <div class="py-5">
                <div v-for="topping in toppings">
                    <label>{{ topping.displayname }}</label>
                    <input v-model.number="item[topping.name]" type="number" min=0 max=9 :name=topping.name>
                </div>
            </div>

             <div class="py-5">
                    <input v-model="item.cone" id="bowl" name="container" type="radio" value="false">
                    <label for="bowl">Bowl</label>
                    <input v-model="item.cone" id="cone" name="container" type="radio" value="true">
                    <label for="cone"> Cone (+$0.50)</label>
            </div>

            <div class="py-5">
                <label for="name">Who's the lucky person?</label>
                <input required v-model="item.name" id="name" name="name">
            </div>

            <button v-on:click="addItem" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Add to Order
            </button>
    </div>
</template>

<script>
    export default {
        data: function(){
            return {
                flavors: [
                    {name:'rockyroad', displayname: 'Rocky Road'},
                    {name:'cookiesandcream', displayname: 'Cookies and Cream'},
                    {name:'vanilla', displayname: 'Vanilla'},
                    {name:'chocolate', displayname: 'Chocolate'},
                ],
                toppings: [
                    {name: 'sprinkles', displayname: 'Sprinkles'},
                    {name: 'caramel', displayname: 'Caramel'},
                    {name: 'eminems', displayname: 'M&Ms'},
                    {name: 'cherries', displayname: 'Cherries 🍒'},
                ],
                containers: ['bowl', 'cone'],
                item: {
                    rockyroad: 0,
                    cookiesandcream: 0,
                    vanilla: 0,
                    chocolate: 0,
                    sprinkles: 0,
                    caramel: 0,
                    eminems: 0,
                    cherries: 0,
                    cone: false,
                    name: '',
                    }
                ,

            }
        },
        methods: {
            addItem: function(){
                this.$emit('itemAdded',this.item)
            }
        },
        computed: {
            max_scoops: function () {
                var scoops = this.item.rockyroad + this.item.cookiesandcream + this.item.vanilla + this.item.chocolate;
                console.log(scoops);
                if(3 - scoops < 0){
                    return 0;
                }
                else {
                    return 3 - scoops;
                }
            }
        }
    }
</script>