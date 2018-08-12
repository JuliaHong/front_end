

Vue.component('message',{
	props : ["title","text"],
	data(){
		return {
			isVIsible:true
		};
	},
	template:
	`
	<article class="message" v-show="isVIsible">
		<div class="message-header">
			{{title}}
			<button @click="toggle">x</button>
		</div>

			<div class="message-body">
			{{text}}
				</div>


	</article>

	`,
	methods : {
		toggle(){
			this.isVIsible=false;
		}
	}


})

var app = new Vue({
	el :"#root"
})
