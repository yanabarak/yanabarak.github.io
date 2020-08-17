<template>
	<li>
		<span v-bind:class="{done: todo.completed}">
			<input type="checkbox" @change="todo.completed = !todo.completed">
			<strong>{{index+1}}</strong>
			{{todo.title | uppercase}}
		</span>
		<button class="rm" @click="$emit('remove-todo', todo.id)">&times;</button>
</li>
</template>

<script>
	export default {
		props: {
			todo: {
				type: Object,
				required: true
			},
			index: {
				type: Number
			}
		},
		filters: {
			uppercase(value) {
				return value[0].toUpperCase() + value.slice(1);
			}
		}
	};
</script>

<style scoped>
	li{
		border: 1px solid #ccc;
		display: flex;
		justify-content: space-between;
		padding: 0.5rem 2rem;
		margin-bottom: 1rem;
	}	
	.rm{
		background: red;
		color: #fff;
		border-radius: 50%;
		font-weight: bold;
		border: 0px solid rgba(0,0,0,0);
	}
	.done{
		text-decoration: line-through;
	}
	input{
		margin-right: 1rem;
	}
</style>