Vue.config.devtools = true;

var root = new Vue({
    el: '#app',
    data: {
        diskBoxes: undefined,
        authorsToSelect: [],
        selectedAuthor: "All"
    },
    methods: {
        listAuthors() {
            axios.get('http://localhost/php-ajax-dischi/server.php?listAuthor=true')
                .then((response) => {
                    this.authorsToSelect = response.data;
                })
        },
        switchAuthor() {
            let filter = "";
            if (this.selectedAuthor != "All") {
                filter = "?author=" + this.selectedAuthor;
            }
            console.log(filter);
            axios.get('http://localhost/php-ajax-dischi/server.php' + filter)
                .then((response) => {
                    this.diskBoxes = response.data;
                })
        }
    },
    mounted() {
        axios.get('http://localhost/php-ajax-dischi/server.php')
            .then((response) => {
                this.diskBoxes = response.data;
                this.listAuthors()
            })
    }
});