class CustomSlider {
    constructor(selector, options = {}) {
        this.settings = Object.assign(
            {
                autoplay: false, // Ativar autoplay
                autoplaySpeed: 3000, // Intervalo entre slides (em ms)
                navigationArrows: true, // Mostrar setas de navegação
                pagination: true, // Mostrar paginação
                draggable: true, // Permitir arrastar
                responsive: true, // Responsividade
                activeClass: 'active', // Classe para o slide ativo
            },
            options
        );

        this.slider = document.querySelector(selector);
        if (!this.slider) return;

        this.slides = Array.from(this.slider.children);
        this.totalSlides = this.slides.length;
        this.currentIndex = 0;

        this.init();
    }

    init() {
        this.buildSlider();
        this.addEventListeners();

        if (this.settings.autoplay) {
            this.startAutoplay();
        }
    }

    buildSlider() {
        // Adicionar classe ao contêiner principal
        this.slider.classList.add('custom-slider');

        // Envolver os slides em um wrapper
        const wrapper = document.createElement('div');
        wrapper.classList.add('slider-wrapper');
        this.slider.prepend(wrapper);
        this.slides.forEach((slide) => wrapper.appendChild(slide));

        // Adicionar setas de navegação, se habilitadas
        if (this.settings.navigationArrows) {
            this.prevButton =
                document.querySelector('.custom-prev') || this.createDefaultButton('prev', '←');
            this.nextButton =
                document.querySelector('.custom-next') || this.createDefaultButton('next', '→');

            if (!document.querySelector('.custom-prev')) this.slider.append(this.prevButton);
            if (!document.querySelector('.custom-next')) this.slider.append(this.nextButton);
        }

        // Adicionar paginação, se habilitada
        if (this.settings.pagination) {
            this.paginationContainer =
                document.querySelector('.custom-pagination') || this.createDefaultPagination();

            if (!document.querySelector('.custom-pagination')) this.slider.append(this.paginationContainer);

            this.updatePagination();
        }

        // Aplicar estilos iniciais
        this.slides.forEach((slide) => slide.classList.remove(this.settings.activeClass));
        this.slides[this.currentIndex].classList.add(this.settings.activeClass);
    }

    createDefaultButton(type, label) {
        const button = document.createElement('button');
        button.classList.add('custom-arrow', type === 'prev' ? 'custom-prev' : 'custom-next');
        button.textContent = label;
        return button;
    }

    createDefaultPagination() {
        const pagination = document.createElement('div');
        pagination.classList.add('custom-pagination');

        for (let i = 0; i < this.totalSlides; i++) {
            const dot = document.createElement('span');
            dot.setAttribute('data-index', i);
            pagination.appendChild(dot);
        }
        return pagination;
    }

    updatePagination() {
        const dots = this.paginationContainer.querySelectorAll('span');
        dots.forEach((dot, index) => dot.classList.toggle('active', index === this.currentIndex));
    }

    changeSlide(index) {
        if (index < 0) index = this.totalSlides - 1;
        if (index >= this.totalSlides) index = 0;

        this.slides[this.currentIndex].classList.remove(this.settings.activeClass);
        this.slides[index].classList.add(this.settings.activeClass);
        this.currentIndex = index;

        if (this.settings.pagination) {
            this.updatePagination();
        }
    }

    addEventListeners() {
        // Eventos de navegação
        if (this.settings.navigationArrows) {
        this.prevButton.addEventListener('click', () => this.changeSlide(this.currentIndex - 1));
        this.nextButton.addEventListener('click', () => this.changeSlide(this.currentIndex + 1));
    }

    // Eventos de paginação
    if (this.settings.pagination) {
    this.paginationContainer.addEventListener('click', (event) => {
    const target = event.target.closest('span');
    if (target) {
    const index = parseInt(target.getAttribute('data-index'), 10);
    this.changeSlide(index);
    }
    });
    }

    // Arrastar e soltar
    if (this.settings.draggable) {
    this.enableDragAndDrop();
    }
    }

    enableDragAndDrop() {
        const sliderWrapper = this.slider.querySelector('.slider-wrapper');
        let isDragging = false;
        let startX = 0;
        let currentX = 0;
        let translateX = 0;

        sliderWrapper.addEventListener('mousedown', (e) => this.startDrag(e));
        sliderWrapper.addEventListener('touchstart', (e) => this.startDrag(e.touches[0]));

        sliderWrapper.addEventListener('mousemove', (e) => this.drag(e));
        sliderWrapper.addEventListener('touchmove', (e) => this.drag(e.touches[0]));

        sliderWrapper.addEventListener('mouseup', () => this.endDrag());
        sliderWrapper.addEventListener('touchend', () => this.endDrag());

        sliderWrapper.addEventListener('mouseleave', () => this.endDrag());

        this.startDrag = (e) => {
            isDragging = true;
            startX = e.clientX || e.pageX;
            currentX = startX;
            translateX = this.getTranslateX(sliderWrapper);
        };

        this.drag = (e) => {
            if (!isDragging) return;
            currentX = e.clientX || e.pageX;
            const deltaX = currentX - startX;
            sliderWrapper.style.transform = `translateX(${translateX + deltaX}px)`;
        };

        this.endDrag = () => {
            if (!isDragging) return;
            isDragging = false;

            const deltaX = currentX - startX;
            const threshold = 50;

            if (deltaX > threshold) {
                this.changeSlide(this.currentIndex - 1); // Voltar
            }
            else if (deltaX < -threshold) {
                this.changeSlide(this.currentIndex + 1); // Avançar
            }
            else {
                sliderWrapper.style.transition = 'transform 0.3s ease';
                sliderWrapper.style.transform = `translateX(0px)`;
                setTimeout(() => {
                    sliderWrapper.style.transition = '';
                }, 300);
            }
        };
    }

    getTranslateX(element) {
        const transform = window.getComputedStyle(element).transform;
        if (transform === 'none') return 0;

        const matrix = transform.match(/^matrix\((.+)\)$/)[1].split(', ');
        return parseFloat(matrix[4]);
    }

    startAutoplay() {
        this.autoplayInterval = setInterval(() => {
            this.changeSlide(this.currentIndex + 1);
        }, this.settings.autoplaySpeed);
    }

    stopAutoplay() {
        clearInterval(this.autoplayInterval);
    }
}