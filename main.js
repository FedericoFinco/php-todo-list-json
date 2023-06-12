const { createApp } = Vue

createApp({
    data() {
        return {
            prova: "prova!",
            array:[]
        }
    },
    methods: {
        addTask(){
            
        }
    },
    mounted(){
        console.log("iniziato")
        axios.get( "http://localhost:8888/php-todo-list-json/api.php" ).then(( risposta )=>{
            console.log(risposta)
            this.array= risposta.data
        })

        console.log("finito")
    }
}).mount('#app')