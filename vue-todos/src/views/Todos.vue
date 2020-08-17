<template>
  <div>
  <h2>New list</h2>
  <AddTodo
    @add-todo="addTodo"  
  />
    <router-link to="/">home</router-link>

  <select v-model="filter">
    <option value="all">All</option>
    <option value="completed">Completed</option>
    <option value="not-completed">Not completed</option>
  </select>
  <hr>

  <Loader v-if="loading"/>
  <TodoList
    v-else-if="filteredTodos.length"
    v-bind:todos="filteredTodos" 
    @remove-todo="removeTodo"
  />
  <div v-else>No elements for display</div>
  </div>
</template>

<script>
import TodoList from '@/components/TodoList'
import AddTodo from '@/components/AddTodo'
import Loader from '@/components/Loader'

export default {
  name: 'App',
  data() {
    return {
      todos: [],
      loading: true,
      filter: "all"
    }
  }, 
  mounted() {
    fetch('https://jsonplaceholder.typicode.com/todos/?_limit=5')
    .then(response => response.json())
    .then(json => {
      this.todos = json,
      this.loading = false
    })
  },
  // watch: {
  //   filter(value) {
  //     console.log(value);
  //   }
  // },
  computed: {
    filteredTodos(){
      if (this.filter === "all") {
        return this.todos
      }

      if (this.filter === "completed") {
        return this.todos.filter(t => t.completed)
      } 

      if (this.filter === "not-completed") {
        return this.todos.filter(t => !t.completed)
      } 
    }
  },
  components: {
    TodoList,
    AddTodo,
    Loader
  },
  methods: {
    removeTodo(id) {
      this.todos =this.todos.filter(t => t.id !== id)
    },
    addTodo(newTodo) {
      this.todos.push(newTodo)
    }
  }
};
</script>
