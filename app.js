const { createApp } = Vue;

createApp({
    data() {
        return {
            toDos : [],
            newToDo : '',
        }
    },
    methods : {
        fetchData() {
            axios.get('server.php').then((res) => {
                this.toDos = res.data;
                console.log(this.toDos);
            })
        },
        sendToDo() {
            console.log(this.newToDo)
            const data = {
                toDo: this.newToDo
            }

            axios.post('store.php', data, {
                headers : {'Content-Type': 'multipart/form-data'},
            }).then((res) => {
                this.toDos = res.data.toDos
            })
        }
    },
    created() {
        this.fetchData();
    }
}).mount('#app');