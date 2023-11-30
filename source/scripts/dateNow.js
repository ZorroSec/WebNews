function dateNow(){
    const today = new Date()
    const hour = today.getHours()
    const minu = today.getMinutes()
    const seco = today.getSeconds()
    const m = checkTime(minu)
    const s = checkTime(seco)
    const dateNow = document.getElementById('timeNow')
    dateNow.innerHTML=`<h3>${hour}:${m}:${s}</h3>`
    t=setTimeout('dateNow()',500)
}
function checkTime(i){
    if(i<10){
        i="0"+i
    }
    return i
}