const btn = document.getElementById('btn');
const txt = document.getElementById('txt');
btn.addEventListener('click',function(){
    const choice = window.confirm('CLICK COMPLETE')
    if(choice){
        txt.textContent = 'OKがクリックされました!';
    }else{
        txt.textContent = 'キャンセルがクリックされました!';
    }
})