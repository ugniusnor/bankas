

function manageExtension () {
console.log("labas2222");
    if(document.getElementById("manage_acc")) {
    const manageBtn = document.querySelectorAll("#manage_acc");
    const manageExt = document.querySelectorAll(".manage-extension");
    let count=[];
    manageBtn.forEach((button,index) => {
        count.push(0);
        button.addEventListener('click',()=>{
           
            if (count[index]===0) {
                manageExt[index].style.display="block";        
                setTimeout(() => {
                    manageExt[index].style.height="250px";
                    
                }, 4);
                count[index]++;
            }
            else if (count[index]===1) {
                manageExt[index].style.height="0";
                setTimeout(() => {
                    manageExt[index].style.display="none";
                 
                    
                }, 800);
             
                count[index]--;    
            }
        })
    });

    }


}

export default manageExtension;