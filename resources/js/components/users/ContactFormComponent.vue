<template>
    <div class="container">
        <form>
            <div class="row justify-content-md-center">
                <div class="col-md-4">
                    <label for="name">Ingresa tu nombre</label>
                    <input name="name" type="text" class="form-control" placeholder="Nombre">
                </div>
                <div class="col-md-4">
                    <label for="phone">Número de teléfono</label>
                    <input type="tel" class="form-control" name="phone" placeholder="Número de teléfono">
                </div>
            </div>
            <div class="row justify-content-md-center my-3">
                <div class="col-md-8">
                    <label for="email">Correo electrónico</label>
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="col-md-8 my-3">
                    <label for="message">Ingresa un mensaje</label>
                    <textarea name="message" class="form-control" placeholder="Mensaje" rows="7"></textarea>
                </div>
                <div class="col-md-8 text-center">
                    <button class="btn btn-primary"><i class="fa fa-envelope-o mr-1" aria-hidden="true"></i>
                        Enviar</button>
                </div>
            </div>



        </form>
    </div>

</template>

<script>
export default {
    name: "ContactFormComponent"
}
</script>

<style scoped>

</style>
