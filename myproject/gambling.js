function num1_span() {
    let first = document.getElementById("first");
    let num = Math.floor(Math.random() * 3);
    first.innerHTML = num;
}

function num2_span() {
    let second = document.getElementById("second");
    let num = Math.floor(Math.random() * 3);
    second.innerHTML = num;
}

function num3_span() {
    let third = document.getElementById("third");
    let num = Math.floor(Math.random() * 3);
    third.innerHTML = num;

    if (first.innerHTML == second.innerHTML && second.innerHTML == third.innerHTML) {
        let rs1 = document.getElementById("result");
        rs1.innerHTML = "Success(click here to do again)"
        rs1.style.color = "mediumslateblue";
    } else {
        let rs2 = document.getElementById("result");
        rs2.innerHTML = "fail(click here to do again)"
        rs2.style.color = "mediumslateblue";
    }
}

function again() {
    document.getElementById("result").innerHTML = " ";
    document.getElementById("first").innerHTML = 0;
    document.getElementById("second").innerHTML = 0;
    document.getElementById("third").innerHTML = 0;
}