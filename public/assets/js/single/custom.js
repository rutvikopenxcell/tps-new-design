$(document).ready(function() {
    $('.singleselect').select2();
}); 

function changeMarketType(t){
    if(t.value!=''){
        event.preventDefault();
        document.getElementById('select-market-for-single-question').submit();
    }
}