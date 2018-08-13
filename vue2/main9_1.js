Vue.component('tabs',{
	template :
	`
	<div>
	<div class="tabs">
  <ul>
    <li v-for="tab in tabs":class="{'is-active' : tab.isActive}"><a @click= "selectedTab(tab)">{{tab.name}}</a></li>
  </ul>
</div>
<div class="tabs-details">
<slot></slot>
</div>
</div>

`,
data(){
	return { tabs :[]}
},
created(){
	this.tabs= this.$children;
},
	mounted(){
		console.log(this.tabs)
	},
	methods : {
		selectedTab(selectedTab){
			this.tabs.forEach(tab => {
				tab.isActive = (tab.name==selectedTab.name);
			})
		}
	}
})


Vue.component('tab',{
	template:
	`
	<div v-show="isActive"><slot></slot></div>
	`,
	props : {
		name : {required:true},
		selected : {default:false}
	},
	data(){
		return{
			isActive:false
		}
	},
	mounted(){
		this.isActive = this.selected;
	}
}
)




var app = new Vue({
 	el : '#root'
})
