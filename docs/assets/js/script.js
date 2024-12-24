document.addEventListener("DOMContentLoaded", () => {
    const sections = document.querySelectorAll(".section");
    const options = {
        threshold: 0.25,
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("fade-in");
            }
        });
    }, options);

    sections.forEach((section) => {
        section.classList.add("fade");
        observer.observe(section);
    });
});

window.addEventListener('scroll', () => {
    document.body.classList.toggle('scrolled', window.scrollY > 50);
});
