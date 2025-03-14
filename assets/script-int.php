<!-- bootstrap cdn -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- aos cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- swiper cdn -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    function initializeSwiper(className) {
        return new Swiper(className, {
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                660: {
                    slidesPerView: 1.5,
                    spaceBetween: 20,
                },
                1200: {
                    slidesPerView: 3.5,
                    spaceBetween: 5,
                }
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            // autoplay: {
            //     delay: 2000,
            //     disableOnInteraction: false,
            // },
            // loop: true,
        });
    }

    // Initialize Swipers for each slider type
    initializeSwiper(".mechSwiper");
    initializeSwiper(".autoSwiper");
    initializeSwiper(".DevSwiper");
    initializeSwiper(".civilSwiper");
    initializeSwiper(".sapSwiper");
    initializeSwiper(".aeroSwiper");
</script>

<script>
    var swiper = new Swiper(".moduleSwiper", {
        slidesPerView: 1.2,
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>

<script>
    var trendingCourseSwiper = new Swiper(".trendingSwiper", {
        // slidesPerView: 2.5,
        spaceBetween: 10,
        breakpoints: {
            0: {
                slidesPerView: 1.2,
            },
            640: {
                slidesPerView: 1.2,
            },
            1024: {
                slidesPerView: 2.5,
            },
        },
        // breakpoints: {
        //     0: {
        //         slidesPerView: 1,
        //     },
        //     660: {
        //         slidesPerView: 1.2,
        //     },
        //     1200: {
        //         slidesPerView: 2.5,
        //     }
        // },
        // spaceBetween: 10,
        // autoplay: {
        // delay: 2000,
        // disableOnInteraction: false,
        // },
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>

<script>
    var TechPartner = new Swiper(".techPartnerSwiper", {
        pagination: {
            el: ".swiper-pagination",
            type: "fraction",
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        slidesPerView: 1,
        loop: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
    });
</script>

<script>
    function initializeSwiperCourses(className) {
        return new Swiper(className, {
            breakpoints: {
                0: {
                    slidesPerView: 1.2,
                },
                660: {
                    slidesPerView: 1.2,
                },
                1200: {
                    slidesPerView: 4.5,
                }
            },
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            // autoplay: {
            //     delay: 2000,
            //     disableOnInteraction: false,
            // },
            loop: true,
        });
    }

    // Initialize Swipers for each slider type
    initializeSwiperCourses(".placementSwiper");
    initializeSwiperCourses(".mechCourse");
    initializeSwiperCourses(".electCourse");
    initializeSwiperCourses(".itCourse");
    initializeSwiperCourses(".civilCourse");
    initializeSwiperCourses(".sapCourse");
    initializeSwiperCourses(".aeroCourse");
</script>

<!-- <script>
    var PlacementSwiper = new Swiper(".placementSwiper", {
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            660: {
                slidesPerView: 1.2,
                spaceBetween: 20,
            },
            1200: {
                slidesPerView: 4.5,
                spaceBetween: 5,
            }
        },
        // autoplay: {
        //     delay: 2000,
        //     disableOnInteraction: false,
        // },
        // loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script> -->

<script>
    var homeGrid = new Swiper(".homeGridSwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        // autoplay: {
        //     delay: 2000,
        //     disableOnInteraction: false,
        // },
        // loop: true,
    });
</script>


<!-- footer accordion -->
<script>
    document.querySelectorAll('.accordion-item h5').forEach((accordionToggle) => {
        accordionToggle.addEventListener('click', () => {
            const accordionItem = accordionToggle.parentNode;
            const accordionContent = accordionToggle.nextElementSibling;

            if (accordionContent.style.maxHeight) {
                accordionContent.style.maxHeight = null;
                accordionItem.classList.remove('active');
            } else {
                accordionContent.style.maxHeight = accordionContent.scrollHeight + 'px';
                accordionItem.classList.add('active');
            }
        });
    });
</script>

<script>
    var swiper = new Swiper(".missionSwiper", {
        direction: "vertical",
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>

<script>
    class Slider {
        constructor(options) {
            this.sections = document.querySelectorAll(options.section);
            this.navigation = document.querySelector(options.dots);

            this.navigation.addEventListener('click', this.scrollToSection.bind(this));
            window.addEventListener('scroll', this.setDotStatus.bind(this));
        }

        removeDotStyles() {
            const dots = this.navigation;
            const is_active = dots.querySelector('.is-active');

            if (is_active != null) {
                is_active.classList.remove('is-active');
            }
        }

        setDotStatus() {
            const scroll_position = window.scrollY;
            const dots = Array.from(this.navigation.children);

            this.sections.forEach((section, index) => {
                const half_window = window.innerHeight / 2;
                const section_top = section.offsetTop;

                if (scroll_position > section_top - half_window && scroll_position < section_top + half_window) {
                    this.removeDotStyles();
                    dots[index].classList.add('is-active');
                }
            })
        }

        scrollToSection(e) {
            const dots = Array.from(this.navigation.children);
            const window_height = window.innerHeight;

            dots.forEach((dot, index) => {
                if (dot == e.target) {

                    window.scrollTo({
                        top: window_height * index,
                        behavior: 'smooth',
                    });
                }
            });
        }
    }

    new Slider({
        section: '.section',
        dots: '#js-dots',
    });
</script>

<script>
    var swiperCbe = new Swiper(".cbeSwiper", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 30,

            },
            660: {
                slidesPerView: 1.5,
                spaceBetween: 30,
            },
            1200: {
                slidesPerView: 3.5,
                spaceBetween: 10,
            }
        }
    });

    // autoplay: {
    //     delay: 2000,
    //     disableOnInteraction: false,
    // },
    // loop: true,
</script>

<script>
    var ServiceSwiper = new Swiper(".serviceSwiper", {
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            660: {
                slidesPerView: 1,
            },
            1200: {
                slidesPerView: 2.5,
            }
        },
        spaceBetween: 5,
        // autoplay: {
        //     delay: 2500,
        //     disableOnInteraction: false,
        // },
        // loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>

<script>
    var swiper = new Swiper(".ourSisCompanies", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        slidesPerView: 1,
        spaceBetween: 30,
    });
</script>

<script>
    var swiper = new Swiper(".formSwiper", {
        pagination: {
            el: ".swiper-pagination",
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        loop: true,

    });
</script>

<script>
    function changeBranch() {
        var selectedBranch = document.getElementById("branchDropdown").value;
        var tabs = document.querySelectorAll('.tab-pane');

        // Hide all tabs
        tabs.forEach(function(tab) {
            tab.classList.remove('show', 'active');
        });

        // Show the selected tab
        var selectedTab = document.querySelector(selectedBranch);
        selectedTab.classList.add('show', 'active');
    }
</script>

<!-- landing page script -->
<script>
    var swiper = new Swiper(".formSwiper", {
        pagination: {
            el: ".swiper-pagination",
        },
    });
</script>

<!-- cad bangalore -->
<script>
    const CAD_BANGALORE = document.getElementById("cadBangalore");
    const PHONE = document.getElementById('phone');

    PHONE.addEventListener('input', function(e) {
        e.target.value = e.target.value.replace(/\D/g, '').slice(0, 12);
    });

    let isCadBanSubmit = false;

    CAD_BANGALORE.addEventListener("submit", async function(e) {
        e.preventDefault();

        if (isCadBanSubmit) return; // Prevent multiple submissions
        isCadBanSubmit = true;

        document.querySelector(".btn--submit").classList.add("d-none");
        document.querySelector(".btn--submitting").classList.remove("d-none");

        const dataCadBangalore = new FormData(CAD_BANGALORE);
        const actionCadBangalore = e.target.action;

        try {
            const res = await fetch(actionCadBangalore, {
                method: "POST",
                body: dataCadBangalore,
            });
            console.log(res, "response");
            window.location = "/cad-course-bangalore/thank-you.php";
        } catch (e) {
            console.error(e, "errr");
        } finally {
            isCadBanSubmit = false;
        }
    });
</script>

<!--cad hosur -->
<script>
    const CAD_HOSUR = document.getElementById("cadHosur");

    let isCadHosurSubmit = false;

    const collect_num = PHONE_CAD.value

    CAD_HOSUR.addEventListener("submit", async function(e) {
        e.preventDefault();

        if (isCadHosurSubmit) return; // Prevent multiple submissions
        isCadHosurSubmit = true;

        document.querySelector(".btn--submit").classList.add("d-none");
        document.querySelector(".btn--submitting").classList.remove("d-none");

        const dataCadHosur = new FormData(CAD_HOSUR);
        const actionCadHosur = e.target.action;

        try {
            const res = await fetch(actionCadHosur, {
                method: "POST",
                body: dataCadHosur,
            });
            console.log(res, "response");
            window.location = "/cad-course-hosur/thank-you.php";
        } catch (e) {
            console.error(e, "errr");
        } finally {
            isCadHosurSubmit = false;
        }
    });
</script>

<!-- cad chennai -->
<script>
    const CAD_CHN = document.getElementById("cadChennai");
    const PHONE_CHN = document.getElementById('phonecadChn');

    PHONE_CHN.addEventListener('input', function(e) {
        e.target.value = e.target.value.replace(/\D/g, '').slice(0, 12);
    });

    let isCadChnSubmit = false;

    CAD_CHN.addEventListener("submit", async function(e) {
        e.preventDefault();

        if (isCadChnSubmit) return; // Prevent multiple submissions
        isCadChnSubmit = true;

        document.querySelector(".btn--submit").classList.add("d-none");
        document.querySelector(".btn--submitting").classList.remove("d-none");

        const dataCadChn = new FormData(CAD_CHN);
        const actionCadChn = e.target.action;

        try {
            const res = await fetch(actionCadChn, {
                method: "POST",
                body: dataCadChn,
            });
            console.log(res, "response");
            window.location = "/cad-design-course-chennai/thank-you.php";
        } catch (e) {
            console.error(e, "errr");
        } finally {
            isCadChnSubmit = false;
        }
    });
</script>

<!-- cad coimbatore -->
<script>
    const CAD_CBE = document.getElementById("cadCbe");
    const PHONE_CBE = document.getElementById('phonecbe');

    PHONE_CBE.addEventListener('input', function(e) {
        e.target.value = e.target.value.replace(/\D/g, '').slice(0, 12);
    });

    let isCadCbeSubmit = false;

    CAD_CBE.addEventListener("submit", async function(e) {
        e.preventDefault();

        if (isCadCbeSubmit) return; // Prevent multiple submissions
        isCadCbeSubmit = true;

        document.querySelector(".btn--submit").classList.add("d-none");
        document.querySelector(".btn--submitting").classList.remove("d-none");

        const dataCadCbe = new FormData(CAD_CBE);
        const actionCadCbe = e.target.action;

        try {
            const res = await fetch(actionCadCbe, {
                method: "POST",
                body: dataCadCbe,
            });
            console.log(res, "response");
            window.location = "/cad-design-courses/thank-you.php";
        } catch (e) {
            console.error(e, "errr");
        } finally {
            isCadCbeSubmit = false;
        }
    });
</script>

<!-- embedded bangalore -->
<script>
    const EMD_BANGALORE = document.getElementById("emdBan");
    const PHONE_EMD_BANGALORE = document.getElementById('phoneEmdBan');

    PHONE_EMD_BANGALORE.addEventListener('input', function(e) {
        e.target.value = e.target.value.replace(/\D/g, '').slice(0, 12);
    });

    let isEmbBangSubmit = false;

    EMD_BANGALORE.addEventListener("submit", async function(e) {
        e.preventDefault();

        if (isCadCbeSubmit) return; // Prevent multiple submissions
        isCadCbeSubmit = true;

        document.querySelector(".btn--submit").classList.add("d-none");
        document.querySelector(".btn--submitting").classList.remove("d-none");

        const dataEmbBangalore = new FormData(EMD_BANGALORE);
        const actionEmbBangalore = e.target.action;

        try {
            const res = await fetch(actionEmbBangalore, {
                method: "POST",
                body: dataEmbBangalore,
            });
            console.log(res, "response");
            window.location = "/embedded-system-course-bangalore/thank-you.php";
        } catch (e) {
            console.error(e, "errr");
        } finally {
            isEmbBangSubmit = false;
        }
    });
</script>

<!-- embedded chennai -->
<script>
    const EMD_CHENNAI = document.getElementById("emdChn");
    const PHONE_EMD_CHENNAI = document.getElementById('phoneEmdChn');

    PHONE_EMD_CHENNAI.addEventListener('input', function(e) {
        e.target.value = e.target.value.replace(/\D/g, '').slice(0, 12);
    });

    let isEmbChnSubmit = false;

    EMD_CHENNAI.addEventListener("submit", async function(e) {
        e.preventDefault();

        if (isEmbChnSubmit) return; // Prevent multiple submissions
        isEmbChnSubmit = true;

        document.querySelector(".btn--submit").classList.add("d-none");
        document.querySelector(".btn--submitting").classList.remove("d-none");

        const dataEmbChn = new FormData(EMD_CHENNAI);
        const actionEmbChn = e.target.action;

        try {
            const res = await fetch(actionEmbChn, {
                method: "POST",
                body: dataEmbChn,
            });
            console.log(res, "response");
            window.location = "/embedded-system-course-chennai/thank-you.php";
        } catch (e) {
            console.error(e, "errr");
        } finally {
            isEmbChnSubmit = false;
        }
    });
</script>

<!-- embedded cbe -->
<script>
    const EMD_COIMBATORE = document.getElementById("emdCbe");
    const PHONE_EMD_COIMBATORE = document.getElementById('phoneEmdCbe');

    PHONE_EMD_COIMBATORE.addEventListener('input', function(e) {
        e.target.value = e.target.value.replace(/\D/g, '').slice(0, 12);
    });

    let isEmbCbeSubmit = false;

    EMD_COIMBATORE.addEventListener("submit", async function(e) {
        e.preventDefault();

        if (isEmbCbeSubmit) return; // Prevent multiple submissions
        isEmbCbeSubmit = true;

        document.querySelector(".btn--submit").classList.add("d-none");
        document.querySelector(".btn--submitting").classList.remove("d-none");

        const dataEmbCbe = new FormData(EMD_COIMBATORE);
        const actionEmbCbe = e.target.action;

        try {
            const res = await fetch(actionEmbCbe, {
                method: "POST",
                body: dataEmbCbe,
            });
            console.log(res, "response");
            window.location = "/embedded-course/thank-you.php";
        } catch (e) {
            console.error(e, "errr");
        } finally {
            isEmbCbeSubmit = false;
        }
    });
</script>

<!-- full stack bangalore -->
<script>
    const STACK_BANGALORE = document.getElementById("fullBan");
    const PHONE_STACK_BANGALORE = document.getElementById('phonefullBan');

    PHONE_STACK_BANGALORE.addEventListener('input', function(e) {
        e.target.value = e.target.value.replace(/\D/g, '').slice(0, 12);
    });

    let isFullBanSubmit = false;

    STACK_BANGALORE.addEventListener("submit", async function(e) {
        e.preventDefault();

        if (isFullBanSubmit) return; // Prevent multiple submissions
        isFullBanSubmit = true;

        document.querySelector(".btn--submit").classList.add("d-none");
        document.querySelector(".btn--submitting").classList.remove("d-none");

        const dataFullBan = new FormData(STACK_BANGALORE);
        const actionFullBan = e.target.action;

        try {
            const res = await fetch(actionFullBan, {
                method: "POST",
                body: dataFullBan,
            });
            console.log(res, "response");
            window.location = "/full-stack-developer-course-bangalore/thank-you.php";
        } catch (e) {
            console.error(e, "errr");
        } finally {
            isFullBanSubmit = false;
        }
    });
</script>

<!-- full stack chennai -->
<script>
    const STACK_CHENNAI = document.getElementById("fullChn");
    const PHONE_STACK_CHENNAI = document.getElementById('phonefullChn');

    PHONE_STACK_CHENNAI.addEventListener('input', function(e) {
        e.target.value = e.target.value.replace(/\D/g, '').slice(0, 12);
    });

    let isFullChnSubmit = false;

    STACK_CHENNAI.addEventListener("submit", async function(e) {
        e.preventDefault();

        if (isFullChnSubmit) return; // Prevent multiple submissions
        isFullChnSubmit = true;

        document.querySelector(".btn--submit").classList.add("d-none");
        document.querySelector(".btn--submitting").classList.remove("d-none");

        const dataFullChn = new FormData(STACK_CHENNAI);
        const actionFullChn = e.target.action;

        try {
            const res = await fetch(actionFullChn, {
                method: "POST",
                body: dataFullChn,
            });
            console.log(res, "response");
            window.location = "/full-stack-developer-course-chennai/thank-you.php";
        } catch (e) {
            console.error(e, "errr");
        } finally {
            isFullChnSubmit = false;
        }
    });
</script>

<!-- full stack coimbatore -->
<script>
    const STACK_COIMBATORE = document.getElementById("fullCbe");
    const PHONE_STACK_COIMBATORE = document.getElementById('phonefullCbe');

    PHONE_STACK_COIMBATORE.addEventListener('input', function(e) {
        e.target.value = e.target.value.replace(/\D/g, '').slice(0, 12);
    });

    let isFullCbeSubmit = false;

    STACK_COIMBATORE.addEventListener("submit", async function(e) {
        e.preventDefault();

        if (isFullCbeSubmit) return; // Prevent multiple submissions
        isFullCbeSubmit = true;

        document.querySelector(".btn--submit").classList.add("d-none");
        document.querySelector(".btn--submitting").classList.remove("d-none");

        const dataFullCbe = new FormData(STACK_COIMBATORE);
        const actionFullCbe = e.target.action;

        try {
            const res = await fetch(actionFullCbe, {
                method: "POST",
                body: dataFullCbe,
            });
            console.log(res, "response");
            window.location = "/full-stack-course/thank-you.php";
        } catch (e) {
            console.error(e, "errr");
        } finally {
            isFullCbeSubmit = false;
        }
    });
</script>

<!-- full stack hosur -->
<script>
    const STACK_HOSUR = document.getElementById("fullHsr");
    const PHONE_STACK_HOSUR = document.getElementById('phonefullHsr');

    PHONE_STACK_HOSUR.addEventListener('input', function(e) {
        e.target.value = e.target.value.replace(/\D/g, '').slice(0, 12);
    });

    let isFullHosurSubmit = false;

    STACK_HOSUR.addEventListener("submit", async function(e) {
        e.preventDefault();

        if (isFullHosurSubmit) return; // Prevent multiple submissions
        isFullHosurSubmit = true;

        document.querySelector(".btn--submit").classList.add("d-none");
        document.querySelector(".btn--submitting").classList.remove("d-none");

        const dataFullHsr = new FormData(STACK_HOSUR);
        const actionFullHsr = e.target.action;

        try {
            const res = await fetch(actionFullHsr, {
                method: "POST",
                body: dataFullHsr,
            });
            console.log(res, "response");
            window.location = "/full-stack-developer-course-hosur/thank-you.php";
        } catch (e) {
            console.error(e, "errr");
        } finally {
            isFullHosurSubmit = false;
        }
    });
</script>

<!-- plc hosur -->
<script>
    const PLC_HOSUR = document.getElementById("plcHsr");
    const PHONE_PLC_HOSUR = document.getElementById('phonePlcHsr');

    PHONE_PLC_HOSUR.addEventListener('input', function(e) {
        e.target.value = e.target.value.replace(/\D/g, '').slice(0, 12);
    });

    let isPlcHosurSubmit = false;

    PLC_HOSUR.addEventListener("submit", async function(e) {
        e.preventDefault();

        if (isPlcHosurSubmit) return; // Prevent multiple submissions
        isPlcHosurSubmit = true;

        document.querySelector(".btn--submit").classList.add("d-none");
        document.querySelector(".btn--submitting").classList.remove("d-none");

        const dataPlcHsr = new FormData(PLC_HOSUR);
        const actionPlcHsr = e.target.action;

        try {
            const res = await fetch(actionPlcHsr, {
                method: "POST",
                body: dataPlcHsr,
            });
            console.log(res, "response");
            window.location = "/plc-course-hosur/thank-you.php";
        } catch (e) {
            console.error(e, "errr");
        } finally {
            isPlcHosurSubmit = false;
        }
    });
</script>

<!-- ui ux chennai -->
<script>
    const UI_CHENNAI = document.getElementById("uiChn");
    const PHONE_UI_CHENNAI = document.getElementById('phoneuiChn');

    PHONE_UI_CHENNAI.addEventListener('input', function(e) {
        e.target.value = e.target.value.replace(/\D/g, '').slice(0, 12);
    });

    let isUiChnSubmit = false;

    UI_CHENNAI.addEventListener("submit", async function(e) {
        e.preventDefault();

        if (isUiChnSubmit) return; // Prevent multiple submissions
        isUiChnSubmit = true;

        document.querySelector(".btn--submit").classList.add("d-none");
        document.querySelector(".btn--submitting").classList.remove("d-none");

        const dataUiChn = new FormData(UI_CHENNAI);
        const actionUiChn = e.target.action;

        try {
            const res = await fetch(actionUiChn, {
                method: "POST",
                body: dataUiChn,
            });
            console.log(res, "response");
            window.location = "/ui-ux-design-course-chennai/thank-you.php";
        } catch (e) {
            console.error(e, "errr");
        } finally {
            isUiChnSubmit = false;
        }
    });
</script>

<!-- python chennai -->
<script>
    const PYTHON_CHENNAI = document.getElementById("pythonChn");
    const PHONE_PYTHON_CHENNAI = document.getElementById('phonepythonChn');

    PHONE_PYTHON_CHENNAI.addEventListener('input', function(e) {
        e.target.value = e.target.value.replace(/\D/g, '').slice(0, 12);
    });

    let isSubmit = false;

    PYTHON_CHENNAI.addEventListener("submit", async function(e) {
        e.preventDefault();

        if (isSubmit) return; // Prevent multiple submissions
        isSubmit = true;

        document.querySelector(".btn--submit").classList.add("d-none");
        document.querySelector(".btn--submitting").classList.remove("d-none");

        const dataPythonChn = new FormData(PYTHON_CHENNAI);
        const actionPythonChn = e.target.action;

        try {
            const res = await fetch(actionPythonChn, {
                method: "POST",
                body: dataPythonChn,
            });
            console.log(res, "response");
            window.location = "/python-training-institute-chennai/thank-you.php";
        } catch (e) {
            console.error(e, "errr");
        } finally {
            isSubmitting = false;
        }
    });
</script>


<script>
    var swiper = new Swiper(".mySwiper", {
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
        },
        autoplay: {
            delay: 1500,
            disableOnInteraction: false,
        },
        loop: true,
    });
</script>