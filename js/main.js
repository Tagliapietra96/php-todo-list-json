
const { createApp } = Vue;
createApp({
    // ************ VARIABILI ************
    data() {
        return {
            //STRINGHE

            //NUMERI

            //BOOLEANI

            //ARRAY
            tasksList: [],
            //OGGETTI
            newTask: {
                description: '',
                isDone: 'false',
            },
        }
    },
    // ************ FUNZIONI ************
    methods: {
        addTask(){
            axios.post('./api/addTask.php', this.newTask, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then(resp =>{
                this.fetchData();
                this.newTask.description = '';
            });
        },
        onTaskClick(element){
            if(element.isDone === 'true'){
                element.isDone = 'false';
            }else{
                element.isDone = 'true';
            }
        },
        fetchData(){
            axios.get('./api/list.php').then(resp => {
                this.tasksList = resp.data;
            });
        },
        deleteTask(index){
            axios.post('./api/deleteTask.php', index, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then(resp =>{
                this.fetchData();
            });
        },
        

    },
	mounted(){
        this.fetchData();
	}
}).mount('#my-app');