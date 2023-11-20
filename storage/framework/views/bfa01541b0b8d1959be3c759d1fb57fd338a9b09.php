<style>
    body {
    margin: 0;
}

* {
    font-family: 'Arsenal', sans-serif;
}

/* hide eye in edge browser */
input::-ms-reveal,
input::-ms-clear {
  display: none;
}

/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}

.container-fluid {
    padding-left: 30px!important;
    padding-right: 30px!important;
}

.sec-1 {
    background-image: url(../../../../public/assets/asset/images/img-01.png);
    background-size:cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 86vh;
}

.bg-img {
    padding-top: 2rem;
}

.row {
     --bs-gutter-x: 0rem;
}

.sec-row-4 {
    display: flex;
    flex-direction: row;
    justify-content: space-evenly;
}

.sec-4-header {
    color: #157C92;
}

.sec-4 {
    background-color: #F3F8F9;
}

.card {
    border-radius: 25px;
}

.sec-1-h1 {
    font-size: 50px;
}

.card-img img {
    width: 40%!important;
}

.btn-sec-1 {
    width: 420px;
    background-color: #157C92;
    border-radius: 100px;
    border: 0;
}

.sec-3-col {
    background-color: #F3F8F9;
    border-radius: 10px;
}

.desktop-hide {
    display: none;
}

.form-user-input {
    border-top: 0px!important;
    border-left: 0px!important;
    border-right: 0px!important;
    border-color: black!important;
    border-radius: 0!important;
}

.file-upload {
    border-radius: 30px!important;
    background-color: #157C92!important;
    color: #fff!important;
    padding: 0.8rem!important;
    width: 150px;
    text-align: center;
    cursor: pointer;
}

.form-check-input {
    border-color: #000;
}

.form-check-label {
    font-size: 14px!important;
}

.submit-btn {
    border-radius: 30px!important;
    background-color: #157C92!important;
    color: #fff!important;
}

#sec5-1 {
    display: none;
}

#sec5-2 {
    display: none;
}

#sec5-3 {
    display: none;
}

#t-c {
    display: none;
}

#t-cc {
    display: none;
}

#second-q {
    display: none;
}

.mob-btn {
    border-radius: 30px!important;
    background-color: #157C92!important;
    color: #fff!important;
    width: 200px;
}

.footer-a {
    color: white;
    text-decoration: none;
    padding: 5px;
}

.input-group-text {
    border-top: 1px solid black!important;
    border-bottom: 1px solid black!important;
    border-right: 1px solid black!important;
    border-left: 1px solid black!important;
    border-radius: 10px!important;
    background-color: #E0E0E0!important;
}

.textArea2 {
    display: none;
    color: rgba(0, 0, 0, 0.651);
    font-size: 12px;
    padding: 15px;
    border: 2px solid #1192ae;
    border-radius: 10px;
    background-color: #1191ae48;
    width: 95%;
    text-align: left;
}


.input-otp {
    width: 50px;
    height: 50px;
    margin: 20px;
    border-top-right-radius: 10px!important;
    border-top-left-radius: 10px!important;
    border-bottom-right-radius: 10px!important;
    border-bottom-left-radius: 10px!important;
    background-color: #E0E0E0;
    border: 0;
}

#view-form {
    display: none;
}

@media  screen and (max-width: 576px) {
    .sec-3-col-1 {
        text-align: center!important;
    }
    .sec-3-col-1-1 {
        text-align: center!important;
    }
    .mobile-footer {
        text-align: center!important;
        padding: 10px;
    }

    .form-control {
        font-size: 14px!important;
    }
   
}
@media  screen and (max-width: 426px) {
    .sec-1-h1 {
        font-size: 30px!important;
    }
    .btn-sec-1 {
        width: 200px!important;
        font-size: 15px!important;
    }
    .bg-img {
        padding-top: 0rem;
    }

    .tps-logo {
        width: 60%;
    }
    
    .nav-text {
        font-size: 14px!important;
    }

    .container-fluid {
        padding-left: 15px!important;
        padding-right: 15px!important;
    }

    .file-upload {
        width: 130px!important;
        font-size: 12px;
    }

    .input-otp {
        margin: 10px!important;
    }
}

@media  screen and (max-width: 768px) {
    
    .desktop-hide {
        display: block;
    }
    .sec-3-col-1 {
        text-align: center!important;
        margin-top: 30px;
        margin-bottom: 30px;
    }

    .sec-3-col-1-1 {
        text-align: center!important;
        margin-bottom: 30px;
    }

    .mobile-hide {
        display: none;
    }
    .sec-1-h1 {
        font-size: 40px;
    }
    .btn-sec-1 {
        width: 250px!important;
        font-size: 15px!important;
    }
    .bg-img {
        padding-top: 0rem;
    }
    .container-fluid {
        display: flex!important;
        flex-wrap: nowrap!important;
        align-items: center!important;
        justify-content: space-between!important;
        flex-direction: row!important;
    }

    .mob-btn {
        width: 100px;
        font-size: 14px;
    }
}
</style>