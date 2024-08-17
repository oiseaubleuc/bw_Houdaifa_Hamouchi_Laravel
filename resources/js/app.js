import './bootstrap';
import '../css/app.css';

// JavaScript code starts here
document.addEventListener('DOMContentLoaded', function () {
    const languageButton = document.getElementById('languageMenuButton');
    const languageDropdown = document.getElementById('languageDropdown');

    if (languageButton && languageDropdown) {
        languageButton.addEventListener('click', function () {
            languageDropdown.classList.toggle('hidden');
        });

        document.addEventListener('click', function (e) {
            if (!languageButton.contains(e.target) && !languageDropdown.contains(e.target)) {
                languageDropdown.classList.add('hidden');
            }
        });
    }
});
