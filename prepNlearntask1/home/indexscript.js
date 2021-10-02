function menuBr(i) {
    S1 = document.getElementById("s1");

    buller = document.getElementById("buller");
    S2 = document.getElementById("s2");

    if (i == 1) {

        S2.style.right = 0 + "px";
        buller.style.display = "block";
        S1.style.display = "none";

    } else if (i == 0) {
        S2.style.right = -100 + "%";
        buller.style.display = "none";
        S1.style.display = "block";
    }
}