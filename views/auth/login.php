<main class="auth">

    <h2 class="auth__heading"><?= $titulo ?></h2>
    <p class="auth__texto">Inicia sesión en Dev Webcamp</p>

    <form action="" class="formulario">
        <div class="formulario__campo">

            <label for="email" class="formulario__label">Email</label>

            <input type="email" name="email" id="email" class="formulario__input" placeholder="Tu Email">

        </div>
        <div class="formulario__campo">

            <label for="password" class="formulario__label">Password</label>

            <input type="password" name="password" id="password" class="formulario__input" placeholder="Tu Password">

        </div>

        <input type="submit" class="formulario__submit" value="Iniciar Sesión">
    </form>

    <div class="acciones">
        <a href="/registro" class="acciones__enlace">¿Aún no tienes cuenta? Obtén una</a>
        <a href="/olvide" class="acciones__enlace">Olvidaste tu password</a>
    </div>

</main>