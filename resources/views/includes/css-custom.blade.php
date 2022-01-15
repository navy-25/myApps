<style>
    /* width */
    ::-webkit-scrollbar {
        width: 20px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey;
        border-radius: 10px;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: red;
        border-radius: 10px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #b30000;
    }
    p,small,label{
        color: #797979;
        }
    html,body{
        background: linear-gradient(90deg, #0065FE 7.71%, #0054D2 92.8%);
    }
    .form-login{
        /* background-image: url("assets/img/bg-login-form.png");
        background-position: center;
        background-repeat: no-repeat; */
        /* background-size: cover; */
        padding: 0;
        background-color: white;
        border-radius:   0px  10px 10px 0px;
    }
    .header-login{
        min-height:  15%;
        /* background-color:red */
    }
    .body-login{
        min-height: 70%;
        /* background-color:blue */
    }
    .footer-login{
        min-height: 15%;
        /* background-color:green */
    }

    .header-text{
        font-weight: bold;
        color: #1a3957;
    }

    .form-control{
        border-radius: 10px;
        padding-left:20px;
        padding-right:20px;
        padding-top:10px;
        padding-bottom:10px;
        color: #3a3a3a;
    }

    .form-control:focus{
        color: #3a3a3a;
        background-color: #fff;
        border-color: #3787ff;
        outline: 0;
        box-shadow: 0 0 0 0.15rem rgb(229, 228, 255);
    }

    .form-check-input:checked {
        background-color: #0065FE;
        border-color: #0065FE;
    }
    .form-check-input:active, .form-check-input:focus{
        border-color: #3787ff !important;
        outline: 0 !important;
        box-shadow: 0 0 0 0.15rem rgb(229, 228, 255) !important;
    }

    .form-label{
        font-weight: 600;
        color: #3a3a3a;
    }

    .btn {
        padding: .5rem 3rem;
        font-size: 0.9rem;
        font-weight: 600;
    }
    .btn-primary {
        color: #fff;
        /* background-color: #0065FE; */
        background-color: #0065FE;
        border-color: #0065FE;
    }
    .btn-primary:active, .btn-primary:focus{
        border-color: #3787ff !important;
        outline: 0 !important;
        box-shadow: 0 0 0 0.15rem rgb(229, 228, 255) !important;
    }
    .text-apps{
        color:#0065FE;
    }
    @media (min-width: 560px) and (max-width: 750px) {
        .banner-login ,.footer-login, .header-login{
            display: none;
        }
        .form-login{
            background: linear-gradient(90deg, #0065FE 7.71%, #0054D2 92.8%);
        }
        .body-login{
            margin-top:4%;
        }
        .header-text, .form-label,.form-check-label,.text-apps,p{
            color: white;
        }
    }
    @media (max-width: 560px) {
        .banner-login{
            display: none;
        }
    }
</style>
