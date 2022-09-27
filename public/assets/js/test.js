function setDisplayToForm1(value) {
    document.getElementById("myForm1").style.display = value;
}
function setDisplayToForm2(value) {
    document.getElementById("myForm2").style.display = value;
}
function setDisplayToRequestorForm(value) {
    document.getElementById("requestorForm").style.display = value;
}
function setDisplayToCaoForm(value) {
    document.getElementById("caoForm").style.display = value;
}
function setDisplayToStaffForm(value) {
    document.getElementById("staffForm").style.display = value;
}



function openForm1() {
    event.preventDefault()
    setDisplayToForm1("block");   
}
function closeForm1() {
    setDisplayToForm1("none");
}


function openForm2() {
    event.preventDefault()
    setDisplayToForm2("block");   
}

function closeForm2() {
    setDisplayToForm2("none");
}

//requestor
function openRequestorForm() {
    event.preventDefault()
    setDisplayToRequestorForm("block");   
}

function closeRequestorForm() {
    setDisplayToRequestorForm("none");
}

// CAO
function openCaoForm() {
    event.preventDefault()
    setDisplayToCaoForm("block");   
}

function closeCaoForm() {
    setDisplayToCaoForm("none");
}

// Workstaff
function openStaffForm() {
    event.preventDefault()
    setDisplayToStaffForm("block");   
}

function closeStaffForm() {
    setDisplayToStaffForm("none");
}


