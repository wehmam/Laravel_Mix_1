<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">Tambah Buku</div>
                    
                    <div class="card-body">
                        <form v-on:submit.prevent="submitData()">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" v-model="to_do_lists.name" placeholder="Masukkan Nama">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="title" v-model="to_do_lists.title" placeholder="Masukan Judul Buku">
                            </div>
                            <div class="form-group">
                                <textarea name="description" class="form-control" v-model="to_do_lists.description" cols="30" rows="10" placeholder="Description"></textarea>
                            </div>
                            <div class="form-group">
                                <router-link to="/" class="btn btn-warning">Kembali</router-link>
                                <button class="btn btn-success">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>
<script>
    import axios from 'axios'
    export default({
        data() {
            return {
                to_do_lists : {
                    name: "",
                    title: "",
                    description : ""
                },
                errors: []
            }
        },
        
        methods: {
            submitData() {
                axios.post('/to-do-list-post', this.to_do_lists)
                .then(response => {
                    console.log(response.data)
                    this.$router.push({path : '/'})
                    this.to_do_lists = response.data
                })
                .catch(e => {
                    this.errors.push(e)
                    console.log(error . e)
                })
            }
        }
    })
</script>
