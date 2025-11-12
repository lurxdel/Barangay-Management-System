document.addEventListener("DOMContentLoaded", () => {
  const monthYear = document.getElementById("month-year");
  const calendarGrid = document.getElementById("calendar-grid");
  const prevBtn = document.getElementById("prev-month");
  const nextBtn = document.getElementById("next-month");

  let today = new Date();
  let currentMonth = today.getMonth();
  let currentYear = today.getFullYear();

  function renderCalendar(month, year) {
    calendarGrid.innerHTML = "";

    const monthNames = [
      "January", "February", "March", "April", "May", "June",
      "July", "August", "September", "October", "November", "December"
    ];

    monthYear.textContent = `${monthNames[month]} ${year}`;

    let firstDay = new Date(year, month).getDay();
    let daysInMonth = new Date(year, month + 1, 0).getDate();

    // Add empty slots before the first day
    for (let i = 0; i < firstDay; i++) {
      let emptyDiv = document.createElement("div");
      calendarGrid.appendChild(emptyDiv);
    }

    // Add days
    for (let day = 1; day <= daysInMonth; day++) {
      let dayDiv = document.createElement("div");
      dayDiv.classList.add("calendar-day");
      dayDiv.textContent = day;

      // Highlight today
      if (
        day === today.getDate() &&
        month === today.getMonth() &&
        year === today.getFullYear()
      ) {
        dayDiv.classList.add("today");
      }

      // Example: Add event marker (hardcoded for now)
      if (day === 15) {
        dayDiv.classList.add("event");
        dayDiv.title = "Barangay Assembly";
      }

      calendarGrid.appendChild(dayDiv);
    }
  }

  prevBtn.addEventListener("click", () => {
    currentMonth--;
    if (currentMonth < 0) {
      currentMonth = 11;
      currentYear--;
    }
    renderCalendar(currentMonth, currentYear);
  });

  nextBtn.addEventListener("click", () => {
    currentMonth++;
    if (currentMonth > 11) {
      currentMonth = 0;
      currentYear++;
    }
    renderCalendar(currentMonth, currentYear);
  });

  renderCalendar(currentMonth, currentYear);
});
