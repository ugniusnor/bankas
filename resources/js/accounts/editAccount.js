function editAccount() {
const editBtn= document.querySelectorAll('.edit');
const forms =document.querySelectorAll('#update_funds')
editBtn.forEach((item,i) => {
    item.addEventListener('click',()=>{
        forms[i].style.display="block";
    })
});

}
export default editAccount;