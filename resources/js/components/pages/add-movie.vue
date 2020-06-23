<template>
    <div>
        <form @submit.prevent="addProduct" method="post">
            <div class="form-group">
                <label>Movie</label>
                <input v-model="form.name" type="text" name="name"
                       class="form-control" :class="{ 'is-invalid': form.errors.has('username') }">
                <has-error :form="form" field="username"></has-error>
            </div>
            <div class="form-group">
                <label for="actors">Actors</label>
                <textarea name="actors" class="form-control" id="actors" rows="2" v-model="form.actors"></textarea>
                <has-error :form="form" field="actors"></has-error>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" id="description" rows="3"
                          v-model="form.description"></textarea>
                <has-error :form="form" field="description"></has-error>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" name="price" id="price" class="form-control" v-model="form.price">
                <has-error :form="form" field="price"></has-error>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" v-on:change="form.image" class="form-control" >
                <has-error :form="form" field="image"></has-error>
            </div>
            <br>

            <label for="category">Category:</label>
            <select id="category" v-model="form.catagory_id">
                <option   v-for="(c,index) in catagories"  v-bind:value="index+1" :key="index"  >
                    {{c.name}}
                </option>
            </select>

            <br>
            <br>
            <div class="form-group">
                <button class="form-control btn btn-success" type="submit" >Save Product</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        name: "add-movie",
        data() {
            return {
                catagories: null,
                form: new Form({
                    name: '',
                    actors: '',
                    description: '',
                    price: '',
                    image: '',
                    catagory_id: ''
                })
            }
        },
        created() {
            const request = axios.get('api/catagory')
                .then(response => {
                    this.catagories = response.data.data;
                })
                .catch(error => {
                    console.log('Data error' + error);
                })
        },
        methods: {
            addProduct() {
        this.form.post('api/products')

            },
               /*
                axios({
                    method: 'post',
                    url: 'api/products',
                    data: {

                    }
                });
*/

/*
                alert(" in Add");
                const request = axios.post('/api/products',{
                    body: JSON.stringify(this.form),
                    headers: {
                        'content-type':'application/json'
                    }
                })
                    .then((res) => console.log("ok"+res))
                    .catch((err) => console.log(err));

            }
            */

        },

    }
</script>

<style scoped>

</style>
