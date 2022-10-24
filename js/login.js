if (localStorage.getItem("users")) {
    var users = JSON.parse(localStorage.getItem("users"))

} else {
    var users = []
    localStorage.setItem("users", JSON.stringify(users))
}

// UTIULS
function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

function sucessModal(icon, message) {
    Swal.fire({
        position: 'top-end',
        icon: icon,
        title: message,
        showConfirmButton: false,
        timer: 1500
    })
}


// LOGIN 
function login() {

    var user = document.getElementById("user").value
    var pass = document.getElementById("pass").value

    const result = users.find((item) => {
        return item.name === user && item.pass === pass
    })

    if (result == undefined || user.trim() == "" || pass.trim() == "") {
        sucessModal('error', 'Empty or wrong credentials')
    }

    else {

        var codigo = getRandomInt(999999, 999999999)

        localStorage.setItem("usur", result.name)
        localStorage.setItem("codigo", codigo)
        localStorage.setItem("status", result.status)

        sucessModal('success', 'Successfully logged in')

        setTimeout(function () {
            window.location.href = 'pages/home.php'
        }, 1750)

        return result
    }
}


function createUser() {

    Swal.fire({
        title: 'Register',
        html:
            '<input  placeholder="Enter the user"  id="swal-input1" class="swal2-input">' +
            '<input  placeholder="Enter the password" id="swal-input2" class="swal2-input">',
        confirmButtonText: "Create",
        preConfirm: function () {
            return new Promise(function (resolve) {

                if ($('#swal-input1').val().trim() == '' && $('#swal-input2').val().trim() == '') sucessModal("error", "empty credentials")
                else {
                    users.push({ name: $('#swal-input1').val(), "pass": $('#swal-input2').val(), status: 1 })
                    resolve([
                        $('#swal-input1').val(),
                        $('#swal-input2').val()
                    ])
                }

            })
        },
    }).then(function (result) {
        localStorage.setItem("users", JSON.stringify(users))

        sucessModal('success', 'User created successfully')
    }).catch(swal.noop)
}