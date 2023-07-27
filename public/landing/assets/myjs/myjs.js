const readMoreLink = document.querySelector('.read-more');
const limitedText = document.querySelector('.limited-text');
const fullText = document.querySelector('.full-text');

readMoreLink.addEventListener('click', function (e) {
  e.preventDefault();
  if (readMoreLink.textContent === 'plus') {
    limitedText.style.display = 'none';
    fullText.style.display = 'inline';
    readMoreLink.textContent = 'moins';
  } else {
    limitedText.style.display = 'inline';
    fullText.style.display = 'none';
    readMoreLink.textContent = 'plus';
  }
});
