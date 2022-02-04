const openBar = document.querySelector(".open");
const leftBar = document.querySelector(".leftbar");

openBar.addEventListener('click', function() {
    if (leftBar.style.display === 'none') {
        leftBar.style.display = 'block';
        openBar.innerHTML = 'Hide';
        }  else{
            leftBar.style.display = 'none';
            openBar.innerHTML = 'Open'
    }
})








