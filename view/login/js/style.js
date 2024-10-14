const phone = document.getElementById('telephone')
const password = document.getElementById('password')
const form = document.querySelector('form')

// show input error message
function showError(input, message) {
    const formControl = input.parentElement
    formControl.className = 'form-group error'
    const small = formControl.querySelector('small')
    small.innerText = message
}

// show success outline:
function showSuccess(input) {
    const formControl = input.parentElement
    formControl.className = 'form-group success'
    const small = formControl.querySelector('small')
    small.innerText = ''
}

// check length
function checkLength(input, min, max) {
    if (input.value.length < min) {
        showError(input, `${getFieldName(input)} must be at least ${min} characters`);
        return false;
    } else if (input.value.length > max) {
        showError(input, `${getFieldName(input)} must be less than ${max} characters`);
        return false;
    } else {
        showSuccess(input);
        return true;
    }
}

// function to get field name
function getFieldName(input) {
    return input.id.charAt(0).toUpperCase() + input.id.slice(1)
}

// Event listener for form submit
form.addEventListener('submit', function(e) {
    // Biến này sẽ theo dõi xem có lỗi hay không
    let hasError = false

    // Kiểm tra độ dài của telephone và password
    if (!checkLength(phone, 10, 15)) {
        hasError = true;
    }
    if (!checkLength(password, 6, 25)) {
        hasError = true;
    }

    // Nếu có lỗi, ngăn form gửi đi
    if (hasError) {
        e.preventDefault();
    }
})
