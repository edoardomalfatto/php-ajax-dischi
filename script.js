Vue.config.devtools = true;

var root = new Vue({
    el: '#app',
    data: {
        diskBoxes: undefined,
    },
    methods: {},
    mounted() {
        axios.get('http://localhost/php-ajax-dischi/server.php')
            .then((response) => {
                this.diskBoxes = response.data;
                console.log(this.diskBoxes);
            })
    }
});