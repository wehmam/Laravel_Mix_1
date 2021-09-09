<template>
    <div class="card">
        <div class="card-header">
            <router-link to="/create" class="btn btn-primary float-right">Tambah Buku</router-link>
        </div>
        <div class="card-body">
            <table class="table card-body">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <tr v-for="items, index in lists" :key="index">
                        <td>{{ items.id }}</td>
                        <td>{{ items.name }}</td>
                        <td>{{ items.title }}</td>
                        <td>{{ items.description }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
<script>
export default {
   data() {
       return {
           lists: [],
           errors: []
       }
   },

    created() {
        axios.get('/to-do-list')
        .then(response => {
            console.log(response.data)
            this.lists = response.data
        })
    }
}
</script>
