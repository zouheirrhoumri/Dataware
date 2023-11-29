const projectsBtn = document.getElementById("ProjectsBtn");
const projectsTable = document.getElementById("projectsTable");

const teamsBtn = document.getElementById("teamsBtn");
const teamsTable = document.getElementById("teamsTable");

projectsBtn.addEventListener("click", () => {
    teamsTable.classList.add("hidden");
    projectsTable.classList.remove("hidden");
});

teamsBtn.addEventListener("click", () => {
    teamsTable.classList.remove("hidden");
    projectsTable.classList.add("hidden");
});