let display = document.getElementById('display');
let hasResult = false;

function appendToDisplay(value) {
    if (hasResult) {
        display.value = ''; 
        hasResult = false; 
    }

    // Cegah menambah operator di awal
    if (value.match(/[+\-*\/^%]/) && display.value === '') {
        return;
    }

    // Cegah duplikasi titik dalam satu angka
    let lastChar = display.value.slice(-1);
    if (value === '.' && (lastChar === '.' || display.value === '' || /[\+\-\*\/\^%]/.test(lastChar))) {
        return;
    }

    display.value += value;
}

function clearAll() {
    display.value = '';
    hasResult = false;
}

function calculateResult() {
    try {
        if (display.value === '') {
            return;
        }

        // Ganti '^' dengan '**' untuk menghitung pangkat
        let result = eval(display.value.replace('^', '**'));

        display.value = result;

        hasResult = true;
    } catch (error) {
        display.value = 'Error';
    }
}
