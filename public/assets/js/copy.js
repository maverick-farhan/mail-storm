const codeDiv = document.querySelector('.script');
const copyBtn = document.querySelector('.copy');

const copy = ()=>{
copyBtn.addEventListener('click',(e)=>{
    navigator.clipboard.writeText(codeDiv.innerText)
   copyBtn.textContent = "copied"; 
})
}
copy()