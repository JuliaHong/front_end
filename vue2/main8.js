
Vue.component('modal',{
		template :
		`
		<div class="modal is-active">
  <div class="modal-background"></div>
  <div class="modal-content">
		<div class="box">
    <p>I wanna see silicon valley!!!!!</p>
  </div>
  <button class="modal-close is-large" @click="$emit('close')"></button>
		`
	}
)

var app = new Vue({
	el: '#root',
	data:{
		ll:true
	}
})
