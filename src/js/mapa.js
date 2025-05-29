document.addEventListener("DOMContentLoaded", () => {
  if (document.querySelector("#mapa")) {
    const map = L.map(document.querySelector("#mapa")).setView(
      [51.505, -0.09],
      13
    );

    L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
      attribution:
        '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    }).addTo(map);

    L.marker([51.5, -0.09])
      .addTo(map)
      .bindPopup(
        `
        <h2 class="mapa__heading">DevWebCamp</h2>
        <p class="mapa__texto">Centro de Convenciones de los Ángeles</p>
        `
      )
      .openPopup();
  }
});
