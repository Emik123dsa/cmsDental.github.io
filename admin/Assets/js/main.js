(function() {

const checkBox = document.getElementById('check');
const labelBox = document.querySelector('.form_wrap_checkbox_label');
checkBox.addEventListener('click', function() {
    labelBox.classList.toggle('form_wrap_checkbox_label_active');
});

const inputValue = document.querySelectorAll('.form_wrap_p');

window.addEventListener('click', function(e) {
    inputValue.forEach(function(element) {
       
            
                if (element.contains(e.target)) {
                    element.classList.add('form_wrap_p_active');
                    element.style.color = "#3498db";
                    
                } else {
                    element.style.color = "#bdc3c7";
                    element.classList.remove('form_wrap_p_active');
                    //elementI.classList.remove('fa_active');
                    
                }
    });
})





}).call(this);