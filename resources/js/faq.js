document.addEventListener('DOMContentLoaded', function () {
    const faqItems = document.querySelectorAll('.faq-item h2');

    faqItems.forEach(item => {
        item.addEventListener('click', function () {
            const content = item.nextElementSibling;
            content.classList.toggle('hidden');
            const isHidden = content.classList.contains('hidden');
            item.classList.toggle('font-bold', !isHidden);
        });
    });
});
