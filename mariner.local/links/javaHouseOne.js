document.addEventListener('DOMContentLoaded', function() {
class Carousel {
        constructor() {
            this.container = document.querySelector('.mainFour');
            if (!this.container) return;
            
            this.track = this.container.querySelector('.mainFourCarousel');
            this.indicators = this.container.querySelectorAll('.indicator');
            this.slides = this.container.querySelectorAll('.mainFourSlide');
            this.texts = this.container.querySelectorAll('.mainFourSlideText');

            this.currentIndex = 0;
            this.totalSlides = this.slides.length;
            this.autoPlayInterval = null;
            
            this.init();
        }
        
        init() {
            this.indicators.forEach(indicator => {
                indicator.addEventListener('click', (e) => {
                    const index = parseInt(e.target.dataset.index);
                    this.goToSlide(index);
                });
            });
            
            document.addEventListener('keydown', (e) => {
                if (e.key === 'ArrowLeft') {
                    this.prevSlide();
                } else if (e.key === 'ArrowRight') {
                    this.nextSlide();
                }
            });
        }
        
        goToSlide(index) {
            if (this.texts[this.currentIndex]) {
                this.texts[this.currentIndex].classList.remove('active');
            }
            this.currentIndex = index;
            
            const translateX = -index * 100;
            if (this.track) {
                this.track.style.transform = `translateX(${translateX}vw)`;
            }
            
            if (this.texts[index]) {
                this.texts[index].classList.add('active');
            }
            
            this.updateIndicators();
        }
        
        updateIndicators() {
            this.indicators.forEach((indicator, index) => {
                if (index === this.currentIndex) {
                    indicator.classList.add('active');
                } else {
                    indicator.classList.remove('active');
                }
            });
        }
        
        nextSlide() {
            const nextIndex = (this.currentIndex + 1) % this.totalSlides;
            this.goToSlide(nextIndex);
        }
        prevSlide() {
            const prevIndex = (this.currentIndex - 1 + this.totalSlides) % this.totalSlides;
            this.goToSlide(prevIndex);
        }
    }
    new Carousel();
});

const openBtn = document.querySelector(".parameters");
const modal = document.getElementById("modal");
const closeBtn = document.getElementById("closeModal");

openBtn.addEventListener("click", (e) => {
    e.preventDefault();
    modal.classList.add("active");
});

closeBtn.addEventListener("click", () => {
    modal.classList.remove("active");
});

