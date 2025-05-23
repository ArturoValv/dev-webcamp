<main class="auth">

    <h2 class="auth__heading"><?= $titulo ?></h2>
    <p class="auth__texto">Recupera tu acceso a Dev Webcamp</p>

    <?php
    require_once __DIR__ . '/../templates/alertas.php';
    ?>


    <form method="POST" action="/olvide" class="formulario">
        <div class="formulario__campo">

            <label for="email" class="formulario__label">Email</label>

            <input type="email" name="email" id="email" class="formulario__input" placeholder="Tu Email">

        </div>

        <input type="submit" class="formulario__submit" value="Enviar Instrucciones">
    </form>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes cuenta? Inicia sesión</a>
        <a href="/registro" class="acciones__enlace">¿Aún no tienes cuenta? Obtén una</a>
    </div>

</main>