document.getElementById("btn").addEventListener("submit", function(e) {
    e.preventDefault();
    document.getElementsByClassName("table_result")[0].classList.add("show");
});
console.log('HELLO WORLG');

document.getElementById("btn").addEventListener("submit", function() {
    setTimeout(function() {
        document.getElementsByClassName("table_result")[0].classList.remove("show");
        console.log("Bingo");
    }, 5000)
});

// // Hide table after some seconds
// function hideTable(hide) {
//     if (hide == null) return
//     setTimeout(function(){
//         hide.classList.remove('show');
//         console.log("Bingo");
//     }, 5000)
// }

