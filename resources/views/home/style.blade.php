<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap');

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    html {
        font-size: 10px;
        font-family: 'Montserrat', sans-serif;
        background-color: white;
        scroll-behavior: smooth;
    }

    a {
        text-decoration: none;
    }

    .container {
        min-height: 100vh;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Header Section */
    .brand h1 {
        font-size: 3rem;
        text-transform: uppercase;
        color: black;
    }

    .brand h1 span {
        color: rgb(221, 144, 0);
    }

    .header {
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100vw;
        height: auto;
        min-height: 8vh;
        background-color: white;
    }

    .scroll-active {
        border-bottom: 0.5px solid #EDEDED;
    }

    .header .nav-bar {
        /*display: flex;*/
        align-items: center;
        justify-content: space-between;
        width: 100%;
        height: 100%;
        max-width: 1300px;
        padding: 0 10px;
    }

    .nav-list {
        list-style: none;
    }

    .nav-list li {
        display: inline-block;
        /*padding: 0px 20px;*/
    }

    .nav-list li a {
        color: black;
        /*font-size: 2rem;*/
    }

    .nav-list li a:hover {
        color: crimson;
    }

    /* Extra small devices (phones, 600px and down) */
    @media only screen and (max-width: 768px) {
        .nav-list li a {
            font-size: 1.75rem;
        }

        .nav-list li {
            padding: 0 3px;
        }
    }

    /* Small devices (portrait tablets and large phones, 600px and up) */
    @media only screen and (min-width: 768px) {
        .header .nav-bar {
            display: flex;
        }

        .nav-list li a {
            font-size: 2rem;
        }

        .nav-list li {
            padding: 0 20px;
        }
    }


    /* End Header Section */
    /* Home Section */
    /*
#home{
}*/
    #home h1 {
        display: block;
        width: fit-content;
        font-size: 5rem;
        position: relative;
        color: transparent;
        animation: text_reveal .5s ease forwards;
        animation-delay: 1s;
    }

    #home h1:nth-child(1) {
        animation-delay: 1s;
    }

    #home h1:nth-child(2) {
        animation-delay: 2s;
    }

    #home h1:nth-child(3) {
        animation: text_reveal_name .5s ease forwards;
        animation-delay: 3s;
    }

    #home h1 span {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 0;
        background-color: crimson;
        animation: text_reveal_box 1s ease;
        animation-delay: .3s;
    }

    #home h1:nth-child(1) span {
        animation-delay: .5s;
    }

    #home h1:nth-child(2) span {
        animation-delay: 1.5s;
    }

    #home h1:nth-child(3) span {
        animation-delay: 2.5s;
    }

    #home .cta {
        display: inline-block;
        padding: 10px 30px;
        color: crimson;
        background-color: transparent;
        border: 2px solid crimson;
        font-size: 2rem;
        text-transform: uppercase;
        letter-spacing: .1rem;
        margin-top: 5px;
        transition: .3s ease;
        transition-property: back;
    }

    #home .cta:hover {
        color: white;
        background-color: crimson;
    }

    /* End Home Section */

    /* Services Section */
    #services {}

    #services .services {
        flex-direction: column;
        text-align: center;
        max-width: 1000px;
        margin: 0 auto;
        padding: 100px 0;
    }

    #services .section-title {
        font-size: 5rem;
        font-weight: 300;
        color: black;
        margin-bottom: 10px;
        text-transform: uppercase;
        letter-spacing: .2rem;
        text-align: center;
    }

    #services .section-title span {
        color: crimson;
    }

    #services .service-top p {
        font-size: 2rem;
        margin-top: 5px;
        margin-bottom: 5px;
        margin-left: 5px;
        margin-right: 5px;
        line-height: 2.5rem;
        font-weight: 300;
        letter-spacing: .05rem;
    }

    #services .service-bottom {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
    }

    #services .service-item {
        flex-basis: 80%;
        display: flex;
        align-items: flex-start;
        text-align: left;
        justify-content: center;
        flex-direction: column;
        padding: 30px;
        border-radius: 10px;
        background-color: rgb(255, 255, 255);
        background-size: cover;
        margin: 10px 5%;
        position: relative;
        z-index: 1;
    }

    #services .service-item p {
        text-align: justify;
        font-size: 1.5rem;
        text-justify: distribute;
        text-align-last: left;
    }

    #services .service-item::after {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        background-color: black;
        border-radius: 7.5px;
        opacity: 0.1;
    }

    /* end services section */

    /* start project section */
    #project {
        padding-top: 50px;
        padding-bottom: 100px;
    }

    #project .project-top {
        flex-direction: column;
        text-align: center;
        max-width: 750px;
        margin: 0 auto;
        padding: 50px 0;
    }

    #project .project-title {
        font-size: 5rem;
        font-weight: 900;
        color: black;
        margin-bottom: 10px;
        text-transform: uppercase;
        letter-spacing: .2rem;
        text-align: center;
        display: inline;
        padding: 0.1em 0.4em;
        border-radius: 0.8em 0.3em;
        background: transparent;
        background-image: linear-gradient(to right,
                rgba(255, 225, 0, 0.1),
                rgba(252, 47, 108, 0.7) 4%,
                rgba(255, 0, 170, 0.3));

    }

    #project .project-top p {
        font-size: 2rem;
        margin-top: 20px;
        margin-bottom: 0px;
        margin-left: 5px;
        margin-right: 5px;
        line-height: 2.5rem;
        font-weight: 300;
        letter-spacing: .05rem;
        text-align: center;
        font-weight: 300;
    }

    #project .project-top mark {
        margin: 0 -0.4em;
        padding: 0.1em 0.4em;
        border-radius: 0.8em 0.3em;
        background: transparent;
        background-image: linear-gradient(to right,
                rgba(255, 225, 0, 0.1),
                rgba(255, 16, 16, 0.7) 4%,
                rgba(248, 74, 127, 0.3));
        -webkit-box-decoration-break: clone;
        box-decoration-break: clone;
    }

    #project .project-bottom {
        box-sizing: border-box;
        position: relative;
        margin: auto;
        width: 650px;
    }

    /*
@media only screen and (max-width: 768px){
    #project .project-bottom{
        max-width: 95%;
    }
}
@media only screen and (min-width: 768px){
    #project .project-bottom{
        max-width: 85%;
    }
}*/
    #project .project-slide {
        width: 100%;
        height: 350px;
        display: grid;
        grid-template-columns: 0.3fr 0.7fr;
        grid-template-rows: 10% 10% 67%;
        gap: 0px 0px;
        grid-template-areas:
            "img ."
            "img h1"
            "img p";
    }

    #project .project-bottom h1 {
        text-align: center;
        margin-left: -15px;
        height: auto;
        grid-area: h1;

        font-size: 2.8rem;
        font-weight: 501;
    }

    #project .project-bottom p {
        grid-area: p;
        margin-top: 0px;
        margin-bottom: 0px;
        margin-left: 25px;
        margin-right: 56px;
        text-align: justify;
        font-size: 1.5rem;
        line-height: 150%;
    }

    #project .project-bottom p a {
        font-size: 1.5rem;
        color: #d10000;
    }

    #project .project-bottom p a:hover {
        background-color: #d10000;
        color: white;
    }

    #project .project-bottom img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: 50% 0;
        grid-area: img;
        border-radius: 10px 0 0 0;
    }

    #project .project-prev,
    .project-next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -22px;
        color: rgb(146, 146, 146);
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
    }

    #project .project-next {
        right: 0;
        border-radius: 3px 0 0 3px;
        border: 2px solid #e2e2e2;
    }

    #project .project-prev:hover,
    .project-next:hover {
        background-color: #bbbbbb;
        color: black;
    }

    #project .project-footer {
        max-width: 750px;
        margin: 0 auto;
        padding-top: 50px;
    }

    #project .project-footer h1 {
        justify-content: center;
        text-align: center;
    }

    #project .project-footer .wrap-project-footer {
        justify-content: center;
        text-align: center;
        display: flex;
        flex-wrap: wrap;
        padding-top: 10px;
    }

    #project .project-footer .wrap-project-footer a {
        width: 100px;
    }

    #project .project-footer .wrap-project-footer a:hover {
        background-color: rgb(255, 190, 203);
    }

    #project .project-footer .wrap-project-footer img {
        height: 60px;
        width: 60px;
    }

    #project .project-footer .wrap-project-footer p {
        font-size: 1.5rem;
        font-weight: 500;
        color: black;
    }

    #project .fade {
        animation-name: fade;
        animation-duration: 1.5s;
    }

    /* end project section */

    /* start project section */
    #about {
        box-sizing: border-box;
        position: relative;
        margin: auto;
        padding-bottom: 100px;
        width: 650px;
        padding-top: 100px;
    }

    #about .about-top {
        text-align: center;
        display: grid;
        padding-right: 10%;
        grid-template-columns: 0.3fr 1.5fr;
        grid-template-rows: 0.1fr 0.2fr 0.6fr 0.1fr;
        gap: 5px 20px;
        grid-template-areas:
            "img ."
            "img h1"
            "img p"
            "img a";
    }

    #about .about-top img {
        grid-area: img;
        margin: auto;
        width: 150px;
        height: 350px;
        object-fit: cover;
        object-position: 50% 0;
        border-radius: 25px 0 0 25px;
    }

    #about .about-top h1 {
        grid-area: h1;
        text-align: center;
        font-size: 4rem;
        font-weight: 501;

        background-image: linear-gradient(120deg, #fa709e 0%, #f81460 100%);
        background-repeat: no-repeat;
        background-size: 60% 0.2em;
        background-position: 50% 88%;
        transition: background-size 0.25s ease-in;
    }

    #about .about-top h1:hover {
        background-size: 100% 0.2em;
    }

    #about .about-top p {
        grid-area: p;
        text-align: justify;
        line-height: 135%;
        font-size: 1.80rem;
        font-weight: 500;
    }

    #about .about-top a {
        grid-area: a;
        color: #f81460;
        background-color: transparent;
        border: 2px solid #f81460;
        font-size: 2rem;
        font-weight: 501;
        text-transform: uppercase;
        letter-spacing: .1rem;
        margin-top: 7px;
        transition: .3s ease;
        transition-property: back;
    }

    #about .about-top a:hover {
        color: white;
        background-image: linear-gradient(120deg, #f81460 0%, #fd0054 100%);

    }

    /* end about section */

    /* start about section */
    #contact {}

    #contact .contact-top {
        width: 550px;
        height: 550px;
        text-align: center;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 25% 25% 20% 25%;
        grid-template-rows: 12% 20% 30% 7%;
        gap: 5px 5px;
        grid-template-areas:
            "head head head head"
            "img1 p p p"
            "textarea textarea textarea textarea"
            ". . img2 send"
    }

    #contact .contact-top .about-title {
        grid-area: head;
        text-align: center;
        font-size: 4rem;
        font-weight: 501;
        text-decoration: underline;
        text-decoration-color: #d10000;
        text-decoration-style: wavy;
    }

    #contact .contact-top .img1 {
        grid-area: img1;
        text-align: right;
    }

    #contact .contact-top .img2 {
        grid-area: img2;
        padding: 0%;
        text-align: right;
        padding-top: 4%;
    }

    #contact .contact-top .send {
        grid-area: send;
        text-align: center;
        color: #8b8b8b;
        background-color: transparent;
        border: 2px solid #8b8b8b;
        border-radius: 5%;
        font-size: 2rem;
        font-weight: 501;
        text-transform: uppercase;
        letter-spacing: .1rem;
        margin-top: 7px;
        transition: .3s ease;
        transition-property: back;

        cursor: pointer;
        outline: none;

    }

    #contact .contact-top .send:hover {
        color: white;
        background-image: linear-gradient(120deg, #979495 0%, #494748 100%);

    }

    #contact .contact-top .send:focus {
        background-image: linear-gradient(120deg, #d81f5d 0%, #fd0983 100%);
    }

    #contact .contact-top p {
        grid-area: p;
        font-size: 2rem;
        margin: 0 auto;
        padding-right: 2%;
        text-align: justify;
    }

    #contact .contact-top .textarea {
        grid-area: textarea;
        background-color: #dddddd;
        color: #666666;
        padding: 1em;
        border-radius: 10px;
        border: 2px solid transparent;
        outline: none;
        font-weight: 500;
        font-size: 16px;
        line-height: 1.4;
        transition: all 0.2s;
    }

    #contact .contact-top .textarea:hover {
        cursor: pointer;
        background-color: #eeeeee;
    }

    #contact .contact-top .textarea:focus {
        cursor: text;
        color: #333333;
        background-color: white;
        border-color: #333333;
    }

    /* end about section */

    /* keyframes */
    @keyframes text_reveal_box {
        50% {
            width: 100%;
            left: 0%;
        }

        100% {
            width: 0%;
            left: 100%;
        }
    }

    @keyframes text_reveal {
        100% {
            color: rgb(71, 71, 71);
        }
    }

    @keyframes text_reveal_name {
        100% {
            color: crimson;
        }
    }

    @keyframes fade {
        from {
            opacity: .4
        }

        to {
            opacity: 1
        }
    }

    /* End keyframes */
</style>
