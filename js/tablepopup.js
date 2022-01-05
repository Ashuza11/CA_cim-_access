const openStudentTable = document.querySelectorAll('[data-student-target]');
const openVisitorTable = document.querySelectorAll('[data-visitor-target]');

// Students
openStudentTable.forEach(button => {
    button.addEventListener('click', () => {
        document.getElementsByClassName("table_result")[0].classList.add("show");
    })
})

openStudentTable.forEach(button => {
    button.addEventListener('click', () => {
        setTimeout(function() {
            document.getElementsByClassName("table_result")[0].classList.remove("show");
            console.log("Bingo");
        }, 5000)
    })
})

console.log('HELLO WORLG');

// Visitor
openVisitorTable.forEach(button => {
    button.addEventListener('click', () => {
        const showtable = document.querySelector('#showTableVisitor')
        showtable.classList.add("show");
    })
})

openVisitorTable.forEach(button => {
    button.addEventListener('click', () => {
        setTimeout(function() {
            const hidetable = document.querySelector('#showTableVisitor')
            hidetable.classList.remove("show");
        }, 5000)
    })
})


// document.getElementsByName("show").addEventListener("click", function() {
//     setTimeout(function() {
//         document.getElementsByClassName("table_result")[0].classList.remove("show");
//         console.log("Bingo");
//     }, 5000)
// });

// Visitors
// document.getElementById("showTableVisitor").addEventListener("click", function(e) {
//     e.preventDefault();
//     document.getElementsByClassName("table_result")[0].classList.add("show");
// });
// console.log('HELLO WORLG');

// document.getElementById("showTableVisitor").addEventListener("click", function() {
//     setTimeout(function() {
//         document.getElementsByClassName("table_result")[0].classList.remove("show");
//         console.log("Bingo");
//     }, 5000)
// });



// // Hide table after some seconds
// function hideTable(hide) {
//     if (hide == null) return
//     setTimeout(function(){
//         hide.classList.remove('show');
//         console.log("Bingo");
//     }, 5000)
// }

