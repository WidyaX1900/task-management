import { modal } from "./libs/modal";

const createProjectModal = document.getElementById("createProjectModal");

createProjectBtn.addEventListener("click", (event) => {
    modal.show(createProjectModal);     
});

closeIcon.addEventListener("click", (event) => {
    modal.hide(createProjectModal);
});
