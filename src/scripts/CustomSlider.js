class CustomSlider {
constructor(selector, options = {}) {
    // Configurações padrão
    this.settings = Object.assign(
        {
            animation: 'slide', // 'slide' ou 'fade'
            navigationArrows: true,
            pagination: true,
            arrowClass: 'slider-arrow',
            btnPrevClass: 'slider-prev',
            btnNextClass: 'slider-next',
            paginationClass: 'slider-pagination',
            responsive: true,
            transitionTiming: {
                before: 300, // Tempo antes da transição (em ms)
                during: 500, // Duração da transição (em ms)
                after: 200, // Tempo após a transição (em ms)
            },
            transitionClasses: {
                before: 'transition-before', // Classe antes da transição
                during: 'transition-during', // Classe durante a transição
                after: 'transition-after', // Classe após a transição
            },
            activeClass: 'active', // Classe para o slide ativo
        },
        options
    );

    // Selecionar o elemento principal
    this.slider = document.querySelector(selector);
    if (!this.slider) return;

    // Inicializar o slider
    this.init();
}

init() {
    // Capturar os slides
    this.slides = Array.from(this.slider.children);
    this.totalSlides = this.slides.length;
    this.currentIndex = 0;

    // Construir a estrutura do slider
    this.buildSlider();

    // Adicionar eventos de navegação
    this.addEventListeners();

    // Aplicar estilos iniciais
    this.slides.forEach((slide) => slide.classList.remove(this.settings.activeClass));
    this.slides[this.currentIndex].classList.add(this.settings.activeClass);

    // Ativar drag-and-drop e gestos no mobile
    this.enableDragAndDrop();
}

buildSlider() {
    // Adicionar classe ao contêiner principal
    this.slider.classList.add('custom-slider');

    // Envolver os slides em um contêiner interno
    const wrapper = document.createElement('div');
    wrapper.classList.add('slider-wrapper');
    this.slider.prepend(wrapper);
    this.slides.forEach((slide) => wrapper.appendChild(slide));

    // Adicionar setas de navegação, se habilitadas
    if (this.settings.navigationArrows) {
        this.addNavigationButtons();
    }

    // Adicionar paginação, se habilitada
    if (this.settings.pagination) {
        this.addPagination();
    }

    // Atualizar a paginação ativa
    this.updatePagination();
}

addNavigationButtons() {
    // Procurar botões prev e next no DOM com base nas classes fornecidas
    this.prevButton =
    document.querySelector(`.${this.settings.btnPrevClass}`) ||
    this.createDefaultButton('prev', '←');

    this.nextButton =
    document.querySelector(`.${this.settings.btnNextClass}`) ||
    this.createDefaultButton('next', '→');

    // Adicionar os botões ao slider, se forem criados por padrão
    if (!document.querySelector(`.${this.settings.btnPrevClass}`)) {
        this.slider.append(this.prevButton);
    }
    if (!document.querySelector(`.${this.settings.btnNextClass}`)) {
        this.slider.append(this.nextButton);
    }
}

createDefaultButton(type, label) {
    const button = document.createElement('button');
    button.classList.add(this.settings.arrowClass, type === 'prev' ? 'prev' : 'next');
    button.textContent = label;
    return button;
}

addPagination() {
    // Procurar a paginação no DOM com base na classe fornecida
    this.paginationContainer =
    document.querySelector(`.${this.settings.paginationClass}`) ||
    this.createDefaultPagination();

    // Criar os pontos de paginação
    for (let i = 0; i < this.totalSlides; i++) {
        const dot = document.createElement('span');
        dot.setAttribute('data-index', i);
        this.paginationContainer.appendChild(dot);
    }

    // Adicionar a paginação ao slider, se for criada por padrão
    if (!document.querySelector(`.${this.settings.paginationClass}`)) {
        this.slider.append(this.paginationContainer);
    }
}

createDefaultPagination() {
    const pagination = document.createElement('div');
    pagination.classList.add(this.settings.paginationClass);
    return pagination;
}

updatePagination() {
    if (this.settings.pagination) {
        const paginationItems = this.paginationContainer.querySelectorAll('span');
        paginationItems.forEach((dot, index) =>
            dot.classList.toggle('active', index === this.currentIndex)
        );
    }
}

    changeSlide(index) {
    if (index < 0) index = this.totalSlides - 1;
    if (index >= this.totalSlides) index = 0;

    const currentSlide = this.slides[this.currentIndex];
    const nextSlide = this.slides[index];

    // Função para aplicar as fases da transição usando requestAnimationFrame
    const applyTransition = (slide, phase, duration) => {
    return new Promise((resolve) => {
        let startTime = null;

        const step = (timestamp) => {
            if (!startTime) startTime = timestamp; // Inicializar o tempo inicial
            const elapsed = timestamp - startTime;

            // Aplicar a classe de transição
            slide.classList.add(phase);

            // Verificar se o tempo da fase foi concluído
            if (elapsed < duration) {
                requestAnimationFrame(step); // Continuar a animação
            } else {
                slide.classList.remove(phase); // Remover a classe após o término
                resolve();
            }
        };

        requestAnimationFrame(step);
    });
    };

    // Executar as fases da transição em sequência
    applyTransition(currentSlide, this.settings.transitionClasses.before, this.settings.transitionTiming.before)
    .then(() => {
        // Durante a transição
        return applyTransition(currentSlide, this.settings.transitionClasses.during, this.settings.transitionTiming.during);
    })
    .then(() => {
        // Remover a classe 'active' do slide atual
        currentSlide.classList.remove(this.settings.activeClass);

        // Adicionar a classe 'active' ao próximo slide
        nextSlide.classList.add(this.settings.activeClass);

        // Aplicar a transição "during" ao próximo slide
        return applyTransition(nextSlide, this.settings.transitionClasses.during, this.settings.transitionTiming.during);
    })
    .then(() => {
        // Após a transição
        return applyTransition(nextSlide, this.settings.transitionClasses.after, this.settings.transitionTiming.after);
    })
    .then(() => {
        // Atualizar o índice atual e a paginação
        this.currentIndex = index;
        this.updatePagination();
    });
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
}

enableDragAndDrop() {
const sliderWrapper = this.slider.querySelector('.slider-wrapper');
let isDragging = false;
let startX = 0;
let currentX = 0;
let translateX = 0;

// Adicionar eventos de toque/arrasto
sliderWrapper.addEventListener('mousedown', (e) => this.startDrag(e));
sliderWrapper.addEventListener('touchstart', (e) => this.startDrag(e.touches[0]));

sliderWrapper.addEventListener('mousemove', (e) => this.drag(e));
sliderWrapper.addEventListener('touchmove', (e) => this.drag(e.touches[0]));

sliderWrapper.addEventListener('mouseup', (e) => this.endDrag());
sliderWrapper.addEventListener('touchend', (e) => this.endDrag());

sliderWrapper.addEventListener('mouseleave', (e) => this.endDrag());

// Métodos para manipular o arrasto
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
const threshold = 50; // Limite mínimo para avançar/voltar

if (deltaX > threshold) {
this.changeSlide(this.currentIndex - 1); // Voltar
} else if (deltaX < -threshold) {
this.changeSlide(this.currentIndex + 1); // Avançar
} else {
// Retornar à posição original
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
}