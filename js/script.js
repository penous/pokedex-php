const leftBtn = document.getElementById('left-btn');
const rightBar = document.querySelector('.right-bar');

leftBtn.addEventListener('click', () => {
  rightBar.classList.toggle('slider');
  console.log(rightBar.classList);
});
