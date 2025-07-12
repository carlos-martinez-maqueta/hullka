const monthTitle = document.getElementById("month-title");
const daysContainer = document.getElementById("days");
const prevButton = document.getElementById("prev-month");
const nextButton = document.getElementById("next-month");

const meses = [
    "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
    "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
];

let currentDate = new Date(); // Fecha base para el calendario

function generarCalendario(date) {
    const year = date.getFullYear();
    const month = date.getMonth();

    monthTitle.textContent = `${meses[month]} ${year}`;

    // Primer día del mes (0 = Domingo)
    const firstDay = new Date(year, month, 1).getDay();
    const diasMes = new Date(year, month + 1, 0).getDate(); // Días en el mes

    const today = new Date();
    const isCurrentMonth = month === today.getMonth() && year === today.getFullYear();

    let diasHTML = "";

    // Espacios en blanco antes del primer día del mes
    for (let i = 0; i < (firstDay === 0 ? 6 : firstDay - 1); i++) {
    diasHTML += `<div class="day empty"></div>`;
    }

    // Generar los días del mes
    for (let i = 1; i <= diasMes; i++) {
    const isToday = isCurrentMonth && i === today.getDate();
    diasHTML += `<div class="day${isToday ? ' today' : ''}">${i}</div>`;
    }

    daysContainer.innerHTML = diasHTML;
}

// Navegar al mes anterior
prevButton.addEventListener("click", () => {
  currentDate.setDate(1); // Establecer al día 1 para evitar saltos
  currentDate.setMonth(currentDate.getMonth() - 1);
  generarCalendario(currentDate);
});

// Navegar al mes siguiente
nextButton.addEventListener("click", () => {
  currentDate.setDate(1); // Establecer al día 1 para evitar saltos
  currentDate.setMonth(currentDate.getMonth() + 1);
  generarCalendario(currentDate);
});

// Mostrar calendario al cargar
generarCalendario(currentDate);