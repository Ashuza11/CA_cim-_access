const ShowTableData = document.querySelectorAll('[data-table-target]');
const hideTableData = document.querySelectorAll('[data-table-target]');

ShowTableData.forEach(button => {
    button.addEventListener('click', () => {
        const table = document.querySelector(button.dataset.tableTarget);
        showTable(table);
    })
})


hideTableData.forEach(button => {
    button.addEventListener('click', () => {
        // const form = button.closest('.form')
        const hide =document.querySelector('#show');
        hideTable(hide);
    })
})


// Show table
function showTable(table) {
    if (table == null) return
    table.classList.add('show');
    // table.classList.add('showStudent');
}

console.log('HELLO WORLG')
// Hide table after some seconds
function hideTable(hide) {
    if (hide == null) return
    setTimeout(function(){
        hide.classList.remove('show');
        console.log("Bingo");
    }, 5000)
}

