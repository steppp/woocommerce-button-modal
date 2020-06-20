window.onload = () => {
    const surveyModal = document.getElementById('srand-div-survey-modal');
    const startSurveyButton = document.getElementById('srand-btn-start-survey')

    if (startSurveyButton) {
        startSurveyButton.addEventListener('mouseup', () => {
                surveyModal.style.display = 'block';

                setTimeout(() => {
                        surveyModal.style.display = 'none';
                        }, 3000);
                }, false);
    }
};
