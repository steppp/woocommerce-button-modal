window.onload = () => {
    const surveyModal = document.getElementById('srand-div-survey-modal');

    document.getElementById('srand-btn-start-survey')
        .addEventListener('mouseup', () => {
                surveyModal.style.display = 'block';

                setTimeout(() => {
                        surveyModal.style.display = 'none';
                        }, 3000);
                }, false);
};
