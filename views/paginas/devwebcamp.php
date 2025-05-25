<main class="devwebcamp">

    <h2 class="devwebcamp__heading"><?= $titulo ?></h2>
    <p class="devwebcamp__descripcion">Conoce la conferencia más importante de Latinoamérica</p>

    <div class="devwebcamp__grid">

        <div class="devwebcamp__imagen">
            <picture>
                <source srcset="build/img/sobre_devwebcamp.avif" type="image/avif">
                <source srcset="build/img/sobre_devwebcamp.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" srcset="build/img/sobre_devwebcamp.jpg" alt="Imagen DevWebCamp">
            </picture>
        </div>

        <div class="devwebcamp__contenido">
            <p class="devwebcamp__texto">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam leo felis, accumsan eu justo et, tristique tincidunt est. Ut vestibulum imperdiet mauris, quis hendrerit erat pretium sit amet. Donec tempus augue ligula, vel bibendum velit vulputate sit amet. Quisque felis ipsum, auctor quis condimentum quis, hendrerit at eros.
            </p>
            <p class="devwebcamp__texto">
                Donec ullamcorper urna eu diam accumsan sollicitudin. Sed pretium nulla id ultrices sodales. Donec congue lobortis enim ut commodo. Maecenas tincidunt bibendum ex, non bibendum ex pharetra eu. In sagittis imperdiet nisl vitae cursus. Ut aliquet arcu sed maximus accumsan.
            </p>
        </div>

    </div>

</main>