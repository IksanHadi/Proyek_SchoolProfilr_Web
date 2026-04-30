<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Sekolah - Ponndok Pesanteren HUMAIRA</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome untuk Ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">

    <?php require_once __DIR__ . '../Navbar.php'; ?>
    <?php require_once __DIR__ . '../Jumbotron.php'; ?>
    <?php require_once __DIR__ . '../program_sekolah.php'; ?>
    <?php require_once __DIR__ . '../About.php'; ?>
    <?php require_once __DIR__ . '../Gallery.php'; ?>
    <?php require_once __DIR__ . '../Facility.php'; ?>
    <?php require_once __DIR__ . '../Faq.php'; ?>
    <?php require_once __DIR__ . '../Kontak.php'; ?>
    <?php require_once __DIR__ . '../Footer.php'; ?>
    
        <!-- Back to top button -->
        <button type="button" class="btn btn-primary btn-floating back-to-top" id="btn-back-to-top">
            <i class="fas fa-arrow-up"></i>
        </button>
    
        <!-- Bootstrap 5 JS Bundle -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        
        <script>
            // Logika Back to Top
            let mybutton = document.getElementById("btn-back-to-top");
    
            window.onscroll = function () {
                scrollFunction();
            };
    
            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
                }
            }
    
            mybutton.addEventListener("click", function(){
                window.scrollTo({top: 0, behavior: 'smooth'});
            });

            // Slideshow functionality
            let slideIndex = 0;
            const slides = document.querySelectorAll('.slide');
            const dots = document.querySelectorAll('.dot');

            function showSlides() {
                slides.forEach(slide => slide.classList.remove('active'));
                dots.forEach(dot => dot.classList.remove('active'));

                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}

                slides[slideIndex-1].classList.add('active');
                dots[slideIndex-1].classList.add('active');

                setTimeout(showSlides, 4000); // Change image every 4 seconds
            }

            function changeSlide(n) {
                slideIndex += n;
                if (slideIndex > slides.length) {slideIndex = 1}
                if (slideIndex < 1) {slideIndex = slides.length}

                slides.forEach(slide => slide.classList.remove('active'));
                dots.forEach(dot => dot.classList.remove('active'));

                slides[slideIndex-1].classList.add('active');
                dots[slideIndex-1].classList.add('active');
            }

            function currentSlide(n) {
                slideIndex = n;
                slides.forEach(slide => slide.classList.remove('active'));
                dots.forEach(dot => dot.classList.remove('active'));

                slides[slideIndex].classList.add('active');
                dots[slideIndex].classList.add('active');
            }

            // Initialize slideshow when page loads
            document.addEventListener('DOMContentLoaded', function() {
                if (slides.length > 0) {
                    showSlides();
                }
            });
        </script>

        <!-- FAQ Single Click Enhancement -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const accordionButtons = document.querySelectorAll('.accordion-button');

                accordionButtons.forEach(button => {
                    button.addEventListener('click', function(e) {
                        e.preventDefault();

                        const targetId = this.getAttribute('data-bs-target');
                        const targetCollapse = document.querySelector(targetId);
                        const isExpanded = !targetCollapse.classList.contains('show');

                        // Close all other accordions in the same group
                        const parentAccordion = this.closest('.accordion');
                        const allCollapses = parentAccordion.querySelectorAll('.accordion-collapse');

                        allCollapses.forEach(collapse => {
                            if (collapse !== targetCollapse) {
                                collapse.classList.remove('show');
                                const header = collapse.previousElementSibling;
                                const btn = header.querySelector('.accordion-button');
                                if (btn) btn.classList.add('collapsed');
                            }
                        });

                        // Toggle current accordion
                        if (isExpanded) {
                            targetCollapse.classList.add('show');
                            this.classList.remove('collapsed');
                        } else {
                            targetCollapse.classList.remove('show');
                            this.classList.add('collapsed');
                        }
                    });
                });
            });
        </script>
    </body>
    </html>

    
   

  

    

    

   

   

   

 