<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <title>HP Hotels</title>
    <style>
        * {
            font-family: "Roboto", sans-serif;
        }

        .h-font {
            font-family: "Merienda", cursive;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
            <div class="container">
                <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">HT Watch</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation shadow-none">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="list_dm.php">Danh Mục</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-2" href="list_sp.php">Sản Phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-2" href="list_dt.php">Đơn Hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-2" href="list_nd.php">Người Dùng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Trợ Giúp</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container mt-3">
        <h2 class="text-center text-danger display-4 custom-font">TRANG DANH SÁCH SẢN PHẨM</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID </th>
                    <th>TÊN DANH MỤC</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $i < 20; $i++) {
                    echo '<tr>
              <td>1</td>
              <td>kem đánh răng</td>
              <td>
                <a class="btn btn-danger" href="#" onclick="return confirm(\'Bạn có chắc chắn muốn xóa mục này không?\');">xóa</a>
                <a class="btn btn-warning" href="#">chi tiết</a>
                <a class="btn btn-info" href="#">sửa</a>
              </td>
          </tr>';
                }
                ?>

            </tbody>
        </table>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>