document.addEventListener('DOMContentLoaded', function() {
    let button = document.getElementById('chooseApartment');
    let mainOne = document.querySelector('.mainOne');
    let mainTwo = document.querySelector('.mainTwo');
    
    // Вычисляем высоту mainOne
    let mainOneHeight = mainOne.offsetHeight;
    
    // Флаг для отслеживания состояния
    let isFixed = false;
    let isAnimating = false;
    
    function updateButtonPosition() {
        if (isAnimating) return;
        
        let scrollY = window.scrollY;
        let mainTwoTop = mainTwo.offsetTop;
        
        // Если проскроллили начало mainTwo и кнопка еще не зафиксирована
        if (scrollY > mainTwoTop - 100 && !isFixed) {
            isAnimating = true;
            isFixed = true;
            
            // Добавляем класс для анимации фиксации
            button.classList.remove('original');
            button.classList.add('fixed');
            
            // Сбрасываем флаг анимации после завершения
            setTimeout(() => {
                isAnimating = false;
            }, 500);
        }
        // Если вернулись в mainOne и кнопка зафиксирована
        else if (scrollY < mainOneHeight - 100 && isFixed) {
            isAnimating = true;
            isFixed = false;
            
            // Добавляем класс для возврата в исходное положение
            button.classList.remove('fixed');
            button.classList.add('original');
            
            // Сбрасываем флаг анимации после завершения
            setTimeout(() => {
                button.classList.remove('original');
                isAnimating = false;
            }, 500);
        }
    }
    window.addEventListener('scroll', updateButtonPosition);
    updateButtonPosition();
});