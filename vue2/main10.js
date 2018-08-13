
window.Event = new Vue();





Vue.component('coupon',{


template:
`<input placeholder="Enter your" @blur="onCouponApplied">`,
methods: {
	onCouponApplied(){ //local version of onCouponApplied
		Event.$emit('applied')
	}
}

})


var app = new Vue({
	el:'#root',
	data:{
		couponused: false
	},
	methods:{
		onCouponApplied(){
			alert('It was applied!')
			this.couponused=true;
		}
	},
	created(){
		Event.$on('applied',()=>{	alert('It was applied!')
			this.couponused=true;})
	}
})
