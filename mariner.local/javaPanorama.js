document.addEventListener('DOMContentLoaded', function() {
    const panorama = document.querySelector('.mainPanorama');
    const buttons = document.querySelectorAll('.mainPanorama button');
    
    buttons.forEach(button => {
        button.addEventListener('click', function() {
            // Убираем active у всех кнопок
            buttons.forEach(btn => btn.classList.remove('active'));
            
            // Добавляем active текущей кнопке
            this.classList.add('active');
            
            // Меняем фон в зависимости от класса кнопки
            if (this.classList.contains('day-btn')) {
                panorama.style.backgroundImage = 'url(images/панорамаЛендинг.png)';
            } else if (this.classList.contains('night-btn')) {
                panorama.style.backgroundImage = 'url(images/панорамаЛендингНочь.png)';
            }
        });
    });
    
    // Активируем кнопку дня по умолчанию
    const dayButton = document.querySelector('.day-btn');
    if (dayButton) {
        dayButton.classList.add('active');
    }
});