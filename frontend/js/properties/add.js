const { createApp } = Vue;
createApp({

    data() {
        
        return {

            response: {
                success: false,
                feedback: ''
            },
            
            post: {
            }
        }
    },

    methods: {
        add_property() {
            axios
            .post('backend/properties/add_property.php', this.post)
            .then(response => (this.response = response))
        }
    },

    mounted () {
        console.log("Code is working");
    }

}).mount('#add_property');

