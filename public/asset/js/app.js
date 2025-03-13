function showSidebar(){
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = 'flex'
}

function hideSidebar(){
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = 'none'
}

function showProduct() {
    const productList = document.getElementById('productList');
    productList.classList.toggle('hidden');
}

function showDeposit() {
    const productList = document.getElementById('depositList');
    productList.classList.toggle('hidden');
}

function showMenu() {
    const productList = document.getElementById('menuList');
    productList.classList.toggle('hidden');
}
function showTransaction() {
    const productList = document.getElementById('transactionList');
    productList.classList.toggle('hidden');
}


function showPopup() {
    document.getElementById("popup").style.display = "block";
    document.getElementById("overlay").style.display = "block";
}

function closePopup() {
    document.getElementById("popup").style.display = "none";
    document.getElementById("overlay").style.display = "none";
}
