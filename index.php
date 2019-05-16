<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vuex</title>
</head>
<body>
	<div id="app">
		<h1>{{ title }}</h1>
		<h2>{{ counter }}</h2>
		<button v-on:click="add">Click Me</button>
	</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.8/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vuex/3.1.0/vuex.js"></script>
<script>
	window.store = new Vuex.Store({
		state : {
			vxTitle : 'hellow world',
			count : 50
		},
		getters : {
			vxModifiedTitle : function(state){
				return state.vxTitle.toUpperCase();
			}
		},
		mutations : {
			increment : function(state, param){
				state.count++;
				console.log(state.count);
			}
		},
		actions : {},
	});

	new Vue({
		el : '#app',
		data : {
			title : store.getters.vxModifiedTitle,
		},
		methods : {
			add : function(){
				window.store.commit('increment', 20);
			}
		},
		computed : {
			counter : function (){
				return window.store.state.count;
			}
		}
	});
</script>
</html>