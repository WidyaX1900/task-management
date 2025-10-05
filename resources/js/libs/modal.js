const modal = {
    show: (modalEl) => {        
        const timeout = modalEl.dataset.timeout; 
        
        if(timeout) clearTimeout(timeout);
        modalEl.classList.remove("opacity-0");
        modalEl.classList.remove("translate-y-full");
    },

    hide: (modalEl) => {
        const timeout = modalEl.dataset.timeout;
        
        if (timeout) clearTimeout(timeout);
        modalEl.classList.add("translate-y-full");        
        modalEl.dataset.timeout = setTimeout(() => {
            modalEl.classList.add("opacity-0");
        }, 300);
    },
};

export { modal };