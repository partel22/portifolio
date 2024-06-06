// Toogle menu
function toogleMenu(){
    let toogle = document.querySelector('.toogle');
    let navigation = document.querySelector('.navigation');
    let main = document.querySelector('.main');
    toogle.classList.toggle('active');
    navigation.classList.toggle('active');
    main.classList.toggle('active');
}
    // JavaScript for toggling visibility of additional content
    function toggleReadMore() {
      var additionalContent = document.getElementById('additionalContent');
      var readMoreBtn = document.querySelector('.read-more-btn');

      if (additionalContent.style.display === 'none') {
        additionalContent.style.display = 'block';
        readMoreBtn.textContent = 'Read Less';
      } else {
        additionalContent.style.display = 'none';
        readMoreBtn.textContent = 'Read More';
      }
    }

// MultiButton
const buttons = document.querySelectorAll(".btn-group__item");
buttons.forEach(button => {
  button.addEventListener("click",() => {
    // do some action according to button
    
    // show success feedback
    button.classList.add("btn-group__item--active");
    setTimeout(() => {
      button.classList.remove("btn-group__item--active");
    },600)
  })
})


document.getElementById('add').addEventListener('click', function() {
            document.querySelector('.bg-modal-add').style.display = 'flex';
        })

        document.querySelector('.close').addEventListener('click', function() {
            document.querySelector('.bg-modal-add').style.display = 'none';
        })

document.getElementById('edit').addEventListener('click', function() {
            document.querySelector('.bg-modal-edit').style.display = 'flex';
        })

        document.querySelector('.close').addEventListener('click', function() {
            document.querySelector('.bg-modal-edit').style.display = 'none';
        })