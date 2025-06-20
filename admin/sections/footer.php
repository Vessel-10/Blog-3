
<script>
    // Wait until the DOM is fully loaded
    document.addEventListener("DOMContentLoaded", function () {
        const links = document.querySelectorAll(".nav-list a");

        links.forEach(link => {
            link.addEventListener("click", function (e) {
                // Prevent the default link behavior for now
                // e.preventDefault();

                // Remove 'active' from all links
                links.forEach(l => l.classList.remove("active"));

                // Add 'active' to the clicked link
                this.classList.add("active");
            });
        });
    });
</script>
    </body>
</html>