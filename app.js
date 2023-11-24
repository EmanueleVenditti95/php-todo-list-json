const { createApp } = Vue;

createApp({
    data() {
        return {
            toDos : []
        }
    },
    methods : {
        fetchData() {
            axios.get('server.php').then((res) => {
                this.toDos = res.data;
                console.log(this.toDos);
            })
        }
    },
    created() {
        this.fetchData();
    },
    mounted() {
        console.log(this.toDos);
    }
}).mount('#app');
