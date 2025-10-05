const createProjectBtn = document.getElementById("createProjectBtn"); 
const createProjectModal = document.getElementById("createProjectModal"); 
const closeIcon = document.getElementById("closeIcon");
let opacityTimeout; 

createProjectBtn.addEventListener("click", (event) => {
    if (opacityTimeout) clearTimeout(opacityTimeout);
    
    createProjectModal.classList.remove("opacity-0");     
    createProjectModal.classList.remove("translate-y-full");     
});

closeIcon.addEventListener("click", (event) => {
    createProjectModal.classList.add("translate-y-full");     
    
    if(opacityTimeout) clearTimeout(opacityTimeout);
    setTimeout(() => {
        createProjectModal.classList.add("opacity-0");     
    }, 300);
});
