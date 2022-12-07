

const submit_button = document.getElementById("sub_but");
// form that submits review
const reviewForm = document.forms["review"];
let valid_form = false; 
submit_button.addEventListener("click", (e) => {
    console.log("The button was pushed"); 

})

const sub_but = () =>  {
    console.log("The button is pushed"); 
}


function validateForm() {
    
    
    if (reviewForm.uname.value == "") {
        return false; 
        }
        

        

    else if (reviewForm.email.value == "") {
        return false;
    
    }


    else if (reviewForm.feedback.value == "") {
        return false; 
    }

    return true; 



}

reviewForm.addEventListener("submit", (e) => {
    valid_form = validateForm()
    const ele = document.getElementsByClassName("field_error")
    if (!valid_form) {
        for(let i = 0; i < ele.length; i+=1) {
            ele[i].innerHTML = "All fields must be full";
            ele[i].style.backgroundColor = "red";
        }
        e.preventDefault()
     }
})



