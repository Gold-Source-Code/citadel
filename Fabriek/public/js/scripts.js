function statusCheck(){
    let text = document.querySelector(".status");
    var status = document.querySelector("#statustext");
    if (status = "OPERATIONAL") {
        status.style.color = "green";
        }
    if (status = "BROKEN") {
        status.style.color = "red";
    }
}

function changeIcon() {
    var status1 = "<?php echo $status1; ?>";
    var status2 = "<?php echo $status2; ?>";
    var img1 = document.querySelector("#imageid1");
    var img2 = document.querySelector("#imageid2");
    if (status1 = "OPERATIONAL") {
         img1.src = "icons/status-operational.png";
    }
    if (status1 = "BROKEN") {
         img1.src = "icons/status-broken.png";
    }
    if (status2 = "OPERATIONAL") {
         img2.src = "icons/status-operational.png";
    }
    if (status2 = "BROKEN") {
         img2.src = "icons/status-broken.png";
    }
}