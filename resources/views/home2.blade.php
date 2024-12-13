<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyPortfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link
        href="https://fonts.google.com/specimen/JetBrains+Mono?selection.family=Aguafina+Script|JetBrains+Mono:ital,wght@0,100..800;1,100..800|Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(45deg,
                    #000000 0%,
                    #04619F 22%,
                    #04619F 66%,
                    #000000 98%);

            /* Gradient from #1a3d63 to #4f8ea0 */
            /* Full height */

        }

        code {
            font-family: 'JetBrains Mono', monospace;
        }

        /* Navbar styles */
        nav {
            position: fixed;
            top: 30px;
            /* Atur jarak dari atas */
            left: 50%;
            transform: translateX(-50%);
            /* Agar navbar berada di tengah horizontal */
            background-color: #fff;
            border-radius: 50px;
            padding: 10px 140px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            /* Pastikan navbar selalu di atas */
        }

        /* Logo styles */
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            text-decoration: none;
        }

        /* Menu styles */
        .menu {
            display: flex;
            /* gap: 20px; */
            /* Tambahkan jarak antar menu */
        }

        .menu a {
            font-size: 18px;
            color: #333;
            text-decoration: none;
            font-weight: normal;
            padding: 10px 15px;
            border-radius: 20px;
            transition: background-color 0.3s ease;
        }

        /* Hover effect */
        .menu a:hover {
            background-color: #f1f1f1;
        }



        .about {
            background: linear-gradient(45deg, #034B7B, #04619F);
            padding: 50px;
            border-radius: 30px;
            margin: 2px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            /* Menambahkan shadow hitam */
        }

        .portfolio img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        footer {
            background: #0056b3;
            color: white;
            text-align: center;
            padding: 10px;
        }

        .wrapper {
            margin-top: 2rem;
            width: 90%;
            max-width: 1536px;
            margin-inline: auto;
            height: 400px;
            position: relative;

            justify-content: flex-start;
            /* Untuk menyusun gambar dari kiri */
            overflow: hidden;
            mask-image: linear-gradient(to right,
                    rgba(0, 0, 0, 0),
                    rgba(0, 0, 0, 1) 20%,
                    rgba(0, 0, 0, 1) 80%,
                    rgba(0, 0, 0, 0));
        }

        @keyframes scrollLeft {
            to {
                left: -400px;
            }
        }

        @keyframes scrollRight {
            to {
                right: -200px;
            }
        }

        .itemLeft,
        .itemRight {
            border-radius: 6px;
            position: absolute;
            animation-timing-function: linear;
            animation-duration: 30s;
            animation-iteration-count: infinite;
        }

        .itemLeft {
            left: max(calc(300px * 7), 100%);
            animation-name: scrollLeft;
        }

        .itemRight {
            right: max(calc(00px * 8), calc(100% + 200px));
            animation-name: scrollRight;
        }

        .item1 {
            animation-delay: calc(30s / 7 * (7 - 1) * -1);
        }

        .item2 {
            animation-delay: calc(30s / 7 * (7 - 2.3) * -1);
        }

        .item3 {
            animation-delay: calc(30s / 7 * (7 - 3.36) * -1);
        }

        .item4 {
            animation-delay: calc(30s / 7 * (7 - 4.65) * -1);
        }

        .item5 {
            animation-delay: calc(30s / 7 * (7 - 5.68) * -1);
        }

        .item6 {
            animation-delay: calc(30s / 7 * (7 - 6.96) * -1);
        }
    </style>
</head>

<body>
    <nav style="margin-bottom: 15px;">
        <div class="justify-content: left">
            <a href="#home" class="logo" style="gap: 20px;">MyPortofolio</a>
        </div>

        {{-- <button class="menu-toggle" onclick="toggleMenu()">&#9776;</button> --}}
        <div class="menu" style="font-semibold; font-weight: 600; display: flex; gap: 20px;">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#portfolio">Portofolio</a>
            <a href="#contact">Contact</a>
        </div>
    </nav>

    <!--Hero Section-->
    <section id="home" class="py-xl-8 py-6" style="margin-top: 0; padding-top: 80px; justify-content: center;">
        <div class="container py-xl-6">
            <div class="row align-items-center justify-content-center gy-6 gy-xl-0">
                <div class="col-lg-5 col-xxl-5 col-12">
                    <div class="d-flex flex-column gap-5">
                        <div class="d-flex flex-column gap-2">
                            <div class="d-flex flex-column">
                                <h5 class="mb-0 fw-semibold" style="color: yellow">Hello, i'm</h5>
                                <h1 class="mb-0 display-2 fw-bolder" style="color: white">Mochamad Adham Nicola</h1>
                                <h5><code class="mb-0" style="color: white">As a UI/UX Designer and Graphic Designer</code></h5>
                            </div>
                            <div class="d-grid d-md-flex flex-row gap-3">
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=adhamnicola21@student.polindra.ac.id&su=Hallo%20,%20Mochamad%20Adham%20Nicola!"
                                    target="_blank" class="btn btn-light mb-10 custom-button"
                                    style="font-family: 'Inter', sans-serif;font-weight:bold;color:#04619F;padding: 10px 30px; border-radius: 10px;">
                                    Hire Me!
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 offset-xxl-1 col-lg-2 col-12">
                    <img src="{{ asset('assets/pict1.png') }}" style="width: 470px; height: 600px;margin: 0 auto;">
                </div>
            </div>
        </div>
    </section>
    <!--Hero Section-->

    <section id="about" class="container" class="about" style="margin-top: 40px;">
        <div class="about" style="color:white">
            <h3 style="font-weight: bold;text-align:center;">About Me</h3>
            <hr
                style="border-radius: 15px;
            width: 10%;
            border: 2px solid rgb(246, 255, 0);
            margin-left: auto;
            margin-right: auto;" />
            <p style="text-align: justify;margin-top: 40px;">
                I am Mochamad Adham Nicola. I am currently a D4 student of Software Engineering at Politeknik
                Indramayu State Polytechnic. I am very interested in graphic design and UI/UX design. Besides that, I am interested in
                in the IT world, in the field of system analysis and front-end development. I like to create designs that
                not only look attractive, but also easy to use. My goal is to create
                experience for users through simple yet effective design.</p>
        </div>
    </section>

    <section id="skills" class="container skills text-center centered-section" style="margin-top: 40px;">
        <h3 style="font-weight: bold;text-align:center;color:white">Skills</h3>
        <hr
            style="border-radius: 15px;
        width: 5%;
        border: 2px solid rgb(246, 255, 0);
        margin-left: auto;
        margin-right: auto;" />
        <div class="row align-items-center justify-content-center gy-6 gy-xl-0">
            <div class="col-md-2">
                <img src="./assets/canva.png" alt="Canva">
                <p style="font-weight: semibold;color: white">Canva</p>
            </div>
            <div class="col-md-2">
                <img src="./assets/ps.png" alt="Photoshop">
                <p style="font-weight: semibold;color: white">Photoshop</p>
            </div>
            <div class="col-md-2">
                <img src="./assets/ai.png" alt="Illustrator">
                <p style="font-weight: semibold;color: white">Illustrator</p>
            </div>
            <div class="col-md-2">
                <img src="./assets/cd.png" alt="Figma">
                <p style="font-weight: semibold;color: white">Coreldraw</p>
            </div>
            <div class="col-md-2">
                <img src="./assets/figma.png" alt="Figma">
                <p style="font-weight: semibold;color: white">Figma</p>
            </div>
        </div>
    </section>

    <section id="portfolio" class="portfolio container" style="margin-top: 40px;">
        <h3 style="font-weight: bold;text-align:center;color:white">Portofolio</h3>
        <hr
            style="border-radius: 15px;
        width: 5%;
        border: 2px solid rgb(246, 255, 0);
        margin-left: auto;
        margin-right: auto;" />
        <div class="wrapper">
            <img src="assets/1.png" class="itemLeft item1" style="height: 400px; width: 400px; "></img>
            <img src="assets/3.png" class="itemLeft item2" style="height: 400px; width: 320px; "></img>
            <img src="assets/2.png" class="itemLeft item3" style="height: 400px; width: 400px; "></img>
            <img src="assets/4.png" class="itemLeft item4" style="height: 400px; width: 320px; "></img>
            <img src="assets/1.png" class="itemLeft item5" style="height: 400px; width: 400px; "></img>
            <img src="assets/5.png" class="itemLeft item6" style="height: 400px; width: 320px; "></img>
        </div>
    </section>


    <!-- footer -->
    <!-- footer -->
    <footer id="contact" class="py-lg-8 py-3 footer bg-white" style="margin-top: 40px">
        <div class="container">
            <div class="row  justify-content-center text-center  ">
                <div class="col-12 col-md-12 col-xl-8 ">
                    <div class="nav nav-footer justify-content-center">
                        <a class="nav-link" href="#home">Profile</a>
                        <a class="nav-link" href="#about">About</a>
                        <a class="nav-link" href="#portfolio">Portofolio</a>
                    </div>
                </div>

                <div class="col-12 col-md-12 col-xxl-6 px-0 mb-4 " style="margin-top: 20px" >
                    <h3 style="font-weight: bold;color: black">Adham Nicola | Contact</h3>
                    <p class="lead" style="color: #04619F">
                        Blok Lap. Bola, No.1, Rt 05/Rw 01, Desa Sindangkerta, Kec. Lohbener, Kab. Indramayu, Jawabarat
                    </p>
                    <a  style="color: #04619F">Whatsapp</a> <a href="https://wa.me/6281947394042?text=Halo%20Adham%20Nicola,%20saya%20tertarik%20untuk%20mengajak%20Anda." target="_blank">081947394042</a><a> </a><a style="color: #000000">|</a><a> </a><a  style="color: #04619F">Email</a> <a href="https://mail.google.com/mail/?view=cm&fs=1&to=adhamnicola21@student.polindra.ac.id&su=Hallo%20,%20Mochamad%20Adham%20Nicola!" target="_blank">adhamnicola21@student.polindra.ac.id</a>
                </div>
            <div>

            </div>

                <!-- Desc -->
            <div class="col-lg-8 col-md-12 col-12">
                <div class="my-6">
                    <!--Facebook-->
                    <a href="https://facebook.com/adhaamn/" target="_blank" class=" me-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                          </svg>
                    </a>
                    <!--LinkedIn-->
                    <a href="https://www.linkedin.com/in/mochamad-adham-nicola-b127141a2/" target="_blank" class=" me-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                          </svg>
                    </a>
                    <a href="https://www.instagram.com/adhamnicola_/" target="_blank" class=" me-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                          </svg>
                    </a>
                </div>
            </div>
            </div>

                <div class="row align-items-center g-0 border-top py-2 mt-5">
                    <!-- Desc -->
                    <div class="col-lg-8 col-md-12 col-12" style="color: #0056b3">
                        <div class="d-lg-flex align-items-center">
                            <div class="me-4">
                                <span>© <span id="copyright5">
                                        <script>
                                            document.getElementById('copyright5').appendChild(document.createTextNode(new Date().getFullYear()))
                                        </script>
                                    </span> Adham Nicola. All Rights Reserved</span>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </footer>



    <script>
        document.querySelectorAll('a[href^="#"').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);

                if (targetElement) {
                    const offset = 120; // Sesuaikan tinggi offset
                    const elementPosition = targetElement.offsetTop;
                    const offsetPosition = elementPosition - offset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>
