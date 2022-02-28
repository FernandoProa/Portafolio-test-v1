<template>
    <div class="container">
        <form @submit.prevent="submitForm" method="post">
            <div class="row justify-content-md-center">
                <div class="col-md-4">
                    <label for="name">Ingresa tu nombre</label>
                    <input id="name" name="name" v-model="name" type="text" class="form-control" placeholder="Nombre">
                    <span class="text-danger" v-if="errors && errors.name" v-text="errors.name[0]"/>
                </div>
                <div class="col-md-4 mt-3 mt-md-0">
                    <label for="phone">Número de teléfono</label>
                    <input id="phone" v-model="phone" type="tel" class="form-control" name="phone"
                           placeholder="Número de teléfono">
                    <span class="text-danger" v-if="errors && errors.phone" v-text="errors.phone[0]"/>

                </div>
            </div>
            <div class="row justify-content-md-center my-3">
                <div class="col-md-8">
                    <label for="email">Correo electrónico</label>
                    <input id="email" v-model="email" type="email" class="form-control" name="email" placeholder="Email">
                    <span class="text-danger" v-if="errors && errors.email" v-text="errors.email[0]"/>

                </div>
                <div class="col-md-8 my-3">
                    <label for="message">Ingresa un mensaje</label>
                    <textarea id="message" v-model="message" name="message" class="form-control" placeholder="Mensaje"
                              rows="7"></textarea>
                    <span class="text-danger" v-if="errors && errors.message" v-text="errors.message[0]"/>

                </div>
                <div class="col-md-8 text-center">
                    <button class="btn btn-primary"><i class="fa fa-envelope-o mr-1" aria-hidden="true"></i>
                        Enviar mensaje
                    </button>
                </div>
            </div>
        </form>

    </div>

</template>

<script>
import Swal from "sweetalert2";

export default {
    name: "ContactFormComponent",
    data() {
        return {
            name: '',
            email: '',
            phone: '',
            message: '',
            errors: {},

        }
    },
    methods: {
        async submitForm() {
            const URL = '/contact/submit';
            let me = this;
            axios.post(URL, {
                'name': this.name,
                'phone': this.phone,
                'email': this.email,
                'message': this.message
            }).then(res => {
                me.name= '';
                me.email = '';
                me.phone = '';
                me.message = '';
                me.errors = {};

                Swal.fire(
                    '¡Hecho!',
                    'El mensaje se ha enviado satisfactoriamente, gracias por ponerte en contacto.',
                    'success'
                )

            }).catch(error => {
               this.errors = error.response.data.errors || {};
            })

        }
    }
}
</script>

<style scoped>

</style>
