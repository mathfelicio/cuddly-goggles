<template>
    <div class='row'>
        <h4>All Posts</h4>
        <ul class="list-group">
            <li v-if='list.length === 0'>There are no posts yet!</li>
            <li class="list-group-item" v-for="(post, index) in list">
                 {{ post.title }}
                 <button @click="deletePost(post.id)" class="btn btn-danger btn-xs pull-right">Delete</button>
            </li>
        </ul>
    </div>
</template>

<script>
    export default{
        data(){
            return {
                list: [],
                post: {
                    id: '',
                    title: '',
                    message: ''
                }
            };
        },

        created(){
            this.fetchPostList();
        },

        methods: {
            fetchPostList(){
                axios.get('posts').then((res) => {
                    this.list = res.data;
                });
            },

            deletePost(id){
                axios.delete('posts/' + id)
                    .then((res) => {
                        this.fetchPostList();
                    })
                    .catch((err) => console.error(err));
            },
        }
    }
</script>