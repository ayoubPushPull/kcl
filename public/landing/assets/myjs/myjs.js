/*--------------services_centre_d'appel--------------------------*/
// Wait for the page to load before revealing the text and triggering typing effect
window.addEventListener('load', () => {
    const typingText = document.querySelector('.typing-text');
    typingText.classList.remove('hidden');

    // Get the content of the text to type
    const textToType = typingText.textContent;
    typingText.textContent = '';

    // Function to simulate typing effect
    let index = 0;
    const charactersPerFrame = 2; // Adjust the number of characters typed per frame
    const delay = 0; // Adjust the delay between frames in milliseconds

    function typeText() {
      for (let i = 0; i < charactersPerFrame; i++) {
        if (index < textToType.length) {
          typingText.textContent += textToType.charAt(index);
          index++;
        }
      }

      if (index < textToType.length) {
        setTimeout(typeText, delay);
      }
    }

    // Start the typing effect
    typeText();
  });






/*--------------END services_centre_d'appel--------------------------*/
