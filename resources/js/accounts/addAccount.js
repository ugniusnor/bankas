function addAccount () {
    if (document.querySelector("#addClient")) {

        const button = document.querySelector("#addClient");
        const closeBtn=document.querySelector(".close-table")
        const submitBtn=document.querySelector("#create_acc_btn");
        const inputs = document.querySelectorAll(".create-input");
        const reg=/^[A-Za-z]+$/;
        button.addEventListener('click',()=>{
            console.log(submitBtn);
            document.querySelector(".create-account-table").style.display="flex";
        })
        closeBtn.addEventListener('click',()=>{
            document.querySelector(".create-account-table").style.display="none";
            inputs.forEach(input => {
                input.classList.remove('not-valid');
                input.classList.remove('err')
    
            });
        })
    }


    // submitBtn.addEventListener('click',(e)=>{
        
    //     inputs.forEach(input => {
    //         if (input.value.length<3 || input.value.length>100) {
    //             e.preventDefault();
    //             input.classList.add('not-valid')
    //             input.classList.add('err')
    //             return;
    //         }
    //     });
    //     if (!inputs[0].value.match(reg) || !inputs[1].value.match(reg)  ) {
    //         e.preventDefault();

    //         console.log(inputs[0].value);
    //         return;
    //     }
    //     inputs.forEach(element => {
    //         element.value="";
    //     });
    // })

}
export default addAccount;