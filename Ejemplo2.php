<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="styles/menu_2.css" />
    <link rel="stylesheet" href="styles/form.css" />
    <link rel="stylesheet" href="styles/fonts.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <style>
        /* From Uiverse.io by joe-watson-sbf */
        .card {
            width: 190px;
            height: 120px;
            transition: all .5s;
            box-shadow: 15px 15px 30px rgba(25, 25, 25, 0.11), -15px -15px 30px rgba(60, 60, 60, 0.082);
            text-align: center;
            overflow: hidden;
            margin-left: 30px;
        }

            .card:hover {
                height: 260px;
                background: linear-gradient(360deg, #edededc5 60%, hsla(0, 0%, 13%, 1) 70%);
            }

            .card .header {
                padding: 20px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                background: #212121;
                margin-bottom: 16px;
            }

                .card .header .img-box {
                    width: 50px;
                }

                .card .header .title {
                    font-size: 1em;
                    letter-spacing: .1em;
                    font-weight: 900;
                    text-transform: uppercase;
                    padding: 4px 0 14px 0;
                    transition: all .5s;
                    color: #edededc5;
                }

            .card:hover .header {
                clip-path: polygon(0 0, 100% 0, 100% 100%, 0 96%);
            }

            .card:hover .card .header .title {
                padding: 0;
            }

            .card .content {
                display: block;
                text-align: left;
                color: #212121;
                margin: 0 18px;
            }

                .card .content p {
                    transition: all .5s;
                    font-size: .8em;
                    margin-bottom: 8px;
                }

                .card .content a {
                    color: #1d8122;
                    cursor: pointer;
                    transition: all .5s;
                    font-size: .7rem;
                    font-weight: 700;
                    text-transform: uppercase;
                }

                .card .content .btn-link:hover {
                    border-bottom: 1px solid #1d8122;
                }
                .row>*{
                    padding-left: 0 !important;
                    padding-right: 0 !important;
                }

                /* */

        /* From Uiverse.io by Creatlydev */
        .card1 {
            width: min(300px, 100%);
            margin: auto;
            background-color: #f4f5f2;
            text-align: center;
            border-top-left-radius: 4rem;
            border: 2px solid #fff;
            position: relative;
        }

            .card1::before {
                content: "";
                position: absolute;
                height: 30px;
                width: 120px;
                background-color: #393e7f;
                top: 32px;
                right: -2.5px;
                -webkit-clip-path: polygon(10% 0, 100% 0, 100% 100%, 0 100%);
                clip-path: polygon(10% 0, 100% 0, 100% 100%, 0 100%);
            }

        .card__body {
            padding: 2rem 1.5rem;
            max-width: 25ch;
            margin: auto;
        }

        .card__title {
            font-weight: 800;
            color: #121513;
            font-size: 1.25rem;
            margin-block: 1.5rem 0.75rem;
        }

        .card__paragraph {
            color: #303830;
            font-size: 0.875rem;
        }

        .card__ribbon {
            margin-top: 1.5rem;
            display: grid;
            place-items: center;
            height: 50px;
            background-color: #393e7f;
            position: relative;
            width: 110%;
            left: -5%;
            top: 10px;
            position: relative;
            border-radius: 0 0 2rem 2rem;
        }

            .card__ribbon::after,
            .card__ribbon::before {
                content: "";
                position: absolute;
                width: 20px;
                aspect-ratio: 1/1;
                bottom: 100%;
                z-index: -2;
                background-color: #191c39;
            }

            .card__ribbon::before {
                left: 0;
                transform-origin: left bottom;
                transform: rotate(45deg);
            }

            .card__ribbon::after {
                right: 0;
                transform-origin: right bottom;
                transform: rotate(-45deg);
            }

        .card__ribbon-label {
            display: block;
            width: 84px;
            aspect-ratio: 1/1;
            background-color: #fff;
            position: relative;
            transform: translateY(-50%);
            border-radius: 50%;
            border: 8px solid #393e7f;
            display: grid;
            place-items: center;
            font-weight: 900;
            line-height: 1;
            font-size: 1.5rem;
        }

            .card__ribbon-label::before,
            .card__ribbon-label::after {
                content: "";
                position: absolute;
                width: 25px;
                height: 25px;
                bottom: 50%;
            }

            .card__ribbon-label::before {
                right: calc(100% + 4px);
                border-bottom-right-radius: 20px;
                box-shadow: 5px 5px 0 #393e7f;
            }

            .card__ribbon-label::after {
                left: calc(100% + 4px);
                border-bottom-left-radius: 20px;
                box-shadow: -5px 5px 0 #393e7f;
            }

            /* */

        /* From Uiverse.io by yashlikescode */
        .card2 {
            position: relative;
            width: 300px;
            height: 200px;
            background: linear-gradient(-45deg, #f89b29 0%, #ff0f7b 100%);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
            margin-left: 60px;
        }

            .card2 svg {
                width: 48px;
                fill: #333;
                transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
            }

            .card2:hover {
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            }

        .card__content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            height: 100%;
            padding: 20px;
            box-sizing: border-box;
            background-color: #fff;
            opacity: 0;
            transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
        }

        .card2:hover .card__content {
            transform: translate(-50%, -50%) rotate(0deg);
            opacity: 1;
        }

        .card__title {
            margin: 0;
            font-size: 24px;
            color: #333;
            font-weight: 700;
        }

        .card__description {
            margin: 10px 0 0;
            font-size: 14px;
            color: #777;
            line-height: 1.4;
        }

        .card2:hover svg {
            scale: 0;
        }


    </style>
</head>
<body style="background-color: lightgray;">
    <?php include("secciones/menu_2.php"); ?>

    <section style="height: 300px; padding-top: 100px;">
        <div class="container text-center text-md-start mt-5">
            <div class="row mt-3">
                <div class="card">
                    <div class="header">
                        <div class="img-box">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M20.083 15.2l1.202.721a.5.5 0 0 1 0 .858l-8.77 5.262a1 1 0 0 1-1.03 0l-8.77-5.262a.5.5 0 0 1 0-.858l1.202-.721L12 20.05l8.083-4.85zm0-4.7l1.202.721a.5.5 0 0 1 0 .858L12 17.65l-9.285-5.571a.5.5 0 0 1 0-.858l1.202-.721L12 15.35l8.083-4.85zm-7.569-9.191l8.771 5.262a.5.5 0 0 1 0 .858L12 13 2.715 7.429a.5.5 0 0 1 0-.858l8.77-5.262a1 1 0 0 1 1.03 0zM12 3.332L5.887 7 12 10.668 18.113 7 12 3.332z" fill="rgba(66,193,110,1)"></path>
                            </svg>
                        </div>
                        <span class="title">Features
                    </span></div>

                    <div class="content">
                        <p>
                            Lorem ipsum dolor sit tali amet, consectus uy
                            adipiscing it amet it...
                        </p>

                        <a class="btn-link">Read More...</a>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <div class="img-box">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M20.083 15.2l1.202.721a.5.5 0 0 1 0 .858l-8.77 5.262a1 1 0 0 1-1.03 0l-8.77-5.262a.5.5 0 0 1 0-.858l1.202-.721L12 20.05l8.083-4.85zm0-4.7l1.202.721a.5.5 0 0 1 0 .858L12 17.65l-9.285-5.571a.5.5 0 0 1 0-.858l1.202-.721L12 15.35l8.083-4.85zm-7.569-9.191l8.771 5.262a.5.5 0 0 1 0 .858L12 13 2.715 7.429a.5.5 0 0 1 0-.858l8.77-5.262a1 1 0 0 1 1.03 0zM12 3.332L5.887 7 12 10.668 18.113 7 12 3.332z" fill="rgba(66,193,110,1)"></path>
                            </svg>
                        </div>
                        <span class="title">Features
                    </span></div>

                    <div class="content">
                        <p>
                            Lorem ipsum dolor sit tali amet, consectus uy
                            adipiscing it amet it...
                        </p>

                        <a class="btn-link">Read More...</a>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <div class="img-box">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M20.083 15.2l1.202.721a.5.5 0 0 1 0 .858l-8.77 5.262a1 1 0 0 1-1.03 0l-8.77-5.262a.5.5 0 0 1 0-.858l1.202-.721L12 20.05l8.083-4.85zm0-4.7l1.202.721a.5.5 0 0 1 0 .858L12 17.65l-9.285-5.571a.5.5 0 0 1 0-.858l1.202-.721L12 15.35l8.083-4.85zm-7.569-9.191l8.771 5.262a.5.5 0 0 1 0 .858L12 13 2.715 7.429a.5.5 0 0 1 0-.858l8.77-5.262a1 1 0 0 1 1.03 0zM12 3.332L5.887 7 12 10.668 18.113 7 12 3.332z" fill="rgba(66,193,110,1)"></path>
                            </svg>
                        </div>
                        <span class="title">Features
                    </span></div>

                    <div class="content">
                        <p>
                            Lorem ipsum dolor sit tali amet, consectus uy
                            adipiscing it amet it...
                        </p>

                        <a class="btn-link">Read More...</a>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <div class="img-box">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M20.083 15.2l1.202.721a.5.5 0 0 1 0 .858l-8.77 5.262a1 1 0 0 1-1.03 0l-8.77-5.262a.5.5 0 0 1 0-.858l1.202-.721L12 20.05l8.083-4.85zm0-4.7l1.202.721a.5.5 0 0 1 0 .858L12 17.65l-9.285-5.571a.5.5 0 0 1 0-.858l1.202-.721L12 15.35l8.083-4.85zm-7.569-9.191l8.771 5.262a.5.5 0 0 1 0 .858L12 13 2.715 7.429a.5.5 0 0 1 0-.858l8.77-5.262a1 1 0 0 1 1.03 0zM12 3.332L5.887 7 12 10.668 18.113 7 12 3.332z" fill="rgba(66,193,110,1)"></path>
                            </svg>
                        </div>
                        <span class="title">Features
                    </span></div>

                    <div class="content">
                        <p>
                            Lorem ipsum dolor sit tali amet, consectus uy
                            adipiscing it amet it...
                        </p>

                        <a class="btn-link">Read More...</a>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <div class="img-box">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M20.083 15.2l1.202.721a.5.5 0 0 1 0 .858l-8.77 5.262a1 1 0 0 1-1.03 0l-8.77-5.262a.5.5 0 0 1 0-.858l1.202-.721L12 20.05l8.083-4.85zm0-4.7l1.202.721a.5.5 0 0 1 0 .858L12 17.65l-9.285-5.571a.5.5 0 0 1 0-.858l1.202-.721L12 15.35l8.083-4.85zm-7.569-9.191l8.771 5.262a.5.5 0 0 1 0 .858L12 13 2.715 7.429a.5.5 0 0 1 0-.858l8.77-5.262a1 1 0 0 1 1.03 0zM12 3.332L5.887 7 12 10.668 18.113 7 12 3.332z" fill="rgba(66,193,110,1)"></path>
                            </svg>
                        </div>
                        <span class="title">Features
                    </span></div>

                    <div class="content">
                        <p>
                            Lorem ipsum dolor sit tali amet, consectus uy
                            adipiscing it amet it...
                        </p>

                        <a class="btn-link">Read More...</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="height: 550px; padding-top: 100px;">
        <div class="container text-center text-md-start mt-5">
            <div class="row mt-3">
                <div class="card1">
                  <div class="card__body">
                    <div class="card__icon">
                      <svg
                        height="32"
                        width="32"
                        stroke="currentColor"
                        stroke-width="1.5"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25"
                          stroke-linejoin="round"
                          stroke-linecap="round"
                        ></path>
                      </svg>
                    </div>

                    <p class="card__title">Abstract Design</p>
                    <p class="card__paragraph">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus
                      perferendis eaque dolore repellat numquam. Dolores.
                    </p>
                  </div>

                  <div class="card__ribbon">
                    <label class="card__ribbon-label">01</label>
                  </div>
                </div>
                <div class="card1">
                  <div class="card__body">
                    <div class="card__icon">
                      <svg
                        height="32"
                        width="32"
                        stroke="currentColor"
                        stroke-width="1.5"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25"
                          stroke-linejoin="round"
                          stroke-linecap="round"
                        ></path>
                      </svg>
                    </div>

                    <p class="card__title">Abstract Design</p>
                    <p class="card__paragraph">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus
                      perferendis eaque dolore repellat numquam. Dolores.
                    </p>
                  </div>

                  <div class="card__ribbon">
                    <label class="card__ribbon-label">01</label>
                  </div>
                </div>
                <div class="card1">
                  <div class="card__body">
                    <div class="card__icon">
                      <svg
                        height="32"
                        width="32"
                        stroke="currentColor"
                        stroke-width="1.5"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25"
                          stroke-linejoin="round"
                          stroke-linecap="round"
                        ></path>
                      </svg>
                    </div>

                    <p class="card__title">Abstract Design</p>
                    <p class="card__paragraph">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus
                      perferendis eaque dolore repellat numquam. Dolores.
                    </p>
                  </div>

                  <div class="card__ribbon">
                    <label class="card__ribbon-label">01</label>
                  </div>
                </div>
            </div>
        </div>
    </section>
    <section style="height: 400px; padding-top: 100px;">
        <div class="container text-center text-md-start mt-5">
            <div class="row mt-3">
                <div class="card2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                      d="M20 5H4V19L13.2923 9.70649C13.6828 9.31595 14.3159 9.31591 14.7065 9.70641L20 15.0104V5ZM2 3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934ZM8 11C6.89543 11 6 10.1046 6 9C6 7.89543 6.89543 7 8 7C9.10457 7 10 7.89543 10 9C10 10.1046 9.10457 11 8 11Z"
                    ></path>
                  </svg>
                  <div class="card__content">
                    <p class="card__title">Card Title</p>
                    <p class="card__description">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                      veniam, quis nostrud exercitation ullamco.
                    </p>
                  </div>
                </div>
                <div class="card2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                      d="M20 5H4V19L13.2923 9.70649C13.6828 9.31595 14.3159 9.31591 14.7065 9.70641L20 15.0104V5ZM2 3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934ZM8 11C6.89543 11 6 10.1046 6 9C6 7.89543 6.89543 7 8 7C9.10457 7 10 7.89543 10 9C10 10.1046 9.10457 11 8 11Z"
                    ></path>
                  </svg>
                  <div class="card__content">
                    <p class="card__title">Card Title</p>
                    <p class="card__description">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                      veniam, quis nostrud exercitation ullamco.
                    </p>
                  </div>
                </div>
                <div class="card2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                      d="M20 5H4V19L13.2923 9.70649C13.6828 9.31595 14.3159 9.31591 14.7065 9.70641L20 15.0104V5ZM2 3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934ZM8 11C6.89543 11 6 10.1046 6 9C6 7.89543 6.89543 7 8 7C9.10457 7 10 7.89543 10 9C10 10.1046 9.10457 11 8 11Z"
                    ></path>
                  </svg>
                  <div class="card__content">
                    <p class="card__title">Card Title</p>
                    <p class="card__description">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                      veniam, quis nostrud exercitation ullamco.
                    </p>
                  </div>
                </div>
            </div>
        </div>
    </section>

    <?php include("secciones/email.php"); ?>
    <?php include("secciones/footer.php"); ?>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script type="text/javascript" src="lib/form.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
            integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</body>
</html>