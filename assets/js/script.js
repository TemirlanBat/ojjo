window.addEventListener("DOMContentLoaded", () => {
    const tabsParent = document.querySelector('.catalog__tabs'),
        tabs = document.querySelectorAll('.catalog__tab'),
        tabsContent = document.querySelectorAll('.catalog__tabcontent');

    //Создаем функцию скрывающую табы
    function hideTabContent() {
        tabsContent.forEach(item => {
            item.classList.add('hide');
            item.classList.remove('show');
            item.classList.remove('fade');
        });
        tabs.forEach(item => {
            item.classList.remove('catalog__tab_active');
        });
    }

    //Создаем функцию показывающую табы
    function showTabContent(i = 0) {
        tabsContent[i].classList.remove('hide');
        tabsContent[i].classList.add('show', 'fade');
        tabs[i].classList.add('catalog__tab_active');
    }

    hideTabContent();
    showTabContent();

    tabsParent.addEventListener('click', (event) => {
        const target = event.target;
        if (target && target.classList.contains('catalog__tab')) {
            tabs.forEach((item, i) => {
                if (target === item) {
                    hideTabContent();
                    showTabContent(i);
                }
            });
        }
    });
}); 