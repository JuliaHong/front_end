Vue.component('task-list',{
		template:'<div><task v-for="task in tasks" >{{task.taskText}}</task></div>',
		data() {
			return{
			tasks : [
						{taskText : "감자 삶기",completed : false},
						{taskText : "옥수수 삶기",completed : false},
						{taskText : "해커톤 준비하기",completed : true},
						{taskText : "고구마 삶기",completed : false}
					]
			}
		}
})

Vue.component('task',{
	template : '<li><slot></slot></li>'
})



var app=  new Vue({
	el : '#root'

})
