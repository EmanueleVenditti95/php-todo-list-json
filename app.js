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
                this.toDos.push(res.data);
                this.fetchData();
                this.newToDo = '';
            })
        }
    },
    created() {
        this.fetchData();
    }
}).mount('#app');