<template>
    <div class="right-content">
        <h2>新着商品</h2>
        <div class="product_list">
            <div class="product" v-for="product in products">
                <div class="product-img">
                    <a v-bind:href="product.url">
                        <img src="/">
                    </a>
                </div>
                <div class="discription">
                    <span id="brand-name" class="detail">{{ product.brand_name }}</span>
                    <span class="detail">{{ product.store_name }}</span>
                    <span class="detail">\{{ product.price }}</span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                products: {}
            }
        },
        created() {
            axios.get('/api/new_product')
            .then(res => {
                this.products = res.data
            })
        }
    }
</script>
