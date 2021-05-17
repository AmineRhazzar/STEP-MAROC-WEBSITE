const form = document.getElementById("contact-form");

const showErrorMessage = () => {
    var msgContainer = document.querySelector(".msg-container");
    var newElement = document.createElement("div");
    newElement.classList.add("alert");
    newElement.classList.add("alert-danger");
    var text = document.createTextNode("Une erreur a survenu. Veuillez réessayer.");
    newElement.appendChild(text);
    msgContainer.appendChild(newElement)
}

const showSuccessMessage = () => {
    var msgContainer = document.querySelector(".msg-container");
    var newElement = document.createElement("div");
    newElement.classList.add("alert");
    newElement.classList.add("alert-success");
    var text = document.createTextNode("Votre message a bien été envoyé.");
    newElement.appendChild(text);
    msgContainer.appendChild(newElement)
}

const showLoader = () => {
    var msgContainer = document.querySelector(".msg-container");
    var Loader = document.createElement("img");
    Loader.src = "../bars.svg"
    Loader.classList.add("loader");
    msgContainer.appendChild(Loader);
}

const hideLoader = () => {
    document.querySelector(".msg-container").innerHTML = '';

}

form.addEventListener("submit", (e) => {
    e.preventDefault();
    

    const email = document.getElementById("inputEmail").value;
    const fullName = document.getElementById("inputName").value;
    const subject = document.getElementById("inputSubject").value;
    const textMsg = document.getElementById("inputMessage").value;

    var emailComponents = {
        fullName,
        email,
        subject,
        textMsg
    }; 
    showLoader();
     
    fetch('https://nodemailerforstep.herokuapp.com/',{
        method:"POST",
        body: JSON.stringify(emailComponents)
    }).then(res => res.status)
        .then(status => {
            hideLoader();
            if(status===200){
                showSuccessMessage();
            }else{  
                showErrorMessage();
            }
            setTimeout(() => {
                document.querySelector(".msg-container").innerHTML = '';
            }, 1500)
        })
});
