<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .card-body {
        transition: transform .10s;
    }

    svg:hover {
        -ms-transform: scale(1.1);
        /* IE 9 */
        -webkit-transform: scale(1.1);
        /* Safari 3-8 */
        transform: scale(1.1);
    }
</style>

<body>
    @include('layout.navbar')
    <div class="container">
        <BR>
        <BR>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card text-bg-success mb-3" style="max-width: 23rem; width:19rem">
                        <div class="card-body">
                            <h5 class="card-title" style="position:">{{ $count }}</h5>

                            <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" fill="currentColor"
                                class="bi bi-archive-fill position-absolute top-0 end-0  me-3 mt-3" viewBox="0 0 16 16">
                                <path
                                    d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1M.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8z" />
                            </svg>
                            <p class="card-text">Jumlah Produk</p>
                        </div>
                        <div class="card-footer bg-border" style="background-color: rgb(19 94 60)"><a
                                class="icon-link icon-link-hover link-light  link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0"
                                href="{{ 'data-produk' }}">
                                more info <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                                </svg>
                            </a></div>
                    </div>
                </div>
                <div class="col">
                    <div class="col">
                        <div class="card text-bg-danger mb-3" style="max-width: 23rem; width:19rem">
                            <div class="card-body">
                                <h5 class="card-title">{{ $jumlah }} </h5>
                                <svg xmlns="http://www.w3.org/2000/svg" width="65" height="63"
                                    fill="currentColor"
                                    class="bi bi-basket3-fill position-absolute top-0 end-0  me-3 mt-3"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM2.468 15.426.943 9h14.114l-1.525 6.426a.75.75 0 0 1-.729.574H3.197a.75.75 0 0 1-.73-.574z" />
                                </svg>
                                <p class="card-text">Produk Terjual</p>
                            </div>
                            <div class="card-footer bg-border" style="background-color: rgb(153 34 45)"><a
                                    class="link-light  link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0"
                                    href="{{ 'data-penjualan' }}">
                                    more info <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="col">
                        <div class="card text-bg-success mb-3" style="max-width: 23rem; width:19rem">
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <p class="card-text"></p>
                            </div>
                            <div class="card-footer bg-border-success"><a
                                    class="link-light  link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0"
                                    href="#">
                                    more info <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="col">
                        <div class="card text-bg-success mb-3" style="max-width: 23rem; width:19rem">
                            <div class="card-body">
                                <h5 class="card-title">Success card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of
                                    the card's content.</p>
                            </div>
                            <div class="card-footer bg-border-success"><a
                                    class="link-light  link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0"
                                    href="#">
                                    more info <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
