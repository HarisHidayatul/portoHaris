<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("project-slide");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex - 1].style.display = "grid";
    }

    function saveCommentToFile() {
        let btn = document.getElementById("cmntBtn");
        let txtFill = document.getElementById("textareaa");

        btn.textContent = "Sended";
        //btn.textContent = txtFill.value;
        btn.style.backgroundColor = "green";
        btn.style.color = "white";
        btn.disabled = 'disabled';
        btn.style.pointerEvents = "none";

        var xhReq = new XMLHttpRequest();
        xhReq.open("GET", "https://www.harishidayatulloh.my.id/index.php?notes=" + txtFill.value, false);
        xhReq.send(null);
        var serverResponse = xhReq.responseText;

    }
</script>
