<script>
   import axios from 'axios'

    export default {
        data() {
            return {
                'posts' : [],
            }
        },
        mounted() {
           this.getAllPost()
        },
        methods :{
            getAllPost() {
                axios.get('api/posts')
                    .then( res => {
                        this.posts = res.data
                    })
            }
        }
    }
</script>
