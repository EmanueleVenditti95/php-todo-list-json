const { createApp } = Vue;

createApp({
    data() {
        return {
            toDos : [],
            newToDo : '',
            currentIndex : 0,
        }
    },
    methods : {
        fetchData() {
            axios.get('server.php').then((res) => {
                this.toDos = res.data.result;
                console.log(this.toDos);
            })
        },
        sendToDo() {
            const data = {
                toDo: this.newToDo
            }
            console.log(data);

            axios.post('store.php', data, {
                headers : {'Content-Type': 'multipart/form-data'},
            }).then((res) => {
                console.log(res.data);
                // this.toDos.push(res.data);
                this.fetchData();
                this.newToDo = '';
            })
        },
        taskToggle(index) {
            this.currentIndex = index;
            // this.toDos[index].done = !this.toDos[index].done;

            const data = { 
               // taskDone : this.toDos[index].done,
                index
            };

            axios.post('task_toggle.php', data , {
                headers : {'Content-Type': 'multipart/form-data'},
            }).then(res => {
                this.fetchData();
            })
        }
    },
    created() {
        this.fetchData();
    }
}).mount('#app');