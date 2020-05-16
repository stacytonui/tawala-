<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">


                    <div class="card-body">
                        <form action="/stores/" method="post">
                            <input type="hidden" name="_token" v-bind:value="csrf">
                            <div class="form-group row ">
                                <div class="col-6">
                                    <label>Select City:</label>
                                    <select class='form-control' v-model='city' @change='getLocations()' required>
                                        <option value='0' disabled >Select City</option>
                                        <option v-for='data in cities' :value='data.id'>{{ data.name }}</option>
                                    </select>

                                </div>
                                <div class="col-6">
                                    <label>Select Location:</label>
                                    <select class='form-control' name="location" v-model='location' required>
                                        <option value='0' disabled >Select Location</option>
                                        <option  v-for='data in locations'  :value='data.id'>{{ data.name }}</option>
                                    </select>

                                </div>
                            </div>
                            <button class="btn red-button justify-content-center">Available Stores</button>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return {
                city: 0,
                cities: [],
                location: 0,
                locations: [],
                errors: {},
                location3:""
            }
        },
        props: ['csrf', 'oldName'],
        methods:{
            getCities: function(){
                axios.get('/api/get_cities')
                    .then(function (response) {
                        this.cities = response.data;
                    }.bind(this));
            },
            getLocations: function() {
                axios.get('/api/get_locations',{
                    params: {
                        city_id: this.city
                    }
                }).then(function(response){
                    this.locations = response.data;
                }.bind(this));
            }
        },
        created: function(){
            this.getCities()
        }
    }
</script>
