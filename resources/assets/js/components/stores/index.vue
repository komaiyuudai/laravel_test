<template>
	<div id="store-list">
	    <h2>ショップ一覧</h2>
	    <span class="store-name" v-for="sotre of stores">
	        <a v-bind:href="'/store/' + store.id">{{ store.name }}</a>
	    </span>
	</div>
</template>

<script>
	export default {
		data() {
			return {
				store: {}
			}
		},
		created() {
			axios.get('/api/get_store_list')
			.then(res => {
				this.store = res.data
			})
		}
	}
</script>