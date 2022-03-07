<template>
    <div class="row text-center">
        <div class="col-md-3 mx-auto" v-for="data in business" :key="data.id">
            <a href="javascript:void(0)"
               @click="selectBusiness(data)"
               data-bs-toggle="modal" data-bs-target="#exampleModal">
                <img class="img-experience" :src="data.url_logo" :alt="data.name_es">
            </a>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <!--                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>-->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <img :src="selected.url_logo" class="img-businesses" alt="">
                        </div>
                        <div class="container-fluid pt-5">
                            <div class="row">
                                <h5>{{ selected.name_es }}</h5>
                                <div class="col-12">
                                    <span
                                        class="text-black-50 h6">De: {{ selected.date_start }} a {{ selected.date_end }}</span>
                                </div>
                                <div class="col-12 pt-3">
                                    <p
                                        class="text-black-50" style="text-align:left" v-if="selected.description_es">{{selected.description_es}}
                                    </p>
                                    <p class="text-black-50" style="text-align:left" v-else>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum distinctio, in! Accusantium expedita iste itaque mollitia odio, sunt. Deleniti distinctio eveniet hic magnam modi non porro recusandae rem sequi vel?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <!--                        <button type="button" class="btn btn-primary">Save changes</button>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "ProfessionalExperience",
    data() {
        return {
            business: [],
            selected: [],
        }
    },
    methods: {
        getBusinesses() {
            const url = `/api/business`;
            axios.get(url).then(({data}) => {
                this.business = data.businesses;

            }).catch((error) => {
                console.log(error);
            })
        },
        selectBusiness(data) {
            this.selected = data;
        }
    },
    mounted() {
        this.getBusinesses();
    }

}
</script>

<style scoped>
.img-businesses {
    object-fit: contain;
    height: 300px;
    width: 250px;
    /*border-radius: 15px!important;*/

}
</style>
